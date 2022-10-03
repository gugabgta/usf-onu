document.addEventListener("DOMContentLoaded", async () => {

});

async function load(waiting = 100) {
    const response = await fetch('ajax/load.php')
    const component = createElementFromHtml(await response.text())
    document.body.appendChild(component)
    const el = document.querySelector('.modal')
    const modal = new bootstrap.Modal(el)
    modal.show()
    await new Promise(r => setTimeout(r, waiting));
    document.querySelector('.modal').remove()
}

async function modal() {
    await load()
    const response = await fetch('ajax/modal.php')
    const component = createElementFromHtml(await response.text())
    document.body.appendChild(component)
    const el = document.querySelector('.modal')
    const modal = new bootstrap.Modal(el)
    modal.show()
}

function createElementFromHtml(htmlString) {
    var div = document.createElement('div');
    div.innerHTML = htmlString.trim();
    return div.firstChild;
}

function showFish

//destroy modal after hiding it
document.addEventListener("hide.bs.modal", (e) => {
    document.querySelector('.modal').remove()
})
