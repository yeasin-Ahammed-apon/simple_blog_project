@extends('users')
@section('content')

<div class="m-5">
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
            @foreach ($datas as $data)            
                <tr>        
                    <td >{{$data->title}}</td>                                   
                    <td >{{$data->categories_id}}</td>        
                    <td >{{$data->created_at}}</td>                     
                    <td >
                        <a class="btn btn-success" href="{{url('/view/'.$data->id)}}">View</a>                        
                        <a class="btn btn-danger" href="{{url('/delete/'.$data->id)}}">delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection