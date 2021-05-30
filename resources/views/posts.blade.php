
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="dWbESgNQf2KMYaAO5otzXp0bJDLNR1axvj4DRrjp">

        <link rel="icon" href="https://research.spit.ac.in/img/SPIT_logo.png" type="image/icon type">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="https://research.spit.ac.in/css/font-awesome.css">
        
        <link rel="stylesheet" href="https://research.spit.ac.in/css/app.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <title>SPIT R & D</title>
        <script src="https://research.spit.ac.in/js/app.js" defer></script>

    </head>
    <body>

        <div id="wrapper" class="home-page">
            <header>
                <div class="topbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1 col-sm-2 col-xs-3">
                                <a class="navbar-brand pull-left" href="/"><img src="https://research.spit.ac.in/img/SPIT_logo.png"/></a>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-9">
                                <a class="navbar-brand pull-left" href="/"><img src="https://research.spit.ac.in/img/logo.gif"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            
                
                <nav class="navbar navbar-expand-lg navbar-dark">
                    
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="container">
                            <ul class="navbar-nav ml-auto">

                                                                <li class="nav-item" id="spithome">
                                    <a class="nav-link" href="https://www.spit.ac.in/" target="_blank">SPIT</a>
                                </li>

                                <li class="nav-item" id="home">
                                    <a class="nav-link" href="/">Home</a>
                                </li>

                                <li class="nav-item" id="iedc">
                                    <a class="nav-link" href="/iedc">IEDC</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Login
                                    </a>
                                    
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/login">Admin</a>
                                        <a class="dropdown-item" href="/loginacc">Accountant</a>
                                    </div>
                                </li>
                                                            </ul>
                        </div>
                    </div>
                </nav>

            </header>

            <div class="sidenav">
                                <a href="/posts">Apply</a>
                                <a href="/reports">View Report</a>
                            </div>

        </div> 

        
