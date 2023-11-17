<?php 
  include "header.php";
  include "sidebar.php";
  if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
        case 'quanlyuse':
            include "admin/quanlyuse.php";
            break;
        case 'hethong':
            include "admin/hethong.php";
            break;
        case 'qlthanhtoan':
            include "admin/qlthanhtoan.php";
            break;
        case 'qlmarketing':
            include "admin/qlmarketing.php";
            break;
        case 'qlbaiviet':
            include "admin/qlbaiviet.php";
                require
            break;
       

        case 'sale':
            include "admin/sale.php";
            break;
      
       
        case 'toanbo':
            include "admin/danhmuc/toanbo.php";
            break;
        case 'ao':
            include "admin/danhmuc/ao.php";
            break;
        case 'quan':
            include "admin/danhmuc/quan.php";
            break;
       
    }
  }else{
    include "home.php";
  }
  
  include "footer.php";
?>



  