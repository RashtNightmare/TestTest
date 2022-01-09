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
        <td>reference_id</td>
           <td>credit_card_number</td>
           <td>amount</td>
           <td>status</td>
           <td>test_id</td>
           <td>user_id</td>
       </tr>

       @for($i=0;$i < count($payments);$i++)
       <tr bordered>
           <td>{{$payments[$i]['id']}}</td>
           <!-- //             'reference_id','credit_card_number','amount','status','test_id','user_id' -->
    
           <td><a href="\payment\{{$payments[$i]['id']}}\edit" _blank>{{$payments[$i]['reference_id']}}</a></td>
           <td><a href="\payment\{{$payments[$i]['id']}}\edit" _blank>{{$payments[$i]['credit_card_number']}}</a></td>
           <td><a href="\payment\{{$payments[$i]['id']}}\edit" _blank>{{$payments[$i]['amount']}}</a></td>
           <td><a href="\payment\{{$payments[$i]['id']}}\edit" _blank>{{$payments[$i]['status']}}</a></td>
           <td><a href="\payment\{{$payments[$i]['id']}}\edit" _blank>{{$payments[$i]['test_id']}}</a></td>
           <td><a href="\payment\{{$payments[$i]['id']}}\edit" _blank>{{$payments[$i]['user_id']}}</a></td>
           <td><a href="\payment\{{$payments[$i]['id']}}" _blank>Delete</a></td>

        </tr>
       @endfor
   </table>
   </div>
@endsection
