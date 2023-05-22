<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PLS</title>
    <link rel="shortcut icon" href="public/images/pls.png">
    <link rel="stylesheet" href="public/css/main.css">
    <meta property="og:description" content="Project Los Santos Fivem server.">
    <meta property="og:title" content="Project Los Santos">
    <meta property="og:image" content="https://i.imgur.com/JI4YO81.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <link rel="stylesheet" href="public/css/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <script src="public/js/vue.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <link rel="stylesheet" href="public/css/buttons.css">
</head>
<style>
body {
  background-color: #000000;
  background-attachment:fixed;
  background-size:cover;
  overflow:hidden;
  animation-fill-mode: normal;
  animation: animatedBackground 30s linear;
  -moz-animation: animatedBackground 30s linear;
  -webkit-animation: animatedBackground 30s linear;
  -ms-animation: animatedBackground 30s linear;
  -o-animation: animatedBackground 30s linear;
  animation-name: example;
  animation-iteration-count: infinite;
}

#background {
  width: 100vw;
  height: 100vh;
  background-color: black;
  position: fixed;
  top: 0px;
  left: 0px;
  right: 0px;
  z-index: 1;
  background-position: 0px 0px;
  display: flex;
}

#background img {
                position: absolute;
                background-size: cover;
                min-height: 100vh;
                opacity: 1;
                transition: transform .2s, opacity 1s;
                /* Animation */
                transform: scale(1.3);
                animation-fill-mode: forwards;
                animation: animatedBackground 10s linear;
                -moz-animation: animatedBackground 10s linear;
                /* -webkit-animation: animatedBackground 20s linear; */
                -ms-animation: animatedBackground 10s linear;
                -o-animation: animatedBackground 10s linear;
            }

            @keyframes  animate-stripes {
                0% {
                    left: 0;
                }
                100% {
                    left: 60px;
                }
            }

            @keyframes  animatedBackground {
                0% {
                    left: 0;
                }
                100% {
                    left: -300px;
                }
            }

            @-moz-keyframes animatedBackground {
                0% {
                    left: 0;
                }
                100% {
                    left: -300px;
                }
            }

            @-webkit-keyframes animatedBackground {
                0% {
                    left: 0;
                }
                100% {
                    left: -300px;
                }
            }

            @-ms-keyframes animatedBackground {
                0% {
                    left: 0;
                }
                100% {
                    left: -300px;
                }
            }

            @-o-keyframes animatedBackground {
                0% {
                    left: 0;
                }
                100% {
                    left: -300px;
                }
            }

#keepingColor {
  width: 100vw;
  height: 100vh;
  position: fixed;
  left: 0;
  right: 0;
  background-color: #2b1d2c;
}

#login .logcontainer {
  position: relative;
  max-width: fit-content;
  margin-top: 164px;
  transition: var(--tran-05);
  margin-left: auto;
  margin-right: auto;
}

#login .logcontainer img {
  max-width: 100%;
}

</style>
<body class="login">
<div id="app">
  <div id="keepingColor">
    <div id="background">
        <img id="bak0" src="public/images/background1.jpg" style="opacity: 0" />
        <img id="bak1" src="public/images/background2.jpg" style="opacity: 0" />
        <img id="bak2" src="public/images/background3.jpg" style="opacity: 0" />
        <img id="bak3" src="public/images/background4.jpg" style="opacity: 0" />
    </div>
  </div>
</div>
    <section id="login">
    <div class="logcontainer">
		<img src="public/images/pls.png" style="width: 16rem;">
    <a href="?login" class="Button Button--largexl Button--primary">
        <i class="fa-brands fa-steam"></i> Logi sisse
    </a>
    </div>
    </section>
    <script src="public/js/login.js" type="text/javascript"></script>
</body>
</html>