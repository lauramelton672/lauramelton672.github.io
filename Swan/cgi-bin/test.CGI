#!/usr/bin/perl
print "Content-type:text/html\n\n";
print "<pre>";
print "Hello, World\n";
#exec ("pwd");
open(FH, '<', "/home/chroot/toaster/b/i/bizarre/public_html/counter.txt");
while ($buf = <FH>) {
	print 'Read in: '.$buf."\n";
	$oldbuf = $buf;
	#chop $buf;
}
close(FH);
print 'Oldbuf: '.$oldbuf."\n";
$newbuf = $oldbuf + 1;
print 'Newbuf: '.$newbuf."\n";
open(OFH, '>', "/home/chroot/toaster/b/i/bizarre/public_html/counter.txt");
print OFH $newbuf;
close(OFH);
open(FH, '<', "/home/chroot/toaster/b/i/bizarre/public_html/counter.txt");
while ($buf = <FH>) {
	print 'Read in again: '.$buf."\n";
	#chop $buf;
}
close(FH);
@stat = stat("/home/chroot/toaster/b/i/bizarre/public_html/counter.txt");
#foreach $att (@stat) {
	#print $att."\n";
#}
print "UID: ".$stat[4]."\n";
print "GID: ".$stat[5]."\n";
print "</pre>";
