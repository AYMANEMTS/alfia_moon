<?php
if(isset($_SESSION['status']))
{
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong> </strong><?php echo $_SESSION['status']; ?>
    </div>
<?php
unset($_SESSION['status']);
}
?>