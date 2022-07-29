function previewPhoto() {
  const preview = document.querySelector('.img-profile');
  const file = document.querySelector('#photo').files[0];

  const reader = new FileReader();

  reader.addEventListener("load", () => {
      preview.src = reader.result;
  }, false);

  if (file) {
      reader.readAsDataURL(file);
  }
}
