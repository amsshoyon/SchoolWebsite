<div class="" style="padding-bottom: 30px;padding-top: 30px;background-color: #fff;">
   <div class="container">
      <h2 class="pb-3 mb-4 border-bottom text-center">
         <span class="title_head">A</span>chevments
      </h2>
      <div class="row">

         <div class="col-md-6">
            <div class=" box_shadow">
               <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                  <div class="card-body d-flex flex-column align-items-start">
                     <strong class="d-inline-block mb-2 text-primary">World</strong>
                     <h6 class="mb-0">
                        <a class="text-dark" href="#">40 Percent of People Can’t Afford Basics</a>
                     </h6>
                     <div class="mb-1 text-muted small">Nov 12</div>
                     <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                     <a class="btn btn-outline-primary btn-sm" role="button" href="http://www.jquery2dotnet.com/">Continue reading</a>
                  </div>
                  <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/arch" style="width: 200px; height: 250px;">
               </div>
            </div>
         </div>

         <div class="col-md-6">
            <div class=" box_shadow">
               <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                  <div class="card-body d-flex flex-column align-items-start">
                     <strong class="d-inline-block mb-2 text-primary">World</strong>
                     <h6 class="mb-0">
                        <a class="text-dark" href="#">40 Percent of People Can’t Afford Basics</a>
                     </h6>
                     <div class="mb-1 text-muted small">Nov 12</div>
                     <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                     <a class="btn btn-outline-primary btn-sm" role="button" href="http://www.jquery2dotnet.com/">Continue reading</a>
                  </div>
                  <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/arch" style="width: 200px; height: 250px;">
               </div>
            </div>
         </div>

      </div>

   </div>

</div>


<div class="card" style="padding-bottom: 30px;padding-top: 30px;background-color: #EBEDEF;">
   <div class="container">
      <h2 class="mt-3 pb-3 mb-4 border-bottom text-center">
         <span class="title_head">U</span>pcoming <span class="title_head">E</span>vents
      </h2>
      <div class="row">

         <div class="col-md-4">
            <div class="box_shadow">
               <div class="card">
                  <div class="card-body">
                     <h5 class="card-title border-bottom pb-3">Card title <a href="#" class="float-right d-inline-flex share"><i class="fas fa-share-alt text-primary"></i></a></h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     <a href="#" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-md-4">
            <div class="box_shadow">
               <div class="card">
                  <div class="card-body">
                     <h5 class="card-title border-bottom pb-3">Card title <a href="#" class="float-right d-inline-flex share"><i class="fas fa-share-alt text-primary"></i></a></h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     <a href="#" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-md-4">
            <div class="box_shadow">
               <div class="card">
                  <div class="card-body">
                     <h5 class="card-title border-bottom pb-3">Card title <a href="#" class="float-right d-inline-flex share"><i class="fas fa-share-alt text-primary"></i></a></h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     <a href="#" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
                  </div>
               </div>
            </div>
         </div>

      </div>

   </div>

</div>


<div>
  <nav class="social" style="">
    <ul>
      <li><a data-toggle="modal" data-target="#myModal">Notices <i class="fa fa-bell"></i></a></li>
    </ul>
  </nav>
</div>

<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="height: 40px;padding: 5px;">
        <h4 class="modal-title">Recent News</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <ul>

                <li>
                    <a href="#">
                        <span class="glyphicon glyphicon-map-marker text-danger" ></span>
                        Lorem ipsum dolor sit amet ipsum dolor sit amet
                        <span class="label label-danger" > 35 USD </span>
                    </a>
                </li>

            </ul>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<script>
   function testAnim(x) {
    $('.modal .modal-dialog').attr('class', 'modal-dialog  ' + x + '  animated');
};
$('#myModal').on('show.bs.modal', function (e) {
  var anim = $('#entrance').val();
      testAnim(anim);
})
$('#myModal').on('hide.bs.modal', function (e) {
  var anim = $('#exit').val();
      testAnim(anim);
})
</script>
