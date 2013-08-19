<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	
	<?php 
		$title = "烏石衝浪資訊";		
	?>
	
		<meta http-equiv="Content-Language" content="zh-tw" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $title;?></title>
		<!--<link rel="stylesheet" type="text/css" href="styles/login_regi.css" />-->
		<meta http-equiv="X-UA-Compatible" content="IE=9"></meta>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet"/>
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js" type="text/javascript"></script>    
		
		
		<script>
			$(function () {				
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				});				
				
				$( "input[type=checkbox]" ).on( "click", function(){
					if($(this).is(":checked")){
						$(this).parent().css("color", "#ccc");
					}else{
						$(this).parent().css("color", "");
					}					
				});				
				<?php
				$tabInit = (isset($_GET['tabInit']) ? ($_GET['tabInit']) : "waveTab");
				
				if(isset($_GET['tabInit'])){
					$tabInit = $_GET['tabInit'];
				}else{
					$tabInit = "waveTab";
				}
				?>
				$("#<?php echo $tabInit?>").click();		
				
				$("#myTab > li > a").click(function(){
					window.history.pushState({}, document.title, "?tabInit="+$(this).attr("id"));
				})
				
				
			})
		</script>
		<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/zh_TW/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-41598623-1', 'talkin.cc');
			ga('send', 'pageview');
		</script>
		<style type="text/css" >
			body{
				font-family: calibri, "微軟正黑體" !important;
				overflow-y: scroll;
				font-size: 18px;
				line-height: 35px;
			}
			footer {
				border-top: solid 1px #ccc;
				text-align: right;
				font-size: 10px;
				margin-top: 50px;
			}
			label{
				display: inline;
				font-size: 20px;
				line-height: 30px;
				margin-right: 10px;
			}
			input[type="checkbox"]{
				position: relative;
				top: -5px;
				margin-right: 9px;
			}
		</style>
	</head>
	<body style="width: 954px; margin: 0 auto;">
	
	
		<h2  style="text-align: center;"><a href="/" style="color: black"><?php echo $title;?></a></h2>
		<div style="text-align: right;"><div class="fb-like" data-href="http://surf.talkin.cc/" data-send="false" data-width="250" data-show-faces="true" data-font="arial"></div></div>
		
		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a href="#wave" id="waveTab">浪況</a></li>
			<li><a href="#weather" id="weatherTab">天氣</a></li>
			<li><a href="#bags" id="bagsTab">必帶物品</a></li>
			<li><a href="#plan" id="planTab">行程規劃</a></li>
			<li><a href="#tutorial" id="tutorialTab">簡單教學</a></li>
			<li><a href="#addr" id="addrTab">交通資訊</a></li>			
			<li><a href="#info" id="infoTab">相關資訊</a></li>
		</ul>
		
		
		
		<div class="tab-content" style="overflow: hidden">
			<div class="tab-pane active" id="wave" style="text-align: center; margin-top: 50px;">				
				<img class="img-polaroid"  src="http://www.imocwx.com/cwm/cwm_ljp.gif">
			</div>
			
			<div class="tab-pane" id="bags">
				<h4>所需花費</h4>
				衝浪 : 500　　　　
				中午便當 : 60 　　　　　
				晚餐 : 150 ~ 200 <br/><br/><br/>

				<h4>準備物品</h4>
				
				<label><input type="checkbox"/>手機</label> 
				<label><input type="checkbox"/>錢包</label> 
				<label><input type="checkbox"/>鑰匙</label> <br/>

				<label><input type="checkbox"/>海灘褲</label> 
				<label><input type="checkbox"/>拖鞋</label> 
				<label><input type="checkbox"/>外套 or 長袖 ( 怕晚上會冷 )</label> <br/>

				<label><input type="checkbox"/>一套晚上洗完澡換的衣服</label> <br/>

				<label><input type="checkbox"/>毛巾 ( 2-3 條, 有些剛上岸用會有沙子，有些洗完澡用 ), 有條浴巾最好</label> <br/>

				<label><input type="checkbox"/>海灘褲裡面建議穿泳褲或內褲</label> <br/>

				<label><input type="checkbox"/>裝濕海灘褲的袋子</label> <br/>

				<label><input type="checkbox"/>衛生紙</label> 
				<label><input type="checkbox"/>帽子</label> <br/>

				<label><input type="checkbox"/>洗面乳</label> 
				<label><input type="checkbox"/>洗髮乳</label> 
				<label><input type="checkbox"/>沐浴乳</label> 
				<label><input type="checkbox"/>飲用水、飲料、啤酒 XDD</label> 
				<label><input type="checkbox"/>傘</label> 
				<label><input type="checkbox"/>防曬</label> 
				<label><input type="checkbox"/>凡士林</label> 
				<label><input type="checkbox"/>小護士</label> <br/>

				(option) <label><input type="checkbox"/>防磨衣</label> 
				<label><input type="checkbox"/>隱形眼鏡</label> 
				<label><input type="checkbox"/>墨鏡</label> <br/>
				
				

		
			</div>
			<div class="tab-pane" id="plan" style="font-size: 17px; text-align: center">
				
				<a href="http://blog.xuite.net/bobowin/me/19337085-%5B+%E9%81%8A%E8%A8%98+%5D+%E5%AE%9C%E8%98%AD%E7%83%8F%E7%9F%B3%E6%B8%AF%E8%A1%9D%E6%B5%AA" target="_blank">衝浪</a>
				<img class="img-polaroid"  src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-ash4/176787_4198144109786_1020052413_o.jpg">
				<br/><br/>
				<a target="_blank" href="http://lmmgogogo.pixnet.net/blog/post/44705759-%E3%80%90%E9%A0%AD%E5%9F%8E-%E7%BE%8E%E9%A3%9F%E3%80%91%E5%B9%B3%E5%83%B9%E7%BE%8E%E5%91%B3%E7%9A%84%E6%97%A5%E6%9C%AC%E6%96%99%E7%90%86%EF%BD%9E%E6%A8%82%E5%B1%8B%E6%97%A5">樂屋</a><br/>
				<img class="img-polaroid"  src="http://farm9.static.flickr.com/8514/8499715282_55bc961d22_o.jpg">
				
				<br/><br/>
				<a target="_blank" href="http://smilejean.pixnet.net/blog/post/30521404-%E2%96%8B%E5%AE%9C%E8%98%AD%E9%A4%90%E5%BB%B3%E2%96%8B%E7%A4%81%E6%BA%AA%2B%E7%81%AB%E5%B1%B1%E7%88%86%E7%99%BC%E9%9B%9E~%E8%82%89%E8%B3%AA%E9%AE%AE%E5%AB%A9%E5%A4%9A%E6%B1%81">火山爆發雞</a><br/>
				<img class="img-polaroid"  src="http://farm5.static.flickr.com/4130/5023089032_0cb7488aa0.jpg">
				<br/><br/>				
				<a target="_blank" href="http://www.wretch.cc/blog/l50740/24092807">城堡</a><br/>
				<img class="img-polaroid"  src="http://farm6.static.flickr.com/5052/5486057892_2b1c87e4c9_b.jpg">
			
			</div>
			<div class="tab-pane" id="addr" style="text-align: center">
				<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=%E6%A1%83%E5%9C%92%E9%AB%98%E4%B8%AD&amp;daddr=24.9352355,121.3443671+to:%E5%8F%B0%E7%81%A3%E5%AE%9C%E8%98%AD%E7%B8%A3%E9%A0%AD%E5%9F%8E%E9%8E%AE%E6%B8%AF%E5%8F%A3%E8%B7%AF93%E4%B9%8B2%E8%99%9F%E6%A5%B5%E9%85%B7%E8%A1%9D%E6%B5%AA&amp;hl=zh-TW&amp;geocode=FSZ2fQEdxk47ByGa5I7lqaebACkNgmIeXx5oNDGa5I7lqaebAA%3BFUN7fAEdb5E7BynV9bMlWxloNDGsvaf0vkI5zQ%3BFRuNewEdMyBDByHSjeOUzq8ntikZ9BuECfdnNDHSjeOUzq8ntg&amp;aq=0&amp;oq=%E6%A5%B5%E9%85%B7%E8%A1%9D%E6%B5%AA&amp;sll=24.952826,121.569625&amp;sspn=0.532277,1.056747&amp;mra=dpe&amp;mrsp=1&amp;sz=11&amp;via=1&amp;ie=UTF8&amp;t=m&amp;ll=25.054501,121.47171&amp;spn=0.597152,0.878906&amp;z=10&amp;output=embed"></iframe><br /><small><a target="_blank" href="http://goo.gl/maps/kX9PQ" style="color:#0000FF;text-align:left">檢視較大的地圖</a></small><br><br />
				<iframe width="700" height="394" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?saddr=%E6%A1%83%E5%9C%92%E9%AB%98%E4%B8%AD&amp;daddr=24.9352355,121.3443671+to:%E5%8F%B0%E7%81%A3%E5%AE%9C%E8%98%AD%E7%B8%A3%E9%A0%AD%E5%9F%8E%E9%8E%AE%E6%B8%AF%E5%8F%A3%E8%B7%AF93%E4%B9%8B2%E8%99%9F%E6%A5%B5%E9%85%B7%E8%A1%9D%E6%B5%AA&amp;hl=zh-TW&amp;ie=UTF8&amp;sll=24.952826,121.569625&amp;sspn=0.532277,1.056747&amp;geocode=FSZ2fQEdxk47ByGa5I7lqaebACkNgmIeXx5oNDGa5I7lqaebAA%3BFUN7fAEdb5E7BynV9bMlWxloNDGsvaf0vkI5zQ%3BFRuNewEdMyBDByHSjeOUzq8ntikZ9BuECfdnNDHSjeOUzq8ntg&amp;oq=%E6%A5%B5%E9%85%B7%E8%A1%9D%E6%B5%AA&amp;mra=dpe&amp;mrsp=1&amp;sz=11&amp;via=1&amp;t=m&amp;layer=c&amp;cbll=24.873764,121.839624&amp;panoid=EGBFiFaARVchTuaCp2mghw&amp;cbp=13,328.63,,0,9.11&amp;source=embed&amp;ll=24.733423,121.839752&amp;spn=0.491441,0.961304&amp;z=10&amp;output=svembed"></iframe><br /><small><a href="https://maps.google.com/maps?saddr=%E6%A1%83%E5%9C%92%E9%AB%98%E4%B8%AD&amp;daddr=24.9352355,121.3443671+to:%E5%8F%B0%E7%81%A3%E5%AE%9C%E8%98%AD%E7%B8%A3%E9%A0%AD%E5%9F%8E%E9%8E%AE%E6%B8%AF%E5%8F%A3%E8%B7%AF93%E4%B9%8B2%E8%99%9F%E6%A5%B5%E9%85%B7%E8%A1%9D%E6%B5%AA&amp;hl=zh-TW&amp;ie=UTF8&amp;sll=24.952826,121.569625&amp;sspn=0.532277,1.056747&amp;geocode=FSZ2fQEdxk47ByGa5I7lqaebACkNgmIeXx5oNDGa5I7lqaebAA%3BFUN7fAEdb5E7BynV9bMlWxloNDGsvaf0vkI5zQ%3BFRuNewEdMyBDByHSjeOUzq8ntikZ9BuECfdnNDHSjeOUzq8ntg&amp;oq=%E6%A5%B5%E9%85%B7%E8%A1%9D%E6%B5%AA&amp;mra=dpe&amp;mrsp=1&amp;sz=11&amp;via=1&amp;t=m&amp;layer=c&amp;cbll=24.873764,121.839624&amp;panoid=EGBFiFaARVchTuaCp2mghw&amp;cbp=13,328.63,,0,9.11&amp;source=embed&amp;ll=24.733423,121.839752&amp;spn=0.491441,0.961304&amp;z=10" style="color:#0000FF;text-align:left">檢視較大的地圖</a></small>
			</div>
			<div class="tab-pane" id="info">
				<!--簡介顧教練-->
				<center>
					<h4>極酷粉絲團</h4>
					<p style="color: red">極酷粉絲團常提供烏石即時海象照片喔</p>
					<div class="fb-like-box" data-href="https://www.facebook.com/gcoolsurf" data-width="700" data-show-faces="true" data-stream="true" data-show-border="false" data-header="false"></div>
				
					<h5>宜蘭其他浪點</h5>
					<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.tw/maps/ms?msid=217329065639747565370.0004d07476b8e14755836&amp;msa=0&amp;ie=UTF8&amp;t=m&amp;brcurrent=3,0x3467e03d6b232f5b:0xcfbb529e13d307ac,1&amp;ll=24.96863,121.749115&amp;spn=0.149393,0.219727&amp;z=12&amp;output=embed"></iframe><br />
					<small>在較大的地圖上查看<a href="https://maps.google.com.tw/maps/ms?msid=217329065639747565370.0004d07476b8e14755836&amp;msa=0&amp;ie=UTF8&amp;t=m&amp;brcurrent=3,0x3467e03d6b232f5b:0xcfbb529e13d307ac,1&amp;ll=24.96863,121.749115&amp;spn=0.149393,0.219727&amp;z=12&amp;source=embed" style="color:#0000FF;text-align:left">宜蘭衝浪地圖</a></small>
				</center>
			</div>
			
			<div class="tab-pane" id="tutorial" style="text-align: center">
			
				<div class="alert alert-error">
					<span style="font-size: 16px;">
						衝浪具有淺在危險，請注意安全並衡量自身情況<br>
						抓好板子，不要撞人、不要被撞；海浪力大無窮，下水記得要抱頭、太累快上岸。
					</span>
				</div>
				<h4>極酷顧教練教學</h4>
				
				<iframe width="853" height="480" src="http://www.youtube.com/embed/0IRr8MC54h8" frameborder="0" allowfullscreen></iframe>
				<p>ps : 顧教練是佳樂水國際衝浪大賽 男子長青組冠軍三連霸喔!!<br>
				<a href="http://goo.gl/6iS3x" target="_blank">2010</a>　
				<a href="http://goo.gl/2WXCz " target="_blank">2011</a>　
				<a href="http://goo.gl/NyWvV" target="_blank">2012</a>　 </p><br/>
				
				<h4>教學二 - 小細節</h4>
				<iframe width="853" height="480" src="http://www.youtube.com/embed/5V01UFucPoU" frameborder="0" allowfullscreen></iframe><br/><br/>
				
				<h4>烏石的浪可以衝成這樣就很厲害了，有些起乘滿漂亮的</h4>
				<iframe width="853" height="480" src="http://www.youtube.com/embed/yWLhU1eUDZE" frameborder="0" allowfullscreen></iframe><br/>				<br/>
				
				<h4>烏石長板實況</h4>
				<iframe width="853" height="480" src="http://www.youtube.com/embed/0bK5Y7jd3dE" frameborder="0" allowfullscreen></iframe>
				
			</div>
			<div class="tab-pane" id="weather">
				<iframe style="width:960px; height: 1500px; overflow: hidden;border: solid 1px white;" src="http://www.cwb.gov.tw/V7/forecast/taiwan/Yilan_County.htm"/></iframe>
			</div>
			
			
			
			
			
			
		</div>
		
		<footer>
			<div>
				<span style="float: left; color: #BE0200">衝浪具有淺在危險，請注意安全並衡量自身情況</span>
				如有版權問題，煩請告知 benson@talkin.cc
			</div>
		</footer>
	</body>
</html>
