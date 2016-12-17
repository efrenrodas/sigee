<?php
session_start();
session_destroy();
header('Location: index.html');
//echo '<html> <script><a href="javascript:location.reload()">SALIR</a></script></html>';
?>