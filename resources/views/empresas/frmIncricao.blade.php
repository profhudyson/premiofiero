<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Prêmio FIERO de Jornalismo</title>        
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                           
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    
    @yield('css')
</head>

<body class="skin-blue">
            <div class="nav navbar-header">
                    <ul class="nav nav-tabs">
                        <li class="{{ Request::is('dadoPessoals*') ? 'active' : '' }}">
                            <a href="{!! route('dadoPessoals.create') !!}"><i class="fa fa-edit"></i><span>Inscrição</span></a>
                        </li>
                        <li class="{{ Request::is('empresas*') ? 'active' : '' }}">
                            <a href="{!! route('empresas.create') !!}"><i class="fa fa-edit"></i><span>Empresas</span></a>
                        </li>
                    </ul>                 
            </div>        
</body>
</html>