<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Candle-homepage</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
	<div class="white">
    <div class="container">
        <div class="soc"><img src="img/Layer 14.png" /></div>
      	
        <div class="menu-fr">
        	<a href="#" class="logo"><img src="img/Logocandle.png" /></a>
            
          <div class="menu-detail">
            <div class="search-fr">
              <img src="img/Layer 13.png" />
            	<input type="text" placeholder="" />
            	<div class="clear"></div>
         		</div>
            <div class="clear"></div>
			     	<ul class="menu">
              <li><a href="#">Trang chủ</a></li>
              <li><a href="#">Giới thiệu</a></li>
              <li><a href="#">Sản phẩm</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Liên hệ</a></li>
				    </ul>
                
				    <div class="clear"></div>
          </div>
            
          <div class="clear"></div>
        </div>
        
        <?php
					if (isset($_GET['page'])) {
            echo "aa";
          } else {
            echo "bb";
          }
        ?>
  	</div>
	</div>   
</body>
</html>
