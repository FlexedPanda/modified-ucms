<?php
include('dbconnect.php');
?>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand ml-md-3 ml-sm-0 " href="https://www.bracu.ac.bd/">BRAC University</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-0 mr-3">

            <?php if ($_SESSION["view"] == "Home") { ?>
                <li class="nav-item active ml-2 mr-2">
                    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="login.php">LogIn</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="signup.php">SignUp</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="apply.php">Sponsorship</a>
                </li>

            <?php } else if ($_SESSION["view"] == "Member") { ?>
                <form class="form-inline my-2 my-lg-0 mr-2">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
                <li class="nav-item active ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=announcement">Announcements<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=eventlist">Events</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=clublist">Clubs</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=deptlist">Departments</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="logout.php">LogOut</a>
                </li>

            <?php } else if ($_SESSION["view"] == "Panel") { ?>
                <form class="form-inline my-2 my-lg-0 mr-2">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
                <li class="nav-item active ml-1 mr-1">
                    <a class="nav-link" href="list.php?rqst=announcement">Announcements<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ml-1 mr-1">
                    <a class="nav-link" href="list.php?rqst=eventlist">Events</a>
                </li>
                <li class="nav-item ml-1 mr-1">
                    <a class="nav-link" href="list.php?rqst=clubevent">Club Event</a>
                </li>
                <li class="nav-item ml-1 mr-1">
                    <a class="nav-link" href="list.php?rqst=clubpanel">Club Panel</a>
                </li>
                <li class="nav-item ml-1 mr-1">
                    <a class="nav-link" href="list.php?rqst=clubmembers">Members</a>
                </li>
                <li class="nav-item ml-1 mr-1">
                    <a class="nav-link" href="pending.php">Pendings</a>
                </li>
                <li class="nav-item ml-1 mr-1">
                    <a class="nav-link" href="request.php">Requests</a>
                </li>
                <li class="nav-item ml-1 mr-1">
                    <a class="nav-link" href="contact.php">Contacts</a>
                </li>
                <li class="nav-item ml-1 mr-1">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item ml-1 mr-1">
                    <a class="nav-link" href="logout.php">LogOut</a>
                </li>

            <?php } else if ($_SESSION["view"] == "Advisor") { ?>
                <form class="form-inline my-2 my-lg-0 mr-2">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
                <li class="nav-item active ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=announcement">Announcements<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=eventlist">Events</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=clubevent">Club Event</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=clubpanel">Club Panel</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=clubmembers">Club Members</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=ocalist">OCAs</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=sponsorlist">Sponsors</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="logout.php">LogOut</a>
                </li>

            <?php } else if ($_SESSION["view"] == "Oca") { ?>
                <form class="form-inline my-2 my-lg-0 mr-2">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
                <li class="nav-item active ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=announcement">Announcements<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=eventlist">Events</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=clublist">Clubs</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=panellist">Panels</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=memberlist">Members</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=sponsorlist">Sponsors</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="eventreq.php">Requests</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="approval.php">Approvals</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="logout.php">LogOut</a>
                </li>

            <?php } else if ($_SESSION["view"] == "Sponsor") { ?>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=eventlist">Events</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=clublist">Clubs</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=ocalist">OCAs</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="fundreq.php">Fund Event</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="logout.php">LogOut</a>
                </li>

            <?php } else if ($_SESSION["view"] == "Department") { ?>
                <form class="form-inline my-2 my-lg-0 mr-1">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
                <li class="nav-item active ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=announcement">Announcements<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="announce.php">Announce</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=deptlist">Departments</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=eventlist">Events</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=clublist">Clubs</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=panellist">Club Panels</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="list.php?rqst=advisorlist">Advisors</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="logout.php">LogOut</a>
                </li>

            <?php } ?>
        </ul>
    </div>
</nav>