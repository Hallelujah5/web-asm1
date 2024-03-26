 <?php session_start(); ?>
 <nav id="nav-for-desktop">
        <!-- Main navigation bar -->
        <div class="col12 s-col12 col" id="div-nav-main">
          <div id="main-nav" class="col9 s-col9 col">
            <a href="index.php"
              ><img src="images/logo.png" alt="job-hunting-icon"
            /></a>
            <ul>
              <li>
                <a href="index.php"><span>Home</span></a>
              </li>
              <li>
                <a href="jobs.php"><span>Potential jobs</span></a>
              </li>
              <li>
                <a href="about.php"><span>Companies</span></a>
              </li>

              <?php 
                if (!isset($_SESSION['role'])) {
              ?>
              <li>
                <a href="login.php"><span>Login</span></a>
              </li>
              <?php 
                } else {
              ?>
              <li>
                <a href="logout.php"><span>Logout</span></a>
              </li>
              <?php
                }
              ?>
            </ul>
          </div>
          <!-- Sub navigation bar  -->
          <div id="sub-nav" class="col2 s-col2 col">
            <ul>
              <li>
                <a href="enhancements.php">Enhance</a>
              </li>
              <li>
                <a href="apply.php" target="_blank">Apply your cv</a>
              </li>
              <li><a href="about.php">About us</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Nav for smaller screen size -->
      <nav id="nav-for-tablet">
        <a href="index.php"><img src="images/logo.png" alt="logo" /></a>
        <div class="dropdown">
          <div>Menu</div>
          <div class="dropdown-content">
            <a href="index.php">Home</a> <br />
            <a href="jobs.php">Potential Jobs</a><br />
            <a href="about.php">Companies</a><br />
            <a href="enhancements.php">Enhance</a><br />
            <a href="login.php">Login</a><br />
          </div>
        </div>
      </nav>