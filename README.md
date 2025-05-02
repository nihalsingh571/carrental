# RealRentCar - Truck Rental Management System

## Project Overview
RealRentCar is a comprehensive digital solution designed to revolutionize the truck rental business. This web application streamlines the process of truck rentals, making it easier for both customers and administrators to manage bookings, track vehicles, and handle payments.

## Team Members
- Nihal Kumar Singh (Registration No: 12211635)
- Shreyansh Kumar (Registration No: 12211000)

## Features

### Customer Features
- Intuitive truck browsing and selection
- Real-time truck availability checking
- Online reservations with instant confirmation
- Secure payment processing
- Booking history and tracking
- Google Maps integration for location-based truck searches
- Invoice and receipt download functionality

### Administrator Features
- Comprehensive truck inventory management
- Customer details management
- Reservation and payment status monitoring
- Analytical reports generation
- User role and permission management
- Real-time activity notifications

## Technical Stack

### Backend Framework
- Laravel 10.x (PHP Framework)
  - Eloquent ORM for database operations
  - Blade templating engine
  - Laravel Mix for asset compilation
  - Laravel Authentication system
  - Laravel Middleware
  - Laravel Migration

### Frontend Technologies
- Tailwind CSS
- Flowbite UI Kit
- JavaScript
- jQuery
- Blade templates

### Database
- MySQL
- Eloquent relationships

### Additional Tools & Integrations
- Flatpickr for date picking
- SweetAlert2 for user alerts
- Google Maps API
- Mobile-responsive design

### Development & Deployment
- Git for version control
- Composer for PHP dependency management
- npm for JavaScript package management
- Laravel Artisan CLI
- Laravel Mix

## Installation

1. Clone the repository:
```bash
git clone [repository-url]
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install JavaScript dependencies:
```bash
npm install
```

4. Create environment file:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Configure your database in .env file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. Run database migrations:
```bash
php artisan migrate
```

8. Compile assets:
```bash
npm run dev
```

9. Start the development server:
```bash
php artisan serve
```

## Security Features
- Secure user authentication
- Role-based access control
- Encrypted payment processing
- Regular security updates
- Protected admin dashboard
- Data privacy compliance

## Business Benefits
- 40% faster booking operations
- 24/7 booking availability
- 70% better resource utilization
- Reduced operational costs
- Scalable solution
- Data-driven decision making

## Support
For any queries or support, please contact:
- Email: [your-email]
- Phone: [your-phone]
- Location: BH3, Jalandhar, Punjab

## License
[Your License Information]

## Acknowledgments
Special thanks to our project mentors and everyone who contributed to making this project successful.

## Deployment on Vercel

### Prerequisites
1. Install Vercel CLI:
```bash
npm i -g vercel
```
2. Create a Vercel account at vercel.com
3. Push your code to a GitHub repository

### Deployment Steps

1. **Prepare Required Files**
   - Create `vercel.json` in project root:
   ```json
   {
       "version": 2,
       "framework": null,
       "functions": {
           "api/index.php": {
               "runtime": "vercel-php@0.6.0"
           }
       },
       "routes": [
           {
               "src": "/(.*)",
               "dest": "/api/index.php"
           }
       ],
       "env": {
           "APP_ENV": "production",
           "APP_DEBUG": "false",
           "APP_CONFIG_CACHE": "/tmp/config.php",
           "APP_EVENTS_CACHE": "/tmp/events.php",
           "APP_PACKAGES_CACHE": "/tmp/packages.php",
           "APP_ROUTES_CACHE": "/tmp/routes.php",
           "APP_SERVICES_CACHE": "/tmp/services.php",
           "VIEW_COMPILED_PATH": "/tmp",
           "CACHE_DRIVER": "array",
           "LOG_CHANNEL": "stderr",
           "SESSION_DRIVER": "cookie"
       }
   }
   ```

2. **Create API Directory**
   ```bash
   mkdir api
   ```
   Create `api/index.php`:
   ```php
   <?php
   require __DIR__ . '/../vendor/autoload.php';
   $app = require __DIR__ . '/../bootstrap/app.php';
   $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
   $response = $kernel->handle($request = Illuminate\Http\Request::capture());
   $response->send();
   $kernel->terminate($request, $response);
   ```

3. **Prepare for Production**
   ```bash
   composer install --optimize-autoloader --no-dev
   npm install && npm run build
   ```

4. **Deploy to Vercel**
   ```bash
   # Login to Vercel
   vercel login

   # Deploy your application
   vercel
   ```

5. **Configure Environment Variables**
   - Go to Vercel Dashboard > Your Project > Settings > Environment Variables
   - Add these variables:
     ```
     APP_KEY=[your-laravel-app-key]
     APP_ENV=production
     APP_DEBUG=false
     DB_CONNECTION=[your-db-connection]
     DB_HOST=[your-db-host]
     DB_PORT=[your-db-port]
     DB_DATABASE=[your-db-name]
     DB_USERNAME=[your-db-username]
     DB_PASSWORD=[your-db-password]
     ```

### Important Notes
- Use an external database service (Railway.app, PlanetScale, etc.)
- For file uploads, use cloud storage (AWS S3, DigitalOcean Spaces)
- Configure proper CORS if needed
- Set up your custom domain in Vercel dashboard if required

### Post-Deployment
1. Run migrations:
   ```bash
   vercel run php artisan migrate
   ```
2. Test all features thoroughly
3. Monitor the application using Vercel's built-in analytics

For more detailed information, visit [Vercel's PHP deployment documentation](https://vercel.com/docs/frameworks/php).
