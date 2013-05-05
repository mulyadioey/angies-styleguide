<?php
require('inc/templates.php');

page_open('Basics - Angie&rsquo;s List');
?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead">
  <div class="container">
    <h1>The Basics</h1>
    <p class="lead">Basic styles for the common HTML elements like typography, tables, forms and buttons.</p>
  </div>
</header>


  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li class="active"><a href="#typography">Typography</a></li>
          <li><a href="#colors">Colors</a></li>
          <li><a href="#grades">Grades</a></li>
          <li><a href="#icons">Icons</a></li>
          <li><a href="#buttons">Buttons</a></li>
          <li><a href="#forms-elements">Form Elements</a></li>
          <li><a href="#forms">Forms</a></li>
          <li><a href="#notifications">Notifications</a></li>
          <li><a href="#modals">Flyouts/Modals</a></li>          
        </ul>
      </div>
      <div class="span9">

        <!-- Typography
        ================================================== -->
        <section id="typography">
          <div class="page-header">
            <h1>1. Typography</h1>
          </div>

          <h2 id="headings">Headings</h2>          
          <div class="bs-docs-example">
            <h1>h1. Heading 1 <span class="docs-type-info">Museo Slab 700, 40pt (single line)</span></h1>
            <h2>h2. Heading 2 <span class="docs-type-info">Proxima Nova Bold, 36px/42px</span></h2>
            <h3>h3. Heading 3 <span class="docs-type-info">Proxima Nova Bold, 27px/34px</span></h3>
            <h4>h4. Heading 4 <span class="docs-type-info">Museo Slab 700, 20px/28px</span></h4>
            <h5>h5. Heading 5 <span class="docs-type-info">Proxima Nova Bold, 20px/28px</span></h5>
            <h6>h6. Heading 6 <span class="docs-type-info">Proxima Nova Bold, 15px/23px</span></h6>
          </div>

          <h2 id="body-copy">Body copy</h2>
          <p>The global default <code>font-size</code> is <strong>15px</strong>, with a <code>line-height</code> of <strong>22px</strong>. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of half their line-height (11px by default).</p>
          <div class="bs-docs-example">
            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
          </div>          
      </section>

      <!-- Typography
        ================================================== -->
        <section id="colors">
          <div class="page-header">
            <h1>2. Colors</h1>
          </div>
		  
		  <h3>Primary Color</h3>
		  <div class="box angies-green mb-30">
			<div class="box-content">
				<p class="head">Angie&rsquo;s Green</p>
				<p>#29a036</p>
			</div>
		  </div>
		  
		  <h3>Secondary Colors</h3>
			<div class="row mb-20">
				<div class="span3">
					<div class="box darker-green">
						<div class="box-content">
							<p class="head">Darker Green</p>
							<p>#227e2c</p>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="box lighter-green">
						<div class="box-content">
							<p class="head">Lighter Green</p>
							<p>#4db346</p>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="box angies-yellow">
						<div class="box-content">
							<p class="head">Yellow</p>
							<p>#f7c602</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-30">
				<div class="span3">
					<div class="box deals-purple">
						<div class="box-content">
							<p class="head">Deals Purple</p>
							<p>#79519a</p>
						</div>
					</div>
				</div>
			</div>
			
			<h3>Background Colors</h3>
			<div class="row mb-30">
				<div class="span3">
					<div class="box medium-taupe">
						<div class="box-content">
							<p class="head">Medium Taupe</p>
							<p>#eae7db</p>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="box light-taupe">
						<div class="box-content">
							<p class="head">Light Taupe</p>
							<p>#f9f8f2</p>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="box subtle-taupe">
						<div class="box-content">
							<p class="head">Subtle Taupe</p>
							<p>#fbfbf8</p>
						</div>
					</div>
				</div>
			</div>
			
			<h3>Text Colors</h3>
			<div class="row mb-20">
				<div class="span3">
					<div class="box black">
						<div class="box-content">
							<p class="head">Black</p>
							<p>#000000</p>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="box dark-gray">
						<div class="box-content">
							<p class="head">Dark Gray</p>
							<p>#7b7b7b</p>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="box medium-gray">
						<div class="box-content">
							<p class="head">Medium Gray</p>
							<p>#aaaaaa</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-30">
				<div class="span3">
					<div class="box light-gray">
						<div class="box-content">
							<p class="head">Light Gray</p>
							<p>#dddddd</p>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="box white">
						<div class="box-content">
							<p class="head">White</p>
							<p>#ffffff</p>
						</div>
					</div>
				</div>
			</div>
			
			<h3>Alerts</h3>
			<div class="row mb-30">
				<div class="span3">
					<div class="box alert-red">
						<div class="box-content">
							<p class="head">Alerts</p>
							<p>#e2431e</p>
						</div>
					</div>
				</div>
			</div>
        </section>

        <!-- Grades
        ================================================== -->        
        <section id="grades">
          <div class="page-header">
            <h1>3. Grades</h1>
          </div>

          <h2>Featured Grade</h2>
          <p>The Featured Grade is used as the overall grade on a Service Provider profile.</p>
<div class="bs-docs-example">
  <div class="clearfix">
	<span class="grade featured a">A</span>
	<span class="grade featured b">B</span>
	<span class="grade featured c">C</span>
	<span class="grade featured d">D</span> 
	<span class="grade featured f">F</span>
  </div>
</div>
<pre class="prettyprint">
&lt;span class="grade featured a"&gt;A&lt;/span&gt;
&lt;span class="grade featured b"&gt;B&lt;/span&gt;
</pre>

          <h2>Standard size</h2>
<div class="bs-docs-example">
  <div class="clearfix">
	<span class="grade a">A</span>
	<span class="grade b">B</span>
	<span class="grade c">C</span>
	<span class="grade d">D</span> 
	<span class="grade f">F</span>
	<span class="grade na">N/A</span>
  </div>
</div>
<pre class="prettyprint">
&lt;span class="grade a"&gt;A&lt;/span&gt;
&lt;span class="grade b"&gt;B&lt;/span&gt;
</pre>
		<h2>Smallest icon size</h2>
