<x-main>
    <x-header />
    <div class="container my-5">
        <div class="row">
            <div class="col-8">
                <div class="row mb-5 text-white" style="background-color: rgba(0, 0, 0, 0.264)">
                    <div class="col-6"><img src="1586328361-libri.jpg" alt="Libreria" class="img-fluid"></div>
                    <div class="col-6 d-flex flex-column align-items-center justify-content-evenly">
                        <h3>Libreria</h3>
                        <span>Scopri i nostri libri</span>
                        <a href="{{route('book.index')}}"><button type="button" class="btn btn-light">Visualizza</button></a>
                    </div>
                </div>
                <div class="row mb-5 text-white" style="background-color: rgba(0, 0, 0, 0.264)">
                    <div class="col-6 d-flex flex-column align-items-center justify-content-evenly">
                        <h3>Autori</h3>
                        <span>Scopri i nostri autori</span>
                        <a href="{{route('author.index')}}"><button type="button" class="btn btn-light">Visualizza</button></a>
                    </div>
                    <div class="col-6"><img src="istockphoto-838545534-170667a.jpg" alt="Autore" class="img-fluid"></div>
                </div>
                <div class="row text-white" style="background-color: rgba(0, 0, 0, 0.264)">
                    <div class="col-6"><img src="istockphoto-1257631537-170667a.jpg" alt="Categorie" class="img-fluid"></div>
                    <div class="col-6 d-flex flex-column align-items-center justify-content-evenly">
                        <h3>Categorie</h3>
                        <span>Esplora le nostre categorie</span>
                        <a href="{{route('category.index')}}"><button type="button" class="btn btn-light">Visualizza</button></a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                @foreach ($books as $book)
                <section>
                    <div class="card">
                        <img src="{{empty($book->image) ? Storage::url('images/default.jpg'):Storage::url($book->image)}}" class="card-img-top img-fluid" max-width="100px" alt="immagine libro">
                        <div class="card-body">
                            <h5 class="card-title">{{$book['title']}}</h5>
                            <a href="{{route('book.show',['libro'=>$book])}}" class="btn btn-primary">Vai al libro</a>
                        </div>
                    </div>
                </section>
                @endforeach
            </div>
        </div>
    </div>
    
    
</x-main>