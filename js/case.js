function allInOne(){
	document.getElementById("category_type").value="allInOne" ;


	document.getElementById("allInOne_li").style.color="#0ceaaf";
	document.getElementById("svg_allInOne").style.fill="#0ceaaf";
	document.getElementById("rifle_li").style.color="#7b7b7b";
	document.getElementById("svg_rifle").style.fill="#7b7b7b";
	document.getElementById("pistol_li").style.color="#7b7b7b";
	document.getElementById("svg_pistol").style.fill="#7b7b7b";
	document.getElementById("smg_li").style.color="#7b7b7b";
	document.getElementById("svg_smg").style.fill="#7b7b7b";
	document.getElementById("heavy_li").style.color="#7b7b7b";
	document.getElementById("svg_heavy").style.fill="#7b7b7b";
	document.getElementById("sniper_li").style.color="#7b7b7b";
	document.getElementById("svg_sniper").style.fill="#7b7b7b";
	document.getElementById("knife_li").style.color="#7b7b7b";
	document.getElementById("svg_knife").style.fill="#7b7b7b";
	document.getElementById("glove_li").style.color="#7b7b7b";
	document.getElementById("svg_glove").style.fill="#7b7b7b";

	document.getElementById('case_name_box').value="";
	document.getElementById('price').value="";

	//var option = '<?php $s= $_SESSION["personaname"]; echo $s; ?>';

	document.getElementById('selected_item_list').innerHTML='';

	document.getElementById('verify_text').style.display= "none";
	document.getElementById('unverify_text').style.display= "none";
	document.getElementById('verify_btn_div').style.display= "block";

	sessionStorage.clear();

	document.getElementById("case_look").innerHTML='<div class="allinone_container" style="float:right; margin-top :-175px;" ><input type="hidden" id="expensive_skin_input" name ="expensive_skin_input"  value=""><img id="expensive_skin" src="" class="allinone_container_skinImage" ><div class="case_box" ><div id="case-name" class="fav_font"></div><div id="case-price" class="fav_font"><span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px; ">$</span><span id="case-price-disp" style="margin-left: -10px;  display: inline; float: right; width: 80px ; text-align:left ;" class="fav_font">0</span></div><span class="bym fav_font" >By<br></span><span  class="byme fav_font">Your Name</span><img src="case images/All In One.png" class="allinone_pic"><svg  id="all_case_color" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="90%" height="87%" viewBox="0 7 500 390" enable-background="new 0 7 500 390" xml:space="preserve" style="fill: rgb(255, 0, 0); position: absolute; margin-left: 7%; margin-top:1px; z-index: 120; mix-blend-mode: soft-light;" ><g id="Layer_2"><path d="M6,218.667c0,0-4.333-14-0.667-15l-2-10c0,0-2-9.667,2.667-13c0,0,54-92,86.333-134l14.667-20c0,0,7.667-13,25.333-11.167 l4.167,3.333l31.667-2.167l6.167-4.333c0,0,13-1.833,16.833,3.333c0,0,3.667,6.333,10.667,9L236.5,18.5c0,0,10-4.25,14.75,3.25 c0,0,59-14.75,112.5-10c0,0,21.25-14.25,25.5-3l16.5,1l3.25-4l10.75,0.75c0,0,7.75,7.5,10.75,12.25l3.25,0.25l8.75,10.25l5.75,0.5 L456,42l-7.75,12.5c0,0,11,27.25-14,16.25l-9.5,10.5c0,0,0,27.5-14.5,15.75l-11.5,12.25c0,0-0.75,23.5-13.5,13.25l-12,13 c0,0-0.5,15.75-10.75,12l-10.25,12c0,0-5,17-13.75,8.75l-6.25,13.5c0,0-1.75,24.75-13.25,13.5c0,0-13,1.75-2.5,4.25l174.5,23 c0,0,13.5,2,6,15.75l-0.25,14.25l-4,2.25l-2,62.75c0,0-2.25,10.75-17,7.5L454,330c0,0-7.25,6.5-9,5.25l-21.75,11.25l-48-4 l-68.5,17.5l-1,9.5c0,0-1,8.75-15.25,9.75l-45,6c0,0-14.25-1.5-18.25,0.5L199,391.5c0,0-3.5,11.5-25.75,5 c0,0-113-41.75-138.25-54.25c0,0-13.25-4.25-13.5-14l-5.25-58.5L11.5,268L8,242l-3.5-2.25l-0.25-5.5l-2.5-7L6,218.667z"/></g> </svg><img src="images/case back.png" class="case_back"><div class="dp-border circle allinone_dp_container"><div class="dp circle allinone_dp" ><img  id="person_dp_img" src="" onerror="myF()" title="Seller Avatar" alt="Image" /></div></div></div></div>';

}
function rifle(){
	document.getElementById("category_type").value="rifle" ;

	document.getElementById("allInOne_li").style.color="#7b7b7b";
	document.getElementById("svg_allInOne").style.fill="#7b7b7b";
	document.getElementById("rifle_li").style.color="#0ceaaf";
	document.getElementById("svg_rifle").style.fill="#0ceaaf";
	document.getElementById("pistol_li").style.color="#7b7b7b";
	document.getElementById("svg_pistol").style.fill="#7b7b7b";
	document.getElementById("smg_li").style.color="#7b7b7b";
	document.getElementById("svg_smg").style.fill="#7b7b7b";
	document.getElementById("heavy_li").style.color="#7b7b7b";
	document.getElementById("svg_heavy").style.fill="#7b7b7b";
	document.getElementById("sniper_li").style.color="#7b7b7b";
	document.getElementById("svg_sniper").style.fill="#7b7b7b";
	document.getElementById("knife_li").style.color="#7b7b7b";
	document.getElementById("svg_knife").style.fill="#7b7b7b";
	document.getElementById("glove_li").style.color="#7b7b7b";
	document.getElementById("svg_glove").style.fill="#7b7b7b";

	document.getElementById('case_name_box').value="";
	document.getElementById('price').value="";

	sessionStorage.clear();
	document.getElementById('selected_item_list').innerHTML='';


	document.getElementById('verify_text').style.display= "none";
	document.getElementById('unverify_text').style.display= "none";
	document.getElementById('verify_btn_div').style.display= "block";


	//document.getElementById("inventory_div").innerHTML='<?php include_once "inventory/inventory_category_rifle.php" ;?>';
	document.getElementById("case_look").innerHTML='<div class="rifle_maincontainer" style="float:right; margin-top :-175px;"><input type="hidden" id="expensive_skin_input" name ="expensive_skin_input"  value=""><img id="expensive_skin" src="" class="rifle_container_skinImage"><div class="case_box"><div id="case-name" class="fav_font" ></div><div id="case-price" class="fav_font"><span style="color: #3add08; margin-right:8px;  display: inline; float: left; width: 10px;">$</span><span id="case-price-disp" style="margin-left: -10px; display: inline; float: right; width: 80px ; text-align:left ;" class="fav_font">0</span></div><span class="bym fav_font" >By<br></span><span  class="byme fav_font">Your Name</span><img src="case images/Rifle Only.png" class="rifle_pic"><svg  id="all_case_color" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="1.5 1.5 497.333 302.167" enable-background="new 1.5 1.5 497.333 302.167" xml:space="preserve" style="fill: rgb(255, 0, 0); position: absolute; margin-left: 1%; z-index: 1; mix-blend-mode: soft-light;" ><path d="M496.625,133.876c3.625-7.75,1.375-19.125,1.375-19.125l-22.375-1.75l2.25-27.375l5.625-4.75l1-15.375 L473,52.126c-2.625-6.5-12.875-5.25-12.875-5.25l-5.25-6.125l-2.25,0.25c-1.375-5-6.25-1-6.25-1l-3-0.5l-0.5-21.625 c-14.125-2.375-17.75,0-17.75,0l-1.75,4.25L423,25.751l1.375,0.125l-1.125,15.875l-2-2.75l-7.375-0.25l-2-2.125h-3.5l-7.375,6.5 l-49.5-3.125c-1.75-3.625-8.25-8.5-8.25-8.5l-2.875,2.375l-3-0.125l0.25-21l-16-0.5l-2.875,4l0.125,3.5l1.375,0.125l-0.875,15h-1.25 l-2.625-2.25l-11.25-0.5l-2.875,1.5l-60.125-2.75l-4-2.625l-5.625-0.25L231,7.251l-15.375-0.75l-2.75,3.875l-0.25,4.375L214,14.876 l0.5,14.25l-1.625,0.375l-1.75-2.375l-7.375-0.625l-3.25-2.375l-7.5,6.875l-42.75-2.625l-7.75-7.625l-2.625,2.25l-1.375-0.875 l-1.625-19.5L123,2.001l-3.25,4.25l0.375,3.375l2.125,0.375l0.25,13.75l-1.625,0.625c-0.625-3.25-7.875-3-7.875-3 c-2.75-5.25-4.75-0.625-4.75-0.625l-1.75-0.375l-4.625,5.375l-2.375-0.5c-4.875-0.375-6.375,2-6.375,2L81.25,38.376l-1.125,17.875 L82,59.001l-1.875,22.875L63.5,81.001l-0.625,16.25l15.625,1.5l-1.25,22.125l-3.125,3.875l-1,18l6.75,9 c3.625,6,8.375,5.625,8.375,5.625l8.875,0.75l-0.75,0.875l-6.75,0.5l-0.375,1.75c-8.625-2.625-15-0.625-15-0.625l-5.75,1.75 l-6.25,0.25l-21.375,9.75v1.125l-8.125,4l-2.375-0.75l-13.25,6.125H13.25l-11.125,4.75l0.5,4.625L8,197.501 c4.625,4.375,6.75,46.5,6.75,46.5c1.25,6.375,7,6.25,7,6.25L401,302.834c8.666,1.5,10.666-3.666,10.666-3.666 c5,5.334,12.334,4.166,12.334,4.166c17.834-4.334,6.666-21.499,6.666-21.499L442,269.668c4.5,5,12.332,3.667,12.332,3.667 c14.5-6.833,5.293-19.709,5.293-19.709l2.125-37.125l5-4.125l-0.125-5.375l-10.125-5.375c0.375-3-10.875-3.125-10.875-3.125 l-0.75-2.125l-5.5-1l-0.375-0.75l8.375,0.625C454,197.001,459,193.876,459,193.876l16.125-14.25l0.75-14l-4.25-5.5l2.75-27.25 L496.625,133.876z M187.239,168.745c-0.943-0.384-1.933-0.386-2.928-0.451c-0.063,0.37-0.326,0.699-0.811,0.699 c-0.853,0-1.705-0.013-2.554-0.101c-0.177,0.5-0.616,0.877-1.321,0.826c-7.55-0.544-15.066-1.595-22.597-2.137 c-6.164-0.443-12.363-1.753-18.528-1.738c-1.285,0.004-1.695-1.346-1.236-2.216c-1.285-0.075-2.601-0.694-3.877-0.383 c-0.642,0.157-0.914-0.831-0.271-0.987c1.454-0.355,2.816,0.309,4.261,0.357c0.289,0.009,0.443,0.213,0.479,0.436 c0.184-0.088,0.397-0.142,0.646-0.142c6.697-0.017,13.541,1.261,20.208,1.899c6.985,0.668,13.907,1.471,20.917,1.976 c0.372,0.026,0.667,0.167,0.893,0.368c0.037-0.002,0.07-0.021,0.107-0.017c0.954,0.125,1.915,0.125,2.875,0.125 c0.048,0,0.082,0.021,0.125,0.025c0.068-0.034,0.148-0.056,0.25-0.045c1.229,0.118,2.471,0.045,3.636,0.518 C188.115,168.002,187.851,168.993,187.239,168.745z M291.366,179.943c-1.805-0.887-4.007-0.922-6.002-0.928 c0.254,1.021-0.276,2.213-1.614,2.11c-10.723-0.828-21.424-1.931-32.131-2.933c-4.657-0.437-9.417-1.35-14.084-1.519 c-2.293-0.083-4.974,0.122-6.918-1.289c-0.597-0.433-0.801-1.051-0.747-1.64c-0.237-0.121-0.367-0.352-0.406-0.602 c-1.123,0.023-2.276,0.084-3.352-0.275c-0.622-0.208-0.354-1.197,0.272-0.987c1.115,0.373,2.332,0.239,3.489,0.232 c0.104,0,0.186,0.03,0.256,0.073c0.042-0.004,0.073-0.023,0.119-0.023c0.177,0,0.313,0.057,0.434,0.131 c0.466-0.32,1.075-0.383,1.699,0.07c2.109,1.529,9.254,1.352,11.657,1.598c4.416,0.452,8.837,0.842,13.257,1.251 c8.815,0.817,17.624,1.729,26.453,2.412c0.423,0.033,0.766,0.185,1.028,0.409c0.063-0.029,0.137-0.046,0.222-0.046 c2.277,0.008,4.798,0.045,6.884,1.069C292.476,179.352,291.957,180.232,291.366,179.943z  M396.116,190.857 c-2.231-0.654-4.573-0.332-6.869-0.25c0.009,0.959-0.747,1.92-1.915,1.533c-2.818-0.938-5.773-0.826-8.707-0.82 c-0.273,0-0.508-0.06-0.706-0.157c-7.078-1.165-14.021-1.103-21.134-1.912c-3.365-0.383-6.767-1.417-10.16-1.431 c-2.558-0.008-4.866,0.248-7.293-0.68c-0.734-0.281-1.051-0.92-1.055-1.55c-0.314-0.041-0.61-0.131-0.882-0.36 c-0.082-0.068-0.12-0.157-0.136-0.252c-0.521-0.117-0.486-0.977,0.114-0.977h1.375c0.068,0,0.132,0.016,0.188,0.04 c0.104-0.017,0.206-0.034,0.313-0.04c0.063-0.003,0.114,0.008,0.166,0.023c0.226-0.036,0.475-0.018,0.751,0.088 c2.962,1.134,6.641,0.525,9.808,0.935c3.449,0.445,6.854,1.241,10.338,1.408c6.429,0.308,12.419,0.64,18.748,1.724 c3.063-0.011,6.169-0.043,9.106,0.934c0.324,0.107,0.564,0.289,0.739,0.505c2.497-0.058,5.038-0.44,7.477,0.276 C397,190.076,396.737,191.041,396.116,190.857z"/></svg><img src="images/case back.png" class="case_back"><div class="dp-border circle rifle_dp_container"><div class="dp circle rifle_dp"> <img src="" id="person_dp_img" title="Seller Avatar" alt="Image" onerror="myF()" /> </div></div> </div> </div>';
}
function pistol(){
	document.getElementById("category_type").value="pistol" ;

	document.getElementById("allInOne_li").style.color="#7b7b7b";
	document.getElementById("svg_allInOne").style.fill="#7b7b7b";
	document.getElementById("rifle_li").style.color="#7b7b7b";
	document.getElementById("svg_rifle").style.fill="#7b7b7b";
	document.getElementById("pistol_li").style.color="#0ceaaf";
	document.getElementById("svg_pistol").style.fill="#0ceaaf";
	document.getElementById("smg_li").style.color="#7b7b7b";
	document.getElementById("svg_smg").style.fill="#7b7b7b";
	document.getElementById("heavy_li").style.color="#7b7b7b";
	document.getElementById("svg_heavy").style.fill="#7b7b7b";
	document.getElementById("sniper_li").style.color="#7b7b7b";
	document.getElementById("svg_sniper").style.fill="#7b7b7b";
	document.getElementById("knife_li").style.color="#7b7b7b";
	document.getElementById("svg_knife").style.fill="#7b7b7b";
	document.getElementById("glove_li").style.color="#7b7b7b";
	document.getElementById("svg_glove").style.fill="#7b7b7b";

	document.getElementById('case_name_box').value="";
	document.getElementById('price').value="";
	sessionStorage.clear();
	document.getElementById('selected_item_list').innerHTML='';


	document.getElementById('verify_text').style.display= "none";
	document.getElementById('unverify_text').style.display= "none";
	document.getElementById('verify_btn_div').style.display= "block";


	//document.getElementById("inventory_div").innerHTML='<?php include("inventory/inventory_category_rifle.php");?>';

	document.getElementById("case_look").innerHTML='<div class="pistol_maincontainer" style=" float:right; margin-top :-175px;"><input type="hidden" id="expensive_skin_input" name ="expensive_skin_input"  value=""><img id="expensive_skin" src="" class="pistol_container_skinImage" ><div class="case_box" ><div id="case-name" class="fav_font"></div><div id="case-price" class="fav_font"><span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span><span id="case-price-disp" style="margin-left: -10px;  display: inline; float: right; width: 80px ; text-align:left ;" class="fav_font">0</span></div><span class="bym fav_font" >By<br></span><span  class="byme fav_font">Your Name</span><img src="case images/Pistol Only.png" class="pistol_pic"><svg  id="all_case_color" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="3.334 4.833 449.667 492.667" enable-background="new 3.334 4.833 449.667 492.667" xml:space="preserve" style="fill: rgb(255,0,0); position: absolute; margin-left: 15%; margin-top:-12px; z-index: 1; mix-blend-mode: soft-light;" ><path d="M450.75,382.25l-4.75-1.5l-38.5-87c8.25-16-27.5-17-27.5-17c-1.5-6-5-7.25-5-7.25l-0.5-2.5l5.75,0.5l3,1.5 c22.5-6.75,20.75-26.75,20.75-26.75l-2.25-2.75l5-174l3.25-3c2.5-13.5-9.75-24.75-9.75-24.75l-3-14.75l-27.75-0.75l-5.25,5l-0.5,7.5  h-2.5v-16.5L362.5,12l-2.5-0.25l0.75-5L358.5,6l-27.75,1l-0.5,6.25l1.5,0.5l-0.25,9l-3.5,1l-0.5,10.75l-188,0.5l-3-1l-1.5-9.5l-2-2 l-0.75-10.25L134,10.5l-1.25-2.75c-14-5.75-27.5,1-27.5,1l-0.5,2.25L102,15.75l2.75,3.5l-1.5,15.25l-2.75,0.25l-0.25-7.25l-4.5-4.75 L73,23.5h-6.25L63.25,38c-10,12.5-9.5,23-9.5,23l3.75,3.5l3.75,174L58.5,241C58.25,263.5,79,268,79,268l3.125-1.875l6,0.5L83,272.25 l-0.375,2.125c-30.25,3-29.375,13.125-29.375,13.125l0.75,4.25L10.75,378c-4-0.25-5.75,4.25-5.75,4.25 c-1.75,12.5,5.5,19.25,5.5,19.25l-0.5,5l2,4.25L24.25,412l9.5,46.75c2.5,14.5,19.75,16,19.75,16c5.25,5.25,8.25,0.25,8.25,0.25H113 l2,1.75l43.25,17.5c18.5,5,141,1.25,141,1.25l42-18.5l53.25,0.25c5.25,6,7.75-0.25,7.75-0.25c16.5,0.25,21-13.25,21-13.25l9-49.75 H442c3.75-0.5,4-8.25,4-8.25C456,392,450.75,382.25,450.75,382.25z  M287.433,269.186c0.074,0.362-2.907,3.961-3.07,4.186 c-0.749,1.023-1.553,1.74-2.861,1.843c-0.43,0.033-1.135-0.347-1.25-0.347h-93.956c-2.282,0.566-4.824,1.566-6.787,0.359 c-1.888-1.16-3.496-5.261-3.56-5.5c-1.778-0.49-1.775-3.322,0.303-3.266c1.169,0.031,2.307,0.266,3.442,0.5h2.558 c0.325,0,0.593,0.081,0.818,0.207c0.143-0.014,0.28-0.034,0.432-0.034h96.75c0.12,0,0.223,0.024,0.337,0.033 c0.014-0.001,0.023-0.005,0.038-0.005c2.449-0.057,4.879-0.868,7.321-0.332C289.431,267.154,288.861,269.361,287.433,269.186z"/></svg><img src="images/case back.png" class="case_back"> <div class="dp-border circle pistol_dp_container"> <div class="dp circle pistol_dp"> <img src="" onerror="myF()" id="person_dp_img" title="Seller Avatar" alt="Image"/></div></div></div></div>';
}
function smg(){
	document.getElementById("category_type").value="smg" ;

	document.getElementById("allInOne_li").style.color="#7b7b7b";
	document.getElementById("svg_allInOne").style.fill="#7b7b7b";
	document.getElementById("rifle_li").style.color="#7b7b7b";
	document.getElementById("svg_rifle").style.fill="#7b7b7b";
	document.getElementById("pistol_li").style.color="#7b7b7b";
	document.getElementById("svg_pistol").style.fill="#7b7b7b";
	document.getElementById("smg_li").style.color="#0ceaaf";
	document.getElementById("svg_smg").style.fill="#0ceaaf";
	document.getElementById("heavy_li").style.color="#7b7b7b";
	document.getElementById("svg_heavy").style.fill="#7b7b7b";
	document.getElementById("sniper_li").style.color="#7b7b7b";
	document.getElementById("svg_sniper").style.fill="#7b7b7b";
	document.getElementById("knife_li").style.color="#7b7b7b";
	document.getElementById("svg_knife").style.fill="#7b7b7b";
	document.getElementById("glove_li").style.color="#7b7b7b";
	document.getElementById("svg_glove").style.fill="#7b7b7b";


	document.getElementById('case_name_box').value="";
	document.getElementById('price').value="";

	sessionStorage.clear();
	document.getElementById('selected_item_list').innerHTML='';


	document.getElementById('verify_text').style.display= "none";
	document.getElementById('unverify_text').style.display= "none";
	document.getElementById('verify_btn_div').style.display= "block";


	document.getElementById("case_look").innerHTML='<div class="smg_maincontainer" style="float:right; margin-top :-175px;"><input type="hidden" id="expensive_skin_input" name ="expensive_skin_input"  value=""><img id="expensive_skin" src="" class="smg_container_skinImage" ><div class="case_box" ><div id="case-name" class="fav_font"></div><div id="case-price" class="fav_font"><span style="color: #3add08; margin-right:8px;  display: inline; float: left; width: 10px;">$</span><span id="case-price-disp" style="margin-left: -10px; display: inline; float: right; width: 80px ; text-align:left ;">0</span></div> <span class="bym fav_font" >By<br></span><span  class="byme fav_font">Your Name</span><img src="case images/SMG Only.png" class="smg_pic" ><svg  id="all_case_color" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="3.167 2.333 496.833 476.833" enable-background="new 3.167 2.333 496.833 476.833" xml:space="preserve" style="fill: rgb(255,0,0); position: absolute; margin-left: 10%; margin-top:-12px; z-index: 1; mix-blend-mode: soft-light;" ><path d="M16.5,348.5L4.25,277c0,0-2-6,11.25-11.5l5.75-3c0,0,13-3.75,19.5-9.5l15.5-2.25l7.25-3.25l0.25-3.75L77,241 c0,0,5.667-1,6.667-7.167c0,0,18.167,0.167,16.833-8c0,0,16.167,0,14.5-6.333l21.5-9.667c0,0,15.834-4.5,31.667-2.667  c0,0-14.5-6.334-18-21.167l-3.667-1.833l-0.167-6.5l2.667-1.333l-0.833-13l-3.333-1.5l0.833-6.833l5.333-3l-0.667-10.667 c0,0-10.834-6.667-0.167-12.667l-1.167-9c0,0-10.167-8-1.167-14.167l-0.5-9.667c0,0-9.833-6.167-1.5-14.167L145,70.5l-7.333-8.667 l-0.5-8.333l3-0.5l-0.833-16.5L136,36.167l-0.833-8.667h3.333l-0.667-11.167c0,0,2.833-9.833,14.5-9.667l13.833,0.167L166,3 l29.667,0.333L198,8l40.167,1.333l1.667-4.5l8.833,0.833L250,9.5h12.667l1.666-4.5l8.5,0.667l1.834,5l36.999,1.833l0.5-4.167 l10.666-1l1.335,5.333l15.334,0.5l0.166-5.667l10.834,0.833L351.166,14l53.168,1.333l2.5-5.167l9.832,0.667H447L449.834,17 l27.5,1.167c0,0,24.666,2.833,18.833,28.667l3.833,1.5l-2.332,10.833l-4.667,0.5l-0.334,20.667l3.834,1.333L494.834,92 c0,0-25.666,14-6.833,27.667l-1.167,5.667c0,0-17.5,11.333-2.833,24l-1.667,7.5c0,0-16.834,6.5-1.5,20.5l-1,7 c0,0-17.667,8.5,0,24.667l-0.5,10l-3.5,0.833l-1.166,16.833l3.166,1.333l-1.833,9.333l-4.833,0.5c0,0-6.167,16.833-27.834,14.333 L443,264.333c0,0,22.499,7.666,19.334,15.333l2.5,3.167l-1,16L458.668,304l-3.167,35.833c0,0,2.665,19.5-8.167,25l-3.166,0.667  l-1.667,4.166L436.334,375l-1,7.833l-8.167,8l-1,8.167l-9.166,7.5l-0.167,8.666l-10.667,9.334l-1.833,19l-10.5,15.333l-3.167-0.5 l-5.833,10c0,0-5.832,14.834-36.166,7.667L27.334,356.166L16.5,348.5z"/> </svg> <img src="images/case back.png" class="case_back"> <div class="dp-border circle smg_dp_container"> <div class="dp circle smg_dp"> <img src="" id="person_dp_img" onerror="myF()" title="Seller Avatar" alt="Image" /> </div> </div> </div> </div>';
}
function heavy(){
	document.getElementById("category_type").value="heavy" ;

	document.getElementById("allInOne_li").style.color="#7b7b7b";
	document.getElementById("svg_allInOne").style.fill="#7b7b7b";
	document.getElementById("rifle_li").style.color="#7b7b7b";
	document.getElementById("svg_rifle").style.fill="#7b7b7b";
	document.getElementById("pistol_li").style.color="#7b7b7b";
	document.getElementById("svg_pistol").style.fill="#7b7b7b";
	document.getElementById("smg_li").style.color="#7b7b7b";
	document.getElementById("svg_smg").style.fill="#7b7b7b";
	document.getElementById("heavy_li").style.color="#0ceaaf";
	document.getElementById("svg_heavy").style.fill="#0ceaaf";
	document.getElementById("sniper_li").style.color="#7b7b7b";
	document.getElementById("svg_sniper").style.fill="#7b7b7b";
	document.getElementById("knife_li").style.color="#7b7b7b";
	document.getElementById("svg_knife").style.fill="#7b7b7b";
	document.getElementById("glove_li").style.color="#7b7b7b";
	document.getElementById("svg_glove").style.fill="#7b7b7b";

	document.getElementById('case_name_box').value="";
	document.getElementById('price').value="";

	sessionStorage.clear();
	document.getElementById('selected_item_list').innerHTML='';


	document.getElementById('verify_text').style.display= "none";
	document.getElementById('unverify_text').style.display= "none";
	document.getElementById('verify_btn_div').style.display= "block";


	document.getElementById("case_look").innerHTML='<div class="heavy_maincontainer" style="float:right; margin-top :-175px;"><input type="hidden" id="expensive_skin_input" name ="expensive_skin_input"  value=""><img id="expensive_skin" src="" class="heavy_container_skinImage" ><div class="case_box" ><div id="case-name" class="fav_font" ></div><div id="case-price" class="fav_font"><span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span><span id="case-price-disp" style="margin-left: -10px;    display: inline; float: right; width: 80px ; text-align:left ;">0</span></div><span class="bym fav_font" >By<br></span><span  class="byme fav_font">Your Name</span><img src="case images/Heavy only.png" class="heavy_pic"> <svg  id="all_case_color" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="2.5 2.167 495 359.5" enable-background="new 2.5 2.167 495 359.5" xml:space="preserve" style="fill: rgb(255,0,0); position: absolute; margin-left: 1%; margin-top:-12px; z-index: 1; mix-blend-mode: soft-light;" ><path  d="M17,199.917c0,0-3-2.25-7.25-2.5L8,180.167l1.5-1.25L4.75,27.667l-1.5-1.25l0.5-17.75c0,0,3.75,3,7.75-1.75 L66,8.167c0,0,0.625-1.375,9.125-0.125l0.25-5.375l13.25,0.125c0,0-0.125,7.625,4,5h5.25l0.5,1.25l85.875,0.75l3.5-2.125h11.375 l3.75-0.625l4.25,2.75L308.082,12c0,0,3.085-3.917,8.418-0.833l1.166-0.833l-0.084-4.25l11.667-0.167v4.167 c0,0,1.25,1.834,2.583,0.917l4.25-0.25l1,1.083l44.25,0.25L381.166,181l-44.916,2.333L336.166,185l2.916,0.416l0.084,1.166 l-17.501,1.334v-1.5l-2.083-2L90.083,196.25l0.084,1.916l2.167,1.75l255.25-13.418l37.75-2.416l111.25,21.582l0.29,8.625l-1,1.375 l-2,82.75l0.75,0.25l-0.125,17l-18.125,3.75L475,318.542l-166.25,18.375l-10.75,1.75l-0.5-0.75l-193.375,20.25l-2.375,1.375 l-22.375,1.25l-6.125-4.875v-1.375l-20.75-18.75l-1.125-0.125l-3.375-3.5l-17.875-16.25l-1.75,0.375l-4.5-4.125l-0.125-17.5 l-4.125-90.25l52.875-3.25l-1.375-3.625L17,199.917z"/></svg><img src="images/case back.png" class="case_back"><div class="dp-border circle heavy_dp_container" ><div class="dp circle heavy_dp "><img src="" id="person_dp_img" onerror="myF()" title="Seller Avatar" alt="Image" /></div></div></div></div>';
}
function sniper()
{
	document.getElementById("category_type").value="sniper" ;

	document.getElementById("allInOne_li").style.color="#7b7b7b";
	document.getElementById("svg_allInOne").style.fill="#7b7b7b";
	document.getElementById("rifle_li").style.color="#7b7b7b";
	document.getElementById("svg_rifle").style.fill="#7b7b7b";
	document.getElementById("pistol_li").style.color="#7b7b7b";
	document.getElementById("svg_pistol").style.fill="#7b7b7b";
	document.getElementById("smg_li").style.color="#7b7b7b";
	document.getElementById("svg_smg").style.fill="#7b7b7b";
	document.getElementById("heavy_li").style.color="#7b7b7b";
	document.getElementById("svg_heavy").style.fill="#7b7b7b";
	document.getElementById("sniper_li").style.color="#0ceaaf";
	document.getElementById("svg_sniper").style.fill="#0ceaaf";
	document.getElementById("knife_li").style.color="#7b7b7b";
	document.getElementById("svg_knife").style.fill="#7b7b7b";
	document.getElementById("glove_li").style.color="#7b7b7b";
	document.getElementById("svg_glove").style.fill="#7b7b7b";

	document.getElementById('case_name_box').value="";
	document.getElementById('price').value="";

	sessionStorage.clear();
	document.getElementById('selected_item_list').innerHTML='';


	document.getElementById('verify_text').style.display= "none";
	document.getElementById('unverify_text').style.display= "none";
	document.getElementById('verify_btn_div').style.display= "block";



	document.getElementById("case_look").innerHTML='<div class="sniper_maincontainer" style="float:right; margin-top :-175px;"><input type="hidden" id="expensive_skin_input" name ="expensive_skin_input"  value=""><img id="expensive_skin" src="" class="sniper_container_skinImage" ><div class="case_box"><div id="case-name" class="fav_font" ></div><div id="case-price" class="fav_font"><span style="color: #3add08; margin-right:8px;   display: inline; float: left; width: 10px;">$</span><span id="case-price-disp" style="margin-left: -10px;  display: inline; float: right; width: 80px ; text-align:left ;">0</span></div><span class="bym fav_font" >By<br></span><span  class="byme fav_font">Your Name</span> <img src="case images/Sniper Only.PNG" class="sniper_pic" ><svg  id="all_case_color" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="93%" height="92%" viewBox="2.375 1.625 488 263.875" enable-background="new 2.375 1.625 488 263.875" xml:space="preserve" style="fill: rgb(255,0,0); position: absolute; margin-left: 5%; margin-top:-14px; z-index: 1; mix-blend-mode: multiply;" ><path d="M24.5,224.167l-3.833-31.166l4-3.334c0,0,5-4.334,7.667-4l-3.167-2.833c0,0-7.333,4.166-14-3.167L10.5,173.5 l-1.375-16.75L11.25,154l-3.5-49.5c0,0-0.375-6.625-4-9.875l-1.125-15.5c0,0,0.625-8.5,10.125-9.375l10.125-1.375L24,65.125 c0,0,9.625-5.75,9.875,4.5l14.5-1.5L50.25,64.5l2.125-0.75c0,0,1.375-7.875,8.375-3.75l1.75,2.125l10-1.75c0,0,2.125,3.375,16,0.5 l47.25-7.625c0,0,0.5-3,7.75-3.75l12.25-1.5c0,0,0.75-6.75,7.125-4.625c0,0,4.5,1.125,3.625,5.625l10.625-1.5l2.375-3.625 l2.875-0.375L183,40.25c0,0,5.5-3.5,9,1.5l8.125-1.125c0,0,2.25,3.375,16.875,0.25l39.125-6.375c0,0,0.5-4,5.75-4l13.25-2 l1.75-3.625c0,0,4.25-3.125,8.375,1.125l1,3.625l7.875-1.5c0,0,2-4.25,5.5-3.75c0,0,0.25-8,8.625-3l1,1.25l5.75-1 c0,0,4.25,2.625,16,0l35.625-6c0,0,2-4.25,4.875-3.625l13.75-1.875l1.875-3.375c0,0,3-2.625,8.25,0.25l0.75,3.75l5.5-1l3-3.25 l2.875-0.25c0,0,1.625-7.125,9.625-3.25L418,4.875L427.875,7c0,0,6.25,2.375,4.875,9.375l-2.375,57.875l19.875,40.625L444,111.75 l-12.875-28.125L429.75,83.5L429.125,95c0,0-0.25,8.5-11,8.375l-2.5,2.75l-0.125,1.125l-19,3.375l-0.75-2.5l-3.25,3.5l-3.75,0.75 l-4.25-2.25l-72.875,14.5l-3.75,4.125l-3.125,0.875L302.125,128L302,129.875l-12.25,2.5L289,130c0,0-2.75,0.75-3.75,3.5 l-3.875,0.625l-3.375-2.5l-80.5,16.75c0,0-2.125,1.5-2.625,3.5l-5,1.375c0,0-1-1.875-2.5-1.75l-0.125,2.125l-13.75,2.5l-0.375-2.375 c0,0-1.875,0.5-3.25,3.5l-4.75,0.875l-3.375-2.75L71.5,174.5l-2.25,3.375L63.625,179l-2.375-2.375l-1.125,0.5L60.75,179l-15.625,3.5 v-2l-3.375,1.625l0.875,2l160.875-33.5l120.625-24.375l98.125-20.125c0,0,8.375-2.125,12.625,1.625l46.375,22.125l2.416,2.042 l6.584,3.917l0.082,5.917l-3.666,21.75c0,0-0.084,4.584-9.584,5.917l-8.5,1.5L464.25,172l-4.25-1.416h-2.085l-4.665,3.583 l-15.918,4.583c0,0-4.415,0.833-7.915-1.917c0,0-0.919-1.667-4.335-0.417L381.75,186.5c0,0-0.375,5.375-3.75,4.875 c0,0-14.375,4.875-20.25,4.25c0,0-3.063,2.313-7.125-0.25l-4.125,0.875l-0.375,1.813l-14,4.625l-2.313-0.125l-4.25-2.813L320.75,201 v1.625l-8.063,6.5l-38.25,9.813l-5.188-0.5l-6.25-4.875l-7.313,2.688l-0.875,3.313c0,0-1.688,2.125-5.188,2.25l-7.313,1.25H239 c0,0-4.438,2.375-6.688-0.188l-5.563,1.625l-1,1.625l-24.875,7.375l-2.375-0.625l-3.25-2.625l-2.875-0.25l-55.25,13.75 c0,0-0.125,6.25-4.75,6c0,0-17.875,5.625-23.125,4.75l-4.25,1.75l-3.625-1.75l-6.25,1.75l-0.875,2l-21,6.5c0,0-5.5,2.375-10.375-2 l-6.25-6.125l-1.375-1.75l-0.625-7.5l-14.5-14.625c0,0-1.5-1-3.25,0l-2.375,0.375C34.5,233.125,26.875,228.959,24.5,224.167z"/></svg> <img src="images/case back.png" class="case_back"> <div class="dp-border circle sniper_dp_container" ><div class="dp circle sniper_dp"><img src="" onerror="myF()" id="person_dp_img" title="Seller Avatar" alt="Image" /></div></div></div></div>';
}
function knife()
{
	document.getElementById("category_type").value="knife" ;

	document.getElementById("allInOne_li").style.color="#7b7b7b";
	document.getElementById("svg_allInOne").style.fill="#7b7b7b";
	document.getElementById("rifle_li").style.color="#7b7b7b";
	document.getElementById("svg_rifle").style.fill="#7b7b7b";
	document.getElementById("pistol_li").style.color="#7b7b7b";
	document.getElementById("svg_pistol").style.fill="#7b7b7b";
	document.getElementById("smg_li").style.color="#7b7b7b";
	document.getElementById("svg_smg").style.fill="#7b7b7b";
	document.getElementById("heavy_li").style.color="#7b7b7b";
	document.getElementById("svg_heavy").style.fill="#7b7b7b";
	document.getElementById("sniper_li").style.color="#7b7b7b";
	document.getElementById("svg_sniper").style.fill="#7b7b7b";
	document.getElementById("knife_li").style.color="#0ceaaf";
	document.getElementById("svg_knife").style.fill="#0ceaaf";
	document.getElementById("glove_li").style.color="#7b7b7b";
	document.getElementById("svg_glove").style.fill="#7b7b7b";

	document.getElementById('case_name_box').value="";
	document.getElementById('price').value="";

	sessionStorage.clear();
	document.getElementById('selected_item_list').innerHTML='';


	document.getElementById('verify_text').style.display= "none";
	document.getElementById('unverify_text').style.display= "none";
	document.getElementById('verify_btn_div').style.display= "block";



	document.getElementById("case_look").innerHTML='<div class="knife_maincontainer" style="float:right; margin-top :-175px;"><input type="hidden" id="expensive_skin_input" name ="expensive_skin_input"  value=""><img class="knife_container_skinImage" id="expensive_skin" src="" ><div class="case_box" ><div id="case-name" class="fav_font" ></div><div id="case-price" class="fav_font"><span style="color: #3add08; margin-right:8px;  display: inline; float: left; width: 10px;">$</span><span id="case-price-disp" style="margin-left: -10px; display: inline; float: right; width: 80px ; text-align:left ;">0</span></div><span class="bym fav_font" >By<br></span><span  class="byme fav_font">Your Name</span><img src="case images/Knife Only.png" class="knife_pic" ><svg  id="all_case_color" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80%" height="67%" viewBox="2.084 1.333 492.584 363.25" enable-background="new 2.084 1.333 492.584 363.25" xml:space="preserve" style="fill: rgb(255,0,0); position: absolute; margin-left: 16%; margin-top:6%; z-index: 1; mix-blend-mode: soft-light; "> <path d="M451,160.001l18.5,2.5l18.5-4.5l6-151.5l-341-5l1.5,131.5l31.5,3.667v2.667l-30.333-2.333L10.333,156.334 L18,284.001l-15,6.666l0.667,10.334l30.667,5L42,303.667l8,0.666c6,4.666,92.333,23,92.333,23l10-1.666 c6.333,5.668,9.333,1.334,9.333,1.334C169,337.667,285,348.333,285,348.333c4.333-0.666,18,9.334,18,9.334l40,6.668l25.666-8.668 c3-6.666,18-9,18-9c19-1.332,24-8,24-8h5l2.334-3.332l9.332-0.668l18.334-11H456l19-6.666l3-3.334l0.665-9.332L466,299.667 l4.5-134.333l-40.5-3.833v-3.5L451,160.001z  M388.5,157.985c-1.962-0.031-3.837-0.486-5.723-0.89 c-0.227,0.09-0.482,0.145-0.777,0.14c-6.689-0.09-13.312-1.159-20-1.25c-0.786-0.011-1.328-0.395-1.633-0.918 c-5.374-0.448-10.757-0.794-16.116-1.389c-14.604-1.621-29.379-1.842-43.932-3.766c-2.674-0.353-5.344-0.772-8.016-1.179 c-6.241,0.019-12.435-0.105-18.67-0.474c-3.743-0.221-7.503-0.5-11.01-1.836c-1.828-0.119-3.656-0.268-5.487-0.464 c-7.003-0.754-13.93-1.597-20.978-1.782c-5.787-0.152-11.552-0.34-17.188-1.763c-2.479-0.626-1.427-4.453,1.055-3.826 c6.992,1.765,14.146,1.39,21.283,1.793c6.518,0.368,12.978,1.401,19.478,1.972c0.406,0.036,15.487,0.475,21.813,1.154 c3.17,0.34,6.323,0.794,9.474,1.261c0.394-0.001,2.017,0.128,2.313,0.34c2.568,0.381,5.138,0.758,7.716,1.073 c7.593,0.925,15.242,1.105,22.869,1.617c7.086,0.476,14.092,1.469,21.158,2.099c7.645,0.68,15.302,1.42,22.947,2.03 c3.77,0.3,7.547,0.424,11.315,0.719c2.771,0.217,5.287,1.327,8.106,1.372C391.057,154.057,391.061,158.025,388.5,157.985z"/> </svg> <img src="images/case back.png" class="case_back"> <div class="dp-border circle knife_dp_container" > <div class="dp circle knife_dp"> <img src="" id="person_dp_img" onerror="myF()" title="Seller Avatar" alt="Image" /></div></div></div></div>';
}
function glove()
{
	document.getElementById("category_type").value="glove" ;

	document.getElementById("allInOne_li").style.color="#7b7b7b";
	document.getElementById("svg_allInOne").style.fill="#7b7b7b";
	document.getElementById("rifle_li").style.color="#7b7b7b";
	document.getElementById("svg_rifle").style.fill="#7b7b7b";
	document.getElementById("pistol_li").style.color="#7b7b7b";
	document.getElementById("svg_pistol").style.fill="#7b7b7b";
	document.getElementById("smg_li").style.color="#7b7b7b";
	document.getElementById("svg_smg").style.fill="#7b7b7b";
	document.getElementById("heavy_li").style.color="#7b7b7b";
	document.getElementById("svg_heavy").style.fill="#7b7b7b";
	document.getElementById("sniper_li").style.color="#7b7b7b";
	document.getElementById("svg_sniper").style.fill="#7b7b7b";
	document.getElementById("knife_li").style.color="#7b7b7b";
	document.getElementById("svg_knife").style.fill="#7b7b7b";
	document.getElementById("glove_li").style.color="#0ceaaf";
	document.getElementById("svg_glove").style.fill="#0ceaaf";

	document.getElementById('case_name_box').value="";
	document.getElementById('price').value="";

	sessionStorage.clear();
	document.getElementById('selected_item_list').innerHTML='';


	document.getElementById('verify_text').style.display= "none";
	document.getElementById('unverify_text').style.display= "none";
	document.getElementById('verify_btn_div').style.display= "block";


	document.getElementById("case_look").innerHTML='<div class="glove_maincontainer" style="float:right; margin-top :-175px;"><input type="hidden" id="expensive_skin_input" name ="expensive_skin_input"  value=""><img id="expensive_skin" src="" class="glove_container_skinImage"><div id="all_case_color_glove" style=" background-color: #ff0000 ; opacity:0.6 ; mix-blend-mode: soft-light; position: absolute; top:0px;right:0px; left:auto; width: 222px; height: 175px ; "></div><div class="case_box" ><div id="case-name" class="fav_font"></div><div id="case-price" class="fav_font"><span style="color: #3add08; margin-right:8px;  display: inline; float: left; width: 10px;">$</span><span id="case-price-disp" style="margin-left: -10px;  display: inline; float: right; width: 80px ; text-align:left ;">0</span></div><span class="bym fav_font" >By<br></span><span  class="byme fav_font">Your Name</span><img src="case images/Gloves Only.png" class="glove_pic"><img src="images/case back.png" class="case_back"><div class="dp-border circle glove_dp_container"><div class="dp circle glove_dp"><img src="" id="person_dp_img" onerror="myF()" title="Seller Avatar" alt="Image" /></div></div></div></div>';
}


