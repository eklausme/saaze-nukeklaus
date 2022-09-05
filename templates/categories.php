<?php require SAAZE_PATH . "/templates/top-layout.php"; ?>
<?php require SAAZE_PATH . "/templates/read_cattag_json.php"; ?>

	<main>
<p class=dimmedColor><?= date_format(date_create('now',new \DateTimeZone('Europe/Berlin')),'d-M-Y') ?></p>
<h1><?= $entry['title'] ?></h1>	

<div>
<?php if (isset($GLOBALS['cat_and_tag']['categories'])) \prtCatOrTag($GLOBALS['cat_and_tag']['categories']); ?>
</div>
	<br><br><p>
<?php if (isset($entry['categories'])) { ?>
	<br><strong>Categories: </strong><?= implode(", ",(array)($entry['categories'])) . "\n" ?>
<?php } ?>
<?php if (isset($entry['tags'])) { ?>
	<br><strong>Tags: </strong><?= implode(", ", (array)($entry['tags'])) . "\n" ?>
<?php } ?>
<?php if (isset($entry['author'])) { ?>
	<br><strong>Author: </strong><?= implode(", ", (array)($entry['author'])) . "\n" ?>
<?php } ?>
	</p>
	</main>

<?php require SAAZE_PATH . "/templates/bottom-layout.php"; ?>
