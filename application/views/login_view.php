<html>
    <head>
        <title>Yeni Uye Formu</title>
    </head>
    <body>
        
        <br/>
        <form name="login" action="<?php echo site_url() . '/admin/login'; ?>" method="post">
           
            User Name : <input type="text" name="username"/><br/>
            Password :  <input type="password" name="password"/><br/>
            <input type="submit" name="login" value="Login"/>
        </form>
    </body>
</html>
