<x-app-layout>

  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Caissiers') }}
    </h2>
</x-slot>

<div class="my-5 ml-12 flex justify-left ">
    <a href="{{ route('cashiers.create') }}" class="flex flex-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded my-3 ml-5">Add_Cashier</a>
</div>

@if ($message = Session::get('message'))
  <div class="md:px-64 py-1 w-full">
    <div class="shadow overflow-hidden rounded border-b border-gray-200">
      <div class="alert alert-success">
          <p class="text-blue-600 text-center">{{ $message }}</p>
      </div>
    </div>
  </div>
@endif

<div class="md:px-32 py-1 w-full">
  <div class="shadow overflow-hidden rounded border-b border-gray-200">
    <table class="min-w-full bg-white">
      <thead class="bg-gray-800 text-white">
        <tr>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">First_name</th>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Numero_phone</td>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</td>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</td>
        </tr>
      </thead>
    <tbody class="text-gray-700">

      {{-- @if ( $cashiers->cout() ) --}}
      @foreach ( $cashiers as $cashier )

         <tr class="bg-gray-100">
          <td class="w-1/3 text-left py-3 px-4">{{ $cashier->id }}</td>
          <td class="w-1/3 text-left py-3 px-4">{{ $cashier->name_cashier }}</td>
          <td class="w-1/3 text-left py-3 px-4">{{ $cashier->first_name_cashier }}</td>
          <td class="w-1/3 text-left py-3 px-4">{{ $cashier->num_tel_cashier }}</td>
          <td class="w-1/3 text-left py-3 px-4">{{ $cashier->email_cashier }}</td>
          <td class="w-1/3 text-left py-3 px-4">
            <a href="{{route('cashiers.show', $cashier->id )}}"><i class="fa-solid fa-eye"></i></a>
            <a href="{{route('cashiers.edit', $cashier->id )}}"><i class="far fa-edit"></i></a>
            <a href="{{route('delete_Cashier.delete', $cashier->id )}}"><i class=" fas fa-trash-alt"></i></a>
          </td>
        </tr>
      @endforeach
      {{-- @endif --}}
    </tbody>
    </table>
  </div>
  {{ $cashiers-> }}
</div>


</x-app-layout>