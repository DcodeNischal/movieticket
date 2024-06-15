document.addEventListener('DOMContentLoaded', () => {
    const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats')) || [];
    const totalPrice = localStorage.getItem('totalPrice') || '0.00';
    const seatprice = "500"

    document.getElementById('selectedSeats').textContent = selectedSeats.join('  ');
    document.getElementById('seatprice').textContent = 'Rs. ' + seatprice;
    document.getElementById('numSeats').textContent = selectedSeats.length-1;
    document.getElementById('totalPrice').textContent = 'Rs. ' + totalPrice;
    document.getElementById('totalAmount').textContent = 'Rs. ' + totalPrice;

    window.confirmPayment = () => {
        alert('Payment Confirmed! Total amount paid: Rs. ' + totalPrice);
        localStorage.clear(); // Clear the local storage after payment
        window.location.href = "../index.html"; // Redirect to home page or any other page
    };

    window.goBack = () => {
        window.history.back();
    };
});