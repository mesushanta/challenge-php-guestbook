<?php

    require './classes/Emoji.php';
    require './classes/PostLoader.php';
    require './classes/Post.php';

    $posts = new PostLoader();
    $emoji = new Emoji();
    $form_error = [];
    $has_error = false;
    $page = 1;
    $count = 2;
    if(isset($_POST['number_of_post']) && !empty($_POST['number_of_post'])) {
        $count = $_POST['number_of_post'];
    }
    if(isset($_GET['page'] ) && !empty($_GET['page'])) {
        $page = $_GET['page'];
    }

    $page_posts = $posts->getData($page, $count);

    if (isset($_POST['post'])){
        $post = new Post();
        if(count($post->getErrors()) == 0)
        {
            $all_posts = $posts->getAllData();
            $new_data = $post->newData();
            if($all_posts === NULL){
                $all_posts[0] = $new_data;
            } else {
                array_push($all_posts, $new_data);
            }
            var_dump($all_posts);
            $post->newPost($all_posts);
            $all_posts = $posts->getData($page, $count);
        }
        else {
            $has_error = true;
            $form_error = $post->getErrors();
        }
        $page_posts = $posts->getData($page, $count);

    }

    require './view/sub/header.php';
    require './view/post_loader.php';
    require './view/post.php';
    require './view/sub/footer.php';


