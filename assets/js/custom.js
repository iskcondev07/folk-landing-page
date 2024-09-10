function ischeckNumber(event) {
    // Get the input element
    const input = event.target;

    // Use a regular expression to match only numbers
    const numberPattern = /^[0-9]*$/;

    // If the input value doesn't match the pattern, remove the non-numeric characters
    if (!numberPattern.test(input.value)) {
        input.value = input.value.replace(/[^0-9]/g, '');
    }
}
function isAlphanumeric(event) {
    const input = event.target;
    const alphanumericPattern = /^[a-zA-Z0-9 ,\-]*$/;
    if (!alphanumericPattern.test(input.value)) {
        input.value = input.value.replace(/[^a-zA-Z0-9 ,\-]/g, '');
    }
}
document.addEventListener('DOMContentLoaded', function () {
    const inputFields = document.getElementsByClassName('num');

    // Attach event listeners to each input element
    Array.from(inputFields).forEach(inputField => {
        inputField.addEventListener('input', ischeckNumber);
        inputField.addEventListener('paste', function (event) {
            // Wait for the paste event to complete
            setTimeout(() => ischeckNumber(event), 0);
        });
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const inputFields = document.getElementsByClassName('checkalpha');

    // Attach event listeners to each input element
    Array.from(inputFields).forEach(inputField => {
        inputField.addEventListener('input', isAlphanumeric);
        inputField.addEventListener('paste', function (event) {
            // Wait for the paste event to complete
            setTimeout(() => isAlphanumeric(event), 0);
        });
    });
});

function checkChar(event) {
    const input = event.target;
    const alphaPattern = /^[a-zA-Z ]*$/;
    if (!alphaPattern.test(input.value)) {
        input.value = input.value.replace(/[^a-zA-Z ]/g, '');
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const alphaInputs = document.getElementsByClassName('checkchar');

    for (let input of alphaInputs) {
        input.addEventListener('input', checkChar);
        input.addEventListener('paste', function (event) {
            // Wait for the paste event to complete
            setTimeout(() => checkChar(event), 0);
        });
    }
});
document.getElementById('donorEmailId').addEventListener('input', function (e) {
    this.value = this.value.replace(/\s/g, '');
});

document.getElementById('donorEmailId').addEventListener('paste', function (e) {
    let paste = (e.clipboardData || window.clipboardData).getData('text');
    this.value = paste.replace(/\s/g, '');
    e.preventDefault();
});

document.addEventListener('DOMContentLoaded', function () {
    const elements = document.querySelectorAll('.max-length-number');

    elements.forEach(function (element) {
        // Limit input length on keydown
        element.addEventListener('keydown', function (event) {
            limitInputLength(this, parseInt(this.getAttribute('maxlength')));
        });

        // Limit input length on input (handles typing, pasting, etc.)
        element.addEventListener('input', function () {
            enforceMaxLength(this, parseInt(this.getAttribute('maxlength')));
        });

        // Limit input length on paste
        element.addEventListener('paste', function () {
            setTimeout(() => enforceMaxLength(this, parseInt(this.getAttribute('maxlength'))), 0);
        });
    });

    function limitInputLength(element, maxLength) {
        const specialKeys = [8, 9, 37, 38, 39, 40, 46]; // Backspace, Tab, Arrows, Delete
        const keyCode = event.keyCode;

        if (specialKeys.indexOf(keyCode) !== -1) {
            return; // Allow special keys
        }

        // Prevent further input if the length exceeds maxLength
        if (element.value.length >= maxLength) {
            event.preventDefault();
        }
    }

    function enforceMaxLength(element, maxLength) {
        if (element.value.length > maxLength) {
            element.value = element.value.slice(0, maxLength);
        }
    }
});