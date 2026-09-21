# Johnny Dev

Custom WordPress portfolio theme built from scratch for a Full-Stack Web Developer.

The project focuses on clean WordPress development, modular frontend architecture, responsive design, accessibility and maintainable code without relying on page builders.

## Overview

Johnny Dev is a custom one-page developer portfolio built as a standalone WordPress theme.

The website presents professional experience, services, technology stack and selected development projects while also serving as a practical example of custom WordPress theme development.

The theme was developed without Elementor or other page builders.

## Tech Stack

### WordPress & Backend

* WordPress
* PHP

### Frontend

* HTML5
* SCSS
* TypeScript
* JavaScript

### Tooling

* Sass
* esbuild
* npm
* Git

## Features

* Custom WordPress theme built from scratch
* Modular PHP template structure
* Responsive one-page layout
* Mobile navigation
* TypeScript-based frontend interactions
* Modular SCSS architecture
* Scroll reveal animations
* Active navigation state
* Sticky responsive header
* Smooth back-to-top navigation
* Keyboard-accessible navigation
* Reduced-motion support
* SEO metadata
* Open Graph metadata
* Asset cache busting
* Responsive project presentation
* No page builder dependencies

## Project Structure

```text
johnny-dev/
├── wp-content/
│   └── themes/
│       └── johnny-dev/
│           ├── assets/
│           │   ├── css/
│           │   │   └── main.css
│           │   ├── js/
│           │   │   └── main.js
│           │   ├── scss/
│           │   │   ├── abstracts/
│           │   │   ├── base/
│           │   │   ├── components/
│           │   │   ├── layout/
│           │   │   ├── sections/
│           │   │   └── main.scss
│           │   └── ts/
│           │       ├── modules/
│           │       └── main.ts
│           ├── template-parts/
│           ├── footer.php
│           ├── front-page.php
│           ├── functions.php
│           ├── header.php
│           ├── index.php
│           ├── package.json
│           ├── style.css
│           └── tsconfig.json
├── .gitignore
└── README.md
```

## Frontend Architecture

The theme separates source files from generated assets.

SCSS source files are compiled into:

`assets/css/main.css`

TypeScript modules are bundled with esbuild into:

`assets/js/main.js`

WordPress loads only the compiled frontend assets.

### TypeScript Modules

Frontend behavior is divided into small independent modules, including:

* mobile navigation
* active section navigation
* header scroll state
* scroll reveal animations
* back-to-top behavior

The modules are initialized from:

`assets/ts/main.ts`

## Development

Install dependencies from the theme directory:

```bash
npm install
```

Compile SCSS:

```bash
npm run sass
```

Watch SCSS during development:

```bash
npm run sass:watch
```

Check TypeScript:

```bash
npm run ts:check
```

Build TypeScript:

```bash
npm run ts
```

## Production Build

Compile and minify the frontend assets:

```bash
npm run sass:build
npm run ts:build
```

## Local Development

The project was developed locally using XAMPP and WordPress.

A local WordPress installation is required to run the complete project.

After installing WordPress, place the custom theme in:

`wp-content/themes/johnny-dev`

Then activate **Johnny Dev** from the WordPress admin panel.

## Accessibility

The theme includes several accessibility-focused improvements:

* semantic HTML structure
* keyboard-accessible mobile navigation
* visible focus states
* skip-to-content navigation
* Escape key support for the mobile menu
* appropriate ARIA attributes
* decorative elements hidden from assistive technology
* `prefers-reduced-motion` support

## SEO

The theme includes lightweight built-in SEO functionality for the portfolio homepage:

* WordPress `title-tag` support
* meta description
* Open Graph metadata
* social sharing metadata

A dedicated SEO plugin is not required for the current one-page portfolio implementation.

## Performance

The project avoids unnecessary frontend dependencies and page builders.

CSS and JavaScript are compiled locally and loaded as dedicated theme assets. Asset versions are generated using file modification timestamps to prevent stale browser caching after deployments.

## Author

**Jan Król**
Full-Stack Web Developer

GitHub: [traetor](https://github.com/traetor)

## License

This project is a personal portfolio and its source code is provided for demonstration purposes.
