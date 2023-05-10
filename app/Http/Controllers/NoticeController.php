<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notice::all();
        return view('notice.index',compact('notices'));
    }

    public function create()
    {
        return view('notice.create');
    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request,$id)
    {

    }

    public function destroy(Request $request)
    {
        
    }
}


