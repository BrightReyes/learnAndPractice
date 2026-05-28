# 2-WEEK JAVA SOFTWARE ENGINEER INTERN PREPARATION REVIEWER

For a 3rd-year BSIT student preparing for a software engineering internship in the Philippines.

Assumption: You can already build projects with AI assistance, understand basic system flow, and can explain what an app is supposed to do. Your current goal is to become more confident writing Java manually, debugging independently, explaining fundamentals, using Java frameworks, and understanding how real software systems connect.

Use this reviewer for exactly 14 days. Each day is designed for 2 hours.

---

## How To Use This Reviewer

- Study actively: write small code, trace outputs, draw flows, and explain concepts out loud.
- Do not memorize syntax only. Understand what happens in memory, in the server, in the database, and across the network.
- Use AI as a tutor, not as autopilot. Ask it why Java code works, then rewrite the code manually.
- Every day, spend the last minutes answering interview-style questions without looking.

## Java Framework Target

Focus on this Java stack because it is practical for internships:

- Core Java: syntax, OOP, collections, exceptions, files, streams basics
- Maven or Gradle: dependency and build management
- Spring Boot: Java backend framework for REST APIs
- Spring Web: controllers, routes, HTTP request/response
- Spring Data JPA: database access using repositories and entities
- Hibernate: ORM used under Spring Data JPA
- MySQL or PostgreSQL: relational database
- Spring Security + JWT: login, authentication, authorization
- JUnit + Mockito basics: testing services and controllers

Framework mental model:

```text
Java class
-> Spring annotation tells framework its role
-> Spring creates and manages object
-> HTTP request enters controller
-> Service handles business logic
-> Repository talks to database
-> Entity maps to table
-> JSON response returns to frontend
```

---

# Day 1 - Programming Fundamentals, Variables, Data Types, Conditions

## 2-Hour Breakdown

- 0:00-0:20 - Program execution and mental model
- 0:20-0:45 - Variables and data types
- 0:45-1:15 - Conditional statements
- 1:15-1:45 - Manual coding drills
- 1:45-2:00 - Interview explanation practice

## Programming Fundamentals

### What It Is

Programming fundamentals are the basic concepts used to tell a computer what to do: input, processing, output, variables, decisions, repetition, functions, and data structures.

### How It Works Internally

A program is translated by a compiler or interpreter into instructions the computer can execute. The CPU executes instructions, memory stores values, and the operating system manages files, processes, and network access.

Flow:

```text
Source code -> Compiler/interpreter -> Machine/runtime instructions -> CPU + memory -> Output
```

### Why It Is Important

Interns are expected to understand why their code works, not only copy code. Fundamentals help you debug, read codebases, and explain solutions during interviews.

### When It Is Used

Every time you build login, checkout, search, reports, dashboards, forms, APIs, or database logic.

### Where It Is Used In Real Apps

- Facebook: deciding which posts to show
- Banking app: validating transfers
- E-commerce: calculating totals and discounts
- Emergency app: routing reports by location and priority

### Real-Life Example

An inventory system receives item quantity, checks if stock is available, subtracts sold quantity, and saves the result.

### Common Beginner Mistakes

- Copying code without tracing it
- Not knowing the difference between input, process, and output
- Forgetting edge cases
- Assuming code works because it compiles

### Connection To Other Technologies

Programming fundamentals are the base of APIs, backend services, frontend logic, database queries, authentication, and deployment scripts.

## Variables

### What It Is

A variable is a named storage location for a value.

### How It Works Internally

The program reserves memory for the value. The variable name points to that memory or references an object stored elsewhere.

```java
int age = 20;
String name = "Ana";
```

### Why It Is Important

Variables hold user input, database results, API responses, session data, and temporary calculations.

### When It Is Used

Use variables when data needs to be stored, reused, compared, transformed, or passed to another method.

### Where It Is Used In Real Apps

- `userId` in a login session
- `totalAmount` in checkout
- `accountBalance` in banking
- `latitude` and `longitude` in emergency reporting

### Real-Life Example

In a banking transfer:

```java
BigDecimal balance = new BigDecimal("5000");
BigDecimal transferAmount = new BigDecimal("1200");
BigDecimal remainingBalance = balance.subtract(transferAmount);
```

### Common Beginner Mistakes

- Using unclear names like `x`, `data`, or `temp`
- Reusing one variable for unrelated meanings
- Choosing the wrong type, like `int` for money
- Forgetting that strings and numbers behave differently

### Connection To Other Technologies

Variables store HTTP request data, JSON fields, SQL query results, and environment variable values.

## Data Types

### What It Is

Data types define what kind of value a variable can store.

Common types:

- `int` - whole numbers
- `double` / `BigDecimal` - numbers with decimals
- `boolean` - true or false
- `char` - single character
- `String` - text
- `LocalDateTime` - date and time

### How It Works Internally

Types tell the runtime how much memory to allocate and what operations are allowed. An `int` can be added. A `String` can be concatenated. A `boolean` controls decisions.

### Why It Is Important

Wrong data types cause bugs, wrong calculations, invalid database values, and failed API responses.

### When It Is Used

When defining variables, model classes, database columns, request bodies, and response objects.

### Where It Is Used In Real Apps

- `BigDecimal` for prices
- `boolean` for `isVerified`
- `LocalDateTime` for `createdAt`
- `String` for email addresses

### Real-Life Example

```java
String email = "student@example.com";
boolean isVerified = false;
BigDecimal price = new BigDecimal("499.99");
LocalDateTime createdAt = LocalDateTime.now();
```

### Common Beginner Mistakes

- Using `double` for money instead of `BigDecimal`
- Storing dates as plain strings
- Not checking for `null`
- Comparing strings without considering casing

### Connection To Other Technologies

Data types map to SQL column types, JSON fields, API DTOs, and frontend form values.

## Conditional Statements

### What It Is

Conditional statements let code choose different paths based on true or false conditions.

### How It Works Internally

The program evaluates a condition. If the condition is true, it executes one block. Otherwise, it executes another block.

```text
Condition -> true -> run A
Condition -> false -> run B
```

### Why It Is Important

Most business rules are conditions: login allowed or denied, payment approved or rejected, item available or out of stock.

### When It Is Used

Use conditions for validation, permissions, error handling, business rules, and UI state.

### Where It Is Used In Real Apps

- Facebook: if user is friends with another user, show private posts
- Banking: if balance is enough, allow transfer
- E-commerce: if stock is zero, disable checkout

### Real-Life Example

```java
BigDecimal balance = new BigDecimal("1000");
BigDecimal amount = new BigDecimal("1200");

if (amount.compareTo(balance) <= 0) {
    System.out.println("Transfer successful");
}
else {
    System.out.println("Insufficient balance");
}
```

### Common Beginner Mistakes

- Using `=` instead of comparison operators in languages where that matters
- Writing conditions that are always true
- Forgetting `else` cases
- Not handling invalid input

### Connection To Other Technologies

Conditions control API responses, database updates, authentication checks, and frontend rendering.

## Day 1 Practicec DONE
Write a simple Java console program that asks for a product price and stock count. If stock is available, print the total cost. If not, print an out-of-stock message.

import java.util.Scanner;
public class day1Practice {
    public static void main (String[] args){
        Scanner scanner = new Scanner(System.in);
        System.out.print("Enter product stock: ");
        double stock = scanner.nextDouble();

        System.out.print("Enter product price: ");
        double price = scanner.nextDouble();

        if (stock > 0 ){
            double totalValue = stock * price;
            System.out.println("Total value of the product in stock: " + totalValue);

        }
        else {
            System.out.println("Product is out of stock.");
        }


    }
}
---

# Day 2 - Loops, Methods, Arrays, ArrayLists

## 2-Hour Breakdown

- 0:00-0:25 - Loops
- 0:25-0:55 - Java methods
- 0:55-1:25 - Arrays and ArrayLists
- 1:25-1:50 - Inventory coding drill
- 1:50-2:00 - Explain code without looking

## Loops

### What It Is

Loops repeat code while a condition is true or while items remain in a collection.

### How It Works Internally

The program checks a condition, runs the loop body, updates a value, then checks again.

```text
Initialize -> Check condition -> Run block -> Update -> Repeat or stop
```

### Why It Is Important

Applications often process many users, orders, messages, products, logs, or database records.

### When It Is Used

Use loops when doing repeated tasks: listing records, validating items, calculating totals, or retrying operations.

### Where It Is Used In Real Apps

- E-commerce: loop through cart items
- Banking: loop through transaction history
- Facebook: loop through posts in a feed
- Emergency app: loop through nearby responders

### Real-Life Example

```java
BigDecimal total = BigDecimal.ZERO;
BigDecimal[] prices = {
    new BigDecimal("100"),
    new BigDecimal("250"),
    new BigDecimal("50")
};

for (BigDecimal price : prices) {
    total = total.add(price);
}

System.out.println(total);
```

### Common Beginner Mistakes

- Infinite loops
- Off-by-one errors
- Modifying a collection incorrectly while looping
- Using loops when a simple query or built-in method is clearer

### Connection To Other Technologies

Loops process JSON arrays, database rows, API results, frontend list rendering, and batch jobs.

## Java Methods

### What It Is

A method is a reusable block of code that belongs to a class and performs a specific task. In Java, almost all executable code lives inside methods.

### How It Works Internally

When called, the program jumps to the method, passes arguments, runs the code, optionally returns a value, then goes back to where it was called.

```text
Caller -> Method(arguments) -> Process -> Return value -> Caller continues
```

### Why It Is Important

Methods reduce duplication, organize code, and make debugging easier.

### When It Is Used

Use methods when logic is repeated, has a clear purpose, or needs testing separately.

### Where It Is Used In Real Apps

- `ValidateLogin()`
- `CalculateCartTotal()`
- `SendEmailNotification()`
- `GetUserById()`

### Real-Life Example

```java
static BigDecimal calculateTotal(BigDecimal price, int quantity) {
    return price.multiply(BigDecimal.valueOf(quantity));
}
```

### Common Beginner Mistakes

- Making methods too long
- Naming methods vaguely
- Mixing unrelated tasks in one method
- Forgetting return values

### Connection To Other Technologies

Backend controllers, services, repositories, middleware, and frontend components are all organized using method-like units.

## Arrays And ArrayLists

### What It Is

An array stores multiple values of the same type in fixed-size order. An `ArrayList<T>` stores multiple objects dynamically and can grow or shrink.

### How It Works Internally

Arrays store values in indexed memory positions. `ArrayList` manages an internal array and resizes when needed.

```java
int[] scores = { 90, 85, 88 };
ArrayList<String> products = new ArrayList<>();
products.add("Keyboard");
```

### Why It Is Important

Apps rarely handle only one item. They manage lists of users, orders, products, messages, and alerts.

### When It Is Used

