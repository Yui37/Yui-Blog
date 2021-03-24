<?php
$url_encode=urlencode(get_permalink());
$title_encode=urlencode(get_the_title()).'｜'.get_bloginfo('name');
?>

<div class="share">
    <ul>
        <!--instagramボタン-->
        <li class="instagramlink">
            <a href="https://www.instagram.com/ui2chida/?hl=ja">
            <i class="fab fa-instagram"></i>
            </a>
        </li>
        <!--ツイートボタン-->
        <li class="tweet">
            <a href="https://twitter.com/Ui2chida">
            <i class="fab fa-twitter"></i>
            </a>
        </li>
    </ul>
</div>