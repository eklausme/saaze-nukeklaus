<?php
$title = "{$collection['title']} (Page {$pagination['currentPage']})";
require SAAZE_PATH . "/templates/top-layout.php";
require SAAZE_PATH . "/templates/read_cattag_json.php";
?>

<main>
<?php
$months = array('01'=>'Januar','02'=>'Februar','03'=>'März','04'=>'April','05'=>'Mai','06'=>'Juni','07'=>'Juli','08'=>'August','09'=>'September','10'=>'Oktober','11'=>'November','12'=>'Dezember');
foreach ($pagination['entries'] as $entry) {
	if (array_key_exists('date',$entry)) {
		list($year,$month,$day) = explode('-',substr($entry['date'],0,10));
		$dateStr = ltrim($day,'0') . '. ' . $months[$month] . ' ' . $year;
	} else {
		$dateStr = 'Datum nicht gesetzt';
	}
?>
	<article>
	<h2 class=h2index><a href="<?= $rbase . $entry['url'] ?>"><?= $entry['title'] ?? 'Unknown title' ?></a></h2>
	<p class=dimmedColor><?=$dateStr?></p>
	<p><?= $entry['excerpt'] ?? '---' ?></p>
	</article>
<?php } ?>
<?php
if ($pagination['nextUrl'] || $pagination['prevUrl']) echo "\n\t<p>";
if ($pagination['nextUrl'])
	echo '<a href="' . $rbase . '/' . ltrim($pagination['nextUrl'],'/') . '">&larr; Älter</a> &nbsp; &nbsp; &nbsp;';
if ($pagination['prevUrl'])
	echo '<a href="' . $rbase . '/' . ltrim($pagination['prevUrl'],'/') . '">Neuer &rarr;</a>';
if ($pagination['nextUrl'] || $pagination['prevUrl']) echo "</p>\n";
?>
</main>
<?php
require SAAZE_PATH . "/templates/aside.php";
require SAAZE_PATH . "/templates/bottom-layout.php";
?>
