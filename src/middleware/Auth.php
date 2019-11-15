<?php

namespace mulo\admin\middleware;

class Auth{


    /**
     * 注册应用的路由
     *
     * @return void
     */
    static function init(){
        Route::group('blog', function () {
            Route::rule(':id', 'blog/read');
            Route::rule(':name', 'blog/read');
        });
    }


}