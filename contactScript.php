
<?php


$postdata = http_build_query(
    array(
        'entry.0.single' => $_POST['email_name'],
        'entry.1.single' => $_POST['email_address'],
		'entry.2.single' => $_POST['subject'],
        'entry.3.single' => $_POST['message'],
		'pageNumber' => '0',
		'backupCache' => '',
		'submit' => 'Submit'
    )
);
$opts = array('http' =>
    array(
        'method'  => 'POST',
		'User-Agent'  => 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16',
		'Accept'  => 'text/html,application/xml,application/xhtml+xml,text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);
$context  = stream_context_create($opts);
$result = file_get_contents('https://spreadsheets.google.com/formResponse?hl=en&formkey=dHVpeUhDWnpNX21vNU04a3h0LUlGVlE6MQ', false, $context);
header("location:/");
?>
