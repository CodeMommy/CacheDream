<?php

/**
 * CodeMommy CacheDream
 * @author Candison November <www.kandisheng.com>
 */

namespace Controller\Page;

use CodeMommy\RequestPHP\Request;
use Base\BaseViewController;

/**
 * Class MirrorController
 * @package Controller\Page
 */
class MirrorController extends BaseViewController
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
        return $this->template('mirror/' . $project);
    }
}