<!DOCTYPE html>
<html>
	<?php
		// include template (used for stuff like tab title; css; etc
		include("template.php");
	?>
	<body>
		<?php
			$feedFile = fopen("feed.json", "a") or die("Unable to open database!");
		
			$post = new stdClass();

			$post->title = htmlspecialchars($_POST["title"]);
			$post->body = htmlspecialchars($_POST["body"]);
			$post->author = htmlspecialchars($_POST["author"]);

			$postJson = json_encode($post);

			fwrite($feedFile, "$postJson\n");
			fclose($feedFile);

			echo('Success');
		?>

	</body>
</html