window.onload = function() {
	console.log("window is refreshed") ;
   sessionStorage.clear();
}
function set_border_case_item(ItemSessionId)
{
	document.getElementById(ItemSessionId).style.border="solid 1px #0ceaaf" ;

}

function rem_border_case_item(ItemSessionId)
{
	document.getElementById(ItemSessionId).style.border="1px solid rgba(0,0,0,0)" ;	
}

function removeItem(candidate, cd_wn , cd_sn , cd_ext){

  var ul = document.getElementById("selected_item_list");
  var candidate = document.getElementById(candidate);
  candidate.innerHTML='';
  sessionStorage.removeItem(cd_wn);
  sessionStorage.removeItem(cd_sn);
  sessionStorage.removeItem(cd_ext);

  //ul.removeChild(candidate) ;

}

function addItem(image, weapon_name, skin_name, exterior, finishStyle,rarity,invnid, ttype)
{

	if(ttype=='0')
	{
		alert("This element is not tradeable") ;
	}
	else {
	//first check that the element exist earlier or not
	//if not present , add it
	//else remove it
	
	var check= false;
	var dualcheck = false ;
	var empty_c=0;
	//count empty tag also
	var ul = document.getElementById("selectedItemContainer");
	var items = ul.getElementsByTagName("li");
	for (var i = 0; i < items.length; ++i) {
	  // do something with items[i], which is a <li> element
	  if(items[i].innerHTML=='')
	  {
	  		empty_c+=1;
	  }
	}
	

	if( ($('#selectedItemContainer ul li').length-empty_c ) < 10) 
	{
		if(sessionStorage.clickcount)
		{
			//sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;

			for(var i=1; i<= ($('#selectedItemContainer ul li').length); i++)
			{
				if(sessionStorage.getItem("weapon_name"+i)==weapon_name && sessionStorage.getItem("skin_name"+i)==skin_name && sessionStorage.getItem("ext"+i)== exterior )
				{
					if(sessionStorage.getItem("owner"+i)==invnid )
					{


						//
						console.log(i) ;
						removeItem(i, "weapon_name"+i, "skin_name"+i, "ext"+i) ;
						rem_border_case_item(invnid);
						check= true ;
						break;
					}
					else
					{
						alert("This skin is already present") ;
						dualcheck = true ;
					}
				}	
			}
			if(check==false && dualcheck==false)
			{	sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
				sessionStorage.setItem("weapon_name"+sessionStorage.clickcount, weapon_name);
				sessionStorage.setItem("skin_name"+sessionStorage.clickcount, skin_name);
				sessionStorage.setItem("ext"+sessionStorage.clickcount, exterior);
				sessionStorage.setItem("owner"+sessionStorage.clickcount, invnid); //setting the owner , so that which has clicked only can remove it else no one


				set_border_case_item(invnid);

				createNode();
		    	addItemInList(image, weapon_name, skin_name, exterior, rarity , finishStyle) ;
			}
		}
		else 
		{
			sessionStorage.clickcount = 1;

			//do for the first click
			sessionStorage.setItem("weapon_name"+sessionStorage.clickcount, weapon_name);
			sessionStorage.setItem("skin_name"+sessionStorage.clickcount, skin_name);
			sessionStorage.setItem("ext"+sessionStorage.clickcount, exterior);
			sessionStorage.setItem("owner"+sessionStorage.clickcount, invnid); //setting the owner , so that which has clicked only can remove it else no one


			set_border_case_item(invnid);

			createNode();
	    	addItemInList(image, weapon_name, skin_name, exterior, rarity , finishStyle) ;

		}
					
		
	}
	
	else 
	{
		
			for(var i=1; i<=($('#selectedItemContainer ul li').length); i++)
			{
				if(sessionStorage.getItem("weapon_name"+i)==weapon_name && sessionStorage.getItem("skin_name"+i)==skin_name && sessionStorage.getItem("ext"+i)== exterior )
				{
					if(sessionStorage.getItem("owner"+i)==invnid )
					{


						//
						console.log(i) ;
						removeItem(i, "weapon_name"+i, "skin_name"+i, "ext"+i) ;
						rem_border_case_item(invnid);
						check= true ;
						break;
					}
					else
					{
						alert("This skin is already present") ;
						dualcheck = true ;
					}
				}	
			}

			alert("More than 10 items can't be added in case !") ;
	}
	

}
		
	

}
function createNode()
{
	var ul = document.getElementById("selected_item_list");
	var li = document.createElement("li");
	li.setAttribute('id',$('#selectedItemContainer ul li').length +1);
	li.appendChild(document.createTextNode("-"));
	ul.appendChild(li);
    
}
function addItemInList(image, weapon_name, skin_name, exterior, rarity , finishStyle)
{
	var setting_odds = $('#selectedItemContainer ul li').length ;
	if(weapon_name.includes("StatTrak")==true) {
		short_weapon_name = weapon_name.split(" ");
		document.getElementById($('#selectedItemContainer ul li').length).innerHTML='<div width="100%" style="margin-top:10px; "><input type="hidden" name="weapon_name'+setting_odds+'" value="'+short_weapon_name+'"><input type="hidden" name="skin_name'+setting_odds+'" value="'+skin_name+'"> <input type="hidden" name="exterior_name'+setting_odds+'" value="'+exterior+'"><input type="hidden" name="rarity_color'+setting_odds+'" value="'+rarity+'"><input type="hidden" name="skin_pic_'+setting_odds+'" value="'+image+'"> <div class="weapon_info"><div class="invn-itm-list" style="border:2px solid #ff9300; "><span class="fav_font" style="color: #ff9300; float:right; font-size:15.5px;  font-weight:bolder; ">StatTrak</span><img id="image_'+setting_odds+'" class="weapon_image" title="StatTrak Skin" src="'+image+'"><svg height="210" class="rarity_line"><line x1="0" y1="180" x2="180" y2="180" style="stroke:'+rarity+';stroke-width:3" /></svg></div><div style="margin-left: 0.5vw;"><div class="head"><span class="weapon_name fav_font">'+short_weapon_name[1]+'</span><span class="fav_font">|</span><span class="weapon_name fav_font">'+skin_name+'</span></div><div class="info"><span class="style pos fav_font">Finish Style<br>Exterior</span><span class="pos fav_font">:<br>:</span><span class="pos fav_font">'+finishStyle+'<br>'+exterior+'</span></div></div><div class="oddinp fav_font"><label style="margin-left: 3px;">Odds<br></label><input required type="number" min="0" max="100" step="0.001" placeholder="0" class="odds fav_font" name="odd'+setting_odds+'" id="id'+setting_odds+'">%</div></div><div class="small-line-light" style="width: 80%;"></div></div>';
	}
	else
		document.getElementById($('#selectedItemContainer ul li').length).innerHTML='<div width="100%" style="margin-top:10px;"> <input type="hidden" name="weapon_name'+setting_odds+'" value="'+weapon_name+'"><input type="hidden" name="skin_name'+setting_odds+'" value="'+skin_name+'"> <input type="hidden" name="exterior_name'+setting_odds+'" value="'+exterior+'"><input type="hidden" name="rarity_color'+setting_odds+'" value="'+rarity+'"><input type="hidden" name="skin_pic_'+setting_odds+'" value="'+image+'">  <div class="weapon_info"><div class="invn-itm-list"><img id="image_'+setting_odds+'" class="weapon_image" src="'+image+'"><svg height="210" class="rarity_line"><line x1="0" y1="180" x2="180" y2="180" style="stroke:'+rarity+';stroke-width:3" /></svg></div><div style="margin-left: 0.5vw;"><div class="head"><span class="weapon_name fav_font">'+weapon_name+'</span><span class="fav_font">|</span><span class="weapon_name fav_font">'+skin_name+'</span></div><div class="info"><span class="style pos fav_font">Finish Style<br>Exterior</span><span class="pos fav_font">:<br>:</span><span class="pos fav_font">'+finishStyle+'<br>'+exterior+'</span></div></div><div class="oddinp fav_font"><label style="margin-left: 3px;">Odds<br></label><input required type="number" min="0" max="100" step="0.001" placeholder="0" class="odds fav_font" id="id'+setting_odds+'" name="odd'+setting_odds+'">%</div></div><div class="small-line-light" style="width: 80%;"></div></div>'; // here we will write a complete dynamic list div
}

