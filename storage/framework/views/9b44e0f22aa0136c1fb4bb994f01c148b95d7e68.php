<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice Cream Shop </title>

    <!-- Core theme CSS (includes Bootstrap)-->
    
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet" />

    <!-- 載入css&js -->
    
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    
    <script src="<?php echo e(asset('js/bootstrap.bundle.js')); ?>"></script>

    <!-- 自定義css -->
    
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">


    
    <!-- 載入icon -->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/img/ice-cream.png')); ?>" type="image/x-icon">

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
                    <img src="<?php echo e(asset('assets/img/ice-cream.png')); ?>" style="width: 25px;height: 25px;" class="mb-2">
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
            <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item vh-100 <?php echo e(($index == 0) ? 'active':''); ?>">
                    
                    <img src="<?php echo e(asset('storage/'. $banner->img)); ?>" class="d-block w-100 h-100">
                    <div
                        class="carousel-caption d-flex flex-column justify-content-center position-absolute top-0 bottom-0  ">
                        <h1><?php echo e($banner->title); ?></h1>
                        <p class="d-none d-md-block"><?php echo e($banner->title_small); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
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
                    
                    <?php echo e($iceTypesCupTitles->ice_type_title); ?>

                </p>
                <?php $__currentLoopData = $iceTypesCups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iceTypesCup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class=" col-md-6 col-lg-4 mb-3">
                        <div class="card h-100">
                            <img src="<?php echo e(asset('storage/'. $iceTypesCup->ice_type_img)); ?>" class="card-img-top" style="object-fit: cover">
                            
                            <div class="card-body">
                                <h5><?php echo e($iceTypesCup->ice_type_imgTitle); ?></h5>
                                <p class="card-text"><?php echo e($iceTypesCup->ice_type_imgContent); ?><small class="text-muted float-end"></small></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
            <div class="row tab-pane fade" id="roomB">
                <p class="text-muted text-center">
                    
                    <?php echo e($iceTypesStickTitles->ice_type_title); ?>

                </p>
                <?php $__currentLoopData = $iceTypesSticks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iceTypesStick): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class=" col-md-6 col-lg-4 mb-3">
                        <div class="card h-100" >
                            <img src="<?php echo e(asset('storage/'. $iceTypesStick->ice_type_img)); ?>" class="card-img-top" style="object-fit: cover">
                            
                            <div class="card-body">
                                <h5><?php echo e($iceTypesStick->ice_type_imgTitle); ?></h5>
                                <p class="card-text"><?php echo e($iceTypesStick->ice_type_imgContent); ?><small class="text-muted float-end">夏季優惠</small></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                

            </div>

            <div class="row tab-pane fade" id="roomC">
                <p class="text-muted text-center">
                    
                    <?php echo e($iceTypesConeTitles->ice_type_title); ?>

                </p>
                <?php $__currentLoopData = $iceTypesCones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iceTypesCone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class=" col-md-6 col-lg-4 mb-3">
                        <div class="card h-100">
                            <img src="<?php echo e(asset('storage/'. $iceTypesCone->ice_type_img)); ?>" class="card-img-top" style="height: 400px;">
                            
                            <div class="card-body">
                                <h5><?php echo e($iceTypesCone->ice_type_imgTitle); ?></h5>
                                <p class="card-text"><?php echo e($iceTypesCone->ice_type_imgContent); ?><small class="text-muted float-end">買一送一</small></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>




            <div class="row tab-pane fade" id="roomRule">
                <h3 class="text-end border-bottom border-warning">來源: 維基百科</h3>
                <?php $__currentLoopData = $iceNotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iceNote): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h5 class="text-warning">
                        [ <?php echo e($iceNote->ice_type_imgTitle); ?> ]
                    </h5>
                    <p class="mb-5">
                        <?php echo e($iceNote->ice_type_imgContent); ?>

                    </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                

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
                <?php $__currentLoopData = $iceImgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iceImg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="col-12 col-lg-6">
                        <div class="row gy-4 align-items-center">
                            <img class="col-sm-6" src="<?php echo e(asset('storage/'. $iceImg->iceCream_img)); ?>" alt="">
                            <div class="col-sm-6">
                                <h5>
                                    <?php echo e($iceImg->iceCream_imgTitle); ?>

                                </h5>
                                <p class="border-bottom border-warning pb-3">
                                    <?php echo e($iceImg->iceCream_imgContent); ?>

                                </p>
                            </div>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                

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
                <?php $__currentLoopData = $actives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $active): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img 
                id="foodImg<?php echo e($active->id); ?>" 
                class="w-100 img-thumbnail  img-fluid tab-pane fade <?php echo e(($index == 0 ? 'show active' : '')); ?>" 
                
                src="<?php echo e(asset('storage/'. $active->active_img)); ?>"
                
                >
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="col-lg-6 list-group accordion px-3" id="foodMenu">

                <?php $__currentLoopData = $actives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $active): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="accordion-item" data-bs-toggle="list" data-bs-target="<?php echo e('#foodImg'.$active->id); ?>">
                    
                      <button class="accordion-header accordion-button alert-warning text-warning text-decoration-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo e('#foodText'.$active->id); ?>" aria-expanded="<?php echo e(($index == 0 ? 'true' : '')); ?>" aria-controls="<?php echo e('foodText'.$active->id); ?>">
                        <?php echo e($active->active_title); ?>

                        <small class="position-absolute start-0 top-0 badge bg-danger"><?php echo e($active->active_title_small); ?></small>
                      </button>
                    
                    <div id="<?php echo e('foodText'.$active->id); ?>" class="accordion-collapse collapse <?php echo e(($index == 0 ? 'show' : '')); ?>"  data-bs-parent="#foodMenu">
                      <div class="accordion-body">
                        <p>
                            <?php echo e($active->active_content); ?>

                        </p>
                      </div>
                    </div>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
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

</html><?php /**PATH C:\xampp\htdocs\laravel_voyager_iceCream\resources\views/index.blade.php ENDPATH**/ ?>