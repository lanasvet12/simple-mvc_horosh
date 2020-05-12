<?php

namespace Horoshop\Test\Controllers;

use Horoshop\Test\View\View;

/**
 * Class Homepage
 *
 * @package Controllers
 */
class HomepageController
{
    public function actionIndex()
    {
        new View('homepage', ['test' => 'It\'s work']);
    }
}
