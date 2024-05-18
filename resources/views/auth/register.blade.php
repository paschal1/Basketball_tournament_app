@extends('layouts.ui')
@section('content')
<!--// Main Content \\-->
<div class="sportsmagazine-main-content">

    <!--// Main Section \\-->
    <div class="sportsmagazine-main-section sportsmagazine-login-form-full">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="sportsmagazine-login-form sportsmagazine-register-form">
                        <h4>Register Your Account Now</h4>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <ul>
                                <li><label class="form-label">Your Name </label><input type="text" class="form-control" style="border: 1px solid gray;" name="name" value="Enter name here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }"></li>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                <li><label class="form-label">Your Email</label><input type="email" name="email" class="form-control" style="border: 1px solid gray;" value="Enter email here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }"></li>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                <li><label class="form-label">Password</label><input type="password" name="password" class="form-control" style="border: 1px solid gray;" value="Enter password here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }"></li>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                <li><label class="form-label">Confirm Password</label><input type="password"  class="form-control" style="border: 1px solid gray;" value="Confirm your password here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" name="password_confirmation" required autocomplete="new-password"></li>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />


                                <li>
                                    <label class="submit-border"><input type="submit" value="Register"><span></span></label>
                                </li>
                                <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}<label for="login">{{ __('Login') }}</label>
                                    </a>

                                </div>
                            </ul>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

</div>
<!--// Main Content \\-->
@endsection
