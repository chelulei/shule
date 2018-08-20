<?php
include 'head.php';
include "functions.php";
include 'connect.php';
getUser();
if (isset($_GET['view'])) {

    $id=$_GET['view'];

    $sql="SELECT * FROM leaving l JOIN students s ON(l.Student = s.adm_No) WHERE leavingid = '$id'";
    $query=mysqli_query($con, $sql);
    $row=mysqli_fetch_array($query);

    $id=$row['leavingid'];
    $Activities=$row['activities'];
    $Remarks=$row['remarks'];
    $date=$row['lev_date'];

}
?>
    <div id="right-panel" class="right-panel">
          <div class="content">
            <div class="row">
                <div class="col-md-12">
                   <div class="widget">
                        
           
                <div class="widget">
                            <div class="col-md-12">
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                  <div class="right print">
                    <button onClick="window.print();
                     return false" class="btn btn-primary" type="button"><span class="fa fa-print"></span> Print </button>
                      <a href="page-leavingcert.php" class="btn btn-primary"><i class="fa fa-list">
                          </i> All Leaving Certificate</a> 
                    </div>
                    <br>
                    <br>
                  </div>
                  <div class="col-md-4"></div>
                  </div>
                    <div class="clear"></div>
                     <div class="col-md-2"></div>
                      <div class="slip col-md-8">
                        <div class="slip-content">
                        <div class="row">
                           <div class="col-md-12 view-title" class="col-xs-1" align="center" >
                               <span class="center">
                                    <h1><img src="https://demo.smartshule.com/uploads/files/emblem.jpg" width="100" height="100" />
                                          <h5> Republic of Kenya
                                          <br>
                                          <span class="border">________________________</span>
                                            <br>
                                                    Ministry of Education, Science and technology
                                            <br>
                                            <span class="border">________________________</span>
                                          </h5>
                                      </h1></span>
                                    <h3>School Leaving Certificate</h3>     
                            </div>

                            <br>
                            <br>
                 <div class="col-md-12" class="col-xs-1" align="center">
                   <address class="uppercase"  style="margin-right:18px;">
                   This is to certify that <abbr title="Name"><b><?php echo ucwords($row['Surname'].' '.$row['Firstname'].' '.$row['Middlename'] );?></b> </abbr>
                     ADM NO. <abbr  title="ADM" > OHS0342016              </abbr>
                  <br>
                  Date of Birth  <abbr  title="DOB" ></abbr>
                  Entered <abbr  title="SCH">Lions Heart Group</abbr> school and was enrolled on   <abbr  title="ADM Date"><?php echo formatDate( $row['date']);?></abbr>
                  In  <abbr title="Class" >Form Two</abbr> 
                  And Left on   <abbr title="LEFT" > <?php echo formatDate($date);?></abbr> From   <abbr title="FROM" > Class 8</abbr> Having satisfactorily completed the approved course for  <abbr class="" title="" >Class 8</abbr>
                  <br>
                  Headteacher's report on pupil's ability,Industry and conduct: <br> <abbr title="Remark" >good</abbr>
                  <br>
                  Pupil's Participation in co-curricular activities:<br> <abbr title="activities" >music</abbr>
                      </address> 
               </div>
               

               <div class="col-md-12" class="col-xs-1" align="center">
               <table class="table">
                 
                  <tr>
                    <td>
                       <strong style="border-top:1px solid #000"> Pupil's Signature </strong>
                    </td>
                    <td>
                       <strong class="right" style="border-top:1px solid #000"> Headteacher's Signature </strong>
                    </td>
                  </tr>
               </table>
               <table class="table" class="col-md-12" class="col-xs-1" align="center" ><tr>
                    <td>
                      14 Jul 201807<br>
               <strong style="border-top:1px solid #000"> Date of Issue  </strong>
                    </td>
                    <td >
                       <strong class="right" style="border-top:1px solid #000;"  > Official Stamp </strong>
                    </td>
                  </tr>
               </table>

             </div>
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-6">
                  <br>
                   
              </div>

              <div class="col-md-6">
                <br>
               
              </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-6"> <br>
                
              </div>

              <div class="col-md-6">
                <br>
                <br>
                
              </div>
            </div>
</div>
      
    
        </div>
    <div class="center" style="border-top:1px solid #ccc">    
   <span class="center uppercase" style="font-size:0.8em !important;text-align:center !important;">
   This Certificate was issued without any erasure or alteration whatsoever
   </span>
   </div>    
          
                        </div>
            
            
             
      </div>
      </div>
     <div class="col-md-2"></div>    
    </div>
                


<style>
    @media print{

        .navigation{
            display:none;
        }
        .alert{
            display:none;
        }
        .alert-success{
            display:none;
        }

        .img{
            align:center !important;
        } 
        .print{
            display:none !important;
        } 
    .col-md-4{
            display:none !important;
        }
        .bank{
            float:right;
        }
        .view-title h1{border:none !important; text-align:center }
        .view-title h3{border:none !important; }

        .split{

            float:left;
        }
    .right{
float:right;

}
        .header{display:none}
        .invoice { 
            width:100%;
            margin: auto !important;
            padding: 0px !important;
        }
        .invoice table{padding-left: 0; margin-left: 0; }

        .smf .content {
            margin-left: 0px;
        }
        .content {
            margin-left: 0px;
            padding: 0px;
        }
    .slip{
    margin-top:0;}
    }
</style>     

                    </div>
                </div>
            </div>
        </div>


