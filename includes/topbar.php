<div id="fb">manga-thalla</div>
<div id="fm">
	<form method="get" action="./">
		<input type="text" name="s" value="dd/mm/yyyy" onclick="this.value='';" />
		<input type="submit" name="search" value="Submit" />
		<script>
			$(document).ready(function(){
				$('#top-bar #fm input[type=submit]').click(function(){
					if($('#top-bar #fm input[type=text]').val() == '19/07/2012')
					{
					
						alert("Wow. I'm so proud of you. Click on ok.");
						$('#top-bar #fm').fadeOut('slow');
						$('#u-box-cont').fadeOut('slow',function(){
							init_bday();
						});
						
					}
					else{
						alert("Boooooo. Try again.");
						
					}
					return false;
				});
			});
		</script>
	</form>
</div>
<style>
	#top-bar{width:100%;position:absolute;height:40px;top:0;left:0;background:rgb(59,89,152);}
	#top-bar #fb{margin:6px;color:#fff;font:20px Georgia;font-weight:bold;float:left;}
	#top-bar #fm{float:right;margin-top:5px;}
	#top-bar #fm input[type=text]{height:20px;color:#555;}
	#top-bar #fm input[type=submit]{height:30px;background:transparent;border:none;color:#fff;font:12px Georgia;cursor:pointer;border:#ccc solid 1px;}
</style>