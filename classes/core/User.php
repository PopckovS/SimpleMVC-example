<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace core;

/**
 * Description of User
 *
 * @author qwe
 */
class User extends Session
{
    //put your code here
    
   public $role = null;

   
   /**
    * Вернёт объект юзера
    * 
    * @staticvar type $instance
    * @return \static
    */
    public static function get()
    {
        static $instance = null; // статическая переменная
        if (null === $instance) { // проверка существования
            $instance = new static();
            $instance->init();
        }
        return $instance;
    }
/*скрываем конструктор
 - для того чтобы класс нельзя было создать в обход getInstance */
    protected function __construct()
    {
    }
    
    private function init()
    {
        
        $this->role =  Session::get()->session['user']['role'];
    }
}