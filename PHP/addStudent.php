<head><?php   include "../includes/head.php"   ?></head>
<div class="small-container container">
    <h3 class="my-3">Create New Account for Student</h3>
    <form id="signupForm" method="POST" action="">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="signupName" name="name" required placeholder="Enter Name">
            <span id="nameErrorMessage" class="error-message"></span>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="signupEmail" name="email" required placeholder="Enter email">
            <span id="emailErrorMessage" class="error-message"></span>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="signupPassword" name="password" required
                placeholder="Enter Password">
            <span id="passwordErrorMessage" class="error-message"></span>
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="signupConfirmPassword" required
                placeholder="Confirm Password">
            <span id="confirmPasswordErrorMessage" class="error-message"></span>
        </div>
        <div class="mb-3">
      <label for="newProductImage" class="form-label">Image</label>
      <input type="file" class="form-control" id="newProductImage" accept="image/png, image/gif, image/jpeg" name="image" required >
    </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div>
<script>
    const form = document.getElementById('signupForm');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const nameInput = document.getElementById('signupName');
        const emailInput = document.getElementById('signupEmail');
        const passwordInput = document.getElementById('signupPassword');
        const confirmPasswordInput = document.getElementById('signupConfirmPassword');

        const nameRegex = /^[A-Za-z ]+$/;
        const emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
        const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

        let isValid = true;

        // Validate name field
        if (!nameRegex.test(nameInput.value)) {
            document.getElementById('nameErrorMessage').textContent = 'Name must contain only alphabetical characters.';
            isValid = false;
        } else {
            document.getElementById('nameErrorMessage').textContent = '';
        }

        // Validate email field
        if (!emailRegex.test(emailInput.value)) {
            document.getElementById('emailErrorMessage').textContent = 'Invalid email address.';
            isValid = false;
        } else {
            document.getElementById('emailErrorMessage').textContent = '';
        }

        // Validate password field
        if (!passwordRegex.test(passwordInput.value)) {
            document.getElementById('passwordErrorMessage').textContent = 'Password must be at least 8 characters long and contain at least one letter and one digit.';
            isValid = false;
        } else {
            document.getElementById('passwordErrorMessage').textContent = '';
        }

        // Validate confirm password field
        if (passwordInput.value !== confirmPasswordInput.value) {
            document.getElementById('confirmPasswordErrorMessage').textContent = 'Passwords do not match.';
            isValid = false;
        } else {
            document.getElementById('confirmPasswordErrorMessage').textContent = '';
        }

        // Submit the form if all fields are valid
        if (isValid) {
            form.submit();
        }
    });

    // Add event listener to submit button
    const submitButton = form.querySelector('button[type="submit"]');
    submitButton.addEventListener('click', function (event) {
        form.dispatchEvent(new Event('submit'));
    });


</script>