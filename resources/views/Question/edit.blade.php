@extends('index')

@section('content')

<div class="w-full max-w-xs">

{{$questions['id']}}


<form method ="POST" action="\question\{{$questions['id']}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
{{ csrf_field() }}
{{ method_field('PATCH') }}
<span style="background-color:blue;color:white;" class="text-gray-700">USERS</span>   
    <!-- 'text','option1','option2','option3','option4','true_answer','test_id' -->
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="E-mail">
      Text
      </label>
      <input value="{{$questions['text']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="text"  name="text" type="text" placeholder="Text">
    </div>
    <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="User Name">
    Option1
      </label>
      <input value="{{$questions['option1']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="option1"  name="option1" type="text" placeholder="Option1">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="E-mail">
      Option2
      </label>
      <input value="{{$questions['option2']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="option2"  name="option2" type="text" placeholder="Option2">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
      Option3
      </label>
      <input  value="{{$questions['option3']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="option3"  name="option3" type="text" placeholder="Option3">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Password">
      Option4
      </label>
      <input  value="{{$questions['option4']}}"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="option4"  name="option4" type="text" placeholder="Option4">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
      True Answer
      </label>
      <input value="{{$questions['true_answer']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="true_answer"  name="true_answer" type="text" placeholder="True Answer">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
      Test Id
      </label>
      <input  value="{{$questions['test_id']}}"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="test_id"  name="test_id" type="text" placeholder="Test Id">
    </div>  
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Save Changes

      </button>
    </div>
  </form>
  </div>
@endsection