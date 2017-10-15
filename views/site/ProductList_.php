<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\widgets\LinkPager;
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;





?>

<div class="edgtf-title edgtf-standard-type edgtf-content-left-alignment edgtf-title-small-text-size edgtf-animation-no edgtf-title-with-border edgtf-title-with-gradient"
     style="height:150px;" data-height="150">
    <div class="edgtf-title-image"></div>
    <div class="edgtf-title-holder" style="height:150px;">
        <div class="edgtf-container clearfix">
            <div class="edgtf-container-inner">
                <div class="edgtf-title-subtitle-holder" style="">
                    <div class="edgtf-title-subtitle-holder-inner">
                        <h1><span>Shop</span></h1>
                        <div class="edgtf-breadcrumbs-holder">
                            <div class="edgtf-breadcrumbs">
                                <div class="edgtf-breadcrumbs-inner"><a
                                            href="http://dorian.edge-themes.com/">Dorian</a><span
                                            class="edgtf-delimiter">&nbsp;/&nbsp;</span><span
                                            class="edgtf-current">Shop</span><span
                                            class="edgtf-current"> (Page 1)</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="edgtf-container">
    <div class="edgtf-container-inner clearfix">
        <div class="edgtf-two-columns-75-25 grid2 edgtf-woocommerce-with-sidebar clearfix">
            <div class="edgtf-column1 edgtf-content-left-from-sidebar">
                <div class="edgtf-column-inner">
                    <p class="woocommerce-result-count">
                        Showing 1&ndash;12 of 36 results</p>
                    <form class="woocommerce-ordering" method="get">
                        <select name="orderby" class="orderby">
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date" selected='selected'>Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </form>

                        <?php

                        echo \yii\widgets\ListView::widget([
                            'dataProvider' => $dataProvider,
                           //  'layout' => "{summary}\n{items}\n{pager}",
                            'layout' => "{summary}\n{items}",
                            'itemOptions' => [
                                'tag' => false,
                            ],
                            'options' => [
                                'tag' => 'ul',
                                'class' => 'products',
                                'id' => 'list-wrapper',
                            ],
                            'itemView' => '_ProductList',

                        ]);
                        ?>

                </div>
            </div>
            <div class="edgtf-column2">
                <div class="edgtf-column-inner">
                    <aside class="edgtf-sidebar">
                        <div class="widget woocommerce widget_price_filter"><h5
                                    class="edgtf-widget-title">Filter by price</h5>
                            <form method="get" action="http://dorian.edge-themes.com/shop/">
                                <div class="price_slider_wrapper">
                                    <div class="price_slider" style="display:none;"></div>
                                    <div class="price_slider_amount">
                                        <input type="text" id="min_price" name="min_price" value=""
                                               data-min="25" placeholder="Min price"/>
                                        <input type="text" id="max_price" name="max_price" value=""
                                               data-max="120" placeholder="Max price"/>
                                        <button type="submit" class="button">Filter</button>
                                        <div class="price_label" style="display:none;">
                                            Price: <span class="from"></span> &mdash; <span
                                                    class="to"></span>
                                        </div>

                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="widget woocommerce widget_recently_viewed_products"><h5
                                    class="edgtf-widget-title">Recently Viewed Products</h5>
                            <ul class="product_list_widget">
                                <li>
                                    <a href="http://dorian.edge-themes.com/product/trendy-sneakers/"
                                       title="Trendy Sneakers"
                                       class="edgtf-product-image-link-holder">
                                        <img width="214" height="214"
                                             src="http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-6-214x214.jpg"
                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                             alt="a"
                                             srcset="http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-6-214x214.jpg 214w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-6-150x150.jpg 150w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-6-300x300.jpg 300w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-6-550x550.jpg 550w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-6.jpg 660w"
                                             sizes="(max-width: 214px) 100vw, 214px"/> </a>
                                    <div class="edgtf-product-info-holder">
                                        <a href="http://dorian.edge-themes.com/product/trendy-sneakers/"
                                           title="Trendy Sneakers">
                                            <span class="product-title">Trendy Sneakers</span>
                                        </a>
                                        <del><span class="amount">&#36;50.00</span></del>
                                        <ins><span class="amount">&#36;35.00</span></ins>
                                    </div>
                                </li>

                                <li>
                                    <a href="http://dorian.edge-themes.com/product/men-sweatshirt/"
                                       title="Men Sweatshirt"
                                       class="edgtf-product-image-link-holder">
                                        <img width="214" height="214"
                                             src="http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-7-214x214.jpg"
                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                             alt="a"
                                             srcset="http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-7-214x214.jpg 214w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-7-150x150.jpg 150w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-7-300x300.jpg 300w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-7-550x550.jpg 550w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-7.jpg 660w"
                                             sizes="(max-width: 214px) 100vw, 214px"/> </a>
                                    <div class="edgtf-product-info-holder">
                                        <a href="http://dorian.edge-themes.com/product/men-sweatshirt/"
                                           title="Men Sweatshirt">
                                            <span class="product-title">Men Sweatshirt</span>
                                        </a>
                                        <span class="amount">&#36;45.00</span></div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget woocommerce widget_top_rated_products"><h5
                                    class="edgtf-widget-title">Top Rated Products</h5>
                            <ul class="product_list_widget">
                                <li>
                                    <a href="http://dorian.edge-themes.com/product/black-men-sweater/"
                                       title="Black Men Sweater"
                                       class="edgtf-product-image-link-holder">
                                        <img width="214" height="214"
                                             src="http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-10-214x214.jpg"
                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                             alt="a"
                                             srcset="http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-10-214x214.jpg 214w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-10-150x150.jpg 150w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-10-300x300.jpg 300w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-10-550x550.jpg 550w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-10.jpg 660w"
                                             sizes="(max-width: 214px) 100vw, 214px"/> </a>
                                    <div class="edgtf-product-info-holder">
                                        <a href="http://dorian.edge-themes.com/product/black-men-sweater/"
                                           title="Black Men Sweater">
                                            <span class="product-title">Black Men Sweater</span>
                                        </a>
                                        <del><span class="amount">&#36;35.00</span></del>
                                        <ins><span class="amount">&#36;30.00</span></ins>
                                        <div class="star-rating" title="Rated 4 out of 5"><span
                                                    style="width:80%"><strong
                                                        class="rating">4</strong> out of 5</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <a href="http://dorian.edge-themes.com/product/t-shirt/"
                                       title="T Shirt" class="edgtf-product-image-link-holder">
                                        <img width="214" height="214"
                                             src="http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-t-shirt-214x214.jpg"
                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                             alt="a"
                                             srcset="http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-t-shirt-214x214.jpg 214w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-t-shirt-150x150.jpg 150w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-t-shirt-300x300.jpg 300w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-t-shirt-768x768.jpg 768w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-t-shirt-1024x1024.jpg 1024w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-t-shirt-550x550.jpg 550w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-t-shirt-1000x1000.jpg 1000w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-t-shirt.jpg 1300w"
                                             sizes="(max-width: 214px) 100vw, 214px"/> </a>
                                    <div class="edgtf-product-info-holder">
                                        <a href="http://dorian.edge-themes.com/product/t-shirt/"
                                           title="T Shirt">
                                            <span class="product-title">T Shirt</span>
                                        </a>
                                        <span class="amount">&#36;25.00</span>
                                        <div class="star-rating" title="Rated 5 out of 5"><span
                                                    style="width:100%"><strong
                                                        class="rating">5</strong> out of 5</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <a href="http://dorian.edge-themes.com/product/sweatshirt/"
                                       title="Sweatshirt" class="edgtf-product-image-link-holder">
                                        <img width="214" height="214"
                                             src="http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-sweatshirt-214x214.jpg"
                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                             alt="a"
                                             srcset="http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-sweatshirt-214x214.jpg 214w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-sweatshirt-150x150.jpg 150w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-sweatshirt-300x300.jpg 300w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-sweatshirt-768x768.jpg 768w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-sweatshirt-1024x1024.jpg 1024w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-sweatshirt-550x550.jpg 550w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-sweatshirt-1000x1000.jpg 1000w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/shop-image-sweatshirt.jpg 1300w"
                                             sizes="(max-width: 214px) 100vw, 214px"/> </a>
                                    <div class="edgtf-product-info-holder">
                                        <a href="http://dorian.edge-themes.com/product/sweatshirt/"
                                           title="Sweatshirt">
                                            <span class="product-title">Sweatshirt</span>
                                        </a>
                                        <span class="amount">&#36;43.00</span>
                                        <div class="star-rating" title="Rated 5 out of 5"><span
                                                    style="width:100%"><strong
                                                        class="rating">5</strong> out of 5</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget woocommerce widget_product_tag_cloud"><h5
                                    class="edgtf-widget-title">Product Tags</h5>
                            <div class="tagcloud"><a
                                        href='http://dorian.edge-themes.com/product-tag/basic/'
                                        class='tag-link-50 tag-link-position-1' title='13 topics'
                                        style='font-size: 22pt;'>Basic</a>
                                <a href='http://dorian.edge-themes.com/product-tag/cotton/'
                                   class='tag-link-55 tag-link-position-2' title='4 topics'
                                   style='font-size: 12.597014925373pt;'>Cotton</a>
                                <a href='http://dorian.edge-themes.com/product-tag/design/'
                                   class='tag-link-58 tag-link-position-3' title='8 topics'
                                   style='font-size: 17.820895522388pt;'>Design</a>
                                <a href='http://dorian.edge-themes.com/product-tag/gray/'
                                   class='tag-link-51 tag-link-position-4' title='3 topics'
                                   style='font-size: 10.507462686567pt;'>Gray</a>
                                <a href='http://dorian.edge-themes.com/product-tag/men/'
                                   class='tag-link-56 tag-link-position-5' title='2 topics'
                                   style='font-size: 8pt;'>Men</a>
                                <a href='http://dorian.edge-themes.com/product-tag/trend/'
                                   class='tag-link-57 tag-link-position-6' title='6 topics'
                                   style='font-size: 15.731343283582pt;'>Trend</a></div>
                        </div>
                        <div class="widget woocommerce widget_product_search">
                            <form role="search" method="get"
                                  class="woocommerce-product-search edgtf-product-search"
                                  action="http://dorian.edge-themes.com/">
                                <label class="screen-reader-text"
                                       for="woocommerce-product-search-field">Search</label>
                                <input type="search" id="woocommerce-product-search-field"
                                       class="search-field" placeholder="Search" value="" name="s"
                                       title="Search"/>
                                <input type="submit" class="edgtf-product-search-form"
                                       value="&#x55;"/>
                                <input type="hidden" name="post_type" value="product"/>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
        </div>

    </div>
