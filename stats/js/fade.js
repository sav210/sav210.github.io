function fade(element, duration, sleep=0)
{
	setTimeout(() => {
		var opacity = 0;
		var change = setInterval(function(){
			if(opacity < 100)
			{
				opacity++;
				document.getElementById(element).style.opacity = (opacity / 100).toString();
			}
			else{
				clearInterval(change);
			}
		}, duration);
	}, sleep);
}