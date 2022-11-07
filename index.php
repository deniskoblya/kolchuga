<?php
	require "./less/func.php";
	require "./less/lessc.inc.php";
	
	# -------- META---------- #
	$meta = new stdClass();
	# Название сайта
	$meta->sitename = '';
	# Заголовок
	$meta->title = '';
	# Описание
	$meta->desc = '';
	# Текущий линк на страницу
	$meta->url = getBaseUrl();
	# Картинка для соц. сетей, размер: 1200x630px
	$meta->image = $meta->url.'/assets/images/social.jpg';
	
    # ----------------------- ВНИМАНИЕ ----------------------- #
    /*
        Далее находится php функция, которая генерирует CSS из Less
        Если есть необходиость править стили, то править нужно Less файл (!!!)
        Less файл лежит тут: assets/less/style.less
        Если у вас не обновляются стили на новом хосте, нужно 
        удалить кеш-файл: assets/less/style.less.cache (!!!)
        Вопросы, жалобы, пожелания писать сюда: colin990@gmail.com :)
    */
	# Функция для компиляции CSS из Less
    autoCompileLess('./less/style.less', './css/style.css');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SITE</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="plugins/wow/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="plugins/bxslider/jquery.bxslider.min.js"></script>
   <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
   <script src="plugins/inputmask/jquery.inputmask.bundle.js"></script>
   <script src="plugins/jqueryvalidate/jquery.validate.min.js"></script>
   <script src="plugins/wow/wow.min.js"></script>
   <script src="js/my.js"></script>
  </head>
  <body>
   <header class="header">
       <div class="container">
           <div class="row">
               <div class="col-xs-12 col-sm-10 col-lg-7 col-lg-offset-1">
                   <div class="logo">
                       <img src="img/logo.png" alt="">
                   </div>
                   <div class="header-title">
                       <h1>
                           Консалтинговий проект
                       </h1>
                       <div class="inlined">«КОЛЬЧУГА»</div>
                       <p>#ProtectYourBusiness</p>
                   </div>
                   <p class="h-bottom">
                       Зробіть свій бізнес захищеним з точки зору 
                   </p>
                   <div class="bulleting">
                        <div class="bullet">
                            <em></em>
                        </div>
                    </div>
               </div>
           </div>
       </div>
   </header>
   <section class="safe">
       <div class="container">
           <div class="safe-blocks">
               <div class="s-block wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="1.4s">
                   <div class="s-img">
                       <img src="img/s1.png" alt="">
                   </div>
                   <p>Юридичної безпеки</p>
               </div>
               <div class="s-block wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="1.1s">
                   <div class="s-img">
                       <img src="img/s2.png" alt="">
                   </div>
                   <p>Фінансової безпеки</p>
               </div>
               <div class="s-block wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.8s">
                   <div class="s-img">
                       <img src="img/s3.png" alt="">
                   </div>
                   <p>Економічної безпеки</p>
               </div>
               <div class="s-block wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                   <div class="s-img">
                       <img src="img/s4.png" alt="">
                   </div>
                   <p>Кадрової безпеки</p>
               </div>
           </div>
       </div>
   </section>
   <section class="blitz">
       <div class="container">
           <h1>Замовте бліц-аудит ризику прямо зараз</h1>
           <div class="blitz-inner">
               <div class="b-left wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                   <p>
                       Результатом аудиту є <span>всебічний аналіз проблем безпеки</span> вашого бізнесу та рекомендації щодо їх усунення
                   </p>
               </div>
               <form action="" class="form" method="post" enctype="multipart/form-data">
                   <input name="name" placeholder="Ваше Ім’я" type="text" required>
                   <input name="phone" placeholder="Ваш телефон" type="text" required>
                   <input name="email" placeholder="Ваш e-mail" type="email" required>
                   <div class="order">
                       <button type="button" class="send-ajax">ЗАМОВИТИ АУДИТ</button>
                   </div>
                   <p>Ваші дані не будуть передані 3-ім особам</p>
               </form>
           </div>
       </div>
   </section>
   <section class="for">
       <div class="container">
           <div class="yellow-table">
              <div class="inlined">
                  Для кого це буде корисно
              </div>
               <div class="table-title">
                   Малому та середньому бізнесам, які:
               </div>
               <div class="text-cols">
                   <div class="text-col tc-1">
                       <p class="text-block">
                           У майбутньому планують розширюватися та збільшувати штат і оборот
                       </p>
                       <p class="text-block">
                           Хочуть залучати інвестиції<br> і додатковий капітал
                       </p>
                   </div>
                   <div class="text-col tc-2">
                       <p class="text-block">
                           Не бажають мати проблем при отриманні кредитів і перевірці документації
                       </p>
                       <p class="text-block">
                           Хочуть створити прозорий європейський бізнес
                       </p>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <section class="problems">
       <div class="container">
          <h1>Яким проблемам ми допомогаємо запобігти:</h1>
           <div class="row pr-1">
               <div class="col-xs-12 col-sm-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                   <div class="p-block pb-1">
                       <div class="p-number">
                           1
                       </div>
                       <p>
                           Переплата податків, отримання позовів, штрафів, зупинки діяльності
                       </p>
                   </div>
               </div>
               <div class="col-xs-12 col-sm-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                   <div class="p-block pb-2">
                       <div class="p-number">
                           2
                       </div>
                       <p>
                           Шахрайства з боку клієнтів, партнерів, співробітників, збиток репутації
                       </p>
                   </div>
               </div>
               <div class="col-xs-12 col-sm-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                   <div class="p-block pb-3">
                       <div class="p-number">
                           3
                       </div>
                       <p>
                           Співробітники при звільненні, які знають багато внутрішньої інформації, можуть зашкодити
                       </p>
                   </div>
               </div>
           </div>
           <div class="row pr-2">
               <div class="col-xs-12 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s">
                   <div class="p-block pb-4">
                       <div class="p-number">
                           4
                       </div>
                       <p>
                           Немає захисту перед перевіряючими органами
                       </p>
                   </div>
               </div>
               <div class="col-xs-12 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
                   <div class="p-block pb-5">
                       <div class="p-number">
                           5
                       </div>
                       <p>
                           Відсутність можливості правильної і швидкої реакції на зміну законодавства
                       </p>
                   </div>
               </div>
           </div>
           <div class="order">
               <a href="">ЗАМОВИТИ КОНСУЛЬТАЦІЮ</a>
           </div>
       </div>
   </section>
   <section class="how">
       <div class="container">
           <div class="yellow-table">
               <div class="inlined wow fadeInLeftBig" data-wow-duration="2s" data-wow-delay="0.5s">як саме це працює</div>
               <div class="tabs">
                   <div class="tab-link current" data-tab="h-tab1"><span>А</span>удит</div>
		           <div class="tab-link" data-tab="h-tab2"><span>К</span>онсалтинг</div>
               </div>
		        <div class="tab-contents">
                <div id="h-tab1" class="tab-content current">
                    <div class="table-title">
                       Аудит
                   </div>
                    <div class="h-list">
                        <div class="pad-l">
                            <p>
                                1. Оцінка очікувань замовника. Ми проводимо детальне особисте спілкування з власником бізнесу, який описує свою точку зору на проблемні місця в компанії і розповідає про плани розвитку бізнесу.
                            </p>
                            <p>
                                2. Попередній моніторинг за відкритими джерелами - державні реєстри, бази даних.
                            </p>
                        </div>
                        <p>
                            3. Надаємо власнику повне професійне висновок про стан безпеки в Вашому бізнесі із зазначенням можливостей і загроз.
                        </p>
                        <p>
                           4. Наші аудитори приїжджають в Вашу компанію (незалежно від міста) зі спеціальними чек-листами. Це перевірочні списки, які регулярно оновлюються відповідно до змін в Законодавстві України і ми проводимо детальне дослідження компанії, документації, бізнес-процесів, спілкуємося з ключовими співробітниками, що впливають на безпеку бізнесу.
                        </p>
                        <p>
                            5. Надаємо власнику повне професійне висновок про стан безпеки в Вашому бізнесі із зазначенням можливостей і загроз.
                        </p>
                    </div>
                </div>
                <div id="h-tab2" class="tab-content">
                     <div class="table-title">
                       Консалтинг
                   </div>
                    <div class="h-list">
                        <div class="pad-l">
                            <p>
                                1. Оцінка очікувань замовника. Ми проводимо детальне особисте спілкування з власником бізнесу, який описує свою точку зору на проблемні місця в компанії і розповідає про плани розвитку бізнесу.
                            </p>
                            <p>
                                2. Попередній моніторинг за відкритими джерелами - державні реєстри, бази даних.
                            </p>
                        </div>
                        <p>
                            3. Надаємо власнику повне професійне висновок про стан безпеки в Вашому бізнесі із зазначенням можливостей і загроз.
                        </p>
                        <p>
                           4. Наші аудитори приїжджають в Вашу компанію (незалежно від міста) зі спеціальними чек-листами. Це перевірочні списки, які регулярно оновлюються відповідно до змін в Законодавстві України і ми проводимо детальне дослідження компанії, документації, бізнес-процесів, спілкуємося з ключовими співробітниками, що впливають на безпеку бізнесу.
                        </p>
                        <p>
                            5. Надаємо власнику повне професійне висновок про стан безпеки в Вашому бізнесі із зазначенням можливостей і загроз.
                        </p>
                    </div>
                </div>
            </div>
           </div>
       </div>
   </section>
   <section class="result">
       <div class="container">
           <div class="multi-big">
               <h1>Результат, який ви отримуєте</h1>
               <div class="multi-row mr-1">
                   <div class="multi-col mc-1">
                       <div class="multi-block mb-1 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                           <div class="m-number">
                               1
                           </div>
                           <p>
                               Аналіз поточної ситуації з точки зору юридичної, oекономічної, фінансової та кадрової безпеки
                           </p>
                       </div>
                   </div>
                   <div class="multi-col mc-2">
                       <div class="multi-block mb-2 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.7s">
                           <div class="m-number">
                               2
                           </div>
                           <p>
                               Розуміння в яких процесах можуть бути проблеми і що з цим робити
                           </p>
                       </div>
                   </div>
                   <div class="multi-col mc-3">
                       <div class="multi-block mb-3 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.9s">
                           <div class="m-number">
                               3
                           </div>
                           <p>
                               Чіткий план дій щодо запобігання «небажаних ситуацій»
                           </p>
                       </div>
                   </div>
               </div>
               <div class="multi-row mr-2">
                   <div class="multi-col mc-4">
                       <div class="multi-block mb-8 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="2.3s">
                           <div class="m-number">
                               8
                           </div>
                           <p>
                               Розумна податкова політика компанії
                           </p>
                       </div>
                       <div class="multi-block mb-7 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="2s">
                           <div class="m-number">
                               7
                           </div>
                           <p>
                               Зрозумілі, керовані, захищені фінансові потоки
                           </p>
                       </div>
                   </div>
                   <div class="multi-col mc-5">
                       <div class="multi-block mb-6 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="1.5s">
                           <div class="m-number">
                               6
                           </div>
                           <p>
                               Максимальна юридичний захист перед контрагентми, державою, співробітниками
                           </p>
                       </div>
                   </div>
                   <div class="multi-col mc-6">
                       <div class="multi-block mb-4 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="1.1s">
                           <div class="m-number">
                               4
                           </div>
                           <p>
                               «Броня» від усіх можливих нападок, впевненість і свобода дій
                           </p>
                       </div>
                       <div class="multi-block mb-5 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="1.3s">
                           <div class="m-number">
                               5
                           </div>
                           <p>
                               Повністю вибудуване кадрове виробництво, що захищає інтереси як співробітника, так і роботодавця.
                           </p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <section class="command">
       <div class="container">
           <h1 class="inlined">
               наша команда професіоналів
           </h1>
           <div class="row cc-row">
               <div class="col-xs-12 col-lg-4">
                   <div class="c-col cc-1">
                       <div class="c-block cb-1">
                           <div class="c-img">
                               <img src="img/c1.png" alt="">
                           </div>
                           <div class="c-text">
                               <p class="c-name">Коваленко Андрій</p>
                               <p>Експерт з податкової, кадрової та правової безпеки</p>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-xs-12 col-lg-4">
                   <div class="c-col cc-2">
                       <div class="c-block cb-2">
                           <div class="c-img">
                               <img src="img/c2.png" alt="">
                           </div>
                           <div class="c-text">
                               <p class="c-name">Дрозд Олександра</p>
                               <p>Експерт з договірних відносин</p>
                           </div>
                       </div>
                       <div class="c-block cb-3">
                           <div class="c-img">
                               <img src="img/c3.png" alt="">
                           </div>
                           <div class="c-text">
                               <p class="c-name">Король Інна</p>
                               <p>Експерт з кадрової безпеки та договірних відносин</p>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-xs-12 col-lg-4">
                   <div class="c-col cc-3">
                       <div class="c-block cb-4">
                           <div class="c-img">
                               <img src="img/c4.png" alt="">
                           </div>
                           <div class="c-text">
                               <p class="c-name">Приймак Олександр</p>
                               <p>Керуючий</p>
                           </div>
                       </div>
                       <div class="c-block cb-5">
                           <div class="c-img">
                               <img src="img/c5.png" alt="">
                           </div>
                           <div class="c-text">
                               <p class="c-name">Супрун Ігор</p>
                               <p>Експерт з корпоративного права, договірних відносин та кадрового діловодства</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <section class="more">
       <div class="container">
         <div class="more-inner">
               <div class="m-top">
                   <div class="m-img">
                       <img src="img/more.png" alt="">
                        <a href=""><img src="img/fb.png" alt=""></a>
                   </div>
                   <div class="m-text m-txt">
                       <p class="m-1">Кожен бізнес – це</p>
                       <p class="m-2">відображення “Я” його власника. Коли Ви</p>
                       <p class="m-3">замовляєте професійні послуги, перш за все хочете знате</p>
                       <p class="m-4">більше про людину, яка стоїть за ними. Навіть, якщо працювала ціла</p>
                       <p class="m-5">команда – завжди є той, кому ти будеш дивитися у вічі. </p>
                       <p class="m-6">Тож давайте знайомитись.</p>
                       <p class="m-7">Я хлібороб з діда-прадіда. Точніше, пра-прадіда. Так каже архів. Я офіцер.</p>
                       <p class="m-8">Капітаном звільнився з посади слідчого Військової Прокуратури. Я </p>
                       <p class="m-9">професійний юрист і адвокат. Хто не розуміє різниці – дзвоніть, залюбки поясню.</p>
                       <p class="m-10">Я вимогливий керівник для своєї команди. Я економіст та бізнесмен, вмію</p>
                       <p class="m-11">рахувати та заробляти гроші. Я сімянин та син України.</p>
                       <p class="m-12">Наші цінності та принципи завжди нерозривні з нами.</p>
                       <p class="m-13"><span>1.</span> Простота. Ніяких понтів, розкішних кабінетів та мудрених слів. Перш за</p>
                       <p class="m-14">все – робота, результат, користь для клієнта. Наша задача не вразити своєю</p>
                       <p class="m-15">крутістю, звязками тощо. Задача – вирішити проблему клієнта.</p>
                   </div>
               </div>
               <div class="m-text">
                   <p>            
                   <span>2.</span> Чесність. З поваги до себе та клієнтів ми не будем брехати, перебільшувати, замовчувати. Навіть якщо це фінансово вигідно. Ми не “рєшаєм” питання, як це нажаль заведено в Україні. Ми вибудовуємо переможну стратегію, використовуючи свій досвід та знання. Інакше навіщо? 
                   </p>
                   <p><span>3.</span> Відданість. Якщо ви довірились нам – Ви стали своїм. А своїх не кидають. </p>
                   <p><span>4.</span> Захоплення людьми праці, творцями. Ми вважаємо українських бізнесменів, тих, що чесно створюють свій продукт, робочі місця, несуть користь для країни – сіллю землі. Вони варті того, щоб працювати в безпеці та мати чесний прибуток. На допомогу їм спрямовані всі наші сили. </p>
                   <p><span>5.</span> Здоровий глузд. Ми завжди прораховуємо наслідки наших дій та дій наших клієнтів не тільки в довгостроковій перспективі, але й з урахуванням інтересів інших сторін. В модних книжках це називають екологічність, етичність – для нас це просто норма прийняття рішень. </p>
                   <p class="lst">І просто порада, запишить наш телефон собі прямо зараз. Ніколи не знаєш, коли знадобиться допомога хорошого адвоката. </p>
               </div>
               <div class="contacts">
                   <a href="tel:+3 8 063 765 65 44">+3 8 063 765 65 44</a>
                   <a href="mailto:mhn_gbdd@gmail.com">mhn_gbdd@gmail.com</a>
                   <div>
                       <p>Олександр Юріойвич Приймак</p>
                       <div class="rectangle"></div>
                   </div>
               </div>
         </div>
       </div>
   </section>
   <h1 class="inlined clicking"><span>Більше інформації...</span></h1>
   <section class="proposal">
       <div class="container">
           <div class="yellow-table">
               <div class="inlined wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">Чому наша пропозиція оптимальна</div>
               <div class="tabs">
                   <div class="tab-link current" data-tab="w-tab1"><span>1</span></div>
		           <div class="tab-link" data-tab="w-tab2"><span>2</span></div>
                   <div class="tab-link" data-tab="w-tab3"><span>3</span></div>
		           <div class="tab-link" data-tab="w-tab4"><span>4</span></div>
               </div>
		        <div class="tab-contents">
                <div id="w-tab1" class="tab-content current">
                    <div class="table-title">
                       1. Системний підхід
                   </div>
                    <p class="w-text">
                        Над кожним проектом працює група фахівців, які мають практичний досвід роботи в бізнесі, з перевіряючими органами, судову практику. Спільно вони створюють оптимальну модель.
                    </p>
                    <div class="order">
                        <a href="">ЗАМОВИТИ КОНСУЛЬТАЦІЮ</a>
                    </div>
                </div>
                <div id="w-tab2" class="tab-content">
                     <div class="table-title">
                       1. Системний підхід
                   </div>
                    <p class="w-text">
                        Над кожним проектом працює група фахівців, які мають практичний досвід роботи в бізнесі, з перевіряючими органами, судову практику. Спільно вони створюють оптимальну модель.
                    </p>
                    <div class="order">
                        <a href="">ЗАМОВИТИ КОНСУЛЬТАЦІЮ</a>
                    </div>
                </div>
                <div id="w-tab3" class="tab-content">
                     <div class="table-title">
                       1. Системний підхід
                   </div>
                    <p class="w-text">
                        Над кожним проектом працює група фахівців, які мають практичний досвід роботи в бізнесі, з перевіряючими органами, судову практику. Спільно вони створюють оптимальну модель.
                    </p>
                    <div class="order">
                        <a href="">ЗАМОВИТИ КОНСУЛЬТАЦІЮ</a>
                    </div>
                </div>
                <div id="w-tab4" class="tab-content">
                     <div class="table-title">
                       1. Системний підхід
                   </div>
                    <p class="w-text">
                        Над кожним проектом працює група фахівців, які мають практичний досвід роботи в бізнесі, з перевіряючими органами, судову практику. Спільно вони створюють оптимальну модель.
                    </p>
                    <div class="order">
                        <a href="">ЗАМОВИТИ КОНСУЛЬТАЦІЮ</a>
                    </div>
                </div>
            </div>
           </div>
       </div>
   </section>
   <section class="feeds">
       <div class="container">
           <h1>Відгуки</h1>
               <div class="slider">
                   <div class="bx-main">
                    <div class="slide">
                        <div class="slide-inner">
                            <div class="slide-head">
                                <div class="s-img">

                                </div>
                                <div class="s-desc">
                                    <p class="s-name">
                                        Ім’я Прізвище
                                    </p>
                                    <p class="s-post">
                                        Посада
                                    </p>
                                </div>
                            </div>
                            <div class="slide-body">
                                <p>
                                    Наші аудитори приїжджають в Вашу компанію (незалежно від міста) зі спеціальними чек-листами. Це перевірочні списки, які регулярно оновлюються відповідно до змін в Законодавстві України і ми проводимо детальне дослідження компанії, документації, бізнес-процесів, спілкуємося з ключовими співробітниками, що впливають на безпеку бізнесу.
                                </p>
                                <p>
                                    Наші аудитори приїжджають в Вашу компанію (незалежно від міста) зі спеціальними чек-листами. Це перевірочні списки, які регулярно оновлюються відповідно до змін в Законодавстві України і ми проводимо детальне дослідження компанії, документації, бізнес-процесів, спілкуємося з ключовими співробітниками, що впливають на безпеку бізнесу.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-inner">
                            <div class="slide-head">
                                <div class="s-img">

                                </div>
                                <div class="s-desc">
                                    <p class="s-name">
                                        Ім’я Прізвище
                                    </p>
                                    <p class="s-post">
                                        Посада
                                    </p>
                                </div>
                            </div>
                            <div class="slide-body">
                                <p>
                                    Наші аудитори приїжджають в Вашу компанію (незалежно від міста) зі спеціальними чек-листами. Це перевірочні списки, які регулярно оновлюються відповідно до змін в Законодавстві України і ми проводимо детальне дослідження компанії, документації, бізнес-процесів, спілкуємося з ключовими співробітниками, що впливають на безпеку бізнесу.
                                </p>
                                <p>
                                    Наші аудитори приїжджають в Вашу компанію (незалежно від міста) зі спеціальними чек-листами. Це перевірочні списки, які регулярно оновлюються відповідно до змін в Законодавстві України і ми проводимо детальне дослідження компанії, документації, бізнес-процесів, спілкуємося з ключовими співробітниками, що впливають на безпеку бізнесу.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-inner">
                            <div class="slide-head">
                                <div class="s-img">

                                </div>
                                <div class="s-desc">
                                    <p class="s-name">
                                        Ім’я Прізвище
                                    </p>
                                    <p class="s-post">
                                        Посада
                                    </p>
                                </div>
                            </div>
                            <div class="slide-body">
                                <p>
                                    Наші аудитори приїжджають в Вашу компанію (незалежно від міста) зі спеціальними чек-листами. Це перевірочні списки, які регулярно оновлюються відповідно до змін в Законодавстві України і ми проводимо детальне дослідження компанії, документації, бізнес-процесів, спілкуємося з ключовими співробітниками, що впливають на безпеку бізнесу.
                                </p>
                                <p>
                                    Наші аудитори приїжджають в Вашу компанію (незалежно від міста) зі спеціальними чек-листами. Це перевірочні списки, які регулярно оновлюються відповідно до змін в Законодавстві України і ми проводимо детальне дослідження компанії, документації, бізнес-процесів, спілкуємося з ключовими співробітниками, що впливають на безпеку бізнесу.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
   </section>
   <section class="faq">
       <div class="container">
           <h1 class="inlined">
               FAQ
           </h1>
           <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="f-1">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#f1" aria-expanded="true" aria-controls="collapseOne">
                      Скільки коштує і який термін проведення аудиту?
                    </a>
                  </h4>
                </div>
                <div id="f1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    Наші аудитори приїжджають в Вашу компанію (незалежно від міста) зі спеціальними чек-листами. Це перевірочні списки, які регулярно оновлюються відповідно до змін в Законодавстві України і ми проводимо детальне дослідження компанії, документації
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="f-2">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#f2" aria-expanded="false" aria-controls="collapseTwo">
                      Наскільки конфіденційна інформація, яку ви отримуєте?
                    </a>
                  </h4>
                </div>
                <div id="f2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    Наші аудитори приїжджають в Вашу компанію (незалежно від міста) зі спеціальними чек-листами. Це перевірочні списки, які регулярно оновлюються відповідно до змін в Законодавстві України і ми проводимо детальне дослідження компанії, документації
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="f-3">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#f3" aria-expanded="false" aria-controls="collapseThree">
                      Якщо наша компанія дуже маленька, Ви проводите аудит?
                    </a>
                  </h4>
                </div>
                <div id="f3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    Наші аудитори приїжджають в Вашу компанію (незалежно від міста) зі спеціальними чек-листами. Це перевірочні списки, які регулярно оновлюються відповідно до змін в Законодавстві України і ми проводимо детальне дослідження компанії, документації
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="f-4">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#f4" aria-expanded="false" aria-controls="collapseThree">
                      У нас є філії в різних містах України - як буде організований аудит?
                    </a>
                  </h4>
                </div>
                <div id="f4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    Наші аудитори приїжджають в Вашу компанію (незалежно від міста) зі спеціальними чек-листами. Це перевірочні списки, які регулярно оновлюються відповідно до змін в Законодавстві України і ми проводимо детальне дослідження компанії, документації
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="f-5">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#f5" aria-expanded="false" aria-controls="collapseThree">
                      У нас є внутрішня юридична служба і ми самі знаємо свої проблеми, чим ви можете бути корисні?
                    </a>
                  </h4>
                </div>
                <div id="f5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    Наші аудитори приїжджають в Вашу компанію (незалежно від міста) зі спеціальними чек-листами. Це перевірочні списки, які регулярно оновлюються відповідно до змін в Законодавстві України і ми проводимо детальне дослідження компанії, документації
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="f-6">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#f6" aria-expanded="false" aria-controls="collapseThree">
                      Ви навчаєте співробітників поведінці під час перевірок?
                    </a>
                  </h4>
                </div>
                <div id="f6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    Наші аудитори приїжджають в Вашу компанію (незалежно від міста) зі спеціальними чек-листами. Це перевірочні списки, які регулярно оновлюються відповідно до змін в Законодавстві України і ми проводимо детальне дослідження компанії, документації
                  </div>
                </div>
              </div>
            </div>
       </div>
   </section>
   <footer class="footer">
       <div class="container">
           <div class="order">
               <a href="">ЗАМОВИТИ КОНСУЛЬТАЦІЮ</a>
           </div>
           <div class="f-cols">
               <div class="f-col">
                   <p>
                       Мейл: <span><a href="mailto:гоYкеіп@hhgfd.yt">гоYкеіп@hhgfd.yt</a></span>
                   </p>
                   <p>
                       Адреса: <span>вул. Равоы 654, 453</span>
                   </p>
               </div>
               <div class="f-col">
                   <p>
                       Тел: <span><a href="tel:+6 765 65 543">+6 765 65 543</a></span>
                   </p>
                   <p>
                       Тел: <span><a href="tel:+6 765 65 543">+6 765 65 543</a></span>
                   </p>
               </div>
           </div>
       </div>
   </footer>
  </body>
</html>