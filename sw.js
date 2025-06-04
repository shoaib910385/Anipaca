// Define a cache name
const CACHE_NAME = 'anime-site-cache-v1';

// List of URLs to cache
const urlsToCache = [
    '/',
    '/index.php',
    '/src/assets/css/home.css',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',
    'https://use.fontawesome.com/releases/v5.3.1/css/all.css',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css',
    'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',
    // Add more assets as needed
];

// Install event - caching the assets
self.addEventListener('install', event => {
    console.log('Service worker installed'); // Add this line
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(cache => {
                console.log('Opened cache');
                return cache.addAll(urlsToCache);
            })
    );
});

// Fetch event - serving cached content when offline
self.addEventListener('fetch', event => {
    console.log('Fetching:', event.request.url); // Add this line
    event.respondWith(
        caches.match(event.request)
            .then(response => {
                if (response) {
                    console.log('Cache hit for:', event.request.url); // Add this line
                    return response;
                }
                console.log('Cache miss for:', event.request.url); // Add this line
                return fetch(event.request);
            })
    );
});

// Activate event - cleaning up old caches
self.addEventListener('activate', event => {
    console.log('Service worker activated'); // Add this line
    const cacheWhitelist = [CACHE_NAME];
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames.map(cacheName => {
                    if (cacheWhitelist.indexOf(cacheName) === -1) {
                        console.log('Deleting old cache:', cacheName); // Add this line
                        return caches.delete(cacheName);
                    }
                })
            );
        })
    );
});