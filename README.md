Student Management System
A Laravel-based Student Management System to manage student data, courses, and enrollment.

Table of Contents
Features
Requirements
Installation
Configuration
Usage
License
Features
Manage students: Add, edit, delete, and view student details.
Manage courses: Add, edit, delete, and view course details.
Enroll students in courses.
View enrollment details.
Requirements
PHP >= 7.3
Composer
MySQL or any other supported database
Node.js and npm (for frontend assets)
Installation
1. Clone the Repository
bash
Copy code
git clone https://github.com/yourusername/student-management-system.git
cd student-management-system
2. Install Dependencies
Install PHP dependencies using Composer:

bash
Copy code
composer install
Install Node.js dependencies using npm:

bash
Copy code
npm install
3. Set Up Environment Variables
Copy the .env.example file to .env and configure your environment variables:

bash
Copy code
cp .env.example .env
Update the .env file with your database credentials and other necessary configuration.

4. Generate Application Key
bash
Copy code
php artisan key:generate
5. Run Database Migrations and Seeders
Run the migrations to create the database tables:

bash
Copy code
php artisan migrate
(Optional) Seed the database with initial data:

bash
Copy code
php artisan db:seed
6. Compile Frontend Assets
Compile the frontend assets using Laravel Mix:

bash
Copy code
npm run dev
For production, compile the assets with:

bash
Copy code
npm run prod
7. Start the Development Server
Start the Laravel development server:

bash
Copy code
php artisan serve
Visit http://localhost:8000 in your web browser to access the application.

Configuration
Database
Ensure your database configuration in the .env file is correct:

dotenv
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
Mail
Configure your mail settings in the .env file for sending emails:

dotenv
Copy code
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
Usage
Managing Students
Navigate to the "Students" section.
Add a new student by filling out the required information.
Edit or delete existing students.
View detailed information about a student.
Managing Courses
Navigate to the "Courses" section.
Add a new course by filling out the required information.
Edit or delete existing courses.
View detailed information about a course.
Enrolling Students
Navigate to the "Enrollments" section.
Enroll a student in a course by selecting the student and the course.
View enrollment details.
License
This project is licensed under the MIT License. See the LICENSE file for details.
