<?php
//세션 데이터에 접근하기 위해 세션 시작
session_start();
if (!isset($_COOKIE['LoginUser'])) {
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Hyperspace by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

	</head>
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<img src="images/title1.png" height="110px">		
				<?php
      if (isset($_SESSION['login_check']) && $_SESSION['login_check'] === "true") {
        $loggedInUser = $_COOKIE['LoginUser'];
        echo "<a>{$loggedInUser}님, 환영합니다!</a>";
    } else {
        // 로그인되지 않은 경우에 대한 처리
        if (isset($_COOKIE['LoginUser']) && isset($_POST['auto_login'])) {
            // 자동 로그인 체크박스가 체크되어 있을 때 쿠키는 있지만 세션은 만료된 경우
            echo "<a>{$_COOKIE['LoginUser']}님, 환영합니다!</a>";
            $_SESSION['login_check'] = "true"; // 세션 재설정
        } else {
            // 로그인이 필요한 경우
            echo "<a>로그인이 필요합니다.</a>";
        }
    }
?>
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">카페소개</a></li>
							<li><a href="#one">예약하기</a></li>
							<li><a href="#two">커뮤니티</a></li>
							<li><a href="#three">게시판</a></li>
							<li><a href="#four">오시는길</a></li>
						</ul>
					</nav>
					<div class="row">
						<ul class="actions stacked">
							<li style="display: flex; justify-content: flex-end;">
								<a id="mypage" href="mypage.php" class="button primary small" style="display: flex; align-items: center; justify-content: center; margin-right: 10px;">마이페이지</a>
								
								<?php
                  if($_SESSION['login_check']==true)
                  {
                  ?>				
                       <a id="mainlogin" class="button primary small" href="logout.php" style="text-align: center;">로그아웃</a>
                  <?php                 
                  }else
				  {
                  ?>
						<a id="mainlogin" class="button primary small" href="login.php" style="text-align: center;">로그인</a>
				  <?php                 
                  }
                  ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
			</section>

			

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1> PICKUP AREA</h1>
							<p> 어서오세요 피크업 스터디카페입니다 </a>.</p>
							<ul class="actions">
								<li><a href="#one" class="button scrolly">피크업 이용안내</a></li>
							</ul>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<section>
							<a href="#" class="image"><img src="images/pic01.jpg" alt="" data-position="center center" /></a>
							<div class="content">
								<div class="inner">
									<h2>예약하기</h2>
									<p>원하는공간 원하는시간 자유롭게 이용해보세요</p>
									<ul class="actions">
										<li><a href="generic.html" class="button">바로 예약하기</a></li>
									</ul>
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="images/pic02.jpg" alt="" data-position="top center" /></a>
							<div class="content">
								<div class="inner">
									<h2>커뮤니티</h2>
									<p> 혼자 다인실을 사용하기 부담스럽다면 커뮤니티에서 함께해요</p>
									<ul class="actions">
										<li><a href="generic.html" class="button">커뮤니티 바로가기</a></li>
									</ul>
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="images/pic03.jpg" alt="" data-position="25% 25%" /></a>
							<div class="content">
								<div class="inner">
									<h2>게시판</h2>
									<p> 피크업에 대한 문의사항을 자유롭게 남겨주세요!</p>
									<ul class="actions">
										<li><a href="generic.html" class="button">게시판 바로가기</a></li>
									</ul>
								</div>
							</div>
						</section>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>피크업 이용안내</h2>
							<p>피크업 스터디카페는 이런 공간이에요</p>
							<div class="features">
								<section>
									<span class="icon solid major fa-code"></span>
									<h3>쾌적한 공간</h3>
									<p> 쾌적한 공간 쾌적한 공간 쾌적한 공간 쾌적한 공간 쾌적한 공간</p>
								</section>
								<section>
									<span class="icon solid major fa-lock"></span>
									<h3>Aliquam sed nullam</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class="icon solid major fa-cog"></span>
									<h3>Sed erat ullam corper</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class="icon solid major fa-desktop"></span>
									<h3>Veroeros quis lorem</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class="icon solid major fa-link"></span>
									<h3>Urna quis bibendum</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class="icon major fa-gem"></span>
									<h3>Aliquam urna dapibus</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
							</div>
							<ul class="actions">
								<li><a href="generic.html" class="button">Learn more</a></li>
							</ul>
						</div>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>피크업 오시는길</h2>
							<p>주차장 완비 지하철 도보 10분 버스 여러개 온다 컴온 베이베</p>
							<div class="split style1">
								<section>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="name">Name</label>
												<input type="text" name="name" id="name" />
											</div>
											<div class="field half">
												<label for="email">Email</label>
												<input type="text" name="email" id="email" />
											</div>
											<div class="field">
												<label for="message">Message</label>
												<textarea name="message" id="message" rows="5"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><a href="" class="button submit">Send Message</a></li>
										</ul>
									</form>
								</section>
								<section>
									<ul class="contact">
										<li>
											<h3>Address</h3>
											<span>12345 Somewhere Road #654<br />
											Nashville, TN 00000-0000<br />
											USA</span>
										</li>
										<li>
											<h3>Email</h3>
											<a href="#">user@untitled.tld</a>
										</li>
										<li>
											<h3>Phone</h3>
											<span>(000) 000-0000</span>
										</li>
										<li>
											<h3>Social</h3>
											<ul class="icons">
												<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
												<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>