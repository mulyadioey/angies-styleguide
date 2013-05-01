<?php
require('inc/templates.php');

page_open();
?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
	<div class="container">
		<h1>Components</h1>
		<p class="lead">Examples of how to group the basic elements together to create components.</p>
	</div>
</header>

<div class="container">

	<!-- Docs nav
	================================================== -->
	<div class="row">
		<div class="span3 bs-docs-sidebar">
			<ul class="nav nav-list bs-docs-sidenav">          
				<li class="active"><a href="#dropdown-menus">Dropdown Menus</a></li>
				<li><a href="#button-dropdown-menus">Button Dropdown Menus</a></li>
				<li><a href="#button-groups">Button groups</a></li>
				<li><a href="#navbar">Navbar</a></li>
				<li><a href="#breadcrumbs">Breadcrumbs</a></li>
				<li><a href="#pagination">Pagination</a></li>
				<li><a href="#images">Images</a></li>
				<li><a href="#maps">Maps</a></li>
				<li><a href="#content-lookups">Content Lookups</a></li>
				<li><a href="#phone">Phone-Specific</a></li>
				<li><a href="#alerts">Alerts</a></li>
			</ul>
		</div>
		<div class="span9">
		
		<!-- Dropdown Menus
		================================================== -->
		<section id="dropdown-menus">
			<div class="page-header">
				<h1>1. Dropdown Menus</h1>
			</div>
			<h3>Example</h3>
			<div class="bs-docs-example">
				<!-- .dropdown is not needed for the markup; it's for presentation purposes only. -->
				<div class="dropdown clearfix">				
					<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
						<li><a tabindex="-1" href="#">Action</a></li>
						<li><a tabindex="-1" href="#">Another action</a></li>
						<li><a tabindex="-1" href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a tabindex="-1" href="#">Separated link</a></li>
					</ul>
				</div>
			</div>
<pre class="prettyprint linenums">
&lt;ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu"&gt;
  &lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
  &lt;li class="divider"&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
		</section>
		
		<!-- Button Dropdown Menus
		================================================== -->
		<section id="button-dropdown-menus">
			<div class="page-header">
				<h1>2. Button Dropdown Menus</h1>
			</div>
			<h3>Button dropdown</h3>
			<div class="bs-docs-example">
				<div class="btn-group">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						With Coupons<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<!-- dropdown menu links -->
						<li><a tabindex="-1" href="#">Action</a></li>
						<li><a tabindex="-1" href="#">Another action</a></li>
						<li><a tabindex="-1" href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a tabindex="-1" href="#">Separated link</a></li>
					</ul>
				</div>
			</div>
<pre class="prettyprint linenums">
&lt;div class="btn-group"&gt;
  &lt;a class="btn dropdown-toggle" data-toggle="dropdown" href="#"&gt;
    With Coupons
    &lt;span class="caret"&gt;&lt;/span&gt;
  &lt;/a&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;!-- dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
		</section>
		
		<!-- Button Groups
		================================================== -->
		<section id="button-groups">
			<div class="page-header">
				<h1>3. Button groups</h1>
			</div>
			<h3>2-Button Group</h3>
			<div class="bs-docs-example">				
				<div class="btn-group">
					<button class="btn active"><span class="list">List</span></button>					
					<button class="btn"><span class="map">Map</span></button>
				</div>			
			</div>		  
			<h3>3-Button Group</h3>
			<div class="bs-docs-example">
				<div class="btn-group">
					<button class="btn">Left</button>
					<button class="btn">Middle</button>
					<button class="btn">Right</button>
				</div>
			</div>
<pre class="prettyprint linenums">
&lt;div class="btn-group"&gt;
  &lt;button class="btn"&gt;Left&lt;/button&gt;
  &lt;button class="btn"&gt;Middle&lt;/button&gt;
  &lt;button class="btn"&gt;Right&lt;/button&gt;
