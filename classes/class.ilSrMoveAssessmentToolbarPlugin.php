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

    const PLUGIN_CLASS_NAME = self::class;
    const PLUGIN_ID = "srmoasto";
    const PLUGIN_NAME = "SrMoveAssessmentToolbar";
    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * ilSrMoveAssessmentToolbarPlugin constructor
     */
    public function __construct()
    {
        parent::__construct();
    }


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
     * @inheritDoc
     */
    public function getPluginName() : string
    {
        return self::PLUGIN_NAME;
    }
}