<div class="bs-docs-example">
  <div class="clearfix">
	<span class="grade sm a">A</span>
	<span class="grade sm b">B</span>
	<span class="grade sm c">C</span>
	<span class="grade sm d">D</span> 
	<span class="grade sm f">F</span>
	<span class="grade sm na">N/A</span>
  </div>
</div>
<pre class="prettyprint">
&lt;span class="grade sm a"&gt;A&lt;/span&gt;
&lt;span class="grade sm b"&gt;B&lt;/span&gt;
</pre>
		<h2>Inline text grade</h2>
          <p>When displaying a grade inline, use text instead of the standard grade icon.</p>
<div class="bs-docs-example">
  <p class="docs-inline-grade">
  	<strong>Company Name</strong><br />
  	<span class="grade inline a">A</span> 1,500 Reviews
  </p>
  <div class="docs-inline-grade-hr"></div>
  <hr class="w-50" />
  <p class="docs-inline-grade">
  	<span class="grade inline a">A</span> #4db346
  </p>
  <p class="docs-inline-grade">
  	<span class="grade inline b">B</span> #29a036
  </p>
  <p class="docs-inline-grade">
  	<span class="grade inline c">C</span> #7b7b7b
  </p>
  <p class="docs-inline-grade">
  	<span class="grade inline d">D</span> #525252
  </p>
  <p class="docs-inline-grade">
  	<span class="grade inline f">F</span> #000000
  </p>
