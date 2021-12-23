<?php
define("WEBROOT",dirname(__FILE__));
define("ROOT",dirname(WEBROOT));
define('DS',DIRECTORY_SEPARATOR);
define('BASE_URL',dirname(dirname($_SERVER['SCRIPT_NAME'])));

echo BASE_URL;

require CORE.DS.'includes.php';
new Dispatcher();

include 'db_con.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);

?>
<pre>
    <?php print_r($_SERVER); ?>

</pre>