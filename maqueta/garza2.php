<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Financiero - Empresa Papera</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --aloia-gradient: linear-gradient(90deg, #FD6144, #FD3244);
            --aloia-orange: #FD6144;
            --aloia-red: #FD3244;
            --aloia-purple: #AE3A8D;
            --aloia-light-bg: #f9fafb;
            --aloia-light-accent: #f3f4f6;
            --aloia-success: #10b981;
            --aloia-warning: #f59e0b;
        }
        
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: var(--aloia-light-bg);
            color: #374151;
        }
        
        .app-container {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }
        
        /* Sidebar */
        .sidebar {
            width: 280px;
            background: linear-gradient(135deg, #1f2937 0%, #111827 100%);
            color: white;
            padding: 1.5rem;
            box-shadow: 4px 0 10px rgba(0,0,0,0.1);
            position: relative;
        }
        
        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        
        .logo i {
            background: var(--aloia-gradient);
            padding: 0.5rem;
            border-radius: 8px;
            margin-right: 0.75rem;
            font-size: 1.2rem;
        }
        
        .logo h2 {
            font-size: 1.1rem;
            font-weight: 600;
        }
        
        .nav-menu {
            list-style: none;
        }
        
        .nav-item {
            margin-bottom: 0.5rem;
        }
        
        .nav-link {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            color: #d1d5db;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .nav-link:hover, .nav-link.active {
            background: var(--aloia-gradient);
            color: white;
            transform: translateX(4px);
        }
        
        .nav-link i {
            margin-right: 0.75rem;
            width: 20px;
            text-align: center;
        }
        
        .sidebar-footer {
            position: absolute;
            bottom: 2rem;
            left: 1.5rem;
            right: 1.5rem;
        }
        
        .period-info {
            background: rgba(255,255,255,0.1);
            padding: 1rem;
            border-radius: 8px;
            text-align: center;
        }
        
        .period-info small {
            opacity: 0.8;
            font-size: 0.75rem;
        }
        
        .period-info .cycle {
            font-weight: 600;
            font-size: 0.9rem;
            margin: 0.25rem 0;
        }
        
        /* Main Content */
        .main-content {
            flex: 1;
            padding: 2rem;
            overflow-y: auto;
        }
        
        .page-header {
            margin-bottom: 2rem;
        }
        
        .page-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 0.5rem;
        }
        
        .page-subtitle {
            color: #6b7280;
            font-size: 0.95rem;
        }
        
        /* Cards */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            border: 1px solid #e5e7eb;
            transition: all 0.3s ease;
        }
        
        .card:hover {
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transform: translateY(-2px);
        }
        
        .card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1rem;
        }
        
        .card-title {
            font-size: 0.875rem;
            font-weight: 600;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .card-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        
        .card-value {
            font-size: 2rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 0.5rem;
        }
        
        .card-change {
            font-size: 0.875rem;
            display: flex;
            align-items: center;
        }
        
        .positive { color: var(--aloia-success); }
        .negative { color: var(--aloia-red); }
        
        /* Tables */
        .table-container {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            border: 1px solid #e5e7eb;
        }
        
        .table-header {
            background: var(--aloia-light-accent);
            padding: 1rem 1.5rem;
            border-bottom: 1px solid #e5e7eb;
        }
        
        .table-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #1f2937;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 1rem 1.5rem;
            text-align: left;
            border-bottom: 1px solid #f3f4f6;
        }
        
        th {
            background: var(--aloia-light-accent);
            font-weight: 600;
            color: #374151;
            font-size: 0.875rem;
        }
        
        tr:hover {
            background: #f9fafb;
        }
        
        /* Buttons */
        .btn {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.875rem;
        }
        
        .btn-primary {
            background: var(--aloia-gradient);
            color: white;
            box-shadow: 0 2px 4px rgba(253, 50, 68, 0.2);
        }
        
        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(253, 50, 68, 0.3);
        }
        
        .btn-secondary {
            background: #f3f4f6;
            color: #374151;
        }
        
        .btn-secondary:hover {
            background: #e5e7eb;
        }
        
        /* Status badges */
        .status {
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .status-active { background: #d1fae5; color: #065f46; }
        .status-pending { background: #fef3c7; color: #92400e; }
        .status-complete { background: #dbeafe; color: #1e40af; }
        
        /* Charts */
        .chart-container {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            border: 1px solid #e5e7eb;
            margin-bottom: 2rem;
        }
        
        .chart-header {
            margin-bottom: 1rem;
        }
        
        .chart-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #1f2937;
        }
        
        /* Forms */
        .form-container {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            border: 1px solid #e5e7eb;
            margin-bottom: 2rem;
        }
        
        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .form-group {
            margin-bottom: 1rem;
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #374151;
        }
        
        .form-input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 0.875rem;
            transition: border-color 0.3s ease;
        }
        
        .form-input:focus {
            outline: none;
            border-color: var(--aloia-orange);
            box-shadow: 0 0 0 3px rgba(253, 97, 68, 0.1);
        }
        
        .form-select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            background: white;
            font-size: 0.875rem;
        }
        
        /* Module visibility */
        .module {
            display: block;
        }
        
        .module.hidden {
            display: none;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .app-container {
                flex-direction: column;
                height: auto;
            }
            
            .sidebar {
                width: 100%;
                padding: 1rem;
                position: relative;
            }
            
            .sidebar-footer {
                position: static;
                margin-top: 2rem;
            }
            
            .main-content {
                padding: 1rem;
            }
            
            .cards-grid {
                grid-template-columns: 1fr;
            }
            
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            .chart-container {
                padding: 1rem;
            }
        }
        
        /* Utility classes */
        .hidden { display: none !important; }
        .text-center { text-align: center; }
        .text-right { text-align: right; }
        .mb-2 { margin-bottom: 1rem; }
        .mt-2 { margin-top: 1rem; }
        .flex { display: flex; }
        .justify-between { justify-content: space-between; }
        .items-center { align-items: center; }
    </style>
</head>
<body>
    <div class="app-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                <i class="fas fa-seedling"></i>
                <div>
                    <h2>Sistema Papero</h2>
                    <small style="opacity: 0.8;">Base Financiera</small>
                </div>
            </div>
            
            <ul class="nav-menu">
                <li class="nav-item">
                    <a class="nav-link active" onclick="showModule('dashboard')">
                        <i class="fas fa-chart-pie"></i>
                        Dashboard General
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="showModule('gastos')">
                        <i class="fas fa-receipt"></i>
                        Control de Gastos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="showModule('ventas')">
                        <i class="fas fa-chart-line"></i>
                        Control de Ventas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="showModule('ranchos')">
                        <i class="fas fa-map-marked-alt"></i>
                        Gestión por Rancho
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="showModule('reportes')">
                        <i class="fas fa-file-alt"></i>
                        Reportes Financieros
                    </a>
                </li>
            </ul>
            
            <div class="sidebar-footer">
                <div class="period-info">
                    <small>Periodo Actual</small>
                    <div class="cycle">Ciclo 2024-2025</div>
                    <small>3 Ranchos Activos</small>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <!-- Dashboard Module -->
            <div id="dashboard-module" class="module">
                <div class="page-header">
                    <h1 class="page-title">Dashboard General</h1>
                    <p class="page-subtitle">Vista general de operaciones en los 3 ranchos activos</p>
                </div>
                
                <div class="cards-grid">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Hectáreas Totales</div>
                            <div class="card-icon" style="background: var(--aloia-gradient);">
                                <i class="fas fa-map"></i>
                            </div>
                        </div>
                        <div class="card-value">485 ha</div>
                        <div class="card-change positive">
                            <i class="fas fa-arrow-up"></i>
                            15% vs año anterior
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Producción Estimada</div>
                            <div class="card-icon" style="background: var(--aloia-success);">
                                <i class="fas fa-weight-hanging"></i>
                            </div>
                        </div>
                        <div class="card-value">20,420 ton</div>
                        <div class="card-change positive">
                            <i class="fas fa-arrow-up"></i>
                            42.1 ton/ha promedio
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Ingresos Proyectados</div>
                            <div class="card-icon" style="background: var(--aloia-warning);">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                        </div>
                        <div class="card-value">$122.5M</div>
                        <div class="card-change positive">
                            <i class="fas fa-arrow-up"></i>
                            8.2% vs presupuesto
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Gastos Acumulados</div>
                            <div class="card-icon" style="background: var(--aloia-red);">
                                <i class="fas fa-credit-card"></i>
                            </div>
                        </div>
                        <div class="card-value">$78.3M</div>
                        <div class="card-change negative">
                            <i class="fas fa-arrow-down"></i>
                            3.1% bajo presupuesto
                        </div>
                    </div>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 2rem;">
                    <div class="chart-container">
                        <div class="chart-header">
                            <h3 class="chart-title">Flujo de Efectivo por Rancho</h3>
                        </div>
                        <canvas id="cashFlowChart" height="300"></canvas>
                    </div>
                    
                    <div class="chart-container">
                        <div class="chart-header">
                            <h3 class="chart-title">Rentabilidad por Hectárea</h3>
                        </div>
                        <canvas id="profitabilityChart" height="300"></canvas>
                    </div>
                </div>
                
                <div class="table-container">
                    <div class="table-header">
                        <h3 class="table-title">Estado Actual por Rancho</h3>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Rancho</th>
                                <th>Hectáreas</th>
                                <th>Fase Actual</th>
                                <th>Producción Est.</th>
                                <th>Gastos Acum.</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Coahuila</strong></td>
                                <td>180 ha</td>
                                <td>Cosecha</td>
                                <td>7,560 ton</td>
                                <td>$28.4M</td>
                                <td><span class="status status-active">Activo</span></td>
                            </tr>
                            <tr>
                                <td><strong>Sonora</strong></td>
                                <td>165 ha</td>
                                <td>Cultivo</td>
                                <td>6,930 ton</td>
                                <td>$26.1M</td>
                                <td><span class="status status-pending">En Desarrollo</span></td>
                            </tr>
                            <tr>
                                <td><strong>Jalisco</strong></td>
                                <td>140 ha</td>
                                <td>Siembra</td>
                                <td>5,880 ton</td>
                                <td>$23.8M</td>
                                <td><span class="status status-complete">Sembrado</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Gastos Module -->
            <div id="gastos-module" class="module hidden">
                <div class="page-header">
                    <h1 class="page-title">Control de Gastos</h1>
                    <p class="page-subtitle">Separación automática de gastos facturados/no facturados por rancho</p>
                </div>
                
                <div class="form-container">
                    <h3 style="margin-bottom: 1rem;">Registrar Nuevo Gasto</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label">Rancho</label>
                            <select class="form-select">
                                <option>Coahuila</option>
                                <option>Sonora</option>
                                <option>Jalisco</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Categoría</label>
                            <select class="form-select">
                                <option>Semillas</option>
                                <option>Fertilizantes</option>
                                <option>Agroquímicos</option>
                                <option>Combustible</option>
                                <option>Mano de Obra</option>
                                <option>Renta de Tierra</option>
                                <option>Maquinaria</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Monto</label>
                            <input type="number" class="form-input" placeholder="$0.00">
                        </div>
                        <div class="form-group">
                            <label class="form-label">¿Facturado?</label>
                            <select class="form-select">
                                <option>Sí - Con Factura</option>
                                <option>No - Sin Factura</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i> Agregar Gasto
                    </button>
                </div>
                
                <div class="cards-grid">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Gastos Facturados</div>
                            <div class="card-icon" style="background: var(--aloia-success);">
                                <i class="fas fa-file-invoice"></i>
                            </div>
                        </div>
                        <div class="card-value">$62.1M</div>
                        <div class="card-change positive">79.4% del total</div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Gastos No Facturados</div>
                            <div class="card-icon" style="background: var(--aloia-warning);">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                        </div>
                        <div class="card-value">$16.2M</div>
                        <div class="card-change">20.6% del total</div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Promedio por Hectárea</div>
                            <div class="card-icon" style="background: var(--aloia-purple);">
                                <i class="fas fa-calculator"></i>
                            </div>
                        </div>
                        <div class="card-value">$161,443</div>
                        <div class="card-change positive">Dentro del presupuesto</div>
                    </div>
                </div>
                
                <div class="table-container">
                    <div class="table-header">
                        <h3 class="table-title">Gastos Recientes por Rancho</h3>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Rancho</th>
                                <th>Categoría</th>
                                <th>Descripción</th>
                                <th>Monto</th>
                                <th>Facturado</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>15 Nov 2024</td>
                                <td>Coahuila</td>
                                <td>Fertilizantes</td>
                                <td>Urea 46% - 50 ton</td>
                                <td>$2,450,000</td>
                                <td><i class="fas fa-check" style="color: var(--aloia-success);"></i></td>
                                <td><span class="status status-complete">Procesado</span></td>
                            </tr>
                            <tr>
                                <td>14 Nov 2024</td>
                                <td>Sonora</td>
                                <td>Combustible</td>
                                <td>Diesel para riego</td>
                                <td>$186,500</td>
                                <td><i class="fas fa-times" style="color: var(--aloia-red);"></i></td>
                                <td><span class="status status-pending">Pendiente</span></td>
                            </tr>
                            <tr>
                                <td>13 Nov 2024</td>
                                <td>Jalisco</td>
                                <td>Semillas</td>
                                <td>Semilla certificada - 8.5 ton</td>
                                <td>$1,275,000</td>
                                <td><i class="fas fa-check" style="color: var(--aloia-success);"></i></td>
                                <td><span class="status status-complete">Procesado</span></td>
                            </tr>
                            <tr>
                                <td>12 Nov 2024</td>
                                <td>Coahuila</td>
                                <td>Mano de Obra</td>
                                <td>Nómina semanal - 25 trabajadores</td>
                                <td>$312,500</td>
                                <td><i class="fas fa-times" style="color: var(--aloia-red);"></i></td>
                                <td><span class="status status-active">Activo</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Ventas Module -->
            <div id="ventas-module" class="module hidden">
                <div class="page-header">
                    <h1 class="page-title">Control de Ventas</h1>
                    <p class="page-subtitle">Ventas por tonelada con cálculo automático de rentabilidad</p>
                </div>
                
                <div class="cards-grid">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Papa para Fritura</div>
                            <div class="card-icon" style="background: var(--aloia-gradient);">
                                <i class="fas fa-fire"></i>
                            </div>
                        </div>
                        <div class="card-value">14,685 ton</div>
                        <div class="card-change positive">71.9% del total | $6,200/ton</div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Papa Fresco</div>
                            <div class="card-icon" style="background: var(--aloia-success);">
                                <i class="fas fa-leaf"></i>
                            </div>
                        </div>
                        <div class="card-value">4,320 ton</div>
                        <div class="card-change positive">21.2% del total | $4,800/ton</div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Papa Semilla</div>
                            <div class="card-icon" style="background: var(--aloia-purple);">
                                <i class="fas fa-seedling"></i>
                            </div>
                        </div>
                        <div class="card-value">1,415 ton</div>
                        <div class="card-change positive">6.9% del total | $12,500/ton</div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Rentabilidad Promedio</div>
                            <div class="card-icon" style="background: var(--aloia-warning);">
                                <i class="fas fa-percentage"></i>
                            </div>
                        </div>
                        <div class="card-value">36.2%</div>
                        <div class="card-change positive">
                            <i class="fas fa-arrow-up"></i>
                            +4.1% vs objetivo
                        </div>
                    </div>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 2rem;">
                    <div class="chart-container">
                        <div class="chart-header">
                            <h3 class="chart-title">Ventas por Mercado</h3>
                        </div>
                        <canvas id="salesByMarketChart" height="300"></canvas>
                    </div>
                    
                    <div class="chart-container">
                        <div class="chart-header">
                            <h3 class="chart-title">Evolución de Precios</h3>
                        </div>
                        <canvas id="priceEvolutionChart" height="300"></canvas>
                    </div>
                </div>
                
                <div class="table-container">
                    <div class="table-header">
                        <h3 class="table-title">Ventas por Rancho y Mercado</h3>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Rancho</th>
                                <th>Mercado</th>
                                <th>Toneladas</th>
                                <th>Precio/Ton</th>
                                <th>Ingresos</th>
                                <th>Costo/Ton</th>
                                <th>Rentabilidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Coahuila</strong></td>
                                <td>Fritura</td>
                                <td>5,450 ton</td>
                                <td>$6,200</td>
                                <td>$33,790,000</td>
                                <td>$3,850</td>
                                <td class="positive">37.9%</td>
                            </tr>
                            <tr>
                                <td><strong>Coahuila</strong></td>
                                <td>Fresco</td>
                                <td>1,680 ton</td>
                                <td>$4,800</td>
                                <td>$8,064,000</td>
                                <td>$3,120</td>
                                <td class="positive">35.0%</td>
                            </tr>
                            <tr>
                                <td><strong>Sonora</strong></td>
                                <td>Fritura</td>
                                <td>4,890 ton</td>
                                <td>$6,200</td>
                                <td>$30,318,000</td>
                                <td>$3,920</td>
                                <td class="positive">36.8%</td>
                            </tr>
                            <tr>
                                <td><strong>Sonora</strong></td>
                                <td>Semilla</td>
                                <td>1,415 ton</td>
                                <td>$12,500</td>
                                <td>$17,687,500</td>
                                <td>$7,800</td>
                                <td class="positive">37.6%</td>
                            </tr>
                            <tr>
                                <td><strong>Jalisco</strong></td>
                                <td>Fritura</td>
                                <td>4,345 ton</td>
                                <td>$6,200</td>
                                <td>$26,939,000</td>
                                <td>$4,020</td>
                                <td class="positive">35.2%</td>
                            </tr>
                            <tr>
                                <td><strong>Jalisco</strong></td>
                                <td>Fresco</td>
                                <td>2,640 ton</td>
                                <td>$4,800</td>
                                <td>$12,672,000</td>
                                <td>$3,200</td>
                                <td class="positive">33.3%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Ranchos Module -->
            <div id="ranchos-module" class="module hidden">
                <div class="page-header">
                    <h1 class="page-title">Gestión por Rancho</h1>
                    <p class="page-subtitle">Comparativa de rentabilidad y asignación automática de ingresos/gastos</p>
                </div>
                
                <div class="cards-grid">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Rancho Coahuila</div>
                            <div class="card-icon" style="background: var(--aloia-gradient);">
                                <i class="fas fa-mountain"></i>
                            </div>
                        </div>
                        <div class="card-value">180 ha</div>
                        <div class="card-change positive">42.0 ton/ha | ROI: 47.2%</div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Rancho Sonora</div>
                            <div class="card-icon" style="background: var(--aloia-success);">
                                <i class="fas fa-sun"></i>
                            </div>
                        </div>
                        <div class="card-value">165 ha</div>
                        <div class="card-change positive">42.0 ton/ha | ROI: 51.8%</div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Rancho Jalisco</div>
                            <div class="card-icon" style="background: var(--aloia-purple);">
                                <i class="fas fa-tree"></i>
                            </div>
                        </div>
                        <div class="card-value">140 ha</div>
                        <div class="card-change positive">42.0 ton/ha | ROI: 44.1%</div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Mejor Performance</div>
                            <div class="card-icon" style="background: var(--aloia-warning);">
                                <i class="fas fa-trophy"></i>
                            </div>
                        </div>
                        <div class="card-value">Sonora</div>
                        <div class="card-change positive">Más rentable por semilla</div>
                    </div>
                </div>
                
                <div class="chart-container">
                    <div class="chart-header">
                        <h3 class="chart-title">Comparativa de Rentabilidad por Rancho</h3>
                    </div>
                    <canvas id="ranchComparison" height="200"></canvas>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 1.5rem; margin-bottom: 2rem;">
                    <!-- Coahuila Detail -->
                    <div class="table-container">
                        <div class="table-header">
                            <h3 class="table-title">Detalle Rancho Coahuila</h3>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Concepto</th>
                                    <th>Monto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hectáreas</td>
                                    <td>180 ha</td>
                                </tr>
                                <tr>
                                    <td>Producción</td>
                                    <td>7,560 ton</td>
                                </tr>
                                <tr>
                                    <td>Ingresos</td>
                                    <td>$41,854,000</td>
                                </tr>
                                <tr>
                                    <td>Gastos</td>
                                    <td>$28,400,000</td>
                                </tr>
                                <tr>
                                    <td class="positive">Utilidad</td>
                                    <td class="positive">$13,454,000</td>
                                </tr>
                                <tr>
                                    <td>ROI</td>
                                    <td class="positive">47.2%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Sonora Detail -->
                    <div class="table-container">
                        <div class="table-header">
                            <h3 class="table-title">Detalle Rancho Sonora</h3>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Concepto</th>
                                    <th>Monto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hectáreas</td>
                                    <td>165 ha</td>
                                </tr>
                                <tr>
                                    <td>Producción</td>
                                    <td>6,930 ton</td>
                                </tr>
                                <tr>
                                    <td>Ingresos</td>
                                    <td>$48,005,500</td>
                                </tr>
                                <tr>
                                    <td>Gastos</td>
                                    <td>$26,100,000</td>
                                </tr>
                                <tr>
                                    <td class="positive">Utilidad</td>
                                    <td class="positive">$21,905,500</td>
                                </tr>
                                <tr>
                                    <td>ROI</td>
                                    <td class="positive">51.8%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Jalisco Detail -->
                    <div class="table-container">
                        <div class="table-header">
                            <h3 class="table-title">Detalle Rancho Jalisco</h3>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Concepto</th>
                                    <th>Monto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hectáreas</td>
                                    <td>140 ha</td>
                                </tr>
                                <tr>
                                    <td>Producción</td>
                                    <td>5,880 ton</td>
                                </tr>
                                <tr>
                                    <td>Ingresos</td>
                                    <td>$39,611,000</td>
                                </tr>
                                <tr>
                                    <td>Gastos</td>
                                    <td>$23,800,000</td>
                                </tr>
                                <tr>
                                    <td class="positive">Utilidad</td>
                                    <td class="positive">$15,811,000</td>
                                </tr>
                                <tr>
                                    <td>ROI</td>
                                    <td class="positive">44.1%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="table-container">
                    <div class="table-header">
                        <h3 class="table-title">Asignación Automática de Gastos por Rancho</h3>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Categoría</th>
                                <th>Coahuila</th>
                                <th>Sonora</th>
                                <th>Jalisco</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Semillas</strong></td>
                                <td>$3,240,000</td>
                                <td>$2,970,000</td>
                                <td>$2,520,000</td>
                                <td>$8,730,000</td>
                            </tr>
                            <tr>
                                <td><strong>Fertilizantes</strong></td>
                                <td>$8,100,000</td>
                                <td>$7,425,000</td>
                                <td>$6,300,000</td>
                                <td>$21,825,000</td>
                            </tr>
                            <tr>
                                <td><strong>Agroquímicos</strong></td>
                                <td>$5,400,000</td>
                                <td>$4,950,000</td>
                                <td>$4,200,000</td>
                                <td>$14,550,000</td>
                            </tr>
                            <tr>
                                <td><strong>Combustible</strong></td>
                                <td>$3,600,000</td>
                                <td>$3,300,000</td>
                                <td>$2,800,000</td>
                                <td>$9,700,000</td>
                            </tr>
                            <tr>
                                <td><strong>Mano de Obra</strong></td>
                                <td>$5,760,000</td>
                                <td>$5,280,000</td>
                                <td>$4,480,000</td>
                                <td>$15,520,000</td>
                            </tr>
                            <tr>
                                <td><strong>Renta de Tierra</strong></td>
                                <td>$1,800,000</td>
                                <td>$1,650,000</td>
                                <td>$1,400,000</td>
                                <td>$4,850,000</td>
                            </tr>
                            <tr>
                                <td><strong>Maquinaria</strong></td>
                                <td>$500,000</td>
                                <td>$525,000</td>
                                <td>$2,100,000</td>
                                <td>$3,125,000</td>
                            </tr>
                            <tr style="border-top: 2px solid var(--aloia-orange); font-weight: 600;">
                                <td><strong>TOTAL</strong></td>
                                <td><strong>$28,400,000</strong></td>
                                <td><strong>$26,100,000</strong></td>
                                <td><strong>$23,800,000</strong></td>
                                <td><strong>$78,300,000</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Reportes Module -->
            <div id="reportes-module" class="module hidden">
                <div class="page-header">
                    <h1 class="page-title">Reportes Financieros</h1>
                    <p class="page-subtitle">Reportes automáticos consolidados y por rancho en Excel/PDF</p>
                </div>
                
                <div class="cards-grid">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Reportes Generados</div>
                            <div class="card-icon" style="background: var(--aloia-gradient);">
                                <i class="fas fa-file-alt"></i>
                            </div>
                        </div>
                        <div class="card-value">47</div>
                        <div class="card-change positive">Este mes</div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Último Reporte</div>
                            <div class="card-icon" style="background: var(--aloia-success);">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>
                        <div class="card-value">15 Nov</div>
                        <div class="card-change">Consolidado Semanal</div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Próximo Reporte</div>
                            <div class="card-icon" style="background: var(--aloia-warning);">
                                <i class="fas fa-calendar"></i>
                            </div>
                        </div>
                        <div class="card-value">22 Nov</div>
                        <div class="card-change">Cierre Mensual</div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Automatización</div>
                            <div class="card-icon" style="background: var(--aloia-purple);">
                                <i class="fas fa-robot"></i>
                            </div>
                        </div>
                        <div class="card-value">100%</div>
                        <div class="card-change positive">Procesos automáticos</div>
                    </div>
                </div>
                
                <div class="form-container">
                    <h3 style="margin-bottom: 1rem;">Generar Reporte Personalizado</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label">Tipo de Reporte</label>
                            <select class="form-select">
                                <option>Estado Financiero Consolidado</option>
                                <option>Análisis por Rancho</option>
                                <option>Flujo de Efectivo</option>
                                <option>Rentabilidad por Hectárea</option>
                                <option>Comparativa de Gastos</option>
                                <option>Proyección de Ventas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Período</label>
                            <select class="form-select">
                                <option>Ciclo Actual (2024-2025)</option>
                                <option>Último Mes</option>
                                <option>Últimos 3 Meses</option>
                                <option>Año Fiscal Actual</option>
                                <option>Comparativo vs Año Anterior</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Rancho(s)</label>
                            <select class="form-select">
                                <option>Todos los Ranchos</option>
                                <option>Solo Coahuila</option>
                                <option>Solo Sonora</option>
                                <option>Solo Jalisco</option>
                                <option>Comparativa entre Ranchos</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Formato</label>
                            <select class="form-select">
                                <option>Excel (.xlsx)</option>
                                <option>PDF</option>
                                <option>Ambos formatos</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex" style="gap: 1rem;">
                        <button class="btn btn-primary">
                            <i class="fas fa-download"></i> Generar Reporte
                        </button>
                        <button class="btn btn-secondary">
                            <i class="fas fa-eye"></i> Vista Previa
                        </button>
                    </div>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 2rem;">
                    <div class="table-container">
                        <div class="table-header">
                            <h3 class="table-title">Reportes Programados</h3>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Reporte</th>
                                    <th>Frecuencia</th>
                                    <th>Próxima Ejecución</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Estado Financiero Semanal</td>
                                    <td>Semanal</td>
                                    <td>22 Nov 2024</td>
                                    <td><span class="status status-active">Activo</span></td>
                                </tr>
                                <tr>
                                    <td>Consolidado Mensual</td>
                                    <td>Mensual</td>
                                    <td>30 Nov 2024</td>
                                    <td><span class="status status-active">Activo</span></td>
                                </tr>
                                <tr>
                                    <td>Análisis de Rentabilidad</td>
                                    <td>Quincenal</td>
                                    <td>29 Nov 2024</td>
                                    <td><span class="status status-active">Activo</span></td>
                                </tr>
                                <tr>
                                    <td>Flujo de Efectivo</td>
                                    <td>Semanal</td>
                                    <td>22 Nov 2024</td>
                                    <td><span class="status status-active">Activo</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="table-container">
                        <div class="table-header">
                            <h3 class="table-title">Reportes Recientes</h3>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Reporte</th>
                                    <th>Formato</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>15 Nov 2024</td>
                                    <td>Consolidado Semanal</td>
                                    <td>Excel</td>
                                    <td>
                                        <button class="btn btn-secondary" style="padding: 0.25rem 0.5rem; font-size: 0.75rem;">
                                            <i class="fas fa-download"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14 Nov 2024</td>
                                    <td>Análisis por Rancho</td>
                                    <td>PDF</td>
                                    <td>
                                        <button class="btn btn-secondary" style="padding: 0.25rem 0.5rem; font-size: 0.75rem;">
                                            <i class="fas fa-download"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12 Nov 2024</td>
                                    <td>Flujo de Efectivo</td>
                                    <td>Excel</td>
                                    <td>
                                        <button class="btn btn-secondary" style="padding: 0.25rem 0.5rem; font-size: 0.75rem;">
                                            <i class="fas fa-download"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10 Nov 2024</td>
                                    <td>Rentabilidad por Hectárea</td>
                                    <td>PDF</td>
                                    <td>
                                        <button class="btn btn-secondary" style="padding: 0.25rem 0.5rem; font-size: 0.75rem;">
                                            <i class="fas fa-download"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="chart-container">
                    <div class="chart-header">
                        <h3 class="chart-title">Resumen Ejecutivo - KPIs Clave</h3>
                    </div>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; padding: 1rem 0;">
                        <div style="text-align: center; padding: 1rem; background: var(--aloia-light-accent); border-radius: 8px;">
                            <div style="font-size: 0.875rem; color: #6b7280; margin-bottom: 0.5rem;">Margen Bruto Total</div>
                            <div style="font-size: 1.5rem; font-weight: 700; color: var(--aloia-success);">36.2%</div>
                            <div style="font-size: 0.75rem; color: #9ca3af;">vs 32.1% año anterior</div>
                        </div>
                        <div style="text-align: center; padding: 1rem; background: var(--aloia-light-accent); border-radius: 8px;">
                            <div style="font-size: 0.875rem; color: #6b7280; margin-bottom: 0.5rem;">ROI Promedio</div>
                            <div style="font-size: 1.5rem; font-weight: 700; color: var(--aloia-success);">47.7%</div>
                            <div style="font-size: 0.75rem; color: #9ca3af;">vs 42.3% año anterior</div>
                        </div>
                        <div style="text-align: center; padding: 1rem; background: var(--aloia-light-accent); border-radius: 8px;">
                            <div style="font-size: 0.875rem; color: #6b7280; margin-bottom: 0.5rem;">Producción/Ha</div>
                            <div style="font-size: 1.5rem; font-weight: 700; color: var(--aloia-success);">42.1 ton</div>
                            <div style="font-size: 0.75rem; color: #9ca3af;">vs 38.7 ton año anterior</div>
                        </div>
                        <div style="text-align: center; padding: 1rem; background: var(--aloia-light-accent); border-radius: 8px;">
                            <div style="font-size: 0.875rem; color: #6b7280; margin-bottom: 0.5rem;">Utilidad Neta</div>
                            <div style="font-size: 1.5rem; font-weight: 700; color: var(--aloia-success);">$51.2M</div>
                            <div style="font-size: 0.75rem; color: #9ca3af;">vs $44.8M año anterior</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Navigation functionality
        function showModule(moduleId) {
            // Hide all modules
            const modules = document.querySelectorAll('.module');
            modules.forEach(module => module.classList.add('hidden'));
            
            // Show selected module
            document.getElementById(moduleId + '-module').classList.remove('hidden');
            
            // Update active nav link
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => link.classList.remove('active'));
            
            // Find the clicked nav link and mark it as active
            const clickedLink = event.target.closest('.nav-link');
            if (clickedLink) {
                clickedLink.classList.add('active');
            }
            
            // Initialize charts for the selected module
            setTimeout(() => {
                if (moduleId === 'dashboard') {
                    initDashboardCharts();
                } else if (moduleId === 'ventas') {
                    initSalesCharts();
                } else if (moduleId === 'ranchos') {
                    initRanchCharts();
                }
            }, 100);
        }
        
        // Chart initialization functions
        function initDashboardCharts() {
            // Cash Flow Chart
            const cashFlowCtx = document.getElementById('cashFlowChart');
            if (cashFlowCtx && !cashFlowCtx.chartInstance) {
                cashFlowCtx.chartInstance = new Chart(cashFlowCtx, {
                    type: 'line',
                    data: {
                        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                        datasets: [{
                            label: 'Coahuila',
                            data: [2.1, 1.8, 3.2, 4.5, 5.8, 7.2, 8.5, 12.3, 15.6, 18.9, 22.1, 25.4],
                            borderColor: '#FD6144',
                            backgroundColor: 'rgba(253, 97, 68, 0.1)',
                            tension: 0.4
                        }, {
                            label: 'Sonora',
                            data: [1.5, 1.2, 2.8, 4.1, 5.5, 6.9, 8.2, 11.8, 15.1, 18.4, 21.6, 24.8],
                            borderColor: '#10b981',
                            backgroundColor: 'rgba(16, 185, 129, 0.1)',
                            tension: 0.4
                        }, {
                            label: 'Jalisco',
                            data: [1.8, 1.5, 2.9, 4.2, 5.6, 7.0, 8.3, 11.9, 15.2, 18.5, 21.7, 24.9],
                            borderColor: '#AE3A8D',
                            backgroundColor: 'rgba(174, 58, 141, 0.1)',
                            tension: 0.4
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'top',
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    callback: function(value) {
                                        return ' + value + 'M';
                                    }
                                }
                            }
                        }
                    }
                });
            }
            
            // Profitability Chart
            const profitabilityCtx = document.getElementById('profitabilityChart');
            if (profitabilityCtx && !profitabilityCtx.chartInstance) {
                profitabilityCtx.chartInstance = new Chart(profitabilityCtx, {
                    type: 'bar',
                    data: {
                        labels: ['Coahuila', 'Sonora', 'Jalisco'],
                        datasets: [{
                            label: 'ROI (%)',
                            data: [47.2, 51.8, 44.1],
                            backgroundColor: [
                                'rgba(253, 97, 68, 0.8)',
                                'rgba(16, 185, 129, 0.8)',
                                'rgba(174, 58, 141, 0.8)'
                            ],
                            borderColor: [
                                '#FD6144',
                                '#10b981',
                                '#AE3A8D'
                            ],
                            borderWidth: 2
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: false
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    callback: function(value) {
                                        return value + '%';
                                    }
                                }
                            }
                        }
                    }
                });
            }
        }
        
        function initSalesCharts() {
            // Sales by Market Chart
            const salesByMarketCtx = document.getElementById('salesByMarketChart');
            if (salesByMarketCtx && !salesByMarketCtx.chartInstance) {
                salesByMarketCtx.chartInstance = new Chart(salesByMarketCtx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Fritura', 'Fresco', 'Semilla'],
                        datasets: [{
                            data: [14685, 4320, 1415],
                            backgroundColor: [
                                '#FD6144',
                                '#10b981',
                                '#AE3A8D'
                            ],
                            borderWidth: 3,
                            borderColor: '#fff'
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }
                });
            }
            
            // Price Evolution Chart
            const priceEvolutionCtx = document.getElementById('priceEvolutionChart');
            if (priceEvolutionCtx && !priceEvolutionCtx.chartInstance) {
                priceEvolutionCtx.chartInstance = new Chart(priceEvolutionCtx, {
                    type: 'line',
                    data: {
                        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov'],
                        datasets: [{
                            label: 'Papa Fritura',
                            data: [5800, 5900, 6100, 6000, 5950, 6050, 6150, 6200, 6180, 6200, 6200],
                            borderColor: '#FD6144',
                            backgroundColor: 'rgba(253, 97, 68, 0.1)',
                            tension: 0.4
                        }, {
                            label: 'Papa Fresco',
                            data: [4500, 4600, 4700, 4650, 4750, 4800, 4850, 4800, 4780, 4800, 4800],
                            borderColor: '#10b981',
                            backgroundColor: 'rgba(16, 185, 129, 0.1)',
                            tension: 0.4
                        }, {
                            label: 'Papa Semilla',
                            data: [11500, 11800, 12000, 12200, 12400, 12300, 12450, 12500, 12480, 12500, 12500],
                            borderColor: '#AE3A8D',
                            backgroundColor: 'rgba(174, 58, 141, 0.1)',
                            tension: 0.4
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'top'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: false,
                                ticks: {
                                    callback: function(value) {
                                        return ' + value.toLocaleString();
                                    }
                                }
                            }
                        }
                    }
                });
            }
        }
        
        function initRanchCharts() {
            // Ranch Comparison Chart
            const ranchComparisonCtx = document.getElementById('ranchComparison');
            if (ranchComparisonCtx && !ranchComparisonCtx.chartInstance) {
                ranchComparisonCtx.chartInstance = new Chart(ranchComparisonCtx, {
                    type: 'radar',
                    data: {
                        labels: ['ROI (%)', 'Ton/Ha', 'Ingresos/Ha (M)', 'Eficiencia Costos', 'Calidad Papa'],
                        datasets: [{
                            label: 'Coahuila',
                            data: [47.2, 42.0, 0.232, 85, 92],
                            borderColor: '#FD6144',
                            backgroundColor: 'rgba(253, 97, 68, 0.2)',
                            pointBackgroundColor: '#FD6144'
                        }, {
                            label: 'Sonora',
                            data: [51.8, 42.0, 0.291, 88, 95],
                            borderColor: '#10b981',
                            backgroundColor: 'rgba(16, 185, 129, 0.2)',
                            pointBackgroundColor: '#10b981'
                        }, {
                            label: 'Jalisco',
                            data: [44.1, 42.0, 0.283, 82, 90],
                            borderColor: '#AE3A8D',
                            backgroundColor: 'rgba(174, 58, 141, 0.2)',
                            pointBackgroundColor: '#AE3A8D'
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'top'
                            }
                        },
                        scales: {
                            r: {
                                beginAtZero: true,
                                max: 100
                            }
                        }
                    }
                });
            }
        }
        
        // Initialize dashboard charts on page load
        document.addEventListener('DOMContentLoaded', function() {
            initDashboardCharts();
            
            // Add click effects to cards
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                card.addEventListener('click', function() {
                    this.style.transform = 'translateY(-4px)';
                    this.style.boxShadow = '0 12px 30px rgba(0,0,0,0.15)';
                    setTimeout(() => {
                        this.style.transform = '';
                        this.style.boxShadow = '';
                    }, 200);
                });
            });
            
            // Add form submission handlers (demo)
            const buttons = document.querySelectorAll('.btn-primary');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Procesando...';
                    this.disabled = true;
                    setTimeout(() => {
                        this.innerHTML = '<i class="fas fa-check"></i> ¡Completado!';
                        this.style.background = 'var(--aloia-success)';
                        setTimeout(() => {
                            this.innerHTML = originalText;
                            this.style.background = '';
                            this.disabled = false;
                        }, 2000);
                    }, 1500);
                });
            });
        });
        
        // Add keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.altKey) {
                switch(e.key) {
                    case '1':
                        showModule('dashboard');
                        break;
                    case '2':
                        showModule('gastos');
                        break;
                    case '3':
                        showModule('ventas');
                        break;
                    case '4':
                        showModule('ranchos');
                        break;
                    case '5':
                        showModule('reportes');
                        break;
                }
            }
        });
        
        // Simulated real-time updates (demo)
        setInterval(() => {
            // Update some random values to simulate real-time data
            const randomCards = document.querySelectorAll('.card-value');
            if (randomCards.length > 0 && Math.random() > 0.98) {
                const randomCard = randomCards[Math.floor(Math.random() * randomCards.length)];
                randomCard.style.background = 'rgba(16, 185, 129, 0.1)';
                randomCard.style.transform = 'scale(1.05)';
                setTimeout(() => {
                    randomCard.style.background = '';
                    randomCard.style.transform = '';
                }, 1000);
            }
        }, 3000);
    </script>
</body>
</html>