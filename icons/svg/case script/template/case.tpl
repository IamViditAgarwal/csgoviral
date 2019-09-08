{include file="header.tpl"}
<section>
		<div class="opencase">
			<div class="opencase-title">{case_title}</div>
			<div class="opencase-top widther">
				<div class="opencase-top-case {case_viz}" style="background-image:url(/get-rich-or-die/images/{case_picture})"></div>
				<div class="opencase-top-carousel">
					<div class="opencase-top-carousel-line"></div>
					<div class="opencase-top-carousel-selector"></div>
				</div>
			</div>
			<div class="opencase-bottom widther">
		        <div style="margin-right: 30px;"><div class="opencase-bottom-open" data-id="{case_name}">open the case for {case_price} Р.</div></div>
				<div class="opencase-bottom-auth"><a class="opencase-bottom-auth1" href="/steam?login">login</a></div>
				<div class="opencase-bottom-items">Unfortunately, in this case there are no things, try again later!</div>
				<div class="opencase-bottom-case">You opened the case too many times.</div>
				<div class="opencase-bottom-case1">Case available.</div>
				<div class="opencase-bottom-opening">opening...</div>
				<div class="opencase-bottom-nofunds">
					<div class="opencase-bottom-nofunds-title">insufficient funds</div>
					<div class="opencase-bottom-nofunds-subtitle">You have enough money to open a case!</div>
					<div class="opencase-bottom-nofunds-add">
					<span class="addmoneys1" style="display: inline-block;">
					<form action="/pay" method="POST">
						<input name="money" type="number" min="0" placeholder="sum" class="invoiceMoneys1">
						<button class="refills">Fill</button>
					</form>
					</span>
					</div>
				</div>
			</div>
			<div class="opencase-opened none widther">
				<div class="opencase-opened-title">Your winnings:</div>
				<div class="opencase-opened-image" style="background-image:url(//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopuP1FAR17OORIXBD_9W_mY-dqPrxN7LEm1Rd6dd2j6eV8Yijilfi-xJoMGv7LI7Hd1Q4Y1HV-VS8lOnmjJXvu87MzHsyv3Nw-z-DyMkIAv9h/360x360)"></div>
				<div class="opencase-opened-drop">AWP | Dragonlore</div>
				
				<div class="opencase-opened-out">Item will be created less that hour.</div>
				<div class="opencase-opened-actions widther">
					<div class="opencase-opened-actions-one s__again">
						<div class="opencase-opened-actions-one-image"><i class="fa fa-repeat"></i></div>
						<div class="opencase-opened-actions-one-text">Again</div>
					</div>
					<a class="opencase-opened-actions-one s__sell">
						<div class="opencase-opened-actions-one-image"><i class="fa fa-shopping-bag"></i></div>
						<div class="opencase-opened-actions-one-text">Sell for? P</div>
					</a>
					
				</div>
			</div>
			<div class="opencase-dropstitle">The contents of the case:</div>
			<div class="items-incase widther">
				{case_in}
			</div>
		</div>
	</section>
{include file="footer.tpl"}