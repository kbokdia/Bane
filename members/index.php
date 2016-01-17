<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Club Apps - Members</title>

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
                    <li><a class="dropdown-button white-text" href="#!" data-activates="message">Message<i
                                class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
                <ul class="right hide-on-med-and-down">
                    <li><a class="dropdown-button white-text" href="#!" data-activates="profile">Name<i
                                class="material-icons right">arrow_drop_down</i></a></li>
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
                <th>Image</th>
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
                <td><span class="teal white-text platform-badge">Android</span><br><span
                        class="teal white-text platform-badge">Android</span></td>
                <td><a href="#" class="padding-right-5" onclick="pageMembers.openPasswordModal()">Login</a><a href="#"
                                                                                                              class="padding-right-5"
                                                                                                              onclick="pageMembers.openEditModal()">Edit</a><a
                        href="#">Delete</a><br><a href="#" onclick="pageMembers.openPasswordModal()">Login</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td><img class="circle responsive-img" src="../images/clubLogos/Saans.png" height="40" width="40"></td>
                <td>Darshan A Turakhia<br>Darshan A Turakhia</td>
                <td>9840729849<br>9840729849</td>
                <td><span class="teal white-text platform-badge">Android</span><br><span
                        class="teal white-text platform-badge">Android</span></td>
                <td><a href="#" class="padding-right-5">Login</a><a href="#" class="padding-right-5">Edit</a><a
                        href="#">Delete</a><br><a href="#">Login</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td><img class="circle responsive-img" src="../images/clubLogos/Saans.png" height="40" width="40"></td>
                <td>Darshan A Turakhia<br>Darshan A Turakhia</td>
                <td>9840729849<br>9840729849</td>
                <td><span class="teal white-text platform-badge">Android</span><br><span
                        class="teal white-text platform-badge">Android</span></td>
                <td><a href="#" class="padding-right-5">Login</a><a href="#" class="padding-right-5">Edit</a><a
                        href="#">Delete</a><br><a href="#">Login</a></td>
            </tr>
            <tr>
                <td>4</td>
                <td><img class="circle responsive-img" src="../images/clubLogos/Saans.png" height="40" width="40"></td>
                <td>Darshan A Turakhia<br>Darshan A Turakhia</td>
                <td>9840729849<br>9840729849</td>
                <td><span class="teal white-text platform-badge">Android</span><br><span
                        class="teal white-text platform-badge">Android</span></td>
                <td><a href="#" class="padding-right-5">Login</a><a href="#" class="padding-right-5">Edit</a><a
                        href="#">Delete</a><br><a href="#">Login</a></td>
            </tr>
            <tr>
                <td>5</td>
                <td><img class="circle responsive-img" src="../images/clubLogos/Saans.png" height="40" width="40"></td>
                <td>Darshan A Turakhia<br>Darshan A Turakhia</td>
                <td>9840729849<br>9840729849</td>
                <td><span class="teal white-text platform-badge">Android</span><br><span
                        class="teal white-text platform-badge">Android</span></td>
                <td><a href="#" class="padding-right-5">Login</a><a href="#" class="padding-right-5">Edit</a><a
                        href="#">Delete</a><br><a href="#">Login</a></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<div id="passwordModal" class="modal modal-small">
    <form id="passwordModalForm" name="passwordModalForm" method="post">
        <div class="modal-content">
            <h5>Password</h5>

            <div class="input-field">
                <input placeholder="9840729849" id="username" type="text" class="validate" disabled/>
                <label for="username">Username</label>
            </div>
            <div class="input-field">
                <input placeholder="Password" id="password" type="text" class="validate"/>
                <label for="password">Password</label>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Submit</button>
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
        </div>
    </form>
</div>

