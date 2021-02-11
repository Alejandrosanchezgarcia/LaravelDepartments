<html>
<body>
  <h2>Crear Departamento</h2>

<form action="{{ route('employees.store') }}" method="POST">
  @csrf
  <label for="id">ID:</label><br>
  <input type="text" id="id" name="id"><br>
  <label for="nombre_emp">Nombre:</label><br>
  <input type="text" id="nombre_emp" name="nombre_emp"><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br>
  <label for="nombre_depart">Nombre de departamento:</label><br>
  <input type="text" id="nombre_depart" name="nombre_depart"><br><br>
  <input type="submit" value="Enviar">
</form> 


 
</body>
</html>
