<section class="footer">
    <div class="container">
    	<div class="row">
        	<div class="col-lg-4  col-md-4 col-sm-4">
            	<div class="footer_dv">
                	<h4>Important Links</h4> 
                	<ul>
                        @foreach($ImportantLinks as $ImportantLink)
                    	<li class="line_rv"><a href="{{$ImportantLink->link}}">{{$ImportantLink->title}}</a></li>
                        @endforeach
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
                	<h4>Contact us</h4>
                	<p>মিন্নত প্লাজা (৩য় তলা), কলাকান্দি, আব্দুল্লাহপুর, দক্ষিণ কেরানীগঞ্জ, ঢাকা-১৩১১ </p>
      			<p>+880-10000-******<br>

				
                </p></div>
            </div>
        </div>
    </div>

    

</section>

<div class="" style="background-color: #000;padding: 30px;">

    <p class="text-center font_white">&copy All right Reversed. <a href="" target="_blank">SpiderWeb</a></p>

</div>       