# 💰 Shared Expense Tracker - TDD Practice

A **simple TDD practice project** implementing basic domain logic for shared expense tracking using PHP and Pest testing framework.

---

## 🎯 Project Overview

This is a **small TDD exercise** focused on learning test-driven development with three domain classes and their corresponding unit tests.

### The Problem
When friends share expenses, who owes what to whom? This project implements the core domain logic to track expenses and calculate debts.

### Learning Objectives
- ✅ Master the **Red-Green-Refactor** TDD cycle
- ✅ Write tests before implementing code
- ✅ Use Pest PHP for expressive unit testing
- ✅ Practice domain-driven design principles

---

## 🛠 Technologies Used

- **PHP** - Programming language
- **Pest PHP** - Testing framework
- **Composer** - Dependency management

---

## 🚀 Getting Started

### Prerequisites
- PHP 8.1 or higher
- Composer

### Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd expenses
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Run tests**
   ```bash
   ./vendor/bin/pest
   ```

---

## 🏗 Project Structure

### Domain Classes
- `app/Domain/Person.php` - Represents a person who can have expenses
- `app/Domain/Expense.php` - Represents a shared expense
- `app/Domain/ExpenseGroup.php` - Groups expenses and calculates debts

### Unit Tests
- `tests/Unit/PersonTest.php` - Tests for Person class
- `tests/Unit/ExpenseTest.php` - Tests for Expense class
- `tests/Unit/ExpenseGroupTest.php` - Tests for ExpenseGroup class

---

## 🧪 TDD Approach

This project follows the **Red-Green-Refactor** cycle:

1. **🔴 Red**: Write a failing test first
2. **🟢 Green**: Write minimal code to make the test pass
3. **♻️ Refactor**: Clean up code while keeping tests green

### Running Tests

```bash
# Run all tests
./vendor/bin/pest

# Run with coverage
./vendor/bin/pest --coverage

# Run specific test
./vendor/bin/pest tests/Unit/PersonTest.php
```

---

## 📚 Learning Resources

- [Pest PHP Documentation](https://pestphp.com/)
- [Test-Driven Development by Example - Kent Beck](https://www.amazon.com/Test-Driven-Development-Kent-Beck/dp/0321146530)
- [PHP Testing Basics](https://phpunit.de/documentation.html)

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
