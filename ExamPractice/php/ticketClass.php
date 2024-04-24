<?php

require "database.php";

class Ticket extends Database
{
    // Adds or updates a ticket in the cart
    public function addToCart($ticketType, $quantity, $specialRequirements, $dateSelected) {
        session_start(); // Start session if not already started
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        
        $cartItemKey = $this->findCartItem($ticketType, $specialRequirements, $dateSelected);
        
        if ($cartItemKey !== false) {
            // Update quantity and recalculate total price
            $_SESSION['cart'][$cartItemKey]['quantity'] += $quantity;
            $_SESSION['cart'][$cartItemKey]['totalPrice'] = $_SESSION['cart'][$cartItemKey]['quantity'] * $_SESSION['cart'][$cartItemKey]['price'];
        } else {
            // Add new item with total price calculation
            $_SESSION['cart'][] = [
                'type' => $ticketType,
                'quantity' => $quantity,
                'specialRequirements' => $specialRequirements,
                'price' => $this->getTicketPrice($ticketType), // Get ticket price from a method
                'totalPrice' => $quantity * $this->getTicketPrice($ticketType), // Calculate total price
                'date' => $dateSelected
            ];
        }
    }
    
    // Method to get the price of a ticket type (to be implemented)
    private function getTicketPrice($ticketType) {
        // Implement logic to retrieve ticket price from a data source (database, config file, etc.)
        // For example:
        $ticketPrices = [
            'standard' => 20.00,
            'child' => 10.00,
            'senior' => 15.00
        ];
        
        // Check if ticket type exists in the array, return 0 if not found
        return isset($ticketPrices[$ticketType]) ? $ticketPrices[$ticketType] : 0;
    }

    // Method to find if a cart item already exists (to be implemented)
    private function findCartItem($ticketType, $specialRequirements, $dateSelected) {
        // Implement logic to find if a similar item already exists in the cart
        // For example:
        session_start();
        if (!isset($_SESSION['cart'])) {
            return false;
        }

        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['type'] === $ticketType && 
                $item['specialRequirements'] === $specialRequirements && 
                $item['date'] === $dateSelected) {
                return $key;
            }
        }
        return false;
    }

    // Method to insert tickets into the database (to be implemented)
    private function insertTickets($userID, $tickets) {
        // Implement logic to insert tickets into the database
        // For example:
        $connection = new Connection(); // Assuming Connection class exists and creates database connection
        
        try {
            $conn = $connection->connect(); // Assuming connect method returns PDO object
            $sql = "INSERT INTO zoo_tickets (userID, ticketType, quantity, specialRequirements, totalPrice, dayForUse) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            
            foreach ($tickets as $ticket) {
                $stmt->execute([
                    $userID,
                    $ticket['type'],
                    $ticket['quantity'],
                    $ticket['specialRequirements'],
                    $ticket['totalPrice'],
                    $ticket['date']
                ]);
            }
            return true; // Success
        } catch (PDOException $e) {
            return false; // Fail
        }
    }
}

?>
