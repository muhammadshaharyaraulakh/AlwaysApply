document.addEventListener('DOMContentLoaded', () => {
    const getCsrfToken = () => document.querySelector('meta[name="csrf-token"]')?.content;
    const fetchHeaders = {
        'Accept': 'application/json',
        'X-Requested-With': 'XMLHttpRequest'
    };

    // Only run if we are on the profile page
    if (document.getElementById('section-profile-info')) {
        window.fetchProfileInfo();
    }

    // Helper to handle form errors dynamically
    function handleFormErrors(data, status, errorElementId, fallbackMessage) {
        const errorEl = document.getElementById(errorElementId);
        if (!errorEl) return;
        
        errorEl.classList.remove('hidden', 'text-green-500');
        errorEl.classList.add('text-red-500');

        if (status === 422 && data.errors) {
            // Get the first error message from the Laravel validation errors array
            errorEl.innerText = Object.values(data.errors)[0][0];
        } else {
            errorEl.innerText = data.message || fallbackMessage;
        }
    }

    // Helper to show success messages inline
    function showFormSuccess(errorElementId, message) {
        const errorEl = document.getElementById(errorElementId);
        if (!errorEl) return;
        
        errorEl.classList.remove('hidden', 'text-red-500');
        errorEl.classList.add('text-green-500');
        errorEl.innerText = message;
        
        // Hide success message after 3 seconds
        setTimeout(() => { errorEl.classList.add('hidden'); }, 3000);
    }

    // ==========================================
    // 1. COVER PHOTO SUBMISSION
    // ==========================================
    const coverForm = document.getElementById('form-cover-photo');
    if (coverForm) {
        coverForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(coverForm);

            try {
                const response = await fetch('/profile/cover', {
                    method: 'POST',
                    body: formData,
                    headers: { ...fetchHeaders, 'X-CSRF-TOKEN': getCsrfToken() }
                });
                const data = await response.json();

                if (response.status === 422 || !data.status) {
                    handleFormErrors(data, response.status, 'error-cover-photo', 'Cover upload failed.');
                } else if (data.status) {
                    const coverContainer = document.getElementById('input-cover-photo').parentElement;
                    if (coverContainer) {
                        coverContainer.style.backgroundImage = `url('${data.image_url}')`;
                        coverContainer.style.backgroundSize = 'cover';
                        coverContainer.style.backgroundPosition = 'center';
                    }
                    coverForm.reset();
                    showFormSuccess('error-cover-photo', 'Cover photo updated!');
                }
            } catch (err) { handleFormErrors({}, 500, 'error-cover-photo', 'Connection error.'); }
        });
    }

    // ==========================================
    // 2. AVATAR PHOTO SUBMISSION
    // ==========================================
    const avatarForm = document.getElementById('form-avatar');
    if (avatarForm) {
        avatarForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(avatarForm);

            try {
                const response = await fetch('/profile/avatar', {
                    method: 'POST',
                    body: formData,
                    headers: { ...fetchHeaders, 'X-CSRF-TOKEN': getCsrfToken() }
                });
                const data = await response.json();

                if (response.status === 422 || !data.status) {
                    handleFormErrors(data, response.status, 'error-avatar-photo', 'Avatar upload failed.');
                } else if (data.status) {
                    const avatarImg = document.getElementById('display-avatar');
                    if (avatarImg) avatarImg.src = data.image_url;
                    avatarForm.reset();
                    showFormSuccess('error-avatar-photo', 'Profile picture updated!');
                }
            } catch (err) { handleFormErrors({}, 500, 'error-avatar-photo', 'Connection error.'); }
        });
    }

    // ==========================================
    // 3. REMOVE AVATAR BUTTON
    // ==========================================
    const removeAvatarBtn = document.getElementById('btn-remove-avatar');
    if (removeAvatarBtn) {
        removeAvatarBtn.addEventListener('click', async () => {
            try {
                const response = await fetch('/profile/avatar/remove', {
                    method: 'POST',
                    headers: { ...fetchHeaders, 'Content-Type': 'application/json', 'X-CSRF-TOKEN': getCsrfToken() }
                });
                const data = await response.json();

                if (data.status) {
                    const avatarImg = document.getElementById('display-avatar');
                    if (avatarImg && data.name) {
                        avatarImg.src = `https://ui-avatars.com/api/?name=${encodeURIComponent(data.name)}&background=f3e8ff&color=6300B3&size=150`;
                    }
                    showFormSuccess('error-avatar-photo', 'Profile picture removed!');
                }
            } catch (err) { handleFormErrors({}, 500, 'error-avatar-photo', 'Failed to remove photo.'); }
        });
    }

    // ==========================================
    // 4. GENERAL INFO SUBMISSION
    // ==========================================
    const infoForm = document.getElementById('form-general-info');
    if (infoForm) {
        infoForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            // Clear all previous specific errors
            document.querySelectorAll('#form-general-info p[id^="error-info-"]').forEach(el => el.classList.add('hidden'));

            const formData = new FormData(infoForm);
            
            try {
                const response = await fetch('/profile/info', {
                    method: 'POST',
                    body: formData,
                    headers: { ...fetchHeaders, 'X-CSRF-TOKEN': getCsrfToken() }
                });
                const data = await response.json();

                if (response.status === 422) {
                    // Target specific fields based on Laravel error keys
                    Object.keys(data.errors).forEach(key => {
                        const errorEl = document.getElementById(`error-info-${key.replace('_', '-')}`);
                        if (errorEl) {
                            errorEl.innerText = data.errors[key][0];
                            errorEl.classList.remove('hidden', 'text-green-500');
                            errorEl.classList.add('text-red-500');
                        }
                    });
                } else if (data.status) {
                    // Use the headline error slot to show a general success message
                    showFormSuccess('error-info-headline', data.message);
                }
            } catch (err) { handleFormErrors({}, 500, 'error-info-headline', 'Connection error.'); }
        });
    }

    const resumeForm = document.getElementById('form-resume');
    if (resumeForm) {
        resumeForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(resumeForm);

            try {
                const response = await fetch('/profile/resume', {
                    method: 'POST',
                    body: formData,
                    headers: { ...fetchHeaders, 'X-CSRF-TOKEN': getCsrfToken() }
                });
                const data = await response.json();

                if (response.status === 422 || !data.status) {
                    handleFormErrors(data, response.status, 'error-resume', 'Resume upload failed.');
                } else if (data.status) {
                    const resumeDisplay = document.getElementById('display-resume-name');
                    if (resumeDisplay) {
                        resumeDisplay.innerText = `Currently uploaded: ${data.filename}`;
                        resumeDisplay.classList.remove('text-gray-400');
                        resumeDisplay.classList.add('text-brand-purple', 'font-medium');
                    }
                    resumeForm.reset();
                    showFormSuccess('error-resume', 'Resume uploaded successfully!');
                }
            } catch (err) { handleFormErrors({}, 500, 'error-resume', 'Connection error.'); }
        });
    }
});

