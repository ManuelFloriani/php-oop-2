<?php

require_once("./models/Product.php");
require_once("./models/Category.php");
require_once("./models/Type.php");

$product_type1 = new Type("Cibo", "https://content.dambros.it/uploads/2017/06/20185238/0000152287.jpg", "https://st3.depositphotos.com/1007566/34612/v/950/depositphotos_346126452-stock-illustration-food-for-dog-in-can.jpg");
$product_type2 = new Type("Gioco", "https://m.media-amazon.com/images/I/61PQnaDWlKL._AC_UF894,1000_QL80_.jpg", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSV7OCO2dJ7hdOTbzdP1Cvwku52jzkq4Y-CyA&usqp=CAU");
$product_type3 = new Type("Accessorio", "https://www.zuccarone.it/423-large_default/ciotola-in-acciaio-inox-da-2800-ml-lavabile-in-lavastoviglie.jpg", "https://irpot.com/64041-medium_default/piatti-dog-party-new-cagnolini-8-pz.jpg");
$product_type4 = new Type("Cuccia", "https://arcaplanet.vteximg.com.br/arquivos/ids/265811/185001_PHO_PRO_CAT_CLIP_44428-1.jpg?v=637740424612900000", "https://img.freepik.com/premium-vector/pet-shop-spotted-cat-dog-house-bowl-animals-cartoon_24640-66535.jpg");

$croccantini = new Category("Croccantini", "40 Euro", "Cane", $product_type1);
$cannaDaPesca = new Category("Canna da pesca", "8 Euro", "Gatto", $product_type2);
$ciotola = new Category("Ciotola in acciaio", "6 Euro", "Cane", $product_type3);
$tiragraffi = new Category("Tiragraffi a casetta", "32 Euro", "Gatto", $product_type4);
