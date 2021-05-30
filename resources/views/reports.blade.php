
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

        <title>Admin Manage R & D</title>
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

        
<div class="main mt-4">
    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row">
     
                <div class="col-md-12">

                    <div class="container mt-2">
                        
                        
                                            </div>

                    <h2 class="page-title">Manage Reports</h2>
                    <hr>
                    <div class="card mb-4">
                        <form method="GET" action="https://research.spit.ac.in/bpdf" target="_blank">

                            <div class="card-header">Event Details</div>
                                <div class="container my-5">

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Start date :</label>
                                                    <input type="date" name="rndstartyear" id="rndyearstart" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>End date :</label>
                                                    <input type="date" name="rndendyear" id="rndyearend" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group" style="padding-top:25px;">
                                                    <select name="rndType" id="rndType" class="form-control">
                                                        <option value="">Select Course</option>
                                                        <option value="UG">UG</option>
                                                        <option value="PG">PG</option>
                                                        <option value="PhD">PhD</option>
                                                        <option value="All">All</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group" style="padding-top:25px;">
                                                    <select name="publicationType" id="publicationType" class="form-control">
                                                        <option value="">Select Publication</option>
                                                        <option value="Conference">Conference</option>
                                                        <option value="Journal">Journal</option>
                                                        <option value="Book">Book</option>
                                                        <option value="All">All</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group" style="padding-top:25px;">
                                                    <select name="departmentOfApplicant" id="departmentOfApplicant" class="form-control">
                                                        <option value="">Select Department</option>
                                                        <option value="COMPS">COMPS</option>
                                                        <option value="IT">IT</option>
                                                        <option value="ETRX">ETRX</option>
                                                        <option value="EXTC">EXTC</option>
                                                        <option value="MCA">MCA</option>
                                                        <option value="ASH">ASH</option>
                                                        <option value="All">All</option>
                                                    </select>
                                                </div>
                                            </div>

                                                                                    </div>
                                        
                                    </div>

                                    <div class="container mt-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-primary btn-sm btn-block"><i class="fa fa-download"></i> Brief Report</button>
                                            </div>

                                            <div class="col-md-6">
                                                <a href="/dpdf" target="_blank" class="btn btn-primary btn-sm btn-block"><i class="fa fa-download"></i> Detailed Report</a>
                                            </div>

                                            
                                        </div>
                                    </div>
                                </div>

                                

                                                                <hr>
                                <div class="container-fluid my-5" style="overflow-x:scroll">
                                    <table  class="table table-bordered">
                                        <thead>
                                            <th>Id</th>
                                                                                        <th>Type</th>
                                            <th>Year</th>
                                            <th>Type of Applicant</th>
                                            <th>Department of Applicant</th>
                                            <th>Class of Applicant</th>
                                            <th>Name of Applicant</th>
                                            <th>UCID</th>
                                            <th>Name of Guide</th>
                                            <th>Department of Guide</th>
                                            <th>Paper Title</th>
                                            <th>Type of Conference</th>
                                            <th>Type of Publication</th>
                                            <th>Actio Taken</th>
                                            <th>Name of Conference</th>
                                            <th>Date of Conference</th>
                                            <th>Month of Publication</th>
                                            <th>Conference Type</th>
                                            <th>Institute Venue Conference</th>
                                            <th>Institute Address</th>
                                            <th>ISBN</th>
                                            <th>Indexed</th>
                                            <th>DOI</th>
                                            <th>Citation of Journal</th>
                                            <th>Journal From</th>
                                            <th>Paper Name</th>
                                            <th>Certificate of Publication</th>
                                        </thead>

                                        <tbody>
                                                                                        <tr>
                                                <th>24</th>
                                                                                                <td>PG</td>
                                                <td>2018-19</td>
                                                <td>Student</td>
                                                <td>MCA</td>
                                                <td>T.Y.</td>
                                                <td>Sonali Bakshi</td>
                                                <td>201545002</td>
                                                <td>No Guide</td>
                                                <td>MCA</td>
                                                <td>Credit card Fraud detection</td>
                                                <td>Conference</td>
                                                <td>International</td>
                                                <td>Published</td>
                                                <td>IEEE-I-SMAC 2018</td>
                                                <td>2018-08-31</td>
                                                <td>August</td>
                                                <td>IEEE</td>
                                                <td>SCAD Institute of Technology Coimbatore</td>
                                                <td>SCAD Institute of Technology,
