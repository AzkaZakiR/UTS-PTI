<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transactions Data</title>

     <!-- plugins:css -->
     <link rel="stylesheet" href="{{ asset('css/cars.css') }}">
     <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
     <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
     <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
     <link rel="stylesheet" href="{{ asset('vendors/typicons/typicons.css') }}">
     <link rel="stylesheet" href="{{ asset('vendors/simple-line-icons/css/simple-line-icons.css') }}">
     <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
     
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>
<body>

  <div class="container-scroller">
    @include('layouts.atas')
    <div class="container-fluid page-body-wrapper"> 
        @include('layouts.sidebar')
      <div class="main-panel">
        <div class="content-scroller"> 
          <div class=" grid-margin   ">
            <div class="card m-2">
                {{-- @dd($transactions) --}}
              <div class="card-body text-center mt-5 ">
                <h4 class="card-title">Transactions Data </h4>
                <p class="card-description">
                  See Recennt Transactions
                  @if(session('message'))
                <div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
                    <strong>{{ session('message') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if(session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('success') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
                </p>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Customer Name</th>
                        <th>Car </th>
                        <th>Total </th>
                        <th>Rent Date</th>
                        <th>Status</th>
                        {{-- <th> Action</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                      @php $counter = 1 @endphp
                      @foreach ($transactions as $transaction) 
                      <tr>
                        {{-- <td>{{$counter++}}</td> --}}
                        <td>{{$loop->index+1}}</td>
                        <td>{{$transaction->customer_name}} </td>
                        <td>{{$transaction->car_model}} {{$transaction->car_brand}}</td>
                        <td> Rp. {{$transaction->total_price}}</td>
                        <td>{{$transaction->rental_start}}
                            <span class="text-muted">until</span>
                            {{$transaction->rental_end}} </td>
                        <td>
                          @if($transaction->status == "success")
                          <label class="badge badge-success">{{$transaction->status}}</label>
                          @elseif($transaction->status == "Maintenance")
                          <label class="badge badge-warning">{{$transaction->status}}</label>
                          @else
                          <label class="badge badge-danger">{{$transaction->status}}</label>
                          @endif
                        </td>
                        {{-- <td> 
                          <a href="{{route('editcars', ['id' => $transaction->id])}}" class="btn btn-info">Edit</a> 
                          <form method="POST" action="{{ route('deletecars', $transaction->id)}}"> 
                            @csrf
                            @method('DELETE')
                            <button href="" class="btn btn-danger">Delete</button>
                          </form>
                        </td> --}}
                      </tr>
                      @endforeach     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            {{-- {{$cars->links()}} --}}
          </div>
        </div>
      </div>
    </div>
  </div>

    <script>
      console.log("Hello fafaf!");
    </script>
      <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
        <script src="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{asset('vendors/chart.js/chart.min.js')}}"></script>
        <script src="{{asset('vendors/progressbar.js/progressbar.min.js')}}"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{asset('js/off-canvas.js')}}"></script>
        <script src="{{asset('js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('js/template.js')}}"></script>
        <script src="{{asset('js/settings.js')}}"></script>
        <script src="{{asset('js/todolist.js')}}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{asset('js/jquery.cookie.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/dashboard.js')}} "></script>
     
</body>
</html>