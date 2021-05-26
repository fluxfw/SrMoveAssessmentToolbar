<?php

namespace srag\DIC\SrMoveAssessmentToolbar\DIC;

use ILIAS\DI\Container;
use srag\DIC\SrMoveAssessmentToolbar\Database\DatabaseDetector;
use srag\DIC\SrMoveAssessmentToolbar\Database\DatabaseInterface;

/**
 * Class AbstractDIC
 *
 * @package srag\DIC\SrMoveAssessmentToolbar\DIC
 */
abstract class AbstractDIC implements DICInterface
{

    /**
     * @var Container
     */
    protected $dic;


    /**
     * @inheritDoc
     */
    public function __construct(Container &$dic)
    {
        $this->dic = &$dic;
    }


    /**
     * @inheritDoc
     */
    public function database() : DatabaseInterface
    {
        return DatabaseDetector::getInstance($this->databaseCore());
    }
}
