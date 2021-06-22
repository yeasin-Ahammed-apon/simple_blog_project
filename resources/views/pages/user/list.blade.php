@extends('users')
@section('content')




<div class="m-5">
    <table class="table table-dark table-striped">
        <thead>
          <tr>        
            <th scope="col">Title</th>
            <th scope="col">users_id</th>
            <th scope="col">categories_id</th>
            <th scope="col">created_at</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody> 
            @foreach ($datas as $data)            
                <tr>        
                    <td >{{$data->title}}</td>        
                    <td >{{$data->name}}</td>        
                    <td >{{$data->categories_name}}</td>        
                    <td >{{$data->time}}</td>                                         
                    <td >
                        <a class="btn btn-success" href="{{url('/view/'.$data->id)}}">View</a>
                        @if ($data->users_id == session()->get('id'))                        
                        <a class="btn btn-danger" href="{{url('/delete/'.$data->id)}}">delete</a>
                        @endif    
                    </td>  

                </tr>
            @endforeach
        </tbody>
    </table>
</div>










@endsection