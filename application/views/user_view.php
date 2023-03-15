<!doctype html>
<html>
 <head>
   <title>How to send AJAX request in Codeigniter</title>
 </head>
 <body>
 
  Select Username : <select id='sel_user'>
     <?php 
     foreach($users as $user){
	echo "<option value='".$user['email']."' >".$user['email']."</option>";
     }
     ?>
  </select>

  <!-- User details -->
  <div >
   Username : <span id='suname'></span><br/>
   Name : <span id='sname'></span><br/>
   Email : <span id='semail'></span><br/>
  </div>

  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type='text/javascript'>
  $(document).ready(function(){
 
   $('#sel_user').change(function(){
    var email = $(this).val();
    $.ajax({
     url:'<?=base_url()?>index.php/Products/userDetails',
     method: 'post',
     data: {email: email},
     dataType: 'json',
     success: function(response){
       var len = response.length;
       $('#suname,#sname,#semail').text('');
       if(len > 0){
         // Read values
         var uname = response[0].first_name+' '+response[0].last_name;
         var name = response[0].password;
         var email = response[0].email;
 
         $('#suname').text(uname);
         $('#sname').text(name);
         $('#semail').text(email);
 
       }
 
     }
   });
  });
 });
 </script>
 </body>
</html>