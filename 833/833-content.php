<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-833">
	<div class="row full">
		<ul class="nav nav-pills nav-stacked tag-list">
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2C3E50;">
			  		<span class="badge pull-right">204</span>user interface
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2C3F51;">
			  		<span class="badge pull-right">137</span>forms
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2C4053;">
			  		<span class="badge pull-right">119</span>lists
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2C4155;">
			  		<span class="badge pull-right">83</span>layouts
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2C4357;">
			  		<span class="badge pull-right">81</span>buttons
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2C4459;">
			  		<span class="badge pull-right">62</span>menu
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2C455B;">
			  		<span class="badge pull-right">62</span>user
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2C465D;">
			  		<span class="badge pull-right">59</span>responsive
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2C485F;">
			  		<span class="badge pull-right">59</span>animation
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2D4961;">
			  		<span class="badge pull-right">58</span>login
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2D4A63;">
			  	<span class="badge pull-right">46</span>
			  	jquery
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2D4B65;">
			  	<span class="badge pull-right">43</span>
			  	shop
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2D4D67;">
			  	<span class="badge pull-right">39</span>
			  	panel
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2D4E69;">
			  	<span class="badge pull-right">39</span>
			  	table
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2D4F6B;">
			  	<span class="badge pull-right">38</span>
			  	images
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2D516D;">
			  	<span class="badge pull-right">37</span>
			  	carousel
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2D526F;">
			  	<span class="badge pull-right">37</span>
			  	navbar
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2D5371;">
			  	<span class="badge pull-right">35</span>
			  	navigation
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2E5473;">
			  	<span class="badge pull-right">31</span>
			  	profile
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2E5675;">
			  	<span class="badge pull-right">31</span>
			  	modal
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2E5777;">
			  	<span class="badge pull-right">29</span>
			  	admin
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2E5879;">
			  	<span class="badge pull-right">27</span>
			  	blog
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2E597B;">
			  	<span class="badge pull-right">25</span>
			  	search
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2E5B7D;">
			  	<span class="badge pull-right">23</span>
			  	ecommerce
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2E5C7E;">
			  	<span class="badge pull-right">21</span>
			  	social
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2E5D80;">
			  	<span class="badge pull-right">20</span>
			  	tabs
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2E5E82;">
			  	<span class="badge pull-right">18</span>
			  	cms
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2F6084;">
			  	<span class="badge pull-right">16</span>
			  	sidebar
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2F6186;">
			  	<span class="badge pull-right">16</span>
			  	alert
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2F6288;">
			  	<span class="badge pull-right">16</span>
			  	gallery
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2F648A;">
			  	<span class="badge pull-right">14</span>
			  	icon fonts
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2F658C;">
			  	<span class="badge pull-right">13</span>
			  	contact
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2F668E;">
			  	<span class="badge pull-right">13</span>
			  	progress bar
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2F6790;">
			  	<span class="badge pull-right">12</span>
			  	signup
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2F6992;">
			  	<span class="badge pull-right">12</span>
			  	thumbnails
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #2F6A94;">
			  	<span class="badge pull-right">11</span>
			  	admin interface
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #306B96;">
			  	<span class="badge pull-right">11</span>
			  	admin dashboard
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #306C98;">
			  	<span class="badge pull-right">10</span>
			  	controls
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #306E9A;">
			  	<span class="badge pull-right">10</span>
			  	footer
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #306F9C;">
			  	<span class="badge pull-right">10</span>
			  	popup
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #30709E;">
			  	<span class="badge pull-right">10</span>
			  	registration
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #3071A0;">
			  	<span class="badge pull-right">10</span>
			  	checkbox
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #3073A2;">
			  	<span class="badge pull-right">8</span>
			  	payment
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #3074A4;">
			  	<span class="badge pull-right">8</span>
			  	toolbar
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #3075A6;">
			  	<span class="badge pull-right">7</span>
			  	messages
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #3177A8;">
			  	<span class="badge pull-right">7</span>
			  	card
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #3178AA;">
			  	<span class="badge pull-right">7</span>
			  	material design
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #3179AC;">
			  	<span class="badge pull-right">7</span>
			  	radio
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #317AAD;">
			  	<span class="badge pull-right">7</span>
			  	hover
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #317CAF;">
			  	<span class="badge pull-right">6</span>
			  	calendar
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #317DB1;">
			  	<span class="badge pull-right">6</span>
			  	badges
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #317EB3;">
			  	<span class="badge pull-right">5</span>
			  	timeline
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #317FB5;">
			  	<span class="badge pull-right">5</span>
			  	checkout
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #3181B7;">
			  	<span class="badge pull-right">5</span>
			  	header
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #3282B9;">
			  	<span class="badge pull-right">4</span>
			  	containers
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #3283BB;">
			  	<span class="badge pull-right">4</span>
			  	status
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #3284BD;">
			  	<span class="badge pull-right">3</span>
			  	chat
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #3286BF;">
			  	<span class="badge pull-right">2</span>
			  	rating
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #3287C1;">
			  	<span class="badge pull-right">2</span>
			  	ajax
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #3288C3;">
			  	<span class="badge pull-right">1</span>
			  	select
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #328AC5;">
			  	<span class="badge pull-right">1</span>
			  	append
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #328BC7;">
			  	<span class="badge pull-right">1</span>
			  	tabbable
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #328CC9;">
			  	<span class="badge pull-right">1</span>
			  	caption
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #338DCB;">
			  	<span class="badge pull-right">1</span>
			  	maps
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #338FCD;">
			  	<span class="badge pull-right">0</span>
			  	transactions
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #3390CF;">
			  	<span class="badge pull-right">0</span>
			  	slider
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #3391D1;">
			  	<span class="badge pull-right">0</span>
			  	spinner
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #3392D3;">
			  	<span class="badge pull-right">0</span>
			  	dropdown
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #3394D5;">
			  	<span class="badge pull-right">0</span>
			  	accordion
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #3395D7;">
			  	<span class="badge pull-right">0</span>
			  	typography
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title" style="background-color: #3396D9;">
			  	<span class="badge pull-right">0</span>
			  	breadcrumb
				</a>
			</li>
		</ul>
	</div>
</div>