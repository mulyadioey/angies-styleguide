<?php
require('inc/templates.php');

page_open('Modules - Angie&rsquo;s List');
?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>Modules</h1>
    <p class="lead">This system was designed to be modular. See below for some examples.</p>
  </div>
</header>


  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li class="active"><a href="#overview">Overview</a></li>
          <li><a href="#marketing-promos">Marketing Promos</a></li>
          <li><a href="#user-focus">User Focus</a></li>
          <li><a href="#neighborhood-focus">Neighborhood Focus</a></li>
          <li><a href="#commerce">Commerce</a></li>          
          <li><a href="#media-content">Media Content</a></li>          
        </ul>
      </div>
      <div class="span9">


        <!-- Overview
        ================================================== -->
        <section id="overview">
          <div class="page-header">
            <h1>1. Basic Formatting Overview</h1>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </section>

        <!-- Marketing Promos
        ================================================== -->
        <section id="marketing-promos">
          <div class="page-header">
            <h1>2. Marketing Promos</h1>
          </div>
          <h3>Large promo with a single CTA</h3>
          <h5>Full width</h5>
          <div class="bs-docs-example" style="width: 750px;">
          	<div class="row-promo">          		          		
          		<i class="icn icn-cash"></i>
          		<p><strong>Earn $30 Angie Cash</strong> by purchasing a deal for <strong>$100</strong> or more!</p>          		
          		<div class="cta-block">
          			<button type="button" class="btn btn-primary btn-large">Shop Deals</button>          			
          		</div>
          	</div>
          </div>
          <h5>Tablet</h5>
          <div class="bs-docs-example">          	
          	<div class="row-promo tablet">
          		<i class="icn icn-cash"></i>
          		<p><strong>Earn $30 Angie Cash</strong> by purchasing a deal for <strong>$100</strong> or more!</p>
          		<div class="cta-block">
          			<button type="button" class="btn btn-primary btn-large">Shop Deals</button>          			
          		</div>
          	</div>
          </div>
<pre class="prettyprint linenums">
&lt;div class="row-promo"&gt;
	&lt;i class="icn icn-cash"&gt;&lt;/i&gt;
	&lt;p&gt;&lt;strong&gt;Earn $30 Angie Cash&lt;/strong&gt; by purchasing a deal for &lt;strong&gt;$100&lt;/strong&gt; or more!&lt;/p&gt;
	&lt;div class="cta-block"&gt;
		&lt;button type="button" class="btn btn-primary btn-large"&gt;Shop Deals&lt;/button&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
          <h5>Mobile</h5>
          <div class="bs-docs-example" style="width: 500px;">          	
          	<div class="row-promo mobile">
          		<i class="icn icn-cash"></i>
          		<p><strong>Earn $30 Angie Cash</strong> by purchasing a deal for <strong>$100</strong> or more!</p>
          		<div class="cta-block">
          			<button type="button" class="btn btn-primary btn-large">Shop Deals</button>          			
          		</div>
          	</div>
          </div>
          <!-- /==============================/ -->
          <h3>Large promo with multiple CTA</h3>
          <p>When using multiple CTA in a group, use button color to put emphasis on the preferred action.</p>
          <h5>Full width</h5>
          <div class="bs-docs-example" style="width: 750px;">
          	<div class="row-promo">
          		<i class="icn icn-search-yellow"></i>
          		<p><strong>You recently searched for handymen.</strong> Did you hire someone?</p>
          		<div class="cta-block">
          			<button type="button" class="btn btn-primary btn-large">Yes</button>
          			<button type="button" class="btn btn-secondary btn-large">No</button>
          		</div>
          	</div>
          </div>
          <h5>Tablet</h5>
          <div class="bs-docs-example">
          	<div class="row-promo tablet">
          		<i class="icn icn-search-yellow"></i>
          		<p><strong>You recently searched for handymen.</strong> Did you hire someone?</p>
          		<div class="cta-block">
          			<button type="button" class="btn btn-primary btn-large">Yes</button>
          			<button type="button" class="btn btn-secondary btn-large">No</button>
          		</div>
          	</div>
          </div>
          <h5>Mobile</h5>
          <div class="bs-docs-example" style="width: 500px;">
          	<div class="row-promo mobile">
          		<i class="icn icn-search-yellow"></i>
          		<p><strong>You recently searched for handymen.</strong> Did you hire someone?</p>
          		<div class="cta-block">
          			<button type="button" class="btn btn-primary btn-large">Yes</button>
          			<button type="button" class="btn btn-secondary btn-large">No</button>
          		</div>
          	</div>
          </div>
          <h3>Single Line Text Promo</h3>
		  <p>This promo is used on the My Angie&rsquo;s page between the search bar and the main content. There should be 20px of padding above and below.</p>
          <div class="bs-docs-example" style="width: 750px;">
          	<div class="row-promo-single">
          		<i class="icn icn-cash"></i><p><strong>Pledge allegiance to great service!</strong> Continue your membership for 2+ years and <em>save 15%</em>
          		<button type="button" class="btn btn-primary btn-secondary">Save Now</button></p>
          	</div>
          </div>
