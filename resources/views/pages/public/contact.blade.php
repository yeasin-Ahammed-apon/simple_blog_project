@extends('welcome')
@section('content')
@if (session()->has('message'))
    {{session()->get('message')}}
@endif
    <div class="m-5">       
        <form action="{{url('/contact_action')}}" method="POST">
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
                <label class="form-label">Your Message</label>
                <input type="text" name="message"  class="form-control">        
            @error('message')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100 ">Submit</button>
            </div>
          </form>
    </div>
@endsection