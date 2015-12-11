<div class="login-box">
  <div class="login-logo">
    
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Iniciar Session</p>
    {{ form('class': 'form-search') }}
      <div class="form-group label-floating">
        {{ form.render('email') }}
      </div>
      <div class="form-group label-floating">
        {{ form.render('password') }}
      </div>
      <hr>
      <div class="row">
        
        <div class="col-md-4">
          {{ form.render('Entrar') }}
        </div>

        </div>
        <div class="row">
          <div class="col-md-4">
         <!--  {{ form.render('remember') }}
          {{ form.label('remember') }} -->
        </div>
        <div class="col-md-4">
          <!-- {{ link_to("session/forgotPassword", "Olvidó contraseña") }} -->
          <br>
          <!-- {{ link_to("session/signup", "Registrarse") }} -->
        </div>
        {{ form.render('csrf', ['value': security.getToken()]) }}

      </div>
    </form>

    

    

  </div>
</div>