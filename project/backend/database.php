<?php

class Connection
{
    public $pdo = null;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=kuberdev;charset=utf8mb4", "root", "");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
        } catch (PDOException $e) {
            die("ERROR: Could not connect. " . $e->getMessage());
        }
    }

    public function __destruct()
    {
        $this->pdo = null;
    }

    public function createTableUsers()
    {
        $sql = "CREATE TABLE IF NOT EXISTS users (
            user_id INT(11) AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL,
            password VARCHAR(255) NOT NULL,
            email VARCHAR(100) NOT NULL,
            phone_number VARCHAR(15) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP on update CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        try {
            $this->pdo->exec($sql);
            // echo "Table created successfully";
        } catch (PDOException $e) {
            die("ERROR: Could not execute $sql. " . $e->getMessage());
        }
    }

    public function createTableMovies()
    {
        $sql = "CREATE TABLE IF NOT EXISTS movies (
            movie_id INT(11) AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(100) NOT NULL,
            description TEXT NOT NULL,
            genre VARCHAR(50) NOT NULL,
            duration INT(11) NOT NULL,
            release_date DATE NOT NULL,
            rating DECIMAL(3, 1) NOT NULL,
            director VARCHAR(50) NOT NULL,
            cast TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP on update CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        try {
            $this->pdo->exec($sql);
            // echo "Table created successfully";
        } catch (PDOException $e) {
            die("ERROR: Could not execute $sql. " . $e->getMessage());
        }
    }

    public function createTableTheaters()
    {
        $sql = "CREATE TABLE IF NOT EXISTS theaters (
            theater_id INT(11) AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            location VARCHAR(100) NOT NULL,
            total_seats INT(11) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP on update CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        try {
            $this->pdo->exec($sql);
            // echo "Table created successfully";
        } catch (PDOException $e) {
            die("ERROR: Could not execute $sql. " . $e->getMessage());
        }
    }

    public function createTableShows()
    {
        $sql = "CREATE TABLE IF NOT EXISTS shows (
            show_id INT(11) AUTO_INCREMENT PRIMARY KEY,
            movie_id INT(11) NOT NULL,
            theater_id INT(11) NOT NULL,
            show_time TIME NOT NULL,
            date DATE NOT NULL,
            available_seats INT(11) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP on update CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (movie_id) REFERENCES movies(movie_id) ON DELETE CASCADE ON UPDATE CASCADE,
            FOREIGN KEY (theater_id) REFERENCES theaters(theater_id) ON DELETE CASCADE ON UPDATE CASCADE
        )";

        try {
            $this->pdo->exec($sql);
            // echo "Table created successfully";
        } catch (PDOException $e) {
            die("ERROR: Could not execute $sql. " . $e->getMessage());
        }
    }

    public function createTableBookings()
    {
        $sql = "CREATE TABLE IF NOT EXISTS bookings (
            booking_id INT(11) AUTO_INCREMENT PRIMARY KEY,
            user_id INT(11) NOT NULL,
            show_id INT(11) NOT NULL,
            number_of_seats INT(11) NOT NULL,
            total_price DECIMAL(10, 2) NOT NULL,
            booking_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP on update CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE ON UPDATE CASCADE,
            FOREIGN KEY (show_id) REFERENCES shows(show_id) ON DELETE CASCADE ON UPDATE CASCADE
        )";

        try {
            $this->pdo->exec($sql);
            // echo "Table created successfully";
        } catch (PDOException $e) {
            die("ERROR: Could not execute $sql. " . $e->getMessage());
        }
    }

    public function createTableSeats()
    {
        $sql = "CREATE TABLE IF NOT EXISTS seats (
            seat_id INT(11) AUTO_INCREMENT PRIMARY KEY,
            show_id INT(11) NOT NULL,
            seat_number INT(11) NOT NULL,
            status ENUM('Available', 'Booked') NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP on update CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (show_id) REFERENCES shows(show_id) ON DELETE CASCADE ON UPDATE CASCADE
        )";

        try {
            $this->pdo->exec($sql);
            // echo "Table created successfully";
        } catch (PDOException $e) {
            die("ERROR: Could not execute $sql. " . $e->getMessage());
        }
    }

    public function createTableUserPreferences()
    {
        $sql = "CREATE TABLE IF NOT EXISTS user_preferences (
            preference_id INT(11) AUTO_INCREMENT PRIMARY KEY,
            user_id INT(11) NOT NULL,
            genre VARCHAR(100) NOT NULL,
            director VARCHAR(50) NOT NULL,
            cast TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP on update CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE ON UPDATE CASCADE
        )";

        try {
            $this->pdo->exec($sql);
            // echo "Table created successfully";
        } catch (PDOException $e) {
            die("ERROR: Could not execute $sql. " . $e->getMessage());
        }
    }

    public function createTableMovieRatings()
    {
        $sql = "CREATE TABLE IF NOT EXISTS movie_ratings (
            rating_id INT(11) AUTO_INCREMENT PRIMARY KEY,
            user_id INT(11) NOT NULL,
            movie_id INT(11) NOT NULL,
            rating DECIMAL(2, 1) NOT NULL,
            review TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP on update CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE ON UPDATE CASCADE,
            FOREIGN KEY (movie_id) REFERENCES movies(movie_id) ON DELETE CASCADE ON UPDATE CASCADE
        )";

        try {
            $this->pdo->exec($sql);
            // echo "Table created successfully";
        } catch (PDOException $e) {
            die("ERROR: Could not execute $sql. " . $e->getMessage());
        }
    }

    public function createTableRecommendations()
    {
        $sql = "CREATE TABLE IF NOT EXISTS recommendations (
            recommendation_id INT(11) AUTO_INCREMENT PRIMARY KEY,
            user_id INT(11) NOT NULL,
            movie_id INT(11) NOT NULL,
            score DECIMAL(10, 2) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP on update CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE ON UPDATE CASCADE,
            FOREIGN KEY (movie_id) REFERENCES movies(movie_id) ON DELETE CASCADE ON UPDATE CASCADE
        )";

        try {
            $this->pdo->exec($sql);
            // echo "Table created successfully";
        } catch (PDOException $e) {
            die("ERROR: Could not execute $sql. " . $e->getMessage());
        }
    }




    // login and signup

    public function login($username, $password)
    {
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            return true;
        } else {
            return "No user found. Please signup first.";
        }
    }


    public function signup($username, $email, $phone_number, $password)
    {
        $sql = "INSERT INTO users (username, password, email, phone_number) VALUES (:username, :password, :email, :phone_number)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['username' => $username, 'password' => password_hash($password, PASSWORD_DEFAULT), 'email' => $email, 'phone_number' => $phone_number]);
    }
}

$connection = new Connection();
$connection->createTableUsers();
$connection->createTableMovies();
$connection->createTableTheaters();
$connection->createTableShows();
$connection->createTableBookings();
$connection->createTableSeats();
$connection->createTableUserPreferences();
$connection->createTableMovieRatings();
$connection->createTableRecommendations();

?>
