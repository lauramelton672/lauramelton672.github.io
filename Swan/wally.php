<?
echo "Hello, World<br>";
$handle = fopen('/tamuweb/S-1-5-21-1167378736-2199707310-2242153877-45773/public_html/Swan/counter.txt', 'r');
$count = fread($handle, 8192);
echo 'Count: '.$count."<br>";
fclose($handle);
$count += 1;
echo 'Count after increment: '.$count."<br>";
$handle = fopen('/tamuweb/S-1-5-21-1167378736-2199707310-2242153877-45773/public_html/Swan/counter.txt', 'w');
fwrite($handle, $count);
fclose($handle);
$handle = fopen('/tamuweb/S-1-5-21-1167378736-2199707310-2242153877-45773/public_html/Swan/counter.txt', 'r');
$count = fread($handle, 8192);
echo 'Count: '.$count."<br>";
fclose($handle);
?>
