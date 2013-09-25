<?php include 'header-dashboard.php'; ?>

<section id="content">
    <div class="container">

      <div id="con-body" class="row">
        <div class="col-lg-5">
            <div class="panel panel-default lgin-panel">
              <div class="panel-heading">
                <h3 class="panel-title"><strong>Dashboard Log in</strong></h3>

              </div>
              <div class="panel-body">
                <div class="alert alert-danger alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Oops!</strong> Invalid Username or Password
                </div>
                <form class="form-signin">                  
                  <p><strong>Username</strong></p>
                  <input type="text" class="form-control brdrrad-0" autofocus>
                  <div class="cl-20"></div>
                  <p style="float: left"><strong>Password</strong></p><span class="frgot-lnk"><a href="#">Forgot password?</a></span>                  
                  <input type="password" class="form-control brdrrad-0">              
                  <div class="cl-20"></div><form action="">
                  <button type="submit" class="btn btn-lg btn-primary btn-block"><strong>Log in</strong></button></form>              
                </form>
                <div class="brdr-h"></div>
                <p align="center">Don't have an account yet?</p>
                <form action="">
                  <button type="submit" class="btn btn-lg btn-primary btn-block"><strong>CREATE AN ACCOUNT</strong></button></form>  
              </div>
            </div>
            <p class="txt-default">View our <a href="">Privacy Policy</a></p>    
        </div>

          <div class="col-lg-7 ft-game">
          <img src="img/game-thmbs/warframe-cvr1.png">
          <p><strong>Warframe</strong> Countries: 235 <em>Active</em></p>
          <p style="font-size: 13px !important; font-family: Arial, Helvetica, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>            
          </div>
        </div>
      </div>
 </section>       
<!-- /content -->

<?php include 'footer.php' ?>