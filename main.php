<!DOCTYPE html>
<html>

<?php
$user = $_GET["user"];
$pass = $_GET["pass"];
$category = $_GET["category"]
?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ALDP Homepage</title>
	<link rel="stylesheet" href="CSS\1.css">
<!--  <link rel="stylesheet" href="CSS\cascadeStyleSheet.css"> -->
</head>

<body id="target">
	<?php
	if($pass=="1111")
	{
	?>
		<header>
			<h1 id="Title"><a href="main.php?user=<?php echo $user?>&pass=<?php echo $pass?>">ALDP Container</a></h1>
			<input type="button" id="black_btn" value="">
			<input type="button" id="white_btn" value="">
		</header>






		<nav>
			<h1><a href="main.php?user=<?php echo $user?>&pass=<?php echo $pass?>&category=algorithm">Algorithm</a></h1>
			<?php
				echo file_get_contents('Data/list_algorithm.txt');
			?>

			<h1><a href="main.php?user=<?php echo $user?>&pass=<?php echo $pass?>&category=designPattern">Design Pattern</a></h1>
			<?php
				echo file_get_contents('Data/list_designPattern.txt');
			?>
		</nav>






		<article>
			<?php
				if(isset($_GET['category']))
				{
					$filePath = 'Data/'.'article_'.$category.'.txt';
					echo file_get_contents($filePath);
				}
				else
				{
			?>
					<img src="picture\chicago.jpg" width="100%">

					<H1>php</H1>
						<?php
							echo "welcome! ".$user;
						?>

					<H1>JAVASCRIPT</H1>

					<script>
						document.write(10+10);
					</script>
			<?php
				}
			?>
		</article>








		<footer>
			<div id="disqus_thread" style="margin-top:0px;width:100%;height:100%"></div>
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
		</footer>
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
