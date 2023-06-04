<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('welcome')}}">Biblioteca</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('create')}}">Inserisci il tuo libro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""></a>
                </li>
                
                <li class="nav-item">
                    
                </li>   
                
                
                <li class="nav-item dropdown">
                    @auth <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        
                        ciao , {{Auth::user()->name}}
                        
                    </a>
                    @else
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        
                        Ciao utente
                        
                    </a>
                    @endauth
                    <ul class="dropdown-menu">
                        @auth
                        <li>  
                            <form action="{{route('logout') }}" method="POST" id="form-logout">
                                <a class="dropdown-item text-decoration-none" href="#"  onclick="event.preventDefault();this.closest('form').submit();">logout</a>
                                @csrf
                            </form>
                        </li> 
                        
                        @else
                        <li><a class="dropdown-item" href="{{route('login')}}">login</a></li>
                        <li><a class="dropdown-item" href="{{route('register')}}">registrati</a></li>
                        @endauth
                        
                        
                    </ul>
                </ul>
                
                
            </div>
        </div>
    </nav>