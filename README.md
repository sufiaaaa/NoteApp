# NoteApp# Note Application

This is a simple Note Application built using the Laravel framework. It allows users to create, edit, delete, and view notes.

## Features

- **Create a Note**: Users can create a note by providing a name and description.
- **Edit a Note**: Users can edit an existing note's name and description.
- **Delete a Note**: Users can delete a note.
- **View Notes**: All notes are displayed in a table with their name, description, creation time, and last update time.

## Prerequisites

Before running the application, make sure you have the following installed:

- [PHP](https://www.php.net/manual/en/install.php) (version 7.3 or higher)
- [Composer](https://getcomposer.org/) (for managing PHP dependencies)
- [Laravel](https://laravel.com/docs/8.x/installation) (can be installed via Composer)
- [MySQL](https://dev.mysql.com/downloads/) (for the database)

## Installation

1. Clone the repository to your local machine:

   git clone https://github.com/your-username/note-app.git
   cd note-app

2. Install dependencies:
Run the following command to install all the necessary PHP dependencies using Composer:

    composer install

3. Set up the environment:
Copy the .env.example file to .env:

    cp .env.example .env

Then, open the .env file and set up your database credentials (e.g., database name, username, and password).

4. Create the database:
Make sure the database is created. You can create a database manually through MySQL, or you can run the migration command to create it for you:

    php artisan migrate

5. Generate the application key:
Run this command to generate an application key:

    php artisan key:generate
    
6. Start the development server:
Run the following command to start the Laravel development server:

    php artisan serve

This will run the app at http://127.0.0.1:8000/notes


**Usage**
Once the application is running, you can perform the following actions:

Create a new note: Click on the "Create Note" button, enter a name and description for the note, and save it.
View notes: All your notes will be listed on the main page with their name, description, and timestamps (created and updated times).
Edit a note: Click on the "Edit" button next to a note to update its details.
Delete a note: Click on the "Delete" button to remove a note from the list.

**Technologies Used**
Laravel: PHP framework for building the application.
Bootstrap: Frontend framework for styling the app.
MySQL: Database to store notes.
