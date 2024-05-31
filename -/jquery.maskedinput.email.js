document.getElementById('feedbackForm').onsubmit = function(event) {
    event.preventDefault(); // Отключить переход на другую страницу

    let email = document.getElementById('email').value;
    let comment = document.getElementById('comment').value;

    if (email.trim() === '' || comment.trim() === '') {
        console.log('Please fill in all the required fields');
        return false;
    }

    // Проверка на корректность имейла
    if (!/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(email) && !/^\d{10}$/.test(email)) {
        console.log('Please enter a valid email address');
        alert('Please fill in all required fields correctly.'); // Сообщение, что данные введены некорректно от Bootstrap Modal Dialog
        return false;
    }

    console.log('Email: ' + email);
    console.log('Comment: ' + comment);

    //  Сообщение, что данные введены корректно от Bootstrap Modal Dialog
    alert('Form submitted successfully!');

    return false;
};
