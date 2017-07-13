<?php

/**
 * CodeMommy CacheDream
 * @author Candison November <www.kandisheng.com>
 */

namespace Controller\Page;

use CodeMommy\ConfigPHP\Config;
use Base\BaseViewController;

/**
 * Class HomeController
 * @package Controller\Page
 */
class HomeController extends BaseViewController
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
        $this->data['projects'] = Config::get('project');
        return $this->template('home/index');
    }

    /**
     * @return bool
     */
    public function about()
    {
        return $this->template('home/about');
    }
}