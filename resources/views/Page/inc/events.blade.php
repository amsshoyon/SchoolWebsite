
<h2>Upcoming Events</h2>
<div class="colorgraph"></div>
<br>


<div class="col-md-12">

<ul class="media-list">

@foreach($Events as $Event)
	<li class="media events box_shadow">
	    <div class="media-left">
	        <div class="panel panel-danger text-center date">
	            <div class="panel-heading month">
	                <span class="panel-title strong">
	                    {{str_limit($Event->month, 3, '')}}
	                </span>
	            </div>
	            <div class="panel-body day text-danger">
	                {{str_limit($Event->date, 2, '')}}
	            </div>
	        </div>
	    </div>
	    <div class="media-body">
	        <h4 class="media-heading">
	            {{$Event->title}}
	        </h4>
	        <span>
	            {{str_limit($Event->description, 100 ,'...')}}
	        </span>
	    </div>
	</li>
@endforeach

</ul>

</div>