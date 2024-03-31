<?php
include 'partials/header.php';

?>


    <div class="heading" style="background:url(/images/departments.jpg) no-repeat " >
        <h1>Departments</h1>
    </div>

    <!-- package section starts -->

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
                    <a href="/book.php" class="btn">view more</a>
                </div>
                </div>


                <div class="box">
                    <div class="image">
                        <img src="/images/Radiology.jpg" alt="">
                    </div>
                <div class="content">
                    <h3>Radiology</h3>
                    <p>Radiology is the medical discipline that uses medical imaging to diagnose diseases and guide their treatment, within the bodies of humans and other animals.</p>
                    <a href="/book.php" class="btn">view more</a>
                </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="/images/Neurology.jpg" alt="">
                    </div>
                   <div class="content">
                    <h3>Neurology</h3>
                    <p>Neurology is the branch of medicine dealing with the diagnosis and treatment of all categories of conditions and disease involving the nervous system</p>
                    <a href="/book.php" class="btn">view more</a>
                </div>
                </div>


                <div class="box">
                    <div class="image">
                        <img src="/images/Urology.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Urology</h3>
                        <p>Urology The urology department is run by consultant urology surgeons and their surgical teams. It investigates all areas linked to kidney and bladder-based ...</p>
                        <a href="/book.php" class="btn">view more</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="/images/Outpatient department.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Outpatient department </h3>
                        <p>This department provides medical care to patients who have problems with their heart or circulation. It treats people on an inpatient and outpatient basis.</p>
                        <a href="/book.php" class="btn">view more</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="/images/Surgical department.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Surgical department </h3>
                        <p>Surgery is a branch of medicine that is commonly associated with the use of instruments in the management of patients, To examine all patients with a possible surgical diseases and afterwhich, to make a rational and accurate diagnosis. </p>
                        <a href="/book.php" class="btn">view more</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="/images/Inpatient service (IP).jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Inpatient service (IP)</h3>
                        <p>With the pandemic situation all around, we have seen a tremendous uplift in the medical facilities provided by different hospitals and the healthcare industry. At times the health condition of a person degrades to such a level that he/she needs inpatient care. For this, the person is advised to get admitted to the hospital’s IPD. IPD full form is Inpatient Department. </p>
                        <a href="/book.php" class="btn">view more</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="/images/Nursing department.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Nursing department</h3>
                        <p>In every hospital the staff RNs monitor, record, and respond to the changing status of their patients. They are responsible for assessing patients' nursing needs and for making, implementing, and modifying nursing plans of care as conditions change. This includes instruction of patients and families in self-care</p>
                        <a href="/book.php" class="btn">view more</a>
                    </div>
                </div>


                <div class="box">
                    <div class="image">
                        <img src="/images/Outpatient department.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Operation theater complex (OT)</h3>
                        <p>An operation theatre complex is the "heart" of any major surgical hospital. An operating theatre, operating room, surgery suite or a surgery centre is a room within a hospital within which surgical and other operations are carried out.</p>
                        <a href="/book.php" class="btn">view more</a>
                    </div>
                </div>
           </div>
            <div class="load-more" > <span class="btn">load more</span></div>
    </section>

    <!-- package section ends -->










<!-- footer section starts -->
<?php
include  'partials/footer.php';
?>






<!-- custom js -->
<script >

    let loadMoreBtn = document.querySelector('.departments .load-more .btn');
    let currentItem = 3;

    loadMoreBtn.onclick = () =>{
      let boxes = [...document.querySelectorAll('.departments .box-container .box')];
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
</body>
</php>