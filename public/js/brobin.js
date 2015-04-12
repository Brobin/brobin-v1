//Mobile menu functionality

function show_menu(id) {
	var elements = document.getElementsByClassName(id);
	for(var i=0; i<elements.length; i++) {
		var e = elements[i];
		if(e.style.display == 'block')
          e.style.display = 'none';
       	else
          e.style.display = 'block';
	}
}

//Instagram feed

var instagram = new XMLHttpRequest();
instagram.onreadystatechange = function() {
	if (instagram.readyState === 4 && instagram.status === 200) {
		var response = JSON.parse(instagram.responseText);
		var text = '';
		for ( var i = 0; i < response.length; i++) {
			text += '<div class="col span_1_of_4"><a href="' + response[i].link + '" target="_blank"><img src="' + response[i].images.standard_resolution.url + '" class="shadowed"/></a></div>'
		}
		document.getElementById('instagram').innerHTML = text;
	}
}

instagram.open('GET', 'http://brobin.me/tools/api/instagram.php', true);
instagram.send();

//Google Analytics Script

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-48506325-1', 'auto');
ga('send', 'pageview');