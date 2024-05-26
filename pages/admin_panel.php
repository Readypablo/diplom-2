<?php
include("bd_connect/auth_session.php");
include("bd_connect/db.php");
include("header.php");
?>


<body>
    <main>

<div class="row-news">
    <form method="POST" class="form-admin" >
    <h2>Панель  новостей</h2>
        <table class="table-adm">
        <th>id</th>
        <th>название </th>
        <th>текст</th>
        <th>изображение</th>
        <?php 
            $query= "SELECT * FROM `news` ";
            $result = mysqli_query($con, $query) or die;
            
            for($data = []; $row = mysqli_fetch_assoc($result); $data[]=$row)
            $i++;
            ;
            foreach($data as $elem){
                echo "<tr>";
                echo "<td>".$elem['id']."</td>";
                echo "<td>".$elem['name']."</td>";
                echo "<td>".$elem['text']."</td>";
                echo "<td>".$elem['img']."</td>";
                echo "</tr>";
            }
        ?>
        </table>
    </form>
</div>


     <div class="flex-news">

     <div class="spase"></div>

    <div class="block-changes">
    <h2>Панель изменения новостей</h2>
        <form  method="post" class="form-changes">
            <h3 class="name-card">ID новости</h3>
            <input type="text" class="inp-chang" name="id" required>
            <h3 class="name-card">Заголовок ноовсти</h3>
            <input type="text" class="inp-chang" name="name" required>
            <h3 class="name-card">Текст новости</h3>
            <textarea  class="inp-chang" name="txt" required></textarea>
            <h3 class="name-card">название изображения</h3>
            <input type="text" class="inp-chang" name="img" required>
            <br>
            <input type="submit" value="изменить" class="btn-chang" name="sendb">
        </form>
    </div>
<div class="spase"></div>
<?php 
if(isset($_POST['sendb'])) {
    $sql2 = 'SELECT * from news ';
  
    $name = stripslashes($_REQUEST['name']);    
    $name = mysqli_real_escape_string($con, $name);
    
    $txt = stripslashes($_REQUEST['txt']);    
    $txt = mysqli_real_escape_string($con, $txt);

    $img = stripslashes($_REQUEST['img']);    
    $img = mysqli_real_escape_string($con, $img);

    $id = stripslashes($_REQUEST['id']);    
    $id = mysqli_real_escape_string($con, $id);

        $query = "UPDATE news SET name='$name',text='$txt' ,img='$img' WHERE id='$id'";
   
        $ult = mysqli_query($con, $query);
        // чекаем все поля все ли хорошо там
        if($ult){
            echo "<div class='form'>
            <h3>изменили </h3><br/>
            </div>"; 
        }else{
            echo "<div class='form'>
            <h3>Ты где то напакостил</h3><br/>
            </div>";   
             }    
          
            
   
  
  
  }



?>



<div class="block-changes">
    <h2>Панель добавления новостей</h2>
        <form  method="post" class="form-changes">
        <h3 class="name-card">Заголовок ноовсти</h3>
        <input type="text" class="inp-chang" name="name" required>
        <h3 class="name-card">Текст новости</h3>
        <textarea  class="inp-chang" name="txt" required></textarea>
        <h3 class="name-card">название изображения</h3>
        <input type="text" class="inp-chang" name="img" required>
        <br>
        <input type="submit" value="Добавить" class="btn-chang" name="send">
    </form>
</div>
    <div class="spase"></div>
</div>
<div class="spase"></div>
<?php 



if(isset($_POST['send'])) {
    $sql2 = 'SELECT * from news ';
  
    $name = stripslashes($_REQUEST['name']);    
    $name = mysqli_real_escape_string($con, $name);
    
    $txt = stripslashes($_REQUEST['txt']);    
    $txt = mysqli_real_escape_string($con, $txt);

    $img = stripslashes($_REQUEST['img']);    
    $img = mysqli_real_escape_string($con, $img);

    $id = stripslashes($_REQUEST['id']);    
    $id = mysqli_real_escape_string($con, $id);
    $query = "INSERT into `news` (name, text , img) VALUES ('$name', '$txt' ,'$img' )";
        $ult = mysqli_query($con, $query);
        // чекаем все поля все ли хорошо там
        if($ult){
            echo "<div class='form'>
            <h3>изменили товар</h3><br/>
            </div>"; 
        }else{
            echo "<div class='form'>
            <h3>Ты где то напакостил</h3><br/>
            </div>";   
             }    
          
            
   
  
  
  }



?>



         <div class="row-news">
         <form method="POST" class="form-admin" >
         <h2>Панель  матчей</h2>
         <table  class="table-adm">
              
              <th>id</th>
              <th>дата </th>
              <th>время</th>
              <th>1 команда</th>
              <th>2 команда</th>
              <th>счет</th>
              <th>1 город</th>
              <th>2 город</th>
              <?php 
                 
                  $query= "SELECT * FROM `matches` ";
                  $result = mysqli_query($con, $query) or die;
                  
                  for($data = []; $row = mysqli_fetch_assoc($result); $data[]=$row)
                  $i++;
                  ;
                  
                  foreach($data as $elem){
                  
                      echo "<tr>";
                      echo "<td>".$elem['id']."</td>";
                      echo "<td>".$elem['date']."</td>";
                      echo "<td>".$elem['time']."</td>";
                      echo "<td>".$elem['first_team']."</td>";
                      echo "<td>".$elem['last_team']."</td>";
                      echo "<td>".$elem['score']."</td>";
                      echo "<td>".$elem['city_first']."</td>";
                      echo "<td>".$elem['city_last']."</td>";
                      echo "</tr>";
                  }
                  
              
                 
              
              
              
              ?>
              
         
              
              </table>
            </form>
        </div>


