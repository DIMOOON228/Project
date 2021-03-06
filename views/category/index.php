<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

?>
<main>

<?php //debug(Yii::$app->user->id); ?>
    <!-- slider-area start -->
    <section class="slider-area pos-relative">
        <div class="slider-active">
            <div class="single-slider slide-1-style slide-height d-flex align-items-center" data-background="/img/slider/slide1.jpg">
                <div class="shape-title bounce-animate">
                    <p class="car">Твоя первая тачка</p>
                </div>
    </section>
    <section class="product-area box-90 pt-70 pb-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-5 col-lg-12">
                            <div class="area-title mb-50">
                                <h2><?= Yii::t('content','Новые продукты')?></h2>
                                <p><?= Yii::t('content','Просмотрите огромное разнообразие нашей продукции')?></p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-12">
                            <div class="product-tab mb-40">
                                <ul class="nav product-nav  justify-content-xl-end" id="myTab1" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                                            aria-selected="true">table lamp</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="product-tab-content">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                      <div class="product-slider owl-carousel">
                                          <?php foreach ($news as $new): ?>
                                      <div class="pro-item">
                                                <div class="product-wrapper mb-50">
                                                    <div class="product-img mb-25">
                                                        <a href="<?= Url::to(['product/view','id'=>$new->id])?>">
                                                          <?= \yii\helpers\Html::img('@web/upload/product/logo_product/'.$new->image) ?>
                                                        </a>
                                                        <div class="product-action text-center">
                                                            <?php  if(!Yii::$app->user->isGuest):?>
                                                            <a href="<?= \yii\helpers\Url::to(['cart/add','id'=>$new->id])?>" title="Shoppingb Cart" data-id="<?=$item->id?>">
                                                                <i class="flaticon-shopping-cart"></i>
                                                            </a>
                                                            <?php else: ?>
                                                            <a href="<?= \yii\helpers\Url::to(['/site/login'])?>"><i class="far fa-user"></i></a></li>
                                                            <?php endif; ?>
                                                            <a href="<?=  Url::to(['product/view','id'=>$new->id])?>" title="Quick View">
                                                                <i class="flaticon-eye"></i>
                                                            </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                                <i class="flaticon-compare"></i>
                                                            </a>
                                                        </div>
                                                        <div class="sale-tag">
                                                            <?php  if($new->new): ?>
                                                                <span class="new">new</span>
                                                            <?php endif; ?>
                                                            <?php  if($new->sale): ?>
                                                                <span class="sale">sale</span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-cat mb-10">
                                                            <a href="shop.html">decor, </a>
                                                            <a href="shop.html">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="<?= Url::to(['product/view','id'=>$new->id])?>"><?= $new->name?></a>
                                                        </h4>
                                                        <div class="product-meta">
                                                            <div class="pro-price">
                                                                <span>$<?= $new->price ?>USD</span>
                                                                <span class="old-price">$<?= $new->old_price ?> USD</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-wishlist">
                                                            <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                        </div>
                                                        <div class="details-cart mt-40">
                                                            <?php if(Yii::$app->user->isGuest): ?>
                                                            <a href="<?= Url::to(['/site/login']) ?>"><button class="btn btn-primary">Login</button></a>
                                                            <?php else: ?>
                                                            <a href="<?= Url::to(['/cart/add','id'=>$new->id]) ?>"><button class="btn theme-btn" data-id="<?=$new->id ?>"><?=Yii::t('common','Купить')?></button></a>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                      <?php endforeach;?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <!-- product-area end -->

    <!-- upcoming-product-area start -->
    <section class="upcoming-product-area pos-relative box-90 pt-120 pb-120"
    <?= \yii\helpers\Html::img('@web/upload/sale/'.$top_sale->saleImg->name)?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 offset-xl-6">
                    <div class="upcoming-product">
                        <div class="upc-price"><?=$top_sale->price ?>$</div>
                        <h1><a href="<?=Url::to(['product/view','id'=>$top_sale->id])?>"><?=$top_sale->name?></a></h1>
                        <ul class="upc-pro-info fix">
                            <li class="d-flex">
                                <i class="flaticon-layers"></i>
                                <div class="upc-info">
                                    <h4>Origin From</h4>
                                    <span>Sweden</span>
                                </div>
                            </li>
                            <li class="d-flex">
                                <i class="flaticon-layers"></i>
                                <div class="upc-info">
                                    <h4>Material</h4>
                                    <span>Aluminum</span>
                                </div>
                            </li>
                            <li class="d-flex">
                                <i class="flaticon-layers"></i>
                                <div class="upc-info">
                                    <h4>Designer</h4>
                                    <span>Basictheme</span>
                                </div>
                            </li>
                        </ul>
                        <div class="upc-btn">
                            <?php if(!Yii::$app->user->isGuest): ?>
                            <a class="btn theme-btn" href="<?= Url::to(['/cart/add','id'=>$top_sale->id]) ?>" data-animation="fadeInLeft" data-id="<?= $top_sale->id?>">
                                <?=Yii::t('common','Купить сейчас')?>
                            </a>
                            <?php else: ?>
                            <a href="<?= Url::to(['/site/login']) ?>"><button class="btn btn-primary">Login</button></a>
                            <?php endif; ?>
                            <a class="btn white-btn" href="<?=Url::to(['product/view','id'=>$top_sale->id])?>">
                                <?= Yii::t('common','Посмотреть товар')?>
                            </a>
                        </div>
                        <div class="event-timer">
                            <div class="mt-40" data-countdown="2022/06/20"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming-product-area end -->

    <!-- latest-blog-area start -->
    <section class="latest-blog-area pt-95 pb-60 box-90">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="area-title text-center mb-50">
                        <h2><?=Yii::t('content','Ленты новостей') ?></h2>
                        <p><?=Yii::t('content','Проверяйте каждое обновление') ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="latest-news mb-40">
                        <div class="news__thumb mb-25">

                        </div>
                        <div class="news__caption white-bg">
                            <div class="news-meta mb-15">
                                <span><i class="far fa-calendar-check"></i> Sep 15, 2018 </span>
                                <span><a href="#"><i class="far fa-user"></i> Diboli</a></span>
                                <span><a href="#"><i class="far fa-comments"></i> 23 Comments</a></span>
                            </div>
                            <h2><a href="blog-details.html">Inspiration Is Under Construction Business &
                                    Fashion 2019. In this situation we do that..</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo..</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="latest-news mb-40">
                        <div class="news__thumb mb-25">
                            <img src="/img/blog/latest/lb2.jpg" alt="">
                        </div>
                        <div class="news__caption white-bg">
                            <div class="news-meta mb-15">
                                <span><i class="far fa-calendar-check"></i> Sep 15, 2018 </span>
                                <span><a href="#"><i class="far fa-user"></i> Joly</a></span>
                                <span><a href="#"><i class="far fa-comments"></i> 23 Comments</a></span>
                            </div>
                            <h2><a href="blog-details.html">Inspiration Is Under Construction Business &
                                    Fashion 2019. In this situation we do that..</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo..</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="latest-news mb-40">
                        <div class="news__thumb mb-25">
                            <img src="/img/blog/latest/lb3.jpg" alt="">
                        </div>
                        <div class="news__caption white-bg">
                            <div class="news-meta mb-15">
                                <span><i class="far fa-calendar-check"></i> Sep 15, 2018 </span>
                                <span><a href="#"><i class="far fa-user"></i> Joly</a></span>
                                <span><a href="#"><i class="far fa-comments"></i> 23 Comments</a></span>
                            </div>
                            <h2><a href="blog-details.html">Inspiration Is Under Construction Business &
                                    Fashion 2019. In this situation we do that..</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest-blog-area end -->

    <!-- subscribe-area start -->
    <section class="subscribe-area box-105">
        <div class="subscribe-inner black-bg pt-70 pb-20">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="subscribe d-flex fix">
                            <div class="subscribe-icon">
                                <img src="/img/icon/subscribe.png" alt="">
                            </div>
                            <div class="area-title white-color mb-50">
                                <h2>Newsletter</h2>
                                <p>Subsribe here for get every single updates</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="subscribe fix">
                            <div class="subscribe-form mb-50">
                                <form action="#">
                                    <input type="text" placeholder="Enter your email address">
                                    <button class="btn btn-danger" type="submit">subscribe now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

