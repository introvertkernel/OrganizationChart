<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "EmpData");
$query = "
 SELECT * FROM Employee
";
$result = mysqli_query($connect, $query);
//$output = array();
//
$json = array();

// while($row=mysqli_fetch_row($result)) {
//     $json[] = $row;
//     echo $json;
// }


//
while($row = mysqli_fetch_array($result))
{
 $sub_data["id"] = $row["emp_id"];
 $sub_data["designation"] = $row["emp_designation"];
 $sub_data["text"] = $row["emp_name"];
 $sub_data["r_id"] = $row["report_man_id"];
 $data[] = $sub_data;
}
foreach($data as $key => &$value)
{
 $output[$value["id"]] = &$value;
}
foreach($data as $key => &$value)
{
 if($value["r_id"] && isset($output[$value["r_id"]]))
 {
  $output[$value["r_id"]]["nodes"][] = &$value;
 }
}
foreach($data as $key => &$value)
{
 if($value["r_id"] && isset($output[$value["r_id"]]))
 {
  unset($data[$key]);
 }
}
echo json_encode($data);
/*echo '<pre>';
print_r($data);
echo '</pre>';*/

?>
