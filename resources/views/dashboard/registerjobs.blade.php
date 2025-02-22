@extends('dashboard.inc.master')


@section('title','Dashboard one || Register Vacancy')

@section('content')

<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Register Vacancy </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Register Vacancy</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             
    



              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Advert Details</h4>
                    <form class="form-sample">
                      <p class="card-description"> Advert Information </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Advert Title</label>
                            <div class="col-sm-9">                          
                              <input type="text" name="JobTitle" id="JobTitle" class="form-control" value="{{ old('JobTitle') }}" placeholder="Enter advert title" required >
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Job Location</label>
                            <div class="col-sm-9">
                              <input type="text" name="JobLocation" id="JobLocation" class="form-control" value="{{ old('JobLocation') }}"  placeholder="Enter job location" required>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="col-sm-2 col-form-label" for="JobDescription">Job Description</label>
                                  <div class="col-sm-10">
                                      <textarea name="JobDescription" id="JobDescription" class="form-control" rows="4" required>{{ old('JobDescription') }}</textarea>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group row">
                                  <label class="col-sm-3 col-form-label" for="ResponsibilitiesTitle">Responsibilities Title</label>
                                  <div class="col-sm-9">
                                      <input type="text" name="ResponsibilitiesTitle" id="ResponsibilitiesTitle" class="form-control" value="{{ old('ResponsibilitiesTitle') }}" placeholder="Enter responsibilities title" required>
                                  </div>
                              </div>
                          </div>

                          <!-- Vacancy -->
                          <div class="col-md-6">
                              <div class="form-group row">
                                  <label class="col-sm-3 col-form-label" for="Vacancy">Vacancy</label>
                                  <div class="col-sm-9">
                                      <input type="number" name="Vacancy" id="Vacancy" class="form-control" value="{{ old('Vacancy') }}" placeholder="Enter vacancy" required>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="PublishedOn">Published On</label>
                                <div class="col-sm-9">
                                    <input type="date" name="PublishedOn" id="PublishedOn" class="form-control" value="{{ old('PublishedOn') }}" required>
                                </div>
                            </div>
                        </div>

                        <!-- Deadline -->
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="Deadline">Deadline</label>
                                <div class="col-sm-9">
                                    <input type="date" name="Deadline" id="Deadline" class="form-control" value="{{ old('Deadline') }}" required>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                              <label class="col-sm-3 col-form-label" for="Salary">Salary</label>
                              <div class="col-sm-9">
                                  <input type="text" name="Salary" id="Salary" class="form-control" value="{{ old('Salary') }}" placeholder="Enter salary" required>
                              </div>
                          </div>
                      </div>

                      <!-- Job Nature -->
                      <div class="col-md-6">
                          <div class="form-group row">
                              <label class="col-sm-3 col-form-label" for="JobNature">Job Nature</label>
                              <div class="col-sm-9">
                                  <select name="JobNature" id="JobNature" class="form-control" required>
                                      <option value="Full Time" {{ old('JobNature') == 'Full Time' ? 'selected' : '' }}>Full Time</option>
                                      <option value="Part Time" {{ old('JobNature') == 'Part Time' ? 'selected' : '' }}>Part Time</option>
                                      <option value="Contract" {{ old('JobNature') == 'Contract' ? 'selected' : '' }}>Contract</option>
                                      <option value="Temporary" {{ old('JobNature') == 'Temporary' ? 'selected' : '' }}>Temporary</option>
                                      <option value="Freelance" {{ old('JobNature') == 'Freelance' ? 'selected' : '' }}>Freelance</option>
                                  </select>
                              </div>
                          </div>
                      </div>
                  </div>


                   <!-- Responsibilities Fields -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row" id="responsibilities-group">
                                <label class="col-sm-3 col-form-label" for="responsibilities">Responsibilities</label>
                                <div class="col-sm-9">
                                    <textarea name="responsibilities[]" class="form-control" rows="3" required>{{ old('responsibilities') }}</textarea>
                                    <button type="button" id="add-responsibility" class="btn btn-secondary mt-2">Add More Responsibilities</button>
                                </div>
                            </div>
                        </div>
                    </div>


                     <!-- Qualifications Fields -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row" id="qualifications-group">
                                <label class="col-sm-3 col-form-label" for="qualifications">Qualifications</label>
                                <div class="col-sm-9">
                                    <textarea name="qualifications[]" class="form-control" rows="3" required>{{ old('qualifications') }}</textarea>
                                    <button type="button" id="add-qualification" class="btn btn-secondary mt-2">Add More Qualifications</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Publish</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>Yes</option>
                                <option>No</option>
                               
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Advert PDF</label>
                            <div class="col-sm-9">
                              <input type="file" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>

                    
                      <button type="submit" class="btn btn-gradient-primary me-2">Save Job</button>
                      <button class="btn btn-light">Cancel</button>

                    </form>



                    
                  </div>
                </div>
              </div>

            </div>
          </div>

          <script>
    // JavaScript to add more responsibility fields dynamically
    document.getElementById('add-responsibility').addEventListener('click', function() {
        var responsibilityGroup = document.getElementById('responsibilities-group');
        var newTextarea = document.createElement('textarea');
        newTextarea.name = 'responsibilities[]';
        newTextarea.classList.add('form-control');
        newTextarea.rows = 3;
        responsibilityGroup.insertBefore(newTextarea, this);
    });

    // JavaScript to add more qualification fields dynamically
    document.getElementById('add-qualification').addEventListener('click', function() {
        var qualificationGroup = document.getElementById('qualifications-group');
        var newTextarea = document.createElement('textarea');
        newTextarea.name = 'qualifications[]';
        newTextarea.classList.add('form-control');
        newTextarea.rows = 3;
        qualificationGroup.insertBefore(newTextarea, this);
    });
</script>

@endsection