<pre class="prettyprint linenums">
&lt;div class=&quot;row-promo-single&quot;&gt;
  &lt;i class=&quot;icn icn-cash&quot;&gt;&lt;/i&gt;&lt;p&gt;&lt;strong&gt;Pledge allegiance to great service!&lt;/strong&gt; Continue your membership for 2+ years and &lt;em&gt;save 15%&lt;/em&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-secondary&quot;&gt;Save Now&lt;/button&gt;&lt;/p&gt;
&lt;/div&gt;
</pre>
          <h3>Small Promo</h3>
          <p>The headline should function as the CTA, followed by the small arrow icon.</p>
          <div class="bs-docs-example">
          	<div class="row-promo-small">
          		<i class="icn icn-cash"></i>
          		<div>
          			<a href="#">Pledge allegiance to great service! ▶</a>
          			<p>Continue your membership for 2+ years and <em>save 15%</em></p>
          		</div>
          	</div>
          </div>
<pre class="prettyprint linenums">
&lt;div class=&quot;row-promo-small&quot;&gt;
  &lt;i class=&quot;icn icn-cash&quot;&gt;&lt;/i&gt;
  &lt;div&gt;
    &lt;a href=&quot;#&quot;&gt;Pledge allegiance to great service! &#9654;&lt;/a&gt;
    &lt;p&gt;Continue your membership for 2+ years and &lt;em&gt;save 15%&lt;/em&gt;&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
        </section>

        <!-- User Focus
        ================================================== -->
        <section id="user-focus">
          <div class="page-header">
            <h1>3. User Focus</h1>
          </div>
		  <h3>Recently Viewed</h3>
          <div class="bs-docs-example">
          	<div class="recently-viewed">
									
							<article>
								
								<img src="./assets/img/user-01.png" />
			
								<h6><a href='#!'>Mulhall Construction</a></h6>
								<p class="left"><span class="grade inline a">A</span> <a href="#!" class="muted">264 Reviews</a></p><p class="right">45m</p>
								
							</article>
					
							<article>
								
								<img src="./assets/img/user-02.png" />
			
								<h6><a href='#!'>Rayco Painting</a></h6>
								<p class="left"><span class="grade inline a">A</span> <a href="#!" class="muted">73 Reviews</a></p><p class="right">1h</p>
								
							</article>
							
							<article>
								
								<img src="./assets/img/user-03.png" />
			
								<h6><a href='#!'>Gil Construction</a></h6>
								<p class="left"><span class="grade inline a">A</span> <a href="#!" class="muted">142 Reviews</a></p><p class="right">1d</p>
								
							</article>
							
							<article>
								
								<img src="./assets/img/user-04.png" />
			
								<h6><a href='#!'>Bill Nass Painting</a></h6>
								<p class="left"><span class="grade inline b">B</span> <a href="#!" class="muted">13 Reviews</a></p><p class="right">2d</p>
								
							</article>
							
							<article>
								
								<img src="./assets/img/user-05.png" />
			
								<h6><a href='#!'>Yui Wong Construction</a></h6>
								<p class="left"><span class="grade inline a">A</span> <a href="#!" class="muted">48 Reviews</a></p><p class="right">3d</p>
								
							</article>
											
							<footer>
								
								<p><a href="#!" class="muted">My Search History <span class="triangle">&#9654;</span></a></p>
								
							</footer>
							
					</div>
          </div>
