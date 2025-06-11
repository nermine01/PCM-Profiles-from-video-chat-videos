<nav class="navbar layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="ti ti-menu-2 ti-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item navbar-search-wrapper titleSide mb-0">
                
                <h1 class="d-inline-block mt-2 mb-0" style="max-width: 300px;"><?php echo $__env->yieldContent('title'); ?></h1>
            </div>

        </div>
        <!-- /Search -->

        <ul class="navbar-nav flex-row align-items-center ms-auto mt-0">
            <!-- rapido rh -->
            <li class="nav-item dropdown-language dropdown me-2 me-xl-0  d-lg-block d-md-none d-sm-none d-none">
                <a class="nav-link dropdown-toggle hide-arrow btn-top" href="https://rh.rapidosoftware.com/login"
                    target="_blank">
                    <img src="<?php echo e(asset('assets/img/dash/RH.svg')); ?>" alt="">
                </a>


            </li>
            <!--/ rapido rh -->
            <!-- rapido cms -->
            <li class="nav-item dropdown-language dropdown me-2 me-xl-0 d-lg-block d-md-none d-sm-none d-none">
                <a class="nav-link dropdown-toggle hide-arrow btn-top" href="https://cms.rapidosoftware.com/login"
                    target="_blank">
                    <img src="<?php echo e(asset('assets/img/dash/CMS.svg')); ?>" alt="">
                </a>
            </li>
            <!--/ rapido cms -->

            <!-- robot -->
            <!--<li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow btn-top notifBtn" href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <i class="ti ti-message ti-md text-primary"></i>
                </a>
            </li>!-->
            <!-- / robot-->

            <div id="notif">
                <notification-component :user-id="<?php echo e(Auth::id()); ?>"></notification-component>
            </div>
            <li class="nav-item dropdown-language dropdown me-2 me-xl-0  d-lg-block d-md-block d-sm-block d-none">
                <a class="nav-link dropdown-toggle hide-arrow btn-top px-3"
                    style="width: fit-content !important;min-width:50px;" target="_blank"
                    href="">
                    <div class="box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
                            fill="none">
                            <path
                                d="M13.6316 4.15789V1.78947C13.6316 1.58009 13.5484 1.37929 13.4003 1.23123C13.2523 1.08318 13.0515 1 12.8421 1H2.57895C2.16018 1 1.75857 1.16635 1.46246 1.46246C1.16635 1.75857 1 2.16018 1 2.57895C1 2.99771 1.16635 3.39932 1.46246 3.69543C1.75857 3.99154 2.16018 4.15789 2.57895 4.15789H14.4211C14.6304 4.15789 14.8312 4.24107 14.9793 4.38913C15.1274 4.53718 15.2105 4.73799 15.2105 4.94737V8.10526M15.2105 8.10526H12.8421C12.4233 8.10526 12.0217 8.27162 11.7256 8.56773C11.4295 8.86384 11.2632 9.26545 11.2632 9.68421C11.2632 10.103 11.4295 10.5046 11.7256 10.8007C12.0217 11.0968 12.4233 11.2632 12.8421 11.2632H15.2105C15.4199 11.2632 15.6207 11.18 15.7688 11.0319C15.9168 10.8839 16 10.6831 16 10.4737V8.89474C16 8.68536 15.9168 8.48455 15.7688 8.33649C15.6207 8.18844 15.4199 8.10526 15.2105 8.10526Z"
                                stroke="#4CAF50" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M1 2.57892V13.6316C1 14.0503 1.16635 14.4519 1.46246 14.748C1.75857 15.0441 2.16018 15.2105 2.57895 15.2105H14.4211C14.6304 15.2105 14.8312 15.1273 14.9793 14.9793C15.1274 14.8312 15.2105 14.6304 15.2105 14.421V11.2631"
                                stroke="#4CAF50" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                    

                    <div class="col"> <span style="color :#4CAF50;" id="credit-text"></span>
                    </div>
                </a>


            </li>
            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown mt-0" style="margin-top: 0px !important;">
                <a class="nav-link dropdown-toggle hide-arrow btn-profil" href="javascript:void(0);"
                    data-bs-toggle="dropdown" style="min-width: 176px;">
                    <img src="" alt="">
                    <p class="mb-0 mt-0">
                       </p>

                    <i class="bi bi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end ">
                    <li>
                        <a class="dropdown-item" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 14 18"
                                fill="none">
                                <path
                                    d="M10.0004 4.19962C10.0004 4.99537 9.68429 5.75854 9.1216 6.32122C8.55892 6.88391 7.79576 7.20002 7 7.20002C6.20424 7.20002 5.44108 6.88391 4.8784 6.32122C4.31571 5.75854 3.9996 4.99537 3.9996 4.19962C3.9996 3.40386 4.31571 2.6407 4.8784 2.07802C5.44108 1.51533 6.20424 1.19922 7 1.19922C7.79576 1.19922 8.55892 1.51533 9.1216 2.07802C9.68429 2.6407 10.0004 3.40386 10.0004 4.19962ZM1 15.4955C1.02571 13.9212 1.66916 12.42 2.79158 11.3158C3.914 10.2116 5.42546 9.59271 7 9.59271C8.57454 9.59271 10.086 10.2116 11.2084 11.3158C12.3308 12.42 12.9743 13.9212 13 15.4955C11.1179 16.3595 9.07088 16.8049 7 16.8013C4.85891 16.8013 2.82664 16.334 1 15.4955Z"
                                    stroke="#474747" stroke-width="1.75" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <span class="align-middle">Profil</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19.9 12.66a1 1 0 0 1 0-1.32l1.28-1.44a1 1 0 0 0 .12-1.17l-2-3.46a1 1 0 0 0-1.07-.48l-1.88.38a1 1 0 0 1-1.15-.66l-.61-1.83a1 1 0 0 0-.95-.68h-4a1 1 0 0 0-1 .68l-.56 1.83a1 1 0 0 1-1.15.66L5 4.79a1 1 0 0 0-1 .48L2 8.73a1 1 0 0 0 .1 1.17l1.27 1.44a1 1 0 0 1 0 1.32L2.1 14.1a1 1 0 0 0-.1 1.17l2 3.46a1 1 0 0 0 1.07.48l1.88-.38a1 1 0 0 1 1.15.66l.61 1.83a1 1 0 0 0 1 .68h4a1 1 0 0 0 .95-.68l.61-1.83a1 1 0 0 1 1.15-.66l1.88.38a1 1 0 0 0 1.07-.48l2-3.46a1 1 0 0 0-.12-1.17ZM18.41 14l.8.9l-1.28 2.22l-1.18-.24a3 3 0 0 0-3.45 2L12.92 20h-2.56L10 18.86a3 3 0 0 0-3.45-2l-1.18.24l-1.3-2.21l.8-.9a3 3 0 0 0 0-4l-.8-.9l1.28-2.2l1.18.24a3 3 0 0 0 3.45-2L10.36 4h2.56l.38 1.14a3 3 0 0 0 3.45 2l1.18-.24l1.28 2.22l-.8.9a3 3 0 0 0 0 3.98m-6.77-6a4 4 0 1 0 4 4a4 4 0 0 0-4-4m0 6a2 2 0 1 1 2-2a2 2 0 0 1-2 2" />
                            </svg>
                            <span class="align-middle">Paramétre</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 18"
                                fill="none">
                                <path
                                    d="M11.4286 0C9.15529 0 6.97511 0.948211 5.36766 2.63604C3.7602 4.32387 2.85714 6.61305 2.85714 9H0L3.70476 12.89L3.77143 13.03L7.61905 9H4.7619C4.7619 5.13 7.74286 2 11.4286 2C15.1143 2 18.0952 5.13 18.0952 9C18.0952 12.87 15.1143 16 11.4286 16C9.59048 16 7.92381 15.21 6.72381 13.94L5.37143 15.36C6.16516 16.198 7.10904 16.8627 8.14863 17.3158C9.18823 17.769 10.303 18.0015 11.4286 18C13.7019 18 15.882 17.0518 17.4895 15.364C19.0969 13.6761 20 11.3869 20 9C20 6.61305 19.0969 4.32387 17.4895 2.63604C15.882 0.948211 13.7019 3.55683e-08 11.4286 0ZM10.4762 5V10L14.5524 12.54L15.2381 11.33L11.9048 9.25V5H10.4762Z"
                                    fill="#474747" />
                            </svg>
                            <span class="align-middle">Historique</span>
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 17 20" fill="none">
                                <path
                                    d="M9.996 19H3C1.895 19 1 17.849 1 16.429V3.57C1 2.151 1.895 1 3 1H10M12.5 13.5L16 10L12.5 6.5M6 9.996H16"
                                    stroke="#474747" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <span class="align-middle">Déconnexion</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>

    <!-- Search Small Screens -->
    <div class="navbar-search-wrapper search-input-wrapper d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
            aria-label="Search..." />
        <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
    </div>
</nav>
<?php /**PATH C:\Users\Asus\Desktop\Guide\crm front\resources\views/admin/layouts/navbar.blade.php ENDPATH**/ ?>