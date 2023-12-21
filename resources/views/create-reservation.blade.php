@extends('layouts.app')

@section('title', 'Create Reservation')

@section('content')
  <div class="form">
    <h2 class="form__title">Reservation</h2>

    <form class="form__form" method="post" action="{{ route('reservation.create.post') }}">
      @csrf

      <div>
        <label class="form__label" for="house_name">House:</label>

        <select class="form__input" name="house_name" required>
          <option value="House 0">House 0</option>
          <option value="House 1">House 1</option>
          <option value="House 2">House 2</option>
          <option value="House 3">House 3</option>
        </select>
      </div>

      <div>
        <label class="form__label" for="check_in_date">Check in date:</label>
        <input class="form__input" type="date" name="check_in_date" required>
      </div>

      <div>
        <label class="form__label" for="check_out_date">Check out date:</label>
        <input class="form__input" type="date" name="check_out_date" required>
      </div>

      <button class="form__button" type="submit">Reserve</button>
    </form>
  </div>

@endsection
