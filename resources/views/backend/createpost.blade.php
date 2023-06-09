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
    <div class="container-fluid p-0 ">
        <div class="row ">
            <div class="col-12">
                <div class="dashboard_header mb_50">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="dashboard_header_title">
                                <h3>Add Post</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">

                <div class="row">
                    <div class="col-sm-10">
                        <form method="post" action="/backend/create_post/data">
                            @csrf
                            <h3>this is for heading purpose</h3>
                            <input type="text" name="title" class="form-control mb-4" placeholder="heading">
                            
                            <h3>This is main Your main content you can not put image inside it currently off</h3>

                            <textarea class="form-control " name="maindata" rows="3" id="editor"></textarea>
                            
                            <h3 class="mb-3 mt-3">Image you can only add two image and </h3>

                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile02" name="imgae-1">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile03"  name="imgae-2">
                                    </div>
                                </div>
                            </div>

                            <h3 class="mb-3 mt-3">Tag , category and sub category ! app sirf ek category aur sub category use laga sakte hae ek post mae aur app khali ek hi tag us kar sakte hae abhi sirf itna hi featue diya hae is program mae</h3>

                            <div class="row">

                                <div class="col-4">
                                    <h4>This is Tag</h4>
                                    <div class="mb-3">
                                        <input type="text" name="tags" class="form-control" id="exampleInputTags" placeholder="Tags">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <h4>This is category</h4>
                                    <div class="mb-3">
                                        <select class="form-select" id="inputGroupSelect01" name="category">
                                            <option value="category-name1">category One</option>
                                            <option value="category-name2">category Two</option>
                                            <option value="category-name3">category Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <h4>This is sub category</h4>

                                    <div class="mb-3">
                                        <select class="form-select" id="inputGroupSelect01" name="subcategory">
                                            <option value="subcategoryOne">sub category One</option>
                                            <option value="subcategoryTwo">sub category Two</option>
                                            <option value="subcategoryThree">sub category Three</option>
                                        </select>
                                    </div>
                                    <span>First select categoy and then select sub category</span>
                                </div>
                            </div>
                            

                            <!-- this is status -->
                            <h3 class="mb-3 mt-3">status</h3>

                            <div class="row">

                                <div class="col-4">
                                    <h4>Author Name</h4>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="exampleInputTags" placeholder="Author Name" name="author_name">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <h4>Private/Public</h4>
                                    <div class="mb-3">
                                        <select class="form-select" id="inputGroupSelect01" name="show">
                                            <option value="Private">Private</option>
                                            <option value="Public">Public</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <h4>This is data</h4>
                                    <div class="mb-3">
                                        <input class="datepicker-here digits form-control" type="text" data-multiple-dates="1" data-language="en" name="data">
                                    </div>
                                </div>
                            </div>
                            
                            <input type="submit" name="sumit" class="btn btn-dark mt-5" value="sumit">
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


</section>
<script src="/ckeditor5/ckeditor.js"></script>
<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ) )
		.catch( error => {
			console.error( error );
		} );
</script>
<x-admin-footer />