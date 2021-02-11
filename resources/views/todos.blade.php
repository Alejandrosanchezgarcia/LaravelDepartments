<html>
<head>
<style>
table, th, td {
  border: 5px solid crimson;
  text-align: center;
}
</style>
</head>
<body>
<p>Nuevo registro: <a href="{{ route('departments.create') }}">ALTA</a></p>
@if ($message = Session::get('success'))
<!--        <div class="alert alert-success">
            <p></p>
	</div> 
  <p>Creado nuevo registro con éxito</p>
-->
  <p> {{ $message }}</p>
@endif
<table style="width:30%">
  <tr>
    <th>id</th>
    <th>nombre_depart</th>
    <th>Acciones</th>
    
  </tr>
  @foreach ($todos as $uno)
   <tr>
     <td> {{ $uno['id'] }}</td>
     <td> {{ $uno['nombre_depart'] }} </td>
     <td><a href="{{ route('departments.show', $uno['id']) }}">mostrar</a></td> 
   </tr>
  @endforeach
</table> 
</body>
<html>