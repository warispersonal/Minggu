<?php

use Illuminate\Support\Facades\Request;

function activeMenu($uri) {
    $active = '';
    if(request()->is($uri)){
        $active = 'active';
    }
    return $active;
}