&lt;/div&gt;
</pre>          
        </section>

        <!-- Navbar
        ================================================== -->
		<section id="navbar">
			<div class="page-header">
				<h1>4. Navbar</h1>
			</div>
			<h3>Basic Navbar</h3>
			<p>This is used in the Service Provider profile page template.</p>
			<div class="bs-docs-example">
				<div class="navbar basic">
					<div class="navbar-inner">						
						<ul class="nav">
							<li class="active"><a href="#">Current Page</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
						</ul>
					</div>
				</div>				
			</div>
		</section>
		
		<!-- Breadcrumbs
        ================================================== -->
		<section id="breadcrumbs">
			<div class="page-header">
				<h1>5. Breadcrumbs</h1>
			</div>
			<h3>Examples</h3>
			<div class="bs-docs-example">
				<ul class="breadcrumb">
					<li class="active">Home</li>					
				</ul>
				<ul class="breadcrumb">
					<li><a href="#">Home</a> <span class="divider">/</span></li>
					<li class="active">Search for Drywall near 1030 E. Washington St., Indianapolis, IN</li>
				</ul>
				<ul class="breadcrumb">
					<li><a href="#">Home</a> <span class="divider">/</span></li>
					<li><a href="#">Search for Drywall near 1030 E. Washington St., Indianapolis, IN</a> <span class="divider">/</span></li>
					<li class="active">Acme Drywall Co</li>
				</ul>				
			</div>
		</section>

		<!-- Pagination
        ================================================== -->
		<section id="pagination">
			<div class="page-header">
				<h1>6. Pagination</h1>
			</div>
			<h3>Standard Pagination</h3>
			<div class="bs-docs-example">
				<div class="pagination">
					<ul>
						<li class="prev"><a href="#"><b class="left-caret"></b> Prev</a></li>
						<li><a href="#">1</a></li>
						<li class="active"><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li class="next"><a href="#">Next <b class="right-caret"></b></a></li>
					</ul>
				</div>			
			</div>
