const shapes = ["circle", "square"];
const colors = [
  "#FF5733",
  "#33FFA2",
  "#334BFF",
  "#FF338E",
  "#FFE233",
  "#33A3FF",
  "#FFC733",
  "#FF3377",
  "#33FFD9",
  "#B933FF",
];

function addRandomShape() {
  const randomShape = shapes[Math.floor(Math.random() * shapes.length)];
  const randomColor = colors[Math.floor(Math.random() * colors.length)];

  const shape = document.createElement("div");
  shape.classList.add("shape", randomShape);
  shape.style.backgroundColor = randomColor;

  const randomX = Math.floor(Math.random() * 2500);
  const randomY = Math.floor(Math.random() * 3500);

  shape.style.left = `${randomX}px`;
  shape.style.top = `${randomY}px`;

  document.body.appendChild(shape);
}

// Call addRandomShape when the page loads or refreshes
window.addEventListener("load", () => {
  for (let i = 0; i < 25; i++) {
    addRandomShape();
  }
});

const toastTrigger = document.getElementById("liveToastBtn");
const toastLiveExample = document.getElementById("liveToast");

if (toastTrigger) {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
  toastTrigger.addEventListener("click", () => {
    toastBootstrap.show();
  });
}