<pre class="prettyprint linenums">
&lt;div class=&quot;recently-viewed&quot;&gt;		
  &lt;article&gt;	
    &lt;img src=&quot;./assets/img/user-01.png&quot; /&gt;
    &lt;h6&gt;&lt;a href='#!'&gt;Mulhall Construction&lt;/a&gt;&lt;/h6&gt;
    &lt;p class=&quot;left&quot;&gt;&lt;span class=&quot;grade inline a&quot;&gt;A&lt;/span&gt; &lt;a href=&quot;#!&quot; class=&quot;muted&quot;&gt;264 Reviews&lt;/a&gt;&lt;/p&gt;&lt;p class=&quot;right&quot;&gt;45m&lt;/p&gt;
  &lt;/article&gt;
  ...
&lt;/div&gt;
</pre>
          <h2>Recent Searches</h2>
          <img src="./assets/img/recent-searches.png" />
          <h2>Write a Review</h2>
          <img src="./assets/img/write-review.png" />
        </section>
		
		
		<!-- Neighbourhood focus
        ================================================== -->
        <section id="neighborhood-focus">
			<div class="page-header">
				<h1>4. Neighbourhood Focus</h1>
			</div>
			
			<h3>Recent Reviews</h3>
			<div class="bs-docs-example">
				<p class="review-title">Recent Reviews in Indianapolis</p>
				<div class="mini-layout review-block">
					<article>
					<p class="date">3/12/2013</p>
						<div class="heading">
							<span class="grade a">A</span>
							<h4>Rayco Painting</h4>
							<p class="grey"><span class="grade inline a">A</span> 73 Reviews</p>
						</div>
						<p class="overall"><span class="title">I got a free quote for interior painting...</span><br />The guy that came out was very nice and he got the quote turned around very quickly and I'm seeing that with a lot of painters in the area. My house...</p>	
						<a href="#">Read more</a>
					</article>
				</div>
			</div>
<pre class="prettyprint linenums">
&lt;div class="mini-layout review-block"&gt;
  &lt;article&gt;
    &lt;p class="date"&gt;3/12/2013&lt;/p&gt;
    &lt;div class="heading"&gt;
      &lt;span class="grade a">A&lt;/span&gt;
      &lt;h4>Rayco Painting&lt;/h4&gt;
      &lt;p class="grey"&gt;&lt;span class="grade inline a">A&lt;/span&gt; 73 Reviews&lt;/p&gt;
    &lt;/div&gt;
    &lt;p class="overall"&gt;&lt;span class="title"&gt;I got a free quote for interior painting...&lt;/span&gt;&lt;br /&gt;The guy that came out was very nice and he got the quote turned around very quickly and I'm seeing that with a lot of painters in the area. My house...&lt;/p&gt;	
    &lt;a href="#"&gt;Read more&lt;/a&gt;
  &lt;/article&gt;
