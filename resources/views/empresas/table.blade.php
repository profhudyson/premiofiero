<table class="table table-responsive" id="empresas-table">
    <thead>
        <th>Nome</th>
        <th>Endereco</th>
        <th>Numero</th>
        <th>Bairro</th>
        <th>Complemento</th>
        <th>Cep</th>
        <th>Estado</th>
        <th>Municipio</th>
        <th>Celular</th>
        <th>Telfixo</th>
        <th>Email</th>
        <th>Registroprof</th>
        <th>Titulotrab</th>
        <th>Modalidade</th>
        <th>Editor</th>
        <th>Data</th>
        <th>Ip</th>
        <th>Host</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($empresas as $empresa)
        <tr>
            <td>{!! $empresa->nome !!}</td>
            <td>{!! $empresa->endereco !!}</td>
            <td>{!! $empresa->numero !!}</td>
            <td>{!! $empresa->bairro !!}</td>
            <td>{!! $empresa->complemento !!}</td>
            <td>{!! $empresa->cep !!}</td>
            <td>{!! $empresa->estado !!}</td>
            <td>{!! $empresa->municipio !!}</td>
            <td>{!! $empresa->celular !!}</td>
            <td>{!! $empresa->telfixo !!}</td>
            <td>{!! $empresa->email !!}</td>
            <td>{!! $empresa->registroprof !!}</td>
            <td>{!! $empresa->titulotrab !!}</td>
            <td>{!! $empresa->modalidade !!}</td>
            <td>{!! $empresa->editor !!}</td>
            <td>{!! $empresa->data !!}</td>
            <td>{!! $empresa->ip !!}</td>
            <td>{!! $empresa->host !!}</td>
            <td>
                {!! Form::open(['route' => ['empresas.destroy', $empresa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('empresas.show', [$empresa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('empresas.edit', [$empresa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>