<table class="table table-responsive" id="dadoPessoals-table">
    <thead>
        <th>Nome</th>
        <th>CPF</th>
        <th>Endereço</th>
        <th>Número</th>
        <th>Bairro</th>
        <th>Complemento</th>
        <th>CEP</th>
        <th>Estado</th>
        <th>Município</th>
        <th>Celular</th>
        <th>Telfixo</th>
        <th>E-mail</th>
        
    </thead>
    <tbody>
    @foreach($dadoPessoals as $dadoPessoal)
        <tr>
            <td>{!! $dadoPessoal->nome !!}</td>
            <td>{!! $dadoPessoal->cpf !!}</td>
            <td>{!! $dadoPessoal->endereco !!}</td>
            <td>{!! $dadoPessoal->numero !!}</td>
            <td>{!! $dadoPessoal->bairro !!}</td>
            <td>{!! $dadoPessoal->complemento !!}</td>
            <td>{!! $dadoPessoal->cep !!}</td>
            <td>{!! $dadoPessoal->estado !!}</td>
            <td>{!! $dadoPessoal->municipio !!}</td>
            <td>{!! $dadoPessoal->celular !!}</td>
            <td>{!! $dadoPessoal->telfixo !!}</td>
            <td>{!! $dadoPessoal->email !!}</td>
            <td>
                {!! Form::open(['route' => ['dadoPessoals.destroy', $dadoPessoal->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('dadoPessoals.show', [$dadoPessoal->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('dadoPessoals.edit', [$dadoPessoal->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Deseja excluir?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>