<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="{{ asset('css/adminstyle.css') }}" rel="stylesheet">  
<script>
    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
    }
    </script>
</head>

<body class="d-flex flex-column min-vh-100">
    <div id="mySidebar" class="sidebar bg-white text-dark">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <center>
        <div>
            <img class="text-center" src="{{ asset('images/admin;ogooo2.jpg') }}" alt="Error" width="200"><br><br>
            <div>
                <h4>kainat</h4>
                <span>kainat</span>
            </div><br><br>
        </div>
        
        <div class="menu-head">
            <span><h3>Dashboard</h3></span>
        </div>
        <br><br>
        </center>
        <div class="text-dark">
                <a href="{{ url('/Teacher-Dashboard') }}"class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                    <span class="las la-chalkboard-teacher"></span>
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span >Lecturer</span>  
                </a>
                <a href="#"class="list-group-item list-group-item-action py-2 ripple " aria-current="true">
                    <span class="las la-user"></span>
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span >Students</span>  
                </a>
                <a href="#"class="list-group-item list-group-item-action py-2 ripple " aria-current="true">
                    <span class="las la-book"></span>
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span >Courses</span>  
                </a>
                <a href="{{ url('/aboutus') }}"class="list-group-item list-group-item-action py-2 ripple " aria-current="true">
                    <span class="las la-info"></span>
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span >About</span>  
                </a>
                <a href="{{ url('/contact') }}"class="list-group-item list-group-item-action py-2 ripple " aria-current="true">
                    <span class="las la-phone"></span>
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span >Contact</span>  
                </a>
        </div>
    </div>

    <div id="main">
    <button class="openbtn" onclick="openNav()">☰</button>  
    </div>
        <main>
            <div class="page-header">
                <div>
                    <h1>Teacher Dashboard</h1>
                </div>
                <div class="header-actions ">
                    <a style="text-decoration: none; color:white;" href="{{ url('/Teacherlogin') }}">
                        <button>
                            <span class="la la-sign-out">Logout</span>
                        </button>
                    </a>
                </div>    
            </div>  
            <div class="cards">
                <div class="cards-single">
                    <div class="cards-flex">
                        <div class="cards-info">
                            <div class="cards-head">
                                <span>Total Students</span>
                            </div>
                            <h2>{{$student}}</h2>
                            <small>30% increase during last month</small>
                        </div>
                        <div class="cards-chart danger">
                            <span class="las la-chart-line"></span>
                        </div>
                    </div>
                </div>

                <div class="cards-single">
                    <div class="cards-flex">
                        <div class="cards-info">
                            <div class="cards-head">
                                <span>Course Registered</span>
                            </div>
                            <h2>{{$course}}</h2>
                            <small>20% less in 3 weeks </small>
                        </div>
                        <div class="cards-chart success">
                            <span class="las la-chart-line"></span>
                        </div>
                    </div>
                </div>

                
            </div> 

            <div class="jobs-grid">
                <div class="analytics-card">
                    <div class="analytucs-head">
                        <h3>
                            Student's Performance  
                        </h3>
                        <span class="las la-ellipsis-h"></span>
                    </div>

                    <div class="analytics-chart">
                        <div class="chart-circle">
                            <h1>
                                75%
                            </h1>
                        </div>

                        <div class="analytics-node text-center">
                            <h3>Overall calculated  result ratio</h3>
                        </div>
                    </div>
                    
                    <div class="analytics-btn">
                        <button>
                            Calculate Results
                        </button>
                    </div>
                </div>

                <div class="chartt">
                    <div class="uni-card">
                        <div class="cardd-head">
                            University Survey
                        </div>
                        <div cardd-body>
                            <div id="chart"></div>
                        </div>
                    </div>
                </div>
            </div>    
        </main>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        let options = {
            chart: {
                type: 'line'
            },
            stroke:{
                curve:"smooth",
                colors: ["#8a1e8e"],
            },
            series: [{
                name: 'Month',
                data: [10,40,25,50,99,70,85,37]
            }],
            xaxis: {
                categories: ["January","February","March","April","June","July","Augest","September","October","November","December"]
            }
        }

        var chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();
    </script>
    </div>  
   
</body>
</html> 
