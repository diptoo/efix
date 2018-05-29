<style>
    .border-class2 {
        border: 2px solid #47494c;

        height: 300px;
    }
</style>
<div class="col-sm-2">

</div>
<div class="col-sm-6 border-class2">


    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Rating</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
     <style>
         body{
             margin: 0;
             padding: 0;
         }
         .rating
         {
             position: absolute;
             top: 20%;
             left:20%;

             transform: translate(-50%,-50%) rotateY(180deg);
             display: flex;
         }
         .rating input
         {
             display: none;
         }
         .rating label{
             display: block;
             cursor: pointer;
             width:50px;
         }
         .rating label:before
         {
             content: '\f005';
             font-family: fontAwesome;
             position: relative;
             display: block;
             font-size: 50px;
             color: #101010
         }
         .rating label:after
         {
             content: '\f005';
             font-family: fontAwesome;
             position: absolute;
             display: block;
             font-size: 50px;
             color: #1f9cff;
             top:0;
             opacity: 0;
             transition: .5s;
             text-shadow: 0 2px 5px rgba(0,0,0,.5);
         }
         .rating label:hover:after,
         .rating label:hover ~ label:after,
         .rating input:checked ~ label:after
         {
             opacity: 1;
         }

     </style>
    </head>
    <body>

    <?php echo validation_errors(); ?> <!--Form validation kono error hole ekhane show korbe -->

   <?php //echo $type_id ?>
    <?php //echo $user_id ?>

    <?php echo form_open('ratings/give_review/'.$type_id.'/'.$user_id); ?>

   <!-- <div class="form-group">
        <br>
        <label>Rating</label>
        <input type="text" class="form-control" name="rating" placeholder="Give Rating">
    </div> -->
    <div class="form-group">


        <label>Rating</label>
        <br><br><br>

        <!--  Star Rating      -->

        <div class="rating">

            <input type="radio" name="rating" id="star1" value="5" <?php echo  set_radio('rating', '5'); ?>>
            <label for="star1"></label>
            <input type="radio" name="rating" id="star2" value="4" <?php echo  set_radio('rating', '4'); ?>>
            <label for="star2"></label>
            <input type="radio" name="rating" id="star3" value="3" <?php echo  set_radio('rating', '3'); ?>>
            <label for="star3"></label>
            <input type="radio" name="rating" id="star4" value="2" <?php echo  set_radio('rating', '2'); ?>>
            <label for="star4"></label>
            <input type="radio" name="rating" id="star5" value="1" <?php echo  set_radio('rating', '1'); ?>>
            <label for="star5"></label>
        </div>

        <!--        -->
        <!--
                <input type="text" class="form-control" name="floor" placeholder="Floor">
              -->
<!--        <div class="col-md-5">-->
<!--            <select name="rating">-->
<!--                <option value="1" --><?php //echo set_select('rating', 1); ?><!-- >1</option>-->
<!--                <option value="2" --><?php //echo set_select('rating', 2); ?><!-- >2</option>-->
<!--                <option value="3" --><?php //echo set_select('rating', 3); ?><!-- >3</option>-->
<!--                <option value="4" --><?php //echo set_select('rating', 4); ?><!-- >4</option>-->
<!--                <option value="5" --><?php //echo set_select('rating', 5); ?><!-- >5</option>-->
<!--                <option value="6" --><?php //echo set_select('rating', 6); ?><!-- >6</option>-->
<!--                <option value="7" --><?php //echo set_select('rating', 7); ?><!-- >7</option>-->
<!--                <option value="8" --><?php //echo set_select('rating', 8); ?><!-- >8</option>-->
<!--                <option value="9" --><?php //echo set_select('rating', 8); ?><!-- >9</option>-->
<!--                <option value="10" --><?php //echo set_select('rating', 8); ?><!-- >10</option>-->
<!---->
<!--            </select>-->
<!--        </div>-->
    </div>

    <div class="form-group">
        <label>Comment</label>
        <textarea id="editor1" class="form-control" name="comment" placeholder="Add Comment"></textarea>
    </div>

    <div class="float-right">
        <button type="submit" class="btn btn-dark pull-right">Submit</button>
    </div>
    </form>


    </body>
    </html>
</div>
