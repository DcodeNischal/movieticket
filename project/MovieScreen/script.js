document.addEventListener('DOMContentLoaded', () => {
    const seats = document.querySelectorAll('.seat');
    const totalPriceElement = document.getElementById('totalPrice');
    let totalPrice = 0;

    seats.forEach(seat => {
        seat.addEventListener('click', () => {
            if (!seat.classList.contains('sold') && !seat.classList.contains('booked')) {
                seat.classList.toggle('selected');
                if (seat.classList.contains('selected')) {
                    totalPrice += 500; // Assuming each seat costs 500
                } else {
                    totalPrice -= 500;
                }
                totalPriceElement.textContent = totalPrice.toFixed(2);
            }
        });
    });

    document.getElementById('proceedButton').addEventListener('click', () => {
        alert('Proceeding to payment total is '+totalPrice);
    });
})
