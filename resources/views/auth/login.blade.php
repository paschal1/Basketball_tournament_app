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
                        <h4>Login To Your Account</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="card-body">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif

                                {{-- {{ __('login in status!') }} --}}
                            </div>
                            <ul>
                                <li><label class="form-label">{{__('Your Email')}}</label><input type="email" class="form-control dark:border-gray-700 dark:bg-gray-900 border-gray-300 border-gray-800" style="border: 1px solid gray;" value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" name="email" required></li>
                                <li><label class="form-label">{{__('Password')}}</label><input type="password" class="form-control" style="border: 1px solid gray;" value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" name="password" required></li>


                                <!-- Remember Me -->
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                                @endif

                                </li>
                                <li>
                                    <label class="submit-border"><input type="submit" value="{{ __('Log in') }}"><span></span></label>
                                </li>
                            </ul>
                        </form>
                        <ul class="sportsmagazine-login-social">
                            <li><a href="https://www.facebook.com/" class="color-one"><i class="fa fa-facebook"></i>facebook</a></li>
                            <li><a href="https://twitter.com/login" class="color-two"><i class="fa fa-twitter"></i>Twitter</a></li>
                            <li><a href="https://plus.google.com/" class="color-three"><i class="fa fa-google-plus"></i>Google+</a></li>
                            <li><a href="https://www.instagram.com/accounts/login/" class="color-four"><i class="fa fa-instagram"></i>Instagram</a></li>
                        </ul>
                        <span>Not A Member Yet ?<a href="{{ route('register')}}"> Sign - Up Now !</a></span>
                    </div>
                </div>
               

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

</div>
<!--// Main Content \\-->
@endsection
