window.onload = pageReady;

function pageReady() {
    let btnRadio1 = document.getElementById('btnradio1');
    let btnRadio2 = document.getElementById('btnradio2');
    let radioButtons = document.getElementsByName('btnradio');

    radioButtons.forEach((button) => {
        button.addEventListener('change', () => {
            if (button.id === 'btnradio1') {
                tableView.style.display = 'block';
                cardView.style.display = 'none';
            } else if (button.id === 'btnradio2') {
                tableView.style.display = 'none';
                cardView.style.display = 'block';
            }
            console.log(button.id);
        });
    });
}

