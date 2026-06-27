// address list active remover script
// $(".choose-box").click(function () {
//     // Map
//     let mapAddress = $(this).attr("data-map");
//     // console.log(mapAddress);

//     $('.locate-right iframe').attr('src', mapAddress)
//     // Map Ends
// });
// address list active remover script Ends

// Location Starts
document.addEventListener("DOMContentLoaded", () => {
  var chooseBoxes = document.querySelectorAll(".choose-box");

  chooseBoxes.forEach(function (box, index) {
    box.classList.add("cb-" + index);
    box.setAttribute("data-id", index);
  });

  $(".cb-0").addClass("active");
  $(".cb-0 .comm-para").slideDown();

  $(".choose-box").click(function () {
    var a = $(this).attr("data-id");
    $(".choose-box .comm-para").slideUp();
    $(".choose-box").removeClass("active");
    $(this).addClass("active");
    $(".cb-" + a + " .comm-para").slideDown();

    $(this).css("pointer-events", "none");

    setTimeout(() => {
      $(this).css("pointer-events", "all");
    }, 2000);
  });

  // Location Ends

  // Search Filter
  let searchInput = document.getElementById("searchInput");

  searchInput.addEventListener("keyup", function (event) {
    let searchQuery = event.target.value.toLowerCase();
    let allNamesDOMCollection = document.getElementsByClassName("choose-box");

    for (let i = 0; i < allNamesDOMCollection.length; i++) {
      const currentName = allNamesDOMCollection[i].textContent.toLowerCase();

      if (currentName.includes(searchQuery)) {
        allNamesDOMCollection[i].style.display = "flex";
      } else {
        allNamesDOMCollection[i].style.display = "none";
      }
    }
  });
  // Search Filter Ends
});