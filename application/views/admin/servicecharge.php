<?php print_r($cost[0]['id'])?>
<?php echo form_open('admins/new_service_charge'); ?>
    <div class="form-group">
        <label>Service Charge</label>
        <input type="number" class="form-control" name="servicecharge" placeholder="service charge" value="<?php echo $cost[0]['Amount']?>"/>
    </div>

    <button type="submit" class="btn btn-dark">Change</button>
</form>
