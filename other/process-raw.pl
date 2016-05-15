while (<>) {
	$l = $_;
	if ($l =~ /^(\d+)\s+(\d+)\s+(\D+)(\d+)\s+(.*)$/) {
		print "insert into Bancos values('$2','$5');\n";
	}
}