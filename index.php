<!DOCTYPE html>
<html>
	<?php
		// include template (used for stuff like tab title; css; etc
		include("template.php");
	?>
	<body>
	<form action="post.php?back=/" method="post">
		<pre>Username:	<input type="text" name="author"> </pre>
		<pre>Title:		<input type="text" name="title"> </pre>
		<pre>Body:		<textarea name="body" cols='40' rows='5'></textarea> </pre>
		<input type="submit" value='Submit'>
	</form>
	
	</br>

	<div class='feed'>
		<?php	
			require 'vendor/autoload.php';
			$client = new MongoDB\Client("mongodb://localhost:27017");
			$collection = $client->socialmedia->posts;
			
	
				
			$result = $collection->find();

			// print posts
			foreach ($result as $entry) {
			    echo "<div class='post'>",
				"<p>",
				"<span class='author'>", $entry['author'], "</span>: ",
				"<span class='title'>", $entry['title'], "</span>",
				"</p>",
				$entry['body'],
				"</div>",
				"</br></br>";
			}

		?>
	</div>

	</body>
</html
