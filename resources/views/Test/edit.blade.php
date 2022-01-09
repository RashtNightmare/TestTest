@extends('index')

@section('content')

<div class="w-full max-w-xs">

{{$tests['id']}}


<form method ="POST" action="\test\{{$tests['id']}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
{{ csrf_field() }}
{{ method_field('PATCH') }}
<span style="background-color:blue;color:white;" class="text-gray-700">USERS</span>   
 <!-- // 'student_id','teacher_id','score','acceptance_quorum','amount','title','major_id','lesson_id','date','duration','start_time' -->
 <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="E-mail">
      Student Id
      </label>
      <input value="{{$tests['student_id']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="student_id"  name="student_id" type="text" placeholder="Student Id">
    </div>
    <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="User Name">
    Teacher Id
      </label>
      <input value="{{$tests['teacher_id']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="test_id"  name="test_id" type="text" placeholder="Test Id">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="E-mail">
      Score
      </label>
      <input value="{{$tests['score']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="score"  name="score" type="text" placeholder="Score">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
      Acceptance Quorum
      </label>
      <input  value="{{$tests['acceptance_quorum']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="acceptance_quorum"  name="acceptance_quorum" type="text" placeholder="Acceptance Quorum">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Password">
      Amount
      </label>
      <input  value="{{$tests['amount']}}"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="amount"  name="amount" type="text" placeholder="Amount">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
      Title
      </label>
      <input value="{{$tests['title']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title"  name="title" type="text" placeholder="Title">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
      Major Id
      </label>
      <input  value="{{$tests['major_id']}}"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="major_id"  name="major_id" type="text" placeholder="Major Id">
    </div>    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
      Lesson Id
      </label>
      <input value="{{$tests['lesson_id']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lesson_id"  name="lesson_id" type="text" placeholder="Lesson Id">
    </div>    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
      Date
      </label>
      <input value="{{$tests['date']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date"  name="date" type="text" placeholder="Date">
    </div> 
     <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
      Duration
      </label>
      <input value="{{$tests['duration']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="duration"  name="duration" type="text" placeholder="Duration">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
      Start Time
      </label>
      <input value="{{$tests['start_time']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="start_time"  name="start_time" type="text" placeholder="Start Time">
    </div>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Save Changes

      </button>
    </div>
  </form>
  </div>
@endsection