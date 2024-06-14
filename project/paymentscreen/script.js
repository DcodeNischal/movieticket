document.addEventListener('DOMContentLoaded', () => {
    const movieDetails = JSON.parse(localStorage.getItem('movieDetails'));
    
    document.getElementById('movieName').textContent = movieDetails.name;
    document.getElementById('movieLocation').textContent = movieDetails.location;
    document.getElementById('movieDate').textContent = movieDetails.date;
    document.getElementById('movieTime').textContent = movieDetails.time;
    document.getElementById('movieSeats').textContent = movieDetails.seats.join(', ');
    document.getElementById('movieTotalPrice').textContent = movieDetails.totalPrice;

    document.getElementById('payButton').addEventListener('click', () => {
        alert('Proceeding to payment gateway');
    });
});
