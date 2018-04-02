<?php
/**
 * Created by PhpStorm.
 * Desc: basic controller
 * User: qingchendelaike
 * Date: 2018/4/3
 * Time: 2:49
 */

namespace App\Home\Controllers;

use Slim\Views\Twig as View;

class HomeController extends Controller
{
    public function index($request, $response)
    {
        return $this->view->render($response, 'home/home.twig');
    }
}