<div class="main mt-4 mb-2">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="container mt-2">
                        
                        
                                            </div>

                    <h2 class="page-title">Post Paper</h2>
                    <hr>

                    <div class="card">
                        <div class="card-header">Basic Info</div>
                            <form method="POST" action="https://research.spit.ac.in/posts" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="dWbESgNQf2KMYaAO5otzXp0bJDLNR1axvj4DRrjp">                                
                                <p class="menu m-4">General</p>
                                <div class="row ml-5 mr-5">
                                    <div class="col-md-6 col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label">Year
                                                <span class="redstar">*</span>
                                            </label>
                                            
                                            <select name ="rnd_Year" class="form-control" id="comboRndYear" onchange="getComboRndYear(this);">
                                                <option value="">Select Year</option>
                                                <option name="2021" value="2020-21">2020-21</option>
                                                <option name="1920" value="2019-20">2019-20</option>
                                                <option name="1819" value="2018-19">2018-19</option>
                                                <option name="1718" value="2017-18">2017-18</option>
                                                <option name="1617" value="2016-17">2016-17</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label">Type
                                                <span class="redstar">*</span>
                                            </label>
    
                                            <select name="rnd_Type" class="form-control" id="comboRndType" onchange="getComboRndType(this);">
                                                <option value="">Select Type</option>
                                                <option value="UG">UG</option>
                                                <option value="PG">PG</option>
                                                <option value="PhD">PhD</option>
                                                <option value="Faculty">Faculty</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row ml-5 mr-5">
                                    <div class="col-md-6 col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label">Type of Applicant
                                                <span class="redstar">*</span>
                                            </label>
                                            
                                            <select name="Type_of_Applicant" class="form-control" id="typeOfAppli" onchange="getComboTypeOfAppli(this);">
                                                <option value="">Select Type Of Applicant</option>
                                                <option value="Faculty">Faculty</option>
                                                <option value="Student">Student</option>
                                                <option value="Research Scholar">Research Scholar</option>
                                            </select>
                                        </div>                                      
                                    </div>
                                </div>

                                <div class="row ml-5 mr-5">
                                    <div class="col-md-6 col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Department of Applicant <span class="redstar">*</span></label>
                                
                                            <select name ="Department_of_Applicant" class="form-control">
                                                <option name="COMPS">COMPS</option>
                                                <option name="IT">IT</option>
                                                <option name="ETRX">ETRX</option>
                                                <option name="EXTC">EXTC</option>
                                                <option name="MCA">MCA</option>
                                                <option value="ASH">ASH</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Class of Applicant <span class="redstar">*</span></label>
                                
                                            <select name ="Class_of_Applicant" class="form-control">
                                                <option name="FE">F.E.</option>
                                                <option name="SE">S.E.</option>
                                                <option name="TE">T.E.</option>
                                                <option name="BE">B.E.</option>
                                                <option name="FY">F.Y.</option>
                                                <option name="SY">S.Y.</option>
                                                <option name="TY">T.Y.</option>
                                                <option name="FYMCA">F.Y.MCA</option>
                                                <option name="SYMCA">S.Y.MCA</option>
                                                <option name="TYMCA">T.Y.MCA</option>
                                                <option name="FYMTech">F.Y.MTech</option>
                                                <option name="SYMTech">S.Y.MTech</option>
                                                <option name="Faculty">Faculty</option>
                                                <option name="Research Scholar">Research Scholar</option>
                                            </select>
                                        </div>                                      
                                    </div>
                                </div>

                                <div class="container"><hr></div>


                                
                                <p class="menu m-4">Applicants</p>
                                <div id="dynamic_field">
                                    <div class="row ml-5 mr-5">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>UCID of Applicant</label>
                                                <input type="text" class="form-control" name="UCID" id="ucid1" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Email of Applicant</label>
                                                <input type="email" class="form-control" name="Email_of_applicant">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name of Applicant</label>
                                                <input type="text" class="form-control" name="Name_of_Applicant">
                                            </div>
                                            <div class="form-group">
                                                <label>Mobile No. of Applicant</label>
                                                <input type="text" class="form-control" name="Mb_no_of_applicant">
                                            </div>
                                        </div>
                                    <div class="container"><hr></div>
                                    </div>
                                
                                    <div class="row ml-5 mr-5"  id="applicantRow2" style="display:none;">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>UCID of Appli.2</label>
                                                <input type="text" class="form-control" name="UCID2" id="ucid2" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Email of Appli.2</label>
                                                <input type="email" class="form-control" name="Email_of_applicant2">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name of Appli.2</label>
                                                <input type="text" class="form-control" name="Name_of_Applicant2">
                                            </div>
                                            <div class="form-group">
                                                <label>Mb. No. of Appli.2</label>
                                                <input type="text" class="form-control" name="Mb_no_of_applicant2">
                                            </div>
                                        </div>
                                    <div class="container"><hr></div>
                                    </div>

                                    <div class="row ml-5 mr-5" id="applicantRow3" style="display:none;">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>UCID of Appli.3</label>
                                                <input type="text" class="form-control" name="UCID3" id="ucid3" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Email of Appli.3</label>
                                                <input type="email" class="form-control" name="Email_of_applicant3">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name of Appli.3</label>
                                                <input type="text" class="form-control" name="Name_of_Applicant3">
                                            </div>
                                            <div class="form-group">
                                                <label>Mb. No. of Appli.3</label>
                                                <input type="text" class="form-control" name="Mb_no_of_applicant3">
                                            </div>
                                        </div>
                                        <div class="container"><hr></div>
                                    </div>

                                    <div class="row ml-5 mr-5" id="applicantRow4" style="display:none;">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>UCID of Appli.4</label>
                                                <input type="text" class="form-control ucid" name="UCID4" id="ucid4" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Email of Appli.4</label>
                                                <input type="email" class="form-control" name="Email_of_applicant4">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name of Appli.4</label>
                                                <input type="text" class="form-control" name="Name_of_Applicant4">
                                            </div>
                                            <div class="form-group">
                                                <label>Mb. No. of Appli.4</label>
                                                <input type="text" class="form-control" name="Mb_no_of_applicant4">
                                            </div>
                                        </div>  
                                    </div> 
                                    <button type="button" onclick="displayApplicant()" class="btn btn-primary btn-sm addApplicantButton">Add Applicant</button>
                                </div>

                                <div class="container"><hr></div>


                                
                                <p class="menu m-4">Guide</p>
                                <div id="dynamic_guide">
                                    <div class="row ml-5 mr-5">
                                        <div class="col-md-6 col-sm-2">
                                            <div class="form-group">
                                                <label class="control-label">Depart of Guide 1</label>
                                                
                                                <select name ="Department_of_Guide" id="Department_of_Guide" class="form-control">
                                                    <option value="">Select Department</option>
                                                    <option value="COMPS">COMPS</option>
                                                    <option value="IT">IT</option>
                                                    <option value="ETRX">ETRX</option>
                                                    <option value="EXTC">EXTC</option>
                                                    <option value="MCA">MCA</option>
                                                    <option value="ASH">ASH</option>
                                                    <option value="PhD">PhD</option>
                                                </select>
                                            </div> 
                                        </div>

                                        <div class="col-md-6 col-sm-2">
                                            <div class="form-group">
                                                <label>Name of Guide 1</label>
                                                <select name="Name_of_Guide" id="Name_of_Guide" class="form-control" onchange="getComboFacultyName(this);">
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row ml-5 mr-5" id="departRow2" style="display:none;">
                                        <div class="col-md-6 col-sm-2">
                                            <div class="form-group">
                                                <label class="control-label">Depart of Guide 2</label>
                                            
                                                <select name ="Department_of_Guide2" id="Department_of_Guide2" class="form-control">
                                                    <option value="">Select Department</option>
                                                    <option value="COMPS">COMPS</option>
                                                    <option value="IT">IT</option>
                                                    <option value="ETRX">ETRX</option>
                                                    <option value="EXTC">EXTC</option>
                                                    <option value="MCA">MCA</option>
                                                    <option value="ASH">ASH</option>
                                                    <option value="PhD">PhD</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-2">
                                            <div class="form-group">
                                                <label>Name of Guide 2</label>

                                                <select name="Name_of_Guide2" id="Name_of_Guide2" class="form-control">
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" onclick="displayGuide()" class="btn btn-primary btn-sm addDepartButton">Add Guide</button>
                                </div>

                                <div class="container"><hr></div>

                                
                                <p class="menu m-4">Details</p>
                                <div class="row ml-5 mr-5">
                                    <div class="col-md-6 col-sm-2">
                                        <div class="form-group">
                                            <label>Title
                                                <span class="redstar">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="Paper_Title">
                                        </div>

                                        <div class="form-group">
                                            <label>Type of Publication
                                                <span class="redstar">*</span>
                                            </label>

                                            <select name ="Type_of_Conference" class="form-control" id="comboPaperType" onchange="getComboPaperType(this);">
                                                <option value="">Select Type Of Conference</option>
                                                <option value="Conference">Conference</option>
                                                <option value="Journal">Journal</option>
                                                <option value="Book">Book</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Action
                                                <span class="redstar">*</span>
                                            </label>
                                            <select name ="Action_Taken" class="form-control">
                                                <option value="UG">Published</option>
                                                <option value="PG">Accepted</option>
                                                <option value="PG">Awarded</option>
                                            </select>
                                        </div> 
                                    </div>

                                    <div class="col-md-6 col-sm-2">
                                        <div class="form-group">
                                            <label>Type
                                                <span class="redstar">*</span>
                                            </label>
                                            <select name ="Type_of_publication" class="form-control">
                                                <option value="National">National</option>
                                                <option value="International">International</option>
                                            </select>
                                        </div> 

                                        <div class="form-group">
                                            <label>Name (Conference / Journal / Publisher)
                                                <span class="redstar">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="Name_of_Conference">
                                        </div>

                                        <div class="form-group">
                                            <label>Action Details
                                                <span class="redstar">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="Action_Taken_info">
                                        </div>
                                    </div>
                                </div>

                                <div class="container"><hr></div>


                                
                                <div class="row ml-5 mr-5">
                                    <div class="col-md-6 col-sm-2">
                                        <div class="form-group">
                                            <label>Date Of Conference / Journal / Book</label>
                                            <input type="date" class="form-control" name="Date_of_Conference">
                                        </div>

                                        <div class="form-group">
                                            <label>Conference_Type</label>
                                            <select name ="Conference_Type" class="form-control">
                                                <option name="UG">IEEE</option>
                                                <option name="PG">Springer</option>
                                                <option name="PG">ACM</option>
                                                <option name="PG">Other</option>
                                            </select>
                                        </div> 
                                    </div>

                                    <div class="col-md-6 col-sm-2">
                                        <div class="form-group">
                                            <label>Month Of Publication</label>
                                            <input type="text" class="form-control" name="Month_of_Publication">
                                        </div>

                                        <div class="form-group">
                                            <label>Hosting Institute of the Conference</label>
                                            <input type="text" class="form-control" name="Institute_Venue_Conference">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Address Institute</label><br>
                                        <textarea id="institute_addr" cols="125" rows="3" name="Addr_Institute"></textarea>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input type="text" class="form-control" name="ISBN">
                                        </div>
                                        <div class="form-group">
                                            <label>DOI</label>
                                            <input type="text" class="form-control" name="DOI">
                                        </div>
                                        <div class="form-group">
                                            <label>Journal from</label>
                                            <select name ="Journal_from" class="form-control">
                                                <option name="UG">Scopus</option>
                                                <option name="PG">Web Of Science</option>
                                                <option name="PG">Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Indexed</label>
                                            <input type="text" class="form-control" name="rnd_Indexed">
                                        </div>
                                        <div class="form-group">
                                            <label>Citation of Journal</label>
                                            <input type="text" class="form-control" name="Citation_of_journal">
                                        </div>
                                        <div class="form-group">
                                            <label for>Remark</label>
                                            <textarea name="paper_details_remark" cols="59" rows="2"></textarea>
                                            <small class="text-danger">Note : Please add details like h_index, h5_index</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="container"><hr></div>


                                
                                <p class="menu m-4">Amount</p>
                                <div id="myAmout">
                                    <div class="row ml-5 mr-5" id="amountSection" style="display:none;">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div id="registration_amt">
                                                    <label>Amount of Registration</label>
                                                    <input type="text" class="form-control" name="registration_amt">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div id="Travelling_amt">
                                                    <label>Travelling Amount</label>
                                                    <input type="text" class="form-control" name="Travelling_amt">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div id="total_amount">
                                                    <label>Total Amount</label>
                                                    <input type="text" class="form-control" name="other_expenses" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div id="Accommodation_amt">
                                                    <label>Accomodation Amount</label>
                                                    <input type="text" class="form-control" name="Accommodation_amt">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div id="other_expenses_amt">
                                                    <label>Other Expenses Amount</label>
                                                    <input type="text" class="form-control" name="other_expenses_amt">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-sm btn-primary addReimbursement" type=button onclick="displayAmount()">Apply for Reimbursement</button>
                                </div>
                            
                                <div class="container"><hr></div>


                                
                                <p class="menu m-4">Upload</p>
                                <div class="row ml-5 mr-5">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="ucid"><span class="redstar">*</span> Copy Of Paper
                                            </label>
                                            <input type="file" class="form-control" name="U_Paper_Name">
                                        </div>
                                    </div>

                                    <div class="col-md-">
                                        <div class="form-group">
                                            <label for="name"><span class="redstar">*</span> Certificate Of Publication    
                                            </label>
                                            <input type="file" class="form-control" name="U_certificate_of_publication">
                                        </div>
                                    </div>

                                    <div class="col-md-4" id="supporting_proof" style="display:none;">
                                        <div class="form-group">
                                            <label for="ucid"><span class="redstar">*</span> Supporting Proof
                                            </label>
                                            <input type="file" class="form-control" name="U_other_expenses_proof">
                                        </div>
                                    </div>
                                </div>

                                <!-- Sanction and Submit Button -->
                                    <div class="container"><hr></div>
                                    
                                    
                                    <div id="paper_details">
                                        <input type="text" class="form-control" name="paper_id" id="paper_details2" hidden>
                                    </div>

                                    <div class="container mb-4 mt-4">
                                        <button class="bttn">Cancel</button>
                                        <button type="submit" class="bttn" onClick="window.location.reload();">Submit</button>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script src="http://code.jquery.com/jquery-3.4.1.js"></script> -->



        <!-- Footer -->
        <footer class="font-small text-white mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>© SPIT R&D 2019 All Right Reserved.</strong></p>
                    </div>
        
                    <div class="col-md-6">
                        <button id="scroll-to-top"><i class="fa fa-angle-double-up"></i></button>
                    </div>
                </div>
            </div>
        </footer>
        
        <script type="text/javascript">
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        });
        </script>

        <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <script src="https://research.spit.ac.in/js/custom.js"></script>

        
