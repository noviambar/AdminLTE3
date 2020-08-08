<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\documents;

class MeetingController extends Controller
{
    public function meeting(){
        $documents = documents::all();

        return view('meeting',['documents' => $documents]);
    }

}
