<?php
require('inc/templates.php');

page_open();
?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>Getting started</h1>
    <p class="lead">Welcome to the interactive style guide for Angie&rsquo;s List</p>
  </div>
</header>


  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li class="active"><a href="#intro">Intro</a></li>
          <li><a href="#prototype">Prototype</a></li>
          <li><a href="#source">Source Files</a></li>
          <li><a href="#grids">Grids</a></li>          
        </ul>
      </div>
      <div class="span9">



        <!-- Intro
        ================================================== -->
        <section id="intro">
          <div class="page-header">
            <h1>1. Intro</h1>
          </div>
          <p>This style guide outlines the HTML, CSS, Javascript and Visual Design for the Angie&rsquo;s List Web Product Design Language.</p>
          <p class="mb-50">The guide includes the following content sections:</p>
          <h3 class="mb-20">Categories</h3>
          <h4><a href="basics.html"><strong>The Basics</strong></a></h4>
          <p class="mb-30">Styles for the common HTML elements like how to use typography, Angie&rsquo;s List grades, forms and buttons.</p>
          <h4><a href="components.html"><strong>Components</strong></a></h4>
          <p class="mb-30">Basic styles for common interface components like dropdowns, navbar, pagination, alerts, and more.</p>
          <h4><a href="modules.html"><strong>Modules</strong></a></h4>
          <p class="mb-30">Templates and static examples for content modules like Deals, Promos and more.</p>
        </section>



        <!-- Prototype
        ================================================== -->
        <section id="prototype">
          <div class="page-header">
            <h1>2. Prototype</h1>
          </div>
		  <div class="mini-layout bg-pattern">
			<div class="row-fluid">
				<div class="span6">					
					<p class="head">See the style guide in action with the prototype!</p>
					<p>The foundation of the style guide is based on a responsive prototype that displays how elements can be combined to create the Angie&rsquo;s List digital experience.  </p>
					<div class="mb-20">
						<a href="#" class="mb-20">View code on GitHub</a>
					</div>					
					<button type="button" class="btn btn-primary btn-large">Launch Prototype</button>					
				</div>
				<div class="span6">
					<img src="./assets/img/screenshot.png" alt="screenshot" />
				</div>
			</div>
		  </div>
          <p>Browsers supported for the prototype include: Last release of Firefox, Chrome, Safari and IE8.</p>
          
        </section>



        <!-- Contents
        ================================================== -->
        <section id="source">
          <div class="page-header">
            <h1>3. Source Files</h1>
          </div>
          <p class="mb-30">Also available for download are the sources files and assets.</p>
		  
		  <div class="row mb-20">
			<div class="span4">
				<div class="media">
					<a class="pull-left" href="#"><img class="media-object" alt="zip-file" src="./assets/img/zip-folder.png" /></a>
					<div class="media-body">
						<h5 class="mb-0">Angies List PSD templates.zip</h5>
						<p class="grey">122.6 MB</p>
					</div>
				</div>
			</div>
			<div class="span5">
				<div class="media">
					<a class="pull-left" href="#"><img class="media-object" alt="zip-file" src="./assets/img/zip-folder.png" /></a>
					<div class="media-body">
						<h5 class="mb-0">Angies List Icons(PSD and PNG).zip</h5>
						<p class="grey">36.4 MB</p>
					</div>
				</div>
			</div>
		  </div>
		  <div class="row">
			<div class="span4">
				<div class="media">
					<a class="pull-left" href="#"><img class="media-object" alt="zip-file" src="./assets/img/zip-folder.png" /></a>
					<div class="media-body">
						<h5 class="mb-0">Fonts.zip</h5>
						<p class="grey">2.3 MB</p>
					</div>
				</div>
			</div>
        </section>


		<!-- Grids
        ================================================== -->
        <section id="grids">
          <div class="page-header">
            <h1>4. Grids</h1>
          </div>
		  <h3>Live fluid grid example</h3>
		  <p>The fluid grid system uses percents instead of pixels for column widths. It has the same responsive capabilities as our fixed grid system, ensuring proper proportions for key screens resolutions and devices</p>
		  <div class="bs-docs-grid mb-40">
            <div class="row show-grid">
              <div class="span1">1</div>
              <div class="span1" data-original-title="" title="">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
            </div>
            <div class="row show-grid">
              <div class="span2" data-original-title="" title="">2</div>
              <div class="span3" data-original-title="" title="">3</div>
              <div class="span4">4</div>
            </div>
            <div class="row show-grid">
              <div class="span4" data-original-title="" title="">4</div>
              <div class="span5">5</div>
            </div>
            <div class="row show-grid">
              <div class="span9">9</div>
            </div>
          </div>
		  
		  <h3>Basic fluid grid HTML</h3>
		  <p>Make any row "fluid" by changing <code class="no-bg">.row</code> to <code class="no-bg">.row-fluid</code>. The column classes stay the exact same, making it easy to flip between fixed and fluid grids.</p>
<pre class="prettyprint linenums">
<span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"row-fluid"</span><span class="tag">&gt;</span>
<span class="pln">  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span4"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/div&gt;</span>
<span class="pln">  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span8"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;/div&gt;</span>
</pre>
		   
		   <h3>Fluid Offsetting</h3>
		   <p>Move columns to the right using <code class="no-bg">.offset*</code> classes. Each class increases the left margin of a column by a whole column. For example, <code class="no-bg">.offset4</code> moves <code class="no-bg">.span4</code> over four columns</p>
		   
			<div class="bs-docs-grid">
				<div class="row-fluid show-grid">
					<div class="span4">4</div>
					<div class="span4 offset4">4 offset 4</div>
				</div><!-- /row -->
				<div class="row-fluid show-grid">
					<div class="span3 offset3">3 offset 3</div>
					<div class="span3 offset3">3 offset 3</div>
				</div><!-- /row -->
				<div class="row-fluid show-grid">
					<div class="span6 offset6">6 offset 6</div>
				</div><!-- /row -->
			</div>
		   
<pre class="prettyprint linenums">
<span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"row-fluid"</span><span class="tag">&gt;</span>
<span class="pln">  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span4"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/div&gt;</span>
<span class="pln">  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span4 offset2"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;/div&gt;</span>
</pre>
        </section>
	

		   <h3>Development Classes</h3>
		   <p class="mb-40">Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod.</p>
		   
		   <h3>Breakpoints</h3>
		   <p>Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod.</p>
        </section>

      </div>
    </div>

  </div>

<?php
page_close();
?>