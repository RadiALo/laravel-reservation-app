@auth
    <div class="content">
        <h2 class="content_title">Ваші бронювання:</h2>

        @php
        $reservations = auth()->user()->reservations;
    @endphp
    @if($reservations && $reservations->isNotEmpty())
        @foreach ($reservations as $reservation)
            <p>House: {{ $reservation->house_name }} - {{ $reservation->check_in_date }} until {{ $reservation->check_out_date }} (created {{ $reservation->created_at }})</p>
        @endforeach
    @else
        <p>Ви ще не зробили жодного бронювання.</p>
    @endif
    </div>
@endauth
