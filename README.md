# 🧠 Math Challenge PHP Scripts

This repository contains PHP scripts that solve three different programming challenges. Each challenge is implemented in multiple versions to demonstrate the step-by-step development process and improvements over time.

---

## 🧮 Activity A: Weighted Grade Computation

**📋 Description:**  
The user inputs four grades and their corresponding weights. The program calculates the weighted average and prints the final grade.

### 🔹 Version 0.1
- Basic implementation using direct input and calculation.
- No input checks.

**How works:**
- The program reads 8 inputs (grade followed by its weight).
- Calculates the weighted average.
- Displays the result of the calculation (one decimal precision).

**Input exemple:**

10 (Grade)\
3 (Weight)\
10\
4\
...

### 🔹 Version 0.2
- Code improved using a while loop.

### 🔹 Version 0.3
- Refactored with separate functions for input, validation, and calculation.
- It is now possible to calculate the grade for multiple students, and also to separate them by name.

**How works:**
- Read the first input, which is the number of students.
- Then, the program reads 2 inputs: their name and the number of grades.
- Next, the program reads 8 inputs (a grade followed by its weight, repeated 4 times).
- It calculates the weighted average.
- The result is displayed with one decimal place.
- If there are more students, the program returns to the beginning.

**Input exemple:**
2 (Number of students)\
Alex 1 (Student name and number of grades)\
5 (Grade)\
3 (Weight)\
7\
4\
10\
3\
9\
4\
Ana 2\
10\
3\
10\
4\
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
