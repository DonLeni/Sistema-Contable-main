@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Villas Las Acacias</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title">Bienvenido al Sistema Contable</h3>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-info mb-3" type="button" data-toggle="collapse" data-target="#infoContent" aria-expanded="false" aria-controls="infoContent">
                            Información
                        </button>
                        <div id="infoContent" class="collapse">
                            <h1 class="display-4">¡Bienvenido!</h1>
                            <p class="lead">Somos el equipo fundador de Digital Solution, estudiantes de la Universidad Autónoma Nacional de Honduras (UNAH), dedicados a proporcionar soluciones digitales personalizadas para satisfacer las necesidades de nuestros clientes. Nos especializamos en el diseño y desarrollo de sistemas de facturación, gestión de inventario, aplicaciones web y más, utilizando las últimas tecnologías para ofrecer resultados de calidad.</p>
                            <p class="lead">En este ambiente web, puedes gestionar todas tus cuentas contables de manera eficiente y segura. Nuestro sistema permite registrar y seguir todas las transacciones financieras, asegurando que tu contabilidad esté siempre al día.</p>
                            <p class="lead">Además, proporcionamos herramientas avanzadas para la generación de informes financieros, análisis de datos y auditoría. Con nuestros gráficos interactivos y detallados, puedes visualizar el estado financiero de tu empresa y tomar decisiones informadas para su crecimiento y desarrollo.</p>
                           
                            
                            <div class="mt-4">
                                <h3>Gráficos de Estados Financieros</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <canvas id="balanceChart"></canvas>
                                    </div>
                                    <div class="col-md-6">
                                        <canvas id="incomeChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Añadir iconos o secciones adicionales según sea necesario -->
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .card-title {
            margin: 0;
        }
        .container-fluid {
            margin-top: 20px;
        }
        .display-4 {
            font-size: 2.5rem;
            font-weight: 300;
        }
        .lead {
            font-size: 1.25rem;
            font-weight: 300;
        }
        .icono-custom {
            font-size: 80px;
            color: white;
            transition: color 0.3s;
        }
        .icono-custom:hover {
            color: #28a745; /* Color success */
        }
    </style>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script> 
        console.log("Hi, I'm using the Laravel-AdminLTE package!"); 

        // Gráfico de Balance General
        var balanceCtx = document.getElementById('balanceChart').getContext('2d');
        var balanceChart = new Chart(balanceCtx, {
            type: 'bar',
            data: {
                labels: ['Activos', 'Pasivos', 'Patrimonio'],
                datasets: [{
                    label: 'Balance General (en miles)',
                    data: [500, 200, 300],
                    backgroundColor: ['#007bff', '#dc3545', '#ffc107'],
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Gráfico de Estado de Resultados
        var incomeCtx = document.getElementById('incomeChart').getContext('2d');
        var incomeChart = new Chart(incomeCtx, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
                datasets: [{
                    label: 'Ingresos (en miles)',
                    data: [50, 60, 70, 80, 90, 100],
                    borderColor: '#28a745',
                    backgroundColor: 'rgba(40, 167, 69, 0.2)',
                    fill: true
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@stop
