<?php

/** @var yii\web\View $this */

use yii\helpers\Url;


?>
<main>

    <!-- slider-area start -->
    <section class="slider-area pos-relative">
        <div class="slider-active">
            <div class="single-slider slide-1-style slide-height d-flex align-items-center" data-background="img/slider/slide1.jpg">
                <div class="shape-title bounce-animate">
                    <p class="car">Твоя первая тачка</p>
                </div>
    </section>
    <!-- slider-area end -->

    <!-- banner area start -->
<!--    <section class="banner-area pt-30 pl-15 pr-15">-->
<!--        <div class="container-fluid">-->
<!--            <div class="row">-->
<!--                --><?php // if(!empty($hits)):?>
<!--                --><?php //foreach ($hits as $hit): ?>
<!--                <div class="col-lg-4 col-md-6">-->
<!--                    <div class="banner mb-30">-->
<!--                        <a href="--><?//= Url::to(['product/view','id'=>$hit->id]) ?><!--">-->
<!--                            --><?//= \yii\helpers\Html::img("@web/img/product/{$hit->img}",['alt'=>$hit->name]) ?>
<!--                            <div class="sale-tag">-->
<!--                                --><?php // if($hit->new): ?>
<!--                                <span class="new">new</span>-->
<!--                                --><?php //endif; ?>
<!--                                --><?php // if($hit->sale): ?>
<!--                                <span class="sale">sale</span>-->
<!--                                --><?php //endif; ?>
<!--                            </div>-->
<!--                        </a>-->
<!--                        --><?//= $hit->name ?>
<!--                    </div>-->
<!--                    <div>-->
<!--                        Price :--><?//= $hit->price?><!--$-->
<!--                    </div>-->
<!--                    <div class="details-cart mt-40">-->
<!--                        <a href="--><?//= Url::to(['/cart/add','id'=>$hit->id]) ?><!--"><button class="btn theme-btn" data-id="--><?//=$hit->id ?><!--">Byu</button></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                --><?php // endforeach; ?>
<!--                --><?php // endif; ?>
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    <!-- banner area end -->

    <!-- product-area start -->
    <section class="product-area box-90 pt-70 pb-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-5 col-lg-12">
                            <div class="area-title mb-50">
                                <h2>Brand New Products</h2>
                                <p>Browse the huge variety of our products</p>
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
                                          <?php $o= $new->getImage() ?>
                                      <div class="pro-item">
                                                <div class="product-wrapper mb-50">
                                                    <div class="product-img mb-25">
                                                        <a href="<?= Url::to(['product/view','id'=>$new->id])?>">
                                                            <?= \yii\helpers\Html::img( $o->getUrl()) ?>
                                                        </a>
                                                        <div class="product-action text-center">
                                                            <a href="#" title="Shoppingb Cart">
                                                                <i class="flaticon-shopping-cart"></i>
                                                            </a>
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
                                                            <a href="product-details.html"><?= $new->name?></a>
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
                                                            <a href="<?= Url::to(['/cart/add','id'=>$new->id]) ?>"><button class="btn theme-btn" data-id="<?=$new->id ?>">Byu</button></a>
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

    <!-- top-seller-area start -->

    <!-- top-seller-area end -->

    <!-- product-area start -->
    <section class="product-area box-90 pt-45 pb-40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-lg-12">
                    <div class="area-title mb-50">
                        <h2>Best Sell Products</h2>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12">
                    <div class="product-tab mb-40">
                        <ul class="nav product-nav justify-content-xl-end" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#home1" role="tab"
                                   aria-controls="home" aria-selected="true">table lamp</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab1" data-toggle="tab" href="#profile1" role="tab"
                                   aria-controls="profile" aria-selected="false">furniture</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab6" data-toggle="tab" href="#contact1" role="tab"
                                   aria-controls="contact" aria-selected="false">chair</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab2" data-toggle="tab" href="#contact2" role="tab"
                                   aria-controls="contact" aria-selected="false">Clock</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="product-tab-content">
                        <div class="tab-content" id="myTabContent1">
                            <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">
                                <div class="product-slider owl-carousel">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="product-slider owl-carousel">
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="product-details.html">
                                                    <img src="/img/productss/pro2.jpg" alt="">
                                                    <img class="secondary-img" src="/img/productss/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">30%</span>
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="shop.html">decor, </a>
                                                    <a href="shop.html">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="product-details.html">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="product-details.html">
                                                    <img src="/img/productss/pro4.jpg" alt="">
                                                    <img class="secondary-img" src="/img/productss/pro8.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="shop.html">decor, </a>
                                                    <a href="shop.html">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="product-details.html">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="product-details.html">
                                                    <img src="/img/productss/pro3.jpg" alt="">
                                                    <img class="secondary-img" src="/img/productss/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="shop.html">decor, </a>
                                                    <a href="shop.html">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="product-details.html">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="product-details.html">
                                                    <img src="/img/productss/pro7.jpg" alt="">
                                                    <img class="secondary-img" src="/img/productss/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">60%</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="shop.html">decor, </a>
                                                    <a href="shop.html">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="product-details.html">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="product-details.html">
                                                    <img src="/img/productss/pro8.jpg" alt="">
                                                    <img class="secondary-img" src="/img/productss/pro1.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="shop.html">decor, </a>
                                                    <a href="shop.html">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="product-details.html">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="product-slider owl-carousel">
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="product-details.html">
                                                    <img src="/img/productss/pro2.jpg" alt="">
                                                    <img class="secondary-img" src="/img/productss/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">30%</span>
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="shop.html">decor, </a>
                                                    <a href="shop.html">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="product-details.html">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="product-details.html">
                                                    <img src="/img/productss/pro4.jpg" alt="">
                                                    <img class="secondary-img" src="/img/productss/pro8.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="shop.html">decor, </a>
                                                    <a href="shop.html">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="product-details.html">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="product-details.html">
                                                    <img src="/img/productss/pro3.jpg" alt="">
                                                    <img class="secondary-img" src="/img/productss/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="shop.html">decor, </a>
                                                    <a href="shop.html">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="product-details.html">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="product-details.html">
                                                    <img src="/img/productss/pro7.jpg" alt="">
                                                    <img class="secondary-img" src="/img/productss/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">60%</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="shop.html">decor, </a>
                                                    <a href="shop.html">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="product-details.html">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="product-details.html">
                                                    <img src="/img/productss/pro8.jpg" alt="">
                                                    <img class="secondary-img" src="/img/productss/pro1.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="shop.html">decor, </a>
                                                    <a href="shop.html">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="product-details.html">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab1">
                                <div class="product-slider owl-carousel">
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="product-details.html">
                                                    <img src="/img/productss/pro8.jpg" alt="">
                                                    <img class="secondary-img" src="/img/productss/pro1.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="shop.html">decor, </a>
                                                    <a href="shop.html">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="product-details.html">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="product-details.html">
                                                    <img src="/img/productss/pro3.jpg" alt="">
                                                    <img class="secondary-img" src="/img/productss/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="shop.html">decor, </a>
                                                    <a href="shop.html">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="product-details.html">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="product-details.html">
                                                    <img src="/img/productss/pro2.jpg" alt="">
                                                    <img class="secondary-img" src="/img/productss/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">30%</span>
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="shop.html">decor, </a>
                                                    <a href="shop.html">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="product-details.html">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="product-details.html">
                                                    <img src="/img/productss/pro4.jpg" alt="">
                                                    <img class="secondary-img" src="/img/productss/pro8.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="shop.html">decor, </a>
                                                    <a href="shop.html">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="product-details.html">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="product-details.html">
                                                    <img src="/img/productss/pro7.jpg" alt="">
                                                    <img class="secondary-img" src="/img/productss/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">60%</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="shop.html">decor, </a>
                                                    <a href="shop.html">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="product-details.html">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-area end -->

    <!-- upcoming-product-area start -->
    <section class="upcoming-product-area pos-relative box-90 pt-120 pb-120" data-background="img/bg/bg.jpg">
        <div class="upc-shape d-none d-xl-block">
            <div class="bakix-marker map-c1">
                <div class="bakix-map-icon">
                    <i class="flaticon-add"></i>
                </div>
                <div class="bakix-map-address">
                    <p>Lodge Flush Mount</p>
                </div>
            </div>
            <div class="bakix-marker map-c2">
                <div class="bakix-map-icon">
                    <i class="flaticon-add"></i>
                </div>
                <div class="bakix-map-address">
                    <p>Lodge Flush Mount</p>
                </div>
            </div>
            <div class="bakix-marker map-c3">
                <div class="bakix-map-address">
                    <p>Lodge Flush Mount</p>
                </div>
                <div class="bakix-map-icon">
                    <i class="flaticon-add"></i>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 offset-xl-6">
                    <div class="upcoming-product">
                        <div class="upc-price">$500.00</div>
                        <h1><a href="product-details.html">Lodge Flush Mount</a></h1>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
                        <div class="upc-btn">
                            <a class="btn theme-btn" href="shop.html" data-animation="fadeInLeft" data-delay=".7s">shop now</a>
                            <a class="btn white-btn" href="shop.html" data-animation="fadeInRight" data-delay=".9s">Details</a>
                        </div>
                        <div class="event-timer">
                            <div class="mt-40" data-countdown="2019/04/01"></div>
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
                        <h2>News Feeds</h2>
                        <p>Check it out every updates</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="latest-news mb-40">
                        <div class="news__thumb mb-25">
                            <img src="/img/blog/latest/lb1.jpg" alt="">
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
                                    <button class="btn theme-btn" type="submit">subscribe now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-area end -->
</main>

