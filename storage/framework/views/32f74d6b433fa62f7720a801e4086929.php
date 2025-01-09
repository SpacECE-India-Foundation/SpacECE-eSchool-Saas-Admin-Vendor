

<?php $__env->startSection('content'); ?>
<style>
    :root {
    --primary-color: <?php echo e('#F8A800'); ?>;
    --secondary-color: <?php echo e('#F8A800'); ?>;
    --secondary-color1: <?php echo e($settings['theme_secondary_color_1'] ?? '#38a3a5'); ?>;
    --primary-background-color: <?php echo e($settings['theme_primary_background_color'] ?? '#f2f5f7'); ?>;
    --text--secondary-color: <?php echo e($settings['theme_text_secondary_color'] ?? '#5c788c'); ?>;
    
}
</style>
<script src="<?php echo e(asset('assets/home_page/js/jquery-1-12-4.min.js')); ?>"></script>

<header class="navbar">
    <div class="container">
        <div class="navbarWrapper">
            <div class="navLogoWrapper">
                <div class="navLogo">
                    <a href="<?php echo e(url('/')); ?>">
                        <img src="<?php echo e($settings['horizontal_logo'] ?? asset('assets/landing_page_images/horizontal-logo2.png')); ?>" class="logo" alt="">
                    </a>

                </div>
            </div>
            <div class="menuListWrapper">
                <ul class="listItems">
                    <li>
                        <a href="#home"><?php echo e(__('home')); ?></a>
                    </li>
                    <li>
                        <a href="#features"><?php echo e(__('features')); ?></a>
                    </li>
                    <li>
                        <a href="#about-us"><?php echo e(__('about_us')); ?></a>
                    </li>
                    <li>
                        <a href="#pricing"><?php echo e(__('pricing')); ?></a>
                    </li>
                    <?php if(count($faqs)): ?>
                        <li>
                            <a href="#faq"><?php echo e(__('faqs')); ?></a>
                        </li>    
                    <?php endif; ?>
                    <li>
                        <a href="#contact-us"><?php echo e(__('contact')); ?></a>
                    </li>
                    <?php if(count($guidances)): ?>
                        <li>
                            <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                    id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo e(__('guidance')); ?>

                                </a>                                
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <?php $__currentLoopData = $guidances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $guidance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a class="dropdown-item" href="<?php echo e($guidance->link); ?>"><?php echo e($guidance->name); ?></a></li>
                                        <?php if(count($guidances) > ($key + 1)): ?>
                                            <hr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </li>
                    <?php endif; ?>
                    <li>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo e(__('language')); ?>

                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a class="dropdown-item" href="<?php echo e(url('set-language') . '/' . $language->code); ?>"><?php echo e($language->name); ?></a></li>
                                    <?php if(count($languages) > ($key + 1)): ?>
                                        <hr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </li>

                </ul>
                <div class="hamburg">
                    <span data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                        aria-controls="offcanvasRight"><i class="fa-solid fa-bars"></i></span>
                </div>
            </div>

            <div class="loginBtnsWrapper">
                <button class="commonBtn redirect-login"><?php echo e(__('login')); ?></button>
                <button class="commonBtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><?php echo e(__('start_trial')); ?></button>
                
            </div>
        </div>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
            aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <div class="navLogoWrapper">
                    <div class="navLogo">
                        <img src="<?php echo e($settings['horizontal_logo'] ?? asset('assets/landing_page_images/horizontal-logo2.png')); ?>" alt="">
                    </div>
                </div>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="listItems">
                    <li>
                        <a href="#home"><?php echo e(__('home')); ?></a>
                    </li>
                    <li>
                        <a href="#features"><?php echo e(__('features')); ?></a>
                    </li>
                    <li>
                        <a href="#about-us"><?php echo e(__('about_us')); ?></a>
                    </li>
                    <li>
                        <a href="#pricing"><?php echo e(__('pricing')); ?></a>
                    </li>
                    <?php if(count($faqs)): ?>
                        <li>
                            <a href="#faq"><?php echo e(__('faqs')); ?></a>
                        </li>    
                    <?php endif; ?>
                    <li>
                        <a href="#contact-us"><?php echo e(__('contact')); ?></a>
                    </li>
                    <?php if(count($guidances)): ?>
                        <li>
                            <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                    id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo e(__('guidance')); ?>

                                </a>                                
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <?php $__currentLoopData = $guidances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $guidance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a class="dropdown-item" href="<?php echo e($guidance->link); ?>"><?php echo e($guidance->name); ?></a></li>
                                        <?php if(count($guidances) > ($key + 1)): ?>
                                            <hr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </li>
                    <?php endif; ?>
                    <li>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo e(__('language')); ?>

                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a class="dropdown-item" href="<?php echo e(url('set-language') . '/' . $language->code); ?>"><?php echo e($language->name); ?></a></li>
                                    <?php if(count($languages) > ($key + 1)): ?>
                                        <hr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </li>

                </ul>

                
                    <button class="commonBtn redirect-login"><?php echo e(__('login')); ?></button>
                    <button class="commonBtn" data-bs-toggle="modal" data-bs-dismiss="offcanvas" data-bs-target="#staticBackdrop"><?php echo e(__('start_trial')); ?></button>
                
            </div>
        </div>
    </div>
