<!DOCTYPE html>
<html>
	<?php
		// include template (used for stuff like tab title; css; etc
		include("template.php");
	?>
	<body>
		<?php
			$post = new stdClass();

			$post->title = htmlspecialchars($_POST["title"]);
			$post->body = htmlspecialchars($_POST["body"]);
			$post->author = htmlspecialchars($_POST["author"]);
			require 'vendor/autoload.php'; // include Composer's autoloader
			
			$client = new MongoDB\Client("mongodb://localhost:27017");
			$collection = $client->socialmedia->posts;
			
			$result = $collection->insertOne( $post );

			$prev = $_GET['back'];
			// redirect to previous page		
			header("Location: $prev");
		?>

	</body>
</html>
