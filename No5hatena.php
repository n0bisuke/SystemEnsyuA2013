<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>のびすけのお気に入り</title>
</head>
<body>
	<?php
		$url = "http://b.hatena.ne.jp/rsksound/favorite.rss?limit=10";
		$xml = simplexml_load_file($url);
		//var_dump($xml);
	?>
	
	<h1>
		<a href="<?php echo $xml->channel->link; ?>">
		<?php echo $xml->channel->title; ?>
	</a>
	</h1>
	

		<?php $i=1; foreach ($xml->item as $key => $value): ?>

			<h3>
				<?php echo $i; ?>:
				<?php echo $value->title; ?>
			</h3>
			<p><a href="<?php echo $value->link; ?>"><?php echo $value->link; ?></a></p>
			<p><?php echo $value->description; $i++; ?></p>
		<?php endforeach; ?>
	</ul>

</body>
</html>