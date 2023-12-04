<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add cars</title>

     <link rel="stylesheet" href="{{ asset('css/cars.css') }}">
     <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
     <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
     <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
     <link rel="stylesheet" href="{{ asset('vendors/typicons/typicons.css') }}">
     <link rel="stylesheet" href="{{ asset('vendors/simple-line-icons/css/simple-line-icons.css') }}">
     <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
     

  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>
<body>
    <!-- resources/views/cars/form.blade.php -->

    <div class="container-scroller">
        @include('layouts.atas')
        <div class="container-fluid page-body-wrapper"> 
            @include('layouts.sidebar')
            <div class="main-panel ">
                <div class="content-scroller "> 
                    <div class="card m-5">
                        @if(!empty($car))
                        <h2 class="text-center mt-2">Edit car</h2>
                        @else
                        <h2 class="text-center mt-2">Add car</h2>
                        @endif
                        <div class="card-body">
                            {{-- <form  method="POST" action="{{!empty($car) ? route('updatecars', $car->id) : route('storecars') }}"  enctype="multipart/form-data"> --}}
                            <form method="POST" action="{{ !empty($car) ? route('updatecars', $car->id) : route('storecars') }}" enctype="multipart/form-data">
                             {{-- action="{{ route('storecars')}}" --}}
                            {{-- action="{{!empty($car) ? route('updatecars', $car->id) : route('storecars') }}"  enctype="multipart/form-data"> --}}
                                @csrf
                                @if(!empty($car))
                                @method('PATCH')
                                @endif

                                <div class="mb-3"> <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" name="image" value="{{ isset($car) ? $car->image : '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="brand">Brand:</label>
                                    <input type="text" class="form-control" id="brand" name="brand" required 
                                    {{-- value="{{old('brand', $car->brand) }}" --}}
                                    value="{{ isset($car) ? $car->brand : '' }}">
                                </div>
                        
                                <div class="form-group">
                                    <label for="model">Model:</label>
                                    <input type="text" class="form-control" id="model" name="model" required value="{{ isset($car) ? $car->model : '' }}">
                                </div>
                        
                                <div class="form-group">
                                    <label for="year">Year:</label>
                                    <input type="text" class="form-control" id="year" name="year" required value="{{ isset($car) ? $car->year : '' }}">
                                </div>
                        
                                <div class="mb-3">       
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="Rented" {{ isset($car) && $car->status === 'Available' ? 'selected' : '' }}>Available</option>      
                                        <option value="Rented" {{ isset($car) && $car->status === 'Rented' ? 'selected' : '' }}>Rented</option>
                                        <option value="Maintenance" {{ isset($car) && $car->status === 'Maintenance' ? 'selected' : '' }}>Maintenance</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="plat_number">Plate Number:</label>
                                    <input type="text" class="form-control" id="plat_number" name="plat_number" required value="{{ isset($car) ? $car->plat_number : '' }}">
                                </div>
                        
                                <div class="form-group">
                                    <label for="color">Color:</label>
                                    <input type="text" class="form-control" id="color" name="color" value="{{ isset($car) ? $car->color : '' }}"> 
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     {{-- <div class="form-group">
                                    <label for="mileage">Mileage:</label>
                                    <input type="text" class="form-control" id="mileage" name="mileage">
                                </div>
                                <div class="mb-3">
                  <label for="transmission" class="form-label">Transmission</label>
                  <select class="form-control" id="transmission" name="transmission">
                    <option value="Manual">Manual</option>
                    <option value="Automatic">Automatic</option>
      </select>    
      </div>--}}
      <script>
        $('.collapse').on('show.bs.collapse', function() {
          // Remove the fragment identifier from the URL
          window.location.hash = '';
        });
      </script>
      
<script src="{{asset('js/off-canvas.js')}}"></script>
<script src="{{asset('js/hoverable-collapse.js')}}"></script>
<script src="{{asset('js/template.js')}}"></script>
<script src="{{asset('js/settings.js')}}"></script>
<script src="{{asset('js/todolist.js')}}"></script>

</body>
</html>