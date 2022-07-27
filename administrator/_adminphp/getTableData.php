<?php

include('../../koneksi.php');


if(@$_GET['view']=='pakaian'){
	$result = $conn->query("SELECT * FROM tbl_pakaian");

	while($row=$result->fetch_assoc()){
	$data[]=$row;
}
echo json_encode($data);
}

if(@$_GET['view']=='bangunan'){
	$result = $conn->query("SELECT * FROM tbl_bangunan");

	while($row=$result->fetch_assoc()){
	$data[]=$row;
}
echo json_encode($data);
}

if(@$_GET['view']=='tarian'){
	$result = $conn->query("SELECT * FROM tbl_tarian");

	while($row=$result->fetch_assoc()){
	$data[]=$row;
}
echo json_encode($data);
}

if(@$_GET['view']=='makanan'){
	$result = $conn->query("SELECT * FROM tbl_makanan");

	while($row=$result->fetch_assoc()){
	$data[]=$row;
}
echo json_encode($data);
}

if(@$_GET['view']=='tradisi'){
	$result = $conn->query("SELECT * FROM tbl_tradisi");

	while($row=$result->fetch_assoc()){
	$data[]=$row;
}
echo json_encode($data);
}

if(@$_GET['view']=='berita'){
	$result = $conn->query("SELECT * FROM tbl_berita");

	while($row=$result->fetch_assoc()){
	$data[]=$row;
}
echo json_encode($data);
}

if(@$_GET['view']=='ensiklopedia'){
	$result = $conn->query("SELECT * FROM tbl_ensiklopedia");

	while($row=$result->fetch_assoc()){
	$data[]=$row;
}
echo json_encode($data);
}

if(@$_GET['view']=='kontak'){
	$result = $conn->query("SELECT * FROM tbl_kontak");

	while($row=$result->fetch_assoc()){
	$data[]=$row;
}
echo json_encode($data);
}

if(@$_GET['view']=='useradmin'){
	$result = $conn->query("SELECT * FROM tbl_user");

	while($row=$result->fetch_assoc()){
	$data[]=$row;
}
echo json_encode($data);
}

if(@$_GET['view']=='keyadmin'){
	$result = $conn->query("SELECT * FROM tbl_admin_key");

	while($row=$result->fetch_assoc()){
	$data[]=$row;
}
echo json_encode($data);
}
					



?>	

