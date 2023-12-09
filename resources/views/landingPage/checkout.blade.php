<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Out</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('css/landingcss/css/open-iconic-bootstrap.min.css')}} ">
<link rel="stylesheet" href="{{asset('css/landingcss/css/animate.css')}} ">
<link rel="stylesheet" href="{{asset('css/landingcss/css/owl.carousel.min.css')}} ">
<link rel="stylesheet" href="{{asset('css/landingcss/css/owl.theme.default.min.css')}} ">
<link rel="stylesheet" href="{{asset('css/landingcss/css/magnific-popup.css')}} ">
<link rel="stylesheet" href="{{asset('css/landingcss/css/aos.css')}} ">
<link rel="stylesheet" href="{{asset('css/landingcss/css/ionicons.min.css')}} ">
<link rel="stylesheet" href="{{asset('css/landingcss/css/bootstrap-datepicker.css')}} ">
<link rel="stylesheet" href="{{asset('css/landingcss/css/jquery.timepicker.css')}} ">
<link rel="stylesheet" href="{{asset('css/landingcss/css/flaticon.css')}} ">
<link rel="stylesheet" href="{{asset('css/landingcss/css/icomoon.css')}} ">
<link rel="stylesheet" href="{{asset('css/landingcss/css/style.css')}} ">
<link rel="stylesheet" href="{{asset('css/landingcss/checkout.css')}} ">

<!-- Include datepicker CSS and JavaScript files -->

