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
    let distanceToWinner = event.target.dataset.dist
    event.target.textContent = distanceToWinner
    if (distanceToWinner == 0) {
        window.addEventListener('click', function (event) {
            event.stopPropagation();
        }, true);
    } else {
        incrementGuessCounter()
        let oldElement = event.target;
        let newElement = event.target.cloneNode(true);
        oldElement.parentNode.replaceChild(newElement, oldElement);
    }
}

setEventListeners()