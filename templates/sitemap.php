<?php $url='/sitemap.html'; ?>
<?php require SAAZE_PATH . "/templates/head.php"; ?>
<title>Sitemap</title>
</head>
<body>
<h1>nukeKlaus.net: Nachrichten aus der Kerntechnik</h1>
<ol>
<?php
foreach ($collections as $collection) {
	sort($collection->entries);
	foreach ($collection->entries as $entry) {
		printf("\t<li><a href=\".%s\">%s</a></li>\n", $entry->data['url'], $entry->data['url']);
	}
}
?>
</ol>
</body>
</html>
