<?php
    $id;
    $names = "";
    $lastname = "";
    $age = null;
    $is_enabled;
    if(isset($_GET['id'])) {
        include("db.php");
        $id = $_GET['id'];
        $find_by_id_query = "select * from person where id = $id";
        $data = mysqli_fetch_array(mysqli_query($connection, $find_by_id_query));
        $id = $data['id'];
        $names = $data['names'];
        $lastname = $data['lastname'];
        $age = $data['age'];
        $is_enabled = $data['is_enabled'];
    }
?>
<?php 
    if(isset($id)) {
        include("includes/header.php");
    }
?>
<?php
    if (function_exists("showContenBySessionKey")) showContenBySessionKey("message", "includes/message_alert.php");
    else {
        include("handle_session_var.php");
        showContenBySessionKey("message", "includes/message_alert.php");
    }
?>
<div class="card card-body">
    <form action="save_person.php" method="POST">
<?php if (isset($id)) {?>
            <div class="form-group mb-3">
                <input type="text" name="id" class="form-control" placeholder="Id" value="<?=$id?>" readonly>
            </div>
<?php }?>
            <div class="form-group mb-3">
                <input type="text" name="names" class="form-control" placeholder="Nombres" autofocus value="<?=$names?>">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="lastname" class="form-control" placeholder="Apellidos" value="<?=$lastname?>">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="age" class="form-control" name="age" placeholder="Edad" value="<?=$age?>">
            </div>
<?php if (isset($id)) {?>
                <input type="hidden" name="is_enabled" value=<?=$is_enabled?>>
<?php }?>

            <div class="d-grid"> 
                <input class="btn btn-success"  type="submit" name="save_person" value="Guardar">
            </div>
            
        
    </form>
</div>
<?php 
    if(isset($id)) {
        include("includes/footer.php");
    }
?>