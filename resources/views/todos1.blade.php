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
<p>Nuevo registro: <a href="{{ route('employees.create') }}">ALTA</a></p>
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
    <th>ID</th>
    <th>Nombre</th>
    <th>Email</th>
    <th>nombre_depart</th>
    <th>Acciones</th>
    
  </tr>
  @foreach ($todos1 as $uno)
   <tr>
     <td> {{ $uno['id'] }}</td>
     <td> {{ $uno['nombre_emp'] }} </td>
     <td> {{ $uno['email'] }} </td>
     <td> {{ $uno['nombre_depart'] }} </td> 
     <td><a href="{{ route('employees.show', $uno['id']) }}">mostrar</a></td> 
   </tr>
  @endforeach
</table> 
</body>
<html>