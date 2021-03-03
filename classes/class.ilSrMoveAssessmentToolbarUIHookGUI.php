<?php

require_once __DIR__ . "/../vendor/autoload.php";

use srag\DIC\SrMoveAssessmentToolbar\DICTrait;

/**
 * Class ilSrMoveAssessmentToolbarUIHookGUI
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ilSrMoveAssessmentToolbarUIHookGUI extends ilUIHookPluginGUI
{

    use DICTrait;

    const INIT = "init";
    const PLUGIN_CLASS_NAME = ilSrMoveAssessmentToolbarPlugin::class;
    const TEMPLATE_GET = "template_get";
    const TEST_TEMPLATE_ID = "Modules/Test/tpl.il_as_tst_output.html";
    /**
     * @var bool[]
     */
    protected static $load = [];


    /**
     * ilSrMoveAssessmentToolbarUIHookGUI constructor
     */
    public function __construct()
    {

    }


    /**
     * @inheritDoc
     */
    public function getHTML(/*string*/ $a_comp, /*string*/ $a_part, /*array*/ $a_par = []) : array
    {
        if (!self::$load[self::INIT]) {

            if (self::dic()->ctrl()->getCmdClass() === strtolower(ilTestPlayerFixedQuestionSetGUI::class)
                && self::dic()->ctrl()->getCmd() === "showQuestion"
            ) {

                if ($a_par["tpl_id"] === self::TEST_TEMPLATE_ID/* && $a_part === self::TEMPLATE_GET*/) {

                    self::$load[self::INIT] = true;

                    $html = $a_par["html"];

                    $container_start_pos = stripos($html, "<!-- BEGIN test_nav_toolbar -->");
                    if ($container_start_pos !== false) {
                        $html = substr($html, 0, ($container_start_pos - 1)) . file_get_contents(__DIR__
                                . "/../templates/test_toolbar_container_start.html") . substr($html, $container_start_pos);

                        $container_end_pos = stripos($html, "<!-- BEGIN closeform -->");
                        if ($container_end_pos !== false) {
                            $html = substr($html, 0, ($container_end_pos - 1)) . file_get_contents(__DIR__
                                    . "/../templates/test_toolbar_container_end.html") . substr($html, $container_end_pos);

                            self::dic()->ui()->mainTemplate()->addCss(self::plugin()->directory() . "/css/srmoasto.css");

                            return ["mode" => self::REPLACE, "html" => $html];
                        }
                    }
                }
            }
        }

        return parent::getHTML($a_comp, $a_part, $a_par);
    }
}
