<div class="modal modal-blur fade" id="modal-destroy-medico" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="modal-title">Você tem certeza?</div>
          <div>Se proceder, você irá perder os dados do médico.</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger" onclick="document.getElementById('form_{{$medico->id}}').submit()">Sim, excluir médico</button>
        </div>
      </div>
    </div>
</div>
