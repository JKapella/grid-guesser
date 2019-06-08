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
    let distanceToWinner = event.target.dataset.dist
    event.target.textContent = distanceToWinner
}

setEventListeners()