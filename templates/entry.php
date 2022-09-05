<?php
require SAAZE_PATH . "/templates/top-layout.php";
require SAAZE_PATH . "/templates/read_cattag_json.php";

if (array_key_exists('date',$entry)) {
	$months = array('01'=>'Januar','02'=>'Februar','03'=>'März','04'=>'April','05'=>'Mai','06'=>'Juni','07'=>'Juli','08'=>'August','09'=>'September','10'=>'Oktober','11'=>'November','12'=>'Dezember');
	list($year,$month,$day) = explode('-',substr($entry['date'],0,10));
	$dateStr = ltrim($day,'0') . '. ' . $months[$month] . ' ' . $year;
} else {
	$dateStr = '';
}
?>

<div class=mainTitle>
<blockquote class=warning>
<p><b>Original-Artikel ist hier:<br><a href="http://www.nukeklaus.net<?=$canonicalURL?>">www.nukeklaus.net<?=$canonicalURL?></a></b></p>
</blockquote>
<h1><?= $entry['title'] ?? 'Kein Titel' ?></h1>
</div>
	<aside class=leftAside>
	<p class=dimmedColor>Dr.-Ing. Humpich<br><?=$dateStr?>
<?php if (isset($entry['categories'])) { ?>
	<br><a class=dimmedColor href=<?= $rbase ?>/categories>Kategorien</a>: <?php
		echo implode( ", ",array_map(fn($x):string =>
			"<a href=$rbase/categories/#".str_replace(' ','%20',$x).">$x</a>",
			(array)($entry['categories'])) )."\n" ?>
<?php } ?>
<?php if (isset($entry['tags'])) { ?>
	<br><a href=<?= $rbase ?>/tags>Stichworte</a>: <?php
		echo implode( ", ",array_map(fn($x):string =>
			"<a href=$rbase/tags/#".str_replace(' ','%20',$x).">$x</a>",
			(array)($entry['tags'])) )."\n" ?>
<?php } ?>
	</p>
	</aside>

	<main>
	<article>
<?= $entry['content'] ?>
	</article>
	</main>

<?php require SAAZE_PATH . "/templates/aside.php"; ?>
<?php require SAAZE_PATH . "/templates/bottom-layout.php"; ?>
