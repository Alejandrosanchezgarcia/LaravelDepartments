<html>
<body>
  <h2>Crear Departamento</h2>

<form action="{{ route('departments.store') }}" method="POST">
  @csrf
  <label for="id">ID:</label><br>
  <input type="text" id="id" name="id"><br>
  <label for="nombre_depart">Nombre de departamento:</label><br>
  <input type="text" id="nombre_depart" name="nombre_depart"><br><br>
  <input type="submit" value="Enviar">
</form> 


 
</body>
</html>
