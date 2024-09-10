 <header class="masthead">
     <div class="container h-100">
         <div class="row h-100 align-items-center justify-content-center text-center">
             <div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
                 <h1 class="text-uppercase text-white font-weight-bold">About Us</h1>
                 <hr class="divider my-4" />
             </div>

         </div>
     </div>
 </header>

 <section class="page-section">
     <div class="container">
         <?php if (isset($_SESSION['setting_about_content']) && !empty($_SESSION['setting_about_content'])) {
                echo html_entity_decode($_SESSION['setting_about_content']);
            } else {
                echo "About content not found";
            } ?>

     </div>
 </section>