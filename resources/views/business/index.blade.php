@extends('master')

@section('content')
    <div class="business-detail-container">
        <img class="business_logo" src="/img/business_placeholder.png" alt="">

        <h2>{{ $business->name }}</h2>

        <p class="description">{{ $business->description }}</p>

        <div class="address">
            <span>Address:</span> {{ $business->street }}<br>
            <span>City:</span> {{ $business->city }}<br>
            <span>Country:</span> {{ $business->country }}
        </div>

        @if (sizeof($business->owners))
        <div class="owners">
            <span>Owners:</span>
            <ul>
            @foreach ($business->owners as $owner)
                <li>{{ $owner->first_name }} {{ $owner->last_name }}</li>
            @endforeach
            </ul>
        </div>
        @endif
    </div>
@endsection
