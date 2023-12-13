<script src="{{ asset('/') }}assets/js/jquery-3.6.0.min.js"></script>
<script src="{{ asset('/') }}assets/js/feather.min.js"></script>
<script src="{{ asset('/') }}assets/js/jquery.slimscroll.min.js"></script>
<script src="{{ asset('/') }}assets/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/') }}assets/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('/') }}assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}assets/plugins/select2/js/select2.min.js"></script>
<script src="{{ asset('/') }}assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="{{ asset('/') }}assets/plugins/sweetalert/sweetalerts.min.js"></script>
<script src="{{ asset('/') }}assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="{{ asset('/') }}assets/plugins/apexchart/chart-data.js"></script>
<script src="{{ asset('/') }}assets/js/script.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>
<script type="text/javascript">
      $(document).ready(function() {
        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            if(category_id) {
                $.ajax({
                    url: "{{  url('/subcategory/ajax') }}/"+category_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                    	//$('select[name="subcategory_id"]').html('');
                       var d =$('select[name="subcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.category_name + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });
    });
	function mainThamUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}	
 $(document).ready(function(){
  $('#multiImg').on('change', function(){ //on file input change
     if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
     {
         var data = $(this)[0].files; //this file data
          
         $.each(data, function(index, file){ //loop though each file
             if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                 var fRead = new FileReader(); //new filereader
                 fRead.onload = (function(file){ //trigger function on successful read
                 return function(e) {
                     var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                 .height(80); //create image element 
                     $('#preview_img').append(img); //append image to output element
                 };
                 })(file);
                 fRead.readAsDataURL(file); //URL representing the file's data.
             }
         });
          
     }else{
         alert("Your browser doesn't support File API!"); //if File API is absent
     }
  });
 });
  
 </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('/') }}assets/js/code.js"></script>