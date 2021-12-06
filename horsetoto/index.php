<?php include 'header.php' ?>
<div class="intro">
    <div class="container">
        <div class="intro__inner row">
            <div class="intro__inner__content__right col-lg-8">
                <div class="intro__inner__content__right__table">
                    <div class="intro__inner__content__right__table__header">
                        <div class="intro__inner__content__right__table__header__title">
                            <h3> Today THR pick</h3>
                        </div>
                        <div class="intro__inner__content__right__table__time" id="myDIV">
                            <a><h4 class="intro__inner__content__right__table__time__time active1" >
                                20:00
                            </h4></a>
                            <a ><h4 class="intro__inner__content__right__table__time__time" >
                                20:00
                            </h4></a>
                            <a ><h4 class="intro__inner__content__right__table__time__time" >
                                20:00
                            </h4></a>
                            <a ><h4 class="intro__inner__content__right__table__time__time" >
                                20:00
                            </h4></a>
                            <a ><h4 class="intro__inner__content__right__table__time__time" >
                                20:00
                            </h4></a>
                            <a ><h4 class="intro__inner__content__right__table__time__time" >
                                20:00
                            </h4></a>

                        </div>
                        <script>

                                var header = document.getElementById("myDIV");
                                var btns = header.getElementsByClassName("intro__inner__content__right__table__time__time");
                                for (var i = 0; i < btns.length; i++) {
                                btns[i].addEventListener("click", function() {
                                var current = document.getElementsByClassName("active1");
                                current[0].className = current[0].className.replace(" active1", "");
                                this.className += " active1";
                                });
                                }
                        </script>
                    </div>
                    <div class="intro__inner__content__right__table__body">
                           <div class="intro__inner__content__right__table__body__cards">
                            <div class="intro__inner__content__right__table__body__header">
                                    <div class="intro__inner__content__right__table__body__header__image">
                                        <img src="img/flag.svg" alt="">
                                    </div>
                                    <div class="intro__inner__content__right__table__body__header__time">
                                    <p>20:00</p>
                                    </div>
                                    <div class="intro__inner__content__right__table__body__header__name">
                                    <p>Eskilstuna</p>
                                    </div>
                                </div>
                                <div class="intro__inner__content__right__table__body__body">
                                    <div class="intro__inner__content__right__table__body__body__card">
                                        <div class="intro__inner__content__right__table__body__body__image">
                                            <img src="img/jokey.svg" alt="">
                                        </div>
                                        <div class="intro__inner__content__right__table__body__body__desc">
                                            <div class="intro__inner__content__right__table__body__body__horsename">
                                                <p>1.Silver Ducat</p>
                                            </div>
                                            <div class="intro__inner__content__right__table__body__body__Jokeyname">
                                                <p>Marcus J A</p>
                                            </div>
                                        </div>
                                        
                                        <div class="intro__inner__content__right__table__body__body__price">
                                            <button class="intro__inner__content__right__table__body__body__price__button">2.15$</button>
                                        </div>
                                    </div>
                                    <div class="intro__inner__content__right__table__body__body__card">
                                        <div class="intro__inner__content__right__table__body__body__image">
                                            <img src="img/jokey.svg" alt="">
                                        </div>
                                        <div class="intro__inner__content__right__table__body__body__desc">
                                            <div class="intro__inner__content__right__table__body__body__horsename">
                                                <p>1.Silver Ducat</p>
                                            </div>
                                            <div class="intro__inner__content__right__table__body__body__Jokeyname">
                                                <p>Marcus J A</p>
                                            </div>
                                        </div>
                                        
                                        <div class="intro__inner__content__right__table__body__body__price">
                                            <button class="intro__inner__content__right__table__body__body__price__button">2.15$</button>
                                        </div>
                                    </div>
                                    <div class="intro__inner__content__right__table__body__body__card">
                                        <div class="intro__inner__content__right__table__body__body__image">
                                            <img src="img/jokey.svg" alt="">
                                        </div>
                                        <div class="intro__inner__content__right__table__body__body__desc">
                                            <div class="intro__inner__content__right__table__body__body__horsename">
                                                <p>1.Silver Ducat</p>
                                            </div>
                                            <div class="intro__inner__content__right__table__body__body__Jokeyname">
                                                <p>Marcus J A</p>
                                            </div>
                                        </div>
                                        
                                        <div class="intro__inner__content__right__table__body__body__price">
                                            <button class="intro__inner__content__right__table__body__body__price__button">2.15$</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro__inner__content__right__table__body__footer">
                                    <div class="intro__inner__content__right__table__body__footer__text">
                                        <a href="">
                                            <p>View full racecard</p>
                                        </a>
                                    </div>
                                    <div class="intro__inner__content__right__table__body__footer__desc">
                                        <p>4 Runners</p>
                                    </div>
                                </div>
                           </div>
                           <div class="intro__inner__content__right__table__body__cards">
                            <div class="intro__inner__content__right__table__body__header">
                                    <div class="intro__inner__content__right__table__body__header__image">
                                        <img src="img/flag.svg" alt="">
                                    </div>
                                    <div class="intro__inner__content__right__table__body__header__time">
                                    <p>20:00</p>
                                    </div>
                                    <div class="intro__inner__content__right__table__body__header__name">
                                    <p>Eskilstuna</p>
                                    </div>
                                </div>
                                <div class="intro__inner__content__right__table__body__body">
                                    <div class="intro__inner__content__right__table__body__body__card">
                                        <div class="intro__inner__content__right__table__body__body__image">
                                            <img src="img/jokey.svg" alt="">
                                        </div>
                                        <div class="intro__inner__content__right__table__body__body__desc">
                                            <div class="intro__inner__content__right__table__body__body__horsename">
                                                <p>1.Silver Ducat</p>
                                            </div>
                                            <div class="intro__inner__content__right__table__body__body__Jokeyname">
                                                <p>Marcus J A</p>
                                            </div>
                                        </div>
                                        
                                        <div class="intro__inner__content__right__table__body__body__price">
                                            <button class="intro__inner__content__right__table__body__body__price__button">2.15$</button>
                                        </div>
                                    </div>
                                    <div class="intro__inner__content__right__table__body__body__card">
                                        <div class="intro__inner__content__right__table__body__body__image">
                                            <img src="img/jokey.svg" alt="">
                                        </div>
                                        <div class="intro__inner__content__right__table__body__body__desc">
                                            <div class="intro__inner__content__right__table__body__body__horsename">
                                                <p>1.Silver Ducat</p>
                                            </div>
                                            <div class="intro__inner__content__right__table__body__body__Jokeyname">
                                                <p>Marcus J A</p>
                                            </div>
                                        </div>
                                        
                                        <div class="intro__inner__content__right__table__body__body__price">
                                            <button class="intro__inner__content__right__table__body__body__price__button">2.15$</button>
                                        </div>
                                    </div>
                                    <div class="intro__inner__content__right__table__body__body__card">
                                        <div class="intro__inner__content__right__table__body__body__image">
                                            <img src="img/jokey.svg" alt="">
                                        </div>
                                        <div class="intro__inner__content__right__table__body__body__desc">
                                            <div class="intro__inner__content__right__table__body__body__horsename">
                                                <p>1.Silver Ducat</p>
                                            </div>
                                            <div class="intro__inner__content__right__table__body__body__Jokeyname">
                                                <p>Marcus J A</p>
                                            </div>
                                        </div>
                                        
                                        <div class="intro__inner__content__right__table__body__body__price">
                                            <button class="intro__inner__content__right__table__body__body__price__button">2.15$</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro__inner__content__right__table__body__footer">
                                    <div class="intro__inner__content__right__table__body__footer__text">
                                        <a href="">
                                            <p>View full racecard</p>
                                        </a>
                                    </div>
                                    <div class="intro__inner__content__right__table__body__footer__desc">
                                        <p>4 Runners</p>
                                    </div>
                                </div>
                           </div>
                           <div class="intro__inner__content__right__table__body__cards">
                            <div class="intro__inner__content__right__table__body__header">
                                    <div class="intro__inner__content__right__table__body__header__image">
                                        <img src="img/flag.svg" alt="">
                                    </div>
                                    <div class="intro__inner__content__right__table__body__header__time">
                                    <p>20:00</p>
                                    </div>
                                    <div class="intro__inner__content__right__table__body__header__name">
                                    <p>Eskilstuna</p>
                                    </div>
                                </div>
                                <div class="intro__inner__content__right__table__body__body">
                                    <div class="intro__inner__content__right__table__body__body__card">
                                        <div class="intro__inner__content__right__table__body__body__image">
                                            <img src="img/jokey.svg" alt="">
                                        </div>
                                        <div class="intro__inner__content__right__table__body__body__desc">
                                            <div class="intro__inner__content__right__table__body__body__horsename">
                                                <p>1.Silver Ducat</p>
                                            </div>
                                            <div class="intro__inner__content__right__table__body__body__Jokeyname">
                                                <p>Marcus J A</p>
                                            </div>
                                        </div>
                                        
                                        <div class="intro__inner__content__right__table__body__body__price">
                                            <button class="intro__inner__content__right__table__body__body__price__button">2.15$</button>
                                        </div>
                                    </div>
                                    <div class="intro__inner__content__right__table__body__body__card">
                                        <div class="intro__inner__content__right__table__body__body__image">
                                            <img src="img/jokey.svg" alt="">
                                        </div>
                                        <div class="intro__inner__content__right__table__body__body__desc">
                                            <div class="intro__inner__content__right__table__body__body__horsename">
                                                <p>1.Silver Ducat</p>
                                            </div>
                                            <div class="intro__inner__content__right__table__body__body__Jokeyname">
                                                <p>Marcus J A</p>
                                            </div>
                                        </div>
                                        
                                        <div class="intro__inner__content__right__table__body__body__price">
                                            <button class="intro__inner__content__right__table__body__body__price__button">2.15$</button>
                                        </div>
                                    </div>
                                    <div class="intro__inner__content__right__table__body__body__card">
                                        <div class="intro__inner__content__right__table__body__body__image">
                                            <img src="img/jokey.svg" alt="">
                                        </div>
                                        <div class="intro__inner__content__right__table__body__body__desc">
                                            <div class="intro__inner__content__right__table__body__body__horsename">
                                                <p>1.Silver Ducat</p>
                                            </div>
                                            <div class="intro__inner__content__right__table__body__body__Jokeyname">
                                                <p>Marcus J A</p>
                                            </div>
                                        </div>
                                        
                                        <div class="intro__inner__content__right__table__body__body__price">
                                            <button class="intro__inner__content__right__table__body__body__price__button">2.15$</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro__inner__content__right__table__body__footer">
                                    <div class="intro__inner__content__right__table__body__footer__text">
                                        <a href="">
                                            <p>View full racecard</p>
                                        </a>
                                    </div>
                                    <div class="intro__inner__content__right__table__body__footer__desc">
                                        <p>4 Runners</p>
                                    </div>
                                </div>
                           </div>
                           <div class="intro__inner__content__right__table__body__cards">
                            <div class="intro__inner__content__right__table__body__header">
                                    <div class="intro__inner__content__right__table__body__header__image">
                                        <img src="img/flag.svg" alt="">
                                    </div>
                                    <div class="intro__inner__content__right__table__body__header__time">
                                    <p>20:00</p>
                                    </div>
                                    <div class="intro__inner__content__right__table__body__header__name">
                                    <p>Eskilstuna</p>
                                    </div>
                                </div>
                                <div class="intro__inner__content__right__table__body__body">
                                    <div class="intro__inner__content__right__table__body__body__card">
                                        <div class="intro__inner__content__right__table__body__body__image">
                                            <img src="img/jokey.svg" alt="">
                                        </div>
                                        <div class="intro__inner__content__right__table__body__body__desc">
                                            <div class="intro__inner__content__right__table__body__body__horsename">
                                                <p>1.Silver Ducat</p>
                                            </div>
                                            <div class="intro__inner__content__right__table__body__body__Jokeyname">
                                                <p>Marcus J A</p>
                                            </div>
                                        </div>
                                        
                                        <div class="intro__inner__content__right__table__body__body__price">
                                            <button class="intro__inner__content__right__table__body__body__price__button">2.15$</button>
                                        </div>
                                    </div>
                                    <div class="intro__inner__content__right__table__body__body__card">
                                        <div class="intro__inner__content__right__table__body__body__image">
                                            <img src="img/jokey.svg" alt="">
                                        </div>
                                        <div class="intro__inner__content__right__table__body__body__desc">
                                            <div class="intro__inner__content__right__table__body__body__horsename">
                                                <p>1.Silver Ducat</p>
                                            </div>
                                            <div class="intro__inner__content__right__table__body__body__Jokeyname">
                                                <p>Marcus J A</p>
                                            </div>
                                        </div>
                                        
                                        <div class="intro__inner__content__right__table__body__body__price">
                                            <button class="intro__inner__content__right__table__body__body__price__button">2.15$</button>
                                        </div>
                                    </div>
                                    <div class="intro__inner__content__right__table__body__body__card">
                                        <div class="intro__inner__content__right__table__body__body__image">
                                            <img src="img/jokey.svg" alt="">
                                        </div>
                                        <div class="intro__inner__content__right__table__body__body__desc">
                                            <div class="intro__inner__content__right__table__body__body__horsename">
                                                <p>1.Silver Ducat</p>
                                            </div>
                                            <div class="intro__inner__content__right__table__body__body__Jokeyname">
                                                <p>Marcus J A</p>
                                            </div>
                                        </div>
                                        
                                        <div class="intro__inner__content__right__table__body__body__price">
                                            <button class="intro__inner__content__right__table__body__body__price__button">2.15$</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro__inner__content__right__table__body__footer">
                                    <div class="intro__inner__content__right__table__body__footer__text">
                                        <a href="">
                                            <p>View full racecard</p>
                                        </a>
                                    </div>
                                    <div class="intro__inner__content__right__table__body__footer__desc">
                                        <p>4 Runners</p>
                                    </div>
                                </div>
                           </div>
                           
                    </div>
                </div>
                
            </div>
            <div class="intro__inner__content__left col-lg-4">
                <div class="intro__inner__content__left__header">
                    <h4 class="intro__inner__content__left__header__title">
                        Bet Wallet
                    </h4>
                    <h4 class="intro__inner__content__left__header__subtitle">
                        Tote Calculator
                    </h4>
                </div>
                <div class="intro__inner__content__left__body">
                    <div class="intro__inner__content__left__body__card">
                        <div class="intro__inner__content__left__body__card__header">
                            <div class="intro__inner__content__left__body__card__header__text">
                                <div class="intro__inner__content__left__body__card__text__title">
                                    <h5>Win/Place</h5>
                                </div>
                                <div class="intro__inner__content__left__body__card__text__subtitle">
                                    <p>Gowran Park 20:00</p>
                                </div>
                            </div>
                            <div class="intro__inner__content__left__body__card__body">
                                <div class="intro__inner__content__left__body__card__body__desc">
                                    <div class="intro__inner__content__left__body__card__body__img">
                                        <img src="img/jokey.svg" alt="">
                                    </div>
                                    <div class="intro__inner__content__left__body__card__body__text">
                                        <h5 class="intro__inner__content__left__body__card__body__text__title">
                                            2. Braking Waves
                                        </h5>
                                        <p class="intro__inner__content__left__body__card__body__text__subtitle">
                                          Choose each way  
                                        </p>
                                    </div>
                                </div>
                                <div class="intro__inner__content__left__body__card__body__calculator">
                                    <div class="intro__inner__content__left__body__card__body__calculator__win">
                                        <div class="coef">
                                            <p>Win</p>
                                            <p>x111.9</p>
                                        </div>
                                        <p>1x</p>
                                        <p>1,000BC</p>
                                    </div>
                                    <div class="intro__inner__content__left__body__card__body__calculator__win">
                                        <div class="coef">
                                            <p>Place</p>
                                            <p>2.550</p>
                                        </div>
                                        <p>1x</p>
                                        <p>1,000BC</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="intro__inner__content__left__body__card__footer">
                                <div class="intro__inner__content__left__body__card__footer__text">
                                    <h5>
                                        Total Betting
                                    </h5>
                                </div>
                                <div class="intro__inner__content__left__body__card__footer__amount">
                                    <h5>
                                        1500BC
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
