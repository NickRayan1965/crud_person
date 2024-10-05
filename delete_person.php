<?php
    include("db.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $delete_person_query = "update person set is_enabled = 0 where id = $id";
        $result = mysqli_query($connection, $delete_person_query);
        if (!$result) {
            die("Query Failed");
        }
        $_SESSION['message'] = 'Eliminado correctamente';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
    }
?>