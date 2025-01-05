export function initWelcomeAnimation() {
    function typeWriter(element, text, speed = 100, callback) {
        let i = 0;
        function type() {
            if (i < text.length) {
                element.innerHTML += text.charAt(i);
                i++;
                setTimeout(type, speed);
            } else if (callback) {
                callback();
            }
        }
        element.innerHTML = '';
        type();
    }

    function startAnimationSequence() {
        const welcomeHeading = document.querySelector('#hero h2');
        const welcomeText = welcomeHeading.textContent;
        const tagline = document.querySelector('#hero p');
        const taglineText = tagline.textContent;

        welcomeHeading.textContent = '';
        tagline.style.opacity = '0';

        typeWriter(welcomeHeading, welcomeText, 100, () => {
            tagline.style.transition = 'opacity 1s ease-in';
            tagline.style.opacity = '1';

            setTimeout(() => {
                tagline.textContent = '';
                typeWriter(tagline, taglineText, 50);
            }, 500);
        });
    }

    document.addEventListener('DOMContentLoaded', startAnimationSequence);
}
