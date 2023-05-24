<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
    <link rel="stylesheet" href="css/reclamacao.css">
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

    <form action="/contato" method="post">        
        {{csrf_field()}}        
        <input type="text" name="txNome" placeholder="Nome"/>
        <input type="text" name="txEmail" placeholder="E-mail" />
        <input type="text" name="txAssunto" placeholder="Assunto" />
        <input type="text" name="txMensagem" placeholder="Mensagem" />
        <input type="submit" value="Salvar" />
    </form>

    @foreach($contatos as $c)        
        <p>
        {{$c->idContato}}
        {{$c->nome}}
        {{$c->email}}
        {{$c->assunto}}
        {{$c->mensagem}}
        <a href="/contato/excluir/{{$c->idContato}}"> Excluir </a>
        </p>
    @endforeach
    <footer>
        <div>
            <p>Todos os direitos reservados</p>
        </div>
      </footer>
</body>
</html>