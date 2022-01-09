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
    <!-- // 'student_id','teacher_id','score','acceptance_quorum','amount','title','major_id','lesson_id','date','duration','start_time' -->

       <tr style="background-color: #aacc09">
       <td>id</td>
        <td>student_id</td>
           <td>teacher_id</td>
           <td>score</td>
           <td>acceptance_quorum</td>
           <td>amount</td>
           <td>title</td>
           <td>major_id</td>
           <td>lesson_id</td>
           <td>date</td>
           <td>duration</td>
           <td>start_time</td>
       </tr>

       @for($i=0;$i < count($tests);$i++)
       <tr bordered>
           <td>{{$tests[$i]['id']}}</td>
    <!-- // 'student_id','teacher_id','score','acceptance_quorum','amount','title','major_id','lesson_id','date','duration','start_time' -->
6
           <td><a href="\test\{{$tests[$i]['id']}}\edit" _blank>{{$tests[$i]['student_id']}}</a></td>
           <td><a href="\test\{{$tests[$i]['id']}}\edit" _blank>{{$tests[$i]['teacher_id']}}</a></td>
           <td><a href="\test\{{$tests[$i]['id']}}\edit" _blank>{{$tests[$i]['score']}}</a></td>
           <td><a href="\test\{{$tests[$i]['id']}}\edit" _blank>{{$tests[$i]['acceptance_quorum']}}</a></td>
           <td><a href="\test\{{$tests[$i]['id']}}\edit" _blank>{{$tests[$i]['amount']}}</a></td>
           <td><a href="\test\{{$tests[$i]['id']}}\edit" _blank>{{$tests[$i]['title']}}</a></td>
           <td><a href="\test\{{$tests[$i]['id']}}\edit" _blank>{{$tests[$i]['major_id']}}</a></td>
           <td><a href="\test\{{$tests[$i]['id']}}\edit" _blank>{{$tests[$i]['lesson_id']}}</a></td>
           <td><a href="\test\{{$tests[$i]['id']}}\edit" _blank>{{$tests[$i]['date']}}</a></td>
           <td><a href="\test\{{$tests[$i]['id']}}\edit" _blank>{{$tests[$i]['duration']}}</a></td>
           <td><a href="\test\{{$tests[$i]['id']}}\edit" _blank>{{$tests[$i]['start_time']}}</a></td>

           <td><a href="\test\{{$tests[$i]['id']}}" _blank>Delete</a></td>

        </tr>
       @endfor
   </table>
   </div>
@endsection
