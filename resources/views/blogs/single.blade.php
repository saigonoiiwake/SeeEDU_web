@extends('layouts.blog')

@section('blog_style')
<style>

.post__content-info > p {
  max-width: 100% !important;
}
</style>

@stop

@section('content')

<!-- Stunning Header -->

<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">{{ $post->title }}</h1>
    </div>
</div>

<!-- End Stunning Header -->

<!-- Post Details -->


<div class="container">
    <div class="row medium-padding120">
        <main class="main">
            <div class="col-lg-10 col-lg-offset-1">
                <article class="hentry post post-standard-details">

                    <div class="post-thumb">
                        <img src="{{ $post->featured }}" alt="pic">
                    </div>

                    <div class="post__content">


                        <div class="post-additional-info">

                            <div class="post__author author vcard">
                                作者

                                <div class="post__author-name fn">
                                    <a href="#" class="post__author-link">SeeEDU</a>
                                </div>

                            </div>

                            <span class="post__date">

                                <i class="seoicon-clock"></i>

                                <time class="published" datetime="2016-03-20 12:00:00">
                                    {{ $post->created_at->toFormattedDateString() }}
                                </time>

                            </span>

                            <span class="category">
                                <i class="seoicon-tags"></i>
                                <a href="{{ route('blog.category.single', ['id' => $post->category->id ]) }}">{{ $post->category->name}}</a>
                            </span>

                        </div>

                          <div class="post__content-info">

                                  {!! $post->content !!}

                            	<hr>
                              <div class="widget w-tags">
                                  <div class="tags-wrap">
                                    @foreach($post->tags as $tag)
                                      <a href="{{ route('tag.single', ['id' => $tag->id])}}" class="w-tags-item text-center">{{ $tag->name }}</a>
                                    @endforeach
                                  </div>
                              </div>


                              <!-- Go to www.addthis.com/dashboard to customize your tools -->
                              <div class="addthis_inline_share_toolbox_s9u5"></div>
                          </div>

                    </div>



                </article>

                <!-- 選課去 -->
                <div class="col-lg-12">
                    <aside aria-label="sidebar" class="sidebar sidebar-right">
                        <div  class="widget w-tags">
                            <div class="heading text-center">
                                <a href="{{ route('courses') }}"><h4 class="heading-title">探索優質英日語課程</h4></a>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>



                <div class="pagination-arrow">

                    @if($prev)
                    <a href="{{ route('post.single', ['slug' => $prev->slug])}}" class="btn-prev-wrap">
                        <svg class="btn-prev">
                            <use xlink:href="#arrow-left"></use>
                        </svg>
                        <div class="btn-content">
                            <div class="btn-content-title">上一篇</div>
                            <p class="btn-content-subtitle">{{ $prev->title }}</p>
                        </div>
                    </a>
                    @endif
                    @if($next)
                    <a href="{{ route('post.single', ['slug' => $next->slug])}}" class="btn-next-wrap">
                        <div class="btn-content">
                            <div class="btn-content-title">下一篇</div>
                            <p class="btn-content-subtitle">{{ $next->title }}</p>
                        </div>
                        <svg class="btn-next">
                            <use xlink:href="#arrow-right"></use>
                        </svg>
                    </a>
                    @endif
                </div>


            </div>

            <!-- End Post Details -->




            <!-- Sidebar-->

            <div class="col-lg-12">
                <aside aria-label="sidebar" class="sidebar sidebar-right">
                    <div  class="widget w-tags">
                        <div class="heading text-center">
                            <h4 class="heading-title">所有標籤</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>

                        <div class="tags-wrap">
                          @foreach($tags as $tag)
                            <a href="{{ route('tag.single', ['id' => $tag->id ])}}" class="w-tags-item">{{ $tag->name }}</a>
                          @endforeach
                        </div>
                    </div>
                </aside>
            </div>

            <!-- End Sidebar-->

        </main>
    </div>
</div>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b48c694fd25b00d"></script>


@endsection
