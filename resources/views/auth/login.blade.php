<x-guest-layout>
    {{-- <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot> --}}


    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    {{-- <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form> --}}


    <div class="main">
        <div class="right_side">
            <div class="logo">FLEXEASE</div>
            <div class="main_title">
                <h1>Welcome to Back</h1>
                <p> Login to continue managing your payments effortlessly.</p>
            </div>
            <div class="links">
                <a href="">Privacy Policy</a>
                <a href="">About Us</a>
                <a href="">Terms & condition</a>
            </div>
        </div>
        <div class="left">
            <div class="head">
                <h1>Login To FlexEase</h1>
                <x-validation-errors class="mb-4" />
            </div>
            <form method="POST" action="{{ route('login') }}" class="for">
                @csrf
                <div class="form_inputs">
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Enter your email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Enter your password" required autocomplete="current-password" />
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 text-center hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif
                </div>
                <button style="
                        padding: 0.5rem;
                        border-radius: 50rem; 
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        background: #1DA756;
                        color: #FFF;
                        font-family: Montserrat;
                        font-size: 18px;
                        font-style: normal;
                        font-weight: 700;
                        line-height: normal;
                        width: 60%;
                        "
                    class="btn" type="submit">Login
                </button>
            </form>
            <div class="flex head items-center justify-end mt-3">
                        <p class="">
                            {{ __('Don\'t have an account?') }}

                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                                Register
                            </a>
                        </p>
                    </div>
            <div class="line">
                <span></span>
                <p>OR</p>
                <span></span>
            </div>
            <div class="icon">
                <div class="google">
                    <img src="../../../assets/Svg/icons8-google.svg" alt="">
                    <p>sign up with Google</p>
                </div>
                <div class=" google">
                    <img src="./../../../assets/icons8-apple-logo-50.png" alt="">
                    <p>sign up with Apple</p>
                </div>
            </div>
        </div>
    </div>
    {{-- </x-authentication-card> --}}
</x-guest-layout>
