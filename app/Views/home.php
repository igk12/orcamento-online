<!DOCTYPE html>
<html>
<head>
    <title>Página Inicial - Sistema de Orçamento</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> 
</head>
<body>

    <div class="container mt-5">
        <h1>Relatórios</h1>

        <div class="row">
            <div class="col-md-6">
                <h2>Últimos Orçamentos</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Data</th>
                            <th>Valor Total</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ultimos_orcamentos as $orcamento): ?>
                            <tr>
                                <td><?php echo $orcamento['cliente_nome']; ?></td> <td><?php echo $orcamento['data_criacao']; ?></td>
                                <td><?php echo $orcamento['valor_total']; ?></td>
                                <td><?php echo $orcamento['status']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="col-md-6">
                <h2>Orçamentos por Status</h2>
                <div id="chartContainer" style="height: 300px; width: 100%;"></div> 
                </div>
        </div>

        </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <script>
        // Utilize JavaScript (ou Vue.js) para criar o gráfico com os dados de $orcamentos_por_status
    </script>
</body>
</html>