@extends('layouts.home')
@section('content')


<div class="my-5 ml-12 flex justify-left ">
    <a href="{{ route('medications.create') }}" class="flex flex-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded my-3 ml-5">Add_medication</a>
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
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nom</td>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nom_cat</th>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Description_facture</th>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nom_medication</td>
            {{-- <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Date_fabrication</th> --}}
          {{-- <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Date_expiration</th> --}}
          {{-- <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Description_medicament</td> --}}
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</td>
        </tr>
      </thead>
    <tbody class="text-gray-700">

      @foreach ( $medications as $medication )
         <tr class="bg-gray-100">
          <td class="w-1/3 text-left py-3 px-4">{{ $medication->id }}</td>
          <td class="w-1/3 text-left py-3 px-4">{{ $medication->pharmacist->name_pharmacist }}</td>
          <td class="w-1/3 text-left py-3 px-4">{{ $medication->category->name_category }}</td>
          <td class="w-1/3 text-left py-3 px-4">{{ $medication->invoice->description_invoice }}</td>
          <td class="w-1/3 text-left py-3 px-4">{{ $medication->name_medication }}</td>
          <td class="w-1/3 text-left py-3 px-4">{{ $medication->category->manufacturing_date }}</td>
          <td class="w-1/3 text-left py-3 px-4">{{ $medication->invoice->Expiry_date }}</td>
          <td class="w-1/3 text-left py-3 px-4">{{ $medication->description_medication }}</td>
          <td class="w-1/3 text-left py-3 px-4">
            <a href="{{route('medications.show', $medication->id )}}"><i class="fa-solid fa-eye"></i></a>
            <a href="{{route('medications.edit', $medication->id )}}"><i class="far fa-edit"></i></a>
            <a href="{{route('medication_delete.delete', $medication->id )}}"><i class=" fas fa-trash-alt"></i></a>
          </td>
        </tr>
      @endforeach
    </tbody>
    </table>
  </div>
</div>
@endsection