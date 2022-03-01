<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        echo "<b> Nim : </b> 2041720075 <br> <b>Nama :</b> Khalid Fadhil Arrafi <br><b>Kelas :</b> TI-2D";
    }


}
