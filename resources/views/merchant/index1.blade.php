<!DOCTYPE html>
<html>
<title>CALCULATOR</title>
<body>

<h2>Curreny Converter</h2>
<p>Type a value in the Feet field to convert the value to Meters:</p>

<p>
  <label>ENTER SEND AMOUNT</label>
  <input id="inputFeet" type="number" placeholder="Feet" oninput="LengthConverter(this.value)" onchange="LengthConverter(this.value)"><br/>
  
  <select name="buy_currency" class="the_input_element error_message text pre-format form-control  aling_left align_left required" data-content="Required" style="font-size: 13px; color: rgb(158, 158, 158); background: rgb(255, 255, 255) none repeat scroll 0% 0%; border-color: rgb(221, 221, 221);" data-default-selected-value="0" id="" data-required="true">
  <option value="0" selected="selected">&#8212; Select &#8212;</option>
  <option value="1">USD</option>
  <option value="1.2">EUR</option>
  <option value="1.34">GBP</option>
  <option value="0.78">CAD</option>
  <option value="0.74">AUD</option>
  <option value="0.2">CNY</option>
  </select> 

  <input name="enter_buy_amount" type="text" id="spinner" class="error_message the_spinner the_input_element form-control  aling_left align_left required" data-minimum="100.00" data-maximum="50000" data-step="1" data-starting-value="0" data-decimals="00" data-postfix-icon="" data-prefix-icon="" data-postfix-text="" data-prefix-text="" data-postfix-class="btn-default" data-prefix-class="btn-default" data-down-icon="fa fa-minus" data-up-icon="fa fa-plus" data-down-class="btn-default" data-up-class="btn-default" data-placement="bottom" data-content="Required" title="" data-onfocus-color="#66AFE9" data-drop-focus-swadow="1" style="font-size: 13px; color: rgb(158, 158, 158); background: rgb(255, 255, 255) none repeat scroll 0% 0%; border-color: rgb(221, 221, 221); display: block;">


  <select name="payment_currency" class="the_input_element error_message text pre-format form-control  aling_left align_left required" data-content="Required" style="font-size: 13px; color: rgb(158, 158, 158); background: rgb(255, 255, 255) none repeat scroll 0% 0%; border-color: rgb(221, 221, 221);" data-default-selected-value="0" id="" data-required="true">
  <option value="0" selected="selected">&#8212; Select &#8212;</option>
  <option value="1">NGN</option>
  <option value="0.29">KES</option>
  <option value="0.017">GHS</option>
  </select>
  
</p>
<p>Your recepient would get: <span id="outputMeters"></span></p>
<p>
    <label>Feet</label>
    <input id="inputFeet" type="number" placeholder="Feet" oninput="Curencyconvert(this.value)" onchange="LengthConverter(this.value)">
 </p>


 <div id="demo"></div>

<script>
function LengthConverter(valNum) {
  document.getElementById("outputMeters").innerHTML=valNum/3.2808;
}

function Currencyconvert(valAmount) {
//Get the price
      fetch('https://api.binance.com/api/v3/ticker/price')
      .then(response => response.json())
      .then(data => {
      console.log(data);
      document.getElementById("demo").innerHTML = 
      '<br>USDTNGN :-'+data.USDTNGN.price  
      });
    }
</script>
</body>
</html>