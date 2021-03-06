<?php
use yii\helpers\Url;
?>
<main>
<?php
//foreach ($customers as $item){
//    debug($item->category);
//}
//?>
    <!-- breadcrumb-area-start -->
    <section class="breadcrumb-area" data-background="img/bg/page-title.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-12"
                    <div class="breadcrumb-text text-center">
                        <h1><?= Yii::t('common','Блог')?></h1>
                        <ul class="breadcrumb-menu">
                            <li><a href="<?= Url::home()?>"><?= Yii::t('common','На главную')?></a></li>
                            <li><span><?= Yii::t('common','Блог')?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- blog-area start -->
    <div class="blog-area pt-100 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <article class="postbox post format-image mb-40">
                        <div class="postbox__thumb mb-35">
                            <?=\yii\helpers\Html::img("@web/upload/blog/{$post->image}",['alt'=>$post->name])?>
                        </div>
                        <div class="postbox__text bg-none">
                            <div class="post-meta mb-15">
                                <span><i class="far fa-calendar-check"></i> <?= $post->created_at?></span>
                                <span><i class="far fa-user"></i> <?= $post->username?></span>
                            </div>
                            <h3 class="blog-title">
                            <?= $post->name ?>
                            </h3>
                            <div class="post-text mb-20">
                                <p<?= $post->content ?></p>

                            </div>
                            <div class="row mt-50">
                                <div class="col-xl-8 col-lg-8 col-md-8 mb-15">
                                    <div class="blog-post-tag">
                                        <span>Tags</span>
                                        <?php foreach ($blog_tag as $item): ?>
                                        <a href="<?= Url::to(['tag/blog','id'=>$item->id])?>"><?=$item->name?></a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 mb-15">
                                    <div class="blog-share-icon text-left text-md-right">
                                        <span>Share: </span>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="navigation-border pt-50 mt-40"></div>
                                </div>

                            </div>
                        </div>
                        <div class="author mt-80 mb-40">
                            <div class="author-img text-center">
                                <img src="/img/blogs/details/author.png" alt="">
                            </div>
                            <div class="author-text text-center">
                                <h3>MD. Salim Rana</h3>
                                <div class="author-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance-square"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex
                                    ea commodo consequa aute irure dolor. </p>
                            </div>
                        </div>
                        <div class="post-comments">
                            <div class="blog-coment-title mb-30">
                                <h2>Comments</h2>
                            </div>
                            <div class="latest-comments">
                                <ul>
                                    <?php if(!empty($blog_cometary)):?>
                                    <?php foreach ($blog_cometary as $one): ?>
                                    <li>
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                <?=\yii\helpers\Html::img('@web/upload/blog/no-photo.png') ?>
                                            </div>
                                            <div class="comments-text">
                                                <div class="avatar-name">
                                                    <h5><?= $one->username?></h5>
                                                    <span><?= $one->created_at?></span>
                                                </div>
                                                <p><?= $one->content?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                    <?php else:?>
                                    <h4>Коментариев пока что нету</h4>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="post-comments-form">
                            <div class="post-comments-title">
                                <h2>Post Comments</h2>
                            </div>
                            <?php   $form= \yii\widgets\ActiveForm::begin()?>
                                <div class="row">
                                    <div class="col-xl-12">

                                            <?= $form->field($blog, 'content')->widget(\mihaildev\ckeditor\CKEditor::className(),[
                                                'editorOptions' => [
                                                    'preset' => 'basic', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                                                    'inline' => false, //по умолчанию false
                                                ],
                                            ])
                                            ?>

                                    </div>
                                    <div class="col-xl-12">

                                            <?= $form->field($blog,'username')?>

                                    </div>
                                    <div class="col-xl-12">

                                            <?= $form->field($blog,'email')?>

                                    </div>
                                    <div class="col-xl-12">

                                            <?= $form->field($blog,'web')?>

                                    </div>
                                    <div class="col-xl-12 text-center">
                                        <?php if(Yii::$app->user->isGuest): ?>
                                            <a href="<?= \yii\helpers\Url::to(['site/login'])?>" class="btn bg-info text-white container" >Зарегистрироваться</a>
                                        <?php else:?>
                                            <button class="btn bg-success text-white container" type="submit">Отправить контактную форму </button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php \yii\widgets\ActiveForm::end()?>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4">
                    <div class="widget mb-40">
                        <div class="widget-title-box mb-30">
                            <span class="animate-border"></span>
                            <h3 class="widget-title"><?=  Yii::t('common','Поиск по названию блога')?></h3>
                        </div>
                        <form class="search-form" method="get"  action=" <?= \yii\helpers\Url::to(['blog/search']) ?>">
                            <input type="text" name="q" placeholder="Search">
                          <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget mb-40">
                        <div class="widget-title-box mb-30">
                            <span class="animate-border"></span>
                            <h3 class="widget-title"><?=Yii::t('common','Обо мне') ?></h3>
                        </div>
                        <div class="about-me text-center">
                            <img src="/img/blogs/details/me.png" alt="">
                            <h4>Zulia Maron Duo</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore.</p>
                            <div class="widget-social-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="widget mb-40">
                        <div class="widget-title-box mb-30">
                            <span class="animate-border"></span>
                            <h3 class="widget-title"><?= Yii::t('common','Популярные каналы') ?></h3>
                        </div>
                        <ul class="recent-posts">
                            <li>
                                <div class="widget-posts-image">
                                    <a href="#"><img src="/img/blogs/details/img1.jpg" alt=""></a>
                                </div>
                                <div class="widget-posts-body">
                                    <h6 class="widget-posts-title"><a href="#">Lorem ipsum dolor sit
                                            cing elit, sed do.</a></h6>
                                    <div class="widget-posts-meta">October 18, 2018 </div>
                                </div>
                            </li>
                            <li>
                                <div class="widget-posts-image">
                                    <a href="#"><img src="/img/blogs/details/img2.jpg" alt=""></a>
                                </div>
                                <div class="widget-posts-body">
                                    <h6 class="widget-posts-title"><a href="#">Lorem ipsum dolor sit
                                            cing elit, sed do.</a></h6>
                                    <div class="widget-posts-meta">October 24, 2018 </div>
                                </div>
                            </li>
                            <li>
                                <div class="widget-posts-image">
                                    <a href="#"><img src="/img/blogs/details/img3.jpg" alt=""></a>
                                </div>
                                <div class="widget-posts-body">
                                    <h6 class="widget-posts-title"><a href="#">Lorem ipsum dolor sit
                                            cing elit, sed do.</a></h6>
                                    <div class="widget-posts-meta">October 28, 2018 </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget mb-40">
                        <div class="widget-title-box mb-30">
                            <span class="animate-border"></span>
                            <h3 class="widget-title"><?= Yii::t('common','Категории')?></h3>
                        </div>
                        <ul class="cat">
                            <?php foreach ($category as $item): ?>
                            <li>
                                <?php if(!empty($item->id)): ?>
                                <a href="<?=\yii\helpers\Url::to(['blog/category','id'=>$item->id]) ?>"><?= $item->name ?><span class="f-right"></span></a>
                                <?php else: ?>
                                <?php endif; ?>
                            </li>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                    <div class="widget mb-40">
                        <div class="widget-title-box mb-30">
                            <span class="animate-border"></span>
                            <h3 class="widget-title"><?= Yii::t('common','Социальный профиль') ?></h3>
                        </div>
                        <div class="social-profile">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>

                    <div class="widget mb-40">
                        <div class="widget-title-box mb-30">
                            <span class="animate-border"></span>
                            <h3 class="widget-title"><?= Yii::t('common','Ленты Instagram')?></h3>
                        </div>
                        <div class="tag">
                            <a href="#">Popular</a>
                            <a href="#">desgin</a>
                            <a href="#">usability</a>
                            <a href="#">develop</a>
                            <a href="#">consult</a
                            <a href="#">icon</a>
                            <a href="#">HTML</a>
                            <a href="#">ux</a>
                            <a href="#">business</a>
                            <a href="#">kit</a>
                            <a href="#">keyboard</a>
                            <a href="#">tech</a>
                        </div>
                    </div>
                    <div class="widget mb-40 p-0 b-0">
                        <div class="banner-widget">
                            <a href="#"><img src="/img/blogs/details/banner.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog-area end -->


</main>
