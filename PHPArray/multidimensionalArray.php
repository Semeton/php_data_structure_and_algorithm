<?php
/**
 * @author Semeton Balogun <balogunsemeton@gmail.com>
 * Multidimensional array in PHP
 */

 $users = [];
 $users[] = ["Name" => "Semeton Balogun", "Age" => 25, "Country" => "Nigeria", "State" => "Lagos", "Hobbies" => ["Writing", "Coding", "Sleeping"]];
 $users[] = ["Name" => "Alhaji Seven-Power", "Age" => 26, "Country" => "Nigeria", "State" => "Osun", "Hobbies" => ["Eating", "Gym", "Movies"]];
 $users[] = ["Name" => "Baan Dave", "Age" => 25, "Country" => "Nigeria", "State" => "Imo", "Hobbies" => ["Football", "Music", "Coding"]];
 $users[] = ["Name" => "Agba-awo Gbenga", "Age" => 26, "Country" => "Nigeria", "State" => "Ondo", "Hobbies" => ["Sleeping", "Coding", "Sleeping"]];
 $users[] = ["Name" => "Agbavi Marshal", "Age" => 25, "Country" => "Nigeria", "State" => "Ondo", "Hobbies" => ["Driving", "Partying", "Sleeping"]];

 foreach ($users as $key => $user) {
    echo "Info of user #".($key+1)."<br/>";
    foreach ($user as $key => $value) {
        if (gettype($value) == "string"){
            echo $key.": ".$value."<br/>";
        } else if (gettype($value) == "array"){
            echo $key.":";
            foreach ($value as $v) {
               echo $v.", ";
            }
            echo "<br/>";
        }
    }
    echo "<br/>";
 }

//  print_r(json_encode($users));