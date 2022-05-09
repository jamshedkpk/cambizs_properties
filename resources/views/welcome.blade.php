@if (Route::has('login'))
@auth
@include('home')
@else
@include('auth.login')
@if (Route::has('register'))
@include('auth.register')
@endif
@endauth
@endif
