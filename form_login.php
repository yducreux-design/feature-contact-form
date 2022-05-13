<?php include("include_header.php") ?>
<form action="handler_login.php" method="post">

<p>
<label for="">Username: </label>
<input type="text" name="data-username">
</p>

<p>
<label for="">Password: </label>
<input type="password" name="data-password">
</p>


<p>
    <input type="submit" value="Login">
</p>
</form>

<?php include("include_footer.php") ?>