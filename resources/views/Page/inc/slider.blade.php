@if(count($Sliders) > 0)
  {{-- Dynamic Slider --}}
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: -20px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @php
            $i = 0;
            $SliderActive = '';
        @endphp

        @foreach($Sliders as $Slider)
            @php
                if ($i == 0) {
                    $SliderActive = 'active';
                }else{
                    $SliderActive = '';
                }
            @endphp
            <li data-target="#myCarousel" data-slide-to="{{$i}}" class="{{$SliderActive}}"></li>
            @php
                $i++;
            @endphp
        @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        @php
            $i = 0;
        @endphp
        @foreach($Sliders as $Slider)
            @php
                if ($i == 0) {
                    $SliderActive = 'active';
                }else{
                    $SliderActive = '';
                }
            @endphp
            <div class="item {{$SliderActive}}">
              <img src="/images/slider/{{$Slider->image}}" alt="Los Angeles" style="width:100%;">
              <div class="carousel-caption">
                <h3 class="text-center" style="font-size:30px;">{{$Slider->title}}</h3>
                <p class="text-center"  style="font-size:20px;">{{$Slider->subtitle}}</p>
              </div>
            </div>
            @php
                $i++;
            @endphp
        @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>



@else
  {{-- Default Slider --}}
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: -20px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1" class=""></li>
       <li data-target="#myCarousel" data-slide-to="2" class=""></li>
       <li data-target="#myCarousel" data-slide-to="3" class=""></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

        <div class="item active">
          <img src="/images/slider_1.jpg" alt="Los Angeles" style="width:100%;">
          <div class="carousel-caption">
            <h3 class="text-center" style="font-size:30px;">Title One</h3>
            <p class="text-center"  style="font-size:20px;">Slider Short Description</p>
          </div>
        </div>

        <div class="item">
          <img src="/images/slider_2.jpg" alt="Los Angeles" style="width:100%;">
          <div class="carousel-caption">
            <h3 class="text-center" style="font-size:30px;">Title One</h3>
            <p class="text-center"  style="font-size:20px;">Slider Short Description</p>
          </div>
        </div>

        <div class="item">
          <img src="/images/slider_3.jpg" alt="Los Angeles" style="width:100%;">
          <div class="carousel-caption">
            <h3 class="text-center" style="font-size:30px;">Title One</h3>
            <p class="text-center"  style="font-size:20px;">Slider Short Description</p>
          </div>
        </div>

        <div class="item">
          <img src="/images/slider_4.jpg" alt="Los Angeles" style="width:100%;">
          <div class="carousel-caption">
            <h3 class="text-center" style="font-size:30px;">Title One</h3>
            <p class="text-center"  style="font-size:20px;">Slider Short Description</p>
          </div>
        </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  @endif