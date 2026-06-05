# Expense Tracker

### A simple, lightweight web application built with core PHP and MySQL to easily log, categorize, and track personal financial expenses.

Expense Tracker helps users keep tabs on their daily spending habits from a centralized local dashboard. It features secure database CRUD operations, user input handling, support for receipt/bill file uploads, and a simple user interface, and is ready to use with a local DDEV development setup.

---

## 🚀 Features

- **Log Expenses:** Add records with an amount, specific date, category, and descriptive notes.
- **File Uploads:** Securely attach images or documents (like bills or receipts) directly to an expense entry.
- **Dynamic Summaries:** Automatically calculates and displays spending insights to help monitor budgets.
- **Full CRUD Functionality:** Seamlessly create, read, update, and delete expense entries from the interface.
- **Secure Backend:** Implements safe database querying practices to protect data integrity locally.

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
git clone [https://github.com/tamuliB0/expense-tracker.git](https://github.com/tamuliB0/expense-tracker.git)
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
