<x-app-layout>

<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-0 md:gap-6">
        <p class="text-sm leading-center"></p>
      <div class="mt-5 md:mt-0 md:col-span-2 flex justify-center pt-14">
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6 ">

                <div class="col-span-6 sm:col-span-3 my-3">
                    <h3 class="text-dark-600 "> Les informations de : {{ $category_show->name_category}}</h3>
                </div>

              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                   <p>Nom_pharmacien : {{ $category_show->pharmacist->name_pharmacist }}</p>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <p>Nom_categorie : {{ $category_show->name_category }}</p>
                 </div>

                 <div class="col-span-6 sm:col-span-3">
                    <p>Description_categorie : {{ $category_show->description_category }}</p>
                 </div>
            </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <a href="{{route('categories.edit', $category_show->id )}}" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="submit">Editer les informations</a>
            </div>
          </div>
      </div>
    </div>
</div>
    
</x-app-layout>