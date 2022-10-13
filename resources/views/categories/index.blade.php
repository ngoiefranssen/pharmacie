@extends('layouts.home')
@section('content')

<div class="my-5 ml-12 flex justify-left ">
    <a href="{{ route('categories.create') }}" class="flex flex-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded my-3 ml-5">Add_Categorie</a>
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
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nom_pharmacien</th>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name_categorie</th>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">description_category</th>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</td>
        </tr>
      </thead>
    <tbody class="text-gray-700">
      @foreach ( $categories as $category )
         <tr class="bg-gray-100">
            <td class="w-1/3 text-left py-3 px-4">{{ $category->id }}</td>
            <td class="w-1/3 text-left py-3 px-4">{{ $category->pharmacist->name_pharmacist }}</td>
            <td class="w-1/3 text-left py-3 px-4">{{ $category->name_category }}</td>
            <td class="w-1/3 text-left py-3 px-4">{{ $category->description_category }}</td>
            <td class="w-1/3 text-left py-3 px-4">
              <a href="{{ route('categories.show', $category->id )}}"><i class="fa-solid fa-eye"></i></a>
              <a href="{{ route('categories.edit', $category->id )}}"><i class="far fa-edit"></i></a>
              <a href="{{route('delete_category.delete', $category->id )}}"><i class=" fas fa-trash-alt"></i></a>
            </td>
          </tr>
        @endforeach
    </tbody>
    </table>
  </div>
</div>
@endsection