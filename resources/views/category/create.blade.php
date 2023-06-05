<x-main>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('category.send')}}" method="POST">
        @method('POST')
        @csrf
        <label for="name" class="form-label">Categoria</label>
        <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
        @error('name')
        <span class="text-danger">
            {{$message}}
        </span>
        @enderror
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
</x-main>