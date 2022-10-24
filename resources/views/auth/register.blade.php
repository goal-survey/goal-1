@extends('layouts.main')

@section('register')


    <x-guest-layout>
        <x-auth-card>
            <x-slot name="logo">
                <a href="/">
                    {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                </a>
            </x-slot>

            <div class="container">
            <div class="border-bottom border-dark py-7">
                <h1 class="text-center fs-lg-7 fs-md-4 fs-3 text-dark mb-5"></h1>
                <div class="row align-items-center gx-xl-7">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />

                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" style="border-radius:5rem ;padding:1rem 1.8rem ; font-weight:200;" required autofocus />

                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />

                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" style="border-radius:5rem ;padding:1rem 1.8rem ; font-weight:200;" required />

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full"
                            style="border-radius:5rem ;padding:1rem 1.8rem ; font-weight:200;" type="password" name="password" required
                                autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            style="border-radius:5rem ;padding:1rem 1.8rem ; font-weight:200;" type="password" name="password_confirmation"
                                required />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <div class="mb-2"><p> Your Role</p></div>
                            <select class="form-control" id="role" name="role" required focus>
                                <option value="user" selected>user</option>
                                <option value="owner" selected>owner</option>
                                <option value="Select Role" disabled selected>Select Role</option>
                            </select>
                        </div>


                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 mx-4" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <button class="btn btn-primary" style="background-color:#01d28e"
                                type="submit">{{ __('Register') }}</button>

                            {{-- <x-primary-button class="ml-4">
                    
                </x-primary-button> --}}
                        </div>
                    </form>

        </x-auth-card>
    </x-guest-layout>
    </div>
    </div>
    </div>
    </div>
    <!-- end of .container-->

    </section>
@endsection
