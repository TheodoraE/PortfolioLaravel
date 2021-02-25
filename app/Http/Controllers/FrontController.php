<?php

namespace App\Http\Controllers;

use App\Models\AboutCount;
use App\Models\AboutInterest;
use App\Models\AboutMeContent;
use App\Models\AboutMeImage;
use App\Models\AboutMeInfo;
use App\Models\AboutSkill;
use App\Models\AboutTitle;
use App\Models\HomeTitle;
use App\Models\HomeTitle2;
use App\Models\Navlink;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        // Home
        $navlinks = Navlink::all();
        $socialLinks = SocialLink::all();
        $homeTitle = HomeTitle::all();
        $homeTitle2 = HomeTitle2::all();

        // About
        $aboutTitle = AboutTitle::all();
        $aboutMeImg = AboutMeImage::all();
        $aboutMeContent = AboutMeContent::all();
        $aboutMeInfos = AboutMeInfo::all();
        $infoCount = 1;
        $aboutCounts = AboutCount::all();
        $aboutSkills = AboutSkill::all();
        $skillcount = 0;
        $aboutInterests = AboutInterest::all();

        return view('welcome', compact('navlinks', 'socialLinks', 'homeTitle', 'homeTitle2', 'aboutTitle', 'aboutMeImg', 'aboutMeContent', 'aboutMeInfos', 'infoCount', 'aboutCounts', 'aboutSkills', 'skillcount', 'aboutInterests'));
    }


}
