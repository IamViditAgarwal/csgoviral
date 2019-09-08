function show_allInOne()
{
	// only hiding and unhiding the container .
	document.getElementById("container_allInOne").style.display="inline";
	document.getElementById("container_rifle").style.display="none";
	document.getElementById("container_pistol").style.display="none";
	document.getElementById("container_smg").style.display="none";
	document.getElementById("container_heavy").style.display="none";
	document.getElementById("container_sniper").style.display="none";
	document.getElementById("container_knife").style.display="none";
	document.getElementById("container_glove").style.display="none"

	//Make the tab color to mark it as selected
	document.getElementById('allInOne_li').style.cssText = "background-color: #17362e;border-right: 4px solid #11ab81;color: #0cecaf;";
	document.getElementById('rifle_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white;";

	
	document.getElementById('pistol_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('smg_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('heavy_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('sniper_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('knife_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('glove_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";


}
function show_rifle()
{
	document.getElementById("container_allInOne").style.display="none";
	document.getElementById("container_rifle").style.display="inline";
	document.getElementById("container_pistol").style.display="none";
	document.getElementById("container_smg").style.display="none";
	document.getElementById("container_heavy").style.display="none";
	document.getElementById("container_sniper").style.display="none";
	document.getElementById("container_knife").style.display="none";
	document.getElementById("container_glove").style.display="none";

	document.getElementById('rifle_li').style.cssText = "background-color: #17362e;border-right: 4px solid #11ab81;color: #0cecaf;";
	document.getElementById('allInOne_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white;";
	document.getElementById('pistol_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('smg_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('heavy_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('sniper_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('knife_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('glove_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";

}
function show_pistol()
{
	document.getElementById("container_allInOne").style.display="none";
	document.getElementById("container_rifle").style.display="none";
	document.getElementById("container_pistol").style.display="inline";
	document.getElementById("container_smg").style.display="none";
	document.getElementById("container_heavy").style.display="none";
	document.getElementById("container_sniper").style.display="none";
	document.getElementById("container_knife").style.display="none";
	document.getElementById("container_glove").style.display="none";

	document.getElementById('pistol_li').style.cssText = "background-color: #17362e;border-right: 4px solid #11ab81;color: #0cecaf;";
	document.getElementById('rifle_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white;";
	document.getElementById('allInOne_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('smg_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('heavy_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('sniper_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('knife_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('glove_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
}

function show_smg()
{
	document.getElementById("container_allInOne").style.display="none";
	document.getElementById("container_rifle").style.display="none";
	document.getElementById("container_pistol").style.display="none";
	document.getElementById("container_smg").style.display="inline";
	document.getElementById("container_heavy").style.display="none";
	document.getElementById("container_sniper").style.display="none";
	document.getElementById("container_knife").style.display="none";
	document.getElementById("container_glove").style.display="none";

	document.getElementById('smg_li').style.cssText = "background-color: #17362e;border-right: 4px solid #11ab81;color: #0cecaf;";
	document.getElementById('rifle_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white;";
	document.getElementById('pistol_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('allInOne_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('heavy_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('sniper_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('knife_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('glove_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";

}
function show_heavy()
{
	document.getElementById("container_allInOne").style.display="none";
	document.getElementById("container_rifle").style.display="none";
	document.getElementById("container_pistol").style.display="none";
	document.getElementById("container_smg").style.display="none";
	document.getElementById("container_heavy").style.display="inline";
	document.getElementById("container_sniper").style.display="none";
	document.getElementById("container_knife").style.display="none";
	document.getElementById("container_glove").style.display="none";

	document.getElementById('heavy_li').style.cssText = "background-color: #17362e;border-right: 4px solid #11ab81;color: #0cecaf;";
	document.getElementById('rifle_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white;";
	document.getElementById('pistol_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('smg_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('allInOne_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('sniper_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('knife_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('glove_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";

}
function show_sniper()
{
	document.getElementById("container_allInOne").style.display="none";
	document.getElementById("container_rifle").style.display="none";
	document.getElementById("container_pistol").style.display="none";
	document.getElementById("container_smg").style.display="none";
	document.getElementById("container_heavy").style.display="none";
	document.getElementById("container_sniper").style.display="inline";
	document.getElementById("container_knife").style.display="none";
	document.getElementById("container_glove").style.display="none";

	document.getElementById('sniper_li').style.cssText = "background-color: #17362e;border-right: 4px solid #11ab81;color: #0cecaf;";
	document.getElementById('rifle_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white;";
	document.getElementById('pistol_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('smg_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('heavy_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('allInOne_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('knife_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('glove_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
}
function show_knife()
{
	document.getElementById("container_allInOne").style.display="none";
	document.getElementById("container_rifle").style.display="none";
	document.getElementById("container_pistol").style.display="none";
	document.getElementById("container_smg").style.display="none";
	document.getElementById("container_heavy").style.display="none";
	document.getElementById("container_sniper").style.display="none";
	document.getElementById("container_knife").style.display="inline";
	document.getElementById("container_glove").style.display="none";

	document.getElementById('knife_li').style.cssText = "background-color: #17362e;border-right: 4px solid #11ab81;color: #0cecaf;";
	document.getElementById('rifle_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white;";
	document.getElementById('pistol_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('smg_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('heavy_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('sniper_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('allInOne_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('glove_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";

}
function show_glove()
{
	document.getElementById("container_allInOne").style.display="none";
	document.getElementById("container_rifle").style.display="none";
	document.getElementById("container_pistol").style.display="none";
	document.getElementById("container_smg").style.display="none";
	document.getElementById("container_heavy").style.display="none";
	document.getElementById("container_sniper").style.display="none";
	document.getElementById("container_knife").style.display="none";
	document.getElementById("container_glove").style.display="inline";

	document.getElementById('glove_li').style.cssText = "background-color: #17362e;border-right: 4px solid #11ab81;color: #0cecaf;";
	document.getElementById('rifle_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white;";
	document.getElementById('pistol_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('smg_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('heavy_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('sniper_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('knife_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";
	document.getElementById('allInOne_li').style.cssText = "background-color: #151515; border-right: 4px solid black; color: white";

}