// ==========================================
// 6. INITIAL DATA FETCH
// ==========================================
window.fetchProfileInfo = async function() {
    try {
        const response = await fetch('/profile/get-info', {
            method: 'GET',
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        });
        const data = await response.json();

        if (data.status) {
            if (data.info) {
                const hInput = document.getElementById('info-headline');
                const sSelect = document.getElementById('info-status');
                const locInput = document.getElementById('info-location');
                const bioText = document.getElementById('info-bio');
                const lnInput = document.getElementById('info-linkedin');
                const ghInput = document.getElementById('info-github');
                const fbInput = document.getElementById('info-facebook');
                const igInput = document.getElementById('info-instagram');

                if (hInput) hInput.value = data.info.professional_headline || '';
                if (sSelect) sSelect.value = data.info.availability_status || '';
                if (locInput) locInput.value = data.info.location || '';
                if (bioText) bioText.value = data.info.about_me || '';
                if (lnInput) lnInput.value = data.info.linkedin || '';
                if (ghInput) ghInput.value = data.info.github || '';
                if (fbInput) fbInput.value = data.info.facebook || '';
                if (igInput) igInput.value = data.info.instagram || '';
            }

            const avatarImg = document.getElementById('display-avatar');
            if (avatarImg) {
                if (data.info && data.info.avatar_photo) {
                    avatarImg.src = `/storage/${data.info.avatar_photo}`;
                } else if (data.user && data.user.name) {
                    avatarImg.src = `https://ui-avatars.com/api/?name=${encodeURIComponent(data.user.name)}&background=f3e8ff&color=6300B3&size=150`;
                }
            }

            if (data.info && data.info.cover_photo) {
                const coverContainer = document.getElementById('input-cover-photo')?.parentElement;
                if (coverContainer) {
                    coverContainer.style.backgroundImage = `url('/storage/${data.info.cover_photo}')`;
                    coverContainer.style.backgroundSize = 'cover';
                    coverContainer.style.backgroundPosition = 'center';
                }
            }

            if (data.info && data.info.resume) {
                const resumeDisplay = document.getElementById('display-resume-name');
                if (resumeDisplay) {
                    const fileName = data.info.resume.split('/').pop();
                    resumeDisplay.innerText = `Currently uploaded: ${fileName}`;
                    resumeDisplay.classList.remove('text-gray-400');
                    resumeDisplay.classList.add('text-brand-purple', 'font-medium');
                }
            }
        }
    } catch (error) { console.error("Failed to load profile:", error); }
};