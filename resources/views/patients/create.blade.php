<x-app-layout>

<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-0 md:gap-6">
        <p class="text-sm leading-center"></p>
      <div class="mt-5 md:mt-0 md:col-span-2 flex justify-center pt-14">

          {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif --}}
        <form action="{{ route('patients.store') }}" method="POST" class="" enctype="multipart/form-data">
            @csrf
            @method('post')

          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">

                <div class="col-span-6 sm:col-span-3">
                    @error('name_patient')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                  <input type="text" name="name_patient" id="name_patient" placeholder="Entrer le nom........." autocomplete="name_patient" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('first_name_patient')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                  <input type="text" name="first_name_patient" id="first_name_patient" placeholder="Enter first name...." autocomplete="first_name_patient" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('age_patient')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="number" name="age_patient" id="age_patient" placeholder="Enter num phone...." autocomplete="age_patient" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('kind_patient')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                  <select id="kind_patient" name="kind_patient" autocomplete="kind_patient" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>choose the gender</option>
                    <option value="F">F</option>
                    <option value="M">M</option>
                  </select>

                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('num_tel_patient')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="number" name="num_tel_patient" id="num_tel_patient" placeholder="Enter num phone...." autocomplete="num_tel_patient" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('email_patient')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="text" name="email_patient" id="email_patient" placeholder="Enter email...." autocomplete="email_patient" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
</div>
</x-app-layout>
