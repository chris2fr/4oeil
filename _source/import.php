<?
$email = strip_tags(trim($_POST['email']));
$file = '../jekyll/email.csv';
$current = file_get_contents($file);
$current .= $email.';'."\n";
file_put_contents($file, $current);
?>