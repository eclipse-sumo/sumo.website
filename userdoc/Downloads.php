<!--
MkDocs version : 1.6.1
Build Date UTC : 17 February 2026 09:23:48
Last edit: 17 February 2026
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="theme-color" content="#338033">
        <meta name="theme-color" content="#338033" media="(prefers-color-scheme: dark)">
        <meta property="og:image" content="images/image-facebook.jpg">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image:width" content="1080">
        <meta property="og:image:height" content="1080">

        
        
        <link rel="canonical" href="https://sumo.dlr.de/docs/Downloads.html">
        <link rel="shortcut icon" href="images/favicon.ico">
        <title>Downloads - SUMO Documentation</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/fontawesome.all.min.css" rel="stylesheet">
        <link href="css/base.css" rel="stylesheet">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/github.min.css">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src="js/jquery-3.7.0.min.js" defer></script>
        <script src="js/bootstrap.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script> 

      <script>
        // DARK MODE
        function detectColorScheme(){
          var theme="light";

          if(localStorage.getItem("sumo-docs-theme")){
              if(localStorage.getItem("sumo-docs-theme") == "dark"){
                  var theme = "dark";
              }
          } else if(!window.matchMedia) {
              return false;
          } else if(window.matchMedia("(prefers-color-scheme: dark)").matches) {
              var theme = "dark";
          }

          if (theme=="dark") {
              document.documentElement.setAttribute("data-theme", "dark");
          }
        }
        detectColorScheme();
      </script>

    </head>

    <body>

    <div class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary text-center">
    <div class="container-fluid">
        <!-- Collapsed navigation -->
        <div class="navbar-header">
            <!-- Expander button -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <!-- Expanded navigation -->
        <div id="navbar-collapse" class="navbar-collapse collapse">
                <!-- Main navigation -->
                <ul class="nav navbar-nav">
                    <li class="navitem">
                        <a href="index.html" class="nav-link">Documentation</a>
                    </li>
                    <li class="navitem">
                        <a href="Tutorials/index.html" class="nav-link">Tutorials</a>
                    </li>
                    <li class="navitem">
                        <a href="FAQ.html" class="nav-link">FAQ</a>
                    </li>
                    <li class="navitem active">
                        <a href="Downloads.html" class="nav-link">Downloads</a>
                    </li>
                    <li class="navitem">
                        <a href="Publications.html" class="nav-link">Publications</a>
                    </li>
                    <li class="navitem">
                        <a href="Developer/index.html" class="nav-link">Developer</a>
                    </li>
                    <li class="navitem">
                        <a href="ChangeLog.html" class="nav-link">ChangeLog</a>
                    </li>
                    <li class="navitem">
                        <a href="https://eclipse.dev/sumo/contact/" class="nav-link">Contact</a>
                    </li>
                </ul>

            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#mkdocs_search_modal">
                        <i class="fa-solid fa-magnifying-glass"></i> <u>S</u>earch
                    </a>
                </li>
                    <li class="nav-item">
                        <a rel="edit" href="https://github.com/eclipse-sumo/sumo/edit/main/docs/web/docs/Downloads.md" class="nav-link"><i class="fa-brands fa-github"></i> <u>E</u>dit on GitHub</a>
                    </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    More <i class="fa-solid fa-circle-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item no-arrow-link" href="https://github.com/eclipse/sumo/issues">Report a Bug / Issue / Typo</a>
                    <a class="dropdown-item" href="Editing_Articles.html">Help on editing articles</a>
                    <a class="dropdown-item" href="https://github.com/eclipse/sumo/commits/main/docs/web">Recent documentation changes</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#mkdocs_keyboard_modal">Keyboard Shortcuts</a>
                    <a class="dropdown-item no-arrow-link" href="https://sumo.dlr.de/sumo_documentation.zip">Download the Documentation</a>
                    <span class="dropdown-item" id="dark-mode-div">Dark mode <label id="theme-switch" class="theme-switch" for="checkbox_theme">
                        <input type="checkbox" id="checkbox_theme">
                    </label></span>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languagedrop" data-toggle="dropdown">
                    <i class="fa-solid fa-language"></i> Languages <i class="fa-solid fa-circle-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                    <span class="dropdown-item">
                        Translations are generated automatically by Google Translate:
                    </span>
                    <a class="dropdown-item" href="https://sumo-dlr-de.translate.goog/docs/Downloads.html?_x_tr_sl=en&_x_tr_tl=de">Deutsch</a>
                    <a class="dropdown-item" href="https://sumo-dlr-de.translate.goog/docs/Downloads.html?_x_tr_sl=en&_x_tr_tl=es">Español</a>
                    <a class="dropdown-item" href="https://sumo-dlr-de.translate.goog/docs/Downloads.html?_x_tr_sl=en&_x_tr_tl=pt">Português</a>
                    <a class="dropdown-item" href="https://sumo-dlr-de.translate.goog/docs/Downloads.html?_x_tr_sl=en&_x_tr_tl=fr">Français</a>
                    <a class="dropdown-item" href="https://sumo-dlr-de.translate.goog/docs/Downloads.html?_x_tr_sl=en&_x_tr_tl=it">Italiano</a>
                    <a class="dropdown-item" href="https://sumo-dlr-de.translate.goog/docs/Downloads.html?_x_tr_sl=en&_x_tr_tl=zh-CN">简体中文</a>
                    <a class="dropdown-item" href="https://sumo-dlr-de.translate.goog/docs/Downloads.html?_x_tr_sl=en&_x_tr_tl=zh-TW">繁體中文</a>
                    <a class="dropdown-item" href="https://sumo-dlr-de.translate.goog/docs/Downloads.html?_x_tr_sl=en&_x_tr_tl=tr">Türkçe</a>
                    <a class="dropdown-item" href="https://sumo-dlr-de.translate.goog/docs/Downloads.html?_x_tr_sl=en&_x_tr_tl=ja">日本語</a>
                    <a class="dropdown-item" href="https://sumo-dlr-de.translate.goog/docs/Downloads.html?_x_tr_sl=en&_x_tr_tl=ko">한국어</a>
                    <a class="dropdown-item" href="https://sumo-dlr-de.translate.goog/docs/Downloads.html?_x_tr_sl=auto&_x_tr_tl=en"><i class="fa-solid fa-arrow-right"></i> Other languages</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

        <div class="container-fluid">
          <div class="row">
                <div class="col-md-3">
                  <div class="text-center"><a href="index.html" style="display: inline-block; margin-top: 5px;"><img src="images/sumo-logo.png" class="sumoLogo" alt="SUMO Logo" width="120px"></a></div>
                  
