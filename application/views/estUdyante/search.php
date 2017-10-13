<?php
if($res!=null)
{

  foreach($res as $p){?>

<!-- <a href="'.('students/profile/'.$s['idno']).'"><?php echo $p['firstname'].' '.$p['lastname']?></a> <br /><br /> -->

<a href="<?php echo base_url('profile/').$p['id']?>"><?php echo $p['firstname'].' '.$p['lastname']?></a> <br /><br />




<?php
  }

}
else
{
    echo 'No Results Found';
}

?>
