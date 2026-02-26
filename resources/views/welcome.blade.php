<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'E-Shop Admin') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
            background-color: #f8f9fa;
            color: #1b1b18;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        .card {
            background: #fff;
            border-radius: 1rem;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
            max-width: 600px;
            width: 100%;
            padding: 2rem 3rem;
        }
        .badge {
            display: inline-block;
            background: #fef3c7;
            color: #92400e;
            font-size: 0.75rem;
            font-weight: 600;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 1.25rem;
        }
        h1 {
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        .subtitle {
            color: #706f6c;
            font-size: 0.95rem;
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        .tech-list {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 2rem;
        }
        .tech-list li {
            background: #f1f5f9;
            color: #334155;
            font-size: 0.8rem;
            font-weight: 500;
            padding: 0.35rem 0.85rem;
            border-radius: 0.375rem;
        }
        .section-title {
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #a1a09a;
            margin-bottom: 0.75rem;
        }
        .features {
            list-style: none;
            margin-bottom: 2rem;
        }
        .features li {
            padding: 0.4rem 0;
            font-size: 0.9rem;
            color: #444;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .features li::before {
            content: '→';
            color: #f59e0b;
            font-weight: 600;
        }
        .cta {
            display: inline-block;
            background: #1b1b18;
            color: #fff;
            padding: 0.65rem 1.5rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
            transition: background 0.2s;
        }
        .cta:hover { background: #333; }
        .cta-outline {
            background: transparent;
            color: #1b1b18;
            border: 1px solid #d4d4d0;
        }
        .cta-outline:hover { background: #f1f5f9; }
        .cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
        }
        .footer {
            margin-top: 2rem;
            text-align: center;
            font-size: 0.75rem;
            color: #a1a09a;
        }

        @media (prefers-color-scheme: dark) {
            body { background-color: #0a0a0a; color: #ededec; }
            .card { background: #161615; box-shadow: 0 4px 24px rgba(0, 0, 0, 0.4); }
            .badge { background: #422006; color: #fbbf24; }
            .subtitle { color: #a1a09a; }
            .tech-list li { background: #1e1e1c; color: #c4c4c0; }
            .features li { color: #c4c4c0; }
            .cta { background: #ededec; color: #1b1b18; }
            .cta:hover { background: #d4d4d0; }
            .cta-outline { color: #ededec; border-color: #3e3e3a; background: transparent; }
            .cta-outline:hover { background: #1e1e1c; }
        }
    </style>
</head>
<body>
    <div class="card">
        <span class="badge">Learning Project</span>
        <h1>🛒 E-Shop Admin Panel</h1>
        <p class="subtitle">
            An e-shop administration panel built with Filament — created with the intent to learn the Filament ecosystem and catch up with the latest Laravel technologies.
        </p>

        <p class="section-title">Built with</p>
        <ul class="tech-list">
            <li>Laravel</li>
            <li>Filament</li>
            <li>PHP 8+</li>
            <li>PHPUnit</li>
            <li>Pint</li>
            <li>Larastan</li>
        </ul>

        <p class="section-title">Features</p>
        <ul class="features">
            <li>Category management with parent–child hierarchy</li>
            <li>Products with images and variant support</li>
            <li>Flexible attribute and attribute-value system</li>
            <li>Multi-outlet stock tracking for products &amp; variants</li>
        </ul>

        <div class="cta-group">
            @if (Route::has('filament.admin.auth.login'))
                <a href="{{ route('filament.admin.auth.login') }}" class="cta">Go to Admin Panel →</a>
            @endif
        </div>

        <div class="footer">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} · PHP v{{ PHP_VERSION }}
        </div>
    </div>
</body>
</html>
