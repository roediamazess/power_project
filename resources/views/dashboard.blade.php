<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Power Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: white;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 12px 20px;
            border-radius: 8px;
            margin: 5px 0;
            transition: all 0.3s ease;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background: rgba(255, 255, 255, 0.2);
            color: white;
        }
        .main-content {
            padding: 2rem;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .stat-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        .stat-card .card-body {
            padding: 2rem;
        }
        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .navbar-custom {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 px-0">
                <div class="sidebar">
                    <div class="p-3">
                        <h4 class="text-center mb-4">
                            <i class="fas fa-bolt"></i> Power Project
                        </h4>
                        <nav class="nav flex-column">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                            </a>
                            <a class="nav-link" href="#">
                                <i class="fas fa-users me-2"></i> Users
                            </a>
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-bar me-2"></i> Analytics
                            </a>
                            <a class="nav-link" href="#">
                                <i class="fas fa-cog me-2"></i> Settings
                            </a>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10">
                <!-- Top Navbar -->
                <nav class="navbar navbar-expand-lg navbar-custom">
                    <div class="container-fluid">
                        <span class="navbar-brand mb-0 h1">Dashboard</span>
                        <div class="navbar-nav ms-auto">
                            <a class="nav-link" href="{{ url('/') }}">
                                <i class="fas fa-home me-1"></i> Home
                            </a>
                        </div>
                    </div>
                </nav>

                <div class="main-content">
                    <!-- Stats Cards -->
                    <div class="row mb-4">
                        <div class="col-md-3 mb-3">
                            <div class="card stat-card">
                                <div class="card-body text-center">
                                    <i class="fas fa-users fa-2x mb-3"></i>
                                    <div class="stat-number">1,234</div>
                                    <div>Total Users</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card stat-card">
                                <div class="card-body text-center">
                                    <i class="fas fa-chart-line fa-2x mb-3"></i>
                                    <div class="stat-number">$12,345</div>
                                    <div>Revenue</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card stat-card">
                                <div class="card-body text-center">
                                    <i class="fas fa-shopping-cart fa-2x mb-3"></i>
                                    <div class="stat-number">567</div>
                                    <div>Orders</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card stat-card">
                                <div class="card-body text-center">
                                    <i class="fas fa-eye fa-2x mb-3"></i>
                                    <div class="stat-number">89,012</div>
                                    <div>Page Views</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Cards -->
                    <div class="row">
                        <div class="col-md-8 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <i class="fas fa-chart-area me-2"></i>Analytics Overview
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <p>Grafik analytics akan ditampilkan di sini. Anda dapat mengintegrasikan dengan Chart.js, ApexCharts, atau library chart lainnya.</p>
                                    <div class="text-center py-5">
                                        <i class="fas fa-chart-bar fa-3x text-muted"></i>
                                        <p class="text-muted mt-3">Chart akan ditampilkan di sini</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <i class="fas fa-bell me-2"></i>Recent Activity
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item border-0 px-0">
                                            <div class="d-flex">
                                                <i class="fas fa-user-plus text-success me-3 mt-1"></i>
                                                <div>
                                                    <h6 class="mb-1">New user registered</h6>
                                                    <small class="text-muted">2 minutes ago</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item border-0 px-0">
                                            <div class="d-flex">
                                                <i class="fas fa-shopping-cart text-primary me-3 mt-1"></i>
                                                <div>
                                                    <h6 class="mb-1">New order received</h6>
                                                    <small class="text-muted">5 minutes ago</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item border-0 px-0">
                                            <div class="d-flex">
                                                <i class="fas fa-exclamation-triangle text-warning me-3 mt-1"></i>
                                                <div>
                                                    <h6 class="mb-1">System alert</h6>
                                                    <small class="text-muted">10 minutes ago</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- System Info -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <i class="fas fa-info-circle me-2"></i>System Information
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><strong>Laravel Version:</strong> {{ Illuminate\Foundation\Application::VERSION }}</p>
                                            <p><strong>PHP Version:</strong> {{ PHP_VERSION }}</p>
                                            <p><strong>Environment:</strong> {{ app()->environment() }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>Database:</strong> PostgreSQL (Docker)</p>
                                            <p><strong>Cache:</strong> Redis (Docker)</p>
                                            <p><strong>Web Server:</strong> Nginx (Docker)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
