# Visit Saudi – Web Development Project

## Project Overview

Visit Saudi is a team-based academic web development project created as part of the Application Development (IS337) course at Imam Mohammad Ibn Saud Islamic University.

The project is inspired by Saudi Vision 2030 and aims to introduce Saudi Arabia's tourism destinations through an interactive web application.

It demonstrates the integration of front-end development, back-end programming, database management, and chatbot functionality.

## Key Features

- **Tourism Destinations:** Explore Saudi cities, attractions, and hotel information.
- **User Authentication:** User registration, login, logout, and session management.
- **Hotel Booking Form:** Submit booking information with input and date validation.
- **Visa Application Form:** Select a visa type and submit a simulated application.
- **Feedback System:** Submit ratings and comments and view feedback stored in the database.
- **AI Chatbot:** An embedded Dialogflow chatbot providing information about Saudi Vision 2030, tourism, and related services.
- **Interactive Interface:** Image galleries, slideshows, navigation menus, and form validation.

## Technologies Used

| Category | Technologies |
|---|---|
| Front-End | HTML5, CSS3, JavaScript |
| Back-End | PHP |
| Database | MySQL |
| Database Connectivity | PDO |
| Development Environment | XAMPP, Apache |
| Chatbot Integration | Google Dialogflow |

## Database

The application uses a MySQL database named `vision2030_db` with two main tables:

- **users:** Stores registered user information and password hashes.
- **feedback:** Stores user ratings and comments, linked to registered users through a foreign key.

The database structure is available in `config/vision2030_db.sql`.

For privacy reasons, the published SQL file excludes the original user records.

## Installation and Setup

1. Install XAMPP.
2. Download or clone this repository.
3. Place the project folder inside `C:\xampp\htdocs`.
4. Start Apache and MySQL from the XAMPP Control Panel.
5. Open phpMyAdmin at `http://localhost/phpmyadmin`.
6. Create a database named `vision2030_db`.
7. Import `config/vision2030_db.sql`.
8. Verify the database connection settings in `config/db.php`.
9. Open the project in your browser:

   `http://localhost/Web-Development-Project/`

**Note:** The chatbot uses an embedded Google Dialogflow integration and may require an active Dialogflow configuration. Private service-account credentials are not included in this repository.

The hotel booking and visa application pages are academic demonstrations and are not connected to official booking or government visa systems.


## Project Documentation

[View the Full Project Report](Visit-Saudi-Project-Report-ShahadAlnasser.pdf)

The report includes the project design, implementation details, database documentation, and interface screenshots.

## Academic Information

- **University:** Imam Mohammad Ibn Saud Islamic University
- **College:** College of Computer and Information Sciences
- **Department:** Information Systems
- **Course:** Application Development (IS337)
- **Academic Year:** 2025–2026
- **Project Type:** Team-Based Academic Project

---

*Developed as an academic project inspired by Saudi Vision 2030.*
