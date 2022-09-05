<?php
// read JSON file and store it in GLOBALS
if (!array_key_exists('cat_and_tag',$GLOBALS)) {
	$cat_and_tag_json = @file_get_contents(SAAZE_PATH . "/content/cat_and_tag.json");
	if ($cat_and_tag_json === false)
		$GLOBALS['cat_and_tag'] = array();	//exit(81);
	if (($GLOBALS['cat_and_tag'] = json_decode($cat_and_tag_json,true)) === null) {
		printf("Error in 'cat_and_tag.json file, json_last_error_msg() = |%s|\n", json_last_error_msg());
		$GLOBALS['cat_and_tag'] = array();	//exit(82);
	}


	function prtCatOrTag(array $hash, int $tableFormat = 1) {	// hash contains either categories or tags
		ksort($hash);
		$hash_s = array_keys($hash);	// keys of categories/tags in sorted order
		if ($tableFormat === 1) {
			$n = count($hash_s);
			$m = 1 + intdiv($n,5);
			//echo "<pre>rbase=$rbase, n=$n, m=$m</pre>\n";
			echo "<table>\n";
			for ($i=0; $i<$m; $i+=1) {
				echo "\t<tr>";
				for ($j=0; $j<5; ++$j) {
					if (($k = $i + $m * $j) < $n)
						printf("<td><a href=\"#%s\">%s</a></td>",$hash_s[$k],$hash_s[$k]);
					else echo "<td></td>";
				}
				echo "</tr>\n";
			}
			echo "</table>\n\n";
		} else {
			echo "<p>\n";
			foreach ($hash_s as $h)
				printf("\t<a href=\"#%s\">%s</a>\n",str_replace(' ','-',$h),$h);
			echo "</p>\n";
		}
		foreach ($hash as $h => $hasharr) {
			$hs = str_replace(' ','-',$h);
			echo "\n<h3><a id=\"$hs\"></a>$h</h3>\n<ol>\n";
			foreach ($hasharr as $he) {
				printf("\t<li><a href=\"%s\">%s: %s</a></li>\n",'..'.$he[0],substr($he[1],0,10),$he[2]);
			}
			echo "</ol>\n";
		}
	}
}
?>
