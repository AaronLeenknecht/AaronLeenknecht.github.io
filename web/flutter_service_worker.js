'use strict';
const CACHE_NAME = 'flutter-app-cache';
const RESOURCES = {
  "assets/AssetManifest.json": "8a3dfa76debe7a45596a0236068a1fe8",
"assets/assets/EvergreenB1.jpg": "367d159167ab28ba67bd7fc515205787",
"assets/assets/EvergreenHeader1920x656.png": "a827943d44100b36833b87c7ce5ef92f",
"assets/assets/IMFellFrenchCanonSC-Regular.ttf": "8e8fd3fa6c0fb1110b0bd49db6218551",
"assets/FontManifest.json": "f943ba1f719ec3a19165089053bd591d",
"assets/fonts/MaterialIcons-Regular.ttf": "56d3ffdef7a25659eab6a68a3fbfaf16",
"assets/LICENSE": "dff6f6304c99348819212bcf1de1e88d",
"assets/packages/cupertino_icons/assets/CupertinoIcons.ttf": "115e937bb829a890521f72d2e664b632",
"favicon.png": "5dcef449791fa27946b3d35ad8803796",
"icons/Icon-192.png": "ac9a721a12bbc803b44f645561ecb1e1",
"icons/Icon-512.png": "96e752610906ba2a93c65f8abe1645f1",
"index.html": "77832d7eee035bc551578f7082028873",
"/": "77832d7eee035bc551578f7082028873",
"main.dart.js": "9b4ecccb3af50c0db9ce861879012498",
"manifest.json": "7254ec5c57580afe5157028368be310d"
};

self.addEventListener('activate', function (event) {
  event.waitUntil(
    caches.keys().then(function (cacheName) {
      return caches.delete(cacheName);
    }).then(function (_) {
      return caches.open(CACHE_NAME);
    }).then(function (cache) {
      return cache.addAll(Object.keys(RESOURCES));
    })
  );
});

self.addEventListener('fetch', function (event) {
  event.respondWith(
    caches.match(event.request)
      .then(function (response) {
        if (response) {
          return response;
        }
        return fetch(event.request);
      })
  );
});
