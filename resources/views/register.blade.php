@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-7 col-md-10">
                @include('partials.messages')                
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="form-title">
                            <span>LBS Programme Registration</span>
                        </div>

                        <div class="p-3">
                            <form action="{{ url('/register') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-row row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <div class="wrap-input100">
                                                <select name="title" id="title" class="input100" required>
                                                    <option value="Mr.">Mr.</option>
                                                    <option value="Mrs.">Mrs.</option>
                                                    <option value="Miss">Miss</option>
                                                </select>
                                                <span class="focus-input100"></span>
                                            </div>                                    
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">First Name</label>
                                            <div class="wrap-input100">
                                                <input type="text" name="firstname" class="input100" required />
                                                <span class="focus-input100"></span>
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Surname</label>
                                            <div class="wrap-input100">
                                                <input type="text" name="surname" class="input100" required />
                                                <span class="focus-input100"></span>
                                            </div>                                      
                                        </div>                                        
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <div class="wrap-input100">
                                                <input type="email" name="email" class="input100" required />
                                                <span class="focus-input100"></span>
                                            </div>                                      
                                        </div>                                        
                                    </div>
                                </div>

                                <div class="form-row row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Country of Residence</label>
                                            <div class="wrap-input100">
                                                <select name="country_of_residence" id="country_of_residence" class="input100" required>
                                                    <option value="Nigeria">Nigeria</option>
                                                </select>
                                                <span class="focus-input100"></span>
                                            </div>                                    
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Date of Birth</label>
                                            <div class="wrap-input100">
                                                <input type="text" name="date_of_birth" placeholder="DD/MM/YYYY" class="input100" required />
                                                <span class="focus-input100"></span>
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Company</label>
                                            <div class="wrap-input100">
                                                <input type="text" name="company" class="input100" required />
                                                <span class="focus-input100"></span>
                                            </div>                                      
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Years of working experience</label>
                                            <div class="wrap-input100">
                                                <input type="number" min="1" name="years_working_experience" class="input100" required />
                                                <span class="focus-input100"></span>
                                            </div>
                                            <span class="help-text">N:B => Work experience - Please note that only full-time post-University work</span>                                      
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Class of University Degree</label>
                                            <div class="wrap-input100">
                                                <select name="university_grade" id="university_grade" class="input100" required>
                                                    <option value="">--Select--</option>
                                                    <option value="First class">First Class</option>
                                                    <option value="Second class upper">Second class upper</option>
                                                    <option value="Second class lower">Second class lower</option>
                                                    <option value="Third class">Third class</option>
                                                    <option value="Pass">Pass</option>
                                                </select>
                                                <span class="focus-input100"></span>
                                            </div>                                    
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Secondary education test grade</label>
                                            <div class="wrap-input100">
                                                <select name="education_test_grade" id="education_test_grade" class="input100" required>
                                                    <option value="">--Select--</option>
                                                    <option value="WASCE">WASCE</option>
                                                    <option value="GCE">GCE</option>
                                                    <option value="SAT">SAT</option>
                                                </select>
                                                <span class="focus-input100"></span>
                                            </div>                                    
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">English Language grade</label>
                                            <div class="wrap-input100">
                                                <input type="text" name="english_grade" class="input100" required />
                                                <span class="focus-input100"></span>
                                            </div>                                      
                                        </div>                                          
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Mathematics grade</label>
                                            <div class="wrap-input100">
                                                <input type="text" name="mathematics_grade" class="input100" required />
                                                <span class="focus-input100"></span>
                                            </div>                                      
                                        </div>                                         
                                    </div>
                                </div>
                                
                                <div class="form-row row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">English test year</label>
                                            <div class="wrap-input100">
                                                <input type="text" name="english_test_year" class="input100" required />
                                                <span class="focus-input100"></span>
                                            </div>                                      
                                        </div>                                          
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">English test score</label>
                                            <div class="wrap-input100">
                                                <input type="text" name="test_score" class="input100" required />
                                                <span class="focus-input100"></span>
                                            </div>                                      
                                        </div>                                          
                                    </div>
                                </div>

                                <div class="form-row row">
                                    <div class="col-lg-12">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" value="true" name="agree" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">I have read and accept the terms and conditions explained below</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row row my-4 justify-content-center">
                                    <div class="container-contact100-form-btn ">
                                        <button type="submit" class="contact100-form-btn">Proceed</button>
                                    </div>
                                </div>

                            </form>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop