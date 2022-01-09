<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use Exception;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    //        'user_id','amount'

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //                   'name','major_id'
        $balances= Balance::query()->select([
            'user_id','amount'
            ])->get();
        if (!$balances){
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
               return view('Balance.all', compact('balances'));
           }
            catch(Exception $exception){

            }
        }
        return view('Balance.all',compact('balances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Balance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                //             'reference_id','credit_card_number','amount','status','test_id','user_id'

        try {
            $balances=Balance::create([
                'user_id'=>$request->reference_id,
                'amount'=>$request->credit_card_number,
            ]);
            return $balances;
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
        $balances= Balance::query()->where('id',$id)->first();
        if (!$balances) {
         return response()->json([
                'msg' => "NOT FOUND",
            ],404);}
         else{
             return view("Balance.edit", compact('balances'));
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
        $balances= Balance::query()->where('id', $id)->first();
        if (!$balances) {
            return response()->json([
                'msg' => "NOT FOUND",
            ], 200);
        }
      //  $tmp=['name'=>$request->name];
      //  $role->update($tmp);
      //  $role->save();
      //  return view("Role.all",compact('role'));
      //            'test_id','user_id','type','action','description','balance'
        //                   'user_id','amount'

    $balances->user_id=$request->user_id;
    $balances->amount=$request->amount;
            // $users->password=$request->password;
            $balances->save();
          return $this->index();    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Balance::query()->where('id', $id)->delete();
        return $this->index();
        }
}
