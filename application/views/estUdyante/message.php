<link href="<?php echo base_url('bootstrap/css/chat.css'); ?>" rel='stylesheet' />
<div class="container-fluid">
<div id="content">
	<div class="row">
			
	<div class="col-lg-12">
	    <div class="messages">
		    <ol class="chat">
		    <?php if($mes!=null)
			{
				foreach($mes as $p){
					if($p['user_id']!=$this->session->userdata('logged_user')):
					?>	
					    <li class="other">
					        <div class="avatar"><img src=<?php echo base_url().$mateavatar?> draggable="false"/></div>
					      <div class="msg">
					        <p><?php echo $p['messagebody']?></p>				        
					        <time class="timeago" datetime="<?php echo $p['messagedate']?>"></time>
					      </div>
					    </li>
					<?php
					else:
					?>
					    <li class="self">
					        <div class="avatar"><img src=<?php echo base_url().$youravatar?> draggable="false"/></div>
					      <div class="msg">
					        <p><?php echo $p['messagebody']?></p>	
					        <time class="timeago" datetime="<?php echo $p['messagedate']?>"></time>
					      </div>
					    </li>
					<?php 
					endif;
				}
			}
			else
			{
				echo'<div class="col-md-12"><h4><center>No messages.</center></h4></div>';
			}	
			?>
		    </ol>
	    </div>

		<form role="form" class="" method="post" action= <?php echo base_url('message/send/'.$m)?>>
		<div class="input-append">
		    <input name="send"class="textarea" type="text" placeholder="Type here!"/>
		    <button class="btn btn-info hide" type="submit">Send</button>
		</div>
		</form>
	</div>
	</div>
</div>
</div>

</body>
</html>

<script type="text/javascript">
$(document).ready(function() {
  $.ajaxSetup({ cache: false });
  setInterval(function() {
    $('.messages').load('<?php echo base_url('message')?>');
  }, 3000);
});
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('time.timeago').timeago();
  })
</script>