<!DOCTYPE html>
<html>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/argon.css">
<link rel="stylesheet" href="css/main.css">
</html>
<body>


<div class="container w-50 shadow-lg p-0 mt-5 p-3 rounded">
    <form method="POST" action="{{ route('login') }}" class="">
    @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
    {{--<!-- Email Address -->--}}
    {{--    <div>--}}
    {{--        <x-label for="email" :value="__('Email')"/>--}}

    {{--        <x-input id="email" class="block mt-1 w-full" type="email"  :value="old('email')" required autofocus />--}}
    {{--    </div>--}}

    {{--    <!-- Password -->--}}
    {{--    <div class="mt-4">--}}
    {{--        <x-label for="password" :value="__('Password')" />--}}

    {{--        <x-input id="password" class="block mt-1 w-full"--}}
    {{--                 type="password"--}}

    {{--                 required autocomplete="current-password" />--}}
    {{--    </div>--}}

    {{--    <!-- Remember Me -->--}}
    {{--    <div class="block mt-4">--}}
    {{--        <label for="remember_me" class="inline-flex items-center">--}}
    {{--            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">--}}
    {{--            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
    {{--        </label>--}}
    {{--    </div>--}}

    {{--    <div class="flex items-center justify-end mt-4">--}}
    {{--        @if (Route::has('password.request'))--}}
    {{--            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
    {{--                {{ __('Forgot your password?') }}--}}
    {{--            </a>--}}
    {{--        @endif--}}

    {{--        <x-button class="ml-3">--}}
    {{--            {{ __('Login') }}--}}
    {{--        </x-button>--}}
    {{--    </div>--}}
    </form>
</div>



<script src="js/argon.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
