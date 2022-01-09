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
    <!-- 'text','option1','option2','option3','option4','true_answer','test_id' -->

       <tr style="background-color: #aacc09">
       <td>id</td> 
       <td>text</td>
           <td>option1</td>
           <td>option2</td>
           <td>option3</td>
           <td>option4</td>
           <td>true_answer</td>
           <td>test_id</td>
       </tr>

       @for($i=0;$i < count($questions);$i++)
       <tr bordered>
           <td>{{$questions[$i]['id']}}</td>
    <!-- 'text','option1','option2','option3','option4','true_answer','test_id' -->
    
           <td><a href="\question\{{$questions[$i]['id']}}\edit" _blank>{{$questions[$i]['text']}}</a></td>
           <td><a href="\question\{{$questions[$i]['id']}}\edit" _blank>{{$questions[$i]['option1']}}</a></td>
           <td><a href="\question\{{$questions[$i]['id']}}\edit" _blank>{{$questions[$i]['option2']}}</a></td>
           <td><a href="\question\{{$questions[$i]['id']}}\edit" _blank>{{$questions[$i]['option3']}}</a></td>
           <td><a href="\question\{{$questions[$i]['id']}}\edit" _blank>{{$questions[$i]['option4']}}</a></td>
           <td><a href="\question\{{$questions[$i]['id']}}\edit" _blank>{{$questions[$i]['true_answer']}}</a></td>
           <td><a href="\question\{{$questions[$i]['id']}}\edit" _blank>{{$questions[$i]['test_id']}}</a></td>
           <td><a href="\question\{{$questions[$i]['id']}}" _blank>Delete</a></td>

        </tr>
       @endfor
   </table>
   </div>
@endsection
