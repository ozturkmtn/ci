<html>
    <head>
        <title>Yeni Uye Formu</title>
    </head>
    <body>
        
        <br/>
        <form name="newUser" action="<?php echo site_url() . '/uye/ekle'; ?>" method="post">
            Name : 
            <select name="name">
                <option value="">Select Staff</option>
                <?php
                foreach($staffs AS $staff){
                ?>
                <option value="<?php echo $staff["staff_id"]?>"><?php echo $staff["st_firstname"] .' '. $staff["st_lastname"] ?></option>
                <?php } ?>
            </select><br/>
            User Name : <input type="text" name="username"/><br/>
            Password : <input type="password" name="password"/><br/>
            <input type="submit" name="save" value="Save"/>
        </form>
    </body>
</html>