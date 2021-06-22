@if (session()->has('message'))    
    <p class=" alert alert-success text-success m-1 fw-bold">
        {{session()->get('message')}}    
    </p>
@endif