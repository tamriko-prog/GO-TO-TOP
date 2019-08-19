    <div class="footer">
        <div class="footer-blocks grey">
            <div>
                <p class="blue"><b>О НАС</b></p>
                <p>Мы оказываем всестороннюю помощь компаниям и физическим лицам - собственникам веб-ресурсов,
                    которые готовы использовать сайт, как эффективный рекламный инструмент, позволяющий
                    развивать бизнес.
                </p>
            </div>
            <div>
                <p class="blue"><b>ЧИТАЙТЕ В НОВОСТЯХ</b></p>
                    <?
                    $result = mysqli_query($link, 'SELECT * FROM news');
                    while($arr = mysqli_fetch_assoc($result)){?>
                        <span><?=$arr['title']?></span><br>
                    <?}?>    
            </div>
            <div>
                <p class="blue"><b>КОНТАКТЫ</b></p>
                <div class="contacts">
                    <div class="icons">
                        <div class=bg-fix style="background-image:url('<?=PROJECT_URL?>/img/icons/placeholder.png')">
                        </div>
                        <div class=bg-fix style="background-image:url('<?=PROJECT_URL?>/img/icons/telephone.png')">
                        </div>
                        <div class=bg-fix style="background-image:url('<?=PROJECT_URL?>/img/icons/mail.png')">
                        </div>
                    </div>  
                    <div>
                        Москва, Большая Спасская 12<br>
                        8 (495) 626-46-00<br>
                        info@gototop.com
                    </div>     
                </div>
            </div>
        </div>
        <div class="black-box white">
            <p>2018 Все права защищены</p>
        </div>
    </div>

    <script src="js/slider.js"></script>  
   
    </body>
</html>