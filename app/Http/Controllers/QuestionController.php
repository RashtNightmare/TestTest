<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    //        'text','option1','option2','option3','option4','true_answer','test_id'

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //        'test_id','user_id','type','action','description','balance'

        $questions= Question::query()->select([
            'text','option1','option2','option3','option4','true_answer','test_id'
           ])->get();
        if (!$questions){
            return response()->json([
                'data' => '',
                'msg' =>"NOT FOUND"
            ],404);
        }else{
            // return response()->json([
            //     'data' => $users,
            //     'msg' =>"SUCCESSFULLY"
            // ],200);
           try {
               return view('Question.all', compact('questions'));
           }
            catch(Exception $exception){

            }
        }
        return view('Question.all',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $questions=Question::create([
                'text' => $request->text,
                'option1' => $request->option1,
                'option2' => $request->option2,
                'option3' => $request->option3,
                'option4' => $request->option4,
                'true_answer' => $request->true_answer,
                'test_id' => $request->test_id
            ]);
            return $questions;
        } catch (Exception $exception) {
            return response()->json([
                'data' => $exception,
                'msg' => 'failed'], 500);
        }    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // $users= User::query()->select([
        //     'name','email','identity_card','national_code','mobile','username','password','avatar'
        //     ,'role_id','major_id'
        // ])->with('role')->get();
        // if (!$users){
        //     return response()->json([
        //         'data' => '',
        //         'msg' =>"NOT FOUND"
        //     ],404);
        // }else{
        //     // return response()->json([
        //     //     'data' => $users,
        //     //     'msg' =>"SUCCESSFULLY"
        //     // ],200);
        //    try {
        //        return view('User.all', compact('users'));
        //    }
        //     catch(Exception $exception){

        //     }
        // }
        //        return view('User.all', compact('users'));
 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questions= Question::query()->where('id',$id)->first();
        if (!$questions) {
         return response()->json([
                'msg' => "NOT FOUND",
            ],404);}
         else{
             return view("Question.edit", compact('questions'));
         }       }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $questions= Question::query()->where('id', $id)->first();
        if (!$questions) {
            return response()->json([
                'msg' => "NOT FOUND",
            ], 200);
        }
      //  $tmp=['name'=>$request->name];
      //  $role->update($tmp);
      //  $role->save();
      //  return view("Role.all",compact('role'));
    //        'text','option1','option2','option3','option4','true_answer','test_id'

    $questions->text=$request->text;
    $questions->option1=$request->option1;
    $questions->option2=$request->option2;
    $questions->option3=$request->option3;
    $questions->option4=$request->option4;
    $questions->true_answer=$request->true_answer;
    $questions->test_id=$request->test_id;
            // $users->password=$request->password;
            $questions->save();
          return $this->index();    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::query()->where('id', $id)->delete();
        return $this->index();
        }
}
