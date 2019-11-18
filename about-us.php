<?php
    define('TITLE',"About Us");
    include 'header.php';

    if(isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }
?>


        <!--Main Content Between Header and Footer-->
<main>

       <section>
                <div><img src="uploads/eve.jpg" alt="our team" height="100%" width="100%"></div>
       
            <div>
                <h1>Our Team</h1>

                <hr>

            <div class="content">
                    
                    <div id ="img1" class="col-md-5"><img class="img-circle" src="uploads/jb.jpg" alt="our team" height="50%%" width="50%"></div>
                    <div class="text1">
                    <div class="name"class="col-md-6">Aashish Verma</div> <br>
                             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                             text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                             It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                             It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with 
                             desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
               </div>

               <div class="content">
                    
                    <div id ="img1" class="col-md-5"><img class="img-circle" src="uploads/jb.jpg" alt="our team" height="50%%" width="50%"></div>
                    <div class="text1">
                    <div class="name" col-md-6">Aman Bansiwal</div> <br>
                             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                             text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                             It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                             It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with 
                             desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    
               </div>

               <div class="content">
                    
                    <div id ="img1" class="col-md-5"><img class="img-circle" src="uploads/jb.jpg" alt="our team" height="50%%" width="50%"></div>
                    <div class="text1">
                              <div class="name" class="col-md-6">Arnav Verma</div> <br>
                             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                             text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                             It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                             It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with 
                             desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
               </div>
                
                
            </div>
           
            </div>

            
       </section>
        
</main>

<?php include 'footer.php'; ?>
