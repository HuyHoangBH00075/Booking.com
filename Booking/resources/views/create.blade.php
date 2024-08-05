@extends('layouts.app')

@section('content')
    <h1>New Booking</h1>

    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf

        <label for="user_id">User:</label>
        <select name="user_id" id="user_id">
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>

        <label for="room_id">Room:</label>
        <select name="room_id" id="room_id">
            @foreach($rooms as $room)
                <option value="{{ $room->id }}">{{ $room->name }}</option>
            @endforeach
        </select>

        <!-- Other booking fields -->

        <button type="submit">Book</button>
    </form>
@endsection
