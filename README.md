# Expense Tracker

### A simple, lightweight web application built with core PHP and MySQL to easily log, categorize, and track personal financial expenses.

Expense Tracker is a session-authenticated, multi-user web app for logging and categorizing personal expenses from a local dashboard. Each account is isolated — passwords are hashed with password_hash() / password_verify(), and every database query is scoped to the logged-in user's ID, so one user's data is never visible to another. It's built with core PHP and MySQL, containerized locally with DDEV, and covers the full lifecycle of an expense: adding it, categorizing it, attaching a receipt, marking it recurring, budgeting against it, and exporting it.

---

## 🚀 Features

- **Log Expenses:** Add an amount, date, category, and notes. Categories can be created inline or picked from a dropdown, both resolving to the same category_id, with duplicates blocked by a unique constraint.
- **File Uploads:** Attach a receipt or bill to any expense. Uploads are checked against a MIME type allow-list (JPEG, PNG, PDF) and a max size before being saved with move_uploaded_file().
- **Recurring Expenses:** Flag an expense as recurring so it's automatically counted in every future month's totals.
- **Budgets:** Set a monthly budget per category and track spend-vs-budget, with totals computed via a LEFT JOIN across matching and recurring expenses.
- **Dynamic Summaries:** See monthly spending grouped by category, plus a month-over-month percentage change.
- **CSV Export:** Export expenses in a chosen date range, streamed directly to a CSV via fputcsv().
- **Category Management:** Rename or delete categories; deleting one cascades to its expenses and budgets via ON DELETE CASCADE.
- **Full CRUD Functionality:** Create, read, update, and delete expenses end-to-end, with every ID from a form or URL validated with ctype_digit() before it reaches a query.
- **Secure Backend:** All database access goes through PDO prepared statements (executeQuery()), with PDO::ERRMODE_EXCEPTION set so failures throw instead of failing silently.

---

## 🛠️ Built With

- **Language:** PHP 8.3.6
- **Database:** MySQL 8.0.46
- **Local Environment:** DDEV 1.25.2

---

## 📋 Prerequisites

To run this application locally, your system must have Docker and DDEV installed. Follow the links below for easy, step-by-step setup guides depending on your operating system:

1. **Docker CE / Container Engine**
   - Linux Users: [Official Docker Installation Guide for Linux](https://docs.docker.com/engine/install/)
   - Mac/Windows Users: [Docker Desktop Installation Guide](https://docs.docker.com/desktop/)
2. **DDEV CLI**
   - Follow the [Official DDEV Installation Script & Guide](https://ddev.readthedocs.io/en/stable/users/install/ddev-installation/) for all platforms.

---

## ⚙️ Setup Instructions 

Follow these simple steps to clone the repository, initialize the containers, and run the application on your computer:

### 1. Clone the Repository
Open your terminal and clone this repository down to your local development workspace:
```bash
git clone https://github.com/tamuliB0/expense-tracker.git
cd expense-tracker
```
### 2. Initialize the DDEV Environment
Set up the container configuration directly within the repository root directory:
```bash
ddev config --project-type=php --docroot=public
```

### 3. Start the Environment
Boot up the local webserver and database containers:
```bash
ddev start
```

### 4. Import the Database Schema
Populate your local MySQL instance using the pre-configured database schema file:
```bash
ddev import-db --file=schema.sql
```
## 💻 Usage

### 🏠 Local Development
Once your DDEV containers are fully up and running locally, you can access your local development instance in your browser:

* **Local URL:** `https://expense-tracker.ddev.site`

---

### 🌐 Live Demo
You can try out the live production build of the application here:
👉 **[Live Demo Dashboard](http://www.bhardwaj.lovestoblog.com/expense-tracker/)**
