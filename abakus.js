window.onload = function()
{
	function MoveBall()
	{
		if(this.style.cssFloat == 'right')
			this.style.cssFloat = 'left';
		else
			this.style.cssFloat = 'right';	
	}
	var ball = document.getElementsByClassName('bead');
	for (var i=0; i <ball.length; i++)
	{
		var element = ball[i].style.id;
		if (element == "right") {
			ball[i].style.cssFloat = 'left';
		}
		else {
			ball[i].style.cssFloat = 'right';
		}
		ball[i].onclick = MoveBall;		
	}
}