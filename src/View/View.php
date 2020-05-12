<?php

namespace Horoshop\Test\View;

/**
 * Class View
 *
 * @package Horoshop\Test\View
 */
class View
{
    /**
     * @var string
     */
    private $path;

    /**
     * @var array
     */
    private $parameters;

    /**
     * View constructor.
     *
     * @param string $file
     * @param array  $params
     */
    public function __construct(string $file, array $params)
    {
        $path = __DIR__ . "/../../templates/{$file}.php";

        $this->path       = $path;
        $this->parameters = $params;
    }


    public function __destruct()
    {
        extract($this->parameters);
        include($this->path);
    }
}
