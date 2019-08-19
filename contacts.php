<?require_once('components/header.php')?>

    <div class="banner">
        <img src="<?=PROJECT_URL?>/img/backgrounds/top1.jpg">
        <div class="banner-text white"> 
            <div><h1>GO TO TOP</h1></div>
            <div><h3>GO TO TOP - Ваш быстрый старт продаж</h3></div>
            <div><h1>-КОНТАКТЫ-</h1></div>
        </div> 
    </div>    
    <div class="block-with-background"> 
        <div class="content">
            <h2 class="blue"><b>О КОМПАНИИ</b></h2>
            <hr>
            <p>Стимулирование и увеличение продаж - именно такую конечную цель мы ставим себе при
               разработке стратегии продвижения сайтов в поисковых системах.</p>
            <p>В рамках этого подхода мы решаем следующие задачи:</p>         
            <p><i>подбор качествееных ключевых запросов;<br>
               увеличени видимости сайта в поисковых системах;<br>
               продвижение сайта в ТОП-10 по стратегически важным ключевым запросам;<br>
               увеличение естественного целевого трафика из поисковых систем;<br>
               увеличение конверсии на посадочных старницах.</i></p>
            <p>Основным в разработке стратегии продвижения является создание индивидуального решения, максимально
               соответствующего технологическим возможностям и внешним факторам вашего сайта.</p>
            <p>В управлении проектами мы придерживаемся строгого планирования и контроля задач.
                Технология работы по каждому проекту доступна клиентам в нашей информационной системе.</p>
            <p>Мы считаем, что добиться успеха можно только при условии полного понимания всех ключевых 
               элементов проекта. Поэтому мы всегда на связи со своими клиентами, регулярные встречи и 
               конструктивные диалоги - приоритетный элемент нашего сотрудничества.</p>
            <p>Стратегия, основанная на взаимовыгодном партнерстве, очень важна для нас. Прозрачность финансовых
                расчетов и их простота создает доверительные и долгосрочные отношения.</p>
            <p>Мы не работаем со сложными системами оплаты с обеспечительными платежами, предоплатой и 
                последующими перерасчетами. Все расчеты производятся в конце месяца по факту выполненных работ
                и на основании фактически достигнутых показателей.</p>
        </div>
    </div>  


    <div id="connect" class="block">
        <div class="content">
            <h2 class="blue"><b>СВЯЖИТЕСЬ С НАМИ</b></h2><hr>
            <div class="flexible">
                <?
                $result = mysqli_query($link, 'SELECT * FROM bosses');
                while($arr = mysqli_fetch_assoc($result)){?>
                    <div class="boss">
                        <div class="boss-photo bg-fix" style="background-image:url('<?=PROJECT_URL.'/'.$arr['photo']?>')">
                        </div> 
                        <div class="boss-contacts">
                            <p><b><i><?=$arr['name']?></i></b></p>
                            <p class="blue"><?=$arr['position']?></p>
                            <br>
                            <p>По вопросам сотрудничества:</p>
                            <p class="blue"><a href="mailto:<?=$arr['email']?>"><?=$arr['email']?></a></p>
                        </div>   
                    </div>
                <?}?>
            </div>
        </div>   
    </div> 


    <div class="block-form flexible white">
        <div class="block-contacts">
            <div class="big-icons">
                <div class=bg-fix style="background-image:url('<?=PROJECT_URL?>/img/icons/placeholder_white.png')"> 
                </div>
                <div class=bg-fix style="background-image:url('<?=PROJECT_URL?>/img/icons/telephone_white.png')"> 
                </div>
                <div class=bg-fix style="background-image:url('<?=PROJECT_URL?>/img/icons/mail_white.png')"> 
                </div>
            </div>
            <div> 
                <p><b>Адрес:</b> <br> Москва, Большая Спасская, 12</p>
                <p><b>Телефон:</b><br>8 (495) 626-46-00</p>
                <p><b>E-mail:</b><br>info@gototop@ru</p>
            </div>
        </div>
        <div class="small-form">
            <form method="GET" action="form.php">
                <div style="font-size: 20px">Напишите нам</div>
                <div>
                    <input class="box-small-form" type="text" name="name" placeholder="ФИО">
                </div>
                <div>
                    <input class="box-small-form" required type="email" name="email" placeholder="Email">
                </div>
                <div class="area">
                    <textarea class="box-small-form"  name="text" placeholder="Ваше сообщение"></textarea> 
                </div>
                <div>
                    <button class="box-small-form">отправить</button>
                </div>
            </form>    
        </div>
    </div>
    <div id="map">
    </div>  

    

<script type="text/javascript">
    ymaps.ready(init);

    function init(){ 
        var myMap = new ymaps.Map("map", {
            center: [55.776551, 37.648219],
            zoom: 15
        });

        var address = 'Москва, ул. Большая Спасская, 12';    
        var geocoder = ymaps.geocode(address);

        geocoder.then(
            function (res) {
                var coordinates = res.geoObjects.get(0).geometry.getCoordinates();
                var placemark = new ymaps.Placemark(
                    coordinates, {
                        'hintContent': address,
                    }, {
                        'preset': 'islands#redDotIcon'
                    }
                );
                myMap.geoObjects.add(placemark);
            }
        );
    }

</script>
   

<?require_once('components/footer.php')?>