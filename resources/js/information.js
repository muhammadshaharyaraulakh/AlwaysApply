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
            // 1. POPULATE TEXT FIELDS
            if (data.info) {
                const headlineInput = document.getElementById('info-headline');
                const statusSelect = document.getElementById('info-status');
                const locationInput = document.getElementById('info-location');
                const bioTextarea = document.getElementById('info-bio');
                const linkedinInput = document.getElementById('info-linkedin');
                const githubInput = document.getElementById('info-github');
                const facebookInput = document.getElementById('info-facebook');
                const instagramInput = document.getElementById('info-instagram');

                if (headlineInput) headlineInput.value = data.info.professional_headline || '';
                if (statusSelect) statusSelect.value = data.info.availability_status || '';
                if (locationInput) locationInput.value = data.info.location || '';
                if (bioTextarea) bioTextarea.value = data.info.about_me || '';
                
                if (linkedinInput) linkedinInput.value = data.info.linkedin || '';
                if (githubInput) githubInput.value = data.info.github || '';
                if (facebookInput) facebookInput.value = data.info.facebook || '';
                if (instagramInput) instagramInput.value = data.info.instagram || '';
            }

            // 2. DISPLAY AVATAR
            const avatarImg = document.getElementById('display-avatar');
            if (avatarImg) {
                if (data.info && data.info.avatar_photo) {
                    // Show uploaded avatar (Assuming Laravel storage link)
                    avatarImg.src = `/storage/${data.info.avatar_photo}`;
                } else if (data.user && data.user.name) {
                    // Keep default UI, but use their actual name for the initials!
                    avatarImg.src = `https://ui-avatars.com/api/?name=${encodeURIComponent(data.user.name)}&background=f3e8ff&color=6300B3&size=150`;
                }
            }

            // 3. DISPLAY COVER PHOTO
            if (data.info && data.info.cover_photo) {
                // Grab the container element that wraps the cover photo input
                const coverContainer = document.getElementById('input-cover-photo')?.parentElement;
                if (coverContainer) {
                    coverContainer.style.backgroundImage = `url('/storage/${data.info.cover_photo}')`;
                    coverContainer.style.backgroundSize = 'cover';
                    coverContainer.style.backgroundPosition = 'center';
                }
            }

            // 4. DISPLAY RESUME FILE NAME
            if (data.info && data.info.resume) {
                const resumeDisplay = document.getElementById('display-resume-name');
                if (resumeDisplay) {
                    // Extract just the filename from the path (e.g., 'uploads/resumes/my_cv.pdf' -> 'my_cv.pdf')
                    const fileName = data.info.resume.split('/').pop();
                    resumeDisplay.innerText = `Currently uploaded: ${fileName}`;
                    
                    // Make it look a bit more prominent to show it exists
                    resumeDisplay.classList.remove('text-gray-400');
                    resumeDisplay.classList.add('text-brand-purple', 'font-medium');
                }
            }
        }
    } catch (error) {
        console.error("Failed to load profile information:", error);
    }
};