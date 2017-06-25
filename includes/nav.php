<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Ordering System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="<?php echo ($page_title == 'home') ? 'active' : '' ?>"><a href="index.php">Home</a></li>
        <li class="<?php echo ($page_title == 'about') ? 'active' : '' ?>"><a href="about.php">About</a></li>
        <li class="<?php echo ($page_title == 'contact') ? 'active' : '' ?>"><a href="contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" target="_blank"><i class="socials fa fa-twitter"></i></a></li>
        <li><a href="#" target="_blank"><i class="socials fa fa-facebook"></i></a></li>
        <li><a href="#" target="_blank"><i class="socials fa fa-instagram"></i></a></li>
      </ul>
    </div>
  </div>
</nav>