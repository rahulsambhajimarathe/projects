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
            </div>
        </div>
    </div>
</div>

<div class="main_content_iner ">
    <div class="container-fluid p-0 sm_padding_15px">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="dashboard_header mb_50">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="dashboard_header_title">
                                <h3> Gallery</h3>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card_box box_shadow position-relative mb_30">
                    <div class="white_box_tittle">
                        <div class="main-title2">
                            <h4 class="mb-2 nowrap ">Gallery </h4>
                        </div>
                    </div>
                    <form method="post" action="/backend/gallery/gallery" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center align-items-center g-2">

                        <div class="col-6">
                            <h3 class="text-center">Gallery Image</h3>
                            <input type="file" class="form-control" name="gallery" id="" aria-describedby="helpId" placeholder="feactue">
                            <input type="text" class="form-control mt-3" name="gallery_img_name" id="" aria-describedby="helpId" placeholder="Gallery Image">
                        </div>
                        <div class="col-12">
                            <input type="submit" class="m-auto d-block btn btn-block btn-info " value="sumbit" name="image_push">
                        </div>
                    </div>
                </form>

</section>


<x-admin-footer />
