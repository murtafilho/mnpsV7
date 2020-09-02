<li class="{{ Request::is('mnps*') ? 'active' : '' }}">
    <a href="{!! route('mnps') !!}"><i class="fa fa-edit"></i><span>Relatório MNPS</span></a>
</li>


<li class="{{ Request::is('previsaos*') ? 'active' : '' }}">
    <a href="{!! route('previsaos.index') !!}"><i class="fa fa-edit"></i><span>Previsão Ruído de Fundo</span></a>
</li>


