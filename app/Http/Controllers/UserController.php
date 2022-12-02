<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class UserController extends Controller
{

    /**
     * Show the list of user in the platform
     */
    public function index()
    {
        return Inertia::render('Users/Index', [
            'appName' => config('app.name')
        ]);
    }
}