<div id="memberDetailsModal" class="modal modal-fixed-footer">
    <form id="memberModalForm" name="memberModalForm" method="post" novalidate>
        <div class="modal-content">

            <!-- Member Details Div -->
            <div id="div-1" class="display-block">
                <h5>Member Details</h5>

                <div class="input-field">
                    <input placeholder="Member Name *" id="memberName" name="memberName" type="text" class="validate" length="30" maxlength="30" onfocus="pageMembers.validation()" required/>

                    <div class="error"></div>
                </div>
                <div class="input-field">
                    <input placeholder="Date of Birth" id="memberDOB" name="memberDOB" type="date" class="datepicker"/>

                    <div class="error"></div>
                </div>
                <div class="input-field">
                    <input placeholder="Email" id="memberEmail" name="memberEmail" type="email" class="validate" length="30" maxlength="30"/>

                    <div class="error"></div>
                </div>
                <div class="input-field">
                    <input placeholder="Mobile Number" id="memberMobile" name="memberMobile" type="number" class="validate" length="10"/>

                    <div class="error"></div>
                </div>
                <div class="input-field">
                    <select id="memberBloodGroup" name="memberBloodGroup" class="validate">
                        <option value="0" disabled selected>Choose your Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>

                    <div class="error"></div>
                </div>
                <div class="input-field">
                    <select id="memberMaritalStatus" name="memberMaritalStatus" class="validate" onchange="pageMembers.maritalStatus(this)">
                        <option value="0" disabled selected>Choose your Marital Status</option>
                        <option value="1">Single</option>
                        <option value="2">Married</option>
                        <option value="3">Engaged</option>
                    </select>

                    <div class="error"></div>
                </div>
            </div>

            <!--Spouse Details Div-->
            <div id="div-2" class="display-none">
                <h5>Spouse Details</h5>

                <div class="input-field">
                    <input placeholder="Spouse Name" id="spouseName" name="spouseName" type="text" class="validate" length="30" maxlength="30">

                    <div class="error"></div>
                </div>
                <div class="input-field">
                    <input placeholder="Date of Birth" id="spouseDOB" name="spouseDOB" type="date" class="datepicker"/>

                    <div class="error"></div>
                </div>
                <div class="input-field">
                    <input placeholder="Email" id="spouseEmail" name="spouseEmail" type="email" class="validate" length="30" maxlength="30"/>

                    <div class="error"></div>
                </div>
                <div class="input-field">
                    <input placeholder="Mobile Number" id="spouseMobile" name="spouseMobile" type="number" class="validate" length="10"/>

                    <div class="error"></div>
                </div>
                <div class="input-field">
                    <select id="spouseBloodGroup" name="spouseBloodGroup" class="validate select">
                        <option value="" disabled selected>Choose your Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>
            </div>

            <!--Kids Details-->
            <div id="div-3" class="display-none">
                <h5>Kids Details</h5>

                <div class="input-field">
                    <input placeholder="Kids Name" id="kid1Name" name="kid1Name" type="text" class="validate" length="30" maxlength="30"/>

                    <div class="error"></div>
                </div>
                <div class="input-field">
                    <input placeholder="Date of Birth" id="kid1DOB" name="kid1DOB" type="date" class="datepicker validate"/>

                    <div class="error"></div>
                </div>
                <div class="input-field">
                    <input placeholder="Email" id="kid1Email" name="kid1Email" type="email" class="validate" length="30" maxlength="30"/>

                    <div class="error"></div>
                </div>
                <div class="input-field">
                    <input placeholder="Mobile Number" id="kid1Mobile" name="kid1Mobile" type="number" class="validate" length="10"/>

                    <div class="error"></div>
                </div>
            </div>

            <!--Residence Details-->
            <div id="div-4" class="display-none">
                <h5>Residence Details</h5>

                <div class="input-field">
                    <input placeholder="House No." id="residence1" name="residence1" type="text" class="validate" length="20" maxlength="20"/>

                    <div class="error"></div>
                </div>
                <div class="input-field">
                    <input placeholder="Street No." id="residence2" name="residence2" type="text" class="validate" length="20" maxlength="20"/>

                    <div class="error"></div>
                </div>

                <div class="input-field">
                    <input placeholder="Area" id="residence3" name="residence3" type="text" class="validate" length="20" maxlength="20"/>

                    <div class="error"></div>
                </div>

                <div class="input-field">
                    <input placeholder="City" id="residence4" name="residence4" type="text" class="validate" length="20" maxlength="20"/>

                    <div class="error"></div>
                </div>

                <div class="input-field">
                    <input placeholder="Pincode" id="residence5" name="residence5" type="number" class="validate" length="6"/>

                    <div class="error"></div>
                </div>

                <div class="input-field">
                    <input placeholder="Residence Phone Number" id="residence6" name="residence6" type="number" class="validate"/>

                    <div class="error"></div>
                </div>
            </div>

            <!--Professional Details-->
            <div id="div-5" class="display-none">
                <h5>Professional Details</h5>

                <div class="input-field">
                    <input placeholder="Profession" id="profession1" name="profession1" type="text" class="validate" length="20" maxlength="20"/>

                    <div class="error"></div>
                </div>

                <div class="input-field">
                    <input placeholder="Company Name" id="profession2" name="profession2" type="text" class="validate" length="30" maxlength="30"/>

                    <div class="error"></div>
                </div>

                <div class="input-field">
                    <input placeholder="Building No." id="profession3" name="profession3" type="text" class="validate" length="20" maxlength="20"/>

                    <div class="error"></div>
                </div>
                <div class="input-field">
                    <input placeholder="Street No." id="profession4" name="profession4" type="text" class="validate" length="20" maxlength="20"/>

                    <div class="error"></div>
                </div>

                <div class="input-field">
                    <input placeholder="Area" id="profession5" name="profession5" type="text" class="validate" length="20" maxlength="20"/>

                    <div class="error"></div>
                </div>

                <div class="input-field">
                    <input placeholder="City" id="profession6" name="profession6" type="text" class="validate" length="20" maxlength="20"/>

                    <div class="error"></div>
                </div>

                <div class="input-field">
                    <input placeholder="Pincode" id="profession7" name="profession7" type="number" class="validate" length="6"/>

                    <div class="error"></div>
                </div>

                <div class="input-field">
                    <input placeholder="Office Phone Number" id="profession8" name="profession8" type="number" class="validate"/>

                    <div class="error"></div>
                </div>
            </div>

            <!--Other Details -->
            <div id="div-6" class="display-none">
                <h5>Other Details</h5>
            </div>

        </div>


        <div class="modal-footer">
            <a id="prevBtn" class="modal-action waves-effect waves-green btn-flat left display-none" onclick="pageMembers.previous()"><i class="material-icons hide-on-large-only  show-on-medium-and-down">skip_previous</i><span class="hide-on-med-and-down show-on-large">Prev</span></a>
            <a id="nextBtn" class="modal-action waves-effect waves-green btn-flat left" onclick="pageMembers.next()"><i class="material-icons hide-on-large-only show-on-medium-and-down">skip_next</i><span class="hide-on-med-and-down show-on-large">Next</span></a>

            <button id="submitBtn" type="submit" class="modal-action modal-close waves-effect waves-green btn-flat display-none"><i class="material-icons hide-on-large-only show-on-medium-and-down">done</i><span class="hide-on-med-and-down show-on-large">Submit</span></button>
            <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons hide-on-large-only show-on-medium-and-down">not_interested</i><span class="hide-on-med-and-down show-on-large">Cancel</span></a>
        </div>
    </form>
</div>

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red" onclick="pageMembers.openAddModal()">
        <i class="large material-icons">add</i>
    </a>
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
