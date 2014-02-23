<?php
$personal->UserRegistere(); //в работе
?>
<form method="POST" action="">
    Registration Form:<br>
<?php
$personal->ShowForm();
?>
    * - fields are required<br> 
    <input type="submit" name="enter" value="Registration">
    <input type="reset" value="Clean"> 
</form>
Already a member?
<a href="personal.php">Please LogIn!</a>
