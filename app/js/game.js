function setEventListeners() {
    let squares = document.querySelectorAll('.grid-square');
    squares.forEach(square => {
        square.addEventListener('click', e => {
            squareIsClicked(e)
        })
    })
}

function incrementGuessCounter() {
    let counter = document.getElementById('guess-counter')
    let guesses = counter.dataset.guess
    guesses++
    counter.dataset.guess = guesses
    counter.textContent = 'Guesses so far: ' + guesses
}

function squareIsClicked(event) {
    var square = event.target
    let distanceToWinner = square.dataset.dist
    event.target.textContent = distanceToWinner
    if (distanceToWinner == 0) {
        winGame(square)
    } else {
        setSquareAsCompleted(square)
        incrementGuessCounter(square)
    }
}

function setSquareAsCompleted(square) {
    let oldElement = square
    let newElement = square.cloneNode(true)
    newElement.classList.add('grid-square-clicked')
    newElement.classList.remove('grid-square-unclicked')
    oldElement.parentNode.replaceChild(newElement, oldElement)
}

function winGame(square) {
    square.classList.add('grid-square-winner');
    square.classList.remove('grid-square-unclicked');
    window.addEventListener('click', function (event) {
        event.stopPropagation()
    }, true)
    document.getElementById('win-banner').style.display = 'block'
}

setEventListeners()