Use arrays for fixed-size collections. Use `ArrayList<T>` when items can grow or shrink.

### Where It Is Used In Real Apps

- Shopping cart items
- Notification lists
- Inventory products
- Comment threads

### Real-Life Example

```java
ArrayList<String> cart = new ArrayList<>();
cart.add("Mouse");
cart.add("Keyboard");

for (String item : cart) {
    System.out.println(item);
}
```

### Common Beginner Mistakes

- Accessing an invalid index
- Forgetting indexes start at 0
- Using raw `ArrayList` instead of `ArrayList<String>` or another generic type
- Storing mixed types without a good reason

### Connection To Other Technologies

Arrays and lists become JSON arrays, database result lists, frontend rendered rows, and API response collections.

## Day 2 Practice

Create a small inventory list. Add products, loop through them, and create a function that prints low-stock items.

---

# Day 3 - OOP, Classes, Objects, Encapsulation

## 2-Hour Breakdown

- 0:00-0:20 - Why OOP exists
- 0:20-0:50 - Classes and objects
- 0:50-1:20 - Encapsulation
- 1:20-1:50 - Java model practice
- 1:50-2:00 - Interview explanation practice

## Object-Oriented Programming

### What It Is

OOP is a programming style that organizes code around objects: data plus behavior.

### How It Works Internally

A class defines the structure. An object is an instance created in memory. Methods operate on object data.

```text
Class blueprint -> Object in memory -> Properties + methods
```

### Why It Is Important

Most backend/fullstack systems use classes for models, services, controllers, request DTOs, and database entities.

### When It Is Used

Use OOP when modeling real-world concepts like users, products, orders, reports, and payments.

### Where It Is Used In Real Apps

- `User` object in authentication
- `Order` object in e-commerce
- `Account` object in banking
- `IncidentReport` object in emergency systems

### Real-Life Example

```java
public class Product {
    private String name;
    private BigDecimal price;

    public Product(String name, BigDecimal price) {
        this.name = name;
        this.price = price;
    }

    public String getName() {
        return name;
    }

    public BigDecimal getPrice() {
        return price;
    }
}

Product item = new Product("Laptop", new BigDecimal("35000"));
```

### Common Beginner Mistakes

- Creating classes without clear responsibility
- Putting all logic in one class
- Confusing class and object
- Exposing all data without validation

### Connection To Other Technologies

OOP models often map to database tables, JSON request bodies, API responses, and frontend types.

## Classes And Objects

### What It Is

A class is a blueprint. An object is a real instance created from that blueprint.

### How It Works Internally

When `new` is used, memory is allocated for object fields. The reference variable points to that object.

### Why It Is Important

Classes make code easier to organize and understand in large systems.

### When It Is Used

Use classes for entities, services, controllers, helpers, and configuration objects.

### Where It Is Used In Real Apps

- `Customer` class in banking
- `Post` class in Facebook-like systems
- `Product` class in inventory

### Real-Life Example

```java
public class User {
    private int id;
    private String email;

    public User(int id, String email) {
        this.id = id;
        this.email = email;
    }

    public int getId() {
        return id;
    }

    public String getEmail() {
        return email;
    }
}
```

### Common Beginner Mistakes

- Using static methods for everything
- Making classes too broad
- Not initializing object values
- Confusing property names with database column names

### Connection To Other Technologies

ORMs like Hibernate and Spring Data JPA use classes to represent database tables.

## Encapsulation

### What It Is

Encapsulation means hiding internal data and controlling access through methods or properties.

### How It Works Internally

Private fields cannot be accessed directly outside the class. Public methods validate and control changes.

### Why It Is Important

It protects data from invalid changes.

### When It Is Used

Use encapsulation when business rules must be enforced.

### Where It Is Used In Real Apps

- Bank account balance should not be changed directly
- Order status should follow valid transitions
- Password should not be exposed

### Real-Life Example

```java
public class BankAccount {
    private BigDecimal balance = BigDecimal.ZERO;

    public void deposit(BigDecimal amount) {
        if (amount.compareTo(BigDecimal.ZERO) <= 0) {
            return;
        }
        balance = balance.add(amount);
    }

    public BigDecimal getBalance() {
        return balance;
    }
}
```

### Common Beginner Mistakes

- Making all fields public
- Skipping validation
- Exposing sensitive data
- Adding setters where values should be protected

### Connection To Other Technologies

Encapsulation supports secure APIs, domain models, validation layers, and database integrity.

## Day 3 Practice

Create classes for `User`, `Product`, and `Order`. Add methods that calculate total and prevent invalid quantity.

---

# Day 4 - Inheritance, Polymorphism, Abstraction

## 2-Hour Breakdown

- 0:00-0:30 - Inheritance
- 0:30-1:00 - Polymorphism
- 1:00-1:30 - Abstraction
- 1:30-1:50 - OOP refactoring drill
- 1:50-2:00 - Explain with examples

## Inheritance

### What It Is

Inheritance lets one class reuse or extend another class.

### How It Works Internally

A child class receives accessible members from a parent class. The runtime treats the child as a specialized version of the parent.

### Why It Is Important

It reduces duplication when classes share common behavior.

### When It Is Used

Use inheritance for true "is-a" relationships.

### Where It Is Used In Real Apps

- `AdminUser` is a `User`
- `CreditCardPayment` is a `Payment`
- `EmergencyAlert` is a `Notification`

### Real-Life Example

```java
public class User {
    protected String email;
}

public class AdminUser extends User {
    private boolean canManageUsers;
}
```

### Common Beginner Mistakes

- Using inheritance for code reuse when composition is better
- Creating deep inheritance chains
- Overriding behavior without understanding parent behavior
- Confusing "has-a" with "is-a"

### Connection To Other Technologies

Framework classes, controllers, exceptions, and UI components often use inheritance.

## Polymorphism

### What It Is

Polymorphism means one interface or parent type can have different implementations.

### How It Works Internally

The runtime chooses the correct overridden method based on the actual object type.

### Why It Is Important

It allows flexible systems where new behavior can be added without rewriting every caller.

### When It Is Used

Use polymorphism when multiple classes perform the same action differently.

### Where It Is Used In Real Apps

- Payment methods: GCash, card, bank transfer
- Notifications: email, SMS, push
- Login providers: Google, Facebook, local account

### Real-Life Example

```java
public abstract class Payment {
    public abstract void pay(BigDecimal amount);
}

public class CardPayment extends Payment {
    @Override
    public void pay(BigDecimal amount) {
        System.out.println("Paid by card");
    }
}
```

### Common Beginner Mistakes

- Using many `if` statements instead of polymorphism
- Not understanding `override`
- Making base classes too specific
- Overengineering small programs

### Connection To Other Technologies

Polymorphism powers dependency injection, plugin systems, service interfaces, and test mocks.

## Abstraction

### What It Is

Abstraction hides complex details and exposes only what is needed.

### How It Works Internally

Interfaces and abstract classes define contracts. Concrete classes implement the details.

### Why It Is Important

It lets developers work with high-level behavior without depending on implementation details.

### When It Is Used

Use abstraction when many implementations should follow the same contract.

### Where It Is Used In Real Apps

- `EmailSender`
- `PaymentService`
- `UserRepository`
- `NotificationService`

### Real-Life Example

```java
public interface NotificationService {
    void send(String message);
}
```

### Common Beginner Mistakes

- Creating interfaces too early
- Making abstractions that only have one unclear implementation
- Not naming interfaces clearly
- Thinking abstraction means vague code

### Connection To Other Technologies

Abstraction connects to clean architecture, testing, dependency injection, and maintainable backend services.

## Day 4 Practice

Create an abstract `Notification` class. Implement `EmailNotification` and `SmsNotification`. Call both through the parent type.

---

# Day 5 - Data Structures: HashMaps, Stacks, Queues

## 2-Hour Breakdown

- 0:00-0:35 - HashMaps
- 0:35-1:05 - Stacks
- 1:05-1:35 - Queues
- 1:35-1:55 - Real app scenarios
- 1:55-2:00 - Quick recall

## HashMaps

### What It Is

A `HashMap<K, V>` stores key-value pairs in Java.

### How It Works Internally

The key is passed through a hash function that decides where the value is stored. Lookup is usually very fast.

```java
HashMap<Integer, String> users = new HashMap<>();
users.put(1, "Ana");
```

### Why It Is Important

HashMaps make lookups faster than searching a list one by one.

### When It Is Used

Use when you need to find values by unique keys.

### Where It Is Used In Real Apps

- User cache by `userId`
- Product stock by `productId`
- Session tokens by token ID
- Error messages by error code

### Real-Life Example

```java
HashMap<String, Integer> stock = new HashMap<>();
stock.put("SKU-001", 25);
System.out.println(stock.get("SKU-001"));
```

### Common Beginner Mistakes

- Accessing a missing key without checking
- Using non-unique keys
- Thinking `HashMap` preserves meaningful order
- Storing too much unrelated data in one dictionary

### Connection To Other Technologies

HashMaps relate to JSON objects, caches, indexes, request headers, and configuration maps.

## Stacks

### What It Is

A stack is a Last-In, First-Out structure.

### How It Works Internally

The last item pushed is the first item popped.

```text
push A -> push B -> pop returns B
```

### Why It Is Important

Stacks model undo, backtracking, function calls, and stack traces.

### When It Is Used

Use stacks when the most recent item must be processed first.

### Where It Is Used In Real Apps

- Browser back button
- Undo in editors
- Function call stack
- Parsing expressions

### Real-Life Example

```java
Stack<String> pages = new Stack<>();
pages.push("Home");
pages.push("Product");
System.out.println(pages.pop());
```

### Common Beginner Mistakes

- Confusing stack with queue
- Popping from an empty stack
- Using stack when order should be first-in, first-out

### Connection To Other Technologies

Stack traces in debugging show nested method calls using stack behavior.

## Queues

### What It Is

A queue is a First-In, First-Out structure.

### How It Works Internally

The first item enqueued is the first item dequeued.

### Why It Is Important

Queues manage tasks fairly and in order.

### When It Is Used

Use queues for background jobs, notifications, order processing, and support tickets.

### Where It Is Used In Real Apps

- Email sending queue
- Emergency dispatch queue
- Bank customer queue
- Order fulfillment queue

### Real-Life Example

```java
Queue<String> tickets = new LinkedList<>();
tickets.add("Ticket-1");
tickets.add("Ticket-2");
System.out.println(tickets.remove());
```

### Common Beginner Mistakes

- Expecting newest item first
- Not checking if the queue is empty
- Using simple queues for priority-based problems

### Connection To Other Technologies

Queues connect to message brokers, background workers, async processing, and scalable backend systems.

## Day 5 Practice

Build a console-based support ticket queue and a `HashMap` that stores ticket priority by ticket ID.

---

# Day 6 - Databases, SQL, CRUD, Keys

## 2-Hour Breakdown

