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
    <div class="white_card_body">
        <form>
        <div class="mb-3">
          <label for="" class="form-label">Create Tags</label>
          <input type="text"
            class="form-control" name="tag_name" id="" aria-describedby="helpId" placeholder="enter tag name">
          <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
        </div>
        </form>
        <!-- <div class="justify-content-center display-flex"> -->
            <h2 class="text-center">Tags</h2>
        <!-- </div> -->
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tags</th>
                        <th scope="col">Date of create</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>   

<x-admin-footer />