# Filament E-Shop Admin

An e-shop administration panel built with [Laravel 12](https://laravel.com), [Filament 5](https://filamentphp.com), and [PostgreSQL](https://www.postgresql.org).

## Tech Stack

- **PHP** 8.2+
- **Laravel** 12
- **Filament** 5 (admin panel)
- **PostgreSQL** 16 (via Docker)

## Features

- **Categories** — hierarchical product categories with parent/child support
- **Products** — product management with category assignment and attribute associations
- **Product Images** — image management per product
- **Attributes** — configurable product attributes (e.g. Color, Size, Material)
- **Attribute Values** — values for each attribute (e.g. Red, Blue, XL)
- **Variants** — product variants with attribute associations
- **Outlets** — store/warehouse outlet management
- **Stocks** — polymorphic stock tracking per outlet for products and variants

## Prerequisites

- PHP 8.2+
- Composer
- Node.js & npm
- Docker & Docker Compose (for PostgreSQL)

## Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd filament-eshop-admin
   ```

2. **Start the database**
   ```bash
   docker compose up -d
   ```

3. **Run the setup script**
   ```bash
   composer setup
   ```
   This will install Composer & npm dependencies, generate the app key, run migrations, and build frontend assets.

4. **Seed the database** (optional)
   ```bash
   php artisan db:seed
   ```
   Seeds categories, attributes with values, outlets, products with images, variants, and stock entries.
### Default Admin Credentials
Available after seeding
```bash
admin@email.com
password
```
## Development

Start all development services (server, queue, logs, Vite) in one command:

```bash
composer dev
```

## Code Quality

- **PHPStan** — static analysis
  ```bash
  composer phpstan
  ```

- **Pint** — code formatting
  ```bash
  composer pint
  ```
