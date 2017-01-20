<?php
/**
 * Created by PhpStorm.
 * User: devby
 * Date: 1/16/2017
 * Time: 6:20 PM
 */

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class ProfileComposer
{
    public function compose(View $view)
    {
        $view->with('married', random_int(0, 1));
        $view->with('test', 'say test');
    }
}