<div class="navbar-light navbar-expand-md bs-sidebar hidden-print affix" role="complementary">
    <div class="navbar-header">
        <button type="button" class="navbar-toggler collapsed mb-1" data-toggle="collapse" data-target="#toc-collapse" title="Contents">
            <span class="fa-solid fa-angle-down"></span>
        </button>
    </div>
    <div id="toc-collapse" class="navbar-collapse collapse card bg-secondary toc-scroll toc">
        <ul class="nav flex-column bs-sidenav">
            <p style="margin-top:5px; color:#777777;" class="text-center">Contents</p>
            <li class="nav-item main"><a href="#sumo_-_latest_release_version_1260">SUMO - Latest Release (Version 1.26.0)</a></li>
                <li class="nav-item" style="text-indent: 5px;">
                    <a href="#windows" class="nav-link">• Windows</a>
                </li>
                <li class="nav-item" style="text-indent: 25px;">
                    <a href="#sumo-game" class="nav-link">&rarr; SUMO-Game</a>
                </li>
                <li class="nav-item" style="text-indent: 5px;">
                    <a href="#linux" class="nav-link">• Linux</a>
                </li>
                <li class="nav-item" style="text-indent: 25px;">
                    <a href="#repositories" class="nav-link">&rarr; Repositories</a>
                </li>
                <li class="nav-item" style="text-indent: 25px;">
                    <a href="#examples" class="nav-link">&rarr; Examples</a>
                </li>
                <li class="nav-item" style="text-indent: 5px;">
                    <a href="#macos" class="nav-link">• macOS</a>
                </li>
                <li class="nav-item" style="text-indent: 25px;">
                    <a href="#homebrew" class="nav-link">&rarr; Homebrew</a>
                </li>
                <li class="nav-item" style="text-indent: 5px;">
                    <a href="#sources" class="nav-link">• Sources</a>
                </li>
                <li class="nav-item" style="text-indent: 5px;">
                    <a href="#python_packages_virtual_environments" class="nav-link">• Python packages / Virtual environments</a>
                </li>
                <li class="nav-item" style="text-indent: 5px;">
                    <a href="#additional_tools" class="nav-link">• Additional Tools</a>
                </li>
            <li class="nav-item main"><a href="#sumo_-_latest_development_version">SUMO - Latest Development Version</a></li>
                <li class="nav-item" style="text-indent: 5px;">
                    <a href="#nightly_snapshots" class="nav-link">• Nightly Snapshots</a>
                </li>
            <li class="nav-item main"><a href="#older_releases_and_alternative_download">Older releases and alternative download</a></li>
            <li class="nav-item main"><a href="#other">Other</a></li>
                <li class="nav-item" style="text-indent: 5px;">
                    <a href="#direct_repository_access" class="nav-link">• Direct repository access</a>
                </li>
                <li class="nav-item" style="text-indent: 5px;">
                    <a href="#packages" class="nav-link">• Packages</a>
                </li>
                <li class="nav-item" style="text-indent: 5px;">
                    <a href="#dependencies_for_developers" class="nav-link">• Dependencies for developers</a>
                </li>
                <li class="nav-item" style="text-indent: 5px;">
                    <a href="#scenarios_and_other_data" class="nav-link">• Scenarios and other Data</a>
                </li>
            <li class="nav-item main"><a href="#note_on_licensing">Note on Licensing</a></li>
        </ul>
    </div>

    <div class="admonition conference" style="position: sticky; margin-top: 20px; margin-bottom:10px;">
        <p>visit <a class="no-arrow-link" href="https://eclipse.dev/sumo">eclipse.dev/sumo</a></p>
    </div>

    <div class="admonition" style="position: sticky; margin-top: 20px; margin-bottom:10px; background-color: #d6cbb2; border-color: #c6b795; padding: 0;">
        <center>
            <a class="no-arrow-link" href="https://eclipse.dev/sumo/conference"><img src="images/SUMO2026.png" alt="SUMO User Conference 2025" class="img-fluid" style="max-height: 200px"></a>
        </center>
    </div>

