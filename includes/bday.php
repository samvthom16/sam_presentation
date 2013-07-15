<div>
	Hey sorry for all the natak. Couldn't help it.<br> 
	<div class="img_box"><img src="images/sam_tease.png" width="250" /></div>
</div>	
<div>
	I don't expect this reaction from you<br><br>
	<div class="img_box"><img src="images/deepa_thinking.png" width="300" /></div>
</div>
<div>
	Or this <br><br>
	<div class="img_box"><img src="images/deepa_think.png" width="300" /></div>
</div>
<div>
	This is perfect.<br><br>
	<div class="img_box"><img src="images/deepa_laugh1.png" width="300" /></div>
</div>
<div>
	Ok I'll keep it simple and short. All I want to tell you is that you are special and you mean a lot to me. 
</div>
<div>	
	I enjoy spending time with you. Memories of the time we have spend together can never be forgotten.
</div>
<div>	
	Over sms, phone, train, on the cement, Patna, dilli haat, GIP, etc. 
</div>
<div>	
	Talking with you about really nothing seemed more important than many 'somethings' (copied line). 
</div>
<div>	
	Well we have had our serious conversations but what I treasure the most are the times when we have enjoyed spending moments of silence with each other.
</div>
<div>	
Happy birthday Deepa. God bless.
<br><br><br>
Yours,<br>
Kidnapper, Perfect Stranger, Manga
<br><br>

P.S : Stop smiling
</div>

<script>
	$('#bday div').hide();
	$('#bday div.img_box').show();
	//init_bday();
	function init_bday(){
		$('#bday div').first().show();
		trans_div($('#bday div').first());
	}
	function trans_div(cur_obj){
		if(cur_obj.nextAll().length > 1){
			cur_obj.delay(6000).fadeOut('slow',function(){
		
				cur_obj.next().fadeIn('slow');
				trans_div(cur_obj.next());
				
			});
		}
	}
</script>