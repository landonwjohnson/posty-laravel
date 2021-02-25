@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            Register

            <form action="{{ route('register') }}" method="post">
                @csrf

                <div class="mb-4">


                    <label for="name" class="sr-only">Name </label>
                    <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg
                                        @error('name') border-red-500 @enderror
                                    
                                    " value="{{ old('name') }}" />

                    @error('name')
                        <div class="text-red-500 m5-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="mb-4">

                    <input type="text" name="username" id="username" placeholder="Your username" class="bg-gray-100 border-2 w-full p-4 rounded-lg
                                
                                @error('username') border-red-500 @enderror

                                " value="{{ old('username') }}" />

                    @error('username')
                        <div class="text-red-500 m5-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">

                    <input type="text" name="email" id="email" placeholder="Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg
                                @error('email') border-red-500 @enderror

                                " value={{ old('email') }} />


                    @error('email')
                        <div class="text-red-500 m5-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">

                    <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg
                                @error('password') border-red-500 @enderror

                                
                                " />

                    @error('password')
                        <div class="text-red-500 m5-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">

                    <input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="Password again" class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                         />


                </div>

                <div>
                    <button class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full" type="submit">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>


@endsection
