<?php
/**
 * Created by PhpStorm.
 * Desc: 路由表
 * User: qingchendelaike
 * Date: 2018/4/3
 * Time: 1:54
 */

$app->get('/',function($request, $response){
    return $this->view->render($response , 'home/home.twig');
});