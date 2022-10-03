@extends('master')

@section('content')
    <form action="{{ route('home') }}">
        <div class="countries-container">
            @foreach ($countries as $country)
                <div class="country">
                    <input type="checkbox" id="{{ $country->name }}" name="country[]" value="{{ $country->id }}" @if(request()->has('country') && in_array($country->id, request()->get('country'))) checked @endif>
                    <label for="{{ $country->name }}">{{ $country->name }}</label>
                </div>
            @endforeach
        </div>
        <div class="search-container">
            <input type="text" value="{{ request()->get('search') }}" name="search" placeholder="Search business..">
            <input type="submit" value="Search">
            <a class="button" href="{{ route('home') }}">Reset</a>
        </div>
    </form>
    <div class="businesses-container">
        @foreach ($businesses as $business)
            <a class="business" href="{{ route('get.business', ['id' => $business->id]) }}">
                <h2>{{ $business->name }}</h2>
                <p class="description">{{ $business->description }}</p>
                <div class="address">
                    {{ $business->street }}<br>
                    {{ $business->city }}, {{ $business->country }}
                </div>
            </a>
        @endforeach
    </div>
@endsection
