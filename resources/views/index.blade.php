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

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- JQ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"></script>
    
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

    <!-- animation 網站動畫 -->
    <link rel="stylesheet" href="{{asset('css/animation.css')}}">

</head>


<body>
    <!-- animation 網站動畫 -->
    <div class="animation">
        <div class="logo">

            {{-- 1-I --}}
            <svg width="30" height="123" viewBox="0 0 30 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_2_9)">
                <path 
                d="M23.0454 5.90909V3.40909H20.5454H9.27271H6.77271V5.90909V99V101.5H9.27271H20.5454H23.0454V99V5.90909Z" 
                stroke="white" 
                stroke-width="5" 
                shape-rendering="crispEdges"
                id="first"
                class="thePaths"
                />
                </g>
                <defs>
                <filter id="filter0_d_2_9" x="0.272705" y="0.909088" width="29.2727" height="122.091" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="15"/>
                <feGaussianBlur stdDeviation="2"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_9"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_9" result="shape"/>
                </filter>
                </defs>
            </svg>
            
            {{-- 2-C --}}
            <svg width="90" height="124" viewBox="0 0 90 124" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_5_6)">
                <path d="M67.5 66.5625H65.3616L65.0302 68.6751C64.3953 72.7226 63.3385 76.0965 61.9075 78.8457L61.9012 78.8577L61.8951 78.8698C60.5882 81.4482 58.6665 83.4089 56.072 84.795C53.5265 86.1549 49.8985 86.9375 45 86.9375C41.312 86.9375 38.2549 86.1805 35.7387 84.7659C33.139 83.2623 30.9919 81.2117 29.2856 78.5781C27.5432 75.8887 26.2076 72.7213 25.3064 69.043C24.4397 65.3355 24 61.3447 24 57.0625V47.875C24 43.2188 24.502 39.041 25.4802 35.3237C26.4557 31.6167 27.8778 28.5151 29.7088 25.9713C31.5649 23.4498 33.8239 21.5277 36.4991 20.1705C39.1789 18.832 42.345 18.125 46.0625 18.125C50.5016 18.125 53.8425 18.9144 56.2597 20.2956C58.7418 21.714 60.6566 23.7251 62.0261 26.392L62.026 26.392L62.0325 26.4043C63.4547 29.1366 64.4695 32.4933 65.0232 36.5275L65.3197 38.6875H67.5H79.5H82.2739L81.9865 35.9285C81.3304 29.6297 79.5932 24.0097 76.7252 19.1208C73.8646 14.131 69.8373 10.2258 64.6944 7.42879C59.4916 4.59916 53.244 3.25 46.0625 3.25C40.1373 3.25 34.7217 4.30455 29.8597 6.46547C25.0252 8.61411 20.8718 11.6892 17.4219 15.6768L17.4166 15.6829L17.4113 15.689C14.0084 19.6741 11.4219 24.4287 9.62452 29.9083L9.62449 29.9083L9.62073 29.92C7.86153 35.3735 7 41.4087 7 48V57.0625C7 63.6543 7.86164 69.7079 9.61894 75.1994L9.62261 75.2109L9.62638 75.2223C11.4225 80.6545 13.9845 85.3812 17.3382 89.361L17.3473 89.3716C20.7047 93.311 24.7247 96.3668 29.3898 98.5199L29.3981 98.5237C34.1332 100.688 39.3472 101.75 45 101.75C52.5788 101.75 59.0988 100.387 64.4352 97.5137L64.4425 97.5098L64.4498 97.5058C69.6987 94.6346 73.8099 90.7192 76.7184 85.7658C79.5809 80.8905 81.3259 75.3993 81.9854 69.3326L82.2865 66.5625H79.5H67.5Z" 
                stroke="white" 
                stroke-width="5" 
                shape-rendering="crispEdges"
                id="second"
                class="thePaths"
                />
                </g>
                <defs>
                <filter id="filter0_d_5_6" x="0.5" y="0.75" width="88.5729" height="122.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="15"/>
                <feGaussianBlur stdDeviation="2"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5_6"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5_6" result="shape"/>
                </filter>
                </defs>
            </svg>
                
                
                
                

            {{-- 3-E --}}
            <svg width="78" height="124" viewBox="0 0 78 124" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_31_1200)">
                <path d="M7.77271 99V101.5H10.2727H67.1818H69.6818V99V89V86.5H67.1818H24.0454V59.8636H63.5454H66.0454V57.3636V47.3636V44.8636H63.5454H24.0454V18.4091H66.4545H68.9545V15.9091V5.90906V3.40906H66.4545H10.2727H7.77271V5.90906V99Z" 
                stroke="white" 
                stroke-width="5" 
                shape-rendering="crispEdges"
                id="third"
                class="thePaths"
                />
                </g>
                <defs>
                <filter id="filter0_d_31_1200" x="0.272705" y="0.909058" width="76.9091" height="123.091" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="15"/>
                <feGaussianBlur stdDeviation="2.5"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_31_1200"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_31_1200" result="shape"/>
                </filter>
                </defs>
            </svg>

            {{-- 4-C --}}
            <svg width="90" height="124" viewBox="0 0 90 124" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_5_6)">
                <path d="M67.5 66.5625H65.3616L65.0302 68.6751C64.3953 72.7226 63.3385 76.0965 61.9075 78.8457L61.9012 78.8577L61.8951 78.8698C60.5882 81.4482 58.6665 83.4089 56.072 84.795C53.5265 86.1549 49.8985 86.9375 45 86.9375C41.312 86.9375 38.2549 86.1805 35.7387 84.7659C33.139 83.2623 30.9919 81.2117 29.2856 78.5781C27.5432 75.8887 26.2076 72.7213 25.3064 69.043C24.4397 65.3355 24 61.3447 24 57.0625V47.875C24 43.2188 24.502 39.041 25.4802 35.3237C26.4557 31.6167 27.8778 28.5151 29.7088 25.9713C31.5649 23.4498 33.8239 21.5277 36.4991 20.1705C39.1789 18.832 42.345 18.125 46.0625 18.125C50.5016 18.125 53.8425 18.9144 56.2597 20.2956C58.7418 21.714 60.6566 23.7251 62.0261 26.392L62.026 26.392L62.0325 26.4043C63.4547 29.1366 64.4695 32.4933 65.0232 36.5275L65.3197 38.6875H67.5H79.5H82.2739L81.9865 35.9285C81.3304 29.6297 79.5932 24.0097 76.7252 19.1208C73.8646 14.131 69.8373 10.2258 64.6944 7.42879C59.4916 4.59916 53.244 3.25 46.0625 3.25C40.1373 3.25 34.7217 4.30455 29.8597 6.46547C25.0252 8.61411 20.8718 11.6892 17.4219 15.6768L17.4166 15.6829L17.4113 15.689C14.0084 19.6741 11.4219 24.4287 9.62452 29.9083L9.62449 29.9083L9.62073 29.92C7.86153 35.3735 7 41.4087 7 48V57.0625C7 63.6543 7.86164 69.7079 9.61894 75.1994L9.62261 75.2109L9.62638 75.2223C11.4225 80.6545 13.9845 85.3812 17.3382 89.361L17.3473 89.3716C20.7047 93.311 24.7247 96.3668 29.3898 98.5199L29.3981 98.5237C34.1332 100.688 39.3472 101.75 45 101.75C52.5788 101.75 59.0988 100.387 64.4352 97.5137L64.4425 97.5098L64.4498 97.5058C69.6987 94.6346 73.8099 90.7192 76.7184 85.7658C79.5809 80.8905 81.3259 75.3993 81.9854 69.3326L82.2865 66.5625H79.5H67.5Z" 
                stroke="white" 
                stroke-width="5" 
                shape-rendering="crispEdges"
                id="fourth"
                class="thePaths"
                />
                </g>
                <defs>
                <filter id="filter0_d_5_6" x="0.5" y="0.75" width="88.5729" height="122.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="15"/>
                <feGaussianBlur stdDeviation="2"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5_6"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5_6" result="shape"/>
                </filter>
                </defs>
            </svg>
                
                
                
            {{-- 5-R --}}
            <svg width="91" height="124" viewBox="0 0 91 124" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_31_1198)">
                <path d="M7.77271 99V101.5H10.2727H21.5454H24.0454V99V65.1363H41.9091C42.2108 65.1363 42.5106 65.1343 42.8087 65.1303L61.7085 100.186L62.4167 101.5H63.9091H77H81.2201L79.1925 97.7988L59.5248 61.8974C59.9681 61.6969 60.4028 61.4867 60.8288 61.2668L60.8288 61.2668L60.8402 61.2608C65.8827 58.6243 69.7098 54.9441 72.2102 50.2137C74.6686 45.5627 75.8636 40.2878 75.8636 34.4545C75.8636 28.6204 74.6684 23.3213 72.217 18.6174C69.7197 13.8253 65.8792 10.0965 60.8058 7.42672C55.6682 4.69264 49.2609 3.40906 41.7273 3.40906H10.2727H7.77271V5.90906V99ZM41.5454 49.9545H24.0454V18.4091H41.3636C46.1714 18.4091 49.7867 19.1529 52.3731 20.4589L52.382 20.4633L52.3908 20.4677C55.013 21.7658 56.8187 23.5459 57.9457 25.7998C59.1353 28.179 59.7727 31.0401 59.7727 34.4545C59.7727 37.872 59.1343 40.6727 57.9609 42.943L57.9559 42.9527C56.8753 45.0658 55.1045 46.7638 52.4723 48.0147L52.4636 48.0189C49.8931 49.2527 46.3052 49.9545 41.5454 49.9545Z" 
                stroke="white" 
                stroke-width="5" 
                shape-rendering="crispEdges"
                id="fifth"
                class="thePaths"
                />
                </g>
                <defs>
                <filter id="filter0_d_31_1198" x="0.272705" y="0.909058" width="90.1675" height="123.091" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="15"/>
                <feGaussianBlur stdDeviation="2.5"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_31_1198"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_31_1198" result="shape"/>
                </filter>
                </defs>
            </svg>

            {{-- 6-E --}}
            <svg width="78" height="124" viewBox="0 0 78 124" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_31_1200)">
                <path d="M7.77271 99V101.5H10.2727H67.1818H69.6818V99V89V86.5H67.1818H24.0454V59.8636H63.5454H66.0454V57.3636V47.3636V44.8636H63.5454H24.0454V18.4091H66.4545H68.9545V15.9091V5.90906V3.40906H66.4545H10.2727H7.77271V5.90906V99Z" 
                stroke="white" 
                stroke-width="5" 
                shape-rendering="crispEdges"
                id="sixth"
                class="thePaths"
                />
                </g>
                <defs>
                <filter id="filter0_d_31_1200" x="0.272705" y="0.909058" width="76.9091" height="123.091" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="15"/>
                <feGaussianBlur stdDeviation="2.5"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_31_1200"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_31_1200" result="shape"/>
                </filter>
                </defs>
            </svg>

            {{-- 7-A --}}
            <svg width="105" height="124" viewBox="0 0 105 124" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_31_1192)">
                <path d="M24.0909 101.5H25.8563L26.4468 99.8363L35.215 75.1363H69.3304L78.0986 99.8363L78.6891 101.5H80.4545H92.2727H95.8539L94.6195 98.1383L60.4377 5.04734L59.8361 3.40906H58.0909H46.4545H44.7093L44.1077 5.04734L9.92591 98.1383L8.69153 101.5H12.2727H24.0909ZM52.2727 27.085L64.0055 60.1363H40.5399L52.2727 27.085Z" 
                stroke="white" 
                stroke-width="5" 
                shape-rendering="crispEdges"
                id="seventh"
                class="thePaths"
                />
                </g>
                <defs>
                <filter id="filter0_d_31_1192" x="0.110352" y="0.909058" width="104.325" height="123.091" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="15"/>
                <feGaussianBlur stdDeviation="2.5"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_31_1192"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_31_1192" result="shape"/>
                </filter>
                </defs>
            </svg>
            
            {{-- 8-M --}}
            <svg width="112" height="124" viewBox="0 0 112 124" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_32_1206)">
                <path d="M10.2727 3.40906H7.77271V5.90906V99V101.5H10.2727H20.8182H23.3182V99V38.7128L48.5061 99.951L49.1432 101.5H50.8182H61H62.6749L63.312 99.951L88.5 38.7128V99V101.5H91H101.545H104.045V99V5.90906V3.40906H101.545H88.0909H86.413L85.7773 4.96184L55.9091 77.9158L26.0409 4.96184L25.4051 3.40906H23.7273H10.2727Z" 
                stroke="white" 
                stroke-width="5" 
                shape-rendering="crispEdges"
                id="eighth"
                class="thePaths"
                />
                </g>
                <defs>
                <filter id="filter0_d_32_1206" x="0.272705" y="0.909058" width="111.273" height="123.091" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="15"/>
                <feGaussianBlur stdDeviation="2.5"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_32_1206"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_32_1206" result="shape"/>
                </filter>
                </defs>
            </svg>
            
        </div>
        <div class="logo"> 
            {{-- 9-S --}}
            <svg width="89" height="126" viewBox="0 0 89 126" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_30_1184)">
                <path 
                d="M63.4264 29.8395L63.6877 32.0455H65.9091H76.8182H79.4001L79.3169 29.4649C79.1493 24.2696 77.5292 19.5788 74.4625 15.4652C71.4556 11.3911 67.408 8.22964 62.4042 5.9541C57.3603 3.62989 51.6623 2.5 45.3636 2.5C39.1138 2.5 33.3784 3.64924 28.1993 5.99383C23.0512 8.30782 18.8777 11.6022 15.7522 15.8913L15.7502 15.8941C12.5943 20.2377 11.0455 25.3084 11.0455 31C11.0455 37.9031 13.4112 43.6737 18.2222 48.0723L19.8231 46.3213L18.2222 48.0723C22.8246 52.2803 28.9603 55.4194 36.4911 57.5845L36.495 57.5856L47.9496 60.8584L47.9584 60.8609L47.9673 60.8633C51.1427 61.7454 54.0806 62.7698 56.785 63.9329C59.3275 65.0265 61.28 66.4051 62.724 68.0264C63.9685 69.4237 64.6818 71.3083 64.6818 73.9091C64.6818 76.7695 63.8538 79.1868 62.2204 81.2681C60.5238 83.3995 58.1816 85.1297 55.0945 86.4152C52.0164 87.6668 48.483 88.3182 44.4545 88.3182C41.0118 88.3182 37.8356 87.8116 34.9083 86.8192C32.0882 85.8233 29.8179 84.3463 28.0335 82.4111C26.3906 80.5692 25.3899 78.1975 25.1271 75.1489L24.9301 72.8636H22.6364H11H8.31506L8.50635 75.5418C8.90021 81.0558 10.6022 85.9758 13.6496 90.2289L13.6572 90.2394C16.733 94.4853 20.9186 97.7487 26.1223 100.058L26.1276 100.06C31.3932 102.382 37.5248 103.5 44.4545 103.5C51.874 103.5 58.3393 102.259 63.7588 99.6652C69.1403 97.1036 73.3424 93.5904 76.2368 89.0831C79.1445 84.6023 80.5909 79.5823 80.5909 74.0909C80.5909 69.3881 79.6262 65.2383 77.5566 61.7656C75.5961 58.4758 73.0851 55.7553 70.0269 53.6353C67.1356 51.5809 64.0859 49.9495 60.8796 48.7508C57.8532 47.6082 55.0754 46.7014 52.5513 46.0384C52.5488 46.0378 52.5463 46.0371 52.5438 46.0365L43.1045 43.4951L43.0976 43.4932L43.0908 43.4914C41.4465 43.0587 39.624 42.4912 37.6203 41.7844C35.725 41.0864 33.913 40.2084 32.1825 39.1489C30.5924 38.1465 29.3069 36.9196 28.2997 35.4651C27.4374 34.1516 26.9545 32.5188 26.9545 30.4545C26.9545 28.0003 27.6432 25.8697 29.0156 23.979C30.4442 22.0525 32.4622 20.4768 35.1761 19.2938C37.8918 18.1231 41.1469 17.5 45 17.5C50.2547 17.5 54.51 18.6829 57.9011 20.9083C61.1626 23.0487 62.9679 25.967 63.4264 29.8395Z" 
                stroke="white" 
                stroke-width="5" 
                shape-rendering="crispEdges"
                id="ninth"
                class="thePaths"
                />
                </g>
                <defs>
                <filter id="filter0_d_30_1184" x="0.630127" y="0" width="87.4608" height="126" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="15"/>
                <feGaussianBlur stdDeviation="2.5"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_30_1184"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_30_1184" result="shape"/>
                </filter>
                </defs>
            </svg>

            {{-- 10-H --}}
            <svg width="91" height="123" viewBox="0 0 91 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_6_8)">
                <path d="M6.77274 99V101.5H9.27274H20.5455H23.0455V99V59.8636H67.6818V99V101.5H70.1818H81.4546H83.9546V99V5.90909V3.40909H81.4546H70.1818H67.6818V5.90909V44.8636H23.0455V5.90909V3.40909H20.5455H9.27274H6.77274V5.90909V99Z" 
                stroke="white" 
                stroke-width="5" 
                shape-rendering="crispEdges"
                id="tenth"
                class="thePaths"
                />
                </g>
                <defs>
                <filter id="filter0_d_6_8" x="0.272736" y="0.909088" width="90.1818" height="122.091" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="15"/>
                <feGaussianBlur stdDeviation="2"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6_8"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6_8" result="shape"/>
                </filter>
                </defs>
            </svg>
                
            {{-- 11-O --}}
            <svg width="101" height="126" viewBox="0 0 101 126" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_6_10)">
                <path d="M64.6724 22.573L64.6788 22.5769C68.7968 25.1405 72.1198 28.9491 74.6106 34.1289L74.6154 34.1388C77.1039 39.2556 78.4091 45.661 78.4091 53.4545C78.4091 61.2481 77.1039 67.6535 74.6154 72.7702L74.6106 72.7802C72.1198 77.96 68.7968 81.7686 64.6788 84.3322L64.6725 84.3361C60.5455 86.9223 55.919 88.2273 50.7273 88.2273C45.537 88.2273 40.8936 86.923 36.7339 84.3344C32.6443 81.7708 29.3185 77.96 26.7959 72.7748C24.3357 67.6562 23.0454 61.2488 23.0454 53.4545C23.0454 45.66 24.3358 39.2525 26.7961 34.1338C29.3187 28.9489 32.6444 25.1382 36.7339 22.5747C40.8936 19.986 45.537 18.6818 50.7273 18.6818C55.919 18.6818 60.5455 19.9867 64.6724 22.573ZM88.7398 80.0195C92.4912 72.4526 94.3182 63.571 94.3182 53.4545C94.3182 43.3381 92.4912 34.4565 88.7398 26.8896C85.0093 19.3647 79.8467 13.4836 73.2378 9.33688C66.623 5.1864 59.0938 3.13635 50.7273 3.13635C42.3607 3.13635 34.8315 5.1864 28.2167 9.33688C21.6078 13.4836 16.4452 19.3647 12.7147 26.8896C8.96327 34.4565 7.13635 43.3381 7.13635 53.4545C7.13635 63.571 8.96327 72.4526 12.7147 80.0195C16.4452 87.5443 21.6078 93.4254 28.2167 97.5722C34.8315 101.723 42.3607 103.773 50.7273 103.773C59.0938 103.773 66.623 101.723 73.2378 97.5722C79.8467 93.4254 85.0093 87.5443 88.7398 80.0195Z" 
                stroke="white" 
                stroke-width="5" 
                shape-rendering="crispEdges"
                id="eleventh"
                class="thePaths"
                />
                </g>
                <defs>
                <filter id="filter0_d_6_10" x="0.636353" y="0.636353" width="100.182" height="124.636" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="15"/>
                <feGaussianBlur stdDeviation="2"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6_10"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6_10" result="shape"/>
                </filter>
                </defs>
                </svg>
                
            {{-- 12-P --}}
            <svg width="82" height="123" viewBox="0 0 82 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_6_12)">
                <path d="M6.77271 99V101.5H9.27271H20.5454H23.0454V99V67.5H40.9091C48.436 67.5 54.8389 66.1324 59.963 63.2187L59.963 63.2187L59.9737 63.2126C65.0063 60.318 68.792 56.3883 71.239 51.4303C73.6688 46.5682 74.8636 41.1972 74.8636 35.3636C74.8636 29.528 73.6679 24.1674 71.233 19.3304C68.7509 14.3999 64.9295 10.5165 59.8637 7.68565C54.7383 4.77367 48.3064 3.40909 40.7273 3.40909H9.27271H6.77271V5.90909V99ZM40.5454 52.5H23.0454V18.4091H40.3636C45.1771 18.4091 48.7725 19.2212 51.3332 20.641L51.3415 20.6456L51.3498 20.6501C53.9774 22.081 55.7933 24.0001 56.914 26.4157L56.9184 26.4253L56.9229 26.4348C58.1365 28.9939 58.7727 31.9529 58.7727 35.3636C58.7727 38.7738 58.1367 41.7521 56.9187 44.3468L56.914 44.357C55.7859 46.7885 53.9683 48.7464 51.3529 50.2371C48.8284 51.6761 45.2883 52.5 40.5454 52.5Z" 
                stroke="white" 
                stroke-width="5" 
                shape-rendering="crispEdges"
                id="twelfth"
                class="thePaths"
                />
                </g>
                <defs>
                <filter id="filter0_d_6_12" x="0.272705" y="0.909088" width="81.0909" height="122.091" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="15"/>
                <feGaussianBlur stdDeviation="2"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6_12"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6_12" result="shape"/>
                </filter>
                </defs>
                </svg>
                
        </div>  
    </div>
    <script src="{{asset('js/animation.js')}}"></script>



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
            {{-- <button type="button" data-bs-target="#yuchiSlider" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#yuchiSlider" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#yuchiSlider" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#yuchiSlider" data-bs-slide-to="3"></button> --}}
            @foreach($banners as $index => $banner)
                <button 
                type="button" 
                data-bs-target="#yuchiSlider" 
                data-bs-slide-to="{{$index}}" 
                class="{{($index == 0) ? 'active':'' }}">
            </button>
            @endforeach
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
            <ul class="row list-unstyled gy-4">
                @foreach($iceImgs as $index => $iceImg)
                    <li 
                    class="col-12 col-lg-6"
                    data-aos="fade-top" >
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

                    <label for="dataUser" class="form-label">姓名</label>
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
                        <option value="住宿相關">訂購相關</option>
                        <option value="婚宴訂桌">活動相關</option>
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
    <script>
        //scroll to id
        $("#yuchiMenu a, #yuchiArrow a").click(function () {
          const
            who = $(this).attr('href'),
            val = $(who).offset().top - $("#yuchiMenu").innerHeight();
          $("html").animate({ scrollTop: val }, 1000);
        });
    
        //scroll spy
        const spy = function () {
          const nowat = $(window).scrollTop();
          $("section").each((i, e) => {
            // console.log(i,e);
            const
              id = $(e).attr('id'),
              offset = $(e).offset().top - $("#yuchiMenu").innerHeight() - 1,
              height = $(e).innerHeight();
    
    
            if (offset <= nowat && nowat < offset + height) {
              // console.log(id);
              $("#yuchiMenu a").removeClass('active');
              $(`#yuchiMenu a[href='#${id}']`).addClass('active');
            }
          });
        }
    
        //check bg menu
        const bgmenu = function () {
          const
            viewWidth = $(window).innerWidth(),
            nowat = $(window).scrollTop(),
            height = $("#yuchiSlider").innerHeight(),
            offset = $("#yuchiMenu").innerHeight() + 1;
    
          if (nowat <= height - offset) {  //0~910 若在 首區內
            $("#yuchiArrow").fadeOut(); //隱藏至頂按鈕
    
            if (viewWidth > 767) $("#yuchiMenu").removeClass('bg-dark');  // 大畫面
            else $("#yuchiMenu").addClass('bg-dark'); // 小畫面
    
          } else {  //在其他主題時
            $("#yuchiMenu").addClass('bg-dark');
            $("#yuchiArrow").fadeIn();
          }
        }
    
        //當網頁滾動時
        $(window).scroll(() => {
          spy();
          bgmenu();
        });
        //當網頁更改寬度時
        $(window).resize(bgmenu);
    
    
        spy();
        bgmenu();
    
        ////////////animate
        AOS.init({
          duration: 1500,
          once: true
        });
    
      </script>

</body>

</html>