<img src="/static/images/rr_logo2.png"\><br\>

<div id="img_lightbox">
<a href="/static/images/lightbox/image1.jpg" class="lightbox"><img src="/static/images/lightbox/image1.jpg" width="200" height="144" alt="" /></a>
<a href="/static/images/lightbox/image2.jpg" class="lightbox"><img src="/static/images/lightbox/image2.jpg" width="200" height="144" alt="" /></a>
<a href="/static/images/lightbox/image3.jpg" class="lightbox"><img src="/static/images/lightbox/image3.jpg" width="200" height="144" alt="" /></a>
</div>
<div class="reddita_text"> 

	Reddita is the most exciting and feature packed way to browse <a href="http://www.reddit.com">Reddit</a> on your Android Tablet, with support for advanced features such as:
	<ul>
		<li>Inbox and mail support.</li>
		<li>View and reply on a person\'s profile.</li>
		<li>Check your friends, send them messages and have their posts highlighted in your feed.</li>
		<li>Pin and favourite your favourite subreddits.</li>
		<li>Search and sort your feed.</li>
		<li>And much, much more.</li>
	</ul>
	<br/><blockquote>...this is, by far, the best application on my Xoom. I may never use the reddit website again. Awesome application, just awesome."</blockquote>
	
	<hr>
	
	<div id="button_container_two">
		<a href="/reddita/changelog.html" id="changelog"><button class="cupid-green">Changelog</button></a>
		<button class="cupid-green" id="market_link">Market</button>
		<button class="cupid-green" id="feedback">Feedback</button>
	</div>
</div>


<script type="text/javascript">
$(function() {
	$('a.lightbox').lightBox({imageLoading: "/static/images/lightbox/lightbox-ico-loading.gif",
	imageBtnClose: "/static/images/lightbox/lightbox-btn-close.gif",
	imageBtnNext: "/static/images/lightbox/lightbox-btn-next.gif",
	imageBtnPrev: "/static/images/lightbox/lightbox-btn-prev.gif"}); // Select all links with lightbox class
});

$("#market_link").click(function () {
	window.location.href="https://market.android.com/details?id=com.leyths.reddita.pro" ;
});

$("#feedback").click(function () {
	showContact();
});

$("#changelog").colorbox();
</script>
