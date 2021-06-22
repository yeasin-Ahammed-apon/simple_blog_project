@extends('users')
@section('content')
    <div class="m-5">       
        <form action="{{url('/update_profile')}}" method="POST" >
            @csrf
            <input type="hidden" name="id" value="{{$datas->id}}">
            <div class="mb-3">
            <label class="form-label">Your Name</label>
            <input type="text" name="name" value="{{$datas->name}}" class="form-control">        
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Your Email</label>
                <input type="email" name="email" value="{{$datas->email}}" class="form-control">        
            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>                       
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100 ">update</button>
            </div>
        </form>
    </div>
@endsection