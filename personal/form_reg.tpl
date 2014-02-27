<?php
$personal->UserRegistere();
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
<a href="../?page=personal">Please LogIn!</a>
