<?php

foreach (scandir('_posts') as $file) {
	if ($file[0] == '.') continue;
	$rfile = "_posts/$file";
	$content = file_get_contents($rfile);
	if (!mb_check_encoding($content, 'UTF-8')) {
		file_put_contents($rfile, mb_convert_encoding($content, 'ISO-8859-1', 'utf-8'));
	}
	$content = file_get_contents($rfile);
	echo "$rfile\n";
	var_dump(mb_check_encoding($content, 'UTF-8'));
	//echo "$file\n";
}
