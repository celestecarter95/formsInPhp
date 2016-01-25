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
        <div class="input-field col s6">
          <input id="first_name" name="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" name="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Your Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="subject" name="subject" type="text" class="validate">
          <label for="subject">Subject</label>
        </div>
      </div>
        <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
              <label for="textarea1">Textarea</label>
            </div>
          </div>
        <button class="purple darken-2 waves-effect waves-light btn-large" type="submit" name="submit">Submit</button>
      </div>
    </form>

<?php include('includes/footer.php'); ?>
