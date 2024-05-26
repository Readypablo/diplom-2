
<?php  
include("header.php");
require('bd_connect/db.php');

?>
<body>

<main>


<?php

$id = (int) $_GET['id'];
$sql = 'SELECT * FROM `news` where id='.$id;
$resultt = $con->query($sql);
for($dataa = []; $row = mysqli_fetch_assoc($resultt); $dataa[]=$row)
{ }

foreach($dataa as $elemm)  {
         
    echo '
    <div class="spase" id="geo"></div>
    <div class="row-news">
          <div class="post-news">
                      <div class="img-block-news-post">
                            <img src="../img/news/'.$elemm['img'].'"   class="img-news-post">
                      </div>

                      <div class="block-txt-news-post">
                            <div class="zagt-news-post">
                            '.$elemm['name'].'
                            </div>
                            <div class="text-news-post">
                            '.$elemm['text'].'
                            </div>
                      </div>

          </div>
    </div>
    <div class="spase" id="geo"></div>
';
                   
}

?>
  <!-- <div class="spase" id="geo"></div>
      <div class="row-news">
            <div class="post-news">
                        <div class="img-block-news-post">
                              <img src="../img/news/1.jpeg"   class="img-news-post">
                        </div>

                        <div class="block-txt-news-post">
                              <div class="zagt-news-post">
                                    Заголовок
                              </div>
                              <div class="text-news-post">
                                    
                              </div>
                        </div>

            </div>
      </div> -->


</main>
<?php

include("footer.php");
?>
</body>
