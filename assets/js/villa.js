var description = document.getElementById('description');
var readMoreBtn = document.getElementById('readMoreBtn');
var isExpanded = false;

readMoreBtn.addEventListener('click', function() {
    if (isExpanded) {
        description.classList.add('truncated-description');
        readMoreBtn.textContent = 'Lees meer';
    } else {
        description.classList.remove('truncated-description');
        readMoreBtn.textContent = 'Lees minder';
    }

    isExpanded = !isExpanded;
});