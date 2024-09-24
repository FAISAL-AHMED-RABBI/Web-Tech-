<?php
session_start();
require_once('../Models/alldb.php');
if(isset($_GET['delete'])){
  $id=$_GET['delete'];
  $status=delete($id);
  if($status)
  {
    header("location:../Views/home.php");
    $_SESSION['mess']="Deleted";
  }
}
  
 if(isset($_GET['edit'])){
  $id1=$_GET['edit'];
 header("location:../Views/edit.php?id={$id1}");
 }
 if(isset($_GET['update']))
 {
  $id=$_GET['id'];
  $name=$_GET['name'];
  $email=$_GET['email'];
  $pass=$_GET['pass'];
  $res=update($id,$name,$email,$pass);
  if($res){
    header("location:../Views/home.php");
  }

  }
 
?>