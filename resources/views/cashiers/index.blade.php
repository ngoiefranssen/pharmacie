@extends('layouts.home')
@section('content')


<div class="my-5 ml-12 flex justify-left ">
    <a href="{{ route('cashiers.create') }}" class="flex flex-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded my-3 ml-5">Add_Cashier</a>
</div>

<div class="md:px-32 py-1 w-full">
  <div class="shadow overflow-hidden rounded border-b border-gray-200">
    <table class="min-w-full bg-white">
      <thead class="bg-gray-800 text-white">
        <tr>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">First name</th>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Numero_phone</td>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</td>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</td>
        </tr>
      </thead>
    <tbody class="text-gray-700">
      @if ($cashiers->cout())
      @foreach ($cashiers as $cashier)
         <tr class="bg-gray-100">
          <td class="w-1/3 text-left py-3 px-4">{{}}</td>
          <td class="w-1/3 text-left py-3 px-4"></td>
          <td class="w-1/3 text-left py-3 px-4"></td>
          <td class="w-1/3 text-left py-3 px-4"></td>
          <td class="w-1/3 text-left py-3 px-4"></td>
          <td class="w-1/3 text-left py-3 px-4"></td>
        </tr>
      @endforeach
        
      @endif
     
    </tbody>
    </table>
  </div>
</div>


@endsection