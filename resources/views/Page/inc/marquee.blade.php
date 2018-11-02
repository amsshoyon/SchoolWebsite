<div class="marquee">
  <div>

        @foreach($Notices as $Notice)
            <span><i class="fa fa-star"></i>{{$Notice->title}}</span>
        @endforeach
  </div>
</div>