<?php
/**
 * Created by ubuy.test.
 * User: wmhello
 * Email: 871228582@qq.com
 * Date: 2019/6/3 0003
 */
function test_helper(){
    return 'ok';
}

function route_class()
{
    return str_replace('.', '-', \Illuminate\Support\Facades\Route::currentRouteName());
}