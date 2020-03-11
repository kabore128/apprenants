<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page d'administration</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">

 
=======
    <link href="bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="style1.css"> -->
    <script src="jquery-3.4.1.min.js"></script>
>>>>>>> master
    
  
</head>
<body   bg-dark>
<<<<<<< HEAD
    <div class="container-lg container-md" class="i-conteneur"   class="i-taille" >   
=======
    <div class="container-lg" class="i-conteneur"   class="i-taille" >   
>>>>>>> master
            
         <div  class=" bg-dark"> <img src="" alt="">  </div>
                 
            <div class="row"  >
           
<<<<<<< HEAD
                <aside class=" col-lg-2  col-md-2 bg-dark border border-light aside  i-taille i-espacement1 "   >
=======
                <aside class=" col-lg-2 bg-dark border border-light aside  i-taille i-espacement1 "   >
>>>>>>> master
                <div  class=" bg-dark"> <img src="" alt=""> <h2>Logo simplon </h2> </div>

                          <div  class="d-flex justify-content-center">    <input type="search" class="i-espacement2" placeholder="   recherche..."></div>  
                     
                           <div  class="i-espacement3">
                               <nav class=" i-navclass list-group bg-light id="list-tab" role="tablist"">
<<<<<<< HEAD
                                    
                                     <a class=" list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="index.php?page=enregistrement" role="tab" aria-controls="ajouter" class="i-color">Ajouter</a>   
                                     <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"  href="index.php?page=list" role="tab" aria-controls="apprenants">Apprenants</a>    
                                     <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#Imprimer" role="tab" aria-controls="imprimer">Imprimer</a>     
=======
                               
                                     <a class=" list-group-item list-group-item-action active" id="ajoute" href="index.php?page=enregistrement" role="tab" aria-controls="ajouter" class="i-color">Ajouter</a>   
                                     <a class="list-group-item list-group-item-action" id="apprenant"   href="index.php?page=list" role="tab" aria-controls="apprenants">Apprenants</a>    
                                     <a class="list-group-item list-group-item-action" id="imprimer"  href="#" role="tab" aria-controls="imprimer">Imprimer</a>     
>>>>>>> master
                           
                              </nav>
                                       
                              </div>
                 
       
                        <div class="i-copyr d-flex justify-content-center"> Copyrigh 2020</div>

                 </aside>      
               
<<<<<<< HEAD
                 <div class=" col-md-10 col-lg-10 bg-light border border-light  " >
=======
                 <div class=" col-lg-10 bg-light border border-light  " >
>>>>>>> master
                 <?php 
        if(isset($_GET["page"])){
            switch($_GET["page"]){
                case "enregistrement":
<<<<<<< HEAD
                        include("includes/enregistrement.php");
                    break;
                case "list":
                        include("includes/list.php");
=======
                        include("pages/enregistrement.php");
                    break;
                case "list":
                        include("pages/list.php");
>>>>>>> master
                    break;
            }
        }
        ?>
<<<<<<< HEAD
=======
                     </div>
                         
>>>>>>> master
                        
            </div>             
    </div>            

</body>
<script src="bootstrap.min.js"></script>

</html>            
              
                  
           
