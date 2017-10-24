@extends('app')

@section('content')
<div id="crud" class="row">
  <div class="col-12">
    <h1 class="page-header">CRUD Laravel y VUEjs</h1>
  </div>
  <div class="col-7">
    <a href="#" class="btn btn-primary float-right" role="button" data-toggle="modal" data-target="#create">Nueva Tarea</a>
    <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tarea</th>
          <th colspan="2">Opciones</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="keep in keeps">
          <td width="10px">@{{ keep.id }}</td>
          <td>@{{ keep.keep }}</td>
          <td>
            <a href="#" class="btn btn-warning btn-sm" role="button" @click.prevent="editKeep(keep)">Editar</a>
          </td>
          <td>
            <a href="#" class="btn btn-danger btn-sm" role="button" @click.prevent="deleteKeep(keep)">Eliminar</a>
          </td>
        </tr>
      </tbody>
    </table>
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item" v-if="pagination.current_page > 1">
          <a href="#" @click.prevent="changePage(pagination.current_page - 1)" class="page-link">Atras</a>
        </li>

        <li class="page-item" v-for="page in pagesNumber" :class="[ page == isActived ? 'active' : '']">
          <a href="#" class="page-link" @click.prevent="changePage(page)">@{{ page }}</a>
        </li>

        <li class="page-item" v-if="pagination.current_page < pagination.last_page">
          <a href="#" @click.prevent="changePage(pagination.current_page + 1)" class="page-link">Siguiente</a>
        </li>
      </ul>
    </nav>
    @include('modals')
  </div>
  <div class="col-5">
    <pre>
      @{{ $data }}
    </pre>
  </div>
</div>
@endsection
