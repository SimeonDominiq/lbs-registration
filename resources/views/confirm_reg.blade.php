@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-7 col-md-10">
            @include('partials.messages')                
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="form-title">
                        <span>Complete Application</span>
                    </div>

                    <div class="p-3">
                        <form action="{{ url('/complete-application/'.$insert->id) }}" method="POST">
                            {{ csrf_field() }}

                            <div class="form-row row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <p>{{ $insert->firstname }}</p>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Surname</label>
                                        <p>{{ $insert->surname }}</p>
                                    </div>
                                </div>                                
                            </div>

                            <div class="form-row row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <p>{{ $insert->email }}</p>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Years of working Experience</label>
                                        <p>{{ $insert->years_working_experience }}</p>
                                    </div>
                                </div>                                
                            </div>
                            
                            <div class="form-row row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Programme Eligible For</label>
                                        <div class="wrap-input100">
                                            <select name="programme_id" class="input100" id="programme_id">
                                                <option value="">--Select--</option>
                                                @foreach ($eligibleProg as $programme)
                                                    <option value="{{ $programme->id }}">{{ $programme->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row row my-4 justify-content-center">
                                <div class="container-contact100-form-btn ">
                                    <button type="submit" class="contact100-form-btn">Apply</button>
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