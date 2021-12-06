
<?php include 'header.php' ?>
<?php
@session_start();
$LangArray = array("title_1", "title_2","intro1","intro3","intro3_2","intro3_2_1","intro3_2_2","intro3_2_3","intro3_2_4","intro3_2_5","intro3_2_6","intro3_2_7","intro2","intro4","intro5","intro6","intro7","intro8","intro9","intro10","intro11","intro12","intro13");
$DefaultLang = "title_1";
if(@$_SESSION['NowLang']) {
  if(!in_array($_SESSION['NowLang'], $LangArray)) {
    $_SESSION['NowLang'] = $DefaultLang;
  }
}
else {
  $_SESSION['NowLang'] = $DefaultLang;
}
$language = addslashes($_GET['information']);
if($language) {
  if(!in_array($language, $LangArray)) {
    $_SESSION['NowLang'] = $DefaultLang;
  }
  else {
    $_SESSION['NowLang'] = $language;
  }
}
$CurentLang = addslashes($_SESSION['NowLang']);
include_once ("text/text.".$CurentLang.".php");
?>
        <div class="intro">
            <div class="container">
                <div class="intro__inner row">
                    <h1 class="intro__inner__title col-lg-12">
                        Terms and conditions
                    </h1>
                    <div class="intro__inner__terms col-lg-11 row">
                        <div class="col-lg-4 intro__inner__terms__sub  accordion" id="myDiv">
                            <a href="terms.php?information=title_1"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['classtitle1']; ?>">
                            Введение
                            </h5></a>
                            <a href="terms.php?information=title_2"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['classtitle2']; ?>">
                            Сведения об организаторе пари 
                            </h5></a>
                            <a href="terms.php?information=intro1"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class1']; ?>">
                            1.&ensp;Основные термины, понятия и определения
                            </h5></a>
                            <a href="terms.php?information=intro2"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class2']; ?>">
                            2.&ensp;Общие принципы и положения
                            </h5></a>
                            <a href="terms.php?information=intro3"><h5 class="intro__inner__terms__sub__title  <?php echo $Lang['class3']; ?> ">
                            3.&ensp;Правила приема ставок на конные события&ensp;
                                <a class="collapsed"  data-bs-toggle="collapse" href="#collapseThree ">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="15" height="15"
                                        viewBox="0 0 172 172"
                                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#7dab30"><path d="M16.6625,44.3975l-7.2025,7.2025l76.54,76.54l76.54,-76.54l-7.2025,-7.2025l-69.3375,69.3375z"></path></g></g>
                                    </svg>
                                </a>

                                <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                    <a href="terms.php?information=intro3"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class3']; ?>">
                                        3.1.&ensp;Прием ставок на конные события, проходящие на различных ипподромах
                                    </h5></a>
                                    <a href="terms.php?information=intro3_2"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class2']; ?>">
                                        3.2.&ensp;Виды пари
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapsetwo">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                width="15" height="15"
                                                viewBox="0 0 172 172"
                                                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#7dab30"><path d="M16.6625,44.3975l-7.2025,7.2025l76.54,76.54l76.54,-76.54l-7.2025,-7.2025l-69.3375,69.3375z"></path></g></g>
                                            </svg>
                                         </a>

                                        <div id="collapsetwo" class="collapse" data-bs-parent="#accordion">
                                            <a href="terms.php?information=intro3_2_1"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class2']; ?>">
                                                3.2.1&ensp;Тип пари «Победа»
                                            </h5></a>
                                            <a href="terms.php?information=intro3_2_2"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class2']; ?>">
                                                3.2.2&ensp;Тип пари «Место»
                                            </h5></a>
                                            <a href="terms.php?information=intro2"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class2']; ?>">
                                                3.2.3&ensp;Тип пари «Пара»
                                            </h5></a>
                                            <a href="terms.php?information=intro2"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class2']; ?>">
                                                3.2.4&ensp;Тип пари «Двойной Экспресс»
                                            </h5></a>
                                            <a href="terms.php?information=intro2"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class2']; ?>">
                                                3.2.5&ensp;Тип пари «Тройной Экспресс»
                                            </h5></a>
                                            <a href="terms.php?information=intro2"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class2']; ?>">
                                                3.2.6&ensp;Тип пари «Тройной Одинар»
                                            </h5></a>
                                            <a href="terms.php?information=intro2"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class2']; ?>">
                                                3.2.7&ensp;Тип пари «Победа 6»
                                            </h5></a>
                                        </div>
                                    </h5></a>
                                    
                               
                            </h5></a>
                   
                          
                       
                            <a href="terms.php?information=intro4"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class4']; ?>">
                            4.&ensp;Порядок выплаты крупных выигрышей
                            </h5></a>
                            <a href="terms.php?information=intro5"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class5']; ?>">
                            5.&ensp;Обязанности Организатора пари
                            </h5></a>
                            <a href="terms.php?information=intro6"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class6']; ?>">
                            6.&ensp;Права Организатора пари
                            </h5></a>
                            <a href="terms.php?information=intro7"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class7']; ?>">
                            7.&ensp;Обязанности Участника пари
                            </h5></a>
                            <a href="terms.php?information=intro8"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class8']; ?>">
                            8.&ensp;Права Участника пари
                            </h5></a>
                            <a href="terms.php?information=intro9"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class9']; ?>">
                            9.&ensp;Ограничения
                            </h5></a>
                            <a href="terms.php?information=intro10"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class10']; ?>">
                            10.&ensp;Ответственность сторон
                            </h5></a>
                            <a href="terms.php?information=intro11"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class11']; ?>">
                            11.&ensp;Ограничение участия в пари
                            </h5></a>
                            <a href="terms.php?information=intro12"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class12']; ?> ">
                            12.&ensp;Предупреждение о вреде чрезмерного увлечения пари
                            </h5></a>
                            <a href="terms.php?information=intro13"><h5 class="intro__inner__terms__sub__title <?php echo $Lang['class13']; ?>">
                            13.&ensp;Психологическая помощь участникам пари 
                            
                            </h5></a>
                            
                        </div>
                        <div class="col-lg-7 intro__inner__terms__text">
                            <h5>
                            <?php echo $Lang['title']; ?>
                            </h5>
                            <?php echo $Lang['text1']; ?>
                            <?php echo $Lang['text2']; ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    <?php include 'footer.php' ?>        






