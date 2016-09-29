<?php
function foo_bar($subject) {
echo "Foo bar:\n";
if ($subject == "none") {
   trigger_error("Wrong argument given to 'foo_bar()' in ... on line ....", E_USER_WARNING);
   }

 }
?>