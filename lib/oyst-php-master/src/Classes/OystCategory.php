<?php

namespace Oyst\Classes;

/**
 * Class OystCategory
 *
 * @category Oyst
 * @author   Oyst <dev@oyst.com>
 * @license  Copyright 2017, Oyst
 * @link     http://www.oyst.com
 */
class OystCategory implements OystArrayInterface
{
    /**
     * Optional
     *
     * @var string
     */
    private $ref;

    /**
     * Mandatory
     *
     * @var bool
     */
    private $main;

    /**
     * Optional
     *
     * @var string
     */
    private $title;

    /**
     * @param string $ref
     * @param string $title
     * @param bool $main
     */
    public function __construct($ref, $title, $main = false)
    {
        $this->ref = (string)$ref;
        $this->title = (string)$title;
        $this->main = (bool)$main;
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     *
     * @return OystCategory
     */
    public function setRef($ref)
    {
        $this->ref = (string)$ref;

        return $this;
    }

    /**
     * @return bool
     */
    public function isMain()
    {
        return $this->main;
    }

    /**
     * @param bool $main
     *
     * @return OystCategory
     */
    public function setMain($main)
    {
        $this->main = (bool)$main;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return OystCategory
     */
    public function setTitle($title)
    {
        $this->title = (string)$title;

        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $category = array(
            'reference' => $this->ref,
            'is_main' => $this->main,
            'title' => $this->title,
        );

        return $category;
    }
}
