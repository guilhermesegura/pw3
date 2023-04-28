<!DOCTYPE html>
 <html lang="en">
 <head>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>

    <form action="/laboratorio" method="post">        
            {{csrf_field()}}        
            <input type="text" name="txLab" placeholder="Laboratorio" />
            <input type="submit" value="Salvar" />
        </form>




        @foreach($laboratorios as $l)        
        <p>
        {{$l->idLab}}
        {{$l->Lab}}
            <a href="/laboratorio/excluir/{{$l->idLab}}"> Excluir </a>
            </p>
        @endforeach

        
 </body>
 </html>