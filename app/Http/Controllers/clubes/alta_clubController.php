<?php

namespace App\Http\Controllers\clubes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class alta_clubController extends Controller
{
  public function acceso()
  {
    return view('accesos/acceso');
  }
}

    /*public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    /**

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
