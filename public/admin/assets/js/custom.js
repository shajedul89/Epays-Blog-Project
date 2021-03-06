(function($){
$(document).ready(function(){


$('a#logout').click(function(e){

	e.preventDefault();

	$('form#logout_form').submit();



});

 //CK-editor

 CKEDITOR.replace( 'ckeditor' );

  //image-preview

  $(document).on('change','input#fimg',function(e){
    e.preventDefault();
    let post_img_url =URL.createObjectURL(e.target.files[0]);
    $('img#feather_img').attr('src',post_img_url);
    $('#first').hide();
    $('#second').show();
});

 /**
         *  Category Update Model Show
         */

  $('.update_cat').click(function(e){
    e.preventDefault();

   $id = $(this).attr('edit_id');
   $.ajax({
    url:'postCategory/'+ $id+'/edit' ,
    success:function(data){

        $('#edit_cat_modal form input[name="cat_name"]').val(data.name);
        $('#edit_cat_modal form input[name="cat_id"]').val(data.id);
        $('#edit_cat_modal').modal('show');

    }


      });

});


 /**
         *  Tag Update Model Show
         */

  $('.update_tag').click(function(e){
    e.preventDefault();

   $id = $(this).attr('edit_id');
   $.ajax({
    url:'postTag/'+ $id+'/edit' ,
    success:function(data){

        $('#edit_tag_modal form input[name="tag_name"]').val(data.name);
        $('#edit_tag_modal form input[name="tag_id"]').val(data.id);
        $('#edit_tag_modal').modal('show');

    }


      });

});

        // Data table set Up
        $(document).ready( function () {
            $('#post_table').DataTable();
        } );


        //  Category delete fix
        $('.del_button').click(function(){
            let conf= confirm('Ary you sure');
            if(conf==true)
            {
                return true;
            }
            else{
                return false;
            }

         });


         // Menu Fix
         $('#sidebar-menu ul li ul li.ok').parent('ul').slideDown();
         $('#sidebar-menu ul li ul li.ok').parent('ul').parent('li').children('a').addClass('subdrop');
         $('#sidebar-menu ul li ul li.ok a').css('color','#5ae8ff');
         $('#sidebar-menu ul li ul li.ok').parent('ul').parent('li'). children('a') .css('background-color','#19c1dc');


});
})(jQuery)