</div>
<pre class="prettyprint">
&lt;span class="grade inline a"&gt;A&lt;/span&gt;
&lt;span class="grade inline b"&gt;B&lt;/span&gt;
&lt;span class="grade inline c"&gt;B&lt;/span&gt;
&lt;span class="grade inline d"&gt;B&lt;/span&gt;
&lt;span class="grade inline f"&gt;B&lt;/span&gt;
</pre>          
        </section>       
                
        <section id="icons">
          <div class="page-header">
            <h1>4. Icons</h1>
          </div>
		  
		  <h3>Custom Angie&rsquo;s List Icons:</h3>
		  <table class="table table-bordered table-striped list-icon">
            <thead>
              <tr>
                <th>Icon</th>
                <th>class=""</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><i class="icn icn-ssa"></i></td>
                <td><code>icn icn-ssa</code></td>
                <td>Super Service Award</td>
              </tr>
              <tr>
                <td><i class="icn icn-cash"></i></td>
                <td><code>icn icn-cash</code></td>
                <td>Cash icon for use with Angie&rsquo;s Cash promos.</td>
              </tr>
              <tr>
                <td><i class="icn icn-deal"></i></td>
                <td><code>icn icn-deal</code></td>
                <td>Deals</td>
              </tr>
              <tr>
                <td><i class="icn icn-coup"></i></td>
                <td><code>icn icn-coup</code></td>
                <td>Coupons</td>
              </tr>
              <tr>
                <td><i class="icn icn-cal"></i></td>
                <td><code>icn icn-cal</code></td>
                <td>Calendar</td>
              </tr>
              <tr>
                <td><i class="icn icn-chat"></i></td>
                <td><code>icn icn-chat</code></td>
                <td>Live Chat</td>
              </tr>
              <tr>
                <td><i class="icn icn-poh"></i></td>
                <td><code>icn icn-poh</code></td>
                <td>Page of Happiness</td>
              </tr>
              <tr>
                <td><i class="icn icn-pen"></i></td>
                <td><code>icn icn-pen</code></td>
                <td>Write a Review</td>
              </tr>
			  <tr>
                <td><i class="icn icn-neighbour"></i></td>
                <td><code>icn icn-neighbour</code></td>
                <td>Neighbour Review</td>
              </tr>
			  <tr>
                <td><i class="icn icn-search-yellow"></i></td>
                <td><code>icn icn-search-yellow</code></td>
                <td>Search icon for light yellow promo modules about past searches</td>
              </tr>
			  <tr>
                <td><i class="icn icn-search"></i></td>
                <td><code>icn icn-search</code></td>
                <td>Search icon for search buttons</td>
              </tr>
			  <tr>
                <td><i class="icn icn-search-white"></i></td>
                <td><code>icn icn-search-white</code></td>
                <td>Search icon for lists of related searches.</td>
              </tr>
            </tbody>
          </table>
        </section>

		<h3>Entypo Icon Set</h3>
		<p>Entypo is a set of 250+ carefully crafted pictograms. The package contains an icon font — OpenType, TrueType and @font-face — EPS, PDF and PSD files. All released for free under the license <a href="#">CC BY-SA 3.0</a>.</p>
		<section id="characters">
			<ul>
				<li title="location"><a href="#" class="char icon-location-2" aria-hidden="true"></a></li>
				<li title="map"><a href="#" class="char icon-map" aria-hidden="true"></a></li>
				<li title="location"><a href="#" class="char icon-location" aria-hidden="true"></a></li>
				<li title="compas"><a href="#" class="char icon-compass" aria-hidden="true"></a></li>
				<li title="target"><a href="#" class="char icon-target" aria-hidden="true"></a></li>
				<li title="bolt"><a href="#" class="char icon-bolt" aria-hidden="true"></a></li>
				<li title="thunder"><a href="#" class="char icon-thunder" aria-hidden="true"></a></li>
				<li title="droplet"><a href="#" class="char icon-droplet" aria-hidden="true"></a></li>
				<li title="cd"><a href="#" class="char icon-cd" aria-hidden="true"></a></li>
				<li title="pie"><a href="#" class="char icon-pie" aria-hidden="true"></a></li>
				<li title="bars"><a href="#" class="char icon-bars" aria-hidden="true"></a></li>
				<li title="statistics"><a href="#" class="char icon-statistics" aria-hidden="true"></a></li>
				<li title="briefcase"><a href="#" class="char icon-briefcase" aria-hidden="true"></a></li>
				<li title="untitled"><a href="#" class="char icon-untitled" aria-hidden="true"></a></li>
				<li title="graph"><a href="#" class="char icon-graph" aria-hidden="true"></a></li>
				<li title="music"><a href="#" class="char icon-music" aria-hidden="true"></a></li>
				<li title="folder"><a href="#" class="char icon-folder" aria-hidden="true"></a></li>
				<li title="archive"><a href="#" class="char icon-archive" aria-hidden="true"></a></li>
				<li title="flag"><a href="#" class="char icon-flag" aria-hidden="true"></a></li>
				<li title="cog"><a href="#" class="char icon-cog" aria-hidden="true"></a></li>
				<li title="tools"><a href="#" class="char icon-tools" aria-hidden="true"></a></li>
				<li title="trophy"><a href="#" class="char icon-trophy" aria-hidden="true"></a></li>
				<li title="tag"><a href="#" class="char icon-tag" aria-hidden="true"></a></li>
				<li title="publish"><a href="#" class="char icon-publish" aria-hidden="true"></a></li>
				<li title="progress-3"><a href="#" class="char icon-progress-3" aria-hidden="true"></a></li>
				<li title="progress-2"><a href="#" class="char icon-progress-2" aria-hidden="true"></a></li>
				<li title="progress-1"><a href="#" class="char icon-progress-1" aria-hidden="true"></a></li>
				<li title="progress-0"><a href="#" class="char icon-progress-0" aria-hidden="true"></a></li>
				<li title="question"><a href="#" class="char icon-question" aria-hidden="true"></a></li>
				<li title="help"><a href="#" class="char icon-help" aria-hidden="true"></a></li>
				<li title="warning"><a href="#" class="char icon-warning" aria-hidden="true"></a></li>
				<li title="cycle"><a href="#" class="char icon-cycle" aria-hidden="true"></a></li>
				<li title="cw"><a href="#" class="char icon-cw" aria-hidden="true"></a></li>
				<li title="volume"><a href="#" class="char icon-volume" aria-hidden="true"></a></li>
				<li title="sound"><a href="#" class="char icon-sound" aria-hidden="true"></a></li>
				<li title="mute"><a href="#" class="char icon-mute" aria-hidden="true"></a></li>
				<li title="phone"><a href="#" class="char icon-phone" aria-hidden="true"></a></li>
				<li title="mobile"><a href="#" class="char icon-mobile" aria-hidden="true"></a></li>
				<li title="mouse"><a href="#" class="char icon-mouse" aria-hidden="true"></a></li>
				<li title="direction"><a href="#" class="char icon-directions" aria-hidden="true"></a></li>
				<li title="mail"><a href="#" class="char icon-mail" aria-hidden="true"></a></li>
				<li title="paperplane"><a href="#" class="char icon-paperplane" aria-hidden="true"></a></li>
				<li title="pencil"><a href="#" class="char icon-pencil" aria-hidden="true"></a></li>
				<li title="feather"><a href="#" class="char icon-feather" aria-hidden="true"></a></li>
				<li title="paperclip"><a href="#" class="char icon-paperclip" aria-hidden="true"></a></li>
				<li title="drawer"><a href="#" class="char icon-drawer" aria-hidden="true"></a></li>
				<li title="reply"><a href="#" class="char icon-reply" aria-hidden="true"></a></li>
				<li title="reply-all"><a href="#" class="char icon-reply-all" aria-hidden="true"></a></li>
				<li title="forward"><a href="#" class="char icon-forward" aria-hidden="true"></a></li>
				<li title="user"><a href="#" class="char icon-user" aria-hidden="true"></a></li>
				<li title="users"><a href="#" class="char icon-users" aria-hidden="true"></a></li>
				<li title="user-add"><a href="#" class="char icon-user-add" aria-hidden="true"></a></li>
				<li title="vcard"><a href="#" class="char icon-vcard" aria-hidden="true"></a></li>
				<li title="export"><a href="#" class="char icon-export" aria-hidden="true"></a></li>
				<li title="share"><a href="#" class="char icon-share" aria-hidden="true"></a></li>
				<li title="shareable"><a href="#" class="char icon-sharable" aria-hidden="true"></a></li>
				<li title="heart"><a href="#" class="char icon-heart" aria-hidden="true"></a></li>
				<li title="heart-2"><a href="#" class="char icon-heart-2" aria-hidden="true"></a></li>
				<li title="star"><a href="#" class="char icon-star" aria-hidden="true"></a></li>
				<li title="star-2"><a href="#" class="char icon-star-2" aria-hidden="true"></a></li>
				<li title="thumbs-up"><a href="#" class="char icon-thumbs-up" aria-hidden="true"></a></li>
				<li title="thumbs-down"><a href="#" class="char icon-thumbs-down" aria-hidden="true"></a></li>
				<li title="chat"><a href="#" class="char icon-chat" aria-hidden="true"></a></li>
				<li title="comment"><a href="#" class="char icon-comment" aria-hidden="true"></a></li>
				<li title="quote"><a href="#" class="char icon-quote" aria-hidden="true"></a></li>
				<li title="house"><a href="#" class="char icon-house" aria-hidden="true"></a></li>
				<li title="popup"><a href="#" class="char icon-popup" aria-hidden="true"></a></li>
				<li title="search"><a href="#" class="char icon-search" aria-hidden="true"></a></li>
				<li title="flashlight"><a href="#" class="char icon-flashlight" aria-hidden="true"></a></li>
				<li title="printer"><a href="#" class="char icon-printer" aria-hidden="true"></a></li>
				<li title="bell"><a href="#" class="char icon-bell" aria-hidden="true"></a></li>
				<li title="link"><a href="#" class="char icon-link" aria-hidden="true"></a></li>
				<li title="camera"><a href="#" class="char icon-camera" aria-hidden="true"></a></li>
				<li title="megaphone"><a href="#" class="char icon-megaphone" aria-hidden="true"></a></li>
				<li title="moon"><a href="#" class="char icon-moon" aria-hidden="true"></a></li>
				<li title="palette"><a href="#" class="char icon-palette" aria-hidden="true"></a></li>
				<li title="leaf"><a href="#" class="char icon-leaf" aria-hidden="true"></a></li>
				<li title="music-2"><a href="#" class="char icon-music-2" aria-hidden="true"></a></li>
				<li title="music-3"><a href="#" class="char icon-music-3" aria-hidden="true"></a></li>
				<li title=""><a href="#" class="char icon-new" aria-hidden="true"></a></li>
				<li title="new"><a href="#" class="char icon-graduation" aria-hidden="true"></a></li>
				<li title="graduation"><a href="#" class="char icon-book" aria-hidden="true"></a></li>
				<li title="newspaper"><a href="#" class="char icon-newspaper" aria-hidden="true"></a></li>
				<li title="bag"><a href="#" class="char icon-bag" aria-hidden="true"></a></li>
				<li title="airplane"><a href="#" class="char icon-airplane" aria-hidden="true"></a></li>
				<li title="lifebuoy"><a href="#" class="char icon-lifebuoy" aria-hidden="true"></a></li>
				<li title="eye"><a href="#" class="char icon-eye" aria-hidden="true"></a></li>
				<li title="clock"><a href="#" class="char icon-clock" aria-hidden="true"></a></li>
				<li title="microphone"><a href="#" class="char icon-microphone" aria-hidden="true"></a></li>
				<li title="calendar"><a href="#" class="char icon-calendar" aria-hidden="true"></a></li>
				<li title="air"><a href="#" class="char icon-air" aria-hidden="true"></a></li>
				<li title="hourglass"><a href="#" class="char icon-hourglass" aria-hidden="true"></a></li>
				<li title="gauge"><a href="#" class="char icon-gauge" aria-hidden="true"></a></li>
				<li title="language"><a href="#" class="char icon-language" aria-hidden="true"></a></li>
				<li title="network"><a href="#" class="char icon-network" aria-hidden="true"></a></li>
				<li title="key"><a href="#" class="char icon-key" aria-hidden="true"></a></li>
				<li title="battery"><a href="#" class="char icon-battery" aria-hidden="true"></a></li>
				<li title="bucket"><a href="#" class="char icon-bucket" aria-hidden="true"></a></li>
				<li title="magnet"><a href="#" class="char icon-magnet" aria-hidden="true"></a></li>
				<li title="drive"><a href="#" class="char icon-drive" aria-hidden="true"></a></li>
				<li title="cup"><a href="#" class="char icon-cup" aria-hidden="true"></a></li>
				<li title="rocket"><a href="#" class="char icon-rocket" aria-hidden="true"></a></li>
				<li title="brush"><a href="#" class="char icon-brush" aria-hidden="true"></a></li>
				<li title="suitcase"><a href="#" class="char icon-suitcase" aria-hidden="true"></a></li>
				<li title="cone"><a href="#" class="char icon-cone" aria-hidden="true"></a></li>
				<li title="earth"><a href="#" class="char icon-earth" aria-hidden="true"></a></li>
				<li title="keyboard"><a href="#" class="char icon-keyboard" aria-hidden="true"></a></li>
				<li title="browser"><a href="#" class="char icon-browser" aria-hidden="true"></a></li>
				<li title="sun"><a href="#" class="char icon-sun" aria-hidden="true"></a></li>
				<li title="sun-2"><a href="#" class="char icon-sun-2" aria-hidden="true"></a></li>
				<li title="adjust"><a href="#" class="char icon-adjust" aria-hidden="true"></a></li>
				<li title="code"><a href="#" class="char icon-code" aria-hidden="true"></a></li>
				<li title="screen"><a href="#" class="char icon-screen" aria-hidden="true"></a></li>
				<li title="infinity"><a href="#" class="char icon-infinity" aria-hidden="true"></a></li>
				<li title="light-bulb"><a href="#" class="char icon-light-bulb" aria-hidden="true"></a></li>
				<li title="credit-card"><a href="#" class="char icon-credit-card" aria-hidden="true"></a></li>
				<li title="database"><a href="#" class="char icon-database" aria-hidden="true"></a></li>
				<li title="voicemail"><a href="#" class="char icon-voicemail" aria-hidden="true"></a></li>
				<li title="clipboard"><a href="#" class="char icon-clipboard" aria-hidden="true"></a></li>
				<li title="cart"><a href="#" class="char icon-cart" aria-hidden="true"></a></li>
				<li title="box"><a href="#" class="char icon-box" aria-hidden="true"></a></li>
				<li title="ticket"><a href="#" class="char icon-ticket" aria-hidden="true"></a></li>
				<li title="rss"><a href="#" class="char icon-rss" aria-hidden="true"></a></li>
				<li title="signal"><a href="#" class="char icon-signal" aria-hidden="true"></a></li>
				<li title="thermometer"><a href="#" class="char icon-thermometer" aria-hidden="true"></a></li>
				<li title="droplets"><a href="#" class="char icon-droplets" aria-hidden="true"></a></li>
				<li title="lock"><a href="#" class="char icon-lock" aria-hidden="true"></a></li>
				<li title="lock-open"><a href="#" class="char icon-lock-open" aria-hidden="true"></a></li>
				<li title="logout"><a href="#" class="char icon-logout" aria-hidden="true"></a></li>
				<li title="login"><a href="#" class="char icon-login" aria-hidden="true"></a></li>
				<li title="checkmark"><a href="#" class="char icon-checkmark" aria-hidden="true"></a></li>
				<li title="cross"><a href="#" class="char icon-cross" aria-hidden="true"></a></li>
				<li title="minus"><a href="#" class="char icon-minus" aria-hidden="true"></a></li>
				<li title="plus"><a href="#" class="char icon-plus" aria-hidden="true"></a></li>
				<li title="cross-2"><a href="#" class="char icon-cross-2" aria-hidden="true"></a></li>
				<li title="minus-2"><a href="#" class="char icon-minus-2" aria-hidden="true"></a></li>
				<li title="minus-3"><a href="#" class="char icon-plus-2" aria-hidden="true"></a></li>
				<li title="cross-3"><a href="#" class="char icon-cross-3" aria-hidden="true"></a></li>
				<li title="plus3"><a href="#" class="char icon-plus-3" aria-hidden="true"></a></li>
				<li title="minus-3"><a href="#" class="char icon-minus-3" aria-hidden="true"></a></li>
				<li title="erase"><a href="#" class="char icon-erase" aria-hidden="true"></a></li>
				<li title="blocked"><a href="#" class="char icon-blocked" aria-hidden="true"></a></li>
				<li title="info"><a href="#" class="char icon-info" aria-hidden="true"></a></li>
				<li title="info-2"><a href="#" class="char icon-info-2" aria-hidden="true"></a></li>
				<li title="ccw"><a href="#" class="char icon-ccw" aria-hidden="true"></a></li>
				<li title="shuffle"><a href="#" class="char icon-shuffle" aria-hidden="true"></a></li>
				<li title="arrow"><a href="#" class="char icon-arrow" aria-hidden="true"></a></li>
				<li title="arrow2"><a href="#" class="char icon-arrow-2" aria-hidden="true"></a></li>
				<li title="retweet"><a href="#" class="char icon-retweet" aria-hidden="true"></a></li>
				<li title="loop"><a href="#" class="char icon-loop" aria-hidden="true"></a></li>
				<li title="history"><a href="#" class="char icon-history" aria-hidden="true"></a></li>
				<li title="back"><a href="#" class="char icon-back" aria-hidden="true"></a></li>
				<li title="switch"><a href="#" class="char icon-switch" aria-hidden="true"></a></li>
				<li title="list"><a href="#" class="char icon-list" aria-hidden="true"></a></li>
				<li title="addtolist"><a href="#" class="char icon-add-to-list" aria-hidden="true"></a></li>
				<li title="layout"><a href="#" class="char icon-layout" aria-hidden="true"></a></li>
				<li title="icon-list-2"><a href="#" class="char icon-list-2" aria-hidden="true"></a></li>
				<li title="text"><a href="#" class="char icon-text" aria-hidden="true"></a></li>
				<li title="text-2"><a href="#" class="char icon-text-2" aria-hidden="true"></a></li>
				<li title="document"><a href="#" class="char icon-document" aria-hidden="true"></a></li>
				<li title="docs"><a href="#" class="char icon-docs" aria-hidden="true"></a></li>
				<li title="landscape"><a href="#" class="char icon-landscape" aria-hidden="true"></a></li>
				<li title="trash"><a href="#" class="char icon-trash" aria-hidden="true"></a></li>
				<li title="upload"><a href="#" class="char icon-upload" aria-hidden="true"></a></li>
				<li title="download"><a href="#" class="char icon-download" aria-hidden="true"></a></li>
				<li title="disk"><a href="#" class="char icon-disk" aria-hidden="true"></a></li>
				<li title="install"><a href="#" class="char icon-install" aria-hidden="true"></a></li>
				<li title="cloud"><a href="#" class="char icon-cloud" aria-hidden="true"></a></li>
				<li title="upload2"><a href="#" class="char icon-upload-2" aria-hidden="true"></a></li>
				<li title="bookmark"><a href="#" class="char icon-bookmark" aria-hidden="true"></a></li>
				<li title="bookmark2"><a href="#" class="char icon-bookmarks" aria-hidden="true"></a></li>
				<li title="pause"><a href="#" class="char icon-pause" aria-hidden="true"></a></li>
				<li title="play"><a href="#" class="char icon-play" aria-hidden="true"></a></li>
				<li title="book2"><a href="#" class="char icon-book-2" aria-hidden="true"></a></li>
				<li title="record"><a href="#" class="char icon-record" aria-hidden="true"></a></li>
				<li title="stop"><a href="#" class="char icon-stop" aria-hidden="true"></a></li>
				<li title="next"><a href="#" class="char icon-next" aria-hidden="true"></a></li>
				<li title="previous"><a href="#" class="char icon-previous" aria-hidden="true"></a></li>
				<li title="first"><a href="#" class="char icon-first" aria-hidden="true"></a></li>
				<li title="last"><a href="#" class="char icon-last" aria-hidden="true"></a></li>
				<li title="flow-cascade"><a href="#" class="char icon-flow-cascade" aria-hidden="true"></a></li>
				<li title="flow-branch"><a href="#" class="char icon-flow-branch" aria-hidden="true"></a></li>
				<li title="flow-tree"><a href="#" class="char icon-flow-tree" aria-hidden="true"></a></li>
				<li title="flow-line"><a href="#" class="char icon-flow-line" aria-hidden="true"></a></li>
				<li title="flow-parallel"><a href="#" class="char icon-flow-parallel" aria-hidden="true"></a></li>
				<li title="arrow-left"><a href="#" class="char icon-arrow-left" aria-hidden="true"></a></li>
				<li title="arrow-down"><a href="#" class="char icon-arrow-down" aria-hidden="true"></a></li>
				<li title="arrow-up--upload"><a href="#" class="char icon-arrow-up--upload" aria-hidden="true"></a></li>
				<li title="arrow-up"><a href="#" class="char icon-arrow-up" aria-hidden="true"></a></li>
				<li title="arrow-right"><a href="#" class="char icon-arrow-right" aria-hidden="true"></a></li>
				<li title="arrow-left2"><a href="#" class="char icon-arrow-left-2" aria-hidden="true"></a></li>
				<li title="arrow-down2"><a href="#" class="char icon-arrow-down-2" aria-hidden="true"></a></li>
				<li title="arrow-up-2"><a href="#" class="char icon-arrow-up-2" aria-hidden="true"></a></li>
				<li title="arrow-right2"><a href="#" class="char icon-arrow-right-2" aria-hidden="true"></a></li>
				<li title="arrow-up-3"><a href="#" class="char icon-arrow-up-3" aria-hidden="true"></a></li>
				<li title="arrow-left2"><a href="#" class="char icon-arrow-left-3" aria-hidden="true"></a></li>
				<li title="arrow-down3"><a href="#" class="char icon-arrow-down-3" aria-hidden="true"></a></li>
				<li title="arrow-right-3"><a href="#" class="char icon-arrow-right-3" aria-hidden="true"></a></li>
				<li title="arrow-up-4"><a href="#" class="char icon-arrow-up-4" aria-hidden="true"></a></li>
				<li title="arrow-down4"><a href="#" class="char icon-arrow-down-4" aria-hidden="true"></a></li>
				<li title="arrow-left-4"><a href="#" class="char icon-arrow-left-4" aria-hidden="true"></a></li>
				<li title="arrow-right-4"><a href="#" class="char icon-arrow-right-4" aria-hidden="true"></a></li>
				<li title="arrow-down5"><a href="#" class="char icon-arrow-down-5" aria-hidden="true"></a></li>
				<li title="arrow-left-5"><a href="#" class="char icon-arrow-left-5" aria-hidden="true"></a></li>
				<li title="arrow-right-5"><a href="#" class="char icon-arrow-right-5" aria-hidden="true"></a></li>
				<li title="arrow-up-5"><a href="#" class="char icon-arrow-up-5" aria-hidden="true"></a></li>
				<li title="arrow-right-6"><a href="#" class="char icon-arrow-right-6" aria-hidden="true"></a></li>
				<li title="arrow-up-6"><a href="#" class="char icon-arrow-up-6" aria-hidden="true"></a></li>
				<li title="arrow-down7"><a href="#" class="char icon-arrow-down-7" aria-hidden="true"></a></li>
				<li title="arrow-down6"><a href="#" class="char icon-arrow-down-6" aria-hidden="true"></a></li>
				<li title="arrow-left-6"><a href="#" class="char icon-arrow-left-6" aria-hidden="true"></a></li>
				<li title="arrow-right-7"><a href="#" class="char icon-arrow-right-7" aria-hidden="true"></a></li>
				<li title="arrow-left-7"><a href="#" class="char icon-arrow-left-7" aria-hidden="true"></a></li>
				<li title="arrow-up-7"><a href="#" class="char icon-arrow-up-7" aria-hidden="true"></a></li>
				<li title="untitled-2"><a href="#" class="char icon-untitled-2" aria-hidden="true"></a></li>
				<li title="arrow-down-8"><a href="#" class="char icon-arrow-down-8" aria-hidden="true"></a></li>
				<li title="arrow-left-8"><a href="#" class="char icon-arrow-left-8" aria-hidden="true"></a></li>
				<li title="menu"><a href="#" class="char icon-menu" aria-hidden="true"></a></li>
				<li title="elipsis"><a href="#" class="char icon-ellipsis" aria-hidden="true"></a></li>
				<li title="dots"><a href="#" class="char icon-dots" aria-hidden="true"></a></li>
				<li title="dot"><a href="#" class="char icon-dot" aria-hidden="true"></a></li>
				<li title="daniel-bruce"><a href="#" class="char icon-daniel-bruce" aria-hidden="true"></a></li>
				<li title="pictures"><a href="#" class="char icon-pictures" aria-hidden="true"></a></li>
				<li title="video"><a href="#" class="char icon-video" aria-hidden="true"></a></li>
				<li title="resize-shrink"><a href="#" class="char icon-resize-shrink" aria-hidden="true"></a></li>
				<li title="resize-enlarge"><a href="#" class="char icon-resize-enlarge" aria-hidden="true"></a></li>
			</ul>
		</section>
        
        <!-- Buttons
        ================================================== -->        
        <section id="buttons">
          <div class="page-header">
            <h1>4. Buttons</h1>
          </div>

          <h3>Standard buttons</h3>
          <p>Button styles can be applied to anything with the <code>.btn</code> class applied. However, typically you'll want to apply these to only <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements for the best rendering.</p>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Button</th>
                <th>class=""</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><button type="button" class="btn">Default</button></td>
                <td><code>btn</code></td>
                <td>Standard gray button with gradient</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-primary">Primary</button></td>
                <td><code>btn btn-primary</code></td>
                <td>...</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-secondary">Secondary</button></td>
                <td><code>btn btn-secondary</code></td>
                <td>...</td>
              </tr>              
              <tr>
                <td><button type="button" class="btn btn-dark">Dark</button></td>
                <td><code>btn btn-dark</code></td>
                <td>...</td>
              </tr>              
              <tr>
                <td><button type="button" class="btn btn-alternate">Alternate</button></td>
                <td><code>btn btn-alternate</code></td>
                <td>...</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-link">Primary link</button></td>
                <td><code>btn btn-link</code></td>
                <td>For primary text links. (Read more, etc.)</td>
              </tr>
			  <tr>
                <td><button type="button" class="btn btn-link secondary">Secondary link</button></td>
                <td><code>btn btn-link secondary</code></td>
				<td>For secondary text links. (See all photos)</td>
              </tr>
			  <tr>
                <td><button type="button" class="btn btn-link provider">Provider link</button></td>
                <td><code>btn btn-link provider</code></td>
				<td>Links to categories and providers in modules</td>
              </tr>
			  <tr>
                <td><button type="button" class="btn btn-link headline">Headline</button></td>
                <td><code>btn btn-link headline</code></td>
				<td>Links to Deals and Tips in modules</td>
              </tr>
			  <tr>
                <td style="background-color:#48a842;"><button type="button" class="btn btn-link footer-link">Footer Link</button></td>
                <td><code>btn btn-link footer</code></td>
				<td>Footer links</td>
              </tr>
            </tbody>
          </table>
          
          <h3>Button sizes</h3>
          <p>Fancy larger or smaller buttons? Add <code>.btn-large</code>, <code>.btn-small</code>, or <code>.btn-mini</code> for additional sizes.</p>
          <div class="bs-docs-example">
            <p>
              <button type="button" class="btn btn-large btn-primary">Large</button>
              <button type="button" class="btn btn-large btn-secondary">Large</button>
            </p>
            <p>
              <button type="button" class="btn btn-primary">Standard</button>
              <button type="button" class="btn btn-secondary">Standard</button>
            </p>
            <p>            
              <!-- AL calls this `small` whereas Bootstrap refers it as `mini`. -->
              <button type="button" class="btn btn-mini btn-primary">Small</button>
              <button type="button" class="btn btn-mini btn-secondary">Small</button>
            </p>
          </div>
