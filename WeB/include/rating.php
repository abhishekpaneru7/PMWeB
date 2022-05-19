<?php
 $rating = $row['RATING'];
 for($rating; $rating > 0; $rating--){
  if($rating == 0.5){
    echo '<span class="fa fa-star-half-stroke checked"></span>';
  }else{
    echo '<span class ="fa fa-star checked"></span>';
  }
}
?>