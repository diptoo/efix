<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>proposal</title>
<script type="text/javascript">
  function computePayment()
  {
     var amount = document.getElementById('amount').value;
     var interest = (amount * 0.15).toFixed(2);
     var payment = (+amount + +interest).toFixed(0);
     payment = payment.toString();
     document.getElementById('interest').innerHTML= "Interest = "+interest;
     document.getElementById('payment').innerHTML = "Total Cost = "+payment;
     document.getElementById('pay').value=payment;
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



<?php echo $post['id'] ?><br>

<?php echo $this->session->userdata('type_id') ?> <br>
<?php echo $this->session->userdata('user_id') ?>


<div class="row">
  <div class="col-sm-4">

  </div>
  <div class="col-sm-4 border-class3">
    <?php echo form_open('posts/push_proposal/'.$post['id']); ?>
    <div class="form-group">
        <label>Cost</label>
        <input id="amount" type="text" class="form-control" name="cost" onkeyup="computePayment()" placeholder="Cost">
    </div>
    <div class="form-group">
        <label>Days</label>
        <input type="text" class="form-control" name="days" placeholder="Days"/>
        <input type="hidden" name="pay" id="pay"/>
    </div>
    <h5 id = "interest"></h5>

    <h5 id = "payment"></h5>
    <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
</div>

  </body>
  </html>
