<?php 
    include("db.php");
    include("handle_session_var.php");
?>

<?php include('includes/header.php')?>
<div class="container">
    <div class="row">
        <div class="col col-4 my-3">
            <?php 
                showContenBySessionKey("message", "includes/message_alert.php");
            ?>
            <?php include("person_form.php")?>
        </div>
        <?php include("person_table.php")?>
    </div>
</div>
<?php include('includes/footer.php') ?>