- 0:00-0:25 - What databases are
- 0:25-0:55 - SQL basics
- 0:55-1:25 - CRUD operations
- 1:25-1:50 - Primary and foreign keys
- 1:50-2:00 - Database interview practice

## Databases

### What It Is

A database stores organized data so applications can create, read, update, and delete information reliably.

### How It Works Internally

Data is stored in tables, rows, and columns. The database engine handles storage, indexing, transactions, permissions, and query execution.

```text
Application -> SQL query -> Database engine -> Tables/indexes -> Result
```

### Why It Is Important

Most real applications need persistent data. Without a database, data disappears when the app stops.

### When It Is Used

Use databases for users, orders, products, payments, messages, records, and logs.

### Where It Is Used In Real Apps

- Facebook stores users, posts, comments, friendships
- Banking systems store accounts and transactions
- Inventory systems store products and stock movements
- Emergency apps store reports and responder assignments

### Real-Life Example

An e-commerce app saves every order so users can view order history later.

### Common Beginner Mistakes

- Treating the database like a spreadsheet only
- Not using keys
- Storing duplicate inconsistent data
- Not validating data before saving

### Connection To Other Technologies

Databases connect to backend APIs, ORMs, authentication systems, reports, dashboards, and deployment configuration.

## SQL

### What It Is

SQL is the language used to communicate with relational databases.

### How It Works Internally

The database parses the SQL, creates an execution plan, reads or modifies data, then returns results.

### Why It Is Important

Backend developers must understand how data is retrieved and changed, even when using an ORM.

### When It Is Used

Use SQL to query, insert, update, delete, filter, sort, join, and aggregate data.

### Where It Is Used In Real Apps

- Admin dashboards
- Reports
- Search filters
- Login checks
- Inventory updates

### Real-Life Example

```sql
SELECT id, name, price
FROM products
WHERE stock > 0
ORDER BY name;
```

### Common Beginner Mistakes

- Forgetting `WHERE` in `UPDATE` or `DELETE`
- Selecting all columns unnecessarily
- Not understanding null values
- Writing unsafe dynamic SQL

### Connection To Other Technologies

SQL powers backend repositories, analytics, admin panels, API endpoints, and data migrations.

## CRUD Operations

### What It Is

CRUD means Create, Read, Update, Delete.

### How It Works Internally

Each operation maps to database commands and often to API endpoints.

```text
Create -> INSERT
Read -> SELECT
Update -> UPDATE
Delete -> DELETE
```

### Why It Is Important

Most business applications are CRUD-heavy.

### When It Is Used

Use CRUD for users, products, tasks, orders, posts, comments, tickets, and records.

### Where It Is Used In Real Apps

- Inventory: add, view, edit, delete product
- Facebook: create, read, edit, delete post
- Banking: create transaction, read balance, update account info

### Real-Life Example

```sql
INSERT INTO products (name, price, stock)
VALUES ('Keyboard', 950.00, 20);

SELECT * FROM products;

UPDATE products
SET stock = 19
WHERE id = 1;

DELETE FROM products
WHERE id = 1;
```

### Common Beginner Mistakes

- Not validating inputs
- Deleting permanently without confirmation
- Forgetting transactions for critical changes
- Not checking affected rows

### Connection To Other Technologies

CRUD maps directly to REST APIs, frontend forms, controllers, services, and database tables.

## Primary And Foreign Keys

### What It Is

A primary key uniquely identifies a row. A foreign key links one table to another.

### How It Works Internally

The database enforces uniqueness for primary keys and relationship integrity for foreign keys.

### Why It Is Important

Keys prevent confusion and maintain relationships between records.

### When It Is Used

Use keys whenever records need identity or relationships.

### Where It Is Used In Real Apps

- `orders.user_id` links orders to users
- `order_items.product_id` links items to products
- `transactions.account_id` links transactions to accounts

### Real-Life Example

```sql
CREATE TABLE users (
    id INT PRIMARY KEY,
    email VARCHAR(255) NOT NULL
);

CREATE TABLE orders (
    id INT PRIMARY KEY,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);
```

### Common Beginner Mistakes

- Not adding primary keys
- Using names as keys
- Ignoring foreign key constraints
- Deleting parent records without handling children

### Connection To Other Technologies

Keys connect database design to API routes, ORM relationships, authorization, and report queries.

## Day 6 Practice

Design tables for an inventory system: `users`, `products`, `orders`, and `order_items`. Identify primary and foreign keys.

---

# Day 7 - JOINS, Database Design, Backend Data Flow

## 2-Hour Breakdown

- 0:00-0:35 - JOINS
- 0:35-1:05 - Normalization and relationships
- 1:05-1:25 - Backend database flow
- 1:25-1:45 - Spring Data JPA and repositories
- 1:45-1:55 - SQL practice
- 1:55-2:00 - Explain query results

## JOINS

### What It Is

A JOIN combines rows from related tables.

### How It Works Internally

The database matches rows using related keys, then returns combined result rows.

```text
users.id -> orders.user_id -> combined user order data
```

### Why It Is Important

Real data is split across tables to avoid duplication. Joins bring related data together.

### When It Is Used

Use joins when one screen or report needs data from multiple tables.

### Where It Is Used In Real Apps

- Order history with customer name
- Transaction list with account owner
- Post feed with author profile
- Incident report with responder details

### Real-Life Example

```sql
SELECT users.email, orders.id, orders.created_at
FROM users
INNER JOIN orders ON users.id = orders.user_id;
```

### Common Beginner Mistakes

- Joining on wrong columns
- Forgetting table aliases in complex queries
- Confusing `INNER JOIN` and `LEFT JOIN`
- Creating duplicate rows accidentally

### Connection To Other Technologies

Joins support API response shaping, admin dashboards, reports, and ORM include/loading behavior.

## Database Relationships

### What It Is

Relationships describe how tables connect: one-to-one, one-to-many, and many-to-many.

### How It Works Internally

Relationships are represented by foreign keys and sometimes junction tables.

### Why It Is Important

Good relationships prevent duplicate data and make queries reliable.

### When It Is Used

Use relationships when one entity depends on or belongs to another.

### Where It Is Used In Real Apps

- One user has many orders
- One order has many order items
- Many students can enroll in many subjects

### Real-Life Example

```sql
CREATE TABLE order_items (
    id INT PRIMARY KEY,
    order_id INT,
    product_id INT,
    quantity INT,
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);
```

### Common Beginner Mistakes

- Putting comma-separated IDs in one column
- Duplicating user details inside every order
- Not knowing when to create a junction table
- Designing tables based only on UI forms

### Connection To Other Technologies

Relationships determine API response models, ORM navigation properties, and frontend nested views.

## Backend Data Flow

### What It Is

Backend data flow is how data moves from an API request to business logic to the database and back.

### How It Works Internally

```text
Frontend form
-> HTTP request
-> Backend route/controller
-> Validation
-> Service/business logic
-> Repository/ORM
-> SQL/database
-> Result
-> JSON response
-> Frontend UI update
```

### Why It Is Important

Interns often struggle because they see isolated code files instead of the complete system path.

### When It Is Used

Every time a user logs in, checks out, posts, searches, or updates a profile.

### Where It Is Used In Real Apps

In an e-commerce checkout, the backend validates cart items, checks stock, creates order records, updates stock, and returns confirmation.

### Real-Life Example

```text
Click "Place Order"
-> POST /api/orders
-> OrderController.Create
-> OrderService.CheckStock
-> INSERT orders
-> INSERT order_items
-> UPDATE products.stock
-> Return { orderId, status }
```

### Common Beginner Mistakes

- Putting SQL directly everywhere
- Skipping validation
- Not handling database errors
- Returning sensitive database fields

### Connection To Other Technologies

This flow connects frontend, HTTP, REST APIs, JSON, backend architecture, SQL, authentication, and deployment.

## Spring Data JPA And Repositories

### What It Is

Spring Data JPA is a Java framework layer that helps your backend access relational databases using Java classes and repository interfaces.

### How It Works Internally

An entity class maps to a database table. A repository interface gives methods like `findAll`, `findById`, `save`, and `deleteById`. Hibernate generates and runs SQL behind the scenes.

```text
Product entity -> products table
ProductRepository.save(product) -> INSERT or UPDATE SQL
ProductRepository.findById(1) -> SELECT SQL
```

### Why It Is Important

It lets you build real CRUD APIs faster while still needing to understand SQL, keys, joins, and transactions.

### When It Is Used

Use Spring Data JPA in Java backend apps that store users, products, orders, posts, tickets, or reports in SQL databases.

### Where It Is Used In Real Apps

- Inventory system product repository
- Banking transaction repository
- E-commerce order repository
- Emergency report repository

### Real-Life Example

```java
@Entity
public class Product {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    private String name;
    private BigDecimal price;
    private int stock;
}

public interface ProductRepository extends JpaRepository<Product, Long> {
    Optional<Product> findByName(String name);
}
```

### Common Beginner Mistakes

- Using JPA without understanding the SQL it creates
- Forgetting `@Id`
- Confusing entity classes with request DTOs
- Creating circular JSON responses from relationships

### Connection To Other Technologies

JPA connects Java classes, SQL tables, CRUD APIs, repositories, services, transactions, and database migrations.

## Day 7 Practice

Write a SQL query that shows order ID, customer email, product name, quantity, and total price. Then sketch the matching Java entities: `User`, `Order`, `OrderItem`, and `Product`.

---

# Day 8 - APIs, REST, HTTP Methods, JSON

## 2-Hour Breakdown

- 0:00-0:25 - APIs
- 0:25-0:50 - REST API design
- 0:50-1:15 - Spring Boot REST API pattern
- 1:15-1:35 - HTTP methods and status codes
- 1:35-1:50 - JSON request/response practice
- 1:50-2:00 - Explain request-response lifecycle

## APIs

### What It Is

An API is a contract that lets one software system communicate with another.

### How It Works Internally

A client sends a request to an endpoint. The server processes it and sends a response.

```text
Client -> Request -> API endpoint -> Server logic -> Response -> Client
```

### Why It Is Important

Modern apps separate frontend, backend, mobile apps, third-party services, and databases. APIs connect them.

### When It Is Used

Use APIs when one system needs data or actions from another system.

### Where It Is Used In Real Apps

- Mobile app calls backend API
- Website calls payment gateway
- Emergency app calls maps API
- Banking app calls fraud detection service

### Real-Life Example

A frontend sends login details to `/api/auth/login`, and the backend returns a token.

### Common Beginner Mistakes

- Thinking API means database
- Returning too much data
- Not validating request body
- Ignoring status codes

### Connection To Other Technologies

APIs connect frontend, backend, databases, authentication, middleware, JSON, and deployment.

## REST API

### What It Is

REST is a common style for designing APIs around resources such as users, products, and orders.

### How It Works Internally