<script>


// paper id
// rnd_Year/U/P/Ph/Ph_F/S_J/id
//comboRndYear comboRndType typeOfAppli comboPaperType
//getComboRndYear(this) getComboRndType(this) getComboTypeOfAppli(this) getComboPaperType(this)
var rndyearvalue, rndtypevalue, typeapplivalue, typeapplivalue2, papertypevalue, papertypevalue2, paperidres;

function getComboRndYear(obj){
    rndyearvalue = obj.value;

    let paperid = document.getElementById("paper_details2");

    let paperidres = rndyearvalue;

    paperid.setAttribute('value', paperidres);
    console.log(paperid.value);
}

function getComboRndType(obj){
    rndtypevalue = obj.value;

    if(rndtypevalue == "PhD"){
        rndtypevalue = rndtypevalue.substring(0,2);
        paperidres = rndyearvalue + "/" + rndtypevalue;
        
    }else{
        rndtypevalue = rndtypevalue.substring(0,1);
        paperidres = rndyearvalue + "/" + rndtypevalue;
    }

    let paperid = document.getElementById("paper_details2");

    paperid.setAttribute('value', paperidres);
    console.log(paperid.value);
}

function getComboTypeOfAppli(obj){
    typeapplivalue = obj.value;

    if (typeapplivalue == "Faculty") {
        document.getElementById("ucid1").disabled = true;
        document.getElementById("ucid2").disabled = true;
        document.getElementById("ucid3").disabled = true;
        document.getElementById("ucid4").disabled = true;
    } else {
        document.getElementById("ucid1").disabled = false;
        document.getElementById("ucid2").disabled = false;
        document.getElementById("ucid3").disabled = false;
        document.getElementById("ucid4").disabled = false;
    }

    typeapplivalue2 = typeapplivalue.substring(0,1);
    
    let paperid = document.getElementById("paper_details2");

    let paperidres = rndyearvalue + "/" + rndtypevalue + "/" + typeapplivalue2;

    paperid.setAttribute('value', paperidres);
    console.log(paperid.value);
}

