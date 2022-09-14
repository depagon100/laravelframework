<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layout.master')
    @section('content')
    {{View::make('layout.tabs')}}

  <title>Environmental Management Bureau Online Services - SMR - General information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>


</head>

<body>

  <div class="container card col" style="align-content: center">
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

                <div class="container">

                  <div class="row mt-4">

                    <div class="col-2">

                      <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">SELECT</option>
                        <option class="">2025</option>
                        <option class="">2024</option>
                        <option class="">2023</option>
                        <option class="">2022</option>
                        <option class="">2021</option>
                        <option class="">2020</option>
                        <option class="">2019</option>
                        <option class="">2018</option>
                        <option class="">2017</option>
                        <option class="">2016</option>
                        <option class="">2015</option>
                      </select>

                      <div class="invalid-feedback">
                        Please select a valid region.
                      </div>



                    </div>

                    <div class="col-2">

                      <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">SELECT</option>
                        <option class="">1st Quarter</option>
                        <option class="">2nd Quarter</option>
                        <option class="">3rd Quarter</option>
                        <option class="">4th Quarter</option>
                      </select>

                      <div class="invalid-feedback">
                          Please select a valid region.
                      </div>

                    </div>

                    <div class="col" style="margin-left: 5%">
                      <p class="mx-auto mt-2"  >QUARTERLY SELF-MONITORING REPORT</p class="mx-auto">
                    </div>

                  </div>
                </div>

                <div class="card p-3">


                  <!-- Message input -->
                  <div class="col">
                    <p class="text-primary my-0">Note.</p>
                    <p class="text-primary my-0">1. Put "N/A" for field not applicable to you.</p>
                    <p class="text-primary my-0">2. You Can now Export data on Each module by clicking "EXPORT" Link Below.</p>
                  </div>

                  <div class="container">
                    <div class="row">
                        <p class="p-1 mt-3  text-light" style="background-color:gray; font-size:20px ">
                            MODULE 1: GENERAL INFORMATION
                            <a href="/pdf" class="btn btn-lg" style="float: right"><img src="images/printpdflogo.png" height="40px" width="50px" style="backgorund-color:gray;"> EXPORT PDF</a>
                        </p>

                    </div>
                </div>


                  <div class="mb-2">
                    <div class="col-11 mx-auto">
                        <p >Name of the Plant</p>
                        <select class="form-select" id="plant" required>
                            <option selected disabled value="">-- Select --</option>
                            <option class="">ATLANTIC COATINGS, INC.</option>
                            <option class="">2nd Plant</option>
                            <option class="">3rd Plant</option>
                            <option class="">4th Plant</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid region.
                        </div>
                    </div>
                  </div>

                  <!-- Message input class="form-control" -->
                  <div class="container pt-4">
                    <P class="text-secondary ml-3 mt-3">Please provide the necessary revised, corrected or updated information not
                        contained in your <br> General Information Sheet.</P>
                  </div>


                  <div class="container">
                    <textarea name="description" class="form-control" id="description" cols="40" rows="10"
                        style="overflow:scroll; overflow-x:hidden" value="{{ old('description') }}"></textarea>
                  </div>

                  <table class="table table-borderless table-hover" >
                    <h3 class="mt-3 mx-2 text-success">DENR PERMITS/LICENSE/CLEARANCES</h3>

                    <thead>
                      <tr>
                        <th>Environmental Laws</th>
                        <th></th>
                        <th>Permits</th>
                        <th>Data issued</th>
                        <th>Expiry Data</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>RA 9275</td>
                        <td>A/C</td>
                        <input class="form-control" type="number" name="traineeID" value="1" hidden>
                        <td><input class="form-control" type="text" name="ACPermit" value="{{ old('ACPermit') }}" ></td>
                        <td><input class="form-control"  type="date" name="ACIssued"  value="{{ old('ACIssued') }}" ></td>
                        <td><input class="form-control" type="date" name="ACExpire" value="{{ old('ACExpire') }}"></td>
                      </tr>
                    </tbody>



                    <tbody id=dynamicAddRemove>
                        <tr>
                            <td></td>
                            <td>DP no.</td>
                            <td><input class="form-control" type="text" name="dpno[]" value="{{ old('dpno[]') }}"></td>
                            <td><input class="form-control" type="date" name="dpno[]" value="{{ old('dpno[]') }}"></td>
                            <td><input class="form-control" type="date" name="dpno[]" value="{{ old('dpno[]') }}"></td>

                        </tr>


                    </tbody>
                    <td></td>
                    <td></td>
                    <td><button type="button" name="add" id="dynamic-ar"
                        class="btn btn-outline-primary" >+</button></td>

                    <tbody id=pd>
                        <tr>
                            <td>PD 1586</td>
                            <td>ECC/CNC no.</td>
                            <td><input class="form-control" type="text" name="cncno[]" value="{{ old('cncno[]') }}"></td>
                            <td><input class="form-control" type="date" name="cncno[]" value="{{ old('cncno[]') }}"></td>
                            <td><input class="form-control" type="date" name="cncno[]" value="{{ old('cncno[]') }}"></td>

                        </tr>
                    </tbody>
                    <td></td>
                    <td></td>
                    <td><button type="button" name="add" id="ECC"
                        class="btn btn-outline-primary">+</button></td>

                    <!-- DENR REG -->
                    <tbody id="reg">
                        <tr>
                            <td>RA 6969</td>
                            <td>DENR Registry ID</td>
                            <td><input class="form-control" type="text" name="DENRpermit" value="{{ old('DENRpermit') }}"></td>
                            <td><input class="form-control" type="date" name="DENRdateIssued" value="{{ old('DENRdateIssued') }}"></td>
                            <td><input class="form-control" type="date" name="DENRdateExpired" value="{{ old('DENRdateExpired') }}"></td>

                        </tr>
                    </tbody>

                    <!-- Transporter-->
                    <tbody id="trans">
                        <tr>
                            <td></td>
                            <td>Transporter Registration</td>
                            <td><input class="form-control" type="text" name="Transportpermit" value="{{ old('Transportpermit') }}"></td>
                            <td><input class="form-control" type="date" name="TransportdateIssued" value="{{ old('TransportdateIssued') }}"></td>
                            <td><input class="form-control" type="date" name="TransportdateExpired" value="{{ old('TransportdateExpired') }}"></td>
                        </tr>
                    </tbody>

                    <!-- TSD -->
                    <tbody id="tsd">
                        <tr>
                            <td></td>
                            <td>TSD Registration</td>
                            <td><input class="form-control" type="text" name="TSDpermit" value="{{ old('TSDpermit') }}"></td>
                            <td><input class="form-control" type="date" name="TSDdateIssued" value="{{ old('TSDdateIssued') }}"></td>
                            <td><input class="form-control" type="date" name="TSDdateExpired" value="{{ old('TSDdateExpired') }}"></td>
                        </tr>
                    </tbody>

                    <!-- CCO Registration -->
                    <tbody id="cco">
                        <tr>
                            <td></td>
                            <td>CCO Registration</td>
                            <td><input class="form-control" type="text" name="ccoreg[]" value="{{ old('ccoreg[]') }}"></td>
                            <td><input class="form-control" type="date" name="ccoreg[]" value="{{ old('ccoreg[]') }}"></td>
                            <td><input class="form-control" type="date" name="ccoreg[]" value="{{ old('ccoreg[]') }}"></td>

                        </tr>
                    </tbody>
                    <td></td>
                    <td></td>
                    <td><button type="button" name="add" id="ccoreg"
                        class="btn btn-outline-primary">+</button></td>

                    <!-- Importation Clearance number -->
                    <tbody id="importation">
                        <tr>
                            <td></td>
                            <td>Importation Clearance No.</td>
                            <td><input class="form-control" type="text" name="import[]" value="{{ old('import[]') }}"></td>
                            <td><input class="form-control" type="date" name="import[]" value="{{ old('import[]') }}"></td>
                            <td><input class="form-control" type="date" name="import[]" value="{{ old('import[]') }}"></td>

                        </tr>
                    </tbody>
                    <td></td>
                    <td></td>
                    <td><button type="button" name="add" id="imp"
                        class="btn btn-outline-primary">+</button></td>

                    <!-- Permit to Transport -->
                    <tbody id="permit">
                        <tr>
                            <td></td>
                            <td>Permit to Transport</td>
                            <td><input class="form-control" type="text" name="permit[]" value="{{ old('permit[]') }}"></td>
                            <td><input class="form-control" type="date" name="permit[]" value="{{ old('permit[]') }}"></td>
                            <td><input class="form-control" type="date" name="permit[]" value="{{ old('permit[]') }}"></td>

                        </tr>
                    </tbody>
                    <td></td>
                    <td></td>
                    <td><button type="button" name="add" id="ptt"
                        class="btn btn-outline-primary">+</button></td>

                    <!-- Small Quantity Importation -->
                    <tbody id="smallq">
                        <tr>
                            <td></td>
                            <td> Small Quantity Importation</td>
                            <td><input class="form-control" type="text" name="smallquan[]" value="{{ old('smallquan[]') }}"></td>
                            <td><input class="form-control" type="date" name="smallquan[]" value="{{ old('smallquan[]') }}"></td>
                            <td><input class="form-control" type="date" name="smallquan[]" value="{{ old('smallquan[]') }}"></td>

                        </tr>
                    </tbody>
                    <td></td>
                    <td></td>
                    <td><button type="button" name="add" id="sqi"
                        class="btn btn-outline-primary">+</button></td>

                    <!-- Priority Chemical list -->
                    <tbody id="prio">
                        <tr>
                            <td></td>
                            <td>Priority Chemical List</td>
                            <td><input class="form-control" type="text" name="priority[]" value="{{ old('priority[]') }}"></td>
                            <td><input class="form-control" type="date" name="priority[]" value="{{ old('priority[]') }}"></td>
                            <td><input class="form-control" type="date" name="priority[]" value="{{ old('priority[]') }}"></td>

                        </tr>
                    </tbody>
                    <td></td>
                    <td></td>
                    <td><button type="button" name="add" id="priochem"
                        class="btn btn-outline-primary">+</button></td>

                    <!-- PICCS -->
                    <tbody id="piccs">
                        <tr>
                            <td></td>
                            <td>PICCS</td>
                            <td><input class="form-control" type="text" name="piccs[]" value="{{ old('piccs[]') }}"></td>
                            <td><input class="form-control" type="date" name="piccs[]" value="{{ old('piccs[]') }}"></td>
                            <td><input class="form-control" type="date" name="piccs[]" value="{{ old('piccs[]') }}"></td>

                        </tr>
                    </tbody>
                    <td></td>
                    <td></td>
                    <td><button type="button" name="add" id="pccs"
                        class="btn btn-outline-primary">+</button></td>

                    <!-- PMPIN -->
                    <tbody id="pmpin">
                        <tr>
                            <td></td>
                            <td>PMPIN</td>
                            <td><input class="form-control" type="text" name="pmpin[]" value="{{ old('pmpin[]') }}"></td>
                            <td><input class="form-control" type="date" name="pmpin[]" value="{{ old('pmpin[]') }}"></td>
                            <td><input class="form-control" type="date" name="pmpin[]" value="{{ old('pmpin[]') }}"></td>

                        </tr>
                    </tbody>
                    <td></td>
                    <td></td>
                    <td><button type="button" name="add" id="pin"
                        class="btn btn-outline-primary">+</button></td>

                    <!-- ACno2 -->
                    <tbody>
                        <tr>
                            <td>RA 8749</td>
                            <td>A/C no.</td>
                            <td><input class="form-control" type="text" name="ACNOPermit" value="{{ old('ACNOPermit') }}"></td>
                            <td><input class="form-control" type="date" name="ACNOIssued" value="{{ old('ACNOIssued') }}"></td>
                            <td><input class="form-control" type="date" name="ACNOExpired" value="{{ old('ACNOExpired') }}"></td>

                        </tr>
                    </tbody>

                    <!-- PO no -->
                    <tbody id="pono">
                        <tr>
                            <td></td>
                            <td>PO No.</td>
                            <td><input class="form-control" type="text" name="pono[]" value="{{ old('pono[]') }}"></td>
                            <td><input class="form-control" type="date" name="pono[]" value="{{ old('pono[]') }}"></td>
                            <td><input class="form-control" type="date" name="pono[]" value="{{ old('pono[]') }}"></td>

                        </tr>
                    </tbody>
                    <td></td>
                    <td></td>
                    <td><button type="button" name="add" id="ponum"
                        class="btn btn-outline-primary">+</button></td>


                  </table>

                    <!-- Operation -->
                    <table class="table table-borderless table-hover" >
                        <h3 class="mt-3 mx-2 text-success">OPERATION</h3>

                        <thead>

                            <th></th>
                            <th></th>
                            <div class="d-flex justify-content-start" >
                                <th style="text-align: center">Operating hours/day</th>
                                <th style="text-align: center">Operating days/week</th>
                                <th style="text-align: center"># shift/day</th>
                            </div>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Average</td>
                                <td></td>
                                <td><input class="form-control" type="text" name="aveOPhours" value="{{ old('aveOPhours') }}"></td>
                                <td><input class="form-control" type="text" name="aveOPdays" value="{{ old('aveOPdays') }}"></td>
                                <td><input class="form-control" type="text" name="aveOPshift" value="{{ old('aveOPshift') }}"></td>

                            </tr>
                        </tbody>

                        <tbody>
                            <tr>
                                <td>Maximum</td>
                                <td></td>
                                <td><input class="form-control" type="text" name="maxOPhours" value="{{ old('maxOPhours') }}"></td>
                                <td><input class="form-control" type="text" name="maxOPdays" value="{{ old('maxOPdays') }}"></td>
                                <td><input class="form-control" type="text" name="maxOPshift" value="{{ old('maxOPshift') }}"></td>

                            </tr>
                        </tbody>

                    </table>

                    <!-- OPERATION / PRODUCTION / QUALITY-->
                    <table class="table table-borderless table-hover" >
                        <h3 class="mt-3 mx-2 text-success">OPERATION / PRODUCTION / QUALITY</h3>

                            <tbody>
                                <tr>
                                    <td>Average Daily Production Output</td>
                                    <td><input class="form-control" type="text" name="aveProduction" value="{{ old('aveProduction') }}"></td>
                                    <td>Total Output This Quarter</td>
                                    <td><input class="form-control" type="text" name="totalOutput" value="{{ old('totalOutput') }}"></td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr>
                                    <td>Total Consuption This Quarter</td>
                                    <td><input class="form-control" type="text" name="totalConsumption" value="{{ old('totalConsumption') }}"></td>
                                    <td>Total Electric Consumption this Quarter (kwh)</td>
                                    <td><input class="form-control" type="text" name="totalElectric" value="{{ old('totalElectric') }}"></td>

                                </tr>
                            </tbody>

                    </table>


                </div>

                <div class="mx-auto">
                    <p class="text-secondary my-0">Attached water bills and/or electricity bills</p class="text-secondary">
                    <i class="text-secondary">Note: File name should not contain the following characters * ? " : ! @ # ; + ' | $ $ , < > \ / ( ) { } [ ]</i>

                    <input class="form-control my-3" type="file" style="width:300px" multiple>
                </div>
                </div>



                <!-- 13th row -->
                <div class="container">
                    <div class="col mb-3" >
                        <div style="float: right" class="mb-3">
                            <input type="submit" value="Save Page" class="btn btn-lg btn-primary">
                        </div>
                    </div>
                </div>
    </form>



  </div>





