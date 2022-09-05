<?php require SAAZE_PATH . "/templates/head.php"; ?>
<style>
<?php require SAAZE_PATH . "/public/jscss/blognukeklaus.css" ?>
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

