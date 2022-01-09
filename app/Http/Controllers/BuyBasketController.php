<?php


namespace App\Http\Controllers;

use App\Models\BuyBasket;
use Exception;
use Illuminate\Http\Request;

class BuyBasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $baskets= BuyBasket::query()->select([
            'amount','status','test_id','user_id'
            ])->get();
        if (!$baskets){
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
               return view('BuyBasket.all', compact('baskets'));
           }
            catch(Exception $exception){

            }
        }
        return view('BuyBasket.all',compact('baskets'));
        
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BuyBasket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //            'amount','status','test_id','user_id'


        try {
            $baskets=BuyBasket::create([
                'amount'=>$request->amount,
                'status'=>$request->status,
                'test_id'=>$request->test_id,
                'user_id'=>$request->user_id,

            ]);
            return $baskets;
        } catch (Exception $exception) {
            return response()->json([
                'data' => $exception,
                'msg' => 'failed'], 500);
        }      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $baskets= BuyBasket::query()->where('id',$id)->first();
        if (!$baskets) {
         return response()->json([
                'msg' => "NOT FOUND",
            ],404);}
         else{
             return view("BuyBasket.edit", compact('baskets'));
         }    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //        'amount','status','test_id','user_id'

        $baskets= BuyBasket::query()->where('id', $id)->first();
        if (!$baskets) {
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

    $baskets->amount=$request->amount;
    $baskets->status=$request->status;
    $baskets->test_id=$request->test_id;
    $baskets->user_id=$request->user_id;

    // $users->password=$request->password;
            $baskets->save();
          return $this->index();    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BuyBasket::query()->where('id', $id)->delete();
        return $this->index();
        }
}
