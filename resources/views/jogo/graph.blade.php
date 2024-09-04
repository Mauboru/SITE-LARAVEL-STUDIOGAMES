@extends('index')

@section('conteudo')

    <div class="container py-4">
        <div class="row justify-content-center mb-4">
            <div class="col-md-12 text-center">
                <button class="btn btn-primary mx-2" onclick="showBarChart()">Gráfico de Barras</button>
                <button class="btn btn-primary mx-2" onclick="showPieChart()">Gráfico de Pizza</button>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div id="barra" style="width: 100%; height: 400px;"></div>
                <div id="pizza" style="width: 100%; height: 400px; display: none;"></div>
            </div>
        </div>
    </div>
    
    <!-- Google Chart / Importação - Arquivo Remoto -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    <script type="text/javascript">
        var data_graph = {!! $data !!};

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawBarChart);
        
        var chart;
        var dataTable;

        function drawBarChart() {
            dataTable = google.visualization.arrayToDataTable(data_graph);
            var options = {
                title: 'Nomes dos Jogos',
                colors: ['#198754'],
                legend: 'none',
                hAxis: {
                    title: 'Horas jogadas',
                    titleTextStyle: { fontSize: 12, bold: true },
                },
                vAxis: {
                    title: 'Nome do Jogo',
                    titleTextStyle: { fontSize: 12, bold: true },
                },
                width: '100%',
                height: 400
            };
            chart = new google.visualization.BarChart(document.getElementById('barra'));
            chart.draw(dataTable, options);
        }

        function drawPieChart() {
            var options = {
                title: 'Distribuição dos Jogos',
                colors: ['#198754', '#dc3545', '#007bff', '#ffc107'],
                legend: { position: 'bottom' },
                width: '100%',
                height: 400
            };
            chart = new google.visualization.PieChart(document.getElementById('pizza'));
            chart.draw(dataTable, options);
        }

        function showBarChart() {
            document.getElementById('barra').style.display = 'block';
            document.getElementById('pizza').style.display = 'none';
            drawBarChart();
        }

        function showPieChart() {
            document.getElementById('barra').style.display = 'none';
            document.getElementById('pizza').style.display = 'block';
            drawPieChart();
        }
    </script>

@endsection