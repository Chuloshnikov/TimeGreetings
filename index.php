<?php

if ( stristr($_SERVER['HTTP_USER_AGENT'], 'MSIE 6.0')
|| stristr($_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0')
|| stristr($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') ) {
    echo 'браузер internet explorer недопустим';
} else {
echo "<form action='form.php' engtype='application/x-www-form-urlencoded' method='post'>
<input type='text' name='name' placeholder='name'><br>
<input type='text' name='lastname' placeholder='lastname'><br>
<input type='submit' value='Send'>
</form>";
}


?>