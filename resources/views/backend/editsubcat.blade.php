<x-admin-header />
<x-admin-siderbar />
<section class="main_content dashboard_part large_header_bg">

<div class="container-fluid g-0">
    <div class="row">
        <div class="col-lg-12 p-0 ">
            <div class="header_iner d-flex justify-content-between align-items-center">
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
                </div>
                <div class="line_icon open_miniSide d-none d-lg-block">
                    <img src="/img/line_img.png" alt>
                </div>
                categories list 
            </div>
        </div>
    </div>
</div>

<div class="main_content_iner ">
    <div class="container-fluid p-0 sm_padding_15px">
        <div class="row justify-content-center">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Edit Sub category</h3>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <!-- <h6 class="card-subtitle mb-2">Here’s a quick example to demonstrate Bootstrap’s form styles. Keep reading for documentation on required classes, form layout, and more.</h6> -->
                    <form method="post" action="/backend/create_sub_category">
                        @csrf
                            <div class=" mb-3">
                                <label class="form-label" for="inputGroupSelect01">category Status</label>
                                <select class="form-select" id="inputGroupSelect01" name="cat_name">
                                    <option selected="" value="categories 1">categories 1</option>
                                    <option value="categories 2">categories 2</option>
                                    <option value="categories 3">categories 3</option>
                                    <option value="categories 4">categories 4</option>
                                    <option value="categories 5">categories 5</option>
                                </select>
                            </div>
                     
                </div>
            </div>
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">create sub category</h3>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <!-- <h6 class="card-subtitle mb-2">Here’s a quick example to demonstrate Bootstrap’s form styles. Keep reading for documentation on required classes, form layout, and more.</h6> -->
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputEmail1">create_sub_category</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="create_sub_category">
                        </div>
                        <div class="mb-3">
                            <div class=" mb-3">
                            <label class="form-label" for="inputGroupSelect01">category Status</label>
                                <select class="form-select" id="inputGroupSelect01" name="status">
                                    <option selected="" value="0">0</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                        </div>
                        <input value="Submit" name="submit"  type="submit" class="btn btn-primary" >
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer_part">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer_iner text-center">
                    <p>2020 © Influence - Designed by
                        <a href="#"> <i class="ti-heart"></i> </a><a href="#"> DashboardPack</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<x-admin-footer />
