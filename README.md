Gym Genius

Gym Genius is a web application designed to manage workouts, products, news,memberships and user accounts for a gym. The project allows administrators to add, edit, view, and delete various entities such as workouts, products, recipes, news articles and memberships. Users can log in to view and manage their accounts.

Import the database:

Create a database named gym_genius.
Import the gym_genius.sql file into your MySQL database.
You need to have xamp installed
Create a sub-folder in the htdocs folder where is your xamp installed and copy paste the site.

Configure the database connection:

Boot up Xamp and open the Apache and MySql servers

Usage
Open your web browser and go to http://localhost/"sub-folder name" (example Project1) to access the application.

You can log in either a user or an admin (you can find the username and passowd for each in the users table in the database)

Use the navigation bar to manage workouts, products, news, and user accounts.

Features
User Authentication: Secure login system with session management.
Workout Management: Add, edit, view, and delete workout plans with details such as title, difficulty, description, duration, and image.
Recipe Management: You can add, edit, view, and delete a fitness recipe with details such as title, type, purpose, details.
Product Management: Manage gym products with features to add, edit, view, and delete products including name, description, price, and image.
News Management: Post news articles related to the gym, including title, description, content, and image.
Membership Management: You can add and manage the membership types directly from the admin page.
Responsive Design: Responsive layouts using ZURB Foundation for optimal viewing on different devices.
Admin Dashboard: Administrative functions to manage the content efficiently.
Project Structure
