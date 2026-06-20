# JIRA TICKET: PROJ-1024
**Title:** Fix bugs in the new Company Task Tracker app
**Assignee:** Junior Developer (You)
**Reporter:** Senior Engineer

## Description
We had an intern working on a simple "Task Tracker" application. They finished the initial UI and added some JavaScript logic, but they left abruptly and told us the app "doesn't quite work yet."

We need you to debug and fix this codebase so it can be deployed to production.

## Expected Behavior
1. Users should be able to type a task into the input field and click "Add Task" to append it to the list.
2. Clicking "Add Task" should actually read the *current* text in the input box, not be empty.
3. After adding a task, the input box should be cleared automatically.
4. Users should be able to mark any task (including newly added ones) as completed by clicking on it. Completed tasks should have a "strikethrough" (line-through) style, not an underline.
5. Users should be able to delete any task (including newly added ones) by clicking the "Delete" button.

## Current Symptoms (Reported by QA)
- The "Add Task" button does literally nothing when clicked. Looking at the console, there might be an error on page load.
- If we manually bypass the error, the newly added tasks always have empty text!
- Newly added tasks cannot be deleted or marked as completed. Only the default "Onboard new employee" task responds to clicks.
- Completed tasks are just underlined, which is confusing.

## Instructions
1. Open the files in this folder (`index.html`, `style.css`, `script.js`).
2. Read through the symptoms above.
3. Open `index.html` in your browser and use the Developer Tools (F12) Console to find Javascript errors.
4. Fix the HTML, CSS, and JS files until all "Expected Behaviors" are met.

Good luck!
