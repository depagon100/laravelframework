<!DOCTYPE html>


<html lang="en">
<head>
    @extends('layout.master')
    @section('content')
    {{View::make('layout.tabs')}}

    <title>Environmental Management Bureau Online Services - SMR - R.A. 9275</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">




</head>
<body>

    <div class="container card col" >

            
            <form action="/saveData" post="post">
             @csrf
            <!-- {{ csrf_field() }} -->
      <br>
                <div class="row">
                    <div class="col">
                
                        <h1 style="text-align: center" > POLLUTION CONTROL ASSOCIATION OF THE PHILIPPINES, INC. (PCAPI)</h1>
                        <h2 style="text-align: center">SELF- MONITORING REPORT TRAINING MODULE</h2>
                    </div>
                    
              
                        <div class="card col-5" style="float:right" >
                                <div class="mt-1 mx-3">
                                    Reference no.
                                </div>
                
                                <div class="card-body">
                                    <input type="text" class="form-control mt-0" placeholder="">
                                </div>
                            </div>
                        </div>
                    

                         <!-- Message input -->
                        <div class="col">
                            <p class="text-primary my-0">Note.</p>
                            <p class="text-primary my-0">1. Put "N/A" for field not applicable to you.</p>
                            <p class="text-primary my-0">2. You Can now Export data on Each module by clicking "EXPORT" Link Below.</p>
                        </div>

                        <div class="container">
                            <div class="row">
                                <p class="p-1 mt-3  text-light" style="background-color:gray; font-size:20px ">
                                    MODULE 3: RA 9275
                                    <a href="/pdf" class="btn btn-lg" style="float: right"><img src="images/printpdflogo.png" height="40px" width="50px" style="backgorund-color:gray;"> EXPORT PDF</a>
                                </p>
            
                            </div>
                        </div>

                        <div class="container " >
                            <table class="table table-borderless table-hover" >
                                <h3 class="mt-3 mx-2 text-success">WATER POLLUTION DATA</h3>


                                    <tbody>
                                        <tr>
                                            <td>Domestic wastewater (cubicmeters/day)</td>
                                            <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                            <td><input class="form-control" type="text" style="text-align:center" name="domwaste" id="dww" value=" "></td>
                
                                            <td>Processs wastewater (cubicmeters/day)</td>
                                            <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                            <td><input class="form-control" type="text" style="text-align:center" name="processwaste" id="pww" value=" "></td>
                                      
                                        </tr>
                                    </tbody>
                
                                    <tbody>
                                        <tr>
                                            <td>Cooling water (cubicmeters/day)</td>
                                            <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                            <td><input class="form-control" type="text" style="text-align:center" name="coolingw" id="cwmd" value=" "></td>
                                            
                                            <td>others (cubicmeters/day)
                                            <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                            <input class="form-control" type="text" style="text-align:center" name="othern" id="otn" value=" "></td>
                                            <td><input class="form-control" type="text" style="text-align:center" name="othercm" id="ocmd" value=" "></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                
                                    <tbody>
                                        <tr>
                                            <td>Waste water, equipment (cubicmeters/day)</td>
                                            <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                            <td><input class="form-control" type="text" style="text-align:center" name="wequip" id="wweq" value=" "></td>
                
                                            <td>Waste water, floor (cubicmeters/day)</td>
                                            <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                            <td><input class="form-control" type="text" style="text-align:center" name="wwfloor" id="wwfl" value=" "></td>
                                      
                                        </tr>
                                    </tbody>
                            </table>
                            

                            <table class="table table-borderless table-hover" >
                                <h3 class="mt-3 mx-2 text-success">RECORD COST OF TREATMENT</h3>
                
                                    
                                    <tbody>
                                        <tr>
                                            <th></th>
                                            <th style="text-align: center">Month 1</th>
                                            <th style="text-align: center">Month 2</th>
                                            <th style="text-align: center">Month 3</th>
                                        </tr>
                                    </tbody>
                                    
                
                                    <tbody id="penum">
                                        <tr>
                                            <td>Person employed, (# of employees)</td>
                                            <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                            <td><input class="form-control" type="text" name="pemonth1" id="pem1" value=" "></td>
                                            <td><input class="form-control"type="text" name="pemonth2" id="pem2" value=" "></td>
                                            <td><input class="form-control" type="text" name="pemonth3" id="pem3" value=" "></td>
                                        </tr>
                                    </tbody>    
                
                
                                    <tbody id="pecost">
                                        <tr>
                                            <td>Person employed, (cost)</td>
                                            <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                            <td><input class="form-control" type="text" name="pecmonth1" id="pecm1" value=" "></td>
                                            <td><input class="form-control" type="text" name="pecmonth2" id="pecm2" value=" "></td>
                                            <td><input class="form-control" type="text" name="pecmonth3" id="pecm3" value=" "></td>
                                        </tr>
                                    </tbody>    
                
                                    <tbody id="cocwtp">
                                        <tr>
                                            <td>Cost of Chemicals used by WTP</td>
                                            <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                            <td><input class="form-control" type="text" name="cocw1" id="cocwm1" value=" "></td>
                                            <td><input class="form-control" type="text" name="cocw2" id="cocwm2" value=" "></td>
                                            <td><input class="form-control" type="text" name="cocw3" id="cocwm3" value=" "></td>
                                        </tr>
                                    </tbody>    
                
                                    <tbody id="ucwtp">
                                        <tr>
                                            <td>Utility Costs of WTP(electricity & water)</td>
                                            <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                            <td><input class="form-control" type="text" name="ucw1" id="ucwm1" value=" "></td>
                                            <td><input class="form-control" type="text" name="ucw2" id="ucwm2" value=" "></td>
                                            <td><input class="form-control" type="text" name="ucw3" id="ucwm3" value=" "></td>
                                        </tr>
                                    </tbody>    
                
                                    <tbody id="aoc">
                                        <tr>
                                            <td>Administrative and Overhead Costs</td>
                                            <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                            <td><input class="form-control" type="text" name="aoc1" id="aocm1" value=" "></td>
                                            <td><input class="form-control" type="text" name="aoc2" id="aocm2" value=" "></td>
                                            <td><input class="form-control" type="text" name="aoc3" id="aocm3" value=" "></td>
                                        </tr>
                                    </tbody>    
                
                                    <tbody id="colab">
                                        <tr>
                                            <td>Cost of operating in-house laboratory</td>
                                            <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                            <td><input class="form-control" type="text" name="colab1" id="colabm1" value=" "></td>
                                            <td><input class="form-control" type="text" name="colab2" id="colabm2" value=" "></td>
                                            <td><input class="form-control" type="text" name="colab3" id="colabm3" value=" "></td>
                                        </tr>
                                    </tbody>    
                
                                    <tbody id="nai">
                                        <tr>
                                            <td>New/Additional Investments in WTP <br> (description)</td>
                                            <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                            <td><input class="form-control" type="text" name="nai1" id="naim1" value=" "></td>
                                            <td><input class="form-control" type="text" name="nai2" id="naim2" value=" "></td>
                                            <td><input class="form-control" type="text" name="nai3" id="naim3" value=" "></td>
                                        </tr>
                                    </tbody>    
                
                
                                    <tbody id="cnai">
                                        <tr>
                                            <td>Costs of New/Add Investments <br> (description)</td>
                                            <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                            <td><input class="form-control" type="text" name="cnai1" id="cnaim1" value=" "></td>
                                            <td><input class="form-control" type="text" name="cnai2" id="cnaim2" value=" "></td>
                                            <td><input class="form-control" type="text" name="cnai3" id="cnaim3" value=" "></td>
                                        </tr>
                                    </tbody>    

                            </table>


                            <table class="table table-borderless table-hover" >
                                <h3 class="mt-3 mx-2 text-success">WTP DISCHARGE LOCATION</h3>
                
                                    <tbody id=wdl>
                                        <tr>
                                            <th style="text-align: center">Outlet Number</th>
                                            <th style="text-align: center">Location of Outlet</th>
                                            <th style="text-align: center">Name of Receiving water body</th>
                                        </tr>
        
        
                                        <tr>
                                            <td><input class="form-control" type="number" name="dischargeLocation[]"></td>
                                            <td><input class="form-control" type="text"  id="lo" name="dischargeLocation[]"></td>
                                            <td><input class="form-control" type="text"  id="nrwb" name="dischargeLocation[]"></td>
                                            <td><button type="button" name="add" id="wdladd" class="btn btn-outline-primary">+</button></td>
                                            <td></td>
                                        </tr>
                                    </tbody>        

                            </table>

                            
                            <table class="table table-borderless table-hover" >
                                <h3 class="mt-3 mx-2 text-success">DETAILED REPORT OF WASTEWATER CHARACTERISTICS FOR CONVENTIONAL POLLUTANTS</h3>
                                  
                                  
                                    <tbody id=drwccc>
                                        <tr>
                                            <th style="text-align: center">Outlet No.</th>
                                            <th style="text-align: center">Date</th>
                                            <th style="text-align: center">NEffluent Flow Rate (m3/day)</th>
                                            <th style="text-align: center">BOD (mg/L)</th>   
                                            <th style="text-align: center">TSS (mg/L)</th>
                                            <th style="text-align: center">Color</th>   
                                            <th style="text-align: center">pH</th>
                                            <th style="text-align: center">Oil & Grease (mg/L)</th>   
                                            <th style="text-align: center">Temp Rise ©</th>
                                        </tr>
                     
        
    
                                        <tr>
                                            <td><input class="form-control" type="number" name="dreportofwaste[]"></td>
                                            <td><input class="form-control" type="date"  id="wcdate" name="dreportofwaste[]"></td>
                                            <td><input class="form-control" type="text"  id="nfr" name="dreportofwaste[]"></td>
                                            <td><input class="form-control" type="text"  id="bod" name="dreportofwaste[]"></td>
                                            <td><input class="form-control" type="text"  id="tss" name="dreportofwaste[]"></td>
                                            <td><input class="form-control" type="text"  id="clr" name="dreportofwaste[]"></td>
                                            <td><input class="form-control" type="text"  id="phl" name="dreportofwaste[]"></td>
                                            <td><input class="form-control" type="text"  id="oag" name="dreportofwaste[]"></td>
                                            <td><input class="form-control" type="text"  id="tempr" name="dreportofwaste[]"></td>
                                            <td><button type="button" name="add" id="drwcccadd" class="btn btn-outline-primary">+</button></td>
                                            <td></td>
                                        </tr>
                                    </tbody>


                            </table>

                            <table class="table table-borderless table-hover" >
                                <h3 class="mt-3 mx-2 text-success">DETAILED REPORT OF WASTEWATER CHARACTERISTICS FOR OTHER POLLUTANTS</h3>
                
                                    <tbody id=dwrcop>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="form-control" type="text"  id="opn1" name="opname1"></td>
                                            <td><input class="form-control" type="text"  id="opn2" name="opname2"></td>
                                            <td><input class="form-control" type="text"  id="opn3" name="opname3"></td>
                                            <td><input class="form-control" type="text"  id="opn4" name="opname4"></td>
                                            <td><input class="form-control" type="text"  id="opn5" name="opname5"></td>
                                            <td><input class="form-control" type="text"  id="opn6" name="opname6"></td>
                                        </tr>
        
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <th style="text-align: center">Name</th>
                                            <th style="text-align: center">Name</th>
                                            <th style="text-align: center">Name</th>
                                            <th style="text-align: center">Name</th>
                                            <th style="text-align: center">Name</th>
                                            <th style="text-align: center">Name</th>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="form-control" type="text"  id="opu1" name="opunit1"></td>
                                            <td><input class="form-control" type="text"  id="opu2" name="opunit2"></td>
                                            <td><input class="form-control" type="text"  id="opu3" name="opunit3"></td>
                                            <td><input class="form-control" type="text"  id="opu4" name="opunit4"></td>
                                            <td><input class="form-control" type="text"  id="opu5" name="opunit5"></td>
                                            <td><input class="form-control" type="text"  id="opu6" name="opunit6"></td>
                                        </tr>

                                        <tr>
                                            <th style="text-align: center">Outlet No.</th>
                                            <th style="text-align: center">Date</th>
                                            <th style="text-align: center">Effluent Flow Rate (m3/day)</th>
                                            <th style="text-align: center">Unit</th>
                                            <th style="text-align: center">Unit</th>
                                            <th style="text-align: center">Unit</th>
                                            <th style="text-align: center">Unit</th>
                                            <th style="text-align: center">Unit</th>
                                            <th style="text-align: center">Unit</th>
                                        </tr>

                                        <tr>
                                            <td><input class="form-control" type="number" name="outlno[]"></td>
                                            <td><input class="form-control" type="date"  id="wcdate" name="wchardate"></td>
                                            <td><input class="form-control" type="text"  id="efr" name="efrm"></td>
                                            <td><input class="form-control" type="text"  id="opm1" name="opmass1"></td>
                                            <td><input class="form-control" type="text"  id="opm2" name="opmass2"></td>
                                            <td><input class="form-control" type="text"  id="opm3" name="opmass3"></td>
                                            <td><input class="form-control" type="text"  id="opm4" name="opmass4"></td>
                                            <td><input class="form-control" type="text"  id="opm5" name="opmass5"></td>
                                            <td><input class="form-control" type="text"  id="opm6" name="opmass16"></td>
                                            <td><button type="button" name="add" id="dwrcopadd" class="btn btn-outline-primary">+</button></td>
                                            <td></td>
                                        </tr>





                                    </tbody>
        

                            </table>
                        
                        </div>


                                                   
                           


                </div>

                    <!-- 13th row -->
                    <div class="container">
                        <div class="col mb-3" >
                            <div style="float: right" class="mb-3">
                                <a href={{ url('/moduleTwo') }} class="btn btn-lg border bg-light">Previous</a>
                                <a href={{ url('/moduleFour') }} class="btn btn-lg btn-info">Next</a>
                                <input type="submit" value="Save Page" class="btn btn-lg btn-primary">
                            </div>
                        </div>
                    </div>
            </form>
    </div>





</body>
<style>
    h1 {

   
     font-size: 26px;
     color:gray;
    }
    h2 {
    
    font-size: 20px;
    color:gray;
    }
</style>

<!-- WTP DISCHARGE LOCATION script -->
<script type="text/javascript">
    var i = 0;
    $("#wdladd").click(function () { //button name
        ++i;
        $("#wdl").append(
            '<tr><td><input class="form-control" type="number" name="outlno[]"></td><td><input class="form-control" type="text"  id="lo" name="locout"></td><td><input class="form-control" type="text"  id="nrwb" name="namerwb"></td><td></td></tr>'
                ); //table name
    });
</script>

                                
 <!-- DETAILED REPORT OF WASTEWATER CHARACTERISTICS for CC script -->   
<script type="text/javascript">
    var i = 0;
    $("#drwcccadd").click(function () { //button name
        ++i;
        $("#drwccc").append(
            ' <tr><td><input class="form-control" type="number" name="outlno[]"></td><td><input class="form-control" type="date"  id="wcdate" name="wchardate"></td><td><input class="form-control" type="text"  id="nfr" name="nfrate"></td><td><input class="form-control" type="text"  id="bod" name="bodm"></td><td><input class="form-control" type="text"  id="tss" name="tssm"></td><td><input class="form-control" type="text"  id="clr" name="color"></td><td><input class="form-control" type="text"  id="phl" name="phlevel"></td><td><input class="form-control" type="text"  id="oag" name="oagm"></td><td><input class="form-control" type="text"  id="tempr" name="temprise"></td><td></td></tr>'
                ); //table name
    });
</script>

 <!-- DETAILED REPORT OF WASTEWATER CHARACTERISTICS for OP script -->   
 <script type="text/javascript">
    var i = 0;
    $("#dwrcopadd").click(function () { //button name
        ++i;
        $("#dwrcop").append(
            '<tr><td><input class="form-control" type="number" name="outlno[]"></td><td><input class="form-control" type="date"  id="wcdate" name="wchardate"></td><td><input class="form-control" type="text"  id="efr" name="efrm"></td><td><input class="form-control" type="text"  id="opm1" name="opmass1"></td><td><input class="form-control" type="text"  id="opm2" name="opmass2"></td><td><input class="form-control" type="text"  id="opm3" name="opmass3"></td><td><input class="form-control" type="text"  id="opm4" name="opmass4"></td><td><input class="form-control" type="text"  id="opm5" name="opmass5"></td><td><input class="form-control" type="text"  id="opm6" name="opmass16"></td><td></td></tr>'
                ); //table name
    });
</script>


@endsection
</html>