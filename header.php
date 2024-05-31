<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Kojo Test | WordPress Azure</title>
    <!-- css -->
    <link rel="stylesheet" href="./style.css">
    <!-- js -->
    <script src="https://cdn.tailwindcss.com"></script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Font,Icon -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <!------------------------------- 
        header
    -------------------------------->
    <header class="">
        <div class="header-inner flex flex-row h-[117px] bg-white w-[clac(100% - 5rem)] px-[5rem]">
            <div class="bg-white w-[100%] h-auto flex flex-row flex-wrap justify-between">
                <a href="/index.html" class="inline-flex flex-col justify-center"><img src="https://cdn.builder.io/api/v1/image/assets/TEMP/557d909dc04bad148e9166c9181b8eb8925cdf52a22fb7912f64499ff1faec6e?apiKey=38f7627b5364403abcba366dc95bc6e8&" alt="Company logo" class="shrink-0 self-end max-w-full aspect-[5.88] w-[350px]" /></a>
                <div class="header-inner-nav flex flex-col flex-wrap justify-center">
                    <div class="w-auto justify-items-end">
                        <p class="text-2xl text-orange font-bold text-end">TEL<span class=" tracking-wider font-bold pl-2 pr-1">03-xxxx-xxxx</span></p>
                        <p class="text-[0.8rem] text-orange pl-2 text-end">受付時間  10:00~18:00【土日祝定休日】</p>
                    </div>                    
                    <nav>
                        <ul class="flex flex-row gap-[30px] wrap">
                            <li><a href="#reason" target="_self" rel="noopener noreferrer">選ばれる理由</a></li>
                            <li><a href="#function" target="_self" rel="noopener noreferrer">サービス紹介</a></li>
                            <li><a href="#flow" target="_self" rel="noopener noreferrer">導入までの流れ</a></li>
                            <li><a href="#plan" target="_self" rel="noopener noreferrer">料金プラン</a></li>
                            <li><a href="#faq" target="_self" rel="noopener noreferrer">よくあるご質問</a></li>
                        </ul>
                    </nav>
                </div><br>
                <div class="hamburger-menu" id="hamburgermenu-open"><img src="./image/img_hamburger_menu.svg" alt="" class="">
                </div>
            </div>     
        </div>
        <!-- mobile hamburger menu -->
        <section class="sectionMobilenav w-[100%]">
            <div class="bg-white w-[80%] flex flex-col pb-[70px] mb-auto">
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
                <div class="w-[100%] flex flex-col items-center pb-[30px] px-[11%]">
                    <p class="text-[40px] text-[#204d47] font-bold text-[2.5rem] mobilenav-box-tel">TEL<span class=" tracking-wider font-bold pl-2 pr-1">03-xxxx-xxxx</span></p>
                    <p class="text-[#204d47] pl-2 text-end mobilenav-box-information">受付時間  10:00~18:00【土日祝定休日】</p>
                </div>
                <div class="flex flex-col items-center gap-[30px] mx-[19%]">
                    <a href="./contact.html" target="_blank" rel="noopener noreferrer"><img src="./image/btn_service_rounded.png" alt="" class="a-shadow "></a>
                    <a href="./contact.html"><img src="./image/btn_trial_rounded.png" alt="" class="a-shadow "></a>
                </div>  
            </div>   
        </section> 
    </header>

    <!------------------------------- 
        main
    -------------------------------->
    <main>