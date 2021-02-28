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
    public function createAboutCounts()
    {
        return view('backoffice.pages.create.createAboutCounts');
    }
    public function createAboutSkills()
    {
        return view('backoffice.pages.create.createAboutSkills');
    }
    public function createAboutInterests()
    {
        return view('backoffice.pages.create.createAboutInterests');
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
        ]);

        $store = new AboutTitle;
        $store->title = $request->title;
        $store->para = $request->para;
        $store->save();
        return redirect()->back();
    }
    public function storeAboutCounts(Request $request)
    {
        $validation = $request->validate([
            "iClass" => 'required',
            "number" => 'integer',
            "description" => 'required'
        ]);

        $store = new AboutCount;
        $store->divColClass = $request->divColClass;
        $store->iClass = $request->iClass;
        $store->number = $request->number;
        $store->description = $request->description;
        $store->save();
        return redirect()->back();
    }
    public function storeAboutSkills(Request $request)
    {
        $validation = $request->validate([
            "skill" => 'required',
            "iValue" => 'required',
            "ariaValue" => 'integer'
        ]);

        $store = new AboutSkill;
        $store->skill = $request->skill;
        $store->iValue = $request->iValue;
        $store->ariaValue = $request->ariaValue;
        $store->save();
        return redirect()->back();
    }
    public function storeAboutInterests(Request $request)
    {
        $validation = $request->validate([
            "iClass" => 'required',
            "iColor" => 'required',
            "description" => 'required'
        ]);

        $store = new AboutInterest;
        $store->divColClass = $request->divColClass;
        $store->iClass = $request->iClass;
        $store->iColor = $request->iColor;
        $store->description = $request->description;
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
    public function showAboutCounts($id)
    {
        $show = AboutCount::find($id);
        return view('backoffice.pages.show.showAboutCounts', compact('show'));
    }
    public function showAboutSkills($id)
    {
        $show = AboutSkill::find($id);
        return view('backoffice.pages.show.showAboutSkills', compact('show'));
    }
    public function showAboutInterests($id)
    {
        $show = AboutInterest::find($id);
        return view('backoffice.pages.show.showAboutInterests', compact('show'));
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
    public function editAboutCounts($id)
    {
        $edit = AboutCount::find($id);
        return view('backoffice.pages.edit.editAboutCounts', compact('edit'));
    }
    public function editAboutSkills($id)
    {
        $edit = AboutSkill::find($id);
        return view('backoffice.pages.edit.editAboutSkills', compact('edit'));
    }
    public function editAboutInterests($id)
    {
        $edit = AboutInterest::find($id);
        return view('backoffice.pages.edit.editAboutInterests', compact('edit'));
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
        ]);

        $update = AboutTitle::find($id);
        $update->title = $request->title;
        $update->para = $request->para;
        $update->save();
        return redirect('/backoffice');
    }
    public function updateAboutCounts(Request $request, $id)
    {
        $validation = $request->validate([
            "iClass" => 'required',
            "number" => 'integer',
            "description" => 'required'
        ]);

        $update = AboutCount::find($id);
        $update->divColClass = $request->divColClass;
        $update->iClass = $request->iClass;
        $update->number = $request->number;
        $update->description = $request->description;
        $update->save();
        return redirect('/backoffice');
    }
    public function updateAboutSkills(Request $request, $id)
    {
        $validation = $request->validate([
            "skill" => 'required',
            "iValue" => 'required',
            "ariaValue" => 'integer'
        ]);

        $update = AboutSkill::find($id);
        $update->skill = $request->skill;
        $update->iValue = $request->iValue;
        $update->ariaValue = $request->ariaValue;
        $update->save();
        return redirect('/backoffice');
    }
    public function updateAboutInterests(Request $request, $id)
    {
        $validation = $request->validate([
            "iClass" => 'required',
            "iColor" => 'required',
            "description" => 'required'
        ]);

        $update = AboutInterest::find($id);
        $update->divColClass = $request->divColClass;
        $update->iClass = $request->iClass;
        $update->iColor = $request->iColor;
        $update->description = $request->description;
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
    public function destroyAboutCounts($id)
    {
        $destroy = AboutCount::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroyAboutSkills($id)
    {
        $destroy = AboutSkill::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroyAboutInterests($id)
    {
        $destroy = AboutInterest::find($id);
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
    public function destroyAllAboutCounts()
    {
        $destroyALL = AboutCount::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllAboutSkills()
    {
        $destroyALL = AboutSkill::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllAboutInterests()
    {
        $destroyALL = AboutInterest::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }

}
