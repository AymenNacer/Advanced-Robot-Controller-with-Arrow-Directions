# Advanced-Robot-Controller-with-Arrow-Directions

Robot controller to store paths of defined directions and distance and display the path with arrow directions, it stores the robot controller instructions in a database

The form in index.php includes:
* Order of Directions(3 Letters in capital, such as FLR): should be defined before drawing the path, because FLR is not same as FRL
* start : will display the path in orgnized table 
* save: will save it into a database 
* draw: to draw the path (the input boxes should be filled)

1. install XAMPP and create a database called 'robot controller path', and a table called 'paths'
2. create user for the database with the following information : User name: robot, Host name: localhost, password: robot1234

![6](https://user-images.githubusercontent.com/67188835/86248457-c97fb380-bb62-11ea-80c9-9403d94155dd.PNG)

3. the table structure should be as defined below

![7](https://user-images.githubusercontent.com/67188835/86248553-e6b48200-bb62-11ea-8e28-afe86ff743ba.PNG)

4. put the files in 'xampp\htdocs'
5. run Apache and MySQL in XAMPP

![9](https://user-images.githubusercontent.com/67188835/86249150-b91c0880-bb63-11ea-9b68-37e337940644.PNG)
