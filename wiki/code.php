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
  <h1>Documentation <small>What structures are done and their connections</small></h1>
</div>
<h3>See as a list:</h3>
<ol>
	<li>floor
		<ol>
			<li>entities
				<ol>
					<li>(entity * n) + player</li>
				</ol>
			</li>
			<li>map
				<ol>
					<li>design</li>
					<li>size</li>
					<li>pos</li>
				</ol>
			</li>
		</ol>
	</li>
</ol>
<hr>
<h3>See as code:</h3>
<p><i>FitA</i> contains a lot of structures. Here are all of them explained</p>
<h4><code>floor_t</code></h4>
<ul>
<pre>
<li>entity_t *entities</li>
<li>map_t *map</li>
</pre>	
</ul>

<h4><code>entity_t</code></h4>
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
<h3>See as UML:</h3>
<pre><code class="uml">floor [
	entities [
		(entity * n) + player
	],
	map [
		design,
		size,
		pos
	]
]</code></pre>
</div>
</body>
<style>
pre li {
	margin-left: 15px;
	float: left;
}
</style>
</html>