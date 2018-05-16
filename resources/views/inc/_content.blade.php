<div class="main" role="main">
    <div id="content" class="content full">
        <div class="container">
            <div class="row">
                <!-- Start Featured Blocks -->
                <div class="featured-blocks clearfix">
                    <div class="col-md-4 col-sm-4 featured-block">
                        <a href="{{ url('/staff') }}" class="img-thumbnail"> <img src="{{ asset('template/images/staff.jpg') }}" alt="staff"> <strong>Our Pastors</strong> <span class="more">read more</span> </a> </div>
                    <div class="col-md-4 col-sm-4 featured-block"> <a href="{{ url('/about') }}" class="img-thumbnail"> <img src="{{ asset('template/images/newhere.jpg') }}" alt="staff"> <strong>New Here</strong> <span class="more">read more</span> </a> </div>
                    <div class="col-md-4 col-sm-4 featured-block"> <a href="{{ url('/sermons') }}" class="img-thumbnail"> <img src="{{ asset('template/images/sermons.jpg') }}" alt="staff"> <strong>Sermons Archive</strong> <span class="more">read more</span> </a> </div>
                </div>
                <!-- End Featured Blocks -->
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <!-- Events Listing -->
                    <div class="listing events-listing">
                        <header class="listing-header">
                            <h3>More Coming Events</h3>
                        </header>
                        <section class="listing-cont">
                            <ul>
                                <li class="item event-item">
                                    <div class="event-date"> <span class="date">06</span> <span class="month">Aug</span> </div>
                                    <div class="event-detail">
                                        <h4><a href="single-event.html">Monday Prayer</a></h4>
                                        <span class="event-dayntime meta-data">Monday | 07:00 AM</span> </div>
                                    <div class="to-event-url">
                                        <div><a href="single-event.html" class="btn btn-default btn-sm">Details</a></div>
                                    </div>
                                </li>
                                <li class="item event-item">
                                    <div class="event-date"> <span class="date">28</span> <span class="month">Aug</span> </div>
                                    <div class="event-detail">
                                        <h4><a href="single-event.html">Staff members meet</a></h4>
                                        <span class="event-dayntime meta-data">Monday | 01:00 PM</span> </div>
                                    <div class="to-event-url">
                                        <div><a href="single-event.html" class="btn btn-default btn-sm">Details</a></div>
                                    </div>
                                </li>
                                <li class="item event-item">
                                    <div class="event-date"> <span class="date">25</span> <span class="month">Sep</span> </div>
                                    <div class="event-detail">
                                        <h4><a href="single-event.html">Evening Prayer</a></h4>
                                        <span class="event-dayntime meta-data">Friday | 06:00 PM</span> </div>
                                    <div class="to-event-url">
                                        <div><a href="single-event.html" class="btn btn-default btn-sm">Details</a></div>
                                    </div>
                                </li>
                            </ul>
                        </section>
                    </div>
                    <div class="spacer-30"></div>
                    <!-- Latest News -->
                    <div class="listing post-listing">
                        <header class="listing-header">
                            <h3>Latest News</h3>
                        </header>
                        <section class="listing-cont">
                            <ul>
                                <li class="item post">
                                    <div class="row">
                                        <div class="col-md-4"> <a href="{{ url('/') }}" class="media-box"> <img src="{{ asset('template/images/blog-image3.jpg') }}" alt="" class="img-thumbnail"> </a></div>
                                        <div class="col-md-8">
                                            <div class="post-title">
                                                <h2><a href="blog-post.html">Voluptatum deleniti atque corrupti</a></h2>
                                                <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span></div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="item post">
                                    <div class="row">
                                        <div class="col-md-4"> <a href="blog-post.html" class="media-box"> <img src="{{ asset('template/images/blog-image2.jpg') }}" alt="" class="img-thumbnail"> </a></div>
                                        <div class="col-md-8">
                                            <div class="post-title">
                                                <h2><a href="blog-post.html">Voluptatum deleniti atque corrupti</a></h2>
                                                <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span></div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
                <!-- Start Sidebar -->
                <div class="col-md-4 col-sm-6">
                    <!-- Latest Sermons -->
                    <div class="listing sermons-listing">
                        <header class="listing-header">
                            <h3>Recent Sermons</h3>
                        </header>
                        <section class="listing-cont">
                            <ul>
                                <li class="item sermon featured-sermon"> <span class="date">Feb 14, 2014</span>
                                    <h4><a href="single-sermon.html">How To Recover The Cutting Edge</a></h4>
                                    <div class="featured-sermon-video">
                                        <iframe width="200" height="150" src="https://player.vimeo.com/video/19564018?title=0&amp;byline=0&amp;color=007F7B"></iframe>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis consectetur adipiscing elit. Nulla convallis egestas rhoncus</p>
                                    <div class="sermon-actions">
                                        <a href="{{ url('/') }}" data-placement="top" data-toggle="tooltip" data-original-title="Video"><i class="fa fa-video-camera"></i></a>
                                        <a href="{{ url('/') }}" data-placement="top" data-toggle="tooltip" data-original-title="Audio"><i class="fa fa-headphones"></i></a>
                                        <a href="{{ url('/') }}" data-placement="top" data-toggle="tooltip" data-original-title="Read online"><i class="fa fa-file-text-o"></i></a>
                                        <a href="{{ url('/') }}" data-placement="top" data-toggle="tooltip" data-original-title="Download PDF"><i class="fa fa-book"></i></a>
                                    </div>
                                </li>
                                <li class="item sermon">
                                    <h2 class="sermon-title"><a href="single-sermon.html">Voluptatum deleniti atque corrupti</a></h2>
                                    <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span> </li>
                                <li class="item sermon">
                                    <h2 class="sermon-title"><a href="single-sermon.html">Voluptatum deleniti atque corrupti</a></h2>
                                    <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span> </li>
                                <li class="item sermon">
                                    <h2 class="sermon-title"><a href="single-sermon.html">Voluptatum deleniti atque corrupti</a></h2>
                                    <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span> </li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>