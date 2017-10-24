<!-- Modal -->
<form class="" action="" method="post" @submit.prevent="createKeep">
  <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nueva</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="keep" class="form-label">Crear Tarea</label>
            <input type="text" name="keep" placeholder="Escriba la tarea..." v-model="newKeep" class="form-control">
            <span v-for="error in errors.errors" class="text-danger">
              <span v-for="ciclo in error" v-text="ciclo"></span>
            </span>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- Modal -->
<form class="" action="" method="post" @submit.prevent="updateKeep(fillKeep.id)">
  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="keep" class="form-label">Actualizar Tarea</label>
            <input type="text" name="keep" placeholder="Escriba la tarea..." v-model="fillKeep.keep" class="form-control">
            <span v-for="error in errors" class="text-danger" v-text="error"></span>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</form>
