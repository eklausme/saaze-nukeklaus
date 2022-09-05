<p>
<a href="https://packagist.org/packages/eklausme/saaze-nukeklaus"><img src="https://img.shields.io/packagist/v/eklausme/saaze-nukeklaus" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/eklausme/saaze-nukeklaus"><img src="https://img.shields.io/packagist/l/eklausme/saaze-nukeklaus" alt="License"></a>
</p>


# Example theme for Simplified Saaze

Here is an example theme, called nukeklaus, modeled after [nukeKlaus.net](http://www.nukeklaus.net). Some characteristics:
1. Responsive design with three, two, or only one column
2. Categories and tags
3. Hero image
4. Blog
5. RSS feed + sitemap
6. Search functionality, if you have PHP on the web-server

This nukeklaus example will generate a full website for [nukeKlaus.net](http://www.nukeklaus.net).

Using _Simplified Saaze_ will further provide MathJax, YouTube, Twitter, CodePen, image galleries, and all the other goodies.


# Simplified Saaze

_Simplified Saaze_ is a fast, all-inclusive, flat-file CMS for simple websites and blogs.

Static site builders are fast but normally have a steep learning curve and require lots of tooling to make them work. We believe building a personal site should be stupidly simple. That's why _Simplified Saaze_ is built on the following principles.

* Easy to run - All you need is PHP8, a C compiler, and Composer
* Easy to host - Serve dynamically or statically
* Easy to edit - Edit content using simple Markdown files
* Easy to theme - Templates use plain PHP/HTML
* Fast and secure - No database = less moving parts + more speed
* Simple to understand - Everything is a collection of entries

Read [_Simplified Saaze_](https://eklausmeier.goip.de/blog/2021/10-31-simplified-saaze) for installation and usage.


# Usage

Run
```bash
composer create-project eklausme/saaze-nukeklaus
```
This will copy the files of this Git repository, it will also install _Simplified Saaze_. To run _Simplified Saaze_ you still need to compile one C program, install one PECL (PHP extension), and configure one PHP file. This is something you have to do only once.

__1. Demo.__ You can view the theme in action here: [nukeklaus](https://eklausmeier.goip.de/nukeklaus). The content is taken by downloading via `curl` and then converting via `blognukeklaus2md`.

The source code for the [nukeklaus](https://eklausmeier.goip.de/nukeklaus) theme is here: [eklausme/saaze-nukeklaus](https://github.com/eklausme/saaze-nukeklaus). It can be installed with [Composer](https://getcomposer.org):
```bash
composer create-project eklausme/saaze-nukeklaus
```
This will install the theme and the static site generator in one step. You still need to follow the steps in [Installation](https://eklausmeier.goip.de/blog/2021/10-31-simplified-saaze/#installation), i.e.,
1. make yaml extension available for `php`
2. compile `php_md4c_toHtml.c`

Once everything is installed switch to the directory and run
```bash
time php saaze -mrtb /tmp/build
```
The `time` is only to show you how quick it runs. Runtime on [AMD Ryzen 7 5700G](https://eklausmeier.goip.de/blog/2022/05-03-upgrade-amd-bulldozer-to-cezanne) is 0.1 seconds for 174 blog posts. And for this only a single core is used. The `-b /tmp/build` is used to generate the static HTML file in `/tmp`, which happens to be a RAM disk on Arch Linux. Any other directory will do.

Shell script `blognukeklausDeploy` provides an example deployment-script.

__2. Conversion.__ In case you want to replicate the conversion from the original [nukeKlaus.net](http://www.nukeklaus.net) to _Simplified Saaze_ you will proceed as follows:

(1) Download all posts via `curl`:
```bash
blognukeklauscurl wp-sitemap-posts-post-1.xml
```

(2) Convert from HTML to Markdown:
```bash
for i in *.html; do blognukeklaus2md $i > /tmp/T/`basename $i .html`.md; done
```

(3) Create year index:
```bash
for i in `seq 2013 2022`; do blogdate -gp../ -y$i $i*.md > $i/index.md; done
```


# Credits

_Simplified Saaze_ was created by [Elmar Klausmeier](https://eklausmeier.goip.de).

Saaze was created by [Gilbert Pellegrom](https://gilbitron.me) from [Dev7studios](https://dev7studios.co). Released under the MIT license.


