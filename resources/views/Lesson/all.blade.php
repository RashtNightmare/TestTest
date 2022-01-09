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
       <td>major_id</td>
       </tr>

       @for($i=0;$i < count($lessons);$i++)
       <tr bordered>
           <td>{{$lessons[$i]['id']}}</td>
           <!-- //             'reference_id','credit_card_number','amount','status','test_id','user_id' -->
    
           <td><a href="\lesson\{{$lessons[$i]['id']}}\edit" _blank>{{$lessons[$i]['name']}}</a></td>
           <td><a href="\lesson\{{$lessons[$i]['id']}}\edit" _blank>{{$lessons[$i]['major_id']}}</a></td>
           <td><a href="\lesson\{{$lessons[$i]['id']}}" _blank>Delete</a></td>

        </tr>
       @endfor
   </table>
   </div>
@endsection
