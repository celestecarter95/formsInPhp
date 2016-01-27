<?php include('includes/header.php'); ?>

<style>
/* label color */
   .input-field label {
     color: gray;
   }
   /* label focus color */
    textarea.materialize-textarea:focus:not([readonly]) + label,
   .input-field input[type=email]:focus + label,
   .input-field input[type=text]:focus + label {
     color: #7b1fa2;
   }
   /* label underline focus color */
    textarea.materialize-textarea:focus:not([readonly]),
   .input-field input[type=email]:focus,
   .input-field input[type=text]:focus {
     border-bottom: 1px solid #7b1fa2;
     box-shadow: 0 1px 0 0 #7b1fa2;
   }
   /* valid color */
   .input-field input[type=email].valid,
   .input-field input[type=text].valid {
     border-bottom: 1px solid #7b1fa2;
     box-shadow: 0 1px 0 0 #7b1fa2;
   }

</style>

<div class="row jumbotron amber lighten-4">
    <form class="col s12" method="POST" action="contact_submit.php">
      <div class="row">
        <div class="input-field col s12">
          <input id="grocery_store" name="grocery_store" type="text" class="validate">
          <label for="grocery_store">Grocery Store</label>
        </div>
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Your Email</label>
        </div>
        <div class="row">
            <div class="input-field col s12">
              <textarea id="comment" name="comment" class="materialize-textarea"></textarea>
              <label for="comment">Comment</label>
            </div>
          </div>
        <button class="purple darken-2 waves-effect waves-light btn-large" type="submit" name="submit">Send</button>
      </div>
    </form>
</div>

<?php include('includes/footer.php'); ?>
