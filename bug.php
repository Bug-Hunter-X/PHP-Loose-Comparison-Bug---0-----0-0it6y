function myFunc() {
  // This function has a subtle bug related to unexpected type juggling
  if ("0" == 0) {
    echo "True";
  } else {
    echo "False";
  }
}