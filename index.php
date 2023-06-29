<!doctype html>
<html lang="en">
  <head>
  	<?php include 'layout_head.php';?>
    <title>Index âm nhạc</title> <!-- Chỉnh sửa title -->
  </head>
  <body>
  	<?php include 'layout_header.php';?>
	
	<div class="container-fluid">
    <?=(isset($_SESSION["username"])?$_SESSION["username"]:"");?>   
		<!-- Nội dung chính của PAGE ở đây --> 
        <div class="container">
  <div id="slide">
    <div class="slide-image">
      <img src="img\ST.jpg" alt="Slide 1">
    </div>
    <div class="slide-image">
      <img src="img/CKP.jpg" alt="Slide 2">
    </div>
    <div class="slide-image">
      <img src="img\Remix.jpg" alt="Slide 3">
    </div>
    <div class="slide-image">
      <img src="img/TDQ.jpg" alt="Slide 4">
    </div>
    <div class="slide-image">
      <img src="img\Chill.jpg" alt="Slide 5">
    </div>+
  </div>
  <div class="buttons">
    <button id="prev"><i class="fa-solid fa-angle-left"></i></button>
    <button id="next"><i class="fa-solid fa-angle-right"></i></button>
  </div>
</div>
        
<style> 
.container {
  margin-top: 50px;
  width: 80%;
  margin: auto;
  position: relative;
  overflow: hidden;
}

#slide {
  display: flex;
  width: 100%;
}

.slide-image {
  flex: 0 0 20%;
  height: 400px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.slide-image img {
  height: 100%;
  max-width: 100%;
}

.buttons {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.buttons button {
  background-color: #000;
  color: #fff;
  border: none;
  cursor: pointer;
  font-size: 20px;
  padding: 10px;
  opacity: 0.5;
  transition: opacity 0.2s;
}

.buttons button:hover {
  opacity: 1;
}
</style>

<section class="service">
            <div class="box-container">
                <div class="box">
                    <i class="fas fa-shipping-fast"></i>
                    <h3>Fast delivery</h3>
                    <p>You just need to place an order and we will deliver it to you as quickly as possible => within 3 days</p>
                </div>
                <div class="box">
                    <i class="fas fa-undo"></i>
                    <h3>10 days replacements</h3>
                    <p>Within the specified number of days, if the product is damaged, it will be exchanged for free</p>
                </div>
                <div class="box">
                    <i class="fas fa-headset"></i>
                    <h3>24/7 support</h3>
                    <p>Do not worry. We have very good customer service, just call or text and we will be there.</p>
                </div>
            </div>
        </section>
        <style>
            .service .box-container{
                position: absolute;
                top: 800px;
                height:250px;
                padding:50px;
                display: flex;
                flex-wrap: wrap;
                gap:1.5rem;
                background:#f9f9f9;
                border:.1rem solid rgba(0,0,0,.1);
                
                padding:2rem;
            }
            .service .box-container .box{
                text-align: center;
                flex:1 1 10rem
            }
            .service .box-container .box i{
                font-size: 3rem;
                color:var(--orange);
            }
            .service .box-container .box h3{
                font-size: 2rem;
                color:var(--black);
                padding-top: 1rem;
            }
            .service .box-container .box p{
                font-size: 1rem;
                color:#666;
                padding:1rem 0;
            }
        </style>
</body>
</html>