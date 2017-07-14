<?php

/**
 * CodeMommy CacheDream
 * @author Candison November <www.kandisheng.com>
 */

namespace Controller\Page;

use CodeMommy\ConfigPHP\Config;
use Base\ViewController;

/**
 * Class HomeController
 * @package Controller\Page
 */
class HomeController extends ViewController
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
        return $this->render('home/index');
    }

    /**
     * @return bool
     */
    public function about()
    {
        $this->data['title'] = 'About';
        return $this->render('home/about');
    }

    /**
     * @return bool
     */
    public function merge()
    {
        $this->data['title'] = 'File Merge Tool';
        return $this->render('home/merge');
    }
}