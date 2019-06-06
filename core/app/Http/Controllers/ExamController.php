<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Logo;
use App\SocialIcon;
use App\Contact;
use App\SubCategory;
use Illuminate\Support\Facades\Session;
use App\Title;
use App\Footer;
use Illuminate\Support\Facades\Auth;
use App\User;

class ExamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function getExam()
    {

        $logo = Logo::first();
        $social = SocialIcon::first();
        $contact = Contact::first();
        $exam_category = SubCategory::orderBy('id', 'DESC')->paginate(10);
        $title = Title::first();
        $footer = Footer::first();
        $curr = Currency::all();
        $user = User::findOrFail(Auth::guard('user')->user()->id);
        $age = $user->getAge(Auth::guard('user')->user()->id);

        foreach ($exam_category as $k => $cat) {
            $eligible = true;
            $gender = $user->gender;
            if (!empty($cat->area) && strtolower($cat->area) != strtolower($user->area)) {
                $eligible = false;
            }
            if (!empty($cat->city) && strtolower($cat->city) != strtolower($user->city)) {
                $eligible = false;
            }else if($cat->city == 1){
                $eligible = true;
            }
            if (!empty($cat->country) && strtolower($cat->country) != strtolower($user->country)) {
                $eligible = false;
            }
            if (!empty($cat->gender) && strtolower($cat->gender) != $gender) {
                $eligible = false;
            }
            if (!empty($cat->age) && $cat->age != $age) {
                $eligible = false;
            }else if($cat->age == 1){
                $eligible = true;
            }

            if (!$eligible) {
                unset($exam_category[$k]);
            }
        }
        return view('exam.exam')
            ->withLogo($logo)
            ->withSocial($social)
            ->withContact($contact)
            ->withCurrency($curr)
            ->withCategory($exam_category)
            ->withTitle($title)
            ->withFooter($footer);
    }

    public function getExamById($id)
    {
        $logo = Logo::first();
        $social = SocialIcon::first();
        $contact = Contact::first();
        $exam_category = SubCategory::orderBy('id', 'DESC')->paginate(10);
        $singleexam = SubCategory::findOrFail($id);
        $title = Title::first();
        $footer = Footer::first();
        Session::put('exam_cat', $id);
        $curr = Currency::all();
        return view('exam.exambyid')
            ->withLogo($logo)
            ->withSocial($social)
            ->withContact($contact)
            ->withCurrency($curr)
            ->withCategory($exam_category)
            ->withSingleexam($singleexam)
            ->withTitle($title)
            ->withFooter($footer);
    }

}