<pre class="prettyprint linenums">
&lt;p&gt;
  &lt;button class="btn btn-large btn-primary" type="button"&gt;Large button&lt;/button&gt;
  &lt;button class="btn btn-large" type="button"&gt;Large button&lt;/button&gt;
&lt;/p&gt;
&lt;p&gt;
  &lt;button class="btn btn-primary" type="button"&gt;Default button&lt;/button&gt;
  &lt;button class="btn" type="button"&gt;Default button&lt;/button&gt;
&lt;/p&gt;
&lt;p&gt;
  &lt;button class="btn btn-small btn-primary" type="button"&gt;Small button&lt;/button&gt;
  &lt;button class="btn btn-small" type="button"&gt;Small button&lt;/button&gt;
&lt;/p&gt;
&lt;p&gt;
  &lt;button class="btn btn-mini btn-primary" type="button"&gt;Mini button&lt;/button&gt;
  &lt;button class="btn btn-mini" type="button"&gt;Mini button&lt;/button&gt;
&lt;/p&gt;
</pre>

		<!-- Form Elements
		================================================== -->
		<section id="forms-elements">
          <div class="page-header">
            <h1>5. Form elements</h1>
          </div>

          <h3>Text Input Fields</h3>
          <form class="bs-docs-example form-inline">
            <input type="text" placeholder="Text input">
          </form>
