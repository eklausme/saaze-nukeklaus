

	<h1 class=mainTitle>Suche im Blog</h1>
	<main>

	<form action="search.php" method="post">
		<label for=searchstr>Suche nach Zeichenketten im Blog:</label>
		<input type=text id=searchstr name=searchstr value="<?=$_POST["searchstr"]??''?>" autofocus>
		<button type=submit><img src="data:image/png;base64,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" height=17 width=17 alt=Search></button>
	</form>

	<br><br>
	<div style="font-family:monospace">
<?php
// Adapted from https://stackoverflow.com/questions/24783862/list-all-the-files-and-folders-in-a-directory-with-php-recursive-function
function getDirContents($dir, $searchstr, &$results) {
	$files = scandir($dir);

	foreach ($files as $key => $value) {
		$path = $dir . DIRECTORY_SEPARATOR . $value;
		if ( !is_dir($path) ) {
			if ( strcmp(substr($value,-5),".html") === 0 || strcmp(substr($value,-4),".php") === 0 ) {
				$t = file_get_contents($path);
				$len = strlen($t);
				$pos = stripos($t,$searchstr);
				if ($pos === false) continue;

				// Get title in HTML file if present
				$titlePos = stripos($t,"<title>");
				if ($titlePos === false) goto noTitle;
				$endTitlePos = stripos($t,"</title>");
				if ($endTitlePos === false) goto noTitle;
				$titlePos += 7;
				if ($endTitlePos <= $titlePos) goto noTitle;
				$title = htmlspecialchars( substr($t,$titlePos,$endTitlePos-$titlePos) );
				goto prepareExcerpt;
				noTitle: $title = $value;

				// Prepare excerpt
				prepareExcerpt:
				if (($low  = $pos - 60) < 0) $low = 0;
				$high = $pos + 60;
				if ($high > $len) $high = $len;
				//$results[] = $path;	// array_push()
				$excerpt = htmlspecialchars( substr($t,$low,$high-$low) );

				if (str_ends_with($path,"/index.html"))
					$path = substr($path,0,strlen($path)-10);
				$results[$path] = array($title,$excerpt);
			}
		} else if ($value != "." && $value != "..") {
			getDirContents($path, $searchstr, $results);
		}
	}

	return $results;
}

$res = array();	// hash: key=URL, value is array of title and excerpt
$s = $_POST["searchstr"] ?? NULL;
if (isset($s) && strlen($s) > 0 && strlen($s) < 240) {
	//printf("Before calling getDirContents, getcwd()=%s\n",getcwd());
	getDirContents(".",$s,$res);	# no slash at end
	echo "<table>\n";
	foreach ($res as $key => $value) {
		printf("<tr><td><a href=\"%s\">%s</a><td>%s\n",$key,$value[0] ?? $key,$value[1]);
	}
	echo "</table>\n";
	//echo "<pre>\n"; var_dump( getDirContents("/srv/http/build",$s,$res) ); echo "</pre>\n";
}
?>
	</div>
	</main>