<div class="flex-news">
        <div class="block-changes">
        <h2>Панель изменения матчей</h2>
                <form  method="post" class="form-changes">

                <h3 class="name-card">ID матча</h3>
                <input type="text" class="inp-chang" name="id" required>

                <h3 class="name-card">дата</h3>
                <input type="text" class="inp-chang" name="date" required>

                <h3 class="name-card">время</h3>
                <input type="text" class="inp-chang" name="time" required>

                <h3 class="name-card">1 команда</h3>
                <input type="text" class="inp-chang" name="fteam" required>

                <h3 class="name-card">2 команда</h3>
                <input type="text" class="inp-chang" name="lteam" required>

                <h3 class="name-card">счет</h3>
                <input type="text" class="inp-chang" name="score" required>

                <h3 class="name-card">1 город</h3>
                <input type="text" class="inp-chang" name="ocity" required>

                <h3 class="name-card">2 город</h3>
                <input type="text" class="inp-chang" name="lcity" required>
                <br>
                <input type="submit" value="изменить" class="btn-chang" name="sendi">
                </form>
        </div>



<?php 
if(isset($_POST['sendi'])) {
    $sql2 = 'SELECT * from matches ';

    $id = stripslashes($_REQUEST['id']);    
    $id = mysqli_real_escape_string($con, $id);

    $date = stripslashes($_REQUEST['date']);    
    $date = mysqli_real_escape_string($con, $date);

    $time = stripslashes($_REQUEST['time']);    
    $time = mysqli_real_escape_string($con, $time);
    
    $fteam = stripslashes($_REQUEST['fteam']);    
    $fteam = mysqli_real_escape_string($con, $fteam);

    $lteam = stripslashes($_REQUEST['lteam']);    
    $lteam = mysqli_real_escape_string($con, $lteam);


    $score = stripslashes($_REQUEST['score']);    
    $score = mysqli_real_escape_string($con, $score);
    
    $ocity = stripslashes($_REQUEST['ocity']);    
    $ocity = mysqli_real_escape_string($con, $ocity);

    $lcity = stripslashes($_REQUEST['lcity']);    
    $lcity = mysqli_real_escape_string($con, $lcity);


        $query = "UPDATE matches SET date='$date',  time='$time', first_team='$fteam', last_team='$lteam', score='$score',city_first='$ocity', city_last='$lcity' WHERE id='$id' ";
   
        $ult = mysqli_query($con, $query);
    
        // чекаем все поля все ли хорошо там
  
        if($ult){
            echo "<div class='form'>
            <h3>изменили товар</h3><br/>
            </div>"; 
         
        }else{
            echo "<div class='form'>
            <h3>Ты где то напакостил</h3><br/>
            </div>";   
             }    
          
            
   
  
  
  }



?>

        <div class="block-changes">
        <h2>Панель добавления матчей</h2>
                <form  method="post" class="form-changes">

            

                <h3 class="name-card">дата</h3>
                <input type="text" class="inp-chang" name="date" required>

                <h3 class="name-card">время</h3>
                <input type="text" class="inp-chang" name="time" required>

                <h3 class="name-card">1 команда</h3>
                <input type="text" class="inp-chang" name="fteam" required>

                <h3 class="name-card">2 команда</h3>
                <input type="text" class="inp-chang" name="lteam" required>

                <h3 class="name-card">счет</h3>
                <input type="text" class="inp-chang" name="score" required>

                <h3 class="name-card">1 город</h3>
                <input type="text" class="inp-chang" name="ocity" required>

                <h3 class="name-card">2 город</h3>
                <input type="text" class="inp-chang" name="lcity" required>
                <br>
                <input type="submit" value="Добавить" class="btn-chang" name="sendil">
                </form>
        </div>
 </div>


 <?php 
 
 
 
 if(isset($_POST['sendil'])) {
    $sql2 = 'SELECT * from matches ';



    $date = stripslashes($_REQUEST['date']);    
    $date = mysqli_real_escape_string($con, $date);

    $time = stripslashes($_REQUEST['time']);    
    $time = mysqli_real_escape_string($con, $time);
    
    $fteam = stripslashes($_REQUEST['fteam']);    
    $fteam = mysqli_real_escape_string($con, $fteam);

    $lteam = stripslashes($_REQUEST['lteam']);    
    $lteam = mysqli_real_escape_string($con, $lteam);


    $score = stripslashes($_REQUEST['score']);    
    $score = mysqli_real_escape_string($con, $score);
    
    $ocity = stripslashes($_REQUEST['ocity']);    
    $ocity = mysqli_real_escape_string($con, $ocity);

    $lcity = stripslashes($_REQUEST['lcity']);    
    $lcity = mysqli_real_escape_string($con, $lcity);
 
 $query = "INSERT into `matches` (date, time ,first_team,last_team,score,city_first,city_last) VALUES ('$date', '$time', '$fteam', '$lteam', '$score', '$ocity' ,'$lcity'  )";

        $ult = mysqli_query($con, $query);
    
        // чекаем все поля все ли хорошо там
  
        if($ult){
            echo "<div class='form'>
            <h3>изменили товар</h3><br/>
            </div>"; 
         
        }else{
            echo "<div class='form'>
            <h3>Ты где то напакостил</h3><br/>
            </div>";   
             }   
            } 
          
 ?>
           
    </main>
</body>
<script >
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}



</script>
