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
     <td><form action="{{ route('departments.destroy', $uno['id']) }}" method="POST">
          <a href="{{ route('departments.show', $uno['id']) }}">mostrar</a>            
            @csrf
            @method('DELETE')
            <button type="submit" title="delete">eliminar</button>
       </form></td> 
   </tr>
  @endforeach
</table> 
</body>
<html>