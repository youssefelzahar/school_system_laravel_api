# School Management System API

This repository contains a **School Management System API** built using Laravel. The system provides endpoints to manage students, teachers, classes, attendance, and other school-related functionalities.

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [API Endpoints](#api-endpoints)
- [Database Schema](#database-schema)
- [Contributing](#contributing)
- [License](#license)

## Overview

The **School Management System API** is designed to streamline operations in schools by providing a robust and scalable backend for managing:

- Student records
- Teacher assignments
- Class schedules
- Attendance tracking
- Academic performance

## Features

- **Student Management:**
  - Add, edit, and delete student records.
  - Assign students to classes.

- **Teacher Management:**
  - Add, edit, and delete teacher profiles.
  - Assign teachers to subjects and classes.

- **Class Management:**
  - Create and manage classes.
  - Assign schedules and subjects.

- **Attendance Tracking:**
  - Record daily attendance for students and teachers.
  - Generate attendance reports.

- **Academic Performance:**
  - Manage and track student grades and performance.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/youssefelzahar/school_system_laravel_api.git
   ```

2. Navigate to the project directory:
   ```bash
   cd school_system_laravel_api
   ```

3. Install dependencies using Composer:
   ```bash
   composer install
   ```

4. Install Node.js dependencies:
   ```bash
   npm install
   ```

5. Set up the environment variables:
   - Copy the `.env.example` file to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Configure your database and other environment variables in the `.env` file.

6. Run the migrations and seed the database:
   ```bash
   php artisan migrate --seed
   ```

7. Start the development server:
   ```bash
   php artisan serve
   ```

## Usage

- Use an API testing tool (e.g., Postman) to interact with the endpoints.
- Authenticate using API tokens where required.
- Manage school data via the available API endpoints.

## API Endpoints

### Authentication
- `POST /api/login`: Authenticate a user and obtain an API token.
- `POST /api/register`: Register a new user.

### Students
- `GET /api/students`: List all students.
- `POST /api/students`: Add a new student.
- `PUT /api/students/{id}`: Update student details.
- `DELETE /api/students/{id}`: Delete a student.

### Teachers
- `GET /api/teachers`: List all teachers.
- `POST /api/teachers`: Add a new teacher.
- `PUT /api/teachers/{id}`: Update teacher details.
- `DELETE /api/teachers/{id}`: Delete a teacher.

### Classes
- `GET /api/classes`: List all classes.
- `POST /api/classes`: Create a new class.
- `PUT /api/classes/{id}`: Update class details.
- `DELETE /api/classes/{id}`: Delete a class.

### Attendance
- `POST /api/attendance`: Record attendance.
- `GET /api/attendance/reports`: Generate attendance reports.

### More Endpoints
Explore the complete list of endpoints in the API documentation (if available).

## Database Schema

Core tables include:

- **Students:** Holds student details such as name, age, and class.
- **Teachers:** Stores teacher profiles and subjects.
- **Classes:** Manages class schedules and subjects.
- **Attendance:** Tracks daily attendance for students and teachers.
- **Grades:** Records academic performance for students.

## Contributing

Contributions are welcome! Follow these steps:

1. Fork the repository.
2. Create a new branch:
   ```bash
   git checkout -b feature-branch
   ```
3. Commit your changes:
   ```bash
   git commit -m "Add feature"
   ```
4. Push to the branch:
   ```bash
   git push origin feature-branch
   ```
5. Open a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.
