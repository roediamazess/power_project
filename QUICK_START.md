# 🚀 Quick Start Guide - Power Project

## ⚡ Langkah Cepat Menjalankan Aplikasi

### 1. Dengan Docker (Paling Mudah)
```bash
# Build dan jalankan aplikasi
build.bat

# Aplikasi akan tersedia di: http://localhost:8000
```

### 2. Tanpa Docker (Local Development)
```bash
# Install PHP 8.2+ dan Composer terlebih dahulu
# Kemudian jalankan:
test-local.bat
php artisan serve

# Aplikasi akan tersedia di: http://localhost:8000
```

## 🎯 Fitur yang Sudah Siap

### ✅ Backend
- Laravel 11 Framework
- PostgreSQL Database
- Redis Cache & Session
- Nginx Web Server
- Docker Containerization

### ✅ Frontend
- Bootstrap 5.3
- Modern Dashboard UI
- Responsive Design
- Template Integration Ready

### ✅ Development Tools
- Hot Reload (Vite)
- Composer Dependencies
- NPM Dependencies
- Auto Scripts

## 📁 Struktur File Penting

```
power_project/
├── 🐳 Docker Files
│   ├── docker-compose.yml
│   ├── Dockerfile
│   └── docker/ (configs)
├── 🚀 Laravel App
│   ├── app/
│   ├── config/
│   ├── routes/
│   ├── resources/views/
│   └── public/
├── 🎨 Templates
│   ├── Dashmin_Light/
│   ├── Dashmin_Dark/
│   └── Dashmin_Rtl/
└── 📜 Scripts
    ├── build.bat
    ├── start.bat
    ├── stop.bat
    └── status.bat
```

## 🔧 Perintah Berguna

### Docker Commands
```bash
build.bat          # Build dan start aplikasi
start.bat          # Start container yang sudah ada
stop.bat           # Stop semua container
status.bat         # Cek status aplikasi
```

### Laravel Commands
```bash
# Masuk ke container
docker-compose exec app bash

# Generate key
php artisan key:generate

# Run migration
php artisan migrate

# Clear cache
php artisan cache:clear
```

## 🌐 Akses Aplikasi

- **Homepage**: http://localhost:8000
- **Dashboard**: http://localhost:8000/dashboard
- **Database**: localhost:5432 (power_project/power_user)
- **Redis**: localhost:6379

## 🎨 Menggunakan Template

Template sudah terintegrasi dan siap digunakan:

1. **Assets**: `/public/assets/` (CSS, JS, Images)
2. **Views**: `resources/views/` (Blade templates)
3. **Components**: Bootstrap 5 + Custom CSS

### Contoh Penggunaan Template
```php
// Di view blade
<link href="/assets/css/style.css" rel="stylesheet">
<script src="/assets/js/script.js"></script>
```

## 🚨 Troubleshooting

### Port 8000 sudah digunakan
Edit `docker-compose.yml`:
```yaml
ports:
  - "8001:80"  # Ubah port
```

### Database connection error
```bash
# Restart database
docker-compose restart db
```

### Permission error
```bash
# Set permission
docker-compose exec app chmod -R 755 storage bootstrap/cache
```

## 📞 Bantuan

Jika ada masalah:
1. Jalankan `status.bat` untuk cek status
2. Lihat logs: `docker-compose logs -f`
3. Restart: `stop.bat` lalu `start.bat`

---

**Power Project** - Ready to Code! 🚀
