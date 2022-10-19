<x-app-layout>

<div class="my-5 ml-12">
    <a href="{{ route('ordereds.create') }}" class="flex flex-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded my-3 ml-5">Add_ordered</a>
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
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nom_patients</td>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nom_medicaments</th>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Date_commande</th>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Date_delivrer</td>
          {{-- <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Commande_description</th> --}}
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</td>
        </tr>
      </thead>
    <tbody class="text-gray-700">

      @foreach ( $ordereds as $ordered )
         <tr class="bg-gray-100">
          <td class="w-1/3 text-left py-3 px-4">{{ $ordered->id }}</td>
          <td class="w-1/3 text-left py-3 px-4">{{ $ordered->patient->name_patient }}</td>
          <td class="w-1/3 text-left py-3 px-4">{{ $ordered->medication->name_medication }}</td>
          <td class="w-1/3 text-left py-3 px-4">{{ $ordered->ordered_date }}</td>
          <td class="w-1/3 text-left py-3 px-4">{{ $ordered->delivery_date }}</td>
          {{-- <td class="w-1/3 text-left py-3 px-4">{{ $ordered->ordered_description }}</td> --}}
          <td class="w-1/3 text-left py-3 px-4">
            <a href="{{route('ordereds.show', $ordered->id )}}"><i class="fa-solid fa-eye"></i></a>
            <a href="{{route('ordereds.edit', $ordered->id )}}"><i class="far fa-edit"></i></a>
            <a href="{{route('ordered_delete.delete', $ordered->id )}}"><i class=" fas fa-trash-alt"></i></a>
          </td>
        </tr>
      @endforeach
    </tbody>
    </table>
  </div>
</div>

</x-app-layout>