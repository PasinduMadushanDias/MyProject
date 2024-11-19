document.addEventListener("DOMContentLoaded", function () {
  const ratingIcons = document.querySelectorAll(
    ".rating-container .rating-icon"
  );
  const submitButton = document.getElementById("submitButton");

  // Handle rating selection
  let selectedRating = 0;
  ratingIcons.forEach((icon, index) => {
    icon.addEventListener("click", () => {
      selectedRating = index + 1;
      updateRatingIcons(selectedRating);
    });
  });

  // Update active rating icons
  function updateRatingIcons(rating) {
    ratingIcons.forEach((icon, index) => {
      if (index < rating) {
        icon.classList.add("active");
      } else {
        icon.classList.remove("active");
      }
    });
  }

  // Handle form submission
  submitButton.addEventListener("click", () => {
    const companyName = document.getElementById("companyName").value;
    const companyID = document.getElementById("companyID").value;
    const internStudents = document.getElementById("internStudents").value;
    const note = document.getElementById("note").value;

    if (
      companyName &&
      companyID &&
      internStudents &&
      note &&
      selectedRating > 0
    ) {
      // Create the company report object
      const companyReport = {
        companyName,
        companyID,
        internStudents,
        rating: selectedRating,
        note,
      };

      // Display the company report or submit it to the server
      console.log("Company Report:", companyReport);
      alert("Company report submitted successfully!");
    } else {
      alert("Please fill in all the required fields.");
    }
  });
});
