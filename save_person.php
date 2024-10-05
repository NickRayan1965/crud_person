<?php
    function savePerson($names, $lastname, $age) {
        include("db.php");
        $insertSentence = "insert into person(names, lastname, age, is_enabled) values ('$names', '$lastname',$age , default)";
        $result = mysqli_query($connection, $insertSentence);
        if (!$result) {
            die("Query Failed");
        }
        $_SESSION['message'] = 'Guardado correctamente';
        $_SESSION['message_type'] = 'success';
        header("Location: index.php");
    }
    function updatePerson($id, $names, $lastname, $age, $is_enabled) {
        include("db.php");
        echo $age;
        $age = $age ? $age : "null";
        $updateSentence = "update person set names='$names', lastname='$lastname', age=$age, is_enabled=$is_enabled where id = $id";
        echo $updateSentence;
        $result = mysqli_query($connection, $updateSentence);
        if (!$result) {
            die("Query Failed");
        }
        $_SESSION['message'] = 'Actualizado correctamente';
        $_SESSION['message_type'] = 'info';
        echo "Location: person_form.php?id=$id";
        header("Location: person_form.php?id=$id");
    }
    if (isset($_POST['save_person'])){
        $names = $_POST['names'];
        $lastname = $_POST['lastname'];
        $age = isset($_POST['age']) ? $_POST['age'] : null;
        $is_enabled = $_POST['is_enabled'];
        $id = $_POST['id'];
        if (isset($id)) {
            updatePerson($id, $names, $lastname, $age, $is_enabled);
        } else {
            savePerson($names, $lastname, $age);
        }
    }
    
?>