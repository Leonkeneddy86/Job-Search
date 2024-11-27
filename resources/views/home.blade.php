@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Trabajo</th>
        <th scope="col">Fecha</th>
        <th scope="col">Oferta</th>
        <th scope="col">Empresa</th>
        <th scope="col">Descripción</th>
        <th scope="col">Contactos</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($offers as $offer)
      <tr>
        <th scope="row">1</th>
        <td>M</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr> 
      @endforeach
    </tbody>
  </table> 
@endsection