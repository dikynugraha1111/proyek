  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
      <div class="container d-flex align-items-center">

          <div class="logo mr-auto">
              <h1 class="text-light"><a href="index.html"><span>Bootslander</span></a></h1>
              <!-- Uncomment below if you prefer to use an image logo -->
              <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>

          <nav class="nav-menu d-none d-lg-block">
              <ul>
                  <li class="active"><a href="/">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#features">Features</a></li>
                  <li><a href="#gallery">Gallery</a></li>
                  <li><a href="#team">Team</a></li>
                  <li><a href="#pricing">Pricing</a></li>
                  <li class="drop-down"><a href="">Drop Down</a>
                      <ul>
                          <li><a href="#">Drop Down 1</a></li>
                          <li class="drop-down"><a href="#">Drop Down 2</a>
                              <ul>
                                  <li><a href="#">Deep Drop Down 1</a></li>
                                  <li><a href="#">Deep Drop Down 2</a></li>
                                  <li><a href="#">Deep Drop Down 3</a></li>
                                  <li><a href="#">Deep Drop Down 4</a></li>
                                  <li><a href="#">Deep Drop Down 5</a></li>
                              </ul>
                          </li>
                          <li><a href="#">Drop Down 3</a></li>
                          <li><a href="#">Drop Down 4</a></li>
                          <li><a href="#">Drop Down 5</a></li>
                      </ul>
                  </li>
                  <li><a href="#contact">Contact</a></li>
                  <li class="btn btn-success" style="border-right-width: 23px; margin-left:13px"><a href="#" role="button" data-toggle="modal" data-target="#login-modal">Login</a></li>

              </ul>
          </nav><!-- .nav-menu -->

      </div>
  </header><!-- End Header -->
  <!-- BEGIN # MODAL LOGIN -->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header" align="center">
                  <img class="img-circle" id="img_logo" src="http://bootsnipp.com/img/logo.jpg">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                  </button>
              </div>

              <!-- Begin # DIV Form -->
              <div id="div-forms">

                  <!-- Begin # Login Form -->
                  <form id="login-form">
                      <div class="modal-body">
                          <div id="div-login-msg">
                              <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                              <span id="text-login-msg">Type your username and password.</span>
                          </div>
                          <input id="login_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                          <input id="login_password" class="form-control" type="password" placeholder="Password" required>
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox"> Remember me
                              </label>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <div>
                              <button type="submit" class="btn btn-primary ">Login</button>
                          </div>
                          <div>
                              <button id="login_lost_btn" type="button" class="btn btn-danger">Lost Password?</button>
                              <button id="login_register_btn" type="button" class="btn btn-success">Register</button>
                          </div>
                      </div>
                  </form>
                  <!-- End # Login Form -->

              </div>
              <!-- End # DIV Form -->

          </div>
      </div>
  </div>