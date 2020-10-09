<?php
include('connect.php');
$id = @$_GET['id'];
if (!$id){
  echo 'No ID';
  exit;
}
$list =@$_GET['list'];

if (!$list){
  $query = mysqli_query($con,"SELECT * FROM data_movie WHERE id =$id");
  $result = mysqli_fetch_array($query);
}else{
  $query_list = mysqli_query($con,"SELECT * FROM data_list WHERE main_id =$id and part = $list");
  $result = mysqli_fetch_array($query_list);
  $num_list = mysqli_num_rows(mysqli_query($con,"SELECT * FROM data_list WHERE main_id =$id "));
}


?>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title><?=$result['name']?> </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<!--menu-->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: linear-gradient(to right, #ba892b, #fef560 18%, #ce971f 90%) !important;">
  <a class="navbar-brand" href="./">MOVIE FREE88 </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./">หน้าแรก <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ยอดฮิต</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          หมวดหมู่
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">หนังไทย</a>
          <a class="dropdown-item" href="#">หนังญี่ปุ่น</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">หนังฝลั่ง</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ติดต่อ</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="ค้นหา" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ค้นหา</button>
    </form>
  </div>
</nav>

  <!--menu-->
<div class="album py-5 bg-light" style=" background-image: url('https://images8.alphacoders.com/100/thumb-1920-1003220.png');background-size:cover;">
    <div class="container">
<?php
if (!$list){
?>
<!--Moive-->
      <nav aria-label="breadcrumb">
       <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">หน้าแรก</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?=$result['name']?></li>
    </ol>
</nav>
<div class="row">
        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <img src="<?=$result['img']?>" while="100%" height="250" class="card-img-top"/>
          </div>
        </div>
        <div class="col-md-9">
          <div class="card mb-4 shadow-sm">
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/<?=$result['vdo_ex']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
        <div class="card shadow-sm text-center"style="background-color: #e9ecef!important;color:#000000"><h3><?=$result['name']?></h1></div>

          <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="play1" >
      <div class="card mb-4 shadow-sm">
        <div itemscope itemtype="https://schema.org/VideoObject"><meta itemprop="name" content="0b0bea6fe1894da82ccfbb3104849642-720p"/><meta itemprop="duration" content="PT1H54M14.36S" /><meta itemprop="thumbnailUrl" content="https://content.jwplatform.com/thumbs/jongRD2U-640.jpg"/><meta itemprop="contentUrl" content="<?=$result['vdo_main']?>"/><div style="position:relative; overflow:hidden; padding-bottom:56.25%"> <iframe src="<?=$result['vdo_main']?>" width="100%" height="100%" frameborder="0" scrolling="auto" title="0b0bea6fe1894da82ccfbb3104849642-720p" style="position:absolute;" allowfullscreen></iframe> </div></div>
      <!-- <iframe width="100%" height="623" src="<?=$result['vdo_main']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
       </div>
      </div>
      <div class="tab-pane fade" id="play2" >
      <div class="card mb-4 shadow-sm">
          <iframe width="100%" height="623" src="<?=$result['vdo_main02']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
      </div>
      <div class="tab-pane fade" id="play3" >
      <div class="card mb-4 shadow-sm">
          <iframe width="100%" height="623" src="<?=$result['vdo_main03']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
      </div>

    </div>
        </div>

        <div class="col-12">
      <div class="list-group list-group-horizontal-sm text-center" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active"  data-toggle="list" href="#play1">Player 1</a>
      <a class="list-group-item list-group-item-action"  data-toggle="list" href="#play2">Player 2</a>
      <a class="list-group-item list-group-item-action "  data-toggle="list" href="#play3">Player 3</a>

        </div>
      </div>
    </div>
<!--Moive End-->
<?php
}else{
?>
<!--Moive List-->
<nav aria-label="breadcrumb">
       <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">หน้าแรก</a></li>
        <li class="breadcrumb-item"><a href="./list.php?id=<?=$id?>">ดูตอนอื่นๆ <?=$result['name']?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?=$result['name']?></li>
    </ol>
</nav>

      <div class="row">

        <div class="col-md-12">

        <div class="card shadow-sm text-center"style="background-color: #e9ecef!important;color:#000000"><h3>ตอนที่<?=$result['part']?> </h3></div>
		     <div class="list-group list-group-horizontal-sm text-center" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active"  data-toggle="list" href="#play1">Player 1</a>
      <a class="list-group-item list-group-item-action"  data-toggle="list" href="#play2">Player 2</a>
      <a class="list-group-item list-group-item-action "  data-toggle="list" href="#play3">Player 3</a>
        </div>

	   <div class="card mb-4 shadow-sm">
	             <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="play1" >
      <div class="card mb-4 shadow-sm">
      <iframe width="100%" height="623" src="<?=$result['vdo']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
      </div>
      <div class="tab-pane fade" id="play2" >
      <div class="card mb-4 shadow-sm">
          <iframe width="100%" height="623" src="<?=$result['vdo02']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
      </div>
      <div class="tab-pane fade" id="play3" >
      <div class="card mb-4 shadow-sm">
          <iframe width="100%" height="623" src="<?=$result['vdo03']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
      </div>

        </div>
          </div>
        </div>
      </div>

      <div class="row">

   <div class="col-md-4">
      <a class="btn shadow-sm text-center <?php if ($list <= 1){echo"disabled";}?>"style="background-color: #28a745!important;color:#00000;width: 100%;"href ="play.php?id=<?=$id?>&list=<?=$list-1?>"><h5 style="margin:0;padding: 10px;width: 100%;" >ตอนก่อนหน้า</h5></a>
 </div>
 <div class="col-md-4">
      <a class="btn shadow-sm text-center"style="background-color: #28a745!important;color:#00000;width: 100%;"href="./list.php?id=<?=$id?>"><h5 style="margin:0;padding: 10px;width: 100%;" >ดูตอนอื่นๆ</h5></a>
 </div>
 <div class="col-md-4">
      <a class="btn shadow-sm text-center <?php if ($list >= $num_list){echo"disabled";}?>"style="background-color: #28a745!important;color:#00000;width: 100%; "href ="play.php?id=<?=$id?>&list=<?=$list+1?>"><h5 style="margin:0;padding: 10px;" >ตอนถัดไป</h5></a>
 </div>
</div>
<!--Movie List End-->
<?php }?>
<div class="box" style="position: relative;background: #000;color: #333;font-size: 14px;font-weight: 400;font-family: helvetica neue,Helvetica,Arial,sans-serif;line-height: 1.42857143;padding: 0;margin: 0;>
      <h3> แสดงความคิดเห็น</h3>
      <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="https://www.movie2fin.com/Hansel-and-Gretel-Witch-Hunters-%282013%29-%E0%B8%AE%E0%B8%B1%E0%B8%99%E0%B9%80%E0%B8%8B%E0%B8%A5-%E0%B9%81%E0%B8%AD%E0%B8%99%E0%B8%94%E0%B9%8C-%E0%B9%80%E0%B8%81%E0%B8%A3%E0%B9%80%E0%B8%97%E0%B8%A5-%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%A5%E0%B9%88%E0%B8%B2%E0%B9%81%E0%B8%A1%E0%B9%88%E0%B8%A1%E0%B8%94%E0%B8%9E%E0%B8%B1%E0%B8%99%E0%B8%98%E0%B8%B8%E0%B9%8C%E0%B8%94%E0%B8%B4%E0%B8%9A" data-colorscheme="dark" data-width="760" data-numposts="5" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1913976642080782&amp;color_scheme=dark&amp;container_width=2&amp;height=100&amp;href=https%3A%2F%2Fwww.movie2fin.com%2FHansel-and-Gretel-Witch-Hunters-%25282013%2529-%25E0%25B8%25AE%25E0%25B8%25B1%25E0%25B8%2599%25E0%25B9%2580%25E0%25B8%258B%25E0%25B8%25A5-%25E0%25B9%2581%25E0%25B8%25AD%25E0%25B8%2599%25E0%25B8%2594%25E0%25B9%258C-%25E0%25B9%2580%25E0%25B8%2581%25E0%25B8%25A3%25E0%25B9%2580%25E0%25B8%2597%25E0%25B8%25A5-%25E0%25B8%2599%25E0%25B8%25B1%25E0%25B8%2581%25E0%25B8%25A5%25E0%25B9%2588%25E0%25B8%25B2%25E0%25B9%2581%25E0%25B8%25A1%25E0%25B9%2588%25E0%25B8%25A1%25E0%25B8%2594%25E0%25B8%259E%25E0%25B8%25B1%25E0%25B8%2599%25E0%25B8%2598%25E0%25B8%25B8%25E0%25B9%258C%25E0%25B8%2594%25E0%25B8%25B4%25E0%25B8%259A&amp;locale=th_TH&amp;numposts=5&amp;sdk=joey&amp;version=v5.0&amp;width=760"><span style="vertical-align: bottom; width: 760px; height: 183px;"><iframe name="f556a0d6b6e4dc" width="760px" height="100px" data-testid="fb:comments Facebook Social Plugin" title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v5.0/plugins/comments.php?app_id=1913976642080782&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df367980154ecfc%26domain%3Dwww.movie2fin.com%26origin%3Dhttps%253A%252F%252Fwww.movie2fin.com%252Fffa2576271806c%26relation%3Dparent.parent&amp;color_scheme=dark&amp;container_width=2&amp;height=100&amp;href=https%3A%2F%2Fwww.movie2fin.com%2FHansel-and-Gretel-Witch-Hunters-%25282013%2529-%25E0%25B8%25AE%25E0%25B8%25B1%25E0%25B8%2599%25E0%25B9%2580%25E0%25B8%258B%25E0%25B8%25A5-%25E0%25B9%2581%25E0%25B8%25AD%25E0%25B8%2599%25E0%25B8%2594%25E0%25B9%258C-%25E0%25B9%2580%25E0%25B8%2581%25E0%25B8%25A3%25E0%25B9%2580%25E0%25B8%2597%25E0%25B8%25A5-%25E0%25B8%2599%25E0%25B8%25B1%25E0%25B8%2581%25E0%25B8%25A5%25E0%25B9%2588%25E0%25B8%25B2%25E0%25B9%2581%25E0%25B8%25A1%25E0%25B9%2588%25E0%25B8%25A1%25E0%25B8%2594%25E0%25B8%259E%25E0%25B8%25B1%25E0%25B8%2599%25E0%25B8%2598%25E0%25B8%25B8%25E0%25B9%258C%25E0%25B8%2594%25E0%25B8%25B4%25E0%25B8%259A&amp;locale=th_TH&amp;numposts=5&amp;sdk=joey&amp;version=v5.0&amp;width=760" style="border: none; visibility: visible; width: 760px; height: 183px;" class=""></iframe></span></div>
      <div id="fb-root"></div>
      <script type="text/javascript">(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v5.0&appId=1913976642080782&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
  </div>
</div>
</div>
    </div>
  </div>

<footer class="blog-footer text-center"style="padding: 15px;background: linear-gradient(to right, #ba892b, #fef560 18%, #ce971f 90%) !important;">
  <p style="margin:0; color:#0d0c0d;">ดูหนังฟรี ไม่ต้องคิดเยอะ <a href="./">by  Ex`AomSin</a></p>
</footer>
</body>
</html>