</div>
                </div>
                <div class="col-md-9 main-area" role="main">
                   <!-- page.is_homepage seems to be broken in Mkdocs > 1.1.0 -->
                  <ul class="breadcrumbs">
    <script>
        var pagePath = "/docs/Downloads.html";
        var splitUrl = pagePath.split("/");
        splitUrl.pop();
        splitUrl.shift();
        if (splitUrl[0] == 'docs') splitUrl.shift();
        var homeLink = "index.html";
        document.write('<li class="breadcrumb-item"><a href="' + homeLink + '"><i class="fa-solid fa-house"></i></a></li>');
        var prev = '';

        var dirLink = splitUrl.map(function (el) {
        el = prev + el; prev = el + '/'; return el;
        });

        for (let i = 0; i < splitUrl.length; i++) {
            document.write("<li class=\"breadcrumb-item\"><a class=\"no-arrow-link\" href=\"" + dirLink[i] + "\">" + splitUrl[i] + "</a></li>");
        }
    </script>
    <li class="breadcrumb-item active">Downloads</li>
</ul>
                  <hTitles>Downloads<hr style="border: 0.5px solid #338033; margin-top: 5px !important;"></hTitles>
                  
                  

<h1 id="sumo_-_latest_release_version_1260">SUMO - Latest Release (Version 1.26.0)<a class="headerlink" href="#sumo_-_latest_release_version_1260" title="Permanent link">#</a></h1>
<p><strong>Release date:</strong> 29.01.2026</p>
<h2 id="windows">Windows<a class="headerlink" href="#windows" title="Permanent link">#</a></h2>
<p>Binaries (64 bit), all dlls needed, the examples,
tools, and documentation in HTML format. For an explanation of the contents and the
licensing (especially concerning the "extra" build which contains GPL code to support GeoTIFFs, shapefiles and 3D models), see <a href="Downloads.html#note_on_licensing">the notes below</a>.</p>
<ul>
<li>64-bit installer: <a class="no-arrow-link" href="https://sumo.dlr.de/releases/1.26.0/sumo-win64-1.26.0.msi">sumo-win64-1.26.0.msi</a><?php getInfo("sumo-win64-1.26.0.msi","r",false);?></li>
<li>64-bit zip: <a class="no-arrow-link" href="https://sumo.dlr.de/releases/1.26.0/sumo-win64-1.26.0.zip">sumo-win64-1.26.0.zip</a><?php getInfo("sumo-win64-1.26.0.zip","r",false);?></li>
<li>64-bit installer with all extras (contains GPL code): <a class="no-arrow-link" href="https://sumo.dlr.de/releases/1.26.0/sumo-win64extra-1.26.0.msi">sumo-win64extra-1.26.0.msi</a><?php getInfo("sumo-win64extra-1.26.0.msi","r",false);?></li>
<li>64-bit zip with all extras (contains GPL code): <a class="no-arrow-link" href="https://sumo.dlr.de/releases/1.26.0/sumo-win64extra-1.26.0.zip">sumo-win64extra-1.26.0.zip</a><?php getInfo("sumo-win64extra-1.26.0.zip","r",false);?></li>
</ul>

<p>SUMO is also available via winget so <code>winget install --name sumo</code> should give you the latest release (but not the extra version).</p>
<h3 id="sumo-game">SUMO-Game<a class="headerlink" href="#sumo-game" title="Permanent link">#</a></h3>
<ul><li>Windows binaries: <a class="no-arrow-link" href="https://sumo.dlr.de/releases/1.26.0/sumo-game-win64-1.26.0.zip">sumo-game-win64-1.26.0.zip</a><?php getInfo("sumo-game-win64-1.26.0.zip","r",false);?></li></ul>

<h2 id="linux">Linux<a class="headerlink" href="#linux" title="Permanent link">#</a></h2>
<p>The community maintains several repositories notably at the
<a href="https://build.opensuse.org/project/show/science:dlr">open build service</a>.
For a detailed list of repositories see below.</p>
<p>To add the most recent sumo to your ubuntu from the launchpad repository you will need to do:</p>
<div class="codehilite"><pre><span></span><code><span class="n">sudo</span><span class="w"> </span><span class="n">add</span><span class="o">-</span><span class="n">apt</span><span class="o">-</span><span class="n">repository</span><span class="w"> </span><span class="n">ppa</span><span class="p">:</span><span class="n">sumo</span><span class="o">/</span><span class="n">stable</span>
<span class="n">sudo</span><span class="w"> </span><span class="n">apt</span><span class="o">-</span><span class="n">get</span><span class="w"> </span><span class="n">update</span>
<span class="n">sudo</span><span class="w"> </span><span class="n">apt</span><span class="o">-</span><span class="n">get</span><span class="w"> </span><span class="n">install</span><span class="w"> </span><span class="n">sumo</span><span class="w"> </span><span class="n">sumo</span><span class="o">-</span><span class="n">tools</span><span class="w"> </span><span class="n">sumo</span><span class="o">-</span><span class="n">doc</span>
</code></pre></div>

