<?php

/**
 * CodeMommy Mirrors.mom
 * @author  Candison November <www.kandisheng.com>
 */

namespace Controller;

use CodeMommy\WebPHP\Input;

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
        $project = Input::get('project', '');
        return $this->template('mirror/' . $project);
    }
}