{include file="header.tpl"}

<div class="items-index">
		<div class="profil widther">
	<div class="userprofil">
					<div class="lcol">
						<img src="{user_avatar}" alt="{user_name}" width="186">
						<div class="otstup"></div>
<span class="addmoneys" style="display: inline-block;">
					
					<form action="/pay" method="POST">
						<input name="money" classs="moneys" type="number" min="0" placeholder="sum" class="invoiceMoneys" value="100">
						<button class="buttons refill" type="submit">+</button>
					</form>
					</span><div class="otstup"></div>
						<a href="https://steamcommunity.com/profiles/{user_steam}" target="_blank"  class="profsteam">Profile STEAM</a>
					</div>
					<div class="rcol">

							<div>
							<div class="lfw"><h2>your inventory</h2></div>
							<big><p style="color:#AEAEAE">You can change your trade link at any time. Check it  <a href="https://steamcommunity.com/id/me/tradeoffers/privacy#trade_offer_access_url" target="_blank">HERE</big></a>
						<form action="/api" method="post">
							  <input type="hidden" name="action" value="updateLink">
							  <input type="url" name="tradelink" class="tradelink" value="{trade_link}" placeholder="https://steamcommunity.com/tradeoffer/new/?partner=YYYYYYYYY&amp;token=XXXXXXXX"> 
							  <input type="submit" class="buttonz"  value="save">
												<p><p style="font-size:20px"<br /><h1 style="color:#ff0000"><br />ATTENTION!!!</h1></p>
					<p><br /><big><p style="color:#AEAEAE">Before opening the cases, check the efficiency of exchanges for your account in Steam, otherwise the boat will not be able to send items won.</big></p> 


					<p><big><br /><p style="color:#AEAEAE">After sending the item, you need to wait for an hour to take a trade, or exchange will be canceled and your balance will return to its full value</big></p>


					<p><big><br /><p style="color:#AEAEAE">Answers to frequently asked questions can be found on this page: <a href="/faq" target="_blank">FAQ</big></p></a>
					<p><big><br /><p style="color:#AEAEAE">Attention! In the case of error (steam) will not be able to sell the thing! If such occurs, contact support.</big>
					<big><br /><br />After sending the trade you will have 1 hour for adoption of things if you do not take a thing during this period, it will be sold, the funds credited to the balance sheet. If you cancel the trade, the item will not be returned to the account of the same will not return.</big></p>
						<div class="p-items">	{inventory} </div>
							<div class="opencase-drops nmg"></div>
						</div>
					</div>
					

							</form>
					</div>
				</div>
			</div>
		</div></div></div>
{include file="footer.tpl"}