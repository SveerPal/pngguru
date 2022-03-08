<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div>
            <p class="app-sidebar__user-name">{{ Auth::guard('admin')->user()->name }}</p>
            <p class="app-sidebar__user-designation"></p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}"><i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item @if(Route::is('admin.sliders') or Route::is('admin.sliders.create') or Route::is('admin.sliders.show') or Route::is('admin.sliders.edit')) active @endif " href="{{ route('admin.sliders') }}"><i class="app-menu__icon fa fa-sliders"></i>
                <span class="app-menu__label">Slider</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item @if(Route::is('admin.pages') or Route::is('admin.pages.create') or Route::is('admin.pages.show') or Route::is('admin.pages.edit')) active @endif" href="{{ route('admin.pages') }}"><i class="app-menu__icon fa fa-file"></i>
                <span class="app-menu__label">Pages</span>
            </a>
        </li>
        <li class="treeview @if(Route::is('admin.image-categories') or Route::is('admin.image-categories.create') or Route::is('admin.image-categories.show') or Route::is('admin.image-categories.edit') or Route::is('admin.images') or Route::is('admin.images.create') or Route::is('admin.images.show') or Route::is('admin.images.edit') or Route::is('admin.image-tags') or Route::is('admin.image-tags.create') or Route::is('admin.image-tags.show') or Route::is('admin.image-tags.edit'))   is-expanded @endif">
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.image-categories' ? 'active' : '' }}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-image"></i>

                <span class="app-menu__label">Images</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item @if(Route::is('admin.images') or Route::is('admin.images.create') or Route::is('admin.images.show') or Route::is('admin.images.edit')) active @endif" href="{{ route('admin.images') }}"><i class="icon fa fa-image"></i>Images</a>
                </li>
                <li>
                    <a class="treeview-item @if(Route::is('admin.image-categories') or Route::is('admin.image-categories.create') or Route::is('admin.image-categories.show') or Route::is('admin.image-categories.edit')) active @endif" href="{{ route('admin.image-categories') }}"><i class="icon fa fa-list"></i> Image Categories</a>
                </li>
                <li>
                    <a class="treeview-item @if(Route::is('admin.image-tags') or Route::is('admin.image-tags.create') or Route::is('admin.image-tags.show') or Route::is('admin.image-tags.edit')) active @endif" href="{{ route('admin.image-tags') }}"><i class="icon fa fa-tags"></i> Image Tags</a>
                </li>
            </ul>
        </li>
        <!-- <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.testimonials' ? 'active' : '' }}" href="{{ route('admin.testimonials') }}"><i class="app-menu__icon fa fa-quote-left"></i>
                <span class="app-menu__label">Testimonials</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.clienteles' ? 'active' : '' }}" href="{{ route('admin.clienteles') }}"><i class="app-menu__icon fa fa-user"></i>
                <span class="app-menu__label">Clienteles</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.newsletters' ? 'active' : '' }}" href="{{ route('admin.newsletters') }}"><i class="app-menu__icon fa fa-newspaper-o"></i>
                <span class="app-menu__label">Newstter</span>
            </a>
        </li>  -->
        
        <li>
            <a class="app-menu__item @if(Route::is('admin.users') or Route::is('admin.users.create') or Route::is('admin.users.show') or Route::is('admin.users.edit')) active @endif" href="{{ route('admin.users') }}"><i class="app-menu__icon fa fa-users"></i>
                <span class="app-menu__label">Users</span>
            </a>
        </li>               
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.settings' ? 'active' : '' }}" href="{{ route('admin.settings') }}">
                <i class="app-menu__icon fa fa-cogs"></i>
                <span class="app-menu__label">Settings</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.update-password' ? 'active' : '' }}" href="{{ route('admin.update-password') }}"><i class="app-menu__icon fa fa-key"></i>
                <span class="app-menu__label">Change Password</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{ route('admin.logout') }}"><i class="app-menu__icon fa fa-sign-out"></i>
                <span class="app-menu__label">Logout</span>
            </a>
        </li>
    </ul>
</aside>