</body>
<style>
  h1 {
    text-align: left;
    font-size: 26px;
    color:gray;
  }
  h2 {
    text-align: left;
    font-size: 20px;
    color:gray;
  }
</style>



<!-- Script RA9275 -->
<script type="text/javascript">
    $("#dynamic-ar").click(function () { //button name
        $("#dynamicAddRemove").append(
            '<tr><td></td><td></td><td><input class="form-control" type="text" name="dpno[]" value="{{ old('dpno[]') }}"></td><td><input class="form-control" type ="date" name="dpno[]" value="{{ old('dpno[]') }}"></td><td><input class="form-control" type ="date" name="dpno[]" value="{{ old('dpno[]') }}"></td>'

        ); //table name
    });
</script>

<!-- Script PD-->
<script type="text/javascript">
    $("#ECC").click(function () { //button name
        $("#pd").append(
            '<tr><td></td><td></td><td><input class="form-control" type="text" name="permit[]" " /><td><input class="form-control" type ="date" name="dateIssued[]" /><td><input class="form-control" type ="date" name="dateExpired[]" ></td>'
            ); //table name
    });
</script>

<!-- Script for CCo Registration -->
<script type="text/javascript">
    var i = 0;
    $("#ccoreg").click(function () { //button name
        ++i;
        $("#cco").append(
            '<tr><td></td><td></td><td><input class="form-control" type="text" name="ccoreg[]" " /><td><input class="form-control" type ="date" name="ccoreg[]" /><td><input class="form-control" type ="date" name="ccoreg[]" ></td>'
            ); //table name
    });
