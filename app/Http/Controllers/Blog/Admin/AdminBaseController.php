<?php

namespace App\Http\Controllers\Blog\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Blog\BaseController as MainBaseController;

abstract class AdminBaseController extends MainBaseController
{
    /**
     * AdminBaseController constructor.
     */
    public function __construct()
{
    $this->middleware('auth');
    $this->middleware('status');
}
}
