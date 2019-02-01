<h1>Listando todas las notas</h1>
<?php while ($nota = $notas->fetch_object()) : ?>
    <?= $nota->titulo?> - <?= $nota->fecha_creacion?><br>
<?php endwhile; ?>