<pre class="prettyprint linenums">
&lt;div class="pagination"&gt;
  &lt;ul&gt;
    &lt;li class=&quot;prev&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;b class=&quot;left-caret&quot;&gt;&lt;/b&gt; Prev&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;next&quot;&gt;&lt;a href=&quot;#&quot;&gt;Next &lt;b class=&quot;right-caret&quot;&gt;&lt;/b&gt;&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
			<h3>Condensed Pagination</h3>
			<p>The pagination width follows its container. You don't need to change any of its code. In this example, the container is 300-pixel wide.</p>
			<div class="bs-docs-example">
				<div style="width: 300px">
					<div class="pagination">
						<ul>
							<li class="prev"><a href="#"><b class="left-caret"></b> Prev</a></li>
							<li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li class="next"><a href="#">Next <b class="right-caret"></b></a></li>
						</ul>
					</div><!-- /.pagination -->
				</div>
			</div>
		</section>
		
		<!-- Images
        ================================================== -->
    <section id="images">
		<div class="page-header">
			<h1>7. Images</h1>
		</div>

		<h3>Image Thumbnails</h3>
		<h5>Large (300x200)</h5>
		<img class="thumb" src="./assets/img/thumb-large.png" alt="300x200">
						
		<h5>Medium (194x128)</h5>
		<img class="thumb" src="./assets/img/thumb-medium.png" alt="194x128">
		
		<h5>Small (140x92)</h5>
		<img class="thumb" src="./assets/img/thumb-small.png" alt="140x92">				
		
		<hr class="bs-docs-separator" />
		
		<h3>Deal Thumbnails</h3>
		
		<h5>Large Deal Thumbnails (200x200)</h5>
		<div class="docs-image">
			<img class="deal-large" src="/assets/img/thumb-deal-large.png" alt="200x200">			
			<div class="info">
				<p>Use this on a Deal detail page. The image is cropped to a square and the corners are rounded with a 6px radius.</p>
				<p class="info-inline">
					border:solid 1px #e8e6dd;<br>
					border-radius:6px;<br>
					box-shadow: 0px 2px 2px rgba(235, 235, 231, 1);
				</p>
			</div>
		</div>
		<h5>Deal Thumbnails (120x120)</h5>
		<div class="docs-image">
			<img class="deal" src="/assets/img/thumb-deal.png" alt="120x120">			
			<div class="info">
				<p>For use on the far left of the standard deal module. The rounded left corners match the rounded corners of the deal module.</p>
				<p class="info-inline">
					border-top-left-radius: 6px;<br>
					border-top-right-radius: 0px;<br>
					border-bottom-left-radius: 6px;<br>
					border-bottom-right-radius: 0px;
				</p>
			</div>
		</div>				
		
		<hr class="bs-docs-separator" />
		
		<h3>Avatars</h3>
		<table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Default Image</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="./assets/img/user-img-large.png" /></td>
                <td><strong>100 x 100</strong> Featured placement for the Service Provider page.</td>
              </tr>
              <tr>
                <td><img src="./assets/img/user-img-standar.png" /></td>
                <td><strong>60 x 60</strong> Standard size for use in search results</td>
              </tr>
              <tr>
                <td><img src="./assets/img/user-img-small.png" /></td>
                <td><strong>40 x 40</strong> Smaller size for use in modules like Recently Viewed.</td>
              </tr>
              <tr>
                <td><img src="./assets/img/user-img-smaller.png" /></td>
                <td><strong>24 x 24</strong> Smallest size to be used for social meta data.</td>
              </tr>
            </tbody>
        </table>
    </section>
	
	<!-- Maps
        ================================================== -->
    <section id="maps">
		<div class="page-header">
			<h1>8. Maps</h1>
		</div>

		<h3>Custom pins</h3>
		<div class="docs-custom-pin">
		<table class="table table-bordered table-striped">			
            <thead>
              <tr>
                <th>Image</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><mark class="marker"><b>1</b></mark></td>
                <td align="left">Map marker for search results</td>
              </tr>
              <tr>
                <td><mark class="marker highlight"><b>1</b></mark></td>
                <td>Highlight state for map marker</td>
              </tr>
              <tr>
                <td><mark class="marker secondary"><b>1</b></mark></td>
                <td>Secondary map marker</td>
              </tr>
              <tr>
                <td><span class="grade sm a">A</span></td>
                <td>Use smallest size grade icons (24 px) to display reviews on the map</td>
              </tr>
            </tbody>
        </table>
		</div>
		
		<hr class="bs-docs-separator" />
		
		<h3>Basic map - integration with Google Maps</h3>
		<img src="./assets/img/maps.png" />
		
		<hr class="bs-docs-separator" />
		
		<h3>Service Map</h3>
		<div class="row">
			<div class="span3">
				<img src="./assets/img/maps.png" />
			</div>
			<div class="span6">
				<p class="info-inline" style="margin-top: 30px;">
					<strong>Service area overlay</strong><br>
					#4db346 (Lighter Green)<br>
					30% opacity
				</p>
			</div>
		</div>
		
	</section>

	<!-- Content Lockups
        ================================================== -->
    <section id="content-lookups">
		<div class="page-header">
			<h1>9. Content Lockups</h1>
		</div>
		
		<h3>Image, Headline, Marketing Copy</h3>
		<div class="bs-docs-example">
			<div class="media">
				<a class="pull-left thumbnail" href="#">
					<img class="media-object" alt="image" src="/assets/img/thumb-large.png">
				</a>
				<div class="media-body">
					<h4 class="media-heading">Headline</h4>
					<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
				</div>
            </div>
		</div>
<pre class="prettyprint linenums">
&lt;code&gt;
Insert code sample
&lt;/code&gt;
</pre>

		<h3>Provider Listing</h3>
		<div class="bs-docs-example">
			<header class="row-fluid">	
				<div class="pull-right grade-lockup">
					<p class="review-count"><a href="#!" class="popover-reviews">63 reviews</a><br> <span>31 by Neighbors</span></p>
					<span class="grade a">A</span>
				</div>
					
				<div class="name-lockup">
					<img src="/assets/img/user-img-standar.png" class="pull-left results-avatar">
					<div class="header-lockup">
						<h3><a href="#!" class="incognito">Mulhall Construction</a></h3>
						<p></p>
					</div>
					<p><a href="#!" class="coupon-count"><i class="icon icon-icn-coup"></i>2 coupons</a></p>
				</div>

			</header>
		</div>
