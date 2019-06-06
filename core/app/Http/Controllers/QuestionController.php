<?php

namespace App\Http\Controllers;

use App\Question;
use App\SubCategory;
use App\Title;
use Illuminate\Http\Request;
use App\User;

use App\Http\Requests;

use Session;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $data = [];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question = Question::orderBy('id', 'DESC')->paginate(10);
        $catall = SubCategory::all();
        $data['site_title'] = Title::first();
        return view('question.index', $data)->withQuestion($question)->withCatall($catall);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $scat = SubCategory::all();
        $data['site_title'] = Title::first();
        return view('question.create', $data)->withScat($scat);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'question_cat_name' => 'required',
            'first_option' => 'required',
            'second_option' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040'
        ]);

        $question = new Question;
        $question->question = $request->question;
        $question->question_cat_name = $request->question_cat_name;
        $question->first_option = $request->first_option;
        $question->second_option = $request->second_option;
        $question->third_option = $request->third_option;
        $question->fourth_option = $request->fourth_option;
        $question->fifth_option = $request->fifth_option;
        if ($request->hasfile('images')) {
            $data = [];
            foreach ($request->file('images') as $image) {
                $name = $image->getClientOriginalName();
                $image->move(public_path() . '/images/', $name);
                $data[] = $name;
            }
            $question->images = json_encode($data);
        }
        if ($request->hasfile('video')) {
            $video = $request->file('video');
                $name = $video->getClientOriginalName();
                $video->move(public_path() . '/videos/', $name);
                $question->video = $name;
        }
        $scat = SubCategory::find($question->question_cat_name);
        $date = date(('d-m-Y'), strtotime("-" . $scat->age . " years"));
        $users = User::where([
            'area' => $scat->area,
            'city' => $scat->city,
            'country' => $scat->country,
            'gender' => $scat->gender,
            'dob' => $date
        ])->get()->toArray();
        $users = array_map(function($user){
            return $user['email'];
        }, $users);
        $recipients = implode(',',$users);
        if (!empty($users)) {
            $to = $recipients;
            $from = 'muhammadarsalan11092@gmail.com';
            $headers = 'no-reply muhammadarsalan11092@gmail.com';
            $subject = 'A new survey has been created';
            $msg = 'Visit Raaye and start submitting your feedbacks';
            mail($to, $from, $headers, $subject, $msg);
        }
        $question->save();
        session()->flash('success', 'Question Created Succesfully.');
        return redirect()->route('question.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addQuestionById($id)
    {
        $scat = SubCategory::findOrFail($id);
        $allscat = SubCategory::all();
        $data['site_title'] = Title::first();
        return view('question.create_category', $data)->withScat($scat)->withAllscat($allscat);
    }

    public function postQuestionById(Request $request, $id)
    {
        $data['site_title'] = Title::first();
        $scat = SubCategory::findOrFail($id);
        $allscat = SubCategory::all();

        $this->validate($request, [
            'question' => 'required|unique:questions,question',
            'question_cat_name' => 'required',
            'first_option' => 'required',
            'second_option' => 'required',
        ]);

        $question = new Question;
        $question->question = $request->question;
        $question->question_cat_name = $request->question_cat_name;
        $question->first_option = $request->first_option;
        $question->second_option = $request->second_option;
        $question->third_option = $request->third_option;
        $question->fourth_option = $request->fourth_option;
        $question->fifth_option = $request->fifth_option;
        $question->save();
        session()->flash('success', 'Question Created Succesfully.');
        return view('question.create_category', $data)->withScat($scat)->withAllscat($allscat);

    }

    public function viewQuestionById($id)
    {
        $scat = SubCategory::findOrFail($id);
        $scatname = $scat->name;
        $scatid = $scat->id;
        $question = Question::where('question_cat_name', '=', $scatid)->paginate(10);
        $data['site_title'] = Title::first();
        return view('question.view_category', $data)->withQuestions($question)->withScatid($scatid)->withScatname($scatname);
    }

    public function showQuestionById($id)
    {
        $question = Question::findOrFail($id);
        $answer = $question->answer;
        if ($answer == 'first') {
            $question_answer = $question->first_option;
        } elseif ($answer == 'second') {
            $question_answer = $question->second_option;
        } elseif ($answer == 'third') {
            $question_answer = $question->third_option;
        } elseif ($answer == 'fourth') {
            $question_answer = $question->fourth_option;
        } else {
            $question_answer = $question->fifth_option;
        }
        $data['site_title'] = Title::first();
        $data['images'] = [];

        if (!empty($question->images))
            $data['images'] = json_decode($question->images, true);

        return view('question.show_question', $data)->withQuestion($question)->withQuestionanswer($question_answer);
    }

    public function editQuestionById($id)
    {
        $question = Question::findOrFail($id);
        $qcat = SubCategory::all();
        $data['site_title'] = Title::first();
        return view('question.edit_question', $data)->withQuestion($question)->withQcat($qcat);
    }

    public function updateQuestionById(Request $request, $id)
    {
        $question = Question::findOrFail($id);
        $this->validate($request, [
            'question' => 'required',
            'question_cat_name' => 'required',
            'first_option' => 'required',
            'second_option' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040'
        ]);

        $question->question = $request->input('question');
        $question->question_cat_name = $request->input('question_cat_name');
        $question->first_option = $request->input('first_option');
        $question->second_option = $request->input('second_option');
        $question->third_option = $request->input('third_option');
        $question->fourth_option = $request->input('fourth_option');
        $question->fifth_option = $request->input('fifth_option');
        if ($request->hasfile('video')) {
            $video = $request->file('video');
            $name = $video->getClientOriginalName();
            $video->move(public_path() . '/videos/', $name);
            $question->video = $name;
        }else{
            $question->video = $request->input('video_alt');
        }

        if ($request->hasfile('images')) {
            $data = [];
            foreach ($request->file('images') as $image) {
                $name = $image->getClientOriginalName();
                $image->move(public_path() . '/images/', $name);
                $data[] = $name;
            }
            $question->images = json_encode($data);
        }else{
            $question->images = $request->input('images_alt');
        }

        $question->save();

        //$scatname = $request->input('question_cat_name');
        //$question = Question::where('question_cat_name', '=', $scatname)->paginate(10);

        session()->flash('success', 'Question Updated Succesfully.');

        //return view('question.view_category')->withQuestions($question)->withScatid($id)->withScatname($scatname);
        /*return redirect()->back();*/

        $qcat = SubCategory::all();
        $data['site_title'] = Title::first();

        return view('question.edit_question', $data)->withQuestion($question)->withQcat($qcat);
    }

    public function deleteQuestionById($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();
        session()->flash('success', 'Question Deleted Succesfully.');
        return redirect()->route('question.index');
    }

}
