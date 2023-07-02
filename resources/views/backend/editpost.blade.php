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
                                <h3>Edit Post</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">

                <div class="row">
                    <div class="col-sm-10">
                        <form method="post" action="/backend/edit_post/{{$data['id']}}">
                            @csrf
                            <h3>this is for heading purpose</h3>
                            <input type="text" name="title" class="form-control mb-4" placeholder="heading" value="{{$data['title']}}">
                            <h3>this is for Slug purpose</h3>
                            <input type="text" name="slug" class="form-control mb-4" placeholder="heading" value="{{$data['slug']}}">

                            <h3>This is main Your main content you can not put image inside it currently off</h3>

                            <textarea class="form-control " name="maindata" rows="3" id="editor" value="">{{$data['maindata']}}</textarea>

                            <h3 class="mb-3 mt-3">Image you can only add two image and </h3>
                            <div class="row">
                                <div class="col-6">
                                <h5>This is Feature images</h5>

                                    <select class="form-select" id="inputGroupSelect01" name="featuer">
                                            @foreach ($feature as $all)
                                                <option value="{{$all['name']}}">
                                                    <img src="{{asset('/storage/image/feature/')}}/{{$all['name']}}" name="feature_img" lass="img-fluid rounded-top " alt="" style="width:100px;">
                                                    <span>{{$all['name']}}</span>
                                                </option>
                                            @endforeach
                                    </select>
                                </div>

                                <div class="col-6">
                                    <h5>This is Gallry images</h5>
                                    <select class="form-select" id="inputGroupSelect01" name="gallery">
                                            @foreach ($gallery as $gal)
                                                <option value="{{$gal['name']}}">
                                                    <img src="{{asset('/storage/image/feature/')}}/{{$gal['name']}}" name="feature_img" lass="img-fluid rounded-top " alt="" style="width:100px;">
                                                    <span>{{$gal['name']}}</span>
                                                </option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                <h5>This is Feature images</h5>
                                    @foreach ($feature as $all)
                                        <input type="radio" name="featuer" value="{{$all['name']}}">
                                        <img src="{{asset('/storage/image/feature/')}}/{{$all['name']}}" name="feature_img" lass="img-fluid rounded-top " alt="" style="width:100px;">
                                        <span class="mb-3 d-block"></span>

                                    @endforeach
                                </div>

                                <div class="col-6">
                                    <h5>This is Gallry images</h5>
                                    @foreach ($gallery as $gal)
                                        <input type="radio" name="gallery" value="{{$gal['name']}}">
                                        <img src="{{asset('/storage/image/gallery/')}}/{{$gal['name']}}" name="feature_img" lass="img-fluid rounded-top " alt="" style="width:100px;">
                                        <span  class="mb-3 d-block"></span>

                                    @endforeach
                                </div>
                            </div>

                            <div class="row">

<div class="col-4">
    <h4>This is Tag</h4>
    <div class="mb-3">
        @foreach ($tags as $tag)
            <div class="row justify-content-center align-items-center g-2 mb-2">
                <div class="col-2">
                    <input type="checkbox" name="tags[]" id="{{$tag['id']}}" aria-describedby="helpId" value="{{$tag['tag_name']}}">
                </div>
                <div class="col-10 ">
                    <span>{{$tag["tag_name"]}}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="col-4">
    <h4>This is category</h4>
    <div class="mb-3">
        <select class="form-select" id="inputGroupSelect01" name="category">
            @foreach ($category as $cat)
                <option value="{{$cat['cat_name']}}">{{$cat['cat_name']}}</option>
            @endforeach
        </select>
    </div>
</div>

<!-- <div class="col-4">
    <h4>This is sub category</h4>

    <div class="mb-3">
        <select class="form-select" id="inputGroupSelect01" name="subcategory">
            <option value="subcategoryOne">sub category One</option>
            <option value="subcategoryTwo">sub category Two</option>
            <option value="subcategoryThree">sub category Three</option>
        </select>
    </div>
    <span>First select categoy and then select sub category</span>
</div> -->
</div>

                            <!-- this is status -->
                            <h3 class="mb-3 mt-3">status</h3>

                            <div class="row">

                                <!-- <div class="col-4">
                                    <h4>Author Name</h4>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="exampleInputTags" placeholder="Author Name" name="author_name">
                                    </div>
                                </div> -->

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
                                        <input class="datepicker-here digits form-control" type="text" data-multiple-dates="1" data-language="en" name="date" >
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
