@extends('welcome')
@section('content')
@include('parts.alert_danger')
    <div class="m-5">       
        <form action="{{url('/login_action')}}" method="POST" >
            @csrf
            <div class="mb-3">
              <label class="form-label">Your Name</label>
              <input type="text" name="name" value="{{old('name')}}" class="form-control">        
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>  
            <div class="mb-3">
                <label class="form-label">Your password</label>
                <input type="password" name="password" value="{{old('password')}}" class="form-control">        
            @error('email')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>            
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100 ">Submit</button>
            </div>
          </form>
    </div>

@endsection