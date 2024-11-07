# Simple Note-Taking App

A lightweight note-taking application built with PHP, MySQL, and PDO, designed with an MVC architecture similar to Laravel. This app allows users to securely create, edit, and delete notes, with a structure that promotes code clarity and maintainability.

---

## Table of Contents

1. [Features](#features)
2. [Technologies Used](#technologies-used)
3. [Getting Started](#getting-started)
4. [Installation](#installation)
5. [Usage](#usage)
6. [Project Structure](#project-structure)
7. [Security Measures](#security-measures)
8. [Future Improvements](#future-improvements)

---

## Features

- **Add, Edit, Delete Notes**: Basic CRUD functionality for managing notes.
- **MVC Structure**: Organized into Model-View-Controller for clear separation of responsibilities.
- **Secure Database Access**: Uses PDO and prepared statements to prevent SQL injection.

---

## Technologies Used

- **PHP**
- **MySQL**
- **PDO** for secure database interaction
- **HTML/CSS/** for a simple user interface

---

## Getting Started

To run this project locally, you’ll need a local server setup (e.g., XAMPP, WAMP, or LAMP) with PHP and MySQL installed.

---

## Installation

1. **Clone the Repository**:

   ```bash
   git clone https://github.com/heshamabdelhamid/note-taking-app.git
   ```

2. **Navigate to the Project Folder**:

   ```bash
   cd note-taking-app
   ```

3. **Create Database**:

   - Open MySQL and create a new database (e.g., `notes_app`).
   - Import the provided SQL file (`database.sql`) to set up the required tables.

4. **Configure Database**:

   - Update the `config/database.php` file with your database credentials.

5. **Run the Application**:
   - Start your local server and open the application in your browser.

---

## Usage

1. Open the app in a web browser.
2. Use the main interface to add, edit, or delete notes.

---

## Project Structure

```plaintext
note-taking-app/
│
├── config/
│   └── database.php       # Database configuration
│
├── controllers/
│   └── NoteController.php  # Handles requests and business logic
│
├── models/
│   └── Note.php            # Manages database interactions
│
├── views/
│   ├── index.php           # Main UI for listing notes
│   ├── create.php          # UI for adding notes
│   └── edit.php            # UI for editing notes
│
└── public/
    └── index.php           # Entry point for the app
```

---

## Security Measures

- **PDO & Prepared Statements**: Uses prepared statements to protect against SQL injection.
- **MVC Architecture**: Separates logic, data, and UI for better security and maintainability.

---

## Future Improvements

- **User Authentication**: Add login and registration functionality for user-specific notes.
- **Enhanced UI/UX**: Improve styling for a more modern and responsive interface.
