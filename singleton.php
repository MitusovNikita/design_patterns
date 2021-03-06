<?php
// 1 Singleton
// будет единственный экземпляр некоторого класса, и предоставляющий глобальную точку доступа к этому экземпляру.

class Singleton {
    private static $instance;  // экземпляр объекта
    private function __construct(){ /* ... @return Singleton */ }  // Защищаем от создания через new Singleton
    private function __clone()    { /* ... @return Singleton */ }  // Защищаем от создания через клонирование
    private function __wakeup()   { /* ... @return Singleton */ }  // Защищаем от создания через unserialize
    public static function getInstance() {    // Возвращает единственный экземпляр класса. @return Singleton
        if ( empty(self::$instance) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function doAction()
    {
        echo 123;
    }
}

/*
Применение
*/
$obj = Singleton::getInstance();
$obj->doAction();