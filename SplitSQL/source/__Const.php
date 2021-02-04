<?php


namespace App\SplitSQL;


class __Const
{
    /**
     * @sql Constants
     */

    public static function __defined(){
        define('_FETCH', 'fetch');
        define('_COUNT', 'count');

        #SQL Constants
            define('__CREATE', 'CREATE');
            define('__UPDATE', 'UPDATE');
            define('__DELETE', 'DELETE');
            define('__SELECT', 'SELECT');
            define('__INSERT', 'INSERT');
            define('__WHERE', 'WHERE');
            define('__SET', 'SET');
            define('__LIMIT', 'LIMIT');
            define('__EQUAL', '=');
    }

}