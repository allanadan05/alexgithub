function searchoninput(){
	 var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) { 
          var buongObject = JSON.parse(this.responseText);
          document.getElementById('showstore2').innerHTML = buongObject.product;
          }
        };
          var tosearch=document.getElementById('search-input').value;
          var token = "searchoninput";
          xhttp.open("GET", "process.php?tosearch="+tosearch+"&token="+token, true);
          xhttp.send();
}

function searchselectedcategory(){
  document.getElementById('search-input').value=document.getElementById('selectedcat').value;
  searchoninput();
  document.getElementById('search-input').focus();

}

function searchtickedbox(str){
  var old=document.getElementById('search-input').value;
  document.getElementById('search-input').value=str+old;
  document.getElementById('search-input').focus();
  searchoninput();
}

function searchbyprize(){
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) { 
          var buongObject = JSON.parse(this.responseText);
          document.getElementById('showstore2').innerHTML = buongObject.product;
          }
        };
  var pricemax=document.getElementById('price-max').value;
  var pricemax=parseInt(pricemax, 10);
  var pricemin=document.getElementById('price-min').value;
  var pricemin=parseInt(pricemin, 10);
  var token = "searchbyprize";
  xhttp.open("GET", "process.php?token="+token+"&pricemax="+pricemax+"&pricemin="+pricemin, true);
  xhttp.send();
}



function checkoutcart(accountid){
  var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) { 
          }
        };
  var userid=accountid;
  var token = "checkoutcart";
  xhttp.open("GET", "process.php?token="+token+"&userid="+userid, true);
  xhttp.send();
}
