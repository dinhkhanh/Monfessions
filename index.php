<?php
/*
	MOC Confessions
	Description: Make Confessions to be fun
	Author: Moc
	Author URL: http://dinhkhanh.dk
	URL: http://facemoc.com
	Version: 1.0
*/
?>
<html>
<head>
	<title>Mốc Confessions</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<head prefix="og: http://ogp.me/ns# Blog:http://ogp.me/ns/apps/khimoccom#" profile="http://gmpg.org/xfn/11">
	<meta charset="UTF-8" />
	<meta name="keywords" content="dinhkhanhdk, dinhkhanh, tran dinh khanh, khi moc, mốc, khimoc">
	<meta name="author" content="Trần Đình Khánh">
	<meta name="viewport" content="width=device-width" />
	<meta property="fb:app_id" content="391869864192445" />
	<meta property="og:type" content="blog" />
	<meta property="og:title" content="Mốc Confessions" />
	<meta property="og:image" content="http://www.dinhkhanh.dk/wp-content/themes/moc/img/avt.jpg" />
	<meta itemprop="name" content="Trần Đình Khánh">
	<meta itemprop="description" content="Cùng nâng bi sửa vú nào \:D/">
	<meta itemprop="image" content="http://www.dinhkhanh.dk/wp-content/themes/moc/img/avt.jpg">
	<link href="https://plus.google.com/117861443762606356548" rel="publisher" />
	<link href="https://plus.google.com/117861443762606356548" rel="author" />
	<link rel="pingback" href="http://www.dinhkhanh.dk/xmlrpc.php" />
	<!--[if lt IE 9]>
		<script src="http://www.dinhkhanh.dk/wp-content/themes/moc/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<meta name="description" content="Cùng nâng bi sửa vú nào \:D/"/>
	<meta property='og:locale' content='en_US'/>
	<meta property='fb:app_id' content='391869864192445'/>
	<meta property='og:title' content='Mốc Confessions'/>
	<meta property='og:description' content='Cùng nâng bi sửa vú nào \:D/'/>
	<meta property='og:url' content='http://www.dinhkhanh.dk/'/>
	<meta property='og:site_name' content='Mốc'/>
	<meta property='og:type' content='website'/>
	<meta property='og:image' content='http://www.khimoc.com/wp-content/themes/twentyeleven-child/img/avt.jpg'/>
	<link rel="shortcut icon" type="image/x-icon" href="http://www.dinhkhanh.dk/wp-content/themes/moc/img/favicon.ico" />
