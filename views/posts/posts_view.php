<div class="container">

    <div class="row">
        <div class="col-lg-8">

            <h1><?=$post['post_subject'];?></h1>
            <p class="lead"><i class="fa fa-user"></i> by <?=$post['name'];?>
            </p>
            <hr>
            <p><i class="fa fa-calendar"></i> Posted on <?=$post['post_created'];?></p>
            <p><i class="fa fa-tags"></i> Tags: <?foreach ($tags as $tag):?><a href="<?=BASE_URL?>tags/view/<?=$tag['tag_id']?>"><span class="badge badge-info"><?=$tag['tag_name']?></span></a> <?endforeach?></p>

            <hr>
            <p><?=$post['post_text'];?></p>
        </div>
    </div>

</div>