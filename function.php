<?php

define('DB_Name','C:\\xampp\\htdocs\\CRUD\\database\\database.txt');

function seed(){
    $offices = array(
        array(
            "id" => "1",
            "zone_name" => "Dhaka [North]",
            "pbs_name" => "Dhaka PBS-1",
            "ALP_Code" => "DH-1",
            "NumericCode" => "01",
            "Type" => "PBS HQ",
            "Mobile_No" => "01769-403025",
            "Telephone" => "02-021563",
            "Email" => "monir.ges@gmail.com",
            "CreateDate" => "2023-10-25",
            "UpdateDate" => "2023-10-25",
            "div_name" => "Dhaka",
            "dist_name" => "Dhaka",
            "upz_name" => "Savar",
            "union_name" => "Genda",
            "address" => "Palashbari",
            "remarks" => "",
            "latitude" => "23.264192",
            "longitude" => "89.15599",
        ),array(
            "id" => "2",
            "zone_name" => "Dhaka [South]",
            "pbs_name" => "Dhaka PBS-4",
            "ALP_Code" => "DH-4",
            "NumericCode" => "04",
            "Type" => "PBS HQ",
            "Mobile_No" => "01769-403025",
            "Telephone" => "02-021563",
            "Email" => "monir.ges@gmail.com",
            "CreateDate" => "2023-10-25",
            "UpdateDate" => "2023-10-25",
            "div_name" => "Dhaka",
            "dist_name" => "Dhaka",
            "upz_name" => "Keraniganj",
            "union_name" => "Kadamtali",
            "address" => "Zinzira",
            "remarks" => "",
            "latitude" => "23.264192",
            "longitude" => "89.15599",
        ),
    );
    $serialized = serialize($offices);
    file_put_contents(DB_Name, $serialized, LOCK_EX);
};

function generateReport(){
    $serializedData = file_get_contents(DB_Name);
    $offices = unserialize($serializedData);
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>SE Zone</th>
            <th>PBS Name</th>
            <th>PBS Code</th>
            <th>Office Type</th>
            <th>Address</th>
            <th>Mobile No</th>
            <th>Telephone No</th>
            <th>Email</th>
            <th>Latitude (Y)</th>
            <th>Longitude (X)</th>
            <th>Survey Date</th>
            <th>Remarks</th>
            <th>Action</th>
        </tr>
        <?php
        foreach($offices as $office){
            ?>
            <tr>
                <td><?php printf('%s', $office["id"]); ?> </td>
                <td><?php printf('%s', $office["zone_name"]); ?> </td>
                <td><?php printf("%s", $office["pbs_name"]); ?> </td>
                <td><?php printf("%s", $office["ALP_Code"]); ?> </td>
                <td><?php printf("%s", $office["Type"]); ?> </td>
                <td><?php printf("%s", $office["address"]); ?> </td>
                <td><?php printf("%s", $office["Mobile_No"]); ?> </td>
                <td><?php printf("%s", $office["Telephone"]); ?> </td>
                <td><?php printf("%s", $office["Email"]); ?> </td>
                <td><?php printf("%s", $office["latitude"]); ?> </td>
                <td><?php printf("%s", $office["longitude"]); ?> </td>
                <td><?php printf("%s", $office["CreateDate"]); ?> </td>
                <td><?php printf("%s", $office["remarks"]); ?> </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
}
