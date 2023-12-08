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
                            <form method="POST" action="{{ !empty($car) ? route('updatecars', $car->id) : route('storecars') }}" enctype="multipart/form-data">
                       
                                @csrf
                                @if(!empty($car))
                                @method('PATCH')
                                @endif

                                <div class="row">

                                    
                                    {{-- <div id="image-preview" class="image-preview" style="width: 150px; height: 150px;"></div>  --}}
                                    <div class="col-md-7"> 
                                        <img id="preview-image" src="{{ isset($car) ?  "url/images/cars/$car->image" : '' }}" alt="Image Preview" style="width: 70%; height: 80%;">
                                    </div>
                                    <div class="mb-3 col-md-4"> <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="image" name="image" value="{{ isset($car) ? $car->image : '' }}" onchange="previewImage(event)">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="brand">Brand:</label>
                                        <input type="text" class="form-control" id="brand" name="brand" required 
                                        {{-- value="{{old('brand', $car->brand) }}" --}}
                                        value="{{ isset($car) ? $car->brand : '' }}">
                                    </div>
                            
                                    <div class="form-group col-md-6">
                                        <label for="model">Model:</label>
                                        <input type="text" class="form-control" id="model" name="model" required value="{{ isset($car) ? $car->model : '' }}">
                                    </div>
                                </div>
                                
                                <div class="row"> 
                                    <div class="form-group col-md-6">
                                        <label for="year">Year:</label>
                                        <input type="text" class="form-control" id="year" name="year" required value="{{ isset($car) ? $car->year : '' }}">
                                    </div>
                            
                                    <div class="mb-3 col-md-6">       
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="Rented" {{ isset($car) && $car->status === 'Available' ? 'selected' : '' }}>Available</option>      
                                            <option value="Rented" {{ isset($car) && $car->status === 'Rented' ? 'selected' : '' }}>Rented</option>
                                            <option value="Maintenance" {{ isset($car) && $car->status === 'Maintenance' ? 'selected' : '' }}>Maintenance</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row"> 
                                    <div class="form-group col-md-6">
                                        <label for="plat_number">Plate Number:</label>
                                        <input type="text" class="form-control" id="plat_number" name="plat_number" required value="{{ isset($car) ? $car->plat_number : '' }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="color">Type</label>
                                        <input type="text" class="form-control" id="color" name="type" value="{{ isset($car) ? $car->type : '' }}"> 
                                    </div>
                                </div>  

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="color">Price Per Day</label>
                                        <input type="text" class="form-control" id="color" name="price_per_day" value="{{ isset($car) ? $car->price_per_day : '' }}"> 
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="color">Price Per Week</label>
                                        <input type="text" class="form-control" id="color" name="price_per_week" value="{{ isset($car) ? $car->price_per_week : '' }}"> 
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="color">Seats:</label>
                                        <input type="number" class="form-control" id="color" name="seats" value="{{ isset($car) ? $car->seats : '' }}"> 
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="color">Engine:</label>
                                        <input type="text" class="form-control" id="color" name="engine" value="{{ isset($car) ? $car->engine: '' }}"> 
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="color">Gasoline</label>
                                    <input type="number" class="form-control" id="color" name="gasoline" value="{{ isset($car) ? $car->gasoline : '' }}"> 
                                </div> --}}
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
      
      <script>
        function previewImage(event) {
            var input = event.target;

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    var preview = document.getElementById('image-preview');
                    preview.innerHTML = '<img src="' + e.target.result + '" alt="Image Preview">';
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL(input) {
                if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                $('#preview-image').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
                }
            }
            $(document).ready(function() {
  $('#image').change(function() {
    readURL(this);
  });
});
    </script>
<script src="{{asset('js/off-canvas.js')}}"></script>
<script src="{{asset('js/hoverable-collapse.js')}}"></script>
<script src="{{asset('js/template.js')}}"></script>
<script src="{{asset('js/settings.js')}}"></script>
<script src="{{asset('js/todolist.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>