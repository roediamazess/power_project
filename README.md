# Power Project - Laravel 11 dengan Docker

Aplikasi web yang dibangun dengan Laravel 11, Docker, PostgreSQL, dan Redis.

## 🚀 Fitur

- **Laravel 11** - Framework PHP terbaru
- **Docker** - Containerization untuk development dan production
- **PostgreSQL** - Database relasional yang powerful
- **Redis** - Cache dan session storage
- **Nginx** - Web server yang efisien
- **Template Dashboard** - UI yang modern dan responsif

## 📋 Prerequisites

- Docker Desktop (sudah terinstall)
- Git

## 🛠️ Instalasi

### 1. Clone Repository
```bash
git clone <repository-url>
cd power_project
```

### 2. Build dan Jalankan Aplikasi

#### Windows:
```bash
# Build dan jalankan aplikasi
build.bat

# Atau jalankan secara terpisah
start.bat
```

#### Linux/Mac:
```bash
# Copy environment file
cp env.example .env

# Build dan jalankan
docker-compose up -d --build

# Install dependencies
docker-compose exec app composer install
docker-compose exec app php artisan key:generate
```

### 3. Akses Aplikasi

Buka browser dan kunjungi: http://localhost:8000

## 🐳 Docker Services

- **app** (Port 8000) - Laravel application dengan PHP-FPM dan Nginx
- **db** (Port 5432) - PostgreSQL database
- **redis** (Port 6379) - Redis cache

## 📁 Struktur Project

```
power_project/
├── app/                    # Laravel application code
├── bootstrap/              # Application bootstrap files
├── config/                 # Configuration files
├── database/               # Database migrations dan seeders
├── docker/                 # Docker configuration
│   ├── nginx/             # Nginx configuration
│   ├── php/               # PHP configuration
│   └── supervisor/        # Supervisor configuration
├── public/                 # Web root
├── resources/              # Views, assets, dll
├── routes/                 # Route definitions
├── storage/                # File storage
├── tests/                  # Test files
├── docker-compose.yml      # Docker services configuration
├── Dockerfile             # Docker image definition
└── build.bat              # Build script (Windows)
```

## 🔧 Perintah Berguna

### Docker Commands
```bash
# Lihat status container
docker-compose ps

# Lihat logs
docker-compose logs -f

# Masuk ke container app
docker-compose exec app bash

# Masuk ke database
docker-compose exec db psql -U power_user -d power_project

# Restart services
docker-compose restart

# Stop semua services
docker-compose down

# Stop dan hapus volumes
docker-compose down -v
```

### Laravel Commands
```bash
# Masuk ke container app
docker-compose exec app bash

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear

# Install dependencies
composer install

# Run tests
php artisan test
```

## 🗄️ Database

### Koneksi Database
- **Host**: localhost (dari host) atau db (dari container)
- **Port**: 5432
- **Database**: power_project
- **Username**: power_user
- **Password**: power_password

### Migrasi Database
```bash
# Masuk ke container app
docker-compose exec app bash

# Run migrations
php artisan migrate

# Run seeders
php artisan db:seed
```

## 🎨 Template Integration

Project ini sudah dilengkapi dengan template dashboard yang siap pakai. Template dapat ditemukan di:
- `Dashmin_Light/` - Template light mode
- `Dashmin_Dark/` - Template dark mode
- `Dashmin_Rtl/` - Template RTL
- `Dashmin_Rtl_Dark/` - Template RTL dark mode

## 🔍 Troubleshooting

### Port sudah digunakan
Jika port 8000 sudah digunakan, edit `docker-compose.yml` dan ubah port mapping:
```yaml
ports:
  - "8001:80"  # Ubah 8000 menjadi 8001
```

### Database connection error
Pastikan container database sudah running:
```bash
docker-compose ps
```

### Permission error
```bash
# Set permission untuk storage
docker-compose exec app chmod -R 755 storage bootstrap/cache
```

## 📝 Development

### Menambah Dependencies
```bash
# Masuk ke container
docker-compose exec app bash

# Install package
composer require package-name

# Update composer.lock
composer update
```

### Menambah NPM Dependencies
```bash
# Masuk ke container
docker-compose exec app bash

# Install npm package
npm install package-name
```

## 🚀 Production Deployment

Untuk production, pastikan:
1. Ubah `APP_DEBUG=false` di file `.env`
2. Generate application key: `php artisan key:generate`
3. Optimize application: `php artisan config:cache`
4. Set proper file permissions
5. Konfigurasi web server (Nginx/Apache)

## 📞 Support

Jika mengalami masalah, silakan buat issue di repository atau hubungi tim development.

---

**Power Project** - Dibangun dengan ❤️ menggunakan Laravel 11 dan Docker
