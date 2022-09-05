	<aside class=rightAside>
	<hr class=hrFat>
	<form action="<?=$rbase?>/search.php" method="post">
		<input type=text id=searchstr name=searchstr placeholder="Suche&#160;&hellip;" value="">
		<button type=submit><img src="data:image/png;base64,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" height=17 width=17 alt=Search></button>
	</form>

	<p>&nbsp;</p><hr class=hrFat><p class=h2index><b>KATEGORIEN</b></p>
	<ul>
<?php
	if (array_key_exists('categories',$GLOBALS['cat_and_tag']))
		foreach(array_keys($GLOBALS['cat_and_tag']['categories']) as $cat)
			printf("\t\t<li><a href=\"%s\">%s</a></li>\n", $rbase.'/categories#'.$cat, $cat);
?>
	</ul>
	<p>&nbsp;</p><hr class=hrFat><p class=h2index><b>ARCHIV</b></p>
	<ul>
<?php
	for($i=2022; $i>=2013; --$i)
		printf("\t\t<li><a href=\"%s/%d\">%d</a></li>\n", $rbase,$i,$i);
?>
	</ul>
	</aside>
