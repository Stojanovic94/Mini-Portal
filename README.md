# Mini Portal for Academic Staff

## Overview
This project is a simple web portal designed to allow academic staff to manage exam activities, including scheduling, viewing, and canceling future exams or assignments. The portal uses PHP for backend functionality, MySQL for data storage, and basic HTML/CSS for the frontend. It includes user authentication, registration, and a dashboard for managing scheduled academic activities like exams, lab defenses, and assignments.

## Features
- **User Authentication**: Allows users to log in with a username and password and sign up to create a new account.
  - Passwords are securely hashed using PHP’s `password_hash()` function.
  - Users can create a new account by providing personal details (full name, birth date, title).
  
- **User Dashboard**:
  - After logging in, users will see a personalized welcome message (e.g., “Welcome, Milena!”).
  - A table displays all upcoming and past activities the logged-in user is responsible for, including:
    - ID of the activity
    - Subject name
    - Study program abbreviation (e.g., SRT, KOT, ITS, MKT)
    - Type of activity (e.g., midterm, lab defense, written exam)
    - Date and time of the activity
    - Number of enrolled students
  
- **Add New Activity**: Users can add new academic activities (e.g., exams, lab defenses) by selecting options from dropdown menus (study program, activity type) and entering necessary details (subject name, date, time, number of students).
  
- **Delete Activity**: Users can delete activities by entering the activity ID. Activities that have already occurred cannot be deleted, but future activities can be canceled.

- **Responsive Design**: The design is clean, minimal, and responsive, with the following key UI elements:
  - Academy logo centered on the page.
  - Username and password fields for logging in.
  - Sign-up button for creating a new account.
  - A table to display activity details.
  - Dropdown menus for selecting study programs and activity types.
  - Buttons to confirm or cancel actions.

## Technologies Used
- **PHP**: For backend logic, user authentication, handling form submissions, and database interactions.
- **MySQL**: For storing user data, academic activities, and staff information.
- **HTML/CSS**: For creating the structure of the portal and styling the layout.
- **JavaScript**: For frontend validation and interactivity.
- **DatePicker**: For selecting dates when creating or updating activities.

## Setup and Installation

### Prerequisites
- PHP 7 or higher.
- MySQL database.
- Apache or Nginx web server.
- Composer for dependency management (optional).
