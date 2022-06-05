<!DOCTYPE html>
<html lang="en">
<head>


    <title>Environmental Management Bureau Online Services - SMR - General information</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

        <div class="container">
        <style> 
            h1 {
            
                text-align: center;
            
            }
            p {
                
                text-align: center;
            }
            
            
            h2{
            
                text-align:left;
            
            }



        </style>


    <h1> Department of Environment and Natural Resources Enviromental Management Bureau</h1>

  <select name= "date" id ="date"> 
      <option>2000</option>
      <option>2001</option>  
      <option>2002</option>  
</select>
<select name= "quarter" id ="quarter"> 
      <option>-Select-</option>
      <option>1st Quarter</option>
      <option>2nd Quarter</option>  
      <option>3rd Quarter</option>  
</select>
<p> QUARTERLY SELF-MONITORING REPORT</p>
  <table class="table">
    
      <!-- Message input -->
  <div class="container pt-4">
    <textarea class="form-control" id="gic"  cols="40" rows="10" style="overflow:scroll, overflow-y:hidden" ></textarea>
    
  </div>


<h2> DENR PERMITS/LICENSE/CLEARANCES<H2>
<thead>
    <tr>
        <th>Environmental Laws</th>
        <th></th>
        <th>Permits</th>
        <th>Data issued</th>
        <th>Expiry Data</th>
    </tr>
</thead>

<tbody >
  <tr>
    <td>RA 6969</td>
    <td>A/C</td>
    <td><input type="text" name="text1"></td>
    <td><input type="text" name="text2"></td>
    <td><input type="text" name="text3"></td>
</tr>    
</tbody>

<tbody id= dynamicAddRemove>
    <tr>
    <td></td>
    <td>DP no.</td>
    <td><input type="text" name="text4[]"></td>
    <td><input type="text" name="text5[]"></td>
    <td><input type="text" name="text6[]"></td>
    <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">+</button></td>
</tr>    
</tbody>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () { //button name
        ++i;
        $("#dynamicAddRemove").append('<tr><td></td><td></td><td><input type="text" name="text4[' + i +
         ']" " /><td><input type ="text" name="text5['+ i +']" /><td><input type ="text" name="text6['+ i +']" ></td>' 
            
            ); //table name
    });
</script>

<tbody id =pd>
    <tr>
    <td>PD 1586</td>
    <td>ECC/CNC no.</td>
    <td><input type="text" name="text7[]"></td>
    <td><input type="text" name="text8[]"></td>
    <td><input type="text" name="text9[]"></td>
    <td><button type="button" name="add" id="ECC" class="btn btn-outline-primary">+</button></td>
</tr>    
</tbody>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#ECC").click(function () { //button name
        ++i;
        $("#pd").append('<tr><td></td><td></td><td><input type="text" name="text7[' + i +
         ']" " /><td><input type ="text" name="text8['+ i +']" /><td><input type ="text" name="text9['+ i +']" ></td>' 
            
            ); //table name
    });
</script>


<tbody id="reg">
    <tr>
    <td>RA 6969</td>
    <td>DENR Registry ID</td>
    <td><input type="text" name="text10[]"></td>
    <td><input type="text" name="text11[]"></td>
    <td><input type="text" name="text12[]"></td>
    <td><button type="button" name="add" id="registry" class="btn btn-outline-primary">+</button></td>
</tr>    
</tbody>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#registry").click(function () { //button name
        ++i;
        $("#reg").append('<tr><td></td><td></td><td><input type="text" name="text10[' + i +
         ']" " /><td><input type ="text" name="text11['+ i +']" /><td><input type ="text" name="text12['+ i +']" ></td>' 
            
            ); //table name
    });
</script>

<tbody id="trans">
    <tr>
    <td></td>
    <td>Transporter Registration</td>
    <td><input type="text" name="text13[]"></td>
    <td><input type="text" name="text14[]"></td>
    <td><input type="text" name="text15[]"></td>
    <td><button type="button" name="add" id="transporter" class="btn btn-outline-primary">+</button></td>
</tr>    
</tbody>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#transporter").click(function () { //button name
        ++i;
        $("#trans").append('<tr><td></td><td></td><td><input type="text" name="text13[' + i +
         ']" " /><td><input type ="text" name="text14['+ i +']" /><td><input type ="text" name="text15['+ i +']" ></td>' 
            
            ); //table name
    });

</script>

<tbody id="tsd">
    <tr>
    <td></td>
    <td>TSD Registration</td>
    <td><input type="text" name="text13[]"></td>
    <td><input type="text" name="text14[]"></td>
    <td><input type="text" name="text15[]"></td>
    <td><button type="button" name="add" id="tsdreg" class="btn btn-outline-primary">+</button></td>
</tr>    
</tbody>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#tsdreg").click(function () { //button name
        ++i;
        $("#tsd").append('<tr><td></td><td></td><td><input type="text" name="text13[' + i +
         ']" " /><td><input type ="text" name="text14['+ i +']" /><td><input type ="text" name="text15['+ i +']" ></td>' 
            
            ); //table name
    });
    </script>

<tbody id ="cco">
    <tr>
    <td></td>
    <td>CCO Registration</td>
    <td><input type="text" name="text16[]"></td>
    <td><input type="text" name="text17[]"></td>
    <td><input type="text" name="text18[]"></td>
    <td><button type="button" name="add" id="ccoreg" class="btn btn-outline-primary">+</button></td>
</tr>    
</tbody>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#ccoreg").click(function () { //button name
        ++i;
        $("#cco").append('<tr><td></td><td></td><td><input type="text" name="text16[' + i +
         ']" " /><td><input type ="text" name="text17['+ i +']" /><td><input type ="text" name="text18['+ i +']" ></td>' 
            
            ); //table name
    });
