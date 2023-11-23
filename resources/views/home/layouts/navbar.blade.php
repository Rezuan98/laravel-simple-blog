<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <a class="navbar-brand text-white" href="{{route('welcome.home')}}">Nijhum <span class="text-warning">Dwip</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-white" href="{{route('welcome.home')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('welcome.home')}}">Popular Articles</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-warning" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categores
          </a>
          <div class="dropdown-menu bg-success" aria-labelledby="navbarDropdown">
            <a class="dropdown-item text-warning" href="{{route('welcome.home')}}">Deer Inside Nijhum Dwip</a>
            <a class="dropdown-item text-warning" href="{{route('welcome.home')}}">Coastal Stories</a>
            <a class="dropdown-item text-warning" href="{{route('welcome.home')}}">Travel Story</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-warning" href="{{route('welcome.home')}}">Academic Study</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('welcome.home')}}">Contact Us</a>
        </li>
      </ul>
      
        <div>
          <ul class="navbar-nav ml-auto">
            <li><a class="nav-link text-white" href="{{route('admin.login')}}">Login</a></li>
            <li><a class="nav-link text-white" href="{{route('admin.register')}}">Register</a></li>
          </ul>
          
          
       
        </div>
        
        
      
    </div>
  </nav>