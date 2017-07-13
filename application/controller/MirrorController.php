<?php

/**
 * CodeMommy CacheDream
 * @author Candison November <www.kandisheng.com>
 */

namespace Controller;

use CodeMommy\RequestPHP\Request;

/**
 * Class MirrorController
 * @package Controller
 */
class MirrorController extends BaseController
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