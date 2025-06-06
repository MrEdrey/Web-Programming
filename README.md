# Web-Programming

# 🧠 Math Challenge PHP Scripts

This repository contains PHP scripts that solve three different programming challenges. Each challenge is implemented in multiple versions to demonstrate the step-by-step development process and improvements over time.

---

## 🧮 Activity 1: Arithmetic Mean of Natural Numbers

**📋 Description:**  
The program reads a sequence of natural numbers from the user. When a negative number is entered, it calculates and prints the arithmetic mean of the entered values.

### 🔹 Version 0.1
- Reads numbers until a negative number is entered.
- Calculates and prints the average.
- No error handling or formatting.

### 🔹 Version 0.2
- Adds input validation.
- Displays a specific message if no natural numbers were entered.
- Handles edge cases gracefully.

### 🔹 Version 0.3
- Code refactored into functions for readability.
- Improved formatting and user messages.

---

## 📶 Activity 2: Wi-Fi Password (Perfect Squares)

**📋 Description:**  
Based on the day of the month (1–31), the program finds the four smallest perfect squares greater than or equal to that number and prints them as a concatenated password.

### 🔹 Version 0.1
- Simple logic to identify perfect squares starting from the given number.
- Concatenates results into a password.

### 🔹 Version 0.2
- Adds a helper function to check for perfect squares.
- Validates that input is between 1 and 31.

### 🔹 Version 0.3
- Improved modularity using separate functions.
- Enhanced user experience with clear messages.

---

## 📝 Activity 3: Weighted Grade Computation

**📋 Description:**  
The user inputs three grades and their corresponding weights. The program calculates the weighted average and prints the final grade.

### 🔹 Version 0.1
- Basic implementation using direct input and calculation.
- No input checks.

### 🔹 Version 0.2
- Validates grades (0–10) and weights (1–5).
- Displays the final grade with two decimal precision.

### 🔹 Version 0.3
- Refactored with separate functions for input, validation, and calculation.
- Handles invalid input more gracefully and improves code structure.

---

## 💻 How to Run

Make sure you have PHP installed. Then, run any version using the terminal:

```bash
php Version_X.X.php
