<?php
/**
 * Created by PhpStorm.
 * User: 电脑A
 * Date: 2018/4/3
 * Time: 3:25
 */

namespace App\Home\Controllers;


class Controller
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function __get($property)
    {
        if($this->container->{$property}){
            return $this->container->{$property};
        }
    }
}