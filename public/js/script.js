let count = 0

function plus () {
    document.getElementById('plus').eventListener('click', function() {
        count++
        document.getElementById('count').textContent(count)
    })
}