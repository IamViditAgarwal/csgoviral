<!DOCTYPE html>
<html>
<head>
	<style type="text/css">

		*{
			margin: 0;
			padding: 0;
		}

		
		#cases-menu{
			min-width: 180px;
			width: 13%;
			height: 90%;
			background-color: rgba(25,25,25,0.8);
			bottom: 0;
			position: absolute;
			top:20%;
		}
		.tabs{
			background-color: #151515;
			border-right: 4px solid black;
			color: white;
			font-family: HandelGotDBol;
			font-size: 24px;
			font-weight: 600;
			letter-spacing: 1px;
			margin-bottom: 3px;
			padding-top: 12px;
			padding-bottom: 16px;
			text-align: center; 
			width: 100%;
			cursor: pointer;
		}

		.tabs:hover{
			background-color: #17362e;
			border-right: 4px solid #11ab81;
			color: #0cecaf;
			cursor: pointer;
		}
		.case-line{
			width: fit-content;
			color: white;
			font-family: HandelGotDBol;
			font-size: 32px;
			font-weight: 600;
			letter-spacing: 1px;
			line-height: 0;
			margin: 0 auto;
			padding-right: 3px;
			padding-left: 3px;
		}
		.case-line:before,
		.case-line:after {
		 background-color: white;
		 content: "";
		 display: inline-block;
		 height: 2px;
		 position: relative;
		 vertical-align: top;
		 width: 45%;
		 overflow: hidden;
		}
		.case-line:before {
		 right: 0.3em;
		 margin-left: -50%;
		}
		.case-line:after {
		 left: 0.3em;
		 margin-right: -50%;
		}

		@font-face {
		    font-family: HandelGotDBol;
		    src: url(font/HANDGOTL.TTF);
		}
	</style>
</head>

<body>
	<div id="cases-menu">
		<div class="case-line">Cases</div>
		<ul style="margin-top: 40px; list-style: none;">
			<li class="tabs" id="allInOne_li" onclick="show_allInOne()" style="background-color: #17362e;border-right: 4px solid #11ab81;color: #0cecaf;">All in One</li>
			<li class="tabs" id="rifle_li" onclick="show_rifle()" >Rifle Only</li>
			<li class="tabs" id="pistol_li" onclick="show_pistol()" >Pistol Only</li>
			<li class="tabs" id="smg_li" onclick="show_smg()" >SMG Only</li>
			<li class="tabs" id="heavy_li" onclick="show_heavy()" >Heavy Only</li>
			<li class="tabs" id="sniper_li" onclick="show_sniper()" >Sniper Only</li>
			<li class="tabs" id="knife_li" onclick="show_knife()" >Knife Only</li>
			<li class="tabs" id="glove_li" onclick="show_glove()">Gloves Only</li>
			<li class="tabs" id="Premium_li" onclick="" style="color:#FFa500;">Official Cases</li>
		</ul>
	</div>
</body>
</html>