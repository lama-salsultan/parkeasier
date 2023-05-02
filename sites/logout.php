<?php
session_start();
session_destroy();

?>
<html>
<header>
    <script>
if (window.confirm(' you successfully logged out If you click "ok" you will be redirected to signin page')) 
{
window.location.href='SignIn.php';
};

    </script>


</header>
<body>
</body>
</html>