&lt;/div&gt;
</pre>

			<h3>Neighbor Reviews</h3>
			<p class="review-title">Neighbour Reviews</p>
			<article>
				<div class="row">
					<div class="span4">
						<img src="./assets/img/neighbour-review.png" alt="neighbour-review" />
					</div>
					<div class="span4">
						<div class="info-review">
							<p>See above (Write a Review) <br />for additional formatting</p>
						</div>
					</div>
				</div>
			</article>
			
			<h3>Neighborhood Activity</h3>
			<div class="bs-docs-example">
				<div class="neighborhood-activity">
					<article class="activity-item">
						<div class="cta-column pull-right mt-15">
							<div class="price-tag">
								<div class="tag left"></div>
								<div class="tag mid"><span>$99</span></div>
								<div class="tag right"></div>
							</div>
						</div>							
						<div>
							<img class="pull-left mr-10" src="./assets/img/user-05-medium.png" />
							<div class="copy">
								<p class="name">John F. <span>& 11 others bought</span></p>
								<h3>$99 for $200 of Plumbing Services </h3>
								<p class="comp-name">from Ace Plumbing & Rooter</p>
							</div>
						</div>
					</article>
					<article class="activity-item">
						<div class="cta-column pull-right mt-15">
							<div class="price-tag">
								<div class="tag left"></div>
								<div class="tag mid"><span>$515</span></div>
								<div class="tag right"></div>
							</div>
						</div>							
						<div>
							<img class="pull-left mr-10" src="./assets/img/user-05-medium.png" />
							<div class="copy">
								<p class="name">Jennifer C. <span>& 9 others bought</span></p>
								<h3>$150 for A Whole House Color Consultation</h3>
								<p class="comp-name">from Color Craft Painting</p>
							</div>
						</div>
					</article>
					<article class="activity-item">
						<div class="cta-column pull-right read-cta-block">
							<p>3 hours ago</p>
							<button type="button" class="btn btn-secondary">Read</button>
						</div>							
						<div>
							<img class="pull-left mr-10" src="./assets/img/user-05-medium.png" />
							<div class="copy">
								<p class="name">Jennifer P. <span>reviewed</span></p>
								<h3>Rayco Painting <span class="grade inline a">A</span></h3>
								<p class="comp-name">They did an amazing job painting the whole interior of my house. I got est...</p>
							</div>
						</div>
					</article>
				</div>
			</div>
<pre class="prettyprint linenums">
&lt;div class=&quot;neighborhood-activity&quot;&gt;
  &lt;article class=&quot;activity-item&quot;&gt;
    &lt;div class=&quot;cta-column pull-right mt-15&quot;&gt;
      &lt;div class=&quot;price-tag&quot;&gt;
        &lt;div class=&quot;tag left&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;tag mid&quot;&gt;&lt;span&gt;$99&lt;/span&gt;&lt;/div&gt;
        &lt;div class=&quot;tag right&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;							
    &lt;div&gt;
      &lt;img class=&quot;pull-left mr-10&quot; src=&quot;./assets/img/user-05-medium.png&quot; /&gt;
      &lt;div class=&quot;copy&quot;&gt;
        &lt;p class=&quot;name&quot;&gt;John F. &lt;span&gt;&amp; 11 others bought&lt;/span&gt;&lt;/p&gt;
        &lt;h3&gt;$99 for $200 of Plumbing Services &lt;/h3&gt;
        &lt;p class=&quot;comp-name&quot;&gt;from Ace Plumbing &amp; Rooter&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/article&gt;
  ...
  &lt;article class=&quot;activity-item&quot;&gt;
    &lt;div class=&quot;cta-column pull-right read-cta-block&quot;&gt;
      &lt;p&gt;3 hours ago&lt;/p&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Read&lt;/button&gt;
    &lt;/div&gt;                          
    &lt;div&gt;
      &lt;img class=&quot;pull-left mr-10&quot; src=&quot;./assets/img/user-05-medium.png&quot; /&gt;
      &lt;div class=&quot;copy&quot;&gt;
        &lt;p class=&quot;name&quot;&gt;Jennifer P. &lt;span&gt;reviewed&lt;/span&gt;&lt;/p&gt;
        &lt;h3&gt;Rayco Painting &lt;span class=&quot;grade inline a&quot;&gt;A&lt;/span&gt;&lt;/h3&gt;
        &lt;p class=&quot;comp-name&quot;&gt;They did an amazing job painting the whole interior of my house. I got est...&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/article&gt;
