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
        if (empty($this->data['title'])) {
            $this->data['title'] = '';
        } else {
            $this->data['title'] .= ' - ';
        }
        $this->data['root'] = Me::root();
        if (Me::domain() == 'www.mirrors.mom' || Me::domain() == 'mirrors.mom') {
            $this->data['static'] = 'http://static.shareany.com/product/mirrors';
        } else {
            $this->data['static'] = Me::root() . 'static';
        }
        return Output::template($view, $this->data);
    }
}