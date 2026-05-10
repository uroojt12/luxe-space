<!-- header -->
 <header class="ease"> 
    <div class="contain">
        <div class="logo">
            <a href="index.php" style="display:block;">
                <img src="images/logo-1.png" alt="">
            </a>
        </div>
        <div class="toggle">
            <span></span>
        </div>
        <nav class="ease">
            <div nav>
                <ul id="nav">
                    <li>
                        <a class="<?=($page == 'index' || $page == '') ? 'active' : '' ?>" href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php" class="<?=($page == 'about') ? 'active' : '' ?>">About
                        </a>
                    </li>
                    <li>
                        <a href="pricing.php" class="<?=($page == 'service') ? 'active' : '' ?>">Pricing
                        </a>
                    </li>
                    <li>
                        <a href="booking.php" class="<?=($page == 'fleet') ? 'active' : '' ?>">Booking
                        </a>
                    </li>
                    <li>
                        <a href="faq.php" class="<?=($page == 'training') ? 'active' : '' ?>">faq</a>
                    </li>
                    <li>
                        <a href="contact.php" class="<?=($page == 'training') ? 'active' : '' ?>">Contact</a>
                    </li>
                </ul>
                <div id="cta">
                        <a href="booking.php" class="webBtn colorBtn" class="<?=($page == 'contact') ? 'active' : '' ?>">
                            Book Now
                        </a>
                </div>
            </div>
        </nav>
    </div>
</header>