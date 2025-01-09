<script src="<?php echo e(asset('assets/home_page/js/script.js')); ?>"></script>


<!-- bootstrap  -->

<!-- fontawesome icons   -->
<script src="<?php echo e(asset('assets/home_page/js/1d2a297b20.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/custom/common.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/custom/custom.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/custom/function.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/jquery.validate.min.js')); ?>"></script>


<script src="<?php echo e(asset('assets/home_page/js/owl.carousel.min.js')); ?>"></script>

<script src="<?php echo e(asset('/assets/js/sweetalert2.all.min.js')); ?>"></script>



<!-- custom script  -->


</script>

<!-- bootstrap  -->

<script src="<?php echo e(asset('assets/home_page/js/bootstrap.bundle.min.js')); ?>"> </script>



<!-- swiper  -->


<!-- swiper  -->

<script src="<?php echo e(asset('/assets/jquery-toast-plugin/jquery.toast.min.js')); ?>"></script>

<script>
    $(document).ready(function() {
        // Initialize each carousel separately
        $(".swiperSect .slider-content.owl-carousel").each(function() {
            var owl = $(this).owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 1500,
                autoplaySpeed: 2000,
                margin: 30,
                nav: false,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 3,
                    },
                    1000: {
                        items: 5,
                    },
                },
            });

            // Custom navigation buttons for this specific carousel
            $(this)
                .closest(".commonSlider")
                .find(".prev")
                .click(function() {
                    owl.trigger("prev.owl.carousel");
                });

            $(this)
                .closest(".commonSlider")
                .find(".next")
                .click(function() {
                    owl.trigger("next.owl.carousel");
                });
        });
    });

    // for pricingSection
    $(document).ready(function() {
        // Initialize each carousel separately
        $(".pricing .slider-content.owl-carousel").each(function() {
            var owl = $(this).owlCarousel({
                loop: false,
                autoplay: false,
                autoplayTimeout: 1000,
                autoplaySpeed: 2000,
                margin: 30,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 3,
                    },
                },
            });

            // Custom navigation buttons for this specific carousel
            $(this)
                .closest(".commonSlider")
                .find(".prev")
                .click(function() {
                    owl.trigger("prev.owl.carousel");
                });

            $(this)
                .closest(".commonSlider")
                .find(".next")
                .click(function() {
                    owl.trigger("next.owl.carousel");
                });
        });
    });




    // for counter

    document.addEventListener("DOMContentLoaded", function() {
        const counters = document.querySelectorAll('.numb');

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = +entry.target.getAttribute('data-target');
                    entry.target.innerText = 0;
                    const updateCounter = () => {
                        const value = +entry.target.innerText;
                        const increment = target /
                        150; // Adjust the speed of the counter by changing the denominator

                        if (value < target) {
                            entry.target.innerText = Math.ceil(value + increment);
                            setTimeout(updateCounter,
                            10); // Adjust the interval for smoother animation
                        } else {
                            entry.target.innerText = target;
                        }
                    };

                    updateCounter();
                    observer.unobserve(entry.target);
                }
            });
        });

        counters.forEach(counter => {
            observer.observe(counter);
        });
    });

    const lang_view_more_features = "<?php echo e(__('view_more_features')); ?>"
    const lang_view_less_features = "<?php echo e(__('view_less_features')); ?>"
    const please_wait = "<?php echo e(__('Please wait')); ?>"
    const processing_your_request = "<?php echo e(__('Processing your request')); ?>"
</script>
<script>
    

 </script>
<script type='text/javascript'>
    <?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    $.toast({
        text: '<?php echo e($error); ?>',
        showHideTransition: 'slide',
        icon: 'error',
        loaderBg: '#f2a654',
        position: 'top-right'
    });
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <?php if(Session::has('success')): ?>
    $.toast({
        text: '<?php echo e(Session::get('success')); ?>',
        showHideTransition: 'slide',
        icon: 'success',
        loaderBg: '#f96868',
        position: 'top-right'
    });
    <?php endif; ?>

    <?php if(Session::has('error')): ?>
    $.toast({
        text: '<?php echo e(Session::get('error')); ?>',
        showHideTransition: 'slide',
        icon: 'error',
        loaderBg: '#f2a654',
        position: 'top-right'
    });
    <?php endif; ?>
</script>
<?php /**PATH C:\xampp\htdocs\school-management\resources\views/layouts/home_page/footer_js.blade.php ENDPATH**/ ?>