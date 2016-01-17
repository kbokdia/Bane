<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Club Apps - News Feed</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../dist/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../dist/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="dist/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<div class="navbar-fixed">
    <ul id="message" class="dropdown-content">
        <li><a href="../notification/">Notification</a></li>
        <li><a href="../mail/">Mail</a></li>
    </ul>
    <ul id="profile" class="dropdown-content">
        <li><a href="..account/">Account</a></li>
        <li class="divider"></li>
        <li><a href="..logout//">Logout</a></li>
    </ul>
    <nav class="indigo darken-3" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="../" class="brand-logo white-text">Club Apps</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="../newsfeed" class="white-text">Newsfeed</a></li>
                <li><a href="../members" class="white-text">Members</a></li>
                <ul class="left hide-on-med-and-down">
                    <li><a class="dropdown-button white-text" href="#!" data-activates="message">Message<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
                <ul class="right hide-on-med-and-down">
                    <li><a class="dropdown-button white-text" href="#!" data-activates="profile">Name<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li><a href="../newsfeed" class="black-text">Newsfeed</a></li>
                <li><a href="../members" class="black-text">Members</a></li>
                <li><a href="../notification/">Notification</a></li>
                <li><a href="../mail/">Mail</a></li>
                <li><a href="..account/">Account</a></li>
                <li><a href="..logout//">Logout</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>

<div class="container padding-top">
    <div class="row">
        <table class="table bordered">
            <thead>
                <tr>
                    <th>S.no</th>
                    <th></th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Platform</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img class="circle responsive-img" src="../images/clubLogos/Saans.png" height="40" width="40"></td>
                    <td>Darshan A Turakhia<br>Darshan A Turakhia</td>
                    <td>9840729849<br>9840729849</td>
                    <td><span class="teal white-text platform-badge">Android</span><br><span class="teal white-text platform-badge">Android</span></td>
                    <td><a href="#" class="padding-right-5" onclick="pageMembers.openPasswordModal()">Login</a><a href="#" class="padding-right-5">Edit</a><a href="#">Delete</a><br><a href="#">Login</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img class="circle responsive-img" src="../images/clubLogos/Saans.png" height="40" width="40"></td>
                    <td>Darshan A Turakhia<br>Darshan A Turakhia</td>
                    <td>9840729849<br>9840729849</td>
                    <td><span class="teal white-text platform-badge">Android</span><br><span class="teal white-text platform-badge">Android</span></td>
                    <td><a href="#" class="padding-right-5">Login</a><a href="#" class="padding-right-5">Edit</a><a href="#">Delete</a><br><a href="#">Login</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img class="circle responsive-img" src="../images/clubLogos/Saans.png" height="40" width="40"></td>
                    <td>Darshan A Turakhia<br>Darshan A Turakhia</td>
                    <td>9840729849<br>9840729849</td>
                    <td><span class="teal white-text platform-badge">Android</span><br><span class="teal white-text platform-badge">Android</span></td>
                    <td><a href="#" class="padding-right-5">Login</a><a href="#" class="padding-right-5">Edit</a><a href="#">Delete</a><br><a href="#">Login</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><img class="circle responsive-img" src="../images/clubLogos/Saans.png" height="40" width="40"></td>
                    <td>Darshan A Turakhia<br>Darshan A Turakhia</td>
                    <td>9840729849<br>9840729849</td>
                    <td><span class="teal white-text platform-badge">Android</span><br><span class="teal white-text platform-badge">Android</span></td>
                    <td><a href="#" class="padding-right-5">Login</a><a href="#" class="padding-right-5">Edit</a><a href="#">Delete</a><br><a href="#">Login</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><img class="circle responsive-img" src="../images/clubLogos/Saans.png" height="40" width="40"></td>
                    <td>Darshan A Turakhia<br>Darshan A Turakhia</td>
                    <td>9840729849<br>9840729849</td>
                    <td><span class="teal white-text platform-badge">Android</span><br><span class="teal white-text platform-badge">Android</span></td>
                    <td><a href="#" class="padding-right-5">Login</a><a href="#" class="padding-right-5">Edit</a><a href="#">Delete</a><br><a href="#">Login</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div id="passwordModal" class="modal modal-small">
    <div class="modal-content">
        <h5>Password</h5>
        <div class="input-field">
            <input placeholder="9840729849" id="username" type="text" class="validate" disabled>
            <label for="username">Username</label>
        </div>
        <div class="input-field">
            <input placeholder="Password" id="password" type="text" class="validate">
            <label for="password">Password</label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>

<footer class="page-footer pink accent-3" style="padding-top: 0px">
    <div class="footer-copyright">
        <div class="container">
            © 2016 | Powered by <a class="grey-text text-lighten-4" href="#!">The Appsolutes</a>
        </div>
    </div>
</footer>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../dist/script/materialize.min.js"></script>
<script src="../dist/script/script.js"></script>
<script src="dist/script/script.js"></script>
</body>
</html>
