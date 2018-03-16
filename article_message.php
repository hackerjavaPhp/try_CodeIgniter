<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title>index.php</title>
</head>
<body>
	<article class="news-shows">

		<?php foreach($articles as $item): ?>

			<div class="news-shows-st">
				<h3><?=$item["title"];?></h3>
				<p><?=$item["description"];?></p>
				<strong><?=$item["date"];?></strong>
			</div>

		<?php endforeach; ?>

	</article>
</body>
</html>