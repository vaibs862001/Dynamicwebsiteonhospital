<?php
include("includes/application_top.php");
if(empty($_SESSION['admin_id'])){
    header('Location:admin_login.php');
  }
  // error_reporting(E_ALL);
include_once("classess/aboutmanager.php");
$aboutclass = new aboutclass();
$aboutmanager = new aboutmanager();

 if(isset($_POST['path']) && $_POST['edit_id']!='')
{
	$edit_id=$_POST['edit_id'];
	$aboutclass->setedit_id($edit_id);
	$path=$_POST['path'];
	$path_img=$aboutmanager->view_about($aboutclass);
	 $serch_img=explode(',',$path_img[0]['about_img']);
	//print_r($serch_img);
	 if(in_array($_POST['path'],$serch_img))
	 {
		 //print_r($serch_img);
		   $img_key=array_search($_POST['path'],$serch_img);
		 unset($serch_img[$img_key]);
		     $revise_img=implode(',',$serch_img);
		 
      }else{ echo "Image not found!";}
	  
} 
	//print_r($path_img);

	 $about_img=$_POST['path'];
if($about_img!='')
{
global $db;
//die();
    $update="update  about_master set about_img='".$revise_img."' where about_id='".$edit_id."'";
 //die();
$ret=$db->update_data($update);
unlink("uploads/about/".$about_img);
echo "1|".count($serch_img);
}else{
	echo "2|";
	}


?>