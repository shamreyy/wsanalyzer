<?php
    include_once "modules/webserver.php";

    $ws1 = "https://sumatosoft.com/";
    $ws2 = "http://tut.by/";
    $ws3 = "http://www.softeq.com/";
    $ws4 = "http://microsoft.com/";

    $ss1 = getWSServer($ws1);
    $ss2 = getWSServer($ws2);
    $ss3 = getWSServer($ws3);
    $ss4 = getWSServer($ws4);

    echo "Website 1 = [".$ws1."]    Server = [".$ss1."]<br />";
    echo "Website 2 = [".$ws2."]    Server = [".$ss2."]<br />";
    echo "Website 3 = [".$ws3."]    Server = [".$ss3."]<br />";
    echo "Website 4 = [".$ws4."]    Server = [".$ss4."]<br />";
?>