&lt;/div&gt;
</pre>

			<h3>Popular providers in your area, specific category</h3>
			<p class="review-title">Popular Providers in Indianapolis</p>
			<article>
				<img src="./assets/img/popular-activity.png" />
			</article>
			
			<h3>Popular providers in your area, overall</h3>
			<p class="review-title">Popular Providers in Indianapolis</p>
			<div class="bs-docs-example">
				<div class="recently-viewed">				
					<article>
						<img src="./assets/img/user-01.png">
						<h6><a href="#!">Mulhall Construction</a></h6>
						<p><span class="grade inline a">A</span> <a href="#!" class="muted">264 Neighbor Reviews</a></p>
					</article>
					<article>
						<img src="./assets/img/user-02.png">
						<h6><a href="#!">Rayco Painting</a></h6>
						<p><span class="grade inline a">A</span> <a href="#!" class="muted">73 Neighbor Reviews</a></p>
					</article>
							
					<article>
						<img src="./assets/img/user-03.png">
						<h6><a href="#!">Gil Construction</a></h6>
						<p><span class="grade inline a">A</span> <a href="#!" class="muted">142 Neighbor Reviews</a></p>		
					</article>
							
					<article>
						<img src="./assets/img/user-04.png">
						<h6><a href="#!">Bill Nass Painting</a></h6>
						<p><span class="grade inline b">B</span> <a href="#!" class="muted">13 Neighbor Reviews</a></p>
					</article>
							
					<article>
						<img src="./assets/img/user-05.png">
						<h6><a href="#!">Yui Wong Construction</a></h6>
						<p><span class="grade inline a">A</span> <a href="#!" class="muted">48 Neighbor Reviews</a></p>
					</article>
											
					<footer>	
						<p><a href="#!" class="muted">More Neighborhood Activity <span class="triangle">▶</span></a></p>
					</footer>		
				</div>
			</div>
<pre class="prettyprint linenums">
&lt;code&gt;
  Insert code sample
&lt;/code&gt;
</pre>
			
			<h3>Popular searches in your area, with photo</h3>
			<p class="review-title">Popular Providers in Indianapolis</p>
			<article>
				<img src="./assets/img/popular-search.png" />
			</article>
			
			<h3>Popular searches in your area</h3>
			<div class="bs-docs-example">
				<p class="review-title mb-20">Popular Providers in Indianapolis</p>
				<div class="clearfix">
					<ul class="list-search ml-0">
						<li class="category-heading">Landscaping</li>
						<li><a href="#">Lawn Irrigation</a></li>
						<li><a href="#">Lawn & Yard Care</a></li>
						<li><a href="#">Lawn Fertilization & Treatment</a></li>
						<li><a href="#">Leaf Removal</a></li>
						<li><a href="#">Lawn Mower & Power Tool Rep...</a></li>
					</ul>
					<ul class="list-search">
						<li class="category-heading">Cleaning Services</li>
						<li><a href="#">Carpet Cleaning</a></li>
						<li><a href="#">Gutter Cleaning</a></li>
						<li><a href="#">Housecleaning</a></li>
						<li><a href="#">Upholstery Cleaning</a></li>
						<li><a href="#">Window Cleaning</a></li>
					</ul>
				</div>
			</div>
<pre class="prettyprint linenums">
&lt;code&gt;
  Insert code sample
&lt;/code&gt;
</pre>
		</section>


                <!-- Commerce
        ================================================== -->
        <section id="commerce">
          <div class="page-header">
            <h1>5. Commerce</h1>
          </div>
		  <h3>Featured Deal</h3>
          <p>Treatment lockup for display on the My Angie&rsquo;s page.</p>
          <div class="bs-docs-example">
			<div class="mini-layout commerce deal">
				<div class="media">
				  <img class="media-object pull-left" src="./assets/img/hammer.png" alt="propic" />
				  <div class="media-body">
					<h5>T.Ross, Handyman</h5>
					<p class="deal-head mb-25">Handyman Service for Half a Day</p>
					<div class="row">
						<div class="span2">
							<p class="medium-gray">$360 Value</p>
						</div>
						<div class="pull-right mr-10">
							<div class="price-tag">
								<div class="tag left"></div>
								<div class="tag mid"><span>$180</span></div>
								<div class="tag right"></div>
							</div>
						</div>
					</div>
				  </div>
				</div>
			</div>
          </div>
<pre class="prettyprint linenums">
&lt;code&gt;
  Insert code sample
