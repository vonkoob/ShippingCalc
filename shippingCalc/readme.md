TooCalculated -
TooCalculated is a PHP application that allows users to see what the shipping cost for their package would be based on their destination ZIP code and package weight.
The application is designed to be a single page application with visual appeal for the user.

Application Stack -
PHP, MySQLi, jQuery/Bootstrap, AJAX

Installation -
I designed this application using the XAMPP control panel (https://www.apachefriends.org/) in order to create an apache and MySQL PHPmyAdmin modules. 
After installing XAMPP control panel (or your preferred apache and MySQL PHPmyAdmin servers) the following steps can be used to view the application:
1) Download the repository and configure a virtual host
2) Create a DB and user, then run initDB.sql
3) Navigate to the URL you configured in step 1

Using the Application -
Users are initially presented with a navigation bar allowing them to select Home, About, or Contact.
The first view on Home page allows the user to create the database. This step is superfluous since the installation steps above create and populate the database.
After the database is created, the initial view is no longer displayed and is replaced with a view prompting the user to select a ZIP code, and a Package Weight from two selections.
Once selections have been made, the user can press the 'Calculate' button. The second view is replaced, and the resulting cost is displayed on a third view, with the option to ship another package, returning the user to the second view.

Wishlist -
I would like to expand upon the selections available to the user, providing options for the user to input invalid selections for the ZIP and weight.
Additional logic for responding to the user why certain selections are unavailable.
Interested in stylistically formatting the css to prevent small shifts in the manner that the page is displayed.
Investigating a bit more into what the best practices are for creating and populating a database and when the scripts should be called for database creation.