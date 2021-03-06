<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$tarifa->id}}">
    {{Form::Open(array('action'=>array('TarifaController@destroy',$tarifa->id),'method'=>'delete'))}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Eliminar Tarifa</h4>
            </div>
            <div class="modal-body">
                <p>Confirme si desea Eliminar la Tarifa</p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Confirmar <span class="glyphicon glyphicon-ok-sign"></span></button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar <span class="glyphicon glyphicon-remove-sign"></span></button>

            </div>
        </div>
    </div>
    {{Form::Close()}}
</div>