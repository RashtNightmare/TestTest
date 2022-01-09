@extends('index')

@section('content')

<div class="w-full max-w-xs">
<div class="w-full max-w-xs">
<form method ="post" action="\lesson" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
{{ csrf_field() }} 
<span style="background-color:blue;color:white;" class="text-gray-700">LESSONS</span>   
     
           <!-- // 'reference_id','credit_card_number','amount','status','test_id','user_id' -->
     <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="E-mail">
      Name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name"  name="name" type="text" placeholder="Name">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="E-mail">
      Major Id
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="major_id"  name="major_id" type="text" placeholder="Major Id">
    </div>

    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Sign In
      </button>
    </div>
  </form>
  </div>
@endsection