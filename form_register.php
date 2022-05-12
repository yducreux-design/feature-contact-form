<?php include("include_header.php") ?>

<form action="handler_register.php" method="post">
<p> <label for="input-username">Username:</label>
            <input type="text" name="data-username" id="input-username">
        </p>

        <p> <label for="input-mail">Mail :</label>
            <input type="email" name="data-mail" id="input-mail"> <br>
        </p>
        
        <p> <label for="input-password">Password :</label>
            <input type="password" name="data-password" id="input-password"> <br>
        </p>
       
        <p> <label for="input-confirmation">confirmation :</label>
            <input type="password" name="data-confirmation" id="input-confirmation"> <br>
        </p>
<p>
<input type="submit" value="Enregister">
</p>



</form>
<?php include("include_footer.php") ?>