function addFormListener() {
    let form = document.getElementById('form')
    form.addEventListener('submit', e => {
        e.preventDefault()
        validateForm()
    })
}

function validateForm() {
    
}

addFormListener()