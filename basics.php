<?php
require('inc/templates.php');

page_open();
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
          <p>The standard Grade icon ...</p>
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
          <p>The smallest size Grade icon ...</p>
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
  <p class="docs-inline-grade">
  	<span class="grade inline a">A</span> #4db346
  </p>
  </p>
</div>
<pre class="prettyprint">
&lt;span class="grade inline a"&gt;A&lt;/span&gt;
&lt;span class="grade inline b"&gt;B&lt;/span&gt;
</pre>          
        </section>       
                
        <section id="icons">
          <div class="page-header">
            <h1>4. Icons</h1>
          </div>
		  
		  <h3>Custom Angie&rsquo;s List Icons:</h3>
		  <table class="table table-bordered table-striped">
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
        
        <!-- Buttons
        ================================================== -->        
        <section id="buttons">
          <div class="page-header">
            <h1>4. Buttons</h1>
          </div>

          <h2>Default buttons</h2>
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
                <td><button type="button" class="btn btn-link">Link</button></td>
                <td><code>btn btn-link</code></td>
                <td>Deemphasize a button by making it look like a link while maintaining button behavior</td>
              </tr>
            </tbody>
          </table>
          
          <h2>Button sizes</h2>
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
		  <img src="/assets/img/text-editor.png" alt="text-editor" />
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
<pre class="prettyprint linenums">
&lt;code&gt;
  Insert code sample
&lt;/code&gt;
</pre>

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
				<input type="text"> <span class="help-inline">Some help text</span>
			</form>
          <hr class="bs-docs-separator">
		  
		  <h3>Block Help Text</h3>
		  <form class="bs-docs-example">
            <input type="text">
            <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>			
          </form>
		  <hr class="bs-docs-separator">
		  
		  <h3>Input Focus</h3>
		  <p>A subtle glow is added when an input is activated.</p>
		  <form class="bs-docs-example form-inline">
            <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="Click to focus...">
          </form>
		  
		  <hr class="bs-docs-separator">
		  
		  <h3>Invalid Input</h3>
		  <p>A red glow and border is added when an input is invalid.</p>
		  <form class="bs-docs-example form-inline">
			<div class="control-group error">
				<div class="controls">
					<input type="email" value="name@email"> <span class="help-inline">Oops! That&rsquo;s not a valid email.</span>
				</div>
			</div>
          </form>		  
		  <hr class="bs-docs-separator">
		  
		  <h3>Disabled Input</h3>
		  <p>When disabled, the color of the input field changes to #f8f6ef.</p>
		  <form class="form-inline">
            <input class="input-xlarge" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
          </form>
		  
		  <hr class="bs-docs-separator">
		  
		  <h3>Calendar Select</h3>
		  <img src="/assets/img/calendar.png" alt="calendar" />
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
			  <img src="/assets/img/label-name.png" alt= "form" />
			</label>
			<hr class="bs-docs-separator">

			<h3>Inline Form</h3>
			<label>
			  <img src="/assets/img/inline-form.png" alt= "form" />
			</label>
			<hr class="bs-docs-separator">
		
			<h3>Horizontal Form</h3>
			<label>
			  <img src="/assets/img/horizontal-form.png" alt= "form" />
			</label>
			<hr class="bs-docs-separator">
			
			<h3>Form Module</h3>
			<label>
			  <img src="/assets/img/module-form.png" alt= "form" />
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
					<a href="#"><span class="mobile-icon cart-icon"><span class="text">Cart <b class="caret"></b></span></a>							
				</div>
				<div class="logged-in mobile">						
					<a href="#"><span class="mobile-icon profile-icon"></span></a>
					<a href="#!"><span class="notification">3</span></a>
					<a href="#!"><span class="mobile-icon cart-icon"></a>							
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