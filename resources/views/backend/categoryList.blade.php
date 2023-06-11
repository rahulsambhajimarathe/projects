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
                create new cate
            </div>
        </div>
    </div>
</div>

<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row">

            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Category List</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <!-- <h6 class="card-subtitle mb_20">Use contextual classes to color table rows or individual cells.</h6> -->
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Category Id</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Category Status</th>
                                        <th scope="col">Category Edit</th>
                                        <th scope="col">Category Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $one)
                                        <tr class="table-light">
                                            <th scope="row">{{$one["id"]}}</th>
                                            <td>{{$one["cat_name"]}}</td>
                                            @if($one["cat_status"] == "1")
                                                <td class="text-success">active</td>
                                            @else
                                                <td class="text-danger">Unactive</td>
                                            @endif
                                            <td><a class="text-dark" href="/backend/edit_category/{{$one['id']}}"><i class="ti-pencil-alt"></i> Edit</a></td>
                                            <td><a class="text-dark" href="/backend/delte_category/{{$one['id']}}"><i class="ti-trash"></i>Delete</a></td>
                                        </tr>
                                    @endforeach

                                    <!-- {{print_r(gettype($one["status"])."<br>")}} -->

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer_part">
    <div class="container">
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