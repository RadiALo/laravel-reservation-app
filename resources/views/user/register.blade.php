@extends('layouts.app')

@section('title', 'Register')

@section('content')
  <div class="form">
    <h2 class="form__title">Register</h2>

    <form class="form__form" method="post" action="{{ route('user.register.post') }}">
      @csrf
      <div>
        <label class="form__label" for="email">E-mail:</label>

        <input class="form__input" type="email" name="email" required>
      </div>

      <div>
        <label class="form__label" for="phone_number">Number:</label>

        <input class="form__input" type="text" name="phone_number" required>
      </div>

      <div>
        <label class="form__label" for="date_of_birth">Date of birth:</label>

        <input class="form__input" type="date" name="date_of_birth" required>
      </div>

      <div>
        <label class="form__label" for="gender">Sex:</label>

        <select class="form__input" name="gender" required>
          <option value="male">Man</option>
          <option value="female">Woman</option>
        </select>
      </div>

      <div>
        <label class="form__label" for="occupation">Occupation:</label>

        <select class="form__input" name="occupation" required>
          <option value="student">Student</option>
          <option value="employee">Salaried employee</option>
          <option value="self-employed">FOP</option>
        </select>
      </div>

      <button class="form__button" type="submit">Register</button>
    </form>
  </div>





@endsection
