<?php

  // Get page id
  $page_object = get_queried_object();
  $page_id     = get_queried_object_id();

  // Echo matching page background class
  switch ( $page_id ) {
    case "11":
      echo "Header--actueel";
      break;
    case "2":
      echo "Header--advocaat";
      break;
    case "183":
      echo "Header--voorwaarden";
      break;
    case "206":
      echo "Header--app";
      break;
    case "14":
      echo "Header--contact";
      break;
    case "200":
      echo "Header--disclaimer";
      break;
    case "181":
      echo "Header--privacy";
      break;
    case "5":
      echo "Header--rechtsgebieden";
      break;
    case "7":
      echo "Header--tarieven";
      break;
    case "230":
      echo "Header--referenties";
      break;
    case "9":
      echo "Header--tips";
      break;
    default:
      echo "Header--default";
      break;
  }

?>
