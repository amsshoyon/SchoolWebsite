//Image preview
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };

//Delete confirmation

function deleletconfig(){

	$.confirm({
	    title: 'Confirm Delete!',
	    buttons: {
	        confirm: function () {
	            $.alert('Confirme!');
	        },
	        cancel: function () {
	            $.alert('Cancele!');
	        }
	    }
	});

}