<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;

class TopicsController extends Controller
{
    public function index()
    {
        return  Topic::all();
    }
}