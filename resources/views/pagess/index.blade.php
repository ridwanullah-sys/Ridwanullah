@extends('layouts.app')

@section('content')    
    
    <div class="">
	    <section class="cta-section theme-bg-light py-5">
		    <div class="container text-center">
			    <h2 class="heading">my Blog - My first blog website to test my laravel skill</h2>
			    
		    </div><!--//container-->
        </section>
        
        @foreach ($posts as $post)
        
        
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="storage/images/blog/blog-post-thumb-1.jpg" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="/post/{{$post->id}}">{{$post->title}}</a></h3>
						    <div class="meta mb-1"><span class="date">Published on {{$post->created_at}}</span></div>
						    <div class="intro">{{$post->description}}</div>
						    <a class="more-link" href="/post/{{$post->id}}">Read more &rarr;</a>
					    </div> <!--//media-body-->
				    </div><!--//media-->
                </div><!--//item-->
            </div>
	    </section>
			    @endforeach
			    
			   < <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded" href="#">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
		   
	    
	    
    
    </div><!--//main-wrapper-->
    
    
  @endsection