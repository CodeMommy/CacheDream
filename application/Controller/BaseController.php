<?php

/**
 * CodeMommy Mirrors.mom
 * @author  Candison November <www.kandisheng.com>
 */

namespace Controller;

use CodeMommy\WebPHP\Controller;
use CodeMommy\WebPHP\Output;
use CodeMommy\WebPHP\Config;
use CodeMommy\WebPHP\Me;

/**
 * Class BaseController
 * @package Controller
 */
class BaseController extends Controller
{
    protected $data   = null;
    protected $option = null;

    /**
     * BaseController constructor.
     */
    public function __construct()
    {
        $this->data = array();
        $this->option = array();
    }

    /**
     * @param $view
     *
     * @return bool
     */
    public function template($view)
    {
        foreach ($this->option as $key => $value) {
            $this->data[$key] = $value;
        }
        $configTitle = Config::get('application.title');
        if (empty($this->data['title'])) {
            $this->data['title'] = $configTitle;
        } else {
            $this->data['title'] .= ' - ' . $configTitle;
        }
        $this->data['root'] = Me::root();
        $this->data['static'] = Me::root() . 'static';
        return Output::template($view, $this->data);
    }
}