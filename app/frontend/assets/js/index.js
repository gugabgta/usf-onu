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
    modal.hide()
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
    let div = document.createElement('div');
    div.innerHTML = htmlString.trim();
    return div.firstChild;
}

async function showFish(id) {
    await load(500)
    const response = await fetch('fish_attributes.php/?id='+id)
    const component = createElementFromHtml(await response.text())
    document.body.appendChild(component)
    const el = document.querySelector('.modal')
    const modal = new bootstrap.Modal(el)
    modal.show()
}

async function deleteFish(id) {
    await load(1000)
    await fetch('delete_fish.php/?id='+id)
    location.href="index.php";
}

//destroy modal after hiding it
document.addEventListener("hide.bs.modal", (e) => {
    document.querySelector('.modal').remove()
})
