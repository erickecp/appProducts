@if (session("msn"))

<div class="cajita">
<div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>{{session('msn')}}</strong>
</div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function() {
      var alertElement = document.getElementById('alert');

      setTimeout(function() {
        alertElement.style.display = 'none'; // Oculta la alerta después de 5 segundos
      }, 1500);
    });
  </script>


@endif
