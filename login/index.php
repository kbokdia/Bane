<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Club Apps - Login</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../dist/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../dist/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="dist/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    <div class="navbar-fixed">
        <nav class="indigo darken-3" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="../" class="brand-logo white-text">Club Apps</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="login.html" class="white-text">Login</a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="login.html">Login</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </div>
    <div class="row card-top-padding">
        <form id="loginForm" name="loginForm" method="post">
            <div class="col s12 m12 l4 offset-l4">
                <div class="card-panel white">
                    <div class="row center-align">
                        <h5>Login</h5>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <input id="userName" placeholder="Username" name="userName" type="text" class="validate">
                            <label for="userName">Username</label>
                        </div>
                        <div class="error"></div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <input id="password" placeholder="Password" name="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                        <div class="error"></div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <select class="icons" name="clubID" id="clubID">
                                <option value="" disabled selected>Choose your club</option>
                                <option value="ega" data-icon="../images/clubLogos/EGA.png" class="left circle">EGA -
                                    Evergreen Association
                                </option>
                                <option value="rya" data-icon="../images/clubLogos/RYA.png" class="left circle">RYA -
                                    Rajasthan Youth Association
                                </option>
                                <option value="saans" data-icon="../images/clubLogos/Saans.png" class="left circle">Saans
                                </option>
                            </select>
                            <label>Choose Your Club</label>
                        </div>
                    </div>
                    <div class="row">
                        <p>
                            <input type="checkbox" id="rememberMe"/>
                            <label for="rememberMe" class="indigo-text">Remember Me</label>
                        </p>
                    </div>
                    <div class="row">
                        <button type="submit" class="waves-effect waves-light btn-large btn-full pink accent-3">Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../dist/script/materialize.min.js"></script>
    <script src="../dist/script/script.js"></script>
    <script src="dist/script/script.js"></script>
</body>
</html>
