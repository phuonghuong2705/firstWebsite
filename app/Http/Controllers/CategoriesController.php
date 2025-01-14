<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct (Request $request){
        // if ($request->is('categories')) {
        //     echo 'Wellcome';
        // }
    }

    //Hien thi danh sach (GET)
    public function index (Request $request) {

        dd($request);
        return view('clients/categories/list');
    }

    // lay thong tin 1 category (GET)
    public function getCategories ($id)
    {
        return view('clients/categories/edit');
    }

    // update 1 category (POST)
    public function updateCategories ($id)
    {
        return 'Submit sua chuyen muc '. $id;
    }

    //show form add (GET)
    public function addCategories ()
    {
        return view('clients/categories/add');
    }

    // add (POST)
    public function handleAddCategories (Request $request)
    {
        // $allData = $request->all();
        // dd($allData);
        // return 'Submit them chuyen muc ';
    }

    // delete (DELETE)
    public function deleteCategories ($id)
    {
        return 'Submit xoa chuyen muc '.$id;

    }

}
