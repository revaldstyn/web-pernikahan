<html>
<head>
  <title></title>
</head>
<body>
  <div class="top_nav">
    <div class="nav_menu">
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>
      
      <nav class="nav navbar-nav">
        <ul class=" navbar-right">
          <li class="nav-item dropdown open" style="padding-left: 15px;">
            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
            <img src="assets/images/admin.png" alt=""><?php echo $_SESSION['email'];?>
            </a>
      
            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item"  href="logout.php">
                  <i class="fa fa-sign-out pull-right"></i> Log Out
                </a>
            </div>
          </li>

          <li role="presentation" class="nav-item dropdown open">
           
            
            <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
              <li class="nav-item">
                <a class="dropdown-item">
                <span class="image"><img src="assets/images/admin.png" alt="Profile Image" /></span>

                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>

                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
                </a>
              </li> 
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</body>
</html>
