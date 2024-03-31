
<?php
include 'partials/header.php';

?>


    <!-- header section ends -->
    <!-- home section starts -->

    <div class="content">
        <div class="slider">


            <div class="slider-img" style="background:url(/images/home.avif) no-repeat;">
                <div class="contentss">

                    <span>Your life. Our passion. Discover One Health</span>
                    <h3>make a better cure</h3>
                </div>

            </div>




        </div>

    </div>
  <!-- home section ends-->

  <section class="departments">
    <h1 class="heading-title"> </h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="/images/Cardiology.png" alt="">
                </div>
                <div class="content">
                    <h3>Cardiology</h3>
                    <p>Cardiology is the study of the heart. Cardiology is a branch of medicine that deals with disorders of the heart and the cardiovascular system. </p>
                    <a href="/view more.php" class="btn">view more</a>
                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="/images/Radiology.jpg" alt="">
                </div>
            <div class="content">
                <h3>Radiology</h3>
                <p>Radiology is the medical discipline that uses medical imaging to diagnose diseases and guide their treatment, within the bodies of humans and other animals.</p>
                <a href="/view more.php" class="btn">view more</a>
            </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="/images/Neurology.jpg" alt="">
                </div>
               <div class="content">
                <h3>Neurology</h3>
                <p>Neurology is the branch of medicine dealing with the diagnosis and treatment of all categories of conditions and disease involving the nervous system</p>
                <a href="/view more.php" class="btn">view more</a>
            </div>
            </div>


        </div>
        <div class="load-more" > <span class="btn"><a href="departments.php">go to departments</a> </span></div>

    </section>

<!-- home departments section ends -->



    <!-- custom js -->
<script >

    let loadMoreBtn = document.querySelector('.packages .load-more .btn');
    let currentItem = 3;

    loadMoreBtn.onclick = () =>{
      let boxes = [...document.querySelectorAll('.packages .box-container .box')];
      for(var i= currentItem; i < currentItem+3; i++)
      {
        boxes[i].style.display = 'inline-block';
      };
      currentItem += 3;
      if(currentItem >= boxes.length){
        loadMoreBtn.style.display = 'none';
      }
    }</script>

    <!-- custom js -->
    <script src="script.js"></script>
    <?php
include  'partials/footer.php';
?>