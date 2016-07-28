<?php

require_once "../vendor/autoload.php";

use Ghitter\Evangelist;

$roy = new Evangelist('andela-celisha-wigwe');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="">
    	<meta name="author" content="">
    	<!-- <link rel="icon" href="../../favicon.ico"> -->

		<title>Ghit-Me</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="workaround.css" rel="stylesheet">
		<link href="cover.css" rel="stylesheet">
	</head>
	<body>
		<div class="site-wrapper">

	      <div class="site-wrapper-inner">

	        <div class="cover-container">

	          <div class="masthead clearfix">
	            <div class="inner">
	              <h3 class="masthead-brand"><i>elchroy</i></h3>
	              <nav>
	                <ul class="nav masthead-nav">
	                	<li class="active"><a href="#">My small Social page</a></li>
	                </ul>
	              </nav>
	            </div>
	          </div>
	          <div class="inner cover" id="profile">
	          	<div id="avatar">
	          		<img src="<?php echo $roy->avatar_url ?>" className="img img-responsive center-block" />
	          	</div>
	          	<div id="name">
	          		<h1 class="cover-heading"><?php echo $roy->name ?></h1>
	          	</div>
	          	<div id="email">
	          		<h4 class="cover-heading"><?php echo $roy->email ?></h4>
	          	</div>
	          	<div id="url">
	          		<h4 class="cover-heading"><a href="<?php echo $roy->html_url ?>" target="_blank">@<?php echo $roy->login ?></a></h4>
	          	</div>
	          	<div id="company">
	          		<h4 class="cover-heading"><?php echo $roy->company ?></h4>
	          	</div>
	          	<div id="location">
	          		<h4 class="cover-heading"><?php echo $roy->location ?></h4>
	          	</div>
	          </div>

	          <div class="" id="fb_posts" style="padding: 0 60px;text-align: left;font-weight: lighter;font-size: small;text-shadow: none;margin-bottom: 90px;">
	          	<?php foreach ($roy->fb_posts as $post): ?>
		          	<p id="<?php echo $post->message ?>">
		          		<span class="cover-heading"><?php echo $post->message ?></span>
		          	</p>
	          	<?php endforeach; ?>
	          </div>

	          <div class="mastfoot">
	            <div class="inner">
	            	<div>
	            		Built with PHP and ReactJS
	            	</div>
	              <p>Connect with me at: <a href="http://facebook.com/relijoke" target="_blank">Facebook</a>, <a href="https://twitter.com/elchroy" target="_blank">Twitter</a> or <a href="http://github.com/andela-celisha-wigwe" target="_blank">GitHub</a></p>
	            </div>
	          </div>

	        </div>

	      </div>

	    </div>
		<div id="app"></div>
		<script type="text/javascript">
			var roy = <?php echo $roy->encode() ?>;
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script><script type="text/javascript" src="index_bundle.js"></script><script type="text/javascript" src="index_bundle.js"></script></body>
</html>