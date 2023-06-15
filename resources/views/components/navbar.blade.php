<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand red_color" href="{{route('welcome')}}">Biblioteca</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            
            <ul class="navbar-nav">
                <li class="nav-item dropdown"> 
                    <a class="nav-link dropdown-toggle red_color" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Libri</a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link dropdown-item" aria-current="page" href="{{route('book.create')}}">Inserisci il tuo libro @auth
                            @else <span style="color: red">(only for member)</span>                        @endauth </a></li>
                        <li><a class="nav-link dropdown-item" aria-current="page" href="{{route('book.index')}}">Visualizza i libri</a></li>
                    </ul> 
                </li> 
                <li class="nav-item dropdown"> 
                    <a class="nav-link dropdown-toggle red_color" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorie</a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link dropdown-item" aria-current="page" href="{{route('category.create')}}">Inserisci la tua categoria @auth
                            @else <span style="color: red">(only for member)</span>                        @endauth </a></li>
                        <li><a class="nav-link dropdown-item" aria-current="page" href="{{route('category.index')}}">Visualizza le categorie</a></li>
                    </ul> 
                </li>
                <li class="nav-item dropdown"> 
                    <a class="nav-link dropdown-toggle red_color" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Autori</a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link dropdown-item" aria-current="page" href="{{route('author.create')}}">Inserisci un autore @auth
                            @else <span style="color: red">(only for member)</span>                        @endauth </a></li>
                        <li><a class="nav-link dropdown-item" aria-current="page" href="{{route('author.index')}}">Visualizza gli autori</a></li>
                    </ul> 
                </li>
                <li class="nav-item dropdown">
                    @auth <a class="nav-link dropdown-toggle red_color" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        
                        ciao , {{Auth::user()->name}}
                        
                    </a>
                    @else
                    <a class="nav-link dropdown-toggle red_color" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        
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