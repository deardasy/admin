@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6./jquery.min.js"></script>
<div class="page-content">

   
    <div class="row profile-body">
      <!-- left wrapper start -->
      
      <!-- left wrapper end -->
      <!-- middle wrapper start -->
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
  
                                  <h6 class="card-title">Add Fashion Type</h6>
  
                                  <form class="forms-sample" action="{{route('store.type')}}" method="POST" >
                                      @csrf
                                   
                                      <div class="mb-3">
                                        <label for="exampleInputUsername1" class="form-label">Type Name</label>
                                        <input type="text" name="type_name" class="form-control @error('type_name') is-invalid @enderror" >
                                        @error('type_name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                      </div>
                                     
                                      
                                      
                                      <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                                     
                                  </form>
  
                </div>
              </div>
          </div>
         
        </div>
      </div>
      <!-- middle wrapper end -->
      <!-- right wrapper start -->
      <div class="d-none d-xl-block col-xl-3">
       
      </div>
      <!-- right wrapper end -->
    </div>

        </div>
      
@endsection