function verify_odds()
{
	//write a function that will check that the sum of all the odds equal to 100. moreover ther should be atleast 2 item and atmax 10
	//after it okay the sell button
	//after it display the texts of verification

	var sum=0;
	var arr=[] ;
	var arr_index=[] ;

	var empty_c=0;
	//count empty tag also
	var ul = document.getElementById("selectedItemContainer");
	var items = ul.getElementsByTagName("li");
	for (var i = 0; i < items.length; ++i) {
	  // do something with items[i], which is a <li> element
	  if(items[i].innerHTML=='')
	  {
	  		empty_c+=1;
	  }
	}


	if( ( $('#selectedItemContainer ul li').length -empty_c >=2 ) && ( $('#selectedItemContainer ul li').length - empty_c <11 ))
	{
		for(var i=1 ; i<= ($('#selectedItemContainer ul li').length) ; i++)
		{
			if(document.getElementById('id'+i))
			{
				arr.push(parseFloat(document.getElementById('id'+i).value));
				arr_index.push(i);
				sum += parseFloat(document.getElementById('id'+i).value) ; 
				console.log('Sum:'+sum) ;
				console.log(arr_index) ;
			}
		}
		
		if(sum==100)
		{
			document.getElementById('verify_text').style.display="block" ;
			document.getElementById('unverify_text').style.display="none" ;
			document.getElementById('sell_button').style.pointerEvents="auto" ;
			document.getElementById('sell_button').style.opacity="1" ;
			document.getElementById('sell_button_cover').style.cursor="pointer" ;

			document.getElementById('sell_button').style.cursor="pointer" ;

			document.getElementById('verify_btn_div').style.display="none" ;

			// display the image of weapon having least odds on top of case
			 var lowest = 0;
			 for (var i = 1; i < arr.length; i++) {
			  if (arr[i] < arr[lowest]) 
			  	 lowest = i;
			 }

			 var expensive_skin = document.getElementById('image_'+(arr_index[lowest])).src ;   

			 document.getElementById('expensive_skin').src=expensive_skin ;

			 document.getElementById('expensive_skin_input').value= expensive_skin ;


		}
		else {
			document.getElementById('unverify_text').style.display="block" ;
			document.getElementById('verify_text').style.display="none" ;

			document.getElementById('sell_button').style.pointerEvents="none" ;
			document.getElementById('sell_button').style.opacity="0.5" ;

			//
		}
	}
	else {
		alert("Case should have atleast 2 and atmax 10 skins !") ;
	}
}

function myF()
{
	document.getElementById('person_dp_img').src="images/csgo.png";
}