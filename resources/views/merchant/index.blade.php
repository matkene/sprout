<!DOCTYPE html>
<html>
<title>CALCULATOR</title>
<body>

<h2>Currency Converter - CALCULATOR</h2>

<select name="buy_currency" id="buy_currency" class="the_input_element error_message text pre-format form-control  aling_left align_left required" data-content="Required" style="font-size: 13px; color: rgb(158, 158, 158); background: rgb(255, 255, 255) none repeat scroll 0% 0%; border-color: rgb(221, 221, 221);" data-default-selected-value="0"  data-required="true">
    <option value="0" selected="selected">&#8212; Select Send Currency &#8212;</option>
    <option value="">USD</option>
    <option value="">EUR</option>
    <option value="">GBP</option>
    <option value="">CAD</option>
    <option value="">AUD</option>
    <option value="">CNY</option>
 </select>
  
  <p>
    <label>Enter Send Amount</label>
    <input id="inputAmount" type="number" placeholder="Amount" oninput="Currencyconvert(this.value)" onchange="Currencyconvert(this.value)">
 </p>

 <div id="demo">Your recepient would get  </div>

 <select name="payment_currency" id="payment_currency" class="the_input_element error_message text pre-format form-control  aling_left align_left required" data-content="Required" style="font-size: 13px; color: rgb(158, 158, 158); background: rgb(255, 255, 255) none repeat scroll 0% 0%; border-color: rgb(221, 221, 221);" data-default-selected-value="0"  data-required="true">
    <option value="0" selected="selected">&#8212; Select Recipient Currency &#8212;</option>
    <option value="">NGN</option>
    <option value="">KES</option>
    <option value="">GHS</option>
 </select>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script type="text/javascript">
 function Currencyconvert($valNum){
    var b = document.getElementById("buy_currency"); // get the currency
    var c = document.getElementById("payment_currency"); 
    //var strUser = e.options[e.selectedIndex].text; 

 if(b.options[b.selectedIndex].text == 'USD' && c.options[c.selectedIndex].text == 'NGN' ){ 
 var burl ='https://api.binance.com';
 var query ='/api/v3/ticker/price';
 query += '?symbol=USDTNGN';
 var url = burl + query;
 fetch(url)
      .then(response => response.json())
      .then(data => {
      console.log(data);
      document.getElementById("demo").innerHTML = data.price * $valNum 
      });
 } 
 }   


 function CurrencyconvertWork($valNum){
 
 var burl ='https://api.binance.com';
 var query ='/api/v3/ticker/price';
 query += '?symbol=USDTNGN';
 var url = burl + query;
 fetch(url)
      .then(response => response.json())
      .then(data => {
      console.log(data);
      document.getElementById("demo").innerHTML = data.price * $valNum 
      });
 }    
 </script>




</body>
</html>