<?php
 function fetch_data() {
     $output = '';
     $conn   = mysqli_connect("localhost", "root", "", "myapp");
     $sql    = "SELECT * FROM users ORDER BY ID ASC";
     $result = mysqli_query($conn, $sql);
     while ($row = mysqli_fetch_array($result)) {
         $output .= '<tr>  
      <td>' . $row["ID"] . '</td>  
      <td>' . $row["Name"] . '</td>  
      <td>' . $row["Email"] . '</td>  
      <td>' . $row["Mobile"] . '</td>  
                     </tr>  
                          ';
     }
     return $output;
 }
 
 if (isset($_POST["generate_pdf"])) {
     require_once('tcpdf/tcpdf.php');
     $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
     $obj_pdf->SetCreator(PDF_CREATOR);
     $obj_pdf->SetTitle("Student Details Sheet");
     $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
     $obj_pdf->setHeaderFont(Array(
         PDF_FONT_NAME_MAIN,
         '',
         PDF_FONT_SIZE_MAIN
     ));
     $obj_pdf->setFooterFont(Array(
         PDF_FONT_NAME_DATA,
         '',
         PDF_FONT_SIZE_DATA
     ));
     $obj_pdf->SetDefaultMonospacedFont('helvetica');
     $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
     $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
     $obj_pdf->setPrintHeader(false);
     $obj_pdf->setPrintFooter(false);
     $obj_pdf->SetAutoPageBreak(TRUE, 10);
     $obj_pdf->SetFont('helvetica', '', 11);
     $obj_pdf->AddPage();
     $content = '';
     $content .= '  
      <h4 align="center">Registered User List</h4><br /> 
      <table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th width="10%">ID</th>  
                <th width="30%">Name</th>  
                <th width="40%">Email</th>  
                <th width="20%">Mobile</th>  
           </tr>  
      ';
     $content .= fetch_data();
     $content .= '</table>';
     $obj_pdf->writeHTML($content);
     $obj_pdf->Output('Student Details.pdf', 'I');
    
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Display records</title>
        <style>
            table,td,th{
                border: 1px solid white;
            }
            td{
                padding: 5px;
                text-align:center;
                color:white;
            }
            th{
                text-align:center;
                color:white;
            }

            
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="http://localhost/myapp/assets/css/main.css">
        <link rel="stylesheet" href="http://localhost/myapp/assets/css/bootstrap.css">
        <script src="http://localhost/myapp/assets/js/jquery-3.5.1.js"></script>
        <script src="http://localhost/myapp/assets/js/main.js"></script>
        <script src="http://localhost/myapp/assets/js/bootstrap.js"></script>
    </head>
    <body>

    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="#">Nature Lovers</a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse"
            data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/myapp/index.php/About/aboutus">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/myapp/index.php/Registration/displaydata">Manage Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/myapp/index.php/Registration/savedata">Join With Us</a>
                        </li>
                        </li>
                        <li class="nav-item">
                        <form method="post"   style ="padding : 0px ; border : none ;" >  
                            <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />  
                        </form> 
                        </li>
                    </ul>
                </div>
    </nav>    
            
        
        
    
        <header class="page-header header container-fluid">

<div class="overlay">
<table width="100%">
            <tr>
                <th style="background-color:#000000">ID</th>
                <th style="background-color:#000000">Name</th>
                <th style="background-color:#000000">Email Address</th>
                <th style="background-color:#000000">Phone Number</th>
                <th style="background-color:#FF0000">Delete</th>
                <th style="background-color:#00FF00">Update</th>
                <th style="background-color:#00FFFF">Generate</th>
                
            </tr>
                <?php
                    foreach ($data as $row){
                        echo "<tr>";
                        echo "<td>".$row->ID."</td>";
                        echo "<td>".$row->Name."</td>";
                        echo "<td>".$row->Email."</td>";
                        echo "<td>".$row->Mobile."</td>";
                        echo "<td><a href='deletedata?ID=".$row->ID."'>Delete</a></td>";
                        echo "<td><a href='updatedata?ID=".$row->ID."'>Update</a></td>";
                        echo "<td><a href='generate?ID=".$row->ID."'>Generate</a></td>";
                        echo "</tr>";
                    } 
                ?>
            <tr>

            </tr>
    </table>
    
    

</div>

</header>

      
    </body>
</html>
