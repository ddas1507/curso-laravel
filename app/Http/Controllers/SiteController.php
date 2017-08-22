<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller {

    public function index(){
    	return view('index');
    }

    public function contato(){
    	return view('contato');
    }

    public function categoria($id){
        return "Listagem dos posts da categoria: {$id}";
    }

    public function categoriaOp($id = 1){
        return "Listagem dos posts da categoria: {$id}";
    }
    
    public function contato(){
        return view('contato');
    }






}
