<div id="page" class="page">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="headline">Medcity Html5 Template</h2>
                <p class="lead">Medcity - Medical Healthcare HTML5 Template</p>
            </div>
        </div>
    </div>
    <section class="main-content">
        <div class="container-fluid">
            <div class="row">
                <!--Content-->
                <div id="intro" class="col-md-12 content">

                    <!-- Intro -->
                    <div class="col-md-12">
                        <p>Thank you for purchasing Medcity template. This documentation will help to know
                            more
                            about template and how is structured and how to use the template features.</p>
                        <p>Medcity is a template for multi purpose sites built on
                            <code>Bootstrap Framework</code>
                        </p>
                    </div>


                    <!-- Requirement -->
                    <div id="requirement" class="col-md-12">

                        <h4 class="subhead">Requirements</h4>

                        <p>To be able to use HTML template, you must have the following:</p>

                        <ul>
                            <li>Make sure you upload the required assets files/folders listed below:
                                <ul>
                                    <li><code>assets/css</code> - Extra Stylesheets Folder</li>
                                    <li><code>assets/images</code> - Images Folder</li>
                                    <li><code>assets/js</code> - Javacripts Folder</li>
                                    <li><code>assets/css/style.css</code> - Main Stylesheet File</li>
                                    <li><code>index.html</code> - Index File/Homepage</li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <!-- Installation -->
                    <div id="install" class="col-md-12">

                        <h4 class="subhead">Installation</h4>

                        <p>Follow the steps below to get started with your Medcity Template:</p>

                        <ol>
                            <li>Open the <code>Package</code> Folder to find all the html Templates Files
                            </li>
                            <li>You will need to Upload these files to localhost server or your Web Server using
                                FTP in order to use it on your Website.</li>
                            <li>Make sure you upload the required files/folders listed below:
                                <ul>
                                    <li><code>assets</code> - Required all file Folder.</li>
                                    <li>Select <code>home-classic.html</code> which want to use.</li>
                                    <li>change <code>index.html</code>name file to
                                        <code>index.html</code> - Index File
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </div>

                    <!-- Structure -->
                    <div id="structure"></div>
                    <div id="file-s" class="col-md-12">

                        <h4 class="subhead">File Structure</h4>

                        <p>unzip the compressed archive to see the following structure:</p>

                        <pre class="prettyprint"> Medcity/
<span class="muted">├──</span> Documentation/
<span class="muted">├──</span>
<span class="muted">    ├──</span> assets/
<span class="muted">        ├──</span> css
<span class="muted">        ├──</span> images
<span class="muted">        ├──</span> fonts
<span class="muted">        ├──</span> js
<span class="muted">        ├──</span> scss
<span class="muted">    ├──</span> index(intro)
<span class="muted">    ├──</span> home-classic.html
<span class="muted">    ├──</span> ...
<span class="muted">    └──</span> why-us.html
</pre>

                    </div>

                    <!-- Html Structure -->
                    <div id="html-s" class="col-md-12">

                        <h4 class="subhead">Html Structure</h4>

                        <p>we use the <strong>bootstrap</strong> framework as a framework. You can take a look
                            at bootstrap <a href="http://getbootstrap.com/">here</a> and see it's feature in
                            action.</p>
                        <p>And basic layout of the grids look like:</p>
                        <pre class="prettyprint">
