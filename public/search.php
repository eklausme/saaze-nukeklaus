<?php $title='Search'; $url='/nukeklaus/search.php'; $rbase='/nukeklaus'; $cdirs='nukeklaus'; ?>
<!DOCTYPE html>
<html lang="de">

<head>
	<meta charset="UTF-8">
	<title><?= $title ?? "nukeKlaus.net: Nachrichten aus der Kerntechnik" ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
	$canonicalURL = $url ?? '';
	if (str_contains($canonicalURL,'-'))
		$canonicalURL = substr($canonicalURL,0,5) . '/' . substr($canonicalURL,6,2) . '/' . substr($canonicalURL,9,2) . '/' . substr($canonicalURL,12);
	else
		$canonicalURL = '/' . ltrim($canonicalURL,'/');
?>
	<link rel="canonical" href="http://www.nukeklaus.net<?=$canonicalURL?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS" href="https://eklausmeier.goip.de/nukeklaus/feed.xml" />
	<meta name="description" content="Dr.-Ing. Klaus-Dieter Humpich: Nachrichten aus der Kerntechnik" />
	<meta name="keywords" content="Atomkfraft, Kernernergie, Energiepolitik" />
	<meta name="author" content="Klaus-Dieter Humpich" />
	<meta name="copyright" content="Klaus-Dieter Humpich" />
	<meta name="generator" content="Simplified Saaze" />
	<link href="data:image/x-icon;base64,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" rel="icon" type="image/x-icon"/>
<style>
/* CSS for Elmar Klausmeier's blog
   09-Aug-2021: Initial revision
   25-Aug-2021: Added transformed anchor a
   27-Jun-2022: dark/light switcher, see https://ihuoma.hashnode.dev/darklight-mode-switcher
   11-Jul-2022: p+ul+ol same font
   21-Aug-2022: grid-layout
   03-Sep-2022: various corrections, commented out helper colors
*/

:root { --bg-color:white; --textColor:black; color:black; --h1Color:Black; --thColor:LightBlue; --nthChild:LightGray; --buttonlikeColor:lightGray; --buttonlikeBorderColor:blue; --aVisited:black }
.dark-mode { background-color:black; --textColor:white; color:white; --h1Color:LightBlue; --thColor:DarkBlue; --nthChild:orange; --buttonlikeColor:DarkBlue; --buttonlikeBorderColor:red; --aVisited:gray }
body { background-color: var(--bg-color) }


