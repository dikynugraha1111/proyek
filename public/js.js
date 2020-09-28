$("#files").change(function () {
  filename = this.files[0].name;
  console.log(filename);
});
