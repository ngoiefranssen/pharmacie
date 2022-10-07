@extends('layouts.home')
@section('content')

<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-0 md:gap-6">
        <p class="text-sm leading-center"></p>
      <div class="mt-5 md:mt-0 md:col-span-2 flex justify-center pt-14">
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">

                {{-- <h3 class="text-dark-600 "> Les informations de {{ $cashiers_show->name_cashier }}</h3> --}}

                <div class="col-span-6 sm:col-span-3">
                   <p>Nom : {{$cashiers_show->name_cashier}}</p>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <p>Prenom : {{$cashiers_show->first_name_cashier}}</p>
                 </div>

                 <div class="col-span-6 sm:col-span-3">
                    <p>Num_phone : {{$cashiers_show->num_tel_cashier}}</p>
                 </div>

                 <div class="col-span-6 sm:col-span-3">
                    <p>Email : {{$cashiers_show->email_cashier}}</p>
                 </div>

            </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <a href="{{route('cashiers.edit', $cashiers_show->id )}}" class="" type="submit"><i class="far fa-edit"></i>Editer les informations</a>
            </div>
          </div>
      </div>
    </div>
</div>
    
@endsection