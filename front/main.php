<div class="half" style="vertical-align:top;">
      <h1>預告片介紹</h1>
      <div class="rb tab" style="width:95%;">
        <div id="abgne-block-20111227">
          <ul class="lists">
          </ul>
          <ul class="controls">
          </ul>
        </div>
      </div>
    </div>
    <div class="half">
      <h1>院線片清單</h1>
      <div class="rb tab" style="width:95%;display:flex;flex-wrap:wrap">
      <?php
      $today=date("Y-m-d");
      $startDate=date("Y-m-d",strtotime("-2 days",strtotime($today)));


      $movies=$Movie->all(['sh'=>1]," && `ondate` between '$startDate' and '$today' order by rank");
    //$movies=$Movie->all(['sh'=>1]," && `ondate` >=   '$startDate' && `ondate` <= '$today' order by rank");
      
      foreach($movies as $movie){

       ?>   
      <div style="width:48%;border:1px solid #ccc;margin:0.5%">
          <div>片名:<?=$movie['name'];?></div>
          <div style="display:flex">
            <a href="javascript:location.href='index.php?do=intro&id=<?=$movie['id'];?>'"><img src="img/<?=$movie['poster'];?>" style="width:80px;height:100px;"></a>
            <div>分級:
              <img src="icon/<?=$movie['level'];?>.png" alt=""><?=$movie['level'];?><br>
              上映日期:<?=$movie['year']."-".$movie['month']."-".$movie['day'];?>
            </div>
          </div>
          <div>
            <button onclick="javascript:location.href='index.php?do=intro&id=<?=$movie['id'];?>'">劇情簡介</button>
            <button onclick="javascript:location.href='index.php?do=order&&id=<?=$movie['id'];?>'">線上訂票</button>
          </div>
      
      </div>
      <?php
      
      }
    ?>
        <div class="ct"> </div>
      </div>
    </div>