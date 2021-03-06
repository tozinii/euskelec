<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inicia Sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-login" method="POST" action="{{ route('login') }}">
          @csrf
          <label>Correo electrónico: </label>
          <input id="login-email" type="text" name="email" placeholder="Correo electrónico" required /><br/>
          <span id="login-email-error-text" class="form-error">Introduce un correo válido</span>
          <label>Contraseña: </label>
          <input id="login-password" type="password" name="password" placeholder="Contraseña" required />
          @if(Session::has('loginError'))
            <span class="form-error-displayed">{{ Session::get('loginError') }}</span>
          @endif
          <span id="login-password-error-text" class="form-error">La contraseña debe tener 8 carácteres o más</span>
          <button id="login-submit" type="submit" class="btn btn-primary">Inicia Sesión</button>
          <a href="{{ route('password.request') }}" class="resetPasswordLink">Has olvidado la contraseña?</a>
        </form>


      </div>
    </div>
  </div>
</div>
