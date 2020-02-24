<form method="post" action="transactions/register.php">
    <div class="small-middle-container mt-2">
        <div class="shadow-lg p-3 card-header bg-info text-light">
            <div class="mb-4">
                <hr data-content="REGISTRATION" class="hr-text">
            </div>
        </div>
        <div class="card-body shadow-lg p-3 bg-light">
            <div class="row">
                <div class="col-sm-12 mt-2">
                    <input type="text" name="firstname" class="form-control" placeholder="First Name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mt-2">
                    <input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mt-2">
                    <input type="text" name="middlename" class="form-control" placeholder="Middle Name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-2">
                    <input type="text" name="address" class="form-control" placeholder="Complete Address" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-2">
                    <input type="text" name="guardian" class="form-control" placeholder="Name of Guardian" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-2">
                    <input type="text" name="email" class="form-control"
                        placeholder="Email Address Ex: juandelacruz@mail.com" required>
                </div>
            </div>
            <div class="mb-4">
                <hr class="solid">
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label>Date of Birth</label>
                    <input type="date" name="birthdate" class="form-control" required>
                </div>
                <div class="col-sm-8">
                    <label>Place of Birth</label>
                    <input type="text" name="birthplace" class="form-control"
                        placeholder="House No., Brgy., City, Country" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 r-5">
                    <label class="r-2">Gender </label>
                    <div class="form-check-inline p-3">
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
            <div class="row">
                <div class="col-sm-12">
                    <label>Contact Number</label>
                    <input type="text" name="contact" class="form-control" placeholder="e.g. +639123456789" required>
                </div>
            </div>
            <div class="mb-4">
                <hr class="solid">
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label>Civil Status</label>
                    <select class="custom-select" name="status" required>
                        <option selected value="Single">Single</option>
                        <option value="In a relationship">In a relationship</option>
                        <option value="Married">Married</option>
                        <option value="Separated">Separated</option>
                        <option value="Divorced">Divorced</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label>School Year</label>
                    <input type="text" name="schoolyear" class="form-control" placeholder="e.g. YYYY-YYYY" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mt-2">
                    <label>Year Level</label>
                    <select class="custom-select" name="level" required>
                        <option selected value="1ST YEAR">1st</option>
                        <option value="2ND YEAR">2nd</option>
                        <option value="3RD YEAR">3rd</option>
                        <option value="4TH YEAR">4th</option>
                        <option value="5TH YEAR">5th</option>
                    </select>
                </div>
                <div class="col-sm-6 mt-2">
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
            <div class="row">
                <div class="col-sm-12 mt-3 text-right ">
                    <button type="submit" class="btn bg-info text-light ">
                        Submit
                    </button>
                </div>
            </div>
        </div>
        <div class="card-footer shadow-lg bg-info text-center text-light b-2">
            Copyright &copy; 2020
        </div>
    </div>
</form>