REST uses URLs for resources and HTTP methods for actions.

```text
GET /api/products -> list products
POST /api/products -> create product
GET /api/products/1 -> get product 1
PUT /api/products/1 -> update product 1
DELETE /api/products/1 -> delete product 1
```

### Why It Is Important

REST is widely used in internships, school projects, startups, government systems, and enterprise apps.

### When It Is Used

Use REST for standard web/mobile CRUD applications.

### Where It Is Used In Real Apps

- Inventory management APIs
- E-commerce product APIs
- Banking transaction APIs
- Social media post APIs

### Real-Life Example

```text
POST /api/orders
Body: { "productId": 5, "quantity": 2 }
Response: { "orderId": 1001, "status": "Pending" }
```

### Common Beginner Mistakes

- Using verbs in URLs like `/getProducts`
- Using only `POST` for everything
- Not versioning APIs when needed
- Mixing frontend route names with API route names

### Connection To Other Technologies

REST APIs use HTTP, JSON, controllers, middleware, authentication, and database CRUD.

## Spring Boot REST API Pattern

### What It Is

Spring Boot is a Java framework that makes it faster to build production-style backend applications. For internships, the most important use is building REST APIs.

### How It Works Internally

Spring Boot starts an embedded web server, scans annotated classes, creates objects called beans, maps URLs to controller methods, converts JSON to Java objects, calls your service layer, and converts Java objects back to JSON.

```text
Request -> Embedded server -> Spring DispatcherServlet -> Controller -> Service -> Repository -> Database
```

### Why It Is Important

Many Java backend internships use Spring Boot or expect you to understand its structure because it is common in enterprise systems.

### When It Is Used

Use Spring Boot when creating backend APIs for web apps, mobile apps, admin systems, school systems, inventory systems, and banking-style internal tools.

### Where It Is Used In Real Apps

- Product CRUD API
- User login API
- Bank transaction API
- Emergency incident reporting API

### Real-Life Example

```java
@RestController
@RequestMapping("/api/products")
public class ProductController {
    private final ProductService productService;

    public ProductController(ProductService productService) {
        this.productService = productService;
    }

    @GetMapping
    public List<Product> getProducts() {
        return productService.getAllProducts();
    }
}
```

### Common Beginner Mistakes

- Putting all logic inside the controller
- Not understanding annotations like `@RestController`, `@Service`, and `@Repository`
- Returning entity objects with sensitive fields
- Not testing endpoints with Postman, Insomnia, or browser Network tab

### Connection To Other Technologies

Spring Boot connects Java OOP, REST, JSON, HTTP, dependency injection, databases, JPA, authentication, testing, and deployment.

## HTTP Methods

### What It Is

HTTP methods describe what action the client wants.

### How It Works Internally

The server routes requests based on method plus path.

### Why It Is Important

Correct methods make APIs predictable and easier to test.

### When It Is Used

- `GET` - read data
- `POST` - create data
- `PUT` / `PATCH` - update data
- `DELETE` - remove data

### Where It Is Used In Real Apps

Every browser, mobile app, and API client uses HTTP methods.

### Real-Life Example

```text
GET /api/accounts/5/transactions
POST /api/transfers
DELETE /api/cart/items/10
```

### Common Beginner Mistakes

- Sending passwords in query strings
- Using `GET` for actions that modify data
- Ignoring `401`, `403`, `404`, and `500`
- Not testing bad requests

### Connection To Other Technologies

HTTP methods map to controllers, CRUD, middleware, status codes, and frontend API calls.

## JSON

### What It Is

JSON is a lightweight text format for sending structured data.

### How It Works Internally

Objects use key-value pairs. Arrays store ordered lists. Backend frameworks serialize objects to JSON and deserialize JSON into objects.

### Why It Is Important

Most frontend-backend communication uses JSON.

### When It Is Used

Use JSON in API request bodies, responses, configuration, and logs.

### Where It Is Used In Real Apps

- Login response
- Product list response
- Cart request body
- Emergency report payload

### Real-Life Example

```json
{
  "email": "student@example.com",
  "password": "Secret123"
}
```

### Common Beginner Mistakes

- Invalid commas or quotes
- Confusing JSON object with Java object
- Sending wrong field names
- Returning sensitive fields like password hashes

### Connection To Other Technologies

JSON connects frontend JavaScript objects, backend DTOs, API contracts, and database-backed responses.

## Full Request-Response Lifecycle

```text
User clicks button
-> Frontend collects form state
-> Frontend sends HTTP request with JSON
-> Internet/network carries request
-> Server receives request
-> Middleware runs
-> Route/controller matches endpoint
-> Request body is validated
-> Service runs business rules
-> Database query executes
-> Server builds response object
-> Object becomes JSON
-> HTTP response returns with status code
-> Frontend reads response
-> UI updates or shows error
```

## Day 8 Practice

Write sample REST endpoints for an inventory system and identify the HTTP method, request body, response body, and status code.

---

# Day 9 - Authentication, Authorization, JWT, Middleware

## 2-Hour Breakdown

- 0:00-0:30 - Authentication
- 0:30-0:55 - Authorization
- 0:55-1:20 - JWT
- 1:20-1:35 - Spring Security
- 1:35-1:50 - Middleware
- 1:50-2:00 - Security interview practice

## Authentication

### What It Is

Authentication verifies who the user is.

### How It Works Internally

The user sends credentials. The backend checks them against stored user data, usually comparing a password hash, then creates a session or token.

```text
Email/password -> Backend -> Find user -> Verify hash -> Issue token/session
```

### Why It Is Important

Without authentication, anyone could access private accounts and data.

### When It Is Used

Use authentication for login, account access, profile management, banking, admin dashboards, and protected APIs.

### Where It Is Used In Real Apps

- Facebook login
- Online banking login
- School portal login
- Inventory admin login

### Real-Life Example

```text
POST /api/auth/login
-> verify email and password
-> return access token
```

### Common Beginner Mistakes

- Storing plain-text passwords
- Returning password hashes in API responses
- Not handling failed login attempts
- Confusing authentication with authorization

### Connection To Other Technologies

Authentication connects APIs, databases, password hashing, JWT, middleware, cookies, and frontend state.

## Authorization

### What It Is

Authorization checks what an authenticated user is allowed to do.

### How It Works Internally

The backend checks user roles, permissions, ownership, or policies before allowing an action.

```text
Authenticated user -> Check role/permission -> Allow or deny
```

### Why It Is Important

A logged-in user should not automatically access everything.

### When It Is Used

Use authorization for admin pages, ownership checks, payment access, edit/delete restrictions, and reports.

### Where It Is Used In Real Apps

- Only admins can delete users
- Only account owners can view balances
- Only dispatchers can assign emergency responders

### Real-Life Example

```text
User Ana logs in
-> Ana requests DELETE /api/users/5
-> Backend checks if Ana is Admin
-> If not admin, return 403 Forbidden
```

### Common Beginner Mistakes

- Hiding buttons on frontend but not checking backend
- Using only user ID from request body
- Confusing `401 Unauthorized` and `403 Forbidden`
- Forgetting ownership checks

### Connection To Other Technologies

Authorization uses JWT claims, roles, middleware, database permissions, and route guards.

## JWT

### What It Is

JWT means JSON Web Token. It is a signed token that carries user identity and claims.

### How It Works Internally

A JWT has three parts: header, payload, and signature. The backend signs it using a secret or private key. Later, the server verifies the signature to ensure the token was not changed.

```text
header.payload.signature
```

### Why It Is Important

JWT is common for stateless authentication in APIs.

### When It Is Used

Use JWT for web apps, mobile apps, and APIs where the frontend sends a bearer token.

### Where It Is Used In Real Apps

- React frontend calling a Spring Boot Java backend
- Mobile app accessing user profile API
- Admin dashboard with protected routes

### Real-Life Example

```text
Authorization: Bearer eyJhbGciOi...
```

### Common Beginner Mistakes

- Storing sensitive data inside JWT payload
- Using weak secrets
- Not setting expiration
- Not validating issuer/audience when required

### Connection To Other Technologies

JWT connects login APIs, middleware, authorization policies, frontend storage, and protected endpoints.

## Spring Security

### What It Is

Spring Security is the main security framework for Java Spring Boot applications.

### How It Works Internally

Requests pass through a security filter chain before reaching controllers. The filters can check JWT tokens, load user details, verify roles, and reject unauthorized requests.

```text
Request
-> Security filter chain
-> JWT filter
-> User/roles loaded
-> Controller allowed or blocked
```

### Why It Is Important

Real Java backend systems rarely implement security from zero. They use a framework so authentication and authorization are consistent.

### When It Is Used

Use Spring Security when building login, protected APIs, role-based dashboards, admin features, and user-owned resources.

### Where It Is Used In Real Apps

- Admin inventory dashboard
- Online banking protected account APIs
- Emergency dispatcher-only assignment endpoints
- E-commerce user order history

### Real-Life Example

```java
@PreAuthorize("hasRole('ADMIN')")
@DeleteMapping("/{id}")
public ResponseEntity<Void> deleteProduct(@PathVariable Long id) {
    productService.deleteProduct(id);
    return ResponseEntity.noContent().build();
}
```

### Common Beginner Mistakes

- Only hiding buttons on the frontend
- Not understanding filter order
- Forgetting password hashing
- Not separating login DTOs from user entities

### Connection To Other Technologies

Spring Security connects JWT, middleware/filter chains, roles, password hashing, controllers, frontend route guards, and database users.

## Middleware

### What It Is

Middleware is code that runs during the request-response pipeline before or after controllers.

### How It Works Internally

Each middleware receives the request, does work, then passes it to the next middleware or stops the request.

```text
Request -> Logging -> CORS -> Auth -> Controller -> Response
```

### Why It Is Important

Middleware centralizes cross-cutting concerns like logging, authentication, error handling, and CORS.

### When It Is Used

Use middleware for tasks that should apply to many routes.

### Where It Is Used In Real Apps

- Check JWT before protected API
- Log every request
- Convert errors to JSON responses
- Allow frontend domain through CORS

### Real-Life Example

An auth middleware reads the `Authorization` header, validates the JWT, and attaches the user ID to the request context.

### Common Beginner Mistakes

- Putting business logic in middleware
- Incorrect middleware order
- Not calling the next middleware
- Handling errors inconsistently

### Connection To Other Technologies

Middleware connects HTTP, authentication, authorization, logging, error handling, controllers, and deployment settings.

## Day 9 Practice

Draw the flow for login and accessing a protected `/api/orders` endpoint using JWT.

---

# Day 10 - Frontend-Backend Communication, MVC, System Flow

## 2-Hour Breakdown

- 0:00-0:35 - Frontend and backend communication
- 0:35-0:55 - MVC architecture
- 0:55-1:15 - Spring MVC layering
- 1:15-1:40 - Complete system flow
- 1:40-1:55 - Debugging flow practice
- 1:55-2:00 - Interview explanation

