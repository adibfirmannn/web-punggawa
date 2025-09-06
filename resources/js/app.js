// Sidebar minimize/expand functionality
function expandSidebar() {
    console.log('expandSidebar called');
    const sidebar = document.getElementById('adminSidebar');
    const mainContent = document.getElementById('mainContent');
    
    if (sidebar && mainContent) {
        console.log('Expanding sidebar');
        sidebar.classList.remove('minimized');
        mainContent.style.marginLeft = '280px';
        
        // Show text elements
        const logoText = sidebar.querySelector('.logo-text');
        const navTexts = sidebar.querySelectorAll('.nav-text');
        const logoutText = sidebar.querySelector('.logout-text');
        
        if (logoText) logoText.style.display = 'flex';
        navTexts.forEach(text => text.style.display = 'block');
        if (logoutText) logoutText.style.display = 'block';
    } else {
        console.log('Sidebar or mainContent not found');
    }
}

function minimizeSidebar() {
    console.log('minimizeSidebar called');
    const sidebar = document.getElementById('adminSidebar');
    const mainContent = document.getElementById('mainContent');
    
    if (sidebar && mainContent) {
        console.log('Minimizing sidebar');
        sidebar.classList.add('minimized');
        mainContent.style.marginLeft = '70px';
        
        // Hide text elements
        const logoText = sidebar.querySelector('.logo-text');
        const navTexts = sidebar.querySelectorAll('.nav-text');
        const logoutText = sidebar.querySelector('.logout-text');
        
        if (logoText) logoText.style.display = 'none';
        navTexts.forEach(text => text.style.display = 'none');
        if (logoutText) logoutText.style.display = 'none';
    } else {
        console.log('Sidebar or mainContent not found');
    }
}

// Mobile toggle functionality
function toggleSidebar() {
    console.log('toggleSidebar called');
    const sidebar = document.getElementById('adminSidebar');
    const overlay = document.getElementById('mobileOverlay');
    
    console.log('Sidebar element:', sidebar);
    console.log('Overlay element:', overlay);
    
    if (sidebar && overlay) {
        const isOpen = sidebar.classList.contains('open');
        console.log('Current state - isOpen:', isOpen);
        
        if (isOpen) {
            // Close sidebar
            sidebar.classList.remove('open');
            overlay.classList.remove('active');
            overlay.classList.remove('show');
            overlay.style.display = 'none';
            console.log('Sidebar closed');
        } else {
            // Open sidebar
            sidebar.classList.add('open');
            overlay.classList.add('active');
            overlay.classList.add('show');
            overlay.style.display = 'block';
            console.log('Sidebar opened');
        }
    } else {
        console.log('Sidebar or overlay not found');
    }
}

function closeSidebar() {
    console.log('closeSidebar called');
    const sidebar = document.getElementById('adminSidebar');
    const overlay = document.getElementById('mobileOverlay');
    
    if (sidebar && overlay) {
        sidebar.classList.remove('open');
        overlay.classList.remove('active');
        overlay.classList.remove('show');
        overlay.style.display = 'none';
        console.log('Sidebar closed via closeSidebar');
    }
}

// Check if device is mobile/tablet
function isMobileOrTablet() {
    return window.innerWidth <= 1024;
}

// Initialize sidebar as minimized
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM Content Loaded - Initializing sidebar');
    const sidebar = document.getElementById('adminSidebar');
    const mainContent = document.getElementById('mainContent');
    const overlay = document.getElementById('mobileOverlay');
    
    console.log('Sidebar element:', sidebar);
    console.log('MainContent element:', mainContent);
    
    if (sidebar && mainContent) {
        console.log('Initializing sidebar...');
        
        // Check if mobile/tablet
        if (isMobileOrTablet()) {
            console.log('Mobile/Tablet detected - using mobile mode');
            sidebar.classList.add('minimized');
            sidebar.classList.remove('open');
            mainContent.style.marginLeft = '0';
            if (overlay) {
                overlay.style.display = 'none';
                overlay.classList.remove('active', 'show');
            }
        } else {
            console.log('Desktop detected - using desktop mode');
            // Force minimized state for desktop
            sidebar.classList.add('minimized');
            mainContent.style.marginLeft = '70px';
            
            // Ensure text is hidden
            const logoText = sidebar.querySelector('.logo-text');
            const navTexts = sidebar.querySelectorAll('.nav-text');
            const logoutText = sidebar.querySelector('.logout-text');
            
            if (logoText) logoText.style.display = 'none';
            navTexts.forEach(text => text.style.display = 'none');
            if (logoutText) logoutText.style.display = 'none';
        }
        
        // Add click event listeners to nav links
        const navLinks = sidebar.querySelectorAll('.nav-link');
        console.log('Found nav links:', navLinks.length);
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                console.log('Nav link clicked:', this.textContent.trim());
                
                // Close sidebar on mobile after click
                if (isMobileOrTablet()) {
                    closeSidebar();
                }
                
                // Add your navigation logic here
            });
        });
        
        // Add click event listener to logout link
        const logoutLink = sidebar.querySelector('.logout-link');
        if (logoutLink) {
            logoutLink.addEventListener('click', function(e) {
                e.preventDefault();
                console.log('Logout clicked');
                
                // Close sidebar on mobile after click
                if (isMobileOrTablet()) {
                    closeSidebar();
                }
                
                // Add your logout logic here
            });
        }
        
        // Handle window resize
        window.addEventListener('resize', function() {
            console.log('Window resized to:', window.innerWidth);
            if (isMobileOrTablet()) {
                console.log('Switching to mobile mode');
                sidebar.classList.add('minimized');
                sidebar.classList.remove('open');
                mainContent.style.marginLeft = '0';
                if (overlay) {
                    overlay.style.display = 'none';
                    overlay.classList.remove('active', 'show');
                }
            } else {
                console.log('Switching to desktop mode');
                sidebar.classList.add('minimized');
                mainContent.style.marginLeft = '70px';
                
                // Ensure text is hidden on desktop
                const logoText = sidebar.querySelector('.logo-text');
                const navTexts = sidebar.querySelectorAll('.nav-text');
                const logoutText = sidebar.querySelector('.logout-text');
                
                if (logoText) logoText.style.display = 'none';
                navTexts.forEach(text => text.style.display = 'none');
                if (logoutText) logoutText.style.display = 'none';
            }
        });
        
        console.log('Sidebar initialization complete');
    } else {
        console.log('Sidebar or mainContent not found during initialization');
    }
});