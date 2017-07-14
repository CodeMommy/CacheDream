<?php

/**
 * CodeMommy CacheDream
 * @author Candison November <www.kandisheng.com>
 */

namespace Base;

use CodeMommy\WebPHP\Controller;
use CodeMommy\WebPHP\View;
use CodeMommy\ConfigPHP\Config;
use CodeMommy\RequestPHP\Request;

/**
 * Class ViewController
 * @package Base
 */
class ViewController extends Controller
{
    protected $data = null;

    /**
     * ViewController constructor.
     */
    public function __construct()
    {
        $this->data = array();
        $this->data['isSearch'] = false;
    }

    /**
     * @param $view
     *
     * @return bool
     */
    public function render($view)
    {
        if (empty($this->data['title'])) {
            $this->data['title'] = Config::get('application.title');
        } else {
            $this->data['title'] .= ' - ' . Config::get('application.title');
        }
        $this->data['root'] = Request::root();
        $this->data['static'] = Request::root() . 'static';
        if (in_array(Request::domain(), Config::get('application.domain'))) {
            $this->data['static'] = Config::get('application.static');
        }
        return View::render($view, $this->data);
    }
}