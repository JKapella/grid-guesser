function addFormListener() {
    let form = document.getElementById('form')
    form.addEventListener('submit', e => {
        e.preventDefault()
        validateForm()
    })
}

function validateForm() {
    let height = document.getElementById('height').value
    let width = document.getElementById('width').value
    if (width < 2 || width > 50 ||
        height < 2 || height > 50 ||
        isNaN(width) || isNaN(height)) {
        let errorField = document.getElementById('errorField')
        errorField.textContent = 'Width and Height must be numbers between 2 and 50!'
    } else {
        document.getElementById('form').submit()
    }
}

addFormListener()