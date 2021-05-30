<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/iedc',
        '/admin_page',
        '/mentor_data',
        '/add_ment_idea',
        '/mentor_login',
        '/mentor_monitor_p'
       
    ];
}
