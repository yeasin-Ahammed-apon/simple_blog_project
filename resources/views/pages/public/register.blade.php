@extends('welcome')
@section('content')

    <div class="m-5">       
        <form action="{{url('/register_action')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">Your Name</label>
              <input type="text" name="name" value="{{old('name')}}" class="form-control">        
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Your Email</label>
                <input type="email" name="email" value="{{old('email')}}" class="form-control">        
            @error('email')
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
            <div class="mb-3">
                <label class="form-label">Your Image</label>
                <input type="file" name="image"  class="form-control">        
            @error('image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100 ">Submit</button>
            </div>
          </form>
    </div>

@endsection