
<?php
$name = '';

$error = ['name' => ''];

if(isset($_POST["submit"])){
    if(empty(htmlspecialchars($_POST['name']))){
        $error['name'] = "Must be a enter name ";
    }
    echo htmlspecialchars($_POST['name']);
}
?>


<html>

<?php include('template/header.php');?>

<section>
    <h1>Add new record</h1>
    <form action="add.php" method="POST">
        <label>Username</label>
        <input type="text" name="name"> 
        <div style="color:red;"><?php echo $error['name'] ?></div>
        <input type="submit" name="submit" value="submit">
    </form>
</section>

</html>