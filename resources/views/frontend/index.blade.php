<x-header :category="$category" />

<!-- ====== start main ====== -->
<main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
        <div class="container-md" data-aos="fade-in">
            <div class="row">
                <div class="col-12">
                    <div class="swiper sliderFeaturedPosts">
                        <div class="swiper-wrapper">
                            @foreach ($crousel as $slid)
                                <div class="swiper-slide">

                                    <a href="latest-post/{{$slid['slug']}}" class="img-bg d-flex align-items-end" style="background-image: url('{{asset("/storage/image/feature/")}}/{{$slid["featureImages"]}}');">
                                        <div class="img-bg-inner">
                                            <h2>{{$slid['title']}}</h2>
                                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus
                                                rem atque.</p> -->
                                        </div>
                                    </a>
                                </div>
                            @endforeach


                            <!-- <div class="swiper-slide">
                                <a href="latest-post" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-2.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus
                                            rem atque.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="latest-post" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-3.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus
                                            rem atque.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="latest-post" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-4.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus
                                            rem atque.</p>
                                    </div>
                                </a>
                            </div> -->
                        </div>
                        <div class="custom-swiper-button-next">
                            <span class="bi-chevron-right"></span>
                        </div>
                        <div class="custom-swiper-button-prev">
                            <span class="bi-chevron-left"></span>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Slider Section -->
    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="post-entry-1 lg">
                        <a href="latest-post/{{ $latest['slug'] }}"><img src="{{asset('/storage/image/feature/')}}/{{$latest['featureImages']}}" alt="" class="img-fluid"></a>
                        <div class="post-meta"><span class="date">{{ $latest["category"] }}</span> <span class="mx-1">&bullet;</span> <span>{{$latest['date']}}</span></div>
                        <h2><a href="latest-post/{{ $latest['slug'] }}">{{ $latest["title"] }}</a></h2>
                        <!-- <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut
                            saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi atque eveniet, quo, praesentium dignissimos</p> -->
                    </div>

                </div>


                <div class="col-lg-8">
                    <div class="row g-5">
                        @foreach ($latest10 as $all)
                        <div class="col-lg-4 border-start custom-border">
                            <div class="post-entry-1">
                                <a href="latest-post/{{$all['slug']}}"><img src="{{asset('/storage/image/feature/')}}/{{$all['featureImages']}}" alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">{{ $all["category"] }}</span> <span class="mx-1">&bullet;</span> <span>{{ $all["date"] }}</span></div>
                                <h2><a href="latest-post/{{$all['slug']}}">{{ $all["title"] }}</a></h2>
                            </div>
                        </div>
                        @endforeach
