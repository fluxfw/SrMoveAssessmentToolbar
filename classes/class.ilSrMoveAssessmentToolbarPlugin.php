<?php

require_once __DIR__ . "/../vendor/autoload.php";

use srag\DIC\SrMoveAssessmentToolbar\DICTrait;

/**
 * Class ilSrMoveAssessmentToolbarPlugin
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ilSrMoveAssessmentToolbarPlugin extends ilUserInterfaceHookPlugin
{

    use DICTrait;
    const PLUGIN_ID = "srmoasto";
    const PLUGIN_NAME = "SrMoveAssessmentToolbar";
    const PLUGIN_CLASS_NAME = self::class;
    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * @return self
     */
    public static function getInstance() : self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    /**
     * ilSrMoveAssessmentToolbarPlugin constructor
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return string
     */
    public function getPluginName() : string
    {
        return self::PLUGIN_NAME;
    }
}
