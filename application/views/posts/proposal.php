<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>proposal</title>
<script type="text/javascript">
  function computePayment()
  {
     var amount = document.getElementById('amount').value;
     var interest = (amount * 0.15).toFixed(0);
     var payment = (+amount + +interest).toFixed(0);
     payment = payment.toString();
     interest = interest.toString();
     document.getElementById('interest').innerHTML= "Service Charge = "+interest+" TK";
     document.getElementById('payment').innerHTML = "Total Cost = "+payment+" TK";
     document.getElementById('pay').value=payment;
     document.getElementById('inter').value=interest;
  }
</script>
  </head>
  <style>
  .border-class3{
    border: grey solid;
    margin: 3px;
    padding: 10px;
  }
  </style>
  <body>





<div class="row">
  <div class="col-sm-4">

  </div>
  <div class="col-sm-4 border-class3">
    <?php echo form_open('posts/push_proposal/'.$post['id']); ?>
    <div class="form-group">
        <label>Cost</label>
        <input id="amount" type="number" class="form-control" name="cost" onkeyup="computePayment()" placeholder="Cost">
    </div>
    <div class="form-group">
        <label>Days</label>
        <input type="text" class="form-control" name="days" placeholder="Days"/>
        <input type="hidden" name="pay" id="pay"/>
        <input type="hidden" name="inter" id="inter"/>

    </div>
    <div class="form-group">
        <label>Problem Definition</label>
        <input type="text" class="form-control" name="definition" placeholder="Problem Definition"/>
    </div>
    <h5 id = "interest"></h5>

    <h5 id = "payment"></h5>
    <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
</div>

  </body>
  </html>
