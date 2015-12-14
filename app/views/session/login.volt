 <div class="form-box">
  
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
