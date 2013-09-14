<?php
$bg =   array('#eeffee','#ffffff');
$turn = 0;
?>
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
            <table cellpadding="0" cellspacing="0" width="40%">
                <tr>
                    <th width="70%" style="background-color:#ccffee;">Subject</th>
                    <th width="30%" style="background-color:#aaffee;">Modified Date</th>
                </tr>
                <?php foreach ($list_array AS $row)
                {
                    $turn   =   1 - $turn;
                ?>
                <tr valign="top" height="20" style="background-color:<?php echo $bg[$turn];?>;">
                    <td><?php echo $row['subject']; ?></td>
                    <td><?php echo $row['article_timestamp']; ?></td>
                </tr>
                <?php } ?>
            </table>
            <p>&nbsp;</p>
            <div><?php include 'admin_footer.php';?></div>
        </div>
    </body>
</html>