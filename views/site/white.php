<?php
/**
 * Created by PhpStorm.
 * User: VvV
 * Date: 26.09.2017
 * Time: 0:21
 */


/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="edgtf-content">
    <div class="edgtf-content-inner">
        <div class="edgtf-title edgtf-standard-type edgtf-content-left-alignment edgtf-title-small-text-size edgtf-animation-no edgtf-title-with-border edgtf-title-with-gradient"
             style="height:150px;" data-height="150">
            <div class="edgtf-title-image"></div>
            <div class="edgtf-title-holder" style="height:150px;">
                <div class="edgtf-container clearfix">
                    <div class="edgtf-container-inner">
                        <div class="edgtf-title-subtitle-holder" style="">
                            <div class="edgtf-title-subtitle-holder-inner">
                                <h1><span><?= $meta->name ?></span></h1>
                                <div class="edgtf-breadcrumbs-holder">
                                    <div class="edgtf-breadcrumbs">
                                        <div class="edgtf-breadcrumbs-inner">
                                            <?= \app\classes\Url::crumbs(\app\classes\Url::arrayUrl(), $meta->id); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="edgtf-container">
            <div class="edgtf-container-inner">
                <div class="edgtf-two-columns-75-25 clearfix">
                    <div class="edgtf-column1 edgtf-content-left-from-sidebar">
                        <div class="edgtf-column-inner">
                            <div class="edgtf-blog-holder edgtf-blog-single">

                                        <?php
                                        foreach($content as $contentL)
                                        {
                                            if($contentL->type != 'image_top')
                                            {
                                                echo app\classes\Replacement::replacement($contentL);
                                            }

                                        }
                                        ?>
                                      <?//if(isset($content->text)){echo $content->text;}?>

                                          <?=app\classes\Admin::add($meta)?>

                            </div>
                        </div>
                    </div>
                    <div class="edgtf-column2">
                        <div class="edgtf-column-inner">
                            <aside class="edgtf-sidebar">
                                <div class="widget edgtf-latest-posts-widget"><h5 class="edgtf-widget-title">Recent
                                        Posts</h5>
                                    <div class="edgtf-blog-list-holder edgtf-image-in-box ">
                                        <ul class="edgtf-blog-list">
                                            <li class="edgtf-blog-list-item clearfix">
                                                <div class="edgtf-blog-list-item-inner">
                                                    <div class="edgtf-item-image clearfix">
                                                        <a href="http://dorian.edge-themes.com/virtual-dreamtime-3/">
                                                            <img src="http://dorian.edge-themes.com/wp-content/uploads/2016/03/b-img-virtual-dreamtime-s.jpg"
                                                                 class="attachment-full size-full wp-post-image" alt="e"
                                                                 srcset="http://dorian.edge-themes.com/wp-content/uploads/2016/03/b-img-virtual-dreamtime-s.jpg 1300w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/b-img-virtual-dreamtime-s-300x220.jpg 300w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/b-img-virtual-dreamtime-s-768x564.jpg 768w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/b-img-virtual-dreamtime-s-1024x752.jpg 1024w"
                                                                 sizes="(max-width: 1300px) 100vw, 1300px" width="1300"
                                                                 height="955">
                                                        </a>
                                                    </div>
                                                    <div class="edgtf-item-text-holder">
                                                        <h5 class="edgtf-item-title ">
                                                            <a href="http://dorian.edge-themes.com/virtual-dreamtime-3/">
                                                                Virtual Dreamtime </a>
                                                        </h5>
                                                        <div class="edgtf-item-info-section">
                                                            <div class="edgtf-post-info-date">
                                                                March 18, 2016
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="edgtf-blog-list-item clearfix">
                                                <div class="edgtf-blog-list-item-inner">
                                                    <div class="edgtf-item-image clearfix">
                                                        <a href="http://dorian.edge-themes.com/success-groove-2/">
                                                            <img src="http://dorian.edge-themes.com/wp-content/uploads/2016/03/b-img-success-groove-s.jpg"
                                                                 class="attachment-full size-full wp-post-image" alt="f"
                                                                 srcset="http://dorian.edge-themes.com/wp-content/uploads/2016/03/b-img-success-groove-s.jpg 1300w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/b-img-success-groove-s-300x220.jpg 300w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/b-img-success-groove-s-768x564.jpg 768w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/b-img-success-groove-s-1024x752.jpg 1024w"
                                                                 sizes="(max-width: 1300px) 100vw, 1300px" width="1300"
                                                                 height="955">
                                                        </a>
                                                    </div>
                                                    <div class="edgtf-item-text-holder">
                                                        <h5 class="edgtf-item-title ">
                                                            <a href="http://dorian.edge-themes.com/success-groove-2/">
                                                                Success Groove </a>
                                                        </h5>
                                                        <div class="edgtf-item-info-section">
                                                            <div class="edgtf-post-info-date">
                                                                March 18, 2016
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="edgtf-blog-list-item clearfix">
                                                <div class="edgtf-blog-list-item-inner">
                                                    <div class="edgtf-item-image clearfix">
                                                        <a href="http://dorian.edge-themes.com/lewis-howes-2/">
                                                            <img src="http://dorian.edge-themes.com/wp-content/uploads/2016/03/b-img-virtual-dreamtime-s.jpg"
                                                                 class="attachment-full size-full wp-post-image" alt="e"
                                                                 srcset="http://dorian.edge-themes.com/wp-content/uploads/2016/03/b-img-virtual-dreamtime-s.jpg 1300w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/b-img-virtual-dreamtime-s-300x220.jpg 300w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/b-img-virtual-dreamtime-s-768x564.jpg 768w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/b-img-virtual-dreamtime-s-1024x752.jpg 1024w"
                                                                 sizes="(max-width: 1300px) 100vw, 1300px" width="1300"
                                                                 height="955">
                                                        </a>
                                                    </div>
                                                    <div class="edgtf-item-text-holder">
                                                        <h5 class="edgtf-item-title ">
                                                            <a href="http://dorian.edge-themes.com/lewis-howes-2/">
                                                                Lewis Howes </a>
                                                        </h5>
                                                        <div class="edgtf-item-info-section">
                                                            <div class="edgtf-post-info-date">
                                                                March 18, 2016
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="categories-2" class="widget widget_categories"><h5 class="edgtf-widget-title">
                                        Categories</h5>
                                    <ul>
                                        <li class="cat-item cat-item-26"><a
                                                    href="http://dorian.edge-themes.com/category/art/">Art</a> (18)
                                        </li>
                                        <li class="cat-item cat-item-22"><a
                                                    href="http://dorian.edge-themes.com/category/business/">Business</a>
                                            (3)
                                        </li>
                                        <li class="cat-item cat-item-24"><a
                                                    href="http://dorian.edge-themes.com/category/design/">Design</a>
                                            (13)
                                        </li>
                                        <li class="cat-item cat-item-18"><a
                                                    href="http://dorian.edge-themes.com/category/fashion/">Fashion</a>
                                            (7)
                                        </li>
                                        <li class="cat-item cat-item-20"><a
                                                    href="http://dorian.edge-themes.com/category/photography/">Photography</a>
                                            (16)
                                        </li>
                                    </ul>
                                </div>
                                <div id="text-2" class="widget widget_text"><h5 class="edgtf-widget-title">About</h5>
                                    <div class="textwidget">Alienum phaedrum torquatos nec eu, vis detraxit periculis
                                        ex, nihil expetendis in mei. Mei an pericula euripidis,
                                        hinc partem ei est. Eos ei nisl graecis, vix aperiri
                                        consequat an.
                                    </div>
                                </div>
                                <div id="tag_cloud-2" class="widget widget_tag_cloud"><h5 class="edgtf-widget-title">
                                        Tags</h5>
                                    <div class="tagcloud"><a href="http://dorian.edge-themes.com/tag/company/"
                                                             class="tag-link-23 tag-link-position-1" title="15 topics"
                                                             style="font-size: 22pt;">Company</a>
                                        <a href="http://dorian.edge-themes.com/tag/concept/"
                                           class="tag-link-25 tag-link-position-2" title="12 topics"
                                           style="font-size: 18.4pt;">Concept</a>
                                        <a href="http://dorian.edge-themes.com/tag/creative/"
                                           class="tag-link-13 tag-link-position-3" title="6 topics"
                                           style="font-size: 8pt;">Creative</a>
                                        <a href="http://dorian.edge-themes.com/tag/event/"
                                           class="tag-link-14 tag-link-position-4" title="14 topics"
                                           style="font-size: 21.2pt;">Event</a>
                                        <a href="http://dorian.edge-themes.com/tag/lifestyle/"
                                           class="tag-link-17 tag-link-position-5" title="13 topics"
                                           style="font-size: 20pt;">Lifestyle</a>
                                        <a href="http://dorian.edge-themes.com/tag/music/"
                                           class="tag-link-15 tag-link-position-6" title="8 topics"
                                           style="font-size: 12pt;">Music</a>
                                        <a href="http://dorian.edge-themes.com/tag/popular/"
                                           class="tag-link-21 tag-link-position-7" title="13 topics"
                                           style="font-size: 20pt;">Popular</a>
                                        <a href="http://dorian.edge-themes.com/tag/trends/"
                                           class="tag-link-19 tag-link-position-8" title="15 topics"
                                           style="font-size: 22pt;">Trends</a></div>
                                </div>
                                <div id="search-2" class="widget widget_search">
                                    <form method="get" id="searchform" action="http://dorian.edge-themes.com/">
                                        <div class="edgtf-search-wrapper">
                                            <input value="" placeholder="Search" name="s" id="s" type="text">
                                            <input id="searchsubmit" value="U" type="submit">
                                        </div>
                                    </form>
                                </div>
                                <div id="text-3" class="widget widget_text">
                                    <div class="textwidget">
                                        <div class="vc_empty_space" style="height: 13px"><span
                                                    class="vc_empty_space_inner"></span></div>

                                        <img src="http://dorian.edge-themes.com/wp-content/uploads/2016/03/banner.jpg"
                                             alt="a"></div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="edgtf-container edgtf-container-bottom-navigation">
            <div class="edgtf-container-inner">
                <div class="edgtf-blog-single-navigation">
                    <div class="edgtf-blog-single-navigation-inner">
                        <div class="edgtf-blog-single-prev">
                            <a href="http://dorian.edge-themes.com/success-groove-2/" rel="prev"><span
                                        class="arrow_left"></span>Previous Post</a></div> <!-- close div.blog_prev -->
                        <div class="edgtf-blog-single-next">
                            <a href="http://dorian.edge-themes.com/lewis-howes-3/" rel="next">Next Post<span
                                        class="arrow_right"></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- close div.content_inner -->
</div>
