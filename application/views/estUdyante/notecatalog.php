<div class="container-fluid">
        <div id="content">
            <div class="row" id="contentrow">
                <div class="col-lg-3 col-md-3 col-sm-3">
          <center><h3 class="my-3"><img class="icon" src="<?php echo base_url().'assets/img/book-icon-149.png'?>" width="30px" alt="icon">Note Genres</h3></center>
          <div class="list-group">
            <a href="#" class="list-group-item">Action and Adventure</a>
            <a href="#" class="list-group-item">Anthology</a>
            <a href="#" class="list-group-item">Art</a>
            <a href="#" class="list-group-item">Biographies/Autobiographies</a>
            <a href="#" class="list-group-item">Comics</a>
            <a href="#" class="list-group-item">Cookbooks</a>
            <a href="#" class="list-group-item">Drama</a>
            <a href="#" class="list-group-item">Encyclopedias</a>
            <a href="#" class="list-group-item">Fantasy</a>
            <a href="#" class="list-group-item">Guide</a>
            <a href="#" class="list-group-item">Health</a>
            <a href="#" class="list-group-item">History</a>
            <a href="#" class="list-group-item">Horror/Mystery</a>
            <a href="#" class="list-group-item">Math</a>
            <a href="#" class="list-group-item">Mystery</a>
            <a href="#" class="list-group-item">Romance</a>
            <a href="#" class="list-group-item">Religion, Spirituality & New Age </a>
            <a href="#" class="list-group-item">Satire</a>
            <a href="#" class="list-group-item">Science</a>
            <a href="#" class="list-group-item">Science fiction</a>
            <a href="#" class="list-group-item">Others</a>
          </div>

        </div>

        <div class="col-lg-9 col-md-9 col-sm-9">
             <a href="<?php echo base_url('notecatalog/addnote') ?>"><button class="btn btn-default" type="button">Add Note </button></a>
            <div class="row">

                <?php
                 if($note!=null)
                {
                    foreach(($note) as $s)
                    {?>
                    <div class="col-lg-3 col-md-12 mb-12 itemcard">
                      <div class="card h-100 ">
                        <a href=<?php echo base_url('notecatalog/noteinfo/'.$s['note_ID'].'') ?>><img class="card-img-top" height="200px" width="2" src="<?php echo base_url().$s['image'] ?>" alt="<?php echo $s['note_name'] ?>"></a>
                        <div class="card-body">
                          <h2 class="card-title">
                            <a href=<?php echo base_url('notecatalog/noteinfo/'.$s['note_ID'].'') ?>><?php echo $s['note_name'] ?></a>
                          </h2>
                          <p class="card-text">Note Description</p>
                        </div>
                      </div>
                    </div>
                <?php
                        }
                    }
                    else
                    {  
                        echo '<div class="col-md-8 col-md-offset-0" id="feed">';
                        echo "no note";
                        echo '</div>';
                    }
                    ?>           
              </div>
              <!-- /.row -->
                <div class="row">
                    <center>                        
                        <?php echo $this->pagination->create_links();?>
                    </center> 
                </div>

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->
      </div>
    </div>
    <!-- /.container -->
    
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->

  </body>

</html>