&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col-md-9&quot;&gt;
Level 1: .col-md-9
&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col-sm-8 col-md-6&quot;&gt;
Level 2: .col-sm-8 .col-md-6
&lt;/div&gt;
&lt;div class=&quot;col-sm-4 col-md-6&quot;&gt;
Level 2: .col-sm-4 .col-md-6
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>

                        <p>If you find that you need to change structure. Scroll down in your html file and find
                            section that you want to change , all section have predefined html comments like
                            below section example.</p>
                    </div>

                    <!-- CSS Structure -->
                    <div id="css-s" class="col-md-12">
                        <h4 class="subhead">CSS Structure</h4>
                        <div class="alert alert-info">
                            <b>Heads up!</b> I'm using several CSS files in this template. Keep in mind, that
                            these CSS files might be overridden somewhere else in other file.
                        </div>

                        <p>Here's a list of the stylesheet files I'm using with this template, you can find more
                            information opening each file:
                        </p>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>File Name</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>libraries.css</code></td>
                                    <td>This is a bunch of cool, fun, and minify for all external css resources
                                        you can found this resources in css folder. and This are generic styles,
                                        resets & normalization.you can take a look
                                        <div class="alert alert-info" style="margin-top: 10px;">
                                            <b>NOTE:</b> libraries.css contains MInfied Files (bootstrap.css -
                                            magnific-popup.css - slick-carousel.css) <br>
                                            <b>NOTE:</b> we have gathered these libraries inside libraries.css
                                            File because it's better in Performane
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>style.css</code></td>
                                    <td>This is the main css file, it contains all the styles of the website.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- sass CSS Structure -->
                    <div id="sass-s" class="col-md-12">
                        <h4 class="subhead">sass CSS Structure</h4>

                        <p>Here's a list of sass CSS files I'm using with this template, you can find more
                            information opening each file:</p>

                        <table class="table table-bordered table-striped">
                            <thead>

                                <tr>
                                    <th>File Name</th>
                                    <th>Description</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td><code>style.scss</code></td>
                                    <td>This are generic styles and collect all files.</td>
                                </tr>

                                <tr>
                                    <td><code>Global Folder</code></td>
                                    <td>This folder contain base sass css file and variable file. If you want to
                                        change any variable you can go through it.</td>
                                </tr>

                                <tr>
                                    <td><code>Layout Folder</code></td>
                                    <td>This folder contain layout sass css files like accordion, align,
                                        background, list and etc..</td>
                                </tr>

                                <tr>
                                    <td><code>Module Folder</code></td>
                                    <td>This folder contain block and section sass css files like action,
                                        feature, screenshot, etc...</td>
                                </tr>
                            </tbody>

                        </table>

                    </div>

                    <!-- Javascript Structure -->
                    <div id="javascript-s" class="col-md-12">
                        <h4 class="subhead">Javascript Structure</h4>

                        <p>The js (scripts) files are loaded in footer. I loaded js Library in the bottom
                            because it will increase the site speed and rendering.</p>

                        <p>The JS files used in this template are:</p>

                        <table class="table table-bordered table-striped">
                            <thead>

                                <tr>
                                    <th>File</th>
                                    <th>Description</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td><code>jquery-3.3.1.min.js</code></td>
                                    <td>jQuery is a Javascript library that greatly reduces the aMedcity of
                                        code
                                        that you must write.
                                    </td>
                                </tr>

                                <tr>
                                    <td><code>plugins.js</code></td>
                                    <td>this bring all javascript plugins to life which we compresed all plugins
                                        to min.
                                        <div class="alert alert-info" style="margin-top: 10px;">
                                            <b>NOTE:</b> plugins.js contains MInfied Files (bootstrap.js -
                                            slick-carousel.js - magnific-popup.js - counterup.js - mixitup.js )
                                            <br>
                                            <b>NOTE:</b> we have gathered these plugins inside plugins.js File
                                            because it's better in Performane
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td><code>main.js</code></td>
                                    <td>this to active javascript function and add some coll function to your
                                        landing page.</td>
                                </tr>
                            </tbody>

                        </table>


                        <!-- Change Fonts -->
                        <div id="fonts" class="col-md-12">
                            <h4 class="subhead">Change Fonts</h4>
                            <p>To change the font, Check <strong>head</strong> in<code>index.html</code> then in
                                first go to <a href="http://www.google.com/webfonts">google fonts</a> choose a
                                font
                                and use the generated code and replace with next code.
                            </p>

                            <pre class="prettyprint">
&lt;link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap"&gt;

</pre>

                            <h4><span class="underline">Next Step</span> : change font family for body in
                                <code>style.css</code>
                            </h4>

                            <pre class="prettyprint">
body {
font-family: "Roboto", sans-serif;/*Change font*/
}
h1,h2,h3,h4,h5,h6{
font-family: "Quicksand", sans-serif;/*Change font*/
}
</pre>
                        </div>

                        <!-- Change Spacing -->
                        <div id="spacing" class="col-md-12">
                            <h4 class="subhead">Change Spacing</h4>
                            <p>we uses helper classes to space elements on Medcity template. Helper classes
                                are
                                used
                                to space elements with margin and padding. This makes it easier to create your
                                own
                                elements in HTML without needing extra CSS to arrange them appropriately.</p>
                            <h4><span class="underline">AVAILABLE CLASSES</span></h4>
                            <pre class="prettyprint">

