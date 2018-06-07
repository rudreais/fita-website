<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Commits - FitA</title>
</head>
<?php include_once('includes/header.php'); ?>
<body>
<div class="container">
<div class="alert alert-warning" role="alert"><b>Warning !</b> The website will always be <b>AT LEAST</b> 1 commit behind.</div>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dir = "/home/rudreais/fed-in-the-abyss";
chdir($dir);
$output = array();
exec('git log --pretty=format:%at%n%an%n%ae%n%h%n%s',$output);
$history = array();
$field = 0;

foreach ($output as $line) {
	if ($field == 0) {
		$commit["date"] = $line;
	} else if ($field == 1) {
		$commit["author"] = $line;
	} else if ($field == 2) {
		$commit["email"] = $line;
	} else if ($field == 3) {
		$commit["version"] = $line;
	} else if ($field == 4) {
		$commit["subject"] = $line;
		$history[] = $commit;
		unset($commit);
		$field=-1;
	}
	$field++;
}

foreach ($history as $commit) {
?>
<div class="panel panel-default">
  <div class="panel-heading"><?php print date('m/d/Y H:m:s', $commit["date"])." - from : ".$commit["author"]."<br>"; ?></div>
  <div class="panel-body">
    <?php
		print $commit["subject"]."";
    ?>
	</div>
	<div class="panel-footer"><?php	print "commit version <a href='https://github.com/rudreais/fed-in-the-abyss/commit/".$commit["version"]."'>".$commit["version"]."</a><br>";?></div>
</div>
<?php
}
?>

</div>
</body>
</html>
