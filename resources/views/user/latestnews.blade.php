<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">

      @foreach ($newz as $news)
      <div class="card-blog">
 
       
            <div class="header">
              <div class="post-category">
                <a href="#">{{ $news->header }}</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="latestnews_image/{{ $news->image }}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">{{ $news->body }} case</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="" alt="">
                  </div>
                  <span>{{ $news->publisher }}</span>
                </div>
                <span class="mai-time"></span> 1 week ago
              </div>
            </div>
          </div>
        
     

    
      @endforeach
    </div>
 
      <div class="col-12 text-center mt-4 wow zoomIn">
        <a href="blog.html" class="btn btn-primary">Read More</a>
      </div>

    </div>
     
  
    </div>
  </div> <!-- .page-section -->