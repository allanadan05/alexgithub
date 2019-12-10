//add

function addtocart(ipinasa){
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
      var token = "addtocart";
      xhttp.open("GET", "addtocart.php?forIpinasa="+forIpinasa+"&token="+token, true);
      xhttp.send();
  }

//delete

function deleteoncart(ipinasa){
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
