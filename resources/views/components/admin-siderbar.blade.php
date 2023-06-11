<nav class="sidebar dark_sidebar">
        <div class="logo d-flex justify-content-between">
            <a class="large_logo" href="{{url('/')}}/backend"><img src="/img/logo_white.png" alt></a>
            <a class="small_logo" href="/index-2.html"><img src="/img/mini_logo.png" alt></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
                <!-- this is post section -->
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="/img/menu-icon/1.svg" alt>
                    </div>
                    <div class="nav_title">
                        <span>Posts </span>
                    </div>
                </a>
                <ul>
                    <li><a href="{{url('/')}}/backend/all_post_list">All post</a></li>
                    <li><a href="{{url('/')}}/backend/create_post">Create post</a></li>
                    <li><a href="{{url('/')}}/backend/edit_post">Edit post</a></li>
                    <li><a href="{{url('/')}}/backend/recovry_post">Recovry post</a></li>
                </ul>
            </li>

            <!-- this is category section  -->
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="ti-file">
                        <!-- <img src="/img/menu-icon/6.svg" alt> -->
                    </div>
                    <div class="nav_title">
                        <span>Category</span>
                    </div>
                </a>
                <ul>
                    <li><a href="{{url('/')}}/backend/all_category">All category</a></li>
                    <li><a href="{{url('/')}}/backend/create_category">Create category</a></li>
                    <!-- <li><a href="{{url('/')}}/backend/edit_category">Edit category</a></li> -->
                    <!-- <li><a href="{{url('/')}}/backend/recovry_category">Recovry category</a></li> -->
                </ul>
            </li>

            <!-- this is sub category section with  -->
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="ti-files">
                        <!-- <img src="/img/menu-icon/6.svg" alt> -->
                    </div>
                    <div class="nav_title">
                        <span>Sub Category</span>
                    </div>
                </a>
                <ul>
                    <li><a href="{{url('/')}}/backend/all_sub_category">All Sub category</a></li>
                    <li><a href="{{url('/')}}/backend/create_sub_category">Create Sub category</a></li>
                    <li><a href="{{url('/')}}/backend/sub_edit_category">Edit Sub category</a></li>
                    <!-- <li><a href="{{url('/')}}/backend/recovry_sub_category">Recovry Sub category</a></li> -->
                </ul>
            </li>

            <!-- this is Comment section  -->
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="ti-comment-alt">
                        <!-- <img src="/img/menu-icon/6.svg" alt> -->
                    </div>
                    <div class="nav_title">
                        <span>Comment</span>
                    </div>
                </a>
                <ul>
                    <li><a href="{{url('/')}}/backend/comment_list">Comment List</a></li>
                    <li><a href="{{url('/')}}/backend/comment_unpublish">comment unpublish</a></li>
                    <li><a href="{{url('/')}}/backend/comment_publish">comment publish</a></li>
                    <!-- <li><a href="{{url('/')}}/backend/comment_list">Comment Reply</a></li> -->
                    <!-- <li><a href="{{url('/')}}/backend/comment_delete_recovry">comment Delete Recovry</a></li> -->
                </ul>
            </li>

            <!-- gallery  -->
            <li class>
                <a href="{{url('/')}}/backend/gallery" aria-expanded="false">
                    <div class="ti-gallery">
                        <!-- <img src="/img/menu-icon/5.svg" alt> -->
                    </div>
                    <div class="nav_title">
                        <span>gallery</span>
                    </div>
                </a>
            </li>
            <!-- tags -->
            <li class>
                <a href="{{url('/')}}/backend/tags" aria-expanded="false">
                    <div class="ti-tag">
                        <!-- <img src="/img/menu-icon/5.svg" alt> -->
                    </div>
                    <div class="nav_title">
                        <span>tags</span>
                    </div>
                </a>
            </li> 

            <!-- this is settin -->
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="ti-settings">
                        <!-- <img src="/img/menu-icon/7.svg" alt> -->
                    </div>
                    <div class="nav_title">
                        <span>Setting</span>
                    </div>
                </a>
                <ul>
                    <li><a href="{{url('/')}}/backend/admin_info">admin info</a></li>
                    <!-- <li><a href="{{url('/')}}/backend/admin_info">Change passowrd</a></li> -->
                    <!-- <li><a href="{{url('/')}}/backend/admin_info">admin info</a></li>
                    <li><a href="{{url('/')}}/backend/admin_info">admin info</a></li> -->
                    <!-- <li><a href="/ticker_dark.html">change passowrd admin</a></li>

                    <li><a href="/ticker_dark.html">add author</a></li>
                    <li><a href="/Ticker_Light.html">change author</a></li>

                    <li><a href="/Ticker_Light.html">Role list</a></li>
                    <li><a href="/Ticker_Light.html">Change passowrd</a></li> -->
                </ul>
            </li>

            <!-- go to website -->
            <li class>
                <a href="{{url('/')}}" aria-expanded="false">
                    <div class="ti-world">
                        <!-- <img src="/img/menu-icon/5.svg" alt> -->
                    </div>
                    <div class="nav_title">
                        <span>Frontend</span>
                    </div>
                </a>
            </li> 
            
            <!-- this is dropdown list
            <li class>
                <a class="has-arrow" href="/#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="/img/menu-icon/7.svg" alt>
                    </div>
                    <div class="nav_title">
                        <span>Tickers</span>
                    </div>
                </a>
                <ul>
                    <li><a href="/ticker_dark.html">Ticker Dark</a></li>
                    <li><a href="/Ticker_Light.html">Ticker Light</a></li>
                </ul>
            </li> -->

            <!-- this is siingle  list not dropdown
            <li class>
                <a href="/crypto_stats.html" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="/img/menu-icon/5.svg" alt>
                    </div>
                    <div class="nav_title">
                        <span>Crypto Stats</span>
                    </div>
                </a>
            </li> -->
        </ul>
    </nav>