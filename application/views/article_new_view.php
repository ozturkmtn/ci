<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1256"  />
        <title>Admin Panel</title>
    </head>
    <body>
        <div style="height:100%;width: 100%;">
            <?php include 'admin_header.php';?>
            <p>&nbsp;</p>
            <form name="article_form" action="<?php echo site_url();?>/article/save_article" method="post" >
                <table cellpadding="0" cellspacing="0">
                    <tr valign="top" height="40">
                        <td>Subject : </td><td><input type="text" size="100" name="subject" id="subject" /></td>
                    </tr>
                    <tr valign="top">
                        <td>Article &nbsp; :&nbsp;</td><td><textarea name="article" id="article" cols="81" rows="33"></textarea></td>
                    </tr>
                    <tr valign="top">
                        <td><input type="submit" name="submit" id="submit" value="Submit" /></td><td>&nbsp;</td>
                    </tr>
                </table>
            </form>
            <p>&nbsp;</p>
            <?php
            
            ?>
            <div><?php include 'admin_footer.php';?></div>
        </div>
    </body>
</html>
<?php

class foo
{
    public static $mystatic = 'foo';
    
    function staticValue()
    {
        return self::$mystatic;
    }
}

class bar extends foo
{
    public function fooStatic()
    {
        return parent::$mystatic;
    }
}

print foo::$mystatic;

$foo = new foo();
print $foo->staticValue();
print $foo->myStatic;

print $foo::$mystatic;
$classname = 'foo';
print $classname::myStatic;

print bar::$mystatic;
$bar = new bar();
print $bar->fooStatic();

    
    ?>
