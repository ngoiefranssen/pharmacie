<x-app-layout>
    
<div class="flex flex-col justify-center items-center">
    <div class="">
        <p class="text-sm leading-center"></p>
      <div class="pt-14">

          {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif --}}
        <form action="{{ route('invoices.store') }}" method="POST" class="" enctype="multipart/form-data">
            @csrf
            @method('post')
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">

                <div class="col-span-6 sm:col-span-3">
                    @error('cashier_id')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="cashier_id" id="cashier_id">
                        @foreach($cashiers as $cashier)
                            <option value="{{ $cashier->id }}">{{ $cashier->name_cashier }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('amount')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="number" name="amount" id="amount" placeholder="Entrer le montant...." autocomplete="amount" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>


               {{-- description --}}

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
                    @error('date_invoice')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="date" name="date_invoice" id="date_invoice" placeholder="Enter date_invoice...." autocomplete="date_invoice" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
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

</x-app-layout>
