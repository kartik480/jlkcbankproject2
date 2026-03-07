# Deploying to BigRock (Laravel)

This guide helps you deploy the JLKC Bank Laravel project on BigRock so your site is served from the correct document root for live access.

## Folder structure on BigRock

BigRock uses **public_html** as the web root. Laravel needs its **app, bootstrap, config, etc.** outside the web root for security. Use this layout:

```
/home/your_username/
├── app/
├── bootstrap/
├── config/
├── database/
├── resources/
├── routes/
├── storage/
├── vendor/
├── .env
├── artisan
├── composer.json
├── composer.lock
└── public_html/          ← Web root (htdocs contents go here)
    ├── index.php
    ├── .htaccess
    ├── css/
    ├── images/
    ├── videos/
    ├── favicon.ico
    └── robots.txt
```

## Step 1: Upload Laravel app (outside public_html)

Using File Manager or FTP, upload the **full project** to your home directory so that these folders and files sit **next to** `public_html` (not inside it):

- `app/`
- `bootstrap/`
- `config/`
- `database/`
- `resources/`
- `routes/`
- `storage/`
- `vendor/`
- `artisan`
- `composer.json`
- `composer.lock`
- `.env` (create/upload after first deploy if needed)

So you should see paths like: `/home/your_username/app/`, `/home/your_username/bootstrap/`, etc.

## Step 2: Upload htdocs into public_html

Upload **everything inside the `htdocs` folder** into **public_html**:

- `htdocs/index.php` → `public_html/index.php`
- `htdocs/.htaccess` → `public_html/.htaccess`
- `htdocs/css/` → `public_html/css/`
- `htdocs/images/` → `public_html/images/`
- `htdocs/videos/` → `public_html/videos/`
- `htdocs/favicon.ico` → `public_html/favicon.ico`
- `htdocs/robots.txt` → `public_html/robots.txt`

Do **not** put the rest of Laravel (app, vendor, etc.) inside public_html.

## Step 3: Environment and permissions

1. **.env**  
   Ensure `.env` exists in the project root (same level as `app/`, `bootstrap/`), with correct:
   - `APP_URL=https://yourdomain.com`
   - `APP_ENV=production`
   - `APP_DEBUG=false`
   - Database and other config as needed.

2. **Storage**  
   Make `storage` and `bootstrap/cache` writable (e.g. 755 or 775). In cPanel/File Manager you can set permissions for:
   - `storage/`
   - `bootstrap/cache/`

## Step 4: Sync htdocs after changes

Whenever you change assets (CSS, images, videos) or `public/index.php` / `public/.htaccess`:

1. Update your local `public/` folder.
2. Copy updated files from `public/` into the project’s `htdocs/` folder (or run the same copy commands you used initially).
3. Re-upload only the changed files from `htdocs/` to `public_html/` on BigRock.

You can also add a small script (e.g. `sync-htdocs.bat` or `sync-htdocs.sh`) that copies `public/*` into `htdocs/` so you always deploy from one place.

## If you cannot use a folder outside public_html

Some plans only allow files inside **public_html**. In that case:

1. Upload the **entire** Laravel project (including `app/`, `vendor/`, etc.) **inside** `public_html`.
2. Move the **contents** of `public/` to the **root** of `public_html` (so `index.php`, `.htaccess`, `css/`, `images/`, `videos/` are in `public_html/`).
3. Use an `index.php` that loads Laravel from the same directory, for example:

   - In `public_html/index.php`, replace:
     - `__DIR__.'/../vendor/autoload.php'` with `__DIR__.'/vendor/autoload.php'`
     - `__DIR__.'/../storage/...'` with `__DIR__.'/storage/...'`
     - `__DIR__.'/../bootstrap/app.php'` with `__DIR__.'/bootstrap/app.php'`

Then your Laravel root is `public_html/` and all URLs still work from the same root.

---

**Summary:** For best security and clean URLs, keep Laravel (app, vendor, etc.) **outside** `public_html` and put only the contents of **htdocs** (index.php, .htaccess, css, images, videos) **inside** `public_html`. The `htdocs` folder in this project is your “web root” package for BigRock.
