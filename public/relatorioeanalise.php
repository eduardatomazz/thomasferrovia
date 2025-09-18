<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Relatório e Análise</title>
  <link rel="stylesheet" href="../styles/style.css" />
  
  <!-- Google Charts loader (apenas uma vez) -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
  <script type="text/javascript">
    // Carrega os gráficos de barras e pizza
    google.charts.load("current", { packages: ["corechart"] });
    google.charts.setOnLoadCallback(drawCharts);

    function drawCharts() {
      drawBarChart();
      drawPieChart();
    }

    function drawBarChart() {
      var data = google.visualization.arrayToDataTable([
        ["Linha", "Consumo", { role: "style" }],
        ["Linha A", 1600, "color: #ffe666"],
        ["Linha B", 1300, "color: #801010"],
        ["Linha C", 1900, "color: #e67e22"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([
        0,
        1,
        {
          calc: "stringify",
          sourceColumn: 1,
          type: "string",
          role: "annotation"
        },
        2
      ]);

      var options = {
        title: "Consumo de Energia:",
        titleTextStyle: {
          color: 'white',
          fontSize: 16
        },
        width: 400,
        height: 300,
        backgroundColor: '#032552',
        bar: { groupWidth: "70%" },
        legend: { position: "none" },
        hAxis: {
          textStyle: { color: 'white' }
        },
        vAxis: {
          textStyle: { color: 'white' },
          gridlines: { color: '#ffffff33' },
          minValue: 0
        }
      };

      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
    }

    function drawPieChart() {
      var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Trens Atrasados', 15],
        ['Trens Pontuais', 85]
      ]);
      

      var options = {
        title: 'Eficiência Operacional',
        titleTextStyle: {
          color: 'white',
          fontSize: 16
        },
        backgroundColor: '#032552',
        legend: {
          textStyle: {
            color: 'white'
          }
        },
        width: 400,
        height: 300
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);
    }
  </script>
</head>

<body id="semfundorelatorioeanalise">
  <header>
  <div id="navbar">
    <img id="icon" src="../img/logo_cabecalho.png" alt="" />
  </div>
  <div id="menuLateral" class="menu-lateral">
      <button class="fechar-btn" onclick="fecharMenu()">X</button>
      <ul>
        <li><a href="../public/inicioadm.html">INÍCIO</a></li>
        <li><a href="../public/dashboard.html">DASHBOARD</a></li>
        <li><a href="../public/rotas.html">ROTAS</a></li>
        <li><a href="../public/monitoramento.html">MONITORAMENTO</a></li>
        <li><a href="../public/relatorioeanalise.html">RELATÓRIO E ANÁLISE</a></li>
        <li><a href="../public/alertaenotificacoes.html">ALERTAS E NOTIFICAÇÕES</a></li>
        <li><a href="../index.html">SAIR</a></li>
      </ul>
    </div>
    
    <button id="abrirMenu" class="abrir-btn" onclick="abrirMenu()">☰</button>
  </header>

  <div class="parteLaranja">
    <h5>RELATÓRIO E ANÁLISE</h5>
  </div>
  <div class="graficoBarra" >
    <div id="columnchart_values" >
    </div>
    <div id="piechart">
    </div>
  </div>
      <script src="../scripts/script.php"></script>

</body>
</html>