<?php

namespace mulo\admin;

use think\facade\Route;
class Application
{
    /**
     * 注册应用的路由
     *
     * @return void
     */
    static function init()
    {
        Route::group('admin', function () {
            Route::rule('', 'blog/read');
        });
    }

}
