<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{

    // public function __construct(){
    //     return $this->middleware(IsAdmin::class);
    // }

    public function users()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function categoriesIndex()
    {
        return view('admin.categories.index');
    }

    public function categoriesCreate()
    {
        return view('admin.categories.create');
    }

    public function threadsIndex()
    {
        return view('admin.threads.index');
    }
}