<!--
                        <div class="col-lg-4">
                            @foreach ($news as $all )
                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">{{$all['category']}}s</span> <span class="mx-1">&bullet;</span> <span>{{$all['date']}}</span></div>
                                    <h2 class="mb-2"><a href="/latest-post/{{ $all['slug'] }}">{{$all['title']}}</a></h2>
                                    <span class="author mb-3 d-block">Rahul Marathe</span>
                                </div>
                            @endforeach

                        </div> -->
                    </div>
                </div>

            </div>
            <!-- End .row -->
        </div>
    </section>
    <!-- End Post Grid Section -->


    <!-- ======= Culture Category Section ======= -->
    <section class="category-section">
        <div class="container" data-aos="fade-up">

            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2>Tech</h2>
                <div><a href="category/tech" class="more">See All Tech</a></div>
            </div>

            @foreach ($tech1 as $datas)

            @endforeach
            @foreach ($tech2 as $datam)

            @endforeach

            <div class="row">
                <div class="col-md-9">
                    <div class="d-lg-flex post-entry-2">
                        <a href="latest-post/{{ $techf['slug'] }}" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                            <img src="{{asset('/storage/image/feature/')}}/{{$techf['featureImages']}}" alt="" class="img-fluid">
                        </a>
                        <div>
                            <div class="post-meta"><span class="date">{{ $techf['category'] }}</span> <span class="mx-1">&bullet;</span> <span>{{ $techf['date'] }}</span></div>
                            <h3><a href="latest-post/{{ $techf['slug'] }}">{{ $techf['title'] }}</a></h3>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="post-entry-1 border-bottom">
                                <a href="{{$datas['slug']}}"><img src="{{asset('/storage/image/feature/')}}/{{$datas['featureImages']}}" alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">{{ $datas['category'] }}</span> <span class="mx-1">&bullet;</span> <span>{{ $datas['date'] }} </span></div>
                                <h2 class="mb-2"><a href="{{$datas['slug']}}">{{$datas['title']}}</a></h2>
                             </div>

                        </div>
                        <div class="col-lg-8">
                            <div class="post-entry-1">
                                <a href="{{ $datam['slug'] }}"><img src="{{asset('/storage/image/feature/')}}/{{$datam['featureImages']}}" alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">{{ $datam['category'] }}</span> <span class="mx-1">&bullet;</span> <span>{{ $datam['date'] }}</span></div>
                                <h2 class="mb-2"><a href="{{ $datam['slug'] }}">{{ $datam['title'] }}</a></h2>
                                <!-- <span class="author mb-3 d-block">Jenny Wilson</span>
                                <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    @foreach ($tech as $all)
                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">{{$all['category']}}</span> <span class="mx-1">&bullet;</span> <span>{{$all['date']}}</span></div>
                            <h2 class="mb-2"><a href="latest-post/{{$all['slug']}}">{{$all['title']}}</a></h2>
                            <!-- <span class="author mb-3 d-block">Jenny Wilson</span> -->
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Culture Category Section -->

    <!-- ======= Business Category Section ======= -->
    <section class="category-section">
        <div class="container" data-aos="fade-up">

            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2>World Affairs</h2>
                <div><a href="category/world-affairs" class="more">See All World Affairs</a></div>
            </div>

            @foreach ( $worldaffairsfs as $da )

            @endforeach
            @foreach ( $worldaffairsfsss as $das )

            @endforeach
            @foreach ( $worldaffairs as $world )

            @endforeach

            <div class="row">
                <div class="col-md-9 order-md-2">

                    <div class="d-lg-flex post-entry-2">
                        <a href="/latest-post/{{ $worldaffairsf['slug'] }}" class="me-4 thumbnail d-inline-block mb-4 mb-lg-0">
                            <img src="{{asset('/storage/image/feature/')}}/{{$worldaffairsf['featureImages']}}" alt="" class="img-fluid">
                        </a>
                        <div>
                            <div class="post-meta"><span class="date">{{$worldaffairsf['category']}}</span> <span class="mx-1">&bullet;</span> <span>{{$worldaffairsf['date']}}</span></div>
                            <h3><a href="/latest-post/{{ $worldaffairsf['slug'] }}">{{$worldaffairsf['title']}}</a></h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="post-entry-1 border-bottom">
                                <a href="/latest-post/{{ $da['slug'] }}"><img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">{{ $da["category"] }}</span> <span class="mx-1">&bullet;</span> <span>{{ $da["date"] }}</span></div>
                                <h2 class="mb-2"><a href="/latest-post/{{ $da['slug'] }}">{{ $da['title'] }}</a></h2>
                                <!-- <span class="author mb-3 d-block">Jenny Wilson</span> -->
                            </div>

                        </div>
                        <div class="col-lg-8">
                            <div class="post-entry-1">
                                <a href="latest-post/{{ $das['slug'] }}"><img src="assets/img/post-landscape-7.jpg" alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">{{ $das["category"] }}</span> <span class="mx-1">&bullet;</span> <span>{{ $das["date"] }}</span></div>
                                <h2 class="mb-2"><a href="latest-post/{{ $das['slug'] }}">{{ $das["title"] }}</a></h2>
                                <!-- <span class="author mb-3 d-block">Jenny Wilson</span> --->
                             </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    @foreach ( $worldaffairs as $world )
                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">{{$world['category']}}</span> <span class="mx-1">&bullet;</span> <span>{{$world['date']}}</span></div>
                            <h2 class="mb-2"><a href="latest-post/{{$world['slug']}}">{{$world['title']}}</a></h2>
                            <!-- <span class="author mb-3 d-block">Jenny Wilson</span> -->
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- End Business Category Section -->

    <!-- ======= Lifestyle Category Section ======= -->
    <section class="category-section">
        <div class="container" data-aos="fade-up">
            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2>News</h2>
                <div><a href="category/new" class="more">See All News</a></div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="post-entry-1 lg">
                        <a href="/latest-post/{{ $onen['slug'] }}"><img src="{{asset('/storage/image/feature/')}}/{{$onen['featureImages']}}" alt="" class="img-fluid"></a>
                        <div class="post-meta"><span class="date">{{ $onen["category"] }}</span> <span class="mx-1">&bullet;</span> <span>{{ $onen["date"]}}</span></div>
                        <h2><a href="/latest-post/{{ $onen['slug'] }}">{{$onen['title']}}</a></h2>
                    </div>


                </div>

                <div class="col-lg-8">
                    <div class="row g-5">
                        @foreach ($news as $all)


                        <div class="col-lg-4 border-start custom-border">
                            <div class="post-entry-1">
                                <a href="latest-post/{{$all['slug']}}"><img src="{{asset('/storage/image/feature/')}}/{{$all['featureImages']}}" alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">{{ $all["category"] }}</span> <span class="mx-1">&bullet;</span> <span>{{ $all["date"] }}</span></div>
                                <h2><a href="latest-post/{{$all['slug']}}">{{ $all["title"] }}</a></h2>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-lg-4">
                            @foreach ($news as $all )
                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">{{$all['category']}}s</span> <span class="mx-1">&bullet;</span> <span>{{$all['date']}}</span></div>
                                    <h2 class="mb-2"><a href="/latest-post/{{ $all['slug'] }}">{{$all['title']}}</a></h2>
                                    <span class="author mb-3 d-block">Rahul Marathe</span>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

        </div>
            <!-- End .row -->
    </div>
</section>
    <!-- End Lifestyle Category Section -->

</main>
<!-- End #main -->


<x-footer :footerrec="$footerrec" :category="$category"/>