SCAD Knowledge City ,
Palladam - Pollachi Highway ,
Palladam - 641 664, Tirupur District ,
Tamil Nadu, INDIA.</td>
                                                <td>000</td>
                                                <td>000</td>
                                                <td>2019-01-01</td>
                                                <td>000</td>
                                                <td>Scopus</td>
                                                <td>lesson plan iot.docx</td>
                                                <td>lesson plan iot.docx</td>
                                            </tr>
                                                                                        <tr>
                                                <th>25</th>
                                                                                                <td>PG</td>
                                                <td>2018-19</td>
                                                <td>Student</td>
                                                <td>COMPS</td>
                                                <td>B.E.</td>
                                                <td>Nehal Ghosalkar</td>
                                                <td>00000000</td>
                                                <td>Dr. Sudhir Dhage</td>
                                                <td>COMPS</td>
                                                <td>Real Estate Value Prediction Using Machine Learning</td>
                                                <td>Conference</td>
                                                <td>International</td>
                                                <td>Published</td>
                                                <td>IEEE International Conference on Computing, Communication, Control and Automation</td>
                                                <td>2018-08-16</td>
                                                <td>August</td>
                                                <td>IEEE</td>
                                                <td>Pune, India</td>
                                                <td>Pune, India</td>
                                                <td>000</td>
                                                <td>000</td>
                                                <td>0001-01-01</td>
                                                <td>00</td>
                                                <td>Scopus</td>
                                                <td>placement.png</td>
                                                <td>placement.png</td>
                                            </tr>
                                                                                        <tr>
                                                <th>26</th>
                                                                                                <td>UG</td>
                                                <td>2018-19</td>
                                                <td>Student</td>
                                                <td>ETRX</td>
                                                <td>B.E.</td>
                                                <td>Pereira Sean Marcus Theotonio</td>
                                                <td>2015110035</td>
                                                <td>Dr. D.C. Karia</td>
                                                <td>EXTR</td>
                                                <td>AI Use Cases in Operational Support Sysytem and Buisness Support Systems</td>
                                                <td>Conference</td>
                                                <td>International</td>
                                                <td>Published</td>
                                                <td>3rd International Conference on Communication and Electronics Systems(ICCECS2018)</td>
                                                <td>2018-10-15</td>
                                                <td>October</td>
                                                <td>IEEE</td>
                                                <td>PPG Institute of Technology, Coimbatore, India.</td>
                                                <td>PPG Institute of Technology,
