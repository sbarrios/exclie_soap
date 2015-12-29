<!--   <div class="form-box">
  
  <div class="form-group">
    {{ form('class': 'form-horizontal') }}
    <div class="form-group label-floating">
      <div class="col-md-12">
        {{ form.render('email') }}
      </div>
    </div>
      
      <div class="form-group label-floating">
        {{ form.render('password') }}
      </div>
      <hr>
      <div class="row">
        
        <div class="col-md-8">
          {{ form.render('Entrar') }}
        </div>

        </div>
        <div class="row">
          <div class="col-md-4">-->
         <!--  {{ form.render('remember') }}
          {{ form.label('remember') }} -->
        <!-- </div>
        <div class="col-md-4"> -->
          <!-- {{ link_to("session/forgotPassword", "Olvidó contraseña") }} -->
          <br>
          <!-- {{ link_to("session/signup", "Registrarse") }} -->
      <!-- </div>
        {{ form.render('csrf', ['value': security.getToken()]) }}

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
            {{ form('class': 'form-horizontal') }}
                <span id="reauth-email" class="reauth-email"></span>
               {{ form.render('email', ['class': 'form-control']) }}
                {{ form.render('password', ['class': 'form-control']) }}
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                {{ form.render('csrf', ['value': security.getToken()]) }}
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->