</div>
<nav class="woocommerce-pagination">
<!--    <div class="edgtf-woocommerce-pagination-inner">-->
        <?php

//        echo \yii\widgets\ListView::widget([
//                    'dataProvider' => $dataProvider,
//                    'layout' => "{pager}",
//                    'itemOptions' => [
//                       // 'tag' => false,
//                    ],
//  http://dorianyii/pubspancation/contact/product.html?page=2
//  http://dorianyii/publication/contact/product.html?page=1
//                ]);

        // отображаем постраничную разбивку

       echo  $page = \app\widgets\DorianPager::widget([


            'pagination' => $pages,
            //'pageCssClass' => 'page-numbers',
            'linkOptions' => ['class'=>'page-numbers'],
            'options' => [

                'class' => ' edgtf-woocommerce-pagination-inner',
                'id' => 'list-wrapper',
            ],

        ]);

       //echo str_replace(array('<ul','</ul','<li', '</li'),array('<div','</div','<span','</span'), $page);


        ?>
        <style>
            .page-numbers{ margin: 0px 7px 0px 7px}
        </style>
<!--        <span class='page-numbers current'>1</span>-->
<!--        <a class='page-numbers' href='http://dorian.edge-themes.com/shop/page/2/'>2</a>-->
<!--        <a class='page-numbers' href='http://dorian.edge-themes.com/shop/page/3/'>3</a>-->
<!--        <a class="next page-numbers" href="http://dorian.edge-themes.com/shop/page/2/">Next-->
<!--            Page<span class="arrow_right"></span></a>-->
<!--    </div>-->
</nav>


