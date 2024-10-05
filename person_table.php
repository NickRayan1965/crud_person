<?php
    $limit = 10;
    $offset = 0;
    $query = "select * from person";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
?>
    <div class="col my-3 table-responsive" data-bs-theme="dark">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th class="text-center">Edad</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
<?php
    while ($row) {
?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['names'] ?></td>
            <td><?php echo $row['lastname'] ?></td>
            <td class="text-center"><?php echo $row['age'] ?></td>
            <td class="text-center"><?php echo $row['is_enabled'] == 1 ? 'Activo' : 'Inactivo' ?></td>
            <td class="d-flex justify-content-center gap-2">
                <a href="person_form.php?id=<?= $row['id']?>" class="btn btn-primary">Editar</a>
                <a href="delete_person.php?id=<?= $row['id']?>" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
<?php      
    $row = mysqli_fetch_array($result);
    }
?>
            </tbody>
        </table>
    </div>
