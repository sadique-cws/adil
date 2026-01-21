import "./bootstrap";

// Define functions in global module scope or outside the DOMContentLoaded listener 
// to avoid nesting issues and clean up structure.

// Quick Form Validation (Originally was inline separate from setupValidation function,
// but now that we have a generic setupValidation, we can try to unify,
// or keep the specific quick-form logic if it was heavily customized.)
// Based on the code, there was a specific block for .quick-form inside the listener,
// and then a generic setupValidation function.
// Let's make a setupQuickForm function.

const setupQuickForm = () => {
    const quickForm = document.querySelector(".quick-form");
    if (!quickForm) return;
    
    // Check if it's the one handled by setupValidation?
    // The previous code had specific logic for .quick-form separate from setupValidation.
    // However, looking at the previous code, the specific block was huge.
    // Let's restore the logic but wrap it cleanly.
    
    setupValidation(quickForm);
};

/* --- Quote Modal Logic --- */
function setupModal() {
    const openModalBtn = document.getElementById('openQuoteModal');
    const modal = document.getElementById('quoteModal');
    const closeModalBtn = document.querySelector('.close-modal');
    const quoteForm = document.querySelector('.quote-form');

    if (openModalBtn && modal) {
        // Open
        openModalBtn.addEventListener('click', (e) => {
            e.preventDefault();
            modal.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        });

        // Close functions
        const closeModal = () => {
            modal.classList.remove('active');
            document.body.style.overflow = '';
        };

        if (closeModalBtn) closeModalBtn.addEventListener('click', closeModal);
        
        // Close on clicking outside
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModal();
        });

        // Initialize validation for the modal form too
        if (quoteForm) {
            setupValidation(quoteForm);
        }
    }
}

// Generic Validation Setup
function setupValidation(formElement) {
    if (!formElement) return;

    const inputs = formElement.querySelectorAll('input, select');
    const submitBtn = formElement.querySelector('.btn-submit');
    
    if (!submitBtn) return;

    const validators = {
        name: { validate: (val) => val.length >= 3, message: 'Minimum 3 characters' },
        tel: { validate: (val) => /^[6-9]\d{9}$/.test(val), message: 'Valid 10-digit number' },
        'select-one': { validate: (val) => val !== '', message: 'Selection required' },
        text: { validate: (val) => true, message: '' } // Optional fields
    };

    inputs.forEach(input => {
        // Add error message span if not exists
        if (!input.parentElement.querySelector('.error-message')) {
            const errorSpan = document.createElement('span');
            errorSpan.className = 'error-message';
            input.parentElement.appendChild(errorSpan);
        }
        
        input.addEventListener('input', () => validateField(input));
        input.addEventListener('blur', () => validateField(input));
    });

    function validateField(input) {
        if(input.placeholder && input.placeholder.includes('Optional')) return true;

        const parent = input.parentElement;
        const errorMsg = parent.querySelector('.error-message');
        
        let isValid = false;
        let message = '';
        
        if (input.tagName === 'SELECT') {
            isValid = validators['select-one'].validate(input.value);
            message = validators['select-one'].message;
        } else if (input.type === 'tel') {
            isValid = validators['tel'].validate(input.value);
            message = validators['tel'].message;
        } else { // text
            if(input.placeholder && input.placeholder.includes('Optional')) {
                isValid = true;
            } else {
                isValid = validators['name'].validate(input.value);
                message = validators['name'].message;
            }
        }

        if (isValid) {
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
            parent.classList.remove('error');
        } else {
            input.classList.remove('is-valid');
            if (input.value.length > 0) {
                input.classList.add('is-invalid');
                if(errorMsg) errorMsg.textContent = message;
                parent.classList.add('error');
            } else {
                input.classList.remove('is-invalid');
                parent.classList.remove('error');
            }
        }
        checkFormValidity();
    }

    function checkFormValidity() {
        const requiredInputs = Array.from(inputs).filter(i => !i.placeholder || !i.placeholder.includes('Optional'));
        const allValid = requiredInputs.every(input => input.classList.contains('is-valid'));
        
        if (allValid) {
            submitBtn.style.opacity = '1';
            submitBtn.style.pointerEvents = 'all';
        } else {
            submitBtn.style.opacity = '0.7';
        }
    }

    // Only add submit listener if one doesn't exist? 
    // Actually, simple cloneNode or flag is safer to avoid duplicates if called multiple times,
    // but here we call it once per form.
    formElement.addEventListener('submit', async (e) => {
        e.preventDefault();
        inputs.forEach(input => validateField(input));
        
        const requiredInputs = Array.from(inputs).filter(i => !i.placeholder || !i.placeholder.includes('Optional'));
        const allValid = requiredInputs.every(input => input.classList.contains('is-valid'));

        if (allValid) {
            const btnContent = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitBtn.style.opacity = '1';
            
            const formData = new FormData();
            
            let type = 'quick';
            if(formElement.classList.contains('quote-form')) type = 'quote';
            if(formElement.classList.contains('contact-page-form')) type = 'contact';
            
            // Generic Value Getter
            const getVal = (placeholderPart) => {
                const input = Array.from(inputs).find(i => i.placeholder && i.placeholder.includes(placeholderPart));
                return input ? input.value : '';
            };
            
            formData.append('name', getVal('Name'));
            formData.append('phone', getVal('Mobile') || getVal('Phone'));
            formData.append('email', formElement.querySelector('input[type="email"]')?.value || '');
            formData.append('message', getVal('Description') || getVal('Message') || '');
            formData.append('type', type);
            
            const select = formElement.querySelector('select');
            if(select) formData.append('subject', select.value);

            const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

            try {
                const response = await fetch('/contact-submit', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': token,
                        'Accept': 'application/json'
                    },
                    body: formData
                });
                
                const result = await response.json();

                if (response.ok) {
                     submitBtn.innerHTML = '<i class="fas fa-check"></i> Sent!';
                     submitBtn.style.background = '#22c55e';
                     formElement.reset();
                     inputs.forEach(i => i.classList.remove('is-valid'));
                     
                     setTimeout(() => {
                        submitBtn.innerHTML = btnContent;
                        submitBtn.style.background = '';
                        submitBtn.style.opacity = '0.7';
                        if(formElement.classList.contains('quote-form')) {
                            document.querySelector('.close-modal').click();
                        }
                    }, 3000);
                } else {
                     submitBtn.innerHTML = 'Failed. Try Again.';
                     submitBtn.style.background = '#ef4444';
                     console.error(result);
                     setTimeout(() => {
                        submitBtn.innerHTML = btnContent;
                        submitBtn.style.background = '';
                     }, 3000);
                }
            } catch (error) {
                console.error('Error:', error);
                submitBtn.innerHTML = 'Error!';
                submitBtn.style.background = '#ef4444';
            }
        }
    });
}

