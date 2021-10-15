# LoopTask_JSONImport_v1 by Mayur Panchal

This script uses PHP to import events from a JSON file into MYSQL Server.

1) Import mytable.sql into the mysql database to create tables. Run the query. You can use wordpress database name.

2) Enter mysql username, password, database name inside index.php

   Example: $connect = mysqli_connect("localhost", "db_username", "db_password", "db_name");

   a) localhost is mysql server
   b) db_username is mysql username
   c) db_password is mysql password
   d) db_name is mysql databse name

3) JSON File is $filename = "test.json";

4) File can also be executed using Wordpress CLI command - "wp eval-file index" or "wp eval-file index" --skip-wordpress
	
