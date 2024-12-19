# Laravel Expense Tracker

A Laravel-based web application for tracking and managing expenses. This app provides features for creating, viewing, editing, and deleting expenses, with categorized monthly summaries to analyze spending patterns.

## Features

-   **Data Visualization**: Analyze expenses grouped by month and category for the current year.
-   **Expenses Summary**: View an index of all expenses.
-   **Custom Log Service**: Log critical actions such as creating, editing, or deleting expenses.
-   **Authentication**: Restrict access to expense management features to authenticated users only.

## Application Routes

### Web Routes

-   **`GET /`**: Displays a list of all expenses with categorized monthly summaries.
-   **`GET /expenses/create`**: Form to create a new expense.
-   **`POST /expenses`**: Save a new expense to the database.
-   **`GET /expenses/{expense}/edit`**: Form to edit an existing expense.
-   **`PUT /expenses/{expense}`**: Update the details of an expense.
-   **`DELETE /expenses/{expense}`**: Delete an expense.

## Screenshots

![Screenshot 1](screenshots/login.png)
![Screenshot 2](screenshots/expenses.png)
![Screenshot 3](screenshots/logs.png)
