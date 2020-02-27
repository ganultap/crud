<form method="post" action="transactions/register.php" class="needs-validation" novalidate>
    <div class="small-middle-container mb-3">
        <div class="card bg-info mt-5">
            <!-- <img src="images/register.jpg" alt="header img"> -->
            <h4 class="text text-light">REGISTRATION</h4>
        </div>
        <div class="card-body shadow-lg p-3 bg-white border border-info">
            <div class="row">
                <div class="col-sm-12 mb-3">
                    <input id="validationCustom01" type="text" name="firstname" class="form-control"
                        placeholder="<?php echo ucwords(("First Name:   $firstname"))?>" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mb-3">
                    <input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mb-3">
                    <input type="text" name="middlename" class="form-control" placeholder="Middle Name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <input type="text" name="address" class="form-control" placeholder="Complete Address" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <input type="text" name="guardian" class="form-control" placeholder="Name of Guardian" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <input type="text" name="email" class="form-control"
                        placeholder="Email Address e.g. juandelacruz@mail.com" required>
                </div>
            </div>
            <div>
                <hr class="solid">
            </div>
            <div class="row">
                <div class="col-lg-12 mb-3 small">
                    <label>Place of Birth</label>
                    <input type="text" name="birthplace" class="form-control"
                        placeholder="House No., Brgy., City, Country" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 small mb-3">
                    <label>Date of Birth</label>
                    <input type="date" name="birthdate" class="form-control" required>
                </div>
                <div class="col-sm-6 small mb-3">
                    <label>Contact</label>
                    <input type="text" name="contact" class="form-control" placeholder="e.g. +639123456789" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 r-5">
                    <label class="r-2 small">Gender </label>
                    <div class="form-check-inline mt-3">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="Male" checked>Male
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="Female">Female
                        </label>
                    </div>
                </div>
            </div>
            <div>
                <hr class="solid">
            </div>
            <div class="row">
                <div class="col-sm-6 small mb-3">
                    <label>Civil Status</label>
                    <select class="custom-select" name="status" required>
                        <option selected value="Single">Single</option>
                        <option value="In a Relationship">In a Relationship</option>
                        <option value="Married">Married</option>
                        <option value="Separated">Separated</option>
                        <option value="Divorced">Divorced</option>
                    </select>
                </div>
                <div class="col-sm-6 small mb-3">
                    <label>School Year</label>
                    <input type="text" name="schoolyear" class="form-control" placeholder="e.g. YYYY-YYYY" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 small mb-3">
                    <label>Level</label>
                    <select class="custom-select" name="level" required>
                        <option selected value="1st Year">1st</option>
                        <option value="2nd Year">2nd</option>
                        <option value="3rd Year">3rd</option>
                        <option value="4th Year">4th</option>
                        <option value="5th Year">5th</option>
                    </select>
                </div>
                <div class="col-sm-9 small mb-3">
                    <label>Course</label>
                    <select class="custom-select" name="course" required>
                        <option selected value="BS in Information Technology">BS in Information Technology</option>
                        <option value="BS in Elementary Education">BS in Elementary Education</option>
                        <option value="BS in Secondary Education">BS in Secondary Education</option>
                        <option value="BS in Electrical Engineering">BS in Electrical Engineering</option>
                        <option value="BS in Computer Engineering">BS in Computer Engineering</option>
                    </select>
                </div>
            </div>
            <div class="form-row text-center">
                <div class="col-sm-12 mt-2 form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-12 mt-2 form-check">
                    <input type="hidden" name="form_submitted" value="1" />
                    <button type="submit" value="submit" class="btn btn-info btn-sm">
                        Submit
                    </button>
                </div>
            </div>
        </div>
        <div class="card-footer shadow-lg bg-info text-center text-light mb-5 small">
            Copyright &copy; 2020
        </div>
    </div>
</form>