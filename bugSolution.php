function myFunc() {
  // Use strict comparison to avoid type juggling
  if ("0" === 0) {
    echo "True";
  } else {
    echo "False";
  }
}