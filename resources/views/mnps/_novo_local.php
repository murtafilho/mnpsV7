<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <form>
                    <fieldset>


                        <!-- Form Name -->
                        <legend>Relatório de Vistoria</legend>

                        <!-- Input With Search http://getfuelux.com/javascript.html#search-->
                        <div class="form-group">
                            <label class="control-label" for="localFiscalizadoInput">Local Fiscalizado</label>

                            <div class="search input-group" data-initialize="search" role="search"
                                 id="localFiscalizado">

      <span class="input-group-btn">
        <button class="btn btn-default" type="button">
          <span class="glyphicon glyphicon-search"></span>
          <span class="sr-only">Search</span>
        </button>
      </span>
                                <input id="localFiscalizadoInput" name="localFiscalizadoInput" class="form-control"
                                       placeholder=""
                                       required="" type="search">
                            </div>


                        </div>

                        <!-- Text input http://getbootstrap.com/css/#forms -->
                        <div class="form-group">
                            <label for="cpf_cnpj" class="control-label">CPF/CNPF</label>

                            <input class="form-control" id="cpf_cnpj" placeholder="CPF/CNPJ" required="" type="text">


                        </div>
                        <!-- Button http://getbootstrap.com/css/#buttons -->
                        <div class="form-group">
                            <label class="control-label" for="enviar"></label>
                            <div class="text-left">
                                <button type="submit" id="enviar" name="enviar" class="btn btn-primary btn-lg"
                                        aria-label="">
                                    Enviar
                                </button>

                            </div>
                        </div>


                    </fieldset>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>