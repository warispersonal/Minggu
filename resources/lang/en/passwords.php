<?php

use Illuminate\Support\Facades\Config;

return [

    /*
    |--------------------------------------------------------------------------
    | Password Reset Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match reasons
    | that are given by the password broker for a password update attempt
    | has failed, such as for an invalid token or invalid new password.
    |
    */

    'reset' => Config::get('app.locale') == 'en' ?  'Your password has been reset!': "Kata laluan anda telah ditetapkan semula!",
    'sent' =>  Config::get('app.locale') == 'en' ? 'We have emailed your password reset link!' : 'Kami telah menghantar e-mel pautan tetapan semula kata laluan anda!',
    'throttled' => Config::get('app.locale') == 'en' ?   'Sila tunggu sebelum mencuba semula.':"",
    'token' => Config::get('app.locale') == 'en' ?  'Token tetapan semula kata laluan ini tidak sah.':"",
    'user' => Config::get('app.locale') == 'en' ?  "Kami tidak dapat mencari pengguna dengan alamat e-mel itu.":"",

];
