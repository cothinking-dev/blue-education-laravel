# Blue Education — Website Rebuild

**Client:** Blue Education
**Agency:** [Your Agency Name]
**Started:** February 2026

---

## Project Overview

A full rebuild of the Blue Education marketing website — a 24-page site covering education pathways, migration services, and student support. Built on Laravel 12 with Tailwind CSS 4, deployed to a Hetzner VPS. The goal is a fast, maintainable site that clearly communicates Blue Education's services to prospective students.

---

## Project Phases

| Phase | Description | Status |
|-------|-------------|--------|
| 1 | Discovery & Sitemap | ✅ Complete |
| 2 | Content (Copywriting) | ✅ Complete (24/24 pages finalised) |
| 3 | Design & Development | ⏳ Pending |
| 4 | Review & QA | ⏳ Pending |
| 5 | Deployment | ⏳ Pending |

---

## Scope of Work

All 24 pages in scope for this project:

| # | Page | Content Status | Notes |
|---|------|----------------|-------|
| 01 | Home | ✅ Finalised | |
| 02 | Education Overview | ✅ Finalised | |
| 03 | School Programs | ✅ Finalised | |
| 04 | English & Foundation | ✅ Finalised | |
| 05 | VET & TAFE | ✅ Finalised | |
| 06 | University Degrees | ✅ Finalised | |
| 07 | Migration Overview | ✅ Finalised | |
| 08 | Student Visas | ✅ Finalised | |
| 09 | Graduate & Work Visas | ✅ Finalised | |
| 10 | Permanent Residence | ✅ Finalised | |
| 11 | Career Services | ✅ Finalised | |
| 12 | Student Support | ✅ Finalised | |
| 13 | Buddy Programme | ✅ Finalised | |
| 14 | Study Tours | ✅ Finalised | |
| 15 | SCSA Associate | ✅ Finalised | |
| 16 | Why Australia | ✅ Finalised | |
| 17 | About Us | ✅ Finalised | |
| 18 | Our Team | ✅ Finalised | |
| 19 | Our Partners | ✅ Finalised | |
| 20 | Blog | ✅ Finalised | |
| 21 | FAQ | ✅ Finalised | |
| 22 | Admission Requirements | ✅ Finalised | |
| 23 | Fees & Investment | ✅ Finalised | |
| 24 | Contact | ✅ Finalised | |

---

## Tech Stack

| Layer | Technology |
|-------|-----------|
| Framework | Laravel 12 |
| Language | PHP 8.5 |
| Frontend | Tailwind CSS 4, Vite |
| Dev Database | SQLite |
| Production Database | TBD |
| Hosting | Hetzner VPS |
| Deployment | Deployer (to be configured) |

---

## Getting Started

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
composer run dev
```

The `composer run dev` command starts the Laravel dev server, queue worker, and Vite in parallel.

---

## Deployment

Deployment is via [Deployer](https://deployer.org/) to a Hetzner VPS. Configuration is pending Phase 5.
