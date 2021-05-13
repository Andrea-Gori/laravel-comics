@extends('layouts.app')

@section('main')
<main id="home">
<h2>Current Series</h2>
  

  <div class="container">
    @foreach($titoli as $index => $titolo)
    <div class="card">
      <a href="{{route('singlePage',['id' => $index])}}"><img src="{{ $titolo['thumb'] }}" alt=""></a>
      <p>{{ $titolo['series'] }}</p>
    </div>
    @endforeach

    <a href="" class="btn">load more</a>
  </div>

  <div class="main-bot">
    <div class="merch">
      <ul>
        <li>
          <a href="">
            <img src="/images/buy-comics-digital-comics.png" alt="">
            <span>digital comics</span>
          </a>
        </li>
        <li>
          <a href="">
            <img src="/images/buy-comics-merchandise.png" alt="">
            <span>dc merchandise</span>
          </a>
        </li>
        <li>
          <a href="">
            <img src="/images/buy-comics-subscriptions.png" alt="">
            <span>subscription</span>
          </a>
        </li>
        <li>
          <a href="">
            <img src="/images/buy-comics-shop-locator.png" alt="">
            <span>comic shop locator</span>
          </a>
        </li>
        <li>
          <a href="">
            <svg version="1.1" id="Layer_2_1_" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 79.5 50.9" xml:space="preserve"><style>.st0{fill:none;stroke:#fff;stroke-width:1.7732;stroke-miterlimit:10}</style><path class="st0" d="M73.9 49.6H5.3c-2.1 0-3.8-1.7-3.8-3.8V5.4c0-2.1 1.7-3.8 3.8-3.8h68.6c2.1 0 3.8 1.7 3.8 3.8v40.3c0 2.1-1.7 3.9-3.8 3.9zM1.5 15.4h76.2"/><path fill="#fff" stroke="#fff" stroke-width=".998" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M50.1 22.1l-9.7 1.4 5.1-16.4L29 30.2l9.3-1.3L34.4 44z"/></svg>
            <span>dc power visa</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</main>
@endsection
