//add-to-cart
function addtocart(ipinasa){

  var username=document.getElementById('username').innerHTML;
  if(username=="Log In"){
    alert('You must log in first.');
    window.location.href="login.php";
  }else{
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4 && xhttp.status == 200) { 
        var buongObject = JSON.parse(this.responseText);
                  //console.log("Response" + this.responseText);
                  document.getElementById('cartresponse').innerHTML = buongObject.product;
                  document.getElementById('showQty').innerHTML = buongObject.quantity;
                  document.getElementById('subtotal').innerHTML = buongObject.subtotal;
                  document.getElementById('selectedItem').innerHTML = buongObject.si;
                }
              };
              var forIpinasa = ipinasa;
              console.log(forIpinasa);
              var token = "addtocart";
              xhttp.open("GET", "addtocart.php?forIpinasa="+forIpinasa+"&token="+token, true);
              xhttp.send();
            }
          }

//delete-from-cart
function deleteoncart(ipinasa){
  var username=document.getElementById('username').innerHTML;
  if(username=="Log In"){
    alert('You must log in first.');
    window.location.href="login.php";
  }else{
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
        var buongObject=JSON.parse(this.responseText);
        document.getElementById('cartresponse').innerHTML = buongObject.product;
        document.getElementById('showQty').innerHTML = buongObject.quantity;
        document.getElementById('subtotal').innerHTML = buongObject.subtotal;
        document.getElementById('selectedItem').innerHTML = buongObject.si;
      }
    };

    var forIpinasa = ipinasa;
    console.log(forIpinasa);
    var token = "delete";
    xhttp.open("GET", "addtocart.php?forIpinasa="+forIpinasa+"&token="+token, true);
    xhttp.send();
  }
} 

//update-from-cart
function updateoncart(ipinasa, count){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      var buongObject=JSON.parse(this.responseText);
      document.getElementById('updatecartresponse'+count).innerHTML = buongObject.ucr;
    }
  };
  var quantity = document.getElementById('quantity'+count).value;

  var forIpinasa = ipinasa;
  console.log(forIpinasa);
  var token = "update";
  xhttp.open("GET", "process1.php?forIpinasa="+forIpinasa+"&token="+token+"&quantity="+quantity, true);
  xhttp.send();
}

//delete-multiple-from-cart
function deleteonviewcart(ipinasa, count){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
    }
  };


  var forIpinasa = ipinasa;
  console.log(forIpinasa);
  var token = "delete";
  var confirmation = confirm("are you sure you want to remove the item?");

    if (confirmation) {
     // execute ajax
        window.location.reload(true);
    }
    else
    {

    }
  xhttp.open("GET", "process1.php?forIpinasa="+forIpinasa+"&token="+token+"&confirmation="+confirmation, true);
  xhttp.send();
}