<?php

$productos= array();


?>

<form action="">
    <label for="id_productos">id del producto</label><br>
    <input type="number" name="id_productos" id="id_productos">
    <br>
    <label for="cantidad">cantidad</label><br>
    <input type="numbre" name="cantidadComprada" id="cantidadComprada">


    <input type="button" value="agregar">
</form>

<form  action="{{ url('/compras') }}" method="post" enctype="multipart/form-data">
    @csrf

    <hr>
    <br>
    <hr>

    <label for="id_usuario">Identificacion de usuario</label>
    <input type="number" name="id_usuario" id="id_usuario">
    <br>
    <label for="celular">celular</label>
    <input type="number" name="celular" id="celular">
    <br>
    <label for="email">Correo</label><br>
    <input type="email" name="correo" id="correo">

    <br>

    <input type="submit" value="Enviar">
</form>
