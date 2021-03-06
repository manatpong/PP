<?php function head(){
    if(1){
?>
        <title>©PolarBear Water Corp.</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/sb-admin.css">
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!--<link rel="stylesheet" type="text/css" href="https://cdn.social-zite.com/style-2018.css">-->
<?php    
    }
} ?>

<?php function foot(){
    if(1){
?>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
        <script src="js/sb-admin.min.js"></script>
        <script src="vendor/canvasjs/canvasjs.min.js"></script>
<?php    
    }
} ?>

<?php function FOOTER(){
    if(1){
?>
        <footer class="footer sticky-footer">
            <div class="container-fluid">
                <div class="copyright text-center">
                    ©Polar Bear Water Cop. version1.0.0
                </div>
            </div>
        </footer>
<?php    
    }
} ?>

<?php function sidebar(){
    if(1){
?>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top img-bg-side" id="mainNav">
        <a class="navbar-brand" href="index.php"><img src="img\Polar-Bear-icon2.png" style="width: 30px;"> PolarBear Water</a> 
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav navbar-sidenav img-bg-side scroll-v" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-wrench" id="fa-wh"></i>
                <span class="nav-link-text">Configuration</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseComponents">
                <li>
                  <a href="customer.php">Customer</a>
                </li>
                <li>
                  <a href="vendor.php">Vendor</a>
                </li>
                <li>
                  <a href="bom.php">BOM</a>
                </li>
                <li>
                  <a href="wc.php">Work Center</a>
                </li>
                <li>
                  <a href="routing.php">Routing</a>
                </li>
                <li>
                  <a href="mat.php">Material</a>
                </li>
                <li>
                  <a href="rop.php">Reorder Point</a>
                </li>
              </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents2" data-parent="#exampleAccordion">
                <i class="fas fa-file-alt" id="fa-wh"></i>&nbsp
                <span class="nav-link-text">Documents</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseComponents2">
                <li>
                  <a href="schedule_detail.php">Planed Order</a>
                </li>
                <li>
                  <a href="production_order.php">Production Order</a>
                </li>
                <li>
                  <a href="withdraw.php">Material Withdrawal</a>
                </li>
                <li>
                  <a href="gr.php">Goods Receipt</a>
                </li>
              </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents3" data-parent="#exampleAccordion">
                <i class="fas fa-clipboard-list" id="fa-wh"></i>&nbsp
                <span class="nav-link-text">Report</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseComponents3">
                <li>
                  <a href="report_stock.php">Stock</a>
                </li>
                <li>
                  <a href="report_po.php">Production Order</a>
                </li>
              </ul>
            </li>
           <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-file" id="fa-wh"></i>
                <span class="nav-link-text">Example Pages</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                <li>
                  <a href="login.html">Login Page</a>
                </li>
                <li>
                  <a href="register.html">Registration Page</a>
                </li>
                <li>
                  <a href="forgot-password.html">Forgot Password Page</a>
                </li>
                <li>
                  <a href="blank.html">Blank Page</a>
                </li>
              </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-sitemap" id="fa-wh"></i>
                <span class="nav-link-text">Menu Levels</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseMulti">
                <li>
                  <a href="#">Second Level Item</a>
                </li>
                <li>
                  <a href="#">Second Level Item</a>
                </li>
                <li>
                  <a href="#">Second Level Item</a>
                </li>
                <li>
                  <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
                  <ul class="sidenav-third-level collapse" id="collapseMulti2">
                    <li>
                      <a href="#">Third Level Item</a>
                    </li>
                    <li>
                      <a href="#">Third Level Item</a>
                    </li>
                    <li>
                      <a href="#">Third Level Item</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>-->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
              <a class="nav-link" href="track.php">
                <i class="fas fa-thumbtack" id="fa-wh"></i>
                <span class="nav-link-text">Tracking</span>
              </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
              <a class="nav-link" href="stock.php">
                <i class="fas fa-archive" id="fa-wh"></i>
                <span class="nav-link-text">Stock</span>
              </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
              <a class="nav-link" href="forecast.php">
                <i class="fas fa-random" id="fa-wh"></i>
                <span class="nav-link-text">Forecast</span>
              </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
              <a class="nav-link" href="reorder.php">
                <i class="fas fa-filter" id="fa-wh"></i>
                <span class="nav-link-text">Reorderpoint</span>
              </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
              <a class="nav-link" href="inventory_used.php">
                <i class="fas fa-warehouse" id="fa-wh"></i>
                <span class="nav-link-text">Inventory Area</span>
              </a>
            </li>
            
          </ul>
          <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
              <a class="nav-link text-center" id="sidenavToggler">
                <i class="fa fa-fw fa-angle-left"></i>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-envelope"></i>
                <span class="d-lg-none">Messages
                  <span class="badge badge-pill badge-primary">12 New</span>
                </span>
                <span class="indicator text-primary d-none d-lg-block">
                  <i class="fa fa-fw fa-circle"></i>
                </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">New Messages:</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <strong>David Miller</strong>
                  <span class="small float-right text-muted">11:21 AM</span>
                  <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <strong>Jane Smith</strong>
                  <span class="small float-right text-muted">11:21 AM</span>
                  <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <strong>John Doe</strong>
                  <span class="small float-right text-muted">11:21 AM</span>
                  <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item small" href="#">View all messages</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-bell"></i>
                <span class="d-lg-none">Alerts
                  <span class="badge badge-pill badge-warning">6 New</span>
                </span>
                <span class="indicator text-warning d-none d-lg-block">
                  <i class="fa fa-fw fa-circle"></i>
                </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">New Alerts:</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <span class="text-success">
                    <strong>
                      <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                  </span>
                  <span class="small float-right text-muted">11:21 AM</span>
                  <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <span class="text-danger">
                    <strong>
                      <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
                  </span>
                  <span class="small float-right text-muted">11:21 AM</span>
                  <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <span class="text-success">
                    <strong>
                      <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                  </span>
                  <span class="small float-right text-muted">11:21 AM</span>
                  <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item small" href="#">View all alerts</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                  <i class="fas fa-user"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-sign-out-alt"></i>Logout</a>
            </li>
          </ul>
        </div>
      </nav>
<?php    
    }
} ?>

<?php function NAV_Bar(){
    if(1){
?>
        <nav class="navbar navbar-expand-lg nav-color navbar-light">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <i class="fas fa-user"></i>
            </form>
          </div>
        </nav>  
<?php    
    }
} ?>