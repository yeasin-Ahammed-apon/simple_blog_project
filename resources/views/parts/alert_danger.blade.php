@if (session()->has('message'))    
    <p class="alert alert-danger text-danger">
        {{session()->get('message')}}    
    </p>
@endif