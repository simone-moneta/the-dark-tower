<?php 

$firstMenu = [

'the plot'			=> 'plot.php',
'characters'	=> 'characters.php',
'the midworld'	=> 'midworld.php'

];

function menu($menu){
	foreach ($menu as $name => $link) {
		echo "<li><a href='{$link}'>{$name}</a></li>";
	}
}

?>

<div role="navigator">
	<h1 class="logo">
		<a href="/">
			<img src="https://pbs.twimg.com/profile_images/870728857292353537/7AUK_KL7.jpg">
		</a>
	</h1>
	<nav>
		<ul>
			<?php menu($firstMenu); ?>
		</ul>
	</nav>
</div>