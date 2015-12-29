<!--   <div class="form-box">
  
  <div class="form-group">
    <?php echo $this->tag->form(array('class' => 'form-horizontal')); ?>
    <div class="form-group label-floating">
      <div class="col-md-12">
        <?php echo $form->render('email'); ?>
      </div>
    </div>
      
      <div class="form-group label-floating">
        <?php echo $form->render('password'); ?>
      </div>
      <hr>
      <div class="row">
        
        <div class="col-md-8">
          <?php echo $form->render('Entrar'); ?>
        </div>

        </div>
        <div class="row">
          <div class="col-md-4">-->
         <!--  <?php echo $form->render('remember'); ?>
          <?php echo $form->label('remember'); ?> -->
        <!-- </div>
        <div class="col-md-4"> -->
          <!-- <?php echo $this->tag->linkTo(array('session/forgotPassword', 'Olvidó contraseña')); ?> -->
          <br>
          <!-- <?php echo $this->tag->linkTo(array('session/signup', 'Registrarse')); ?> -->
      <!-- </div>
        <?php echo $form->render('csrf', array('value' => $this->security->getToken())); ?>

      </div>
    </form>
  </div>
</div> 
 -->
  

<div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <!-- <form class="form-signin"> -->
            <?php echo $this->tag->form(array('class' => 'form-horizontal')); ?>
                <span id="reauth-email" class="reauth-email"></span>
               <?php echo $form->render('email', array('class' => 'form-control')); ?>
                <?php echo $form->render('password', array('class' => 'form-control')); ?>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                <?php echo $form->render('csrf', array('value' => $this->security->getToken())); ?>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->