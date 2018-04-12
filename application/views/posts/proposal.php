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
  <body>



<?php echo $post['id'] ?><br>

<?php echo $this->session->userdata('type_id') ?> <br>
<?php echo $this->session->userdata('user_id') ?>


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
<h3 id = "interest"></h3>

<h2 id = "payment"></h2>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
  </body>
  </html>
