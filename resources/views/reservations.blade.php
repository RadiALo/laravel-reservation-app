@extends('layouts.app')

@section('title', 'My Reservations')

@section('content')
  <div class="container">
    @auth
      @include('blocks.bookings-list')
    @endauth
  </div>
@endsection
