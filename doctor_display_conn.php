<html>
    <head>
        <title>Doctor</title>
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
                <th width="17%">DOCTOR ID</th>
                <th width="22%">DOCTOR NAME</th>
                <th width="22%">SPECIALIZATION</th>
                <th width="17%">AVAILABLE</th>
                <th width="12%">SALARY</th>
                <th width="24%">EXPERIENCE</th>
            </tr>
    </body>


<?php

      include("database.php");
      error_reporting(0);

      $query = "select * from doctors";

      $data = mysqli_query($mysqli, $query);

      $total_rows = mysqli_num_rows($data);
      //echo "$total_rows";

      //$result = mysqli_fetch_assoc($data);

      echo $result['doctor_id']." ".$result['doctor_name']." ".$result['specialization']." ".$result['available']." ".$result['salary']." ".$result['experience'];


      if($total_rows != 0)
      {
           //echo "Table has records";
           //$result = mysqli_fetch_assoc($data);
           while($result = mysqli_fetch_assoc($data))
           {
               echo "
                      <tr>
                          <td>".$result['doctor_id']."</td>
                          <td>".$result['doctor_name']."</td>
                          <td>".$result['specialization']."</td>
                          <td>".$result['available']."</td>
                          <td>".$result['salary']."</td>
                          <td>".$result['experience']."</td>
                     </tr>";
           }
       }
       

?>
</table>
</html>