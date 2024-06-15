document.addEventListener("DOMContentLoaded", () => {
  const seats = document.querySelectorAll(".seat");
  const totalPriceElement = document.getElementById("totalPrice");
  let totalPrice = 0;

  seats.forEach((seat) => {
    seat.addEventListener("click", () => {
      if (
        !seat.classList.contains("sold") &&
        !seat.classList.contains("booked")
      ) {
        seat.classList.toggle("selected");
        if (seat.classList.contains("selected")) {
          totalPrice += 500; // Assuming each seat costs 500
        } else {
          totalPrice -= 500;
        }
        totalPriceElement.textContent = totalPrice.toFixed(2);
      }
    });
  });

  document.getElementById("proceedButton").addEventListener("click", () => {
    const selectedSeats = Array.from(
      document.querySelectorAll(".seat.selected")
    ).map((seat) => seat.getAttribute("data-seat-number"));
    localStorage.setItem("selectedSeats", JSON.stringify(selectedSeats));
    localStorage.setItem("totalPrice", totalPrice.toFixed(2));
    alert("Proceeding to payment. Total is " + totalPrice);
    window.location.href = "../paymentscreen/index.html";
  });
});
