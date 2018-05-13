<div id="sendvdj" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
                            <div class="col-sm-12 Modal-Text">
                            <h4>Petición para videojuego</h4>
                            </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                           <form>
                               <div class="form-group">
                                {{ Form::text('username', null, array('placeholder'=>'Nombre del videojuego','class' => 'form-control input-sm','required')) }}
                               </div>
                                <div class="form-group send-data">
                                   {{ Form::textarea('username', null, array('placeholder'=>'Por favor rellene la mayor cantidad de datos posibles.

                                    Plataforma: 
                                    Productor(es):
                                    Desarrollador:
                                    Género(s):
                                    Distribuidora(s):
                                    Modo de Juego:','class' => 'form-control input-sm','required')) }}
             
                                </div>
                                <div class="form-group">
                                  {{ Form::text('username', null, array('placeholder'=>'Link de Trailer / Información adicional','class' => 'form-control input-sm','required')) }}
                               </div> 

                               {{Form::button('Enviar', array('type' => 'submit', 'class' => 'btn btn-default btn-xs btn-login'))}}
                            </form>
                      </center>
                    </div>                  
                </div>
                </div>
            </div>
