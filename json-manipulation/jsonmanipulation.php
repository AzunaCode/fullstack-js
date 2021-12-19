<!-- ambil data json -->
<?php
$getdata = file_get_contents('data.json');
$data = json_decode($getdata, true);

//Find items in the Meeting Room. 
echo "1. Find items in the Meeting Room.";
echo "<br>";

$dataku = array();
for ($i = 0; $i < count($data); $i++) {
    if ($data[$i]["placement"]["name"] == "Meeting Room") {
        $dataku[] = $data[$i];
    }
}

echo json_encode($dataku) . "<br><br/>";



//Find all electronic devices.
echo "2. Find all electronic devices.";
echo "<br>";
$dataku2 = array();
for ($i = 0; $i < count($data); $i++) {
    if ($data[$i]["type"] == "electronic") {
        $dataku2[] = $data[$i];
    }
}
echo json_encode($dataku2) . "<br><br/>";

//Find all the furniture.
echo "3. Find all the furniture.";
echo "<br>";
$dataku3 = array();
for ($i = 0; $i < count($data); $i++) {
    if ($data[$i]["type"] == "furniture") {
        $dataku3[] = $data[$i];
    }
}
echo json_encode($dataku3) . "<br><br/>";

//Find all items were purchased on 16 Januari 2020.
echo "4. Find all items were purchased on 16 Januari 2020.";
echo "<br>";
$dataku4 = array();
for ($i = 0; $i < count($data); $i++) {
    if ($data[$i]["purchased_at"] == "16 Januari 2020") {
        $dataku4[] = $data[$i];
    }
}
echo json_encode($dataku4) . "<br><br/>";

//Find all items with brown color
echo "5. Find all items with brown color";
echo "<br>";
$dataku5 = array();
for ($i = 0; $i < count($data); $i++) {
    if ($data[$i]["tags"] == "brown") {
        $dataku5[] = $data[$i];
    }
}
echo json_encode($dataku5) . "<br><br/>";