<h3 id="repositories">Repositories<a class="headerlink" href="#repositories" title="Permanent link">#</a></h3>
<p>The build service provides <a href="https://software.opensuse.org//download.html?project=science%3Adlr&amp;package=sumo">instructions on installation</a> for every distribution.</p>
<p>If the repositories do
not contain the libraries (like proj and gdal) they are either part of
the distribution or you will need them from another repository (you may
try one of the build service repositories here too, e.g.
<a href="https://download.opensuse.org/repositories/Application:/Geo/">Application:Geo</a>).
At the moment there is no documentation included in the packages. The
repositories include a nightly build as well (called <strong><em>sumo-git</em></strong>).</p>
<ul>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/openSUSE_Leap_15.2/">openSUSE Leap 15.2 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/15.3/">openSUSE Leap 15.3 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/15.4/">openSUSE Leap 15.4 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/15.5/">openSUSE Leap 15.5 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/15.6/">openSUSE Leap 15.6 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/16.0/">openSUSE Leap 16.0 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/openSUSE_Tumbleweed/">openSUSE Tumbleweed repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/Fedora_36/">Fedora 36 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/Fedora_37/">Fedora 37 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/Fedora_38/">Fedora 38 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/Fedora_39/">Fedora 39 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/Fedora_40/">Fedora 40 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/Fedora_41/">Fedora 41 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/Fedora_42/">Fedora 42 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/Fedora_43/">Fedora 43 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/Fedora_Rawhide/">Fedora Rawhide repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/CentOS_7/">CentOS 7 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/Debian_9.0/">Debian 9 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/Debian_10/">Debian 10 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/Debian_11/">Debian 11 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/Debian_12/">Debian 12 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/Debian_13/">Debian 13 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/Debian_Testing/">Debian Testing repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/Debian_Unstable/">Debian Unstable repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/xUbuntu_16.04/">xUbuntu 16.04 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/xUbuntu_18.04/">xUbuntu 18.04 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/xUbuntu_20.04/">xUbuntu 20.04 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/xUbuntu_22.04/">xUbuntu 22.04 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/xUbuntu_24.04/">xUbuntu 24.04 repository</a></li>
<li><a href="https://download.opensuse.org/repositories/science:/dlr/Arch/">Arch repository</a></li>
</ul>
<p>Furthermore there are a debian and an ubuntu
launchpad project as well as an archlinux package:</p>
<ul>
<li><a href="https://salsa.debian.org/science-team/sumo.git">https://salsa.debian.org/science-team/sumo.git</a></li>
<li><a href="https://launchpad.net/~sumo">https://launchpad.net/~sumo</a></li>
<li><a href="https://aur.archlinux.org/packages/sumo/">https://aur.archlinux.org/packages/sumo/</a></li>
</ul>
<p>There is also a <a href="https://flathub.org/apps/org.eclipse.sumo">flatpak</a> available for SUMO.</p>
<h3 id="examples">Examples<a class="headerlink" href="#examples" title="Permanent link">#</a></h3>
<p>Adding the repository and installing (the quick and dirty way without checking GPG keys!) looks like this, for yum on CentOS 7:</p>
<div class="codehilite"><pre><span></span><code><span class="n">yum</span><span class="o">-</span><span class="n">config</span><span class="o">-</span><span class="n">manager</span><span class="w"> </span><span class="o">--</span><span class="n">add</span><span class="o">-</span><span class="n">repo</span><span class="o">=</span><span class="n">https</span><span class="p">:</span><span class="o">//</span><span class="n">download</span><span class="o">.</span><span class="n">opensuse</span><span class="o">.</span><span class="n">org</span><span class="o">/</span><span class="n">repositories</span><span class="o">/</span><span class="n">science</span><span class="p">:</span><span class="o">/</span><span class="n">dlr</span><span class="o">/</span><span class="n">CentOS_7</span><span class="o">/</span>
<span class="n">yum</span><span class="w"> </span><span class="n">install</span><span class="w"> </span><span class="o">-</span><span class="n">y</span><span class="w"> </span><span class="o">--</span><span class="n">nogpgcheck</span><span class="w"> </span><span class="n">epel</span><span class="o">-</span><span class="n">release</span>
<span class="n">yum</span><span class="w"> </span><span class="n">install</span><span class="w"> </span><span class="o">-</span><span class="n">y</span><span class="w"> </span><span class="o">--</span><span class="n">nogpgcheck</span><span class="w"> </span><span class="n">sumo</span><span class="o">-</span><span class="mf">1.26</span><span class="o">.</span><span class="mi">0</span>
</code></pre></div>

<p>Please be aware, that all build service repos contain the latest nightly build
and the current release, so make sure you specify the version if you do not want the latest build.</p>
<p>To find out which versions are available on ubuntu use <code>apt show sumo -a</code>.</p>
<h2 id="macos">macOS<a class="headerlink" href="#macos" title="Permanent link">#</a></h2>
<p>SUMO can be easily installed on macOS by using the provided package file:</p>
<ul>
<li>pkg installer: <a class="no-arrow-link" href="https://sumo.dlr.de/releases/1.26.0/sumo-1.26.0.pkg">sumo-1.26.0.pkg</a><?php getInfo("sumo-1.26.0.pkg","r",false);?></li>
</ul>

