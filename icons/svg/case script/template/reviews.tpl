{include file="header.tpl"}

		<div class="items-index">
		<div class="top">
			<div class="top-title">Reviews</div>
			<div class="top-threes widther">
			<!-- Put this script tag to the <head> of your page -->

<script type="text/javascript">
  VK.init({apiId: 5487327, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Comments block will be -->
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 20, width: "950", attach: "*"});
</script>
			</div>
		</div>
	</div>
{include file="footer.tpl"}