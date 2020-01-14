<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    
    public function index($slug) {
        $page = Page::where('slug', $slug)->first();

        if($page) {
            return view('site.page', [
                'page' => $page
            ]);
        } else {
            abort(404);
        }
    }
}
