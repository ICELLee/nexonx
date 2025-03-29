<div class="mb-8">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h3 class="text-xl font-bold text-indigo-600">{{ __('Featured Players') }}</h3>
        <div class="text-sm text-gray-600">
            <i class="fas fa-spinner fa-spin text-purple-400 mr-1"></i>
            {{ __('Showing') }} <span class="font-medium">6</span> {{ __('of') }} <span class="font-medium">1245</span> {{ __('players') }}
        </div>
    </div>

    <!-- Players Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Player Cards with Icons -->
        <div class="player-card">
            <div class="player-avatar">
                <img src="{{ asset('images/friendfinder/user1.jpg') }}" alt="User Avatar">
                <div class="player-level level-1-10">Level 8</div>
            </div>
            <div class="player-info">
                <h4>NewbiePlayer</h4>
                <p>Just started playing</p>
                <div class="social-icons">
                    <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon discord"><i class="fab fa-discord"></i></a>
                    <a href="#" class="social-icon snapchat"><i class="fab fa-snapchat"></i></a>
                </div>
            </div>
        </div>
        <div class="player-card">
            <div class="player-avatar">
                <img src="{{ asset('images/friendfinder/user1.jpg') }}" alt="User Avatar">
                <div class="player-level level-11-30">Level 21</div>
            </div>
            <div class="player-info">
                <h4>NewbiePlayer</h4>
                <p>Just started playing</p>
                <div class="social-icons">
                    <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon discord"><i class="fab fa-discord"></i></a>
                    <a href="#" class="social-icon snapchat"><i class="fab fa-snapchat"></i></a>
                </div>
            </div>
        </div>
        <!-- Player Cards with Icons -->
        <div class="player-card">
            <div class="player-avatar">
                <img src="{{ asset('images/friendfinder/user1.jpg') }}" alt="User Avatar">
                <div class="player-level level-31-50">Level 34</div>
            </div>
            <div class="player-info">
                <h4>NewbiePlayer</h4>
                <p>Just started playing</p>
                <div class="social-icons">
                    <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon discord"><i class="fab fa-discord"></i></a>
                    <a href="#" class="social-icon snapchat"><i class="fab fa-snapchat"></i></a>
                </div>
            </div>
        </div>
        <!-- Player Cards with Icons -->
        <div class="player-card">
            <div class="player-avatar">
                <img src="{{ asset('images/friendfinder/user1.jpg') }}" alt="User Avatar">
                <div class="player-level level-51-70">Level 65</div>
            </div>
            <div class="player-info">
                <h4>NewbiePlayer</h4>
                <p>Just started playing</p>
                <div class="social-icons">
                    <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon discord"><i class="fab fa-discord"></i></a>
                    <a href="#" class="social-icon snapchat"><i class="fab fa-snapchat"></i></a>
                </div>
            </div>
        </div>
        <!-- Player Cards with Icons -->
        <div class="player-card">
            <div class="player-avatar">
                <img src="{{ asset('images/friendfinder/user1.jpg') }}" alt="User Avatar">
                <div class="player-level level-71-90">Level 80</div>
            </div>
            <div class="player-info">
                <h4>NewbiePlayer</h4>
                <p>Just started playing</p>
                <div class="social-icons">
                    <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon discord"><i class="fab fa-discord"></i></a>
                    <a href="#" class="social-icon snapchat"><i class="fab fa-snapchat"></i></a>
                </div>
            </div>
        </div>
        <!-- Player Cards with Icons -->
        <div class="player-card">
            <div class="player-avatar">
                <img src="{{ asset('images/friendfinder/user1.jpg') }}" alt="User Avatar">
                <div class="player-level level-91-100">Level 100</div>
            </div>
            <div class="player-info">
                <h4>NewbiePlayer</h4>
                <p>Just started playing</p>
                <div class="social-icons">
                    <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon discord"><i class="fab fa-discord"></i></a>
                    <a href="#" class="social-icon snapchat"><i class="fab fa-snapchat"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Base Card Styles */
    .player-card {
        position: relative;
        background: #312e81; /* Dark theme */
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        border: 2px solid transparent; /* Initial transparent border for hover effect */
    }

    .player-avatar {
        position: relative;
        width: 100%;
        height: 180px;
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 0%, rgba(216,0,230,1) 77%);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .player-avatar img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 4px solid white;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .player-info {
        padding: 20px;
        text-align: center;
        color: #fff; /* White text */
    }

    .player-info h4 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .player-info p {
        font-size: 14px;
        color: #bbb; /* Light gray text */
        margin-bottom: 0;
    }

    .social-icons {
        margin-top: 10px;
    }

    .social-icon {
        margin: 0 8px;
        color: #fff;
        font-size: 18px;
        transition: color 0.3s ease;
    }

    .social-icon:hover {
        color: #a7a7f2;
    }

    .social-icon.instagram:hover {
        color: #E4405F; /* Instagram color */
    }

    .social-icon.discord:hover {
        color: #7289da; /* Discord color */
    }

    .social-icon.snapchat:hover {
        color: #FFFC00; /* Snapchat color */
    }

    /* Level Badge Styles */
    .player-level {
        position: absolute;
        bottom: 15px;
        left: 15px;
        color: white;
        padding: 5px 12px;
        border-radius: 15px;
        font-weight: bold;
        font-size: 14px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        animation: float 3s ease-in-out infinite;
    }

    /* Level 1-10 (Beginner) */
    .level-1-10 {
        background: linear-gradient(135deg, #8e9eab, #eef2f3);
        color: #333;
        border: 2px solid #ccc;
    }

    /* Level 11-30 (Apprentice) */
    .level-11-30 {
        background: linear-gradient(135deg, #56ccf2, #2f80ed);
        border: 2px solid #2f80ed;
        text-shadow: 0 1px 2px rgba(0,0,0,0.2);
    }

    /* Level 31-50 (Experienced) */
    .level-31-50 {
        background: linear-gradient(135deg, #a8ff78, #78ffd6);
        border: 2px solid #78ffd6;
        color: #1a5e1a;
        text-shadow: 0 1px 1px rgba(255,255,255,0.5);
        animation: pulse 2s infinite;
    }

    /* Level 51-70 (Advanced) */
    .level-51-70 {
        background: linear-gradient(135deg, #ff9a9e, #fad0c4);
        border: 2px solid #ff9a9e;
        text-shadow: 0 1px 2px rgba(0,0,0,0.2);
        animation: glow 2s infinite alternate;
    }

    /* Level 71-90 (Expert) */
    .level-71-90 {
        background: linear-gradient(135deg, #f857a6, #ff5858);
        border: 2px solid #ff5858;
        text-shadow: 0 1px 3px rgba(0,0,0,0.3);
        animation: pulse 1.5s infinite, float 3s ease-in-out infinite;
    }

    /* Level 91-100 (Legend) */
    .level-91-100 {
        background: linear-gradient(135deg, #ff00cc, #333399);
        border: 2px solid gold;
        text-shadow: 0 1px 3px rgba(0,0,0,0.4);
        animation:
            glow-gold 2s infinite alternate,
            float 3s ease-in-out infinite,
            shake 0.5s ease-in-out infinite;
        position: relative;
    }

    .level-91-100::after {
        content: '★';
        position: absolute;
        right: 8px;
        top: 50%;
        transform: translateY(-50%);
        color: gold;
        text-shadow: 0 0 5px rgba(255,215,0,0.7);
    }

    /* Neon Glow Border */
    .player-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        border: 2px solid #9b59b6; /* Neon Purple Border on Hover */
    }

    .player-card:hover .player-level {
        animation-play-state: paused;
    }

    /* Animations */
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    @keyframes glow {
        0% { box-shadow: 0 0 5px rgba(255,154,158,0.5); }
        100% { box-shadow: 0 0 15px rgba(255,154,158,0.8); }
    }

    @keyframes glow-gold {
        0% { box-shadow: 0 0 5px gold; }
        100% { box-shadow: 0 0 20px gold; }
    }

    @keyframes shake {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        25% { transform: translateY(-3px) rotate(2deg); }
        75% { transform: translateY(-3px) rotate(-2deg); }
    }
</style>