/* Margin  */
.m-0 {
margin: 0 !important;
}

/*  margin Top */
.mt-0 {
margin-top: 0 !important;
}

.mt-10 {
margin-top: 10px !important;
}

.mt-20 {
margin-top: 20px !important;
}

.mt-30 {
margin-top: 30px !important;
}

.mt-40 {
margin-top: 40px !important;
}

.mt-50 {
margin-top: 50px !important;
}

.mt-60 {
margin-top: 60px !important;
}

.mt-70 {
margin-top: 70px !important;
}

.mt-80 {
margin-top: 80px !important;
}

.mt-90 {
margin-top: 90px !important;
}

.mt-100 {
margin-top: 100px !important;
}

/* Margin Bottom */
.mb-0 {
margin-bottom: 0 !important;
}

.mb-10 {
margin-bottom: 10px !important;
}

.mb-20 {
margin-bottom: 20px !important;
}

.mb-25 {
margin-bottom: 25px !important;
}

.mb-30 {
margin-bottom: 30px !important;
}

.mb-40 {
margin-bottom: 40px !important;
}

.mb-50 {
margin-bottom: 50px !important;
}

.mb-60 {
margin-bottom: 60px !important;
}

.mb-70 {
margin-bottom: 70px !important;
}

.mb-80 {
margin-bottom: 80px !important;
}

.mb-90 {
margin-bottom: 90px !important;
}

.mb-100 {
margin-bottom: 100px !important;
}

/* Margin Right */
.mr-0 {
margin-right: 0 !important;
}

.mr-20 {
margin-right: 20px !important;
}

.mr-30 {
margin-right: 30px !important;
}

.mr-40 {
margin-right: 40px !important;
}

.mr-50 {
margin-right: 50px !important;
}

/* Margin Left */
.ml-0 {
margin-left: 0 !important;
}

.ml-20 {
margin-left: 20px !important;
}

.ml-30 {
margin-left: 30px !important;
}

.ml-40 {
margin-left: 40px !important;
}

.ml-50 {
margin-left: 50px !important;
}

/*  padding  */
.p-0 {
padding: 0 !important;
}

/* padding Top */
.pt-0 {
padding-top: 0 !important;
}

.pt-20 {
padding-top: 20px !important;
}

.pt-30 {
padding-top: 30px !important;
}

.pt-40 {
padding-top: 40px !important;
}

.pt-50 {
padding-top: 50px !important;
}

.pt-60 {
padding-top: 60px !important;
}

.pt-70 {
padding-top: 70px !important;
}

.pt-80 {
padding-top: 80px !important;
}

.pt-90 {
padding-top: 90px !important;
}

.pt-100 {
padding-top: 100px !important;
}

.pt-110 {
padding-top: 110px !important;
}

.pt-120 {
padding-top: 120px !important;
}

.pt-130 {
padding-top: 130px !important;
}

.pt-140 {
padding-top: 140px !important;
}

.pt-150 {
padding-top: 150px !important;
}

/*  Padding Bottom */
.pb-0 {
padding-bottom: 0 !important;
}

.pb-10 {
padding-bottom: 10px !important;
}

.pb-20 {
padding-bottom: 20px !important;
}

.pb-30 {
padding-bottom: 30px !important;
}

.pb-40 {
padding-bottom: 40px !important;
}

.pb-50 {
padding-bottom: 50px !important;
}

.pb-60 {
padding-bottom: 60px !important;
}

.pb-70 {
padding-bottom: 70px !important;
}

.pb-80 {
padding-bottom: 80px !important;
}

.pb-90 {
padding-bottom: 90px !important;
}

.pb-100 {
padding-bottom: 100px !important;
}

.pb-110 {
padding-bottom: 110px !important;
}

.pb-120 {
padding-bottom: 120px !important;
}

.pb-130 {
padding-bottom: 130px !important;
}

.pb-140 {
padding-bottom: 140px !important;
}

