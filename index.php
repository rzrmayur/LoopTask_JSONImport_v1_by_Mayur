<?php
    $connect = mysqli_connect("localhost", "dbusername", "dbpassword", "dbname"); //Connect PHP to MySQL Database
    $query = '';
    $table_data = '';
    $filename = "test.json";
    $data = file_get_contents($filename); //Read the JSON file in PHP
    $array = json_decode($data, true); //Convert JSON String into PHP Array
	$jsoncount =  count($array);
    foreach ($array as $row) //Extract the Array Values by using Foreach Loop
    {
        $query .= "INSERT INTO mytable(id, title, about, organizer, timestamp, email, address, latitude, longitude, tags0, tags1, tags2, tags3, tags4, tags5, tags6) VALUES ('" . $row["id"] . "', '" . $row["title"] . "', '" . $row["about"] . "', '" . $row["organizer"] . "', '" . $row["timestamp"] . "', '" . $row["email"] . "', '" . $row["address"] . "', '" . $row["latitude"] . "', '" . $row["longitude"] . "', '" . $row["tags"][0] . "', '" . $row["tags"][1] . "', '" . $row["tags"][2] . "', '" . $row["tags"][3] . "', '" . $row["tags"][4] . "', '" . $row["tags"][5] . "', '" . $row["tags"][6] . "'); ";  // Make Multiple Insert Query
        $table_data .= '
            <tr>
       <td>' . $row["id"] . '</td>
       <td>' . $row["title"] . '</td>
       <td>' . $row["about"] . '</td>
       <td>' . $row["organizer"] . '</td>
       <td>' . $row["timestamp"] . '</td>
       <td>' . $row["email"] . '</td>
       <td>' . $row["address"] . '</td>
       <td>' . $row["latitude"] . '</td>
       <td>' . $row["longitude"] . '</td>
       <td>' . $row["tags"][0] . '</td>
       <td>' . $row["tags"][1] . '</td>
       <td>' . $row["tags"][2] . '</td>
       <td>' . $row["tags"][3] . '</td>
       <td>' . $row["tags"][4] . '</td>
       <td>' . $row["tags"][5] . '</td>
       <td>' . $row["tags"][6] . '</td>
      </tr>
           ';
    }

    if (mysqli_multi_query($connect, $query))
    {
        echo '<h3>Imported JSON Data Succesfully</h3><br />';
              @mail(
        /* comma-separated list of recipients */
            "rzrmayur@gmail.com",

            /* message subject */
            "New Events Added",

            /* message contents */
            "Total number of events recorded: $jsoncount",

            /* sender email similar */
            "From: jchltatf@aerialair.in"
        );
    }
    else
    {
        echo '<h3>Already Imported</h3>';
    }
    ?>