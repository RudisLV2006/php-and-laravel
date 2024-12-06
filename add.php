
<?php
$name = '';

$error = ['name' => ''];

if(isset($_POST["submit"])){


    if(empty($_POST['name'])){
        $error['name'] = "Must be a enter name ";
    }

}
?>


<html>

<?php include('template/header.php');?>

<section>
    <h1>Add new record</h1>
    <form action="add.php" method="POST">
        <label for="name">Username</label>
        <input type="text" name="name"> 
        <label><?php echo $error['name'] ?></label>
        <input type="submit" name="submit" value="submit">
    </form>
</section>

</html>