@extends('layouts.main')

@section('content')

<div class="container-lg" style="margin: 0 auto;">
  <div class="row mt-5 ms-5">

  @if(isset($response['data']))

    @foreach($response['data'] as $match)
    <div class="col-lg-6 col-md-12 col-sm-12 text-center mb-3">
        <div class="card" style="width: 25rem;">
      
          <div class="card-body">
            <div class="card-title" style="font-weight:bold">
            <img style="width:30px" src="{{ $match['teams']['home']['img'] }}"/>
            {{ $match['teams']['home']['name'] }} {{ $match['scores']['home_score'] }} -
            {{ $match['scores']['away_score'] }} {{ $match['teams']['away']['name'] }} 
            <img style="width:30px" src="{{ $match['teams']['away']['img'] }}"/>
          </div>
            <div class="card-text" style="font-size: 12px;">{{ $match['time']['datetime'] }} {{ $match['time']['timezone'] }}</div>
            <div class="card-text" style="font-size: 12px;">{{ $match['status_name'] }}</div>
            <div class="card-text" style="font-size: 12px;">{{ $match['league']['name'] }} - {{ $match['league']['country_name'] }}</div>
          </div>
        </div>
    </div>
    @endforeach

  @else
    There are no soccer matches.
  @endif

  </div>
</div>


@endsection