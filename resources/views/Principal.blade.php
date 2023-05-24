<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página Laravel</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<div class="container">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Reclamações', 'por Laboratório'],
                ['Lab 1', 11],
                ['Lab 2', 2],
                ['Lab 3', 2],
                ['Lab 4', 2],
                ['Lab 5', 7]
            ]);

            var options = {
                title: 'Reclamações'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
    
</div>

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

    <div id="piechart"></div>

    <footer>
        <div>
            <p>Todos os direitos reservados</p>
        </div>
    </footer>

</body>

</html>