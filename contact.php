<?php
/*
Template Name: Contact Page
*/
get_header();
?>
<section>
  <p>テst</p>  
<?php echo do_shortcode('[contact-form-7 id="1917c30" title="コンタクトフォームテスト"]'); ?>
    <div class="contact_header brandcolor_bg">
        <div>
            <h1 class="title_03">お申し込みフォーム</h1>
        </div>
    </div>
    <!-- パンくずリスト -->
    <nav class="flex mt-2 ml-4" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="./index.html" class="inline-flex items-center text-sm hover:text-blue-600 dark:hover:text-white">
            Top
            </a>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
            >
            <span class="ms-1 text-sm">お申し込み</span>
            </div>
        </li>
        </ol>
    </nav>
    <!-- タイトルテキスト -->
    <p class="text_20_1.2 text-center">資料請求、無料トライアルは以下の電話番号<br>
        または、メールフォームよりお気軽にお申し込みください。</p>
    <br>
    <!-- 電話でのお申し込み -->
    <div class="callpattern">
        <div class="callpattern_inner brandcolor_bg">
            <p>電話でのお申し込み</p>
        </div>
        <div class="callinformation">
            <div class="flex flex-row gap-2">
                <img src="./image/ico_reason_call.png" alt="">
                <p class="call_number callinformation_text_color">03-3342-9620</p>
            </div>
            <div>
                <p class="call_time callinformation_text_color">受付時間  10:00~18:00【土日祝定休日】</p>
            </div>
        </div>
    </div>
    <br>
</section>
<!-- Form -->
<section class="contactform-grid flex flex-col"> 
    <!-- ご用件 -->
    <h2>ご用件</h2>
    <div class="required-label">必須</div>
    <div class="flex-row">
        <label class="inline-flex">
            <input type="radio" class="form-radio" name="radio-option" value="option1">
            <span class="ml-2">資料請求を希望</span>
        </label>
        <label class="inline-flex">
            <input type="radio" class="form-radio" name="radio-option" value="option2">
            <span class="ml-2">無料トライアルを希望</span>
        </label>
        <label class="inline-flex">
            <input type="radio" class="form-radio" name="radio-option" value="option3">
            <span class="ml-2">その他</span>
        </label>
    </div>
    <!-- 会社名 -->
    <h2>会社名</h2>
    <div class="required-label">必須</div>
    <input type="text" class="border border-gray-300 p-2 rounded-md input-text-width" placeholder="例：株式会社システムサポート" id="company">
    <!-- 氏名 -->
    <h2>氏名</h2>
    <div class="required-label">必須</div>
    <input type="text" class="border border-gray-300 p-2 rounded-md input-text-width" placeholder="例：シス田 サポ郎" id="name">
    <!-- メールアドレス -->
    <h2>メールアドレス</h2>
    <div class="required-label">必須</div>
    <input type="text" class="border border-gray-300 p-2 rounded-md input-text-width" placeholder="例：×××＠×××.com" id="email">
    <!-- 電話番号 -->
    <h2>電話番号</h2>
    <div class="required-label">必須</div>
    <input type="text" class="border border-gray-300 p-2 rounded-md input-text-width" placeholder="例：03-3342-9620" id="phone">
    <!-- お申し込み内容 -->
    <h2>お申し込み内容</h2>
    <div></div> <!-- 空のセル -->
    <textarea class="border border-gray-300 p-2 rounded-md inputarea-text-width" placeholder="お聞きしたい事などがあればご記入ください。" id="details"></textarea>
    <!-- id result -->
    <div id="result"></div>
</section>
<!-- 同意 -->
<section class="flex flex-col align-center justify-center content-center flex-wrap py-20">
    <div class="flex flex-row gap-[20px] justify-between w-[380px]">
        <a href="http://" target="_blank" rel="noopener noreferrer" class="about">個人情報保護方針</a>
        <a href="http://" target="_blank" rel="noopener noreferrer" class="about">個人情報の取扱について</a>
    </div>
    <label class="inline-flex justify-evenly">
        <input type="checkbox" class="form-radio ml-[30px] " name="radio-option" value="option1" onchange="toggleSubmitButton(this)">
        <span class="ml-[-1rem] consent text-[21px] py-4">個人情報保護方針に同意する</span>
    </label>
    <button type="button" id="submitBtn" class="mx-auto"><img src="./image/btn_to_confirm.png" alt="" class="to-confirm"></button>
</section>
<?php get_footer(); ?>