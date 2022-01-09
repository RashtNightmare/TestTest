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
           <!-- 'user_id','test_id','score','status','paid','canceled' -->

       <tr style="background-color: #aacc09">
       <td>id</td>
        <td>user_id</td>
           <td>test_id</td>
           <td>score</td>
           <td>status</td>
           <td>paid</td>
           <td>canceled</td>

       </tr>

       @for($i=0;$i < count($test_students);$i++)
       <tr bordered>
           <td>{{$test_students[$i]['id']}}</td>
           <!-- 'user_id','test_id','score','status','paid','canceled' -->

           <td><a href="\test_student\{{$test_students[$i]['id']}}\edit" _blank>{{$test_students[$i]['user_id']}}</a></td>
           <td><a href="\test_student\{{$test_students[$i]['id']}}\edit" _blank>{{$test_students[$i]['test_id']}}</a></td>
           <td><a href="\test_student\{{$test_students[$i]['id']}}\edit" _blank>{{$test_students[$i]['score']}}</a></td>
           <td><a href="\test_student\{{$test_students[$i]['id']}}\edit" _blank>{{$test_students[$i]['status']}}</a></td>
           <td><a href="\test_student\{{$test_students[$i]['id']}}\edit" _blank>{{$test_students[$i]['paid']}}</a></td>
           <td><a href="\test_student\{{$test_students[$i]['id']}}\edit" _blank>{{$test_students[$i]['canceled']}}</a></td>


           <td><a href="\test_student\{{$test_students[$i]['id']}}" _blank>Delete</a></td>

        </tr>
       @endfor
   </table>
   </div>
@endsection
