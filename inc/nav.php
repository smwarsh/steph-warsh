<nav class="navbar navbar-expand-md navbar-light bg-light">
  <ul class="navbar-nav">
    <li class="nav-item<?php if($page=='home') {echo ' active';} ?>"><a href="index.php">Home</a></li>
    <li class="nav-item<?php if($page=='portfolio') {echo ' active';} ?>"><a href="portfolio.php">Portfolio</a></li>
    <li class="nav-item<?php if($page=='contact') {echo ' active';} ?>"><a href="contact.php">Contact</a></li>
    <li class="nav-item<?php if($page=='blog') {echo ' active';} ?>"><a href="blog.php">Blog</a></li>
  </ul>
</nav>