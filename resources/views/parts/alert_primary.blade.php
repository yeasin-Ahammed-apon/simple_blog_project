@if (session()->has('message'))    
    <p class="alert alert-primary text-primary">
        {{session()->get('message')}}    
    </p>
@endif