@extends('layouts.home')
@section('content')

<div class="h-screen bg-white relative flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white md:shadow-lg shadow-none rounded p-6 w-96" >
        <h1 class="text-3xl text-center font-bold leading-normal" >Update Cashier</h1>
        <p class="text-sm leading-normal">Edit the information in front of you if you want to do so</p>
        {{-- <div>
            @if ($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{  $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div> --}}
        <form class="space-y-5 mt-5" action="{{ route('cashiers.update', $cashier_edit->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4 relative">
                <input id="name_cashier" name="name_cashier" value="{{ $cashier_edit->name_cashier }}" class="w-full rounded px-3 border border-gray-500 pt-5 pb-2 focus:outline-none input active:outline-none" type="text" autofocus>
                @error('name_cashier')
                    <div class="text-blue-600 text-xs text-center">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4 relative">
                <input id="first_name_cashier" name="first_name_cashier" value="{{ $cashier_edit->first_name_cashier }}" class="w-full rounded px-3 border border-gray-500 pt-5 pb-2 focus:outline-none input active:outline-none" type="text" autofocus>
                @error('first_name_cashier')
                    <div class="text-blue-600 text-xs text-center">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4 relative">
                <input id="num_tel_cashier" value="{{ $cashier_edit->num_tel_cashier }}" name="num_tel_cashier" class="w-full rounded px-3 border border-gray-500 pt-5 pb-2 focus:outline-none input active:outline-none" type="number" autofocus>
                @error('num_tel_cashier')
                    <div class="text-blue-600 text-xs text-center">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4 relative">
                <input id="email_cashier" value="{{ $cashier_edit->email_cashier }}" name="email_cashier" class="w-full rounded px-3 border border-gray-500 pt-5 pb-2 focus:outline-none input active:outline-none" type="text" autofocus>
                @error('email_cashier')
                    <div class="text-blue-600 text-xs text-center">{{ $message }}</div>
                @enderror
            </div>

            <button class="w-full text-center bg-blue-700 hover:bg-blue-900 rounded-full text-white py-3 font-medium" type="submit">Register</button>
        </form>
    </div>

    {{-- <p>New to LinkedIn?<a class="text-blue-700 font-bold hover:bg-blue-200 hover:underline hover:p-5 p-2 rounded-full" href="#">Join now</a></p> --}}
</div>


@endsection