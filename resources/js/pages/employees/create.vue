<template>
    <div class="wrapper">
        <breadcrumbs></breadcrumbs>
        <div class="container">
                <div class="panel panel-default">
                    <div class="panel-body single-details">
                    <form @submit="submit" action="/api/v1/employees"  method="post">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="employee_number">Employee Number
                                        <small>(Required)</small>
                                    </label>
                                    <input id="employee_number" type="text" name="employee_number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="first_name">First Name
                                        <small>(Required)</small>
                                    </label>
                                    <input id="first_name" type="text" name="first_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name
                                        <small>(Required)</small>
                                    </label>
                                    <input type="text" name="last_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address
                                        <small>(Required)</small>
                                    </label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <span>Note: this used by employee to access their account.</span>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="email">Password
                                            <small>(Required)</small>
                                            </label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email">Verify
                                            <small>(Required)</small>
                                            </label>
                                            <input type="password" name="confirm_password" class="form-control">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select name="gender" class="form-control">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="civil_status">Civil Status</label>
                                    <select name="civil_status" class="form-control">
                                        <option>Single</option>
                                        <option>Married</option>
                                        <option>Separated</option>
                                        <option>Widow</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="birthdate">Birthdate</label>
                                    <input type="date" name="birthdate" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="address_line_1">Address Line 1</label>
                                    <textarea class="form-control" name="address_line_1"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="address_line_2">Address Line 2</label>
                                    <textarea class="form-control" name="address_line_2"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="country_id">Country</label>
                                            <select name="country_id" class="form-control">
                                                <option value="1">USA</option>
                                                <option value="2">Phillippines</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="province_id">Province</label>
                                            <select name="province_id" class="form-control">
                                                <option value="1">USA</option>
                                                <option value="2">Phillippines</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="city_id">City</label>
                                            <select name="city_id" class="form-control">
                                                <option value="1">USA</option>
                                                <option value="2">Phillippines</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="zipcode">Postal Zip Code</label>
                                    <input type="number" name="zipcode" class="form-control">
                                </div>
                                <span>Contact Number</span>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="work_phone_number">Work</label>
                                            <input type="number" name="work_phone_number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="home_phone_number">Home</label>
                                            <input type="number" name="home_phone_number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="mobile_phone_number">Mobile</label>
                                            <input type="number" name="mobile_phone_number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <span>Benefits</span>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="sss">SSS Number</label>
                                            <input type="number" name="sss" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="pagibig">Pagibig Number</label>
                                            <input type="number" name="pagibig" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="philhealth">PhilHealth Number</label>
                                            <input type="number" name="philhealth" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                      <!-- Widget: user widget style 1 -->
                                      <div class="box box-widget widget-user">
                                        <!-- Add the bg color to the header using any of the bg-* classes -->
                                        <div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.png') center center;">
                                        </div>
                                        <div class="widget-user-image">
                                          <img class="img-circle" src="" alt="User Avatar">
                                        </div>
                                        <div class="box-footer">
                                            <label>Upload Image</label>
                                            <input type="file" name="profile_picture" class="form-control">
                                            <!-- /.col -->
                                          <!-- /.row -->
                                        </div>
                                      </div>
                                      <!-- /.widget-user -->
                                    </div>
                                <div class="form-group">
                                    <label for="personal_email">Personal Email
                                    </label>
                                    <input type="email" name="personal_email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="company">Company
                                    </label>
                                    <select name="company_id" class="form-control">
                                        <option value="1">Company 1</option>
                                        <option value="2">Company 2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="department">Department
                                    </label>
                                    <select name="department_id" class="form-control">
                                        <option value="1">IT</option>
                                        <option value="2">Accounting</option>
                                        <option value="3">Engineering</option>
                                        <option value="4">CSR</option>
                                        <option value="5">Sales</option>
                                        <option value="6">Marketing</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="position_id">Designation
                                    </label>
                                    <select name="position_id" class="form-control">
                                        <option value="1">IT Support</option>
                                        <option value="2">Tambay</option>
                                        <option value="3">Accountant</option>
                                        <option value="4">Runner</option>
                                        <option value="5">Taga tawag</option>
                                        <option value="6">Manager</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="salary">Salary
                                    </label>
                                    <input type="number" name="salary" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="manager">Manager
                                    </label>
                                    <select name="manager_id" class="form-control">
                                        <option value="1">Gerald Anderson</option>
                                        <option value="2">Juan Luna</option>
                                        <option value="3">Kim Domingo</option>
                                        <option value="4">Derek Santos</option>
                                        <option value="5">Lorie Vito Cruz</option>
                                        <option value="6">Kim Chu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="supervisor">Supervisor
                                    </label>
                                    <select name="supervisor" class="form-control">
                                        <option value="1">Kim Chu</option>
                                        <option value="2">Gerald Anderson</option>
                                        <option value="3">Juan Luna</option>
                                        <option value="4">Kim Domingo</option>
                                        <option value="5">Derek Santos</option>
                                        <option value="6">Lorie Vito Cruz</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="driving_license_number">Driving License Number
                                    </label>
                                    <input type="number" name="driving_license_number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="first_level_approver">First Approver
                                    </label>
                                    <select name="first_level_approver" class="form-control">
                                        <option value="1">Gerald Anderson</option>
                                        <option value="2">Juan Luna</option>
                                        <option value="3">Kim Domingo</option>
                                        <option value="4">Derek Santos</option>
                                        <option value="5">Lorie Vito Cruz</option>
                                        <option value="6">Kim Chu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="seond_level_approver">Second Approver
                                    </label>
                                    <select name="seond_level_approver" class="form-control">
                                        <option value="1">Gerald Anderson</option>
                                        <option value="2">Juan Luna</option>
                                        <option value="3">Kim Domingo</option>
                                        <option value="4">Derek Santos</option>
                                        <option value="5">Lorie Vito Cruz</option>
                                        <option value="6">Kim Chu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="third_level_approver">Third Approver
                                    </label>
                                    <select name="third_level_approver" class="form-control">
                                        <option value="1">Gerald Anderson</option>
                                        <option value="2">Juan Luna</option>
                                        <option value="3">Kim Domingo</option>
                                        <option value="4">Derek Santos</option>
                                        <option value="5">Lorie Vito Cruz</option>
                                        <option value="6">Kim Chu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="row col-lg-12 col-md-12">
                                        <div class="col-lg-11 text-right">
                                            <input type="submit" name="" value="Cancel" class="btn btn-default">
                                        </div>
                                        <div class="col-lg-1 text-right">
                                            <input type="submit" name="" value="Save" class="btn btn-primary" @click="submit">
                                        </div>
                                        <br>-
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</template>
<style type="text/css">
    .container {
        border: 1px solid black;
        padding: 50px
    }
</style>
<script>
export default {

  mounted() {

      

  },

  methods : {

        submit : function () {

        }
     
  },

  data () {
    return {
        postUrl : window.location.origin + '/api/v1/employees',
    }
  }
}
</script>