Coimbatore, 
India.</td>
                                                <td> 978-1-5386-4765-3 </td>
                                                <td></td>
                                                <td>2000-01-01</td>
                                                <td></td>
                                                <td>Scopus</td>
                                                <td>sean-ai.pdf</td>
                                                <td>Temp.docx</td>
                                            </tr>
                                                                                        <tr>
                                                <th>27</th>
                                                                                                <td>UG</td>
                                                <td>2018-19</td>
                                                <td>Student</td>
                                                <td>ETRX</td>
                                                <td>B.E.</td>
                                                <td>Pereira Sean Marcus Theotonio</td>
                                                <td>2015110035</td>
                                                <td>Dr. D.C. Karia</td>
                                                <td>EXTR</td>
                                                <td>Prediction of sudden Cardiact Death using classification and Regression tree model using Coalesced based ECG and Clanical Data</td>
                                                <td>Conference</td>
                                                <td>International</td>
                                                <td>Published</td>
                                                <td>3rd International Conference on Communication and Electronics Systems(ICCECS2018)</td>
                                                <td>2018-10-15</td>
                                                <td>October</td>
                                                <td>IEEE</td>
                                                <td>PPG Institute of Technology, Coimbatore, India.</td>
                                                <td>PPG Institute of Technology, Coimbatore, India.</td>
                                                <td>978-1-5386-4765-3 </td>
                                                <td></td>
                                                <td>2000-01-01</td>
                                                <td></td>
                                                <td>Scopus</td>
                                                <td>sean-prediction.pdf</td>
                                                <td>Temp.docx</td>
                                            </tr>
                                                                                        <tr>
                                                <th>29</th>
                                                                                                <td>PG</td>
                                                <td>2016-17</td>
                                                <td>Student</td>
                                                <td>ETRX</td>
                                                <td>F.E.</td>
                                                <td>Ninad Chitnis, , , </td>
                                                <td>2014110010, , , </td>
                                                <td>Dr. Deepak Karia, </td>
                                                <td>EXTR, COMPS</td>
                                                <td>Hard Decoding Based Design of Regular LDPC using Labview</td>
                                                <td>Conference</td>
                                                <td>International</td>
                                                <td>Published</td>
                                                <td>IEEE international conference on Current Trends in Convergin Tecxhnilogies 2018</td>
                                                <td>2018-04-03</td>
                                                <td>March 2018</td>
                                                <td>IEEE</td>
                                                <td>India</td>
                                                <td>Coimbatore, India </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>DOI: 10.1109/ICCTCT.2018.8550941</td>
                                                <td>Scopus</td>
                                                <td>New Doc 2020-01-03 15.08.28_1.pdf</td>
                                                <td>New Doc 2020-01-03 15.08.28_1.pdf</td>
                                            </tr>
                                                                                        <tr>
                                                <th>30</th>
                                                                                                <td>PG</td>
                                                <td>2018-19</td>
                                                <td>Student</td>
                                                <td>COMPS</td>
                                                <td>F.Y.</td>
                                                <td>Nehal Ghosalkar</td>
                                                <td>0</td>
                                                <td>Dr. Sudhir Dhage</td>
                                                <td>COMPS</td>
                                                <td>Real Estate Value Prediction Using Machine Learning</td>
                                                <td>Conference</td>
                                                <td>National</td>
                                                <td>Published</td>
                                                <td>IEEE International Conference on Computing, Communication, Control and Automation</td>
                                                <td>2018-08-16</td>
                                                <td>August</td>
                                                <td>IEEE</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>2000-01-01</td>
                                                <td></td>
                                                <td>Scopus</td>
                                                <td>Test_document.pdf</td>
                                                <td>Test_document.pdf</td>
                                            </tr>
                                                                                        <tr>
                                                <th>31</th>
                                                                                                <td>PG</td>
                                                <td>2018-19</td>
                                                <td>Student</td>
                                                <td>COMPS</td>
                                                <td>F.Y.</td>
                                                <td>Amrita Tulshan</td>
                                                <td>1</td>
                                                <td>Dr. Sudhir Dhage</td>
                                                <td>COMPS</td>
                                                <td>Survey on Virtual Assistant: Google Assistant, Siri, Cortana and Alexa</td>
                                                <td>Conference</td>
                                                <td>International</td>
                                                <td>Published</td>
                                                <td>Springer&#039;s International Symposium on Signal Processing and Intelligent Recognition Systems 2018</td>
                                                <td>2018-09-19</td>
                                                <td>September</td>
                                                <td>IEEE</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>2000-01-01</td>
                                                <td></td>
                                                <td>Scopus</td>
                                                <td>Test_document.pdf</td>
                                                <td>Test_document.pdf</td>
                                            </tr>
                                                                                        <tr>
                                                <th>32</th>
                                                                                                <td>PG</td>
                                                <td>2018-19</td>
                                                <td>Student</td>
                                                <td>COMPS</td>
                                                <td>F.Y.</td>
                                                <td>Swati Kulkarni</td>
                                                <td>2</td>
                                                <td>Dr. Sudhir Dhage</td>
                                                <td>COMPS</td>
                                                <td>Advanced Credit Scoring System Social Media and Machine Learning</td>
                                                <td>Conference</td>
                                                <td>International</td>
                                                <td>Published</td>
                                                <td>Springer&#039;s International Symposium on Signal Processing and Intelligent Recognition Systems 2019</td>
                                                <td>2018-09-19</td>
                                                <td>September</td>
                                                <td>IEEE</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>2000-01-01</td>
                                                <td></td>
                                                <td>Scopus</td>
                                                <td>Test_document.pdf</td>
                                                <td>Test_document.pdf</td>
                                            </tr>
                                                                                        <tr>
                                                <th>33</th>
                                                                                                <td>UG</td>
                                                <td>2018-19</td>
                                                <td>Student</td>
                                                <td>COMPS</td>
                                                <td>B.E.</td>
                                                <td>Rubina Shaikh, Humaira Momin, Chandrabhaga Kondhawale</td>
                                                <td>3</td>
                                                <td>Prof. Kiran Gawande</td>
                                                <td>COMPS</td>
                                                <td>Feature based Evaluation of Hotel Reviews and Rating for Differently able people</td>
                                                <td>Conference</td>
                                                <td>International</td>
                                                <td>Published</td>
                                                <td>IEEE International Conference on Energy, communication, Data Anlytics &amp; Soft computing 2017</td>
                                                <td>2017-08-02</td>
                                                <td>Februaryy</td>
                                                <td>IEEE</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>2000-01-01</td>
                                                <td></td>
                                                <td>Scopus</td>
                                                <td>Test_document.pdf</td>
                                                <td>Test_document.pdf</td>
                                            </tr>
                                                                                        <tr>
                                                <th>34</th>
                                                                                                <td>UG</td>
                                                <td>2018-19</td>
                                                <td>Student</td>
                                                <td>COMPS</td>
                                                <td>B.E.</td>
                                                <td>John Britto</td>
                                                <td>4</td>
                                                <td>Prof. Jyoti Ramteke</td>
                                                <td>COMPS</td>
                                                <td>A Sixth Sense Door using Internet of Things</td>
                                                <td>Conference</td>
                                                <td>International</td>
                                                <td>Published</td>
                                                <td>Springer- International Conference on Computer Networks and Inventive Communication Technologies ICCNCT 2018</td>
                                                <td>2018-04-26</td>
                                                <td>April</td>
                                                <td>IEEE</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>2000-01-01</td>
                                                <td></td>
                                                <td>Scopus</td>
                                                <td>Test_document.pdf</td>
                                                <td>Test_document.pdf</td>
                                            </tr>
                                                                                    </tbody>

                                        <thead>
                                            <th>Id</th>
                                                                                        <th>Type</th>
                                            <th>Year</th>
                                            <th>Type of Applicant</th>
                                            <th>Department of Applicant</th>
                                            <th>Class of Applicant</th>
                                            <th>Name of Applicant</th>
                                            <th>UCID</th>
                                            <th>Name of Guide</th>
                                            <th>Department of Guide</th>
                                            <th>Paper Title</th>
                                            <th>Type of Conference</th>
                                            <th>Type of Publication</th>
                                            <th>Actio Taken</th>
                                            <th>Name of Conference</th>
                                            <th>Date of Conference</th>
                                            <th>Month of Publication</th>
                                            <th>Conference Type</th>
                                            <th>Institute Venue Conference</th>
                                            <th>Institute Address</th>
                                            <th>ISBN</th>
                                            <th>Indexed</th>
                                            <th>DOI</th>
                                            <th>Citation of Journal</th>
                                            <th>Journal Form</th>
                                            <th>Paper Name</th>
                                            <th>Certificate of Publication</th> 
                                        </thead>
                                    </table>
                                    <nav>
        <ul class="pagination">
            
                            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            
            
                            
                
                
                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://research.spit.ac.in/reports?page=2">2</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://research.spit.ac.in/reports?page=3">3</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://research.spit.ac.in/reports?page=4">4</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://research.spit.ac.in/reports?page=5">5</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://research.spit.ac.in/reports?page=6">6</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://research.spit.ac.in/reports?page=7">7</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://research.spit.ac.in/reports?page=8">8</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://research.spit.ac.in/reports?page=9">9</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://research.spit.ac.in/reports?page=10">10</a></li>
                                                                                        
                                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                
                
                                            
                
                
                                                                                        <li class="page-item"><a class="page-link" href="https://research.spit.ac.in/reports?page=63">63</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://research.spit.ac.in/reports?page=64">64</a></li>
                                                                        
            
                            <li class="page-item">
                    <a class="page-link" href="https://research.spit.ac.in/reports?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                </li>
                    </ul>
    </nav>

                                </div>
                                
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>  



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

        
    </body>
</html>
