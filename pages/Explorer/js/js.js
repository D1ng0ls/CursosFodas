function hidden_ul() {
    if (document.getElementById('hidden').checked) {
        document.getElementById('text').style.display = 'block';
    } else {
        document.getElementById('text').style.display = 'none';
    }
}