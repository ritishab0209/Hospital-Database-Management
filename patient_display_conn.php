<html>
    <head>
        <title>Patient</title>
        <style>
            table
            {
                width: 60%; margin: 1em auto;
                border-collapse: collapse;
            }

            caption
            {
                font-size: 1.8em; background-color: #448899;
                color: FFF;
            }

            th 
            {
                font-size: 1em; background-color: #448888;
                color: EEE;
            }

            td 
            {
                font-size: .9em;
                color: EEE;
            }


            td, th
            {
                border: 1px solid #222;
                padding: .3em
            }

            tr:nth-child(odd)
            {
                background-color: #448866;
            }

            tr:nth-child(even)
            {
                background-color: #449988;
            }

        </style>
    </head>

    <body>
            <tr>
                <th width="17%">PATIENT ID</th>
                <th width="22%">PATIENT NAME</th>
                <th width="22%">DOCTOR NAME</th>
                <th width="17%">DEPARTMENT</th>
                <th width="12%">FEES</th>
                
            </tr>
    </body>


<?php

      include("database.php");
      error_reporting(0);

      $query = "select * from patients";

      $data = mysqli_query($mysqli, $query);

      $total_rows = mysqli_num_rows($data);
      //echo "$total_rows";

      //$result = mysqli_fetch_assoc($data);

      echo $result['patient_id']." ".$result['patient_name']." ".$result['doctor_name']." ".$result['department']." ".$result['fees'];


      if($total_rows != 0)
      {
           //echo "Table has records";
           //$result = mysqli_fetch_assoc($data);
           while($result = mysqli_fetch_assoc($data))
           {
               echo "
                      <tr>
                          <td>".$result['patient_id']."</td>
                          <td>".$result['patient_name']."</td>
                          <td>".$result['doctor_name']."</td>
                          <td>".$result['department']."</td>
                          <td>".$result['fees']."</td>
                     </tr>";
           }
       }
       else
       {
           echo "Data not found";
       }

?>
</table>
</html>