## Frontend And Backend Communication

### What It Is

Frontend-backend communication is how the user interface sends requests to the server and receives data.

### How It Works Internally

The frontend uses `fetch`, Axios, or a client library to send HTTP requests. The backend receives requests, runs logic, talks to the database, and returns JSON.

```text
Browser UI -> fetch/Axios -> REST API -> Database -> JSON -> Browser UI
```

### Why It Is Important

Fullstack interns must know where data comes from and why UI bugs may actually be backend or database issues.

### When It Is Used

Every time the UI loads data, submits a form, logs in, searches, filters, uploads, or deletes.

### Where It Is Used In Real Apps

- Facebook loads posts from backend
- Banking app shows balance from backend
- E-commerce checkout posts order to backend
- Emergency app sends location report to backend

### Real-Life Example

```javascript
fetch("/api/products")
  .then(response => response.json())
  .then(products => console.log(products));
```

### Common Beginner Mistakes

- Assuming frontend data is automatically saved
- Not checking Network tab
- Ignoring CORS errors
- Not handling loading and error states

### Connection To Other Technologies

This connects HTML/CSS/JS, REST, JSON, controllers, authentication, databases, and deployment.

## MVC Architecture

### What It Is

MVC means Model-View-Controller. It separates data, user interface, and request handling.

### How It Works Internally

```text
View -> Controller -> Model/service/database -> Controller -> View/JSON
```

### Why It Is Important

MVC helps organize applications so code is easier to maintain.

### When It Is Used

Use MVC in web apps, backend APIs, school systems, admin dashboards, and enterprise software.

### Where It Is Used In Real Apps

- Controller receives `/api/products`
- Model represents `Product`
- View displays product list, or API returns JSON

### Real-Life Example

```java
public class Product {
    private Long id;
    private String name;

    public Long getId() {
        return id;
    }

    public String getName() {
        return name;
    }
}

// Controller action concept:
// GET /api/products -> return product list
```

### Common Beginner Mistakes

- Putting database code directly in views
- Putting all business logic in controllers
- Confusing models with database only
- Not separating responsibilities

### Connection To Other Technologies

MVC connects OOP, APIs, database models, frontend views, services, and routing.

## Spring MVC Layering

### What It Is

Spring MVC is the web layer inside Spring Boot that maps HTTP requests to Java controller methods.

### How It Works Internally

Spring uses `DispatcherServlet` as the central request handler. It finds the correct controller method based on route and HTTP method, binds JSON into Java DTOs, calls your code, and serializes the return value to JSON.

```text
HTTP request
-> DispatcherServlet
-> @RestController method
-> @Service
-> @Repository
-> Database
-> JSON response
```

### Why It Is Important

It teaches clean backend structure. Interns often need to know why code is split into controller, service, repository, entity, and DTO.

### When It Is Used

Use Spring MVC for Java REST APIs, server-rendered MVC apps, admin dashboards, and backend systems.

### Where It Is Used In Real Apps

- `AuthController` for login
- `ProductController` for inventory CRUD
- `OrderController` for checkout
- `ReportController` for emergency reports

### Real-Life Example

```java
@PostMapping
public ResponseEntity<ProductResponse> createProduct(@RequestBody ProductRequest request) {
    ProductResponse created = productService.createProduct(request);
    return ResponseEntity.status(HttpStatus.CREATED).body(created);
}
```

### Common Beginner Mistakes

- Treating controller as the whole backend
- Injecting repositories directly everywhere
- Not using DTOs for request and response data
- Ignoring HTTP status codes

### Connection To Other Technologies

Spring MVC connects REST, HTTP, JSON, validation, services, repositories, authentication middleware, and frontend API calls.

## System Flow

### What It Is

System flow is the complete path of data and control from user action to final result.

### How It Works Internally

Each layer has a responsibility:

- Frontend: collect input and display output
- API/controller: receive request and return response
- Service: apply business rules
- Database: persist and retrieve data

### Why It Is Important

Interviewers like interns who can explain a system end-to-end, not just one code snippet.

### When It Is Used

Use system flow thinking when building, debugging, designing, and presenting projects.

### Where It Is Used In Real Apps

Bank transfer:

```text
User enters amount
-> Frontend validates basic fields
-> POST /api/transfers
-> Auth middleware verifies token
-> Controller receives request
-> Service checks balance and limits
-> Database transaction updates accounts
-> Response returns success/failure
-> Frontend shows result
```

### Real-Life Example

Emergency report:

```text
Citizen submits report
-> API saves report
-> Queue notifies dispatcher
-> Dispatcher assigns responder
-> Responder app receives alert
-> Status updates stored in database
```

### Common Beginner Mistakes

- Not knowing which layer owns which responsibility
- Debugging randomly instead of following the flow
- Trusting frontend validation only
- Forgetting failure paths

### Connection To Other Technologies

System flow combines programming, APIs, auth, middleware, databases, queues, deployment, and debugging.

## Day 10 Practice

Draw the full flow for an online store checkout from button click to database update.

---

# Day 11 - Git, GitHub, Branching, Merging, Workflow

## 2-Hour Breakdown

- 0:00-0:25 - Git basics
- 0:25-0:50 - GitHub collaboration
- 0:50-1:20 - Branching and merging
- 1:20-1:35 - Maven or Gradle in Java projects
- 1:35-1:45 - Real workflow practice
- 1:45-2:00 - Internship workflow expectations

## Git And GitHub

### What It Is

Git is a version control system. GitHub is a remote hosting and collaboration platform for Git repositories.

### How It Works Internally

Git stores snapshots of file changes as commits. Branches are movable pointers to commits. GitHub stores remote copies and supports pull requests.

```text
Working directory -> Staging area -> Commit -> Branch -> Remote repository
```

### Why It Is Important

Interns must collaborate safely, track changes, review code, and recover from mistakes.

### When It Is Used

Use Git throughout development: before edits, after small changes, before merging, and during reviews.

### Where It Is Used In Real Apps

- Team features
- Bug fixes
- Code reviews
- Deployment pipelines

### Real-Life Example

```bash
git status
git add .
git commit -m "Add product CRUD"
git push origin feature/product-crud
```

### Common Beginner Mistakes

- Committing huge unrelated changes
- Not reading `git status`
- Pushing secrets
- Working directly on main branch

### Connection To Other Technologies

Git connects with GitHub, CI/CD, deployment, issue tracking, code review, and team workflow.

## Branching And Merging

### What It Is

Branching creates a separate line of work. Merging combines changes back.

### How It Works Internally

A branch points to a commit. When merged, Git combines commit histories and file changes.

### Why It Is Important

Branches let developers work without breaking the main codebase.

### When It Is Used

Use branches for features, bug fixes, experiments, and pull requests.

### Where It Is Used In Real Apps

- `feature/login`
- `bugfix/payment-total`
- `hotfix/security-patch`

### Real-Life Example

```bash
git checkout -b feature/auth
git add .
git commit -m "Implement JWT login"
git push origin feature/auth
```

### Common Beginner Mistakes

- Merging without pulling latest changes
- Ignoring merge conflicts
- Deleting teammate changes accidentally
- Not understanding which branch is active

### Connection To Other Technologies

Branching supports pull requests, code review, testing environments, and deployment releases.

## Real-World Software Engineering Workflow

### What It Is

The workflow is how software teams plan, build, review, test, and deploy changes.

### How It Works Internally

```text
Task ticket
-> Create branch
-> Code locally
-> Run tests
-> Commit
-> Push
-> Pull request
-> Code review
-> Merge
-> Deploy
-> Monitor
```

### Why It Is Important

Interns are judged not only on coding but also on communication, discipline, and ability to work in a team.

### When It Is Used

Daily in professional development.

### Where It Is Used In Real Apps

Product companies, banks, BPO tech teams, startups, government systems, and internal enterprise tools.

### Real-Life Example

You are assigned "Add product search." You create a branch, implement backend filtering, update frontend search UI, test it, open a pull request, respond to comments, and merge after approval.

### Common Beginner Mistakes

- Starting work without understanding the task
- Not asking clarifying questions
- Not testing before pushing
- Poor commit messages

### Connection To Other Technologies

Workflow connects Git, GitHub, issue trackers, testing, CI/CD, deployment, communication, and documentation.

## Maven Or Gradle In Java Projects

### What It Is

Maven and Gradle are Java build tools. They download dependencies, compile code, run tests, package applications, and standardize project structure.

### How It Works Internally

The build tool reads a configuration file, downloads libraries from repositories, compiles `src/main/java`, runs tests from `src/test/java`, and creates a `.jar` file.

```text
pom.xml or build.gradle
-> Download dependencies
-> Compile Java
-> Run tests
-> Package app
-> Run/deploy
```

### Why It Is Important

Java framework projects depend on many libraries. Interns should know where dependencies come from and how the app is built.

### When It Is Used

Use Maven or Gradle in almost every real Java project, especially Spring Boot apps.

### Where It Is Used In Real Apps

- Adding Spring Web
- Adding Spring Data JPA
- Adding MySQL/PostgreSQL driver
- Adding JWT library
- Running tests before pull requests

### Real-Life Example

Maven command:

```bash
mvn spring-boot:run
mvn test
mvn clean package
```

### Common Beginner Mistakes

- Editing dependencies without reloading the project
- Not knowing whether the project uses Maven or Gradle
- Ignoring failed tests during build
- Committing generated build folders unnecessarily

### Connection To Other Technologies

Maven/Gradle connects Java code, Spring Boot, testing, dependency management, CI/CD, and deployment.

## Day 11 Practice

Create a practice branch, make a small Spring Boot README change, run `mvn test` or `gradle test`, commit it, and explain what each Git and build command does.

---

# Day 12 - Debugging, Stack Traces, Error Handling

## 2-Hour Breakdown

- 0:00-0:30 - Debugging mindset
- 0:30-1:00 - Stack traces
- 1:00-1:25 - Breakpoints and logs
- 1:25-1:50 - Error handling
- 1:50-2:00 - Debugging interview practice

## Debugging

### What It Is

Debugging is the process of finding and fixing the cause of a problem.

### How It Works Internally

You compare expected behavior against actual behavior, inspect data at each step, and narrow down where the failure starts.

```text
Reproduce bug -> Observe error -> Trace flow -> Inspect variables -> Find cause -> Fix -> Test again
```

### Why It Is Important

Interns who can debug independently become useful much faster.

### When It Is Used

Use debugging when code crashes, returns wrong data, saves incorrectly, loads slowly, or behaves differently than expected.

### Where It Is Used In Real Apps

- Login fails
- Payment total is wrong
- Product stock does not update
- API returns 500
- UI shows blank data

### Real-Life Example

If checkout creates an order but stock does not decrease, trace:

```text
Frontend request -> API body -> Controller -> Service -> SQL update -> Database row
```

