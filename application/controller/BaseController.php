<?php

/**
 * CodeMommy Mirrors.mom
 * @author  Candison November <www.kandisheng.com>
 */

namespace Controller;

use CodeMommy\WebPHP\Controller;
use CodeMommy\WebPHP\View;
use CodeMommy\ConfigPHP\Config;
use CodeMommy\RequestPHP\Request;

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
        if (empty($this->data['title'])) {
            $this->data['title'] = '';
        } else {
            $this->data['title'] .= ' - ';
        }
        $this->data['root'] = Request::root();
        if (Request::domain() == 'www.mirrors.mom' || Request::domain() == 'mirrors.mom') {
            $this->data['static'] = 'http://static.shareany.com/product/mirrors';
        } else {
            $this->data['static'] = Request::root() . 'static';
        }
        return View::render($view, $this->data);
    }
}