<pre class="prettyprint linenums">
&lt;input type="text" placeholder="Text input"&gt;
</pre>

          <h3>Textarea</h3>
          <form class="bs-docs-example form-inline">
            <textarea>Larger resizable text area. The grabber in the bottom right allows the user to resize the field.</textarea>
          </form>
		  <hr class="bs-docs-separator" />
		  
		  <h3>Plugin Styling</h3>
		  <p>When using plugins for form fields with built-in menus like text editors, try to match it as close as possible to the style of buttons, button groups and navbars outlined in this document.</p>
		  <img src="./assets/img/text-editor.png" alt="text-editor" />
		  <hr class="bs-docs-separator" />
		  
          <h3>Stacked checkboxes and radios</h3>
          <form class="bs-docs-example">
            <label class="checkbox">
              <input type="checkbox" value="">
              Check this box <br />
			  <input type="checkbox" value="">
              You can also check this box
            </label>
            <hr class="w-50" />
            <label class="radio">
              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
              Option one
            </label>
            <label class="radio">
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              Selecting this option will deselect option one
            </label>
          </form>

          <hr class="bs-docs-separator" />
		  
          <h3>Inline checkboxes</h3>
          <form class="bs-docs-example">
            <label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1">1
            </label>
            <label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox2" value="option2">2
            </label>
            <label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox3" value="option3">3
            </label>
          </form>
		  <hr class="bs-docs-separator" />

          <h3>Form actions</h3>
		  <form class="bs-docs-example">            
              <button type="submit" class="btn btn-primary">Submit Review</button>
              <button type="button" class="btn btn-secondary">Save Draft</button>
          </form>
