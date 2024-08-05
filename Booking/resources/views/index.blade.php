@extends('layouts.app')

@section('content')
    <h1>Booking List</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Room</th>
                <!-- Other information columns -->
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->user->name }}</td>
                    <td>{{ $booking->room->name }}</td>
                    <!-- Display other information -->
                    <td>
                        <a href="{{ route('bookings.edit', $booking->id) }}">Edit</a>
                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