### Common Beginner Mistakes

- Randomly changing code
- Not reading the error message
- Not reproducing the bug consistently
- Fixing symptoms instead of root cause

### Connection To Other Technologies

Debugging uses logs, stack traces, IDE breakpoints, database queries, Network tab, Git history, and tests.

## Stack Traces

### What It Is

A stack trace shows the chain of method calls that led to an error.

### How It Works Internally

Each method call is placed on the call stack. When an exception occurs, the runtime prints the stack so you can see where it happened.

```text
Main()
-> OrderController.Create()
-> OrderService.CalculateTotal()
-> NullReferenceException
```

### Why It Is Important

Stack traces point you toward the failing file, method, and line.

### When It Is Used

Use stack traces when handling runtime exceptions.

### Where It Is Used In Real Apps

Backend logs, crash reports, server errors, and IDE consoles.

### Real-Life Example

If `product.Price` causes a null error, the product object may not have loaded from the database.

### Common Beginner Mistakes

- Reading only the last line
- Ignoring the first line that says the exception type
- Not checking line numbers
- Assuming the stack trace always shows the root business problem

### Connection To Other Technologies

Stack traces connect to stacks, function calls, logging, monitoring, backend APIs, and production error reports.

## Error Handling

### What It Is

Error handling is how code responds to failures without crashing badly or exposing sensitive details.

### How It Works Internally

Code uses exceptions, validation checks, status codes, and fallback paths.

### Why It Is Important

Real systems fail: invalid input, missing records, network issues, database errors, and expired tokens.

### When It Is Used

Use error handling around risky operations like database writes, file uploads, external APIs, and authentication.

### Where It Is Used In Real Apps

- Banking transfer rollback
- Payment gateway failure
- Login failed response
- Inventory update conflict

### Real-Life Example

```java
try {
    BigDecimal total = price.multiply(BigDecimal.valueOf(quantity));
    System.out.println(total);
}
catch (Exception ex) {
    System.out.println("Something went wrong.");
}
```

### Common Beginner Mistakes

- Catching errors and doing nothing
- Showing raw server errors to users
- Using exceptions for normal validation
- Not logging enough context

### Connection To Other Technologies

Error handling connects to APIs, HTTP status codes, logs, monitoring, database transactions, and frontend error messages.

## Day 12 Practice

Take broken code from an old project. Read the error, locate the line, explain the cause, fix it, and write what you learned.

---

# Day 13 - Deployment, Environment Variables, Production Thinking

## 2-Hour Breakdown

- 0:00-0:35 - Deployment
- 0:35-1:00 - Environment variables
- 1:00-1:30 - Production concerns
- 1:30-1:50 - Deployment flow practice
- 1:50-2:00 - Interview explanation

## Deployment

### What It Is

Deployment is the process of making an application available for users.

### How It Works Internally

Code is built, configured, uploaded to a server or cloud platform, connected to a database, and run as a service.

```text
Code -> Build -> Configure -> Server/cloud -> Run app -> Users access URL
```

### Why It Is Important

An app is not complete if only your laptop can run it.

### When It Is Used

Use deployment when sharing demos, launching projects, testing staging environments, or releasing production apps.

### Where It Is Used In Real Apps

- Portfolio websites
- School management systems
- E-commerce stores
- Company internal tools
- APIs for mobile apps

### Real-Life Example

A React frontend is deployed to Vercel, a Spring Boot API is deployed to Render, Railway, Azure, or AWS, and a PostgreSQL/MySQL database is hosted in the cloud.

### Common Beginner Mistakes

- Hardcoding local URLs
- Forgetting production database connection strings
- Not setting environment variables
- Assuming deployment works the same as local development

### Connection To Other Technologies

Deployment connects GitHub, CI/CD, environment variables, databases, API URLs, domains, logs, and monitoring.

## Environment Variables

### What It Is

Environment variables are configuration values stored outside the source code.

### How It Works Internally

The operating system or hosting platform provides key-value pairs to the running application.

```text
DATABASE_URL=...
JWT_SECRET=...
API_BASE_URL=...
```

### Why It Is Important

Secrets and environment-specific settings should not be hardcoded.

### When It Is Used

Use environment variables for database connections, API keys, JWT secrets, frontend API URLs, and feature flags.

### Where It Is Used In Real Apps

- Payment API key
- Email service password
- Production database URL
- Google Maps API key for emergency app

### Real-Life Example

```java
String jwtSecret = System.getenv("JWT_SECRET");
```

### Common Beginner Mistakes

- Committing `.env` files with secrets
- Using development secrets in production
- Forgetting to set variables on the host
- Naming variables inconsistently

### Connection To Other Technologies

Environment variables connect deployment, security, authentication, databases, cloud services, and CI/CD.

## Production Thinking

### What It Is

Production thinking means designing software to work reliably for real users, not only for demos.

### How It Works Internally

You consider logs, errors, security, performance, backups, scaling, monitoring, and rollback plans.

### Why It Is Important

Internship work may affect real users, real data, and company systems.

### When It Is Used

Use production thinking before merging, deploying, changing database data, or handling user information.

### Where It Is Used In Real Apps

- Banking cannot lose transactions
- Emergency apps cannot silently fail
- E-commerce cannot oversell stock
- Facebook cannot expose private data

### Real-Life Example

For inventory checkout, use a database transaction so order creation and stock update succeed or fail together.

### Common Beginner Mistakes

- Testing only happy paths
- Ignoring security
- Not logging failures
- Not thinking about multiple users acting at the same time

### Connection To Other Technologies

Production thinking connects backend logic, databases, authentication, deployment, monitoring, testing, and real workflow.

## Day 13 Practice

Write a deployment checklist for a fullstack app: frontend URL, backend URL, database URL, JWT secret, CORS origin, migration, and test login.

---

# Day 14 - Interview Preparation And Final Integration

## 2-Hour Breakdown

- 0:00-0:30 - Review fullstack system flow
- 0:30-1:00 - Practice technical explanations
- 1:00-1:30 - Common interview questions
- 1:30-1:50 - AI dependency reduction plan
- 1:50-2:00 - Final self-assessment

## Final Fullstack Flow To Master

### What It Is

This is the complete mental model of how a fullstack application works from user action to stored data and back.

### How It Works Internally

```text
User action
-> Frontend component/form
-> Client-side validation
-> HTTP request
-> Middleware
-> Controller/route
-> DTO/model binding
-> Validation
-> Service/business rules
-> Repository/ORM
-> SQL query
-> Database tables
-> Result returned
-> Response object
-> JSON
-> HTTP status code
-> Frontend state update
-> UI feedback
```

### Why It Is Important

This is the main explanation that separates someone who only assembled a project from someone who understands software engineering.

### When It Is Used

Use this explanation in interviews, project demos, debugging, and feature planning.

### Where It Is Used In Real Apps

Every serious fullstack app: banking systems, Facebook-like apps, e-commerce, emergency response systems, school portals, HR systems, and inventory systems.

### Real-Life Example

Authentication system:

```text
User submits login
-> Frontend sends POST /api/auth/login
-> Backend validates email/password
-> Database finds user
-> Password hash is checked
-> JWT is created
-> Frontend stores token carefully
-> Future requests include Authorization header
-> Middleware validates token
-> Protected data is returned
```

### Common Beginner Mistakes

- Saying "the frontend connects directly to the database"
- Not mentioning validation
- Forgetting auth middleware
- Not explaining status codes
- Not knowing where business logic belongs

### Connection To Other Technologies

This flow connects all topics in this reviewer: programming, OOP, data structures, SQL, REST, JSON, auth, middleware, Git, debugging, deployment, and workflow.

## Mini Capstone Explanation

Design an inventory system:

```text
Admin logs in
-> JWT issued
-> Admin creates product
-> POST /api/products with token
-> Auth middleware verifies admin role
-> ProductController validates request
-> ProductService checks duplicate SKU
-> Database inserts product
-> API returns 201 Created
-> Frontend adds product to table
```

Tables:

```sql
CREATE TABLE users (
    id INT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    role VARCHAR(50) NOT NULL
);

CREATE TABLE products (
    id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    sku VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL
);
```

Backend concept:

```java
public class Product {
    private Long id;
    private String name;
    private String sku;
    private BigDecimal price;
    private int stock;

    public Product(Long id, String name, String sku, BigDecimal price, int stock) {
        this.id = id;
        this.name = name;
        this.sku = sku;
        this.price = price;
        this.stock = stock;
    }
}
```

## Day 14 Practice

Explain your best project using this format:

- Problem solved
- Users
- Main features
- Frontend flow
- Backend flow
- Database tables
- API endpoints
- Authentication and authorization
- Hardest bug
- What you would improve

---

# Complete Java Practice Examples With Outputs

Use these examples to become familiar with Java syntax and real system flow. Type them manually, run them, then change values to see what breaks.

## Example 1 - Inventory Stock Checker

### Real-World Use

Used in inventory systems, sari-sari store POS apps, warehouse apps, and e-commerce stock validation.

### Complete Java Code

```java
import java.math.BigDecimal;
import java.util.Scanner;

public class InventoryStockChecker {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String productName = "Wireless Mouse";
        BigDecimal price = new BigDecimal("499.75");
        int availableStock = 8;

        System.out.print("Enter quantity to buy: ");
        int quantity = scanner.nextInt();

        if (quantity <= 0) {
            System.out.println("Quantity must be greater than zero.");
        }
        else if (quantity > availableStock) {
            System.out.println("Not enough stock.");
            System.out.println("Available stock: " + availableStock);
        }
        else {
            BigDecimal total = price.multiply(BigDecimal.valueOf(quantity));
            int remainingStock = availableStock - quantity;

            System.out.println("Product: " + productName);
            System.out.println("Quantity: " + quantity);
            System.out.println("Total: PHP " + total);
            System.out.println("Remaining stock: " + remainingStock);
        }

        scanner.close();
    }
}
```

### Sample Input

```text
Enter quantity to buy: 3
```

### Output

```text
Product: Wireless Mouse
Quantity: 3
Total: PHP 1499.25
Remaining stock: 5
```

### Flow

```text
User enters quantity
-> Java stores input in variable
-> if/else validates stock
-> BigDecimal calculates total
-> Program prints result
```

## Example 2 - Cart Total Using ArrayList And Method

### Real-World Use

Used in e-commerce checkout systems like Shopee/Lazada-style carts.

### Complete Java Code

