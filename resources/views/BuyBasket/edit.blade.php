@extends('index')

@section('content')

<div class="w-full max-w-xs">

{{$baskets['id']}}


<form method ="POST" action="\basket\{{$baskets['id']}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
{{ csrf_field() }}
{{ method_field('PATCH') }}
<span style="background-color:blue;color:white;" class="text-gray-700">BUY BASKET</span>   
<!-- //                    'amount','status','test_id','user_id'
 -->              <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="E-mail">
      Amount
      </label>
      <input value="{{$basket['amount']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="amount"  name="amount" type="text" placeholder="Amount">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="E-mail">
      Status
      </label>
      <input value="{{$basket['status']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="status"  name="status" type="text" placeholder="Status">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="E-mail">
      Test Id
      </label>
      <input value="{{$basket['status']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="test_id"  name="test_id" type="text" placeholder="Test Id">
    </div>  <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="E-mail">
      User Id
      </label>
      <input value="{{$basket['user_id']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="user_id"  name="user_id" type="text" placeholder="User Id">
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Save Changes

      </button>
    </div>
  </form>
  </div>
@endsection