</script>

<!-- Scipt for importation clearance no -->
<script type="text/javascript">
    var i = 0;
    $("#imp").click(function () { //button name
        ++i;
        $("#importation").append(
            '<tr><td></td><td></td><td><input class="form-control" type="text" name="import[]" " /><td><input class="form-control" type ="date" name="import[]" /><td><input class="form-control" type ="date" name="import[]" ></td>'
            ); //table name
    });
</script>


<!-- Script for Permit to Transport -->
<script type="text/javascript">
    var i = 0;
    $("#ptt").click(function () { //button name
        ++i;
        $("#permit").append(
            '<tr><td></td><td></td><td><input class="form-control" type="text" name="permit[]" " /><td><input class="form-control" type ="date" name="permit[]" /><td><input class="form-control" type ="date" name="permit[]" ></td>'
        ); //table name
    });
</script>

<!-- Script for Small Quality Importation-->
<script type="text/javascript">
    var i = 0;
    $("#sqi").click(function () { //button name
        ++i;
        $("#smallq").append(
            '<tr><td></td><td></td><td><input class="form-control" type="text" name="smallQuan[]" " /><td><input class="form-control" type ="date" name="smallQuan[]" /><td><input class="form-control" type ="date" name="smallQuan[]" ></td>'
            ); //table name
    });