</script>


<tbody id="importation">
    <tr>
    <td></td>
    <td>Importation Clearance No.</td>
    <td><input type="text" name="text19[]"></td>
    <td><input type="text" name="text20[]"></td>
    <td><input type="text" name="text21[]"></td>
    <td><button type="button" name="add" id="imp" class="btn btn-outline-primary">+</button></td>
</tr>    
</tbody>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#imp").click(function () { //button name
        ++i;
        $("#importation").append('<tr><td></td><td></td><td><input type="text" name="text19[' + i +
         ']" " /><td><input type ="text" name="text20['+ i +']" /><td><input type ="text" name="text21['+ i +']" ></td>' 
            
            ); //table name
    });
</script>


<tbody id ="permit">
    <tr>
    <td></td>
    <td>Permit to Transport</td>
    <td><input type="text" name="text22[]"></td>
    <td><input type="text" name="text23[]"></td>
    <td><input type="text" name="text24[]"></td>
    <td><button type="button" name="add" id="ptt" class="btn btn-outline-primary">+</button></td>
</tr>    
</tbody>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#ptt").click(function () { //button name
        ++i;
        $("#permit").append('<tr><td></td><td></td><td><input type="text" name="text22[' + i +
         ']" " /><td><input type ="text" name="text23['+ i +']" /><td><input type ="text" name="text24['+ i +']" ></td>' 
            
            ); //table name
    });
</script>


<tbody id ="smallq">
    <tr>
    <td></td>
    <td> Small Quantity Importation</td>
    <td><input type="text" name="text25[]"></td>
    <td><input type="text" name="text26[]"></td>
    <td><input type="text" name="text27[]"></td>
    <td><button type="button" name="add" id="sqi" class="btn btn-outline-primary">+</button></td>
</tr>    
</tbody>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#sqi").click(function () { //button name
        ++i;
        $("#smallq").append('<tr><td></td><td></td><td><input type="text" name="text19[' + i +
         ']" " /><td><input type ="text" name="text20['+ i +']" /><td><input type ="text" name="text21['+ i +']" ></td>' 
            
            ); //table name
    });
</script>


<tbody id="prio">
    <tr>
    <td></td>
    <td>Priority Chemical List</td>
    <td><input type="text" name="text28[]"></td>
    <td><input type="text" name="text29[]"></td>
    <td><input type="text" name="text30[]"></td>
    <td><button type="button" name="add" id="priochem" class="btn btn-outline-primary">+</button></td>
</tr>    
</tbody>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#priochem").click(function () { //button name
        ++i;
        $("#prio").append('<tr><td></td><td></td><td><input type="text" name="text28[' + i +
         ']" " /><td><input type ="text" name="text29['+ i +']" /><td><input type ="text" name="text30['+ i +']" ></td>' 
            
            ); //table name
    });
</script>

<tbody id="piccs">
    <tr>
    <td></td>
    <td>PICCS</td>
    <td><input type="text" name="text31[]"></td>
    <td><input type="text" name="text32[]"></td>
    <td><input type="text" name="text33[]"></td>
    <td><button type="button" name="add" id="pccs" class="btn btn-outline-primary">+</button></td>
</tr>    
</tbody>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#pccs").click(function () { //button name
        ++i;
        $("#piccs").append('<tr><td></td><td></td><td><input type="text" name="text31[' + i +
         ']" " /><td><input type ="text" name="text32['+ i +']" /><td><input type ="text" name="text33['+ i +']" ></td>' 
            
            ); //table name
    });
</script>

<tbody id ="pmpin">
    <tr>
    <td></td>
    <td>PMPIN</td>
    <td><input type="text" name="text34[]"></td>
    <td><input type="text" name="text35[]"></td>
    <td><input type="text" name="text36[]"></td>
    <td><button type="button" name="add" id="pin" class="btn btn-outline-primary">+</button></td>
</tr>    
</tbody>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#pin").click(function () { //button name
        ++i;
        $("#pmpin").append('<tr><td></td><td></td><td><input type="text" name="text34[' + i +
         ']" " /><td><input type ="text" name="text35['+ i +']" /><td><input type ="text" name="text36['+ i +']" ></td>' 
            
            ); //table name
    });
</script>


<tbody>
    <tr>
    <td>RA 8749</td>
    <td>A/C no.</td>
    <td><input type="text" name="text10[]"></td>
    <td><input type="text" name="text11[]"></td>
    <td><input type="text" name="text12[]"></td>
    
</tr>    
</tbody>



<thead>
    <tr>
        <th><h2>Operation</h2></th>
        <th></th>
</tr>
</thead>



<thead>
    
    <th></th>
    <th></th>
    <div class="d-flex justify-content-start">
    <th>Operating hours/day</th>
    <th>Operating days/week</th>
    <th># shift/day</th>
    </div>
</thead>




<tbody>
    <tr>
    <td>Average</td>
    <th></th>
    Form::text('name', $value);
    <td><input type="text" name="text10[]" value="10"></td>
    <td><input type="text" name="text11[]" value="5"></td>
    <td><input type="text" name="text12[]" value="1"></td>
    
</tr>    
</tbody>

<tbody>
    <tr>
    <td>Maximum</td>
    <th></th>
    <td><input type="text" name="text10[]"></td>
    <td><input type="text" name="text11[]"></td>
    <td><input type="text" name="text12[]"></td>
    
</tr>    
</tbody>

<th>
</div> <!-- 13th row -->
<div class="col mx-5">
    <input type= "submit" value="Save" class="btn btn-success" >
    </div>
</th>






</html>