</head>
<body>
	<div id="overlayGhost">
		<div id="ghostImg"><img src="img/ghost.jpg" /></div>
	</div>
	<div class="clearfix"></div>
	<div id="mainWrapper">
		<div id="mainContainer">
			<form id="mainForm" name="mainForm">
				<div id="header" class="boxes">
					<div id="logo">
						<a href="/" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Mốc Confessions">
							<img id="logoImage" src="img/avt.jpg"></img>
						</a>
					</div>
					<div id="siteTitle">
						<center><h2 class="alert alert-block">Mốc Confessions</h2></center>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="progress progress-striped active">
	  				<div class="bar" style="width: 0%" id="howRest"></div>
				</div>
				<div id="step0" class="steps boxes">
					<h2 class="alert alert-info question">0. Bạn có biết mình là ai?</h2>
					<div class="btn-group" id="knowme">
					  <a class="btn btn-large btn-warning" id="btnStepZeroUnknown" href="#myModal" role="button" data-toggle="modal">Chưa biết?</a>
					  <a class="btn btn-success btn-large" id="btnStepZero">Thằng Mốc chứ ai!!</a>
					</div>
					<div class="trollfaces pull-left" style="left: 0" id="trollface0">
						<img src="img/trollface0.png"></img>
					</div>
					<div class="clearfix"></div>
				</div>
				<div id="step1" class="steps boxes">
					<h2 class="alert alert-success question">1. Bạn thích gọi mình là gì?</h2>
					<input type="text" style="z-index: 999" name="callMe" id="callMe" placeholder="Mốc? Khánh? TĐK? Hay gì khác?" data-provide="typeahead" data-items="4" data-source='["Mốc", "Khánh", "Trần Đình Khánh", "TĐK"]' />
					<a id="btnStepOne" class="btn btn-success pull-right">Tiếp tục</a>
					<div class="trollfaces pull-right" id="trollface1">
						<img src="img/trollface1.png"></img>
					</div>
					<div class="clearfix"></div>
				</div>
				<div id="step2" class="steps boxes">
					<h2 class="alert alert-error question">2. Confessions riêng tư?</h2>
					<p class="alert alert-warning description">Bạn có muốn mọi người đọc confession này không?</p>
					<label class="radio">
					  <input type="radio" name="showCfs" id="showOK" value="" checked>
					  Đọc thoải mái đê! <img src="http://static.me.zing.vn/v3/images/smilley/default/45.jpg" />
					</label>
					<label class="radio">
					  <input type="radio" name="showCfs" id="showNOT" value="Mình chỉ gửi cho riêng Mốc thôi.">
					  Chỉ gửi cho riêng bạn Mốc thôi <img src="http://static.me.zing.vn/v3/images/smilley/default/22.jpg" />
					</label>
					<a id="btnStepTwo" class="btn btn-success pull-right">Tiếp tục</a>
					<div class="trollfaces pull-right" id="trollface2">
						<img src="img/trollface2.png"></img>
					</div>
					<div class="clearfix"></div>
				</div>
				<div id="step3" class="steps boxes">
					<h2 class="alert alert-info question">3. Confessions</h2>
					<p class="alert alert-success description">Bạn muốn chia sẻ? Bạn muốn hỏi? Bạn muốn chửi? Dùng ngay 1 liều Fugacar và xổ hết ra đây!</p>
					<textarea rows="3" id="confess" name="confess"></textarea>
					<a id="btnStepThree" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Bạn đồng ý rằng confession có thể sẽ không được đăng tải.">Gửi Confession</a>
					<div class="trollfaces pull-left" style="left: 0" id="trollface3">
						<img src="img/trollface3.png"></img>
					</div>
					<div class="clearfix"></div>
				</div>
				<div id="noScript" class="steps boxes">
					<h2 class="alert alert-error question">Trình duyệt không hỗ trợ! Bạn vui lòng sử dụng Google Chrome hoặc Firefox phiên bản mới nhất!</h3>
					<div class="clearfix"></div>
				</div>
				<input type="hidden" name="moc" id="moc" value="<?php echo md5(time()); ?>" />
			</form>
		</div>
		<div class="clearfix"></div>
		<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h3 id="myModalLabel">Giờ đã biết chưa?</h3>
		  </div>
		  <div class="modal-body">
		    <ul class="notify" id="dk_social_links">
			  	<li>
			    	<img id="avatarS" class="pull-left" alt="" src="http://1.gravatar.com/avatar/926be1ba71ff5dcc7919b991c0e6cded?s=60&amp;d=http%3A%2F%2Fwww.khimoc.com%2Fwp-content%2Fthemes%2Ftwentyeleven-child%2Fimg%2Favatar.gif%3Fs%3D60&amp;r=G" class="avatar avatar-60 photo" height="60" width="60">
			    	<h3>Mình là <a href="http://www.dinhkhanh.dk" target="_blank">Mốc</a></h3>
			    	<p>Nhấp các link bên dưới để biết thêm thông tin</p>
				</li>
				  <li>
				    <ul class="social_links">
				    	<li class="zingme"><a class="vtip" title="I'm on Zing Me" href="http://me.zing.vn/dinhkhanh.dk" target="_blank"><span></span></a></li>
				    	<li class="facebook"><a class="vtip" title="I'm on Facebook" href="http://www.facebook.com/dinhkhanhdk" target="_blank"><span></span></a></li>
				    	<li class="twitter"><a class="vtip" title="I'm on Twitter" href="http://twitter.com/dinhkhanhdk" target="_blank"><span></span></a></li>
				    	<li class="pinterest"><a class="vtip" title="I'm on Pinterest" href="http://pinterest.com/dinhkhanh" target="_blank"><span></span></a></li>
				    	<li class="linkedin"><a class="vtip" title="I'm on LinkedIn" href="http://linkedin.com/in/dinhkhanh" target="_blank"><span></span></a></li>
				    	<li class="tumblr"><a class="vtip" title="I'm on Tumblr" href="http://dinhkhanh.tumblr.com" target="_blank"><span></span></a></li>
				    	<li class="gplus"><a class="vtip" title="I'm on Google+" href="http://gplus.to/dinhkhanh" target="_blank"><span></span></a></li>
				    	<li class="youtube"><a class="vtip" title="I'm on Youtube" href="http://youtube.com/mocvblog" target="_blank"><span></span></a></li>
				    	<li class="skype"><a class="vtip" title="I'm on Skype" href="skype:add?id=dinhkhanh.dk" target="_blank"><span></span></a></li>
				    	<li class="rss"><a class="vtip" title="Subscribe to RSS" href="http://khimoc.com/rss" target="_blank"><span></span></a></li>
				    </ul>
				</li>
			</ul>
		  </div>
		  <div class="modal-footer">
		    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Ờ biết rồi!</button>
		  </div>
		</div>

		<div id="sending" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="Sending" data-backdrop="static" aria-hidden="true">
		  <div class="modal-header">
		    <h4 id="Sending">Vui lòng đợi <img src="http://static.me.zing.vn/v3/images/smilley/default/52.jpg" /></h4>
		  </div>
		  <div class="modal-body" id="sendingBody">
		  	<div class="trollfaces pull-right" id="trollface4">
				<img src="img/trollface4.png"></img>
			</div>
		    <p id="waitingS">Gửi confessions rất hay gặp lỗi nên đợi chút nhé <img src="http://static.me.zing.vn/v3/images/smilley/default/14.jpg" /></p>
		    <center><p><img src="img/sending.gif" /></p></center>
		  </div>
		</div>
		<div id="screamPlayer">
			<div id="jquery_jplayer_1" class="jp-jplayer"></div>
			<div class="jp-audio-container">
				<div class="jp-audio">
					<div class="jp-type-single">
						<div id="jp_interface_1" class="jp-interface">
							<ul class="jp-controls">
								<li><a href="#" class="jp-play" tabindex="1">play</a></li>
								<li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
								<li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
								<li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
							</ul>
							<div class="jp-progress-container">
								<div class="jp-progress">
									<div class="jp-seek-bar">
										<div class="jp-play-bar"></div>
									</div>
								</div>
							</div>
							<div class="jp-volume-bar-container">
								<div class="jp-volume-bar">
									<div class="jp-volume-bar-value"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<!-- Keeping footer is NOT required, but welcome you do :) -->
		<span class="badge">Code is poetry. Built from ground in hours by <a href="http://www.dinhkhanh.dk/" target="_blank">Mốc</a>. Thanks to <a href="http://twitter.github.com/bootstrap/index.html" target="_blank">Twitter Bootstrap</a> and <a href="http://subtlepatterns.com" target="_blank">Subtle Patterns</a>.</span>
	</div>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</html>