<body>
    <div class="nav-fill"> 
    @include('layouts.navbar')
    </div>
    
   
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(https://midigator.com/wp-content/uploads/2021/07/what-is-a-transaction-dispute-featured-image.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
              <p class="breadcrumbs"><span class="mr-2"><a href="{{route('main')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Our Services</h1>
          </div>

        </div>
        <h1 class="text-center mt-3">Check Out</h1>

      </div>
    </section>

    <div class="container" id="first">
        <div class="row m-0">
            <div class="col-lg-7 pb-5 pe-lg-5">
              <div class="row">
                <div class="col-10 p-5">
                  <img src="/images/cars/{{$car->image}}" alt="" />
                </div>
                <div class="row ml-5 bg-light">
                  <div class="col-md-4 col-6 ps-30 pe-0 my-4">
                    <p class="text-muted">Enginne</p>
                    <p class="h5">{{$car->engine}} <span class="ps-1"></span></p>
                  </div>
                  <div class="col-md-4 col-6 ps-30 my-4">
                    <p class="text-muted">Transmission</p>
                    <p class="h5 m-0">{{$car->transmission}} </p>
                  </div>
                  <div class="col-md-4 col-6 ps-30 my-4">
                    <p class="text-muted">Type </p>
                    <p class="h5 m-0">{{$car->type}} </p>
                  </div>
                  <div class="col-md-4 col-6 ps-30 my-4">
                    <p class="text-muted">Seats </p>
                    <p class="h5 m-0">{{$car->seats}}</p>
                  </div>
                  <div class="col-md-4 col-6 ps-30 my-4">
                    <p class="text-muted">Luggage</p>
                    <p class="h5 m-0">{{$car->seats}}</p>
                  </div>
                  <div class="col-md-4 col-6 ps-30 my-4">
                    <p class="text-muted">Gasoline</p>
                    <p class="h5 m-0">{{$car->gasoline}}</p>
                  </div>
                </div>
              </div>
            </div>
          <div class="col-lg-5 p-0 ps-lg-4">
            <form method="POST" action="{{ route('createtransactions', $car->
            id)}}" >
            @csrf      
              <div class="row m-0">
                <div class="col-12 px-4">
                  @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                  @endif      
                  <div class="d-flex align-items-end mt-4 mb-2">
                    <p class="h4 m-0"><span class="pe-1">{{$car->brand}} </span><span class="pe-1">{{$car->model}} </span></p>
                  </div>
                  <div class="d-flex">
                    <div class="form-group mr-2">
                        <label for="" class="label">Pick-up date</label>
                        <input type="text" class="form-control" id="book_pick_date" placeholder="Date" name="rental_start">
                    </div>
                    <div class="form-group ml-2">
                        <label for="" class="label">Drop-off date</label>
                        <input type="text" class="form-control" id="book_off_date" placeholder="Date" name="rental_end">
                    </div>
                  </div>
                </div>
                <div div class="col-12 px-0">
                  <div class="row bg-light m-0">
                    <div class="col-12 px-4 my-4">
                      <p class="fw-bold">Payment detail</p>
                    </div>
                    <div class="col-12 px-4">
                      <div class="d-flex justify-content-between mb-2">
                        <p class="textmuted">Price Per Day </p>
                        <p class="fs-14 fw-bold" id="price_per_day">{{$car->formatted_price}} </p>
                      </div>
                      <div class="d-flex justify-content-between mb-2">
                        <p class="textmuted">Price Per Week </p>
                        <p class="fs-14 fw-bold" id="price_per_week">{{$car->price_per_week}} </p>
                      </div>
                      <div class="d-flex justify-content-between mb-2">
                        <p class="textmuted">Days </p>
                        <p class="fs-14 fw-bold" id="days_paragraph"> </p>
                      </div>
                      <div class="d-flex justify-content-between mb-3">
                        <p class="textmuted fw-bold">Total</p>
                        <div class="d-flex align-text-top" ><span class="h4" id="total_price" name="total_price" >        
                        </span></div>
                      </div>
                      <input type="hidden" id="total_price_input" name="total_price">
                    </div>
                  </div>
                  <div class=" mb-4 p-0">
                    <button  type="submit" class="btn btn-primary hover">Rent<span class="fas fa-arrow-right ps-2"></span></button>
                  </div>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
    </div>
    @include('layouts.footer')

    <script>
      $(function () {
          // Add change event to datepickers
          $("#book_pick_date, #book_off_date").change(function () {
              var startDate = $("#book_pick_date").datepicker("getDate");
              var endDate = $("#book_off_date").datepicker("getDate");
  
              if (startDate && endDate) {
                var timeDiff = endDate - startDate;
                var daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));

                $("#days_paragraph").text(daysDiff);

                var price_per_day = document.getElementById('price_per_day').textContent;
                var price_per_week = document.getElementById('price_per_week').textContent;

                let price_day = price_per_day.replace(/,/g, '');
                let price_week = price_per_week.replace(/,/g, '');

                price_day = parseInt(price_day, 10);
                price_week = parseInt(price_week, 10);

                console.log("Price week", price_week);
                let sisa_hari = daysDiff % 7;
                let weeks = (daysDiff - sisa_hari) / 7;
                console.log("Number of days: " + daysDiff, "number of weeks: " + weeks);

                let total_price = daysDiff * price_day;
                if(daysDiff % 7 == 0){
                  total_price =  price_week * weeks;
                } else if(daysDiff > 7){
                  total_price =  price_week * weeks + (sisa_hari * price_day);
                } else {
                  total_price =  sisa_hari * price_day;
                }
                let formattedTotalPrice = total_price.toLocaleString();

                $("#total_price").text(formattedTotalPrice);
                $("#total_price_input").val(formattedTotalPrice);
                var total_harga = document.getElementById('total_price_input').val;
                console.log("Total harga", price_week);

              }
          });
      });
  </script>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('js/landingjs/js/jquery-migrate-3.0.1.min.js')}}  "></script>
    <script src="{{asset('js/landingjs/js/jquery.waypoints.min.js')}}  "></script>
    <script src="{{asset('js/landingjs/js/jquery.stellar.min.js')}}  "></script>
    <script src="{{asset('js/landingjs/js/owl.carousel.min.js')}}  "></script>
    <script src="{{asset('js/landingjs/js/jquery.magnific-popup.min.js')}}  "></script>
    <script src="{{asset('js/landingjs/js/bootstrap-datepicker.js')}}  "></script>
    <script src="{{asset('js/landingjs/js/scrollax.min.js')}}  "></script>
    <script src="{{asset('js/landingjs/js/main.js')}}  "></script>


</body>
</html>

