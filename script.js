let currentIndex = 0;
        const images = [
            'assets/kereta1.png',
            'assets/kereta2.png',
            'assets/kereta3.png'
        ];

        function imgSlider() {
            currentIndex = (currentIndex + 1) % images.length;
            const imageUrl = images[currentIndex];
            document.querySelector('.Kereta').src = imageUrl;
        }

        function prevImage() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            const imageUrl = images[currentIndex];
            document.querySelector('.Kereta').src = imageUrl;
        }

        // Auto slide every 3 seconds
        setInterval(imgSlider, 3000);