<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice Cream Shop </title>

    <!-- Core theme CSS (includes Bootstrap)-->
    {{-- <link href="css/styles.css" rel="stylesheet" /> --}}
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />

    <!-- 載入css&js -->
    {{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    {{-- <script src="js/bootstrap.bundle.js"></script> --}}
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>

    <!-- 自定義css -->
    {{-- <link rel="stylesheet" href="css/custom.css"> --}}
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">


    
    <!-- 載入icon -->
    <link rel="shortcut icon" href="{{asset('assets/img/ice-cream.png')}}" type="image/x-icon">

    <!-- Google font  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Roboto&display=swap" rel="stylesheet">
    <!-- Google font for icon -->
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

    
    

    

    <!-- fontawsome icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">


</head>


<body>
    <!-- 導覽列 -->
    <header id="yuchiMenu" class="bg-dark fixed-top">

        <nav class="navbar navbar-expand-md navbar-dark ">
            
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('assets/img/ice-cream.png')}}" style="width: 25px;height: 25px;" class="mb-2">
                    Ice Cream Shop</a>
                <!-- 漢堡按鈕 -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#yuchiNav">
                    <!-- icon -->
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="yuchiNav">
                    
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#yuchiRoom"><i class="fas fa-store me-2 fa-fw"></i>Ice Cream
                                Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#yuchiFacility"><i
                                    class="fas fa-ice-cream  me-2 fa-fw"></i>冰淇淋</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#yuchiFood"><i class="fas fa-info-circle  me-2 fa-fw"></i>活動</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#yuchiTrans"><i
                                    class="fas fa-map-marker-alt me-2 fa-fw"></i>門市資訊</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#yuchiContent"><i class="fas fa-envelope me-2 fa-fw"></i>聯絡我們</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">
                                <i class="fas fa-cog  fa-fw"></i>
                                管理
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>



    </header>


    <!-- 廣告輪播 -->
    <section id="yuchiSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <!-- 指示器 -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#yuchiSlider" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#yuchiSlider" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#yuchiSlider" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#yuchiSlider" data-bs-slide-to="3"></button>

        </div>

        <!-- 輪播區 -->
        <div class="carousel-inner ">
            @foreach($banners as $index => $banner)
                <div class="carousel-item vh-100 {{($index == 0) ? 'active':'' }}">
                    {{-- <img src="assets/img/new/{{$banner->img}}" class="d-block w-100 h-100"> --}}
                    <img src="{{asset('storage/'. $banner->img)}}" class="d-block w-100 h-100">
                    <div
                        class="carousel-caption d-flex flex-column justify-content-center position-absolute top-0 bottom-0  ">
                        <h1>{{$banner->title}}</h1>
                        <p class="d-none d-md-block">{{$banner->title_small}}</p>
                    </div>
                </div>
            @endforeach

            {{-- <div class="carousel-item vh-100 active">
                <img src="assets/img/new/03.jfif" class="d-block w-100 h-100">
                <div
                    class="carousel-caption d-flex flex-column justify-content-center position-absolute top-0 bottom-0  ">
                    <h1>冰淇淋 您的唯一首選</h1>
                    <p class="d-none d-md-block">忙碌的生活中 你有多久沒有好好的犒賞自己呢? 來一球冰淇淋吧.</p>
                </div>
            </div>
            <div class="carousel-item vh-100">
                <img src="assets/img/new/01.jfif" class="d-block w-100 h-100" alt="...">
                <div
                    class="carousel-caption d-flex flex-column justify-content-center position-absolute top-0 bottom-0">
                    <h1>誰不愛吃冰淇淋</h1>
                    <p class="d-none d-md-block">凡打卡者每人免費請你吃經典冰淇淋一份</p>
                </div>
            </div>
            <div class="carousel-item vh-100">
                <img src="assets/img/new/02.jfif" class="d-block w-100 h-100" alt="...">
                <div
                    class="carousel-caption d-flex flex-column justify-content-center position-absolute top-0 bottom-0">
                    
                </div>
            </div>
            <div class="carousel-item vh-100">
                <img src="assets/img/new/04.jfif" class="d-block w-100 h-100" alt="...">
                <div
                    class="carousel-caption d-flex flex-column justify-content-center position-absolute top-0 bottom-0">
                    <h1>純手工 健康美食</h1>
                    <p class="d-none d-md-block">頂級食材淬鍊而成，品嘗後讓人回味無窮</p>
                </div>
            </div> --}}
        </div>

        <!-- 控制鍵 -->
        <button class="carousel-control-prev" type="button" data-bs-target="#yuchiSlider" data-bs-slide="prev">
            <!-- 預設icon  -->
            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->

            <!-- <span class="visually-hidden">Previous</span> -->

            <!-- Google font -->
            <span class="material-icons-outlined" style="font-size:2.5rem">chevron_left</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#yuchiSlider" data-bs-slide="next">
            <!-- 預設icon -->
            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->

            <!-- <span class="visually-hidden">Next</span> -->

            <!-- Google font -->
            <span class="material-icons-outlined" style="font-size:2.5rem">chevron_right</span>
            <!-- 自定義Google Guide for css icon -->
            <!-- <span class="material-icons" style="font-size:2.5rem">chevron_right</span> -->
            <!-- <span class="yuchi-icon" style="font-size:2.5rem">chevron_right</span> -->

        </button>
    </section>


    <!-- Ice Cream section -->
    <section id="yuchiRoom" class="container py-5 padding-top">

        <header class="text-center pt-5">

            <h2 class="text-warning mb-5">Ice Cream Shop</h2>

            <nav class="nav nav-tabs justify-content-center flex-nowrap">
                <button class="mx-1 nav-link active" data-bs-toggle="tab" data-bs-target="#roomA">杯裝系列</button>
                <button class="mx-1 nav-link" data-bs-toggle="tab" data-bs-target="#roomB">冰棒系列</button>
                <button class="mx-1 nav-link" data-bs-toggle="tab" data-bs-target="#roomC">甜筒系列</button>
                <button class="mx-1 nav-link" data-bs-toggle="tab" data-bs-target="#roomRule">冰淇淋須知</button>
            </nav>

        </header>

        <article class="tab-content py-5">
            <div class="row tab-pane fade show active" id="roomA">
                <p class="  text-muted text-center">
                    {{-- 用杯子裝好裝滿，慢慢品嘗 --}}
                    {{$iceTypesCupTitles->ice_type_title}}
                </p>
                @foreach($iceTypesCups as $iceTypesCup)
                    <div class=" col-md-6 col-lg-4 mb-3">
                        <div class="card h-100">
                            <img src="{{asset('storage/'. $iceTypesCup->ice_type_img)}}" class="card-img-top" style="object-fit: cover">
                            {{-- <img src="assets/img/new/{{$iceTypesCup->ice_type_img}}" class="card-img-top" style="height: 450px;"> --}}
                            <div class="card-body">
                                <h5>{{$iceTypesCup->ice_type_imgTitle}}</h5>
                                <p class="card-text">{{$iceTypesCup->ice_type_imgContent}}<small class="text-muted float-end"></small></p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class=" col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <img src="assets/img/new/5.jfif" class="card-img-top" style="height: 450px;">
                        <div class="card-body">
                            <h5>西瓜</h5>
                            <p class="card-text">季節限定<small class="text-muted float-end"></small></p>
                        </div>
                    </div>
                </div>

                <div class=" col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <img src="assets/img/new/6.jfif" class="card-img-top" style="height: 450px;">
                        <div class="card-body">
                            <h5>抹茶</h5>
                            <p class="card-text">濃郁不苦澀<small class="text-muted float-end"></small></p>
                        </div>
                    </div>
                </div>

                <div class=" col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <img src="assets/img/new/82.jfif" class="card-img-top" style="height: 450px;">
                        <div class="card-body">
                            <h5>草莓</h5>
                            <p class="card-text">期間限定<small class="text-muted float-end"></small></p>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row tab-pane fade" id="roomB">
                <p class="text-muted text-center">
                    {{-- 傳統好滋味 --}}
                    {{$iceTypesStickTitles->ice_type_title}}
                </p>
                @foreach($iceTypesSticks as $iceTypesStick)
                    <div class=" col-md-6 col-lg-4 mb-3">
                        <div class="card h-100" >
                            <img src="{{asset('storage/'. $iceTypesStick->ice_type_img)}}" class="card-img-top" style="object-fit: cover">
                            {{-- <img src="assets/img/new/{{$iceTypesStick->ice_type_img}}" class="card-img-top" alt="..."> --}}
                            <div class="card-body">
                                <h5>{{$iceTypesStick->ice_type_imgTitle}}</h5>
                                <p class="card-text">{{$iceTypesStick->ice_type_imgContent}}<small class="text-muted float-end">夏季優惠</small></p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class=" col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <img src="assets/img/new/05.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>西瓜</h5>
                            <p class="card-text">繽紛歡樂系列<small class="text-muted float-end">夏季優惠</small></p>
                        </div>
                    </div>
                </div>

                <div class=" col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <img src="assets/img/new/06.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>芒果</h5>
                            <p class="card-text">不甜不用錢<small class="text-muted float-end">夏季優惠</small></p>
                        </div>
                    </div>
                </div> --}}

            </div>

            <div class="row tab-pane fade" id="roomC">
                <p class="text-muted text-center">
                    {{-- 喜歡餅乾殼的你絕對不能錯過 --}}
                    {{$iceTypesConeTitles->ice_type_title}}
                </p>
                @foreach($iceTypesCones as $iceTypesCone)
                    <div class=" col-md-6 col-lg-4 mb-3">
                        <div class="card h-100">
                            <img src="{{asset('storage/'. $iceTypesCone->ice_type_img)}}" class="card-img-top" style="height: 400px;">
                            {{-- <img src="assets/img/new/{{$iceTypesCone->ice_type_img}}" class="card-img-top" style="height: 400px;"> --}}
                            <div class="card-body">
                                <h5>{{$iceTypesCone->ice_type_imgTitle}}</h5>
                                <p class="card-text">{{$iceTypesCone->ice_type_imgContent}}<small class="text-muted float-end">買一送一</small></p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class=" col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <img src="assets/img/new/11.jfif" class="card-img-top" style="height: 400px;">
                        <div class="card-body">
                            <h5>蜂蜜</h5>
                            <p class="card-text">甜而不膩<small class="text-muted float-end">買一送一</small></p>
                        </div>
                    </div>
                </div>

                <div class=" col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <img src="assets/img/new/22.jfif" class="card-img-top" style="height: 400px;">
                        <div class="card-body">
                            <h5>巧克力</h5>
                            <p class="card-text">99%純巧克力<small class="text-muted float-end">買一送一</small></p>
                        </div>
                    </div>
                </div>

                <div class=" col-md-6 col-lg-4 mb-3">
                    <div class="card">

                        <img src="assets/img/new/44.jfif" class="card-img-top" style="height: 400px;">
                        <div class="card-body">
                            <h5>香草咖啡</h5>
                            <p class="card-text">烘培咖啡混搭濃郁香草<small class="text-muted float-end">買一送一</small></p>
                        </div>

                    </div>
                </div> --}}
            </div>




            <div class="row tab-pane fade" id="roomRule">
                <h3 class="text-end border-bottom border-warning">來源: 維基百科</h3>
                @foreach($iceNotes as $iceNote)
                    <h5 class="text-warning">
                        [ {{$iceNote->ice_type_imgTitle}} ]
                    </h5>
                    <p class="mb-5">
                        {{$iceNote->ice_type_imgContent}}
                    </p>
                @endforeach
                {{-- <h5 class="text-warning">
                    [ 歷史 ]
                </h5>
                <p class="mb-5">
                    在公元前300年的波斯，有人製成有玫瑰水味道的冰糕貢獻給皇室。約在公元37–68年之間，<br>
                    羅馬帝國尼祿曾命人從高山上取下冰雪，拌以水果和牛奶，製成原始的冰淇淋。裝入雪中而被凍結。<br>
                    有傳說唐代的《酉陽雜俎》中記載了如何製作冷飲的方式，流質的「酪飲」與「糖酪」，前者為飲料，後者為水果的佐料而並非主料，另有低溫凝固如小山狀之奶油類食品「酥山」，以及以牛奶或羊奶配果汁之冷飲「冰酪」等。楊萬里曾對冰酪詠詩《詠冰酪》，後來發現其正確詩名為《詠酥》。
                    <br><br>
                    傳說1533年從義大利出嫁到法國為皇后的凱薩琳·德·美第奇將冰淇淋的製備工藝帶到法國，並藉由這個技術，得到了作為冰淇淋製作者的一份終身退休金。
                    <br><br>
                    最先製造出類似現代冰淇淋的產品是路易十六的御廚。當時冰淇淋的主要原料是奶油和冰塊，故被稱為「奶油冰」。後來隨著大量使用乳清、煉乳、奶粉等其他原料後開始接近現代冰淇淋。1851年，美國馬里蘭州巴爾的摩的牛奶商人將冰淇淋工藝工業化。蛋卷冰淇淋在1904年美國聖路易斯世界博覽會上首次亮相。
                    <br><br>
                </p>
                <h5 class="text-warning">
                    [ 味道和款式 ]
                </h5>
                <p class="mb-5">
                    現時冰淇淋最主要的味道包括香草和巧克力兩種，放入任何材質內的容器食用均可。不同的國家有不同製作冰淇淋的方法，例如日本會把冰淇淋包裹在糯米粉糰內，成為雪米糍。最普遍的樣式是在製作過程中，將冰淇淋同冰棒一樣直接用一根木棍或塑料棍穿起。另一種常見食法為盛在由威化做成的圓錐形冰淇淋筒內，亦會淋上巧克力醬、果醬等。
                </p>
                <h5 class="text-warning">
                    [ 種類 ]
                </h5>
                <p class="mb-5">
                    叭噗（台式冰淇淋）：天然食材加入砂糖蜜製，加入樹薯粉混合成天然黏著濃稠劑，並不使用乳製品或油乳化，比較熱量和人工添加物，叭噗較利於健康，為台灣傳統冰品。<br><br>
                    冰餅:以兩個餅乾夾著冰淇淋的一種甜點<br><br>
                    美式冰淇淋（ice cream）<br><br>
                    雪酪（sorbet）（水果冰淇淋）<br><br>
                    霜酪（sherbet）（水果霜淇淋）<br><br>
                    義式冰淇淋（Gelato）<br><br>
                    霜淇淋（frost cream, soft cream, soft serve）<br><br>
                    土耳其冰淇淋（Dondurma）<br><br>
                </p> --}}

            </div>
        </article>
    </section>



    <!-- 冰淇淋 -->
    <section id="yuchiFacility" class="py-5">
        <header class="container text-center pt-5">
            <!-- 主題 -->
            <h2 class="text-warning py-3">冰淇淋</h2>
        </header>

        <!-- 設計內容 -->
        <article class="container text-white py-5">
            <!-- list-unstyled 取消ul樣式 "·" -->
            <!-- gy-4垂直甘特 -->
            <ul class="row list-unstyled gy-4 ">
                @foreach($iceImgs as $iceImg)
                    <li class="col-12 col-lg-6">
                        <div class="row gy-4 align-items-center">
                            <img class="col-sm-6" src="{{asset('storage/'. $iceImg->iceCream_img)}}" alt="">
                            <div class="col-sm-6">
                                <h5>
                                    {{$iceImg->iceCream_imgTitle}}
                                </h5>
                                <p class="border-bottom border-warning pb-3">
                                    {{$iceImg->iceCream_imgContent}}
                                </p>
                            </div>
                        </div>
                    </li>
                @endforeach

                {{-- <li class="col-12 col-lg-6">
                    <div class="row gy-4 align-items-center">
                        <img class="col-sm-6" src="assets/img/1 (1).jfif" alt="">
                        <div class="col-sm-6">
                            <h5>
                                繽紛水果系列
                            </h5>
                            <p class="border-bottom border-warning pb-3">
                                夏天到！ 就是要來個清爽消暑的！你喜歡什麼水果？各式雪酪（無奶）清爽上市！芒果跟菊花伯爵很搭！歡迎品嘗！
                            </p>
                        </div>
                    </div>
                </li>

                <li class="col-12 col-lg-6">
                    <div class="row gy-4 align-items-center">
                        <img class="col-sm-6" src="assets/img/1 (10).jfif" alt="">
                        <div class="col-sm-6">
                            <h5>
                                濃郁黑巧克力
                            </h5>
                            <p class="border-bottom border-warning pb-3">
                                
                                底下搭配酥脆磅蛋糕和威士忌巧克力（限量回歸)
                            </p>
                        </div>
                    </div>
                </li>

                <li class="col-12 col-lg-6">
                    
                    <div class="row gy-4 align-items-center">
                        <img class="col-sm-6" src="assets/img/1 (2).jfif" alt="">
                        <div class="col-sm-6">
                            <h5>
                                濃郁香草配上新鮮季節限定水果

                            </h5>
                            <p class="border-bottom border-warning pb-3">
                                數量有限，敬請預定
                            </p>
                        </div>
                    </div>
                </li>

                <li class="col-12 col-lg-6">
                    
                    <div class="row gy-4 align-items-center">
                        <img class="col-sm-6" src="assets/img/1 (3).jfif" alt="">
                        <div class="col-sm-6">
                            <h5>
                                楓糖餅乾<br>
                                念念不忘的榛果系列
                            </h5>
                            <p class="border-bottom border-warning pb-3">
                                就是要餅乾配冰淇淋，與紅茶提拉米蘇絕佳搭配！歡迎品嘗！
                                限時販售
                            </p>
                        </div>
                    </div>
                </li>
                
                <li class="col-12 col-lg-6">
                    
                    <div class="row gy-4 align-items-center">
                        <img class="col-sm-6" src="assets/img/1 (4).jfif" alt="">
                        <div class="col-sm-6">
                            <h5>
                                冬瓜糖口味
                            </h5>
                            <p class="border-bottom border-warning pb-3">
                                甜而不膩好滋味 限量供應！
                            </p>
                        </div>
                    </div>
                </li>

                <li class="col-12 col-lg-6">
                
                    <div class="row gy-4 align-items-center">
                        <img class="col-sm-6" src="assets/img/1 (6).jfif" alt="">
                        <div class="col-sm-6">
                            <h5>
                                蔓越莓、藍莓系列
                            </h5>
                            <p class="border-bottom border-warning pb-3">
                                含大量抗氧化物，提高免疫力，緩解眼睛疲勞、促進腸胃蠕動
                            </p>
                        </div>
                    </div>
                </li> --}}

            </ul>

        </article>
    </section>



    <!-- 活動 -->
    <section id="yuchiFood" class="container py-5">
        <header class="text-center pt-5">
            <h2 class="text-warning mb-4">活動</h2>
        </header>
        <!-- gy-4 增加垂直甘特 -->
        <article class="row py-5 gy-4">

            <!-- 分簽_列表群組+手風琴 -->
            <div class="col-lg-6 col-12 tab-content">
                @foreach($actives as $index => $active)
                <img 
                id="foodImg{{$active->id}}" 
                class="w-100 img-thumbnail  img-fluid tab-pane fade {{($index == 0 ? 'show active' : '')}}" 
                {{-- src="assets/img/{{$active->active_img}}" --}}
                src="{{asset('storage/'. $active->active_img)}}"
                
                >
                {{-- <img id="foodImg2" class="w-100 img-thumbnail  img-fluid tab-pane fade" src="assets/img/33.jfif">
                <img id="foodImg3" class="w-100 img-thumbnail  img-fluid tab-pane fade" src="assets/img/22.jfif"> --}}
                @endforeach
            </div>

            <div class="col-lg-6 list-group accordion px-3" id="foodMenu">

                @foreach($actives as $index => $active)
                <div class="accordion-item" data-bs-toggle="list" data-bs-target="{{'#foodImg'.$active->id}}">
                    
                      <button class="accordion-header accordion-button alert-warning text-warning text-decoration-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="{{'#foodText'.$active->id}}" aria-expanded="{{($index == 0 ? 'true' : '')}}" aria-controls="{{'foodText'.$active->id}}">
                        {{$active->active_title}}
                        <small class="position-absolute start-0 top-0 badge bg-danger">{{$active->active_title_small}}</small>
                      </button>
                    
                    <div id="{{'foodText'.$active->id}}" class="accordion-collapse collapse {{($index == 0 ? 'show' : '')}}"  data-bs-parent="#foodMenu">
                      <div class="accordion-body">
                        <p>
                            {{$active->active_content}}
                        </p>
                      </div>
                    </div>
                  </div>
                @endforeach

                {{-- <div class="accordion-item" data-bs-toggle="list" data-bs-target="#foodImg1">
                    <!-- 按鈕 -->
                    <a class="accordion-header accordion-button alert-warning text-warning text-decoration-none"
                        data-bs-toggle="collapse" href="#foodText1">
                        法式焦香香草冰（奶素）
                        
                        <small class="position-absolute start-0 top-0 badge bg-danger">聖誕節限定</small>
                    </a>
                    <!-- 內文 -->
                    <div id="foodText1" class="accordion-collapse collapse show " data-bs-parent="#foodMenu">
                        <div class="accordion-body">
                            <p>
                                滑順濃郁焦糖奶香與香草完美結合！歡迎試吃!
                            </p>
                            <!-- <p class="float-end text-danger"></p> -->
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-bs-toggle="list" data-bs-target="#foodImg2">
                    <!-- 按鈕 -->
                    <a class="accordion-header accordion-button alert-warning text-warning text-decoration-none collapsed"
                        data-bs-toggle="collapse" href="#foodText2">
                        復活節彩蛋主題冰
                        <small class="position-absolute start-0 top-0 badge bg-danger">復活節限定</small>
                    </a>
                    <!-- 內文 -->
                    <div id="foodText2" class="accordion-collapse collapse" data-bs-parent="#foodMenu">
                        <div class="accordion-body">
                            <p>
                                表達友誼、關愛和祝願的復活節冰
                            </p>
                            <!-- <p class="float-end text-danger"></p> -->
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-bs-toggle="list" data-bs-target="#foodImg3">
                    <!-- 按鈕 -->
                    <a class="accordion-header accordion-button alert-warning text-warning text-decoration-none collapsed"
                        data-bs-toggle="collapse" href="#foodText3">
                        薰衣草配上小菊花
                        <small class="position-absolute start-0 top-0 badge bg-danger">植物節限定</small>
                    </a>
                    <!-- 內文 -->
                    <div id="foodText3" class="accordion-collapse collapse" data-bs-parent="#foodMenu">
                        <div class="accordion-body">
                            <p>
                                好吃好看又好玩，絢麗登場
                            </p>
                            <!-- <p class="float-end text-danger"></p> -->
                        </div>
                    </div>
                </div>
            </div> --}}
        </article>
    </section>



    <!-- 資訊 -->
    <section id="yuchiTrans" class="ratio py-5">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10371.068537274776!2d121.51179510621215!3d25.282718433876095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442b68c36a81c49%3A0xa760ce3e3caf572e!2z55m95rKZ54Gj5rW35rC05rW05aC0!5e0!3m2!1szh-TW!2stw!4v1629383063990!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        
        <article class="container py-5 position-static">
            <div class="row">
                <header class="col-12 col-lg-6 text-center">
                    <h2 class="card mb-4 ">門市資訊</h2>
                </header>
                <div class="col-12"></div>
                <div class="col-12 col-lg-6">
                    
                    <div class="card">
                        <div class="card-body">
                            <strong>地址</strong>
                            <ul class="ps-4">
                                <li>253新北市石門區下員坑路999999號</li>
                            </ul>
                            <strong>營業時間</strong>
                            <ul class="ps-4">
                                <li>營業時間:12:00–20:00 (六日休息)</li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </article>



    </section>


    
    <!-- 聯絡我們 -->
    <section id="yuchiContent" class="py-5 bg-dark ">
        <div class="container pt-5">
            <header class="h2 text-warning mb-4 text-center">
                聯絡我們
            </header>

            <form class="row py-5 gy-4 text-light " action="">
                <div class="col-12 col-md-6">

                    <label for="dataUser" class="form-label">訪客姓名</label>
                    <div class="input-group">
                        <!-- 輸入姓名 -->
                        <input type="text" class="form-control" id="dataUser" name="dataUser" placeholder="Full Name"
                            required>
                        <!-- 性別 -->
                        <div class="input-group-text">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="dataSexM" name="dataSex" type="radio" value="male">
                                <label class="form-check-label" for="dataSexM">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="dataSexF" name="dataSex" type="radio"
                                    value="female">
                                <label class="form-check-label" for="dataSexF">Female</label>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-12 col-md-6">
                    <label for="dataTel" class="form-label">連絡電話</label>
                    <input type="tel" class="form-control" id="dataTel" name="dataTel" placeholder="Phone Number"
                        required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="dataMail" class="form-label">電子信箱</label>
                    <input type="email" class="form-control" id="dataMail" name="dataMail" placeholder="Email Address"
                        required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="dataQue" class="form-label">問題類型</label>
                    <select class="form-select" id="dataQue" name="dataQue">
                        <option selected>Select menu</option>
                        <option value="住宿相關">住宿相關</option>
                        <option value="婚宴訂桌">婚宴訂桌</option>
                        <option value="其他">其他</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="dataMsg" class="form-label">需求說明</label>
                    <textarea class="form-control" id="dataMsg" name="dataMsg" rows="10"
                        placeholder="Writer Your Message..."></textarea>
                </div>
                <div class="col-12 text-center">
                    <div class="form-text">請如實填寫便於信件回覆，我們保證不隨意公開您的留言資訊</div>
                    <hr>
                    <input type="submit" value="確認送出" class="btn btn-primary">
                </div>
            </form>

        </div>


    </section>


    <!-- 頁尾 -->
    <footer class="bg-dark text-muted text-center py-3">
        <small>
            Ice Cream Shop
            <br>
            copyright &copy; <span class="text-warning">Ice Cream Shop
            </span>. all right reserved
        </small>
        <div id="yuchiArrow" class="position-fixed">
            <a href="#" class="btn btn-warning text-white rounded-circle  ">
                <!-- <a href="#" class="btn btn-warning text-white rounded-circle p-2 border-0"> -->
                <i class="fas fa-angle-double-up"></i>
            </a>
        </div>
    </footer>

</body>

</html>