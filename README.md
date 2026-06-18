FASHIONREBORN Web Application
Overview
FASHIONREBORN is a PHP/MySQL web application built with XAMPP.
It allows users to register, log in, browse products, place orders, and send messages to admins.
Admins can verify users, manage products, and approve/reject/ship orders.

Important Naming Note

The project folder in htdocs is called FASHIONREBORN (this is the application’s name/branding).
The MySQL database is called clothingstore (this is the backend schema).
The PHP connection file (DBConn.php) points to the clothingstore database.
Both names are correct — folder = project name, database = schema name.
Requirements
XAMPP (Apache + MySQL)
phpMyAdmin
Web browser (Chrome/Edge/Firefox)

Video Demonstration:

https://youtu.be/7GwsPTQVbH8

User Features
Browse products on the home page
Users can look through all available fashion items right from the main page, with options to filter or search.

Place orders from the product list
Each product shows details like pictures, price, and stock. Users can add items to their cart and check out.

Send messages to the admin
A simple messaging system lets users ask questions, get help, or share feedback directly with the admin.

Admin Features
Dashboard access  
Admins can log in to a dashboard that shows system stats and quick links to manage users, products, and orders.

Verify new users  
Admins approve or reject new accounts to make sure only real users join the platform.

Manage products  
Admins can add new products, update details like price or stock, and remove items when needed.

Handle orders  
Admins check incoming orders, approve or reject them, and update the status when items are shipped.

Respond to messages  
Admins can read user messages and reply to them, keeping communication clear and helpful.