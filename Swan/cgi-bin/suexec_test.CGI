#!/usr/bin/perl
# Generic mapping that assumes you have script 
# with .cgi stripped from the name
($cmd=$0)=~s,.*/,,;
$cmd=~s/\.CGI$//;
# or comment the above, and uncomment below if 
# another name was used
# $cmd="program_name";

@stat=stat($cmd);
@pwd=getpwuid($stat[4]); $user=($pwd[0])?$pwd[0]:$stat[4];
@grp=getgrgid($stat[5]); $group=($grp[0])?$grp[0]:$stat[5];

# The command must be in the current directory 
# (it cannot contain any slashes),
# the owner and group of the directory must be 
# the same as the settings for
# the script, and neither the directory nor the 
# file can be group writable.
#exec '/usr/sbin/suexec', $user, $group, $cmd;
print $user." ".$group." ".$cmd;
