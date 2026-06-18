# 🚀 COMPLETE TECHNICAL INTERVIEW REVIEWER & LEARNING ROADMAP

## For Your First Software Developer Internship

> **Your Background:** BSIT Student | HTML, CSS, JS, PHP, MySQL, Firebase, React (basic-intermediate)
>
> **Target Stack:** HTML, CSS, JavaScript, PHP, Prisma, NestJS, ReactJS, PostgreSQL, OOP, MVC, MVVM
>
> **Gaps to Fill:** Prisma, NestJS, PostgreSQL, MVVM

---

## 📑 TABLE OF CONTENTS

1. [Section 1: HTML Review](#section-1-html-review)
2. [Section 2: CSS Review](#section-2-css-review)
3. [Section 3: JavaScript Review](#section-3-javascript-review)
4. [Section 4: Object-Oriented Programming](#section-4-object-oriented-programming)
5. [Section 5: MVC Design Pattern](#section-5-mvc-design-pattern)
6. [Section 6: MVVM Design Pattern](#section-6-mvvm-design-pattern)
7. [Section 7: ReactJS Review](#section-7-reactjs-review)
8. [Section 8: PostgreSQL Review](#section-8-postgresql-review)
9. [Section 9: Prisma Review](#section-9-prisma-review)
10. [Section 10: NestJS Review](#section-10-nestjs-review)
11. [Section 11: Full Stack System Flow](#section-11-full-stack-system-flow)
12. [Section 12: Internship Technical Interview Preparation](#section-12-internship-technical-interview-preparation)
13. [Section 13: Internship Survival Guide](#section-13-internship-survival-guide)
14. [Section 14: 14-Day Study Plan](#section-14-14-day-study-plan)
15. [Final Internship Readiness Assessment](#final-internship-readiness-assessment)

---

# SECTION 1: HTML REVIEW

## 1.1 Concept Explanation

### What is HTML?

HTML (HyperText Markup Language) is the **standard language for creating web pages**. It defines the structure and content of a webpage using elements (tags). Think of HTML as the **skeleton** of a website — it provides the bones that CSS (skin) and JavaScript (muscles) bring to life.

### Why Companies Use It

- It is the **foundation** of every website and web application
- It's **universal** — every browser understands HTML
- It enables **SEO** (Search Engine Optimization) — search engines read HTML to understand page content
- It provides **accessibility** — screen readers use HTML structure to help visually impaired users

### Real-World Use Cases

- Building the structure of web pages (headers, paragraphs, images, links)
- Creating forms for user input (login, registration, checkout)
- Embedding media (video, audio, images)
- Building email templates

### Advantages

- Easy to learn and use
- Supported by all browsers
- Free and open standard
- Integrates seamlessly with CSS and JavaScript

### Disadvantages

- Cannot create dynamic content alone (needs JavaScript)
- Cannot style content (needs CSS)
- Limited interactivity without scripting

### How It Connects With Other Technologies

```
HTML (Structure) + CSS (Styling) + JavaScript (Behavior) = Complete Web Page
     ↓
   React (generates HTML dynamically using JSX)
     ↓
   NestJS (serves HTML or API responses to the frontend)
```

---

## 1.2 Semantic HTML

### What is Semantic HTML?

Semantic HTML means using HTML elements that **clearly describe their meaning** to both the browser and the developer.

**Non-Semantic Elements:** `<div>`, `<span>` — These tell nothing about their content.

**Semantic Elements:** `<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<aside>`, `<footer>` — These clearly describe what they contain.

### Why It Matters

1. **SEO** — Search engines understand your page better
2. **Accessibility** — Screen readers can navigate your page properly
3. **Maintainability** — Other developers understand your code faster
4. **Interview Points** — Interviewers LOVE asking about this

### Memory Trick 🧠

> Think of semantic HTML like labeled boxes when you move house.
> A box labeled "Kitchen Utensils" (semantic) is way more helpful than a box labeled "Stuff" (non-semantic).

### Code Example — Non-Semantic vs Semantic

```html
<!-- ❌ BAD: Non-Semantic HTML -->
<div id="header">
  <div class="nav">
    <div class="nav-item">Home</div>
    <div class="nav-item">About</div>
  </div>
</div>
<div id="main">
  <div class="article">
    <div class="title">My Blog Post</div>
    <div class="content">This is my blog post content.</div>
  </div>
</div>
<div id="footer">
  <div class="copyright">© 2025</div>
</div>

<!-- ✅ GOOD: Semantic HTML -->
<header>
  <!-- The <header> element represents introductory content -->
  <nav>
    <!-- The <nav> element represents a section of navigation links -->
    <a href="/">Home</a>
    <a href="/about">About</a>
  </nav>
</header>

<main>
  <!-- The <main> element represents the main content of the page -->
  <article>
    <!-- The <article> element represents a self-contained piece of content -->
    <h1>My Blog Post</h1>
    <!-- <h1> is the main heading — only ONE per page for SEO -->
    <p>This is my blog post content.</p>
    <!-- <p> is for paragraphs of text -->
  </article>
</main>

<footer>
  <!-- The <footer> element represents footer information -->
  <p>&copy; 2025</p>
</footer>
```

### Common Semantic Elements Table

| Element     | Purpose                             | Use Case                        |
|-------------|-------------------------------------|---------------------------------|
| `<header>`  | Introductory content or navigation  | Logo, nav bar, hero section     |
| `<nav>`     | Navigation links                    | Menu, breadcrumbs, pagination   |
| `<main>`    | Primary page content                | Only ONE per page               |
| `<section>` | Thematic grouping of content        | "About Us", "Services"          |
| `<article>` | Self-contained content              | Blog post, news article, card   |
| `<aside>`   | Sidebar or tangential content       | Related links, ads, author bio  |
| `<footer>`  | Footer of a section or page         | Copyright, contact info, links  |
| `<figure>`  | Self-contained media                | Images with captions            |
| `<time>`    | Date/time                           | Publication dates, event times  |
| `<mark>`    | Highlighted text                    | Search result highlights        |

---

## 1.3 HTML Forms

### Why Forms Matter

Forms are how users **interact** with web applications. Login pages, registration forms, search bars, checkout processes — they're ALL forms. Every web app you'll build at your internship will involve forms.

### Complete Form Example

```html
<!-- 
  A complete registration form with proper structure.
  action="/register" — Where the form data is sent when submitted
  method="POST"     — How the data is sent (POST = secure, hidden from URL)
-->
<form action="/register" method="POST" novalidate>
  <!-- 
    novalidate: Disables browser's built-in validation
    Why? So we can use our OWN validation with JavaScript for better UX
  -->

  <!-- FIELDSET groups related form elements together -->
  <fieldset>
    <!-- LEGEND provides a caption for the fieldset -->
    <legend>Personal Information</legend>

    <!-- 
      LABEL + INPUT pattern:
      The "for" attribute in <label> MUST match the "id" in <input>
      This creates a clickable label — clicking the label focuses the input
      This is CRITICAL for accessibility
    -->
    <label for="fullName">Full Name:</label>
    <input 
      type="text"           
      id="fullName"          
      name="fullName"        
      placeholder="Juan Dela Cruz"  
      required               
      minlength="2"          
      maxlength="100"        
      aria-describedby="nameHelp"
    />
    <!-- 
      type="text"      — Accepts any text input
      id="fullName"    — Unique identifier (matches label's "for")
      name="fullName"  — The key sent to the server (e.g., fullName=Juan)
      required         — The field MUST be filled out
      minlength="2"    — Minimum 2 characters
      maxlength="100"  — Maximum 100 characters
      aria-describedby — Links to a help text element for screen readers
    -->
    <small id="nameHelp">Enter your complete name</small>

    <label for="email">Email:</label>
    <input 
      type="email"     
      id="email"       
      name="email"     
      placeholder="you@example.com"
      required
      pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
    />
    <!--
      type="email"  — Browser validates email format automatically
      pattern="..." — A regex pattern for additional validation
    -->

    <label for="password">Password:</label>
    <input 
      type="password"  
      id="password"    
      name="password"  
      required
      minlength="8"
      aria-describedby="passHelp"
    />
    <!-- type="password" — Hides the input text (shows dots) -->
    <small id="passHelp">Minimum 8 characters</small>

    <label for="birthdate">Birthdate:</label>
    <input 
      type="date"      
      id="birthdate"   
      name="birthdate"
    />
    <!-- type="date" — Shows a date picker in the browser -->

    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
      <!-- <select> creates a dropdown menu -->
      <option value="">-- Select --</option>
      <!-- The empty value option serves as a placeholder -->
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select>

    <label for="bio">Bio:</label>
    <textarea 
      id="bio" 
      name="bio" 
      rows="4" 
      cols="50"
      placeholder="Tell us about yourself..."
    ></textarea>
    <!-- <textarea> is for multi-line text input -->

    <!-- CHECKBOX — for multiple selections -->
    <fieldset>
      <legend>Skills:</legend>
      <label>
        <input type="checkbox" name="skills" value="html" /> HTML
      </label>
      <label>
        <input type="checkbox" name="skills" value="css" /> CSS
      </label>
      <label>
        <input type="checkbox" name="skills" value="js" /> JavaScript
      </label>
    </fieldset>

    <!-- RADIO BUTTONS — for single selection from a group -->
    <fieldset>
      <legend>Experience Level:</legend>
      <label>
        <input type="radio" name="level" value="beginner" required /> Beginner
        <!-- All radio buttons with the SAME name attribute form a group -->
        <!-- Only ONE can be selected at a time -->
      </label>
      <label>
        <input type="radio" name="level" value="intermediate" /> Intermediate
      </label>
    </fieldset>

  </fieldset>

  <button type="submit">Register</button>
  <!-- type="submit" — Submits the form -->
  <!-- type="reset"  — Clears all form fields -->
  <!-- type="button" — Does nothing by default (use JavaScript) -->
</form>
```

### All Input Types You Should Know

| Type       | Purpose                    | Example                          |
|------------|----------------------------|----------------------------------|
| `text`     | Single-line text           | Name, username                   |
| `email`    | Email address              | Auto-validates format            |
| `password` | Hidden text input          | Login password                   |
| `number`   | Numeric input              | Age, quantity                    |
| `tel`      | Phone number               | Shows numeric keyboard on mobile |
| `date`     | Date picker                | Birthdate                        |
| `time`     | Time picker                | Appointment time                 |
| `url`      | URL input                  | Website address                  |
| `search`   | Search field               | Has a clear button               |
| `file`     | File upload                | Profile picture                  |
| `hidden`   | Hidden value               | CSRF token, user ID              |
| `range`    | Slider                     | Volume, brightness               |
| `color`    | Color picker               | Theme customization              |
| `checkbox` | Multiple choice            | Terms & conditions               |
| `radio`    | Single choice from group   | Gender, payment method           |

---

## 1.4 Accessibility (a11y)

### What is Accessibility?

Web accessibility means making websites usable by **everyone**, including people with disabilities (visual, hearing, motor, cognitive).

### Why It Matters for Interviews

- Companies are **legally required** to make accessible websites in many countries
- It shows you're a **thoughtful developer**
- Interviewers specifically test for this

### Key Accessibility Practices

```html
<!-- 1. Always provide alt text for images -->
<img src="logo.png" alt="Company Logo" />
<!-- alt="" for decorative images that don't convey information -->
<img src="divider.png" alt="" />

<!-- 2. Use ARIA labels when HTML semantics aren't enough -->
<button aria-label="Close menu">
  <!-- The X icon has no text, so aria-label tells screen readers what it does -->
  ✕
</button>

<!-- 3. Use ARIA roles for custom elements -->
<div role="alert">
  <!-- role="alert" tells screen readers to announce this immediately -->
  Your form has been submitted successfully!
</div>

<!-- 4. Use proper heading hierarchy -->
<h1>Page Title</h1>       <!-- Only ONE h1 per page -->
  <h2>Section Title</h2>  <!-- Sub-section of h1 -->
    <h3>Sub-section</h3>  <!-- Sub-section of h2 -->
<!-- NEVER skip levels (e.g., h1 → h3) -->

<!-- 5. Make links descriptive -->
<!-- ❌ BAD -->
<a href="/report">Click here</a>
<!-- ✅ GOOD -->
<a href="/report">Download the annual report</a>

<!-- 6. Ensure keyboard navigation -->
<!-- All interactive elements should be focusable -->
<a href="/">Home</a>       <!-- Focusable by default -->
<button>Submit</button>    <!-- Focusable by default -->
<input type="text" />      <!-- Focusable by default -->
<!-- Custom elements need tabindex -->
<div tabindex="0" role="button" onclick="doSomething()">
  Custom Button
</div>

<!-- 7. Use skip links for keyboard users -->
<a href="#main-content" class="skip-link">Skip to main content</a>
```

### ARIA Cheat Sheet

| Attribute           | Purpose                              |
|---------------------|--------------------------------------|
| `aria-label`        | Labels an element (no visible text)  |
| `aria-describedby`  | Points to a describing element       |
| `aria-hidden`       | Hides element from screen readers    |
| `aria-required`     | Marks field as required              |
| `aria-expanded`     | Indicates if a section is expanded   |
| `aria-live`         | Announces dynamic content changes    |
| `role`              | Defines the element's purpose        |

---

## 1.5 SEO Basics

### What is SEO?

SEO (Search Engine Optimization) is the practice of making your website **easier for search engines to find and rank**. Good HTML structure directly impacts SEO.

### HTML SEO Best Practices

```html
<!DOCTYPE html>
<html lang="en">
<!-- lang="en" tells search engines the page language -->
<head>
  <!-- META CHARSET — Defines character encoding -->
  <meta charset="UTF-8" />
  
  <!-- VIEWPORT — Makes site responsive on mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <!-- TITLE — Most important SEO element. Keep it under 60 characters -->
  <title>Web Developer Portfolio | Juan Dela Cruz</title>
  
  <!-- META DESCRIPTION — Appears in search results. Keep it under 160 chars -->
  <meta name="description" content="Juan Dela Cruz - Web developer specializing in React, NestJS, and PostgreSQL. View my projects and hire me." />
  
  <!-- OPEN GRAPH — How your page appears when shared on social media -->
  <meta property="og:title" content="Juan's Portfolio" />
  <meta property="og:description" content="Web Developer Portfolio" />
  <meta property="og:image" content="https://example.com/preview.jpg" />
  
  <!-- CANONICAL URL — Prevents duplicate content issues -->
  <link rel="canonical" href="https://example.com/portfolio" />
</head>
<body>
  <!-- Use ONE h1 per page — tells search engines the main topic -->
  <h1>Full Stack Web Developer Portfolio</h1>
  
  <!-- Use descriptive anchor text -->
  <a href="/projects">View my projects</a>
  
  <!-- Always add alt text to images -->
  <img src="project.jpg" alt="E-commerce project screenshot showing product listing page" />
</body>
</html>
```

---

## 1.6 HTML Technical Interview Questions

### Basic Questions

**Q1: What is the difference between `<div>` and `<span>`?**

> **Answer:** `<div>` is a **block-level** element — it takes up the full width available and starts on a new line. `<span>` is an **inline** element — it only takes up as much width as needed and stays in the same line as surrounding content.
>
> **Why this answer is correct:** Understanding block vs inline is fundamental to HTML layout. Block elements stack vertically; inline elements flow horizontally.
>
> **Common mistake:** Saying they're the same because both are non-semantic. They behave very differently in layout.

**Q2: What is the purpose of the `alt` attribute in `<img>` tags?**

> **Answer:** The `alt` attribute provides **alternative text** that describes the image. It serves three purposes: (1) it's displayed when the image fails to load, (2) screen readers read it aloud for visually impaired users, and (3) search engines use it to understand image content for SEO.
>
> **Common mistake:** Leaving `alt` empty or putting non-descriptive text like "image" or "photo".

**Q3: What is the difference between `id` and `class`?**

> **Answer:** An `id` must be **unique** on the page — only one element can have a specific id. A `class` can be **reused** on multiple elements. IDs have higher CSS specificity than classes.
>
> **Common mistake:** Using the same `id` on multiple elements. This is invalid HTML and can cause JavaScript bugs.

### Intermediate Questions

**Q4: What is the difference between `<section>` and `<div>`?**

> **Answer:** `<section>` is a **semantic** element that represents a thematic grouping of content, usually with a heading. `<div>` is a **generic container** with no semantic meaning. Use `<section>` when the content forms a logical group; use `<div>` only for styling or layout purposes when no semantic element fits.
>
> **Common mistake:** Using `<section>` as a replacement for `<div>` everywhere. Only use `<section>` when the content is thematically related.

**Q5: What are `data-*` attributes and when would you use them?**

> **Answer:** `data-*` attributes let you **store custom data** on HTML elements. They're accessible via JavaScript using `element.dataset`. Use them when you need to attach extra information to elements that doesn't have a dedicated HTML attribute.
>
> ```html
> <button data-user-id="42" data-action="delete">Delete User</button>
> ```
> ```javascript
> // Accessing in JavaScript:
> const btn = document.querySelector('button');
> console.log(btn.dataset.userId); // "42"
> console.log(btn.dataset.action); // "delete"
> ```
>
> **Common mistake:** Storing sensitive information in `data-*` attributes — they're visible in the page source.

### Practical Questions

**Q6: Create an accessible navigation bar with 4 links.**

> ```html
> <nav aria-label="Main Navigation">
>   <ul>
>     <li><a href="/" aria-current="page">Home</a></li>
>     <li><a href="/about">About</a></li>
>     <li><a href="/projects">Projects</a></li>
>     <li><a href="/contact">Contact</a></li>
>   </ul>
> </nav>
> ```
> **Key points:** Uses `<nav>`, `aria-label` for screen readers, `aria-current="page"` for current page, semantic `<ul>` for the list of links.

### Follow-Up Questions

**Q7: "You mentioned `aria-current='page'`. What happens if you don't include it?"**

> **Answer:** Without `aria-current="page"`, screen reader users won't know which page they're currently on. Sighted users can see the active state (highlighted link), but visually impaired users rely on ARIA attributes to get the same information.

---

## 1.7 HTML Hands-On Exercises

### Easy Exercise

**Problem:** Create a personal profile card using semantic HTML. Include:
- Your name (as a heading)
- A profile image with alt text
- A short bio paragraph
- A list of 3 skills
- A link to your email

**Expected Output:** A structured, semantic HTML page with proper elements.

**Solution:**

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile Card | Juan Dela Cruz</title>
</head>
<body>
  <main>
    <article>
      <header>
        <img src="profile.jpg" alt="Juan Dela Cruz smiling in front of a computer" />
        <h1>Juan Dela Cruz</h1>
      </header>
      <p>BSIT student passionate about full-stack web development.</p>
      <section>
        <h2>Skills</h2>
        <ul>
          <li>ReactJS</li>
          <li>JavaScript</li>
          <li>PHP</li>
        </ul>
      </section>
      <footer>
        <a href="mailto:juan@example.com">Email Me</a>
      </footer>
    </article>
  </main>
</body>
</html>
```

### Medium Exercise

**Problem:** Create a complete registration form with:
- Full name, email, password, confirm password
- Date of birth using a date picker
- Gender selection using radio buttons
- A "Terms and Conditions" checkbox
- Proper labels, fieldsets, and accessibility attributes
- HTML5 validation (required fields, email format, minimum password length)

### Internship-Level Exercise

**Problem:** Build a complete product listing page for an e-commerce site using ONLY semantic HTML (no CSS). Include:
- Navigation with logo and 5 links
- Search bar in the header
- Main content area with 6 product cards (each with image, title, price, description, "Add to Cart" button)
- Sidebar with category filters (checkboxes)
- Footer with contact info and social media links
- All accessibility requirements met
- Proper SEO meta tags

---

## 1.8 HTML Summary & Cheat Sheet

```
📌 REMEMBER:
- Use semantic HTML elements whenever possible
- One <h1> per page, never skip heading levels
- Always add alt text to images
- Labels must link to inputs (for="id")
- Use <main>, <header>, <footer>, <nav>, <section>, <article>
- Forms need proper validation attributes
- Test with a screen reader
```

---

# SECTION 2: CSS REVIEW

## 2.1 Concept Explanation

### What is CSS?

CSS (Cascading Style Sheets) is the language that **controls how HTML elements look** on screen. If HTML is the skeleton, CSS is the skin, clothing, and makeup.

### Why Companies Use It

- Separates content (HTML) from presentation (CSS)
- Enables responsive design (works on all screen sizes)
- Allows consistent branding across pages
- Improves user experience with animations and transitions

### How It Connects

```
HTML (structure) → CSS (styling) → JavaScript (interactivity)
                    ↓
              React components use CSS modules, styled-components, or plain CSS
```

---

## 2.2 Selectors

### What Are Selectors?

CSS selectors **target HTML elements** to apply styles. Think of them as "addresses" that tell CSS which elements to style.

```css
/* ELEMENT SELECTOR — targets ALL elements of that type */
p {
  color: blue;  /* Every <p> on the page will be blue */
}

/* CLASS SELECTOR — targets elements with a specific class */
.card {
  padding: 20px;  /* Every element with class="card" gets padding */
}

/* ID SELECTOR — targets ONE specific element */
#header {
  background: black;  /* Only the element with id="header" */
}

/* ATTRIBUTE SELECTOR — targets elements with a specific attribute */
input[type="email"] {
  border: 2px solid green;  /* Only email inputs */
}

/* DESCENDANT SELECTOR — targets elements INSIDE other elements */
nav a {
  color: white;  /* Only <a> tags that are inside <nav> */
}

/* CHILD SELECTOR — targets DIRECT children only */
ul > li {
  list-style: none;  /* Only <li> that are DIRECT children of <ul> */
}

/* PSEUDO-CLASS — targets elements in a specific STATE */
a:hover {
  color: red;  /* When user hovers over a link */
}

button:focus {
  outline: 2px solid blue;  /* When button is focused (tabbed to) */
}

input:invalid {
  border-color: red;  /* When input fails validation */
}

/* PSEUDO-ELEMENT — targets a PART of an element */
p::first-line {
  font-weight: bold;  /* Only the first line of every paragraph */
}

p::before {
  content: "→ ";  /* Adds content BEFORE the paragraph text */
}

/* ADJACENT SIBLING — targets element IMMEDIATELY after */
h2 + p {
  font-size: 1.2em;  /* Only <p> that comes right after <h2> */
}

/* GENERAL SIBLING — targets ALL siblings after */
h2 ~ p {
  color: gray;  /* All <p> elements that follow <h2> */
}
```

---

## 2.3 Specificity

### What is Specificity?

When multiple CSS rules target the same element, **specificity determines which rule wins**. Think of it as a scoring system.

### Specificity Scoring System

| Selector Type    | Score   | Example              |
|------------------|---------|----------------------|
| Inline styles    | 1,0,0,0 | `style="color: red"` |
| ID selectors     | 0,1,0,0 | `#header`            |
| Class selectors  | 0,0,1,0 | `.card`              |
| Element selectors| 0,0,0,1 | `div`                |

### Memory Trick 🧠

> **Think of specificity like a 4-digit number:**
> Inline (1000) > ID (100) > Class (10) > Element (1)
> The highest number wins!

```css
/* Specificity: 0,0,0,1 (just one element) */
p { color: blue; }

/* Specificity: 0,0,1,0 (one class — WINS over element) */
.text { color: red; }

/* Specificity: 0,1,0,0 (one ID — WINS over class) */
#intro { color: green; }

/* Specificity: 0,1,1,1 (one ID + one class + one element) */
div#intro.text { color: purple; }

/* !important OVERRIDES everything — but DON'T use it! */
p { color: orange !important; } /* ← AVOID THIS */
```

### Common Mistake ⚠️

Using `!important` to fix specificity issues. This creates a specificity war and makes CSS unmaintainable. Instead, **restructure your selectors**.

---

## 2.4 Box Model

### What is the Box Model?

Every HTML element is a **rectangular box** consisting of 4 layers (from inside out):

1. **Content** — The actual text, image, etc.
2. **Padding** — Space between content and border (inside the box)
3. **Border** — The edge of the box
4. **Margin** — Space between this box and other boxes (outside the box)

### Memory Trick 🧠

> Think of it like a picture frame:
> - **Content** = the photo
> - **Padding** = the mat (space between photo and frame)
> - **Border** = the frame itself
> - **Margin** = space between frames on the wall

```css
.card {
  /* CONTENT: defined by width and height */
  width: 300px;
  height: 200px;

  /* PADDING: space INSIDE the box (between content and border) */
  padding: 20px;              /* All sides */
  padding: 10px 20px;         /* Vertical | Horizontal */
  padding: 10px 20px 30px 40px; /* Top | Right | Bottom | Left (clockwise) */

  /* BORDER: the edge of the box */
  border: 2px solid #333;

  /* MARGIN: space OUTSIDE the box */
  margin: 20px;               /* All sides */
  margin: 0 auto;             /* 0 top/bottom, auto left/right (CENTERS the box) */

  /* 
    BOX-SIZING: This is CRITICAL!
    
    WITHOUT box-sizing: border-box:
    Total width = width + padding-left + padding-right + border-left + border-right
    300 + 20 + 20 + 2 + 2 = 344px (UNEXPECTED!)
    
    WITH box-sizing: border-box:
    Total width = width (padding and border are INCLUDED)
    300px (WHAT YOU EXPECT!)
  */
  box-sizing: border-box;
}

/* 🎯 BEST PRACTICE: Apply border-box to everything */
*, *::before, *::after {
  box-sizing: border-box;
}
```

---

## 2.5 Flexbox

### What is Flexbox?

Flexbox (Flexible Box Layout) is a **one-dimensional layout system** for arranging items in a row OR a column. It makes alignment, spacing, and responsive design much easier.

### Memory Trick 🧠

> Think of Flexbox like a **clothesline**:
> - The clothesline is the **flex container** (parent)
> - The clothes hanging on it are **flex items** (children)
> - You can space clothes evenly, group them, or stretch them

```css
/* FLEX CONTAINER (parent) */
.container {
  display: flex;            /* Activates flexbox */
  
  /* MAIN AXIS DIRECTION */
  flex-direction: row;      /* Left to right (default) */
  flex-direction: column;   /* Top to bottom */
  flex-direction: row-reverse;    /* Right to left */
  flex-direction: column-reverse; /* Bottom to top */
  
  /* ALIGNMENT on main axis (horizontal if row, vertical if column) */
  justify-content: flex-start;    /* Items at the start */
  justify-content: flex-end;      /* Items at the end */
  justify-content: center;        /* Items at the center */
  justify-content: space-between; /* Equal space BETWEEN items */
  justify-content: space-around;  /* Equal space AROUND items */
  justify-content: space-evenly;  /* Equal space EVERYWHERE */
  
  /* ALIGNMENT on cross axis (vertical if row, horizontal if column) */
  align-items: stretch;     /* Items stretch to fill (default) */
  align-items: flex-start;  /* Items at the start of cross axis */
  align-items: flex-end;    /* Items at the end of cross axis */
  align-items: center;      /* Items centered on cross axis */
  
  /* WRAPPING — what happens when items don't fit */
  flex-wrap: nowrap;  /* All items on one line (default, may overflow) */
  flex-wrap: wrap;    /* Items wrap to next line */
  
  /* GAP — spacing between items */
  gap: 20px;          /* Equal gap between all items */
  row-gap: 10px;      /* Gap between rows */
  column-gap: 20px;   /* Gap between columns */
}

/* FLEX ITEMS (children) */
.item {
  flex-grow: 1;   /* Item can GROW to fill available space */
  flex-shrink: 1; /* Item can SHRINK if not enough space */
  flex-basis: 200px; /* Default size before growing/shrinking */
  
  /* SHORTHAND: grow | shrink | basis */
  flex: 1;         /* grow:1, shrink:1, basis:0% — fills equally */
  flex: 0 0 200px; /* Fixed 200px, no grow, no shrink */
  
  /* SELF-ALIGNMENT — override align-items for this specific item */
  align-self: center;
  
  /* ORDER — change visual order without changing HTML */
  order: 2;  /* Higher number = later in order */
}
```

### Practical Flexbox Examples

```css
/* 🎯 Center anything perfectly */
.center-everything {
  display: flex;
  justify-content: center;  /* Horizontal center */
  align-items: center;      /* Vertical center */
  height: 100vh;            /* Full viewport height */
}

/* 🎯 Navigation bar */
.navbar {
  display: flex;
  justify-content: space-between; /* Logo left, links right */
  align-items: center;
  padding: 0 20px;
}

/* 🎯 Card grid that wraps */
.card-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}
.card-grid .card {
  flex: 0 0 calc(33.33% - 14px); /* 3 cards per row with gap */
}

/* 🎯 Footer with columns */
.footer {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}
```

---

## 2.6 CSS Grid

### What is CSS Grid?

CSS Grid is a **two-dimensional layout system** — it handles both rows AND columns simultaneously. While Flexbox is for one-dimensional layouts, Grid is for complex two-dimensional layouts.

### Memory Trick 🧠

> Think of Grid like a **spreadsheet** (Excel):
> - The spreadsheet is the **grid container**
> - Each cell is a **grid item**
> - You can merge cells, span rows/columns, and create complex layouts

```css
/* GRID CONTAINER (parent) */
.grid-container {
  display: grid;
  
  /* DEFINING COLUMNS */
  grid-template-columns: 200px 200px 200px; /* Three 200px columns */
  grid-template-columns: 1fr 1fr 1fr;       /* Three equal columns */
  grid-template-columns: repeat(3, 1fr);     /* Same as above (shorthand) */
  grid-template-columns: 250px 1fr 250px;    /* Sidebar | Content | Sidebar */
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* Responsive! */
  
  /* DEFINING ROWS */
  grid-template-rows: 80px 1fr 60px; /* Header | Content | Footer */
  grid-template-rows: auto;          /* Height based on content */
  
  /* GAP between grid cells */
  gap: 20px;             /* Both row and column gap */
  row-gap: 10px;
  column-gap: 20px;
  
  /* NAMED AREAS — the most readable way to define layouts */
  grid-template-areas:
    "header header  header"
    "sidebar main   aside"
    "footer footer  footer";
}

/* GRID ITEMS — placing items in the grid */
.header  { grid-area: header; }
.sidebar { grid-area: sidebar; }
.main    { grid-area: main; }
.aside   { grid-area: aside; }
.footer  { grid-area: footer; }

/* ALTERNATIVE: Place items using line numbers */
.item {
  grid-column: 1 / 3;  /* Start at column 1, end at column 3 (spans 2 cols) */
  grid-row: 1 / 2;     /* Start at row 1, end at row 2 (spans 1 row) */
  
  /* SHORTHAND */
  grid-column: span 2;  /* Span 2 columns from current position */
  grid-row: span 3;     /* Span 3 rows */
}
```

### Complete Page Layout with Grid

```css
/* Full page layout */
body {
  display: grid;
  grid-template-columns: 250px 1fr;
  grid-template-rows: 80px 1fr 60px;
  grid-template-areas:
    "header header"
    "sidebar main"
    "footer footer";
  min-height: 100vh;
  gap: 0;
}
header  { grid-area: header;  background: #1a1a2e; }
aside   { grid-area: sidebar; background: #16213e; }
main    { grid-area: main;    background: #0f3460; }
footer  { grid-area: footer;  background: #1a1a2e; }
```

### When to Use Flexbox vs Grid

| Use Flexbox When...                    | Use Grid When...                          |
|----------------------------------------|-------------------------------------------|
| Layout is in ONE direction             | Layout is in TWO directions               |
| Aligning items in a row or column      | Creating a full page layout               |
| Navigation bars                        | Dashboard layouts                         |
| Card rows                              | Complex component arrangements            |
| Centering content                      | Overlapping elements                      |

---

## 2.7 Positioning

```css
/* STATIC — Default. Element flows normally in the document */
.static { position: static; }

/* RELATIVE — Positioned relative to its NORMAL position */
.relative {
  position: relative;
  top: 10px;    /* Moves DOWN 10px from where it normally would be */
  left: 20px;   /* Moves RIGHT 20px from where it normally would be */
  /* The original space it occupied is PRESERVED */
}

/* ABSOLUTE — Positioned relative to nearest positioned ANCESTOR */
.parent {
  position: relative;  /* This becomes the reference point */
}
.absolute {
  position: absolute;
  top: 0;       /* 0px from the TOP of the parent */
  right: 0;     /* 0px from the RIGHT of the parent */
  /* The element is REMOVED from the normal flow */
}

/* FIXED — Positioned relative to the VIEWPORT (stays when scrolling) */
.fixed {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  /* Used for: sticky headers, floating buttons, modals */
}

/* STICKY — Hybrid of relative and fixed */
.sticky {
  position: sticky;
  top: 0;  /* Sticks to the top when you scroll past it */
  /* Used for: sticky table headers, nav bars that stick on scroll */
}
```

---

## 2.8 Responsive Design & Media Queries

### What is Responsive Design?

Responsive design means your website **adapts to different screen sizes** — desktop, tablet, and mobile.

```css
/* MOBILE-FIRST APPROACH (recommended) */
/* Base styles = mobile (smallest screen) */
.container {
  width: 100%;
  padding: 10px;
}

.card-grid {
  display: grid;
  grid-template-columns: 1fr; /* 1 column on mobile */
  gap: 15px;
}

/* Tablet (768px and up) */
@media (min-width: 768px) {
  .container {
    width: 750px;
    margin: 0 auto;
    padding: 20px;
  }
  
  .card-grid {
    grid-template-columns: repeat(2, 1fr); /* 2 columns on tablet */
  }
}

/* Desktop (1024px and up) */
@media (min-width: 1024px) {
  .container {
    width: 960px;
  }
  
  .card-grid {
    grid-template-columns: repeat(3, 1fr); /* 3 columns on desktop */
  }
}

/* Large Desktop (1200px and up) */
@media (min-width: 1200px) {
  .container {
    width: 1140px;
  }
  
  .card-grid {
    grid-template-columns: repeat(4, 1fr); /* 4 columns on large screens */
  }
}

/* 🎯 Common breakpoints to remember:
   320px  — Small phones
   480px  — Large phones
   768px  — Tablets
   1024px — Small laptops
   1200px — Desktops
   1440px — Large desktops
*/
```

---

## 2.9 CSS Variables (Custom Properties)

```css
/* Define variables in :root for global access */
:root {
  /* COLORS */
  --primary-color: #6c5ce7;
  --secondary-color: #00b894;
  --text-color: #2d3436;
  --bg-color: #f5f6fa;
  --error-color: #d63031;
  --success-color: #00b894;
  
  /* SPACING */
  --spacing-sm: 8px;
  --spacing-md: 16px;
  --spacing-lg: 32px;
  
  /* TYPOGRAPHY */
  --font-primary: 'Inter', sans-serif;
  --font-size-sm: 0.875rem;
  --font-size-md: 1rem;
  --font-size-lg: 1.5rem;
  
  /* BORDERS */
  --border-radius: 8px;
  --shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* USE variables with var() */
.card {
  background: var(--bg-color);
  color: var(--text-color);
  padding: var(--spacing-md);
  border-radius: var(--border-radius);
  box-shadow: var(--shadow);
  font-family: var(--font-primary);
}

.btn-primary {
  background: var(--primary-color);
  color: white;
  padding: var(--spacing-sm) var(--spacing-md);
  border-radius: var(--border-radius);
}

/* DARK MODE with CSS Variables */
[data-theme="dark"] {
  --text-color: #f5f6fa;
  --bg-color: #2d3436;
}
```

---

## 2.10 CSS Animations

```css
/* TRANSITIONS — animate changes between states */
.button {
  background: #6c5ce7;
  color: white;
  padding: 12px 24px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  
  /* transition: property duration timing-function delay */
  transition: all 0.3s ease;
  /* all        — animate ALL properties that change */
  /* 0.3s       — takes 0.3 seconds */
  /* ease       — starts slow, speeds up, ends slow */
}

.button:hover {
  background: #5f3dc4;
  transform: translateY(-2px);  /* Moves up 2px */
  box-shadow: 0 4px 15px rgba(108, 92, 231, 0.4);
}

/* KEYFRAME ANIMATIONS — for complex, multi-step animations */
@keyframes fadeIn {
  from {
    opacity: 0;           /* Start invisible */
    transform: translateY(20px); /* Start 20px below */
  }
  to {
    opacity: 1;           /* End fully visible */
    transform: translateY(0);    /* End at normal position */
  }
}

.card {
  /* animation: name duration timing-function delay iteration-count direction */
  animation: fadeIn 0.5s ease forwards;
  /* forwards — keeps the final state after animation ends */
}

/* MULTI-STEP animation */
@keyframes pulse {
  0%   { transform: scale(1); }
  50%  { transform: scale(1.05); }
  100% { transform: scale(1); }
}

.notification {
  animation: pulse 2s ease-in-out infinite;
  /* infinite — repeats forever */
}

/* LOADING SPINNER */
@keyframes spin {
  from { transform: rotate(0deg); }
  to   { transform: rotate(360deg); }
}

.spinner {
  width: 40px;
  height: 40px;
  border: 4px solid #dfe6e9;
  border-top-color: #6c5ce7;
  border-radius: 50%;
  animation: spin 1s linear infinite;
}
```

---

## 2.11 CSS Interview Questions

### Basic Questions

**Q1: What is the CSS Box Model?**

> **Answer:** Every HTML element is a rectangular box with four layers: **content** (the actual content), **padding** (space between content and border), **border** (the edge), and **margin** (space between elements). By default, `width` only sets the content width. Using `box-sizing: border-box` makes `width` include padding and border.
>
> **Common mistake:** Forgetting that default `box-sizing: content-box` causes elements to be wider than the specified width.

**Q2: What is the difference between `margin` and `padding`?**

> **Answer:** **Padding** is space INSIDE the element (between content and border). **Margin** is space OUTSIDE the element (between this element and others). Padding is affected by the element's background color; margin is always transparent.
>
> **Common mistake:** Not knowing about **margin collapse** — when two vertical margins touch, they merge into one (the larger one wins).

### Intermediate Questions

**Q3: Explain CSS specificity and how conflicts are resolved.**

> **Answer:** Specificity is a scoring system: Inline styles (1000) > ID selectors (100) > Class/attribute/pseudo-class selectors (10) > Element/pseudo-element selectors (1). When multiple rules target the same element, the rule with higher specificity wins. If specificity is equal, the last rule in the CSS file wins.
>
> **Common mistake:** Using `!important` to override styles instead of fixing specificity.

**Q4: What is the difference between Flexbox and CSS Grid?**

> **Answer:** **Flexbox** is a **one-dimensional** layout system — it handles layout in a row OR a column. **CSS Grid** is a **two-dimensional** layout system — it handles rows AND columns simultaneously. Use Flexbox for components (nav bars, card rows); use Grid for page layouts and complex arrangements.
>
> **Common mistake:** Thinking you must choose one or the other. They work great together — Grid for the page layout, Flexbox for components inside grid areas.

---

## 2.12 CSS Hands-On Exercises

### Easy Exercise

**Build a responsive card component** with:
- Profile image (circular)
- Name, title, description
- 3 skill tags
- A "Contact" button with hover effect
- Looks good on mobile and desktop

### Medium Exercise

**Build a responsive navigation bar** with:
- Logo on the left
- 5 navigation links on the right
- Hamburger menu on mobile
- Smooth dropdown animation
- Active state indicator
- Sticky on scroll

### Internship-Level Exercise

**Build a complete dashboard layout** with:
- Sidebar navigation (collapsible)
- Top header bar
- Main content area with 4 stat cards
- A responsive table
- Dark mode toggle using CSS variables
- Smooth transitions everywhere

---

## 2.13 CSS Summary & Cheat Sheet

```
📌 REMEMBER:
- Always use box-sizing: border-box
- Mobile-first design (start with small screens)
- Use CSS variables for consistency
- Flexbox = 1D layout, Grid = 2D layout
- Specificity: Inline > ID > Class > Element
- Use transitions for hover effects
- Use @keyframes for complex animations
- Never use !important unless absolutely necessary
```

---

# SECTION 3: JAVASCRIPT REVIEW

## 3.1 Concept Explanation

### What is JavaScript?

JavaScript is the **programming language of the web**. It makes web pages interactive — handling user clicks, validating forms, fetching data from servers, and updating the page without reloading.

### Why Companies Use It

- It's the **only language that runs natively in browsers**
- It works on both frontend (React) AND backend (Node.js/NestJS)
- Massive ecosystem of libraries and frameworks
- Essential for modern web development

### How It Connects

```
Frontend: JavaScript → React (UI framework built on JS)
Backend:  JavaScript → Node.js → NestJS (backend framework)
Database: Prisma (JS/TS library) → PostgreSQL
```

---

## 3.2 Variables

```javascript
// VAR — Old way. DON'T use it. Has issues with scope.
var name = "Juan"; // Function-scoped, can be redeclared (BAD)

// LET — Use when the value will CHANGE
let age = 21; // Block-scoped, can be reassigned
age = 22;     // ✅ OK — value can change

// CONST — Use when the value will NOT change
const PI = 3.14159; // Block-scoped, CANNOT be reassigned
// PI = 3.14; // ❌ ERROR — cannot reassign const

// 🎯 RULE: Always use CONST by default. Only use LET when you need to reassign.
// NEVER use VAR.

// IMPORTANT: const with objects and arrays
const user = { name: "Juan", age: 21 };
user.age = 22;        // ✅ OK — you can change PROPERTIES
// user = {};          // ❌ ERROR — you can't reassign the variable itself

const skills = ["HTML", "CSS"];
skills.push("JS");    // ✅ OK — you can modify the ARRAY
// skills = [];        // ❌ ERROR — you can't reassign the variable itself
```

---

## 3.3 Data Types

```javascript
// PRIMITIVE TYPES (stored by value)
const str = "Hello";         // String
const num = 42;              // Number (includes integers and decimals)
const bool = true;           // Boolean (true or false)
const nothing = null;        // Null (intentionally empty)
let notDefined;              // Undefined (not yet assigned)
const bigInt = 9007199254740991n; // BigInt (very large numbers)
const sym = Symbol("id");    // Symbol (unique identifier)

// REFERENCE TYPES (stored by reference)
const arr = [1, 2, 3];                // Array
const obj = { name: "Juan", age: 21}; // Object
const func = function() {};           // Function

// CHECKING TYPES
typeof "hello"     // "string"
typeof 42          // "number"
typeof true        // "boolean"
typeof undefined   // "undefined"
typeof null        // "object"  ← This is a KNOWN BUG in JavaScript!
typeof []          // "object"  ← Arrays are objects
typeof {}          // "object"

// CORRECT way to check for arrays
Array.isArray([1,2,3]); // true
Array.isArray("hello"); // false

// TYPE COERCION — JavaScript automatically converts types
// This causes MANY bugs. Be aware of it!
"5" + 3    // "53"  (string concatenation, NOT addition!)
"5" - 3    // 2     (subtraction converts string to number)
"5" == 5   // true  (loose equality, converts types)
"5" === 5  // false (strict equality, NO type conversion)

// 🎯 RULE: ALWAYS use === (strict equality) and !== (strict inequality)
```

---

## 3.4 Functions

```javascript
// FUNCTION DECLARATION — Hoisted (can be called before it's defined)
function greet(name) {
  return `Hello, ${name}!`;
}

// FUNCTION EXPRESSION — NOT hoisted
const greet2 = function(name) {
  return `Hello, ${name}!`;
};

// ARROW FUNCTION — Modern, concise syntax (ES6)
const greet3 = (name) => {
  return `Hello, ${name}!`;
};

// ARROW FUNCTION — Short form (one expression, implicit return)
const greet4 = (name) => `Hello, ${name}!`;

// ARROW FUNCTION — One parameter (parentheses optional)
const double = n => n * 2;

// DEFAULT PARAMETERS
const greetUser = (name = "Guest") => `Hello, ${name}!`;
greetUser();        // "Hello, Guest!"
greetUser("Juan");  // "Hello, Juan!"

// REST PARAMETERS — Collect remaining arguments into an array
const sum = (...numbers) => {
  return numbers.reduce((total, num) => total + num, 0);
};
sum(1, 2, 3, 4); // 10

// DESTRUCTURED PARAMETERS — Extract properties from objects
const displayUser = ({ name, age, city = "Unknown" }) => {
  console.log(`${name}, ${age}, from ${city}`);
};
displayUser({ name: "Juan", age: 21 }); // "Juan, 21, from Unknown"

// HIGHER-ORDER FUNCTIONS — Functions that take or return functions
const createMultiplier = (multiplier) => {
  return (number) => number * multiplier;
};
const double2 = createMultiplier(2);
const triple = createMultiplier(3);
double2(5);  // 10
triple(5);   // 15
```

### Arrow Functions vs Regular Functions

| Feature              | Regular Function        | Arrow Function            |
|----------------------|-------------------------|---------------------------|
| Syntax               | `function() {}`         | `() => {}`                |
| `this` binding       | Dynamic (caller)        | Lexical (parent scope)    |
| Hoisting             | Yes                     | No                        |
| `arguments` object   | Yes                     | No                        |
| Use as constructor   | Yes                     | No                        |
| Use as method        | Yes                     | Avoid (this issues)       |

---

## 3.5 Arrays

```javascript
const fruits = ["apple", "banana", "cherry", "date"];

// ACCESSING elements (0-indexed)
fruits[0]; // "apple"
fruits[fruits.length - 1]; // "date" (last element)

// ADDING elements
fruits.push("elderberry");    // Add to END → ["apple","banana","cherry","date","elderberry"]
fruits.unshift("avocado");    // Add to START → ["avocado","apple","banana",...]

// REMOVING elements
fruits.pop();       // Remove from END → returns "elderberry"
fruits.shift();     // Remove from START → returns "avocado"
fruits.splice(1,1); // Remove 1 element at index 1 → removes "banana"

// FINDING elements
fruits.includes("cherry");       // true
fruits.indexOf("cherry");        // 2 (index of first occurrence)
fruits.find(f => f === "cherry"); // "cherry" (first match)
fruits.findIndex(f => f === "cherry"); // 2

// ===== ESSENTIAL ARRAY METHODS (used CONSTANTLY in React) =====

// MAP — Transform every element → returns NEW array
const numbers = [1, 2, 3, 4, 5];
const doubled = numbers.map(num => num * 2);
// [2, 4, 6, 8, 10]
// In React: users.map(user => <UserCard key={user.id} user={user} />)

// FILTER — Keep elements that pass a test → returns NEW array
const evens = numbers.filter(num => num % 2 === 0);
// [2, 4]
// In React: tasks.filter(task => !task.completed)

// REDUCE — Combine all elements into a single value
const total = numbers.reduce((accumulator, current) => {
  return accumulator + current;
}, 0); // 0 is the initial value
// 15

// FOREACH — Execute a function for each element (no return value)
numbers.forEach(num => console.log(num));

// SORT — Sort elements IN-PLACE (modifies original array!)
const scores = [40, 100, 1, 5, 25];
scores.sort((a, b) => a - b); // Ascending: [1, 5, 25, 40, 100]
scores.sort((a, b) => b - a); // Descending: [100, 40, 25, 5, 1]

// SPREAD OPERATOR — Create copies, merge arrays
const arr1 = [1, 2, 3];
const arr2 = [4, 5, 6];
const merged = [...arr1, ...arr2]; // [1, 2, 3, 4, 5, 6]
const copy = [...arr1]; // [1, 2, 3] — new array, not a reference

// DESTRUCTURING — Extract values into variables
const [first, second, ...rest] = [10, 20, 30, 40, 50];
// first = 10, second = 20, rest = [30, 40, 50]

// CHAINING — Combine methods
const result = numbers
  .filter(n => n > 2)    // [3, 4, 5]
  .map(n => n * 10)      // [30, 40, 50]
  .reduce((sum, n) => sum + n, 0); // 120
```

---

## 3.6 Objects

```javascript
// CREATING objects
const user = {
  name: "Juan",
  age: 21,
  skills: ["React", "JavaScript", "PHP"],
  address: {
    city: "Manila",
    country: "Philippines"
  },
  // Method (function inside an object)
  greet() {
    return `Hi, I'm ${this.name}!`;
  }
};

// ACCESSING properties
user.name;           // "Juan" (dot notation)
user["name"];        // "Juan" (bracket notation — useful for dynamic keys)
user.address.city;   // "Manila" (nested access)

// ADDING/MODIFYING properties
user.email = "juan@email.com"; // Add new property
user.age = 22;                  // Modify existing property

// DELETING properties
delete user.email;

// CHECKING if property exists
"name" in user;                  // true
user.hasOwnProperty("name");    // true

// OBJECT DESTRUCTURING — Extract properties into variables
const { name, age, skills } = user;
// name = "Juan", age = 21, skills = [...]

// Destructuring with RENAMING
const { name: userName, age: userAge } = user;
// userName = "Juan", userAge = 21

// Destructuring with DEFAULT VALUES
const { name, role = "Student" } = user;
// role = "Student" (since user.role doesn't exist)

// NESTED destructuring
const { address: { city, country } } = user;
// city = "Manila", country = "Philippines"

// SPREAD OPERATOR with objects
const updatedUser = { ...user, age: 22, role: "Intern" };
// Creates a new object with all user properties, but age is 22 and role is added

// OBJECT METHODS
Object.keys(user);    // ["name", "age", "skills", "address", "greet"]
Object.values(user);  // ["Juan", 21, [...], {...}, function]
Object.entries(user);  // [["name","Juan"], ["age",21], ...]

// Optional Chaining (?.) — Safely access nested properties
const city = user?.address?.city; // "Manila"
const zipCode = user?.address?.zip; // undefined (no error!)
// Without ?., accessing user.address.zip would throw an error if address was null
```

---

## 3.7 Scope, Hoisting, and Closures

### Scope

```javascript
// GLOBAL SCOPE — accessible everywhere
const globalVar = "I'm global";

function myFunction() {
  // FUNCTION SCOPE — accessible only inside this function
  const functionVar = "I'm function-scoped";
  
  if (true) {
    // BLOCK SCOPE — accessible only inside this block
    const blockVar = "I'm block-scoped";
    let anotherBlockVar = "Me too";
    var notBlockScoped = "I escape the block!"; // var ignores block scope!
    
    console.log(blockVar);        // ✅ Works
    console.log(functionVar);     // ✅ Works (inner can access outer)
    console.log(globalVar);       // ✅ Works
  }
  
  console.log(notBlockScoped);    // ✅ Works (var ignores block scope)
  // console.log(blockVar);       // ❌ ERROR — not accessible outside block
}

// console.log(functionVar);      // ❌ ERROR — not accessible outside function
```

### Hoisting

```javascript
// HOISTING — JavaScript moves declarations to the TOP of their scope

// Function declarations ARE hoisted (can call before defining)
sayHello(); // ✅ Works!
function sayHello() {
  console.log("Hello!");
}

// var IS hoisted (but value is undefined)
console.log(x); // undefined (NOT an error)
var x = 5;

// let and const are NOT hoisted (well, they are, but in a "temporal dead zone")
// console.log(y); // ❌ ReferenceError: Cannot access 'y' before initialization
let y = 5;

// 🎯 This is why we use const/let instead of var
```

### Closures

```javascript
// CLOSURE — A function that "remembers" the variables from the place where it was created

// Analogy: Think of a closure like a backpack. When a function is created,
// it puts all the variables it needs into its backpack and carries them everywhere.

function createCounter() {
  let count = 0; // This variable is "enclosed" in the closure
  
  return {
    increment: () => ++count,
    decrement: () => --count,
    getCount: () => count
  };
}

const counter = createCounter();
counter.increment(); // 1
counter.increment(); // 2
counter.decrement(); // 1
counter.getCount();  // 1

// The variable 'count' is not accessible from outside,
// but the returned functions can still access it!
// This is ENCAPSULATION (an OOP concept) achieved through closures.

// REAL-WORLD USE CASE: Private variables
function createUser(name) {
  let loginCount = 0; // Private — can't access from outside
  
  return {
    getName: () => name,
    login: () => {
      loginCount++;
      return `${name} logged in. Total logins: ${loginCount}`;
    },
    getLoginCount: () => loginCount
  };
}

const user = createUser("Juan");
user.login();          // "Juan logged in. Total logins: 1"
user.login();          // "Juan logged in. Total logins: 2"
user.getLoginCount();  // 2
// user.loginCount;    // undefined — it's private!
```

---

## 3.8 DOM Manipulation

```javascript
// The DOM (Document Object Model) is a tree representation of your HTML
// JavaScript can read, add, modify, and delete HTML elements through the DOM

// ===== SELECTING ELEMENTS =====

// By ID (returns ONE element)
const header = document.getElementById("header");

// By CSS selector (returns FIRST match)
const firstCard = document.querySelector(".card");

// By CSS selector (returns ALL matches as NodeList)
const allCards = document.querySelectorAll(".card");

// ===== MODIFYING ELEMENTS =====

// Change text content
header.textContent = "New Header Text";

// Change HTML content (careful — can cause XSS if using user input!)
header.innerHTML = "<span>New <em>Header</em></span>";

// Change styles
header.style.color = "blue";
header.style.backgroundColor = "#f0f0f0"; // camelCase, not kebab-case!

// Add/Remove/Toggle CSS classes (PREFERRED over inline styles)
header.classList.add("active");
header.classList.remove("hidden");
header.classList.toggle("dark-mode"); // Add if missing, remove if present
header.classList.contains("active");  // true or false

// Change attributes
const link = document.querySelector("a");
link.setAttribute("href", "https://example.com");
link.getAttribute("href");
link.removeAttribute("target");

// ===== CREATING ELEMENTS =====

const newCard = document.createElement("div");
newCard.className = "card";
newCard.textContent = "New Card";

// Add to the DOM
document.body.appendChild(newCard);           // Add as last child
document.body.prepend(newCard);               // Add as first child
header.insertAdjacentElement("afterend", newCard); // Add after header

// Remove from the DOM
newCard.remove();

// ===== EVENT LISTENERS =====

const button = document.querySelector("#submitBtn");

// Add event listener
button.addEventListener("click", (event) => {
  event.preventDefault(); // Prevent form submission
  console.log("Button clicked!");
  console.log(event.target); // The element that was clicked
});

// Common events
// click, dblclick, mouseenter, mouseleave
// keydown, keyup, keypress
// submit, change, input, focus, blur
// load, DOMContentLoaded, scroll, resize

// EVENT DELEGATION — Efficient way to handle many elements
// Instead of adding listeners to every card, add ONE to the parent
document.querySelector(".card-container").addEventListener("click", (e) => {
  // Check which card was clicked
  if (e.target.classList.contains("card")) {
    console.log("Card clicked:", e.target.textContent);
  }
});
```

---

## 3.9 Async/Await and Promises

### What Are Promises?

A Promise is an object that represents a **future value** — something that hasn't happened yet but will eventually succeed or fail.

### Memory Trick 🧠

> Think of a Promise like ordering food at a restaurant:
> 1. You place an order (Promise is **pending**)
> 2. Food arrives (Promise is **fulfilled/resolved**)
> 3. They're out of that item (Promise is **rejected**)

```javascript
// ===== CREATING A PROMISE =====
const fetchUserData = (userId) => {
  return new Promise((resolve, reject) => {
    // Simulate an API call that takes 2 seconds
    setTimeout(() => {
      if (userId > 0) {
        resolve({ id: userId, name: "Juan", age: 21 }); // Success!
      } else {
        reject(new Error("Invalid user ID")); // Failure!
      }
    }, 2000);
  });
};

// ===== USING PROMISES WITH .then()/.catch() =====
fetchUserData(1)
  .then(user => {
    console.log("User found:", user);
    return user.name; // Return value goes to next .then()
  })
  .then(name => {
    console.log("Name:", name);
  })
  .catch(error => {
    console.error("Error:", error.message);
  })
  .finally(() => {
    console.log("Done!"); // Runs regardless of success or failure
  });

// ===== USING ASYNC/AWAIT (PREFERRED — cleaner syntax) =====
const getUser = async (userId) => {
  try {
    const user = await fetchUserData(userId);
    // 'await' PAUSES execution until the Promise resolves
    console.log("User:", user);
    return user;
  } catch (error) {
    // Catches any rejected Promise
    console.error("Error:", error.message);
  } finally {
    console.log("Done!");
  }
};

// ===== FETCH API — Making HTTP Requests =====
const fetchUsers = async () => {
  try {
    // fetch() returns a Promise
    const response = await fetch("https://api.example.com/users");
    
    // Check if the request was successful
    if (!response.ok) {
      throw new Error(`HTTP Error: ${response.status}`);
    }
    
    // .json() also returns a Promise
    const data = await response.json();
    
    console.log("Users:", data);
    return data;
  } catch (error) {
    console.error("Failed to fetch users:", error.message);
  }
};

// ===== FETCH with POST (sending data) =====
const createUser = async (userData) => {
  try {
    const response = await fetch("https://api.example.com/users", {
      method: "POST",                        // HTTP method
      headers: {
        "Content-Type": "application/json",  // Tell server we're sending JSON
      },
      body: JSON.stringify(userData),         // Convert JS object to JSON string
    });
    
    if (!response.ok) {
      throw new Error(`HTTP Error: ${response.status}`);
    }
    
    const newUser = await response.json();
    console.log("Created user:", newUser);
    return newUser;
  } catch (error) {
    console.error("Failed to create user:", error.message);
  }
};

// Usage:
createUser({ name: "Juan", email: "juan@email.com" });

// ===== PROMISE.ALL — Run multiple promises simultaneously =====
const fetchAllData = async () => {
  try {
    const [users, posts, comments] = await Promise.all([
      fetch("/api/users").then(r => r.json()),
      fetch("/api/posts").then(r => r.json()),
      fetch("/api/comments").then(r => r.json()),
    ]);
    // All three requests run at the same time — much faster!
    console.log({ users, posts, comments });
  } catch (error) {
    console.error("One of the requests failed:", error);
  }
};
```

---

## 3.10 ES6+ Features

```javascript
// ===== TEMPLATE LITERALS =====
const name = "Juan";
const greeting = `Hello, ${name}! You are ${21} years old.`;
// Allows multi-line strings and embedded expressions

// ===== DESTRUCTURING =====
// Array
const [a, b, ...rest] = [1, 2, 3, 4, 5];
// Object
const { firstName, lastName, ...otherProps } = user;

// ===== SPREAD OPERATOR =====
const newArray = [...oldArray, newItem];
const newObject = { ...oldObject, newProp: "value" };

// ===== OPTIONAL CHAINING =====
const city = user?.address?.city; // No error if address is null/undefined

// ===== NULLISH COALESCING =====
const username = user.name ?? "Guest";
// Uses "Guest" ONLY if user.name is null or undefined
// Different from || which also treats "", 0, false as falsy

// ===== SHORT-CIRCUIT EVALUATION =====
const result = condition && "value"; // Returns "value" if condition is truthy
const fallback = value || "default"; // Returns "default" if value is falsy

// ===== MAP AND SET =====
// Map — key-value pairs (keys can be ANY type)
const map = new Map();
map.set("name", "Juan");
map.set(1, "one");
map.get("name"); // "Juan"
map.has(1);      // true
map.size;        // 2

// Set — unique values only
const set = new Set([1, 2, 2, 3, 3]);
// Set contains: 1, 2, 3 (duplicates removed)
set.add(4);
set.has(2);    // true
set.size;      // 4

// ===== FOR...OF vs FOR...IN =====
const arr = ["a", "b", "c"];
for (const value of arr) { } // Iterates over VALUES: "a", "b", "c"
for (const index in arr) { } // Iterates over KEYS: 0, 1, 2

const obj = { x: 1, y: 2 };
for (const key in obj) { } // Iterates over KEYS: "x", "y"
// Can't use for...of on objects directly

// ===== MODULES (import/export) =====
// Named exports (can have multiple per file)
export const add = (a, b) => a + b;
export const subtract = (a, b) => a - b;
// Import: import { add, subtract } from './math.js';

// Default export (one per file)
export default function Calculator() { }
// Import: import Calculator from './Calculator.js';
```

---

## 3.11 JavaScript Interview Questions

### Basic Questions

**Q1: What is the difference between `==` and `===`?**

> **Answer:** `==` (loose equality) compares values after **type coercion** — it converts types before comparing. `===` (strict equality) compares both **value and type** — no conversion happens.
>
> ```javascript
> "5" == 5   // true (string "5" is converted to number 5)
> "5" === 5  // false (string !== number)
> null == undefined // true
> null === undefined // false
> ```
>
> **Rule:** Always use `===` to avoid unexpected type conversions.
>
> **Common mistake:** Using `==` and getting unexpected `true` results.

**Q2: What is the difference between `let`, `const`, and `var`?**

> **Answer:** `var` is function-scoped and hoisted with `undefined`. `let` is block-scoped and not accessible before declaration (temporal dead zone). `const` is like `let` but cannot be reassigned. Always use `const` by default, `let` when reassignment is needed, and never use `var`.
>
> **Common mistake:** Thinking `const` makes objects/arrays immutable. It prevents reassignment of the variable, but the object's properties can still be changed.

### Intermediate Questions

**Q3: Explain closures and give a real-world use case.**

> **Answer:** A closure is a function that has access to variables from its **outer (enclosing) function's scope**, even after that outer function has returned. This happens because functions in JavaScript form closures — they "close over" their surrounding variables.
>
> **Real-world use case:** Creating private variables and data encapsulation, event handlers that remember state, and React hooks (useState uses closures internally).
>
> **Common mistake:** Not understanding that closures capture variables by **reference**, not by value.

**Q4: What is the event loop?**

> **Answer:** JavaScript is single-threaded — it can only do one thing at a time. The event loop allows JavaScript to perform non-blocking operations by offloading tasks (like API calls, timers) to the browser. When these tasks complete, their callbacks are placed in a **task queue**. The event loop continuously checks if the **call stack** is empty, and if so, moves the next callback from the queue to the stack for execution.
>
> Call Stack → Web APIs → Task Queue → Event Loop → Call Stack
>
> **Common mistake:** Thinking JavaScript is multi-threaded. It's not — the event loop creates the illusion of concurrency.

### Practical Questions

**Q5: Write a function that removes duplicates from an array.**

> ```javascript
> // Method 1: Using Set (cleanest)
> const removeDuplicates = (arr) => [...new Set(arr)];
>
> // Method 2: Using filter
> const removeDupes = (arr) => arr.filter((item, index) => arr.indexOf(item) === index);
>
> // Method 3: Using reduce
> const unique = (arr) => arr.reduce((acc, item) => {
>   return acc.includes(item) ? acc : [...acc, item];
> }, []);
> ```

**Q6: Write a debounce function.**

> ```javascript
> // Debounce: Delays execution until the user STOPS triggering the event
> // Use case: Search input — don't search on every keystroke, wait until user pauses
> function debounce(func, delay) {
>   let timeoutId;
>   return function(...args) {
>     clearTimeout(timeoutId); // Cancel any pending execution
>     timeoutId = setTimeout(() => {
>       func.apply(this, args); // Execute after delay
>     }, delay);
>   };
> }
>
> // Usage:
> const searchInput = document.querySelector("#search");
> searchInput.addEventListener("input", debounce((e) => {
>   console.log("Searching for:", e.target.value);
>   // API call would go here
> }, 500)); // Waits 500ms after last keystroke
> ```

---

## 3.12 JavaScript Coding Challenges

### Challenge 1: FizzBuzz (Classic Interview Question)

```javascript
// Print numbers 1-100. For multiples of 3 print "Fizz",
// for multiples of 5 print "Buzz", for multiples of both print "FizzBuzz"
for (let i = 1; i <= 100; i++) {
  if (i % 3 === 0 && i % 5 === 0) {
    console.log("FizzBuzz");
  } else if (i % 3 === 0) {
    console.log("Fizz");
  } else if (i % 5 === 0) {
    console.log("Buzz");
  } else {
    console.log(i);
  }
}
```

### Challenge 2: Palindrome Checker

```javascript
const isPalindrome = (str) => {
  // Remove non-alphanumeric characters and convert to lowercase
  const cleaned = str.toLowerCase().replace(/[^a-z0-9]/g, "");
  // Reverse and compare
  return cleaned === cleaned.split("").reverse().join("");
};

isPalindrome("racecar");   // true
isPalindrome("A man, a plan, a canal: Panama"); // true
isPalindrome("hello");     // false
```

### Challenge 3: Flatten a Nested Array

```javascript
// Input: [1, [2, [3, [4]], 5]]
// Output: [1, 2, 3, 4, 5]

// Method 1: Built-in (know this exists)
const flat1 = [1, [2, [3, [4]], 5]].flat(Infinity);

// Method 2: Recursive (interviewers want to see this)
const flatten = (arr) => {
  return arr.reduce((acc, item) => {
    return acc.concat(Array.isArray(item) ? flatten(item) : item);
  }, []);
};
```

---

## 3.13 JavaScript Summary & Cheat Sheet

```
📌 REMEMBER:
- const by default, let when needed, never var
- Always use === instead of ==
- Arrays: map, filter, reduce are your best friends
- Spread operator: [...arr], {...obj}
- Destructuring: const { name } = user
- Optional chaining: user?.address?.city
- async/await for asynchronous code
- try/catch for error handling
- Template literals: `Hello, ${name}!`
- Arrow functions: const fn = () => {}
```

---

# SECTION 4: OBJECT-ORIENTED PROGRAMMING

## 4.1 Concept Explanation

### What is OOP?

Object-Oriented Programming is a **programming paradigm** (a way of thinking about code) where you organize your code around **objects** — bundles of data (properties) and behavior (methods).

### Why Companies Use OOP

- Makes code **organized** and **maintainable**
- Enables **code reuse** through inheritance
- Models **real-world entities** naturally
- Makes large applications **manageable**
- NestJS (your target framework) is **heavily OOP-based**

### The 4 Pillars of OOP

```
1. ENCAPSULATION  — Bundle data + methods, hide internal details
2. ABSTRACTION    — Show only what's necessary, hide complexity
3. INHERITANCE    — Child classes get properties from parent classes
4. POLYMORPHISM   — Same method, different behavior in different classes
```

### Memory Trick 🧠

> **E-A-I-P** = "**E**at **A**n **I**ce **P**op"
> Encapsulation, Abstraction, Inheritance, Polymorphism

---

## 4.2 Classes and Objects

### Analogy

> A **class** is like a **blueprint** for building a house.
> An **object** is the **actual house** built from that blueprint.
> You can build many houses (objects) from the same blueprint (class).

### JavaScript Example

```javascript
// ===== CLASS DEFINITION =====
class User {
  // CONSTRUCTOR — runs automatically when you create a new object
  // Think of it as the "setup" or "initialization" function
  constructor(name, email, age) {
    // 'this' refers to the object being created
    this.name = name;       // Public property
    this.email = email;     // Public property
    this.age = age;         // Public property
    this.isActive = true;   // Default value
    this.createdAt = new Date(); // Set automatically
  }
  
  // METHODS — functions that belong to the class
  getInfo() {
    return `${this.name} (${this.email}), Age: ${this.age}`;
  }
  
  deactivate() {
    this.isActive = false;
    return `${this.name} has been deactivated.`;
  }
}

// ===== CREATING OBJECTS (instances) =====
const user1 = new User("Juan", "juan@email.com", 21);
const user2 = new User("Maria", "maria@email.com", 22);

// Each object has its OWN copy of the properties
console.log(user1.getInfo()); // "Juan (juan@email.com), Age: 21"
console.log(user2.getInfo()); // "Maria (maria@email.com), Age: 22"
```

### PHP Example

```php
<?php
class User {
    // Properties with visibility modifiers
    public string $name;        // Accessible from anywhere
    public string $email;       // Accessible from anywhere
    private int $age;           // Only accessible inside this class
    protected bool $isActive;   // Accessible in this class and child classes
    
    // Constructor
    public function __construct(string $name, string $email, int $age) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->isActive = true;
    }
    
    // Method
    public function getInfo(): string {
        return "{$this->name} ({$this->email}), Age: {$this->age}";
    }
    
    // Getter for private property
    public function getAge(): int {
        return $this->age;
    }
    
    // Setter with validation
    public function setAge(int $age): void {
        if ($age < 0 || $age > 150) {
            throw new \InvalidArgumentException("Invalid age");
        }
        $this->age = $age;
    }
}

// Creating objects
$user1 = new User("Juan", "juan@email.com", 21);
echo $user1->getInfo(); // "Juan (juan@email.com), Age: 21"
?>
```

---

## 4.3 Encapsulation

### Definition

Encapsulation means **bundling data and methods together** and **controlling access** to the data. Like a capsule that protects its contents.

### Analogy

> Think of a **TV remote**. You press buttons (public methods) to change channels, adjust volume. You don't access the internal circuits directly (private data). The remote **encapsulates** its complexity behind a simple interface.

### JavaScript Example

```javascript
class BankAccount {
  // Private fields (ES2022+) — prefixed with #
  #balance;      // Cannot be accessed from outside the class
  #pin;
  #transactionHistory;
  
  constructor(owner, initialDeposit, pin) {
    this.owner = owner;              // Public — accessible from outside
    this.#balance = initialDeposit;  // Private — hidden from outside
    this.#pin = pin;                 // Private — hidden from outside
    this.#transactionHistory = [];   // Private
  }
  
  // PUBLIC methods — the controlled interface
  getBalance(pin) {
    if (!this.#validatePin(pin)) {
      throw new Error("Invalid PIN");
    }
    return this.#balance;
  }
  
  deposit(amount) {
    if (amount <= 0) {
      throw new Error("Deposit amount must be positive");
    }
    this.#balance += amount;
    this.#logTransaction("deposit", amount);
    return `Deposited: ₱${amount}. New balance: ₱${this.#balance}`;
  }
  
  withdraw(amount, pin) {
    if (!this.#validatePin(pin)) {
      throw new Error("Invalid PIN");
    }
    if (amount > this.#balance) {
      throw new Error("Insufficient funds");
    }
    this.#balance -= amount;
    this.#logTransaction("withdrawal", amount);
    return `Withdrew: ₱${amount}. New balance: ₱${this.#balance}`;
  }
  
  // PRIVATE methods — internal logic
  #validatePin(pin) {
    return this.#pin === pin;
  }
  
  #logTransaction(type, amount) {
    this.#transactionHistory.push({
      type,
      amount,
      date: new Date(),
      balanceAfter: this.#balance
    });
  }
}

const account = new BankAccount("Juan", 10000, "1234");
account.deposit(5000);             // ✅ Works
account.withdraw(2000, "1234");    // ✅ Works
account.getBalance("1234");        // ✅ Returns 13000
// account.#balance;               // ❌ SyntaxError — private field
// account.#pin;                   // ❌ SyntaxError — private field
```

### PHP Example

```php
<?php
class BankAccount {
    public string $owner;
    private float $balance;         // Private — can't access from outside
    private string $pin;
    private array $history = [];
    
    public function __construct(string $owner, float $deposit, string $pin) {
        $this->owner = $owner;
        $this->balance = $deposit;
        $this->pin = $pin;
    }
    
    public function deposit(float $amount): string {
        if ($amount <= 0) {
            throw new \InvalidArgumentException("Amount must be positive");
        }
        $this->balance += $amount;
        $this->logTransaction("deposit", $amount);
        return "Deposited: ₱{$amount}. Balance: ₱{$this->balance}";
    }
    
    public function withdraw(float $amount, string $pin): string {
        if (!$this->validatePin($pin)) {
            throw new \RuntimeException("Invalid PIN");
        }
        if ($amount > $this->balance) {
            throw new \RuntimeException("Insufficient funds");
        }
        $this->balance -= $amount;
        $this->logTransaction("withdrawal", $amount);
        return "Withdrew: ₱{$amount}. Balance: ₱{$this->balance}";
    }
    
    public function getBalance(string $pin): float {
        if (!$this->validatePin($pin)) {
            throw new \RuntimeException("Invalid PIN");
        }
        return $this->balance;
    }
    
    // Private methods — internal use only
    private function validatePin(string $pin): bool {
        return $this->pin === $pin;
    }
    
    private function logTransaction(string $type, float $amount): void {
        $this->history[] = [
            'type' => $type,
            'amount' => $amount,
            'date' => date('Y-m-d H:i:s'),
            'balance' => $this->balance,
        ];
    }
}
?>
```

---

## 4.4 Abstraction

### Definition

Abstraction means **showing only the essential features** and **hiding the complex implementation details**. Users interact with a simple interface without needing to know how it works internally.

### Analogy

> When you drive a car, you use the **steering wheel, pedals, and gear shift** (abstracted interface). You don't need to know how the engine, transmission, and fuel injection work internally.

### JavaScript Example

```javascript
// ABSTRACT CLASS (JavaScript doesn't have true abstract classes, but we can simulate)
class NotificationService {
  constructor() {
    if (new.target === NotificationService) {
      throw new Error("Cannot instantiate abstract class");
    }
  }
  
  // "Abstract" method — must be implemented by subclasses
  send(to, message) {
    throw new Error("send() must be implemented by subclass");
  }
  
  // Concrete method — shared by all subclasses
  formatMessage(message) {
    return `[${new Date().toISOString()}] ${message}`;
  }
  
  // Template method — defines the algorithm, subclasses fill in steps
  notify(to, message) {
    const formatted = this.formatMessage(message);
    this.validate(to);
    return this.send(to, formatted);
  }
  
  validate(to) {
    if (!to) throw new Error("Recipient is required");
  }
}

// Concrete implementations
class EmailNotification extends NotificationService {
  send(to, message) {
    // Complex email sending logic hidden here
    console.log(`📧 Email sent to ${to}: ${message}`);
    return { success: true, method: "email" };
  }
}

class SMSNotification extends NotificationService {
  send(to, message) {
    // Complex SMS API logic hidden here
    console.log(`📱 SMS sent to ${to}: ${message}`);
    return { success: true, method: "sms" };
  }
}

// USAGE — Simple interface, complex logic hidden
const email = new EmailNotification();
email.notify("juan@email.com", "Your order has been shipped!");

const sms = new SMSNotification();
sms.notify("+639123456789", "Your order has been shipped!");

// Users of these classes don't need to know HOW emails/SMS are sent
// They just call notify() — that's abstraction!
```

---

## 4.5 Inheritance

### Definition

Inheritance allows a class to **inherit properties and methods** from another class. The child class gets everything from the parent class and can add its own features or override existing ones.

### Analogy

> Think of it like a **family**:
> - **Parent class** (Animal): Has basic traits like name, age, eat(), sleep()
> - **Child class** (Dog): Inherits everything from Animal + adds bark()
> - **Child class** (Cat): Inherits everything from Animal + adds meow()

### JavaScript Example

```javascript
// PARENT CLASS (Base / Super class)
class Employee {
  constructor(name, email, department) {
    this.name = name;
    this.email = email;
    this.department = department;
    this.hireDate = new Date();
  }
  
  getInfo() {
    return `${this.name} - ${this.department}`;
  }
  
  calculatePay() {
    throw new Error("calculatePay must be implemented by subclass");
  }
}

// CHILD CLASS (Derived / Sub class)
class FullTimeEmployee extends Employee {
  constructor(name, email, department, monthlySalary) {
    // super() MUST be called first — it runs the parent's constructor
    super(name, email, department);
    this.monthlySalary = monthlySalary;
    this.type = "Full-Time";
  }
  
  calculatePay() {
    return this.monthlySalary;
  }
  
  // New method (not in parent)
  getAnnualSalary() {
    return this.monthlySalary * 12;
  }
}

class PartTimeEmployee extends Employee {
  constructor(name, email, department, hourlyRate, hoursPerWeek) {
    super(name, email, department);
    this.hourlyRate = hourlyRate;
    this.hoursPerWeek = hoursPerWeek;
    this.type = "Part-Time";
  }
  
  calculatePay() {
    return this.hourlyRate * this.hoursPerWeek * 4; // Monthly pay
  }
}

class Intern extends Employee {
  constructor(name, email, department, school, allowance) {
    super(name, email, department);
    this.school = school;
    this.allowance = allowance;
    this.type = "Intern";
  }
  
  calculatePay() {
    return this.allowance;
  }
  
  // Override parent method
  getInfo() {
    // Call parent's getInfo() and add more info
    return `${super.getInfo()} | School: ${this.school}`;
  }
}

// USAGE
const fullTime = new FullTimeEmployee("Juan", "juan@co.com", "Engineering", 50000);
const partTime = new PartTimeEmployee("Maria", "maria@co.com", "Design", 250, 20);
const intern = new Intern("Pedro", "pedro@co.com", "Engineering", "BSIT University", 10000);

console.log(fullTime.calculatePay()); // 50000
console.log(partTime.calculatePay()); // 20000
console.log(intern.getInfo()); // "Pedro - Engineering | School: BSIT University"

// instanceof — Check if object is an instance of a class
console.log(intern instanceof Intern);   // true
console.log(intern instanceof Employee); // true (inheritance chain)
```

### PHP Example

```php
<?php
class Employee {
    public string $name;
    public string $email;
    protected string $department;
    
    public function __construct(string $name, string $email, string $department) {
        $this->name = $name;
        $this->email = $email;
        $this->department = $department;
    }
    
    public function getInfo(): string {
        return "{$this->name} - {$this->department}";
    }
    
    public function calculatePay(): float {
        throw new \RuntimeException("Must be implemented by subclass");
    }
}

class FullTimeEmployee extends Employee {
    private float $monthlySalary;
    
    public function __construct(string $name, string $email, string $department, float $salary) {
        parent::__construct($name, $email, $department); // Call parent constructor
        $this->monthlySalary = $salary;
    }
    
    public function calculatePay(): float {
        return $this->monthlySalary;
    }
}

class Intern extends Employee {
    private string $school;
    private float $allowance;
    
    public function __construct(string $name, string $email, string $dept, string $school, float $allowance) {
        parent::__construct($name, $email, $dept);
        $this->school = $school;
        $this->allowance = $allowance;
    }
    
    public function calculatePay(): float {
        return $this->allowance;
    }
    
    // Override parent method
    public function getInfo(): string {
        return parent::getInfo() . " | School: {$this->school}";
    }
}
?>
```

---

## 4.6 Polymorphism

### Definition

Polymorphism means "**many forms**" — the same method name behaves **differently** depending on which class it belongs to. It allows you to treat different objects through the same interface.

### Analogy

> Think of the word "**open**":
> - "Open" a door → you push or pull
> - "Open" a book → you flip the cover
> - "Open" a file → you double-click
> Same word ("method"), different actions ("implementations")

### JavaScript Example

```javascript
// All shapes have an area() method, but each calculates it differently
class Shape {
  area() {
    throw new Error("area() must be implemented");
  }
  
  describe() {
    return `This is a ${this.constructor.name} with area: ${this.area()}`;
  }
}

class Circle extends Shape {
  constructor(radius) {
    super();
    this.radius = radius;
  }
  
  area() {
    return Math.PI * this.radius ** 2; // πr²
  }
}

class Rectangle extends Shape {
  constructor(width, height) {
    super();
    this.width = width;
    this.height = height;
  }
  
  area() {
    return this.width * this.height; // w × h
  }
}

class Triangle extends Shape {
  constructor(base, height) {
    super();
    this.base = base;
    this.height = height;
  }
  
  area() {
    return 0.5 * this.base * this.height; // ½ × b × h
  }
}

// POLYMORPHISM IN ACTION
// The same method .area() gives different results for different shapes
const shapes = [
  new Circle(5),
  new Rectangle(4, 6),
  new Triangle(3, 8),
];

shapes.forEach(shape => {
  console.log(shape.describe());
  // "This is a Circle with area: 78.54"
  // "This is a Rectangle with area: 24"
  // "This is a Triangle with area: 12"
});

// We can treat ALL shapes the same way through the Shape interface
// That's the POWER of polymorphism!
const totalArea = shapes.reduce((sum, shape) => sum + shape.area(), 0);
console.log(`Total area: ${totalArea}`);
```

---

## 4.7 OOP Interview Questions

**Q1: What are the 4 pillars of OOP? Explain each briefly.**

> **Answer:**
> 1. **Encapsulation** — Bundling data and methods together and controlling access using public/private/protected modifiers.
> 2. **Abstraction** — Hiding complex implementation details and showing only the necessary interface.
> 3. **Inheritance** — A child class inherits properties and methods from a parent class, enabling code reuse.
> 4. **Polymorphism** — The same method name can have different behaviors in different classes, allowing objects to be treated through a common interface.

**Q2: What is the difference between a class and an object?**

> **Answer:** A **class** is a blueprint/template that defines properties and methods. An **object** (instance) is a concrete entity created from that class. You can create multiple objects from one class, each with its own data.
>
> **Analogy:** Class = Cookie cutter, Object = Cookie.

**Q3: What is the difference between `public`, `private`, and `protected`?**

> **Answer:**
> - **Public** — Accessible from anywhere (inside class, outside class, child classes)
> - **Private** — Accessible ONLY inside the same class
> - **Protected** — Accessible inside the class AND in child classes, but not from outside
>
> **Common mistake:** Making everything public. Good OOP practice is to make properties private and provide getters/setters.

**Q4: What is the difference between an interface and an abstract class?**

> **Answer:** An **abstract class** can have both implemented and unimplemented methods, plus properties. An **interface** only defines method signatures (what methods must exist) without any implementation. A class can implement multiple interfaces but can only inherit from one abstract class.
>
> **Note:** JavaScript doesn't have built-in interfaces, but TypeScript (used by NestJS) does.

---

## 4.8 OOP Coding Exercises

### Easy Exercise

Create a `Product` class with:
- Properties: name, price, quantity
- Methods: getTotalValue(), applyDiscount(percentage), display()
- Use proper encapsulation (private price, getter/setter with validation)

### Medium Exercise

Create an **Animal hierarchy**:
- Base class `Animal` with name, age, sound()
- Child classes: `Dog`, `Cat`, `Bird`
- Each overrides sound() differently
- Create an array of animals and call sound() on each (polymorphism)

### Internship-Level Exercise

Create a **Task Management System**:
- Classes: `Task`, `Bug`, `Feature`, `User`, `TaskBoard`
- `Task` is the base class (title, description, status, assignee)
- `Bug` extends Task (severity, stepsToReproduce)
- `Feature` extends Task (priority, estimatedHours)
- `TaskBoard` manages a collection of tasks with methods: addTask, removeTask, filterByStatus, assignTask, getStatistics
- Demonstrate all 4 OOP pillars

---

## 4.9 OOP Summary & Cheat Sheet

```
📌 OOP CHEAT SHEET:

CLASS       = Blueprint    | new User("Juan")
OBJECT      = Instance     | Built from class
CONSTRUCTOR = Setup method | Runs when you create an object
this        = "this object"| Refers to the current instance

ENCAPSULATION  = Hide data behind methods    | #private, getter/setter
ABSTRACTION    = Simple interface, hide complexity | Abstract classes
INHERITANCE    = Child gets parent's stuff    | extends, super()
POLYMORPHISM   = Same method, different behavior  | Override in child class

Visibility:
  public    = Anyone can access
  private   = Only this class
  protected = This class + children
```

---

# SECTION 5: MVC DESIGN PATTERN

## 5.1 Concept Explanation

### What is MVC?

MVC (Model-View-Controller) is a **design pattern** that separates your application into three interconnected components:

1. **Model** — Handles data and business logic (talks to database)
2. **View** — Handles the user interface (what the user sees)
3. **Controller** — Handles user input and coordinates Model & View (traffic cop)

### Why Companies Use MVC

- **Separation of concerns** — Each part has ONE job
- **Maintainability** — Change the UI without touching the database logic
- **Testability** — Each component can be tested independently
- **Team collaboration** — Frontend devs work on Views, backend devs work on Models
- **Scalability** — Easy to add new features

### Analogy 🧠

> Think of a **restaurant**:
> - **Model** = The Kitchen (prepares food/data)
> - **View** = The Dining Area (presents food to customer/user)
> - **Controller** = The Waiter (takes orders from customer, tells kitchen, brings food back)
>
> Customer (User) → Waiter (Controller) → Kitchen (Model) → Waiter → Dining Area (View)

### MVC Flow Diagram

```
User Action (clicks "Login")
       ↓
   CONTROLLER
   (Receives the request, validates input)
       ↓
     MODEL
   (Checks database for user, verifies password)
       ↓
   DATABASE
   (Returns user data or error)
       ↓
     MODEL
   (Processes the result)
       ↓
   CONTROLLER
   (Decides which view to show)
       ↓
     VIEW
   (Shows dashboard if success, or error message if failed)
       ↓
   User sees the result
```

---

## 5.2 PHP Login System — MVC Example

### Project Structure

```
project/
├── config/
│   └── database.php        ← Database connection
├── models/
│   └── UserModel.php        ← Handles user data operations
├── views/
│   ├── login.php            ← Login form (what user sees)
│   └── dashboard.php        ← Dashboard after login
├── controllers/
│   └── AuthController.php   ← Handles login logic
├── public/
│   └── index.php            ← Entry point (router)
└── .htaccess                ← URL rewriting
```

### Step 1: Database Configuration

```php
<?php
// config/database.php
// PURPOSE: Centralize database connection settings
// WHY: If you need to change the database, you only change ONE file

class Database {
    // Private properties — only this class can access them (encapsulation!)
    private string $host = "localhost";
    private string $dbname = "mvc_demo";
    private string $username = "root";
    private string $password = "";
    private ?PDO $connection = null;
    
    /**
     * Get the database connection.
     * Uses the Singleton pattern — only creates ONE connection.
     * WHY: Creating multiple connections wastes resources.
     */
    public function getConnection(): PDO {
        if ($this->connection === null) {
            try {
                // PDO = PHP Data Objects — a secure way to connect to databases
                $this->connection = new PDO(
                    "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4",
                    $this->username,
                    $this->password,
                    [
                        // Throw exceptions on errors (so we can catch them)
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        // Return results as associative arrays
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    ]
                );
            } catch (PDOException $e) {
                // In production, log this error instead of displaying it
                die("Connection failed: " . $e->getMessage());
            }
        }
        return $this->connection;
    }
}
?>
```

### Step 2: The Model (UserModel.php)

```php
<?php
// models/UserModel.php
// PURPOSE: Handle ALL user-related database operations
// RESPONSIBILITY: Only data — NO HTML, NO request handling

require_once __DIR__ . '/../config/database.php';

class UserModel {
    private PDO $db;
    
    public function __construct() {
        // Get the database connection
        $database = new Database();
        $this->db = $database->getConnection();
    }
    
    /**
     * Find a user by their email address.
     * 
     * @param string $email — The email to search for
     * @return array|false — User data array, or false if not found
     */
    public function findByEmail(string $email): array|false {
        // Prepared statements prevent SQL injection attacks!
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
        
        // Bind the parameter — safely inserts the value
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        
        $stmt->execute();
        
        return $stmt->fetch(); // Returns user array or false
    }
    
    /**
     * Verify a user's password.
     * 
     * @param string $email — User's email
     * @param string $password — Plain text password to check
     * @return array|false — User data if password is correct, false otherwise
     */
    public function verifyLogin(string $email, string $password): array|false {
        $user = $this->findByEmail($email);
        
        if ($user && password_verify($password, $user['password'])) {
            // password_verify() checks plain text against hashed password
            // NEVER store plain text passwords!
            return $user;
        }
        
        return false;
    }
    
    /**
     * Create a new user.
     */
    public function createUser(string $name, string $email, string $password): bool {
        // Hash the password before storing (CRITICAL for security!)
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        $stmt = $this->db->prepare(
            "INSERT INTO users (name, email, password, created_at) 
             VALUES (:name, :email, :password, NOW())"
        );
        
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        
        return $stmt->execute();
    }
}
?>
```

### Step 3: The Controller (AuthController.php)

```php
<?php
// controllers/AuthController.php
// PURPOSE: Handle login/logout requests and coordinate Model ↔ View
// RESPONSIBILITY: Process input, call Model, choose View

require_once __DIR__ . '/../models/UserModel.php';

class AuthController {
    private UserModel $userModel;
    
    public function __construct() {
        $this->userModel = new UserModel();
    }
    
    /**
     * Show the login form.
     * This is called when the user visits /login (GET request).
     */
    public function showLoginForm(): void {
        // Simply display the login view
        require_once __DIR__ . '/../views/login.php';
    }
    
    /**
     * Process the login form submission.
     * This is called when the user submits the form (POST request).
     */
    public function handleLogin(): void {
        // Step 1: Get input from the form
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
        
        // Step 2: Validate input (Controller's job!)
        $errors = [];
        if (empty($email)) {
            $errors[] = "Email is required";
        }
        if (empty($password)) {
            $errors[] = "Password is required";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format";
        }
        
        // If there are validation errors, show the login form again with errors
        if (!empty($errors)) {
            $error = implode(", ", $errors);
            require_once __DIR__ . '/../views/login.php';
            return;
        }
        
        // Step 3: Ask the Model to verify the login
        $user = $this->userModel->verifyLogin($email, $password);
        
        // Step 4: Decide which View to show based on the result
        if ($user) {
            // Success! Start a session and redirect to dashboard
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            header("Location: /dashboard");
            exit;
        } else {
            // Failed! Show login form with error message
            $error = "Invalid email or password";
            require_once __DIR__ . '/../views/login.php';
        }
    }
    
    /**
     * Show the dashboard (protected page).
     */
    public function dashboard(): void {
        session_start();
        
        // Check if user is logged in
        if (!isset($_SESSION['user_id'])) {
            header("Location: /login");
            exit;
        }
        
        $userName = $_SESSION['user_name'];
        require_once __DIR__ . '/../views/dashboard.php';
    }
    
    /**
     * Handle logout.
     */
    public function logout(): void {
        session_start();
        session_destroy();
        header("Location: /login");
        exit;
    }
}
?>
```

### Step 4: The Views

```php
<!-- views/login.php -->
<!-- PURPOSE: Display the login form to the user -->
<!-- RESPONSIBILITY: ONLY presentation — NO logic, NO database calls -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main>
        <h1>Login</h1>
        
        <?php if (isset($error)): ?>
            <!-- Show error message if login failed -->
            <div class="error" role="alert">
                <?= htmlspecialchars($error) ?>
                <!-- htmlspecialchars() prevents XSS attacks -->
            </div>
        <?php endif; ?>
        
        <form method="POST" action="/login">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" 
                   value="<?= htmlspecialchars($email ?? '') ?>" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Log In</button>
        </form>
    </main>
</body>
</html>
```

```php
<!-- views/dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?= htmlspecialchars($userName) ?>!</h1>
    <p>You are now logged in.</p>
    <a href="/logout">Logout</a>
</body>
</html>
```

### Step 5: The Router (index.php)

```php
<?php
// public/index.php
// PURPOSE: Route incoming requests to the correct controller method
// This is the ENTRY POINT of the application

require_once __DIR__ . '/../controllers/AuthController.php';

$controller = new AuthController();

// Get the requested URL path
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Simple router
switch ($requestUri) {
    case '/':
    case '/login':
        if ($method === 'POST') {
            $controller->handleLogin();
        } else {
            $controller->showLoginForm();
        }
        break;
    case '/dashboard':
        $controller->dashboard();
        break;
    case '/logout':
        $controller->logout();
        break;
    default:
        http_response_code(404);
        echo "Page not found";
}
?>
```

---

## 5.3 MVC Interview Questions

**Q1: What is MVC and why do companies use it?**

> **Answer:** MVC is a design pattern that separates an application into three parts: **Model** (data and business logic), **View** (user interface), and **Controller** (handles user input and coordinates the other two). Companies use it because it provides separation of concerns, making code easier to maintain, test, and scale. Different team members can work on different parts without conflicts.

**Q2: What does the Controller do?**

> **Answer:** The Controller acts as the intermediary between the user and the application. It (1) receives user input (HTTP requests), (2) validates the input, (3) calls the appropriate Model methods to process data, and (4) selects the appropriate View to display the result.
>
> **Common mistake:** Putting business logic in the Controller. Business logic belongs in the Model. The Controller should be "thin."

**Q3: Should the View directly access the database?**

> **Answer:** **No, never.** The View should ONLY handle presentation. It receives data from the Controller and displays it. If the View accessed the database directly, it would violate separation of concerns and make the code tightly coupled and hard to maintain.

**Q4: Can you have multiple Views for the same Model?**

> **Answer:** Yes! That's one of MVC's biggest advantages. The same data (Model) can be displayed as an HTML page, a JSON API response, a PDF report, or a mobile app view. You just create different Views without changing the Model.

---

# SECTION 6: MVVM DESIGN PATTERN

## 6.1 Concept Explanation

### What is MVVM?

MVVM (Model-View-ViewModel) is a design pattern that separates an application into:

1. **Model** — Data and business logic (same as MVC)
2. **View** — User interface (same as MVC)
3. **ViewModel** — The bridge between Model and View. It holds the **state** and **logic** that the View needs

### Key Difference: MVC vs MVVM

| Aspect           | MVC                              | MVVM                              |
|------------------|----------------------------------|-----------------------------------|
| Middle layer     | Controller (handles requests)    | ViewModel (manages state)         |
| Data flow        | Controller pushes data to View   | View auto-updates via data binding|
| Binding          | Manual (pass data to template)   | Automatic (state → UI updates)    |
| Best for         | Server-rendered apps (PHP)       | Client-side apps (React, Vue)     |
| Common in        | PHP Laravel, ASP.NET MVC         | React, Vue, Angular, Flutter      |

### Why React Apps Follow MVVM Concepts

React naturally follows MVVM because:
- **Model**: Your API calls, data fetching logic
- **View**: Your JSX (what the user sees)
- **ViewModel**: Your React component logic — useState, useEffect, event handlers — the state management layer that transforms data for the View

### MVVM Flow

```
                    DATA BINDING
   MODEL ←→ VIEWMODEL ←→ VIEW
   (API)    (State/Logic)  (JSX)
   
   User clicks button in VIEW
       ↓
   VIEWMODEL handles the event
       ↓
   VIEWMODEL calls MODEL (API)
       ↓
   MODEL returns data
       ↓
   VIEWMODEL updates state
       ↓
   VIEW automatically re-renders (data binding!)
```

---

## 6.2 MVVM in React — Complete Example

### Project Structure

```
src/
├── models/
│   └── userModel.js         ← API calls (Model)
├── viewmodels/
│   └── useUserViewModel.js  ← Custom hook — state + logic (ViewModel)
├── views/
│   └── UserListView.jsx     ← UI component (View)
└── App.jsx
```

### Step 1: The Model (userModel.js)

```javascript
// models/userModel.js
// PURPOSE: Handle ALL API calls and data operations
// This is the Model — it knows HOW to get and send data
// It does NOT know about React, state, or UI

const API_URL = "https://api.example.com";

export const userModel = {
  /**
   * Fetch all users from the API
   * @returns {Promise<Array>} — List of users
   */
  async getAll() {
    const response = await fetch(`${API_URL}/users`);
    if (!response.ok) {
      throw new Error(`Failed to fetch users: ${response.status}`);
    }
    return response.json();
  },
  
  /**
   * Create a new user
   * @param {Object} userData — { name, email }
   * @returns {Promise<Object>} — Created user
   */
  async create(userData) {
    const response = await fetch(`${API_URL}/users`, {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(userData),
    });
    if (!response.ok) {
      throw new Error(`Failed to create user: ${response.status}`);
    }
    return response.json();
  },
  
  /**
   * Delete a user
   * @param {number} id — User ID
   */
  async delete(id) {
    const response = await fetch(`${API_URL}/users/${id}`, {
      method: "DELETE",
    });
    if (!response.ok) {
      throw new Error(`Failed to delete user: ${response.status}`);
    }
    return response.json();
  },
};
```

### Step 2: The ViewModel (useUserViewModel.js)

```javascript
// viewmodels/useUserViewModel.js
// PURPOSE: Manage the state and logic between Model and View
// This is a custom React hook that acts as the ViewModel
// It transforms raw data into a format the View can easily use

import { useState, useEffect, useCallback } from "react";
import { userModel } from "../models/userModel";

export const useUserViewModel = () => {
  // ===== STATE (what the View will display) =====
  const [users, setUsers] = useState([]);        // List of users
  const [isLoading, setIsLoading] = useState(true); // Loading indicator
  const [error, setError] = useState(null);       // Error message
  const [searchTerm, setSearchTerm] = useState(""); // Search filter
  
  // ===== COMPUTED VALUES (derived from state) =====
  // Filter users based on search term
  const filteredUsers = users.filter(user =>
    user.name.toLowerCase().includes(searchTerm.toLowerCase()) ||
    user.email.toLowerCase().includes(searchTerm.toLowerCase())
  );
  
  const totalUsers = users.length;
  const displayedUsers = filteredUsers.length;
  
  // ===== ACTIONS (functions the View can call) =====
  
  /**
   * Load all users from the API
   */
  const loadUsers = useCallback(async () => {
    setIsLoading(true);
    setError(null);
    try {
      const data = await userModel.getAll(); // Call the Model
      setUsers(data);
    } catch (err) {
      setError(err.message);
    } finally {
      setIsLoading(false);
    }
  }, []);
  
  /**
   * Add a new user
   */
  const addUser = useCallback(async (userData) => {
    try {
      const newUser = await userModel.create(userData); // Call the Model
      setUsers(prev => [...prev, newUser]); // Update state (View auto-updates!)
    } catch (err) {
      setError(err.message);
    }
  }, []);
  
  /**
   * Delete a user
   */
  const deleteUser = useCallback(async (id) => {
    try {
      await userModel.delete(id); // Call the Model
      setUsers(prev => prev.filter(user => user.id !== id)); // Update state
    } catch (err) {
      setError(err.message);
    }
  }, []);
  
  // Load users when the component mounts
  useEffect(() => {
    loadUsers();
  }, [loadUsers]);
  
  // ===== RETURN — Everything the View needs =====
  return {
    // State
    users: filteredUsers,
    isLoading,
    error,
    searchTerm,
    totalUsers,
    displayedUsers,
    // Actions
    setSearchTerm,
    addUser,
    deleteUser,
    refresh: loadUsers,
  };
};
```

### Step 3: The View (UserListView.jsx)

```jsx
// views/UserListView.jsx
// PURPOSE: Display the UI — ONLY presentation, NO business logic
// The View doesn't know about the API or how data is fetched
// It only knows about the ViewModel's state and actions

import React, { useState } from "react";
import { useUserViewModel } from "../viewmodels/useUserViewModel";

const UserListView = () => {
  // Get everything from the ViewModel
  const {
    users,
    isLoading,
    error,
    searchTerm,
    totalUsers,
    displayedUsers,
    setSearchTerm,
    addUser,
    deleteUser,
    refresh,
  } = useUserViewModel();
  
  // Local form state (only relevant to the View)
  const [newName, setNewName] = useState("");
  const [newEmail, setNewEmail] = useState("");
  
  const handleSubmit = async (e) => {
    e.preventDefault();
    await addUser({ name: newName, email: newEmail });
    setNewName("");
    setNewEmail("");
  };
  
  if (isLoading) return <div className="loading">Loading users...</div>;
  if (error) return <div className="error">Error: {error}</div>;
  
  return (
    <div className="user-list">
      <h1>User Management</h1>
      <p>Showing {displayedUsers} of {totalUsers} users</p>
      
      {/* Search */}
      <input
        type="search"
        placeholder="Search users..."
        value={searchTerm}
        onChange={(e) => setSearchTerm(e.target.value)}
      />
      
      {/* Add User Form */}
      <form onSubmit={handleSubmit}>
        <input
          type="text"
          placeholder="Name"
          value={newName}
          onChange={(e) => setNewName(e.target.value)}
          required
        />
        <input
          type="email"
          placeholder="Email"
          value={newEmail}
          onChange={(e) => setNewEmail(e.target.value)}
          required
        />
        <button type="submit">Add User</button>
      </form>
      
      {/* User List */}
      <ul>
        {users.map(user => (
          <li key={user.id}>
            <span>{user.name} ({user.email})</span>
            <button onClick={() => deleteUser(user.id)}>Delete</button>
          </li>
        ))}
      </ul>
      
      <button onClick={refresh}>Refresh</button>
    </div>
  );
};

export default UserListView;
```

---

## 6.3 MVVM Interview Questions

**Q1: What is the difference between MVC and MVVM?**

> **Answer:** In **MVC**, the Controller receives user input, calls the Model, and manually passes data to the View. In **MVVM**, the ViewModel holds the state, and the View automatically updates when the state changes through **data binding**. MVC is common in server-rendered apps (PHP/Laravel), while MVVM is common in client-side apps (React, Vue, Angular).

**Q2: What is the ViewModel's role?**

> **Answer:** The ViewModel acts as a **bridge** between the Model (data source) and the View (UI). It (1) fetches data from the Model, (2) transforms/formats the data for display, (3) holds the UI state (loading, errors, filters), and (4) provides actions the View can call (add, delete, search). The View doesn't need to know where data comes from — it just uses the ViewModel.

**Q3: How does React implement MVVM concepts?**

> **Answer:** In React:
> - **Model** = API service functions and data fetching logic
> - **View** = JSX and the component's return statement
> - **ViewModel** = Custom hooks (like `useUserViewModel`) that manage state with `useState`, side effects with `useEffect`, and provide actions for the View
>
> React's re-rendering system acts as the "data binding" — when state changes, the View automatically re-renders.

---

# SECTION 7: REACTJS REVIEW

## 7.1 Concept Explanation

### What is React?

React is a **JavaScript library for building user interfaces**. It lets you create reusable UI components and efficiently update the page when data changes.

### Why Companies Use React

- **Component-based** — Build complex UIs from small, reusable pieces
- **Virtual DOM** — Efficient updates (doesn't re-render the entire page)
- **Massive ecosystem** — Libraries for routing, state management, forms, etc.
- **Large community** — Tons of tutorials, packages, and job opportunities
- **Used by:** Facebook, Instagram, Netflix, Airbnb, and thousands more

### How It Connects

```
React (Frontend UI)
  ↓ HTTP Requests (fetch/axios)
NestJS (Backend API)
  ↓ Prisma ORM
PostgreSQL (Database)
```

---

## 7.2 Components and JSX

```jsx
// COMPONENTS are the building blocks of React applications
// They are JavaScript functions that return JSX (HTML-like syntax)

// ===== FUNCTION COMPONENT =====
function Welcome() {
  // Every component MUST return JSX
  return (
    <div>
      <h1>Hello, React!</h1>
      <p>This is a component.</p>
    </div>
  );
}

// ===== JSX RULES =====
function JSXRules() {
  const name = "Juan";
  const isLoggedIn = true;
  const skills = ["React", "JS", "CSS"];
  
  return (
    // Rule 1: Must have ONE parent element (use <> fragment if you don't want a div)
    <>
      {/* Rule 2: Use curly braces {} for JavaScript expressions */}
      <h1>Hello, {name}!</h1>
      
      {/* Rule 3: Use className instead of class */}
      <div className="card">
        
        {/* Rule 4: Use camelCase for attributes */}
        <button onClick={() => alert("Hi!")}>Click Me</button>
        
        {/* Rule 5: Conditional rendering */}
        {isLoggedIn ? <p>Welcome back!</p> : <p>Please log in</p>}
        
        {/* Rule 6: Rendering lists with .map() */}
        <ul>
          {skills.map((skill, index) => (
            // Rule 7: Each list item needs a unique "key" prop
            <li key={index}>{skill}</li>
          ))}
        </ul>
        
        {/* Rule 8: Self-closing tags must end with /> */}
        <img src="photo.jpg" alt="Photo" />
        <input type="text" />
        
        {/* Rule 9: Use style as an OBJECT, not a string */}
        <p style={{ color: "blue", fontSize: "16px" }}>Styled text</p>
      </div>
    </>
  );
}
```

---

## 7.3 Props

```jsx
// PROPS = "Properties" — How you pass data from parent to child components
// Think of props like FUNCTION ARGUMENTS for components

// ===== BASIC PROPS =====
function UserCard({ name, email, role = "User" }) {
  // Destructuring props directly in the parameter (recommended)
  // role = "User" is a default value
  return (
    <div className="user-card">
      <h2>{name}</h2>
      <p>{email}</p>
      <span>{role}</span>
    </div>
  );
}

// Using the component
function App() {
  return (
    <div>
      <UserCard name="Juan" email="juan@email.com" role="Admin" />
      <UserCard name="Maria" email="maria@email.com" />
      {/* Maria will have role="User" (default value) */}
    </div>
  );
}

// ===== PASSING DIFFERENT TYPES AS PROPS =====
function ProductCard({ 
  name,           // string
  price,          // number
  inStock,        // boolean
  tags,           // array
  onAddToCart,    // function
  children        // special prop — content between opening/closing tags
}) {
  return (
    <div className="product">
      <h3>{name}</h3>
      <p>₱{price.toFixed(2)}</p>
      <p>{inStock ? "In Stock" : "Out of Stock"}</p>
      <div>{tags.map(tag => <span key={tag}>{tag}</span>)}</div>
      <button onClick={() => onAddToCart(name)}>Add to Cart</button>
      {children} {/* Renders whatever is placed inside the component tags */}
    </div>
  );
}

// Usage:
<ProductCard
  name="Laptop"
  price={49999.99}
  inStock={true}
  tags={["electronics", "sale"]}
  onAddToCart={(name) => console.log(`Added ${name}`)}
>
  <p>Free shipping available!</p>  {/* This becomes 'children' */}
</ProductCard>

// 🎯 KEY RULE: Props are READ-ONLY. A child CANNOT modify its props.
// If a child needs to change data, use state (useState) or callback props.
```

---

## 7.4 State and useState

```jsx
import { useState } from "react";

// STATE = Data that can CHANGE over time and causes the component to re-render

function Counter() {
  // useState returns an array: [currentValue, setterFunction]
  const [count, setCount] = useState(0);
  //      ↑          ↑                ↑
  //  current    function to      initial
  //  value      update it        value
  
  return (
    <div>
      <p>Count: {count}</p>
      {/* When state changes, React re-renders the component */}
      <button onClick={() => setCount(count + 1)}>Increment</button>
      <button onClick={() => setCount(count - 1)}>Decrement</button>
      <button onClick={() => setCount(0)}>Reset</button>
      
      {/* IMPORTANT: When new state depends on previous state, 
          use the FUNCTIONAL FORM */}
      <button onClick={() => setCount(prev => prev + 1)}>
        Safe Increment
      </button>
    </div>
  );
}

// ===== STATE WITH OBJECTS =====
function UserForm() {
  const [formData, setFormData] = useState({
    name: "",
    email: "",
    age: "",
  });
  
  const handleChange = (e) => {
    const { name, value } = e.target;
    // MUST spread the old state — React state updates must be IMMUTABLE
    setFormData(prev => ({
      ...prev,        // Keep all existing properties
      [name]: value,  // Update only the changed property
    }));
  };
  
  const handleSubmit = (e) => {
    e.preventDefault();
    console.log("Form data:", formData);
  };
  
  return (
    <form onSubmit={handleSubmit}>
      <input name="name" value={formData.name} onChange={handleChange} />
      <input name="email" value={formData.email} onChange={handleChange} />
      <input name="age" value={formData.age} onChange={handleChange} />
      <button type="submit">Submit</button>
    </form>
  );
}

// ===== STATE WITH ARRAYS =====
function TodoList() {
  const [todos, setTodos] = useState([]);
  const [inputValue, setInputValue] = useState("");
  
  const addTodo = () => {
    if (!inputValue.trim()) return;
    setTodos(prev => [
      ...prev,
      { id: Date.now(), text: inputValue, completed: false }
    ]);
    setInputValue("");
  };
  
  const toggleTodo = (id) => {
    setTodos(prev => prev.map(todo =>
      todo.id === id ? { ...todo, completed: !todo.completed } : todo
    ));
  };
  
  const deleteTodo = (id) => {
    setTodos(prev => prev.filter(todo => todo.id !== id));
  };
  
  return (
    <div>
      <input
        value={inputValue}
        onChange={(e) => setInputValue(e.target.value)}
        onKeyDown={(e) => e.key === "Enter" && addTodo()}
      />
      <button onClick={addTodo}>Add</button>
      <ul>
        {todos.map(todo => (
          <li key={todo.id}>
            <span
              onClick={() => toggleTodo(todo.id)}
              style={{ textDecoration: todo.completed ? "line-through" : "none" }}
            >
              {todo.text}
            </span>
            <button onClick={() => deleteTodo(todo.id)}>×</button>
          </li>
        ))}
      </ul>
    </div>
  );
}
```

---

## 7.5 useEffect

```jsx
import { useState, useEffect } from "react";

// useEffect = Perform SIDE EFFECTS in function components
// Side effects: API calls, timers, DOM manipulation, subscriptions

function UserProfile({ userId }) {
  const [user, setUser] = useState(null);
  const [loading, setLoading] = useState(true);
  
  // ===== useEffect with dependency array =====
  useEffect(() => {
    // This function runs AFTER the component renders
    
    const fetchUser = async () => {
      setLoading(true);
      try {
        const res = await fetch(`/api/users/${userId}`);
        const data = await res.json();
        setUser(data);
      } catch (err) {
        console.error("Failed to fetch user:", err);
      } finally {
        setLoading(false);
      }
    };
    
    fetchUser();
    
    // CLEANUP FUNCTION (optional) — runs when component unmounts
    // or when dependencies change (before the next effect)
    return () => {
      console.log("Cleanup: component unmounting or userId changed");
    };
  }, [userId]); // DEPENDENCY ARRAY — effect runs when userId changes
  
  if (loading) return <p>Loading...</p>;
  if (!user) return <p>User not found</p>;
  
  return (
    <div>
      <h2>{user.name}</h2>
      <p>{user.email}</p>
    </div>
  );
}

// ===== DEPENDENCY ARRAY RULES =====

// 1. NO dependency array → runs after EVERY render
useEffect(() => {
  console.log("Runs after every render"); // Usually wrong!
});

// 2. EMPTY dependency array → runs ONCE after first render
useEffect(() => {
  console.log("Runs only once — like componentDidMount");
}, []);

// 3. WITH dependencies → runs when those values change
useEffect(() => {
  console.log("Runs when count changes");
}, [count]);

// 🎯 RULE: Include ALL values from the component that the effect uses
// in the dependency array. Your linter will warn you if you miss any.
```

---

## 7.6 useContext

```jsx
import { createContext, useContext, useState } from "react";

// CONTEXT = A way to share data across components WITHOUT prop drilling
// (passing props through many levels of components)

// Step 1: Create the Context
const ThemeContext = createContext();

// Step 2: Create a Provider component
function ThemeProvider({ children }) {
  const [theme, setTheme] = useState("light");
  
  const toggleTheme = () => {
    setTheme(prev => prev === "light" ? "dark" : "light");
  };
  
  // The value prop is what ALL children can access
  return (
    <ThemeContext.Provider value={{ theme, toggleTheme }}>
      {children}
    </ThemeContext.Provider>
  );
}

// Step 3: Use the Context in any child component (no matter how deep)
function Header() {
  const { theme, toggleTheme } = useContext(ThemeContext);
  
  return (
    <header style={{ background: theme === "dark" ? "#333" : "#fff" }}>
      <h1>My App</h1>
      <button onClick={toggleTheme}>
        Switch to {theme === "dark" ? "Light" : "Dark"} Mode
      </button>
    </header>
  );
}

function Content() {
  const { theme } = useContext(ThemeContext);
  
  return (
    <main style={{ color: theme === "dark" ? "#fff" : "#000" }}>
      <p>Current theme: {theme}</p>
    </main>
  );
}

// Step 4: Wrap your app with the Provider
function App() {
  return (
    <ThemeProvider>
      <Header />
      <Content />
    </ThemeProvider>
  );
}
```

---

## 7.7 React CRUD Application

```jsx
// A complete CRUD (Create, Read, Update, Delete) application
import { useState, useEffect } from "react";

// API Service (Model)
const API_URL = "https://jsonplaceholder.typicode.com/posts";

const api = {
  getAll: () => fetch(API_URL).then(r => r.json()),
  create: (data) => fetch(API_URL, {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(data),
  }).then(r => r.json()),
  update: (id, data) => fetch(`${API_URL}/${id}`, {
    method: "PUT",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(data),
  }).then(r => r.json()),
  delete: (id) => fetch(`${API_URL}/${id}`, { method: "DELETE" }),
};

function PostManager() {
  const [posts, setPosts] = useState([]);
  const [loading, setLoading] = useState(true);
  const [editingPost, setEditingPost] = useState(null);
  const [formData, setFormData] = useState({ title: "", body: "" });
  
  // READ — Fetch posts on mount
  useEffect(() => {
    api.getAll()
      .then(data => setPosts(data.slice(0, 10))) // Limit to 10 for demo
      .finally(() => setLoading(false));
  }, []);
  
  const handleChange = (e) => {
    setFormData(prev => ({ ...prev, [e.target.name]: e.target.value }));
  };
  
  const handleSubmit = async (e) => {
    e.preventDefault();
    
    if (editingPost) {
      // UPDATE
      const updated = await api.update(editingPost.id, formData);
      setPosts(prev => prev.map(p => p.id === editingPost.id ? { ...p, ...formData } : p));
      setEditingPost(null);
    } else {
      // CREATE
      const newPost = await api.create(formData);
      setPosts(prev => [{ ...newPost, id: Date.now() }, ...prev]);
    }
    
    setFormData({ title: "", body: "" });
  };
  
  const handleEdit = (post) => {
    setEditingPost(post);
    setFormData({ title: post.title, body: post.body });
  };
  
  const handleDelete = async (id) => {
    await api.delete(id);
    setPosts(prev => prev.filter(p => p.id !== id));
  };
  
  const handleCancel = () => {
    setEditingPost(null);
    setFormData({ title: "", body: "" });
  };
  
  if (loading) return <p>Loading...</p>;
  
  return (
    <div>
      <h1>Post Manager (CRUD)</h1>
      
      {/* Create / Update Form */}
      <form onSubmit={handleSubmit}>
        <h2>{editingPost ? "Edit Post" : "Create Post"}</h2>
        <input
          name="title"
          placeholder="Title"
          value={formData.title}
          onChange={handleChange}
          required
        />
        <textarea
          name="body"
          placeholder="Body"
          value={formData.body}
          onChange={handleChange}
          required
        />
        <button type="submit">{editingPost ? "Update" : "Create"}</button>
        {editingPost && <button type="button" onClick={handleCancel}>Cancel</button>}
      </form>
      
      {/* Post List */}
      <ul>
        {posts.map(post => (
          <li key={post.id}>
            <h3>{post.title}</h3>
            <p>{post.body}</p>
            <button onClick={() => handleEdit(post)}>Edit</button>
            <button onClick={() => handleDelete(post.id)}>Delete</button>
          </li>
        ))}
      </ul>
    </div>
  );
}

export default PostManager;
```

---

## 7.8 React Interview Questions

**Q1: What is the Virtual DOM?**

> **Answer:** The Virtual DOM is a lightweight JavaScript copy of the real DOM. When state changes, React creates a new Virtual DOM, compares it with the previous one (a process called "diffing"), and only updates the parts of the real DOM that actually changed. This is much faster than re-rendering the entire page.

**Q2: What is the difference between state and props?**

> **Answer:** **Props** are data passed FROM a parent component — they're read-only and the child can't modify them. **State** is data managed WITHIN a component — it can change over time and when it does, the component re-renders.
>
> Think of it: Props = function arguments, State = local variables.

**Q3: Why do we need keys when rendering lists?**

> **Answer:** Keys help React identify which items have changed, been added, or removed. Without keys, React would re-render the entire list. With unique keys, React can update only the changed items, improving performance.
>
> **Common mistake:** Using array index as key. This causes bugs when items are reordered or deleted. Use a unique ID instead.

**Q4: What is the purpose of useEffect's cleanup function?**

> **Answer:** The cleanup function runs when the component unmounts or before the effect re-runs (when dependencies change). It's used to prevent memory leaks by cleaning up subscriptions, timers, event listeners, and canceling API calls.

---

## 7.9 React Summary & Cheat Sheet

```
📌 REACT CHEAT SHEET:

Component    = Function that returns JSX
Props        = Data passed from parent (read-only)
State        = Data managed within component (mutable)
JSX          = HTML-like syntax in JavaScript

useState     = Create reactive state
useEffect    = Run side effects (API calls, timers)
useContext   = Share data without prop drilling

RULES:
- Components MUST start with capital letter
- Return ONE parent element (or use <>fragments</>)
- Use className, not class
- Use camelCase for attributes (onClick, onChange)
- Keys must be unique in lists
- State updates are IMMUTABLE (spread then modify)
- Never modify state directly (use setter function)
```

---

# SECTION 8: POSTGRESQL REVIEW

## 8.1 Concept Explanation

### What is PostgreSQL?

PostgreSQL (often called "Postgres") is a powerful, **open-source relational database** — one of the most advanced and reliable databases in the world. It stores data in **tables** with **rows** and **columns**, similar to a spreadsheet.

### PostgreSQL vs MySQL

| Feature              | PostgreSQL                    | MySQL                         |
|----------------------|-------------------------------|-------------------------------|
| Type                 | Object-Relational             | Relational                    |
| ACID Compliance      | Full                          | Partial (depends on engine)   |
| JSON Support         | Native (JSONB)                | Basic JSON                    |
| Complexity           | More features, steeper learning | Simpler, easier to start   |
| Performance          | Better for complex queries    | Better for simple reads       |
| Used by              | Instagram, Spotify, Reddit    | Facebook, Twitter, WordPress  |
| Default Port         | 5432                          | 3306                          |

### Why Companies Use PostgreSQL

- **Reliability** — ACID compliant (your data is safe)
- **Advanced features** — JSON support, full-text search, arrays
- **Scalability** — Handles large amounts of data
- **Standards compliant** — Follows SQL standards closely
- **Free** — No licensing costs
- **Works with Prisma** — Perfect for your NestJS stack

### Memory Trick 🧠

> If MySQL is like a reliable family car, PostgreSQL is like a luxury sedan — both get you there, but PostgreSQL has more features under the hood.

---

## 8.2 Core Concepts

### Database → Table → Row → Column

```
DATABASE: company_db
│
├── TABLE: employees
│   ├── COLUMN: id (integer, primary key)
│   ├── COLUMN: name (varchar)
│   ├── COLUMN: email (varchar)
│   ├── COLUMN: department_id (integer, foreign key)
│   └── COLUMN: salary (decimal)
│   │
│   ├── ROW: (1, "Juan", "juan@email.com", 1, 50000)
│   ├── ROW: (2, "Maria", "maria@email.com", 2, 55000)
│   └── ROW: (3, "Pedro", "pedro@email.com", 1, 45000)
│
├── TABLE: departments
│   ├── COLUMN: id (integer, primary key)
│   └── COLUMN: name (varchar)
│   │
│   ├── ROW: (1, "Engineering")
│   └── ROW: (2, "Design")
```

---

## 8.3 SQL Basics

```sql
-- ===== CREATE DATABASE =====
CREATE DATABASE company_db;

-- ===== CREATE TABLES =====

-- Departments table
CREATE TABLE departments (
    id SERIAL PRIMARY KEY,        -- SERIAL = auto-incrementing integer
    name VARCHAR(100) NOT NULL,   -- VARCHAR = variable-length string
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    -- DEFAULT CURRENT_TIMESTAMP = automatically set to current date/time
);

-- Employees table
CREATE TABLE employees (
    id SERIAL PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,      -- NOT NULL = required field
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,   -- UNIQUE = no duplicates allowed
    department_id INTEGER REFERENCES departments(id), -- FOREIGN KEY
    salary DECIMAL(10, 2) DEFAULT 0.00,   -- DECIMAL(10,2) = up to 10 digits, 2 decimal places
    hire_date DATE DEFAULT CURRENT_DATE,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ===== CONSTRAINTS EXPLAINED =====
-- PRIMARY KEY: Unique identifier for each row (like a national ID number)
-- FOREIGN KEY: Links to another table's primary key (creates relationships)
-- NOT NULL:    Field must have a value (can't be empty)
-- UNIQUE:      No two rows can have the same value in this column
-- DEFAULT:     Value used when no value is provided
-- CHECK:       Validates values against a condition

-- Example with CHECK constraint
CREATE TABLE products (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) CHECK (price >= 0),     -- Price can't be negative
    stock INTEGER CHECK (stock >= 0) DEFAULT 0,   -- Stock can't be negative
    category VARCHAR(50) NOT NULL
);

-- ===== INSERT DATA =====
INSERT INTO departments (name) VALUES 
    ('Engineering'),
    ('Design'),
    ('Marketing');

INSERT INTO employees (first_name, last_name, email, department_id, salary) VALUES
    ('Juan', 'Dela Cruz', 'juan@company.com', 1, 50000),
    ('Maria', 'Santos', 'maria@company.com', 2, 55000),
    ('Pedro', 'Reyes', 'pedro@company.com', 1, 45000),
    ('Ana', 'Garcia', 'ana@company.com', 3, 48000),
    ('Carlos', 'Lopez', 'carlos@company.com', 1, 60000);

-- ===== SELECT (READ) =====
-- Get all columns from all employees
SELECT * FROM employees;

-- Get specific columns
SELECT first_name, last_name, salary FROM employees;

-- With conditions (WHERE)
SELECT * FROM employees WHERE department_id = 1;
SELECT * FROM employees WHERE salary > 50000;
SELECT * FROM employees WHERE first_name LIKE 'J%'; -- Starts with J
SELECT * FROM employees WHERE email LIKE '%@company.com';

-- Multiple conditions
SELECT * FROM employees 
WHERE department_id = 1 
  AND salary > 45000 
  AND is_active = TRUE;

SELECT * FROM employees 
WHERE department_id = 1 
   OR department_id = 2;

-- Sorting (ORDER BY)
SELECT * FROM employees ORDER BY salary DESC; -- Highest to lowest
SELECT * FROM employees ORDER BY last_name ASC; -- A to Z (ASC is default)

-- Limiting results
SELECT * FROM employees ORDER BY salary DESC LIMIT 3; -- Top 3 highest paid

-- Counting
SELECT COUNT(*) FROM employees; -- Total number of employees
SELECT COUNT(*) FROM employees WHERE department_id = 1; -- Employees in Engineering

-- Aggregate functions
SELECT 
    MIN(salary) AS lowest_salary,
    MAX(salary) AS highest_salary,
    AVG(salary) AS average_salary,
    SUM(salary) AS total_salaries
FROM employees;

-- GROUP BY
SELECT 
    department_id, 
    COUNT(*) AS employee_count,
    AVG(salary) AS avg_salary
FROM employees
GROUP BY department_id
HAVING COUNT(*) > 1; -- HAVING filters AFTER grouping (WHERE filters BEFORE)

-- ===== UPDATE =====
UPDATE employees 
SET salary = 55000, updated_at = CURRENT_TIMESTAMP
WHERE id = 1;

-- Update multiple rows
UPDATE employees SET salary = salary * 1.10 WHERE department_id = 1;
-- Give 10% raise to all Engineering employees

-- ===== DELETE =====
DELETE FROM employees WHERE id = 5;

-- Delete with conditions
DELETE FROM employees WHERE is_active = FALSE AND hire_date < '2020-01-01';

-- ⚠️ DANGER: Delete ALL rows (be very careful!)
-- DELETE FROM employees; -- Deletes everything!
```

---

## 8.4 Joins

```sql
-- JOINS combine data from multiple tables

-- ===== INNER JOIN — Only matching rows from both tables =====
SELECT 
    e.first_name,
    e.last_name,
    e.salary,
    d.name AS department_name
FROM employees e
INNER JOIN departments d ON e.department_id = d.id;
-- Only returns employees who HAVE a department

-- ===== LEFT JOIN — All rows from left table + matching from right =====
SELECT 
    e.first_name,
    e.last_name,
    d.name AS department_name
FROM employees e
LEFT JOIN departments d ON e.department_id = d.id;
-- Returns ALL employees, even if they don't have a department
-- Department will be NULL for employees without one

-- ===== RIGHT JOIN — All rows from right table + matching from left =====
SELECT 
    d.name AS department_name,
    e.first_name
FROM employees e
RIGHT JOIN departments d ON e.department_id = d.id;
-- Returns ALL departments, even if they have no employees

-- ===== FULL OUTER JOIN — All rows from both tables =====
SELECT 
    e.first_name,
    d.name AS department_name
FROM employees e
FULL OUTER JOIN departments d ON e.department_id = d.id;
-- Returns everything from both tables
```

### Memory Trick for Joins 🧠

```
INNER JOIN = Only what's in BOTH circles (intersection)
LEFT JOIN  = Everything in LEFT circle + matching right
RIGHT JOIN = Everything in RIGHT circle + matching left
FULL JOIN  = Everything in BOTH circles (union)
```

---

## 8.5 Indexes

```sql
-- INDEXES make queries FASTER by creating a lookup structure
-- Like an index in a book — you don't read every page to find a topic

-- Create an index on email (frequently searched column)
CREATE INDEX idx_employees_email ON employees(email);

-- Create an index on frequently queried columns
CREATE INDEX idx_employees_dept ON employees(department_id);

-- ⚠️ Don't over-index! Indexes speed up reads but slow down writes.
-- Only index columns you frequently search, filter, or join on.
```

---

## 8.6 Mini Employee Management Database Project

```sql
-- ===== COMPLETE DATABASE SCHEMA =====

-- Create database
CREATE DATABASE employee_management;

-- Connect to database
\c employee_management;

-- Departments
CREATE TABLE departments (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL UNIQUE,
    description TEXT,
    manager_id INTEGER, -- Will reference employees.id (circular reference)
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Employees
CREATE TABLE employees (
    id SERIAL PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone VARCHAR(20),
    department_id INTEGER REFERENCES departments(id) ON DELETE SET NULL,
    position VARCHAR(100) NOT NULL,
    salary DECIMAL(12, 2) NOT NULL CHECK (salary >= 0),
    hire_date DATE NOT NULL DEFAULT CURRENT_DATE,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Projects
CREATE TABLE projects (
    id SERIAL PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    description TEXT,
    start_date DATE NOT NULL,
    end_date DATE,
    status VARCHAR(20) DEFAULT 'active' CHECK (status IN ('active', 'completed', 'on_hold', 'cancelled')),
    budget DECIMAL(15, 2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Employee-Project (Many-to-Many relationship)
CREATE TABLE employee_projects (
    employee_id INTEGER REFERENCES employees(id) ON DELETE CASCADE,
    project_id INTEGER REFERENCES projects(id) ON DELETE CASCADE,
    role VARCHAR(50) DEFAULT 'member',
    assigned_date DATE DEFAULT CURRENT_DATE,
    PRIMARY KEY (employee_id, project_id) -- Composite primary key
);

-- Add foreign key for department manager (circular reference)
ALTER TABLE departments 
ADD CONSTRAINT fk_manager 
FOREIGN KEY (manager_id) REFERENCES employees(id);

-- ===== INSERT SAMPLE DATA =====
INSERT INTO departments (name, description) VALUES
    ('Engineering', 'Software development team'),
    ('Design', 'UI/UX design team'),
    ('Marketing', 'Marketing and communications'),
    ('HR', 'Human resources');

INSERT INTO employees (first_name, last_name, email, phone, department_id, position, salary) VALUES
    ('Juan', 'Dela Cruz', 'juan@company.com', '09171234567', 1, 'Senior Developer', 80000),
    ('Maria', 'Santos', 'maria@company.com', '09181234567', 2, 'UI Designer', 65000),
    ('Pedro', 'Reyes', 'pedro@company.com', '09191234567', 1, 'Junior Developer', 45000),
    ('Ana', 'Garcia', 'ana@company.com', '09201234567', 3, 'Marketing Manager', 70000),
    ('Carlos', 'Lopez', 'carlos@company.com', '09211234567', 1, 'Full Stack Developer', 75000),
    ('Rosa', 'Martinez', 'rosa@company.com', '09221234567', 4, 'HR Manager', 68000);

-- Set department managers
UPDATE departments SET manager_id = 1 WHERE name = 'Engineering';
UPDATE departments SET manager_id = 4 WHERE name = 'Marketing';

INSERT INTO projects (name, description, start_date, end_date, status, budget) VALUES
    ('Website Redesign', 'Complete redesign of company website', '2025-01-15', '2025-06-30', 'active', 500000),
    ('Mobile App', 'Build company mobile application', '2025-03-01', '2025-12-31', 'active', 1000000),
    ('Marketing Campaign', 'Q2 2025 marketing push', '2025-04-01', '2025-06-30', 'active', 200000);

INSERT INTO employee_projects (employee_id, project_id, role) VALUES
    (1, 1, 'lead'),
    (1, 2, 'lead'),
    (2, 1, 'member'),
    (3, 2, 'member'),
    (4, 3, 'lead'),
    (5, 1, 'member'),
    (5, 2, 'member');

-- ===== USEFUL QUERIES =====

-- 1. Get all employees with their department names
SELECT 
    e.id,
    e.first_name || ' ' || e.last_name AS full_name,
    e.position,
    e.salary,
    d.name AS department
FROM employees e
LEFT JOIN departments d ON e.department_id = d.id
ORDER BY d.name, e.last_name;

-- 2. Get department statistics
SELECT 
    d.name AS department,
    COUNT(e.id) AS total_employees,
    ROUND(AVG(e.salary), 2) AS avg_salary,
    MIN(e.salary) AS min_salary,
    MAX(e.salary) AS max_salary
FROM departments d
LEFT JOIN employees e ON d.id = e.department_id
GROUP BY d.id, d.name
ORDER BY total_employees DESC;

-- 3. Get employees working on multiple projects
SELECT 
    e.first_name || ' ' || e.last_name AS full_name,
    COUNT(ep.project_id) AS project_count
FROM employees e
JOIN employee_projects ep ON e.id = ep.employee_id
GROUP BY e.id, e.first_name, e.last_name
HAVING COUNT(ep.project_id) > 1;

-- 4. Get project details with team members
SELECT 
    p.name AS project,
    p.status,
    e.first_name || ' ' || e.last_name AS team_member,
    ep.role
FROM projects p
JOIN employee_projects ep ON p.id = ep.project_id
JOIN employees e ON ep.employee_id = e.id
ORDER BY p.name, ep.role;

-- 5. Find employees earning above department average
SELECT 
    e.first_name || ' ' || e.last_name AS full_name,
    e.salary,
    d.name AS department,
    dept_avg.avg_salary
FROM employees e
JOIN departments d ON e.department_id = d.id
JOIN (
    SELECT department_id, ROUND(AVG(salary), 2) AS avg_salary
    FROM employees
    GROUP BY department_id
) dept_avg ON e.department_id = dept_avg.department_id
WHERE e.salary > dept_avg.avg_salary;
```

---

## 8.7 PostgreSQL Interview Questions

**Q1: What is a Primary Key?**

> **Answer:** A Primary Key is a column (or combination of columns) that **uniquely identifies each row** in a table. It must be UNIQUE and NOT NULL. Every table should have a primary key. It's like a national ID number — no two people can have the same one.

**Q2: What is a Foreign Key?**

> **Answer:** A Foreign Key is a column that **references the Primary Key of another table**, creating a relationship between the two tables. It ensures referential integrity — you can't insert a value that doesn't exist in the referenced table.

**Q3: What is the difference between WHERE and HAVING?**

> **Answer:** `WHERE` filters rows **before** grouping (works on individual rows). `HAVING` filters groups **after** grouping with `GROUP BY` (works on aggregated results).

**Q4: Explain INNER JOIN vs LEFT JOIN.**

> **Answer:** `INNER JOIN` returns only rows that have **matching values in both tables**. `LEFT JOIN` returns **all rows from the left table** and the matched rows from the right table. If there's no match, the right side columns are NULL.

---

## 8.8 PostgreSQL Summary & Cheat Sheet

```
📌 POSTGRESQL CHEAT SHEET:

CREATE TABLE  — Define a new table with columns
INSERT INTO   — Add new rows
SELECT        — Read/query data
UPDATE        — Modify existing rows
DELETE        — Remove rows

WHERE         — Filter rows
ORDER BY      — Sort results (ASC/DESC)
LIMIT         — Restrict number of results
GROUP BY      — Group rows for aggregation
HAVING        — Filter groups

JOIN TYPES:
  INNER JOIN  — Only matching rows
  LEFT JOIN   — All left + matching right
  RIGHT JOIN  — All right + matching left
  FULL JOIN   — All from both

CONSTRAINTS:
  PRIMARY KEY — Unique row identifier
  FOREIGN KEY — Links to another table
  NOT NULL    — Required field
  UNIQUE      — No duplicates
  CHECK       — Validate values
  DEFAULT     — Auto-fill value

DATA TYPES:
  SERIAL      — Auto-increment integer
  INTEGER     — Whole numbers
  DECIMAL     — Precise numbers (money)
  VARCHAR(n)  — Variable text (max n chars)
  TEXT        — Unlimited text
  BOOLEAN     — true/false
  DATE        — Calendar date
  TIMESTAMP   — Date + time
```

---

# SECTION 9: PRISMA REVIEW

## 9.1 Concept Explanation

### What is Prisma?

Prisma is an **ORM (Object-Relational Mapper)** for Node.js and TypeScript. It lets you interact with your database using **JavaScript/TypeScript code** instead of writing raw SQL queries.

### What is an ORM?

An ORM translates between your programming language's objects and the database's tables.

```
WITHOUT ORM (raw SQL):
db.query("SELECT * FROM users WHERE email = $1", [email])

WITH PRISMA (ORM):
prisma.user.findUnique({ where: { email } })
```

### Why Developers Use Prisma

- **Type-safe** — TypeScript knows your database structure, catches errors at compile time
- **Auto-generated** — Prisma Client is auto-generated from your schema
- **Easy migrations** — Change your schema, Prisma updates the database
- **Readable** — Code reads like plain English
- **Works with PostgreSQL** — Perfect for your stack

### Prisma Architecture

```
Your Code (NestJS)
     ↓
Prisma Client (auto-generated TypeScript client)
     ↓
Prisma Query Engine (translates JS to SQL)
     ↓
PostgreSQL Database
```

### Memory Trick 🧠

> Prisma is like a **translator** between JavaScript and PostgreSQL.
> You speak JavaScript, PostgreSQL speaks SQL, and Prisma translates between them.

---

## 9.2 Setup and Installation

```bash
# Step 1: Initialize a new Node.js project
npm init -y

# Step 2: Install Prisma as a development dependency
npm install prisma --save-dev

# Step 3: Install Prisma Client (the actual library you use in code)
npm install @prisma/client

# Step 4: Initialize Prisma (creates prisma/ folder with schema.prisma)
npx prisma init
```

This creates:
```
your-project/
├── prisma/
│   └── schema.prisma    ← Database schema definition
├── .env                 ← Database connection string
└── package.json
```

---

## 9.3 Prisma Schema

```prisma
// prisma/schema.prisma
// This file defines your ENTIRE database structure

// DATABASE CONNECTION
generator client {
  provider = "prisma-client-js"  // Generates JavaScript/TypeScript client
}

datasource db {
  provider = "postgresql"        // We're using PostgreSQL
  url      = env("DATABASE_URL") // Connection string from .env file
}

// ===== MODELS (each model = a database table) =====

// User model → creates "users" table
model User {
  // FIELD   TYPE       ATTRIBUTES
  id        Int        @id @default(autoincrement())  // Primary key, auto-increment
  email     String     @unique                         // Must be unique
  name      String                                     // Required field
  password  String                                     // Required field
  role      Role       @default(USER)                  // Enum with default value
  isActive  Boolean    @default(true)                  // Default true
  createdAt DateTime   @default(now())                 // Auto-set to current time
  updatedAt DateTime   @updatedAt                      // Auto-update on changes
  
  // RELATIONSHIPS
  posts     Post[]     // One User has many Posts (one-to-many)
  profile   Profile?   // One User has one Profile (one-to-one, optional)
  
  // TABLE NAME in database (optional, Prisma uses model name by default)
  @@map("users")
}

// Profile model → creates "profiles" table
model Profile {
  id        Int      @id @default(autoincrement())
  bio       String?  // ? means OPTIONAL (can be null)
  avatar    String?
  phone     String?
  
  // RELATIONSHIP: Belongs to one User
  userId    Int      @unique           // Foreign key (unique = one-to-one)
  user      User     @relation(fields: [userId], references: [id], onDelete: Cascade)
  // onDelete: Cascade = If user is deleted, profile is also deleted
  
  @@map("profiles")
}

// Post model → creates "posts" table
model Post {
  id          Int        @id @default(autoincrement())
  title       String
  content     String?
  published   Boolean    @default(false)
  createdAt   DateTime   @default(now())
  updatedAt   DateTime   @updatedAt
  
  // RELATIONSHIPS
  authorId    Int                        // Foreign key
  author      User       @relation(fields: [authorId], references: [id])
  categories  Category[] // Many-to-many with Category
  
  // INDEX for faster queries
  @@index([authorId])
  @@map("posts")
}

// Category model → creates "categories" table
model Category {
  id    Int    @id @default(autoincrement())
  name  String @unique
  posts Post[] // Many-to-many with Post
  
  @@map("categories")
}

// ENUM — A fixed set of values
enum Role {
  USER
  ADMIN
  MODERATOR
}
```

### The .env file

```env
# .env
# Connection string format: postgresql://USER:PASSWORD@HOST:PORT/DATABASE
DATABASE_URL="postgresql://postgres:password@localhost:5432/myapp_db?schema=public"
```

---

## 9.4 Migrations

```bash
# CREATE a migration (generates SQL from your schema changes)
npx prisma migrate dev --name init
# This does 3 things:
# 1. Generates SQL migration files in prisma/migrations/
# 2. Applies the migration to your database (creates/updates tables)
# 3. Generates the Prisma Client

# After changing your schema, run:
npx prisma migrate dev --name add_phone_field

# VIEW your database in a web browser (Prisma Studio)
npx prisma studio

# GENERATE Prisma Client (without migration — when you only changed the schema)
npx prisma generate

# RESET database (delete all data and re-run all migrations)
npx prisma migrate reset

# PUSH schema to database without creating migration files (for prototyping)
npx prisma db push
```

---

## 9.5 CRUD Operations with Prisma

```javascript
// Import the auto-generated Prisma Client
import { PrismaClient } from "@prisma/client";

const prisma = new PrismaClient();

// ===== CREATE =====

// Create a single user
const newUser = await prisma.user.create({
  data: {
    name: "Juan Dela Cruz",
    email: "juan@email.com",
    password: "hashedpassword123", // Always hash passwords!
    role: "USER",
  },
});
// Returns: { id: 1, name: "Juan Dela Cruz", email: "juan@email.com", ... }

// Create user WITH related profile (nested create)
const userWithProfile = await prisma.user.create({
  data: {
    name: "Maria Santos",
    email: "maria@email.com",
    password: "hashedpassword456",
    profile: {
      create: {
        bio: "Full-stack developer",
        phone: "09171234567",
      },
    },
  },
  include: {
    profile: true, // Include the profile in the response
  },
});

// Create multiple records at once
const manyUsers = await prisma.user.createMany({
  data: [
    { name: "User 1", email: "user1@email.com", password: "pass1" },
    { name: "User 2", email: "user2@email.com", password: "pass2" },
    { name: "User 3", email: "user3@email.com", password: "pass3" },
  ],
});
// Returns: { count: 3 }

// ===== READ =====

// Find all users
const allUsers = await prisma.user.findMany();

// Find with conditions
const activeUsers = await prisma.user.findMany({
  where: {
    isActive: true,
    role: "USER",
  },
  orderBy: {
    createdAt: "desc", // Newest first
  },
  take: 10,   // Limit to 10
  skip: 0,    // Skip 0 (pagination)
});

// Find one by unique field
const user = await prisma.user.findUnique({
  where: { email: "juan@email.com" },
});

// Find one with conditions (returns first match)
const firstAdmin = await prisma.user.findFirst({
  where: { role: "ADMIN" },
});

// Include related data
const userWithPosts = await prisma.user.findUnique({
  where: { id: 1 },
  include: {
    posts: true,          // Include all posts
    profile: true,        // Include profile
  },
});

// Select specific fields only
const userNames = await prisma.user.findMany({
  select: {
    id: true,
    name: true,
    email: true,
    // Only these 3 fields are returned (lighter response)
  },
});

// Complex filtering
const filteredUsers = await prisma.user.findMany({
  where: {
    OR: [
      { name: { contains: "Juan", mode: "insensitive" } },
      { email: { endsWith: "@company.com" } },
    ],
    AND: {
      isActive: true,
      createdAt: { gte: new Date("2025-01-01") }, // gte = greater than or equal
    },
  },
});

// ===== UPDATE =====

// Update one
const updatedUser = await prisma.user.update({
  where: { id: 1 },
  data: {
    name: "Juan Updated",
    role: "ADMIN",
  },
});

// Update many
const deactivated = await prisma.user.updateMany({
  where: {
    isActive: true,
    createdAt: { lt: new Date("2024-01-01") }, // lt = less than
  },
  data: {
    isActive: false,
  },
});

// Upsert (update if exists, create if not)
const upserted = await prisma.user.upsert({
  where: { email: "juan@email.com" },
  update: { name: "Juan Updated" },   // If found, update
  create: {                            // If not found, create
    name: "Juan",
    email: "juan@email.com",
    password: "hash123",
  },
});

// ===== DELETE =====

// Delete one
const deletedUser = await prisma.user.delete({
  where: { id: 1 },
});

// Delete many
const deletedInactive = await prisma.user.deleteMany({
  where: { isActive: false },
});

// ===== AGGREGATIONS =====
const stats = await prisma.user.aggregate({
  _count: { id: true },
  _avg: { /* numeric fields */ },
  where: { isActive: true },
});

// ===== TRANSACTIONS =====
// Execute multiple operations atomically (all succeed or all fail)
const [user, post] = await prisma.$transaction([
  prisma.user.create({ data: { name: "New", email: "new@email.com", password: "hash" } }),
  prisma.post.create({ data: { title: "First Post", authorId: 1 } }),
]);
```

---

## 9.6 Relationships in Prisma

```prisma
// ONE-TO-ONE: One User has one Profile
model User {
  id      Int      @id @default(autoincrement())
  profile Profile? // Optional one-to-one
}
model Profile {
  id     Int  @id @default(autoincrement())
  userId Int  @unique          // @unique makes it one-to-one
  user   User @relation(fields: [userId], references: [id])
}

// ONE-TO-MANY: One User has many Posts
model User {
  id    Int    @id @default(autoincrement())
  posts Post[] // One user → many posts
}
model Post {
  id       Int  @id @default(autoincrement())
  authorId Int              // Foreign key
  author   User @relation(fields: [authorId], references: [id])
}

// MANY-TO-MANY: Posts can have many Categories, Categories can have many Posts
model Post {
  id         Int        @id @default(autoincrement())
  categories Category[] // Many-to-many (Prisma creates a join table automatically)
}
model Category {
  id    Int    @id @default(autoincrement())
  posts Post[] // Many-to-many
}
```

---

## 9.7 Prisma Interview Questions

**Q1: What is Prisma and why use it instead of raw SQL?**

> **Answer:** Prisma is an ORM (Object-Relational Mapper) for Node.js/TypeScript that lets you interact with databases using JavaScript instead of SQL. Benefits: type safety (catches errors at compile time), auto-generated client, readable code, easy migrations, and protection against SQL injection.

**Q2: What is a Prisma migration?**

> **Answer:** A migration is a versioned change to your database schema. When you modify your `schema.prisma` file and run `prisma migrate dev`, Prisma generates SQL that updates your database structure. Migrations are tracked in version control, so team members can keep their databases in sync.

**Q3: What is the difference between `findUnique` and `findFirst`?**

> **Answer:** `findUnique` only works with fields marked as `@unique` or `@id` — it finds exactly one record by a unique identifier. `findFirst` can use any field and returns the first record that matches the conditions. Use `findUnique` when searching by ID or email; use `findFirst` for general queries.

---

# SECTION 10: NESTJS REVIEW

## 10.1 Concept Explanation

### What is NestJS?

NestJS is a **progressive Node.js framework** for building efficient, scalable server-side applications. It's built with TypeScript and uses an architecture inspired by Angular — with **modules, controllers, and services**.

### Why Companies Use NestJS

- **Structured** — Enforces a clean, organized architecture
- **TypeScript** — Type safety catches bugs before runtime
- **Modular** — Easy to split into features/modules
- **Testable** — Built-in support for unit and integration testing
- **Enterprise-ready** — Used by large companies for production applications
- **OOP-based** — Uses decorators, classes, and dependency injection

### NestJS vs Express

| Feature              | Express                     | NestJS                        |
|----------------------|-----------------------------|-------------------------------|
| Structure            | No enforced structure       | Modules, Controllers, Services|
| TypeScript           | Optional                    | Built-in                      |
| Architecture         | Flexible (can be messy)     | Opinionated (clean by design) |
| Dependency Injection | Manual                      | Built-in                      |
| Learning curve       | Low                         | Medium                        |
| Best for             | Small/medium projects       | Medium/large projects         |

### NestJS Architecture

```
Module (organizes everything)
  ├── Controller (handles HTTP requests — like a receptionist)
  │     ↓ calls
  ├── Service (business logic — like a worker)
  │     ↓ uses
  └── Repository/Prisma (database access — like a filing cabinet)
```

### Memory Trick 🧠

> Think of NestJS like a **company office**:
> - **Module** = A department (Engineering, HR, Marketing)
> - **Controller** = The receptionist (receives requests, delegates work)
> - **Service** = The workers (do the actual work)
> - **Prisma** = The filing cabinet (stores and retrieves data)

---

## 10.2 Project Structure

```
src/
├── app.module.ts              ← Root module (registers all other modules)
├── app.controller.ts          ← Root controller
├── app.service.ts             ← Root service
├── main.ts                    ← Entry point (starts the server)
│
├── employees/                 ← Feature module
│   ├── employees.module.ts    ← Module definition
│   ├── employees.controller.ts ← HTTP request handlers
│   ├── employees.service.ts   ← Business logic
│   ├── dto/                   ← Data Transfer Objects
│   │   ├── create-employee.dto.ts
│   │   └── update-employee.dto.ts
│   └── entities/              ← Type definitions
│       └── employee.entity.ts
│
├── prisma/                    ← Prisma module
│   ├── prisma.module.ts
│   └── prisma.service.ts
│
└── auth/                      ← Auth module
    ├── auth.module.ts
    ├── auth.controller.ts
    ├── auth.service.ts
    └── guards/
        └── jwt-auth.guard.ts
```

---

## 10.3 Core Concepts

### The Module

```typescript
// employees/employees.module.ts
// MODULES organize your application into features
// Every NestJS app has at least one module (AppModule)

import { Module } from '@nestjs/common';
import { EmployeesController } from './employees.controller';
import { EmployeesService } from './employees.service';
import { PrismaModule } from '../prisma/prisma.module';

@Module({
  imports: [PrismaModule],          // Other modules this module needs
  controllers: [EmployeesController], // Controllers in this module
  providers: [EmployeesService],     // Services (business logic)
  exports: [EmployeesService],       // Make service available to other modules
})
export class EmployeesModule {}
```

### The Controller

```typescript
// employees/employees.controller.ts
// CONTROLLERS handle incoming HTTP requests and return responses
// They should NOT contain business logic — that goes in Services

import {
  Controller,
  Get,
  Post,
  Put,
  Delete,
  Param,
  Body,
  Query,
  HttpCode,
  HttpStatus,
  ParseIntPipe,
} from '@nestjs/common';
import { EmployeesService } from './employees.service';
import { CreateEmployeeDto } from './dto/create-employee.dto';
import { UpdateEmployeeDto } from './dto/update-employee.dto';

@Controller('employees') // Base route: /employees
export class EmployeesController {
  // DEPENDENCY INJECTION — NestJS automatically creates the service instance
  constructor(private readonly employeesService: EmployeesService) {}

  // GET /employees — Get all employees
  @Get()
  findAll(@Query('search') search?: string) {
    // @Query() extracts query parameters from the URL
    // e.g., /employees?search=Juan
    return this.employeesService.findAll(search);
  }

  // GET /employees/:id — Get one employee
  @Get(':id')
  findOne(@Param('id', ParseIntPipe) id: number) {
    // @Param() extracts URL parameters
    // ParseIntPipe automatically converts string to number and validates
    return this.employeesService.findOne(id);
  }

  // POST /employees — Create a new employee
  @Post()
  @HttpCode(HttpStatus.CREATED) // Returns 201 instead of default 200
  create(@Body() createEmployeeDto: CreateEmployeeDto) {
    // @Body() extracts the request body
    // The DTO validates the incoming data
    return this.employeesService.create(createEmployeeDto);
  }

  // PUT /employees/:id — Update an employee
  @Put(':id')
  update(
    @Param('id', ParseIntPipe) id: number,
    @Body() updateEmployeeDto: UpdateEmployeeDto,
  ) {
    return this.employeesService.update(id, updateEmployeeDto);
  }

  // DELETE /employees/:id — Delete an employee
  @Delete(':id')
  @HttpCode(HttpStatus.NO_CONTENT) // Returns 204 (no content)
  remove(@Param('id', ParseIntPipe) id: number) {
    return this.employeesService.remove(id);
  }
}
```

### The Service

```typescript
// employees/employees.service.ts
// SERVICES contain the BUSINESS LOGIC
// They are injected into Controllers via dependency injection

import { Injectable, NotFoundException } from '@nestjs/common';
import { PrismaService } from '../prisma/prisma.service';
import { CreateEmployeeDto } from './dto/create-employee.dto';
import { UpdateEmployeeDto } from './dto/update-employee.dto';

@Injectable() // This decorator makes the class injectable
export class EmployeesService {
  // Inject PrismaService to access the database
  constructor(private readonly prisma: PrismaService) {}

  // GET ALL employees (with optional search)
  async findAll(search?: string) {
    return this.prisma.employee.findMany({
      where: search
        ? {
            OR: [
              { firstName: { contains: search, mode: 'insensitive' } },
              { lastName: { contains: search, mode: 'insensitive' } },
              { email: { contains: search, mode: 'insensitive' } },
            ],
          }
        : undefined,
      include: {
        department: true, // Include department info
      },
      orderBy: { createdAt: 'desc' },
    });
  }

  // GET ONE employee by ID
  async findOne(id: number) {
    const employee = await this.prisma.employee.findUnique({
      where: { id },
      include: {
        department: true,
        projects: true,
      },
    });

    if (!employee) {
      // NestJS automatically returns a 404 response
      throw new NotFoundException(`Employee with ID ${id} not found`);
    }

    return employee;
  }

  // CREATE a new employee
  async create(data: CreateEmployeeDto) {
    return this.prisma.employee.create({
      data: {
        firstName: data.firstName,
        lastName: data.lastName,
        email: data.email,
        position: data.position,
        salary: data.salary,
        department: {
          connect: { id: data.departmentId }, // Connect to existing department
        },
      },
      include: {
        department: true,
      },
    });
  }

  // UPDATE an employee
  async update(id: number, data: UpdateEmployeeDto) {
    // Check if employee exists first
    await this.findOne(id);

    return this.prisma.employee.update({
      where: { id },
      data,
      include: {
        department: true,
      },
    });
  }

  // DELETE an employee
  async remove(id: number) {
    // Check if employee exists first
    await this.findOne(id);

    return this.prisma.employee.delete({
      where: { id },
    });
  }
}
```

### DTOs (Data Transfer Objects)

```typescript
// employees/dto/create-employee.dto.ts
// DTOs define the SHAPE and VALIDATION of incoming data
// They are like contracts — the request must match this shape

import { IsString, IsEmail, IsNumber, IsOptional, Min, MinLength } from 'class-validator';

export class CreateEmployeeDto {
  @IsString()
  @MinLength(2, { message: 'First name must be at least 2 characters' })
  firstName: string;

  @IsString()
  @MinLength(2)
  lastName: string;

  @IsEmail({}, { message: 'Please provide a valid email' })
  email: string;

  @IsString()
  position: string;

  @IsNumber()
  @Min(0, { message: 'Salary cannot be negative' })
  salary: number;

  @IsNumber()
  departmentId: number;

  @IsOptional()
  @IsString()
  phone?: string;
}

// employees/dto/update-employee.dto.ts
// For updates, all fields are optional (partial update)
import { PartialType } from '@nestjs/mapped-types';
import { CreateEmployeeDto } from './create-employee.dto';

export class UpdateEmployeeDto extends PartialType(CreateEmployeeDto) {}
// PartialType makes ALL fields optional — perfect for PATCH/PUT requests
```

### Prisma Service

```typescript
// prisma/prisma.service.ts
import { Injectable, OnModuleInit, OnModuleDestroy } from '@nestjs/common';
import { PrismaClient } from '@prisma/client';

@Injectable()
export class PrismaService extends PrismaClient implements OnModuleInit, OnModuleDestroy {
  async onModuleInit() {
    // Connect to database when the module initializes
    await this.$connect();
  }

  async onModuleDestroy() {
    // Disconnect when the application shuts down
    await this.$disconnect();
  }
}
```

### Dependency Injection Explained

```typescript
// Dependency Injection (DI) is when NestJS AUTOMATICALLY provides
// instances of classes that a class needs

// WITHOUT DI (manual — you have to create everything yourself):
class EmployeesController {
  private service: EmployeesService;
  
  constructor() {
    const prisma = new PrismaClient();   // You create this
    const prismaService = new PrismaService(prisma); // And this
    this.service = new EmployeesService(prismaService); // And this
  }
}

// WITH DI (NestJS handles it — just declare what you need):
@Controller('employees')
class EmployeesController {
  constructor(private readonly service: EmployeesService) {}
  // NestJS sees "I need EmployeesService"
  // It looks in the module's providers
  // It creates the instance (and its dependencies) automatically
  // It injects it into the constructor
}

// WHY DI is important:
// 1. Loose coupling — classes don't create their dependencies
// 2. Testable — you can inject mock services for testing
// 3. Manageable — NestJS handles the lifecycle of all services
```

---

## 10.4 NestJS Interview Questions

**Q1: What is NestJS and how is it different from Express?**

> **Answer:** NestJS is a progressive Node.js framework built with TypeScript that provides an opinionated architecture with modules, controllers, and services. Unlike Express (which is minimal and unopinionated), NestJS enforces a structured architecture with dependency injection, decorators, and a modular system. NestJS actually uses Express (or Fastify) under the hood but adds an architectural layer on top.

**Q2: What is Dependency Injection in NestJS?**

> **Answer:** Dependency Injection is a design pattern where a class receives its dependencies from external sources rather than creating them itself. In NestJS, you declare dependencies in the constructor, and NestJS's IoC (Inversion of Control) container automatically creates and provides instances. This makes code loosely coupled, testable, and maintainable.

**Q3: What are DTOs and why are they important?**

> **Answer:** DTOs (Data Transfer Objects) define the shape of data transferred between layers (e.g., from HTTP request to service). They serve as contracts for incoming data and enable validation using decorators like `@IsString()`, `@IsEmail()`. DTOs ensure that only valid, expected data reaches your business logic, preventing security vulnerabilities and bugs.

**Q4: Explain the role of Modules, Controllers, and Services in NestJS.**

> **Answer:**
> - **Modules** organize the application into feature boundaries. Each module encapsulates its controllers, services, and imports.
> - **Controllers** handle incoming HTTP requests (GET, POST, PUT, DELETE) and delegate business logic to services. They should be thin.
> - **Services** contain the business logic and database interactions. They are injectable and reusable across controllers and other services.

---

# SECTION 11: FULL STACK SYSTEM FLOW

## 11.1 Architecture Overview

```
┌─────────────────────────────────────────────────────────────────┐
│                         USER'S BROWSER                          │
│  ┌────────────────────────────────────────────────────────────┐ │
│  │                     REACT FRONTEND                         │ │
│  │  - Components (JSX)                                        │ │
│  │  - State Management (useState, useContext)                 │ │
│  │  - API Calls (fetch / axios)                               │ │
│  └──────────────────────┬─────────────────────────────────────┘ │
└─────────────────────────┼───────────────────────────────────────┘
                          │ HTTP Request (JSON)
                          ↓
┌─────────────────────────────────────────────────────────────────┐
│                      NESTJS BACKEND                             │
│  ┌─────────────┐    ┌─────────────┐    ┌──────────────┐        │
│  │ CONTROLLER  │───→│  SERVICE    │───→│   PRISMA     │        │
│  │ (Route      │    │ (Business   │    │   CLIENT     │        │
│  │  handling)  │    │  logic)     │    │ (ORM queries)│        │
│  └─────────────┘    └─────────────┘    └──────┬───────┘        │
└─────────────────────────────────────────────────┼───────────────┘
                                                  │ SQL Query
                                                  ↓
                                  ┌───────────────────────────────┐
                                  │       POSTGRESQL DATABASE     │
                                  │  - Tables                     │
                                  │  - Rows & Columns             │
                                  │  - Relationships              │
                                  └───────────────────────────────┘
```

---

## 11.2 Complete Request-Response Flow Example

### Scenario: User submits a "Create Employee" form

```
STEP 1: USER fills out the form in the browser
        Name: "Juan Dela Cruz"
        Email: "juan@company.com"
        Position: "Junior Developer"
        
STEP 2: REACT sends HTTP request
        POST /api/employees
        Body: { "name": "Juan", "email": "juan@company.com", ... }

STEP 3: NESTJS CONTROLLER receives the request
        @Post() create(@Body() dto: CreateEmployeeDto)
        → Validates the data using DTO
        → Calls the Service

STEP 4: NESTJS SERVICE processes the data
        → Applies business logic (hash password, check duplicates)
        → Calls Prisma to save to database

STEP 5: PRISMA translates to SQL
        INSERT INTO employees (name, email, position) VALUES ('Juan', ...)
        → Sends SQL to PostgreSQL

STEP 6: POSTGRESQL executes the query
        → Stores the data
        → Returns the new record with ID

STEP 7: Response flows BACK
        PostgreSQL → Prisma → Service → Controller → React
        
STEP 8: REACT receives the response
        → Updates state
        → Re-renders the UI
        → User sees "Employee created successfully!"
```

### Code for Each Step

**React (Frontend)**
```jsx
// React component — sends the request
const handleSubmit = async (e) => {
  e.preventDefault();
  try {
    const response = await fetch("http://localhost:3000/api/employees", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(formData),
    });
    
    if (!response.ok) throw new Error("Failed to create employee");
    
    const newEmployee = await response.json();
    setEmployees(prev => [...prev, newEmployee]);
    alert("Employee created successfully!");
  } catch (error) {
    alert(error.message);
  }
};
```

**NestJS Controller**
```typescript
@Post()
@HttpCode(HttpStatus.CREATED)
create(@Body() createEmployeeDto: CreateEmployeeDto) {
  return this.employeesService.create(createEmployeeDto);
}
```

**NestJS Service**
```typescript
async create(data: CreateEmployeeDto) {
  // Check for duplicate email
  const existing = await this.prisma.employee.findUnique({
    where: { email: data.email },
  });
  if (existing) {
    throw new ConflictException('Email already exists');
  }
  
  return this.prisma.employee.create({ data });
}
```

**Prisma → SQL**
```sql
-- Prisma generates this SQL:
INSERT INTO "employees" ("first_name", "last_name", "email", "position", "salary", "created_at")
VALUES ('Juan', 'Dela Cruz', 'juan@company.com', 'Junior Developer', 45000, NOW())
RETURNING *;
```

---

## 11.3 System Flow Interview Questions

**Q1: Explain how a user request flows from React to the database and back.**

> **Answer:** (1) The user interacts with the React UI (e.g., submits a form). (2) React sends an HTTP request (using fetch or axios) to the NestJS backend. (3) NestJS's Controller receives the request, validates the data using DTOs. (4) The Controller delegates to a Service, which contains the business logic. (5) The Service uses Prisma Client to query the PostgreSQL database. (6) PostgreSQL processes the SQL query and returns results. (7) The response flows back: PostgreSQL → Prisma → Service → Controller → HTTP Response → React. (8) React updates its state and re-renders the UI.

**Q2: Why separate the frontend and backend?**

> **Answer:** Separation provides: (1) **Independent scaling** — scale frontend and backend separately. (2) **Different teams** — frontend and backend developers can work independently. (3) **Multiple clients** — the same API can serve web, mobile, and other clients. (4) **Technology flexibility** — can replace React with another framework without changing the backend.

---

# SECTION 12: INTERNSHIP TECHNICAL INTERVIEW PREPARATION

## Top 100 Most Likely Interview Questions

### HTML (Questions 1-8)

1. **What is semantic HTML? Give 5 examples of semantic elements.**
   > `<header>`, `<nav>`, `<main>`, `<article>`, `<footer>`. They describe the meaning of content, not just its appearance.

2. **What is the difference between `<section>` and `<article>`?**
   > `<article>` is self-contained content (can stand alone). `<section>` is a thematic grouping of content.

3. **What does the `DOCTYPE` declaration do?**
   > It tells the browser which version of HTML the page is written in. `<!DOCTYPE html>` specifies HTML5.

4. **What is the difference between inline, block, and inline-block elements?**
   > Block: full width, new line. Inline: only needed width, same line. Inline-block: set width/height but stays inline.

5. **How do you improve web accessibility?**
   > Use semantic HTML, alt text on images, ARIA attributes, keyboard navigation, proper heading hierarchy, color contrast.

6. **What are meta tags? Name 3 important ones.**
   > Meta tags provide page metadata. Important ones: `charset` (encoding), `viewport` (responsive), `description` (SEO).

7. **What is the difference between `localStorage` and `sessionStorage`?**
   > `localStorage` persists until manually cleared. `sessionStorage` is cleared when the browser tab closes.

8. **Explain the purpose of the `<form>` `action` and `method` attributes.**
   > `action` = URL where form data is sent. `method` = HTTP method (GET or POST).

### CSS (Questions 9-18)

9. **Explain the CSS Box Model.**
   > Content → Padding → Border → Margin. Use `box-sizing: border-box` so width includes padding and border.

10. **What is CSS specificity? How is it calculated?**
    > Inline (1000) > ID (100) > Class (10) > Element (1). Higher specificity wins.

11. **What is the difference between Flexbox and CSS Grid?**
    > Flexbox = 1D (row OR column). Grid = 2D (rows AND columns simultaneously).

12. **Explain `position: relative` vs `position: absolute`.**
    > Relative: positioned relative to normal position, space preserved. Absolute: positioned relative to nearest positioned ancestor, removed from flow.

13. **How do you center a div horizontally and vertically?**
    > `display: flex; justify-content: center; align-items: center;` on the parent.

14. **What are CSS custom properties (variables)?**
    > Variables declared with `--name: value` in `:root` and used with `var(--name)`.

15. **What is a media query?**
    > CSS rule that applies styles based on device characteristics. `@media (min-width: 768px) { }`.

16. **What is `z-index` and when does it work?**
    > Controls stacking order. Only works on positioned elements (not `static`).

17. **Explain the difference between `em`, `rem`, `px`, `%`, and `vh/vw`.**
    > `px` = fixed. `em` = relative to parent font size. `rem` = relative to root font size. `%` = relative to parent. `vh/vw` = viewport.

18. **What are pseudo-classes and pseudo-elements?**
    > Pseudo-classes (`:hover`, `:focus`) target element states. Pseudo-elements (`::before`, `::after`) create virtual elements.

### JavaScript (Questions 19-35)

19. **What is the difference between `let`, `const`, and `var`?**
    > `var` = function-scoped, hoisted. `let` = block-scoped, reassignable. `const` = block-scoped, not reassignable.

20. **Explain `===` vs `==`.**
    > `===` strict (no type conversion). `==` loose (converts types). Always use `===`.

21. **What is hoisting?**
    > JS moves declarations to top of scope. `var` is hoisted with `undefined`, functions are fully hoisted, `let/const` have temporal dead zone.

22. **What is a closure?**
    > A function that remembers variables from its outer scope even after the outer function returns.

23. **Explain the difference between `null` and `undefined`.**
    > `undefined` = variable declared but not assigned. `null` = intentionally empty value.

24. **What are arrow functions and how do they differ from regular functions?**
    > Shorter syntax, no own `this` (inherits from parent), no `arguments` object, can't be used as constructors.

25. **What is the event loop?**
    > Mechanism that handles async operations. Call Stack → Web APIs → Task Queue → Event Loop checks stack → executes queue callbacks.

26. **Explain Promises and async/await.**
    > Promise = object representing future value (pending/fulfilled/rejected). async/await = cleaner syntax for handling Promises.

27. **What is the difference between `map`, `filter`, and `reduce`?**
    > `map` = transforms each element. `filter` = keeps elements that pass a test. `reduce` = combines all elements into one value.

28. **What is destructuring?**
    > Extracting values from arrays `[a, b] = [1, 2]` or objects `{name} = user` into variables.

29. **What is the spread operator?**
    > `...` spreads array/object elements. Used for copying, merging, and function arguments.

30. **Explain `this` in JavaScript.**
    > `this` refers to the object calling the method. In arrow functions, `this` is inherited from the parent scope.

31. **What is event delegation?**
    > Instead of adding listeners to every child, add ONE to the parent and use `event.target` to identify which child was clicked.

32. **What is the difference between synchronous and asynchronous code?**
    > Synchronous = executes line by line (blocking). Asynchronous = can start a task and continue without waiting (non-blocking).

33. **What is `JSON.stringify()` and `JSON.parse()`?**
    > `stringify()` converts JS object to JSON string. `parse()` converts JSON string to JS object.

34. **What is optional chaining (`?.`)?**
    > Safely access nested properties: `user?.address?.city` returns `undefined` instead of throwing an error.

35. **What are template literals?**
    > String with backticks allowing expressions: `` `Hello, ${name}!` ``.

### React (Questions 36-50)

36. **What is the Virtual DOM?**
    > Lightweight JS copy of real DOM. React compares new and old, updates only what changed.

37. **What is the difference between state and props?**
    > Props = external, read-only, from parent. State = internal, mutable, causes re-render.

38. **What is JSX?**
    > JavaScript XML — HTML-like syntax in JavaScript. Babel compiles it to `React.createElement()` calls.

39. **What are React hooks?**
    > Functions that let you use React features in function components: `useState`, `useEffect`, `useContext`, etc.

40. **Explain `useState`.**
    > Hook that creates reactive state. Returns `[value, setter]`. When state changes, component re-renders.

41. **Explain `useEffect`.**
    > Hook for side effects (API calls, timers). Runs after render. Dependency array controls when it re-runs.

42. **What is `useContext` and when would you use it?**
    > Hook for accessing Context values. Use when passing data through many component levels (avoiding prop drilling).

43. **Why are keys important in lists?**
    > Keys help React identify which items changed. Use unique IDs, not array indexes.

44. **What is conditional rendering?**
    > Rendering different UI based on conditions: ternary operator, `&&` short-circuit, or early returns.

45. **What is component lifecycle in React?**
    > Mount (first render) → Update (state/props change) → Unmount (removed from DOM). Managed by `useEffect`.

46. **What is lifting state up?**
    > Moving shared state to the nearest common parent component so multiple children can access it.

47. **What are controlled vs uncontrolled components?**
    > Controlled: React manages form value via state. Uncontrolled: DOM manages value via refs.

48. **How do you handle forms in React?**
    > Controlled components: `value={state}` + `onChange={handler}` for each input.

49. **What is React Router and why use it?**
    > Library for client-side routing. Enables navigation between pages without full page reload.

50. **How do you make API calls in React?**
    > Use `fetch` or `axios` inside `useEffect`, manage loading/error states.

### PHP (Questions 51-55)

51. **What is the difference between `==` and `===` in PHP?**
    > Same as JS: `==` loose (type coercion), `===` strict (type + value).

52. **What are PHP superglobals?**
    > Built-in variables: `$_GET`, `$_POST`, `$_SESSION`, `$_COOKIE`, `$_SERVER`, `$_FILES`.

53. **What is PDO and why use it?**
    > PHP Data Objects — database access abstraction. Prevents SQL injection with prepared statements.

54. **Explain the difference between `include` and `require` in PHP.**
    > Both include files. `require` throws fatal error if file not found; `include` throws warning but continues.

55. **What are PHP sessions?**
    > Server-side storage for user data across page requests. Started with `session_start()`.

### OOP (Questions 56-65)

56. **What are the 4 pillars of OOP?**
    > Encapsulation, Abstraction, Inheritance, Polymorphism.

57. **What is encapsulation?**
    > Bundling data + methods and controlling access with visibility modifiers (public/private/protected).

58. **What is the difference between a class and an object?**
    > Class = blueprint. Object = instance created from that blueprint.

59. **What is inheritance and why use it?**
    > Child class inherits parent's properties/methods. Promotes code reuse and hierarchy.

60. **What is polymorphism?**
    > Same method name, different behavior in different classes. Enables treating objects uniformly.

61. **What is abstraction?**
    > Hiding complex implementation, showing only essential interface. Like a car steering wheel hides the engine.

62. **What is the difference between abstract class and interface?**
    > Abstract: can have implemented methods + properties, single inheritance. Interface: only method signatures, multiple inheritance.

63. **What is a constructor?**
    > Special method that runs automatically when creating an object. Initializes properties.

64. **What is `this`/`$this` in OOP?**
    > References the current object instance.

65. **What are static methods?**
    > Methods that belong to the class, not instances. Called with `ClassName.method()`.

### MVC & MVVM (Questions 66-72)

66. **What is MVC?**
    > Model (data/logic), View (UI), Controller (handles requests, coordinates M and V).

67. **What does each part of MVC do?**
    > Model: data + business logic. View: presentation/UI. Controller: receives input, calls model, selects view.

68. **What is MVVM?**
    > Model (data), View (UI), ViewModel (state + logic bridge). Uses data binding.

69. **What is the difference between MVC and MVVM?**
    > MVC: Controller manually pushes data to View. MVVM: ViewModel auto-updates View through data binding.

70. **Why should the View not access the database directly?**
    > Violates separation of concerns, creates tight coupling, makes testing and maintenance harder.

71. **Can you have fat controllers? Is that good?**
    > Fat controllers have too much logic. Bad practice — logic should be in Models/Services.

72. **How does React relate to MVVM?**
    > View = JSX, ViewModel = hooks/state logic, Model = API services. React's re-rendering acts as data binding.

### PostgreSQL (Questions 73-80)

73. **What is a Primary Key?**
    > Unique identifier for each row. Must be unique and NOT NULL.

74. **What is a Foreign Key?**
    > Column referencing another table's primary key, creating a relationship.

75. **Explain INNER JOIN vs LEFT JOIN.**
    > INNER: only matching rows. LEFT: all left rows + matching right (NULL if no match).

76. **What is normalization?**
    > Organizing database to reduce redundancy. Split data into related tables.

77. **What is an index and why use it?**
    > Data structure that speeds up queries on specific columns. Trade-off: faster reads, slower writes.

78. **What is ACID in databases?**
    > Atomicity (all or nothing), Consistency (valid state), Isolation (concurrent safety), Durability (permanent).

79. **What is the difference between WHERE and HAVING?**
    > WHERE filters rows before grouping. HAVING filters groups after GROUP BY.

80. **PostgreSQL vs MySQL — when to use which?**
    > PostgreSQL: complex queries, JSON support, strict standards. MySQL: simpler apps, faster simple reads.

### Prisma (Questions 81-86)

81. **What is Prisma?**
    > Type-safe ORM for Node.js/TypeScript. Translates JavaScript to SQL queries.

82. **What is a Prisma schema?**
    > File defining database structure (models, relationships, enums). Used to generate client and migrations.

83. **What is a migration?**
    > Versioned change to database schema. Keeps database structure in sync with code.

84. **What is the difference between `findUnique` and `findFirst`?**
    > `findUnique`: searches by unique/ID fields only. `findFirst`: searches by any field, returns first match.

85. **How do you handle relationships in Prisma?**
    > Define relations in schema with `@relation`. Use `include` or `select` to load related data.

86. **What is `prisma migrate dev` vs `prisma db push`?**
    > `migrate dev`: creates migration files + applies changes (production-ready). `db push`: directly updates DB (prototyping only).

### NestJS (Questions 87-93)

87. **What is NestJS?**
    > Progressive Node.js framework with TypeScript, modules, DI, and structured architecture.

88. **What is Dependency Injection?**
    > Pattern where dependencies are provided externally rather than created internally. NestJS auto-injects.

89. **What is a DTO?**
    > Data Transfer Object — defines shape and validation rules for incoming data.

90. **Explain Modules, Controllers, Services.**
    > Modules organize features. Controllers handle HTTP requests. Services contain business logic.

91. **What are decorators in NestJS?**
    > Functions that add metadata: `@Controller()`, `@Get()`, `@Injectable()`, `@Body()`.

92. **What are Guards and Middleware?**
    > Guards: determine if request should proceed (auth). Middleware: functions that run before route handlers.

93. **How do you handle validation in NestJS?**
    > Use DTOs with class-validator decorators + ValidationPipe.

### APIs, Databases & General (Questions 94-100)

94. **What is REST API?**
    > Architectural style using HTTP methods (GET, POST, PUT, DELETE) to perform CRUD on resources.

95. **What are HTTP status codes? Name 5.**
    > 200 OK, 201 Created, 400 Bad Request, 404 Not Found, 500 Internal Server Error.

96. **What is CORS?**
    > Cross-Origin Resource Sharing — security mechanism that controls which domains can access your API.

97. **What is Git and why use it?**
    > Version control system. Tracks code changes, enables collaboration, provides history and backup.

98. **Explain `git pull`, `git push`, and `git merge`.**
    > `pull`: download + merge remote changes. `push`: upload local changes. `merge`: combine branches.

99. **What is the difference between SQL and NoSQL?**
    > SQL: structured tables with relationships (PostgreSQL). NoSQL: flexible documents/key-value (MongoDB).

100. **What is an API endpoint?**
     > A specific URL path that accepts requests. Example: `GET /api/users` is an endpoint that returns all users.

---

# SECTION 13: INTERNSHIP SURVIVAL GUIDE

## 13.1 What Interns Are Expected to Know

### Day 1 Expectations

You are **NOT** expected to:
- Know everything
- Write production code immediately
- Fix complex bugs alone
- Understand the entire codebase

You **ARE** expected to:
- Be **eager to learn**
- **Ask questions** (this is the #1 trait managers look for)
- Follow **coding standards** and conventions
- Complete tasks with **guidance**
- Communicate when you're **stuck** (don't spin for hours alone)
- Be **reliable** and meet deadlines (or communicate early if you can't)

### The 30-60-90 Rule

- **First 30 days:** Learn the codebase, tools, and processes. Ask lots of questions.
- **Days 30-60:** Start contributing small features and bug fixes with guidance.
- **Days 60-90:** Work more independently on features. Propose improvements.

---

## 13.2 Git Workflow

### Daily Git Workflow

```bash
# START OF DAY — Get latest changes
git checkout main              # Switch to main branch
git pull origin main           # Download latest code

# CREATE A FEATURE BRANCH
git checkout -b feature/add-employee-form
# Branch naming convention: feature/, bugfix/, hotfix/

# WHILE WORKING — Save your progress
git add .                      # Stage all changes
git commit -m "feat: add employee creation form"
# Commit message format: type: description
# Types: feat, fix, refactor, docs, style, test, chore

# PUSH YOUR BRANCH
git push origin feature/add-employee-form

# CREATE A PULL REQUEST on GitHub/GitLab
# → Request code review from a senior developer

# AFTER PR IS APPROVED AND MERGED
git checkout main
git pull origin main
git branch -d feature/add-employee-form  # Delete local branch
```

### Commit Message Convention

```
feat:     New feature
fix:      Bug fix
docs:     Documentation only
style:    Formatting, no code change
refactor: Code restructuring, no behavior change
test:     Adding tests
chore:    Build process, tooling changes

Examples:
git commit -m "feat: add login form validation"
git commit -m "fix: resolve null pointer in user profile"
git commit -m "docs: update README with setup instructions"
git commit -m "refactor: extract email validation to utility"
```

---

## 13.3 Pull Requests and Code Reviews

### Writing a Good PR

```markdown
## Description
Added employee creation form with validation.

## Changes
- Created EmployeeForm component
- Added form validation using react-hook-form
- Connected to /api/employees endpoint
- Added success/error toast notifications

## How to Test
1. Navigate to /employees
2. Click "Add Employee"
3. Fill in the form and submit
4. Verify employee appears in the list

## Screenshots
[Attach screenshots of the UI changes]
```

### Receiving Code Review Feedback

- **Don't take it personally** — reviews improve code quality
- **Reply to every comment** — even if it's just "Fixed!"
- **Ask for clarification** if you don't understand the feedback
- **Learn from it** — reviews are your fastest learning opportunity

---

## 13.4 Agile and Scrum

### What is Agile?

Agile is a software development methodology that emphasizes:
- **Iterative development** — Build in small increments
- **Frequent feedback** — Show work regularly
- **Adaptability** — Plans can change
- **Collaboration** — Team works together closely

### Scrum Basics

```
SPRINT (usually 2 weeks)
├── Sprint Planning (start of sprint)
│   └── Team decides what to build this sprint
├── Daily Standup (every day, 15 min)
│   └── Each person answers:
│       1. What did I do yesterday?
│       2. What will I do today?
│       3. Any blockers?
├── Development (during sprint)
│   └── Build features, fix bugs
├── Sprint Review (end of sprint)
│   └── Demo what was built to stakeholders
└── Sprint Retrospective (end of sprint)
    └── What went well? What to improve?
```

### Key Terms

| Term          | Definition                                                |
|---------------|-----------------------------------------------------------|
| Sprint        | A fixed time period (usually 2 weeks) to complete work    |
| User Story    | Feature described from user's perspective                 |
| Backlog       | Prioritized list of all features/bugs to build            |
| Standup       | Daily 15-min meeting to sync the team                     |
| Blocker       | Something preventing you from completing your task        |
| Kanban Board  | Visual board with columns: To Do → In Progress → Done     |

---

## 13.5 Debugging Tips

### The Systematic Approach

```
1. REPRODUCE — Can you make the bug happen consistently?
2. ISOLATE   — Narrow down WHERE the bug is
3. IDENTIFY  — Find the ROOT CAUSE (not just the symptom)
4. FIX       — Make the smallest possible change
5. TEST      — Verify the fix works and didn't break anything
```

### Debugging Tools

```javascript
// 1. console.log — Your best friend (but clean up before committing!)
console.log("User data:", userData);
console.log("API response:", response);

// 2. console.table — For arrays and objects
console.table(users);

// 3. Browser DevTools
// - Elements tab: inspect HTML/CSS
// - Console tab: run JavaScript, see errors
// - Network tab: see API requests/responses
// - Sources tab: set breakpoints

// 4. debugger statement — Pauses execution in DevTools
function processData(data) {
  debugger; // Code pauses here — inspect variables in DevTools
  return data.map(item => item.name);
}
```

---

## 13.6 Documentation

### Why Documentation Matters

- Future you (or your team) will thank you
- Reduces onboarding time for new developers
- Shows professionalism
- Required at most companies

### How to Write Good Comments

```javascript
// ❌ BAD COMMENTS — State the obvious
let x = 5; // Set x to 5
users.push(user); // Push user to array

// ✅ GOOD COMMENTS — Explain WHY, not WHAT
// We limit to 50 results to prevent memory issues with large datasets
const users = await prisma.user.findMany({ take: 50 });

// Using a Set for O(1) lookup performance instead of Array.includes() O(n)
const processedIds = new Set();

// Retry up to 3 times because the payment API occasionally returns 503
const MAX_RETRIES = 3;
```

---

# SECTION 14: 14-DAY STUDY PLAN

## 📅 Two Hours Per Day — Become Internship Ready

### WEEK 1: Foundations (Days 1-7)

---

#### Day 1: JavaScript Fundamentals
**Topics (60 min):**
- Variables (let, const, var)
- Data types and type coercion
- Operators and comparisons (=== vs ==)
- Functions (declaration, expression, arrow)

**Practice (60 min):**
- Write 5 functions using different syntax
- Solve FizzBuzz
- Create a function that reverses a string
- Write answers to JS interview questions Q19-22

---

#### Day 2: JavaScript Arrays & Objects
**Topics (60 min):**
- Array methods: map, filter, reduce, forEach
- Object creation, destructuring, spread
- Template literals
- Optional chaining

**Practice (60 min):**
- Build a simple student grade calculator using reduce
- Create an array of objects, filter and map them
- Solve 3 array coding challenges from Section 3

---

#### Day 3: JavaScript Async & DOM
**Topics (60 min):**
- Promises, async/await, try/catch
- Fetch API (GET and POST)
- DOM manipulation basics
- Event listeners

**Practice (60 min):**
- Fetch data from JSONPlaceholder API
- Build a simple to-do list using only vanilla JS
- Practice explaining the event loop (record yourself)

---

#### Day 4: OOP Concepts
**Topics (60 min):**
- Classes and objects
- Constructors and `this`
- Encapsulation (public/private)
- Inheritance (extends, super)

**Practice (60 min):**
- Create a class hierarchy: Animal → Dog, Cat
- Build a BankAccount class with encapsulation
- Write answers to OOP interview questions Q56-65

---

#### Day 5: OOP + MVC
**Topics (60 min):**
- Polymorphism (override methods)
- Abstraction
- MVC pattern explained
- MVC flow: Controller → Model → View

**Practice (60 min):**
- Create a Shape hierarchy with polymorphism
- Map a PHP project to MVC structure on paper
- Answer MVC interview questions Q66-72

---

#### Day 6: React Fundamentals
**Topics (60 min):**
- Components and JSX
- Props (passing data)
- State (useState)
- Event handling

**Practice (60 min):**
- Build a counter component
- Build a user card component with props
- Create a form with controlled inputs
- Start the TodoList exercise from Section 7

---

#### Day 7: React + PostgreSQL Intro
**Topics (45 min React):**
- useEffect (API calls, dependencies)
- Conditional rendering
- List rendering with keys

**Topics (45 min PostgreSQL):**
- What PostgreSQL is
- Tables, rows, columns, primary keys, foreign keys
- Basic SQL: SELECT, INSERT, UPDATE, DELETE

**Practice (30 min):**
- Write 10 SQL queries from Section 8
- Review all Week 1 interview questions

---

### WEEK 2: Advanced Topics (Days 8-14)

---

#### Day 8: PostgreSQL Deep Dive
**Topics (60 min):**
- JOINs (INNER, LEFT, RIGHT)
- Aggregate functions (COUNT, AVG, SUM)
- GROUP BY and HAVING
- Indexes and constraints

**Practice (60 min):**
- Build the Employee Management Database from Section 8.6
- Write all 5 useful queries
- Answer PostgreSQL interview questions Q73-80

---

#### Day 9: Prisma Basics
**Topics (60 min):**
- What is an ORM?
- Prisma schema (models, relations, types)
- Setup and installation
- Migrations

**Practice (60 min):**
- Set up a Prisma project connected to PostgreSQL
- Define a schema with User, Post, Category models
- Run your first migration
- Perform CRUD operations in a script

---

#### Day 10: NestJS Basics
**Topics (60 min):**
- What NestJS is and why use it
- Modules, Controllers, Services
- Dependency Injection
- Decorators (@Controller, @Get, @Post)

**Practice (60 min):**
- Create a NestJS project: `npx @nestjs/cli new my-app`
- Create a simple "Hello World" controller
- Create an employees module with controller + service
- Test with Postman or curl

---

#### Day 11: NestJS + Prisma Integration
**Topics (60 min):**
- Connect Prisma to NestJS
- DTOs and validation
- Complete CRUD endpoints

**Practice (60 min):**
- Add Prisma to your NestJS project
- Create full CRUD for Employee entity
- Test all endpoints
- Answer NestJS interview questions Q87-93

---

#### Day 12: MVVM + Full Stack Flow
**Topics (60 min):**
- MVVM pattern
- MVC vs MVVM comparison
- Full stack flow (React → NestJS → Prisma → PostgreSQL)
- API integration

**Practice (60 min):**
- Build a React frontend that connects to your NestJS API
- Implement the MVVM pattern with a custom hook
- Draw the full system architecture from memory

---

#### Day 13: Interview Preparation
**Topics (60 min):**
- Review all 100 interview questions from Section 12
- Focus on your weakest areas
- Practice explaining technical concepts out loud

**Practice (60 min):**
- Do a mock interview (have a friend ask you questions)
- Write code solutions on paper (no IDE)
- Practice the STAR method for behavioral questions
  - **S**ituation: Set the scene
  - **T**ask: Describe your responsibility
  - **A**ction: Explain what you did
  - **R**esult: Share the outcome

---

#### Day 14: Final Review & Confidence Building
**Topics (60 min):**
- Take the Final Readiness Assessment (below)
- Review any sections where you scored low
- Read the Internship Survival Guide (Section 13)

**Practice (60 min):**
- Build a mini CRUD app from scratch in 60 minutes
  - React frontend + API calls
  - Review your code for best practices
- Prepare questions to ask YOUR interviewer:
  - "What does a typical day look like for an intern?"
  - "What technologies will I be working with?"
  - "How is code reviewed on the team?"
  - "What's the team's development process?"

---

# FINAL INTERNSHIP READINESS ASSESSMENT

## Part 1: Concept Questions (Answer Out Loud)

1. Explain the difference between `let`, `const`, and `var`.
2. What is a closure? Give an example.
3. Name and explain the 4 pillars of OOP.
4. What is the difference between MVC and MVVM?
5. Explain how a request flows from React to PostgreSQL and back.
6. What is Prisma and why use it?
7. What is Dependency Injection in NestJS?
8. What is the Virtual DOM in React?
9. Explain the difference between INNER JOIN and LEFT JOIN.
10. What is a DTO and why are DTOs important?

**Scoring:** Can you explain each clearly in under 2 minutes? If yes, you're ready.

---

## Part 2: Code Challenges

### Challenge 1: JavaScript (10 minutes)

Write a function `groupBy(array, key)` that groups array objects by a given key.

```javascript
// Input:
const people = [
  { name: "Juan", department: "Engineering" },
  { name: "Maria", department: "Design" },
  { name: "Pedro", department: "Engineering" },
  { name: "Ana", department: "Design" },
];

// Expected output of groupBy(people, "department"):
// {
//   Engineering: [{ name: "Juan", ... }, { name: "Pedro", ... }],
//   Design: [{ name: "Maria", ... }, { name: "Ana", ... }],
// }
```

**Solution:**
```javascript
function groupBy(array, key) {
  return array.reduce((result, item) => {
    const group = item[key];
    if (!result[group]) {
      result[group] = [];
    }
    result[group].push(item);
    return result;
  }, {});
}
```

---

### Challenge 2: React (15 minutes)

Build a SearchableList component that:
- Accepts an array of items as props
- Has a search input
- Filters the list in real-time as the user types
- Shows "No results found" when the filter returns empty

**Solution:**
```jsx
import { useState } from "react";

function SearchableList({ items }) {
  const [search, setSearch] = useState("");
  
  const filtered = items.filter(item =>
    item.toLowerCase().includes(search.toLowerCase())
  );
  
  return (
    <div>
      <input
        type="search"
        placeholder="Search..."
        value={search}
        onChange={(e) => setSearch(e.target.value)}
      />
      {filtered.length === 0 ? (
        <p>No results found</p>
      ) : (
        <ul>
          {filtered.map((item, i) => (
            <li key={i}>{item}</li>
          ))}
        </ul>
      )}
    </div>
  );
}
```

---

### Challenge 3: SQL (10 minutes)

Write SQL queries to:
1. Get all employees in the "Engineering" department
2. Get the average salary per department
3. Find employees earning above the company average

**Solution:**
```sql
-- 1. Employees in Engineering
SELECT e.* FROM employees e
JOIN departments d ON e.department_id = d.id
WHERE d.name = 'Engineering';

-- 2. Average salary per department
SELECT d.name, ROUND(AVG(e.salary), 2) AS avg_salary
FROM departments d
LEFT JOIN employees e ON d.id = e.department_id
GROUP BY d.id, d.name;

-- 3. Employees earning above company average
SELECT * FROM employees
WHERE salary > (SELECT AVG(salary) FROM employees);
```

---

### Challenge 4: OOP (10 minutes)

Create a `TaskManager` class with:
- Private array of tasks
- Methods: addTask, removeTask, getTasksByStatus, getCompletedCount
- Each task has: id, title, status (todo/in-progress/done)

**Solution:**
```javascript
class TaskManager {
  #tasks = [];
  #nextId = 1;
  
  addTask(title) {
    const task = {
      id: this.#nextId++,
      title,
      status: "todo",
    };
    this.#tasks.push(task);
    return task;
  }
  
  removeTask(id) {
    this.#tasks = this.#tasks.filter(t => t.id !== id);
  }
  
  updateStatus(id, status) {
    const task = this.#tasks.find(t => t.id === id);
    if (task) task.status = status;
  }
  
  getTasksByStatus(status) {
    return this.#tasks.filter(t => t.status === status);
  }
  
  getCompletedCount() {
    return this.#tasks.filter(t => t.status === "done").length;
  }
}
```

---

### Challenge 5: NestJS + Prisma (Conceptual — 10 minutes)

Describe the files you would create and the steps to add a new "Projects" feature to a NestJS app with Prisma. Include the Prisma schema, module, controller, service, and DTOs.

**Expected Answer:**

1. **Prisma Schema** — Add `model Project { id, name, description, status, startDate, endDate, createdAt, updatedAt }`
2. **Run migration** — `npx prisma migrate dev --name add-projects`
3. **Create module** — `projects.module.ts` (imports PrismaModule)
4. **Create DTO** — `create-project.dto.ts` with validation decorators
5. **Create service** — `projects.service.ts` with CRUD methods using PrismaService
6. **Create controller** — `projects.controller.ts` with @Get, @Post, @Put, @Delete endpoints
7. **Register module** — Import ProjectsModule in AppModule

---

## Final Score Guide

| Score        | Level                | Action                                      |
|--------------|----------------------|---------------------------------------------|
| 0-3 correct  | Needs more study    | Focus on Sections 3, 4, and 7 for one more week |
| 4-6 correct  | Almost ready        | Review weak areas, practice explaining concepts |
| 7-8 correct  | Internship ready    | You can confidently walk into your interview |
| 9-10 correct | Exceeds expectations| You'll impress your interviewers!           |

---

## 🎯 Final Words of Encouragement

Remember:
- **Nobody expects you to know everything.** They want to see that you can LEARN.
- **Ask questions.** The best interns ask thoughtful questions.
- **Show enthusiasm.** Companies hire for attitude and train for skill.
- **It's okay to say "I don't know."** Follow it with "but here's how I'd figure it out."
- **You've already learned a lot.** HTML, CSS, JavaScript, PHP, MySQL, Firebase, React — that's a STRONG foundation.
- **This is just the beginning.** Your internship will teach you more in 3 months than you learn in a year of solo study.

**You've got this. Go build something amazing! 🚀**
