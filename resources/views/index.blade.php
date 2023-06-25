@extends('templates.template')
@section('content')
    <h1 class="text-center">Crud</h1>
    <hr>
    <div class="col-8 m-auto">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Preco</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( as )
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                @endforeach
          </table>
    </div>
@endsection