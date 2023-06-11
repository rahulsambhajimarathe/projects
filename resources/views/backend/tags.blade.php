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
        <form method="post" enctype="multipart/form-data" action="/backend/tags/add">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Create Tags</label>
            <input type="text" class="form-control" name="tagname" placeholder="enter tag name" >

            <input type="submit" class="btn btn-success mt-3" name="submit" value="submit" aria-describedby="helpId" placeholder="enter tag name">

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
                    
                    @foreach($taglist as $one)
                    <tr>
                        <th scope="row">{{$one['id']}}</th>
                        <td>{{$one['tag_name']}}</td>
                        <td>{{$one['created_at']}}</td>
                        <td>
                            <a href="/backend/tags/{{$one['id']}}">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>   

<x-admin-footer />