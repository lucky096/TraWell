 <?php
 $file = $_FILES['image']['tmp_name'];
    if(!isset($file))
    {
      echo 'Please select an Image';
    }
    else 
    {
       $image_check = getimagesize($_FILES['image']['tmp_name']);
       if($image_check==false)
       {
        echo 'Not a Valid Image';
       }
       else
       {
        $image = file_get_contents ($_FILES['image']['tmp_name']);
        $image_name = $_FILES['image']['name'];
        if ($image_query = mysql_query ("insert into product_images values (1,'$image_name',$image )"))
        {
          echo $current_id;
         //echo 'Successfull';
        }
        else
        {
          echo mysql_error();
        }
       }
   }
 ?>
    <form action='insert_product.php' method='POST' enctype='multipart/form-data' ></br>
            File        : <input type='file' name= 'image' >
    </form>