// Lightbox Functionality
const setupLightbox = () => {
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const closeBtn = document.querySelector('.lightbox-close');
    const prevBtn = document.querySelector('.lightbox-prev');
    const nextBtn = document.querySelector('.lightbox-next');
    
    if (!lightbox) return;

    const galleryImages = Array.from(document.querySelectorAll('.gallery-item img, .service-card img'));

    let currentIndex = 0;

    const openLightbox = (index) => {
        currentIndex = index;
        const img = galleryImages[currentIndex];
        let src = img.src;
        if(src.includes('images.unsplash.com')) {
           src = src.replace('w=800', 'w=1600').replace('q=80', 'q=90');
        }
        lightboxImg.src = src;
        lightbox.classList.add('active');
    };

    const closeLightbox = () => {
        lightbox.classList.remove('active');
        setTimeout(() => lightboxImg.src = '', 300);
    };

    const nextImage = () => {
        currentIndex = (currentIndex + 1) % galleryImages.length;
        openLightbox(currentIndex);
    };

    const prevImage = () => {
        currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
        openLightbox(currentIndex);
    };

    galleryImages.forEach((img, index) => {
        img.addEventListener('click', () => openLightbox(index));
        img.style.cursor = 'pointer';
    });

    if(closeBtn) closeBtn.addEventListener('click', closeLightbox);
    if(nextBtn) nextBtn.addEventListener('click', (e) => { e.stopPropagation(); nextImage(); });
    if(prevBtn) prevBtn.addEventListener('click', (e) => { e.stopPropagation(); prevImage(); });
    
    lightbox.addEventListener('click', (e) => {
        if(e.target === lightbox) closeLightbox();
    });

    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('active')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowRight') nextImage();
        if (e.key === 'ArrowLeft') prevImage();
    });
};

// Main Initialization
document.addEventListener('DOMContentLoaded', () => {
    // Initialize Quick Form if it exists
    setupQuickForm();
    
    // Initialize Modal
    setupModal();
    
    // Initialize Lightbox
    setupLightbox();
    
    // Also initialize validation for contact page form specifically if it exists
    const contactForm = document.querySelector('.contact-page-form');
    if (contactForm) {
        setupValidation(contactForm);
    }
});
