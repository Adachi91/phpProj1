<?php
    $moo = "AHHHHH I'M HIDDEN HALP ME";

    //if(isset($_GET['peeking']))
        $getvar = $_GET['peeking'];
    //else
      //  $getvar = null;

    if(testvar($getvar)) {
        switch($getvar) {
            case 0:
                die('STOP PEEKING AT ME');
                break;
            case 1:
                if(testtestvar(null))
                    die('peeek');
                break;
            default:
                break;
        }
    }

    function testtestvar($var) {
        $test = testvar($var);
        global $moo;

        if($test) {
            $moo = "Variable was true";
            return $test;
        } else {
            $moo = "Variable was false";
            return $test;
        }
    }

    /**
     * @return bool
     * returns boolean if a variable is set and not null
     */
    function testvar($var) {
        return ((isset($var)) && $var);// || (isset($var) && $var != null));
    }
?>

<html>
    <head>
        <title>ppeeeeeeek</title>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/main.js" defer></script>
    </head>
    <body>
        <nav>
            <ul class="navi">
                <li><a href="?peeking=0">Weee</a></li>
                <li>Page 2</li>
                <li>page$</li>
            </ul>
        </nav>
        <main>
            <div class="container">
                <?=$moo?>
            </div>
        </main>
    </body>
</html>