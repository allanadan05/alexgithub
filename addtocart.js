//add to cart
function edit(ipinasa){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
              var buongObject=JSON.parse(this.responseText);
              document.getElementById("userid").value = forIpinasa;
      }
    };

      var forIpinasa = ipinasa;
      console.log(forIpinasa);
      var token = "edit";
      xhttp.open("GET", "userCrud.php?forIpinasa="+forIpinasa+"&token="+token, true);
      xhttp.send();
  }
