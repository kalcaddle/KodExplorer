const cacheName = 'kodcloud';
const staticAssets = [];
self.addEventListener('install', async e => {
});
self.addEventListener('activate', e => {
    self.clients.claim();
});
self.addEventListener('fetch', async e => {
});