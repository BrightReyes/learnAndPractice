// Company Task Tracker - v1.0
// Developer: [Former Intern]
// Status: Needs debugging!

// Bug: getting the value on page load, so it's always empty when used later
const taskInputValue = document.getElementById('taskInput');

// Bug: Looking for 'add-btn' instead of 'addBtn'
const addBtn = document.getElementById('addBtn');
const taskList = document.getElementById('taskList');

// Bug: Error in attaching event listener (addBtn is null because of previous bug)
addBtn.addEventListener('click', function () {
    if (taskInputValue.value == '') {
        alert('Please enter a task!');
        return;
    }

    const li = document.createElement('li');
    li.innerHTML = `
        <span class="task-text">${taskInputValue.value}</span>
        <button class="delete-btn">Delete</button>
    `;

    taskList.appendChild(li);

    // Bug: Not clearing the input field after adding a task
    document.getElementById('taskInput').value = '';
});

// Bug: Event delegation missing. This only attaches to existing delete buttons on load!
// Fix: We listen for clicks on the entire list container
taskList.addEventListener('click', function (event) {

    // Check if the user clicked on a delete button
    if (event.target.classList.contains('delete-btn')) {
        // Remove the parent <li> of the clicked button
        event.target.parentElement.remove();
    }
    // Otherwise, check if they clicked on the task text or the <li> itself
    else if (event.target.tagName === 'LI' || event.target.classList.contains('task-text')) {
        // Find the closest <li> and toggle the 'completed' class
        event.target.closest('li').classList.toggle('completed');
    }

});

