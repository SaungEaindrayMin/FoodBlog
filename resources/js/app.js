import './bootstrap';
import 'preline';


// Image file input and preview
const imageInput = document.querySelector('input[name="image"]');
const imagePreview = document.getElementById('file-preview-img');

imageInput.addEventListener('change', function(event) {
  const file = event.target.files[0];
  
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      imagePreview.src = e.target.result;
      imagePreview.classList.remove('hidden');
    };
    reader.readAsDataURL(file);
  }
});

// Video file input and preview
const videoInput = document.querySelector('input[name="video"]');
const videoPreview = document.getElementById('file-preview-video');

videoInput.addEventListener('change', function(event) {
  const file = event.target.files[0];
  
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      videoPreview.src = e.target.result;
      videoPreview.classList.remove('hidden');
    };
    reader.readAsDataURL(file);
  }
});

// reaction 
const heartButton = document.getElementById("heartButton");

heartButton.addEventListener("click", () => {
  heartButton.classList.add("scale-125");
  setTimeout(() => heartButton.classList.remove("scale-125"), 150);

  if (heartButton.classList.contains("text-gray-200")) {
    heartButton.classList.remove("text-gray-200");
    heartButton.classList.add("text-red-500");
  } else {
    heartButton.classList.remove("text-red-500");
    heartButton.classList.add("text-gray-200");
  }
});