.pb-150 {
padding-bottom: 150px !important;
}

/* padding Right */
.pr-0 {
padding-right: 0 !important;
}

.pr-15 {
padding-right: 15px !important;
}

.pr-20 {
padding-right: 20px !important;
}

.pr-30 {
padding-right: 30px !important;
}

.pr-50 {
padding-right: 50px !important;
}

.pr-60 {
padding-right: 60px !important;
}

.pr-70 {
padding-right: 70px !important;
}

.pr-100 {
padding-right: 100px !important;
}

/* padding Left */
.pl-0 {
padding-left: 0 !important;
}

.pl-15 {
padding-left: 15px !important;
}

.pl-20 {
padding-left: 20px !important;
}

.pl-30 {
padding-left: 30px !important;
}

.pl-50 {
padding-left: 50px !important;
}

.pl-60 {
padding-left: 60px !important;
}

.pl-70 {
padding-left: 70px !important;
}

.pl-100 {
padding-left: 100px !important;
}

</pre>

                        </div>

                        <!-- Change Color -->
                        <div id="color" class="col-md-12">

                            <h4 class="subhead">Change Color</h4>

                            <p>yellow hats has a number of included colour schemes that you can switch to at any
                                time. To switch colour schemes, simply replace color code in
                                <code>style.css</code>
                                with what you need.

                            </p>

                            <pre class="prettyprint">
&lt;!-- COLORS --&gt;
Primary Color   : #21cdc0
Secondary Color : #0e204d
Body Color      : #848e9f
Heading Color   : #1f314f
</pre>

                        </div>

                        <!-- Change Favicon -->
                        <div id="favicon" class="col-md-12">

                            <h4 class="subhead">Change Favicon </h4>

                            <p>The main favicon is located in <code>assets/images/favicon/favicon.png</code>
                                replace
                                with your own.</p>

                            <pre class="prettyprint">
&lt;link href=&quot;assets/images/favicon/favicon.png&quot; rel=&quot;icon&quot;&gt;
</pre>

                        </div>

                        <!-- Change logo -->
                        <div id="logo" class="col-md-12">
                            <h4 class="subhead">Change logo</h4>
                            <p>Just edit the <code>logo-light.png</code> from the folder
                                <code>assets/images/logo/</code> or open <code>index.html</code> and you should
                                see
                                the tag there:
                            </p>
                            <pre class="prettyprint">
&lt;img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo"&gt;
</pre>
                        </div>

                        <!-- Change background -->
                        <div id="background" class="col-md-12">
                            <h4 class="subhead">Change background</h4>
                            <p>You can use the backgorund image using the Following code:</p>
                            <pre class="prettyprint">
&lt;div class=&quot;bg-img&quot; &gt;
&lt;img src=&quot;assets/images/background/1.jpg&quot; alt=&quot;Background&quot;/&gt;
&lt;/div&gt;
</pre>
                            <p>We used class to add backgound to feature , call to action section and etc. you
                                can
                                find this backgorunds in images folder<code>assets/images/bg</code>, and you can
                                Find this background in <code>style.css</code>.</p>

                            <p> You can choose between 3 Types of background overlay while creating your
                                section,
                                <code>bg-overlay</code>,
                                <code>bg-overlay-2</code>,<code>bg-overlay-3</code>.
                            </p>

                            <p>you can change background opacity from <code>style.css</code></p>

                        </div>

                        <!-- Change Icons -->
                        <div id="icons" class="col-md-12">
                            <h4 class="subhead">Change Icons</h4>
                            <p>we use icon fonts with easy control in color and size so feel free to use more
                                than
                                600 icon , you can check this icon:
                            </p>
                            <ul>
                                <li>Font Awesome – <a href="https://fontawesome.com/v4.7.0/icons/"
                                        rel="nofollow">https://fontawesome.com/v4.7.0/icons/</a>
                                </li>
                            </ul>

                        </div>

                        <!-- Change Page Title -->
                        <div id="page-title" class="col-md-12">

                            <h4 class="subhead">Change Page Title</h4>

                            <p>You can choose between 16 layouts of page title while creating your Pages. Simply
                                adding
                                the page title section to your page and change the page title content with that
                                you
                                need, you can find all page title sections in
                            </p>

                            <pre class="prettyprint">
