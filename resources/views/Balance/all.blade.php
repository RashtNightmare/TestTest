@extends("index")


@section("css")

 table tr td{
    border : #6b7288 dashed 1px;
    padding:20%
    min-width: fit-content
}

@endsection

@section("content")
Delete Option Doesn't work Yet

<div class="p-2">
    <table bordered >
    {{ csrf_field() }} 
    <!-- //             'reference_id','credit_card_number','amount','status','test_id','user_id' -->

       <tr style="background-color: #aacc09">
       <td>id</td>
       <td>user_id</td>
       <td>amount</td>
       </tr>

       @for($i=0;$i < count($balances);$i++)
       <tr bordered>
           <td>{{$balances[$i]['id']}}</td>
           <!-- //             'reference_id','credit_card_number','amount','status','test_id','user_id' -->
    
           <td><a href="\balance\{{$balances[$i]['id']}}\edit" _blank>{{$balances[$i]['user_id']}}</a></td>
           <td><a href="\balance\{{$balances[$i]['id']}}\edit" _blank>{{$balances[$i]['user_id']}}</a></td>
           <td><a href="\balance\{{$balances[$i]['id']}}" _blank>Delete</a></td>

        </tr>
       @endfor
   </table>
   </div>
@endsection
