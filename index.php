<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="s.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="jquery-3.5.0.min.js"></script>
   <title>pop</title>
</head>
<body>
<div class="butt">
<a href="#" class="open">Города</a></div>
<div class="bg"> 
<div class="close">Закрыть</div>
<label>
   
<form class="popup" method="POST" action="/vvv.php">
  <div class="body">
<input type="text" id="que" placeholder="Какой город?">
<!-- <input type="button" class="butclass" value="Найти"/> -->
<input type="button" class="addclass" value="Добавить"/>
<br><div id="city"></div></div>
</form>
</label>
</div>
<script>
   var bg = document.querySelector('.bg'); 
var popup = document.querySelector('.popup'); 
var open = document.querySelectorAll('.open'); 
var close = document.querySelector('.close'); 
open.forEach((button) => { 
    button.addEventListener('click', (e) => { 
        e.preventDefault(); 
        bg.classList.add('active'); 
        popup.classList.add('active'); 
        worker();
    })
});
close.addEventListener('click',() => { 
    bg.classList.remove('active'); 
    popup.classList.remove('active'); 
});
document.addEventListener('click', (e) => { 
    if(e.target === bg) {
        bg.classList.remove('active'); 
        popup.classList.remove('active'); 
    }
});




function worker() {
      $.ajax({
        url: './showci.php',
        method: 'POST',
        data: {'test':'yes'},
        success: function(data) {
          $('#city').html(data);
        },
      
      });
    }


    // $(Document).on('click','.butclass',function(e){
    // e.preventDefault();

    // var que=$('#que').val();
    
    // $.ajax({
    //     url:'./vvv.php',
    //     data:{'que':que},
    //     dataType: "html",
    //     method:"post",
    //     success:function(data) {
    //       $('#city').html(data);
    //     },
    // });
    // });


document.querySelector("#que").addEventListener("input",goo);
      function goo(e){
    e.preventDefault();

    var que=$('#que').val();
    
    $.ajax({
        url:'./vvv.php',
        data:{'que':que},
        dataType: "html",
        method:"post",
        success:function(data) {
          $('#city').html(data);
        },
    });
    };
$(Document).on('click','.addclass',function(e){
    e.preventDefault();

    var que=$('#que').val();
    
    $.ajax({
        url:'./addcity.php',
        data:{'que':que},
        dataType: "html",
        method:"post",
        success:function(html){
          $("#que").val('');
          worker();
            
        },
    });
    });
    
</script>



</body>
</html>