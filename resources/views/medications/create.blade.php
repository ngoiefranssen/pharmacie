
@extends('layouts.home')
@section('content')
    
<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-0 md:gap-6">
        <p class="text-sm leading-center"></p>
      <div class="mt-5 md:mt-0 md:col-span-2 flex justify-center pt-14">

        <form action="{{ route('medications.store') }}" method="POST" class="" enctype="multipart/form-data">
            @csrf
            @method('post')
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">

                <div class="col-span-6 sm:col-span-3">
                    @error('pharmacist_id')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="pharmacist_id" id="pharmacist_id">
                        @foreach($pharmacists as $pharmacist)
                            <option value="{{ $pharmacist->id }}">{{ $pharmacist->name_pharmacist }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('category_id')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="category_id" id="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name_category }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('invoice_id')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="invoice_id" id="invoice_id">
                        @foreach($invoices as $invoice)
                            <option value="{{ $invoice->id }}">{{ $invoice->description_invoice }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('manufacturing_date')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="date" name="manufacturing_date" id="manufacturing_date" placeholder="Enter amount...." autocomplete="manufacturing_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('name_medication')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="text" name="name_medication" id="name_medication" placeholder="Enter date_invoice...." autocomplete="name_medication" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('Expiry_date')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="date" name="Expiry_date" id="Expiry_date" placeholder="Enter date_invoice...." autocomplete="Expiry_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

               <div class="col-span-6 sm:col-span-3">
                    @error('description_invoice')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <div class="mb-4 xl:w-100">
                        <textarea class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="description_invoice" name="description_invoice" rows="3" placeholder="Your description...."></textarea>
                    </div>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('description_medication')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <div class="mb-4 xl:w-100">
                        <textarea class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="description_medication" name="description_medication" rows="3" placeholder="Your description...."></textarea>
                    </div>
                </div>
            </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="submit">
                Save
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
</div>


@endsection
