# Import Data Script for JSON to Wordpress

1) Import mytable.sql into the mysql database for table creation as per the json elements.

2) Enter mysql username, password, database name inside index.php (line 2)

   Example: $connect = mysqli_connect("localhost", "db_username", "db_password", "db_name");
   a) localhost is mysql server
   b) db_username is mysql username
   c) db_password is mysql password
   d) db_name is mysql databse name

3) JSON File is $filename = "test.json";
	
