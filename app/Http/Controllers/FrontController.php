<?php

namespace App\Http\Controllers;

use App\Models\HomeTitle;
use App\Models\HomeTitle2;
use App\Models\Navlink;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $navlinks = Navlink::all();
        $socialLinks = SocialLink::all();
        $homeTitle = HomeTitle::all();
        $homeTitle2 = HomeTitle2::all();


        return view('welcome', compact('navlinks', 'socialLinks', 'homeTitle', 'homeTitle2'));
    }


}
