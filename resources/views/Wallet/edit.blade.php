@extends('index')

@section('content')

<div class="w-full max-w-xs">

{{$wallets['id']}}


<form method ="POST" action="\wallet\{{$wallets['id']}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
{{ csrf_field() }}
{{ method_field('PATCH') }}
<span style="background-color:blue;color:white;" class="text-gray-700">USERS</span>   
<div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="User Name">
    Test Id
      </label>
      <input value="{{$wallets['test_id']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="test_id"  name="test_id" type="text" placeholder="Test Id">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="E-mail">
      User Id
      </label>
      <input value="{{$wallets['user_id']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="user_id"  name="user_id" type="text" placeholder="User Id">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="E-mail">
      Type
      </label>
      <input value="{{$wallets['type']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="type"  name="type" type="text" placeholder="Type">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
      Action
      </label>
      <input value="{{$wallets['action']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="action"  name="action" type="text" placeholder="action">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Password">
      Description
      </label>
      <input value="{{$wallets['description']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description"  name="description" type="text" placeholder="Description">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
      Balance
      </label>
      <input value="{{$wallets['balance']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="balance"  name="balance" type="text" placeholder="Balance">
    </div>

    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Save Changes

      </button>
    </div>
  </form>
  </div>
@endsection