<pre class="prettyprint linenums">
&lt;code&gt;
Insert code sample
&lt;/code&gt;
</pre>
	</section>
	
		<h3>Provider Listing - Tablet</h3>
		<div class="bs-docs-example">
			<header class="row-fluid tablet">	
				<div class="name-lockup">
					<div class="span11">
						<h4><a href="#!" class="incognito">Mulhall Construction</a></h4>
						<p></p>
					</div>
					<p class="review-count pull-right mt-10"><a href="#!" class="popover-reviews">16 reviews</a></p>
				</div>
				
				<div class="grade-lockup">
					<p class="span11"><i class="icon icon-icn-coup"></i></p>
					<span class="grade sm a pull-right">A</span>
				</div>

			</header>
		</div>
<pre class="prettyprint linenums">
&lt;code&gt;
Insert code sample
&lt;/code&gt;
</pre>

		<h3>Provider Listing - Mobile</h3>
		<div class="bs-docs-example">
			<header class="row-fluid mobile">	
				<div class="name-lockup">
					<div class="header-lockup">
						<h4><a href="#!" class="incognito">Mulhall Construction</a></h4>
						<p></p>
					</div>
				</div>
				
				<div class="grade-lockup">
					<div class="span11">
						<span class="letter-grade letter-grade-a">A&nbsp;</span>
						<p class="review-count"><a href="#!" class="popover-reviews">16 reviews</a></p>
					</div>
					<p><i class="icon icon-icn-coup"></i></p>
				</div>

			</header>
		</div>
<pre class="prettyprint linenums">
&lt;code&gt;
Insert code sample
&lt;/code&gt;
</pre>

		<h3>Small Provider Listing</h3>
		<div class="bs-docs-example">
			<header class="row-fluid">
				<div class="grade-lockup">
					<img src="/assets/img/user-img-small.png" class="pull-left mr-10" />
					<div class="pull-left provider">
						<h5><a href="#!" class="incognito">Mulhall Construction</a></h5>
						<div class="span9">
							<span class="letter-grade letter-grade-a">A&nbsp;</span>
							<p class="review-count"><a href="#!" class="popover-reviews">264 reviews</a></p>
						</div>
						<p class="span2">45m</p>
					</div>
				</div>
			</header>
		</div>
<pre class="prettyprint linenums">
&lt;code&gt;
Insert code sample
&lt;/code&gt;
</pre>

		<h3>Activity</h3>
		<div class="bs-docs-example">
			<div class="neighborhood-activity">
				<article class="activity-item">
					<div class="cta-column pull-right">
						<p class="hour">When they did it</p>
						<button type="button" class="btn pull-right">Read</button>
					</div>
						
					<div>
						<img class="pull-left mr-10" src="/assets/img/user-05-medium.png">
						<div class="copy">
							<p class="name">User<span> did something</span></p>
							<h3>What they bought/posted/reviewed</h3>
							<p class="comp-name">Details</p>
						</div>
					</div>
				</article>
				<article class="activity-item">
					<div class="cta-column pull-right">
						<p class="hour">Yesterday</p>
						<button type="button" class="btn pull-right">Read</button>
					</div>
						
					<div>
						<img class="pull-left mr-10" src="/assets/img/user-05-medium.png">
						<div class="copy">
							<p class="name">Switched Electric<span> posted a tip</span></p>
							<h3>Easy Ways To Weatherproof Your Home</h3>
							<p class="comp-name">Within a few years, most weatherproofing projects will pay for themselves...</p>
						</div>
					</div>
				</article>
			</div>
		</div>
<pre class="prettyprint linenums">
&lt;code&gt;
Insert code sample
&lt;/code&gt;
</pre>

	</section>
	
		</div><!-- /.span9 -->
	</div><!-- /.row -->
</div><!-- /.container -->

<?php
page_close();
?>