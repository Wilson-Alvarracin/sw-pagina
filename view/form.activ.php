<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Media Post Editor</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/magicsuggest/2.1.4/magicsuggest-min.css'><link rel="stylesheet" href="./../css/form.css">

</head>
<body>
<div class="container">
  <div class="post-form">
    <form action="./../proc/proc_subir_activ.php" method="POST" enctype="multipart/form-data">
    <div class="post-section">
      <br>
      <h1>Nueva Actividad</h1>
      <br>
      <label>Descripción</label>
        <input type="text" name="title" id="post-title" class="post-input large"  placeholder="Título..."/>
      <div class="post-content">
        <textarea name="content" class="post-input" placeholder="Contenido..."></textarea>
      </div>
      <label for="post-title">Topic</label>
      <select name="topic" required>
            <option>Matematicas</option>
            <option>Informatica</option>
            <option>Fisica</option>
            <option>Deportes</option>
        </select>
      <label for="foto">Foto</label>
        <input type="file" name="foto" id="foto" accept=".img,.jpg,.png">
        <div>
          <label for="post-title">Publico</label><input type="radio" name="opcion" value="True" required>
          <label for="post-title">Privado</label><input type="radio" name="opcion" value="False" required>
        </div>
        <br>
        <input type="submit" value="Crear" name="subir" class="btn btn-success">

    </div>
  </div>
</div>
</form>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/magicsuggest/2.1.4/magicsuggest-min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script><script  src="./script.js"></script>

</body>
</html>
