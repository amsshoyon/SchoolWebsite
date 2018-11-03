
@if(count($Notices) > 0)

<div class="marquee">
  <div>
  	@foreach($Notices as $Notice)
      <span><i class="fa fa-star"></i>{{$Notice->title}}: {{$Notice->description}}  ////</span>
      @endforeach
  </div>
</div>


@else
<div class="marquee">
  <div>
      <span><i class="fa fa-star"></i>Notice One : Description  ////</span>
      <span><i class="fa fa-star"></i>Notice Two : Description  ////</span>
      <span><i class="fa fa-star"></i>Notice Three : Description  ////</span>
      <span><i class="fa fa-star"></i>Notice Four : Description  ////</span>
      <span><i class="fa fa-star"></i>Notice Five : Description  ////</span>
  </div>
</div>

@endif