&lt;/code&gt;
</pre>

			<h3>Horizontal Deal Listing</h3>
			<p>For use on the main nav flyouts. If used elsewhere, the width is flexible from 5 to 12 columns. Use the layout from the Deal carousel above if narrower than 5 columns.</p>
			<div class="bs-docs-example">
				<div class="mini-layout commerce">
					<div class="row">
						<div class="span5">
							<div class="media">
							  <i class="icn icn-deal"></i>
							  <div class="media-body">
								<h5 class="no-margin">T.Ross, Handyman</h5>
								<p class="deal-head">Handyman Service for Half a Day</p>
							  </div>
							</div>
						</div>
						<div class="pull-right">
							<p class="medium-gray text-right mb-0">$360 Value</p>
							<div class="price-tag pull-right">
								<div class="tag left"></div>
								<div class="tag mid"><span>$180</span></div>
								<div class="tag right"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
<pre class="prettyprint linenums">
&lt;code&gt;
  Insert code sample
&lt;/code&gt;
</pre>

			<h3>Horizontal Deal listing with search result</h3>
			<p>In the context of search results, horizontal deal listings lose the provider name and shrink to a single line.</p>
			<div class="bs-docs-example">
				<div class="mini-layout commerce result">
					<div class="row">
						<div class="span4">
							<i class="icn icn-deal pull-left"></i>
							<p class="deal-head lh pull-left">Handyman Service for Half a Day</p>
						</div>
						<div class="pull-right">
							<p class="medium-gray mb-0 pull-left">$360 Value</p>
							<div class="price-tag pull-left">
								<div class="tag left"></div>
								<div class="tag mid"><span>$180</span></div>
								<div class="tag right"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
<pre class="prettyprint linenums">
&lt;code&gt;
&lt;div class="mini-layout commerce result"&gt;
  &lt;div class="row"&gt;
    &lt;div class="span4"&gt;
      &lt;i class="icn icn-deal pull-left">&lt;/i&gt;
      &lt;p class="deal-head lh pull-left">Handyman Service for Half a Day&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="pull-right"&gt;
      &lt;p class="medium-gray mb-0 pull-left">$360 Value&lt;/p&gt;
      &lt;div class="price-tag pull-left"&gt;
        &lt;div class="tag left">&lt;/div&gt;
        &lt;div class="tag mid">&lt;span>$180&lt;/span>&lt;/div&gt;
        &lt;div class="tag right">&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/code&gt;
</pre>

			<h3>Deal Carousel</h3>
			<p>For use on the Service Provider page, this allows the user to cycle through all available deals. All Deals on the bottom links to the Deals tab on the SP page.</p>
			<img src="./assets/img/deal-carousel.png" alt="deal-carousel" />
			
			<h3>Coupon button</h3>
			<p>For use in search results to indicate if a Service Provider has coupons available. Clicking on the button triggers a popup showing a sample of available coupons.  All Coupons at the bottom link to the Coupons tab on the Service Provider Profile page. On mobile, the coupons modal will not display. </p>
			<div class="bs-docs-example">
				<div class="coupon-info">
					<a href="#!" class="coupon-count grey"><i class="icn icn-coup"></i> 2 coupons</a>
				</div>
				<div class="coupon-area">
					<div class="arrow-coup"></div>
					<div class="coupon-header">
						<h4>3 Coupons</h4>
					</div>
					<div class="coupon-body">
						<div class="dropdown clearfix">
						  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
							<li>
								<div class="clearfix">
									<div class="pull-left coup-txt">
										<p>$100 off on all painting jobs over $1,000</p>
									</div>
									<div class="pull-right cta">
										<div><button type="button" class="btn btn-dark">print</button></div>
									</div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="clearfix">
									<div class="pull-left coup-txt">
										<p>5% off for Angie&rsquo;s List members. Up to $1000 maximum discount.</p>
									</div>
									<div class="pull-right cta">
										<div><button type="button" class="btn btn-dark">print</button></div>
									</div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="clearfix">
									<div class="pull-left coup-txt">
										<p>$250 Visa or American Express Gift card Upon Completion of Remodeling Contract of $10,000 or more.</p>
									</div>
									<div class="pull-right cta">
										<div><button type="button" class="btn btn-dark">print</button></div>
									</div>
								</div>
							</li>
						  </ul>
						</div>
					</div>
					<div class="coupon-footer clearfix">
						<a class="more pull-right">All coupons</a>
					</div>
				</div>
			</div>
