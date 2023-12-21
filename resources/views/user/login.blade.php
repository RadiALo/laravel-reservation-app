@extends('layouts.app')

@section('title', 'Login')

@section('content')
  <div class="form">
    <h2 class="form__title">Login</h2>

    <form class="form__form" method="post" action="{{ route('user.login.post') }}">
        @csrf
        <div>
          <label class="form__label" for="login">Email / Phone number:</label>
          <input class="form__input" type="text" name="login" required>
        </div>

        <button class="form__button" type="submit">Login</button>
      </form>
  </div>
@endsection
