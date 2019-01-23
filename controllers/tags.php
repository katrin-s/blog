<?php
/**
 * Created by PhpStorm.
 * User: katrin.sooaar
 * Date: 23.01.2019
 * Time: 10:20
 */

namespace App;


class tags extends Controller
{
function index() {
  //  $this->tags = get_all("SELECT tag_name, COUNT(post_id) AS count FROM post_tags NATURAL JOIN tag GROUP BY tag_id");
    $this->tags = get_all("SELECT * FROM tag");
}
    function view()
    {
        $tag_id = $this->params[0];
        $this->posts = get_all( "SELECT * FROM post_tags NATURAL JOIN post WHERE tag_id='$tag_id'");
    }
}