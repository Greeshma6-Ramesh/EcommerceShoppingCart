
<html>
<head>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
 <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" ></script>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>  
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css">

 <title>
    <?php if(isset($page_title)) 
    {
           echo "$page_title";
    }     
    ?>
</title>
<style>

       .product{
              margin-top:9px;
       }

       .cart{
              height: 30px;
              width: 40px;
       }
       h4{
              text-align: center;
             
              margin-bottom :5px;
       }
       .carous{
              margin-top:0px;
       }
       .total{
              position: relative;
             
       }

       .search{
              position: absolute;
              margin-left: 1000px;
              padding-left: 10px;
              margin-top:10px;
       }
       .searchbar{
              width: 150px;

       }
       .c-item{
            height : 700px;
       }

       .c-img{
              height:100%;
              object-fit: cover;
             
       }

       .c-item::before{
              content: "";
              display:block;
              position: absolute;
              top:0;
              left:0;
              bottom:0;
              right:0;
              background: #000;
              opacity: 0.3;
       }

       h5{
              font-size: 32px;
       }

       p{
              font-size: 28px;
       }

      
</style>
</head>
<body>
