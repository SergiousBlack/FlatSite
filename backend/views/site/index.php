<?php
use yii\widgets\Pjax;
use yii\helpers\Html;
?>
<input type="button" class="btn btn-success" id="addNewLine" value="Добавить" > 



<div id="container"> 
     
</div> 


<script>
   $('#addNewLine').on('click',function(){
        $('#container').append('<p> СТРОКА  <span class="fa fa-trash" onclick="fuck(this)" /></p>');
   });
    
   function fuck(object){
       
       $($(object).parents().get(0)).remove();
        
   }
</script>



 