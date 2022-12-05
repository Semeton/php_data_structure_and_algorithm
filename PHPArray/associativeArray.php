<?php
/**
 * @author Semeton Balogun <balogunsemeton@gmail.com>
 * Associative array
 */

 $personalInfo = [];
 $personalInfo["Name"] = "Semeton Balogun";
 $personalInfo["Age"] = 25;
 $personalInfo["Role"] = "Admin";
 $personalInfo["Job"] = "Software Developer";
 $personalInfo["Contact"] = "balogunsemeton@gmail.com";

 foreach ($personalInfo as $key => $value) {
    echo $key.": ".$value."<br/>";
 }
 
 /**
  * Print array in json format (My favorite)
  */
 print_r(json_encode($personalInfo));