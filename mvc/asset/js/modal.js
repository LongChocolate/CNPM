function menuBar()
{
	let menu = document.getElementsByClassName("my-menuBar")[0];
	menu.style.display = "flex";
}

 window.onclick = function(event) 
 {
 
	let menu = document.getElementsByClassName("my-menuBar")[0];
	let overlayMenu = document.getElementsByClassName("my-menuBar-overlay")[0];

	if(event.target == overlayMenu)
	{
		menu.style.display = "none";
	}

 }	