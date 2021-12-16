@extends('blog/base')
@section('contents')
    <!-- Start Post List Wrapper  -->
    <div class="axil-post-list-area axil-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-8">
                    @foreach ($items as $item)
                        <!-- Start Post List  -->
                        <div class="content-block post-list-view sticky mt--30">
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span
                                                    data-text="{{ $item->get_category()->get_label() }}">{{ $item->get_category()->get_label() }}</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="{{ $item->get_permalink() }}"
                                        target="_blank">{{ $item->get_title() }} </a></h4>
                                <p>{!! $item->get_description() !!}</p>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper"
                                                    href="{{ $item->get_author()->get_link() }}">
                                                    <span class="hover-flip-item">
                                                        <span
                                                            data-text="{{ $item->get_author()->get_name() }}">{{ $item->get_author()->get_name() }}</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>{{ $item->get_date('j F Y | g:i a') }}</li>
                                                <li>3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="https://facebook.com/Evoton-100874772198757/" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.instagram.com/evoton_software/" target="_blank"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://twitter.com/machinamaiki?t=ZCLxz0b-xPkLtkVYMnpzzw&s=09"
                                                target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://evoton.co.ke/" target="_blank"><i
                                                    class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->
                    @endforeach


                </div>
                <div class="col-lg-4 col-xl-4 mt_md--40 mt_sm--40">
                    <!-- Start Sidebar Area  -->
                    <div class="sidebar-inner">
                        {{-- <div class="axil-single-widget widget widget_categories mb--30">
                            <!-- verticle ad -->
                            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8083663507982142"
                                data-ad-slot="3592933563" data-ad-format="auto" data-full-width-responsive="true"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div> --}}

                        <!-- Start Single Widget  -->
                        <div class="axil-single-widget widget widget_categories mb--30">
                            <ul>
                                <li class="cat-item">
                                    <a href="#" class="inner">
                                        <div class="thumbnail">
                                            <img src="assets/images/post-images/category-image-01.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Tech</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="cat-item">
                                    <a href="#" class="inner">
                                        <div class="thumbnail">
                                            <img src="assets/images/post-images/category-image-02.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Style</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="cat-item">
                                    <a href="#" class="inner">
                                        <div class="thumbnail">
                                            <img src="assets/images/post-images/category-image-03.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Travel</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="cat-item">
                                    <a href="#" class="inner">
                                        <div class="thumbnail">
                                            <img src="assets/images/post-images/category-image-04.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Food</h5>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Single Widget  -->
                        {{-- <!-- verticle ad -->
                        <div class="axil-single-widget widget widget_categories mb--30">
                            <!-- verticle ad -->
                            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8083663507982142"
                                data-ad-slot="3592933563" data-ad-format="auto" data-full-width-responsive="true"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div> --}}


                        <!-- Start Single Widget  -->
                        <div class="axil-single-widget widget widget_social mb--30">
                            <h5 class="widget-title">Stay In Touch</h5>
                            <!-- Start Post List  -->
                            <ul class="social-icon md-size justify-content-center">
                                <li><a href="https://facebook.com/Evoton-100874772198757/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/evoton_software/" target="_blank"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="https://twitter.com/machinamaiki?t=ZCLxz0b-xPkLtkVYMnpzzw&s=09"
                                        target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://evoton.co.ke/" target="_blank"><i class="fas fa-link"></i></a></li>
                            </ul>
                            <!-- End Post List  -->
                        </div>
                        <!-- End Single Widget  -->
                        {{-- <!-- verticle ad -->
                        <div class="axil-single-widget widget widget_categories mb--30">
                            <!-- verticle ad -->
                            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8083663507982142"
                                data-ad-slot="3592933563" data-ad-format="auto" data-full-width-responsive="true"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>

                        <!-- verticle ad -->
                        <div class="axil-single-widget widget widget_categories mb--30">
                            <!-- verticle ad -->
                            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8083663507982142"
                                data-ad-slot="3592933563" data-ad-format="auto" data-full-width-responsive="true"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div> --}}

                    </div>
                    <!-- End Sidebar Area  -->



                </div>
            </div>
        </div>
    </div>
    <!-- End Post List Wrapper  -->


@endsection
