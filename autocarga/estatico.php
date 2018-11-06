<?php
    class Foo
    {
        private function __construct(){}
        public function metodoPublico()
        {
            echo 'método público';
        }
        private function metodoPrivado()
        {
            echo 'método Privado';
        }
        static function metodoEstatico()
        {
            echo 'método Estatico';
        }
    }

    //$objFoo = new Foo; // no se puede porque el contructor es PRIVATE
    //$objFoo->metodoPublico();
    //$objFoo->metodoPrivado();
    //$objFoo->metodoEstatico();

    Foo::metodoEstatico();