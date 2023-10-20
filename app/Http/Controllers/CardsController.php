<?php

namespace App\Http\Controllers;

use App\Models\Cards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CardsController extends Controller
{

    public function create_card()
    {
        return view('app.add-new');
    }
    //images upload

    // public function Fileupload($file,$destinationPath,$dir)
    // {
    //     $file->move($destinationPath,$file->getClientOriginalName());
    //     return asset('public/'.$dir.'/'.$file->getClientOriginalName());
    // }

    //insert card details
    public function insert_card(Request $request)
    {

        // print_r($request->all());

        // $profile_image = $request->file('profile');
        // $company_logo = $request->file('logo');
        // $cover_image = $request->file('background');
        // $card_frame = $request->file('layouts');

        // $profile_image = $this->Fileupload($profile_image,public_path('/profile_image'),'profile');
        // $company_logo = $this->Fileupload($company_logo,public_path('/company_logo'),'logo');
        // $cover_image = $this->Fileupload($cover_image,public_path('/cover_image'),'background');
        // $card_frame = $this->Fileupload($card_frame,public_path('/card_frame'),'layouts');

        $socialmedia = json_encode($request->socialmedia);
        $others = json_encode($request->others);
        // echo '<pre>';print_r(json_decode($socialmedia,true)['insta']);
        // exit;

        DB::table('cards')->insert([
            'card_name' => $request->cardname,
            'user_id' => $request->user_id,
            // 'photo' => $profile_image,
            // 'card_logo' => $company_logo,
            // 'card_frame' => $card_frame,
            // 'card_background' => $cover_image,
            'card_color' => $request->color,
            'card_type' => $request->cardtype,
            'first_name' => $request->firstname,
            'middle_name' => $request->middlename,
            'last_name' => $request->lastname,
            'desgination' => $request->desgination,
            'social_media_links' =>$socialmedia,
            'others' => $others
        ]);
        return redirect('list')->with('message','Digital Card Created Successfully');
    }


    //cards list
    public function cards_list()
    {
        $id = Auth::user()->id;
        $list = Cards::where('user_id',$id)->get();
        // $social =Cards::json_decode(socialmedia,true)['insta'];
        // print_r(Cards::where('user_id',$id)->get());
        // exit;
        return view('app.cards',compact('list'));
    }
    //card name
    public function card_type($id)
    {
        //$name = DB::select("select 'photo','card_logo','card_frame','card_background','card_color','first_name','middle_name','last_name','desgination','social_media_links','others' from cards where id=?",[$id]);
        $name = DB::select("select * from cards where id=?",[$id]);
        // print_r($name);
        // exit;
        return view('app.cards',compact('name'));
    }
    //edit card
    public function edit_card($id)
    {
        $edits = Cards::find($id);
        return view('edit_page',compact('edits'));
    }
    //update card
    public function update_card(Request $request,$id)
    {
        $card_name = $request->input('cardname');
        $profile_image = $request->input('photo');
        $company_logo = $request->input('logo');
        $card_frame = $request->input('layouts');
        $card_background = $request->input('cover_image');
        $card_color = $request->input('color');
        $card_type = $request->input('cardtype');
        $first_name = $request->input('firstname');
        $middle_name = $request->input('middlename');
        $last_name = $request->input('lastname');
        $desgination = $request->input('desgination');
        $social_media_links = $request->input('socialmedia');
        $others = $request->input('others');

        DB::update('update cards set card_name=?, photo=?, card_logo=?, card_frame=?, card_background=?, card_color=?, card_type=?, first_name=?, middle_name=?, last_name=?, desgination=?, social_media_links=?, others=? where id=?',
        [$card_name, $profile_image, $company_logo, $card_frame, $card_background, $card_color, $card_type, $first_name, $middle_name, $last_name, $desgination, $social_media_links, $others, $id]);
        return redirect('cards')->with('message','Your Card Updated Successfully');

    }


    //delete card
    public function delete_card($id)
    {
        DB::delete('delete from cards where id=?',[$id]);
        return redirect('cards')->with('message','Your Card Deleted Successfully');
    }
}