<p>Make sure to have Python and XQuartz installed on your Mac.</p>
<p>You can also build SUMO by following these instructions <a href="Installing/MacOS_Build.html">here</a>.</p>
<h3 id="homebrew">Homebrew<a class="headerlink" href="#homebrew" title="Permanent link">#</a></h3>
<p>You can also read the Homebrew-based installation guide <a href="Installing/index.html#macos">here</a> or follow the <a href="Installing/MacOS_Build.html">build instructions</a>.
The usage of the homebrew bottles is discouraged.</p>
<div class="admonition caution">
<p class="admonition-title">Important notice</p>
<p>We no longer maintain the installation via Homebrew. It may be used to install older versions, but support is not provided. Please use the installer or build SUMO yourself.</p>
</div>
<p><strong><em>If you used the installer, this step is not needed!</em></strong></p>
<p>In order to have a more native feel on macOS, we provide some application launchers (icons / shortcuts). These launchers <strong><em>work with all versions of SUMO and do not need to be updated</em></strong>.</p>
<ul>
<li><a class="no-arrow-link" href="https://sumo.dlr.de/daily/SUMO_launchers.dmg">Download SUMO launchers</a><?php getInfo("SUMO_launchers.dmg","d",false);?></li>
</ul>

<p>These launchers allow you to select <strong>sumo-gui</strong> as the default application to open <code>.sumocfg</code> files on macOS, and even add <strong>sumo-gui</strong>, <strong>netedit</strong> and the <strong>OSM Web Wizard</strong> to the dock.</p>
<div class="admonition caution">
<p class="admonition-title">Important notice</p>
<p>In order to use the launchers, make sure you have installed SUMO beforehand (any version) and have set the <a href="Basics/Basic_Computer_Skills.html#sumo_home">SUMO_HOME</a> environment variable.</p>
</div>
<h2 id="sources">Sources<a class="headerlink" href="#sources" title="Permanent link">#</a></h2>
<p>Download the sources, examples, and CMake-files for creating Visual Studio
solutions or Linux Makefiles. This download does not contain tests. Download as:</p>
<ul>
<li><a class="no-arrow-link" href="https://sumo.dlr.de/releases/1.26.0/sumo-src-1.26.0.tar.gz">sumo-src-1.26.0.tar.gz</a><?php getInfo("sumo-src-1.26.0.tar.gz","r",false);?></li>
<li><a class="no-arrow-link" href="https://sumo.dlr.de/releases/1.26.0/sumo-src-1.26.0.zip">sumo-src-1.26.0.zip</a><?php getInfo("sumo-src-1.26.0.zip","r",false);?></li>
</ul>

