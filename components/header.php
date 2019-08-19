<html>
    <head>
        <title>GO TO TOP - ваш быстрый старт продаж</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://ironlinks.ru/nordic/tamara/project2/css/style.css"/>
        <link rel="stylesheet" href="https://ironlinks.ru/nordic/tamara/project2/css/slider.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <script src="https://api-maps.yandex.ru/2.1/?apikey=<27685d59-96fa-4104-857a-17c2079b5793>&lang=ru_RU" type="text/javascript"></script>
        <script src="https://ironlinks.ru/nordic/tamara/project2/js/jquery.js"></script>
    </head>
    <body>

    <?
    require_once($_SERVER['DOCUMENT_ROOT'].'/nordic/tamara/project2/global_pass.php');
    ?>  
    
    <?
    $link = mysqli_connect('localhost', 'nordic_tamara', '7D1w1V1t', 'nordic_tamara_2');
    mysqli_set_charset($link , "utf8");
    ?>
    

        <div class="menu box">
            <div class="bg-fix logo" style="background-image: url(<?=PROJECT_URL?>/img/icons/web.png);">
            </div>   
            <div>
                <h1><span class="blue">GO TO </span><span class="pink">TOP</span></h1>
            </div> 
            <div class="menu_list">
                <ul>
                    <?
                    $result = mysqli_query($link, 'SELECT * FROM pages');
                    while($arr = mysqli_fetch_assoc($result)){?>
                        <?if($arr['id'] == 1){?>
                            <li><a class="blue" href="<?=PROJECT_URL.'/'.$arr['way']?>"><?=$arr['name']?></a></li>  
                        <?}else{?>
                            <li><a class="black" href="<?=PROJECT_URL.'/'.$arr['way']?>"><?=$arr['name']?></a></li>  
                        <?}?>     
                    <?}?> 
                </ul>
            </div>
        </div>


