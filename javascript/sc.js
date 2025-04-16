const form = document.getElementById('forgotForm');
const emailInput = document.getElementById('email');
const message = document.getElementById('message');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    const email = emailInput.value;

    // Here, you'd typically send an email with a reset link to the user's email address.
    // You can use a library like PHPMailer to send emails.

    // For demonstration purposes, we'll simply display a success message:
    message.textContent = 'A reset link has been sent to your email address.';
    message.style.color = 'green';

    // Clear the form
    emailInput.value = '';
});