<?php

require_once ("../Store_my_result/php/component.php");
require_once ("../Store_my_result/php/operation.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StoreMyResults.com</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="style.css">
<style id="table_style" type="text/css">
    p {
  width: %100px; 
  border: 2px solid red;
}

p.b {
  word-wrap: break-word;
}
    body
    {
        font-family: Arial;
        font-size: 10pt;
    }
    table
    {
        border: 1px solid #ccc;
        border-collapse: collapse;
    }
    table th
    {
        background-color: #F7F7F7;
        color: #333;
        font-weight: bold;
    }
    table th, table td
    {
        padding: 5px;
        border: 1px solid #ccc;
    }

a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid green;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: green;
  color: white;
  div {
  width: 150px; 
  border: 1px solid #000000;
}

</style>  
</Head>  
</style>
</head>
<script type="text/javascript">
    function PrintTable() {
        var printWindow = window.open('', '', 'height=400,width=700');
        printWindow.document.write('<html><head><title>Table Contents</title>');
 
        //Print the Table CSS.
        var table_style = document.getElementById("table_style").innerHTML;
        printWindow.document.write('<style type = "text/css">');
        printWindow.document.write(table_style);
        printWindow.document.write('</style>');
        printWindow.document.write('</head>');

        //Print the DIV contents i.e. the HTML Table.
        printWindow.document.write('<body>');
        var divContents = document.getElementById("dvContents").innerHTML;
        printWindow.document.write(divContents);
        printWindow.document.write('</body>');
 
        printWindow.document.write('</html>');
        printWindow.document.close();
        printWindow.print();
    }
</script>
<body>

<main>
    <div  style="width: %100px;">
        <center><h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-graduation-cap"></i>Store My Result</h1></center><h4 style="text-align: right;"><b><a href="mainpage.php" target="_blank";>Logout</a></b></h4>
        <p class="b"><b>Note:</b>Store your data by clicking plus icon and then refresh,result will be stored successfully.if u want to update any data click on edit icon which is available inside table once you click it,
        all your data will displayed in form , udpate it by changing default ID to ID which you want to update and modify the form accordingly and click on pen icon data will upadte successfully.you can delete tha data by 
        clicking edit sign which avaible table and data will be displayed in form delete it by changing default ID to ID which you want to delete.And click on sync icon to view the results </p>  
        <div class="d-flex justify-content-center">
            <form action="" method="post" class="w-50">
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-id-badge'></i>","ID", "id",setID()); ?>
                </div>
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-street-view'></i>","Subject Code", "name",""); ?>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?php inputElement("<i class='fas fa-book'></i>","Subject Name", "subjectname",""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-calculator'></i>","Mark", "mark",""); ?>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                        <?php buttonElement("btn-create","btn btn-success","<i class='fas fa-plus'></i>","create","data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
                        <?php buttonElement("btn-read","btn btn-primary","<i class='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
                        <?php buttonElement("btn-update","btn btn-light border","<i class='fas fa-pen-alt'></i>","update","data-toggle='tooltip' data-placement='bottom' title='Update'"); ?>
                        <?php buttonElement("btn-delete","btn btn-danger","<i class='fas fa-trash-alt'></i>","delete","data-toggle='tooltip' data-placement='bottom' title='Delete'"); ?>
                        <?php deleteBtn();?>
                </div>
            </form>
        </div>

        <!-- Bootstrap table  -->
        <div>
	<div id="dvContents">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Subject Code</th>
                        <th>Subject Name</th>
                        <th>Mark</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                   <?php


                   if(isset($_POST['read'])){
                       $result = getData();

                       if($result){

                           while ($row = mysqli_fetch_assoc($result)){ ?>

                               <tr>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['subjectname']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo '' . $row['mark']; ?></td>
                                   <td ><i class="fas fa-edit btnedit" data-id="<?php echo $row['id']; ?>"></i></td>
                               </tr>

                   <?php
                           }

                       }
                   }


                   ?>
                </tbody>
            </table></center>
        </div>
	</div>

    </div>
<center><input type="button" onclick="PrintTable();" value="Print"/></center>
</main>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="../crud/php/main.js"></script>
</body>
</html>