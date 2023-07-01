@extends('templates.template')
@section('content')
    <h1 class="text-center">
        @if (isset($book))
            Editar
        @else
            Cadastrar
        @endif
    </h1>
    <hr>
    <div class="col-8 m-auto">
        @if (isset($errors) && count($errors) > 0)
            <div class="text-center mb-4 mt-4 p-2 alert-danger">
                @foreach ($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif
        @if (isset($book))
            <form name="formEdit" id="formEdit" method="post" action="{{url("books/$book->id")}}">
                @method('put')
        @else
            <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
        @endif
            @csrf
            <input type="text" name="title" id="title" placeholder="Título" value="{{$book->title ?? ''}}" class="form-control mt-3" required>
            <select class="form-control mt-3" name="id_user" id="id_user">
                <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? ''}}</option>
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            <input type="text" name="pages" id="pages" placeholder="Páginas" value="{{$book->pages ?? ''}}" class="form-control mt-3" required>
            <input type="text" name="price" id="price" placeholder="Preço" value="{{$book->price ?? ''}}" class="form-control mt-3" required>
            @if (isset($book))
                <input type="submit" value="Editar" class="btn btn-primary mt-3" >
            @else
                <input type="submit" value="Cadastrar" class="btn btn-primary mt-3" >
            @endif
        </form>
    </div>
@endsection