</header>

<!-- navbar ends here  -->

<div class="main">

    <section class="heroSection" id="home">
        <div class="linesBg">
            <div class="colorBg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="flex_column_start">
                                <span class="commonTitle"><?php echo e($settings['system_name']  ?? 'eSchool SaaS'); ?></span>
                                <span class="commonDesc">
                                    <?php echo e($settings['tag_line']); ?>

                                </span>
                                <span class="commonText">
                                    <?php echo e($settings['hero_description']); ?></span>
                                <button class="commonBtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><?php echo e(__('register_your_school')); ?></button>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 heroImgWrapper">
                            <div class="heroImg">
                                <img src="<?php echo e($settings['home_image'] ?? asset('assets/landing_page_images/heroImg.png')); ?>" alt="">
                                <div class="topRated card">
                                    <div>
                                        <img src="<?php echo e($settings['hero_title_2_image'] ?? asset('assets/landing_page_images/user.png')); ?>" alt="">
                                    </div>
                                    <div>
                                        <span><?php echo e($settings['hero_title_2']); ?></span>
                                    </div>
                                </div>
                                <div class="textWrapper">
                                    <span><?php echo e($settings['hero_title_1']); ?></span>
                                </div>    
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php echo $__env->make('registration_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </section>
    <!-- heroSection ends here  -->

    <section class="features commonMT container" id="features">
        <div class="row">
            <div class="col-12">
                <div class="sectionTitle">
                    <span><?php echo e(__('explore_our_top_features')); ?></span>

                </div>
            </div>
            <div class="col-12">
                <div class="row cardWrapper">
                    <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key < 9): ?>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <div>
                                        <img src="<?php echo e(asset('assets/landing_page_images/features/')); ?>/<?php echo e($feature->name); ?>.svg" alt="">
                                    </div>
                                    <div><span><?php echo e(__($feature->name)); ?></span></div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="col-sm-12 col-md-6 col-lg-4 default-feature-list" style="display: none">
                                <div class="card">
                                    <div>
                                        <img src="<?php echo e(asset('assets/landing_page_images/features/')); ?>/<?php echo e($feature->name); ?>.svg" alt="">
                                    </div>
                                    <div><span><?php echo e(__($feature->name)); ?></span></div>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-12">
                        <button class="commonBtn view-more-feature" value="1"><?php echo e(__('view_more_features')); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features ends here  -->

    <?php if($settings['display_school_logos'] ?? '1'): ?>
        <section class="swiperSect container commonMT">
            <div class="row">
                <div class="col-12">
                    <div class="commonSlider">
                        <div class="slider-content owl-carousel">
                            <!-- Example slide -->
                            <?php $__currentLoopData = $schoolSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(Storage::disk('public')->exists($school->getRawOriginal('data')) && $school->data): ?>
                                    <div class="swiperDataWrapper">
                                        <div class="card">
                                            <img src="<?php echo e($school->data); ?>" class="normalImg" alt="">
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!-- Add more swiperDataWrapper elements here -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- swiperSect ends here  -->
    <?php if($settings['display_counters'] ?? '1'): ?>
        <section class="counterSect commonMT container">
            <div class="">
                <div class="row counterBG">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="card">
                            <div><span class="numb" data-target="<?php echo e($counter['school']); ?>">0</span><span>+</span></div>
                            <div><span class="text"><?php echo e(__('schools')); ?></span></div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="card">
                            <div><span class="numb" data-target="<?php echo e($counter['teacher']); ?>">0</span><span>+</span></div>
                            <div><span class="text"><?php echo e(__('teachers')); ?></span></div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="card">
                            <div><span class="numb" data-target="<?php echo e($counter['student']); ?>">0</span><span>+</span></div>
                            <div><span class="text"><?php echo e(__('students')); ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    

    <?php $__currentLoopData = $featureSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(($key + 1) % 2 != 0): ?>

        <section class="left-section-<?php echo e($section->id); ?> commonMT container">
            <div class="row">
                <div class="col-12">
                    <div class="sectionTitle">
                        <span class="greenText"><?php echo e($section->title); ?></span>
                        <span>
                            <?php echo e($section->heading); ?>

                        </span>
    
                    </div>
                </div>
                <div class="col-12 tabsContainer">
                    <div class="row">
                        <div class="col-lg-6 tabsMainWrapper">
                            <div class="tabsWrapper">
                                <div class="tabs">
                                    <?php $__currentLoopData = $section->feature_section_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section_feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="tab tab-<?php echo e($section_feature->id); ?>-<?php echo e($key); ?>">
                                            <span><?php echo e($section_feature->feature); ?></span>
                                            <span>
                                                <?php echo e($section_feature->description); ?>

                                            </span>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
    
                        </div>
    
                        <div class="col-lg-6 contentWrapper">
                            <div class="content-container">
                                <?php $__currentLoopData = $section->feature_section_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section_feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="content tab-<?php echo e($section_feature->id); ?>-<?php echo e($key); ?>">
                                        <img src="<?php echo e($section_feature->image); ?>" alt="">
                                    </div>    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </section>

        <?php else: ?>

        <section class="right-section-<?php echo e($section->id); ?> right-feature-section commonMT">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sectionTitle">
                            <span class="greenText"><?php echo e($section->title); ?></span>
                            <span>
                                <?php echo e($section->heading); ?>

                            </span>
    
                        </div>
                    </div>
                    <div class="col-12 tabsContainer">
                        <div class="row reverseWrapper">
                            <div class="col-lg-6 contentWrapper">
                                <div class="content-container">
                                    <?php $__currentLoopData = $section->feature_section_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section_feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="content tab-<?php echo e($section_feature->id); ?>-<?php echo e($key); ?>">
                                            <img src="<?php echo e($section_feature->image); ?>" alt="">
                                        </div>    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
    
                            <div class="col-lg-6 tabsMainWrapper">
                                <div class="tabsWrapper">
                                    <div class="tabs">
                                        <?php $__currentLoopData = $section->feature_section_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section_feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="tab tab-<?php echo e($section_feature->id); ?>-<?php echo e($key); ?>">
                                                <span><?php echo e($section_feature->feature); ?></span>
                                                <span>
                                                    <?php echo e($section_feature->description); ?>

                                                </span>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </section>

        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <section class="whyBest container commonMT" id="about-us">
        <div class="row">
            <div class="col-lg-6">
                <div class="whyBestTextWrapper">
                    <p><?php echo e($settings['about_us_title']); ?></p>
                    <p><?php echo e($settings['about_us_heading']); ?></p>
                </div>
                <p class="whyBestPara">
                    <?php echo e($settings['about_us_description']); ?>

                </p>

                <div class="listWrapper">
                    <?php $__currentLoopData = $about_us_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span>
                            <i class="fa-regular fa-circle-check"></i>
                            <?php echo e($point); ?>

                        </span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="col-lg-6">
                <img src="<?php echo e($settings['about_us_image'] ?? asset('assets/landing_page_images/whyBestImg.png')); ?>" alt="">
            </div>
        </div>
    </section>
    <!-- whyBest ends here  -->

    <section class="pricing" id="pricing">
        <div class="container commonMT">
            <div class="row">
                <div class="col-12">
                    <div class="sectionTitle">
                        <span><?php echo e(__('flexible_pricing_packages')); ?></span>

                    </div>
                </div>
                <div class="col-12 swiperWrapper">
                    <div class="commonSlider">
                        <div class="slider-content owl-carousel">

                            <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($package->highlight): ?>
                                <div class="swiperDataWrapper">
                                    <div class="pricingBox premium">
                                        <div class="startUpWrapper">
                                            <?php if($package->is_trial == 1): ?>
                                                <span class="badge postpaid"><?php echo e(__('free')); ?></span>
                                            <?php else: ?>
                                                <?php if($package->type == 1): ?>
                                                    <span class="badge postpaid"><?php echo e(__('postpaid')); ?></span>
                                                <?php else: ?>
                                                    <span class="badge prepaid"><?php echo e(__('prepaid')); ?></span>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            
                                            <div class="textDiv">
                                                <span class="title"><?php echo e(__($package->name)); ?></span>
                                                <?php if($package->is_trial == 1): ?>
                                                    <span>
                                                        <?php echo e($settings['student_limit'] ?? 0); ?> <?php echo e(__('student_limit')); ?>

                                                    </span>
                                                    <span>
                                                        <?php echo e($settings['staff_limit'] ?? 0); ?> <?php echo e(__('staff_limit')); ?>

                                                    </span>
                                                <?php elseif($package->type == 0 && $package->is_trial == 0): ?>
                                                    <span>
                                                        <?php echo e(number_format($package->no_of_students, 0)); ?> <?php echo e(__('student_limit')); ?>

                                                    </span>
                                                    <span>
                                                        <?php echo e(number_format($package->no_of_staffs, 0)); ?> <?php echo e(__('staff_limit')); ?>

                                                    </span>
                                                    <span>
                                                        <?php echo e($settings['currency_symbol'] ?? '$'); ?> <?php echo e(number_format($package->charges, 2)); ?> <?php echo e(__('package_amount')); ?>

                                                    </span>
                                                <?php elseif($package->type == 1 && $package->is_trial == 0): ?>
                                                    <span>
                                                        <?php echo e($settings['currency_symbol'] ?? '$'); ?> <?php echo e(number_format($package->student_charge, 2)); ?> <?php echo e(__('per_student_charges')); ?>

                                                    </span>
                                                    <span>
                                                        <?php echo e($settings['currency_symbol'] ?? '$'); ?> <?php echo e(number_format($package->staff_charge, 2)); ?> <?php echo e(__('per_staff_charges')); ?>

                                                    </span>
                                                <?php endif; ?>
                                                <span class="days"><?php echo e($package->days); ?> <?php echo e(__('days')); ?></span>
                                            </div>
                                            <div class="listWrapper">
                                                <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if(in_array($feature->id, $package->package_feature->pluck('feature_id')->toArray())): ?>
                                                    <span>
                                                        <img src="<?php echo e(asset('assets/landing_page_images/right.svg')); ?>" class="rightTickImg" alt="">
                                                        <?php echo e(__($feature->name)); ?>

                                                    </span>
                                                    <?php else: ?>
                                                    <span class="lineThrough">
                                                        <img src="<?php echo e(asset('assets/landing_page_images/cross.svg')); ?>" class="wrongTickImg" alt="">
                                                        <?php echo e(__($feature->name)); ?>

                                                    </span>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <button class="pricingBtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><?php echo e(__('get_started')); ?></button>
                                        </div>
                                    </div>
                                </div>
                                <?php else: ?>
                                <div class="swiperDataWrapper">
                                    <div class="pricingBox">
                                        <div class="startUpWrapper">
                                            <?php if($package->is_trial == 1): ?>
                                                <span class="badge postpaid"><?php echo e(__('free')); ?></span>
                                            <?php else: ?>
                                                <?php if($package->type == 1): ?>
                                                    <span class="badge postpaid"><?php echo e(__('postpaid')); ?></span>
                                                <?php else: ?>
                                                    <span class="badge prepaid"><?php echo e(__('prepaid')); ?></span>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <div class="textDiv">
                                                <span class="title"><?php echo e(__($package->name)); ?></span>
                                                <?php if($package->is_trial == 1): ?>
                                                    <span>
                                                        <?php echo e($settings['student_limit']); ?> <?php echo e(__('student_limit')); ?>

                                                    </span>
                                                    <span>
                                                        <?php echo e($settings['staff_limit']); ?> <?php echo e(__('staff_limit')); ?>

                                                    </span>
                                                <?php elseif($package->type == 0 && $package->is_trial == 0): ?>
                                                    <span>
                                                        <?php echo e(number_format($package->no_of_students, 0)); ?> <?php echo e(__('student_limit')); ?>

                                                    </span>
                                                    <span>
                                                        <?php echo e(number_format($package->no_of_staffs, 0)); ?> <?php echo e(__('staff_limit')); ?>

                                                    </span>
                                                    <span>
                                                        <?php echo e($settings['currency_symbol'] ?? '$'); ?> <?php echo e(number_format($package->charges, 2)); ?> <?php echo e(__('package_amount')); ?>

                                                    </span>
                                                <?php elseif($package->type == 1 && $package->is_trial == 0): ?>
                                                    <span>
                                                        <?php echo e($settings['currency_symbol'] ?? '$'); ?> <?php echo e(number_format($package->student_charge, 2)); ?> <?php echo e(__('per_student_charges')); ?>

                                                    </span>
                                                    <span>
                                                        <?php echo e($settings['currency_symbol'] ?? '$'); ?> <?php echo e(number_format($package->staff_charge, 2)); ?> <?php echo e(__('per_staff_charges')); ?>

                                                    </span>
                                                <?php endif; ?>
                                                <span class="days"><?php echo e($package->days); ?> <?php echo e(__('days')); ?></span>
                                            </div>
                                            <div class="listWrapper">
                                                <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(in_array($feature->id, $package->package_feature->pluck('feature_id')->toArray())): ?>
                                                    <span>
                                                        <img src="<?php echo e(asset('assets/landing_page_images/right.svg')); ?>" class="rightTickImg" alt="">
                                                        <?php echo e(__($feature->name)); ?>

                                                    </span>
                                                    <?php else: ?>
                                                    <span class="lineThrough">
                                                        <img src="<?php echo e(asset('assets/landing_page_images/cross.svg')); ?>" class="wrongTickImg" alt="">
                                                        <?php echo e(__($feature->name)); ?>

                                                    </span>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <button class="pricingBtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><?php echo e(__('get_started')); ?></button>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing ends here  -->

    <?php if(isset($settings['custom_package_status']) && $settings['custom_package_status']): ?>
        <section class="customPack container commonMT">
            <div class="wrapper">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div>
                            <p class="title"><?php echo e(__('custom_package')); ?></p>
                            <p class="desc">
                                <?php echo e($settings['custom_package_description'] ?? ''); ?>

                            </p>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <a href="#contact-us" class="commonBtn text-center"><?php echo e(__('get_in_touch')); ?></a>
                    </div>

                </div>
            </div>
        </section>            
    <?php endif; ?>

    <?php if(count($faqs)): ?>
        <section class="faqs commonMT" id="faq">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sectionTitle">
                            <span><?php echo e(__('frequently_asked_questions')); ?></span>

                        </div>
                    </div>

                    <div class="col-12">
                        <div class="accordion" id="accordionExample">
                            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne-<?php echo e($faq->id); ?>" aria-expanded="true" aria-controls="collapseOne-<?php echo e($faq->id); ?>">
                                            <span>
                                                <?php echo e($faq->title); ?>

                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne-<?php echo e($faq->id); ?>" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <span>
                                                <?php echo nl2br(e($faq->description)); ?>

                                            </span>
                                        </div>
                                    </div>
                                </div>  
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- faqs ends here  -->

    <section class="getInTouch commonMT" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sectionTitle">
                        <span class="greenText"><?php echo e(__('lets_get_in_touch')); ?></span>
                        <span><?php echo e(__('have_a_question_or_just_want_to_say_hi_Wed_love_to_hear_from_you')); ?>

                        </span>

                    </div>
                    <div class="col-12">
                        <div class="row wrapper">
                            <div class="col-lg-6">
                                <form action="<?php echo e(url('contact')); ?>" method="post" role="form" class="php-email-form mb-5 create-form-with-captcha">
                                    <?php echo csrf_field(); ?>
                                    <div class="card">
                                        <div>
                                            <input type="text" required name="name" id="name" placeholder="<?php echo e(__('enter_your_name')); ?>">
                                        </div>
                                        <div>
                                            <input type="email" required name="email" id="email" placeholder="<?php echo e(__('enter_your_email')); ?>">
                                        </div>
                                        <div>
                                            <textarea name="message" required id="message" cols="30" rows="6"
                                                placeholder="<?php echo e(__('send_your_message')); ?>"></textarea>
                                        </div>
                                        <?php if(config('services.recaptcha.key') ?? ''): ?>
                                            <div>
                                                <div class="g-recaptcha" data-sitekey=<?php echo e(config('services.recaptcha.key')); ?>></div>
                                            </div>    
                                        <?php endif; ?>
                                        <div>
                                            <button class="commonBtn"><?php echo e(__('send')); ?></button>
                                        </div>
                                        <div>
                                            <img src="<?php echo e(asset('assets/landing_page_images/GetInTouchDots.png')); ?>" class="sideImg dots" alt="">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6 infoBox">
                                <div class="infoWrapper">
                                    <div>
                                        <span class="icon"><i class="fa-solid fa-phone-volume"></i></span>
                                    </div>
                                    <div>
                                        <span><?php echo e(__('phone')); ?></span>
                                        <span><?php echo e(__('mobile')); ?> : <?php echo e($settings['mobile'] ?? ''); ?></span>
                                    </div>
                                </div>
                                <div class="infoWrapper">
                                    <div>
                                        <span class="icon"><i class="fa-solid fa-envelope-open-text"></i></span>
                                    </div>
                                    <div>
                                        <span><?php echo e(__('email')); ?></span>
                                        <span><?php echo e($settings['mail_send_from'] ?? 'example@gmail.com'); ?></span>
                                    </div>
                                </div>
                                <div class="infoWrapper">
                                    <div>
                                        <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
                                    </div>
                                    <div>
                                        <span><?php echo e(__('location')); ?></span>
                                        <span><?php echo e($settings['address'] ?? ''); ?></span>
                                    </div>
                                </div>
                                <div>
                                    <img src="<?php echo e(asset('assets/landing_page_images/lineCircle.png')); ?>" class="lineCircle sideImg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="ourApp container commonMT">
        <div class="row">
            <div class="col-lg-6">
                <img src="<?php echo e($settings['download_our_app_image'] ?? asset('assets/landing_page_images/ourApp.png')); ?>" class="ourAppImg" alt="">
            </div>
            <div class="col-lg-6 content">
                <div class="text">
                    <span class="title"><?php echo e(__('download_our_app_now')); ?></span>
                    <span>
                        <?php echo e($settings['download_our_app_description'] ?? ''); ?>

                    </span>
                </div>
                <div class="storeImgs">
                    <a href="<?php echo e($settings['app_link'] ?? ''); ?>" target="_blank"> <img src="<?php echo e(asset('assets/landing_page_images/Google play.png')); ?>" alt=""> </a>
                    <a href="<?php echo e($settings['ios_app_link'] ?? ''); ?>" target="_blank"> <img src="<?php echo e(asset('assets/landing_page_images/iOS app Store.png')); ?>" alt=""> </a>
                </div>
            </div>
        </div>
    </section>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script async src="https://www.google.com/recaptcha/api.js"></script>
    <?php $__currentLoopData = $featureSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const tabs = document.querySelectorAll('.left-section-<?php echo e($section->id); ?> .tab');
                const contents = document.querySelectorAll('.left-section-<?php echo e($section->id); ?> .content');

                function switchTab(event, tabNumber) {
                    tabs.forEach((tab) => {
                        tab.classList.remove('active');
                    });

                    event.target.classList.add('active');

                    contents.forEach((content) => {
                        content.classList.remove('active');
                    });

                    contents[tabNumber - 1].classList.add('active');
                }

                tabs.forEach((tab, index) => {
                    tab.addEventListener('click', (event) => {
                        switchTab(event, index + 1);
                    });
                });

                setTimeout(() => {
                    tabs[0].click();
                }, 1000);
            });

            document.addEventListener('DOMContentLoaded', () => {
                const tabs = document.querySelectorAll('.right-section-<?php echo e($section->id); ?> .tab');
                const contents = document.querySelectorAll('.right-section-<?php echo e($section->id); ?> .content');

                function switchTab(event, tabNumber) {
                    tabs.forEach((tab) => {
                        tab.classList.remove('active');
                    });

                    event.target.classList.add('active');

                    contents.forEach((content) => {
                        content.classList.remove('active');
                    });

                    contents[tabNumber - 1].classList.add('active');
                }

                tabs.forEach((tab, index) => {
                    tab.addEventListener('click', (event) => {
                        switchTab(event, index + 1);
                    });
                });

                setTimeout(() => {
                    tabs[0].click();
                }, 1000);
            });
        </script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <script>
        $('.redirect-login').click(function (e) { 
            e.preventDefault();
            window.location.href = "<?php echo e(url('login')); ?>"
        });
    </script>
    <script>
        <?php if(Session::has('success')): ?>
        $.toast({
            text: '<?php echo e(Session::get('success')); ?>',
            showHideTransition: 'slide',
            icon: 'success',
            loaderBg: '#f96868',
            position: 'top-right',
            bgColor: '#20CFB5'
        });
        <?php endif; ?>

        <?php if(Session::has('error')): ?>
        $.toast({
            text: '<?php echo e(Session::get('error')); ?>',
            showHideTransition: 'slide',
            icon: 'error',
            loaderBg: '#f2a654',
            position: 'top-right',
            bgColor: '#FE7C96'
        });
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home_page.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school-management\resources\views/home.blade.php ENDPATH**/ ?>