document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('createServiceModal');
    const openBtn = document.getElementById('createServiceBtn');
    const closeBtn = document.getElementById('closeModal');
    const cancelBtn = document.getElementById('cancelBtn');
    const backdrop = document.getElementById('modalBackdrop');
    const form = document.getElementById('createServiceForm');
    const saveBtn = document.getElementById('saveBtn');

    // Open modal
    openBtn.addEventListener('click', function() {
      modal.classList.remove('hidden');
      document.body.style.overflow = 'hidden';
    });

    // Close modal functions
    function closeModal() {
      modal.classList.add('hidden');
      document.body.style.overflow = 'auto';
      form.reset();
    }

    // Close modal event listeners
    closeBtn.addEventListener('click', closeModal);
    cancelBtn.addEventListener('click', closeModal);
    backdrop.addEventListener('click', closeModal);

    // Close modal on escape key
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
        closeModal();
      }
    });

    // Handle form submission
    saveBtn.addEventListener('click', function() {
      const formData = new FormData(form);
      const serviceData = Object.fromEntries(formData);
      
      // Here you would typically send the data to your backend
      console.log('Service Data:', serviceData);
      
      // For demo purposes, show success message
      alert('Service created successfully!');
      closeModal();
    });
  });