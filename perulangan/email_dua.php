<?php
$employee = [
  'name' => 'John',
  'email' => 'john@example.com',
  'phone' => '1234567890',
  'hobbies' => ['Football', 'Tennis'],
  'profiles' => ['facebook' => 'johnfb', 'twitter' => 'johntw']
];
 
// access hobbies
echo $employee['hobbies'][0];
// Football
 
echo $employee['hobbies'][1];
// Tennis
 
// access profiles
echo $employee['profiles']['facebook'];
// johnfb
 
echo $employee['profiles']['twitter'];
// johntw
?>
