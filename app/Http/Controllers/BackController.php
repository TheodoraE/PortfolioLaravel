<?php

namespace App\Http\Controllers;

use App\Models\Navlink;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class BackController extends Controller
{

    ////  INDEX
    public function index()
    {
        // Nav
        $navLinks = Navlink::all();
        $socialLinks = SocialLink::all();


        return view('backoffice.backoffice', compact('navLinks', 'socialLinks'));
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

}
