# unnamed project
If you have any name suggestions for this project, please mail them to [us](mailto:ru.ramautar@student.ptc.edu.sr?cc=e.pawirodinomo@student.ptc.edu.sr,j.kromodiwongso@student.ptc.edu.sr,m.janmohamed@student.ptc.edu.sr&subject=Project%20Name%20Suggestion).
## Project Details
### Project Contributors
 - Rushil Ramautar
 - Eriek Pawirodinomo
 - Jennilee Kromodiwongso
 - Ignaas Janmohamed

### Division of Tasks
 - Project Skeleton on Paper (Rushil Ramautar, Eriek Pawirodinomo, Jennilee Kromodiwongso and Ignaas Janmohamed).
 - Front-end Design (Eriek Pawirodinomo).
 - Back-end Programming (Rushil Ramautar).
 - User-testing/Bug-reporting (Jennilee Kromodiwongso and Ignaas Janmohamed).
 - Installation Video (Eriek Pawirodinomo).
 - Usage Tutorial (Jennilee Kromodiwongso and Ignaas Janmohamed).
 - Thesis (Rushil Ramautar, Eriek Pawirodinomo, Jennilee Kromodiwongso and Ignaas Janmohamed).
## Installation
In the root directory is a file named *xml_project.sql*. You will need it to make your database.

 1. Log on to phpMyAdmin and create a new database for this project.
 2. Create a user that has access to this database (Optional: you can also use the **root** user).
 3. In the phpMyAdmin sidebar, click on the just created database. Then click on import. Upload the *xml_project.sql* file here and click on "Go".

After we have done this, copy the contents of the *xml_project zip/repository* and paste it inside your webserver root directory (htdocs for XAMPP). A good practice would be to put the files in a subfolder inside htdocs. The folder structure would be: *xampp/htdocs/**subfolder_name**/*.

Inside the subfolder, there is a config folder. There is a "*database.php.example*" file inside. Edit the credentials inside the file to make the application connect to your MySQL database. Save this file as *database.php* inside the *config* folder.

Now, if you enter "localhost/**subfolder_name**" in the url-bar, the application should launch.

Installation Guide is also available through a video provided in the root folder of the project.