&lt;!-- Page Title #1
============================================= --&gt;
&lt;section class=&quot;page-title page-title-layout2 text-center bg-overlay bg-overlay-2&quot;&gt;
&lt;div class=&quot;bg-img&quot; &gt;
&lt;img src=&quot;assets/images/page-titles/2.jpg&quot; alt=&quot;Background&quot;/&gt;
&lt;/div&gt;
&lt;div class=&quot;container&quot;&gt;
&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col-sm-12 col-md-12 col-md-12&quot;&gt;
    &lt;h1 class="pagetitle__heading"&gt;page title&lt;/h1&gt;
&lt;/div&gt;&lt;!-- .col-md-12 end --&gt;
&lt;/div&gt;&lt;!-- .row end --&gt;
&lt;/div&gt;&lt;!-- .container end --&gt;
&lt;/section&gt;
</pre>
                        </div>

                        <!-- Change Heading -->
                        <div id="page-title" class="col-md-12">

                            <h4 class="subhead">Change Heading</h4>

                            <p>You can choose between 3 Types of heading section while creating your Pages.
                                Simply
                                adding the heading section to your section and change heading content with that
                                you need .
                            </p>

                            <pre class="prettyprint">
&lt;!-- Heading #1
============================================= --&gt;
&lt;section class=&quot;bg-gray&quot;&gt;
&lt;div class=&quot;container&quot;&gt;
&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-sm-12 col-md-12 col-md-8&quot;&gt;
        &lt;div class=&quot;heading&quot;&gt;
            &lt;h2 class="heading__title"&gt;....&lt;/h2&gt;
            &lt;p class=&quot;heading__desc&quot;&gt;...&lt;/p&gt;
        &lt;/div&gt;&lt;!-- .heading end --&gt;
    &lt;/div&gt;&lt;!-- .col-md-8 end --&gt;
&lt;/div&gt;&lt;!-- .row end --&gt;
&lt;/div&gt;&lt;!-- .container end --&gt;
&lt;/section&gt;
</pre>
                        </div>

                        <!-- Background & parallax -->
                        <div id="sectionBackground" class="col-md-12">

                            <h4 class="subhead">Section Background &amp; Parallax</h4>

                            <h4>Add Dark Backgroud to Section:</h4>
                            <pre class="bottommargin">&lt;section class="<code>bg-dark</code>"&gt;
&lt;div class="container"&gt;

...

&lt;/div&gt;
&lt;/section&gt;</pre>

                            <h4>Add white Background to Section:</h4>
                            <pre class="bottommargin">&lt;section class="<code>bg-white</code>"&gt;
&lt;div class="container"&gt;

...

&lt;/div&gt;
&lt;/section&gt;</pre>

                            <h4>Add gray Background to Section:</h4>
                            <pre class="bottommargin">&lt;section class="<code>bg-gray</code>"&gt;
&lt;div class="container"&gt;

...

&lt;/div&gt;
&lt;/section&gt;</pre>

                            <h3>Set backround img to Section:</h3>
                            <pre>&lt;section&gt;
&lt;div class="<code>bg-img</code>"&gt;
&lt;img src="your img path"&gt;
&lt;/div&gt;
&lt;div class="container"&gt;

...

&lt;/div&gt;
&lt;/section&gt;</pre>

                            <h3>Set backround img overlay to Section:</h3>
                            <pre>&lt;section class="<code>bg-overlay bg-overlay-dark</code>"&gt;
&lt;div class="<code>bg-img</code>"&gt;
&lt;img src="your img path"&gt;
&lt;/div&gt;
&lt;div class="container"&gt;

...

&lt;/div&gt;
&lt;/section&gt;</pre>

                            <h3>Setting up Parallax Sections:</h3>

                            <p>Make sure your Parallax Images are of enough <code>Width</code> &amp;
                                <code>Height</code>, preferably <code>1920x1080</code> or above.
                            </p>

                            <pre>&lt;section class="<code>bg-parallax</code>"&gt;
&lt;div class="bg-img"&gt;
&lt;img src="your img path"&gt;
&lt;/div&gt;
&lt;div class="container"&gt;

...

