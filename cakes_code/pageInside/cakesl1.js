window.onload = function() {
   update_price();
}

function status_qty(){
   return document.getElementById('number').value;
}

function update_price(){
   var up_price = document.getElementById('sar').innerHTML;
   document.getElementById("price_hidden").value = up_price;
}

function myNewFunction(element) {
   var text = element.options[element.selectedIndex].value;
   var qty = status_qty();
   var new_price = 0;

   if(200 == text){
      new_price = 200;
   }
   else if(250== text){
     new_price = 250;
   }
   else if(300== text){
      new_price =300;
   }
   else if(400== text){
      new_price =400;
   }

   document.getElementById("sar").innerHTML = new_price * qty;
   update_price();

} 
function status_size(){
   var current=document.getElementById('cars').value;
 return current;
}

function increaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 1 : value;
   var size= status_size();

    if(value<=4){
     
       value++;
       document.getElementById('number').value = value;
       document.getElementById('sar').innerHTML=size*value;
       update_price();
    }
  }
  
  function decreaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 1 : value;
    var size= status_size();

   if(value>=2){
      
      value--;
       document.getElementById('number').value = value;
       document.getElementById('sar').innerHTML=size*value;
       update_price();
    }
  }
  // __________________________

         function shownames(){
         
            document.getElementById('name').type="text";
            document.getElementById('phonenumber').type="text";
            document.getElementById('addresss').type="text";
            document.getElementById('email').type="text";
            document.getElementById('butn').type="submit";
      

            var x = document.getElementById("chs");
            if (x.style.display === "none") {
              x.style.display = "block";
            } else {
              x.style.display = "none";
            }
         }               
   
