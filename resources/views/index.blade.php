@extends('templates.template')
@section('content')
    <h1 class="text-center">Crud</h1>
    <hr>
    <div class="text-center">
        <a href="{{url('books/create')}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar</button>
        </a>
    </div>
    <div class="col-8 m-auto">
        @csrf
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Preco</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    @php
                        $user=$book->find($book->id)->relUsers;
                    @endphp
                    <tr>
                        <th scope="row">{{$book->id}}</th>
                        <td>{{$book->title}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$book->price}}</td>
                        <td>
                            <a href='{{url("/books/$book->id")}}'>
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("/books/$book->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="{{url("/books/$book->id")}}" class="js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
          </table>
          {{$books->links("pagination::bootstrap-4")}}
    </div>
@endsection