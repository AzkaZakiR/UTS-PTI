@extends('landingPage.main')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/landing/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('main')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pricing <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Pricing</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-cart">
          <div class="container">
              <div class="row">
              <div class="col-md-12 ftco-animate">
                  <div class="car-list">
                      <table class="table">
                          <thead class="thead-primary">
                            <tr class="text-center">
                              <th>&nbsp;</th>
                              <th>&nbsp;</th>
                              <th class="bg-primary heading">Per Day Rate</th>
                              <th class="bg-dark heading">Per Week Rate</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                            @foreach ($cars as $car)
                                
                            <tr class="">
                                <td class="car-image"><div class="img" style="background-image:url('images/cars/{{$car->image}}');"></div></td>
                              <td class="product-name">
                                  <h3>{{$car->brand}} {{$car->model}}</h3></h3>
                                  <p class="mb-0 rated">
                                      <span>rated:</span>
                                      <span class="ion-ios-star"></span>
                                      <span class="ion-ios-star"></span>
                                      <span class="ion-ios-star"></span>
                                      <span class="ion-ios-star"></span>
                                      <span class="ion-ios-star"></span>
                                  </p>
                              </td>
                              
                              <td class="price">
                                  <p class="btn-custom"><a href="#">Rent a car</a></p>
                                  <div class="price-rate">
                                      <h3>
                                        <span class="num p-2 currency" id="formattedPrice">Rp. {{$car->formatted_price}} </span>
                                          <span class="per">/per day</span>
                                      </h3>
                                      <span class="subheading">Rp. {{$car->overcharge}} per extra hour</span>
                                  </div>
                              </td>
                              <td class="price">
                                  <p class="btn-custom"><a href="#">Rent a car</a></p>
                                  <div class="price-rate">
                                      <h3>
                                          <span class="num">Rp. {{$car->price_per_week}}</span>
                                          <span class="per">/per week</span>
                                      </h3>
                                      <span class="subheading">Rp. {{$car->overcharge}} per extra hour</span>
                              </div>
                              </td>
                            </tr>
                            @endforeach
                            <tr class="">
                                <td class="car-image"><div class="img" style="background-image:url(images/landing/car-1.jpg);"></div></td>
                              <td class="product-name">
                                  <h3>Cheverolet SUV Car</h3>
                                  <p class="mb-0 rated">
                                      <span>rated:</span>
                                      <span class="ion-ios-star"></span>
                                      <span class="ion-ios-star"></span>
                                      <span class="ion-ios-star"></span>
                                      <span class="ion-ios-star"></span>
                                      <span class="ion-ios-star"></span>
                                  </p>
                              </td>
                              <td class="price">
                                  <p class="btn-custom"><a href="#">Rent a car</a></p>
                                  <div class="price-rate">
                                      <h3>
                                          <span class="num"><small class="currency">$</small> 10.99</span>
                                          <span class="per">/per hour</span>
                                      </h3>
                                      <span class="subheading">$3/hour fuel surcharges</span>
                                  </div>
                              </td>
                              <td class="price">
                                  <p class="btn-custom"><a href="#">Rent a car</a></p>
                                  <div class="price-rate">
                                      <h3>
                                          <span class="num"><small class="currency">$</small> 60.99</span>
                                          <span class="per">/per day</span>
                                      </h3>
                                      <span class="subheading">$3/hour fuel surcharges</span>
                              </div>
                              </td>

                            </tr><!-- END TR-->

                          </tbody>
                        </table>
                    </div>
              </div>
          </div>
          </div>
      </section>
      <script>
        // const car = {
        //   price_per_day: 600000
        // };
      
        // const formattedPrice = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(car.price_per_day);
        // document.querySelector('.num').textContent = formattedPrice;

        let index = 5;
        while(i = 0, i < index, i++){
            var price = {{ $car->price_per_day }};
        var formattedPrice = formatCurrency(price);
        document.getElementById('formattedPrice').innerText = formattedPrice;
        function formatCurrency(amount) {
        return 'Rp.' + amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');}
        }
            
      </script>

@endsection