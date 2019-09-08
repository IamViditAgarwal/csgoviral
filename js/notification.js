function expand_notif()
{
	var x = document.getElementById("notif-bar");
	
	if( x.style.width != "210px" ){
		x.style.width = "210px";

	} else {
		x.style.width = "0px";
	}
	
}