<h2 id="python_packages_virtual_environments">Python packages / Virtual environments<a class="headerlink" href="#python_packages_virtual_environments" title="Permanent link">#</a></h2>
<p>Starting with SUMO 1.8.0 (for macOS since 1.12.0) the installation is also possible from the <a href="https://pypi.org/project/eclipse-sumo/">Python packaging index</a>.</p>
<p>You can install either the applications: <code>pip install eclipse-sumo</code> or only traci (<code>pip install traci</code>), libsumo (<code>pip install libsumo</code>) or sumolib (<code>pip install sumolib</code>).</p>
<p>This should work for Windows, macOS and all Linux versions which are more recent than 2014. Linux wheels are provided in four flavours:
<a href="https://github.com/pypa/manylinux">manylinux2014 and manylinux_2_28</a> for x86_64 and aarch64. manylinux2014 is missing some components such as GDAL and JuPedSim but manylinux_2_28 should be feature complete
(pip usually chooses the newest version compatible with your system, so unless you are still on CentOS 7 or openSUSE 15.x you should be fine).</p>
<p>The applications are available for Python 2 and Python 3, libsumo only for Python 3.9 and above. This gives an easy way to test
a new SUMO version via <a href="https://docs.python.org/3/library/venv.html">virtual environments</a> or a nightly build using the following commands (on Linux):</p>
<div class="codehilite"><pre><span></span><code><span class="n">python</span> <span class="o">-</span><span class="n">m</span> <span class="n">venv</span> <span class="n">sumo_test</span>
<span class="o">.</span> <span class="n">sumo_test</span><span class="o">/</span><span class="nb">bin</span><span class="o">/</span><span class="n">activate</span>
<span class="n">pip</span> <span class="n">install</span> <span class="n">eclipse</span><span class="o">-</span><span class="n">sumo</span>
<span class="n">python</span> <span class="o">-</span><span class="n">c</span> <span class="s2">&quot;import sumo; print(&#39;SUMO_HOME=&#39; + sumo.SUMO_HOME)&quot;</span>
</code></pre></div>

<p>The last line prints the value to set for the SUMO_HOME environment variable when using this virtual environment.</p>
<div class="admonition caution">
<p class="admonition-title">macOS dependencies</p>
<p>In order to use the Python wheels on macOS you need to have all the dependencies installed and up to date via brew for instance by following the <a href="Installing/index.html#macos">standard installation</a> once.</p>
</div>
<h2 id="additional_tools">Additional Tools<a class="headerlink" href="#additional_tools" title="Permanent link">#</a></h2>
<p>To take full advantage of all <a href="Tools/index.html">Python tools</a>
please install the dependencies via <code>pip install -r $SUMO_HOME/tools/requirements.txt</code>.</p>
<h1 id="sumo_-_latest_development_version">SUMO - Latest Development Version<a class="headerlink" href="#sumo_-_latest_development_version" title="Permanent link">#</a></h1>
<p>SUMO is under active development. You can find a continuously updated
list of bug-fixes and enhancements at our
<a href="ChangeLog.html">ChangeLog</a>. To make use of the latest features
<a href="Contact.html">(and to give us pre-release feedback)</a> we encourage
you to use the latest version from our <a href="https://github.com/eclipse-sumo/sumo/">code repository</a>.</p>
<p>Every push to our main branch also triggers a build for Windows, Linux and macOS. The results can be found
by clicking on the <a href="https://github.com/eclipse-sumo/sumo/actions">relevant commit here</a> and downloading the
appropriate file for your platform (you may need to sign in to GitHub).</p>
<h2 id="nightly_snapshots">Nightly Snapshots<a class="headerlink" href="#nightly_snapshots" title="Permanent link">#</a></h2>
<div><span class="badge badge-pill badge-dark"><?php getNightlyFreshness("sumo-win64-git.zip");?></span></div>

<p>The code within the repository is <a href="Developer/Nightly_Build.html">compiled each
night</a>. All Windows builds are for the 64bit platform. For an explanation of the contents and the
licensing (especially concerning the "extra" build which contains GPL code to support GeoTIFFs, shapefiles and 3D models),
see <a href="Downloads.html#note_on_licensing">the notes below</a>. The following packages can be obtained:</p>
<ul>
<li>Sources: <a class="no-arrow-link" href="https://sumo.dlr.de/daily/sumo-src-git.tar.gz">https://sumo.dlr.de/daily/sumo-src-git.tar.gz</a><?php getInfo("sumo-src-git.tar.gz","d",true);?></li>
<li>Sources: <a class="no-arrow-link" href="https://sumo.dlr.de/daily/sumo-src-git.zip">https://sumo.dlr.de/daily/sumo-src-git.zip</a><?php getInfo("sumo-src-git.zip","d",true);?></li>
<li>Sources and static HTML documentation: <a class="no-arrow-link" href="https://sumo.dlr.de/daily/sumo_git.orig.tar.gz">https://sumo.dlr.de/daily/sumo_git.orig.tar.gz</a><?php getInfo("sumo_git.orig.tar.gz","d",true);?></li>
<li>Windows installer: <a class="no-arrow-link" href="https://sumo.dlr.de/daily/sumo-win64-git.msi">https://sumo.dlr.de/daily/sumo-win64-git.msi</a><?php getInfo("sumo-win64-git.msi","d",true);?></li>
<li>Windows zip: <a class="no-arrow-link" href="https://sumo.dlr.de/daily/sumo-win64-git.zip">https://sumo.dlr.de/daily/sumo-win64-git.zip</a><?php getInfo("sumo-win64-git.zip","d",true);?></li>
<li>Windows installer with all extras (contains GPL code): <a class="no-arrow-link" href="https://sumo.dlr.de/daily/sumo-win64extra-git.msi">https://sumo.dlr.de/daily/sumo-win64extra-git.msi</a><?php getInfo("sumo-win64extra-git.msi","d",true);?></li>
<li>Windows zip with all extras (contains GPL code): <a class="no-arrow-link" href="https://sumo.dlr.de/daily/sumo-win64extra-git.zip">https://sumo.dlr.de/daily/sumo-win64extra-git.zip</a><?php getInfo("sumo-win64extra-git.zip","d",true);?></li>
<li>Windows 64-bit binaries of the SUMO game: <a class="no-arrow-link" href="https://sumo.dlr.de/daily/sumo-game-win64-git.zip">https://sumo.dlr.de/daily/sumo-game-win64-git.zip</a><?php getInfo("sumo-game-win64-git.zip","d",true);?></li>
<li>Windows 64-bit debug version: <a class="no-arrow-link" href="https://sumo.dlr.de/daily/sumo-win64Debug-git.zip">https://sumo.dlr.de/daily/sumo-win64Debug-git.zip</a><?php getInfo("sumo-win64Debug-git.zip","d",true);?></li>
<li>macOS pkg installer: <a class="no-arrow-link" href="https://sumo.dlr.de/daily/sumo-git.pkg">https://sumo.dlr.de/daily/sumo-git.pkg</a><?php getInfo("sumo-git.pkg","d",true);?></li>
</ul>

<p>The nightly builds are also available as <a href="https://sumo.dlr.de/daily/wheels/">home made Python wheels</a> and
<a href="https://sumo.dlr.de/daily/ciwheels/">Python wheels built by GitHub Actions</a>. The latter are usually preferred,
since they cover more different Python versions, especially for Windows and macOS. But if you prefer a binary from Berlin
use the first source.
To install the latest nightly version (it is strongly encouraged to do this in a virtual environment) use <a href="#python_packages_virtual_environments">the instructions above</a> replacing the install line with:</p>
<div class="codehilite"><pre><span></span><code>pip install -f https://sumo.dlr.de/daily/ciwheels/ eclipse-sumo
</code></pre></div>

<p>Although this is a python package, it contains all compiled SUMO binaries and should be fully functional (see the requirements in <a href="#python_packages_virtual_environments">the section above</a>).
The nightly python wheels are also available for libsumo, sumolib and traci.</p>
<p>The Linux <a href="#repositories">repositories</a> at the open build service contain a nightly build as well.</p>
<p><a href="https://sumo.dlr.de/daily/userdoc">The corresponding documentation</a> is
also visible live including <a href="https://sumo.dlr.de/daily/doxygen">Doxygen
docs</a>. Additional artifacts such as
<a href="https://sumo.dlr.de/daily">tests results</a> and <a href="https://sumo.dlr.de/daily/lcov/html/">code coverage
analysis</a> are generated every
night.</p>
<div class="admonition caution">
<p class="admonition-title">Caution</p>
<p>The available Windows binary packages may lag behind the <a href="https://github.com/eclipse-sumo/sumo/commits/main">latest Git revision</a> due to being compiled only once per day (around midnight, Berlin time).</p>
</div>
<p>If you need even more recent builds, have a look at the <a href="https://github.com/eclipse-sumo/sumo/actions">artifacts of the GitHub actions</a>. You will need to click on the commit and the platform you are interested in, e.g. <code>windows</code> for Windows binaries.</p>
<h1 id="older_releases_and_alternative_download">Older releases and alternative download<a class="headerlink" href="#older_releases_and_alternative_download" title="Permanent link">#</a></h1>
<p>The <a href="https://sumo.dlr.de/releases/">release directory</a> contains all release files since 1.2.0.
Those and older releases can also be obtained via the <a href="https://sourceforge.net/projects/sumo/files/sumo/">sourceforge download portal</a>.
If you want to try out an older version you can also use the virtual environment approach
(<a href="#python_packages_virtual_environments">explained above</a>) with a fixed version, e.g.
<code>pip install eclipse-sumo==1.9.0</code> (works only for 1.8.0 and later).</p>
<p>If you need a complete zipped snapshot of the repository (including tests) for an older version have a look at the tags in your
local repository or at <a href="https://github.com/eclipse-sumo/sumo/tags">GitHub tags</a>.</p>
<h1 id="other">Other<a class="headerlink" href="#other" title="Permanent link">#</a></h1>
<h2 id="direct_repository_access">Direct repository access<a class="headerlink" href="#direct_repository_access" title="Permanent link">#</a></h2>
<p>You can get the very latest sources directly from our Git repository, see
<a href="FAQ.html#how_do_i_access_the_code_repository">the FAQ on repository access</a>.
Normally, they should compile and complete our test suite successfully.
To assess the current state of the build, you may take a look at the
<a href="https://sumo.dlr.de/daily/">nightly test statistics</a>.</p>
<h2 id="packages">Packages<a class="headerlink" href="#packages" title="Permanent link">#</a></h2>
<p>SUMO is available as different packages. The contents of each package is
listed in the table below.</p>
<table>
<thead>
<tr>
<th></th>
<th>bin</th>
<th>build</th>
<th>src (source code)</th>
<th>user docs</th>
<th>developer docs (doxygen)</th>
<th>data</th>
<th>examples</th>
<th>tutorials</th>
<th>tests</th>
<th>tools (except jars)</th>
<th>jars</th>
</tr>
</thead>
<tbody>
<tr>
<td>sumo-src-<em>XXX</em>.tar.gz<br>sumo-src-<em>XXX</em>.zip</td>
<td></td>
<td>&#10004;</td>
<td>&#10004;</td>
<td></td>
<td></td>
<td>&#10004;</td>
<td>&#10004;</td>
<td>&#10004;</td>
<td></td>
<td>&#10004;</td>
<td></td>
</tr>
<tr>
<td>sumo-win??-<em>XXX</em>.zip<br>sumo-win??-<em>XXX</em>.msi</td>
<td>&#10004;</td>
<td></td>
<td></td>
<td>&#10004;</td>
<td></td>
<td>&#10004;</td>
<td>&#10004;</td>
<td>&#10004;</td>
<td></td>
<td>&#10004;</td>
<td>&#10004;</td>
</tr>
<tr>
<td>rpm</td>
<td>(&#10004;)</td>
<td></td>
<td></td>
<td>&#10004;</td>
<td></td>
<td>&#10004;</td>
<td>&#10004;</td>
<td>&#10004;</td>
<td></td>
<td>&#10004;</td>
<td></td>
</tr>
</tbody>
</table>
<h2 id="dependencies_for_developers">Dependencies for developers<a class="headerlink" href="#dependencies_for_developers" title="Permanent link">#</a></h2>
<p>For the Windows platform you can retrieve all dependencies by cloning
this repository: <a href="https://github.com/DLR-TS/SUMOLibraries">https://github.com/DLR-TS/SUMOLibraries</a>, if you want
to develop with Visual Studio. If you just want to run SUMO, use the
binary downloads above which already contain the runtime dependencies.</p>
<h2 id="scenarios_and_other_data">Scenarios and other Data<a class="headerlink" href="#scenarios_and_other_data" title="Permanent link">#</a></h2>
<ul>
<li><a href="Data/Scenarios.html">complete scenarios</a></li>
<li><a href="Data/Networks.html">networks</a></li>
<li><a href="Data/Traffic_Data.html">traffic data</a></li>
<li><a href="Tutorials/index.html#using_examples_from_the_test_suite">Test cases</a></li>
</ul>
<h1 id="note_on_licensing">Note on Licensing<a class="headerlink" href="#note_on_licensing" title="Permanent link">#</a></h1>
<p>SUMO is licensed under the
<a href="https://www.eclipse.org/legal/epl-2.0/">EPL-2.0</a> with GPL v2 or later as a secondary license option using only <a href="Libraries_Licenses.html">open
source libraries</a>.</p>
<p>The standard Windows build only contains code and Windows binaries with Eclipse
approved licenses (especially no GPL code). If you need
features like shapefile import, GeoTIFF processing, the OpenSceneGraph 3D GUI, or
video generation, download the "extra" build.</p>
<p>The Linux packages do not contain external libraries at all.</p>
<?php
function getInfo($fname, $type, $nightly){
switch($type){
    case "r":
    $file = "/releases/1.26.0/" . $fname;
    break;
    case "d":
    $file = "/daily/" . $fname;
    break;
}
$file = $_SERVER['DOCUMENT_ROOT']. $file;
if(file_exists($file)){
$size = "<span class='badge badge-pill badge-secondary' style='margin-left:5px;'>" . round(((filesize($file))/1048576),1) . " MB" . "</span>";
if ($nightly) {
  $fileDate = "<span class='badge badge-pill badge-light' style='margin-left:5px;'>" . date("F d Y H:i:s", filemtime($file)) . " UTC</span>";
  echo $fileDate . $size;
} else {
  echo $size;
}
}}

function getNightlyFreshness($fname){
$zip = new ZipArchive;
$zip->open($_SERVER['DOCUMENT_ROOT']. "/daily/" . $fname);
$freshnessIs = str_replace("\"","",str_replace("#define VERSION_STRING ","",$zip->getFromName('sumo-git/include/version.h')));
echo $freshnessIs;
$zip->close();
}
?>
                </div>
          </div>
          <button onclick="goTopFunction()" id="goToTop" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>
        </div>

        <footer class="col-md-12">
          
            <br><small><i>This page was last edited on: 17 February 2026</i></small>
          
          <hr>
            <p>Copyright &copy; 2001-2026 German Aerospace Center (DLR) and others.</p>
          <p>Follow us on <a class="no-arrow-link" href="https://www.twitter.com/eclipsesumo/"><i class="fa-brands fa-x-twitter"></i></a> <a class="no-arrow-link" href="https://www.facebook.com/simulationofurbanmobility/"><i class="fa-brands fa-facebook"></i></a> <a class="no-arrow-link" href="https://www.instagram.com/eclipse.sumo/"><i class="fa-brands fa-instagram"></i></a> <a class="no-arrow-link" href="https://www.threads.net/@eclipse.sumo"><i class="fa-brands fa-threads"></i></a> <a class="no-arrow-link" href="https://bsky.app/profile/eclipse-sumo.bsky.social"><i class="fa-brands fa-bluesky"></i></a> <a class="no-arrow-link" href="https://www.linkedin.com/groups/5156801/"><i class="fab fa-linkedin"></i></a>
          | Documentation built with <a href="https://www.mkdocs.org/">MkDocs</a></p>
        </footer>

      <div class="modal" id="mkdocs_search_modal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="searchModalLabel">Search</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body" style="color: #495057 !important;">
                <p>Enter your search terms:</p>
                <script async src="https://cse.google.com/cse.js?cx=004302551366764109984:1kpgtzrm6kv"></script>
                <div class="gcse-search"></div>
            </div>
        </div>
    </div>
</div>
      <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("goToTop").style.display = "block";
          } else {
            document.getElementById("goToTop").style.display = "none";
          }
        }

        function goTopFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }

        var base_url = ".",
            shortcuts = {"edit": 69, "help": 191, "search": 83};
        </script>
        <script src="js/base.js" defer></script>

        <script>
          const toggleSwitch = document.querySelector('#theme-switch input[type="checkbox"]');

          function switchTheme(e) {
              if (e.target.checked) {
                  localStorage.setItem('sumo-docs-theme', 'dark');
                  document.documentElement.setAttribute('data-theme', 'dark');
                  toggleSwitch.checked = true;
              } else {
                  localStorage.setItem('sumo-docs-theme', 'light');
                  document.documentElement.setAttribute('data-theme', 'light');
                  toggleSwitch.checked = false;
              }
          }

          toggleSwitch.addEventListener('change', switchTheme, false);

          if (document.documentElement.getAttribute("data-theme") == "dark"){
              toggleSwitch.checked = true;
          }
          </script>

      <div class="modal" id="mkdocs_keyboard_modal" tabindex="-1" role="dialog" aria-labelledby="keyboardModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="keyboardModalLabel">Keyboard Shortcuts</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
              <table class="table">
                <thead>
                  <tr>
                    <th style="width: 20%;">Key</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody style="color: #495057 !important;">
                  <tr>
                    <td class="help shortcut"><kbd>?</kbd></td>
                    <td>Open this help dialog</td>
                  </tr>
                  <tr>
                    <td class="search shortcut"><kbd>s</kbd></td>
                    <td>Search the Documentation</td>
                  </tr>
                  <tr>
                    <td class="edit shortcut"><kbd>e</kbd></td>
                    <td>Edit current page on GitHub</td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
    </div>
</div>
    </body>
</html>