<pre class="prettyprint linenums">
&lt;div class="form-actions"&gt;
   &lt;button type="submit" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
   &lt;button type="submit" class="btn"&gt;Cancel&lt;/button&gt;
&lt;/div&gt;
</pre>


          <hr class="bs-docs-separator">

			<h3>Inline Help Text</h3>
			<form class="bs-docs-example form-inline">
				<input type="text"> <span class="help-inline mr-40">Some help text</span><span class="info-inline">Proxima Nova Light, 14pt, #7b7b7b</span>
			</form>
          <hr class="bs-docs-separator">
		  
		  <h3>Block Help Text</h3>
		  <form class="bs-docs-example">
            <input type="text">
            <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
			<p class="info-inline">Proxima Nova Light, 14pt, #7b7b7b</p>
          </form>
		  <hr class="bs-docs-separator">
		  
		  <h3>Input Focus</h3>
		  <p>A subtle glow is added when an input is activated.</p>
		  <form class="bs-docs-example form-inline">
            <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="Click to focus..."> <br /><br />
			<p class="info-inline">box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.18); <br />border:solid 1px #dddddd; <br />border-radius: 6px;</p>
          </form>
		  
		  <hr class="bs-docs-separator">
		  
		  <h3>Invalid Input</h3>
		  <p>A red glow and border is added when an input is invalid.</p>
		  <form class="bs-docs-example form-inline">
			<div class="control-group error">
				<div class="controls">
					<input type="email" value="name@email"> <span class="help-inline">Oops! That&rsquo;s not a valid email.</span> <br /><br />
					<p class="info-inline">box-shadow: 0px 0px 6px rgba(226, 67, 30, 0.50); <br />border:solid 1px #e2431e; <br />border-radius: 6px;</p>
				</div>
			</div>
          </form>		  
		  <hr class="bs-docs-separator">
		  
		  <h3>Disabled Input</h3>
		  <p>When disabled, the color of the input field changes to #f8f6ef.</p>
		  <form class="form-inline">
            <input class="input-xlarge" id="disabledInput" type="text" placeholder="Disabled input here…" disabled=""> <br /><br />
			<p class="info-inline">When disabled, the color of the input field changes to #f8f6ef.</p>
          </form>
		  
		  <hr class="bs-docs-separator">
		  
		  <h3>Calendar Select</h3>
		  <img src="./assets/img/calendar.png" alt="calendar" />
		  <p><strong>Month</strong>: <span class="grey">Proxima Nova Bold 20pt, #000</span><br />
		  <strong>Year</strong>: <span class="grey">Proxima Nova Regular 20pt, #aaaaaa</span></p>

		  <p><strong>Days (S, M, T, etc)</strong>: <span class="grey">Proxima Nova Semibold 15pt, #000</span><br />
		  <strong>Active Dates</strong>: <span class="grey">Proxima Nova Regular 15pt, #29a036</span><br />
		  <strong>Disabled/Future Dates</strong>: <span class="grey">Proxima Nova Regular 15pt, #aaaaaa</span></p>
		  <br />
		  
		  <div class="row" style="padding-left: 20px;">
			<div class="pull-left mr-10">
				<p class="btn btn-primary">16</p>
			</div>
			<div class="pull-left">
				<p><strong>Hover/Selected Date</strong>: <span class="grey">Proxima Nova Regular 15pt, #fff<br />
				width: 30px <br />height: 21px </span><br /><span class="lightPink">border-radius: 2px;</span></p>
			</div>
		  </div>
		  <div class="row" style="padding-left: 20px;">
			<div class="pull-left mr-10">
				<p class="btn">22</p>
			</div>
			<div class="pull-left">
				<p><strong>Today</strong>: <span class="grey">Proxima Nova Regular 15pt, #29a036<br />
				width: 30px <br />height: 21px </span><br /><span class="lightPink">border:solid 1px #eae7db;</span><br /><span class="lightPink">border-radius: 2px;</span></p>
			</div>
		  </div>
		  
		</section>

		
		<!-- Form
		================================================== -->
		<section id="forms">
          <div class="page-header">
            <h1>6. Forms</h1>
          </div>
			
			<h3>Default Styles</h3>
			
			<h4>Form Title</h4>
			<label>Label name</label>
              <!-- <input type="text" placeholder="Type something…">
              <span class="help-block">Some help text</span> -->
			  <img src="./assets/img/label-name.png" alt= "form" />
			</label>
			<hr class="bs-docs-separator">

			<h3>Inline Form</h3>
			<label>
			  <img src="./assets/img/inline-form.png" alt= "form" />
			</label>
			<hr class="bs-docs-separator">
		
			<h3>Horizontal Form</h3>
			<label>
			  <img src="./assets/img/horizontal-form.png" alt= "form" />
			</label>
			<hr class="bs-docs-separator">
			
			<h3>Form Module</h3>
			<label>
			  <img src="./assets/img/module-form.png" alt= "form" />
			</label>
		</section>
		
		<!-- Form
		================================================== -->
		<section id="notifications">
          <div class="page-header">
            <h1>7. Notifications</h1>
          </div>
			
			<h3>Red Alert Badges for Messages &amp; Cart</h3>
			
			<h5>Web</h5>
			<div class="bs-docs-example" style="background-color: #29a036;">				
				<div class="logged-in">						
					<a href="#"><span class="mobile-icon profile-icon"></span><span class="text">My Account <b class="caret"></b></span></a>
					<a href="#"><span class="notification">3</span><span class="text">Messages <b class="caret"></b></span></a>
					<a href="#"><span class="mobile-icon cart-icon"></span><span class="text">Cart <b class="caret"></b></span></a>																
				</div>
				<div class="logged-in">						
					<a href="#"><span class="mobile-icon profile-icon"></span><span class="text">My Account <b class="caret"></b></span></a>
					<a href="#"><span class="text">Messages <b class="caret"></b></span></a>
					<a href="#"><span class="mobile-icon cart-icon"></span><span class="notification yellow">1</span><span class="text">Cart <b class="caret"></b></span></a>												
				</div>
				<div class="logged-in">						
					<a href="#"><span class="mobile-icon profile-icon"></span><span class="text">My Account <b class="caret"></b></span></a>
					<a href="#"><span class="notification">3</span><span class="text">Messages <b class="caret"></b></span></a>
					<a href="#"><span class="mobile-icon cart-icon"></span><span class="notification yellow">1</span><span class="text">Cart <b class="caret"></b></span></a>							
				</div>				
			</div>
