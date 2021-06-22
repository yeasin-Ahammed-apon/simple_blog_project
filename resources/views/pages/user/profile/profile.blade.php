@extends('users')
@section('content')
<div class="m-5">
    <div class="card mb-3" style="">
        <div class="row g-0">
          <div class="col-md-4 text-center">
            <img class="col-md-4 col-sm-4  col-4  " src="{{asset('./storage/photo/'.$datas->image)}}" alt="">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$datas->name}}</h5>
              <p class="card-text">Email : {{$datas->email}}</p>              
            </div>
            <a href="{{url('/edit_profile/'.$datas->id)}}" class="btn btn-primary">Edit Profile</a>
          </div>
        </div>
      </div>
      {{-- users posts table --}}
      <div>
        <table class="table table-dark table-striped">
            <thead>
              <tr>        
                <th scope="col">Title</th>            
                <th scope="col">categories_id</th>
                <th scope="col">created_at</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody> 
                @foreach ($posts as $post)            
                    <tr>        
                        <td >{{$post->title}}</td>                                   
                        <td >{{$post->categories_id}}</td>        
                        <td >{{$post->created_at}}</td>                     
                        <td >
                            <a class="btn btn-success" href="{{url('/view/'.$post->id)}}">View</a>                        
                            <a class="btn btn-danger" href="{{url('/delete/'.$post->id)}}">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      </div>
</div>

@endsection