<table class="table table-responsive" id="artigos-table">
    <thead>
        <th>Descricao</th>
        <th>Lei</th>
        <th>Decreto</th>
        <th>Classificacao</th>
        <th>Multa</th>
        <th>Detalhamento</th>
        <th>Diurno</th>
        <th>Vespertino</th>
        <th>Noturno1</th>
        <th>Noturno2</th>
        <th>Sex Sab Fer</th>
        <th>Sistemas</th>
        <th>Passeios</th>
        <th>Automotor</th>
        <th>Frequentadores</th>
        <th>Dentro Dos Limites</th>
        <th>Escolas</th>
        <th>Tonais</th>
        <th>Faixa</th>
        <th>Construcao</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($artigos as $artigo)
        <tr>
            <td>{!! $artigo->descricao !!}</td>
            <td>{!! $artigo->lei !!}</td>
            <td>{!! $artigo->decreto !!}</td>
            <td>{!! $artigo->classificacao !!}</td>
            <td>{!! $artigo->multa !!}</td>
            <td>{!! $artigo->detalhamento !!}</td>
            <td>{!! $artigo->diurno !!}</td>
            <td>{!! $artigo->vespertino !!}</td>
            <td>{!! $artigo->noturno1 !!}</td>
            <td>{!! $artigo->noturno2 !!}</td>
            <td>{!! $artigo->sex_sab_fer !!}</td>
            <td>{!! $artigo->sistemas !!}</td>
            <td>{!! $artigo->passeios !!}</td>
            <td>{!! $artigo->automotor !!}</td>
            <td>{!! $artigo->frequentadores !!}</td>
            <td>{!! $artigo->dentro_dos_limites !!}</td>
            <td>{!! $artigo->escolas !!}</td>
            <td>{!! $artigo->tonais !!}</td>
            <td>{!! $artigo->faixa !!}</td>
            <td>{!! $artigo->construcao !!}</td>
            <td>
                {!! Form::open(['route' => ['artigos.destroy', $artigo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('artigos.show', [$artigo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>


                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>