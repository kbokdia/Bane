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

<div class="container margin-top-10">
    <div class="row">
        <div class="col s12 m10 offset-m1 l8 offset-l2">
            <div class="card white lighten-5 z-depth-1">
                <div class="card-content">
                    <div class="row row-margin-none">
                        <a href="#" id="delete"><i class="material-icons delete">delete</i></a>
                        <div class="col s12 valign-wrapper">
                            <img src="../images/clubLogos/RYA.png" alt="" class="circle responsive-img member-img-circle">
                            <span class="name-style">
                                Name
                            </span>
                        </div>
                        <div class="col s12">
                          <span class="black-text">
                            This is where the post shall appear. The Post may be max of 140 characters only.
                          </span>
                        </div>
                    </div>
                </div>
                <div class="card-action comment">
                    <div class="row row-margin-none valign-wrapper">
                        <a href="#" id="delete"><i class="material-icons delete">delete</i></a>
                        <div class="col s3 m2 l2">
                            <img src="../images/clubLogos/Saans.png" alt="" class="circle responsive-img comment-img-circle">
                        </div>
                        <div class="col s9 m10 l10 comment-padding-right">
                          <span class="black-text">
                            <strong>Kamlesh Bokdia</strong> This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                          </span>
                        </div>
                    </div>
                </div>
                <div class="card-action comment">
                    <div class="row row-margin-none valign-wrapper">
                        <a href="#" id="delete"><i class="material-icons delete">delete</i></a>
                        <div class="col s3 m2 l2">
                            <img src="../images/clubLogos/Saans.png" alt="" class="circle responsive-img comment-img-circle">
                        </div>
                        <div class="col s9 m10 l10 comment-padding-right">
                          <span class="black-text">
                            <strong>Kamlesh Bokdia</strong> This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                          </span>
                        </div>
                    </div>
                </div>
                <div class="card-action comment">
                    <div class="row row-margin-none valign-wrapper">
                        <a href="#" id="delete"><i class="material-icons delete">delete</i></a>
                        <div class="col s3 m2 l2">
                            <img src="../images/clubLogos/Saans.png" alt="" class="circle responsive-img comment-img-circle">
                        </div>
                        <div class="col s9 m10 l10 comment-padding-right">
                          <span class="black-text">
                            <strong>Kamlesh Bokdia</strong> This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                          </span>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <span>
                        <a href="#" id="commentBtn" onclick="pageNewsFeed.openCommentModal(this)">Comment</a>
                    </span>
                    <span class="float-right">
                        <a href="#" class="margin-right-none" onclick="pageNewsFeed.showHideComment(this)">Show/Hide</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m10 offset-m1 l8 offset-l2">
            <div class="card white lighten-5 z-depth-1">
                <div class="card-content">
                    <div class="row row-margin-none">
                        <a href="#" id="delete"><i class="material-icons delete">delete</i></a>
                        <div class="col s12 valign-wrapper">
                            <img src="../images/clubLogos/RYA.png" alt="" class="circle responsive-img member-img-circle">
                            <span class="name-style">
                                Name
                            </span>
                        </div>
                        <div class="col s12">
                          <span class="black-text">
                            This is where the post shall appear. The Post may be max of 140 characters only.
                          </span>
                        </div>
                    </div>
                </div>
                <div class="card-action comment">
                    <div class="row row-margin-none valign-wrapper">
                        <a href="#" id="delete"><i class="material-icons delete">delete</i></a>
                        <div class="col s3 m2 l2">
                            <img src="../images/clubLogos/Saans.png" alt="" class="circle responsive-img comment-img-circle">
                        </div>
                        <div class="col s9 m10 l10 comment-padding-right">
                          <span class="black-text">
                            <strong>Kamlesh Bokdia</strong> This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                          </span>
                        </div>
                    </div>
                </div>
                <div class="card-action comment">
                    <div class="row row-margin-none valign-wrapper">
                        <a href="#" id="delete"><i class="material-icons delete">delete</i></a>
                        <div class="col s3 m2 l2">
                            <img src="../images/clubLogos/Saans.png" alt="" class="circle responsive-img comment-img-circle">
                        </div>
                        <div class="col s9 m10 l10 comment-padding-right">
                          <span class="black-text">
                            <strong>Kamlesh Bokdia</strong> This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                          </span>
                        </div>
                    </div>
                </div>
                <div class="card-action comment">
                    <div class="row row-margin-none valign-wrapper">
                        <a href="#" id="delete"><i class="material-icons delete">delete</i></a>
                        <div class="col s3 m2 l2">
                            <img src="../images/clubLogos/Saans.png" alt="" class="circle responsive-img comment-img-circle">
                        </div>
                        <div class="col s9 m10 l10 comment-padding-right">
                          <span class="black-text">
                            <strong>Kamlesh Bokdia</strong> This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                          </span>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <span>
                        <a href="#" id="commentBtn" onclick="pageNewsFeed.openCommentModal(this)">Comment</a>
                    </span>
                    <span class="float-right">
                        <a href="#" class="margin-right-none" onclick="pageNewsFeed.showHideComment(this)">Show/Hide</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m10 offset-m1 l8 offset-l2">
            <div class="card white lighten-5 z-depth-1">
                <div class="card-content">
                    <div class="row row-margin-none">
                        <a href="#" id="delete"><i class="material-icons delete">delete</i></a>
                        <div class="col s12 valign-wrapper">
                            <img src="../images/clubLogos/RYA.png" alt="" class="circle responsive-img member-img-circle">
                            <span class="name-style">
                                Name
                            </span>
                        </div>
                        <div class="col s12">
                          <span class="black-text">
                            This is where the post shall appear. The Post may be max of 140 characters only.
                          </span>
                        </div>
                    </div>
                </div>
                <div class="card-action comment">
                    <div class="row row-margin-none valign-wrapper">
                        <a href="#" id="delete"><i class="material-icons delete">delete</i></a>
                        <div class="col s3 m2 l2">
                            <img src="../images/clubLogos/Saans.png" alt="" class="circle responsive-img comment-img-circle">
                        </div>
                        <div class="col s9 m10 l10 comment-padding-right">
                          <span class="black-text">
                            <strong>Kamlesh Bokdia</strong> This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                          </span>
                        </div>
                    </div>
                </div>
                <div class="card-action comment">
                    <div class="row row-margin-none valign-wrapper">
                        <a href="#" id="delete"><i class="material-icons delete">delete</i></a>
                        <div class="col s3 m2 l2">
                            <img src="../images/clubLogos/Saans.png" alt="" class="circle responsive-img comment-img-circle">
                        </div>
                        <div class="col s9 m10 l10 comment-padding-right">
                          <span class="black-text">
                            <strong>Kamlesh Bokdia</strong> This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                          </span>
                        </div>
                    </div>
                </div>
                <div class="card-action comment">
                    <div class="row row-margin-none valign-wrapper">
                        <a href="#" id="delete"><i class="material-icons delete">delete</i></a>
                        <div class="col s3 m2 l2">
                            <img src="../images/clubLogos/Saans.png" alt="" class="circle responsive-img comment-img-circle">
                        </div>
                        <div class="col s9 m10 l10 comment-padding-right">
                          <span class="black-text">
                            <strong>Kamlesh Bokdia</strong> This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                              This is the comment block. This also has only 140 Characters
                          </span>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <span>
                        <a href="#" id="commentBtn" onclick="pageNewsFeed.openCommentModal(this)">Comment</a>
                    </span>
                    <span class="float-right">
                        <a href="#" class="margin-right-none" onclick="pageNewsFeed.showHideComment(this)">Show/Hide</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="page-footer pink accent-3" style="padding-top: 0px">
    <div class="footer-copyright">
        <div class="container">
            © 2016 | Powered by <a class="grey-text text-lighten-4" href="#!">The Appsolutes</a>
        </div>
    </div>
</footer>

<!-- Comment Modal -->
<div id="commentModal" class="modal">
    <div class="modal-content">
        <form id="commentForm">
            <div class="row">
            <strong>Add Your Comment</strong>
                <div class="input-field">
                    <textarea id="commentBox" class="materialize-textarea" placeholder="Add your comment" length="140"></textarea>
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="submit" class="modal-action waves-effect waves-green btn-flat">Submit</button>
        <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
    </div>
</div>



<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../dist/script/materialize.min.js"></script>
<script src="../dist/script/script.js"></script>
<script src="dist/script/script.js"></script>
</body>
</html>
