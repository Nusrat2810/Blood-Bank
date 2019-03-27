<script>
  $('#in').submit(function(e)){
    e.preventDefault();
   // alert('submit');
   var me= $(this);
   //ajax
   $.ajax(
   {
    url: me.attr('action'),
    type: 'post',
    data: me.serialize(),
    dataType: 'json',
    success: function(response){
      if(response.success == true){
        alert('Success');
      }
      else{
        alart('error');
      }
    }
   }

    )

  }
</script>


<script>
  $('#in').submit(function(e)){
    e.preventDefault();
   // alert('submit');
   var me= $(this);
   //ajax
   $.ajax(
   {
    url: me.attr('action'),
    type: 'post',
    data: me.serialize(),
    dataType: 'json',
    success: function(response){
      if(response.success == true){
        alert('Success');
      }
      else{
        $.each(response.msz, function(key,value)
        {
          var element= $('#'+key);
          element.closest('div.box').addClass('has-error');
          element.after(value);
        }
        );
      }
    }
   }

    )

  }
</script>


//prevent 

<script>
  $(function(){
  $('#in').submit(function(e){
    e.preventDefault();

  });
})
</script>