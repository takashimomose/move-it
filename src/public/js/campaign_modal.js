document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('modal-overlay');

    if (modal) {
        modal.style.display = 'flex';
    }

    const closeModal = document.getElementById('close-modal');

    if (closeModal) {
        closeModal.addEventListener('click', function () {
            modal.style.display = 'none';
        });
    }
});
