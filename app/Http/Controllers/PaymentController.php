<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Test;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //             'reference_id','credit_card_number','amount','status','test_id','user_id'


        $payments= Payment::query()->select([
            'reference_id','credit_card_number','amount','status','test_id','user_id'
        ])->get();
        if (!$payments){
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
               return view('Payment.all', compact('payments'));
           }
            catch(Exception $exception){

            }
        }
        return view('Payment.all',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Payment.create');
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
            $payments=Payment::create([
                'reference_id'=>$request->reference_id,
                'credit_card_number'=>$request->credit_card_number,
                'amount'=>$request->amount,
                'status'=>$request->status,
                'test_id'=>$request->test_id,
                'user_id'=>$request->user_id
            ]);
            return $payments;
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
        $payments= Payment::query()->where('id',$id)->first();
        if (!$payments) {
         return response()->json([
                'msg' => "NOT FOUND",
            ],404);}
         else{
             return view("Payment.edit", compact('payments'));
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
        $payments= Payment::query()->where('id', $id)->first();
        if (!$payments) {
            return response()->json([
                'msg' => "NOT FOUND",
            ], 200);
        }
      //  $tmp=['name'=>$request->name];
      //  $role->update($tmp);
      //  $role->save();
      //  return view("Role.all",compact('role'));
      //            'test_id','user_id','type','action','description','balance'
        //             'reference_id','credit_card_number','amount','status','test_id','user_id'

    $payments->reference_id=$request->reference_id;
    $payments->credit_card_number=$request->credit_card_number;
    $payments->amount=$request->amount;
    $payments->status=$request->status;
    $payments->test_id=$request->test_id;
    $payments->user_id=$request->user_id;

            // $users->password=$request->password;
            $payments->save();
          return $this->index();    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Payment::query()->where('id', $id)->delete();
        return $this->index();
    }
    //--------------------------------------------------------------------------------------------------------------------
    public $amount=0;
    public function start(Request $request){
      $change_price=[];
      $products=$request->list;
      foreach($products as $item){
        $temp=Test::query()->where('id',$item['id'])->first();
        if($item['date'] < Carbon::now()->subDay())
         return response()->json([
             'msg' => "The Test Has Been Expired",
         ], 406);
        
        if($item["amount"] == $temp["amount"]){
            $this->amount=$item['price']*$item['num'];        
            continue;
        }
        $item['price']=$temp;
        array_push($change_price,$item);

        if(count($change_price) > 0){
            return response()->json([
                'status'=>false,
                'data' => $change_price
            ],409);
        }else{
            $payment=Payment::create([
                'user_id'=>Auth::id(),
                'amount'=>$this->amount
            ]);
            foreach ($products as $item){
                
            }
        }
      }
    }
}
