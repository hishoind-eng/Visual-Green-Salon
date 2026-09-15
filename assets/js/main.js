/* Smooth scroll for anchor links with cutting animation */

document.querySelectorAll('.salon-cut-btn').forEach(button => {

    button.addEventListener('click', function (e) {

        e.preventDefault();

        const target = this.getAttribute('href');

        /* Prevent double click */
        if (this.classList.contains('is-cutting')) return;

        this.classList.add('is-cutting');

        /* Wait until cutting animation finishes */
        setTimeout(() => {

            this.classList.remove('is-cutting');

            if (target && target.startsWith('#')) {

                const section = document.querySelector(target);

                if (section) {
                    section.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }

            } else if (target) {
                window.location.href = target;
            }

        }, 800);

    });

});