@extends('users')
@section('content')
@include('parts.alert_success')
<div class="m-5">       
    <form action="{{url('/add_action')}}" method="POST" enctype="multipart/form-data" >
        @csrf         
      <div class="mb-3">
          <label class="form-label">Details</label>
              <select class="form-select" name="categories_id"  aria-label="Default select example"> 
                  @foreach ($datas as $data)
                      <option value={{$data->id}}>{{$data->name}}</option>
                  @endforeach                                     
              </select>                
        @error('categories')
        <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>        
        <div class="mb-3">
          <label class="form-label">Title</label>
          <input type="text" name="title" value="{{old('title')}}" class="form-control">        
        @error('title')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        </div> 
    <div class="mb-3">
          <label class="form-label">Image</label>
          <input type="file" name="image" class="form-control">        
        @error('image')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>  
        <div class="mb-3">
            <label class="form-label">Details</label>
            <input type="text" name="details" value="{{old('details')}}" class="form-control">        
        @error('details')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>  
        <input type="hidden" name='users_id' value="{{session()->get('id')}}">
                  
        <div class="text-center">
            <button type="submit" class="btn btn-primary w-100 ">Submit</button>
        </div>
      </form>
</div>
@endsection
