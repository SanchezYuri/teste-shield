<?php

namespace App\Http\Controllers;

use App\Models\Models\Company;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index(){
        return view('home');
    }

    public function create(){
        return view('createEmpresa');
    }

    public function store(Request $request){
        Company::create($request->all());
        return redirect(route('home'));
    }
}