a:visited { color:var(--aVisited); text-decoration:none }
a.link, a:hover, a:active { color:#007acc }

img[alt=Photo] { width:46rem }
.imgHero { width:100%; height:auto }

p, ul, ol { font-family:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif }
img { border-radius:8px }
blockquote { font-style:italic; padding-left:0.4rem; border-left:2px solid #ccc }
td { border: 1px solid Black; border-collapse:collapse; padding:0.3rem 0.5rem 0.3rem 0.5rem }
th { border: 1px solid Black; background-color:var(--thColor); padding:0.3rem 0.5rem 0.3rem 0.5rem }
tr:nth-child(even) { background-color:var(--nthChild); }
.buttonlike { background-color:var(--buttonlikeColor); border-radius:8px; border:2px solid var(--buttonlikeBorderColor); padding:5px }
.h2index { font-family:sans-serif,"Arial" }
.warning { background:yellow }
.hrFat { background-color:black; height:3px; margin-bottom:1.5rem }
aside { /*background-color:lightgreen*/ }

/* Holy Grail Layout */
.grid-container {
	display: grid;
	grid-template-areas:
		'header'
		'mainTitle'
		'leftAside'
		'main'
		'rightAside'
		'footer';
	gap: 0.1rem;
	/*background-color: lightgray;*/
	padding: 0.8rem 0rem 0.8rem 0rem;
}

.grid-container > div {
	/*background-color: lightblue;*/
	text-align: left;
	font-size: 1.5rem;
}

header { grid-area:header }
.leftAside { grid-area:leftAside }
main { grid-area:main }
.mainTitle { grid-area:mainTitle }
.rightAside { grid-area:rightAside }
footer { grid-area:footer; /*background-color:yellow*/ }

h1 { font-family: Montserrat, "Helvetica Neue", sans-serif; font-size:2.7em; color:var(--h1Color) }
h2 { font-size:2.4em; color:var(--h1Color) }
h3 { font-size:2em; color:var(--h1Color) }
p, td, label { line-height:1.7; font-size:1.5rem }
input  { line-height:1.5; font-size:1.3rem }
blockquote { line-height:1.5; font-size:1.3rem }
ul { line-height:1.4; font-size:1.5rem }
ol { line-height:1.5; font-size:1.5rem }
li { margin-bottom:0.8rem }
pre { color:#e2e8f0; background-color:#2d3748; border-radius:0.4rem; overflow-x:auto; padding:1.4rem }
pre code { color:#e2e8f0; line-height:1.8; font-size:1.1rem; font-weight:400; }
code[class*="language-"], pre[class*="language-"] { line-height:1.5; font-size:1.15rem }
code { color:inherit; font-weight:600; font-size:inherit }



@media print {
	aside, nav, footer, header { display:none }
	.grid-container {
		display: grid;
		justify-content: center;
		grid-template-areas:
			'mainTitle'
			'main';
		gap: 20px;
		/*background-color: lightgray;*/
		padding: 0.8rem;
	}
	.border { border:0; overflow:visible; }
}

.dimmedColor { color:Gray }
.dimmedColorSansSerif { font-family:sans-serif ; color:Gray }

#nukeHeader { display:flex }
#nukeAbout { font-size:1.4rem }

/* Copied from https://wordpress.org/themes/twentysixteen, version 2.7 */
.site-branding {
	margin: 0.875em auto 0.875em 0;
	max-width: 100%;
}
.site-title {
	font-family: Montserrat, "Helvetica Neue", sans-serif;
	font-size: 1.8rem;
	font-weight: 800;
	line-height:0.6;
	margin: 0;
	text-align:left;
	color:var(--textColor);
}
.site-description {
	color: #686868;
	font-size: 1rem;
	font-weight: 400;
	line-height: 1.0;
	margin: 0.5em 0 0;
	text-align:left;
	color:var(--textColor);
}
</style>

</head>

<body>
<?php if (isset($GLOBALS['Fatty_Javascript'])) { ?>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5XR4HG"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
<?php } ?>
<?php $rbase ??= ''; ?>

<div class="grid-container border">
	<header>
		<div id=nukeHeader>
			<div class="site-branding">
				<p class="site-title"><a href="<?= $rbase ?>/">nukeKlaus.net &nbsp;</a></p>
				<p class="site-description">Nachrichten aus der Kerntechnik</p>
			</div><!-- .site-branding -->
			<div id=nukeAbout><a href="<?= $rbase ?>/about">Über</a> &nbsp; </div>
			<a onclick="return darkLightToggle()"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAADO0lEQVR42tWXe0hTURzHv/dutd25mivzlRaVjwwl+6P/KiELFgpC/dUDzZKMKc3QGVjgH6FoRDiXlb1T04gws+y/yLTUXqZp5YOKnH8Ulctgm5vb7NwLk8Y0d83d6Avnci73/M73c37nce+l8I9FsZc1qyKVCvmCXaQqFsjXbrJYal8PvDNyAOtj12ZJJZLTQo7cbrdnt3d3VrgANASgTGCAHAKg+/8AJiYmwMgYjFnGhAFgDW1jFoxbx6BKTkbiNhXO6Svw5fMX3wA4HQ5YLWau2CwmUiwIDQuD7spVxMbH40BqOj5++DC3U7AmfJmGcjrKbGYzxm1Wt4ZRMTGoudeEJUFBuHSuEtcuXv5rcw+AMEaqEdO0xxQsCgjAvcdPEEIyYCGZ2K5KgslkEg7gdFUVkrbv4OotD5txTHtkTsy9AoiNX4fG1lZQFNcE5yvOooasA8EAivV67EzfN3lferwITXcahQNo6+9HyNKwyftTJaVouFUvDIBCqUSXYdgt4Eb1dZzRlQsDsDIyEg9edbkFDPT1IWNPmjAAy1esQHNPr1sAeyJm7EnFYP+A7wGkDIM35KilRSK3oOcdT5Gbfcj3AKzut3cgJi7OI/CsTo+66hpeZoxMBofdDpvN5j2ApqAAOQVHPTpzOp04U1aOm7V1Xpkr/P2RmaXGiaJifhlgz/5Hvb1gGNmUHT9paeV2heHT0JTPaZrG5q1boM45hCuVF3C34Q4/AFZZ2nzkFRZOOzo2G10vO/Hi2TMMDxlgtVrhT0YctToaGxISEBQSzO2ezLR9cJC3LG8AEVmEl+vrsSlxC685d+nn6CgO7t2PYYPB45lXAKzYBVRZdwMbExN5mY98H0G+5jCXgankNYArE2qtFurcPG6LzqS21sc4WVyCb1+/TtuGF4BLQaGh2L0/A6qUFERER0++KVn9MBrxtK0djbcb0NPVPSPkrAB+10Ky2JZHREGuUMBEPlCNI0ZeU8QbgKJoSMh6kMjkkPr5YZ5E6pYBvpoZgHQuYVhDP0hJmU/qf2P4ZwAZky2mKP18KQOJn5wzZM0pcpj4Sm6/ZuGLFysDA4N30SKxgD+n5tq37weNc5fTWeoXoRrSMPfs6hIAAAAASUVORK5CYII=" alt="Moon" class="Moon" id="darkLightIcon" height=32 width=32 /></a>
		</div>
		<a href="<?=$rbase.'/'?>"><img class=imgHero src=<?=$rbase?>/img/cropped-KeepMum.webp
			srcset="<?=$rbase?>/img/cropped-KeepMum-300-119.webp 768w, <?=$rbase?>/img/cropped-KeepMum.webp 1200w"
			sizes="(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px"
			width="1200" height="477"
			alt="Keep mum, the world has ears"></a>
	</header>



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


	<footer>
		<p class=dimmedColorSansSerif><br>Generiert <?= date_format(date_create('now',new \DateTimeZone('Europe/Berlin')),'d-M-y H:i') ?> mit
			<a href="https://eklausmeier.goip.de/blog/2021/10-31-simplified-saaze">Simplified Saaze</a>,
			Web-Server <a href="https://hiawatha-webserver.org">Hiawatha</a> &nbsp;
			<a href="<?= $rbase ?>/sitemap.html"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAA7EAAAOxAGVKw4bAAABXElEQVRYw+3XPUgcURSG4Se6BhFCBEGIvZaCRZpEQbCwstJGmyjY2UhKC60SAgYrCwutBEt/ChcbC1ER0qRJIXYWtpqABFZ3Y5obmGKWzMy6s8L6wWnuzJzvnftzOJdm14sq4614g5aMeW9xnRWqBxf4U0OUsZTErBAz9iHMTD8qGX9iFF/wKcCkAujAFX7UsLRdeBkiNUCuqjfAGEr4jstGAGxETtIwvuUN0I3fOMV4IwD+6RfamnITPgM0B0BrKLlRtecFMIk1vIp5VsF9vQGWQ7Xbjoy9w2es5wHwGsc4iZgvYAtzeW/C9yhiD9OhMckNYBD72MVMUvPHAhjCLHbSmlcDuEEvJv7XzYQjOI/NLObV1IlD3AWAcjhSpdDtRuMaXxN0z0WsJJ2BnxiJSXCOj42qhA817pdCteVJmvQIixjIYN6Ct1hNczOKe28KfSm+ic7eGQ486ynqL0FCUbvgKUTtAAAAAElFTkSuQmCC" height=32 width=32 alt=Sitemap></a>
			<a href="<?= $rbase ?>/feed.xml"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAD50lEQVR42u2XW2wUZRTH/zOzs5dpC2yFhFJoKSVqagWBQkIoWEIMEiOmJpAIaqKiD5SEy4skEHiAhAcuIn2BAFICSEwwgoXIg4m1xEZRrEptaW1ppaXlfmu7c9v9hjOU7uzHDEuhTfvCedrvzPm++c25/GdW6PxhDhPIMARmkQldp1+3huLmvfYcwAUQmLwFYjgPMO/B0m+AdbeBdf6H2O3zYF3NGOhucQEEp+2ENPI1z2AWuYLolQpE207BUlsHH6DXqHkRu1YFo/ErWF1Ngw/ggDBEW0/CaNgDxLoHBsCX/R7EtAkQ/CMgKmMgKBlUdzHpIUy9Cv3vTWB3a/oP4DIpBVJ4EqRRs+DLKIIgp3png5kwancherl8gAESTQzCl7kA8oSl9HOkZ4jRcADGxTL0VVyfTQcIRM79CHLOIs/y2BBm88FnA/Dnr4eYmk0acJPmvgWM5j926w8qtO7mCE8h3dgAMRDm/PaUGDXbEG0/9fQAXlNgRVU67Ed6qqOwtHb+gOBo2rOVoMfxe6gntN9Wgt2r7T9A4qFm8zcwmyi9lulckMMIzSgliLFcPIt0QK36hEY0MjAAvRa7Uw/9r/VUpusJmchAaOZuGt/hXKzZ8h2M+i/7DiDnLoOUPhliShaEwPDHbmTqdWi/ryZJbov7xPQCBAu2chNgsRhlYRms7ua+AcQ3kldMy4VvzHzIY9+i+U/xgLhGdS7hMuF/aSXk8cVcXLTjZ+j/bHw6AM58w+jgEgKZ71GOC9DOrrA7tcdBwhWafZibDFuy1cr3XQ3cd4Bejsy34c9bBUGUOL/ReIgac78Tl70YgZeX8zFNh2E27usfQA/EQgTy13A+ezrUMx/SE3b0OEQFStExKpvilKu7HZEzS1zfE94AYoC0v/BBR7M7/9IHST132f/KWirHm5zPvFQOo2570phIJUGql54A4E9HaPpOmumsh/WzKHVlMC8mSKsvDcrsrwkwzclCVEPkp2K7Mx+s7QcITt3MHa3b6nj5ZHIAf/46yJlv8CkmCO3X5aRqdXGfPPFT+HOXcnFa9Qb6UKnsWUipUOaVcyNp/n8CxoUvkgOE5hyDGHK/6YyGvaSCR5yNKeOhFJbxZWj5lkSn1Dmr8CjpSUZ8HbvxJ7RzfP+4lXDmAUjDclwAes0OSt/3CVkBlLnHqV1GJNygmm6wOr4OTN0G36iC+Jp1tUL95YPkAF5dbqueWvUxKUon5w9OLyXVfPWxN3i0nEy/C7XineQAdr3lrHfpXU8jQ2LCbp2HXrudk9x4H7xYAumFKc5e7Sb06s+d6yTrvtFFznUzQqL1WXKAwbbnAMIQ/z3HfQ7n42k1VPCfAAAAAElFTkSuQmCC" height=32 width=32 alt="RSS Feed"></a>
		<br></p>
	</footer>
</div>
<script>
function darkLightToggle() {
	document.body.classList.toggle("dark-mode");
	darkLightIcon.src = document.body.classList.contains("dark-mode") ?
		"data:image/png;base64,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" :
		"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAADO0lEQVR42tWXe0hTURzHv/dutd25mivzlRaVjwwl+6P/KiELFgpC/dUDzZKMKc3QGVjgH6FoRDiXlb1T04gws+y/yLTUXqZp5YOKnH8Ulctgm5vb7NwLk8Y0d83d6Avnci73/M73c37nce+l8I9FsZc1qyKVCvmCXaQqFsjXbrJYal8PvDNyAOtj12ZJJZLTQo7cbrdnt3d3VrgANASgTGCAHAKg+/8AJiYmwMgYjFnGhAFgDW1jFoxbx6BKTkbiNhXO6Svw5fMX3wA4HQ5YLWau2CwmUiwIDQuD7spVxMbH40BqOj5++DC3U7AmfJmGcjrKbGYzxm1Wt4ZRMTGoudeEJUFBuHSuEtcuXv5rcw+AMEaqEdO0xxQsCgjAvcdPEEIyYCGZ2K5KgslkEg7gdFUVkrbv4OotD5txTHtkTsy9AoiNX4fG1lZQFNcE5yvOooasA8EAivV67EzfN3lferwITXcahQNo6+9HyNKwyftTJaVouFUvDIBCqUSXYdgt4Eb1dZzRlQsDsDIyEg9edbkFDPT1IWNPmjAAy1esQHNPr1sAeyJm7EnFYP+A7wGkDIM35KilRSK3oOcdT5Gbfcj3AKzut3cgJi7OI/CsTo+66hpeZoxMBofdDpvN5j2ApqAAOQVHPTpzOp04U1aOm7V1Xpkr/P2RmaXGiaJifhlgz/5Hvb1gGNmUHT9paeV2heHT0JTPaZrG5q1boM45hCuVF3C34Q4/AFZZ2nzkFRZOOzo2G10vO/Hi2TMMDxlgtVrhT0YctToaGxISEBQSzO2ezLR9cJC3LG8AEVmEl+vrsSlxC685d+nn6CgO7t2PYYPB45lXAKzYBVRZdwMbExN5mY98H0G+5jCXgankNYArE2qtFurcPG6LzqS21sc4WVyCb1+/TtuGF4BLQaGh2L0/A6qUFERER0++KVn9MBrxtK0djbcb0NPVPSPkrAB+10Ky2JZHREGuUMBEPlCNI0ZeU8QbgKJoSMh6kMjkkPr5YZ5E6pYBvpoZgHQuYVhDP0hJmU/qf2P4ZwAZky2mKP18KQOJn5wzZM0pcpj4Sm6/ZuGLFysDA4N30SKxgD+n5tq37weNc5fTWeoXoRrSMPfs6hIAAAAASUVORK5CYII=";
}
</script>

<?php if (!isset($pagination)) { ?>
<?php if (isset($entry['MathJax'])) { ?>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
	<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<?php } ?>
<?php if (isset($entry['Twitter'])) { ?>
	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<?php } ?>
<?php if (isset($entry['Mermaid'])) { ?>
	<script src="https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.min.js"></script>
	<script>mermaid.initialize({startOnLoad:true});</script>
<?php } ?>
<?php if (isset($entry['prismjs'])) { ?>
	<script src="/jscss/prism.js"></script>
<?php } ?>
<?php if (isset($entry['prismjs-old'])) { ?>
	<script src="https://unpkg.com/prismjs@v1.24.0/components/prism-core.min.js"></script>
	<script src="https://unpkg.com/prismjs@v1.24.0/plugins/autoloader/prism-autoloader.min.js"></script>
	<script src="https://unpkg.com/prismjs@v1.24.0/plugins/line-numbers/prism-line-numbers.min.js"></script>
<?php } ?>
<?php } ?>

</body>
</html>
