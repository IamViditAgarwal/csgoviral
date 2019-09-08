$(function()
{
		$(".toast-close-button").unbind().click(function(e)
		{
			
			//$(this).closest().fadeIn(3000);
			$(this).parent().slideUp(400 , function(){
				$(this).remove();
			}) ;
		}) ;
		
	
}) ;
	