<pre class="prettyprint linenums">
&lt;code&gt;
  Insert code sample
&lt;/code&gt;
</pre>

			<h5>Mobile</h5>
			<div class="bs-docs-example" style="padding: 5px; width: 400px; background-color: #29a036;">				
				<div class="logged-in mobile">						
					<a href="#"><span class="mobile-icon profile-icon"></span><span class="text">My Account <b class="caret"></b></span></a>
					<a href="#"><span class="notification">3</span><span class="text">Messages <b class="caret"></b></span></a>
					<a href="#"><span class="mobile-icon cart-icon inactive"></span><span class="text">Cart <b class="caret"></b></span></a>															
				</div>
				<div class="logged-in mobile">						
					<a href="#"><span class="mobile-icon profile-icon"></span><span class="text">My Account <b class="caret"></b></span></a>
					<a href="#"><span class="notification inactive">0</span><span class="text">Messages <b class="caret"></b></span></a>
					<a href="#"><span class="mobile-icon cart-icon"><span class="text">Cart <b class="caret"></b></span></span></a>							
				</div>
				<div class="logged-in mobile">						
					<a href="#"><span class="mobile-icon profile-icon"></span></a>
					<a href="#!"><span class="notification">3</span></a>
					<a href="#!"><span class="mobile-icon cart-icon"></span></a>							
				</div>				
			</div>
		</section>

		<!-- Flyout /Modal
		================================================== -->
		<section id="modals">
		<div class="page-header">
			<h1>8. Flyouts / Modals</h1>
		</div>			
		<h3>Darken Background</h3>
		<p>Use this for main nav flyouts or other major modals that require a dimming of the main site content. The whole site (except the nav and top green bar) gets greyed out with #eae7db at 70% opacity.</p>
		<div class="bs-docs-example" style="background-color: #eae7db;">
			<div class="modal" style="position: relative; top: auto; left: auto; right: auto; margin: 0 auto 20px; z-index: 1; max-width: 100%;">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				</div>
			</div>
		</div>
<pre class="prettyprint linenums">
&lt;div class="modal hide fade"&gt;
  &lt;div class="modal-body"&gt;
    &lt;button type="button" class="close" data-dismiss="modal" aria-hidden="true"&gt;x&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>	
		</section>				
		
      </div>
    </div>

  </div>    
<?php
page_close();
?>