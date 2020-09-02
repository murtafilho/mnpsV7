<div class="panel panel-default">
    <div class="panel-body">
        <div class="form-group">
            <label for="decibelimetro">Decibelímetro*</label>
            <select class="form-control" name="decibelimetro" id="decibelimetro" placeholder="Selecionar">
                @foreach ($decibelimetros as $decibelimetro)
                <option value = "{{$decibelimetro->id}}">
                    {{
                        $decibelimetro->descricao
                    }}
                </option>                      
                @endforeach
			</select>
        </div>
    </div>
</div>