<!DOCTYPE html>
<html class="mdc-typography">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>E-Library</title>
    <link rel="stylesheet" href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/site_themes/light_blue/index.css">
    <link rel="stylesheet" media="screen and (min-width: 2000px)" href="css/layouts/index/larger.css">
    <link rel="stylesheet" media="screen and (max-width: 1999px) and (min-width: 1300px)" href="css/layouts/index/wide.css">
    <link rel="stylesheet" media="screen and (max-width: 1299px) and (min-width: 1024px)" href="css/layouts/index/normal_ext.css">
    <link rel="stylesheet" media="screen and (max-width: 1023px) and (min-width: 640px)" href="css/layouts/index/normal.css">
    <link rel="stylesheet" media="screen and (max-width: 639px)" href="css/layouts/index/small.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="application/javascript" src="js/page.js"></script>
</head>
<body>
<div id="page" class="" style="margin: auto">
    <?php include "header.php" ?>
    <?php include "nav.php" ?>
    <section id="main">
        <div id="content" style="order: 2">
            <div id="login" class="mdc-elevation--z2">
                <div id="login_form" style="display: flex; display: -webkit-flex; flex-direction: row; flex-wrap: wrap; align-items: center; margin-top: 10px; width: 75%">
                    <div style="width: 100%; height: 70px; background-color: var(--main-700); display: flex; align-items: center; align-content: center; border-radius: 3px 3px 0 0; margin-top: 15px">
                        <p class="material_label _bold" style="color: white; font-size: 1.5em; width: 100%; text-align: center">Welcome back</p>
                    </div>
                    <form id="signinform" action="do_login.php" method="post" style="width: 100%; margin: auto">
                        <div class="rb-login-container">
                            <div class="mdc-text-field" data-mdc-auto-init="MDCTextField" style="width: 100%">
                                <input required autocomplete="off" type="text" id="my-username" name="my-username" class="mdc-text-field__input" style="width: 100%">
                                <label class="mdc-floating-label" for="my-username">Username</label>
                            </div>
                        </div>
                        <div class="rb-login-container">
                            <div class="mdc-text-field" data-mdc-auto-init="MDCTextField" style="width: 100%">
                                <input required type="password" class="mdc-text-field__input" id="pw" name="pw"
                                       autocomplete="current-password" style="width: 100%">
                                <label for="pw" class="mdc-floating-label">Password</label>
                                <div class="mdc-text-field__bottom-line"></div>
                            </div>
                        </div>
                        <button type="button" class="mdc-button mdc-button--raised" id="login_button">
                            Login
                        </button>
                        <p style="margin-top: 30px; width: 100%; text-align: center" id="pwd_req">
                            <a href="#" id="newpwd" class="normal material_link">Password dimenticata?</a>
                        </p>
                    </form>
                </div>
            </div>
            <p class="spacer"></p>
            <p class="spacer"></p>
        </div>
    </section>
</div>
<?php include "footer.php" ?>
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
<script src="front.js" type="application/javascript"></script>
<script type="application/javascript">
    var is_mobile = <?php if ($detect->isMobile()) echo 1; else echo 0; ?>;
    (function() {

    })();
</script>
</body>
</html>