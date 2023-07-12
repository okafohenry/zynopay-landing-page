function toggleContent(content) {
    const readMoreBtn = content.querySelector(".read-more-btn");
    const readLessBtn = content.querySelector(".read-less-btn");
    const readMoreContent = content.querySelector(".read-more-content");
  
    readMoreBtn.addEventListener("click", function(e) {
      e.preventDefault();
      readMoreContent.style.display = "inline";
      readMoreBtn.style.display = "none";
      readLessBtn.style.display = "inline";
    });
  
    readLessBtn.addEventListener("click", function(e) {
      e.preventDefault();
      readMoreContent.style.display = "none";
      readMoreBtn.style.display = "inline";
      readLessBtn.style.display = "none";
    });
  }
  
  document.addEventListener("DOMContentLoaded", function() {
    const contentSections = document.querySelectorAll(".content");
    contentSections.forEach(function(content) {
      toggleContent(content);
    });
  });