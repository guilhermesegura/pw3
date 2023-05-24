<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reclamacao.css">
    <title>Reclamacao</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="/">Principal</a></li>
            <li><a href="/quemsomos">Quem Somos</a></li>
            <li><a href="/reclamacao">Reclamação</a></li>
            <li><a href="/contato">Contatos</a></li>
            <li><a href="/laboratorio">Laboratórios</a></li>
        </ul>
    </nav>
    <div id='pai'>
        <form action="/reclamacao" method="post">
            {{csrf_field()}}
            <select name="selReclamacao">
                @foreach( App\Http\Controllers\LaboratorioController::allLab() as $r)
                <option value="{{$r->idLab}}"> {{$r->Lab}} </option>
                @endforeach
            </select>
            <input type="text" name="txPc" placeholder="Computador" />
            <input type="text" name="txTitulo" placeholder="Título" />
            <input type="text" name="txDescricao" placeholder="Descrição" />
            <input type="date" name="txDtcriacao" placeholder="Data de cricação" />
            <input type="submit" value="Salvar" id="salvar" />
        </form>
    </div>
    <h1>{{App\Http\Controllers\ReclamacaoController::totalDeRec()}}</h1>

    @foreach($reclamacao as $r)
    <p>
        {{$r->idRec}}
        {{$r->idLab}}
        {{$r->pc}}
        {{$r->titulo}}
        {{$r->descricao}}
        {{date('d/m/Y',strtotime($r->dtCriacao))}}
        <a href="/reclamacao/excluir/{{$r->idRec}}" id="excluir"> Excluir </a>
    </p>
    @endforeach

    <footer>
        <div>
            <p>Todos os direitos reservados</p>
        </div>
    </footer>
</body>

</html>