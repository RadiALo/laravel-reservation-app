@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <div class="container">
    @if (Auth::check())
      <div class="content">
        <h2 class="content__title">Home page</h2>

        <div>
          Hello, {{ Auth::user()->email }}!
        </div>
        @auth
          <div>
            <a class="content__button" href="{{ route('user.logout') }}">Logout</a>
          </div>
        @endauth
        <div>
          @auth
            @include('blocks.bookings-list')
          @endauth
        </div>
      </div>
    @else
      <p>Login to get access to service functionality!</p>
    @endif
  </div>
@endsection
