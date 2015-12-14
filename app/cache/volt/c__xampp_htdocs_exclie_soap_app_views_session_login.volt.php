 <div class="form-box">
  
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
          <div class="col-md-4">
         <!--  <?php echo $form->render('remember'); ?>
          <?php echo $form->label('remember'); ?> -->
        </div>
        <div class="col-md-4">
          <!-- <?php echo $this->tag->linkTo(array('session/forgotPassword', 'Olvidó contraseña')); ?> -->
          <br>
          <!-- <?php echo $this->tag->linkTo(array('session/signup', 'Registrarse')); ?> -->
       </div>
        <?php echo $form->render('csrf', array('value' => $this->security->getToken())); ?>

      </div>
    </form>
  </div>
</div>
