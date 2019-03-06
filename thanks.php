<!DOCTYPE html>
<html lang="ru">

	<head>
		<meta charset="UTF-8">
		<title>Спасибо!</title>
		<style>
			body {
				color: #313E47;
				font-family: Arial;
				font-size: 15px;
				line-height: 1;
				text-align: center;
				background: url(files/body.jpg) repeat;
				padding-top: 20px;
			}
			
			h2 {
				color: #313E47;
				font-size: 36px;
				font-weight: 700;
				line-height: 44px;
				text-align: center;
				text-transform: uppercase;
			}
		</style>


<?php 
  if (strlen($pixel) > 1)
  {
    echo "<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s){
    if(f.fbq)return;
    n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n; n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '$pixel'); 
  fbq('track', 'PageView');
  fbq('track', 'Lead');
</script>
<noscript><img height='1' width='1' style='display:none' src='https://www.facebook.com/tr?id=$pixel&ev=PageView&noscript=1'/></noscript>
<!-- End Facebook Pixel Code -->";
  }

  if (strlen($gtag) > 1)
  {
    echo "<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src='https://www.googletagmanager.com/gtag/js?id=$gtag'></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', '$gtag');
  </script>";
  }

  if (strlen($gtm) > 1)
  {
    echo "<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','$gtm');</script>
<!-- End Google Tag Manager -->";
  }
?>

</head>
<body>
  
<?php 
  if (strlen($gtm) > 1)
  {
    echo "<!-- Google Tag Manager (noscript) -->
<noscript><iframe src='https://www.googletagmanager.com/ns.html?id=$gtm'
height='0' width='0' style='display:none;visibility:hidden'></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->";
  }
 ?>

    <img src="files/index.png">
		<h2>Поздравляем! Ваш заказ принят!</h2>
		<p class='success'>В ближайшее время с вами свяжется оператор для подтверждения заказа. Пожалуйста, включите ваш контактный телефон.</p>
		<h1 style='color:#FF0000; text-align: center;'>Спасибо что выбрали нас!</h1>
	</body>
</html>