<? echo "Hello, World<br>";
$handle = fopen('/home/chroot/toaster/b/i/bizarre/public_html/counter.txt', 'r');
//$handle = popen('pwd', 'r');
$count = fread($handle, 8192);
echo 'Count: '.$count."<br>";
fclose($handle);
$count += 1;
echo 'Count after increment: '.$count."<br>";
//$handle = fopen('/home/chroot/toaster/b/i/bizarre/public_html/counter.txt', 'w');
$string = "echo $count > /home/chroot/toaster/b/i/bizarre/public_html/counter.txt";
echo 'String: '.$string."<br>";
$handle = popen($string, 'r');
pclose($handle);
$handle = fopen('/home/chroot/toaster/b/i/bizarre/public_html/counter.txt', 'r');
//$handle = popen('pwd', 'r');
$count = fread($handle, 8192);
echo 'Count: '.$count."<br>";
fclose($handle);
?>

