
	<footer>
	<p class=dimmedColorSansSerif><br><?php
			printf("Generiert %s CET (Europa/Berlin) durch <a href=\"%s\">Simplified Saaze</a>%s%s \n",
				date('d-M-y H:i'), 'https://jamstack.org/generators/simplified-saaze',
				getenv('NON_NGINX') ? '' : ', Web-Server <a href="https://nginx.org">NGINX</a>',
				isset($_SERVER['REQUEST_TIME_FLOAT']) ? sprintf(", rendered in %.2f ms",1000 * (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'])) : ''
			);
			?>
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
