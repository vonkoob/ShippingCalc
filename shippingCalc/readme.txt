TooCalculated -
TooCalculated is a PHP application that allows users to see what the shipping cost for their package would be based on their destination ZIP and package weight.
The application is designed to be a single page application with visual appeal for the user.

Application Stack -
PHP, MySQLi, jQuery/Bootstrap, AJAX

Installation -
I designed this application using the XAMPP control panel (https://www.apachefriends.org/) in order to create an apache and MySQL PHPmyAdmin modules. 
After installing XAMPP control panel (or your preferred apache and MySQL PHPmyAdmin servers) the following steps can be used to view the application:
1) Download the application folder
2) PHPmyAdmin configuration details may need to be applied in order to match a PHPmyAdmin user.
3) Navigate to the XAMPP directory (Located at /xampp/htdocs) and extract the folder to this location
4) You can now access the application with the URL "http://localhost/ShippingCalc/index.html"

Using the Application -
*Due to non-functioning jQuery in the script.js file, ONLY the bottom portion of the application functions.*
-------------------------------------------------------------
Non-functioning Top Portion
Users are initially presented with a navigation bar allowing them to select Home, About, or Contact.
On the Home page allows the user to create the database (which would perform several php files in succession).
After the database is created, that view is no longer displayed and is replaced with a view prompting the user to select a ZIP code, and a Package Weight from two selections.
Once selections have been made, the user can calculate the cost. The result would be displayed on a third view, with the option to ship another package.
-------------------------------------------------------------
Functioning Bottom Portion
The bottom portion of the application page presents the user with 5 buttons (Create DB, Create ZWC Table, Create ZZ Table, Populate ZWC Table, and Populate ZZ Table)
These five buttons must be performed in order or else the database will not be created or populated with the correct information.
Following the creation and population of the database, the user can select a Zip Code, and a Package Weight. 
Once selections have been made, the user can calculate the cost, the result is displayed in a new page.

Wishlist -
Have the jQuery function correctly. Hiding and showing the appropriate views, displaying the results to the user without requiring a new page, and general user improvements on the front end.