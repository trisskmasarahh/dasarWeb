<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
        session_unset();
        session_destroy();

        echo "All session variable are now removed, and the session is destroyes."
        ?>
    </body>
</html>