<div>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{url('/user_deshboard')}}">Dash Board</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">                                                                    
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/profile')}}">{{session()->get('name')}} Profile</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/list')}}">Post list</a>
                  </li>                                                                
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/my_posts')}}">{{session()->get('name')}} post</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/add')}}">Add post</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/logout')}}">Logout</a>
                  </li>                                                                                                                       
                </ul>            
              </div>
            </div>
          </nav>
    </div>
</div>