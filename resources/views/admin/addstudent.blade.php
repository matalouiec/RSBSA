@extends('layout')
@section('content')

            <!-- partial -->
            <div class="content-wrapper">
                <h1 class="page-title">RSBSA ENROLLMENT FORM</h1>
                <div class="row">
                    <div class="col-18 col-lg-10 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <p class="alert-success">
                                <?php
                                $exception=Session::get('exception');
                                if($exception){
                                echo $exception;
                                Session :: put('exception',null);
                                }
                                
                                
                                ?>
                                </p>
                                
                                <form class="forms-sample" method="post" action="{{ URL:: to('/save_student') }}" enctype="multipart/form-data" >
                                    {{csrf_field()}}
                                    
                                <div class="form-row">

                                    <div class="form-group col-md-12" style="Background: #575A55;">
                                     <font color="white"> PART I: PERSONAL INFORMATION </font>
                                    </div>
                                         <div class="form-group col-md-8">
                                            <label for="exampleInputEmail1">Reference/Control Number</label>
                                            <input type="text" class="form-control p-input" name="student_controlnum" aria-describedby="emailHelp" placeholder="Enter Reference/Control Number">

                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Upload Your Image</label>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                                    <input type="file" class="form-control-file" name="student_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                                    <small id="fileHelp" class="form-text text-muted">Photo taken within 6 months.</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">First Name</label>
                                            <input type="text" class="form-control p-input" name="student_fname" aria-describedby="emailHelp" placeholder="Enter first name">

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Surname</label>
                                            <input type="text" class="form-control p-input" name="student_surname" aria-describedby="emailHelp" placeholder="Enter surname">

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Middle Name</label>
                                            <input type="text" class="form-control p-input" name="student_midname" aria-describedby="emailHelp" placeholder="Enter Middle Name">

                                        </div>

                                        <div class="form-group col-md-2">
                                        <fieldset>
                                        
                                            <label for="exampleInputEmail1">Sex</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="student_sex" value="Male" checked>
                                                <label class="form-label">
                                                    Male
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_sex" value="Female">
                                                <label class="form-label">
                                                    Female
                                                </label>
                                            </div>
                                        
                                            </div>
                                        </fieldset>
                                        </div>
                                        <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Civil Status</label>
                                            <select name="student_civilstatus" class="form-control">
                                                <option value="">Choose</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Widowed">Widowed</option>
                                                <option value="Separated">Separated</option>
                                            </select>              
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Full Name of Spouse</label>
                                            <input type="text" class="form-control p-input" name="student_spouse" aria-describedby="emailHelp" placeholder="Enter spouse name" disabled>

                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Religion</label>
                                            <input type="text" class="form-control p-input" name="student_religion" aria-describedby="emailHelp" placeholder="Enter Religion">

                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Date of Birth</label>
                                            <input type="date" class="form-control p-input" name="student_birthdate" aria-describedby="emailHelp" placeholder="Enter Birthdate">

                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Place of Birth</label>
                                            <input type="text" class="form-control p-input" name="student_birthplace" aria-describedby="emailHelp" placeholder="Enter Birth Place">

                                        </div>
                                        
                                        <div class="form-group col-md-12"><h5> ADDRESS </h5></div>
                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">House/Lot/BLDG. No.</label>
                                                <input type="text" class="form-control p-input" name="student_addresshouse" aria-describedby="emailHelp" placeholder="Enter House/Lot/BLDG. No.">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Street/Sitio/Purok/Subdv.</label>
                                                <input type="text" class="form-control p-input" name="student_addressstreet" aria-describedby="emailHelp" placeholder="Enter Street/Sitio/Subdv.">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Barangay</label>
                                                <input list="barangay" class="form-control p-input" name="student_addressbrgy" placeholder="Enter Barangay">
                                                    <datalist id="barangay">
                                                    @foreach ($addressb as $addb)
                                                        <option value="{{ $addb }}">{{ $addb }}</option>
                                                    @endforeach
                                                    </datalist>
                                                </input>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Municipality/City</label>
                                                <input list="municipality" class="form-control" name="student_addressmun" placeholder="Enter Municipality">
                                                    <datalist id="municipality">
                                                   @foreach ($address as $add)
                                                        <option value="{{ $add }}">{{ $add }}</option>
                                                   @endforeach
                                                   </datalist>
                                                 </input>  
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Province</label>
                                                <input type="text" class="form-control p-input" name="student_addressprov" value="Lanao del Norte" aria-describedby="emailHelp" placeholder="Lanao del Norte">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Region</label>
                                                <input type="text" class="form-control p-input" name="student_addressreg" value="10" aria-describedby="emailHelp" placeholder="Enter Region">
                                            </div>

                                

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Contact Number</label>
                                            <input type="text" class="form-control p-input" name="student_phone" aria-describedby="emailHelp" placeholder="Enter Phone Number">

                                        </div>

                                        <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Highest Formal Education</label>
                                            <select name="student_hifored" class="form-control">
                                                <option value="">Choose</option>
                                                <option value="None">None</option>
                                                <option value="Elementary">Elementary</option>
                                                <option value="High School">High School</option>
                                                <option value="Vocational">Vocational</option>
                                                <option value="College">College</option>
                                                <option value="Post Graduate">Post Graduate</option>
                                            </select>              
                                        </div>

                                        <div class="form-group col-md-2">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Person with Disability (PWD)</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="student_pwd" value="Yes">
                                                <label class="form-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_pwd" value="No"  checked>
                                                <label class="form-label">
                                                    No
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Mother's Maiden Full Name</label>
                                            <input type="text" class="form-control p-input" name="student_mothersname" aria-describedby="emailHelp" placeholder="Mother's Maiden Name">

                                        </div>

                                        <div class="form-group col-md-4">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Household Head?</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="student_household" value="Yes"checked>
                                                <label class="form-label">
                                                    Yes
                                                </label>
                                            </div>
                                                <input class="form-input" type="radio" name="student_household">
                                                <label class="form-label">
                                                <input type="text" class="form-control p-input" name="student_household" aria-describedby="emailHelp" placeholder="Enter name of Household Head">
                                                </label>
                                            <div>
                                               
                                            </div>
                                            </div>

                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="exampleInputEmail1">Relationship</label>
                                            <input type="text" class="form-control p-input" name="student_houserela" aria-describedby="emailHelp" placeholder="Relationship to household head">
                                        </div>

                                        <div class="form-group col-md-2   ">
                                            <label for="exampleInputEmail1">No. of living household members</label>
                                            <input type="text" class="form-control p-input" name="student_housememno" aria-describedby="emailHelp" placeholder="No. of living household members">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="exampleInputEmail1">No. of male household members</label>
                                            <input type="text" class="form-control p-input" name="student_housemaleno" aria-describedby="emailHelp" placeholder="No. of male">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="exampleInputEmail1">No. of female household members</label>
                                            <input type="text" class="form-control p-input" name="student_housefemaleno" aria-describedby="emailHelp" placeholder="No. of female">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">4p's Beneficiary?</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="student_fourps" value="Yes">
                                                <label class="form-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_fourps" value="No" checked>
                                                <label class="form-label">
                                                    No
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Member of any Indigenous Group?</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="student_indige" value="Yes">
                                                <label class="form-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_indige" value="No" checked>
                                                <label class="form-label">
                                                    No
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">With Government I.D.?</label>
                                            <input type="text" class="form-control p-input" name="student_govid" aria-describedby="emailHelp" placeholder="Please specipy ID no.">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Member of any Farmers Association/Coopertive?</label>
                                            <input type="text" class="form-control p-input" name="student_coopmem" aria-describedby="emailHelp" placeholder="Please specipy association name">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">PERSON TO NOTIFY IN CASE OF EMERGENCY</label>
                                            <input type="text" class="form-control p-input" name="student_incaseofemer" aria-describedby="emailHelp" placeholder="Name of person to notify in case of emergency">
                                        </div>

                                        <div class="form-group col-md-7">
                                            <label for="exampleInputEmail1">CONTACT NUMBER OF PERSON TO NOTIFY IN CASE OF EMERGENCY</label>
                                            <input type="text" class="form-control p-input" name="student_incaseno" aria-describedby="emailHelp" placeholder="Enter contact number">
                                        </div>
                                    
                                       

                                    <div class="form-group col-md-12" style="Background: #575A55;">
                                     <font color="white"> PART II: FARM PROFILE </font>
                                    </div>

                                        <div class="form-group col-md-3">
                                            <fieldset>   
                                            <label for="exampleInputEmail1">Main Livelihood</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="student_mainliveli" value="Farmer" checked>
                                                <label class="form-label">
                                                    Farmer
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_mainliveli" value="Farmworker/Laborer">
                                                <label class="form-label">
                                                    Farmworker/Laborer
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_mainliveli" value="Fisherfolk">
                                                <label class="form-label">
                                                    Fisherfolk
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Type of Farming Activity</label>
                                            <input type="text" class="form-control p-input" name="student_farmerstype" aria-describedby="emailHelp" placeholder="Enter type of Farming Activity">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Kind of Work</label>
                                            <input type="text" class="form-control p-input" name="student_farmworkerskind" aria-describedby="emailHelp" placeholder="Enter kind of work">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Type of Fishing Activity</label>
                                            <input type="text" class="form-control p-input" name="student_fisherfolktype" aria-describedby="emailHelp" placeholder="Enter type of Fishing Activity">
                                        </div>
                                    
                                        <br>Gross Annual Income Last Year</br>	
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Farming:</label>
                                           <input type="text" class="form-control p-input" name="student_annualgrossfarm" aria-describedby="emailHelp" placeholder="Enter Gross Annual Income Last Year for Farming" >
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Non-Farming:</label>
                                            <input type="text" class="form-control p-input" name="student_annualgrossnonfarm" aria-describedby="emailHelp" placeholder="Enter Gross Annual Income Last Year for Non-farming" >
                                        </div>


                                        <div class="form-group col-md-4">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Agrarian reform beneficiary?</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="student_agrarianbene" value="Yes">
                                                <label class="form-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_agrarianbene" value="No" checked>
                                                <label class="form-label">
                                                    No
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">No. of Farm Parcels:</label>
                                            <input type="text" class="form-control p-input" name="student_farmparcels" aria-describedby="emailHelp" placeholder="Enter Gross Annual Income Last Year for Non-farming" >
                                        </div>

                                </div>
                           
                                <a href="{{URL :: to('/addfarmland')}}">  <button type="submit" class="btn btn-success">Submit</button></a>
            
                                </form>

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>










@endsection