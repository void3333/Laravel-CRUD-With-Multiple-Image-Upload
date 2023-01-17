@extends('layouts.main')

@section('title','Área do Inspetor')
    
@section('content')

        <div class="container" style="margin-top: 50px;">

            <h3 class="text-center text-secondary"><b>Area do Inspetor</b> </h3>
            <a href="/create" class="btn btn-outline-success">Adicionar carregamento</a>

            <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Container</th>
                    <th>Inspetor</th>
                    <th>Observações</th>
                    <th>Foto de Capa</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                  </tr>
                </thead>
                <tbody>


                    @foreach ($posts as $post)
                 <tr>
                       <th scope="row">{{ $post->id }}</th>
                       <td>{{ $post->title }}</td>
                       <td>{{ $post->author }}</td>
                       <td>{{ $post->body }}</td>
                       <td><img src="cover/{{ $post->cover }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
                       <td><a href="/edit/{{ $post->id }}" class="btn btn-outline-primary">Editar</a></td>
                       <td>
                           <form action="/delete/{{ $post->id }}" method="post">
                            <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Deletar</button>
                            @csrf
                            @method('delete')
                        </form>
                       </td>

                   </tr>
                   @endforeach

                </tbody>
              </table>
        </div>

        @endsection