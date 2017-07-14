<?php

/**
 * CodeMommy CacheDream
 * @author Candison November <www.kandisheng.com>
 */

namespace Controller\Page;

use CodeMommy\RequestPHP\Request;
use Base\ViewController;

/**
 * Class CacheController
 * @package Controller\Page
 */
class CacheController extends ViewController
{
    /**
     * MirrorController constructor.
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
        $project = Request::inputGet('project', '');
        return $this->render('cache/' . $project);
    }
}