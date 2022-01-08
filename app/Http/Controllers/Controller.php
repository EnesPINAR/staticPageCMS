<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $path;

    public function __construct() {
        $file_name = "limon-v1";
        $path = $file_name;
        $this->path = $path;
    }

    public function view($view){
        return view($this->path."/".$view);
    }
}
