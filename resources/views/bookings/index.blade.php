<x-layouts.layout title="Bookings">

    <section class="section">
        <h1 class="title">
            Bookings
        </h1>
        @foreach ($bookings as $booking)
            <p>{{ $booking->status }}</p>
        @endforeach
    </section>

</x-layouts.layout>