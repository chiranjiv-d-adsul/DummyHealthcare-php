<?php
include 'partials/header.php';

?>



<form action="book.php" method="POST">
  <div class="training-sectionservices">
    <h1 class="heading"> Book Services </h1>
    <div class="containerservices">


      <?php require 'config/database.php';

      $query = "SELECT * FROM services  ";
      $query_run = mysqli_query($connection, $query);
      $check_services = mysqli_num_rows($query_run) > 0;

      if ($check_services) {
        while ($row = mysqli_fetch_assoc($query_run)) {





      ?>

          <div class="CMS-item">

            <img src="data:image/png;base64,<?php echo base64_encode($row['images']); ?>" class="hos-services" alt="" height="120px">
            <h3> <?php echo $row['names']; ?> </h3>
            <p>
              <?php echo $row['briefs']; ?>
            </p>
            <button type="button" name="book" id="bt1"><a href="book.php" class="underline">book</a></button>

          </div>


</form>




<?php
        }
      } else {
        echo 'no data found';
      }

?>
</div>
</div>



<!-- custom js -->
<script>
  let loadMoreBtn = document.querySelector('.packages .load-more .btn');
  let currentItem = 3;

  loadMoreBtn.onclick = () => {
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for (var i = currentItem; i < currentItem + 3; i++) {
      boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;
    if (currentItem >= boxes.length) {
      loadMoreBtn.style.display = 'none';
    }
  }
</script>

<!-- custom js -->
<script src="script.js"></script>
<?php
include  'partials/footer.php';
?>