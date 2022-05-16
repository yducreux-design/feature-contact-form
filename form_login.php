<?php include("include_header.php") ?>
<form action="handler_login.php" method="post">

<p>
<label for="">Username: </label>
<input type="text" name="data-username">
</p>

<p>
<label for="">Password: </label>
<input type="password" name="data-password" id="hideField">
<a href="#" id="showPassword">Maintenir pour afficher</a>
</p>


<p>
    <input type="submit" value="Login">
</p>
</form>
<script src="showHide.js"></script>
<?php include("include_footer.php") ?>