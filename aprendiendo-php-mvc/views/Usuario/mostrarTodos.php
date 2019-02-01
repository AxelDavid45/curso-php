<h1>Listando todos los usuarios</h1>
<ul>
<?php while($usuario = $todos->fetch_object()) : ?>
    <li><?=$usuario->nombre?></li>
    <ul>
        <li><?=$usuario->email?></li>
        <li><?=$usuario->fecha_registro?></li>
    </ul>

<?php endwhile;?>
</ul>
