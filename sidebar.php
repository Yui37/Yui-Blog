    <div class="sidebar column-3 column-md-3">
    <div class="side-contents" class="profile">
        <h2>About Me</h2>
        <img src="/wp-content/themes/YUI-BLOG/images/bikewithflag.jpg" alt="Yuiのホームページ" class="sidbar-bike">
        <div class="profile-contents">
        <div class="oqupation">
            <ul class="oqupation-contents">
            <li>フロントエンジニア</li>
            <li>歯科衛生士</li>
            <li>カナダワーホリ経験者</li>
            </ul>
        </div>
        <div class="hobby">
            <h4>Hobby</h4>
            <ul class="hobby-contents">
            <li>旅行（国内外）</li>
            <li>Saxophone演奏</li>
            </ul>
        </div>
        </div>
    </div>
    <div class="side-contents latest-blog">
        <h2>最近の記事</h2>
        <ul class="blog-title">
            <?php
                $newposts = array(
                    'type' => 'postbypost',
                    'limit' => 5
                    );
                wp_get_archives($newposts);
            ?>
        </ul>
    </div>
    <div class="side-contents blog-category">
        <h2>カテゴリー一覧</h2>
        <ul class="side-blog-categories">
            <?php
                // 親カテゴリーのものだけを一覧で取得
                $args = array(
                'parent' => 0,
                'orderby' => 'term_order',
                'order' => 'ASC'
                );
                $categories = get_categories( $args );
            ?>
            <?php foreach( $categories as $category ) : ?>
                <li>
                    <a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="side-contents" id="blog-list">
        <h2>月別アーカイブ</h2>
        <ul class="list-contents">
            <?php wp_get_archives(); ?>
        </ul>
    </div>
</div>