```java
import java.math.BigDecimal;
import java.util.ArrayList;

class CartItem {
    private String name;
    private BigDecimal price;
    private int quantity;

    public CartItem(String name, BigDecimal price, int quantity) {
        this.name = name;
        this.price = price;
        this.quantity = quantity;
    }

    public BigDecimal getSubtotal() {
        return price.multiply(BigDecimal.valueOf(quantity));
    }

    public void printLine() {
        System.out.println(name + " x" + quantity + " = PHP " + getSubtotal());
    }
}

public class CartTotalApp {
    public static void main(String[] args) {
        ArrayList<CartItem> cart = new ArrayList<>();
        cart.add(new CartItem("Keyboard", new BigDecimal("950.00"), 1));
        cart.add(new CartItem("Mouse", new BigDecimal("499.75"), 2));
        cart.add(new CartItem("USB Cable", new BigDecimal("120.00"), 3));

        BigDecimal total = calculateTotal(cart);

        System.out.println("Cart Summary");
        for (CartItem item : cart) {
            item.printLine();
        }
        System.out.println("Total: PHP " + total);
    }

    public static BigDecimal calculateTotal(ArrayList<CartItem> cart) {
        BigDecimal total = BigDecimal.ZERO;

        for (CartItem item : cart) {
            total = total.add(item.getSubtotal());
        }

        return total;
    }
}
```

### Output

```text
Cart Summary
Keyboard x1 = PHP 950.00
Mouse x2 = PHP 999.50
USB Cable x3 = PHP 360.00
Total: PHP 2309.50
```

### Flow

```text
Create cart items
-> Store items in ArrayList
-> Loop through items
-> Each item calculates subtotal
-> Method returns final total
```

## Example 3 - HashMap Login Attempt Tracker

### Real-World Use

Used in authentication systems to temporarily track failed login attempts.

### Complete Java Code

```java
import java.util.HashMap;

public class LoginAttemptTracker {
    public static void main(String[] args) {
        HashMap<String, Integer> failedAttempts = new HashMap<>();

        recordFailedLogin(failedAttempts, "ana@example.com");
        recordFailedLogin(failedAttempts, "ana@example.com");
        recordFailedLogin(failedAttempts, "mark@example.com");
        recordFailedLogin(failedAttempts, "ana@example.com");

        printLoginStatus(failedAttempts, "ana@example.com");
        printLoginStatus(failedAttempts, "mark@example.com");
    }

    public static void recordFailedLogin(HashMap<String, Integer> attempts, String email) {
        int currentAttempts = attempts.getOrDefault(email, 0);
        attempts.put(email, currentAttempts + 1);
    }

    public static void printLoginStatus(HashMap<String, Integer> attempts, String email) {
        int count = attempts.getOrDefault(email, 0);

        if (count >= 3) {
            System.out.println(email + " is temporarily locked. Failed attempts: " + count);
        }
        else {
            System.out.println(email + " can still login. Failed attempts: " + count);
        }
    }
}
```

### Output

```text
ana@example.com is temporarily locked. Failed attempts: 3
mark@example.com can still login. Failed attempts: 1
```

### Flow

```text
Email used as HashMap key
-> Failed count stored as value
-> getOrDefault prevents missing-key error
-> Business rule locks account after 3 failures
```

## Example 4 - OOP Bank Transfer With Encapsulation

### Real-World Use

Used in banking, wallet, payroll, and payment systems.

### Complete Java Code

```java
import java.math.BigDecimal;

class BankAccount {
    private String accountNumber;
    private String ownerName;
    private BigDecimal balance;

    public BankAccount(String accountNumber, String ownerName, BigDecimal balance) {
        this.accountNumber = accountNumber;
        this.ownerName = ownerName;
        this.balance = balance;
    }

    public boolean withdraw(BigDecimal amount) {
        if (amount.compareTo(BigDecimal.ZERO) <= 0) {
            System.out.println("Invalid withdrawal amount.");
            return false;
        }

        if (amount.compareTo(balance) > 0) {
            System.out.println("Insufficient balance for " + ownerName);
            return false;
        }

        balance = balance.subtract(amount);
        return true;
    }

    public void deposit(BigDecimal amount) {
        if (amount.compareTo(BigDecimal.ZERO) > 0) {
            balance = balance.add(amount);
        }
    }

    public void printBalance() {
        System.out.println(ownerName + " (" + accountNumber + ") balance: PHP " + balance);
    }
}

public class BankTransferApp {
    public static void main(String[] args) {
        BankAccount sender = new BankAccount("001", "Ana", new BigDecimal("5000.00"));
        BankAccount receiver = new BankAccount("002", "Mark", new BigDecimal("1200.00"));
        BigDecimal transferAmount = new BigDecimal("1500.00");

        System.out.println("Before transfer:");
        sender.printBalance();
        receiver.printBalance();

        boolean success = sender.withdraw(transferAmount);
        if (success) {
            receiver.deposit(transferAmount);
            System.out.println("Transfer successful.");
        }
        else {
            System.out.println("Transfer failed.");
        }

        System.out.println("After transfer:");
        sender.printBalance();
        receiver.printBalance();
    }
}
```

### Output

```text
Before transfer:
Ana (001) balance: PHP 5000.00
Mark (002) balance: PHP 1200.00
Transfer successful.
After transfer:
Ana (001) balance: PHP 3500.00
Mark (002) balance: PHP 2700.00
```

### Flow

```text
Create account objects
-> balance is private
-> withdraw validates amount and balance
-> deposit updates receiver
-> print final balances
```

## Example 5 - Queue For Emergency Reports

### Real-World Use

Used in emergency response systems, customer support queues, and background job processing.

### Complete Java Code

```java
import java.util.LinkedList;
import java.util.Queue;

class EmergencyReport {
    private String reporter;
    private String location;
    private String type;

    public EmergencyReport(String reporter, String location, String type) {
        this.reporter = reporter;
        this.location = location;
        this.type = type;
    }

    public void printReport() {
        System.out.println(type + " reported by " + reporter + " at " + location);
    }
}

public class EmergencyQueueApp {
    public static void main(String[] args) {
        Queue<EmergencyReport> reports = new LinkedList<>();

        reports.add(new EmergencyReport("Ana", "Barangay 1", "Fire"));
        reports.add(new EmergencyReport("Mark", "Barangay 2", "Medical"));
        reports.add(new EmergencyReport("Liza", "Barangay 3", "Flood"));

        System.out.println("Dispatch order:");

        while (!reports.isEmpty()) {
            EmergencyReport nextReport = reports.remove();
            nextReport.printReport();
        }
    }
}
```

### Output

```text
Dispatch order:
Fire reported by Ana at Barangay 1
Medical reported by Mark at Barangay 2
Flood reported by Liza at Barangay 3
```

### Flow

```text
Reports enter queue
-> First report is processed first
-> remove() gets next report
-> loop continues until queue is empty
```

## Example 6 - SQL CRUD With Expected Results

### Real-World Use

Used in admin dashboards and inventory management systems.

### SQL Code

```sql
CREATE TABLE products (
    id INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL
);

INSERT INTO products (id, name, price, stock)
VALUES
(1, 'Keyboard', 950.00, 10),
(2, 'Mouse', 499.75, 5),
(3, 'USB Cable', 120.00, 30);

SELECT id, name, price, stock
FROM products
WHERE stock > 0
ORDER BY name;

UPDATE products
SET stock = stock - 2
WHERE id = 2;

SELECT id, name, stock
FROM products
WHERE id = 2;
```

### Expected SELECT Output

```text
id | name      | price  | stock
---+-----------+--------+------
1  | Keyboard  | 950.00 | 10
2  | Mouse     | 499.75 | 5
3  | USB Cable | 120.00 | 30
```

### Expected Output After Update

```text
id | name  | stock
---+-------+------
2  | Mouse | 3
```

### Flow

```text
CREATE table
-> INSERT sample products
-> SELECT available products
-> UPDATE stock after purchase
-> SELECT again to verify change
```

## Example 7 - SQL JOIN For Order Summary

### Real-World Use

Used in e-commerce order history, receipts, admin reports, and sales dashboards.

### SQL Code

```sql
CREATE TABLE users (
    id INT PRIMARY KEY,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE orders (
    id INT PRIMARY KEY,
    user_id INT NOT NULL,
    created_at VARCHAR(30) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE products (
    id INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);

CREATE TABLE order_items (
    id INT PRIMARY KEY,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

INSERT INTO users VALUES (1, 'ana@example.com');
INSERT INTO orders VALUES (1001, 1, '2026-05-28 10:30');
INSERT INTO products VALUES (10, 'Keyboard', 950.00);
INSERT INTO products VALUES (11, 'Mouse', 499.75);
INSERT INTO order_items VALUES (1, 1001, 10, 1);
INSERT INTO order_items VALUES (2, 1001, 11, 2);

SELECT
    orders.id AS order_id,
    users.email,
    products.name AS product_name,
    order_items.quantity,
    products.price,
    order_items.quantity * products.price AS subtotal
FROM orders
INNER JOIN users ON orders.user_id = users.id
INNER JOIN order_items ON orders.id = order_items.order_id
INNER JOIN products ON order_items.product_id = products.id
WHERE orders.id = 1001;
```

### Expected Output

```text
order_id | email           | product_name | quantity | price  | subtotal
---------+-----------------+--------------+----------+--------+---------
1001     | ana@example.com | Keyboard     | 1        | 950.00 | 950.00
1001     | ana@example.com | Mouse        | 2        | 499.75 | 999.50
```

### Flow

```text
orders.user_id links to users.id
-> order_items.order_id links to orders.id
-> order_items.product_id links to products.id
-> JOIN combines data for receipt display
```

## Example 8 - Spring Boot Product CRUD Flow

### Real-World Use

Used in inventory systems, admin dashboards, product catalogs, and e-commerce systems.

### Entity

```java
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import java.math.BigDecimal;

@Entity
public class Product {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    private String name;
    private String sku;
    private BigDecimal price;
    private int stock;

    protected Product() {
    }

    public Product(String name, String sku, BigDecimal price, int stock) {
        this.name = name;
        this.sku = sku;
        this.price = price;
        this.stock = stock;
    }

    public Long getId() {
        return id;
    }

    public String getName() {
        return name;
    }

    public String getSku() {
        return sku;
    }

    public BigDecimal getPrice() {
        return price;
    }

    public int getStock() {
        return stock;
    }
}
```

### Repository

```java
import org.springframework.data.jpa.repository.JpaRepository;

public interface ProductRepository extends JpaRepository<Product, Long> {
    boolean existsBySku(String sku);
}
```

### Service

```java
import java.math.BigDecimal;
import java.util.List;
import org.springframework.stereotype.Service;

@Service
public class ProductService {
    private final ProductRepository productRepository;

    public ProductService(ProductRepository productRepository) {
        this.productRepository = productRepository;
    }

    public List<Product> getAllProducts() {
        return productRepository.findAll();
    }

    public Product createProduct(String name, String sku, BigDecimal price, int stock) {
        if (productRepository.existsBySku(sku)) {
            throw new IllegalArgumentException("SKU already exists.");
        }

        Product product = new Product(name, sku, price, stock);
        return productRepository.save(product);
    }
}
```

### Controller

