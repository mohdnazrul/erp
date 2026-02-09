# Laravel ERP Starter

A scalable ERP platform built on Laravel 11, designed for organisational hierarchy, role-based access control, and future AI-powered automation.

## Features

- **Authentication**: Built with Laravel Breeze for secure user authentication
- **Organisation Hierarchy**: 
  - Organisations
  - Organisational Units (HQ, Branches, etc.)
  - Departments
- **Role Management**: 
  - System RBAC with Spatie Laravel Permission
  - Organisational Roles (separate from system roles)
- **Sample Data**: Comes with seeders for a complete sample company structure
- **Admin Dashboard**: Basic dashboard placeholder ready for extension
- **Extensible**: Clean, well-structured code ready for AI automation integration

## Installation

1. Clone the repository:
```bash
git clone https://github.com/mohdnazrul/erp.git
cd erp
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Configure environment:
```bash
cp .env.example .env
php artisan key:generate
```

4. Set up database in `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=erp
DB_USERNAME=root
DB_PASSWORD=
```

5. Run migrations and seeders:
```bash
php artisan migrate --seed
```

6. Build frontend assets:
```bash
npm run build
```

7. Start the development server:
```bash
php artisan serve
```

Visit `http://localhost:8000` to access the application.

## Default Credentials

After seeding, you can login with:
- **Admin**: admin@example.com / password
- **Manager**: manager@example.com / password
- **Employee**: employee@example.com / password

## Structure

### Models
- `User` - System users
- `Organization` - Top-level organisations
- `OrgUnit` - Organisational units (HQ, branches)
- `Department` - Departments within org units
- `OrgRole` - Organisational roles (separate from system permissions)

### Permissions (Spatie)
System-level permissions are managed via Spatie Laravel Permission package for fine-grained access control.

## Development

This starter is designed to be extended with:
- Additional modules (HR, Finance, Inventory, etc.)
- Workflow automation
- AI-powered features
- Multi-language support
- Advanced reporting

## License

Open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
