<?php

/**
 * @author Alexander Emelyanov
 * @date 14dec2014
 * @place Moscow, Russia
 *
 * @var $this yii\web\View
 * @var \AlexanderEmelyanov\yii\modules\articles\models\Article $article
 * @var \AlexanderEmelyanov\yii\modules\articles\models\ArticleInstance $articleInstance
 */

$this->title = $articleInstance->title;
$this->registerMetaTag(['name' => 'description', 'content' => $articleInstance->meta_description], 'meta.description');
$this->registerMetaTag(['name' => 'keywords', 'content' => $articleInstance->meta_keywords], 'meta.keywords');

?>
<div class="blog-post">
    <h1><?= $articleInstance->title ?></h1>
    <ul class="list-inline list-unstlyed post-info">
        <li><i class="fa fa-clock-o"></i> <time datetime="<?= date('Y-m-d', $articleInstance->created_at) . 'T' . date('H:i:s', $articleInstance->created_at) ?>"><?= Yii::$app->formatter->asDate($articleInstance->created_at, 'long') ?></time></li>
        <li><i class="fa fa-comment-o"></i> <a href="#">0 Comments</a></li>
    </ul>
    <img class="img-responsive post-image img-rounded" src="/img/articles/<?= $article->url_key ?>/big.jpg">

    <?= $articleInstance->full_text ?>
    <?php /*
    <div class="panel-front">
        <div class="panel-heading">
            <h2>About Author</h2>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="media about-author">
                        <a class="pull-left mr20" href="#">
                            <img src="assets/demo/avatar/avatar_06.png" class="avatar">
                        </a>
                        <div class="media-body">
                            <h3 class="mt0"><a href="#">Alexander Smith</a></h3>
                            <p class="m0">Lorem ipsum dolor sit amet consectetur adipiscing elit. Nam viverra euismod odio gravida pellentesque urna varius vitae. Sed dui lorem adipiscing in adipiscing et interdum nec metus. Mauris ultricies justo eu convallis placerat felis enim ornare nisi vitae mattis nulla ante id dui. Ut lectus purus commodo et tincidunt vel interdum sed lectus. Vestibulum adipiscing tempor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel-front">
        <div class="panel-heading">
            <h2>Comments</h2>
        </div>
        <div class="panel-body">

            <ul class="media-list comments">
                <li class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="assets/demo/avatar/avatar_07.png" alt="">
                    </a>
                    <div class="media-body">
                        <h5 class="media-heading"><a href="#" class="person">Jeremy Potter</a></h5>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                        <p><small class="time">5 days ago <a href="#" class="reply">Reply</a></small></p>

                        <!-- Nested media object -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="assets/demo/avatar/avatar_08.png" alt="">
                            </a>
                            <div class="media-body">
                                <h5 class="media-heading"><a href="#" class="person">David Tennant</a></h5>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                <p><small class="time">3 days ago <a href="#" class="reply">Reply</a></small></p>

                                <!-- Nested media object -->
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="assets/demo/avatar/avatar_05.png" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="media-heading"><a href="#" class="person">Anna Johannson</a></h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                        <p><small class="time">15 hours ago <a href="#" class="reply">Reply</a></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Nested media object -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="assets/demo/avatar/avatar_09.png" alt="">
                            </a>
                            <div class="media-body">
                                <h5 class="media-heading"><a href="#" class="person">Eric Jackson</a></h5>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                <p><small class="time">7 hours ago <a href="#" class="reply">Reply</a></small></p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </div>

    <div class="panel-front">
        <div class="panel-heading">
            <h2>Leave a Comment</h2>
        </div>
        <div class="panel-body">
            <div class="form-group mb0">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="email" placeholder="email@address.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="website" class="col-sm-3 control-label">Website</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="website" placeholder="http://">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comment" class="col-sm-3 control-label">Comment</label>
                        <div class="col-sm-9">
                            <textarea name="comment" id="" cols="30" rows="5" class="form-control fullscreen"></textarea>
                        </div>
                    </div>
                    <div class="form-group mb0">
                        <div class="col-sm-12">
                            <div class="pull-right">
                                <button class="btn btn-primary">Submit Comment</button>
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    */ ?>
</div><!--/.blog-post-->