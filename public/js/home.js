   $('#create_user').on('submit', function(e) {
       e.preventDefault(); 
       var name = $('#name').val();
       var email = $('#email').val();
       var password = $('#pass').val();
       $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
       $.ajax({
           type: "POST",
           url: '/home',
           data: {"name":name, "email":email,"password":password},
            success: function( data ) {
              if(data.status == 'success'){
                window.location.href = '/home';
              }
               else{
                alert(data.message);
              }
            },
            error: function(msg){
                console.log(msg)
            } 
       });
   });


  $('#edit_user').on('submit', function(e) {
       e.preventDefault(); 
       var name = $('#user_name').val();
       var email = $('#user_email').val();
       var password = $('#password').val();
       var id = $('#user_id').val();
       $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
       $.ajax({
           type: "PUT",
           url: '/home/'+ id,
           data: {"name":name, "email":email,"password":password},
            success: function( data ) {
              if(data.status == 'success'){
                alert(data.message);
                window.location.href = '/home';
              }
              else{
                alert(data.message);
              }
            },
            error: function(data){
                console.log(data)
            } 
       });
   });

    $(".delete").on("submit", function(){
        return confirm("Are you sure?");
    });