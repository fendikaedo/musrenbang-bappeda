        document.addEventListener("DOMContentLoaded", function() {
            const steps = document.querySelectorAll('.step');
            const nextButtons = document.querySelectorAll('.next-step');
            const prevButtons = document.querySelectorAll('.prev-step');

            let currentStep = 0;

            nextButtons.forEach(button => {
                button.addEventListener('click', function() {
                    if (currentStep < steps.length - 1) {
                        steps[currentStep].style.display = 'none';
                        steps[currentStep + 1].style.display = 'block';
                        currentStep++;
                        updateNavigationButtons();
                    }
                });
            });

            prevButtons.forEach(button => {
                button.addEventListener('click', function() {
                    if (currentStep > 0) {
                        steps[currentStep].style.display = 'none';
                        steps[currentStep - 1].style.display = 'block';
                        currentStep--;
                        updateNavigationButtons();
                    }
                });
            });

            function updateNavigationButtons() {
                if (currentStep === 0) {
                    document.querySelector('.previous-step').style.display = 'none';
                } else {
                    document.querySelector('.previous-step').style.display = 'block';
                }

                if (currentStep === steps.length - 1) {
                    document.querySelector('.next-step').style.display = 'none';
                } else {
                    document.querySelector('.next-step').style.display = 'block';
                }
            }
        });
