# ERP Setup Guide

## Quick Start

### 1. Install Dependencies
```bash
composer install
npm install
```

### 2. Configure Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 3. Setup Database

For SQLite (default):
```bash
touch database/database.sqlite
php artisan migrate --seed
```

For MySQL:
```bash
# Update .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=erp
DB_USERNAME=root
DB_PASSWORD=your_password

# Run migrations
php artisan migrate --seed
```

### 4. Build Frontend Assets
```bash
npm run build
```

### 5. Start Development Server
```bash
php artisan serve
```

Visit http://localhost:8000

## Default Login Credentials

| Role | Email | Password | System Role |
|------|-------|----------|-------------|
| Admin | admin@example.com | password | super-admin |
| Manager | manager@example.com | password | manager |
| Employee | employee@example.com | password | employee |

## Database Structure

### Organizations
Top-level company entities with contact information.

### Org Units
Organizational units like HQ, branches, offices with hierarchical relationships.

### Departments
Departments within org units, can have parent-child relationships and managers.

### Org Roles
Organizational roles (CEO, COO, etc.) separate from system permissions.

### Users
System users linked to organizations, org units, departments, and org roles.

### Permissions & Roles (Spatie)
System-level RBAC for fine-grained access control.

## Testing

Run all tests:
```bash
php artisan test
```

Run specific test:
```bash
php artisan test --filter=OrganizationalStructureTest
```

## Development Tips

### Clear Cache
```bash
php artisan optimize:clear
```

### Reset Database
```bash
php artisan migrate:fresh --seed
```

### Generate IDE Helper
```bash
composer require --dev barryvdh/laravel-ide-helper
php artisan ide-helper:generate
php artisan ide-helper:models
```

## Architecture

### Models
- `Organization` - Top-level organizations
- `OrgUnit` - Hierarchical organizational units
- `Department` - Departments with managers
- `OrgRole` - Organizational roles (separate from RBAC)
- `User` - System users with Spatie HasRoles trait

### Relationships
- Organizations → Org Units (1:N)
- Organizations → Org Roles (1:N)
- Org Units → Departments (1:N)
- Org Units → Org Units (parent-child)
- Departments → Departments (parent-child)
- Users → Organization, OrgUnit, Department, OrgRole (N:1)

### Permissions
All managed through Spatie Laravel Permission:
- Roles: super-admin, manager, employee
- Permissions: view/create/edit/delete for users, organizations, departments, roles

## Future Extensions

The system is designed to be extended with:
- HR Management (recruitment, attendance, payroll)
- Finance & Accounting
- Inventory Management
- Project Management
- CRM
- Workflow Automation
- AI-powered features
- Multi-tenancy (if needed)

## Support

For issues or questions, please refer to:
- Laravel Documentation: https://laravel.com/docs
- Spatie Permission: https://spatie.be/docs/laravel-permission
- Laravel Breeze: https://laravel.com/docs/starter-kits#breeze
