<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testsgcdemosite01</title>

    <!-- css -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./contact.css">
    <!-- js -->
    <script src="https://cdn.tailwindcss.com"></script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Font,Icon -->
    <link rel="icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

</head>
<body>
    <!------------------------------- 
        header
    -------------------------------->
    <header class="">
        <div class="header-inner max-md:h-[96px] px-[5rem] max-md:px-[2rem]">
            <div class="bg-white w-[100%] flex flex-row justify-between items-center">
                <a href="/index.html" class="flex flex-col justify-center"><img src="https://cdn.builder.io/api/v1/image/assets/TEMP/557d909dc04bad148e9166c9181b8eb8925cdf52a22fb7912f64499ff1faec6e?apiKey=38f7627b5364403abcba366dc95bc6e8&" alt="Company logo" class="shrink-0 self-end max-w-full aspect-[5.88] w-[350px]" /></a>
                <div class="header-inner-nav flex flex-col flex-wrap justify-center">
                    <div class="w-auto justify-items-end">
                        <p class="text-2xl text-orange font-bold text-end">TEL<span class=" tracking-wider font-bold pl-2 pr-1">03-3342-9620</span></p>
                        <p class="text-[0.8rem] text-orange pl-2 text-end">受付時間  10:00~18:00【土日祝定休日】</p>
                    </div>
                    
                    <nav>
                        <ul class="flex flex-row gap-[30px] ">
                            <li><a href="#reason" target="_self" rel="noopener noreferrer">選ばれる理由</a></li>
                            <li><a href="#function" target="_self" rel="noopener noreferrer">サービス紹介</a></li>
                            <li><a href="#flow" target="_self" rel="noopener noreferrer">導入までの流れ</a></li>
                            <li><a href="#plan" target="_self" rel="noopener noreferrer">料金プラン</a></li>
                            <li><a href="#faq" target="_self" rel="noopener noreferrer">よくあるご質問</a></li>
                        </ul>
                    </nav>
                </div>
                <br>
                <div class="hamburger-menu" id="hamburgermenu-open"><img src="./image/img_hamburger_menu.svg" alt="" class="">
                </div>
            </div>
            
        </div>
        <!-- mobile hamburger menu -->
        <section class="sectionMobilenav w-[100%]">
            <div class="bg-white w-[85%] flex flex-col pb-[70px] mb-auto h-auto">
                <button id="hamburgermenu-close" class="btn-close"><img src="./image/ico_btn_close.svg" alt=""></button>
                <div class="w-[100%] mobile-logo">
                    <img src="./image/img_logo.png" alt="">
                </div>
                <ul class="mobilenav-box">
                    <li><a href="#reason" target="_self" rel="noopener noreferrer">選ばれる理由</a></li>
                    <li><a href="#function" target="_self" rel="noopener noreferrer">サービス紹介</a></li>
                    <li><a href="#flow" target="_self" rel="noopener noreferrer">導入までの流れ</a></li>
                    <li><a href="#plan" target="_self" rel="noopener noreferrer">料金プラン</a></li>
                    <li><a href="#faq" target="_self" rel="noopener noreferrer">よくあるご質問</a></li>
                </ul>
                <div class="w-[100%] flex flex-col items-center pb-[30px] px-[2%]">
                    <p class="text-[#204d47] font-bold mobilenav-box-telnumber">TEL<span class=" tracking-wider font-bold pl-2 ">03-3342-9620</span></p>
                    <p class="text-[#204d47] text-center mobilenav-box-information">受付時間  10:00~18:00<br>【土日祝定休日】</p>
                </div>
                <div class="flex flex-col items-center gap-[30px] mx-[10%]">
                    <a href="./contact.html" target="_blank" rel="noopener noreferrer"><img src="./image/btn_service_rounded.png" alt="" class="a-shadow"></a>
                    <a href="./contact.html"><img src="./image/btn_trial_rounded.png" alt="" class="a-shadow "></a>
                </div>  
            </div>   
            
        
        
        </section>
        
    </header>

    <!-- main -->
    <main>
        <!-- セクション：申し込みフォーム案内 -->
        <section>
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



       
        <section class="contactform-grid flex flex-col"> 
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
        </section>







        <section class="contactform-grid flex flex-col"> 
            
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
            
            <h2>会社名</h2>
            <div class="required-label">必須</div>
            <input type="text" class="border border-gray-300 p-2 rounded-md input-text-width" placeholder="例：株式会社システムサポート" id="company">
            
            <h2>氏名</h2>
            <div class="required-label">必須</div>
            <input type="text" class="border border-gray-300 p-2 rounded-md input-text-width" placeholder="例：シス田 サポ郎" id="name">
            
            <h2>メールアドレス</h2>
            <div class="required-label">必須</div>
            <input type="text" class="border border-gray-300 p-2 rounded-md input-text-width" placeholder="例：×××＠×××.com" id="email">
            
            <h2>ご用件</h2>
            <div class="required-label">必須</div>
            <input type="text" class="border border-gray-300 p-2 rounded-md input-text-width" placeholder="例：03-3342-9620" id="phone">
            
            <h2>お申し込み内容</h2>
            <div></div> <!-- 空のセル -->
            <textarea class="border border-gray-300 p-2 rounded-md inputarea-text-width" placeholder="お聞きしたい事などがあればご記入ください。" id="details"></textarea>


            <div></div>
            <div></div>
            <!-- <button id="submitBtn" class="border border-gray-300 p-2 rounded-md">確認する</button> -->

            <div></div>
            <div></div>
            <div id="result"></div>
        </section>
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
    </main>

    <!-- footer -->
    <footer>
        <p class="bg-[#30554c] h-[53px] text-white text-center content-center">
            &copy;System Support Inc.
        </p>
    </footer>

    <!-- script -->
    <script src="./js/script.js"></script>
   
</body>
</html>