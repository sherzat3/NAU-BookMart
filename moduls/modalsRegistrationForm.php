 <div id="registerModal" class="modal ">
        <div class="modal-dialog modal-md">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Registration</h4>
                </div>
                <div id="regModalBody" class="modal-body">
                    <!-- <div id="row"> -->
                    <!-- <div class="col-md-12 " style="margin-top:15px"> -->
                        <div id="regNotify" class="alert alert-warning alert-dismissable" style="display:none">  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
</div>

                    <form class="form-horizontal" role="form" method="POST">
                        <div class="form-group"> <!-- name -->
                            <!-- <div class="form-group"> -->
                            <label for="lastname" class="col-sm-2 control-label">Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lastname" required placeholder="Enter your Last Name">
                            </div>
                            <!-- </div> -->
                        </div>

                        <div class="form-group"> <!-- name -->
                            <!-- <div class="form-group"> -->
                            <label for="firstname" class="col-sm-2 control-label">First Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="firstname" required placeholder="What is your name?">
                            </div>
                            <!-- </div> -->
                        </div>

                        <div class="form-group"> <!-- phone -->
                            <!-- <div class="form-group"> -->
                            <label for="phone" class="col-sm-2 control-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" id="phone" required placeholder="Enter your phone number">
                            </div>
                            <!-- </div> -->
                        </div> <!-- phone -->

                        <div class="form-group"> <!-- name -->
                            <!-- <div class="form-group"> -->
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" required placeholder="Enter your email">
                            </div>
                            <!-- </div> -->
                        </div> <!-- name -->

                        <div class="form-group"> <!-- pass -->
                            <!-- <div class="form-group"> -->
                            <label for="regPass1" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="regPass1" required placeholder="Enter your password">
                            </div>
                            <!-- </div> -->
                        </div> <!-- pass -->

                        <div class="form-group"> <!-- repass -->
                            <!-- <div class="form-group"> -->
                            <label for="regPass2" class="col-sm-2 control-label">Re-enter your password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="regPass2" required placeholder="Enter your password">
                            </div>
                            <!-- </div> -->
                        </div> <!-- repass -->

                        <div class="checkbox"> <!-- user agreement -->
                            <label>Agree&nbsp;&nbsp;with&nbsp;terms and conditions&nbsp;<input id="agreement" type="checkbox"></label>
                        </div>	<!-- user agreement -->


                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button id="regSubmit" type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                    <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>