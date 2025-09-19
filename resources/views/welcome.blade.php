<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Power Project - Laravel 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .welcome-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
        }
        .logo {
            font-size: 3rem;
            font-weight: bold;
            color: #667eea;
            margin-bottom: 1rem;
        }
        .subtitle {
            color: #666;
            margin-bottom: 2rem;
        }
        .btn-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            color: white;
            text-decoration: none;
            display: inline-block;
            margin: 0 10px;
            transition: transform 0.3s ease;
        }
        .btn-custom:hover {
            transform: translateY(-2px);
            color: white;
        }
        .features {
            margin-top: 2rem;
            text-align: left;
        }
        .feature-item {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }
        .feature-item:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="welcome-card">
        <div class="logo">⚡ Power Project</div>
        <h2 class="subtitle">Laravel 11 dengan Docker & PostgreSQL</h2>
        <p class="lead">Selamat datang di aplikasi Power Project yang dibangun dengan Laravel 11, Docker, dan PostgreSQL.</p>
        
        <div class="features">
            <h5>🚀 Fitur yang tersedia:</h5>
            <div class="feature-item">✅ Laravel 11 Framework</div>
            <div class="feature-item">✅ Docker Containerization</div>
            <div class="feature-item">✅ PostgreSQL Database</div>
            <div class="feature-item">✅ Redis Cache</div>
            <div class="feature-item">✅ Nginx Web Server</div>
            <div class="feature-item">✅ Template Dashboard Siap Pakai</div>
        </div>
        
        <div class="mt-4">
            <a href="{{ route('dashboard') }}" class="btn-custom">Dashboard</a>
            <a href="https://laravel.com/docs" class="btn-custom" target="_blank">Dokumentasi</a>
        </div>
        
        <div class="mt-4">
            <small class="text-muted">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </small>
        </div>
    </div>
</body>
</html>
