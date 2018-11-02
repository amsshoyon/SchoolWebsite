
<div class="container padding">
    <div class="col-md-offset-2 col-md-8">
        <h1 class="font-bold text-center">{{$Type->type}}</h1>
        <hr>
    </div>
    <div class="row mt-30">


        @foreach($Members as $Member)
        <div class="col-md-3 col-sm-6">
            <div class="box15">
                <img src="/images/member/{{$Member->image}}" alt="">
                <div class="box-content text-center">
                    <h3 class="title">{{$Member->name}}</h3>
                    <ul class="icon">
                        <li>{{$Member->designation}}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
