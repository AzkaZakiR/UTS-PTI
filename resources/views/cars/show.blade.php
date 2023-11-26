<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars Data</title>

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
              <div class="card-body text-center mt-5 ">
                <h4 class="card-title">Cars Data </h4>
                <p class="card-description">
                  Add class <code>.table-hover</code>
                  @if(session('message'))
                <div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
                    <strong>{{ session('message') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                </p>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Status</th>
                        <th>Plat Number</th>
                        <th> Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $counter = 1 @endphp
                      @foreach ($cars as $item)
                      <tr>
                        {{-- <td>{{$counter++}}</td> --}}
                        <td>{{$loop->index+1}}</td>
                        <td><img src="{{ url('images/cars/'.$item->image) }}"  style="height: 100px; width: 150px;"> </td>
                        {{-- <td>
                          @if($user->image)
                          <img src="{{ asset('storage/images/'.$user->image) }}" style="height: 50px;width:100px;">
                          @else 
                          <span>No image found!</span>
                          @endif
                      </td> --}}
                        <td>{{$item->brand}}</td>
                        <td>{{$item->model}}</td>
                        <td class="text-danger"> {{$item->year}} <i class="ti-arrow-down"></i></td>
                        <td><label class="badge badge-success">{{$item->status}}</label></td>
                        <td>{{$item->plat_number}}</td>
                        <td> 
                          <a href="{{route('editcars', $item->id)}}" class="btn btn-info">Edit</a> 
                          <form method="POST" action="{{ route('deletecars', $item->id)}}"> 
                            @csrf
                      @method('DELETE')
                            <button href="" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                      <tr class="percobaan">
                        <td class="percobaan">Jacob</td>
                        <td>Photoshop</td>
                        <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                        <td><label class="badge badge-danger">Pending</label></td>
                      </tr>
                      <tr>
                        <td>Messsy</td>
                        <td>Flash</td>
                        <td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
                        <td><label class="badge badge-warning">In progress</label></td>
                      </tr>
                      <tr>
                        <td>John</td>
                        <td>Premier</td>
                        <td class="text-danger"> 35.00% <i class="ti-arrow-down"></i></td>
                        <td><label class="badge badge-info">Fixed</label></td>
                      </tr>
                      <tr>
                        <td>Peter</td>
                        <td>After effects</td>
                        <td class="text-success"> 82.00% <i class="ti-arrow-up"></i></td>
                        <td><label class="badge badge-success">Completed</label></td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="{{asset('js/off-canvas.js')}}"></script>
      <script src="{{asset('js/hoverable-collapse.js')}}"></script>
      <script src="{{asset('js/template.js')}}"></script>
      <script src="{{asset('js/settings.js')}}"></script>
      <script src="{{asset('js/todolist.js')}}"></script>
     
</body>
</html>