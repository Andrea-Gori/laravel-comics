@extends('layouts.app')

@section('main')

<main id="singlePage">
  <div class="main-top">
    <div class="container">
      <img src="{{ $id['thumb'] }}" alt="">
    </div>
  </div>

  <div class="main-mid">
    <div class="container">
      <div class="single-page-content">
        <h2>{{ $id['title'] }}</h2>
        <div class="price">
          <div>
            <p><span class="green">U.S Price: </span> {{ $id['price'] }}</p>
          </div>
          <div class="controlli">
            <span class="green"><p>available</p></span>
            <select name="" id="">
              <option value="">Check Availability</option>
            </select>
          </div>
        </div>
        <div class="description">
          <p>{{ $id['description'] }}</p>
        </div>
      </div>
      <div class="advertise">
        <p>advertisement</p>
        <img src="/images/advertise.jpg" alt="">
      </div>
    </div>
  </div>
  <div class="main-bot">
    <div class="container">
      <div class="container-left">
        <h4>Talent</h4>
        <div class="art">
          <p>Art By: </p>
          @foreach($id['artists'] as $artists)
          <p>{{ $artists }},</p>
          @endforeach
        </div>
        <div class="writers">
          <p>Written by: </p>
          @foreach($id['writers'] as $writers)
          <p>{{ $writers }},</p>
          @endforeach
        </div>
      </div>
      <div class="container-right">
        <h4>Specs</h4>
        <div>
          <p>Series:</p>
          <p>{{ $id['series'] }}</p>
        </div>
        <div>
          <p>U.S. price:</p>
          <p>{{ $id['price'] }}</p>
        </div><div>
          <p>On Sale Date:</p>
          <p>{{ date('M j, Y', strtotime($id['sale_date'])) }}</p>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection
