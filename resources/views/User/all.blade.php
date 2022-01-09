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
           <td>name</td>
           <td>email</td>
           <td>identity_card</td>
           <td>national_code</td>
           <td>username</td>
           <td>password</td>
           <td>avatar</td>
           <td>role_id</td>
           <td>major_id</td>
       </tr>

       @for($i=0;$i < count($users);$i++)
       <tr bordered>
           <td>{{$users[$i]['id']}}</td>
           <td><a href="\user\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['name']}}</a></td>
           <td><a href="\user\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['email']}}</a></td>
           <td><a href="\user\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['identity_card']}}</a></td>
           <td><a href="\user\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['national_code']}}</a></td>
           <td><a href="\user\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['username']}}</a></td>
           <td><a href="\user\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['password']}}</a></td>
           <td><a href="\user\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['avatar']}}</a></td>
           <td><a href="\user\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['role_id']}}</a></td>
           <td><a href="\user\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['major_id']}}</a></td>

           <td><a href="\user\{{$users[$i]['id']}}" _blank>Delete</a></td>

        </tr>
       @endfor
   </table>
   </div>
@endsection
