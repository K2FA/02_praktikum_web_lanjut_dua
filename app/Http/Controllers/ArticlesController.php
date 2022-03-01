<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function articles($id)
    {
        echo "Ini merupakan halaman artikel dengan id ".$id;
    }


}