<pre class="prettyprint linenums">
&lt;div class=&quot;coupon-info&quot;&gt;
  &lt;a href=&quot;#!&quot; class=&quot;coupon-count grey&quot;&gt;&lt;i class=&quot;icn icn-coup&quot;&gt;&lt;/i&gt; 2 coupons&lt;/a&gt;
&lt;/div&gt;
&lt;div class=&quot;coupon-area&quot;&gt;
  &lt;div class=&quot;arrow-coup&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;coupon-header&quot;&gt;
    &lt;h4&gt;3 Coupons&lt;/h4&gt;
  &lt;/div&gt;
  &lt;div class=&quot;coupon-body&quot;&gt;
    &lt;div class=&quot;dropdown clearfix&quot;&gt;
      &lt;ul class=&quot;dropdown-menu&quot; role=&quot;menu&quot; aria-labelledby=&quot;dropdownMenu&quot;&gt;
         &lt;li&gt;
           &lt;div class=&quot;clearfix&quot;&gt;
             &lt;div class=&quot;pull-left coup-txt&quot;&gt;
               &lt;p&gt;$100 off on all painting jobs over $1,000&lt;/p&gt;
             &lt;/div&gt;
             &lt;div class=&quot;pull-right cta&quot;&gt;
               &lt;div&gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;print&lt;/button&gt;&lt;/div&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/li&gt;
         &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
         ...
      &lt;/ul&gt;
    &lt;/div&gt;&lt;!-- /.coupon-body --&gt;
  &lt;div class=&quot;coupon-footer clearfix&quot;&gt;
    &lt;a class=&quot;more pull-right&quot;&gt;All coupons&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>

			<h3>Coupon carousel</h3>
			<p>For use on the Service Provider page, this allows the user to cycle through all available coupons. All Coupons at the bottom links to the Coupons tab on the SP page.</p>
			<img src="./assets/img/coupon-carousel.png"  alt="coupon-carousel" />
			
        </section>


        <!---Media Content
	  ===============================================--->
	  <section id="media-content">
		<div class="page-header">
			<h1>6. Media Content</h1>
		</div>
		<h3>Magazine Articles</h3>
		  <div class="bs-docs-example">
			<p class="art-head">Angie&rsquo;s List Articles</p>
			<div class="mini-layout articles">
				<img src="./assets/img/articles-1.png" alt="articles" />
				<div class="article-body">
					<p class="deal-head">3 top tips to sell a house</p>
					<p>Highly rated Realtors say the top three keys to selling a house as quickly as possible and at the best price are: appropriate pricing, impeccable presentation and professional online photos.</p>
					<a href="#">Read more</a>
				</div>
			</div>
			<a class="more offset2" href="#">See more articles</a>
          </div>
<pre class="prettyprint linenums">
&lt;code&gt;
  Insert code sample
&lt;/code&gt;
</pre>

			<h3>Magazine articles - horizontal</h3>
			<div class="clearfix">
				<div class="bs-docs-example">
					<p class="art-head">Angie&rsquo;s List Articles</p>
					<div class="mini-layout articles horizontal">
						<div class="media">
							<img class="media-object pull-left" src="./assets/img/articles-small.png" alt="article" />
							<div class="media-body">
								<p class="deal-head">3 top tips to sell a house</p>
								<p>Highly rated Realtors say the top three keys to selling a house as quickly as possible and at the best price are: appropriate pricing, impeccable presentation and...<a href="#">Read more</a></p>
							</div>
						</div>
					</div>
				</div>
				<a class="more pull-right">See more articles</a>
			</div>
			
			<h3>Tips</h3>
			<img src="./assets/img/tips-article.png" alt="tips" />
			
			<h3>Large Video</h3>
			<img src="./assets/img/large-video.png" alt="video" />
			
			<h3>Medium Video</h3>
			<img src="./assets/img/medium-video.png" alt="video" />
			
			<h3>Small Video</h3>
			<img src="./assets/img/small-video.png" alt="video" />
	  </section>

        




      </div>
    </div>

  </div>

<?php
page_close();
?>
