function showImages(data) {
  document.getElementById("carouselbackground").style.display = "block";
  fetch("app/views/pages/partial/carousel.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(data),
  })
    .then((response) => response.text())
    .then((html) => {
      // You can inject the returned HTML
      document.getElementById("carouselContainer").innerHTML = html;
    })
    .catch((error) => console.error(error));
}

function closeGallery() {
  document.getElementById("carouselbackground").style.display = "none";
}
