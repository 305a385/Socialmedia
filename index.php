<!DOCTYPE html>
<html>
	<?php
		// include template (used for stuff like tab title; css; etc
		include("template.php");
	?>
	<body>
	<form action="post.php" method="post">
		<pre>Username:	<input type="text" name="author"> </pre>
		<pre>Title:		<input type="text" name="title"> </pre>
		<pre>Body:		<textarea name="body" cols='40' rows='5'></textarea> </pre>
		<input type="submit" value='Submit'>
	</form>
	</body>
</html
