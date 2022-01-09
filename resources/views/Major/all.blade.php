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
       <td>name</td>
       </tr>

       @for($i=0;$i < count($majors);$i++)
       <tr bordered>
           <td>{{$majors[$i]['id']}}</td>
           <!-- //             'reference_id','credit_card_number','amount','status','test_id','user_id' -->
               <td><a href="\major\{{$majors[$i]['id']}}\edit" _blank>{{$majors[$i]['name']}}</a></td>
           <td><a href="\major\{{$majors[$i]['id']}}" _blank>Delete</a></td>

        </tr>
       @endfor
   </table>
   </div>
@endsection
