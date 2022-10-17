<x-app-layout>

<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-0 md:gap-6">
        <p class="text-sm leading-center"></p>
      <div class="mt-5 md:mt-0 md:col-span-2 flex justify-center pt-14">

        <form action="{{ route('pharmacists.update', $pharmacist_edit->id ) }}" method="POST" class="" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">

                <div class="col-span-6 sm:col-span-3">
                    @error('name_pharmacist')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                  <input type="text" value="{{ $pharmacist_edit->name_pharmacist }}" name="name_pharmacist" id="name_pharmacist" placeholder="Enter name cashier" autocomplete="name_pharmacist" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('first_name_pharmacist')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                  <input type="text" value="{{ $pharmacist_edit->first_name_pharmacist }}" name="first_name_pharmacist" id="first_name_pharmacist" placeholder="Enter first name...." autocomplete="first_name_pharmacists" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('num_tel_pharmacist')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="number" value="{{ $pharmacist_edit->num_tel_pharmacist }}" name="num_tel_pharmacist" id="num_tel_pharmacist" placeholder="Enter num phone...." autocomplete="num_tel_pharmacist" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('email_pharmacist')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="text" value="{{ $pharmacist_edit->email_pharmacist }}" name="email_pharmacist" id="email_pharmacist" placeholder="Enter email...." autocomplete="email_pharmacist" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
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