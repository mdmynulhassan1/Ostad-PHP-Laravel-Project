<?php
//contact 1

$name1 ="";
$phoneNumber1 ="";

// Contact 2

$name2 ="";
$phoneNumber2 ="";

while(true){
  echo"1: Add Contact \n2: View Contacts \n3: Exit\n";
  echo"Enter your choice:";
  $choice=trim(fgets(STDIN));
  if($choice == 1){
    if($name1 == ""){
      echo "Enter name for contact 1:";
      $name1 = trim(fgets(STDIN));
      echo "Enter Phone number for contact 1:";
      $phoneNumber1 = trim(fgets(STDIN));

    }elseif($name2 == ""){
      echo "Enter name for contact 2:";
      $name2 = trim(fgets(STDIN));
      echo "Enter Phone number for contact 2:";
      $phoneNumber2 = trim(fgets(STDIN));
      
    }else {
      echo"contact list is already full\n";
    }
  }elseif($choice == 2){
    if($name1 != ""){
    echo "=========Contact 1=========== \n";
    echo "Name : $name1\n";
    echo "Phone Number : $phoneNumber1\n\n\n";
  }else {
  echo"Please add contact 1\n";
}
    
if($name2 != ""){
    echo "Contact 2: \n";
    echo "Name : $name2\n";
    echo "Phone Number : $phoneNumber2\n\n\n";
}else {
  echo"Please add contact 2\n";
}}elseif($choice == 3) {
  echo"Exiting the program...\n";
  echo "Thank you for using the contact manager.\npowered by Mynul hassan\n";
    break;
  }else {
    echo"Invalid choice. Please try correctly";
  }
  
  
}

?>