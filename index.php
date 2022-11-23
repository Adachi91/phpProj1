<?php
    session_start();

    if (session_data('init'))
    {
        $moo = "You have a session going! YAY!!! ~~~♥<br />You've clicked {$_SESSION['clicky']} times! Great Job! ☺";
    } else {
        $_SESSION['init'] = true;
        $_SESSION['clicky'] = 0;
        $moo = "AHHHHH I'M HIDDEN HALP ME";
    }


    $getvar = isset($_GET['peeking']) ? $_GET['peeking'] : null;

    if(testvar($getvar)) {
        switch($getvar) {
            case 0:
                die('STOP PEEKING AT ME');
                break;
            case 1:
                if(testtestvar(null))
                    die('peeek');
                break;
            case 2:
                $_SESSION['clicky']++;
                break;
            default:
                break;
        }
    }

    
    /**
     * @return sessionydata
     * Returns session data based on oh my god what have I done.
     */
    function session_data($var) {
        return $_SESSION[$var];
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

    <header class="topbar">
        <div class="header-logo" aria-label="site logo"><a href=""><img src="img/logo.png" alt="Site Logo" /></a></div>
        <nav aria-label="Main Navigation">
            <ul class="links" aria-label="Links">
                <li><a href="?peeking=0">Weee</a></li>
                <li><a href="?peeking=1" rel="noopener">Page 2</a></li>
                <li><a href="?peeking=2" rel="noopener">Page 3</a></li>
            </ul>
        </nav>
    </header>

    <body>
        <main aria-label="Main Content Body">
            <div class="container" aria-label="container for main content body">
                <?=$moo?>
            </div>
        </main>
    </body>
</html>