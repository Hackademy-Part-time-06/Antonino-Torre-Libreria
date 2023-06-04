<x-main>
    <form action="{{route('register') }}" method="POST" class="w-75 m-auto">
        @method('POST')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control"  value="{{old('name')}}" id="name" name="name" aria-describedby="name">
            @error('name') <span class="small text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Indirizzo Email</label>
            <input type="email" class="form-control" value="{{old('email')}}" id="email" name="email" aria-describedby="email">
            <div id="email" class="form-text">We'll never share your email with anyone else.</div>
            @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" value="" name="password" id="password" id="exampleInputPassword1">
            @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Conferma Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" value="" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Registrati</button>
    </form>
    <div class="text-center">Sei già registrato? <a href="{{route('login')}}"> Accedi</a></div>
</x-main>