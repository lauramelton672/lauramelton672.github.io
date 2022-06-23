#!/usr/bin/perl
use CGI qw(:standard);
print header;
print start_html("hello world");
my %form;
foreach my $p (param()) {
    $form{$p} = param($p);
    print "$p = $form{$p}<br>\n";
}
$output = `ypcat passwd`;
@arr = split(/:/, $output);
print "$arr[5]<br>";
@pathname = split(/\//, $arr[5]);
print "$pathname[4]<br>";
print end_html;