&lt;/div&gt;
&lt;/section&gt;</pre>


                        </div>

                        <!--  Carousel  -->
                        <div id="carousel" class="col-md-12">
                            <h4 class="subhead">Carousel</h4>
                            <pre>
&lt;section  id="clients1" class="clients clients-1"&gt;
&lt;div class="container">
&lt;div class="row">
    &lt;div class="col-sm-12 col-md-12 col-md-12"&gt;
        &lt;div  class="slick-carousel"  data-slick="{"slidesToShow": 3, "slidesToScroll": 3, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}""&gt;
            &lt;div class="client"&gt;
                 &lt;img class="center-block" src="img path" alt="client"&gt;
            &lt;/div&gt;
            &lt;div class="client"&gt;
                 &lt;img class="center-block" src="img path" alt="client"&gt;
            &lt;/div&gt;
            &lt;div class="client"&gt;
                 &lt;img class="center-block" src="img path" alt="client"&gt;
            &lt;/div&gt;
            &lt;div class="client"&gt;
                 &lt;img class="center-block" src="img path" alt="client"&gt;
            &lt;/div&gt;
            &lt;div class="client"&gt;
                 &lt;img class="center-block" src="img path" alt="client"&gt;
            &lt;/div&gt;
            &lt;div class="client"&gt;
                 &lt;img class="center-block" src="img path" alt="client"&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                            <p> All Carousel has some data attributes which can control carousel form it:</p>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Attributes</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>slidesToShow="<code>6</code>"</td>
                                        <td>Number of carousel items to be show</td>
                                    </tr>
                                    <tr>
                                        <td>slidesToScroll="<code>2</code>"</td>
                                        <td>Number of carousel items to be show in scroll time</td>
                                    </tr>
                                    <tr>
                                        <td>data-autoplay="<code>false</code>"</td>
                                        <td>Enable or Disable carousel auto play</td>
                                    </tr>
                                    <tr>
                                        <td>arrows="<code>false</code>"</td>
                                        <td>Enable or Disable carousel navigation arrows </td>
                                    </tr>
                                    <tr>
                                        <td>dots="<code>false</code>"</td>
                                        <td>Enable or Disable carousel dots </td>
                                    </tr>
                                    <tr>
                                        <td>speed="<code>3000</code>"</td>
                                        <td>Speed of transition carousel</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p>Wrap any content inside clients carousel: </p>
                        </div>
                        <!-- .clients carousel end -->

                        <!-- Credit Files -->
                        <div id="credit" class="col-md-12">

                            <h4 class="subhead">Credit Files</h4>

                            <p>I've used the following images, icons or other files as listed.</p>

                            <!-- Javascript-->
                            <h5 class="subhead2">JavaScript Plugins</h5>
                            <ol>
                                <li><a href="https://jquery.org/">jQuery</a></li>
                                <li><a href="http://getbootstrap.com/">bootstrap</a></li>
                                <li><a href="http://gambit.ph">counter up</a></li>
                                <li><a href="https://github.com/kenwheeler/slick">slick carousel</a></li>
                                <li><a href="http://dimsemenov.com/plugins/magnific-popup/">magnific-popup</a>
                                </li>
                            </ol>

                            <!-- Icons -->
                            <h5 class="subhead2">Icons</h5>
                            <ol>
                                <li><a href="https://fontawesome.com/icons?d=gallery&m=free">font awesome</a>
                                </li>
                            </ol>
                        </div>

                        <!-- Support -->
                        <div id="support" class="col-md-12">
                            <h4 class="subhead">Support</h4>
                            <h6 class="lead">If you need any help. Feel free to contact me anytime. I will
                                reply
                                in
                                24 hours. Send a mail from <a
                                    href="http://themeforest.net/user/7oroof">Themeforest
                                    Profile</a>.</h6>
                        </div>

                        <!-- changelog -->
                        <div id="changelog" class="col-md-12">
                            <h4 class="subhead">changelog</h4>

                            <h5 class="subhead2">Initial Release V1.0</h5>

                            <p>Released on April 2021.</p>
                        </div>
                    </div><!-- .col-md-9 end-->
                </div><!-- .row end-->

            </div>
            <a href="#" class="scrollToTop">Top</a>
    </section>

</div>
<!--#page end-->

</div>
