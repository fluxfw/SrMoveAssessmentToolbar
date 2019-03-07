<?php

require_once __DIR__ . "/../vendor/autoload.php";

use srag\DIC\GallikerMods\DICTrait;

/**
 * Class ilGallikerModsUIHookGUI
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ilGallikerModsUIHookGUI extends ilUIHookPluginGUI {

	use DICTrait;
	const PLUGIN_CLASS_NAME = ilGallikerModsPlugin::class;


	/**
	 * ilGallikerModsUIHookGUI constructor
	 */
	public function __construct() {

	}


	/**
	 * @param string $a_comp
	 * @param string $a_part
	 * @param array  $a_par
	 *
	 * @return array
	 */
	public function getHTML(/*string*/
		$a_comp, /*string*/
		$a_part, /*array*/
		$a_par = []): array {
		return parent::getHTML($a_comp, $a_part, $a_par);
	}
}
