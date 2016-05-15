while (<>) {
	$l = $_;
	if ($l =~ /^(\d+)\s+(\d+)\s+(\D+)(\d+)\s+(.*)$/) {
		print "insert into BancosVzla values('$2','$5');\n";
	}
}