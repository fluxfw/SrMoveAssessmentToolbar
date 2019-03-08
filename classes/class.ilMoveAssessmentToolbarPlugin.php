<?php

require_once __DIR__ . "/../vendor/autoload.php";

use srag\DIC\MoveAssessmentToolbar\DICTrait;

/**
 * Class ilMoveAssessmentToolbarPlugin
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ilMoveAssessmentToolbarPlugin extends ilUserInterfaceHookPlugin {

	use DICTrait;
	const PLUGIN_ID = "srmoasto";
	const PLUGIN_NAME = "MoveAssessmentToolbar";
	const PLUGIN_CLASS_NAME = self::class;
	/**
	 * @var self|null
	 */
	protected static $instance = NULL;


	/**
	 * @return self
	 */
	public static function getInstance(): self {
		if (self::$instance === NULL) {
			self::$instance = new self();
		}

		return self::$instance;
	}


	/**
	 * ilMoveAssessmentToolbarPlugin constructor
	 */
	public function __construct() {
		parent::__construct();
	}


	/**
	 * @return string
	 */
	public function getPluginName(): string {
		return self::PLUGIN_NAME;
	}
}
