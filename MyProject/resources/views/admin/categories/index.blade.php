@extends('layouts.dashboard')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="d-flex justify-content-between align-items-center">
        <h1>Tutte le categorie</h1>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Slug</th>
            <th>Count posti</th>
            <th class="text-center">Azioni</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
          <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->slug }}</td>
            <td>{{ count($category->posts) }}</td>
            <td></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
