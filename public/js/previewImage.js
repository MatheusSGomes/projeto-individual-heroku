function previewImage() {
  const preview = document.querySelector('.img-profile');
  const file = document.querySelector('#photo').files[0];
  console.log(file);

  const reader = new FileReader();

  reader.addEventListener("load", () => {
      preview.src = reader.result;
  }, false);

  if (file) {
      reader.readAsDataURL(file);
  }
}