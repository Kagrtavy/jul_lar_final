function showMap(address) {
    const mapUrl = `https://www.google.com/maps?q=${address}&output=embed`;
    document.getElementById('mapIframe').src = mapUrl; // Установлюємо адресу в iframe
    $('#mapModal').modal('show'); // Відкриваємо модальне вікно
}