

document.addEventListener('DOMContentLoaded', () => {
  const logo = document.querySelector('#logo');
  const heading = document.querySelector('h1.fade-in');
  const images = document.querySelectorAll('.scroll-img');
  const sectionTitle = document.querySelector('.section-title');
  const sectionTexts = document.querySelectorAll('.section-text');
  const parallax = document.querySelector('.parallax');
  const parallaxBackground = document.querySelector('.parallax-background');
  const menuToggle = document.getElementById('menuToggle');
  const sidebar = document.getElementById('sidebar');
  let scrollAttempts = 0;
  let animationsComplete = false;
  let isProcessing = false;

  // Debugging
  console.log("Logo element found:", logo ? "Yes" : "No");
  if (!logo) console.error("Logo image not found. Check the src attribute or path (e.g., assets/img/black.png).");
  else console.log("Logo src:", logo.src);
  images.forEach((img, index) => {
    console.log(`Image ${index + 1} found:`, img ? "Yes" : "No", "Src:", img.src);
    if (!img.complete) console.error(`Image ${index + 1} failed to load. Check path: ${img.src}`);
  });

  // Initially hide heading and images
  heading.style.opacity = '0';
  images.forEach(img => img.style.opacity = '0');

  // Toggle sidebar
  menuToggle.addEventListener('click', (e) => {
    e.stopPropagation(); // Prevent click from bubbling to document
    sidebar.classList.toggle('active');
  });

  // Close sidebar when clicking outside
  document.addEventListener('click', (e) => {
    if (!sidebar.contains(e.target) && e.target !== menuToggle && sidebar.classList.contains('active')) {
      sidebar.classList.remove('active');
    }
  });

  // Function to handle scroll movements
  const handleScrollAttempt = (e) => {
    e.preventDefault();
    if (isProcessing || animationsComplete) return;

    isProcessing = true;
    console.log('Scroll attempt:', scrollAttempts);

    if (scrollAttempts === 0) {
      console.log("First scroll: Logo moves to top center");
      logo.classList.add('top-center');
      setTimeout(() => {
        console.log("Logo at top center with 100px, heading to display after 1s");
        setTimeout(() => {
          heading.classList.add('animate');
          console.log("Heading displayed");
        }, 1000); // 1s delay after logo movement
        scrollAttempts++;
        isProcessing = false;
      }, 2000); // 2s for logo movement
    } else if (scrollAttempts === 1) {
      console.log("Second scroll: Images displayed with floating animation");
      images.forEach((img, index) => {
        setTimeout(() => {
          img.classList.add('animate', 'hover-effect');
          console.log(`Animating Image ${index + 1} to position:`, img.src);
          if (getComputedStyle(img).opacity === '1') console.log(`Image ${index + 1} successfully animated`);
          else console.error(`Image ${index + 1} failed to animate`);
        }, index * 400);
      });
      setTimeout(() => {
        scrollAttempts++;
        isProcessing = false;
      }, 3200); // 2s slideIn + 0.4s * 7 delays
    } else if (scrollAttempts === 2) {
      console.log("Third scroll: Background zoom in");
      parallaxBackground.style.animation = 'zoomIn 2s ease-in-out forwards';
      setTimeout(() => {
        scrollAttempts++;
        isProcessing = false;
      }, 2000); // 2s for zoom in
    } else if (scrollAttempts === 3) {
      console.log("Fourth scroll: Unlock page scrolling");
      animationsComplete = true;
      document.body.style.overflow = 'auto';
      console.log("All animations complete, page scrolling enabled");
      isProcessing = false;
    }
  };

  // Handle next section animation
  const aboutObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const title = entry.target.querySelector('.section-title');
        title.classList.add('animate');
        let delay = 500;
        sectionTexts.forEach((text, index) => {
          setTimeout(() => text.classList.add('animate'), delay + (index * 300));
        });
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  aboutObserver.observe(document.querySelector('#about'));

  // Handle services section animation
  const servicesObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const cards = entry.target.querySelectorAll('.card');
        cards.forEach((card, index) => {
          setTimeout(() => {
            if (index % 2 === 0) {
              card.parentElement.classList.add('slide-left');
            } else {
              card.parentElement.classList.add('slide-right');
            }
          }, index * 200); // 200ms stagger between cards
        });
        observer.unobserve(entry.target); // Stop observing after animation
      }
    });
  }, { threshold: 0.5 });

  servicesObserver.observe(document.querySelector('#services'));

  // Mouse wheel scroll
  window.addEventListener('wheel', (e) => {
    if (!animationsComplete) handleScrollAttempt(e);
  }, { passive: false });

  // Touch scroll (mobile)
  window.addEventListener('touchmove', (e) => {
    if (!animationsComplete) handleScrollAttempt(e);
  }, { passive: false });
});
