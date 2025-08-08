# Wealthelite Advisors WordPress Theme

## Overview
The **Wealthelite Advisors** theme is a custom-built WordPress theme optimized for modern front-end tooling and developer workflow.  
It integrates **Vite**, **TailwindCSS**, and modern JavaScript (ESM) for a fast and modular development experience.

## Features
- **Modern Build Process** with [Vite](https://vitejs.dev/)
- **TailwindCSS** for utility-first styling
- SCSS support for advanced styling
- WordPress best practices and coding standards
- **Dashicons** support
- Threaded comments support
- Auto-detection of Vite dev server for hot module replacement (HMR)
- Production asset loading via Vite's `manifest.json`
- Cache-busting via `filemtime()`
- Responsive and accessible markup

## Development Requirements
- Node.js 18+
- npm or yarn
- WordPress 6+
- PHP 7.4+

## Installation
1. Place the theme folder `wealthelite-advisors` in your WordPress `wp-content/themes/` directory.
2. Activate the theme in the WordPress admin dashboard under **Appearance > Themes**.

## Development Workflow

### Install Dependencies
```bash
npm install
```

### Start Development Server
```bash
npm run dev
```
This runs Vite's dev server with hot reloading at `localhost:3000`.

### Build for Production
```bash
npm run build
```
This outputs the production-ready files to `/dist` and generates a `manifest.json` for WordPress to enqueue.

## File Structure
```
functions.php/
├── dist/                # Production build output
├── src/
│   ├── js/              # JavaScript source files
│   ├── scss/            # SCSS stylesheets
├── functions.php        # Main theme functions
├── style.css            # Theme header info
├── index.php            # Main template
├── header.php           # Header template
├── footer.php           # Footer template
└── ...
```

## Asset Loading
In **development mode**, the theme connects to Vite's dev server for HMR.  
In **production mode**, assets are loaded from `/dist` using `manifest.json`.

## License
This theme is licensed under the [GPL-2.0+](https://www.gnu.org/licenses/gpl-2.0.html).

---
© functions.php Theme Developers
