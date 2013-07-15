
	<div class="u-box">
		<div class="u-pic s"></div>
		<div class="u-txt">
			<h1>Samuel Thomas</h1>
			Hi !
		</div>
		<div class="clear"></div>
	</div>
	<div class="u-box">
		<div class="u-pic d"></div>
		<div class="u-txt">
			<h1>Deepa Paul</h1>
			Hello ! Whats Up?
		</div>
		<div class="clear"></div>
	</div>
	<div class="u-box">
		<div class="u-pic s"></div>
		<div class="u-txt">
			<h1>Samuel Thomas</h1>
			Roof :p
		</div>
		<div class="clear"></div>
	</div>
	<div class="u-box">
		<div class="u-pic d"></div>
		<div class="u-txt">
			<h1>Deepa Paul</h1>
			Lame .. AARGH.. I'll kill you.
		</div>
		<div class="clear"></div>
	</div>
	<div class="u-box">
		<div class="u-pic d"></div>
		<div class="u-txt">
			<h1>Deepa Paul</h1>
			You want to say something ?
		</div>
		<div class="clear"></div>
	</div>
	<div class="u-box">
		<div class="u-pic s"></div>
		<div class="u-txt">
			<h1>Samuel Thomas</h1>
			Yes. I've got you something but.. 
		</div>
		<div class="clear"></div>
	</div>
	<div class="u-box">
		<div class="u-pic d"></div>
		<div class="u-txt">
			<h1>Deepa Paul</h1>
			But what ?
		</div>
		<div class="clear"></div>
	</div>
	<div class="u-box">
		<div class="u-pic s"></div>
		<div class="u-txt">
			<h1>Samuel Thomas</h1>
			Do you see a text field at the <b>top right corner</b> ?
		</div>
		<div class="clear"></div>
	</div>
	<div class="u-box">
		<div class="u-pic d"></div>
		<div class="u-txt">
			<h1>Deepa Paul</h1>
			Yes.
		</div>
		<div class="clear"></div>
	</div>
	<div class="u-box">
		<div class="u-pic s"></div>
		<div class="u-txt">
			<h1>Samuel Thomas</h1>
			All you got to do is enter the password in the textfield.
		</div>
		<div class="clear"></div>
	</div>
	<div class="u-box">
		<div class="u-pic d"></div>
		<div class="u-txt">
			<h1>Deepa Paul</h1>
			What is the password ?
		</div>
		<div class="clear"></div>
	</div>
	<div class="u-box">
		<div class="u-pic s"></div>
		<div class="u-txt">
			<h1>Samuel Thomas</h1>
			Ooooooooollllllllaaaaaaaaaaaaaaaallllaaaa.
		</div>
		<div class="clear"></div>
	</div>
	<div class="u-box">
		<div class="u-pic d"></div>
		<div class="u-txt">
			<h1>Deepa Paul</h1>
			Hain ?
		</div>
		<div class="clear"></div>
	</div>
	<div class="u-box">
		<div class="u-pic s"></div>
		<div class="u-txt">
			<h1>Samuel Thomas</h1>
			Password is the <b>date</b> on which the henko mystery was solved. :P
		</div>
		<div class="clear"></div>
	</div>
	<div class="u-box">
		<div class="u-pic s"></div>
		<div class="u-txt">
			<h1>Samuel Thomas</h1>
			Listen. The date should be in the format dd/mm/yyyy. For eg: 19/07/2012.<br><br>
			Remember no spaces or any other white characters. And please don't forget to click the submit button.:p
		</div>
		<div class="clear"></div>
	</div>
	
<script>
	$(document).ready(function(){
		setTimeout(function(){init_conv();},3000);
		
	});
	function init_conv(){
		var u_box_i = 0;
		var delay = 0;
		$('#u-box-cont .u-box').each(function(){
			delay = 2200 * u_box_i;
			$(this).delay(delay).fadeIn('slow',function(){
				$("#page").scrollTop($("#page")[0].scrollHeight);
			});
			u_box_i++;
		});
	}
</script>