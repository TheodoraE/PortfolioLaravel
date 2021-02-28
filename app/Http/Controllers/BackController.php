<?php

namespace App\Http\Controllers;

use App\Models\AboutCount;
use App\Models\AboutInterest;
use App\Models\AboutMeContent;
use App\Models\AboutMeImage;
use App\Models\AboutMeInfo;
use App\Models\AboutSkill;
use App\Models\AboutTitle;
use App\Models\ContactCard;
use App\Models\ContactTitle;
use App\Models\HomeTitle;
use App\Models\HomeTitle2;
use App\Models\Navlink;
use App\Models\PortfolioDiv;
use App\Models\PortfolioFilter;
use App\Models\PortfolioTitle;
use App\Models\ResumeEducation;
use App\Models\ResumeInfo;
use App\Models\ResumePresentation;
use App\Models\ResumeProfessional;
use App\Models\ResumeTitle;
use App\Models\ResumeTitle2;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class BackController extends Controller
{

    ////  INDEX
    public function index()
    {
        // Home
        $navLinks = Navlink::all();
        $socialLinks = SocialLink::all();
        $homeTitle = HomeTitle::all();
        $homeTitle2 = HomeTitle2::all();

        // About
        $aboutTitles = AboutTitle::all();
        $aboutMeImg = AboutMeImage::all();
        $aboutMeContent = AboutMeContent::all();
        $aboutMeInfos = AboutMeInfo::all();
        // $infoCount = 1;
        $aboutCounts = AboutCount::all();
        $aboutSkills = AboutSkill::all();
        // $skillcount = 0;
        $aboutInterests = AboutInterest::all();

        // Resume
        $resumeTitle = ResumeTitle::all();
        $resumePresentation = ResumePresentation::all();
        $resumeTitles2 = ResumeTitle2::all();
        $resumeInfos = ResumeInfo::all();
        $resumeEducations = ResumeEducation::all();
        $resumeProfessionals = ResumeProfessional::all();

        // Portfolio
        $portfolioTitle = PortfolioTitle::all();
        $portfolioFilters = PortfolioFilter::all();
        $portfolioDivs = PortfolioDiv::all();

        // Contact
        $contactTitle = ContactTitle::all();
        $contactCards = ContactCard::all();
        // $contactCount = 0;

        return view('backoffice.backoffice', compact('navLinks', 'socialLinks', 'homeTitle', 'homeTitle2', 'aboutTitles', 'aboutMeImg', 'aboutMeContent', 'aboutMeInfos', 'aboutCounts', 'aboutSkills', 'aboutInterests', 'resumeTitle', 'resumePresentation', 'resumeTitles2', 'resumeInfos', 'resumeEducations', 'resumeProfessionals', 'portfolioTitle', 'portfolioFilters', 'portfolioDivs', 'contactTitle', 'contactCards'));
    }


    ////  CREATE
    public function createNavLinks()
    {
        return view('backoffice.pages.create.createNavLinks');
    }
    public function createSocialLinks()
    {
        return view('backoffice.pages.create.createSocialLinks');
    }
    public function createAboutTitles()
    {
        return view('backoffice.pages.create.createAboutTitles');
    }
    


    ////  STORE
    public function storeNavLinks(Request $request)
    {
        $validation = $request->validate([
            "href" => 'required|min:1|max:40',
            "name" => 'required'
        ]);

        $store = new Navlink;
        $store->href = $request->href;
        $store->name = $request->name;
        $store->save();
        return redirect()->back();
    }
    public function storeSocialLinks(Request $request)
    {
        $validation = $request->validate([
            "href" => 'required|min:1|max:40',
            "aClass" => 'required',
            "iClass" => 'required'
        ]);

        $store = new SocialLink;
        $store->href = $request->href;
        $store->aClass = $request->aClass;
        $store->iClass = $request->iClass;
        $store->save();
        return redirect()->back();
    }
    public function storeAboutTitles(Request $request)
    {
        $validation = $request->validate([
            "title" => 'required',
            "para" => 'required',
        ]);

        $store = new AboutTitle;
        $store->title = $request->title;
        $store->para = $request->para;
        $store->save();
        return redirect()->back();
    }



    ////  SHOW
    public function showNavLinks($id)
    {
        $show = Navlink::find($id);
        return view('backoffice.pages.show.showNavLinks', compact('show'));
    }
    public function showSocialLinks($id)
    {
        $show = SocialLink::find($id);
        return view('backoffice.pages.show.showSocialLinks', compact('show'));
    }
    public function showAboutTitles($id)
    {
        $show = AboutTitle::find($id);
        return view('backoffice.pages.show.showAboutTitles', compact('show'));
    }




    ////  EDIT
    public function editNavLinks($id)
    {
        $edit = Navlink::find($id);

        return view('backoffice.pages.edit.editNavLinks', compact('edit'));
    }
    public function editSocialLinks($id)
    {
        $edit = SocialLink::find($id);

        return view('backoffice.pages.edit.editSocialLinks', compact('edit'));
    }
    public function editAboutTitles($id)
    {
        $edit = AboutTitle::find($id);

        return view('backoffice.pages.edit.editAboutTitles', compact('edit'));
    }




    ////  UPDATE
    public function updateNavLinks(Request $request, $id)
    {
        $validation = $request->validate([
            "href" => 'required|min:1|max:40',
            "name" => 'required'
        ]);

        $update = Navlink::find($id);
        $update->href = $request->href;
        $update->name = $request->name;
        $update->save();
        return redirect('/backoffice');
    }
    public function updateSocialLinks(Request $request, $id)
    {
        $validation = $request->validate([
            "href" => 'required|min:1|max:40',
            "aClass" => 'required',
            "iClass" => 'required'
        ]);

        $update = SocialLink::find($id);
        $update->href = $request->href;
        $update->aClass = $request->aClass;
        $update->iClass = $request->iClass;
        $update->save();
        return redirect('/backoffice');
    }
    public function updateAboutTitles(Request $request, $id)
    {
        $validation = $request->validate([
            "title" => 'required',
            "para" => 'required'
        ]);

        $update = AboutTitle::find($id);
        $update->title = $request->title;
        $update->para = $request->para;
        $update->save();
        return redirect('/backoffice');
    }




    ////  DESTROY
    public function destroyNavLinks($id)
    {
        $destroy = Navlink::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroySocialLinks($id)
    {
        $destroy = SocialLink::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroyAboutTitles($id)
    {
        $destroy = AboutTitle::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }


    //// DESTROYALL
    public function destroyAllNavLinks()
    {
        $destroyALL = Navlink::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllSocialLinks()
    {
        $destroyALL = SocialLink::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllAboutTitles()
    {
        $destroyALL = AboutTitle::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }

}