function getComboPaperType(obj){
    papertypevalue = obj.value;
    papertypevalue2 = papertypevalue.substring(0,1);
    
    let paperid = document.getElementById("paper_details2");

    let paperidres = rndyearvalue + "/" + rndtypevalue + "/" + typeapplivalue2 + "/" + papertypevalue2;

    paperid.setAttribute('value', paperidres);
    console.log(paperid.value);
}

function getComboFacultyName(obj){
    facultynameavalue = obj.value;
}

// Dynamic Dropdown for department and name of guide
$(document).ready(function () {
                $(document).on('change', '#Department_of_Guide', function () {
                let id = $(this).val();
                // console.log(id);
                $('#Name_of_Guide').empty();
                $('#Name_of_Guide').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                type: 'GET',
                url: 'GetSubCatAgainstMainCatEdit/' + id,
                success: function (response) {
                var response = JSON.parse(response);
                console.log(response);   
                $('#Name_of_Guide').empty();
                $('#Name_of_Guide').append(`<option value="0" disabled selected>Select Name Of Guide</option>`);
                response.forEach(element => {
                    $('#Name_of_Guide').append(`<option value="${element['id']}">${element['name']}</option>`);
                    });
                }
            });
        });
    });

    $(document).ready(function () {
                $(document).on('change', '#Department_of_Guide2', function () {
                let id = $(this).val();
                // console.log(id);
                $('#Name_of_Guide2').empty();
                $('#Name_of_Guide2').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                type: 'GET',
                url: 'GetSubCatAgainstMainCatEdit/' + id,
                success: function (response) {
                var response = JSON.parse(response);
                console.log(response);   
                $('#Name_of_Guide2').empty();
                $('#Name_of_Guide2').append(`<option value="0" disabled selected>Select Name Of Guide</option>`);
                response.forEach(element => {
                    $('#Name_of_Guide2').append(`<option value="${element['id']}">${element['name']}</option>`);
                    });
                }
            });
        });
    });

