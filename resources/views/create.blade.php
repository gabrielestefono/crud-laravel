@extends('templates.template')
@section('content')
    <h1 class="text-center">Cadastrar</h1>
    <hr>
    <div class="col-8 m-auto">
        <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
            @csrf
            <input type="text" name="title" id="title" placeholder="Título" class="form-control mt-3">
            <select class="form-control mt-3" name="id_user" id="id_user">
                <option value="">Autor</option>
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            <input type="text" name="pages" id="pages" placeholder="Páginas" class="form-control mt-3">
            <input type="text" name="price" id="price" placeholder="Preço" class="form-control mt-3">
            <input type="submit" value="Cadastrar" class="btn btn-primary mt-3">
        </form>
    </div>
@endsection