</script>


<!-- Script for priority chem list -->
<script type="text/javascript">
    var i = 0;
    $("#priochem").click(function () { //button name
        ++i;
        $("#prio").append(
            '<tr><td></td><td></td><td><input class="form-control" type="text" name="priority[]" " /><td><input class="form-control" type ="date" name="priority[]" /><td><input class="form-control" type ="date" name="priority[]" ></td>'
            ); //table name
    });
</script>

<!-- Script PICCS -->
<script type="text/javascript">
    var i = 0;
    $("#pccs").click(function () { //button name
        ++i;
        $("#piccs").append(
            '<tr><td></td><td></td><td><input class="form-control" type="text" name="piccs[]" " /><td><input class="form-control" type ="date" name="piccs[]" /><td><input class="form-control" type ="date" name="piccs[]" ></td>'
            ); //table name
    });
</script>

<!-- Script for PMPIN -->
<script type="text/javascript">
    $("#pin").click(function () { //button name
        $("#pmpin").append(
            '<tr><td></td><td></td><td><input class="form-control" type="text" name="pmpin[]" " /><td><input class="form-control" type ="date" name="pmpin[]" /><td><input class="form-control" type ="date" name="pmpin[]" ></td>'
            ); //table name
    });
</script>

<!-- Script for PO no -->
<script type="text/javascript">
    var i = 0;
    $("#ponum").click(function () { //button name
        ++i;
        $("#pono").append(
            '<tr><td></td><td></td><td><input class="form-control" type="text" name="pono[]" " /><td><input class="form-control" type ="date" name="pono[]" /><td><input class="form-control" type ="date" name="pono[]" ></td>'

        ); //table name
    });
</script>



@endsection
</html>
