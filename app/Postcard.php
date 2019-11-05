<?php


namespace App;


class Postcard
{

    protected static function resolvedFacade($name){
//        dd(app()['Postcard']);
//        app()->make('Postcard');
        return app()->make($name);
    }

    public static function __callStatic($method, $arguments)
    {
        // TODO: Implement __callStatic() method.
        return (self::resolvedFacade('Postcard'))
            ->$method(...$arguments);
    }
}