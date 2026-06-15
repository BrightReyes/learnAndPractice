# Thinking Like a Programmer: The 10-Phase Problem-Solving Process

**Problem:** *"Create a small inventory list. Add products, loop through them, and create a function that prints low-stock items."*

This is not about writing code. This is a step-by-step breakdown of how a programmer's brain approaches a problem before a single line is written.

---

## Phase 1: Read the Problem — Slowly, More Than Once

Most beginners fail here. They glance at the problem, feel like they "get it," and immediately start typing. **Don't.**

Read it once to understand the *general idea*. Read it again to find the **verbs** (actions) and **nouns** (things). Read it a third time to find what's *not said* — the hidden requirements.

**Questions to ask yourself:**
- What is the problem actually asking me to **do**?
- What are the **things** (nouns) mentioned?
- What are the **actions** (verbs) I need to perform?
- What information is **missing** that I need to decide on my own?

---

## Phase 2: Extract the Requirements — Turn English into a Checklist

Break the single sentence into **individual, numbered requirements**. This is called **decomposition** — the most important skill in programming.

The sentence says: *"Create a small inventory list. Add products, loop through them, and create a function that prints low-stock items."*

**Decomposed:**
1. **Create** an inventory list
2. **Add** products to it
3. **Loop** through the products
4. **Create a function** (a method) that prints low-stock items

Notice how each requirement maps to a programming concept:

| Requirement | Programming Concept |
| :--- | :--- |
| "inventory list" | A data structure (e.g., ArrayList) |
| "Add products" | Adding items to a collection |
| "loop through them" | A for / for-each loop |
| "create a function" | A method |
| "prints low-stock items" | A conditional (if statement) inside the loop |

**Core Habit:** Every problem starts by turning a vague English sentence into a concrete checklist of small, specific tasks.

---

## Phase 3: Identify the Data — What Do I Need to Store?

Before writing logic, identify **what information exists** in this problem.

Ask yourself: **"What is a product?"**

A product in an inventory isn't just a name. What makes it useful? At a minimum, a product has:
- A **name** — so you know *what* it is ("Keyboard").
- A **quantity** (stock count) — so you know *how many* you have.

Could it have a price? An ID? Yes, but the problem doesn't ask for those. Start with what's needed.

**Decision Point: How do I represent a product?**
- *Just a String?* (Only stores names. Can't track stock count. Fails requirement.)
- *Two parallel arrays?* (One for names, one for quantities. Fragile, easy to mix up indexes.)
- *An Object/Class?* (Clean, organized. Groups name and quantity together.)

The problem says "prints low-stock items." That means each product MUST have a stock count. A `String` alone isn't enough. You need at least a name + quantity.

---

## Phase 4: Define "Low Stock" — Catch the Hidden Requirement

The problem says "prints low-stock items" but never defines what "low stock" means.

**This is extremely common.** Requirements are rarely complete. A programmer's job is to notice the gap and make a decision.

Ask yourself:
- Is low stock when quantity is 0? (That's *out of stock*, not low stock).
- Is it below 5? Below 10?

**Your decision:** Pick a threshold. For a small practice problem, "5 or below" is reasonable. The exact number doesn't matter — noticing the ambiguity and making a choice does.

---

## Phase 5: Plan the Logic — Think in Steps (Pseudocode)

Plan what your program does, **in order**, using plain language:

1. Create an empty list to hold products.
2. Add several products to the list (each with a name and stock count).
3. Loop through every product in the list to verify they were added.
4. For each product, print its name and stock count.
5. Create a separate function that:
   - a. Takes the list of products as input.
   - b. Loops through the list.
   - c. For each product, checks: is the stock count <= 5?
   - d. If yes, prints that product's name and stock count.
   - e. If no product is low stock, print "All stock levels are healthy."

If you can write this in plain English, you can translate it into code later.

---

## Phase 6: Trace Through with Real Data — Be the Computer

Before coding, **pretend you are the computer**. Pick real example data and walk through your plan step by step.

**Sample Data:**
- Keyboard: 15
- Mouse: 3
- Monitor: 8
- USB Cable: 2
- Headset: 50

**Trace the low-stock function (Step 5):**
- Iteration 1: Keyboard (15) → 15 <= 5? NO → skip
- Iteration 2: Mouse (3) → 3 <= 5? YES → Print "Mouse: 3"
- Iteration 3: Monitor (8) → 8 <= 5? NO → skip
- Iteration 4: USB Cable (2) → 2 <= 5? YES → Print "USB Cable: 2"
- Iteration 5: Headset (50) → 50 <= 5? NO → skip

**Expected output:** Mouse and USB Cable.
*If you can trace it by hand and get the right answer, your logic is correct.*

---

## Phase 7: Consider Edge Cases — What Could Go Wrong?

A good programmer asks: **"What if...?"**

- **What if the inventory list is empty?** → The loop runs zero times. The function should handle this gracefully (e.g., print "No products in inventory").
- **What if ALL products are low stock?** → The function should print all of them. Does your logic handle this? Yes.
- **What if NO products are low stock?** → The function prints nothing. Is that confusing? Maybe add a message: "All stock levels are healthy."
- **What if a product has 0 stock?** → That's below 5, so it appears as low stock. Or should it say "OUT OF STOCK" instead? Another decision point.

Edge case thinking is what separates a beginner from a professional.

---

## Phase 8: Map to Concepts You Already Know

Connect your plan to the topics you've studied:

| What you need to do | Programming Concept |
| :--- | :--- |
| Store multiple products | **ArrayList** |
| Group product name + quantity | **Class / Object** (or separate Variables) |
| Go through every product | **Loop** (for-each) |
| Check if stock is low | **Conditional** (if statement) |
| Wrap the low-stock check | **Method / Function** |

Realize that there is nothing in this problem that requires something you haven't already learned.

---

## Phase 9: Plan the Structure — Organize Before You Code

Decide how your program is organized:

1. **Where does it start?** → The `main` method.
2. **What does `main` do?** Creates the list, adds products, prints them, then calls the low-stock function.
3. **What does the low-stock function do?** Receives the list, loops through it, and prints items at or below the threshold.
4. **What are the function's inputs and outputs?** Input: List of products. Output: Nothing (it just prints), so return type is `void`.

---

## Phase 10: Reflect — The Pre-Coding Checklist

Before touching the keyboard, verify:
- [ ] I can explain the problem in my own words.
- [ ] I've broken it into small, specific tasks.
- [ ] I know what data I need (product name, stock count).
- [ ] I've chosen a data structure (ArrayList).
- [ ] I know what "low stock" means (stock <= 5).
- [ ] I've written pseudocode for the full flow.
- [ ] I've traced through it with real example data.
- [ ] I've thought about edge cases (empty list, 0 stock).
- [ ] I can map every step to a known concept.
- [ ] I know the structure (main method + helper method).

**If all of these are checked, you are ready to code.** The coding part is almost mechanical. The hard work was the thinking.
