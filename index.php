    <?php
    session_start();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <p style="color:green">
    <?php
    if ($_SESSION) {
        echo $_SESSION["message"];
        unset($_SESSION["message"]);
    }
    ?>
    </p>
        <form method="post" action="handler.php">
            <label for="input-username">username:</label>
            <input type="text" name="data-username" id="input-username"> <br>
            <label for="input-mail">mail:</label>
            <input type="email" name="data-mail" id="input-mail"> <br>
            <label for="input-subject">subject:</label>
            <input type="text" name="data-subject" id="input-subject"> <br>
            <label for="input-message">message:</label>
            <textarea name="data-message" id="input-message" cols="30" rows="10"></textarea> <br>   
            <input type="submit" name="btn-submit"> 
        </form>
    
    </body>
    </html>
