<div class="content">
        @include('adminlte-templates::common.errors')
                                       
                    <div class="row">
                    {!! Form::open(['route' => 'dadoPessoals.store']) !!}
                        <div class="col-md-8">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Nome:</label>
                                {!! Form::text('nome', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">CPF:</label>
                                {!! Form::text('cpf', null, array('class' => 'form-control', 'placeholder'=>'Somente números')) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Endereço:</label>
                                {!! Form::text('endereco', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Número:</label>
                                {!! Form::text('numero', null, array('class' => 'form-control', 'placeholder'=>'Somente números')) !!}                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Bairro:</label>
                                {!! Form::text('bairro', null, ['class' => 'form-control']) !!}                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Complemento:</label>
                                {!! Form::text('complemento', null, ['class' => 'form-control']) !!}                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">CEP:</label>
                                {!! Form::text('cep', null, ['class' => 'form-control']) !!}                                
                            </div>
                        </div>                        
                    </div>
                    
                    <div class="row">
                         <div class="col-md-2">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Estado:</label>
                                <select name="estado" id="Estado" class="select2 form-control" onchange="buscarMunicipio(this.value)" required>
                                    <option value=""></option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">                                
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Município:</label>
                                <select name="municipio" class="select2 form-control" id="Municipio" required>                                   
                            </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Telefone Celular:</label>
                                {!! Form::text('celular', null, ['class' => 'form-control']) !!}                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Telefone Fixo:</label>
                                {!! Form::text('telfixo', null, ['class' => 'form-control']) !!}                                
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Email:</label>
                                {!! Form::text('email', null, ['class' => 'form-control']) !!}                                
                            </div>
                        </div>
                    </div>
                    <label  style=" font-family:  'Trebuchet MS'; font-weight: bold; color: rgb(29, 87, 167);">Dados da Empresa:</label><br><br>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Empresa:</label>
                                <input type="text" name="tEmpresa" id="tEmpresa" class="form-control" autocomplete="off" required>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Endereço:</label>
                                <input type="text" name="tEmpEndereco" id="tEmpEndereco" class="form-control" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Numero:</label>
                                <input type="text" name="tEmpNumero" id="tEmpNumero" class="form-control" autocomplete="off" maxlength="5" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Bairro:</label>
                                <input type="text" name="tEmpBairro" id="tEmpBairro" class="form-control" autocomplete="off" required>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Complemento:</label>
                                <input type="text" name="tEmpComplemento" id="tEmpComplemento" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">CEP:</label>
                                <input type="text" name="tEmpCep" class="form-control" id="tEmpCep" placeholder="Somente Numero" onkeypress="formatar(this,'00.000-000')" id="dta" maxlength="10" required>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="row">
                         <div class="col-md-2">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Estado:</label>
                                <select name="tEmpEstado" class="select2 form-control" id="tEmpEstado" onchange="buscarMunicipio2(this.value)" required>
                                    <option value=""></option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>

                            </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Município:</label>
                                <select name="tEmpCidade" class="select2 form-control" id="resultadoMunicipio2" required>
                                   
                            </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Telefone Celular:</label>
                                <input type="text" name="tEmpTelefone" id="tEmpTelefone" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Telefone Fixo:</label>
                                <input type="text" name="tEmpTelefoneFixo" id="tEmpTelefoneFixo" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Email:</label>
                                <input type="email" name="tEmpEmail" id="tEmpEmail" class="form-control" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Registro do Profissional:</label>
                                <input type="text" name="tRegistroProf" id="tRegistroProf" class="form-control" autocomplete="off" required>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Titulo do Trabalho:</label>
                                <input type="text" name="tTituloTrab" id="tTituloTrab" class="form-control" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Modalidade para inscrição no Prêmio:</label>
                                <select name="tModalidade" id="tModalidade" class="select2 form-control" onchange="redirecionar(this)" required>
                                    <option value=""></option>
                                    <option value="Jornalismo Impresso">Jornalismo Impresso</option>
                                    <option value="Radiojornalismo">Radiojornalismo</option>
                                    <option value="Telejornalismo">Telejornalismo</option>
                                    <option value="Webjornalismo">Webjornalismo</option>
                                    

                            </select>
                            </div>
                        </div>
                         <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Nome do Editor:</label>
                                <input type="text" name="tNomeEditor" id="tNomeEditor" class="form-control" autocomplete="off" required>
                            </div>
                        
                        <br>

{!! Form::close() !!}                    
                    </div>
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('empresas.index') !!}" class="btn btn-default">Cancelar</a>
</div>                    
      <!--              <div class="col-md-10">
                        <div id="successInscricao"></div><br>
                        <button type="submit" class="btn btn-lg btn-primary" id="btnEnviarForm" style="font-family:  'Trebuchet MS'; font-weight: normal; background: rgb(29, 87, 167)" name="btn-Aderir">Cadastrar</button>-->

                    





