<?php

/**
 * CodeMommy Cache
 * @author  Candison November <www.kandisheng.com>
 */

namespace Controller;

use Helper\Core;

/**
 * Class HomeController
 * @package Controller
 */
class CacheController extends BaseController
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return bool
     */
    public function index()
    {
        $core = new Core();
        $core->show();
        return true;
    }
}