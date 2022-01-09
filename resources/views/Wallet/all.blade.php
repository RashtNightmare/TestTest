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
<!-- 'name','email','identity_card','national_code','mobile','username','password','avatar'
    ,'role_id','major_id' -->
       <tr style="background-color: #aacc09">
       <td>id</td>
       
        <td>test_id</td>
           <td>user_id</td>
           <td>type</td>
           <td>action</td>
           <td>description</td>
           <td>balance</td>

       </tr>

       @for($i=0;$i < count($wallets);$i++)
       <tr bordered>
           <td>{{$wallets[$i]['id']}}</td>
           <!-- //        'test_id','user_id','type','action','description','balance' -->

           <td><a href="\wallet\{{$wallets[$i]['id']}}\edit" _blank>{{$wallets[$i]['test_id']}}</a></td>
           <td><a href="\wallet\{{$wallets[$i]['id']}}\edit" _blank>{{$wallets[$i]['user_id']}}</a></td>
           <td><a href="\wallet\{{$wallets[$i]['id']}}\edit" _blank>{{$wallets[$i]['type']}}</a></td>
           <td><a href="\wallet\{{$wallets[$i]['id']}}\edit" _blank>{{$wallets[$i]['action']}}</a></td>
           <td><a href="\wallet\{{$wallets[$i]['id']}}\edit" _blank>{{$wallets[$i]['description']}}</a></td>
           <td><a href="\wallet\{{$wallets[$i]['id']}}\edit" _blank>{{$wallets[$i]['balance']}}</a></td>


           <td><a href="\wallet\{{$wallets[$i]['id']}}" _blank>Delete</a></td>

        </tr>
       @endfor
   </table>
   </div>
@endsection
