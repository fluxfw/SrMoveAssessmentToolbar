<?php

namespace srag\DIC\SrMoveAssessmentToolbar\Plugin;

/**
 * Interface Pluginable
 *
 * @package srag\DIC\SrMoveAssessmentToolbar\Plugin
 */
interface Pluginable
{

    /**
     * @return PluginInterface
     */
    public function getPlugin() : PluginInterface;


    /**
     * @param PluginInterface $plugin
     *
     * @return static
     */
    public function withPlugin(PluginInterface $plugin)/*: static*/ ;
}
