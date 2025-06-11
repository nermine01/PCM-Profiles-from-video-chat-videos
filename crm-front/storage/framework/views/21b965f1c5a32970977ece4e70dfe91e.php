<aside id="layout-menu" class="aside layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="<?php echo e(asset('assets/img/dash/CRM.svg')); ?>" alt=""
                    style=" width: 85px !important; height: 118px;">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="menu-toggle-icon ti ti-text-wrap-disabled d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>



    <ul class="menu-inner py-1">
      
    
        
        
        <li class="menu-header small">
            <span class="menu-header-text">Agents</span>
        </li>
        <li class="menu-item">
            <a href="<?php echo e(route('admin.agent')); ?>"
                class="menu-link <?php echo e(Route::currentRouteName() === 'admin.jeux.index' ? 'active' : ''); ?>">
                <i class="menu-icon">
                    <span class="iconify" data-icon="uil:robot" data-inline="false"></span>
                </i>
                <div data-i18n="Mes agnets">Mes agnets</div>
            </a>
        </li>
        


       
    </ul>
</aside>
<?php /**PATH C:\Users\Asus\Desktop\Guide\crm front\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>