```java
import java.math.BigDecimal;
import java.util.List;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("/api/products")
public class ProductController {
    private final ProductService productService;

    public ProductController(ProductService productService) {
        this.productService = productService;
    }

    @GetMapping
    public List<Product> getProducts() {
        return productService.getAllProducts();
    }

    @PostMapping
    public ResponseEntity<Product> createProduct(@RequestBody CreateProductRequest request) {
        Product created = productService.createProduct(
            request.name(),
            request.sku(),
            request.price(),
            request.stock()
        );

        return ResponseEntity.status(HttpStatus.CREATED).body(created);
    }
}

record CreateProductRequest(String name, String sku, BigDecimal price, int stock) {
}
```

### Sample Request

```http
POST /api/products
Content-Type: application/json

{
  "name": "Keyboard",
  "sku": "KB-001",
  "price": 950.00,
  "stock": 10
}
```

### Sample Response

```http
HTTP/1.1 201 Created
Content-Type: application/json

{
  "id": 1,
  "name": "Keyboard",
  "sku": "KB-001",
  "price": 950.00,
  "stock": 10
}
```

### Flow

```text
Frontend sends POST /api/products
-> ProductController receives JSON
-> CreateProductRequest stores request data
-> ProductService checks duplicate SKU
-> ProductRepository.save inserts row
-> Spring converts Product object to JSON
-> Frontend receives 201 Created
```

## Example 9 - Spring Boot Login Flow With JWT Concept

### Real-World Use

Used in school portals, banking apps, admin dashboards, emergency systems, and e-commerce accounts.

### Simplified Auth Service

```java
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Service;

@Service
public class AuthService {
    private final UserRepository userRepository;
    private final PasswordEncoder passwordEncoder;
    private final JwtService jwtService;

    public AuthService(
        UserRepository userRepository,
        PasswordEncoder passwordEncoder,
        JwtService jwtService
    ) {
        this.userRepository = userRepository;
        this.passwordEncoder = passwordEncoder;
        this.jwtService = jwtService;
    }

    public LoginResponse login(LoginRequest request) {
        User user = userRepository.findByEmail(request.email())
            .orElseThrow(() -> new IllegalArgumentException("Invalid email or password."));

        boolean passwordMatches = passwordEncoder.matches(request.password(), user.getPasswordHash());
        if (!passwordMatches) {
            throw new IllegalArgumentException("Invalid email or password.");
        }

        String token = jwtService.generateToken(user.getId(), user.getEmail(), user.getRole());
        return new LoginResponse(token, user.getEmail(), user.getRole());
    }
}

record LoginRequest(String email, String password) {
}

record LoginResponse(String token, String email, String role) {
}
```

### Sample Request

```http
POST /api/auth/login
Content-Type: application/json

{
  "email": "admin@example.com",
  "password": "Secret123"
}
```

### Sample Response

```http
HTTP/1.1 200 OK
Content-Type: application/json

{
  "token": "eyJhbGciOiJIUzI1NiJ9.sample.signature",
  "email": "admin@example.com",
  "role": "ADMIN"
}
```

### Flow

```text
Login JSON request
-> Controller calls AuthService
-> Repository finds user by email
-> PasswordEncoder compares raw password with hash
-> JwtService creates signed token
-> Response returns token
-> Frontend sends token on future requests
```

### Future Protected Request

```http
GET /api/admin/products
Authorization: Bearer eyJhbGciOiJIUzI1NiJ9.sample.signature
```

## Example 10 - Debugging A Java Stack Trace

### Broken Code

```java
class Product {
    private String name;

    public Product(String name) {
        this.name = name;
    }

    public String getName() {
        return name;
    }
}

public class DebuggingExample {
    public static void main(String[] args) {
        Product product = null;
        printProduct(product);
    }

    public static void printProduct(Product product) {
        System.out.println(product.getName());
    }
}
```

### Example Error Output

```text
Exception in thread "main" java.lang.NullPointerException:
Cannot invoke "Product.getName()" because "product" is null
    at DebuggingExample.printProduct(DebuggingExample.java:18)
    at DebuggingExample.main(DebuggingExample.java:14)
```

### How To Read It

```text
Exception type: NullPointerException
Failing method: printProduct
Failing reason: product is null
Call path: main -> printProduct
Fix: create a Product object or check for null before calling getName()
```

### Fixed Code

```java
class Product {
    private String name;

    public Product(String name) {
        this.name = name;
    }

    public String getName() {
        return name;
    }
}

public class DebuggingExample {
    public static void main(String[] args) {
        Product product = new Product("Keyboard");
        printProduct(product);
    }

    public static void printProduct(Product product) {
        if (product == null) {
            System.out.println("No product found.");
            return;
        }

        System.out.println(product.getName());
    }
}
```

### Fixed Output

```text
Keyboard
```

---

# Final Review Sections

## Most Important Topics To Master

1. Full request-response lifecycle
2. REST APIs and HTTP methods
3. SQL CRUD, keys, and joins
4. Authentication vs authorization
5. JWT and middleware
6. Spring Boot controller-service-repository flow
7. Spring Data JPA entities and repositories
8. Debugging using stack traces and logs
9. Git branching, commits, pull requests, and merge conflicts
10. OOP fundamentals: classes, encapsulation, abstraction
11. Frontend-backend-database connection
12. Real-world workflow from task to deployment

## Java Practice Project Roadmap

Build these in order. Do not skip the console projects because they train manual Java confidence before frameworks.

1. Java console inventory system

- Practice: variables, conditions, loops, methods, `ArrayList`, `HashMap`
- Features: add product, list products, search by SKU, update stock, show low-stock items
- Goal: write Java without relying on AI for every line

2. Java OOP banking simulator

- Practice: classes, encapsulation, inheritance, polymorphism, exceptions
- Features: create account, deposit, withdraw, transfer, transaction history
- Goal: explain why balance should be private and changed through methods

3. Spring Boot product CRUD API

- Practice: Spring Web, REST, controllers, services, repositories, DTOs
- Features: `GET /products`, `POST /products`, `PUT /products/{id}`, `DELETE /products/{id}`
- Goal: understand controller-service-repository flow

4. Spring Boot inventory API with MySQL/PostgreSQL

- Practice: Spring Data JPA, entities, SQL relationships, migrations
- Features: products, suppliers, orders, order items, stock movement
- Goal: connect Java entities to real database tables

5. Spring Boot authentication system

- Practice: Spring Security, password hashing, JWT, role-based authorization
- Features: register, login, admin-only route, user profile route
- Goal: explain authentication, authorization, JWT, and middleware/filter flow

6. Fullstack Java capstone

- Practice: frontend-backend communication, deployment, environment variables
- Suggested apps: inventory system, emergency reporting system, mini e-commerce, appointment booking, school document request system
- Goal: explain the full flow from frontend form to Java API to database and back

## Common Internship Interview Questions

1. Explain what happens when a user clicks login.
2. What is the difference between authentication and authorization?
3. What is a REST API?
4. What are GET, POST, PUT, PATCH, and DELETE used for?
5. What is JSON and why is it used?
6. What is a primary key? What is a foreign key?
7. What is the difference between INNER JOIN and LEFT JOIN?
8. Explain CRUD operations.
9. What is MVC?
10. What is middleware?
11. What is JWT and what does it contain?
12. How do you debug a 500 server error?
13. What does a stack trace show?
14. How do frontend, backend, and database connect?
15. What is Git branching used for?
16. How do you handle merge conflicts?
17. What are environment variables?
18. Why should passwords not be stored as plain text?
19. How would you design an inventory system?
20. Tell me about a project you built and explain its system flow.
21. What is Spring Boot and why is it used?
22. What is the difference between controller, service, repository, entity, and DTO?
23. What does `@RestController` do?
24. What is Spring Data JPA?
25. Why should you still learn SQL if you use JPA?
26. What is Maven or Gradle used for?
27. How does Spring Security protect API endpoints?

## Common Beginner Mistakes

- Memorizing syntax without understanding flow
- Depending on AI to write every line
- Not reading errors carefully
- Not using Git regularly
- Not testing bad inputs
- Putting all code in one file or one method
- Confusing frontend validation with backend security
- Not understanding database relationships
- Returning sensitive data from APIs
- Hardcoding secrets and URLs
- Not checking the browser Network tab
- Not explaining projects clearly during interviews
- Putting all Spring Boot code inside controllers
- Using JPA without understanding generated SQL
- Not knowing what Maven/Gradle dependencies are doing
- Confusing Java entities, DTOs, and JSON payloads

## How To Reduce AI Dependency Gradually

Use this pattern:

```text
Day 1-3: Ask AI to explain, then manually rewrite code.
Day 4-7: Ask AI for hints only. Write code yourself first.
Day 8-11: Debug manually for 20 minutes before asking AI.
Day 12-14: Use AI only to review your explanation or find missed edge cases.
```

Practical rules:

- Before asking AI, write what you think the problem is.
- Ask "why" and "how" questions, not only "give me code."
- Rewrite AI-generated code without looking.
- Delete a function and recreate it manually.
- Read stack traces yourself before asking for help.
- Build one small CRUD feature without AI autocomplete.
- In Spring Boot, create one controller, service, repository, entity, and DTO manually before asking AI to improve it.

## How To Study Efficiently In Only 2 Weeks

- Focus on systems, not trivia.
- Spend 70% of time coding and explaining, 30% reading.
- Use one main project as your practice base.
- Trace every feature from UI to database.
- Practice interview answers out loud.
- Make small diagrams using arrows.
- Review mistakes daily.
- Sleep properly before interviews.

## What Interviewers Actually Look For In Software Engineer Interns

Interviewers usually do not expect you to be a senior developer. They look for:

- Clear fundamentals
- Willingness to learn
- Ability to explain your project honestly
- Basic coding independence
- Debugging mindset
- Understanding of APIs and databases
- Basic Java and Spring Boot structure
- Ability to explain controller-service-repository flow
- Good communication
- Awareness of security basics
- Git familiarity
- Humility when you do not know something
- Ability to ask specific questions
- Evidence that you can improve quickly

Strong intern answer style:

```text
"I used AI assistance while building the project, but I understand the flow.
The frontend sends a POST request to the backend.
The backend validates the request, checks authentication, applies business rules,
saves data to the database, and returns a JSON response.
I can trace bugs by checking the browser Network tab, backend logs, stack traces,
and database records."
```

## Final Self-Check

You are internship-ready for beginner-to-intermediate roles if you can:

- Build and explain a simple CRUD app
- Write basic Java without relying fully on AI
- Explain API request-response flow
- Design simple SQL tables with relationships
- Read and fix common errors
- Use Git branches and commits
- Explain authentication and authorization
- Discuss one project clearly from frontend to database

Remember: confidence comes from tracing, typing, breaking, fixing, and explaining. Do that daily for 2 weeks.
