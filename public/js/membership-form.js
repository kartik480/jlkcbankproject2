(function () {
    'use strict';

    var input = document.querySelector('.mf-photo-box input[name="applicant_photo_signature"]');
    var preview = document.getElementById('mf-applicant-photo-preview');
    if (!input || !preview) {
        return;
    }

    var lastBlobUrl = null;

    function clearPreview() {
        if (lastBlobUrl) {
            URL.revokeObjectURL(lastBlobUrl);
            lastBlobUrl = null;
        }
        preview.removeAttribute('src');
        preview.setAttribute('hidden', '');
        preview.alt = '';
    }

    input.addEventListener('change', function () {
        var file = input.files && input.files[0];
        if (!file || !/^image\//.test(file.type)) {
            clearPreview();
            return;
        }
        clearPreview();
        lastBlobUrl = URL.createObjectURL(file);
        preview.src = lastBlobUrl;
        preview.alt = 'Selected applicant photo preview';
        preview.removeAttribute('hidden');
    });
})();
