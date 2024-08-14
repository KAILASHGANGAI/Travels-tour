<!-- Hotel Banner Section -->
<div class="hotel-banner">
    <div class="banner-content">
        <h1 class="banner-title">Welcome to Paradise Hotel</h1>
        <p class="banner-subtitle">Experience luxury and comfort at the heart of the city</p>
        <a href="#" class="banner-btn">Book Now</a>
    </div>
</div>
<style>
    /* Banner Container */
    .hotel-banner {
        position: relative;
        width: 100%;
        height: 80vh;
        background: url({{ asset('web/images/hotesl/1.avif') }}) no-repeat center center/cover;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Dark Overlay */
    .hotel-banner::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
    }

    /* Banner Content */
    .banner-content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: white;
    }

    /* Title */
    .banner-title {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    /* Subtitle */
    .banner-subtitle {
        font-size: 1.5rem;
        margin-bottom: 30px;
    }

    /* Button */
    .banner-btn {
        background-color: #ff6b6b;
        color: white;
        padding: 10px 20px;
        border-radius: 30px;
        text-transform: uppercase;
        font-weight: bold;
        transition: background-color 0.3s ease;
        text-decoration: none;
    }

    .banner-btn:hover {
        background-color: #ff4747;
    }

    @media (max-width: 768px) {
        .banner-title {
            font-size: 2rem;
        }

        .banner-subtitle {
            font-size: 1.2rem;
        }
    }
</style>