<div class="container" id="cont">
<?php

if($res!=null)
{?>
Search Results for <?php echo ' "'.$keyword.'"'?> <br />
<?php foreach($res as $p){?>


<a href="<?php echo base_url('profile/id/').$p['id']?>"><?php echo $p['firstname'].' '.$p['lastname']?></a> <br /><br />




<?php
  }

}
else
{
    echo 'No Results Found';
}

?>
</div>
