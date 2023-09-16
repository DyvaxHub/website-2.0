// let form1 = document.querySelector(".form_1");
// let form2 = document.querySelector(".form_2");
// let form3 = document.querySelector(".form_3");
// let form4 = document.querySelector(".form_4");

// let newbtn = document.querySelector("#new");
// let existingbtn = document.querySelector("#existing");
// let form2btn = document.querySelector("#form2");
// let form3btn = document.querySelector("#form3");
// let form4btn = document.querySelector("#form4");
// let form2btnback = document.querySelector("#form2back");
// let form3btnback = document.querySelector("#form3back");
// let form4btnback = document.querySelector("#form4back");

// let form2progress = document.querySelector(".form_2_progressbar");
// let form3progress = document.querySelector(".form_3_progressbar");
// let form4progress = document.querySelector(".form_4_progressbar");

// let modal = document.querySelector(".modal_wrapper");
// let shadow = document.querySelector(".shadow");

// existingbtn.addEventListener("click", function (e) {
//   e.preventDefault();
//   try {
//     form1.style.display = "none";
//     form3.style.display = "block";
//     form2progress.classList.add("active");
//     form3progress.classList.add("active");
//   } catch (e) {
//     console.log(e);
//   }
// });
// newbtn.addEventListener("click", function (e) {
//   e.preventDefault();
//   try {
//     form1.style.display = "none";
//     form2.style.display = "block";
//     form2progress.classList.add("active");
//   } catch (e) {
//     console.log(e);
//   }
// });
// // form2btn.addEventListener('click', function () {
// //     try {
// //         form2.style.display = "none";
// //         form3.style.display = "block";
// //         form3progress.classList.add("active");
// //     } catch (e) {
// //         console.log(e)
// //     }
// // })
// form2btnback.addEventListener("click", function (e) {
//   // e.preventDefault();
//   try {
//     form2.style.display = "none";
//     form1.style.display = "block";
//     form2progress.classList.remove("active");
//     form3progress.classList.remove("active");
//   } catch (e) {
//     console.log(e);
//   }
// });
// form3btn.addEventListener("click", function (e) {
//   // e.preventDefault();
//   modal.classList.add("active");
//   setTimeout(() => {
//     modal.classList.remove("active");
//   }, 3000);
// });
// form3btnback.addEventListener("click", function (e) {
//   // e.preventDefault();
//   try {
//     form1.style.display = "block";
//     form3.style.display = "none";
//     form2.style.display = "none";
//     form3progress.classList.remove("active");
//     form2progress.classList.remove("active");
//   } catch (e) {
//     console.log(e);
//   }
// });

// // form4btn.addEventListener('click', function () {
// //     modal.classList.add('active');
// //     setTimeout(() => {
// //         modal.classList.remove("active")
// //     }, 3000);
// // })

// function togglePaymentFields() {
//   var dropdown = document.getElementById("payment_type");
//   var selectedOption = dropdown.options[dropdown.selectedIndex].value;
//   var tillNumberFields = document.getElementById("tillNumberFields");
//   var paybillFields = document.getElementById("paybillFields");

//   if (selectedOption === "1") {
//     tillNumberFields.style.display = "block";
//     paybillFields.style.display = "none";
//   } else if (selectedOption === "2") {
//     tillNumberFields.style.display = "none";
//     paybillFields.style.display = "block";
//   } else {
//     tillNumberFields.style.display = "none";
//     paybillFields.style.display = "none";
//   }
// }

document.addEventListener("DOMContentLoaded", function () {
  const navLinks = document.querySelectorAll(".nav-link");

  navLinks.forEach((link) => {
    link.addEventListener("click", () => {
      navLinks.forEach((navLink) => {
        navLink.classList.remove("active-tab");
      });
      link.classList.add("active-tab");
    });
  });
});



// const colors = [
//   "#FF5733", "#C70039", "#900C3F", "#581845", // Reds
//   "#FFC300", "#FF5733", "#FF9900", "#FFCC00", // Oranges/Yellows
//   "#4CAF50", "#008CBA", "#00BCD4", "#03A9F4", // Blues/Greens
//   "#9C27B0", "#673AB7", "#3F51B5", "#2196F3", // Purples
//   "#E91E63", "#F44336", "#FF5252", "#FF1744", // More Reds
//   "#FFD700", "#7FFF00", "#32CD32", "#008000", // More Greens/Yellows
//   "#00FFFF", "#00CED1", "#008B8B", "#191970"  // Blues/Cyans
// ];

// // Randomly select a color from the array
// const randomColor = colors[Math.floor(Math.random() * colors.length)];

// // Set the background color of the p tag
// const pTag = document.getElementById("yourPTagId");
// pTag.style.backgroundColor = randomColor;


// const plane = document.getElementById("plane");

// function getRandomPosition() {
//   const maxWidth = window.innerWidth - plane.width;
//   const maxHeight = window.innerHeight - plane.height;
//   const randomX = Math.floor(Math.random() * maxWidth);
//   const randomY = Math.floor(Math.random() * maxHeight);
//   return { x: randomX, y: randomY };
// }

// function movePlaneRandomly() {
//   const newPosition = getRandomPosition();
//   plane.style.left = newPosition.x + "px";
//   plane.style.top = newPosition.y + "px";
// }

// setInterval(movePlaneRandomly, 3000);



// document.addEventListener("DOMContentLoaded", () => {
//   const planeContainer = document.getElementById("plane-container");

//   function createPlane() {
//     const plane = document.createElement("img");
//     plane.src = "/images/Dyvax Plane.gif";
//     plane.alt = "Flying Plane";
//     plane.className = "plane";
//     planeContainer.appendChild(plane);
//     movePlaneRandomly(plane);
//   }

//   function getRandomPosition() {
//     const maxWidth = window.innerWidth - 100;
//     const maxHeight = window.innerHeight - 100;
//     const randomX = Math.floor(Math.random() * maxWidth);
//     const randomY = Math.floor(Math.random() * maxHeight);
//     return { x: randomX, y: randomY };
//   }

//   function movePlaneRandomly(plane) {
//     setInterval(() => {
//       const newPosition = getRandomPosition();
//       plane.style.left = newPosition.x + "px";
//       plane.style.top = newPosition.y + "px";
//     }, 3000); // Move the plane every 3 seconds
//   }

//   for (let i = 0; i < 10; i++) {
//     createPlane();
//   }
// });

