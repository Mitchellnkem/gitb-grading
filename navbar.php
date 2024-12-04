<link rel="icon" href="./favicon/GITB Round Logo black.jpg">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="container">
        <div class="row">
          <div class="col-md-2 text-right">
            <img src="./images/GITB Round Logo black.jpg" class="img-responsive" style="height:100px;width:100px" alt="Logo">
          </div>
          <div class="col-md-8">
            <h3 style="color:white">GITB RECORD MANAGMENT SYSTEM </h3>
          </div>
        </div>
      </div>
    </div>
    
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle btn btn-info" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <span class="glyphicon glyphicon-user"></span>
            <?php echo $_SESSION['fname'] ?>
          </a>
          <ul class="dropdown-menu">
            <li><a href="students.php">User config</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>