// Displaying amount on button clicked
// displayAmount
var countAmount = 0;

function displayAmount() {
    countAmount++;
    if (countAmount == 1) {
        document.getElementById("amountSection").style.display = "";
    } else {
        document.getElementById("amountSection").style.display = "none";
        countAmount = 0;
    }
}

// Calculating total amount
var registration_amt = document.querySelector("#registration_amt > input");
var Travelling_amt = document.querySelector("#Travelling_amt > input");
var Accommodation_amt = document.querySelector("#Accommodation_amt > input");
var other_expenses_amt = document.querySelector("#other_expenses_amt > input");
var total_amount = document.querySelector("#total_amount > input");

function totalAmount() {
    var one = parseFloat(registration_amt.value) || 0;
    var two = parseFloat(Travelling_amt.value) || 0;
    var three = parseFloat(Accommodation_amt.value) || 0;
    var four = parseFloat(other_expenses_amt.value) || 0;

    total_amount.value = one + two + three + four;

    if (total_amount.value != 0) {
        document.getElementById("supporting_proof").style.display = "";
    } else {
        document.getElementById("supporting_proof").style.display = "none";
    }
}

function main() {
    registration_amt.addEventListener("input", totalAmount);
    Travelling_amt.addEventListener("input", totalAmount);
    Accommodation_amt.addEventListener("input", totalAmount);
    other_expenses_amt.addEventListener("input", totalAmount);
}

main();

</script>


    </body>
</html>
