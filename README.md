## phpwp01 cmswp

①functions.php は、読み込ませたいファイルを登録するだけ
②カスタムフィールドの値を表示するためにはテンプレートファイルを修正する必要がある
③achievement_imageフィールドの画像を表示するように変更する

## メインクエリ、サブクエリ概念
WP_Query を使用して achievement_banner カスタム投稿タイプの全投稿を取得。
ループ内で get_field を使用して achievement_image カスタムフィールドの値を取得し、それを <img> タグの src 属性にセット。
カスタムフィールド achievement_link が存在する場合、リンクを追加。
これで、カスタムフィールドから取得した画像が表示されるようになります。

さらに、もしachievement_image フィールドが 画像 タイプで登録されている場合、URLではなく、配列として返されることがあります。その場合は、次のように変更してください：

php
コードをコピーする
$achievement_image = get_field('achievement_image');
if ($achievement_image) {
    echo '<img src="' . esc_url($achievement_image['url']) . '" alt="' . esc_attr($achievement_image['alt']) . '">';
}
このように、フィールドがどのような形式でデータを返すかを確認し、適切に処理することが重要です。

## 描画されない場合のデバッグ用コード
<section class="sectionExample py-[80px] decoline2" id="example">
    <h1 class="text-[40px] self-center text-center text-greengreen font-semibold sectionExampleTitle mb-20">導入実績</h1>
    
    <?php
    // 使用するフィールドと取得数設定
    $args = array (
        'post_type' => 'achievement_banner',
        'posts_per_page' => -1,
    );
    $the_query = new WP_Query($args);
    if($the_query->have_posts()):
    ?>
        <ul class="example-box">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php 
                $achievement_image = get_field('achievement_image');
                if ( $achievement_image ): ?>
                    <li>
                        <?php if ( get_field('achievement_link') ): ?>
                            <a href="<?php echo esc_url(get_field('achievement_link')); ?>" target="_blank">
                        <?php endif; ?>
                            <img src="<?php echo esc_url($achievement_image['url']); ?>" alt="<?php echo esc_attr($achievement_image['alt']); ?>">
                        <?php if ( get_field('achievement_link') ): ?>
                            </a>
                        <?php endif; ?>
                    </li>
                <?php else: ?>
                    <li>No Image</li> <!-- デバッグ用: 画像がない場合に表示 -->
                <?php endif; ?>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>No posts found</p> <!-- デバッグ用: 投稿がない場合に表示 -->
    <?php endif; wp_reset_postdata(); ?>
    
    <p class="my-12 text-sm">※企業ロゴの掲載は順不同です</p> 
</section>
<section class="sectionExample py-[80px] decoline2" id="example">
    <h1 class="text-[40px] self-center text-center text-greengreen font-semibold sectionExampleTitle mb-20">導入実績</h1>
    
    <?php
    // 使用するフィールドと取得数設定
    $args = array (
        'post_type' => 'achievement_banner',
        'posts_per_page' => -1,
    );
    $the_query = new WP_Query($args);
    if($the_query->have_posts()):
    ?>
        <ul class="example-box">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php 
                // 投稿メタデータの全体を表示
                echo '<pre>';
                var_dump(get_post_meta(get_the_ID()));
                echo '</pre>';
                
                $achievement_image = get_field('achievement_image');
                if ( $achievement_image ): ?>
                    <li>
                        <?php if ( get_field('achievement_link') ): ?>
                            <a href="<?php echo esc_url(get_field('achievement_link')); ?>" target="_blank">
                        <?php endif; ?>
                            <img src="<?php echo esc_url($achievement_image['url']); ?>" alt="<?php echo esc_attr($achievement_image['alt']); ?>">
                        <?php if ( get_field('achievement_link') ): ?>
                            </a>
                        <?php endif; ?>
                    </li>
                <?php else: ?>
                    <li>No Image</li>
                <?php endif; ?>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>No posts found</p>
    <?php endif; wp_reset_postdata(); ?>
    
    <p class="my-12 text-sm">※企業ロゴの掲載は順不同です</p> 
</section>
チェック終わって正しく表示されたらエラーが出てくることもあるので、本番では削除すること
