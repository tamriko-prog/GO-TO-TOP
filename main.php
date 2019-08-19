<?require_once('components/header.php')?>

<?php
$slides = [
    ['img/backgrounds/back1.jpg','О НАС','about.php'],
    ['img/backgrounds/top1.jpg','О НАС','about.php'],
    ['img/backgrounds/top2.jpg','О НАС','about.php'],
];
?>



    <div style="width: 100%">
        <div class="banner-text white"> 
            <div><h1>ВАШ САЙТ - ГЛАВНЫЙ БИЗНЕС-ИНСТРУМЕНТ</h1></div>
            <div><h3>GO TO TOP - ваш быстрый старт продаж</h3></div>
        </div> 
        <div class="slider flex-box horizontal-nav horizontal-arrows">
            <ul class="slides">
                <?foreach($slides as $elem){?>
                    <li>
                        <div  class="bg-fix" style="background-image: url('<?=PROJECT_URL.'/'.$elem[0]?>');  height: 600px">
                            <a class="banner-button white" href="<?=PROJECT_URL.'/'.$elem[2]?>"><?=$elem[1]?></a>
                        </div>
                    </li>
                <?}?>
            </ul>
        </div>
    </div>


    <div class="offers">
        <?
        $result = mysqli_query($link, 'SELECT * FROM offers');
        while($arr = mysqli_fetch_assoc($result)){?>
            <div class="one-third box-midi">
                <div class="bg-fix logo" style="background-image: url(<?=PROJECT_URL.'/'.$arr['icon']?>)">
                </div> 
                <div>
                    <p class="blue"><b><?=$arr['title']?></b></p>  
                    <?=$arr['text']?>
                </div>
            </div>
        <?}?>    
    </div>

    <div class="block-connect white">
        <div>ХОТИТЕ НАЧАТЬ ЗАРАБАТЫВАТЬ В ИНТЕРНЕТЕ? ПРОСТО СВЯЖИТЕСЬ С НАМИ.
        </div>
        <div class="button-connect box-small">
            <a class="white" href="<?=PROJECT_URL?>/contacts.php#connect">СВЯЗАТЬСЯ</a>
        </div>
    </div> 

    <div class="block">
        <div class="content">
            <h2 class="blue"><b>ПОСЛЕДНИЕ РАБОТЫ</b></h2><hr>
            <div class="last-projects flexible">
            <?
            $result = mysqli_query($link, 'SELECT * FROM projects');
            while($arr = mysqli_fetch_assoc($result)){?>
                <div class="bg-fix" style="background-image:url('<?=PROJECT_URL.'/'.$arr['way']?>')">
                </div>
            <?}?>    
            </div>
        </div>   
    </div>   


    <div class="block-connect white">
    <?
        $result = mysqli_query($link, 'SELECT * FROM statistic');
        while($arr = mysqli_fetch_assoc($result)){?>
            <div class="statistic">
                <p class="num"><?=$arr['number']?></p>
                <div class="line">
                </div>
                <?=$arr['text']?>
            </div>
        <?}?>
    </div>


    <div class="block">
        <div class="content">
            <h2 class="blue"><b>НОВОСТИ</b></h2><hr>
            <div class="flexible">
            <?
                $result = mysqli_query($link, 'SELECT * FROM news');
                while($arr = mysqli_fetch_assoc($result)){?>
                    <div class="boss">
                        <div class="boss-photo bg-fix" style="background-image:url('<?=PROJECT_URL.'/'.$arr['image']?>')">
                        </div> 
                        <div class="boss-contacts">
                            <p><i><?=$arr['date']?></i></p>
                            <p><?=$arr['text']?></p><br>
                            <p style="text-align: right"><b><a class="blue" href="<?=PROJECT_URL.'/news.php'?>">ПОДРОБНЕЕ</a></b></p>
                        </div>   
                    </div>
                <?}?>
            </div>
        </div>   
    </div>   


    <div class="block-with-background">
        <div class="content">
            <h2 class="blue"><b>НАПИШИТЕ НАМ</b></h2><hr>
            <form method="GET" action="form.php">  
                <div class="flexible">
                    <div class="form">
                        <div>
                            <input class="box-small-form" type="text" name="name" placeholder="ФИО">
                        </div>
                        <div>
                            <input class="box-small-form" required type="email" name="email" placeholder="Email">
                        </div>
                        <div>
                            <input class="box-small-form" type="tel" name="tel" placeholder="Телефон">
                        </div>
                        <div>
                            <button class="box-small-form white">отправить вопрос</button>
                        </div>
                    </div>
                    <div class="form">
                        <textarea class="box-small-form"  name="text" placeholder="Ваше сообщение"></textarea> 
                    </div>
                </div>
        </div>   
    </div>   

    <div class="form">
    </div>

<?require_once('components/footer.php')?>
