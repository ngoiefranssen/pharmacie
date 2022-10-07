@extends('layouts.home')
@section('content')

<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-0 md:gap-6">
        <p class="text-sm leading-center"></p>
      <div class="mt-5 md:mt-0 md:col-span-2 flex justify-center pt-14">
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">

                <h3 class="text-dark-600 "> Les informations de {{ $cashiers_show->name_cashier . " " . $cashiers_show->first_name_cashier }}</h3>

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
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="submit">
                Save
              </button>
            </div>
          </div>
      </div>
    </div>
</div>
    
@endsection