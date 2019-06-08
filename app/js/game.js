function setEventListeners() {
    let squares = document.querySelectorAll('.grid-square');
    console.log(squares)
    squares.forEach(square => {
        square.addEventListener('click', e => {
            squareIsClicked(e)
        })
    })
}

function squareIsClicked(event) {
    console.log(event.target)
}

setEventListeners()