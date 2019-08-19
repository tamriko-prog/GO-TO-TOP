<?require_once('components/header.php')?>

    <div class="banner">
        <img src="<?=PROJECT_URL?>/img/backgrounds/top2.jpg">
        <div class="banner-text white"> 
            <div><h1>НОВЫЕ РАЗРАБОТКИ И НОВЫЕ ТРЕНИНГИ</h1></div>
            <div><h3>GO TO TOP - новости</h3></div>
        </div> 
    </div>   
    <div class="block-with-background"> 
        <div class="content">
        <h2 class="blue"><b>НОВЫЕ РАЗРАБОТКИ И НОВЫЕ ТРЕНИНГИ</b></h2>
        <hr>
           <p>Компания маркетинговых инноваций <b>GO TO TOP</b> внедряет и сопровождает целый комплекс маркетинговых 
                бизнес-процессов, встраивая Маркетинговую систему продаж для компаний, желающих получить 
                качественно новые результаты: </p>
            <p><b>Капитализацию маркетинга.</b><br>
                В ваших руках актив успеха, система, учитывающая создание качественного продукта и его
                максимальные продажи с наибольшей выгодой.</p>
            <p><b>Сокращение человеческого фактора.</b><br>
                На вашу деятельность больше не повлияет уход сотрудников, особенности бизнес-партнеров,
                смена управляющего состава или исполнителей.</p>
            <p><b>Экономию маркетинговых бюджетов.</b><br>
                Средства, вложенные в маркетинг и рекламу, имеют накопительный эффект, а накопленный опыт
                позволяет исключить риски и сократить ненужные траты.</p>
            <p><b>Мощное конкурентное преимущество.</b><br>
                Пока другие ломают голову над тем, как выжить в кризис, вы уверенно движетесь вперед.</p>
            <p><b>Стабильность и возможность планировать собственное развитие.</b></p>
        </div>
    </div>

    <div class="block">
        <div class="content">
            <h2 class="blue"><b>ДРУГИЕ НОВОСТИ</b></h2><hr>
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


    <div class="block-connect white">
        <div>ХОТИТЕ НАЧАТЬ ЗАРАБАТЫВАТЬ В ИНТЕРНЕТЕ? ПРОСТО СВЯЖИТЕСЬ С НАМИ.
        </div>
        <div class="button-connect box-small">
            <a class="white" href="<?=PROJECT_URL?>/contacts.php#connect">СВЯЗАТЬСЯ</a>
        </div>
    </div> 
 

<?require_once('components/footer.php')?>