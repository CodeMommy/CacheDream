<?php

/**
 * CodeMommy CacheDream
 * @author Candison November <www.kandisheng.com>
 */

namespace Base;

use CodeMommy\WebPHP\Controller;
use CodeMommy\WebPHP\View;
use CodeMommy\RequestPHP\Request;

/**
 * Class BaseController
 * @package Controller
 */
class BaseViewController extends Controller
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
        if (Request::domain() == 'www.cachedream.com' || Request::domain() == 'cachedream.com') {
            $this->data['static'] = '//cache.shareany.com/?v=1&f=http://www.cachedream.com/static';
        } else {
            $this->data['static'] = Request::root() . 'static';
        }
        return View::render($view, $this->data);
    }
}