<?php
/*
Template Name: Контакты
*/
get_header();
?>
    <section class="section-cont">
        <div class="Contacts">
            <div class="wrap">
                <div class="Contacts__text">
                    <h1>Контакты</h1>
                    <p>Свяжитесь со мной! <br>
                        Я работаю в Санкт-Петербурге,. Для того, чтобы заказать съемку и забронировать за собой удобную для
                        <br>вас дату, вы можете позвонить или заполнить форму обратной связи</p>
                </div>
                <div class="Contacts__foto"></div>
            </div>
        </div>
    </section>
    <section class="section-form">
        <div class="wrap">
            <div class="svaz">
                <div class="svyz">
                    <h1>Связаться со мной просто</h1>
                    <p>Чтобы связаться со мной воспользуйтесь формой обратной связи.</p>
                    <p>Или пишите мне в социальные сети.</p>
                    <ul>
                        <li>Вконтакте  <a href="https://vk.com/baksarphoto" target="_blank">https://vk.com/baksarphoto</a></li>
                        <li>Instagram<a href=""></a></li>
                    </ul>

                    <p>Телефон &<a href="https://msng.link/wa/+7 921 999-17-92"><u>WhatsApp</u></a></p>
                    <p>+7 921 999-17-92</p>
                    <p>Я хочу запечатлеть красоту мгновений Вашей жизни, Вашу улыбку</p>
                </div>
                <form action="" class="form" method="post">
                    <input class="form__input" type="text" placeholder="Имя*">
                    <input class="form__input" type="text" placeholder="Телефон">
                    <input class="form__input" type="email" placeholder="email*">
                    <textarea class="form__textarea" placeholder="Ваше сообщение"></textarea>
                    <button class="btn" type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </section>
<?php

get_footer();