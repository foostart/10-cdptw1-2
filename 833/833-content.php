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
				<a href="#" class="title titleLine2" style="background-color: #2C4155;">
			  		<span class="badge pull-right">83</span>layouts
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title titleLine2" style="background-color: #2C4357;">
			  		<span class="badge pull-right">81</span>buttons
				</a>
			</li>
			<li class="col-md-4">
				<a href="#" class="title titleLine2" style="background-color: #2C4459;">
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
		</ul>
	</div>
</div>