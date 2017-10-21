
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>" rel="stylesheet" />
    <script src="<?php echo base_url('bootstrap/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
    
    
    
</head>

<body>
<div class="container">
  <div class="row">   
  <table class="table table-bordered table-responsive">
    <thead>
      <td>id</td>
      <td>user_name</td>
      <td>body</td>
      <td>date</td>
    </thead>
    <tbody id="showData">
      <tr>
        <td>id</td>
        <td>user_name</td>
        <td>body</td>
        <td>date</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
</body>


<script type="text/javascript">

  $(function(){
    showPost();
    setInterval(showPost, 1000);    
    function showPost(){
      $.ajax({
          type: 'ajax',
          url: '<?php echo base_url('test/showPost')?>',
          async: false,
          dataType: 'json',
          success: function(data){
            var html ='';
            var i;
            for(i=0; i<data.length; i++)
            {
              html += '<tr>' +
                        '<td>'+data[i].id+'</td>'+
                        '<td>'+data[i].user_name+'</td>'+
                        '<td>'+data[i].body+'</td>'+
                        '<td>'+data[i].postdate+'</td>'+
                      '</tr>'
            }
            $('#showData').html(html);
          },
          error: function(){
            alert("GG");
          }
      })
    }
  })

</script>

</html>