<section class="footer">
    <div class="container">
    	<div class="row">
        	<div class="col-lg-4  col-md-4 col-sm-4">
            	<div class="footer_dv">
                	<h4>Important Links</h4> 
                	<ul>
                        @if(count($ImpLinks) > 0)
                        @foreach($ImpLinks as $ImpLink)
                    	<li class="line_rv"><a href="{{$ImpLink->link}}">{{$ImpLink->title}}</a></li>
                        @endforeach
                        @else
                        <li class="line_rv"><a href="">Education Board</a></li>
                        <li class="line_rv"><a href="">S.S.C. Result</a></li>
                        <li class="line_rv"><a href="">Bd Books</a></li>
                        <li class="line_rv"><a href="">Teachers Association</a></li>
                        <li class="line_rv"><a href="">Govt. Organization</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4">

            	<div class="footer_dv">
                	<h4>Navigations</h4>
                	<ul>
                    	<li><a href="">Home</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">History</a></li>
                        <li><a href="">Our Members</a></li>
                        <li><a href="">Mission</a></li>
                    
                    </ul>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4">
            	<div class="footer_dv">
                    <h4>Contact Us</h4>
                    <ul>
                        @if(count($socials) > 0)
                        @foreach($socials as $social)
                        <li><a href="{{$social->link}}">{{$social->title}}</a></li>
                        @endforeach
                        @else
                        <li><a href="">Email Address</a></li>
                        <li><a href="">Contact to Office</a></li>
                        <li><a href="">Facebook</a></li>
                        <li><a href="">Instagram</a></li>
                        <li><a href="">Whatsapp</a></li>
                        <li><a href="">Whatsapp</a></li>
                        @endif
                    </ul>
                </p></div>
            </div>
        </div>
    </div>

    

</section>

<div class="" style="background-color: #000;padding: 30px;">

    <p class="text-center font_white">&copy All right Reversed. <a href="" target="_blank">SpiderWeb</a></p>

</div>       