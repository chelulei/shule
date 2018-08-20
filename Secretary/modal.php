<!-- Edit -->
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit student Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div>
         <form    action="editstudent.php" method="POST">  
           <input type="hidden" name="adm_No" id="adm_No" />
           <div class="form-group">
            <label class=" form-control-label">Surname</label>
            <div class="input-group">
              <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
              <input class="form-control" id="Surname" name="Surname" type="text" >
            </div>
            <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
          </div>

          <div class="form-group">
            <label class=" form-control-label">Middle Name</label>
            <div class="input-group">
              <!-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> -->
              <input class="form-control" id="Middlename" name="Middlename" type="text" >
            </div>
            <!-- <small class="form-text text-muted">Middles Name</small> -->
          </div>


          <div class="form-group">
            <label class=" form-control-label">First Name</label>
            <div class="input-group">
             <!-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> -->
             <input class="form-control" id="Firstname" name="Firstname" type="text">
           </div>
           <!-- <small class="form-text text-muted">Middles Name</small> -->
         </div>


         <div class="form-group">
           <label for="address" class="control-label col-lg-2">Birth Date<span class="">*</span></label>

           <div class="input-group">
            <!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
            <input class="form-control" id="Dateofbirth" name="Dateofbirth" type="date" >
          </div>
          <!-- <small class="form-text text-muted">ex. 99/99/9999</small> -->
        </div>


        <div class="form-group">
          <label class=" form-control-label">Class</label>
          <div class="input-group">
            <!-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> -->
            <input class="form-control" id="Class" name="Class" type="text" 
            required="">
          </div>
          <!-- <small class="form-text text-muted">Middles Name</small> -->
        </div>

        <div class="form-group">
          <label class=" form-control-label">Gender</label>
          <div class="input-group">
           <input class="form-control" id="Gender" name="Gender" type="text">
         </div>
         <!-- <small class="form-text text-muted">ex. ~9.99 ~9.99 999</small> -->
       </div>
       <div class="form-group">
        <label class=" form-control-label">Home Address</label>
        <div class="input-group">
          <!-- <div class="input-group-addon"><i class="fa fa-male"></i></div> -->
          <input class="form-control" id="Homeaddress" name="Homeaddress" type="text">
        </div>
        <!-- <small class="form-text text-muted">ex. 999-99-9999</small> -->
      </div>
      <strong>Parent Infromation</strong>
      <br>
      <br>
      <div class="form-group">
        <label class=" form-control-label"> parent Name</label>
        <div class="input-group">
          <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
          <input class="form-control" id="Parentname" name="Parentname" type="text" >
        </div>
        <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
      </div>
      <div class="form-group">
        <label class=" form-control-label">Phone Number</label>
        <div class="input-group">
          <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
          <input class="form-control" id="Phone" name="Phone" type="number" >
        </div>
        <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
      </div>
      <div class="form-group">
        <label class=" form-control-label">Email Address</label>
        <div class="input-group">
          <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
          <input class="form-control" id="Email" name="Email" type="emai" >
        </div>
        <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
      </div>
      <br>
      <br>
      <STRONG> Other Records </STRONG>

      <div class="form-group">
        <label class=" form-control-label"> Former School</label>
        <div class="input-group">
          <!-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> -->
          <input class="form-control" id="Formerschool" name="Formerschool" type="text">
        </div>
        <!-- <small class="form-text text-muted">Email Address </small> -->
      </div>
      <div class="form-group">
        <label class=" form-control-label">Entry Marks</label>
        <div class="input-group">
          <!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
          <input class="form-control" id="Entrymarks" name="Entrymarks" type="number">

        </div>
        <!-- <small class="form-text text-muted">ex. 99/99/9999</small> -->
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancel</button>
      <!-- <button type="submit" class="btn btn-primary" name="update">UPDATE</button> -->
      <input type="submit" class="btn btn-primary btn-lg" name="update" class="btn btn-primary" value ="update" />
    </div>
  </form>
</div>
</div>
</div>
<!-- Modal -->
