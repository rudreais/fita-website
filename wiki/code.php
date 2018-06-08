<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Home - FitA</title>
</head>
<?php include_once('../includes/header.php'); ?>

<body>
<div class="container">
<div class="page-header">
  <h1>Technical documentation</h1>
</div>
<h2>Table of contents</h2>
<ol>
	<li><a href="#struct">Structures</a>
		<ul>
			<li><a href="#struct_inventory">inventory_t</a></li>
			<li><a href="#struct_charac">charac_t</a></li>
			<li><a href="#struct_entity">entity_t</a></li>
			<li><a href="#struct_floor">floor_t</a></li>
		</ul>
	</li>
</ol>

<div id="struct">
<h4 id="struct_inventory"><code>inventory_t</code></h4>
<ul>
<pre>
<li>int **items</li>
</pre>
</ul>
<hr>

<h4 id="struct_charac"><code>charac_t</code></h4>
<ul>
<pre>
<li>int str</li>
<li>int intel</li>
<li>int wis</li>
<li>int dex</li>
<li>int con</li>
<li>int chr</li>
</pre>
</ul>
<hr>

<h4 id="struct_entity"><code>entity_t</code></h4>
<p>
<ul>
	<li><code>appear</code> : character meant to represent the entity. as for example, the player will appear with '@' on the screen.</li>
	<li><code>live</code> : boolean set to true if the entity is a living one or not, as for chests and enemies.</li>
	<li><code>charac</code> : structure pointer to characteristics of the enemies/player if live is set on <b>true</b>.</li>
	<li><code>inv</code> : structure pointer to the inventory of the enemies/player if live is set on <b>true</b>.</li>
	<li><code>chest</code> : structure pointer to the inventory of the chest if live is set on <b>false</b>.</li>
</ul>
</p>
<ul>
<pre>
<li>char appear</li>
<li>bool live</li>
<li>charac_t *charac</li>
<li>inventory_t *inv</li>
<li>inventory_t *chest</li>
</pre>
</ul>
<hr>

<h4 id="struct_floor"><code>floor_t</code></h4>
<ul>
<pre>
<li>entity_t *entities</li>
<li>map_t *map</li>
</pre>	
</ul>

</div>

</div>
</body>
<style>
pre li {
	margin-left: 15px;
	float: left;
}
</style>
</html>