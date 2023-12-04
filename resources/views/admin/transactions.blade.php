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

    <div class="container-scroller">
        @include('layouts.atas')
        <div class="container-fluid page-body-wrapper"> 
            @include('layouts.sidebar')
            <div class="main-panel ">
                <div class="content-scroller "> 
                    <div class="card m-5">
                        <h2 class="text-center mt-4">Create Transactions</h2>
                        <h4 class="text-center m-2">Please fill in the details</h4>
                        <div class="card-body">

                            <div class="row">
                                <div class="col mb-3"> <label for="image" class="form-label">Customer Name</label>
                                    <input type="text" class="form-control" id="customer" name="image" value="">
                                </div>
                                <div class="col form-group">
                                    <label for="brand">Customer Address</label>
                                    <input type="text" class="form-control" id="brand" name="brand" required 
                                    {{-- value="{{old('brand', $car->brand) }}" --}}
                                    value="">
                                </div>
                            </div>
                                <div class="form-group">
                                    <label for="model">Model:</label>
                                    <input type="text" class="form-control" id="model" name="model" required value="">
                                </div>
                        
                                <div class="form-group">
                                    <label for="year">Year:</label>
                                    <input type="text" class="form-control" id="year" name="year" required value="">
                                </div>
                        
                                <div class="mb-3">       
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="Rented" >Available</option>      
                                        <option value="Rented">Rented</option>
                                        <option value="Maintenance">Maintenance</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="plat_number">Plate Number:</label>
                                    <input type="text" class="form-control" id="plat_number" name="plat_number" required >
                                </div>
                        
                                <div class="form-group">
                                    <label for="color">Color:</label>
                                    <input type="text" class="form-control" id="color" name="color" > 
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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