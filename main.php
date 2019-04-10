<!DOCTYPE html>
<html>

<?php
$user = $_GET["user"];
$pass = $_GET["pass"];
?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ALDP Homepage</title>
    <link rel="stylesheet" href="CSS\cascadeStyleSheet.css">
</head>

<body id="target">
	<?php
	if($pass=="1111")
	{
	?>
		<header>
			<h1 id="Title"><a href="main.php?user=1111&pass=1111">ALDP Container</a></h1>
			<input type="button" id="black_btn" value="">
			<input type="button" id="white_btn" value="">
		</header>
	
		<nav>
			<h1><a href="algorithm.html">Algorithm</a></h1>
			<ol>
				<li>Sort</li>
					<ul>
						<li>Quick Sort (<a href="https://en.wikipedia.org/wiki/Quicksort">Reference</a>) </li>
						<li>Merge Sort (<a href="https://en.wikipedia.org/wiki/Merge_sort">Reference</a>) </li>
						<li>Bubble Sort (<a href="https://en.wikipedia.org/wiki/Bubble_sort">Reference</a>) </li>
					</ul>
				<li>Graph</li>
					<ul>
						<li>DFS</li>
						<li>BFS</li>
						<li>Dijkstra</li>
						<li>Floyd-Warshall</li>
						<li>Union-Find</li>
						<li>Topological Sorting</li>
						<li>Kruskal</li>
						<li>Prim</li>
					</ul>
				<li>Mathmatics</li>
					<ul>
						<li>Cross Product</li>
						<li>Area of Polygon</li>
						<li>CounterClockWise</li>
						<li>Convex Hull</li>
					</ul>
				<li>Recursion</li>
					<ul>
						<li>Fibonacci Sequence</li>
						<li>Tower of Hanoi</li>
						<li>N-Queen</li>
					</ul>
				<li>Dynamic Programming</li>
					<ul>
						<li>Recursion Formula</li>
					</ul>
			</ol>
		
			<h1><a href="designPattern.html">Design Pattern</a></h1>
			<ol>
				<li>Behavioral</li>
					<ul>
						<li>Strategy Pattern (<a href="https://en.wikipedia.org/wiki/Strategy_pattern">Reference</a>) </li>
						<li>Command Pattern (<a href="https://en.wikipedia.org/wiki/Command_pattern">Reference</a>) </li>
						<li>Observer Pattern (<a href="https://en.wikipedia.org/wiki/Observer_pattern">Reference</a>) </li>
						<li>Template Pattern (<a href="https://en.wikipedia.org/wiki/Template_method_pattern">Reference</a>) </li>
					</ul>
				<li>Structural</li>
					<ul>
						<li>Decorator Pattern (<a href="https://en.wikipedia.org/wiki/Decorator_pattern">Reference</a>) </li>
						<li>Adapter Pattern (<a href="https://en.wikipedia.org/wiki/Decorator_pattern">Reference</a>) </li>
						<li>Composite Pattern (<a href="https://en.wikipedia.org/wiki/Decorator_pattern">Reference</a>) </li>
					</ul>
				<li>Creational</li>
					<ul>
						<li>Factory Pattern (<a href="https://en.wikipedia.org/wiki/Factory_method_pattern">Reference</a>) </li>
						<li>Singleton Pattern (<a href="https://en.wikipedia.org/wiki/Singleton_pattern">Reference</a>) </li>
					</ul>
			</ol>
		</nav>
		
		<article>
			<H1>php</H1>
				<?php
					echo "welcome! ".$user;
				?>
				
			<H1>JAVASCRIPT</H1>
			<script>
				document.write(10+10);
			</script>
			
			<div id="disqus_thread" style="background-color:black;margin-top:400px"></div>
				<script>
				/**
				*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
				*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
				/*
				var disqus_config = function () {
				this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
				this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
				};
				*/
				(function() { // DON'T EDIT BELOW THIS LINE
				var d = document, s = d.createElement('script');
				s.src = 'https://aldp-2.disqus.com/embed.js';
				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
				})();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a>
				</noscript>	
		</article>
	<?php
	}
	else
	{
	?>
		<form action="index.php" style="float:left;margin:10px">
			<fieldset>
				<legend>Info</legend>
				<p>wrong password</p>
				<input type="submit" value="go back to login page">
			</fieldset>
		</form>
	<?php
	}
	?>
	
	<script>
		bbtn = document.getElementById('black_btn');
		bbtn.addEventListener('click', function(){
			document.getElementById('target').className='black';
		})
		
		wbtn = document.getElementById('white_btn');
		wbtn.addEventListener('click', function(){
			document.getElementById('target').className='white';
		})
	</script>
	
	<script id="dsq-count-scr" src="//aldp-2.disqus.com/count.js" async></script>
	
</body>

</html>
